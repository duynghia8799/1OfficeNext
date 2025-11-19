(function ($) {
    $(document).ready(function () {
        function mega_menu_action($targetBox) {
            if ($targetBox.hasClass('mega_menu') && $targetBox.hasClass('open')) {
                $('.mega_menu_cat button.nav-link:first').addClass('active')
                $('.mega_menu_cat button.nav-link:first').parent().addClass('active')
                $('.mega_menu_content .tab-content .container_items:first ').addClass('active')
            } else {
                $('.mega_menu_cat button.nav-link').removeClass('active')
                $('.mega_menu_cat .mega_menu_cat_btn').removeClass('active')
                $('.mega_menu_content .tab-content .container_items ').removeClass('active')
            }
        }

        const $allBoxes = $('.mega_menu, .menu-item-has-children ul , .search_box, .language_box');
        $('.nav-menu a').each(function () {
            $(this).click(function (event) {

                if ($(this).parent().hasClass('tinhnang')) {
                    event.preventDefault()
                    $targetBox = $('.mega_menu')
                } else if ($(this).parent().hasClass('menu-item-has-children')) {
                    event.preventDefault()
                    console.log('other click')
                    $targetBox = $(this).siblings('ul');
                } else {
                    return
                }
                $targetBox.toggleClass('open');
                $allBoxes.not($targetBox).removeClass('open');
                mega_menu_action($targetBox)
            })
        })

        $('.mega_menu_cat_btn button.nav-link').click(function () {
            $('.mega_menu_cat_btn').removeClass('active')
            if ($(this).hasClass('active')) {
                $(this).parent().addClass('active')
            }
        })


        $('.search_btn, .language_btn').click(function (event) {
            event.preventDefault()
            if ($(this).hasClass('search_btn')) {
                $targetBox = $('.search_box');
            } else if ($(this).hasClass('language_btn')) {
                $targetBox = $('.language_box');
            } else {
                return;
            }
            $targetBox.toggleClass('open');
            $allBoxes.not($targetBox).removeClass('open');
            mega_menu_action($targetBox)

            //tắt mega menu
        });

    });
})(jQuery);

