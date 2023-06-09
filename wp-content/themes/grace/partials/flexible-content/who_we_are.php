<?php

/**
 * who we are section template
 * 
 * @package grace
 */
?>


<div class="col-md-8 offset-md-2 center">
    <h2 class="text-title-light text-dark mt-5 ls1 text-uppercase">
        <?php echo the_sub_field('heading'); ?>
    </h2>
    <p style="font-size: 18px; color: #777">
        <?php echo the_sub_field('description'); ?>
    </p>
    <div class="mb-4">
        <a href="<?php echo the_sub_field('button_url') ?>"
            class="button button-circle button-large m-0 font-weight-semibold nott ls0 text-right"><?php the_sub_field('button_label') ?><i
                class="icon-angle-right"></i></a>
    </div>
</div>