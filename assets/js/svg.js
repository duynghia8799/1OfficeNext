jQuery(document).ready(function ($) {
  // SVG Animation handling
  console.log("SVG Animation script loaded.");

  var $phoneContent = $("#phone-scrolling-content");
  if ($phoneContent.length > 0) {
    console.log("Phone content found, initiating animation.");
    
    // Ensure the parent is an SVG element that allows manipulation
    var domContent = $phoneContent[0];
    
    // Wait for the SVG to be fully rendered to get correct BBox
    setTimeout(function() {
      try {
        var bbox = domContent.getBBox();
        var contentHeight = bbox.height;
        // The visible height of the phone screen area (mask height)
        var viewportHeight = 520; // Approx based on frame (544 - 24)
        
        // Ensure content is taller than viewport before animating
        if (contentHeight <= viewportHeight) {
            console.log("Content is shorter than viewport, no animation needed.");
            return;
        }

        var maxScroll = contentHeight - viewportHeight;
        
        // Create a wrapper to move content
        var $wrapper = $(document.createElementNS("http://www.w3.org/2000/svg", "g"));
        $wrapper.attr("id", "phone-scroll-wrapper");
        
        // Insert wrapper before content
        $phoneContent.before($wrapper);
        $wrapper.append($phoneContent);
        
        console.log("Animation setup complete. Max Scroll:", maxScroll);

        // State Machine Variables
        var state = "AUTO_SCROLL"; // AUTO_SCROLL, INTERACTIVE, RESETTING
        var currentY = 0;
        // Calculate speed to finish in 10 seconds assuming 60fps
        // Speed = Distance / TotalFrames = maxScroll / (10 * 60)
        var autoScrollSpeed = maxScroll / 600; 
        var interactTimer = null;
        var dragging = false;
        var lastDragY = 0;

        // Apply transform
        function setTransform(y) {
            // Clamp y
            // moving up means negative Y
            // Max up movement is -maxScroll
            if (y > 0) y = 0;
            if (y < -maxScroll) y = -maxScroll;
            
            currentY = y;
            $wrapper.attr("transform", "translate(0, " + currentY + ")");
        }

        // Animation Loop
        function loop() {
            if (state === "AUTO_SCROLL") {
                var nextY = currentY - autoScrollSpeed;
                setTransform(nextY);
                
                // Check if reached bottom
                if (currentY <= -maxScroll) {
                    enterInteractiveMode();
                } else {
                    requestAnimationFrame(loop);
                }
            } else if (state === "RESETTING") {
                // Handled in reset function transitions
            }
        }

        function enterInteractiveMode() {
            console.log("Entering Interactive Mode");
            state = "INTERACTIVE";
            
            // Set 10s timer to reset
            if (interactTimer) clearTimeout(interactTimer);
            interactTimer = setTimeout(function() {
                resetAnimation();
            }, 10000);
        }

        function resetAnimation() {
            console.log("Resetting Animation");
            state = "RESETTING";
            
            // Fade out - using jQuery animate on the wrapper (works for SVG in most browsers)
            // Note: jQuery's animate might set 'display: none' at end if opacity is 0, beware.
            // Using a simple opacity tween
            var start = 1;
            $({alpha: 1}).animate({alpha: 0}, {
                duration: 500,
                step: function() {
                    $wrapper.css('opacity', this.alpha);
                },
                complete: function() {
                    // Reset position
                    setTransform(0);
                    // Fade in
                    $({alpha: 0}).animate({alpha: 1}, {
                        duration: 500,
                        step: function() {
                            $wrapper.css('opacity', this.alpha);
                        },
                        complete: function() {
                            // Restart
                            state = "AUTO_SCROLL";
                            requestAnimationFrame(loop);
                        }
                    });
                }
            });
        }
        
        // --- Interaction Handlers ---
        
        // Mouse Wheel
        $wrapper.on('wheel', function(e) {
            if (state !== "INTERACTIVE") return;
            
            // Reset timer on interaction
            clearTimeout(interactTimer);
            interactTimer = setTimeout(resetAnimation, 10000);

            var delta = e.originalEvent.deltaY;
            // Scroll down (positive delta) -> move content UP (negative Y)
            setTransform(currentY - delta); 
            
            e.preventDefault();
        });

        // Dragging Logic
        $wrapper.on('mousedown touchstart', function(e) {
            if (state !== "INTERACTIVE") return;
            
            dragging = true;
            lastDragY = e.pageY || e.originalEvent.touches[0].pageY;
            
            // Stop timer while dragging
            clearTimeout(interactTimer);
            e.preventDefault(); // Prevent default drag behavior
        });

        $(document).on('mousemove touchmove', function(e) {
            if (!dragging || state !== "INTERACTIVE") return;
            
            var pageY = e.pageY || (e.originalEvent.touches ? e.originalEvent.touches[0].pageY : 0);
            var deltaY = pageY - lastDragY;
            
            setTransform(currentY + deltaY); // Drag down (positive) moves content DOWN (positive)
            lastDragY = pageY;
        });

        $(document).on('mouseup touchend', function() {
            if (dragging && state === "INTERACTIVE") {
                dragging = false;
                // Restart timer after drag ends
                interactTimer = setTimeout(resetAnimation, 10000);
            }
        });

        // Tab Switching Logic
        document.addEventListener("visibilitychange", function() {
            if (document.hidden) {
                // User left the tab
                if (state === "INTERACTIVE") {
                    console.log("Tab hidden: Pausing interaction timer");
                    if (interactTimer) clearTimeout(interactTimer);
                }
            } else {
                // User came back
                if (state === "INTERACTIVE") {
                    console.log("Tab visible: Restarting interaction timer");
                    // Restart timer
                    if (interactTimer) clearTimeout(interactTimer);
                    interactTimer = setTimeout(resetAnimation, 10000);
                }
            }
        });

        // Start loop
        requestAnimationFrame(loop);

      } catch (e) {
        console.error("Error setting up SVG animation:", e);
      }
    }, 500);
  }
});
