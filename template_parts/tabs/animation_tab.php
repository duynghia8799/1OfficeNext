<?php
$tabs = [
    [
        'title' => 'Nhân sự',
        'icon' => '',
    ],
    [
        'title' => 'Dự án',
        'icon' => '',
    ],
    [
        'title' => 'Quy trình',
        'icon' => '',
    ],
    [
        'title' => 'Khách hàng',
        'icon' => '',
    ],
    [
        'title' => 'Mạng nội bộ',
        'icon' => '',
    ],
    [
        'title' => 'Tài chính',
        'icon' => '',
    ],
    [
        'title' => 'Ký số',
        'icon' => '',
    ],
]
?>

<div class="animation_tabs">
    <div class="card" style="width:100px"></div>
    <div class="items_container">
        <?php
        if (!empty($tabs)) {
            foreach ($tabs as $index => $tab) {
                if ($tab['icon'] != '') {
                    echo ' <button style="gap:1rem" class="item data-imdex={<?= $index ?>}">';
                } else {
                    echo ' <button class="item data-imdex={<?= $index ?>}">';
                }
                echo '<img src"' . $tab['icon'] . '">' . $tab['title'] . '</button>';
            }
        } ?>
    </div>
</div>