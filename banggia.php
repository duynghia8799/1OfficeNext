<?php
/**
 * Template Name: Bảng giá 1OfficeNext
 */

get_header();

// Load data
$pricing_data = require get_template_directory() . '/data/pricing_data.php';

$feature_groups = $pricing_data['feature_defs']; // Row Definitions
$suites = $pricing_data['suites']; // Column Data

// Calculate total columns for colspan logic
$total_plan_columns = 0;
foreach ($suites as $suite) {
    if (!empty($suite['plans'])) {
        $total_plan_columns += count($suite['plans']);
    }
}
?>

<div class="page-pricing">
    <div class="container pricing-container">
        
        <table class="pricing-table">
            <thead>
                <!-- Row 1: Product Suite Headers (1HRM, 1WORK...) -->
                <tr>
                    <th class="empty-corner" rowspan="2"></th>
                    <?php foreach ($suites as $suite): 
                        $plan_count = count($suite['plans']);
                        if ($plan_count == 0) continue;
                    ?>
                        <th class="header-product" 
                            colspan="<?= $plan_count ?>" 
                            style="color: <?= $suite['color'] ?? '#333' ?>">
                            <?= $suite['name'] ?>
                        </th>
                    <?php endforeach; ?>
                </tr>

                <!-- Row 2: Plan Headers (Basic, Standard...) -->
                <tr>
                    <?php foreach ($suites as $suite): ?>
                        <?php foreach ($suite['plans'] as $plan): ?>
                            <th class="header-plan">
                                <span class="plan-name"><?= $plan['name'] ?></span>
                                <span class="plan-price"><?= $plan['price'] ?></span>
                                <a href="#" class="btn-select">Nhận tư vấn</a>
                            </th>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                $group_index = 0;
                foreach ($feature_groups as $group_name => $features): 
                    $is_first = ($group_index === 0);
                    $collapse_id = 'group-collapse-' . $group_index;
                    $group_index++;
                ?>
                    <!-- 1. GROUP HEADER ROW -->
                    <tr class="row-group-header group-header" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#<?= $collapse_id ?>" 
                        aria-expanded="<?= $is_first ? 'true' : 'false' ?>" 
                        aria-controls="<?= $collapse_id ?>">
                        
                        <td colspan="<?= $total_plan_columns + 1 ?>">
                            <div class="group-header-content">
                                <span class="group-title">
                                    <i class="fa fa-minus-circle icon-list"></i> 
                                    <?= $group_name ?>
                                </span>
                                <i class="fa fa-chevron-down icon-toggle"></i>
                            </div>
                        </td>
                    </tr>

                    <!-- 2. GROUP CONTENT ROW (SINGLE CELL WRAPPER) -->
                    <tr class="row-group-content">
                        <td colspan="<?= $total_plan_columns + 1 ?>" class="p-0 border-0">
                            
                            <!-- BOOTSTRAP COLLAPSE DIV (ANIMATION WRAPPER) -->
                            <div id="<?= $collapse_id ?>" class="collapse <?= $is_first ? 'show' : '' ?>">
                                
                                <!-- NESTED TABLE (THE ACTUAL DATA) -->
                                <table class="table-nested w-100">
                                    <tbody>
                                        <?php foreach ($features as $feature_key => $feature_label): ?>
                                            <tr class="group-item">
                                                <!-- Feature Name -->
                                                <td class="col-feature"><?= $feature_label ?></td>

                                                <!-- Data Columns -->
                                                <?php foreach ($suites as $suite): ?>
                                                    <?php foreach ($suite['plans'] as $plan): 
                                                        $val = $plan['data'][$feature_key] ?? false; 
                                                    ?>
                                                        <td class="col-data">
                                                            <?php if ($val === true): ?>
                                                                <span class="icon-check"><i class="fa fa-check"></i></span>
                                                            <?php elseif ($val === false || $val === null): ?>
                                                                <span class="icon-cross"><i class="fa fa-times"></i></span>
                                                            <?php else: ?>
                                                                <span class="text-value"><?= $val ?></span>
                                                            <?php endif; ?>
                                                        </td>
                                                    <?php endforeach; ?>
                                                <?php endforeach; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<!-- Clean up JS: We rely on Bootstrap 5 native collapse now, but keep icon rotation logic -->
<script>
jQuery(document).ready(function($) {
    // Icon rotation logic based on Bootstrap events
    $('.collapse').on('show.bs.collapse', function () {
        var id = $(this).attr('id');
        $('[data-bs-target="#' + id + '"]').find('.icon-toggle').addClass('rotated');
    });
    $('.collapse').on('hide.bs.collapse', function () {
        var id = $(this).attr('id');
        $('[data-bs-target="#' + id + '"]').find('.icon-toggle').removeClass('rotated');
    });

    // Init state
    $('.collapse.show').each(function() {
        var id = $(this).attr('id');
        $('[data-bs-target="#' + id + '"]').find('.icon-toggle').addClass('rotated');
    });
});
</script>

<?php get_footer(); ?>
