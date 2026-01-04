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
            var $tabsContainer = $('.' + uniqueClass).filter('.animation-tabs, .animation-tabs2');
            if ($tabsContainer.length === 0) return;

            var interval;
            
            function startInterval() {
                if (interval) clearInterval(interval);
                interval = setInterval(function() {
                    // Check if any ancestor tab-pane is not active (hidden)
                    var $parents = $tabsContainer.parents('.tab-pane');
                    var isHidden = false;
                    $parents.each(function() {
                        if (!$(this).hasClass('active')) {
                            isHidden = true;
                            return false; // break
                        }
                    });
                    if (isHidden) return;

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
        initAutoTabs('quanly', 5000);
        initAutoTabs('duytri1', 6000);
        initAutoTabs('duytri2', 6000);
        initAutoTabs('duytri3', 6000);

        // Hàm riêng để reset animation cho phần Duy trì khi chuyển tab cha
        function initDuyTriReset() {
            $('.duytri.animation-tabs .items-container .item').on('shown.bs.tab', function (e) {
                var targetId = $(e.target).attr('data-bs-target');
                var $panel = $(targetId);
                
                // Tìm item con đang active trong đúng các khối duytri1, duytri2, duytri3 tương ứng
                var $activeChild = $panel.find('.duytri1 .item.active, .duytri2 .item.active, .duytri3 .item.active');
                
                if ($activeChild.length) {
                    // Reset animation bằng cách gỡ class active -> reflow -> thêm lại active
                    // Cách này mạnh hơn việc chỉ reset property animation, đảm bảo mọi trạng thái vẽ lại từ đầu
                    $activeChild.removeClass('active');
                    void $activeChild[0].offsetHeight; // Trigger reflow
                    $activeChild.addClass('active');
                }
            });
        }
        initDuyTriReset();

    });
})(jQuery);
