<?php 
/**
 * Functions File
 * 
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */

$classes = array('layout'/*,'auto'*/);

foreach ($classes as &$class) 
{
	require_once( __DIR__ . '/lib/hoodoo/class_hoodoo_' . $class . '.php');
}


$library = array('api','enqueue','functions','acf','admin');

foreach ($library as &$lib) 
{
	require_once( __DIR__ . '/lib/hoodoo/hoodoo_' . $lib . '.php');
}

