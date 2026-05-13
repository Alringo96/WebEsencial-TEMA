<?php 
function crear_post_type_seccion() {
    $labels = array(
        'name'                  => 'Agregar al inicios',
        'singular_name'         => 'Agregar al inicio',
        'menu_name'             => 'Agregar al inicios',
        'name_admin_bar'        => 'Agregar al inicio',
        'add_new'               => 'Agregar nuevo',
        'add_new_item'          => 'Agregar nuevo Agregar al inicio',
        'new_item'              => 'Nuevo Agregar al inicio',
        'edit_item'             => 'Editar Agregar al inicio',
        'view_item'             => 'Ver Agregar al inicio',
        'all_items'             => 'Todas las Agregar al inicios',
        'search_items'          => 'Buscar Agregar al inicios',
        'not_found'             => 'No se encontraron Agregar al inicios',
        'not_found_in_trash'    => 'No se encontraron Agregar al inicios en la papelera',
        'parent_item_colon'     => '',
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'Agregar al inicios'),
        'show_in_rest'      => true,
        'supports'          => array('title'),
        'taxonomies'        => array(),
        'show_in_menu'      => true,
        'menu_icon'         => 'dashicons-universal-access',
        'show_ui'           => true,
    );

    register_post_type('seccion', $args);
}
add_action('init', 'crear_post_type_seccion');
