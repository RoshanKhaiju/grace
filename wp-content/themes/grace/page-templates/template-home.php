<?php
/**
* Template Name: Homepage
*
* @package grace
*/

get_header();
if (have_rows('flexible_section')) {
    while (have_rows('flexible_section')):
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
                    <div class="col-md-8 offset-md-2 center">
                        <h2 class="text-title-light text-dark mb-5 ls1 text-uppercase">
                            Who we are
                        </h2>
                        <p style="font-size: 18px; color: #777">
                            The Grace Culinary Academy is a not-for-profit educational
                            institution dedicated to providing comprehensive culinary
                            education to students in Nepal. Our mission is to prepare
                            students for successful careers in the culinary arts and
                            hospitality industry by providing a rigorous and engaging
                            curriculum, hands-on experience, and a supportive learning
                            environment.
                        </p>
                        <div class="mb-4">
                            <a href="demos/recipes/recipe-single.html"
                                class="button button-circle button-large m-0 font-weight-semibold nott ls0 text-right">Read
                                More<i class="icon-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 mt-5 mb-3">
                        <h3 class="center">Browse by Category</h3>
                        <div class="categories-lists justify-content-center clearfix">
                            <a href="demos/recipes/recipes.html" data-animate="fadeInUp" class="categories" style="
                        background-image: url('<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/categories/bf.jpg' ?>');
                      ">
                                <div class="categories-details">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/bf.svg' ?>"
                                            alt="Breakfast" />
                                    </div>
                                    <div class="info">Our Brochure</div>
                                </div>
                            </a>

                            <a href="demos/recipes/recipes.html" data-animate="fadeInUp" data-delay="100"
                                class="categories" style="
                        background-image: url('<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/categories/lunch.jpg' ?>');
                      ">
                                <div class="categories-details">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/lunch.svg' ?>"
                                            alt="Lunch" />
                                    </div>
                                    <div class="info">Our Philosophy</div>
                                </div>
                            </a>

                            <a href="demos/recipes/recipes.html" data-animate="fadeInUp" data-delay="200"
                                class="categories" style="
                        background-image: url('<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/categories/dinner.jpg' ?>');
                      ">
                                <div class="categories-details">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/dinner.svg' ?>"
                                            alt="Dinner" />
                                    </div>
                                    <div class="info">Courses</div>
                                </div>
                            </a>

                            <a href="demos/recipes/recipes.html" data-animate="fadeInUp" data-delay="200"
                                class="categories" style="
                        background-image: url('<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/categories/desserts.jpg' ?>');
                      ">
                                <div class="categories-details">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/icons/dinner.svg' ?>"
                                            alt="Dinner" />
                                    </div>
                                    <div class="info">Enrollment Form</div>
                                </div>
                            </a>
                        </div>
                    </div>
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
        <div class="section bg-transparent m-0" style="
              background: url('<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/faq-bg.jpg' ?>') no-repeat
                center center / cover;
              min-height: 300px;
            ">
            <div class="container d-flex flex-column align-items-center">
                <h2 class="mb-5 faq-title">FAQs</h2>
                <div id="faqs" class="faqs">
                    <div class="toggle faq faq-marketplace faq-authors border-top pt-4">
                        <div class="toggle-header">
                            <div class="toggle-title">1. What courses can I take?</div>
                        </div>
                        <div class="toggle-content">
                            You can take either a 6-month international cooking course
                            or a 3-month Indian cooking course. If you want to you can
                            always take both!
                        </div>
                    </div>

                    <div class="toggle faq faq-authors faq-miscellaneous">
                        <div class="toggle-header">
                            <div class="toggle-title">
                                2. Is there an age limit for the course?
                            </div>
                        </div>
                        <div class="toggle-content">
                            No, anyone aged 18 and over can apply.
                        </div>
                    </div>

                    <div class="toggle faq faq-miscellaneous">
                        <div class="toggle-header">
                            <div class="toggle-title">3. What will they cost?</div>
                        </div>
                        <div class="toggle-content">
                            The 6-month fee is NPR80,000 and the 3-month fee is
                            NPR40,000.
                        </div>
                    </div>

                    <div class="toggle faq faq-authors faq-legal faq-itemdiscussion">
                        <div class="toggle-header">
                            <div class="toggle-title">
                                4. Do I need any previous qualifications?
                            </div>
                        </div>
                        <div class="toggle-content">
                            Minimal Year 10 secondary school cert, plus a desire to
                            become a professional cook in demand by the hospitality
                            industry.
                        </div>
                    </div>

                    <div class="toggle faq faq-marketplace faq-authors">
                        <div class="toggle-header">
                            <div class="toggle-title">5. Who is the teacher?</div>
                        </div>
                        <div class="toggle-content">
                            Mr Bimal Tamang is a top international chef who has worked
                            in Hong Kong, Abu Dhabi, as well as top restaurants in
                            Nepal.
                        </div>
                    </div>

                    <div class="toggle faq faq-marketplace faq-authors">
                        <div class="toggle-header">
                            <div class="toggle-title">
                                6. When does the course start?
                            </div>
                        </div>
                        <div class="toggle-content">
                            It is expected to start in mid-April, and the exact date
                            will be confirmed.
                        </div>
                    </div>

                    <div class="toggle faq faq-marketplace faq-authors">
                        <div class="toggle-header">
                            <div class="toggle-title">
                                7. How many days per week will I be attending classes?
                            </div>
                        </div>
                        <div class="toggle-content">
                            You will be attending the academy 5 days per week doing
                            hands-on cooking for most of each day. Classroom attendance
                            will be no more than 40 minutes per day, we want you to be
                            cooking in the kitchen!
                        </div>
                    </div>

                    <div class="toggle faq faq-marketplace faq-authors">
                        <div class="toggle-header">
                            <div class="toggle-title">
                                8. Where is the academy and how do I get there?
                            </div>
                        </div>
                        <div class="toggle-content">
                            Grace Culinary Academy contains a fully equipped, modern
                            commercial kitchen, and is located in Dukuchhap. A 30-seater
                            bus will pick you up from designated stops in Lalitpur.
                        </div>
                    </div>

                    <div class="toggle faq faq-marketplace faq-authors">
                        <div class="toggle-header">
                            <div class="toggle-title">
                                9. Will I get a job after I complete the course?
                            </div>
                        </div>
                        <div class="toggle-content">
                            You will be job ready to be employed as a professional cook
                            in the hotel/restaurant industry.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq section end -->

    </div>
</section>
<!-- #content end -->

<?php get_footer(); ?>
