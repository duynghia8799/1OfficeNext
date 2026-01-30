(function ($) {
    $(document).ready(function () {
        function changePosisionCard($targetItem) {
            // FIX: Ngăn tab con (animation-tabs2) ảnh hưởng đến card của tab cha (animation-tabs)
            if ($targetItem.closest('.animation-tabs2').length > 0) return;

            var $wrapper = $targetItem.closest('.animation-tabs');
            var $card = $wrapper.find('.card');
            
            if ($card.length === 0 || $targetItem.length === 0) return;

            var wrapperOffset = $wrapper.offset().left;
            var itemOffset = $targetItem.offset().left;
            var move = itemOffset - wrapperOffset;
            var width = $targetItem.outerWidth();

            $card.css({
                'left': move + 'px',
                'width': width + 'px'
            });
        }
        function changePosisionCard2($targetItem) {
            // FIX: Ngăn tab con (animation-tabs2) ảnh hưởng đến card của tab cha (animation-tabs)
            if ($targetItem.closest('.animation-tabs').length > 0) return;

            var $wrapper = $targetItem.closest('.animation-tabs2');
            var $card = $wrapper.find('.card');
            
            if ($card.length === 0 || $targetItem.length === 0) return;

            var wrapperOffset = $wrapper.offset().top;
            var itemOffset = $targetItem.offset().top;
            var move = itemOffset - wrapperOffset;
            var height = $targetItem.outerHeight();

            $card.css({
                'top': move + 'px',
                'height': height + 'px'
            });
        }
        /**
         * Hàm khởi tạo Tabs thống nhất
         * @param {string} selector - Class của wrapper (vd: .tangtoc)
         * @param {object} options - { startIndex: number }
         */
        function initTabs(selector, options) {
            var settings = $.extend({
                startIndex: 0,
            }, options);

            var $wrappers = $(selector);

            $wrappers.each(function () {
                var $container = $(this);
                // Ngăn chặn init trên chính container nội dung nếu nó dùng chung class định danh (vd: .duytri)
                // Điều này tránh việc tab cha nhận nhầm các item của tab con nằm sâu bên trong content
                if ($container.hasClass('tab-content') || $container.hasClass('panels-container')) return;

                // Tìm Tabs
                var $tabs = $container.children('.items-container').find('.item');
                if ($tabs.length === 0) $tabs = $container.find('.items-container .item');
                if ($tabs.length === 0) $tabs = $container.find('.item');
                // Tìm Panel Container
                var $panelContainer = $container.find('.tab-content');
                // Fallback tìm kiếm container nếu cấu trúc HTML rời rạc
                if ($panelContainer.length === 0) {
                    $panelContainer = $container.siblings(selector + '.tab-content');
                    // Ưu tiên tìm content có mác class cụ thể bên trong wrapper
                    if ($panelContainer.length === 0) {
                         $panelContainer = $container.siblings('.animation-tabs-content, .animation-tabs-content2').find(selector + '.tab-content');
                    }
                    // Fallback chung (có thể gây lỗi nếu có nhiều sibling, nhưng giữ để tương thích ngược)
                    if ($panelContainer.length === 0) {
                        $panelContainer = $container.siblings('.animation-tabs-content, .animation-tabs-content2').find('.tab-content');
                    }
                    if ($panelContainer.length === 0 && $container.hasClass('tichhop')) $panelContainer = $('.tichhop.tab-content');
                }
                var $panels = $panelContainer.children('.tab-pane');

                
                if ($tabs.length === 0 || $panels.length === 0) return;
                // Xử lý Start Index
                var currentIndex = settings.startIndex;
                if (currentIndex === -1) currentIndex = $tabs.length - 1;
                if (currentIndex < 0) currentIndex = 0;
                // --- LOGIC CẬP NHẬT TRẠNG THÁI ---
                function updateState(targetIndex) {
                    var $targetTab = $tabs.eq(targetIndex);
                    // 1. Cập nhật Tab UI
                    $tabs.removeClass('active');
                    $targetTab.addClass('active');
                    changePosisionCard($targetTab);
                    changePosisionCard2($targetTab);
                    // 2. Cập nhật Panel UI
                    // --- CASE ĐẶC BIỆT: TICH HOP ---
                    if ($container.hasClass('tichhop')) {
                        $panels.each(function (i) {
                            $(this).css('z-index', 0 + i); 
                            if (i < targetIndex) {
                                $(this).removeClass('active');
                            } else {
                                $(this).addClass('active');
                            }
                             $(this).removeClass('up');
                        });

                    } 
                    // --- CASE CHUNG (STANDARD + STACK UP) ---
                    else {
                        $panels.each(function(i) {
                            $(this).css('z-index', 0 + i);
                            if (i === targetIndex) {
                                $(this).addClass('active');
                            } else {
                                $(this).removeClass('active');
                            }
                            if (i <= targetIndex) {
                                $(this).addClass('up');
                            } else {
                                $(this).removeClass('up');
                            }
                        });
                    }
                    currentIndex = targetIndex;

                    // 3. Reset SVG Animations inside the new Active Panel
                    var $activeActivePanel = $panels.eq(targetIndex);
                    // Find elements that have the svgAutoScroll instance
                    // Note: The structure is usually .svg-scroll-wrapper > svg (the original element)
                    $activeActivePanel.find('.svg-scroll-wrapper').children().each(function() {
                        var instance = $(this).data('svgAutoScroll');
                        if (instance && typeof instance.instantReset === 'function') {
                            instance.instantReset();
                        }
                    });
                }
                // --- BIND EVENT ---
                $tabs.off('click').on('click', function (e) {
                    e.preventDefault();
                    var userIndex = $tabs.index(this);
                    if (userIndex !== -1) {
                        updateState(userIndex);
                        
                        // --- LOGIC RESET CÁC TAB ẨN (ANH EM) & TAB HIỆN TẠI ---
                        $panels.each(function(i) {
                             var $childTabsWrappers = $(this).find('.animation-tabs2');
                             var $childTabs = $childTabsWrappers.find('.items-container .item');

                             // 1. Với Panel ĐANG ACTIVE (i === userIndex)
                             // -> Trigger click vào tab đầu tiên để chạy lại từ đầu
                             if (i === userIndex) {
                                  var $firstTabItem = $childTabs.first();
                                  if ($firstTabItem.length > 0) {
                                      $firstTabItem.trigger('click');
                                  }
                             } 
                             // 2. Với Panel ĐANG ẨN (i !== userIndex)
                             // -> Xóa class active để reset CSS (width=0, opacity=0)
                             else {
                                  $childTabs.removeClass('active');
                             }
                        });
                    } 
                });
                // --- INITIALIZE ---
                requestAnimationFrame(function () {
                    // FIX: Chỉ init state nếu wrapper không nằm trong một tab-pane đang ẩn
                    // Điều này ngăn animation chạy ngầm khi tab cha chưa active
                    var $parentPanel = $container.closest('.tab-pane');
                    if ($parentPanel.length > 0 && !$parentPanel.hasClass('active')) {
                        return; 
                    }
                    updateState(currentIndex);
                });
            });
        }
        // ==========================================
        initTabs('.module-tab', { startIndex: 0 });
        initTabs('.dieuphoi', { startIndex: 0 });
        initTabs('.kyket',    { startIndex: 0 });
        initTabs('.tangtoc',  { startIndex: -1 }); // Mặc định tab cuối
        initTabs('.tichhop',  { startIndex: 0 });
        initTabs('.lienket',  { startIndex: 0 });
        initTabs('.quanly',  { startIndex: 0 });
        initTabs('.lamchu',  { startIndex: 0 });
        initTabs('.complex_stack', { startIndex: 0 });
        initTabs('.duytri', { startIndex: 0 });
        initTabs('.duytri1', { startIndex: 0 });
        initTabs('.duytri2', { startIndex: 0 });
        initTabs('.duytri3', { startIndex: 0 });
        initTabs('.sohoa', { startIndex: 0 });
        initTabs('.thietke', { startIndex: 0 });
        initTabs('.luutru', { startIndex: 0 });
        initTabs('.tudonghoa', { startIndex: 0 });
        initTabs('.giaoviec', { startIndex: 0 });
        initTabs('.tailieu-quanly', { startIndex: 0 });
        initTabs('.taisan-quanly', { startIndex: 1 });
        initTabs('.taisan-chuanhoa', { startIndex: 0 });
        initTabs('.tuyendung-quanly', { startIndex: 0 });
        initTabs('.TTNS-xaydung', { startIndex: 0 });
        initTabs('.TTNS-chuanhoa', { startIndex: 0 });
        initTabs('.chamcong-quanly-main', { startIndex: 0 });
        initTabs('.chamcong-quanly1', { startIndex: 0 });
        initTabs('.chamcong-quanly2', { startIndex: 0 });
        initTabs('.chamcong-sohoa', { startIndex: 0 });
        initTabs('.DGNS-hethong-tabs', { startIndex: 0 });
        initTabs('.DGNS-thietlap-tabs', { startIndex: 0 });
        initTabs('.DGNS-caithien-tabs', { startIndex: 0 });
        initTabs('.tinhluong-tudonghoa-tabs', { startIndex: 0 });
        initTabs('.tinhluong-chitra-tabs', { startIndex: 0 });
        initTabs('.nocode-tuduy-tabs', { startIndex: 0 });
        initTabs('.KPI-tudong-tabs', { startIndex: 0 });
        initTabs('.KPI-ketnoi-tabs', { startIndex: 0 });

        

        /**
         * Để script hoạt động, bạn cần đặt Tab và Các nút điều hướng cùng nằm trong 
         * một khối cha chung (thường là .tabs-panel hoặc .tabs-wrapper).
         * Hàm khởi tạo Navigation (Next/Prev buttons) cho Tabs
         * 
         * HƯỚNG DẪN SỬ DỤNG:
         * 1. Cấu trúc HTML bắt buộc:
         *    - Tabs và Buttons phải nằm chung trong một khối cha có class '.tabs-panel' hoặc '.tabs-wrapper'.
         *    - Nút Previous phải có class: '.prev-tab'
         *    - Nút Next phải có class: '.next-tab'
         *    
         *    Ví dụ:
         *    <div class="tabs-panel">
         *         <?php get_template_part('template-parts/tabs/animation_tab', ...); ?>
         *         <div class="tabs-navigation">
         *              <button class="prev-tab">...</button>
         *              <button class="next-tab">...</button>
         *         </div>
         *    </div>
         *    
         * 2. Gọi hàm:
         *    initTabNavigation('.ten-class-cua-tab');
         * 
         * @param {string} selector - Class của wrapper chứa tabs (vd: .tudonghoa)
         */
        function initTabNavigation(selector) {
            var $wrappers = $(selector);
            
            $wrappers.each(function () {
                var $container = $(this);
                // Tìm container cha chứa cả tabs và buttons (thường là .tabs-panel hoặc .tabs-wrapper)
                var $panel = $container.closest('.tabs-panel, .tabs-wrapper');
                
                if ($panel.length === 0) return;

                var $prevBtn = $panel.find('.prev-tab');
                var $nextBtn = $panel.find('.next-tab');

                if ($prevBtn.length === 0 && $nextBtn.length === 0) return;

                function navigate(direction) {
                    // Tìm tabs trong toàn bộ panel để đảm bảo tìm thấy
                    // Hỗ trợ cả cấu trúc .items-container trực tiếp hoặc lồng nhau
                    var $tabs = $panel.find('.items-container .item');
                    
                    if ($tabs.length === 0) return;

                    // Chỉ lấy các tab thuộc về container hiện tại nếu có nhiều nhóm (fallback)
                    // Tuy nhiên thường mỗi tabs-panel chỉ chứa 1 nhóm tabs
                    
                    var $activeTab = $tabs.filter('.active');
                    // Fallback nếu không có class active (mặc định tab đầu tiên)
                    if ($activeTab.length === 0) $activeTab = $tabs.first();

                    var currentIndex = $tabs.index($activeTab);
                    var nextIndex;

                    if (direction === 'next') {
                        nextIndex = (currentIndex + 1) % $tabs.length;
                    } else {
                        nextIndex = (currentIndex - 1 + $tabs.length) % $tabs.length;
                    }
                    
                    // Trigger click để tận dụng logic chuyển tab và animation đã có trong initTabs
                    $tabs.eq(nextIndex).trigger('click');
                }

                $prevBtn.off('click').on('click', function(e) {
                    e.preventDefault();
                    navigate('prev');
                });

                $nextBtn.off('click').on('click', function(e) {
                    e.preventDefault();
                    navigate('next');
                });
            });
        }

        initTabNavigation('.tudonghoa');
        initTabNavigation('.DGNS-thietlap-tabs');
        initTabNavigation('.DGNS-hethong-tabs');

        // Global Load Handler (Safety)
        

    });
})(jQuery);

// =============================================================================
// ========================== LEGACY CODE BACKUP ===============================
// =============================================================================
/*
// 1. CHANGE POSITION CARD (OLD)
function changePosisionCard(targetItem) {
    var wrapper = targetItem.closest('.animation-tabs');
    var card = wrapper.find('.card');
    var wrapperOffset = wrapper.offset().left;
    var itemOffset = targetItem.offset().left;
    var move = itemOffset - wrapperOffset;
    var width = targetItem.outerWidth();
    card.css('left', move + "px")
    card.css('width', width + "px")
}

// 2. INIT UP SLIDE ANIMATION (OLD TANGTOC)
function initUpSlideAnimation(wrapperStr) {
    var wrapper = $(wrapperStr)
    var tabs = wrapper.find('.items-container .item')
    var panels = $(wrapper.find('.panels-container'))

    tabs.on('click', function () {
        var current = $(this)
        var verify = false;
        var nextIndex = tabs.index(current);
        
        panels.find('.tab-pane').each(function (index) {
            if (index == nextIndex) verify = true
            if (!verify) {
                $(this).addClass('up')
            } else {
                $(this).removeClass('up')
            }
        })
    })
}
// initUpSlideAnimation('.tangtoc')

// 3. TICH HOP LOGIC (OLD)
// $('.tichhop.tab-content .tab-pane').addClass('active')
// var tichhop_panel = $('.tichhop.tab-content').find('.tab-pane')
// $('.tichhop.animation-tabs .item').on('click', function () {
//     var $currentPanel = $("#" + $(this).attr('data-bs-target'))
//     let check = false
//     for (let $item of tichhop_panel) {
//         if ($($item).is($currentPanel)) {
//             check = true
//         }
//         if (!check) {
//             $($item).removeClass('active')
//         } else {
//             $($item).addClass('active')
//         }
//     }
// })

// 4. DEFAULT ANIMATION TABS LOGIC (OLD GLOBAL)
/*
$('.animation-tabs').each(function () {
    var $firstItem = $(this).find('.items-container .item:first-child')
    $firstItem.addClass('active')
    var $card = $(this).find('.card')
    // ... logic calculated left/width ...
    
    // Default click
    $(this).find('.items-container .item').on('click', function () {
       // ... remove active siblings ...
       // ... add active current ...
       // ... changePositionCard ...
    })
})
*/