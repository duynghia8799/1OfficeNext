(function ($) {
    $(document).ready(function () {
        // function mega_menu_action($targetBox) {
        //     if ($targetBox.hasClass('mega_menu') && $targetBox.hasClass('open')) {
        //         $('.mega_menu_cat button.nav-link:first').addClass('active')
        //         $('.mega_menu_cat button.nav-link:first').parent().addClass('active')
        //         $('.mega_menu_content .tab-content .container_items:first ').addClass('active')
        //     } else {
        //         $('.mega_menu_cat button.nav-link').removeClass('active')
        //         $('.mega_menu_cat .mega_menu_cat_btn').removeClass('active')
        //         $('.mega_menu_content .tab-content .container_items ').removeClass('active')
        //     }
        // }

        // const $allBoxes = $('.mega_menu, .menu-item-has-children ul , .search_box, .language_box');
        // $('.nav-menu a').each(function () {
        //     $(this).click(function (event) {
        //         event.preventDefault()
        //         if ($(this).parent().hasClass('tinhnang')) {
        //             $targetBox = $('.mega_menu')
        //         } else if ($(this).parent().hasClass('menu-item-has-children')) {
        //             console.log('other click')
        //             $targetBox = $(this).siblings('ul');
        //         } else {
        //             return
        //         }
        //         $targetBox.toggleClass('open');
        //         $allBoxes.not($targetBox).removeClass('open');
        //         mega_menu_action($targetBox)
        //     })
        // })

        // $('.mega_menu_cat_btn button.nav-link').click(function () {
        //     $('.mega_menu_cat_btn').removeClass('active')
        //     if ($(this).hasClass('active')) {
        //         $(this).parent().addClass('active')
        //     }
        // })


        // $('.search_btn, .language_btn').click(function (event) {
        //     event.preventDefault()
        //     if ($(this).hasClass('search_btn')) {
        //         $targetBox = $('.search_box');
        //     } else if ($(this).hasClass('language_btn')) {
        //         $targetBox = $('.language_box');
        //     } else {
        //         return;
        //     }
        //     $targetBox.toggleClass('open');
        //     $allBoxes.not($targetBox).removeClass('open');
        //     mega_menu_action($targetBox)

        //     //tắt mega menu
        // });
        const $navMenus = $('nav .nav-menu > li.menu-item');
        if ($navMenus.length > 0) {
            $navMenus.each(function (index) {
                const item = this;
                if (index === 0) {
                    $(this).addClass('menu-item-has-children') // Để hiện arrow down như những item có submenu khác
                }
                $(item).click(function (e) {
                    $navMenus.removeClass('active');

                    if (index === 0) {
                        $('.mega_menu').addClass('active');
                    } else {
                        if ($(this).hasClass('menu-item-has-children')) {
                            $('.mega_menu').removeClass('active');
                            $(this).toggleClass('active');
                            e.preventDefault();
                        }
                    }
                });
            });
        }
    });
})(jQuery);

