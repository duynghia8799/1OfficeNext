<?php

/**
 * Template Name: Ai-Agents 1OfficeNext
 * Template Post Type: page 
 */
get_header();
$data_file_path = get_stylesheet_directory() . '/data/ai_agents_data.php';
$page_data = file_exists($data_file_path) ? require $data_file_path : [];

$tab1 = isset($page_data['tang_toc_data']) ? $page_data['tang_toc_data'] : [];
$v_icon = get_template_directory_uri() . '/assets/images/icons/ai_agents_li_icon.svg';
?>

<div style="height: 200px; width:100%; background-color:grey;"></div>

<div class="tangtoc_container">
    <div class="container">
        <div class="row tangtoc_row">
            <h1>Ra quyết định nhanh hơn, chính xác hơn,  tăng tốc độ xử lý và tối ưu hiệu quả công việc</h1>
            <?php get_template_part('template_parts/tabs/animation_tab', 'teamplate', $tab1); ?>
        </div>


    </div>
</div>




<div style="height: 200px; width:100%; background-color:grey;"></div>

<?php get_footer();
