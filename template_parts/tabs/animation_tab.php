<?php
$name = 'hesinhthai';
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
];
?>

<div class="animation_tabs">
    <div class="card"></div>
    <div class="items_container nav nav-tabs">
        <?php
        if (!empty($tabs)) {
            foreach ($tabs as $index => $tab) {
                if ($tab['icon'] != '') {
                    echo ' <button id="' . $name . '_tab_' . $index . '" class="item"
                    data-bs-toggle="tab" data-bs-target="' . $name . '_panel_' . $index . '" panels-container="' . $name . '"
                    > <img src"' . $tab['icon'] . '" alt="icon">' . $tab['title'] . '</button> ';
                } else {
                    echo ' <button id="' . $name . '_tab_' . $index . '" class="item"
                    data-bs-toggle="tab" data-bs-target="' . $name . '_panel_' . $index . '" panels-container="' . $name . '"
                    >' . $tab['title'] . '</button> ';
                }
            }
        } ?>
    </div>
</div>
<div class="<?= $name . " " ?>panels_container tab-content">
    <?php
    if (!empty($tabs)) {
        foreach ($tabs as $index => $tab) {
            echo '<div id="' . $name . '_panel_' . $index . '" class="tab-pane fade" > 
            <h1>Panel:' . $index . '</h1> </div> ';
        }
    }
    ?>
</div>