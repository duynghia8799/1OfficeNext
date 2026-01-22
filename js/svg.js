 /* SVG Auto Scroll Animation Utility*/

(function ($) {

    // --- Configuration Map ---
    const svgAnimationConfig = {
        // Example 1: The 'Process Hero' phone screen (Converted to Keyframes)
        // Original: Height 1766, Viewport 520, Buffer 50 -> Max Scroll 1296
        '.js-svg-process-hero': {
            keyframes: [
                {  x: 0, y: 0 },
                {  x: 0, y: -1296 } 
            ],
            scrollSpeed: 1,
            pauseDuration: 10000,
            pauseOnHover: true,
            scrollAxis: 'both', // Multi-axis support enabled
            fadeReset: true     // Explicitly enabled (though it's default)
        },

        //Social-Hatnhan
        '.hatnhan-anim-part': {
            keyframes: [
                { x: 0, y: 0, easing:[0.1, 0, 0.1, 1]},
                { x: -850, y: 0 },
            ],
            scrollSpeed: 1,
            pauseDuration: 2000,
            pauseOnHover: true,
            fadeReset: true,
            pauseOnHover: true,
            fadeReset: true,
            interactive: false, // Disable drag/wheel during wait
            startDelay: 1000     // Delay before starting/restarting
        },

        '.hatnhan-anim-part2':{
            keyframes: [
                { x: 210, y: 60, easing:[0.1, 0, 0.4, 1]},
                { x: -850, y: 60 },
                { x: -850, y: -850 },
            ],
            scrollSpeed: 1,
            pauseDuration: 2000,
            pauseOnHover: true,
            fadeReset: true,
            pauseOnHover: true,
            fadeReset: true,
            interactive: false, // Disable drag/wheel during wait
            startDelay: 1000
        },


        //TTNS BlueSky
        '.js-svg-TTNS-10': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 8, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-9': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 16, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-8': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 24, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-7': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 32, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-6': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 40, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-5': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 48, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-4': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 56, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-3': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 64, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-2': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 72, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
        '.js-svg-TTNS-1': {
            keyframes: [
                { x: 0, y: 0, rotate: 0, easing: 'easeInOut' },
                { x: 0, y: 0.1, rotate: 80, pause: 700, easing: 'easeInOut' },
                { x: 0, y: 0, rotate: 0 }
            ],
            scrollSpeed: 0.0003,
            pauseDuration: 700,
            transformOrigin: 'center',
            interactive: false
        },
    };






    // --- Core Animation Class ---
    class SvgAutoScroll {
        constructor(element, config) {
            this.$element = $(element);

            // Defaut Defaults
            const defaults = {
                scrollSpeed: 1,
                pauseDuration: 10000,
                keyframes: null, // Array of {x, y, scale, rotate, opacity, easing, pause}
                fadeReset: false, // Option: Fade out/in on reset (Default is FALSE)
                scrollAxis: 'y',  // Option: 'y', 'x', or 'both' for wheel interaction
                transformOrigin: null, // New Option: "center center" or "Xpx Ypx"
                interactive: true, // Option: Allow user drag/wheel (Default is TRUE)
                startDelay: 0      // Option: Delay before start (Default 0)
            };

            this.config = $.extend({}, defaults, config);

            this.state = "INIT";
            this.currentPos = 0;
            this.maxScroll = 0;
            this.pathInterpolator = null;

            this.dragState = {
                isDragging: false,
                lastX: 0,
                lastY: 0
            };

            this.isVisible = false; // Track viewport visibility

            // Store instance for external control
            this.$element.data('svgAutoScroll', this);

            this.init();
        }

        init() {
            setTimeout(() => {
                try {
                    if (!this.setupDimensions()) return;

                    this.createWrapper();
                    this.applyStaticStyles(); // New helper
                    this.bindEvents();
                    this.setupObserver(); // Auto-pause logic

                    this.state = "AUTO_SCROLL";
                    // Loop execution is now controlled by observer
                } catch (e) {
                    console.error("SVG Auto Scroll Init Error:", e);
                }
            }, 500);
        }

        setupDimensions() {
            // STRICT MODE: Keyframes are required.
            if (!this.config.keyframes || !Array.isArray(this.config.keyframes) || this.config.keyframes.length < 2) {
                console.warn("SvgAutoScroll: Missing or invalid keyframes for", this.$element);
                return false;
            }

            this.pathInterpolator = new PathInterpolator(this.config.keyframes);
            this.maxScroll = this.pathInterpolator.totalDistance;

            if (this.maxScroll <= 0) {
                return false;
            }

            // Speed calculation
            this.speed = this.config.scrollSpeed;
            if (this.speed === 0) (this.speed = 1);

            return true;
        }

        createWrapper() {
            // Check if wrapper already exists (idempotency)
            if (this.$element.parent().attr('class') && this.$element.parent().attr('class').includes('svg-scroll-wrapper')) {
                this.$wrapper = this.$element.parent();
                return;
            }

            this.$wrapper = $(document.createElementNS("http://www.w3.org/2000/svg", "g"));
            this.$wrapper.attr("class", "svg-scroll-wrapper");

            this.$element.before(this.$wrapper);
            this.$wrapper.append(this.$element);
        }

        applyStaticStyles() {
            if (this.config.transformOrigin) {
                this.$wrapper.css('transform-origin', this.config.transformOrigin);
                // Also set transform-box to view-box to be safe if user uses %
                this.$wrapper.css('transform-box', 'view-box');
            }
        }

        setupObserver() {
            if ('IntersectionObserver' in window) {
                this.observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        this.isVisible = entry.isIntersecting;
                        if (this.isVisible) {
                            // Resume if we should be running
                            if (this.state === "AUTO_SCROLL" || this.state === "WAITING") {
                                this.loop();
                            }
                        }
                    });
                }, { threshold: 0 }); // Trigger as soon as 1px is visible
                
                this.observer.observe(this.$wrapper[0]);
            } else {
                // Fallback for ancient browsers: Always visible
                this.isVisible = true;
                this.loop();
            }
        }

        bindEvents() {
            this.$wrapper.on('wheel', (e) => this.handleWheel(e));
            this.$wrapper.on('mousedown touchstart', (e) => this.handleDragStart(e));
            $(document).on('mousemove touchmove', (e) => this.handleDragMove(e));
            $(document).on('mouseup touchend', (e) => this.handleDragEnd(e));
            document.addEventListener("visibilitychange", () => this.handleVisibilityChange());
        }

        setTransform(dist) {
            if (dist < 0) dist = 0;
            if (dist > this.maxScroll) dist = this.maxScroll;
            
            this.currentPos = dist;
            
            // Standardized Interpolation
            const point = this.pathInterpolator.getPoint(dist);
            
            const x = point.x || 0;
            const y = point.y || 0;
            const scale = point.scale !== undefined ? point.scale : 1;
            const rotate = point.rotate !== undefined ? point.rotate : 0;
            const opacity = point.opacity !== undefined ? point.opacity : 1;

            // Apply transforms
            let transformStr = `translate(${x}, ${y})`;
            if (scale !== 1) transformStr += ` scale(${scale})`;
            if (rotate !== 0) transformStr += ` rotate(${rotate})`; 

            this.$wrapper.attr("transform", transformStr);
            
            // Apply Opacity
            if (opacity !== 1) {
                this.$wrapper.css("opacity", opacity);
            } else {
                this.$wrapper.css("opacity", ""); 
            }
        }

        loop() {
            if (!this.isVisible) return; // Optimization: Stop running when off-screen
            if (this.state === "PAUSED" || this.state === "WAITING") return; 
            
            if (this.state === "AUTO_SCROLL") {
                // Advance distance
                const nextPos = this.currentPos + this.speed;
                
                // Check if we crossed a segment boundary that has a pause
                const currentSegIdx = this.pathInterpolator.getSegmentIndex(this.currentPos);
                const nextSegIdx = this.pathInterpolator.getSegmentIndex(nextPos);
                
                if (currentSegIdx !== -1 && nextSegIdx > currentSegIdx) {
                    const segment = this.pathInterpolator.segments[currentSegIdx];
                    if (segment.pause && segment.pause > 0) {
                        // Hit a pause point!
                        // Snap to end of segment
                        this.setTransform(segment.accumulatedStart + segment.length);
                        this.state = "PAUSED";
                        
                        setTimeout(() => {
                            if (this.state === "PAUSED") {
                                this.state = "AUTO_SCROLL";
                                this.setTransform(nextPos); // Resume
                                this.loop();
                            }
                        }, segment.pause);
                        return; // Stop loop for now
                    }
                }

                this.setTransform(nextPos);

                if (this.currentPos >= this.maxScroll) {
                     // End of Animation Reached
                     if (this.config.interactive) {
                        this.enterInteractiveMode();
                     } else {
                        // If not interactive, just enter a waiting state before reset
                        this.state = "WAITING";
                        this.startResetTimer();
                     }
                } else {
                    requestAnimationFrame(() => this.loop());
                }
            }
        }

        enterInteractiveMode() {
            if (this.state === "INTERACTIVE") return;
            this.state = "INTERACTIVE";
            this.startResetTimer();
        }

        startResetTimer() {
            if (this.interactTimer) clearTimeout(this.interactTimer);
            this.interactTimer = setTimeout(() => this.resetAnimation(), this.config.pauseDuration);
        }

        resetAnimation() {
            if (this.state === "RESETTING") return;
            this.state = "RESETTING";

            // Check config for Fade Reset
            if (this.config.fadeReset) {
                const _this = this;
                $({alpha: 1}).animate({alpha: 0}, {
                    duration: 500,
                    step: function() {
                        _this.$wrapper.css('opacity', this.alpha);
                    },
                    complete: function() {
                        _this.setTransform(0); 
                        
                        $({alpha: 0}).animate({alpha: 1}, {
                            duration: 500,
                            step: function() {
                                _this.$wrapper.css('opacity', this.alpha);
                            },
                            complete: function() {
                                _this.state = "AUTO_SCROLL";
                                _this.loop();
                            }
                        });
                    }
                });
            } else {
            }
        }

        /**
         * External API: Instantly reset to start without fading
         */
        instantReset() {
            // Stop any pending timers/animations
            if (this.interactTimer) clearTimeout(this.interactTimer);
            this.state = "RESETTING"; // Briefly lock
            
            // Force reset
            this.currentPos = 0;
            this.setTransform(0);
            
            // Resume immediately or with delay
            const _this = this;
            const delay = this.config.startDelay || 0;

            if (delay > 0) {
                // Wait before starting loop
                this.interactTimer = setTimeout(() => {
                    requestAnimationFrame(() => {
                        if (_this.state === "RESETTING") { // Ensure no other state change happened
                            _this.state = "AUTO_SCROLL";
                            _this.loop();
                        }
                    });
                }, delay);
            } else {
                requestAnimationFrame(() => {
                    _this.state = "AUTO_SCROLL";
                    _this.loop();
                });
            }
        }

        // --- Interaction Handlers ---

        handleWheel(e) {
            if (this.state !== "INTERACTIVE") return;

            this.startResetTimer(); 
            
            let delta = 0;
            const dy = e.originalEvent.deltaY;
            const dx = e.originalEvent.deltaX;

            if (this.config.scrollAxis === 'x') {
                delta = dx;
            } else if (this.config.scrollAxis === 'both') {
                // Use the dominant axis for delta
                delta = Math.abs(dx) > Math.abs(dy) ? dx : dy;
            } else {
                // Default 'y'
                delta = dy;
            }

            this.setTransform(this.currentPos + delta);
            e.preventDefault();
        }

        handleDragStart(e) {
            if (this.state !== "INTERACTIVE") return;
            
            this.dragState.isDragging = true;
            const touch = e.originalEvent.touches ? e.originalEvent.touches[0] : e;
            this.dragState.lastX = touch.pageX;
            this.dragState.lastY = touch.pageY;
            
            if (this.interactTimer) clearTimeout(this.interactTimer);
            e.preventDefault();
        }

        handleDragMove(e) {
            if (!this.dragState.isDragging || this.state !== "INTERACTIVE") return;
            
            const touch = e.originalEvent.touches ? e.originalEvent.touches[0] : e;
            const pageX = touch.pageX;
            const pageY = touch.pageY;
            
            const dx = pageX - this.dragState.lastX;
            const dy = pageY - this.dragState.lastY;
            
            // Standardize: Dragging Left or Up advances the animation
            // Because content moves opposite to scroll usually.
            // But here "Distance" means progress. 
            // If we drag mouse UP, we want to see content BELOW, so we advance?
            // Actually, natural scrolling: Drag UP = Content moves UP? No, Drag UP = Pan Down = View moves down.
            // Let's stick to the previous generic logic: delta = (-dx) + (-dy).
            let delta = (-dx) + (-dy);
            delta = delta * 0.7; // Sensitivity

            this.setTransform(this.currentPos + delta);
            
            this.dragState.lastX = pageX;
            this.dragState.lastY = pageY;
        }

        handleDragEnd(e) {
            if (this.dragState.isDragging && this.state === "INTERACTIVE") {
                this.dragState.isDragging = false;
                this.startResetTimer();
            }
        }

        handleVisibilityChange() {
            if (document.hidden) {
                if (this.state === "INTERACTIVE" && this.interactTimer) {
                    clearTimeout(this.interactTimer);
                }
            } else {
                if (this.state === "INTERACTIVE") {
                    this.startResetTimer();
                }
            }
        }
    }

    /**
     * Easing Functions
     */
    const Easing = {
        linear: t => t,
        easeIn: t => t * t,
        easeOut: t => t * (2 - t),
        easeInOut: t => t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t
    };

    // Cubic Bezier Helper (Unit Bezier Solver)
    // Based on WebKit/Blink implementation
    function cubicBezier(p1x, p1y, p2x, p2y) {
        const ZERO_LIMIT = 1e-6;
        const ax = 3 * p1x - 3 * p2x + 1;
        const bx = 3 * p2x - 6 * p1x;
        const cx = 3 * p1x;
        const ay = 3 * p1y - 3 * p2y + 1;
        const by = 3 * p2y - 6 * p1y;
        const cy = 3 * p1y;

        function sampleCurveX(t) { return ((ax * t + bx) * t + cx) * t; }
        function sampleCurveY(t) { return ((ay * t + by) * t + cy) * t; }
        function sampleCurveDerivativeX(t) { return (3 * ax * t + 2 * bx) * t + cx; }

        function solveCurveX(x) {
            let t2 = x;
            for (let i = 0; i < 8; i++) {
                const x2 = sampleCurveX(t2) - x;
                if (Math.abs(x2) < ZERO_LIMIT) return t2;
                const d2 = sampleCurveDerivativeX(t2);
                if (Math.abs(d2) < ZERO_LIMIT) break;
                t2 = t2 - x2 / d2;
            }
            return t2;
        }

        return function(t) {
            return sampleCurveY(solveCurveX(t));
        };
    }

    /**
     * Helper to interpolate points along a multi-segment path
     */
    class PathInterpolator {
        constructor(keyframes) {
            // Clone to avoid mutating original config
            this.keyframes = keyframes.map(k => Object.assign({}, k));
            this.normalizeKeyframes();
            this.segments = [];
            this.totalDistance = 0;
            this.calculateSegments();
        }

        normalizeKeyframes() {
            // 1. Identify all properties used across ALL keyframes
            const allProps = new Set(['x', 'y', 'scale', 'rotate', 'opacity']);
            
            // 2. Fill missing defaults for every keyframe
            this.keyframes.forEach(kf => {
                if (kf.x === undefined) kf.x = 0;
                if (kf.y === undefined) kf.y = 0;
                if (kf.scale === undefined) kf.scale = 1;
                if (kf.rotate === undefined) kf.rotate = 0;
                if (kf.opacity === undefined) kf.opacity = 1;
            });
        }

        calculateSegments() {
            if (this.keyframes.length < 2) return;

            for (let i = 0; i < this.keyframes.length - 1; i++) {
                const p1 = this.keyframes[i];
                const p2 = this.keyframes[i+1];
                
                // Euclidean distance (Now safe because x/y are guaranteed)
                const dist = Math.sqrt(Math.pow(p2.x - p1.x, 2) + Math.pow(p2.y - p1.y, 2));
                
                const pause = p2.pause || 0;
                let easing = p1.easing || 'linear';

                // Handle Array easing as Cubic Bezier
                if (Array.isArray(easing) && easing.length === 4) {
                    easing = cubicBezier(easing[0], easing[1], easing[2], easing[3]);
                } else if (typeof easing === 'string' && Easing[easing]) {
                    easing = Easing[easing];
                } else if (typeof easing !== 'function') {
                    easing = Easing.linear;
                }

                this.segments.push({
                    start: p1,
                    end: p2,
                    length: dist,
                    accumulatedStart: this.totalDistance,
                    pause: pause,
                    easingFunc: easing // Store the resolved function
                });
                
                this.totalDistance += dist;
            }
        }

        getSegmentIndex(distance) {
             if (distance < 0) return 0;
             if (distance >= this.totalDistance) return this.segments.length - 1;
             
             return this.segments.findIndex(seg => 
                distance >= seg.accumulatedStart && 
                distance < (seg.accumulatedStart + seg.length)
            );
        }

        getPoint(distance) {
            if (distance <= 0) return this.keyframes[0];
            if (distance >= this.totalDistance) return this.keyframes[this.keyframes.length - 1];

            const segment = this.segments.find(seg => 
                distance >= seg.accumulatedStart && 
                distance <= (seg.accumulatedStart + seg.length)
            );

            if (!segment) return this.keyframes[this.keyframes.length - 1];

            const segmentProgress = distance - segment.accumulatedStart;
            let t = segmentProgress / segment.length; 
            if (segment.length === 0) t = 0; // Prevent divide by zero

            // Apply Resolved Easing Function
            if (segment.easingFunc) {
                t = segment.easingFunc(t);
            }

            const result = {};
            // Interpolate all normalized numeric properties
            ['x', 'y', 'scale', 'rotate', 'opacity'].forEach(key => {
                const startVal = segment.start[key];
                const endVal = segment.end[key];
                result[key] = startVal + (endVal - startVal) * t;
            });

            return result;
        }
    }

    // --- Main Initializer ---
    $(document).ready(function() {
        $.each(svgAnimationConfig, function(selector, config) {
            const $elements = $(selector);
            if ($elements.length > 0) {
                $elements.each(function() {
                    new SvgAutoScroll(this, config);
                });
            }
        });
    });

})(jQuery);
