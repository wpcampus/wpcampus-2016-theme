<?php

// Include shortcodes
require_once( STYLESHEETPATH . '/includes/shortcodes.php' );

// Add <title> support
add_theme_support( 'title-tag' );

// This theme uses wp_nav_menu() in two locations.
/*register_nav_menus( array(
	'primary' => 'Primary Menu',
	'footer'  => 'Footer Menu',
) );*/

// Switch default core markup for search form, comment form, and comments to output valid HTML5
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

// Enqueues scripts and styles
add_action( 'wp_enqueue_scripts', 'wpcampus_2016_enqueue_scripts' );
function wpcampus_2016_enqueue_scripts() {

	// Load Fonts
	wp_enqueue_style( 'wpcampus-2016-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:600,400,300' );

	// Add our theme stylesheet
	wp_enqueue_style( 'wpcampus-2016', get_template_directory_uri() . '/css/styles.css', array( 'wpcampus-2016-fonts' ) );

	// Add our home styles
	if ( is_front_page() ) {
		wp_enqueue_style( 'wpcampus-2016-home', get_template_directory_uri() . '/css/home.css', array( 'wpcampus-2016' ) );
	}

}

// Hide Query Monitor if admin bar isn't showing
add_filter( 'qm/process', 'wpcampus_2016_hide_query_monitor', 10, 2 );
function wpcampus_2016_hide_query_monitor( $show_qm, $is_admin_bar_showing ) {
	return $is_admin_bar_showing;
}