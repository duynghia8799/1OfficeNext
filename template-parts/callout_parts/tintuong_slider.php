<?php
$all_data = require get_template_directory() . '/data/slider_data.php';
$slider_data = $all_data['data1'] ?? [];

if (!empty($args) && is_array($args)) {
    $slider_data = $args;
}

if (empty($slider_data)) return;
?>

<section class="tintuong-slider">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title-section"><?= $slider_data['section-title'] ?></h1>
                <div class="custom-slider-container">
                    <div class="slider-wrapper">
                        <?php 
                        $color_map = [
                            'blue' => '#0052E2',      
                            'yellow' => '#D9AB27',    
                            'original' => '#F37022',  
                            'green' => '#55BA63',
                        ];
                        
                        foreach ($slider_data['slides'] as $index => $slide) : 
                            $color_hex = isset($color_map[$slide['color']]) ? $color_map[$slide['color']] : '#000000'; // Default to black or any fallback
                        ?>
                            <div class="slide-item">
                                <div class="video-container">
                                    <!-- sau thay thành video --> 
                                    <img src="<?= esc_url($slide['video-url']) ?>" alt="">
                                    <div class="button-container">
                                        <div class="content-button">
                                            <div class="mini-box"></div>
                                            <button><img src="<?= get_template_directory_uri() . '/assets/images/icons/tintuong_arrow_btn.svg'?>" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="head">
                                        <div class="head-img">
                                            <img src="<?= esc_url($slide['logo-congty']) ?>" alt="">
                                        </div>
                                        <div class="head-item">
                                            LĨNH VỰC
                                            <span style="color: <?= esc_html($color_hex) ?>"><?= esc_html($slide['linhvuc']) ?></span>
                                        </div>
                                        <div class="head-item">
                                            QUY MÔ
                                            <span style="color: <?= esc_html($color_hex) ?>"><?= esc_html($slide['quymo']) ?></span>
                                        </div>
                                        <div class="head-item">
                                            GIẢI PHÁP
                                            <span style="color: <?= esc_html($color_hex) ?>"><?= esc_html($slide['giaiphap']) ?></span>
                                        </div>
                                    </div>
                                    <div class="feedback" style="border-left: <?= esc_html($color_hex) ?> 0.2rem solid;">
                                        <?= esc_html($slide['feedback']) ?>
                                    </div>
                                    <div class="user">
                                        <img src="<?= esc_url($slide['user']['avatar']) ?>" alt="">
                                        <div class="user-info">
                                            <p class="user-name"><?= esc_html($slide['user']['danhxung']) ?>&nbsp;<span><?= esc_html($slide['user']['name']) ?></span></p>
                                            <p class="position"><?= esc_html($slide['user']['position']) ?></p>
                                        </div>
                                    </div>
                                    <div class="ketqua">
                                        <p>Kết quả nổi bật</p>
                                        <ul>
                                            <?php foreach ($slide['ketqua'] as $ketqua) : ?>
                                                <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/V_circle_'. $slide['color'] . '.svg' ?>" alt=""><span><?= esc_html($ketqua) ?></span></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="slider-pagination">
                        <?php foreach ($slider_data['slides'] as $index => $slide) : ?>
                            <span class="dot <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>"></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
