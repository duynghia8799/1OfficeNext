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

         /**
         * [PART 2] HƯỚNG DẪN SỬ DỤNG: TỰ ĐỘNG CHUYỂN TAB (AUTO TABS)
         * ------------------------------------------------------------------
         * Hàm initAutoTabs giúp tạo hiệu ứng tự động chuyển đổi giữa các tab sau một khoảng thời gian.
         * Hệ thống tích hợp sẵn cơ chế tối ưu hiệu năng:
         * 1. Tự động tạm dừng khi cuộn khỏi màn hình (IntersectionObserver).
         * 2. Tự động tạm dừng khi user ẩn tab trình duyệt (Visibility API).
         * 3. Cơ chế Reset thông minh (đồng bộ với CSS animation) khi tab hiển thị lại.
         * 
         * HƯỚNG DẪN TÍCH HỢP CSS (QUAN TRỌNG):
         * Để thanh progress chạy mượt và reset đúng, cần cấu hình CSS như sau:
         * 
         * 1. Cấu hình Transition (Chạy):
         *    opacity: 0;
         *    transition: opacity 0.3s ease, width 0s linear 0.3s;
         *    &.active {
         *       &::after { 
         *           width: 100%;
         *           opacity: 1;
         *           transition: width 6s ease-out, opacity 0.3s ease; // 6s = tham số duration truyền vào hàm
         *       }
         *    }
         * 
         * 2. Cấu hình Reset Mượt (.resetting):
         *    &.resetting {
         *       &::after {
         *           width: 0 !important;
         *           transition: none !important;
         *           opacity: 0 !important;
         *       }
         *    }
         * 
         * CÁCH DÙNG:
         * Gọi hàm: initAutoTabs('tên-class-wrapper', thời_gian_ms);
         * Ví dụ: initAutoTabs('chamcong-quanly1', 6000); // Tương ứng transition 6s trong CSS
         */
        
        function initAutoTabs(uniqueClass, duration) {
            var $tabsContainer = $('.' + uniqueClass).filter('.animation-tabs, .animation-tabs2');
            if ($tabsContainer.length === 0) return;

            var interval;
            var isVisible = false;
            
            function startInterval() {
                if (interval) clearInterval(interval);
                if (!isVisible) return; 

                interval = setInterval(function() {
                    // Stop if any parent tab-pane is hidden
                    var $inactiveParents = $tabsContainer.parents('.tab-pane').not('.active');
                    if ($inactiveParents.length > 0) return;

                    var $active = $tabsContainer.find('.items-container .item.active'); 
                    if ($active.length === 0) $active = $tabsContainer.find('.items-container .item').first();
                    
                    var $next = $active.next('.item');
                    if ($next.length === 0) $next = $tabsContainer.find('.items-container .item').first();
                    
                    $next.triggerHandler('click');
                }, duration);
            }

            // Sync Reset: CSS Animation + JS Timer
            function resetCycle() {
                if (interval) clearInterval(interval);
                
                var $active = $tabsContainer.find('.items-container .item.active');
                if ($active.length) {
                    // Force instant reset (bypass CSS transition)
                    $active.addClass('resetting').removeClass('active');
                    void $active[0].offsetWidth; 

                    // Wait 50ms for repaint, then restart
                    setTimeout(function() {
                        $active.removeClass('resetting').addClass('active');
                        startInterval();
                    }, 50); 
                } else {
                    startInterval();
                }
            }

            // --- Event Listeners ---

            // 1. Manual Click
            $tabsContainer.find('.items-container .item').on('click', function(e) {
                if (e.originalEvent) {
                    if (interval) clearInterval(interval);
                    startInterval();
                }
            });

            // 2. Parent Tab Switch
            var $parentTabPane = $tabsContainer.closest('.tab-pane');
            if ($parentTabPane.length > 0) {
                var parentId = $parentTabPane.attr('id');
                $(document).on('shown.bs.tab', 'button[data-bs-toggle="tab"][data-bs-target="#' + parentId + '"]', function(e) {
                     resetCycle();
                });
            }

            // 3. Intersection Observer (Scroll Detect)
            if ('IntersectionObserver' in window) {
                var observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            isVisible = true;
                            resetCycle();
                        } else {
                            isVisible = false;
                            if (interval) clearInterval(interval);
                        }
                    });
                }, { threshold: 0.1 });
                
                $tabsContainer.each(function() { observer.observe(this); });
            } else {
                isVisible = true; 
                startInterval();
            }

            // 4. Visibility API (Tab Switch Detect)
            document.addEventListener("visibilitychange", function() {
                if (document.visibilityState === 'visible') {
                    if (isVisible) resetCycle();
                } else {
                    if (interval) clearInterval(interval);
                }
            });
        }

        // --- Application ---
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
        initAutoTabs('chamcong-quanly1', 6000);
        initAutoTabs('chamcong-quanly2', 6000); 
        initAutoTabs('DGNS-thietlap-tabs', 8000);
        initAutoTabs('DGNS-hethong-tabs', 8000);
        initAutoTabs('tinhluong-tudonghoa-tabs', 8000);
        initAutoTabs('tinhluong-chitra-tabs', 8000);

    });
})(jQuery);
