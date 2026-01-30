<?php
$all_data = require get_template_directory() . '/data/slider_data.php';

// Try to determine the slider ID/Name from args, or fallback to 'data1'
$slider_uid = $args['name'] ?? 'data1';
$slider_data = $args ?? ($all_data[$slider_uid] ?? []);

// If still empty (e.g. invalid name passed), fallback to data1 from file
if (empty($slider_data) || !isset($slider_data['slides'])) {
    $slider_data = $all_data['data1'];
}

// Generate a unique ID suffix for this slider instance to prevent conflicts
$unique_suffix = uniqid(); 

// Array to collect modal HTML content
$modals_html = [];

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
                            'red' => '#EE2D25',
                        ];
                        
                        foreach ($slider_data['slides'] as $index => $slide) : 
                            $color_hex = isset($color_map[$slide['color']]) ? $color_map[$slide['color']] : '#000000';
                            
                            // Generate unique modal ID for this specific slide
                            $modal_id = "modal-video-{$slider_uid}-{$index}-{$unique_suffix}";
                            
                            // Prepare Modal HTML and store it in array (to be rendered outside the loop)
                            // Note: Added data-bs-dismiss="modal" to .modal-content click (optional for convenience) or ensure clicking outside works
                            ob_start(); 
                            ?>
                            <div class="modal fade" id="<?= $modal_id ?>" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content" style="background: transparent; border: none;">
                                        <div class="modal-body p-0">
                                            <div class="ratio ratio-16x9">
                                                <?= $slide['iframe'] ?? '' ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $modals_html[] = ob_get_clean();
                            ?>

                            <div class="slide-item">
                                <div class="video-container">
                                    <!-- Thumbnail triggers Modal -->
                                    <button type="button" class="btn-video-trigger" data-bs-toggle="modal" data-bs-target="#<?= $modal_id ?>" style="border: none; padding: 0; background: none;">
                                        <img src="<?= esc_url($slide['video-url']) ?>" alt="">
                                    </button>
                                    
                                    <div class="button-container">
                                        <div class="content-button">
                                            <div class="mini-box"></div>
                                            <!-- Arrow Button (keeps original purpose) -->
                                            <button>
                                                <img src="<?= get_template_directory_uri() . '/assets/images/icons/tintuong_arrow_btn.svg'?>" alt="">
                                            </button>
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
                                                <li><img src="<?= get_template_directory_uri() . '/assets/images/icons/V_circle_'. $slide['color'] . '_bg_' . $slide['color'] . 'sky.svg' ?>" alt=""><span><?= esc_html($ketqua) ?></span></li>
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

<!-- Render Modals Outside the Slider Container -->
<?php 
foreach ($modals_html as $modal) {
    echo $modal;
}
?>
