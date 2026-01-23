<?php

/**
 * Template Name: Tính lương 1OfficeNext
 */

get_header(); ?>
<div class="tinhluong-page">

<section class="tinhluong-hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section"></h1>
                <p class="sub-title-section"></p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai.php', 'button')?>
                <img src="<?= get_template_directory_uri()?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="tinhluong-loaibo">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section"></h1>
                <div class="content">
                    <div class="item">
                        <img src="<?= get_template_directory_uri()?>" alt="">
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri()?>" alt="">
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="item">
                        <img src="<?= get_template_directory_uri()?>" alt="">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
<?php get_footer()?>