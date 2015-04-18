<?php

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


//Code for ACF pages
if( function_exists('register_field_group') ) {

	register_field_group(array (
		'key' => 'group_5531bf56a0e50',
		'title' => 'Pages',
		'fields' => array (
			array (
				'key' => 'field_5531bf6ab1106',
				'label' => 'Main Content',
				'name' => 'main_content',
				'prefix' => '',
				'type' => 'wysiwyg',
				'instructions' => 'Enter in you\'re main conteddnt here.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Here is myyyyyy main content.',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'custom_fields',
			4 => 'discussion',
			5 => 'comments',
			6 => 'revisions',
			7 => 'slug',
			8 => 'author',
			9 => 'format',
			10 => 'page_attributes',
			11 => 'featured_image',
			12 => 'categories',
			13 => 'tags',
			14 => 'send-trackbacks',
		),
	));

}



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


// AJAX Add in later

// function add_line_ajax() {

//   	if ( isset( $_POST["post_var"] ) ) {

// 		acf_form('main-content');

// 		die();
// 	}
// }
// add_action('wp_ajax_add_line', 'add_line_ajax');

