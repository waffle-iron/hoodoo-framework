<?php 
/**
 * Functions File
 * 
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */


$library = array('api','enqueue','functions','layout','acf');

foreach ($library as &$lib) 
{
	require_once( __DIR__ . '/lib/hoodoo/hoodoo_' . $lib . '.php');
}

