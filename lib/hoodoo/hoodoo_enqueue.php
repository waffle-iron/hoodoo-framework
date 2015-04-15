<?php 

/**
 * Proper way to enqueue scripts and styles
 */

function hoodoo_style() {
	wp_enqueue_style('hoodoo-style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'hoodoo_style' );

function hoodoo_scripts() {
	wp_enqueue_script(
		'hoodoo-script',
		get_stylesheet_directory_uri() . '/assets/js/hoodoo.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'hoodoo_scripts' );

//programmatically create pages


/*
* Font Awesome Icons
* Enqueue Font Awesome Stylesheet from MaxCDN
*/

function webendev_load_font_awesome() {
	if ( ! is_admin() ) {
 
		wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', null, '4.0.1' );
 
	}
 
}
add_action( 'wp_enqueue_scripts', 'webendev_load_font_awesome', 99 );

