<?php

function js_functions()
{
    if (!is_admin()) {

        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);

        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), null, true);

        wp_register_script('quiz', get_template_directory_uri() . '/assets/librerias/js/quiz-btn.js', array('jquery'), null, true);

        wp_register_script('autofilter', get_template_directory_uri() . '/assets/librerias/js/autofilter.js', array('jquery'), null, true);

        wp_enqueue_script('bootstrap-js');

        wp_enqueue_script('jquery');

        wp_enqueue_script('quiz');

        wp_enqueue_script('autofilter');

        // Pasar datos a quiz.js (la URL para quiz.php y el slug del post)
        wp_localize_script('quiz', 'quizData', array(
            'ajax_url' => get_template_directory_uri() . '/assets/includes/quiz.php', // ajusta esta ruta si tu quiz.php está en otro sitio
            'slug' => get_post_field('post_name'),
        ));

        
    }
}
add_action('wp_enqueue_scripts', 'js_functions');

?>