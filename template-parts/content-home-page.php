<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package examen
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('home'); ?>>
	<section class="seccion-1 d-flex flex-column align-items-center container">
		<p class="mb-0"><?php the_excerpt() ?></p>
		<h1><?php the_title() ?></h1>
		<div class="w-75 text-center"><?php the_content() ?></div>
	</section>

	<?php include get_template_directory() . '/assets/modulos/modulo-inicio/loop-inicio.php' ?>

</article><!-- #post-<?php the_ID(); ?> -->