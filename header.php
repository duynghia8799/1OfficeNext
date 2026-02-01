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
        <div class="container header_container">
            <div class="row">
                <div class="col-lg-2 d-flex align-items-center">
                    <a href="<?= home_url(); ?>" class="logo">
                        <img class="skip-lazy" width="102" height="35" src=<?= get_template_directory_uri() . "/assets/images/Logo1office.svg" ?> alt="">
                    </a>
                </div>
                <div class="col-xl-7 d-flex">
                    <nav class="main-nav">
                        <ul class="nav-menu">
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Tính năng</a>
                            </li>
                            <li class="menu-item">
                                <a href="">AI Agents</a>
                            </li>
                            <li class="menu-item">
                                <a href="">No-code</a>
                            </li>
                            <li class="menu-item">
                                <a href="">Bảng giá</a>
                            </li>
                            <li class="menu-item">
                                <a href="">Khách hàng</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a>Tài nguyên</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="" class="item-sub-menu">Tri thức quản trị</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="" class="item-sub-menu">Ebook - Biểu mẫu</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-3 align-items-center d-flex justify-content-end">
                    <div class="group-action">
                        <span class="search_btn">
                            <img src=<?= get_template_directory_uri() . "/assets/images/LogoSearch.svg" ?> alt="Icon">
                            <?= get_search_form(); ?>
                        </span>
                        <span class="language_btn">
                            <img class src=<?= get_template_directory_uri() . "/assets/images/LogoLanguage.svg" ?>
                                alt="icon">
                            <span class="language">VIE</span>
                            <div class="language_box">
                                <span class="item active">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/flags/Vietnam.svg"
                                        alt="icon">
                                    <span class="label">Tiếng Việt</span>
                                </span>
                                <span class="item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/flags/USA.svg"
                                        alt="icon">
                                    <span class="label">English</span>
                                </span>
                            </div>
                        </span>
                        <span class="register_btn">Đăng Ký</span>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/header/mega-menu') ?>
    </header>