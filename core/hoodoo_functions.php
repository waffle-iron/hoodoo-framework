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
define('PLUGINS_ROOT', THEME_ROOT . '/plugins');
define('PAGES_ROOT', THEME_ROOT . '/templates/pages');
define('NAV_ROOT', THEME_ROOT . '/templates/nav');  
define('COMPONENTS_ROOT', THEME_ROOT . '/templates/components'); 
define('DASHBOARD_ROOT', THEME_ROOT . '/templates/dashboard'); 
define('IMAGES_ROOT', THEME_ROOT . '/assets/img'); 
define('JS_ROOT', THEME_ROOT . '/assets/js'); 
define('CSS_ROOT', THEME_ROOT . '/assets/css'); 