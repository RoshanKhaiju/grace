<?php if (have_rows('faq_repeater')) : ?>

<div class="section bg-transparent m-0" style="
              background: url('<?php echo get_template_directory_uri() . '/assets/demos/recipes/images/faq-bg.jpg' ?>') no-repeat
                center center / cover;
              min-height: 300px;
            ">
    <div class="container d-flex flex-column align-items-center">
        <h2 class="mb-5 faq-title">FAQs</h2>
        <div id="faqs" class="faqs">

            <?php while (have_rows('faq_repeater')) : the_row(); ?>
            <div class="toggle faq faq-marketplace faq-authors ">
                <div class="toggle-header">
                    <div class="toggle-title"><?php the_sub_field('question') ?></div>
                </div>
                <div class="toggle-content"><?php the_sub_field('answer') ?></div>
            </div>
            <?php endwhile; ?>

        </div>
    </div>
</div>

<?php endif; ?>