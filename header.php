<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xl-2">
                    <div class="start">
                        <img class="" src=<?php echo get_template_directory_uri() . "/assets/images/Logo1office.svg" ?>
                            alt="">
                    </div>
                </div>
                <div class="col-xl-8">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'navbar_desktop',
                        'container'      => 'nav',
                        'container_class' => 'main-nav',
                        'menu_class'     => 'nav-menu',
                        'walker'         => new Custom_Nav_Walker(),
                    ));
                    ?>
                </div>
                <div class="col-xl-2 d-flex justify-content-end">
                    <div class="end">

                        <button class="search_btn">
                            <img src=<?php echo get_template_directory_uri() . "/assets/images/LogoSearch.svg" ?>
                                alt="">
                        </button>

                        <div class="search_box">
                            <button class="search_box_btn">
                                <img src=<?php echo get_template_directory_uri() . "/assets/images/LogoSearch.svg" ?>
                                    alt="">
                            </button>
                            <input class="search_box_input" type="text" placeholder="Nhập">
                        </div>

                        <button class="language_btn">
                            <img class
                                src=<?php echo get_template_directory_uri() . "/assets/images/LogoLanguage.svg" ?>
                                alt="icon">
                            <p>VIE</p>
                        </button>

                        <div class="language_box">
                            <button class="Vietnam">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/flags/Vietnam.svg"
                                    alt="icon">
                                <p>Tiếng Việt</p>
                                <img class="checked"
                                    src="<?php echo get_template_directory_uri() ?>/assets/images/Vchecked.svg"
                                    alt="icon">
                            </button>
                            <button class="USA">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/flags/USA.svg"
                                    alt="icon">
                                <p>English</p>
                                <img class="checked"
                                    src="<?php echo get_template_directory_uri() ?>/assets/images/Vchecked.svg"
                                    alt="icon">
                            </button>
                        </div>
                        <button class="register_btn">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="register_backdrop" style="opacity: 0; pointer-events:none;">
            <div class="register_window">

            </div>
        </div>

        <?php get_template_part('template_parts/header/header_mega_menu') ?>
    </header>