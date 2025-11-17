<?php
// tham khảo https://themefoundation.com/menu-item-descriptions/ 

function add_description_submenu($item_output, $item, $depth, $args)
{
    if ($args->theme_location != 'navbar_desktop') {
        return $item_output;
    }
    if ($depth > 0 && !empty($item->description)) {
        $description_html = '<p class="sub_menu_content_description">' . esc_html($item->description) . '</p>';
        $title_html = '<p class="sub_menu_content_name">' . esc_html($item->title) . '</p>';
        $chevron = "<img class='chevron_right' src='" .  get_template_directory_uri() . "/assets/images/Chevron_blue_right.svg' alt='icon'>";
        $item_output = '<a href="' . esc_url($item->url) . ' " class="sub_menu_link ' . esc_attr(implode(' ', $item->classes)) . '"> ' . $title_html . $description_html . $chevron . '</a>';
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_description_submenu', 10, 4);
