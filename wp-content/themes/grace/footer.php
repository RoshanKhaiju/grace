<?php

/**
 * template for displaying footer
 *
 * @package grace
 */
?>

<!-- Footer
		============================================= -->
<footer id="footer" class="bg-white border-0">

    <?php get_template_part('template-parts/footer/footer', 'top'); ?>

    <!-- Copyrights
              ============================================= -->
    <?php get_template_part('template-parts/footer/footer', 'bottom'); ?>
    <!-- #copyrights end -->
</footer>
<!-- #footer end -->
</div>
<!-- #wrapper end -->

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<?php wp_footer(); ?>
</body>

</html>
