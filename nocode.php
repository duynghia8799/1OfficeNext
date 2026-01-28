<?php
/**
 * Template Name: No-code 1OfficeNext
 */

get_header();?>
<div class="nocode-page">


<section class="nocode-hero">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Xây dựng và tuỳ chỉnh ứng dụng của <br/>riêng bạn với No-code</h1>
                <p class="sub-title-section">Nền tảng No-code cho phép doanh nghiệp tùy chỉnh ứng dụng và quy trình bằng <br/>kéo-thả trực quan, rút ngắn thời gian triển khai, tối ưu chi phí, mở rộng linh hoạt và <br/>giảm phụ thuộc vào IT</p>
                <?php get_template_part('template-parts/callout_parts/dk_chat_ai','button')?>
                <div class="video-container">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/nocode_hero_videoframe.svg" alt="">
                    <button class="play-button"><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/playbtn_white.svg" alt=""></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nocode-visao">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Vì sao doanh nghiệp cần No-code?</h1>
                <div class="content-container">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/nocode_visao.svg" alt="">
                    <div class="content">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/nocode_visao_item1.svg" alt="">
                            <div>
                                <h3>Tính linh hoạt</h3>
                                <p>Mỗi doanh nghiệp có cách vận hành khác nhau, trong khi phần mềm thường bị giới hạn theo khuôn mẫu. Với No-code, hệ thống có thể được thiết kế và điều chỉnh linh hoạt theo thực tế</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/nocode_visao_item2.svg" alt="">
                            <div>
                                <h3>Tính tự chủ</h3>
                                <p>Nhân sự nắm rõ nghiệp vụ nhưng lại phụ thuộc vào IT khi cần thay đổi. No-code mở ra khả năng để chính người thực thi tham gia thiết kế và điều chỉnh hệ thống</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/nocode_visao_item3.svg" alt="">
                            <div>
                                <h3>Tốc độ triển khai</h3>
                                <p>Kinh doanh biến động liên tục, nhưng việc sửa hay mở rộng phần mềm truyền thống thường mất nhiều thời gian. No-code cho phép sửa đổi tức thì, theo sát thị trường</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/nocode_visao_item4.svg" alt="">
                            <div>
                                <h3>Quyền kiểm soát</h3>
                                <p>Sự phụ thuộc vào nhà cung cấp khiến doanh nghiệp khó tùy biến và mở rộng dài hạn. No-code mang lại quyền chủ động trong việc phát triển và kiểm soát hệ thống</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nocode-tuduy">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Tự động hóa quy trình kinh doanh</h1>
                <p class="sub-title-section"></p>
                <div class="tabs-wrapper">
                <?php get_template_part('template-parts/tabs/animation_tab',null, array('name' => 'nocode-tuduy-tabs','tabs' => array(
                    [
                        'title' => 'Khởi tạo',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <p class="progress-text">Khởi tạo nhanh</p>
                                <h3 class="title">Khởi tạo ứng dụng nhanh chóng với 1AI</h3>
                                <p class="sub-title">Chỉ với vài thao tác thiết lập và sự hỗ trợ của AI, hệ thống cho phép tạo mới ứng dụng, đối tượng và trường dữ liệu theo từng nghiệp vụ, không cần can thiệp kỹ thuật</p>
                                <div class="content">
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_blue_border_skyblue.svg" alt="">
                                        <p>Tạo nhanh ứng dụng, đối tượng và cấu trúc dữ liệu theo nghiệp vụ</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_blue_border_skyblue.svg" alt="">
                                        <p>AI hỗ trợ gợi ý logic và thành phần phù hợp khi thiết lập</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_blue_border_skyblue.svg" alt="">
                                        <p>Phù hợp cho cả người dùng không có nền tảng lập trình</p>
                                    </div>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/nocode_tuduy_1.svg" alt="">
                        ',
                    ],
                    [
                        'title' => 'Ứng dụng',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <p class="progress-text">Ứng dụng mẫu</p>
                                <h3 class="title">Triển khai nhanh với kho ứng dụng mẫu</h3>
                                <p class="sub-title">Cung cấp sẵn kho ứng dụng, quy trình, biểu mẫu giúp doanh nghiệp cài đặt nhanh và tiếp tục tùy chỉnh, mở rộng theo thực tế vận hành</p>
                                <div class="content">
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_yellow_border_skyyellow.svg" alt="">
                                        <p>Thư viện ứng dụng và quy trình được thiết kế sẵn</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_yellow_border_skyyellow.svg" alt="">
                                        <p>Cho phép cài đặt nhanh và sử dụng ngay</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_yellow_border_skyyellow.svg" alt="">
                                        <p>Dễ dàng chỉnh sửa để phù hợp từng mô hình doanh nghiệp</p>
                                    </div>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/nocode_tuduy_2.svg" alt="">
                        ',
                    ],
                    [
                        'title' => 'Tùy chỉnh',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <p class="progress-text">Tùy chỉnh linh hoạt</p>
                                <h3 class="title">Tùy chỉnh trực quan bằng giao diện kéo-thả</h3>
                                <p class="sub-title">Giao diện kéo–thả linh hoạt cho phép tạo và cấu hình ứng dụng, đối tượng, trường dữ liệu, tác vụ, dashboard và báo cáo theo đúng nhu cầu vận hành</p>
                                <div class="content">
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_green_border_skygreen.svg" alt="">
                                        <p>Kéo - thả để thiết kế ứng dụng và giao diện sử dụng</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_green_border_skygreen.svg" alt="">
                                        <p>Tùy chỉnh dashboard và báo cáo theo từng vai trò</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_green_border_skygreen.svg" alt="">
                                        <p>Linh hoạt điều chỉnh khi quy trình hoặc dữ liệu thay đổi</p>
                                    </div>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/nocode_tuduy_3.svg" alt="">
                        ',
                    ],
                    [
                        'title' => 'Workflow',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <p class="progress-text">Workflow Builder</p>
                                <h3 class="title">Thiết lập luồng quy trình nghiệp vụ linh hoạt</h3>
                                <p class="sub-title">Thiết kế luồng xử lý nghiệp vụ bằng các thành phần logic, giúp tự động hóa các quy trình phức tạp mà vẫn giữ giao diện thân thiện, dễ dàng thao tác</p>
                                <div class="content">
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_red_border_skyred.svg" alt="">
                                        <p>Thiết lập điều kiện, hành động và các bước xử lý</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_red_border_skyred.svg" alt="">
                                        <p>Hỗ trợ trigger, schedule task và kết nối API</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_red_border_skyred.svg" alt="">
                                        <p>Tự động hóa các quy trình liên phòng ban</p>
                                    </div>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/nocode_tuduy_4.svg" alt="">
                        ',
                    ],
                    [
                        'title' => 'Phân quyền',
                        'icon' => '',
                        'content_panel' => '
                            <div class="content-panel">
                                <p class="progress-text">Quản lý truy cập</p>
                                <h3 class="title">Phân quyền và bảo mật đa tầng</h3>
                                <p class="sub-title">Thiết lập phân quyền chi tiết theo ứng dụng, đối tượng, trường dữ liệu và tác vụ, đáp ứng yêu cầu bảo mật và quản trị ở quy mô doanh nghiệp</p>
                                <div class="content">
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_purple_border_skypurple.svg" alt="">
                                        <p>Phân quyền theo vai trò, phòng ban và cấp quản lý</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_purple_border_skypurple.svg" alt="">
                                        <p>Kiểm soát truy cập chi tiết đến từng dữ liệu</p>
                                    </div>
                                    <div class="item">
                                        <img src="'.get_template_directory_uri().'/assets/images/icons/V_purple_border_skypurple.svg" alt="">
                                        <p>Phù hợp cho mô hình tổ chức lớn và phức tạp</p>
                                    </div>
                                </div>
                            </div>
                            <img src="'.get_template_directory_uri().'/assets/images/demo/nocode_tuduy_5.svg" alt="">
                        ',
                    ],
                )))?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nocode-phuhop">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-section">Phù hợp với nhiều nhóm đối tượng người dùng</h1>
                <p class="sub-title-section">Trao quyền và đáp ứng nhu cầu của mọi vai trò trong tổ chức - từ IT, quản lý đến nhân viên</p>
                <div class="content">
                    <div class="item">
                        <h3>Chủ doanh nghiệp</h3>
                        <p>Chủ động xây dựng và vận hành hệ thống quản trị phù hợp với mô hình doanh nghiệp, tối ưu hiệu suất làm việc mà không phụ thuộc vào đội ngũ kỹ thuật</p>
                    </div>
                    <div class="item">
                        <h3>Nhà quản lý</h3>
                        <p>Theo dõi, điều phối và ra quyết định dựa trên dữ liệu được kết nối xuyên suốt, cùng với biểu mẫu, dashboard và báo cáo tùy chỉnh theo nhu cầu quản trị</p>
                    </div>
                    <div class="item">
                        <h3>CTO / IT Leaders</h3>
                        <p>Giảm tải backlog phát triển ứng dụng, quản trị hệ thống tập trung, kiểm soát phân quyền và bảo mật chặt chẽ, đảm bảo khả năng mở rộng ổn định</p>
                    </div>
                    <div class="item">
                        <h3>Nhân viên</h3>
                        <p>Chủ động xây dựng và tối ưu quy trình làm việc hằng ngày, linh hoạt thay đổi biểu mẫu và luồng công việc chỉ trong vài phút</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nocode-lamchu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="left">
                    <h1 class="title-section">Làm chủ hệ thống, tự tay xây dựng app và hơn thế…</h1>
                    <div class="content">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/nocode_lamchu_item1.svg" alt="">
                            <h3>Thiết lập thông minh với AI</h3>
                            <p>Trò chuyện với trợ lý AI ngay trên bộ công cụ để tự động khởi tạo, cài đặt, rà soát các thành phần logic, giúp rút ngắn đáng kể thời gian cấu hình và giảm rủi ro sai sót</p>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/nocode_lamchu_item2.svg" alt="">
                            <h3>Xuất bản nhanh, đa ngôn ngữ, đa nền tảng</h3>
                            <p>Ứng dụng có thể được xuất bản nhanh chóng kèm tài liệu sử dụng, tự động hỗ trợ đa ngôn ngữ, đa thiết bị, tiết kiệm trên 80% thời gian triển khai và giảm chi phí nhân sự IT</p>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/nocode_lamchu_item3.svg" alt="">
                            <h3>Tùy chỉnh nâng cao với API</h3>
                            <p>Cho phép kết nối, mở rộng và xử lý các logic nghiệp vụ phức tạp thông qua API, trong khi vẫn giữ trải nghiệm cấu hình thân thiện, giúp doanh nghiệp linh hoạt phát triển, mở rộng</p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/nocode_lamchu.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<?php get_footer();?>