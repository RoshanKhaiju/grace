<?php

/**
 * Template Name: Homepage
 *
 * @package grace
 */

get_header();

if (have_rows('flexible_section')) {
    while (have_rows('flexible_section')) :
        the_row();
        if (get_row_layout() === 'banner_section') :
            get_template_part('/partials/flexible-content/' . get_row_layout());
        endif;
    endwhile;

?>
<!-- Content start -->
<section id="content">
    <div class="content-wrap pb-0" style="overflow: visible">

        <!-- who we are / browse by category section start -->
        <div class="section mt-2 bg-transparent py-0 py-md-auto">
            <div class="container">
                <div class="row">

                    <?php
                        while (have_rows('flexible_section')) : the_row();
                            if (get_row_layout() === 'who_we_are') :
                                get_template_part('/partials/flexible-content/' . get_row_layout());
                            endif;
                        ?>

                    <?php
                            if (get_row_layout() === 'category_section') :
                                get_template_part('/partials/flexible-content/' . get_row_layout());
                            endif;
                        endwhile;
                        ?>

                </div>
            </div>
        </div>
        <!-- who we are / browse by category section end -->

        <!-- courses section start -->
        <?php
            while (have_rows('flexible_section')) : the_row();
                if (get_row_layout() === 'courses_section') :
                    get_template_part('/partials/flexible-content/' . get_row_layout());
                endif;
            endwhile;
            ?>
        <!-- courses section end -->

        <!-- news and notice section start -->
        <?php
            while (have_rows('flexible_section')) : the_row();
                if (get_row_layout() === 'news_and_notice') :
                    get_template_part('/partials/flexible-content/' . get_row_layout());
                endif;
            endwhile;
            ?>
        <!-- news and notice section end -->

        <!-- faq section start -->
        <?php
            while (have_rows('flexible_section')) : the_row();
                if (get_row_layout() === 'faq_section') :
                    get_template_part('/partials/flexible-content/' . get_row_layout());
                endif;
            endwhile;
            ?>
        <!-- faq section end -->

    </div>
</section>
<!-- #content end -->


<?php
}
get_footer(); ?>