<?php

/**
 * Template Name: homepage
 * Template Post Type: page 
 */

get_header(); ?>

<div style="height: 200px; width:100%; background-color:grey;"></div>
<div style="height: 200px; width:100%; background-color:grey; display:flex; flex-direction:column; align-items:center">
    <?php get_template_part('template_parts/tabs/animation_tab'); ?>
</div>
<div style="height: 200px; width:100%; background-color:grey;"></div>

<?php get_footer();
