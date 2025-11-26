(function ($) {
    $(document).ready(function () {
        //default
        function changePosisionCard($targetItem) {
            var $wrapper = $targetItem.closest('.animation-tabs');
            var $card = $wrapper.find('.card');

            var wrapperOffset = $wrapper.offset().left;
            var itemOffset = $targetItem.offset().left;

            var move = itemOffset - wrapperOffset;
            var width = $targetItem.outerWidth();

            $card.css({
                'left': move + 'px',
                'width': width + 'px'
            });
        }

        $('.animation-tabs').each(function () {
            var $currentTabGroup = $(this);
            var $firstItem = $currentTabGroup.find('.items-container .item').first();
            $firstItem.addClass('active')
            changePosisionCard($firstItem)
            $("#" + $($firstItem).attr('data-bs-target')).addClass('active')

            $currentTabGroup.find('.items-container .item').on('click', function () {
                $currentTabGroup.find('.items-container .item').removeClass('active');
                $(this).addClass('active');

                $("." + $(this).attr('panels-container') + ".panels-container .tab-pane").removeClass('active')
                $("#" + $(this).attr('data-bs-target')).addClass('active')
                changePosisionCard($(this))
            });
        })
        //

        //animation up tangtoc
        var $firstItem_tangtoc = $('.tangtoc.animation-tabs .items-container .item').first();
        $("#" + $($firstItem_tangtoc).attr('data-bs-target')).addClass('up')

        var tangtoc_panel = $('.tangtoc.tab-content').find('.tab-pane')
        $('.tangtoc.animation-tabs .item').on('click', function () {
            $("." + $(this).attr('panels-container') + ".panels-container .tab-pane").removeClass('up')
            var $currentPanel = $("#" + $(this).attr('data-bs-target'))
            console.log($currentPanel)
            for (let $item of tangtoc_panel) {
                $($item).addClass('up')
                if ($($item).is($currentPanel)) {
                    $($item).addClass('up')
                    return
                }
            }
        })

        //animation up tichhop
        $('.tichhop.tab-content .tab-pane').addClass('active')
        var tichhop_panel = $('.tichhop.tab-content').find('.tab-pane')

        $('.tichhop.animation-tabs .item').on('click', function () {
            var $currentPanel = $("#" + $(this).attr('data-bs-target'))
            console.log('check')
            console.log($currentPanel)
            let check = false
            for (let $item of tichhop_panel) {
                if ($($item).is($currentPanel)) {
                    check = true
                }
                if (!check) {
                    $($item).removeClass('active')
                } else {
                    $($item).addClass('active')
                }
            }
        })

    })
})(jQuery);