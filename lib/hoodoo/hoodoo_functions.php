<?php

//Name of theme root / dir name
define( 'THEME_NAME', 'hoodoo-framework' );
//Define which template you are using or custom built template
define( 'TEMPLATE_NAME', 'huna' );

//constants
define('THEME_ROOT', get_theme_root() . '/' . THEME_NAME );
define('PAGES_ROOT', THEME_ROOT . '/content/pages');
define('NAV_ROOT', THEME_ROOT . '/content/nav');  
define('COMPONENTS_ROOT', THEME_ROOT . '/content/components/'); 
define('IMAGES_ROOT', THEME_ROOT . '/assets/img/'); 
define('JS_ROOT', THEME_ROOT . '/assets/js/'); 
define('CSS_ROOT', THEME_ROOT . '/assets/css/'); 



function hoodoo_if_user_logged_in($args) 
{
	if ( is_user_logged_in() ) {
		$args;
	}
}

// function my_acf_save_post( $post_id )
// {
//     wp_redirect(get_permalink($post_id)); exit;
// }
// add_action('acf/save_post', 'my_acf_save_post', 20);


// add_filter('acf/pre_save_post' , 'my_pre_save_post' );
// function my_pre_save_post( $post_id ) 
// {
//     global $post;
	
// 	if($post->post_name == 'some-post') {
// 	    // Create a new post
// 	    $post = array(
// 	        'post_status'  => 'publish' ,
// 	        'post_title'  => 'some-title',
// 	        'post_type'  => 'some-post-type',
// 	    );  
	 
// 	    // insert the post
// 	    $post_id = wp_insert_post($post); 
		
// 		// update custom field
// 		update_post_meta($post_id, 'some-customfield', $post_id);
						 
// 		do_action('acf/save_post', $post_id);

//      	//do_action('acf/save_post' , $post_id);
// 	    wp_redirect( '/some-page-to-redirect/', 301);
// 		exit;	
// 	}			
// }