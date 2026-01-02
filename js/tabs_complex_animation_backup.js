/**
 * BACKUP: COMPLEX STACK ANIMATION LOGIC (Configurable)
 * Date Backed Up: 2025-12-26
 * 
 * This file contains the advanced tab animation logic that supports:
 * - Stacking cards with Z-Index.
 * - Directional awareness (n+1 slides up, n-1 slides down).
 * - "Jump" logic for non-adjacent tabs (fade only).
 * - Configurable effects (Slide, Scale, etc.).
 * 
 * Usage from previous tabs.js:
 * initComplexStackAnimation('.complex_stack', 'scale');
 */

(function($) {
    // COMPLEX STACK ANIMATION LOGIC (Configurable)
    /**
     * @param {string} selector - CSS selector for the tab wrapper
     * @param {string} effectType - 'slide' (default) | 'scale' | 'rotate'
     */
    function initComplexStackAnimation(selector, effectType) {
        effectType = effectType || 'slide'; // Default to slide

        // Configuration Dictionary
        var effects = {
            'slide': {
                hidden: { 'transform': 'translateY(100%)' },
                visible: { 'transform': 'translateY(0)' },
                transition: 'transform 0.6s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.6s ease'
            },
            'scale': {
                hidden: { 'transform': 'scale(0.8) translateY(100%)' }, // Shrink when hidden
                visible: { 'transform': 'scale(1) translateY(0)' },
                transition: 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.5s ease'
            },
            'fade': { // Fallback or simple fade
                hidden: { 'transform': 'none' },
                visible: { 'transform': 'none' },
                transition: 'opacity 0.4s ease'
            }
        };
        
        var config = effects[effectType] || effects['slide'];

        var $wrappers = $(selector);
        if ($wrappers.length === 0) return;

        $wrappers.each(function() {
            var $wrapper = $(this);
            // Support both generic selector or specific class structure
            // Logic: find matches inside
            var $tabs = $wrapper.find('.items-container .item');
            // Attempt to find specific panel container if name convention is used, else generic
            var $panelsContainer = $wrapper.find('.panels-container').first();
            // If selector was a direct class name like .complex_stack, we might need a more robust lookup if wrappers are nested
            // But generally finding .panels-container inside the wrapper is safe.
            
            // Fallback for the specific 'name' based selector logic if needed:
            // But standard jQuery finding is better.
            if ($panelsContainer.length === 0) {
                    // Try finding siblings if wrapper is just the nav part (rare)
                    // Assuming wrapper is the parent container .animation-tabs
            }
            
            var $panels = $wrapper.find('.tab-pane'); // Find all panes inside this wrapper
            // Note: user previously used a specific selector logic $(name + '.panels-container'). 
            // Since we passed a full selector like '.complex_stack', $(selector).find() works if hierarchy is correct.
            
            if ($panels.length === 0) {
                    // Special handle for the split structure in animation_tab.php 
                    // where .animation-tabs and .animation-tabs-content are siblings.
                    // The selector passed usually targets the .animation-tabs div.
                    // So we need to look at siblings.
                    var nameClass = selector.replace('.', ''); // rough extraction or just look for sibling
                    var $siblingContent = $wrapper.siblings('.animation-tabs-content');
                    if ($siblingContent.length > 0) {
                        $panels = $siblingContent.find('.tab-pane');
                    } else {
                        // Try finding by connection ID
                        var targetId = $tabs.first().attr('data-bs-target');
                        if (targetId) {
                            var $firstPanel = $(targetId.replace('#','').startsWith('#') ? targetId : '#'+targetId.replace('#','')); // ID selector
                            if ($firstPanel.length > 0) {
                                $panels = $firstPanel.parent().find('.tab-pane');
                            }
                        }
                    }
            }
            
            if ($panels.length === 0) return;

            var currentIndex = 0;

            // 0. Isolate
            $tabs.off('click');
            $tabs.removeAttr('data-bs-toggle');
            $tabs.removeAttr('data-bs-target');

            // 1. Initialization
            $panels.removeClass('fade show active');
            
            // Set Flex & Transition
            $panels.css({
                'display': 'flex',
                'transition': config.transition
            });

            $panels.each(function(index) {
                $(this).css('z-index', 10 + index);
                // Merge hidden config with opacity
                var initialCss = $.extend({}, config.hidden, { 'opacity': '0' });
                
                if (index === 0) {
                    // Merge visible config with opacity
                    initialCss = $.extend({}, config.visible, { 'opacity': '1' });
                    currentIndex = 0;
                } 
                $(this).css(initialCss);
            });
            $tabs.removeClass('active');
            $tabs.first().addClass('active');

            // 2. Click Handler
            $tabs.on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                
                var $localTabs = $wrapper.find('.items-container .item');
                var nextIndex = $localTabs.index($this);

                if (nextIndex === currentIndex) return;

                var delta = nextIndex - currentIndex;
                var $currentPanel = $panels.eq(currentIndex);
                var $nextPanel = $panels.eq(nextIndex);

                // Ensure basic transition setup
                $panels.css('transition', config.transition);

                // --- Case 1: Next (Adjacent n+1) ---
                if (delta === 1) {
                    // Next: Start Hidden + Opacity 0 -> Animate to Visible + Opacity 1
                    var prepNext = $.extend({}, config.hidden, { 'transition': 'none', 'opacity': '0' });
                    $nextPanel.css(prepNext);
                    $nextPanel[0].offsetHeight; // Reflow
                    
                    var animNext = $.extend({}, config.visible, { 'transition': config.transition, 'opacity': '1' });
                    $nextPanel.css(animNext);
                    
                    // Current: Fade Out immediately. Transform to Hidden ONLY AFTER transition finishes.
                    // We use the CSS delay trick for 'transform'.
                    var transformDelay = 'transform 0s 0.6s'; // Delay of 0.6s matches config
                    if (effectType === 'scale') transformDelay = 'transform 0s 0.5s';
                    
                    // Apply separate transitions
                    // Note: We need to respect the easing curves of opacity if possible, but standard ease is fine.
                    var currentTransition = 'opacity ' + (effectType === 'scale' ? '0.5s' : '0.6s') + ' ease, ' + transformDelay;
                    
                    var animCurrent = $.extend({}, config.hidden, { 'transition': currentTransition, 'opacity': '0' });
                    $currentPanel.css(animCurrent);
                }

                // --- Case 2: Prev (Adjacent n-1) ---
                else if (delta === -1) {
                    // Next: Should be READY at Visible Position (Scale 1 / Y=0), but Opacity 0.
                    // User says: "opacity 0->1 transition mặc định"
                    var prepNext = $.extend({}, config.visible, { 'transition': 'none', 'opacity': '0' });
                    $nextPanel.css(prepNext);
                    $nextPanel[0].offsetHeight;
                    
                    var animNext = $.extend({}, config.visible, { 'transition': config.transition, 'opacity': '1' });
                    $nextPanel.css(animNext);
                    
                    // Current: Animate to Hidden (Transform) + Fade Out (Opacity)
                    // Both happen naturally with default transition
                    var animCurrent = $.extend({}, config.hidden, { 'transition': config.transition, 'opacity': '0' });
                    $currentPanel.css(animCurrent);
                }

                // --- Case 3: Jump (Non-adjacent) ---
                else {
                    // Identical to Slide logic but applies to all effects
                    $panels.css('transition', 'opacity 0.4s ease');
                    
                    // Reset others
                    $panels.each(function(i) {
                        if (i === currentIndex || i === nextIndex) return;
                        var hiddenState = $.extend({}, config.hidden, { 'transition': 'none', 'opacity': '0' });
                        $(this).css(hiddenState);
                    });
                    
                    // Next: Start Hidden, Opacity 0 -> Fade to Visible, Opacity 1
                    // Wait, for Jump, do we Slide/Scale? Usually just Fade.
                    // If just Fade, Position should be Visible immediately?
                    // "Prepare Next: Hidden state" -> No, for Jump we usually want it to just appear.
                    // Let's set it to Visible Position but Opacity 0, then Fade In.
                    var jumpPrep = $.extend({}, config.visible, { 'transition': 'none', 'opacity': '0' });
                    $nextPanel.css(jumpPrep);
                    $nextPanel[0].offsetHeight;
                    
                    var jumpAnim = $.extend({}, config.visible, { 'transition': 'opacity 0.4s ease', 'opacity': '1' });
                    $nextPanel.css(jumpAnim);

                    // Current: Fade Out. Logic "delayed snap to hidden" applies here too.
                    var jumpDelay = 'transform 0s 0.4s';
                    var jumpTransition = 'opacity 0.4s ease, ' + jumpDelay;
                    
                    var jumpCurrent = $.extend({}, config.hidden, { 'transition': jumpTransition, 'opacity': '0' });
                    $currentPanel.css(jumpCurrent);
                }

                // Update State
                $localTabs.removeClass('active');
                $this.addClass('active');
                currentIndex = nextIndex;
            });
        });
    }

})(jQuery);
