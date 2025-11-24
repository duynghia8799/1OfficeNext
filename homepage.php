<?php

/**
 * Template Name: Trang Chủ 1OfficeNext
 * Template Post Type: page 
 */

get_header();
$tabs_data = [
    'name' => 'hesinhthai',
    'tabs' => [
        [
            'title' => 'Nhân sự',
            'icon' => '',
            'content_panel' => 'Panel:1'
        ],
        [
            'title' => 'Dự án',
            'icon' => '',
            'content_panel' => 'Panel:2'
        ],
        [
            'title' => 'Quy trình',
            'icon' => '',
            'content_panel' => 'Panel:3'
        ],
        [
            'title' => 'Khách hàng',
            'icon' => '',
            'content_panel' => 'Panel:4'
        ],
        [
            'title' => 'Mạng nội bộ',
            'icon' => '',
            'content_panel' => 'Panel:5'
        ],
        [
            'title' => 'Tài chính',
            'icon' => '',
            'content_panel' => 'Panel:6'
        ],
        [
            'title' => 'Ký số',
            'icon' => '',
            'content_panel' => 'Panel:7'
        ],

    ]
] ?>

<div style="height: 200px; width:100%; background-color:grey;"></div>
<div style="height: 200px; width:100%; background-color:grey; display:flex; flex-direction:column; align-items:center">
    <?php get_template_part('template_parts/tabs/animation_tab', 'teamplate', $tabs_data); ?>
</div>
<div style="height: 200px; width:100%; background-color:grey;"></div>

<?php get_footer();
