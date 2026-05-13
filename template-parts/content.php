<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package examen
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entradas'); ?>>
	<section class="d-flex flex-column align-items-center my-5 container">
		<h1 class="text-center"><?php the_field('titulo_descripcion'); ?></h1>
		<p>Escrito por: <?php the_author(); ?> <?php echo get_the_date('d/m/Y'); ?></p>
		<p class="text-center"><?php the_field('descripcion'); ?></p>
	</section>

	<section class="d-flex flex-column align-items-center container">
		<h2 class="fw-bold"><?php the_title(); ?></h2>
		<div class="my-4"><?php examen_post_thumbnail(); ?></div>
		<div><?php the_content() ?></div>
	</section>

	<section id="quiz" class="d-flex flex-column align-items-center">
		<h2 class="container text-center" id="pregunta"></h2>
		<div id="opciones" class="d-flex flex-column"></div>
	</section>

	<section class="d-flex justify-content-around botones-sig-ant">
		<a href="<?php the_field('anterior'); ?>" id="anterior" class="deshabilitado">Tema anterior</a>
		<a href="<?php the_field('siguiente'); ?>" id="siguiente" class="deshabilitado">Tema siguiente</a>
	</section>
	<div class="container">
		<h3 class="mt-5">Referencias:</h3>

		<?php if (have_rows('referencias')): ?>
			<?php while (have_rows('referencias')): the_row();
				$referencia = get_sub_field('referencia');
				$link = get_sub_field('link');
				if ($referencia || $link): ?>
					<div class="text-start mb-4">
						<p class="mb-0"><?php echo esc_html($referencia); ?></p>
						<a href="<?php echo esc_url($link); ?>"><?php echo esc_url($link); ?></a>
					</div>
			<?php endif;
			endwhile; ?>
		<?php else: ?>
			<p>No hay referencias disponibles.</p>
		<?php endif; ?>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->