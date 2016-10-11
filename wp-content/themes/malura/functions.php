<?php

add_theme_support( 'post-thumbnails' );


/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function prefix_register_name() {
	$nomeSingular = 'Imóvel';
	$nomePlural = "Imóveis";

	$labels = array(
		'name'                => __( $nomeSingular, 'text-domain' ),
		'singular_name'       => __( $nomeSingular, 'text-domain' ),
		'add_new'             => _x( 'Adiciona novo '.$nomeSingular, 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Adicionar novo '.$nomeSingular, 'text-domain' ),
		'edit_item'           => __( 'Editar '.$nomeSingular, 'text-domain' ),
		'new_item'            => __( 'Novo '.$nomeSingular, 'text-domain' ),
		'view_item'           => __( 'Ver '.$nomeSingular, 'text-domain' ),
		'search_items'        => __( 'Buscar '.$nomePlural, 'text-domain' ),
		'not_found'           => __( 'Nenhum '.$nomeSingular.' encontrado', 'text-domain' ),
		'not_found_in_trash'  => __( 'Nenhum '.$nomePlural.' encontrado na Lixeira', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent '.$nomeSingular.':', 'text-domain' ),
		'menu_name'           => __( $nomePlural, 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-home',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
			)
	);

	register_post_type( 'imovel', $args );
}

add_action( 'init', 'prefix_register_name' );

function registrarMenuNavegacao(){
	register_nav_menu( 'header', 'main-menu');
}


/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function my_taxonomies_name() {

	$labels = array(
		'name'					=> _x( 'Localizações', 'Localizações', 'text-domain' ),
		'singular_name'			=> _x( 'Localização', 'Localização', 'text-domain' ),
		'search_items'			=> __( 'Localização', 'text-domain' ),
		'popular_items'			=> __( 'Localizações', 'text-domain' ),
		'all_items'				=> __( 'Localizações', 'text-domain' ),
		'parent_item'			=> __( 'Parent Singular Name', 'text-domain' ),
		'parent_item_colon'		=> __( 'Parent Singular Name', 'text-domain' ),
		'edit_item'				=> __( 'Ẽditar Localização', 'text-domain' ),
		'update_item'			=> __( 'Alterar Localização', 'text-domain' ),
		'add_new_item'			=> __( 'Adicionar nova Localização', 'text-domain' ),
		'new_item_name'			=> __( 'Adicionar Nova Localização', 'text-domain' ),
		'add_or_remove_items'	=> __( 'Adicionar ou remover Localização', 'text-domain' ),
		'menu_name'				=> __( 'Localização', 'text-domain' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'taxonomy-slug', array( 'imovel' ), $args );
}
add_action( 'init', 'registrarMenuNavegacao' );
add_action( 'init', 'my_taxonomies_name' );