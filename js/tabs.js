(function ($) {
    $(document).ready(function () {
        function changePosisionCard($targetItem) {
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
        /**
         * Hàm khởi tạo Tabs thống nhất
         * @param {string} selector - Class của wrapper (vd: .tangtoc)
         * @param {object} options - { startIndex: number }
         */
        function initTabs(selector, options) {
            var settings = $.extend({
                startIndex: 0
            }, options);

            var $wrappers = $(selector);

            $wrappers.each(function () {
                var $container = $(this);
                // Tìm Tabs
                var $tabs = $container.find('.items-container .item');
                if ($tabs.length === 0) $tabs = $container.find('.item');
                // Tìm Panel Container
                var $panelContainer = $container.find('.tab-content');
                // Fallback tìm kiếm container nếu cấu trúc HTML rời rạc
                if ($panelContainer.length === 0) {
                    $panelContainer = $container.siblings(selector + '.tab-content');
                    if ($panelContainer.length === 0) $panelContainer = $container.siblings('.animation-tabs-content').find('.tab-content');
                    if ($panelContainer.length === 0 && $container.hasClass('tichhop')) $panelContainer = $('.tichhop.tab-content');
                }
                var $panels = $panelContainer.find('.tab-pane');
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
                    // 2. Cập nhật Panel UI
                    // --- CASE ĐẶC BIỆT: TICH HOP ---
                    if ($container.hasClass('tichhop')) {
                        $panels.each(function (i) {
                            $(this).css('z-index', 10 + i); 
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
                            $(this).css('z-index', 10 + i);
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
                }
                // --- BIND EVENT ---
                $tabs.off('click').on('click', function (e) {
                    e.preventDefault();
                    var userIndex = $tabs.index(this);
                    if (userIndex !== -1) updateState(userIndex);
                });
                // --- INITIALIZE ---
                requestAnimationFrame(function () {
                    updateState(currentIndex);
                });
            });
        }
        // ==========================================
        initTabs('.dieuphoi', { startIndex: 0 });
        initTabs('.kyket',    { startIndex: 0 });
        initTabs('.tangtoc',  { startIndex: -1 }); // Mặc định tab cuối
        initTabs('.tichhop',  { startIndex: 0 });
        initTabs('.lienket',  { startIndex: 0 });
        initTabs('.complex_stack', { startIndex: 0 });
        // Global Load Handler (Safety)
        $(window).on('load', function () {
            $('.animation-tabs .items-container .item.active').each(function () {
                changePosisionCard($(this));
            });
        });

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