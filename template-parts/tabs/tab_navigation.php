<?php
if (empty($args)) return;
$icons = $args['icons'];
?>
<div class="tabs-navigation">
    <button class="prev-tab">
        <img src="<?php echo get_template_directory_uri() . $icons['prev'] ?>" alt="">
    </button>
    <button class="next-tab">
        <img src="<?php echo get_template_directory_uri() . $icons['next'] ?>" alt="">
    </button>
</div>
