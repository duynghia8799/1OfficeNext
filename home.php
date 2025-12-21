<?php

/**
 * Template Name: Trang chủ 1Office Next
 */

get_header();
?>
<div class="home-page">
    <div class="section-banner">
        <div class="container">
            <span class="section-title">
                1Office Next <span>với sự kết hợp</span> AI và No-code <br />
                <span>giúp doanh nghiệp vận hành</span> ”như bạn tưởng tượng”
            </span>
            <div class="tour-guide">
                <?php // include 'banner-root.svg' ?>
                <img src="<?= esc_url(get_template_directory_uri() . '/banner-root.svg'); ?>" alt="">
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
    <div class="section-module">
        <div class="container">
            <span class="section-title">Hệ sinh thái với 100+ ứng dụng thông minh</span>
            <div class="module-tab animation-tabs">
                <div class="module-nav nav items-container">
                    <div class="card"></div>
                    <button class="active item nav-link" data-bs-toggle="tab" data-bs-target="#module-1">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/module-1.svg'); ?>"
                            alt="">
                        <div class="label">Nhân sự</div>
                    </button>
                    <button class="item nav-link" data-bs-toggle="tab" data-bs-target="#module-2">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/module-2.svg'); ?>"
                            alt="">
                        <div class="label">Dự án</div>
                    </button>
                    <button class="item nav-link" data-bs-toggle="tab" data-bs-target="#module-3">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/module-3.svg'); ?>"
                            alt="">
                        <div class="label">Quy trình</div>
                    </button>
                    <button class="item nav-link" data-bs-toggle="tab" data-bs-target="#module-4">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/module-4.svg'); ?>"
                            alt="">
                        <div class="label">Khách hàng</div>
                    </button>
                    <button class="item nav-link" data-bs-toggle="tab" data-bs-target="#module-5">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/module-5.svg'); ?>"
                            alt="">
                        <div class="label">Mạng nội bộ</div>
                    </button>
                    <button class="item nav-link" data-bs-toggle="tab" data-bs-target="#module-6">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/module-6.svg'); ?>"
                            alt="">
                        <div class="label">Tài chính</div>
                    </button>
                    <button class="item nav-link" data-bs-toggle="tab" data-bs-target="#module-7">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/module-7.svg'); ?>"
                            alt="">
                        <div class="label">Ký số</div>
                    </button>
                </div>
                <div class="module-content tab-content">
                    <div class="tab-pane show active" id="module-1">
                        <div class="module-item">
                            <div class="content">
                                <div class="title">Quản lý toàn diện nguồn nhân lực
                                    Nâng tầm trải nghiệm nhân viên</div>
                                <div class="desc">Số hoá và tự động hóa toàn bộ nghiệp vụ nhân sự - từ tuyển dụng, chấm
                                    công đến tính lương - với 1AI, trợ lý thông minh giúp truy xuất, phân tích và dự báo
                                    chính xác theo dữ liệu thời gian thực</div>
                                <a class="btn-action">
                                    <span>Tìm hiểu thêm</span>
                                </a>
                                <div class="list-module">
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-tuyendung.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Tuyển dụng</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-hsns.svg"
                                                alt="">
                                        </div>
                                        <div class="label">HSNS</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-cc.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Chấm công</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-luong.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Tính lương</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-dontu.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Đơn từ</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-danhgia.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Đánh giá</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-kpi.svg"
                                                alt="">
                                        </div>
                                        <div class="label">KPI</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-okr.svg"
                                                alt="">
                                        </div>
                                        <div class="label">OKR</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-baohiem.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Bảo hiểm</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-daotao.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Đào tạo</div>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb">
                                <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/img-module-1.svg'); ?>"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="module-2">
                        <div class="module-item">
                            <div class="content">
                                <div class="title">Tăng tốc dự án, kết nối đội nhóm và quản lý công việc tập trung</div>
                                <div class="desc">Hệ thống quản lý dự án đa chiều: Khối lượng công việc - Tiến độ - Nhân
                                    sự - Vật tư - Tài chính. 1WORK hỗ trợ tự động giao việc, báo cáo, tối ưu workload
                                    và cảnh báo thông minh khi có điểm nghẽn</div>
                                <a class="btn-action">
                                    <span>Tìm hiểu thêm</span>
                                </a>
                                <div class="list-module">
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-duan.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Dự án</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-congviec.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Công việc</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-tailieu.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Tài liệu</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-lichbieu.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Lịch biểu</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-taisan.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Tài sản</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-vanban.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Văn bản</div>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb">
                                <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/img-module-2.svg'); ?>"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="module-3">
                        <div class="module-item">
                            <div class="content">
                                <div class="title">Số hoá và tự động hoá 90% quy trình, vận hành thông minh, liền mạch
                                </div>
                                <div class="desc">Giao diện No-code kéo thả trực quan. Tích hợp AI giám sát, cảnh báo
                                    tắc nghẽn và tư vấn tối ưu, giúp quy trình luôn vận hành
                                    trơn tru - minh bạch - hiệu quả</div>
                                <a class="btn-action">
                                    <span>Tìm hiểu thêm</span>
                                </a>
                                <div class="list-module">
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-duan.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Dự án</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-congviec.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Công việc</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-tailieu.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Tài liệu</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-lichbieu.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Lịch biểu</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-taisan.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Tài sản</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-vanban.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Văn bản</div>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb">
                                <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/img-module-3.svg'); ?>"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="module-4">
                        <div class="module-item">
                            <div class="content">
                                <div class="title">Thúc đẩy doanh thu và tối ưu trải nghiệm khách hàng</div>
                                <div class="desc">Từ việc quản lý thông tin đến theo dõi cơ hội, bộ công cụ giúp tối ưu
                                    hóa quy trình bán hàng, cải thiện tương tác và chăm sóc
                                    khách hàng</div>
                                <a class="btn-action">
                                    <span>Tìm hiểu thêm</span>
                                </a>
                                <div class="list-module">
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-marketing.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Marketing</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-khachhang.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Khách hàng</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-banhang.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Bán hàng</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-muahang.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Mua hàng</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-khohang.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Kho hàng</div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/home/icon-tichhop.svg"
                                                alt="">
                                        </div>
                                        <div class="label">Tích hợp</div>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb">
                                <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/img-module-4.svg'); ?>"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="module-5">
                        <div class="module-item">
                            <div class="content">
                                <div class="title">Kết nối nội bộ - Thúc đẩy giao tiếp và cộng tác trong doanh nghiệp
                                </div>
                                <div class="desc">Kết nối nhân viên, chia sẻ và trao đổi thông tin doanh nghiệp trên một
                                    nền tảng thống nhất. Tăng tốc truyền thông nội bộ với luồng thông báo, bình luận và
                                    chia sẻ thời gian thực</div>
                                <a class="btn-action">
                                    <span>Tìm hiểu thêm</span>
                                </a>
                            </div>
                            <div class="thumb">
                                <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/img-module-5.svg'); ?>"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="module-6">
                        <div class="module-item">
                            <div class="content">
                                <div class="title">Kiểm soát tài chính, tối ưu dòng tiền hiệu quả</div>
                                <div class="desc">Giúp nhà quản lý theo dõi thu chi, lên kế hoạch và quản lý tài chính
                                    hiệu quả. Tự động hóa các quy trình phê duyệt, đề xuất, lập báo cáo chính xác và dễ
                                    dàng tối ưu dòng tiền</div>
                                <a class="btn-action">
                                    <span>Tìm hiểu thêm</span>
                                </a>
                            </div>
                            <div class="thumb">
                                <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/img-module-6.svg'); ?>"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="module-7">
                        <div class="module-item">
                            <div class="content">
                                <div class="title">Ký số mọi lúc, mọi nơi, không giới hạn</div>
                                <div class="desc">Ký kết tài liệu nhanh chóng và bảo mật với chữ ký điện tử. Tiết kiệm
                                    thời gian, không cần giấy tờ và đảm bảo tính hợp pháp
                                    trong mọi giao dịch</div>
                                <a class="btn-action">
                                    <span>Tìm hiểu thêm</span>
                                </a>
                            </div>
                            <div class="thumb">
                                <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/img-module-6.svg'); ?>"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-solution">
        <div class="container">
            <div class="section-title">
                <span class="title">Giải pháp quản trị toàn diện, đáng tin cậy</span>
                <span class="desc">Kiến tạo hệ thống vận hành tự động, nơi doanh nghiệp làm chủ quy trình, dữ liệu và
                    toàn
                    bộ hoạt động - hướng đến môi trường làm việc thông minh, linh hoạt</span>
            </div>
            <div class="list-solution">
                <div class="item">
                    <div class="thumb">
                        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/sol-1.svg'); ?>"
                            alt="">
                    </div>
                    <div class="content">
                        <span class="tag brain">BRAIN</span>
                        <span class="title">AI</span>
                        <p class="desc">Truy xuất & phân tích dữ liệu từ mọi bộ phận, giúp nhà quản lý nắm rõ tình
                            hình vận hành, dự báo rủi ro, đưa ra hành động & quyết định chính xác, kịp thời</p>
                        <a href="#" class="see-more">
                            <span>Trải nghiệm ngay</span>
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/icons/arrow-round.svg'); ?>"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/sol-2.svg'); ?>"
                            alt="">
                    </div>
                    <div class="content">
                        <span class="tag goal">GOAL</span>
                        <span class="title">Automation</span>
                        <p class="desc">Tự động hóa toàn diện với khả năng mạnh mẽ của AI và No-code, mở ra mô hình
                            tổ chức linh hoạt hơn, thích ứng nhanh và tự động cải tiến bằng chính dữ liệu nội bộ</p>
                        <a href="#" class="see-more">
                            <span>Trải nghiệm ngay</span>
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/icons/arrow-round.svg'); ?>"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/sol-3.svg'); ?>"
                            alt="">
                    </div>
                    <div class="content">
                        <span class="tag heart">HEART</span>
                        <span class="title">No-code</span>
                        <p class="desc">Giao diện kéo thả linh hoạt, không phụ thuộc vào IT. Người dùng dễ dàng cài
                            đặt, tùy chỉnh và mở rộng hệ thống, rút ngắn 80% thời gian triển khai</p>
                        <a href="#" class="see-more">
                            <span>Trải nghiệm ngay</span>
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/icons/arrow-round.svg'); ?>"
                                alt="">
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
                <span class="desc">Giúp ra quyết định nhanh chóng, chính xác</span>
            </div>
            <div class="list-agents">
                <?= file_get_contents(get_template_directory() . '/assets/images/home/ai-agents.svg'); ?>
            </div>
            <a class="btn-action">
                <span>Tìm hiểu thêm</span>
            </a>
        </div>
    </div>
    <div class="section-nocode">
        <div class="container">
            <div class="section-title">
                <span class="title">No-code Platform</span>
                <span class="desc">Xây dựng và tùy chỉnh ứng dụng của riêng bạn</span>
            </div>
            <div class="nocode-tab">
                <div class="nocode-nav nav">
                    <button class="active nav-link" data-bs-toggle="pill" data-bs-target="#nocode-1">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/icon-nc-1.svg'); ?>"
                            alt="">
                        <div class="content">
                            <span class="title">Kho ứng dụng mẫu phong phú</span>
                            <span class="desc">Cài đặt tức thì từ thư viện, dễ dàng chỉnh sửa và tùy biến theo thực tế
                                vận hành của doanh nghiệp</span>
                        </div>
                    </button>
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#nocode-2">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/icon-nc-2.svg'); ?>"
                            alt="">
                        <div class="content">
                            <span class="title">Xây mọi thứ bằng thao tác trực quan</span>
                            <span class="desc">Dễ dàng tạo và tùy chỉnh đối tượng, trường dữ liệu, tác vụ, báo cáo,
                                dashboard,...</span>
                        </div>
                    </button>
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#nocode-3">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/icon-nc-3.svg'); ?>"
                            alt="">
                        <div class="content">
                            <span class="title">Thiết kế Form và quy trình</span>
                            <span class="desc">Studio và Formula hỗ trợ tạo workflow, form phê duyệt và biểu mẫu dễ
                                dàng, không phụ thuộc vào IT</span>
                        </div>
                    </button>
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#nocode-4">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/icon-nc-4.svg'); ?>"
                            alt="">
                        <div class="content">
                            <span class="title">Xuất bản ứng dụng nhanh</span>
                            <span class="desc">Tự động sinh hướng dẫn, hỗ trợ triển khai đa vùng, đa chi nhánh kèm tài
                                liệu và đa ngôn ngữ</span>
                        </div>
                    </button>
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#nocode-5">
                        <img class="icon"
                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/icon-nc-5.svg'); ?>"
                            alt="">
                        <div class="content">
                            <span class="title">Phân quyền và bảo mật đa tầng</span>
                            <span class="desc">Kiểm soát quyền truy cập chi tiết đến từng trường dữ liệu, tác vụ, báo
                                cáo,...</span>
                        </div>
                    </button>
                </div>
                <div class="nocode-content tab-content">
                    <div class="tab-pane show active" id="nocode-1">
                        <div class="thumb">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/nc-img-1.svg'); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="nocode-2">
                        <div class="thumb">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/nc-img-2.svg'); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="nocode-3">
                        <div class="thumb">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/nc-img-3.svg'); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="nocode-4">
                        <div class="thumb">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/nc-img-4.svg'); ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="nocode-5">
                        <div class="thumb">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/nc-img-5.svg'); ?>"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn-action">
                <span>Tìm hiểu thêm</span>
            </a>
        </div>
    </div>
    <div class="section-automation">
        <div class="container">
            <div class="section-title">
                <span class="title">Automation</span>
                <span class="desc">Vận hành liền mạch với nền tảng tự động hoá toàn diện</span>
            </div>

        </div>
        <div class="process">
            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/process.svg'); ?>" alt="">
        </div>
    </div>
    <div class="section-value">
        <div class="photo-collage">
            <?php

            for ($i = 1; $i <= 14; $i++): ?>
                <div class="item item-<?= $i ?>">
                    <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/img-' . $i . '.svg') ?>"
                        alt="">
                </div>
            <?php endfor; ?>
        </div>
        <div class="container">
            <div class="value-company">
                <span class="section-title">Giá trị và nguyên tắc cốt lõi thúc đẩy chúng tôi</span>
                <div class="list-values">
                    <div class="box-value d-flex flex-column">
                        <div class="icon">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/val-1.svg'); ?>"
                                alt="">
                        </div>
                        <div class="title">
                            Cam kết lâu dài
                        </div>
                        <div class="content">Sau hơn 1 thập kỷ đồng hành cùng doanh nghiệp, chúng tôi thấu hiểu
                            những thử thách trong vận hành và phát triển. Từ sự thấu hiểu ấy, 1Office hình thành
                            triết lý sản phẩm - lấy nỗi đau vận hành làm trung tâm, lấy hiệu quả làm thước đo. Mỗi
                            bước tiến trong sản phẩm đều là minh chứng cho cam kết dài hạn: mang đến giải pháp quản
                            trị tối ưu, kiến tạo giá trị bền vững.</div>
                    </div>
                    <div class="box-value d-flex flex-column">
                        <div class="icon">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/val-2.svg'); ?>"
                                alt="">
                        </div>
                        <div class="title">
                            Nghiên cứu và phát triển
                        </div>
                        <div class="content">Chúng tôi luôn không ngừng đầu tư vào R&D nhằm mang đến sản phẩm và
                            dịch vụ với chất lượng tốt nhất. <b>Với No-code là trái tim, AI là bộ não và Tự động hoá
                                là
                                đích đến</b>, 1Office hướng tới trở thành nền tảng để mọi doanh nghiệp, dù lớn hay
                            nhỏ - đều
                            có thể tự tay kiến tạo phần mềm quản trị theo đúng cách họ tưởng tượng, mang đậm bản sắc
                            của tổ chức.</div>
                    </div>
                    <div class="box-value d-flex flex-column">
                        <div class="icon">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/home/val-3.svg'); ?>"
                                alt="">
                        </div>
                        <div class="title">
                            Khách hàng là trên hết
                        </div>
                        <div class="content">Mỗi doanh nghiệp, bất kể quy mô nào, đều có những đặc thù và yêu cầu
                            riêng. Chúng tôi lắng nghe, thấu hiểu và luôn sẵn sàng hỗ trợ bạn bằng công nghệ chuyển
                            đổi số thông minh, giúp bạn dễ dàng tiếp cận và ứng dụng những giải pháp tối ưu nhất. Sự
                            tin tưởng của khách hàng chính là nền tảng vững chắc, thúc đẩy chúng tôi không ngừng đổi
                            mới và sáng tạo.</div>
                    </div>
                </div>
                <a class="btn-action">
                    <span>Câu chuyện 1office</span>
                </a>
            </div>
        </div>
    </div>
    <div class="section-logo-customer">
        <div class="container">
            <span class="section-title">Sự lựa chọn của 6.000+ doanh nghiệp hàng đầu</span>
            <div class="list-logo">
                <div class="marquee">
                    <?php
                    $listLogo = [
                        'yody',
                        'phumy',
                        'pvep',
                        'hadilao',
                        'dongtam',
                        'vnpay',
                        'ahamove',
                        'tancang',
                        'nova',
                        'sonha',
                        'gs',
                        'tokyo',
                    ];

                    for ($i = 1; $i <= 24; $i++):
                        $listLogo[$i - 1] = $listLogo[($i - 1) % 12]; ?>
                        <div class="item">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/logo-customer/' . $listLogo[$i - 1] . '.svg'); ?>"
                                alt="">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-story-customer">
        <div class="section-title">
            <span class="title">Câu chuyện khách hàng</span>
            <span class="desc">Khám phá cách các doanh nghiệp hàng đầu tăng cường hiệu suất công việc với
                1Office</span>
        </div>
        <div class="list-story">
            <div class="container">
                <div id="story-customer" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="story-item item-1">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="thumb">
                                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/img-1.svg') ?>"
                                                alt="">
                                            <img class="play"
                                                src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/play.svg') ?>"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="content">
                                            <div class="info-customer">
                                                <div class="item logo">
                                                    <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/logo/yody.svg') ?>"
                                                        alt="">
                                                </div>
                                                <div class="item">
                                                    <span class="label">Lĩnh vực</span>
                                                    <span class="value">Thời trang</span>
                                                </div>
                                                <div class="item">
                                                    <span class="label">Quy mô</span>
                                                    <span class="value">5K+ Users</span>
                                                </div>
                                                <div class="item">
                                                    <span class="label">Giải pháp</span>
                                                    <span class="value">1HRM - Quản lý nhân sự</span>
                                                </div>
                                            </div>
                                            <div class="desc-customer">
                                                <span class="desc">“Đến lúc này tôi cần một nền tảng công nghệ để tối ưu
                                                    toàn bộ
                                                    quy trình công việc, truyền tải thông tin một cách nhanh chóng, kịp
                                                    thời,
                                                    đúng và đầy đủ. Yody đã thành công với việc sử dụng phần mềm 1Office
                                                    vào quá
                                                    trình vận hành của mình”</span>
                                                <div class="detail">
                                                    <div class="avatar">
                                                        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/avatar/img-1.svg') ?>"
                                                            alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="name">Anh <b>Nguyễn Việt Hòa</b></span>
                                                        <span class="position">Chủ tịch HĐQT, TGĐ Cty CP thời trang
                                                            YODY</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="check-list">
                                                <span class="title">Kế quả nổi bật</span>
                                                <div class="lists">
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">50+ quy trình nội bộ được số hoá</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Chuẩn hóa luồng phê duyệt từ cửa hàng đến
                                                            trụ
                                                            sở</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Tổng hợp bảng công, bảng lương nhanh
                                                            chóng</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Giao - nhận - đo lường hiệu suất công việc
                                                            ngay
                                                            trên hệ thống</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="story-item item-2">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="thumb">
                                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/img-2.svg') ?>"
                                                alt="">
                                            <img class="play"
                                                src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/play.svg') ?>"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="content">
                                            <div class="info-customer">
                                                <div class="item logo">
                                                    <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/logo/gs.svg') ?>"
                                                        alt="">
                                                </div>
                                                <div class="item">
                                                    <span class="label">Lĩnh vực</span>
                                                    <span class="value">Cung ứng nhân lực</span>
                                                </div>
                                                <div class="item">
                                                    <span class="label">Quy mô</span>
                                                    <span class="value">15K+ Users</span>
                                                </div>
                                                <div class="item">
                                                    <span class="label">Giải pháp</span>
                                                    <span class="value">Quản trị tổng thể</span>
                                                </div>
                                            </div>
                                            <div class="desc-customer">
                                                <span class="desc">1Office không chỉ cung cấp một môi trường làm việc
                                                    trực tuyến cho hơn 15.000 nhân sự, mà còn giúp chúng tôi tiến nhanh
                                                    hơn, xa hơn trong kỷ nguyên chuyển đổi số. Đây là bước đi chiến lược
                                                    để Green Speed khẳng định vị thế top đầu và định hình trở thành một
                                                    công ty công nghệ nhân sự hiện đại”</span>
                                                <div class="detail">
                                                    <div class="avatar">
                                                        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/avatar/img-2.svg') ?>"
                                                            alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="name">Anh <b>Lê Văn Hoàng</b></span>
                                                        <span class="position">CEO Công Ty Cổ Phần Green Speed</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="check-list">
                                                <span class="title">Kế quả nổi bật</span>
                                                <div class="lists">
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">No-code: Linh hoạt tuỳ chỉnh quy trình, báo
                                                            cáo, bảng lương</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">AI: phân tích dữ liệu, phát hiện bất
                                                            thường, cảnh báo rủi ro</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Tự động hoá quy trình chấm công, tính lương,
                                                            phê duyệt</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Cắt giảm chi phí, minh bạch dữ liệu, nâng
                                                            cao trải nghiệm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="story-item item-3">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="thumb">
                                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/img-3.svg') ?>"
                                                alt="">
                                            <img class="play"
                                                src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/play.svg') ?>"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="content">
                                            <div class="info-customer">
                                                <div class="item logo">
                                                    <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/logo/dong-tam.svg') ?>"
                                                        alt="">
                                                </div>
                                                <div class="item">
                                                    <span class="label">Lĩnh vực</span>
                                                    <span class="value">Sản xuất</span>
                                                </div>
                                                <div class="item">
                                                    <span class="label">Quy mô</span>
                                                    <span class="value">3K+ Users</span>
                                                </div>
                                                <div class="item">
                                                    <span class="label">Giải pháp</span>
                                                    <span class="value">1HRM - Quản trị nhân sự</span>
                                                </div>
                                            </div>
                                            <div class="desc-customer">
                                                <span class="desc">“Chuyển đổi số là mục tiêu quan trọng mà Đồng Tâm
                                                    Group hướng tới, nhằm thay đổi mô hình hoạt động theo hướng 4.0, xây
                                                    dựng hệ thống quản trị vững chắc và tối ưu công tác quản lý - vận
                                                    hành doanh nghiệp. Từ đó, tăng sức cạnh tranh trên thị trường trong
                                                    nước và quốc tế”</span>
                                                <div class="detail">
                                                    <div class="avatar">
                                                        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/avatar/img-3.svg') ?>"
                                                            alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="name">Anh <b>Nguyễn Văn Hùng</b></span>
                                                        <span class="position">Thành viên HĐQT, TGĐ Đồng Tâm
                                                            Group</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="check-list">
                                                <span class="title">Kế quả nổi bật</span>
                                                <div class="lists">
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Quản lý cơ cấu - chính sách, truyền thông
                                                            nội bộ và phân bổ luồng việc</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Tự động hoá toàn diện nghiệp vụ chấm công -
                                                            tính lương</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Nâng cao hiệu quả truyền thông nội bộ, giảm
                                                            bớt thủ tục</span>
                                                    </div>
                                                    <div class="item">
                                                        <img class="icon"
                                                            src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/icon-1.svg') ?>"
                                                            alt="">
                                                        <span class="value">Số hóa báo cáo giúp giải quyết công
                                                            việc nhanh chóng hơn</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-indicators">
                        <button data-bs-target="#story-customer" data-bs-slide-to="0" class="active"></button>
                        <button data-bs-target="#story-customer" data-bs-slide-to="1"></button>
                        <button data-bs-target="#story-customer" data-bs-slide-to="2"></button>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#story-customer"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/arrow-prev.svg') ?>"
                                alt="">
                        </span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#story-customer"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true">
                            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/story-customer/arrow-next.svg') ?>"
                                alt="">
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <a class="btn-action">
            <span>Xem tất cả</span>
        </a>
    </div>
    <div class="section-call2action">
        <div class="container">
            <span class="section-title">Thúc đẩy hiệu suất, tối ưu hiệu quả vận hành với sức mạnh của AI &
                No-code</span>
            <div class="group-action">
                <a class="btn-action">
                    <span>Đăng ký ngay</span>
                </a>
                <a class="btn-action dark">
                    <span>Chat với 1Ai</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<?php
get_footer();
