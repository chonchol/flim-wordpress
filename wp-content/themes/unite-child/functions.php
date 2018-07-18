<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



function create_post_type() {
  register_post_type( 'unite_flims',
    array(
      'labels' => array(
        'name' => __( 'Flims' ),
        'singular_name' => __( 'Flim' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );