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



 // Register our sidebars and widgetized areas.
function arphabet_widgets_init() {

	// Above content, below navbar
	register_sidebar( array(
		'name'          => 'Above Content',
		'id'            => 'above-content',
		'before_widget' => '<div class="bs-above-content">',
		'after_widget'  => '</div>',
		'description'   => __('Above content, below navbar', 'above-content'),
	) );

	// Above post content, under title
	register_sidebar( array(
		'name'          => 'Above Post',
		'id'            => 'above-post',
		'before_widget' => '<div class="bs-above-post">',
		'after_widget'  => '</div>',
		'description'   => __('Above post content, under title.', 'above-post'),
	) );

	// Below post content, before comments
	register_sidebar( array(
		'name'          => 'Below Post',
		'id'            => 'below-post',
		'before_widget' => '<div class="bs-below-post">',
		'after_widget'  => '</div>',
		'description'   => __('Below post content, before comments.', 'below-post'),
	) );


	// Sidebar, to right of content
	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right-sidebar',
		'before_widget' => '<div class="bs-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'description'   => __('Right sidebar', 'right-sidebar'),
	) );

	// Footer left widget area
	register_sidebar( array(
		'name'        => 'Footer Left',
		'id'          => 'footer-left',
		'before_widget' => '<div class="bs-footer-widget">',
		'after_widget' => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'description' => __( 'Left half of footer', 'footer-left' ),
	) );

	// Footer middle widget area
	register_sidebar( array(
		'name'        => 'Footer Middle',
		'id'          => 'footer-middle',
		'before_widget' => '<div class="bs-footer-widget">',
		'after_widget' => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'description' => __( 'Footer area, middle/right side, 1/4 of footer', 'footer-middle' ),
	) );

	// Footer middle widget area
	register_sidebar( array(
		'name'        => 'Footer Right',
		'id'          => 'footer-right',
		'before_widget' => '<div class="bs-footer-widget">',
		'after_widget' => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'description' => __( 'Footer area, far right side, 1/4 of footer', 'footer-right' ),
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


// Add class to pagination Links
function posts_link_attributes() {
    return 'class="btn btn-primary"';
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

// Add class to next/previous post Links
function post_link_attributes($output) {
    $code = 'class="btn btn-primary"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}

add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');


// Code requested to be added for comment Walker
// https://github.com/bourafai/wp-bootstrap-4-comment-walker
function custom_theme_setup() {
    add_theme_support( 'html5', array( 'comment-list' ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
