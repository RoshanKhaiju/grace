<div class="col-12 mt-5 mb-3">
    <h3 class="center"><?php the_sub_field('heading'); ?></h3>
    <?php if (have_rows('category_repeater')) : ?>
    <div class="categories-lists justify-content-center clearfix">

        <?php while (have_rows('category_repeater')) : the_row(); ?>

        <?php
                $bg_image = get_sub_field('background_image');
                $image = get_sub_field('image');
                ?>

        <a href="<?php the_sub_field('category_url'); ?>" data-animate="fadeInUp" class="categories" style="
                        background-image: url('<?php echo $bg_image['url']; ?>')">
            <div class="categories-details">
                <div class="icon">
                    <img src="<?php echo $image['url']; ?>" alt="Breakfast" />
                </div>
                <div class="info"><?php the_sub_field('title') ?></div>
            </div>
        </a>

        <?php endwhile; ?>

    </div>
    <?php endif; ?>
</div>