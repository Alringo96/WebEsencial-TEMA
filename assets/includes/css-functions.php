<?php

function css_functions()
{
    wp_register_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', 'all');

    wp_register_style('icon-filter', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=filter_alt', 'all');

    wp_register_style('estilo-cliente', get_template_directory_uri() . '/assets/librerias/css/style.css', 'all');


    wp_enqueue_style('bootstrap-css');

    wp_enqueue_style('icon-filter');

    wp_enqueue_style('estilo-cliente');
}

add_action('wp_enqueue_scripts', 'css_functions');
