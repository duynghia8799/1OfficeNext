<?php

/**
 * Template Name: Đánh giá nhân sự 1OfficeNext
 */

get_header(); ?>
<div class="DGNS-page">

<section class="DGNS-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Đánh giá nhân sự công bằng, minh bạch</h1>
                <p class="sub-title-section">Xây dựng hệ thống đánh giá nhân sự toàn diện theo khung năng lực, cung cấp <br/>dữ liệu chính xác cho quản trị và phát triển đội ngũ dài hạn</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button'); ?>
                <div class="demo-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/DGNS_hero.svg'; ?>" alt="demo">
                </div>
            </div>
        </div>
    </div>
</section>



</div>
<?php get_footer(); ?>