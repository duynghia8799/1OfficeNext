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

        // --- Part 2: Generic Tabs Auto-switch (Refactored for Nested Tabs & Opacity Transition) ---
        function initAutoTabs(uniqueClass, duration) {
            var $tabsContainer = $('.' + uniqueClass).filter('.animation-tabs, .animation-tabs2');
            if ($tabsContainer.length === 0) return;

            var interval;
            
            // Hàm khởi động lại vòng lặp
            function startInterval() {
                if (interval) clearInterval(interval);

                interval = setInterval(function() {
                    // Logic Kiểm tra hiển thị MỚI (Dựa trên class active, vì dùng opacity):
                    // Kiểm tra TẤT CẢ các cha là tab-pane. Nếu có cha nào KHÔNG active -> Dừng
                    var $inactiveParents = $tabsContainer.parents('.tab-pane').not('.active');
                    if ($inactiveParents.length > 0) {
                        return; // Đang ẩn (cha không active) -> Bỏ qua vòng lặp này
                    }

                    // Nếu OK (tất cả cha đều active), thì chuyển tab con
                    var $active = $tabsContainer.find('.items-container .item.active'); 
                    if ($active.length === 0) {
                         $active = $tabsContainer.find('.items-container .item').first();
                    }
                    var $next = $active.next('.item');
                    if ($next.length === 0) {
                        $next = $tabsContainer.find('.items-container .item').first();
                    }
                    
                    // Trigger chuyển tab
                    $next.trigger('click');

                }, duration);
            }

            // Hàm resetCycle: Reset toàn bộ timer và animation CSS
            function resetCycle() {
                if (interval) clearInterval(interval);
                
                // Reset CSS Animation (Reflow)
                var $active = $tabsContainer.find('.items-container .item.active');
                if ($active.length) {
                    $active.removeClass('active');
                    void $active[0].offsetWidth; // Trigger reflow để replay CSS animation
                    $active.addClass('active');
                }
                
                // Reset Timer
                startInterval();
            }

            // --- Event Listeners ---

            // 1. Khi user click tay vào item -> Reset timer
            $tabsContainer.find('.items-container .item').on('click', function(e) {
                if (interval) clearInterval(interval);
                startInterval();
            });

            // 2. Lắng nghe sự kiện chuyển tab của TAB CHA (Nested Tabs)
            // Tìm tab-pane cha gần nhất
            var $parentTabPane = $tabsContainer.closest('.tab-pane');
            if ($parentTabPane.length > 0) {
                var parentId = $parentTabPane.attr('id');
                
                // Lắng nghe sự kiện 'shown.bs.tab' trên các button điều khiển tab cha này
                // Delegate sự kiện từ document để đảm bảo bắt được ngay cả khi button render sau (tuy nhiên document.ready đã chạy)
                $(document).on('shown.bs.tab', 'button[data-bs-toggle="tab"][data-bs-target="#' + parentId + '"]', function(e) {
                    // Khi tab cha hiện ra -> Reset toàn bộ chu trình tab con
                    // Logic này fix lỗi bất đồng bộ giữa Animation CSS và Timer JS
                    resetCycle();
                });
            }

            // 3. Xử lý khi user rời tab browser rồi quay lại (Fix lỗi Browser Throttle Timer)
            document.addEventListener("visibilitychange", function() {
                if (document.visibilityState === 'visible') {
                    // Chỉ reset nếu tab này đang visible trên màn hình
                    if ($tabsContainer.is(':visible')) {
                        resetCycle();
                    }
                }
            });

            // Start lần đầu
            startInterval();
        }

        // Apply to specific tabs
        initAutoTabs('dieuphoi', 6000);
        initAutoTabs('kyket', 5000);
        initAutoTabs('quanly', 5000);
        initAutoTabs('duytri1', 6000);
        initAutoTabs('duytri2', 6000);
        initAutoTabs('duytri3', 6000);
        initAutoTabs('sohoa', 6000);
        initAutoTabs('thietke', 6000);
        initAutoTabs('luutru', 7000);
        initAutoTabs('giaoviec', 7000);
        initAutoTabs('tailieu-quanly', 7000);
        initAutoTabs('taisan-quanly', 7000);
        initAutoTabs('taisan-chuanhoa', 8000);
        initAutoTabs('tuyendung-quanly', 7000);
        initAutoTabs('TTNS-xaydung', 8000);
        initAutoTabs('TTNS-chuanhoa', 8000);

        // Cham Cong Tabs (New)
        initAutoTabs('chamcong1', 6000);
        initAutoTabs('chamcong2', 6000);
        initAutoTabs('chamcong3', 6000);
        initAutoTabs('chamcong-quanly-main', 6000);

    });
})(jQuery);
