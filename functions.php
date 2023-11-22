<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function universalblocks_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'universalblocks_setup' );



/**
 * Enqueue scripts and styles.
 */
function universalblocks_scripts() {
	wp_enqueue_style( 'universalblocks-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	// Normilize
	wp_enqueue_style( 'normilize', get_template_directory_uri() . '/assets/css/normalize.min.css', array(), _S_VERSION, false );
	
	// jquery
	wp_enqueue_script('jquery');


	// Universal styles
	wp_enqueue_style( 'universalblocks-styles', get_template_directory_uri() . '/assets/css/universal.css', array(), _S_VERSION, false );
	wp_enqueue_style( 'universalblocks-responsive', get_template_directory_uri() . '/assets/css/universal-responsive.css', array(), _S_VERSION, false );

	// Universal scripts
	wp_enqueue_script( 'universalblocks-scripts', get_template_directory_uri() . '/assets/js/universal.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'universalblocks_scripts' );


/**
 * Сarbon Fields
 */
require get_template_directory() . '/inc/carbon-fields.php';
