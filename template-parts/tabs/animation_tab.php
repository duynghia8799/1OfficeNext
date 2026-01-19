<?php
if (empty($args)) return;
$name = $args['name'];
$tabs = $args['tabs'];
?>

<div class="<?= $name . " " ?>animation-tabs">
    <div class="card"></div>
    <div class="items-container nav nav-tabs">
        <?php
        if (!empty($tabs)) {
            foreach ($tabs as $index => $tab) {
                if ($tab['icon'] != '') {
                    if (isset($tab['icon_active']) && !empty($tab['icon_active'])) {
                        // Cấu trúc mới hỗ trợ hiệu ứng chuyển đổi icon
                        $icon_active_html = '<img class="icon-active" src="' . get_template_directory_uri() . $tab['icon_active'] . '" alt="icon">';
                        echo ' <button id="' . $name . '_tab_' . $index . '" class="item"
                        data-bs-toggle="tab" data-bs-target="' . $name . '_panel_' . $index . '" panels-container="' . $name . '"
                        > 
                        <div class="icon-wrapper">
                            <img class="icon-default" src="' . get_template_directory_uri() . $tab['icon'] . '" alt="icon">
                            ' . $icon_active_html . '
                        </div>
                        ' . $tab['title'] . '</button> ';
                    } else {
                        // Cấu trúc cũ (giữ nguyên để không ảnh hưởng các tab khác)
                        echo ' <button id="' . $name . '_tab_' . $index . '" class="item"
                        data-bs-toggle="tab" data-bs-target="' . $name . '_panel_' . $index . '" panels-container="' . $name . '"
                        > <img src="' . get_template_directory_uri() . $tab['icon'] . '" alt="icon">' . $tab['title'] . '</button> ';
                    }
                } else {
                    echo ' <button id="' . $name . '_tab_' . $index . '" class="item"
                    data-bs-toggle="tab" data-bs-target="' . $name . '_panel_' . $index . '" panels-container="' . $name . '"
                    >' . $tab['title'] . '</button> ';
                }
            }
        } ?>
    </div>
</div>
<div class="animation-tabs-content">
    <div class="<?= $name . " " ?>panels-container tab-content">
    <?php
    if (!empty($tabs)) {
        foreach ($tabs as $index => $tab) {
            echo '<div id="' . $name . '_panel_' . $index . '" class="tab-pane fade" >'
                . $tab['content_panel'] .
                '</div> ';
        }
    }
    ?>
    </div>
</div>