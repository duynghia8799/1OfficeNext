<?php

add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'navbar_desktop' => esc_html__('Menu Header'),
        'footer_desktop'  => esc_html__('Menu Footer'),
        'footer_desktop2'  => esc_html__('Menu Footer 2'),
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
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap.min.css', array(), '5.3.8');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/libs/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.3.8', true);

    wp_enqueue_script('theme-menu-open', get_stylesheet_directory_uri() . '/js/nav.js', array('jquery'), '1.0.0', true);
    $openmenu_data = array(
        'template_uri' => get_template_directory_uri(),
    );
    wp_localize_script('theme-menu-open', 'openmenu_Config', $openmenu_data);

    wp_enqueue_script('add-Chervon-menu', get_template_directory_uri() . '/js/addChervon.js', array(), '1.0', true);
});

$walker_file = get_template_directory() . '/template_parts/menu-walker.php';

// Kiểm tra và nhúng file
if (file_exists($walker_file)) {
    require_once($walker_file);
}


function add_description_submenu($item_output, $item, $depth, $args)
{
    if ($depth > 0 && !empty($item->description)) {
        $description_html = '<p class="sub_menu_content_description">' . esc_html($item->description) . '</p>';
        $title_html = '<p class="sub_menu_content_name">' . esc_html($item->title) . '</p>';
        $new_content = $title_html . $description_html;
        $item_output = '<a href="' . esc_url($item->url) . '" class="sub_menu_link ' . esc_attr(implode(' ', $item->classes)) . '">';
        $item_output .= $new_content;
        $item_output .= '</a>';
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_description_submenu', 10, 4);
