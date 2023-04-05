  <div class="section mb-0">
      <div class="container">
          <div class="row clearfix">

              <div class="heading-block center col-md-6 offset-md-3">
                  <h2 class="mb-3"><?php the_sub_field('heading') ?></h2>
                  <p>
                      <?php the_sub_field('sub_heading') ?>
                  </p>
              </div>

          </div>
          <div class="clear"></div>
          <div class="row clearfix">

              <?php

                //   the query
                $the_query = new WP_Query(array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'news-and-notice',
                    'posts_per_page' => 3,
                ))
                ?>

              <?php
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>

              <div class="col-md-4 mt-4">
                  <div class="card border-0 shadow-sm">
                      <img src="<?php the_post_thumbnail('newsAndNoticeImg'); ?>" class="card-img-top" alt="Image" />
                      <div class="card-body" style="padding: 40px">
                          <h4 class="card-title mb-3">
                              <?php the_title() ?>
                          </h4>
                          <p class="card-text">
                              <?php the_excerpt() ?>
                          </p>
                          <a href="<?php the_permalink() ?>" class="card-link stretched-link">Learn More
                              <i class="icon-angle-right position-relative ml-2" style="top: 2px"></i></a>
                      </div>
                  </div>
              </div>

              <?php endwhile; ?>
              <?php endif; ?>

          </div>
      </div>
  </div>