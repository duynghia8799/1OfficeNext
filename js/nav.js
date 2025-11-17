(function ($) {
    $(document).ready(function () {

        function setActiveCatBtn(active_class) {
            $('.mega_menu_cat_btn').removeClass('active');
            $(`.${active_class}`).addClass('active');
        }
        setActiveCatBtn("cat_1work");

        function switchMegaMenuTab(catClass, itemsClass, accessText, accessLink = '#') {
            setActiveCatBtn(catClass);

            $('.items_1work, .items_1hrm, .items_1crm').removeClass('open');
            $(`.${itemsClass}`).toggleClass('open');

            var chevronPath = openmenu_Config.template_uri + '/assets/images/Chevron_right.svg';
            var chevronPathHover = openmenu_Config.template_uri + '/assets/images/Chevron_blue_right.svg';
            $(".truycap").attr('href', accessLink);
            $(".truycap").html(`${accessText} <img src="${chevronPath}" alt="icon"> <img class="hover" src="${chevronPathHover}" alt="icon"></img>`);
        }
        $(".cat_1work").click(function () {
            switchMegaMenuTab("cat_1work", "items_1work", "Truy cập 1Work", "truycap_1work");
        });
        $(".cat_1hrm").click(function () {
            switchMegaMenuTab("cat_1hrm", "items_1hrm", "Truy cập 1HRM", "truycap__1hrm");
        });
        $(".cat_1crm").click(function () {
            switchMegaMenuTab("cat_1crm", "items_1crm", "Truy cập 1CRM", "truycap__1crm");
        });


        const $allBoxes = $('.mega_menu, .search_box, .language_box, .banggia ul');
        $('.tinhnang, .menu-item-has-children > a, .search_btn, .language_btn').click(function (event) {
            event.preventDefault()

            if ($(this).hasClass('tinhnang')) {
                $targetBox = $('.mega_menu');
            } else if ($(this).parent().hasClass('menu-item-has-children')) {
                $targetBox = $(this).siblings('ul');

            } else if ($(this).hasClass('search_btn')) {
                $targetBox = $('.search_box');
            } else if ($(this).hasClass('language_btn')) {
                $targetBox = $('.language_box');
            } else {
                return;
            }
            $targetBox.toggleClass('open');
            $allBoxes.not($targetBox).removeClass('open');

            //tắt mega menu
            if ($targetBox.hasClass('mega_menu') && $targetBox.hasClass('open')) {
                switchMegaMenuTab("cat_1work", "items_1work", "Truy cập 1Work", "truycap_1work");
            } else {
                $('.items_1work, .items_1hrm, .items_1crm').removeClass("open");
            }
        });

    });
})(jQuery);

