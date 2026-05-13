<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package examen
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h1 class="d-flex justify-content-center my-5"><?php the_title() ?></h1>


  <div class="container mb-5">
    <p class="opacity-50 d-flex align-items-center"><span class="material-symbols-outlined">
        filter_alt
      </span>Filtro:</p>
    <span data-filter>Todo</span>
    <?php if (have_rows('filtro')): ?>
      <?php while (have_rows('filtro')): the_row();
        $texto = get_sub_field('nombre_de_la_etiqueta');
        $data = get_sub_field('slug_de_la_etiqueta');
        if ($texto || $data): ?>
          <span data-filter="<?php echo esc_attr($data); ?>"><?php echo esc_html($texto); ?></span>
      <?php endif;
      endwhile; ?>
    <?php endif; ?>
  </div>


  <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">

      <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category_name' => get_field('nombre_de_la_categoria'),
      ];

      $query = new WP_Query($args);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();

          $tags = get_the_tags();
          $data_tags = [];

          if ($tags && !is_wp_error($tags)) {
            foreach ($tags as $tag) {
              $data_tags[] = esc_attr($tag->slug);
            }
          }

          $data_tags_str = implode(',', $data_tags);


      ?>



          <div class="col" data-tags="<?php echo esc_attr($data_tags_str); ?>">
            <div class="card h-100">
              <?php if (has_post_thumbnail()) : ?>
                <a class="d-flex justify-content-center mx-auto" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium'); ?>
                </a>
              <?php endif; ?>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn boton mt-auto d-flex justify-content-center">Ver más</a>
              </div>
            </div>
          </div>



      <?php
        }
      } else {
        echo '<p>No hay entradas en esta categoría.</p>';
      }

      wp_reset_postdata();
      ?>

    </div>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->

<script>
  jQuery(function($) {
    $.autofilter({

      animation: true,
      duration: 1000,

    });
  });
</script>