<?php
/**
 * 
 * Lib for ACF settings and config
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 *
 * @todo add more base functions and constants as necessary
 *
 */

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