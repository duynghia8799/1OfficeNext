<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="zalo-platform-site-verification" content="JO-IEQkaG2LhjEauiA1_B6wLgZY2vtvXCJK" />
    <meta content="<?php is_front_page() ? bloginfo('name') : wp_title(''); ?>" name="description" />
    <title><?= is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?= home_url(); ?>/favicon.ico" type="image/x-icon" />
    <?php
    wp_head();
    get_template_part('template-parts/header/insert', 'thirtypart');
    ?>
</head>

<body <?= body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 d-flex align-items-center">
                    <a href="<?= home_url(); ?> ?>" class="logo">
                        <img class="skip-lazy" width="102" height="35" src=<?= get_template_directory_uri() . "/assets/images/Logo1office.svg" ?> alt="">
                    </a>
                </div>
                <div class="col-xl-8 d-flex">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'navbar_desktop',
                        'container'      => 'nav',
                        'container_class' => 'main-nav',
                        'menu_class'     => 'nav-menu',
                    ));
                    ?>
                </div>
                <div class="col-xl-2 align-items-center d-flex justify-content-end">
                    <div class="group-action">
                        <button class="search_btn">
                            <img src=<?= get_template_directory_uri() . "/assets/images/LogoSearch.svg" ?> alt="">
                        </button>
                        <div class="search_box">
                            <button class="search_box_btn">
                                <img src=<?= get_template_directory_uri() . "/assets/images/LogoSearch.svg" ?> alt="">
                            </button>
                            <input class="search_box_input" type="text" placeholder="Nhập">
                        </div>

                        <button class="language_btn">
                            <img class src=<?= get_template_directory_uri() . "/assets/images/LogoLanguage.svg" ?>
                                alt="icon">
                            <p>VIE</p>
                        </button>
                        <div class="language_box">
                            <button class="Vietnam">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/flags/Vietnam.svg"
                                    alt="icon">
                                <p>Tiếng Việt</p>
                                <img class="checked"
                                    src="<?= get_template_directory_uri() ?>/assets/images/Vchecked.svg" alt="icon">
                            </button>
                            <button class="USA">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/flags/USA.svg" alt="icon">
                                <p>English</p>
                                <img class="checked"
                                    src="<?= get_template_directory_uri() ?>/assets/images/Vchecked.svg" alt="icon">
                            </button>
                        </div>

                        <button class="register_btn">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/header/header_mega_menu') ?>
    </header>