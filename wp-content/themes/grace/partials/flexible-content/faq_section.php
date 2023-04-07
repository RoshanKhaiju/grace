<?php

/**
 * faq section template
 * 
 * @package grace
 */
?>


<div class="section bg-transparent m-0"
    style="background: url('demos/recipes/images/faq-bg.jpg') no-repeat center center / cover;min-height: 300px;">
    <div class="container d-flex flex-column ">
        <h2 class="mb-5 faq-title" style="text-align: center;"><?php the_sub_field('heading'); ?></h2>
        <div id="faqs" class="faqs">

            <?php
            if (have_rows('faq_repeater')) :
                while (have_rows('faq_repeater')) : the_row();
            ?>
            <div class="toggle faq faq-marketplace faq-authors border-top pt-4">
                <div class="toggle-header">
                    <div class="toggle-title">
                        <?php the_sub_field('question') ?>
                    </div>
                </div>
                <div class="toggle-content">
                    <?php the_sub_field('answer'); ?>
                </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>
</div>