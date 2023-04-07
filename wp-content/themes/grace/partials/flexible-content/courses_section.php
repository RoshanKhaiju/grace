<?php

/**
 * Courses section template
 * 
 * @package grace
 */
?>

<div class="section bg-transparent py-0 py-md-auto">
    <div class="container">

        <h2 class="text-title-light text-dark mb-4"><?php the_sub_field('heading') ?></h2>

        <?php if (have_rows('courses_repeater')) : ?>

        <div id="recipes-carousel" class="owl-carousel carousel-widget" data-margin="0" data-nav="true"
            data-pagi="false" data-items="1">

            <?php
                while (have_rows('courses_repeater')) : the_row();
                    $image = get_sub_field('image');



                ?>


            <div class="row no-gutters align-items-stretch rounded shadow">
                <div class="col-lg-5 rounded-left" style="
                      background: url('demos/recipes/images/course-spaghetti.jpg')
                        no-repeat center center / cover;
                      min-height: 300px;
                    "></div>
                <div class="col-lg-7 d-flex justify-content-center flex-column rounded-right"
                    style="padding: 80px 50px">
                    <h3>
                        <?php the_sub_field('title') ?>
                    </h3>
                    <p>
                        <?php the_sub_field('sub_title') ?>
                    </p>
                    <div class="slider-features d-none d-sm-block my-3">
                        <ul class="list-unstyled">
                            <li class="d-inline-block mr-4">
                                <img src="demos/recipes/images/icons/lunch.svg" alt="ingredients" width="30" />
                                <h5 class="mb-0">Beginner Level</h5>
                            </li>

                            <li class="d-inline-block mr-4">
                                <img src="demos/recipes/images/icons/timer-dark.svg" alt="Timer" width="30" />
                                <h5 class="mb-0">6 months</h5>
                            </li>

                            <li class="d-inline-block">
                                <img src="demos/recipes/images/icons/ingredients-dark.svg" alt="ingredients"
                                    width="30" />
                                <h5 class="mb-0">Intern Included</h5>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="<?php the_sub_field('button_url') ?>"
                            class="button button-circle button-large m-0 font-weight-semibold nott ls0 text-right"><?php the_sub_field('button_label') ?><i
                                class="icon-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
                ?>


        </div>
        <?php endif; ?>

    </div>
</div>