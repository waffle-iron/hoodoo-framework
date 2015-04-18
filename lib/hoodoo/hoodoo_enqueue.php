<?php
/**
 * 
 * Lib functions page for Hoodoo, enqueues, actions, hooks, filters etc.
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 *
 * @todo Look into creating class for quickly creating ACF, Loops OR build out set of functions to resuse, Add requireJS to enqueue scripts?
 *
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


//programmatically create pages (turn into class so can reuse to create pages)

function the_slug_exists($post_name) {
	global $wpdb;
	if($wpdb->get_row("SELECT post_name FROM wp_posts WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
		return true;
	} else {
		return false;
	}
}

// create the blog page
if (is_admin()){
    $blog_page_title = 'Blog';
    $blog_page_content = 'This is blog page placeholder. Anything you enter here will not appear in the front end, except for search results pages.';
    $blog_page_check = get_page_by_title($blog_page_title);
    $blog_page = array(
	    'post_type' => 'page',
	    'post_title' => $blog_page_title,
	    'post_content' => $blog_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    'post_slug' => 'blog'
    );
    if(!isset($blog_page_check->ID) && !the_slug_exists('blog')){
        $blog_page_id = wp_insert_post($blog_page);
    }
}
// change the Sample page to the home page
if (is_admin()){
    $home_page_title = 'Home';
    $home_page_content = '';
    $home_page_check = get_page_by_title($home_page_title);
    $home_page = array(
	    'post_type' => 'page',
	    'post_title' => $home_page_title,
	    'post_content' => $home_page_content,
	    'post_status' => 'publish',
	    'post_author' => 1,
	    //'ID' => 2,
	    'post_slug' => 'home'
    );
    if(!isset($home_page_check->ID) && !the_slug_exists('home')){
        $home_page_id = wp_insert_post($home_page);
    }
}
if (is_admin()){
	// Set the blog page
	$blog = get_page_by_title( 'Blog' );
	update_option( 'page_for_posts', $blog->ID );

	// Use a static front page
	$the_home_page = get_page_by_title( 'Home' );
	//$front_page = 2; // this is the default page created by WordPress
	update_option( 'page_on_front', $the_home_page->ID /* front_page */ );
	//update_option( 'show_on_front', 'page' );
}
//remove sample page
$defaultPage = get_page_by_title( 'Sample Page' );
wp_delete_post( $defaultPage->ID );


//register primary nav
function register_theme_menus() {

	register_nav_menus(
		array(
			'header-nav' =>_( 'Header Navigation'),
			'footer-nav' =>_( 'Footer Navigation'),
		)
	);
}
add_action('init', 'register_theme_menus');


//add class to menu item

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( $item ){
             $classes[] = 'nav-link';
     }
     return $classes;
}



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

