<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_post_type_support( 'unite_flims', 'genesis-layouts' );


function create_post_type() {
  register_post_type( 'unite_flims',
    array(
      'labels' => array(
        'name' => __( 'Flims' ),
        'singular_name' => __( 'Flim' ),
        'add_new' => __(' Add New Flim'),

      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports'=> array('title', 'editor', 'thumbnail', 'custom-fields', 'post-formats','page-attributes'),
    )
  );
}
add_action( 'init', 'create_post_type' );


add_action( 'init', 'create_flim_taxonomies', 0 );

function create_flim_taxonomies() {

	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Genres', 'textdomain' ),
		'all_items'         => __( 'All Genres', 'textdomain' ),
		'parent_item'       => __( 'Parent Genre', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
		'edit_item'         => __( 'Edit Genre', 'textdomain' ),
		'update_item'       => __( 'Update Genre', 'textdomain' ),
		'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
		'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
		'menu_name'         => __( 'Genre', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'unite_flims' ), $args );

	$labels = array(
		'name'                       => _x( 'Countries', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Country', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Countries', 'textdomain' ),
		'popular_items'              => __( 'Popular Countries', 'textdomain' ),
		'all_items'                  => __( 'All Countries', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Country', 'textdomain' ),
		'update_item'                => __( 'Update Country', 'textdomain' ),
		'add_new_item'               => __( 'Add New Country', 'textdomain' ),
		'new_item_name'              => __( 'New Country Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Countries with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Countries', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Countries', 'textdomain' ),
		'not_found'                  => __( 'No Country found.', 'textdomain' ),
		'menu_name'                  => __( 'Country', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'country' ),
	);

	register_taxonomy( 'country', 'unite_flims', $args );	


	$labels = array(
		'name'                       => _x( 'Years', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Year', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Years', 'textdomain' ),
		'popular_items'              => __( 'Popular Years', 'textdomain' ),
		'all_items'                  => __( 'All Years', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Year', 'textdomain' ),
		'update_item'                => __( 'Update Year', 'textdomain' ),
		'add_new_item'               => __( 'Add New Year', 'textdomain' ),
		'new_item_name'              => __( 'New Year Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Years with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Years', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Years', 'textdomain' ),
		'not_found'                  => __( 'No Years found.', 'textdomain' ),
		'menu_name'                  => __( 'Years', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'year' ),
	);

	register_taxonomy( 'years', 'unite_flims', $args );


	$labels = array(
		'name'                       => _x( 'Actors', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Actor', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Actors', 'textdomain' ),
		'popular_items'              => __( 'Popular Actors', 'textdomain' ),
		'all_items'                  => __( 'All Actors', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Actor', 'textdomain' ),
		'update_item'                => __( 'Update Actor', 'textdomain' ),
		'add_new_item'               => __( 'Add New Actor', 'textdomain' ),
		'new_item_name'              => __( 'New Actor Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Actors with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Actors', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Actors', 'textdomain' ),
		'not_found'                  => __( 'No Actors found.', 'textdomain' ),
		'menu_name'                  => __( 'Actors', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'actor' ),
	);

	register_taxonomy( 'actors', 'unite_flims', $args );
}