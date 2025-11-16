<?php

if (! defined('THEME_VERSION')) {
    define('THEME_VERSION', '1.0.0');
}

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

    wp_enqueue_script('theme-menu-open', get_stylesheet_directory_uri() . '/js/menu-open.js', array('jquery'), '1.0.0', true);
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



//tham khảo
class Custom_Nav_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        if ($depth > 0) {

            $menu_name = apply_filters('the_title', $item->title, $item->ID);
            $menu_href = $item->url;
            $menu_title = $item->attr_title;


            $custom_classes = array_filter($item->classes, function ($class) {
                return ! in_array($class, ['menu-item', 'menu-item-type-custom', 'menu-item-object-custom', 'menu-item-has-children', 'current-menu-item', 'current_page_item']);
            });
            $menu_class = implode(' ', $custom_classes);
            $menu_description = $item->description;

            ob_start();

            $component_path = get_template_directory() . '/template_parts/header/header_sub_menu_btn.php';

            if (file_exists($component_path)) {
                include($component_path);
            }

            $button_html = ob_get_clean();
            $li_classes = implode(' ', $item->classes);

            $output .= $indent . '<li class="' . esc_attr($li_classes) . '">' . $button_html;
        } else {
            $attributes = '';
            $atts = array(
                'title'  => ! empty($item->attr_title) ? $item->attr_title : '',
                'target' => ! empty($item->target)     ? $item->target     : '',
                'rel'    => ! empty($item->xfn)        ? $item->xfn        : '',
                'href'   => ! empty($item->url)        ? $item->url        : '',
            );

            foreach ($atts as $attr => $value) {
                if (! empty($value)) {
                    $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $li_classes = implode(' ', $item->classes);

            $output .= $indent . '<li class="' . esc_attr($li_classes) . '">' . $item_output;
        }
    }
}