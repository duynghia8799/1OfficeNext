<?php

/**
 * Template Name: Tài sản 1OfficeNext
 */

get_header(); ?>

<div class="taisan-page">

<section class="taisan-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Giải pháp quản lý tài sản tập trung và minh bạch</h1>
                <p class="sub-title-section">Quản lý xuyên suốt từ khâu mua sắm, cấp phát, sử dụng đến thu hồi tài sản, đảm bảo <br/>dữ liệu nhất quán, minh bạch và dễ dàng kiểm soát</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai', 'button'); ?>  
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/taisan_hero.svg" alt="">
            </div>
        </div>
    </div>
</section>

</div>


<?php get_footer(); ?>
