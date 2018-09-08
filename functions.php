<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// Register new menu
register_nav_menus( array(
  'primary' => __( 'Primary Menu'),
));

function bs_theme_setup() {
  // Add featured image support 
  add_theme_support('post-thumbnails');
}

// Excerpt length control
function set_excerpt_length() {
  return 40;
}

add_action('after_setup_theme', 'bs_theme_setup');
add_filter('excerpt_length', 'set_excerpt_length', 999);
