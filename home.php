<?php

/**
 * Template Name: Trang chủ 1Office Next
 */

get_header();
?>
<div class="home-page">
    <div class="hero-banner">
        <div class="container">
            <span class="section-title">
                1Office Next <span>với sự kết hợp</span> AI và No-code <br />
                <span>giúp doanh nghiệp vận hành</span> ”như bạn tưởng tượng”
            </span>
            <div class="tour-guide">
                <?php // include 'banner-root.svg' ?>
                <img src="<?= get_template_directory_uri(); ?>/banner-root.svg" alt="">
            </div>
        </div>

    </div>
    <div class="section-together">
        <div class="container">
            <span class="section-title">Đồng hành cùng doanh nghiệp tối ưu hiệu quả vận hành</span>
            <div class="section-numbers">
                <div class="item">
                    <span class="number">500K+</span>
                    <span class="title">Người dùng thường xuyên</span>
                </div>
                <div class="item">
                    <span class="number">100+</span>
                    <span class="title">Ứng dụng thông minh</span>
                </div>
                <div class="item">
                    <span class="number">6.000+</span>
                    <span class="title">Khách hàng doanh nghiệp</span>
                </div>
            </div>
            <div class="list-number">
                <span class="title-list-number">Và chúng tôi đã giúp doanh nghiệp quản lý</span>
                <div class="box-numbers">
                    <div class="item">
                        <span class="number">145K+</span>
                        <span class="title">Tổng số dự án</span>
                    </div>
                    <div class="item">
                        <span class="number">20.7M+</span>
                        <span class="title">Tổng số công việc</span>
                    </div>
                    <div class="item">
                        <span class="number">22.6M+</span>
                        <span class="title">Số files đính kèm</span>
                    </div>
                    <div class="item">
                        <span class="number">15.6M+</span>
                        <span class="title">Tổng số quy trình</span>
                    </div>
                    <div class="item">
                        <span class="number">428K+</span>
                        <span class="title">Tổng số HSNS</span>
                    </div>
                    <div class="item">
                        <span class="number">259M+</span>
                        <span class="title">Tổng chốt vân tay</span>
                    </div>
                    <div class="item">
                        <span class="number">12.5M+</span>
                        <span class="title">Tổng số đơn từ</span>
                    </div>
                    <div class="item">
                        <span class="number">496k+</span>
                        <span class="title">Tổng số HĐLĐ</span>
                    </div>
                    <div class="item">
                        <span class="number">1.2M+</span>
                        <span class="title">Tổng số KH</span>
                    </div>
                    <div class="item">
                        <span class="number">1M+</span>
                        <span class="title">Tổng số đơn hàng</span>
                    </div>
                    <div class="item">
                        <span class="number">282K+</span>
                        <span class="title">Tổng số hợp đồng</span>
                    </div>
                    <div class="item">
                        <span class="number">165K+</span>
                        <span class="title">Tổng số báo giá</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-solution">
        <div class="container">
            <div class="section-title">
                <span class="title">Giải pháp quản trị toàn diện, đáng tin cậy</span>
                <p class="desc">Kiến tạo hệ thống vận hành tự động, nơi doanh nghiệp làm chủ quy trình, dữ liệu và toàn
                    bộ hoạt động - hướng đến môi trường làm việc thông minh, linh hoạt</p>
            </div>
            <div class="list-solution">
                <div class="item">
                    <div class="thumb">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/home/sol-1.svg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag brain">BRAIN</span>
                        <span class="title">AI</span>
                        <p class="desc">Truy xuất & phân tích dữ liệu từ mọi bộ phận, giúp nhà quản lý nắm rõ tình
                            hình vận hành, dự báo rủi ro, đưa ra hành động & quyết định chính xác, kịp thời</p>
                        <a href="#" class="see-more">
                            <span>Trải nghiệm ngay</span>
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/arrow-round.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/home/sol-2.svg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag goal">GOAL</span>
                        <span class="title">Automation</span>
                        <p class="desc">Tự động hóa toàn diện với khả năng mạnh mẽ của AI và No-code, mở ra mô hình
                            tổ chức linh hoạt hơn, thích ứng nhanh và tự động cải tiến bằng chính dữ liệu nội bộ</p>
                        <a href="#" class="see-more">
                            <span>Trải nghiệm ngay</span>
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/arrow-round.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/home/sol-3.svg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag heart">HEART</span>
                        <span class="title">No-code</span>
                        <p class="desc">Giao diện kéo thả linh hoạt, không phụ thuộc vào IT. Người dùng dễ dàng cài
                            đặt, tùy chỉnh và mở rộng hệ thống, rút ngắn 80% thời gian triển khai</p>
                        <a href="#" class="see-more">
                            <span>Trải nghiệm ngay</span>
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/icons/arrow-round.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-ai-agent">
        <div class="container">
            <div class="section-title">
                <span class="title">1AI Agents</span>
                <p class="desc">Giúp ra quyết định nhanh chóng, chính xác</p>
            </div>
            <div class="list-agents">
                <?= file_get_contents(get_template_directory() . '/assets/images/home/ai-agents.svg'); ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
