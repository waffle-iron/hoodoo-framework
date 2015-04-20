<?php
/**
 * 
 * Lib for ACF settings and config
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 *
 * @todo Look into creating class for quickly creating ACF, Loops OR build out set of functions to resuse, add Ajax for forms
 *
 */

/*

Enabled ACF Plugin to ship with Theme

*/


// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/acf.php' );




// Contact Form!

add_action('acf/save_post', 'my_save_post');

function my_save_post( $post_id ) {
	
	// bail early if not a contact_form post
	if( get_post_type($post_id) !== 'contact_form' ) {
		
		return;
		
	}
	
	
	// bail early if editing in admin
	if( is_admin() ) {
		
		return;
		
	}
	
	
	// vars
	$post = get_post( $post_id );
	
	
	// get custom fields (field group exists for content_form)
	$name = get_field('name', $post_id);
	$email = get_field('email', $post_id);
	
	
	// email data
	$to = 'zac.rosenbauer@pointstart.us';
	$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
	$subject = $post->post_title;
	$body = $post->post_content;
	
	
	// send email
	wp_mail($to, $subject, $body, $headers );
	
}


/*

Ajax Loader Example for forms add in later

function add_line_ajax() {

  	if ( isset( $_POST["post_var"] ) ) {

		acf_form('main-content');

		die();
	}
}
add_action('wp_ajax_add_line', 'add_line_ajax');

*/


