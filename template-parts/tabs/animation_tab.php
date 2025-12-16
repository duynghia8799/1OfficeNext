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
                    echo ' <button id="' . $name . '_tab_' . $index . '" class="item"
                    data-bs-toggle="tab" data-bs-target="' . $name . '_panel_' . $index . '" panels-container="' . $name . '"
                    > <img src="' . get_template_directory_uri() . $tab['icon'] . '" alt="icon">' . $tab['title'] . '</button> ';
                } else {
                    echo ' <button id="' . $name . '_tab_' . $index . '" class="item"
                    data-bs-toggle="tab" data-bs-target="' . $name . '_panel_' . $index . '" panels-container="' . $name . '"
                    >' . $tab['title'] . '</button> ';
                }
            }
        } ?>
    </div>
</div>
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