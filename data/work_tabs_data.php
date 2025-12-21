<?php

return [
    'dieu_phoi_data' => [
        'name' => 'dieuphoi',
        'tabs' => [
            [
                'title' => 'Quản lý đa chiều',
                'icon' => '',
                'content_panel' =>
                '
                <div class="content" style="width:26rem">                        
                    <ul>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Quản lý chi tiết từng nhiệm vụ trong dự án, gắn deadline và người thực hiện</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Cho phép phân chia công việc theo từng giai đoạn, milestone quan trọng</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Hỗ trợ đa mô hình quản lý dự án từ Waterfall Model cho đến Agile Model</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Cung cấp Gantt Chart, Kanban, Listview giúp theo dõi công việc dễ dàng</p></li>
                    </ul>
                </div>
                <img class="demo-img" style="width:48.125rem" src="' .  get_template_directory_uri() . '/assets/images/demo/work_dieuphoi_1.svg" alt="demo">
                ',
            ],
            [
                'title' => 'Quản lý Workload',
                'icon' => '',
                'content_panel' =>
                '
                <div class="content" style="width:26rem">                        
                    <ul>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Theo dõi phân bổ công việc của từng nhân sự, tránh tình trạng quá tải</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Hỗ trợ chuyển giao công việc khi có nhân viên nghỉ phép, nghỉ việc</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Hệ thống tự động cảnh báo khi nhân viên bị giao quá nhiều việc hoặc trùng lịch</p></li>
                    </ul>
                </div>
                <img class="demo-img" style="width:48.125rem" src="' .  get_template_directory_uri() . '/assets/images/demo/work_dieuphoi_2.svg" alt="demo">
                ',
            ],
            [
                'title' => 'Quản lý vật tư',
                'icon' => '',
                'content_panel' =>
                '
                <div class="content" style="width:26rem">                        
                    <ul>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"> <p>Cho phép nhân viên gửi đề xuất vật tư cần sử dụng trực tiếp trên hệ thống</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"> <p>Trưởng bộ phận phê duyệt hoặc chỉnh sửa danh sách vật tư theo yêu cầu</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"> <p>Tự động tổng hợp tất cả các đề xuất để tránh trùng lặp, tối ưu mua sắm</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"> <p>Hiển thị trạng thái vật tư (đề xuất, đã mua,...), giúp quản lý nắm rõ tiến độ</p></li>
                    </ul>
                </div>
                <img class="demo-img" style="width:48.125rem" src="' .  get_template_directory_uri() . '/assets/images/demo/work_dieuphoi_3.svg" alt="demo">
                ',
            ],
            [
                'title'         => 'Quản lý tài chính',
                'icon'          => '',
                'content_panel' =>
                '
                <div class="content" style="width:26rem">                        
                    <ul>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Quản lý dự toán ngân sách từ lúc lập kế hoạch, đánh giá hiệu quả tài chính</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Ghi nhận các khoản chi tiêu theo từng hạng mục công việc trong dự án</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Theo dõi lợi nhuận, dòng tiền thực tế và đối chiếu với ngân sách dự kiến</p></li>
                    </ul>
                </div>
                <img class="demo-img" style="width:48.125rem" src="' .  get_template_directory_uri() . '/assets/images/demo/work_dieuphoi_4.svg" alt="demo">
                ',
            ],
        ]
    ],
    'lien_ket_data' => [
        'name' => 'lienket',
        'tabs' => [
            [
                'title' => 'Đo lường hiệu suất KPI',
                'icon' => '',
                'content_panel' =>
                '
                <div class="demo-container">
                    <img class="demo-img" src="' .  get_template_directory_uri() . '/assets/images/demo/work_lienket1.svg" alt="demo">
                </div>
                <div class="content">
                    <h2>Tự động lấy dữ liệu để đánh giá KPI</h2>                  
                    <ul>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Mỗi nhiệm vụ, dự án đều có thể liên kết với KPI cá nhân & phòng ban</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Hệ thống tự động cập nhật vào KPI nhân viên mà không cần nhập tay</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Đánh giá chính xác hiệu suất làm việc dựa trên dữ liệu thực tế</p></li>
                    </ul>
                </div>
                ',
            ],
            [
                'title' => 'Quản trị mục tiêu OKR',
                'icon' => '',
                'content_panel' =>
                '
                <div class="demo-container">
                    <img class="demo-img" src="' .  get_template_directory_uri() . '/assets/images/demo/work_lienket2.svg" alt="demo">
                </div>
                <div class="content">                        
                    <h2>Hỗ trợ tracking OKR tự động</h2>
                    <ul>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Tự động cập nhật tiến độ OKR nhân viên khi công việc hoàn thành</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Giúp theo dõi mức độ hoàn thành mục tiêu một cách minh bạch</p></li>
                        <li><img src="' . get_template_directory_uri() . '/assets/images/icons/V.svg" alt="icon"><p>Đảm bảo dữ liệu OKR cá nhân, phòng ban, công ty luôn đồng bộ</p></li>
                    </ul>
                </div>
                ',
            ],
        ]
    ]
];
