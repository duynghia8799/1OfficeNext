<?php

add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'navbar_desktop' => esc_html__('Menu Header'),
        'footer_desktop'  => esc_html__('Menu Footer'),
        'footer_desktop_2'  => esc_html__('Menu Footer 2'),
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
});


add_action('wp_enqueue_scripts', function () {
    $ver = '1.0';
    wp_enqueue_style('theme-main-style', get_stylesheet_uri(), array(), $ver);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap.min.css', array(), '5.3.8');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/libs/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.3.8', true);

    wp_enqueue_script('theme-menu-open', get_stylesheet_directory_uri() . '/js/nav.js', array('jquery'), '1.0.0', true);
    $openmenu_data = array(
        'template_uri' => get_template_directory_uri(),
    );
    wp_localize_script('theme-menu-open', 'openmenu_Config', $openmenu_data);
});

require_once get_template_directory() . '/template_parts/header/sub_menu_description.php';
