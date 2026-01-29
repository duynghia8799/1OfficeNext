<?php
/**
 * Dữ liệu Bảng giá 1Office
 * Cấu trúc:
 * 1. feature_defs: Định nghĩa danh sách tính năng (Rows)
 * 2. suites: Định nghĩa các gói sản phẩm và giá trị của chúng (Columns)
 */

return [
    // ---------------------------------------------------------
    // 1. ĐỊNH NGHĨA DANH SÁCH TÍNH NĂNG (TRỤC DỌC CỦA BẢNG)
    // ---------------------------------------------------------
    'feature_defs' => [
        'NHÂN SỰ' => [
            'hrm_mang_noi_bo'       => 'Mạng nội bộ',
            'hrm_hsns'              => 'HSNS',
            'hrm_hd_lao_dong'       => 'HĐ lao động',
            'hrm_bao_hiem'          => 'Bảo hiểm 1-IVAN',
            'hrm_quyet_dinh'        => 'Quyết định',
            'hrm_don_tu'            => 'Đơn từ hành chính',
            'hrm_cham_cong'         => 'Chấm công',
            'hrm_tien_luong'        => 'Tiền lương',
            'hrm_danh_gia'          => 'Đánh giá năng lực',
            'hrm_tai_san'           => 'Tài sản',
            'hrm_tuyen_dung'        => 'Tuyển dụng',
            'hrm_dao_tao'           => 'Đào tạo',
        ],
        'CÔNG VIỆC' => [
            'work_du_an'            => 'Dự án',
            'work_cong_viec'        => 'Công việc',
            'work_lich_bieu'        => 'Lịch biểu',
            'work_tai_lieu'         => 'Tài liệu',
            'work_quy_trinh'        => 'Quy trình động',
        ],
        'QUẢN TRỊ KHÁCH HÀNG (CRM)' => [
            'crm_marketing'         => 'Marketing',
            'crm_sales'             => 'Bán hàng (Sales)',
            'crm_customer_care'     => 'Chăm sóc khách hàng',
            'crm_ticket'            => 'Ticket (Hỗ trợ)',
        ]
    ],

    // ---------------------------------------------------------
    // 2. DỮ LIỆU CÁC GÓI SẢN PHẨM (TRỤC NGANG CỦA BẢNG)
    // ---------------------------------------------------------
    'suites' => [
        /* --- 1HRM --- */
        [
            'name'  => '1HRM',
            'color' => '#E5532A',
            'plans' => [
                [
                    'name'  => 'Basic HRM',
                    'price' => '20.000 đ',
                    // Dữ liệu tính năng (Mapping theo Key ở trên)
                    // true = Có, false/null = Không
                    'data'  => [
                        'hrm_mang_noi_bo' => true,
                        'hrm_hsns'        => true,
                        'hrm_hd_lao_dong' => true,
                        // 'hrm_bao_hiem' => false (Mặc định)
                        'hrm_quyet_dinh'  => true,
                        'hrm_don_tu'      => true,
                        'hrm_cham_cong'   => true,
                        'hrm_tien_luong'  => true,
                        // Các tính năng cao cấp hơn chưa có
                    ]
                ],
                [
                    'name'  => 'Standard HRM',
                    'price' => '40.000 đ',
                    'data'  => [
                        'hrm_mang_noi_bo' => true,
                        'hrm_hsns'        => true,
                        'hrm_hd_lao_dong' => true,
                        'hrm_quyet_dinh'  => true,
                        'hrm_don_tu'      => true,
                        'hrm_cham_cong'   => true,
                        'hrm_tien_luong'  => true,
                        'hrm_danh_gia'    => true,
                        'hrm_tai_san'     => true,
                        'hrm_tuyen_dung'  => true,
                    ]
                ],
                [
                    'name'  => 'Pro HRM',
                    'price' => '60.000 đ',
                    'data'  => [
                        'hrm_mang_noi_bo' => true,
                        'hrm_hsns'        => true,
                        'hrm_hd_lao_dong' => true,
                        'hrm_quyet_dinh'  => true,
                        'hrm_don_tu'      => true,
                        'hrm_cham_cong'   => true,
                        'hrm_tien_luong'  => true,
                        'hrm_danh_gia'    => true,
                        'hrm_tai_san'     => true,
                        'hrm_tuyen_dung'  => true,
                        'hrm_dao_tao'     => true,
                    ]
                ]
            ]
        ],

        /* --- 1WORK --- */
        [
            'name'  => '1WORK',
            'color' => '#E5532A', // Hoặc màu khác
            'plans' => [
                [
                    'name'  => 'Standard Work',
                    'price' => '40.000 đ',
                    'data'  => [
                        'hrm_mang_noi_bo' => true, // Vẫn có mạng nội bộ
                        'hrm_hsns'        => true,
                        'work_du_an'      => true,
                        'work_cong_viec'  => true,
                        'work_lich_bieu'  => true,
                        'work_tai_lieu'   => true,
                    ]
                ],
                [
                    'name'  => 'Pro Work',
                    'price' => '60.000 đ',
                    'data'  => [
                        'hrm_mang_noi_bo' => true,
                        'hrm_hsns'        => true,
                        'work_du_an'      => true,
                        'work_cong_viec'  => true,
                        'work_lich_bieu'  => true,
                        'work_tai_lieu'   => true,
                        'work_quy_trinh'  => true,
                    ]
                ]
            ]
        ],

        /* --- 1CRM --- */
        [
            'name'  => '1CRM',
            'color' => '#E5532A',
            'plans' => [
                [
                    'name'  => 'Standard CRM',
                    'price' => '40.000 đ',
                    'data'  => [
                        'hrm_mang_noi_bo' => true,
                        'hrm_hsns'        => true,
                        'crm_marketing'   => true,
                        'crm_sales'       => true,
                        'crm_customer_care' => true,
                    ]
                ],
                [
                    'name'  => 'Pro CRM',
                    'price' => '60.000 đ',
                    'data'  => [
                        'hrm_mang_noi_bo' => true,
                        'hrm_hsns'        => true,
                        'crm_marketing'   => true,
                        'crm_sales'       => true,
                        'crm_customer_care' => true,
                        'crm_ticket'      => true,
                    ]
                ]
            ]
        ]
    ]
];
