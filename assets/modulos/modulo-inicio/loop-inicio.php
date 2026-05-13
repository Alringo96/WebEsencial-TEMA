 <!-- Aquí si tiene un contendedor -->

 <?php
  $active = true;
  $temp = $wp_query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    'post_type'      => 'seccion', // Poner nombre del modulo de la linea 33
    'orderby'        => 'date',
    'order'          => 'ASC',
    'paged'          => $paged,
    'posts_per_page' => -1 // El -1 es para poner infinitos elementos
  );
  $wp_query = new WP_Query($args);
  if ($wp_query->have_posts()) :
    while ($wp_query->have_posts()) : $wp_query->the_post();
      $post_thumbnail_id  = get_post_thumbnail_id($post->ID);
      $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
      $post_thumbnail_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>

     <section class="container">
       <h2 class="my-5"><?php the_title(); ?></h2>
       <div class="container">
         <div class="row row-cols-1 row-cols-md-4 g-4">
           <?php
            $categoria_slug =  get_field('slug_de_la_categoria');

            $args = [
              'posts_per_page' => 4,
              'orderby'        => 'rand',
              'category_name'  => $categoria_slug,
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
               <div class="col">
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
              echo '<p>No hay entradas en esta.</p>';
            }
            wp_reset_postdata();
            ?>
         </div>
       </div>
       <div class="w-50 mx-auto my-5">
         <a class="btn boton mt-auto d-flex justify-content-center" href="<?php echo esc_url(site_url('/' . $categoria_slug)); ?>">Ver más</a>
       </div>
     </section>

 <?php
    endwhile;
  endif;
  wp_reset_query();
  $wp_query = $temp;
  ?>


 <!-- Cerrar los contenedores -->