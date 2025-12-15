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

        // --- Part 2: Dieuphoi Tabs Auto-switch ---
        var $dieuphoiTabs = $('.dieuphoi.animation-tabs');
        if ($dieuphoiTabs.length) {
            var dieuphoiInterval;
            var startDieuphoiAutoSwitch = function() {
                if (dieuphoiInterval) clearInterval(dieuphoiInterval);
                dieuphoiInterval = setInterval(function() {
                    var $active = $dieuphoiTabs.find('.items-container .item.active');
                    if (!$active.length) {
                        $active = $dieuphoiTabs.find('.items-container .item').first();
                    }
                    var $next = $active.next('.item');
                    if ($next.length === 0) {
                        $next = $dieuphoiTabs.find('.items-container .item').first();
                    }
                    $next.trigger('click');
                }, 6000); 
            };
            startDieuphoiAutoSwitch();
            $dieuphoiTabs.find('.items-container .item').on('click', function(e) {
                 startDieuphoiAutoSwitch();
            });
        }
    });
})(jQuery);
