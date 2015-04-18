<?php

//Name of theme root / dir name
define( 'THEME_NAME', 'hoodoo-framework' );
//Define which template you are using or custom built template
define( 'TEMPLATE_NAME', 'huna' );

//constants
define('THEME_ROOT', get_theme_root() . '/' . THEME_NAME );
define('PAGES_ROOT', THEME_ROOT . '/content/pages');
define('NAV_ROOT', THEME_ROOT . '/content/nav/');  
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


/*

create null widget pass through all code, creates drag&drop bitches, will have to edit customizer and edit from customizer, or build your own.

function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => _( $name ),
		'id' => $id,
		'description' => _( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'

	));

}

create_widget( 'Footer Right', 'footer-right-widget', 'Displays content on right center of footer');
create_widget( 'Blog', 'blog', 'Displays content on right of blog');

*/





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