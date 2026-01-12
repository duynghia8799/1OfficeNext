<?php

/**
 * Template Name: Văn bản 1OfficeNext
 */

get_header(); ?>

<section class="vanban_hero">
    <h1 class="title-section">Giải pháp số hoá 100% hệ thống <br/>văn bản trong doanh nghiệp</h1>
    <p class="title-section">Quản lý, lưu trữ và thiết lập linh hoạt quy trình xử lý văn bản đến, <br/>văn bản đi cùng các văn bản nội bộ trong doanh nghiệp</p>
    <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'template'); ?>
    <div>
        <img src="<?= get_template_directory_uri() . '/assets/images/vanban_hero.svg'; ?>" alt="demo">
    </div>
</section>
<section class="vanban_hero_bottom">
    <h2>6.000+ doanh nghiệp tin dùng</h2>
    <div class="run-bar">
        <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">                    
        <img class="demo-img" src="<?php echo get_template_directory_uri() . '/assets/images/social_hero_bar.svg'; ?>" alt="demo">
    </div>
</section>

<section class="vanban_luutru">
    <h1>Lưu trữ và quản lý trọn vẹn vòng đời văn bản</h1>
    
</section>


<?php get_footer(); ?>