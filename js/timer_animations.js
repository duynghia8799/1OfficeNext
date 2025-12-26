(function ($) {
    $(document).ready(function () {
        // --- Part 1: Title Section Scroll Animation ---
        const $scrollTitle = $('.title-section.scroll');
        if ($scrollTitle.length) {
            const classes = ['top', 'center', 'bottom'];
            let currentIndex = 0;
            if (!$scrollTitle.is('.top, .center, .bottom')) {
                $scrollTitle.addClass(classes[currentIndex]);
            } else {
                 if ($scrollTitle.hasClass('center')) currentIndex = 1;
                 if ($scrollTitle.hasClass('bottom')) currentIndex = 2;
            }

            let direction = 1;

            setInterval(function () {
                currentIndex += direction;
                if (currentIndex >= classes.length) {
                    currentIndex = classes.length - 2;
                    direction = -1;
                } else if (currentIndex < 0) {
                    currentIndex = 1;
                    direction = 1;
                }
                if (currentIndex < 0) currentIndex = 0;
                if (currentIndex >= classes.length) currentIndex = classes.length - 1;

                $scrollTitle.removeClass(classes.join(' ')).addClass(classes[currentIndex]);
            }, 5000);
        }

        // --- Part 2: Generic Tabs Auto-switch ---
        function initAutoTabs(uniqueClass, duration) {
            var $tabsContainer = $('.' + uniqueClass + '.animation-tabs');
            if ($tabsContainer.length === 0) return;

            var interval;
            
            function startInterval() {
                if (interval) clearInterval(interval);
                interval = setInterval(function() {
                    // Re-query the active item from the DOM to get the current state
                    var $active = $tabsContainer.find('.items-container .item.active');
                    if ($active.length === 0) {
                         $active = $tabsContainer.find('.items-container .item').first();
                    }
                    var $next = $active.next('.item');
                    if ($next.length === 0) {
                        $next = $tabsContainer.find('.items-container .item').first();
                    }
                    $next.trigger('click');
                }, duration);
            }

            // Start the auto-switch
            startInterval();

            // Reset timer on user interaction
            $tabsContainer.find('.items-container .item').on('click', function() {
                startInterval();
            });
        }

        // Apply to specific tabs
        initAutoTabs('dieuphoi', 6000);
        initAutoTabs('kyket', 5000);

    });
})(jQuery);
