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
        get_template_part('/partials/flexible-content/' . get_row_layout());
    endwhile;
}

?>


<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap pb-0" style="overflow: visible">
        <div class="section mt-2 bg-transparent py-0 py-md-auto">
            <div class="container">
                <div class="row">


                </div>
            </div>
        </div>

        <!-- courses section start -->
        <div class="section bg-transparent py-0 py-md-auto">
            <div class="container">
                <h2 class="text-title-light text-dark mb-4">Courses</h2>
                <div id="recipes-carousel" class="owl-carousel carousel-widget" data-margin="0" data-nav="true"
                    data-pagi="false" data-items="1">
                    <div class="row no-gutters align-items-stretch rounded shadow">
                        <div class="col-lg-5 rounded-left" style="
                      background: url('<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/course-spaghetti.jpg' ?>')
                        no-repeat center center / cover;
                      min-height: 300px;
                    "></div>
                        <div class="col-lg-7 d-flex justify-content-center flex-column rounded-right"
                            style="padding: 80px 50px">
                            <h3>
                                Certificate in Commercial Cookery Six (6) Month Course
                            </h3>
                            <p>
                                This course is designed for students to do hands on
                                cooking 5 days a week. Theory classes will be taught for
                                40 minutes after morning practical hands-on cooking class.
                            </p>
                            <div class="slider-features d-none d-sm-block my-3">
                                <ul class="list-unstyled">
                                    <li class="d-inline-block mr-4">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/lunch.svg' ?>"
                                            alt="ingredients" width="30" />
                                        <h5 class="mb-0">Beginner Level</h5>
                                    </li>

                                    <li class="d-inline-block mr-4">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/timer-dark.svg' ?>"
                                            alt="Timer" width="30" />
                                        <h5 class="mb-0">6 months</h5>
                                    </li>

                                    <li class="d-inline-block">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/ingredients-dark.svg' ?>"
                                            alt="ingredients" width="30" />
                                        <h5 class="mb-0">Intern Included</h5>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="course-one.html"
                                    class="button button-circle button-large m-0 font-weight-semibold nott ls0 text-right">View
                                    Course<i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutters align-items-stretch rounded shadow">
                        <div class="col-lg-5 rounded-left dark" style="
                      background: url('<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/course-naan.jpg' ?>')
                        no-repeat 40% 40% / cover;
                      min-height: 300px;
                    "></div>
                        <div class="col-lg-7 d-flex justify-content-center flex-column rounded-right"
                            style="padding: 80px 50px">
                            <h3>
                                Certificate in Indian Cookery Three (3) Month Course
                            </h3>
                            <p>
                                This is an intensive course in Indian cookery. The
                                students will be doing hands on cooking daily for 5 days a
                                week in the Tandoor and the other cookery. Theory class
                                will be limited to 40 minutes to maximise learning by
                                doing hands-on cooking.
                            </p>
                            <div class="slider-features d-none d-sm-block my-3">
                                <ul class="list-unstyled">
                                    <li class="d-inline-block mr-4">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/lunch.svg' ?>"
                                            alt="ingredients" width="30" />
                                        <h5 class="mb-0">Beginner Level</h5>
                                    </li>

                                    <li class="d-inline-block mr-4">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/timer-dark.svg' ?>"
                                            alt="Timer" width="30" />
                                        <h5 class="mb-0">3 Months</h5>
                                    </li>

                                    <li class="d-inline-block">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/ingredients-dark.svg' ?>"
                                            alt="ingredients" width="30" />
                                        <h5 class="mb-0">Intern Included</h5>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="demos/recipes/recipe-single.html"
                                    class="button button-circle button-large m-0 font-weight-semibold ls0 nott text-right">View
                                    Course<i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- courses section end -->

        <!-- news and notice section start  -->
        <div class="section mb-0">
            <div class="container">
                <div class="row clearfix">
                    <div class="heading-block center col-md-6 offset-md-3">
                        <h2 class="mb-3">News & Notice</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Quae veniam quam incidunt eos eaque esse ducimus dolore,
                            velit, laborum dignissimos?
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row clearfix">
                    <div class="col-md-4 mt-4">
                        <div class="card border-0 shadow-sm">
                            <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/blog/piping-bag.jpg' ?>"
                                class="card-img-top" alt="Image" />
                            <div class="card-body" style="padding: 40px">
                                <h4 class="card-title mb-3">
                                    How to Make Paper Piping-Bag
                                </h4>
                                <p class="card-text">
                                    Authoritatively productize 24/7 platforms
                                    authoritatively rather than enterprise customer service.
                                </p>
                                <a href="#" class="card-link stretched-link">Learn More
                                    <i class="icon-angle-right position-relative ml-2" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card border-0 shadow-sm">
                            <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/blog/healthy-food.jpg' ?>"
                                class="card-img-top" alt="Image" />
                            <div class="card-body" style="padding: 40px">
                                <h4 class="card-title mb-3">
                                    Top 10 Healthy Foods of 2021
                                </h4>
                                <p class="card-text">
                                    Dramatically initiate authoritatively interactive
                                    e-tailers with enterprise results phosfluorescently.
                                </p>
                                <a href="#" class="card-link stretched-link">Learn More
                                    <i class="icon-angle-right position-relative ml-2" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card border-0 shadow-sm">
                            <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/blog/meal-prep.jpg' ?>"
                                class="card-img-top" alt="Image" />
                            <div class="card-body" style="padding: 40px">
                                <h4 class="card-title mb-3">Top Vegetarian Meal Preps</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and
                                    make up the bulk of the card's content.
                                </p>
                                <a href="#" class="card-link stretched-link">Learn More
                                    <i class="icon-angle-right position-relative ml-2" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- news and notices section end -->

        <!-- faq section start -->

        <!-- faq section end -->

    </div>
</section>
<!-- #content end -->

<?php get_footer(); ?>