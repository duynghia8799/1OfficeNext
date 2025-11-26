<?php

/**
 * Template Name: Ai-Agents 1OfficeNext
 * Template Post Type: page 
 */
get_header();
$data_file_path = get_stylesheet_directory() . '/data/ai_agents_data.php';
$page_data = file_exists($data_file_path) ? require $data_file_path : [];

$tab1 = isset($page_data['tang_toc_data']) ? $page_data['tang_toc_data'] : [];
$tab2 = isset($page_data['tich_hop_data']) ? $page_data['tich_hop_data'] : [];

$svg_hero = file_get_contents(get_template_directory_uri() . '/assets/images/ai_agents_all.svg');
if ($svg_hero === false) {
    $svg_hero = "<p style='color: red;'>Lỗi: Không tìm thấy file SVG.</p>";
}
?>

<section class="ai-agents-hero">
    <div class="container">
        <div class="row">
            <div class="content">
                <h1 class="title-section"><span class="br-line title-bold">AI Agents</span>
                    <span class="br-line">Giải phóng nguồn lực</span>
                    Tăng cường hiệu suất vận hành
                </h1>'
                <p>Làm việc thông minh hơn với trợ lý AI dành cho doanh nghiệp của bạn.
                    Đơn giản hoá mọi tác vụ từ truy xuất, phân tích dữ liệu đến ra quyết định</p>
                <?= get_template_part('template_parts/callout_parts/dk_chat_ai', 'template') ?>
            </div>
            <div class="img-container">
                <?php echo $svg_hero ?>
            </div>

        </div>
    </div>
</section>

<section class>

</section>

<section class="ai-agents-tangtoc">
    <div class="container">
        <div class="row tangtoc-row">
            <h1 class="title-section">Ra quyết định nhanh hơn, chính xác hơn, <span class="br-line">tăng tốc độ xử lý và
                    tối ưu hiệu quả công việc</span></h1>
            <?php get_template_part('template_parts/tabs/animation_tab', 'template', $tab1); ?>
        </div>
    </div>
</section>



<section class="ai-agents-tichhop">
    <div class="container">
        <div class="row tichhop-row">
            <h1 class="title-section">Tích hợp AI vào quy trình làm việc. Giảm tải <span class="br-line">tác vụ lặp và
                    kiểm soát toàn diện hiệu quả đầu ra</span></h1>
            <?php get_template_part('template_parts/tabs/animation_tab', 'template', $tab2) ?>

        </div>
    </div>
</section>




<div style="height: 200px; width:100%; background-color:grey;"></div>

<?php get_footer();
