<?php
function debug()
{
    $s = '';
    $args = func_get_args();
    foreach ($args as $a) {
        $m = null;
        $text = print_r($a, true);
        if (preg_match("/^@(.*)/is", $text, $m)) {
            $text = $m[1];
        }

        $s .= "<pre>" . $text . "</pre>";
    }

    $logs = debug_backtrace();
    $log = array_shift($logs);
    if ($log) {
        $s = "<h6 style='background:#f7f8f9;boder:1px solid #ccc;padding:5px'>Debug at line <b>{$log['line']}</b>, in file <b>{$log['file']}</b></h6>" . $s;
    }

    die($s);
    exit;
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'rest_output_link_header', 11);
remove_action('wp_head', 'rsd_link');

//Remove Default jQuery
add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});

add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'navbar_desktop' => esc_html__('Menu Header'),
        'footer_desktop' => esc_html__('Menu Footer'),
        'footer_desktop_2' => esc_html__('Menu Footer 2'),
    ));

    add_theme_support('html5', array(
        'search-form',
        'gallery',
        'caption',
    ));
});

add_action('wp_enqueue_scripts', function () {
    $ver = '1.1';
    wp_enqueue_style('theme-main-style', get_stylesheet_uri(), array(), $ver);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap.min.css', array(), '5.3.8');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/libs/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.3.8', true);
    wp_enqueue_script('nav-js', get_stylesheet_directory_uri() . '/js/nav.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('tabs-animation', get_stylesheet_directory_uri() . '/js/tabs.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scroll-checking', get_stylesheet_directory_uri() . '/js/scroll_checking.js', array('jquery'), '1.0.0', true);

    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
});

add_filter('walker_nav_menu_start_el', function ($itemOutput, $item, $depth, $args) {
    if (!empty($item->description)) {
        $descItem = '<span class="item-description">' . esc_html($item->description) . '</span>';
        $titleItem = '<span class="item-title">' . esc_html($item->title) . '</span>';
        $itemOutput = '<a href="' . esc_url($item->url) . '" class="item-sub-menu">' . $titleItem . $descItem . '</a>';
    }
    return $itemOutput;
}, 10, 4);
