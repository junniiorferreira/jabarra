<?php 
/*
* Creating a function to create our CPT
*/
 
add_theme_support( 'post-thumbnails' );

 
function type_webdor() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Homepage', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Homepage', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Homepage', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Homepage', 'suit-up' ),
        'all_items'           => __( 'Todas as Sessões', 'suit-up' ),
        'view_item'           => __( 'View slide', 'suit-up' ),
        'add_new_item'        => __( 'Add New Slide', 'suit-up' ),
        'add_new'             => __( 'Nova Sessão', 'suit-up' ),
        'edit_item'           => __( 'Edit Slide', 'suit-up' ),
        'update_item'         => __( 'Update Slide', 'suit-up' ),
        'search_items'        => __( 'Search in Homepage', 'suit-up' ),
        'not_found'           => __( 'Slide Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Slide not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Homepage', 'suit-up' ),
        'description'         => __( 'Slideshow view for homepage', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        // 'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Home Slider', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'type_webdor', 0 );


// NEW CPT
 
function webdorservice() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Nossos Serviços', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Serviço', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Nossos Serviços', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'Todas as Sessões', 'suit-up' ),
        'view_item'           => __( 'Ver Serviço', 'suit-up' ),
        'add_new_item'        => __( 'Novo Serviço', 'suit-up' ),
        'add_new'             => __( 'Adicionar Sessão', 'suit-up' ),
        'edit_item'           => __( 'Editar Serviço', 'suit-up' ),
        'update_item'         => __( 'Atualizar Serviço', 'suit-up' ),
        'search_items'        => __( 'Buscar em Nossos Serviços', 'suit-up' ),
        'not_found'           => __( 'Nada encontrado', 'suit-up' ),
        'not_found_in_trash'  => __( 'Nada encontrado na lixeira', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Nossos Serviços', 'suit-up' ),
        'description'         => __( 'Controller for service page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        // 'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdorservice', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdorservice', 0 );


// new cpt

function webdortransporte() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Transportes', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Transporte', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Transportes', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Transporte', 'suit-up' ),
        'all_items'           => __( 'Todas as Sessões', 'suit-up' ),
        'view_item'           => __( 'Ver Sessão', 'suit-up' ),
        'add_new_item'        => __( 'Nova Sessão', 'suit-up' ),
        'add_new'             => __( 'Nova Sessão', 'suit-up' ),
        'edit_item'           => __( 'Editar Sessão', 'suit-up' ),
        'update_item'         => __( 'Atualizar Sessão', 'suit-up' ),
        'search_items'        => __( 'Search in Sessão Transportes', 'suit-up' ),
        'not_found'           => __( 'Sessão Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Sessão not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Transportes', 'suit-up' ),
        'description'         => __( 'Controller for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        // 'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdortransporte', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdortransporte', 0 );

// new cpt

function webdorsupervisor() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor Supervisor', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor Supervisor', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor Supervisor', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor Supervisor', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdorsupervisor', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdorsupervisor', 0 );

// new cpt

function webdorformacao() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor Formação', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor Formação', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor Formação', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor Formação', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdorformacao', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdorformacao', 0 );

// new cpt

function webdorreciclagem() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor Reciclagem', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor Reciclagem', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor Reciclagem', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor Reciclagem', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdorreciclagem', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdorreciclagem', 0 );

// new cpt

function webdorpresencial() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor Presencial', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor Presencial', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor Presencial', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor Presencial', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdorpresencial', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdorpresencial', 0 );


// new cpt

function webdoread() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor EAD', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor EAD', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor EAD', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor EAD', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdoread', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdoread', 0 );


// new cpt

function webdorcnen() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor CNEN', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor CNEN', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor CNEN', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor CNEN', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdorcnen', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdorcnen', 0 );


// new cpt

function webdoribama() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor IBAMA', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor IBAMA', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor IBAMA', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor IBAMA', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdoribama', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdoribama', 0 );


// new cpt

function webdormineradoras() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor Mineradoras', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor Mineradoras', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor Mineradoras', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor Mineradoras', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdormineradoras', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdormineradoras', 0 );

// new cpt

function webdoranalises() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor Análises', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor Análises', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor Análises', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor Análises', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdoranalises', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdoranalises', 0 );

// new cpt

function webdorcontato() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor Contato', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor Contato', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor Contato', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor Contato', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdorcontato', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdorcontato', 0 );


// new cpt

function webdorvendas() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Webdor Vendas', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Webdor', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Webdor Vendas', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Webdor', 'suit-up' ),
        'all_items'           => __( 'All Webdors', 'suit-up' ),
        'view_item'           => __( 'View Webdor', 'suit-up' ),
        'add_new_item'        => __( 'Add New Webdor', 'suit-up' ),
        'add_new'             => __( 'New Webdor', 'suit-up' ),
        'edit_item'           => __( 'Edit Webdor', 'suit-up' ),
        'update_item'         => __( 'Update Webdor', 'suit-up' ),
        'search_items'        => __( 'Search in Webdor Vendas', 'suit-up' ),
        'not_found'           => __( 'Webdor Not Found', 'suit-up' ),
        'not_found_in_trash'  => __( 'Webdor not found in Trash', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Webdor Vendas', 'suit-up' ),
        'description'         => __( 'Webdor view for transport page', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'webdorvendas', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'webdorvendas', 0 );


// new cpt

function social_links() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Mídias Sociais', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Mídia Social', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Mídias Sociais', 'suit-up' ),
        'parent_item_colon'   => __( 'Parent Mídia Social', 'suit-up' ),
        'all_items'           => __( 'Todas as Mídias Sociais', 'suit-up' ),
        'view_item'           => __( 'Ver Mídia Social', 'suit-up' ),
        'add_new_item'        => __( 'Nova Mídia Social', 'suit-up' ),
        'add_new'             => __( 'Nova Mídia', 'suit-up' ),
        'edit_item'           => __( 'Editar Mídia', 'suit-up' ),
        'update_item'         => __( 'Atualizar Mídia', 'suit-up' ),
        'search_items'        => __( 'Procurar Mídia Social', 'suit-up' ),
        'not_found'           => __( 'Mídia não encontrada', 'suit-up' ),
        'not_found_in_trash'  => __( 'Mídia não encontrada na lixeira', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Mídias Sociais', 'suit-up' ),
        'description'         => __( 'Lista de mídias sociais', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'social_links', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'social_links', 0 );


// new cpt

function parceiros() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Parceiros', 'Post Type General Name', 'suit-up' ),
        'singular_name'       => _x( 'Parceiro', 'Post Type Singular Name', 'suit-up' ),
        'menu_name'           => __( 'Parceiros', 'suit-up' ),
        'parent_item_colon'   => __( 'Parceiro relacionado', 'suit-up' ),
        'all_items'           => __( 'Todas os parceiros', 'suit-up' ),
        'view_item'           => __( 'Ver parceiro', 'suit-up' ),
        'add_new_item'        => __( 'Nova parceiria', 'suit-up' ),
        'add_new'             => __( 'Novo parceiro', 'suit-up' ),
        'edit_item'           => __( 'Editar parceiro', 'suit-up' ),
        'update_item'         => __( 'Atualizar parceiro', 'suit-up' ),
        'search_items'        => __( 'Procurar parceiro', 'suit-up' ),
        'not_found'           => __( 'Parceiro não encontrada', 'suit-up' ),
        'not_found_in_trash'  => __( 'Parceiro não encontrada na lixeira', 'suit-up' )
    );
     
// Set other options for Custom Post Type     
    $args = array(
        'label'               => __( 'Parceiros', 'suit-up' ),
        'description'         => __( 'Lista de parceiros', 'suit-up' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-admin-home'
    );
     
    // Registering your Custom Post Type
    register_post_type( 'parceiros', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'parceiros', 0 );