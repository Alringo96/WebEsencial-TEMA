<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package examen
 */

?>

<footer id="colophon" class="site-footer">
	<div class="d-flex align-items-center justify-content-around">
		<?php dynamic_sidebar('footer_1') ?>
		<?php dynamic_sidebar('footer_2') ?>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>