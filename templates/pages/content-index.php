<?php
/**
 * 
 * Template for Index (Front-Page)
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */

/* Multidimensionsal Array with Keys example */

/*
$components = array(
	array('title'  => 'title-full'),
	array(
		'main' => 'main-content',
		'list' => 'bullet-list'
	),
	array('footer' => 'footer-small')
)
*/

/* 

Working | Change/Update at later date 

Loop through components array to build page

*/

$components = array(
	array(
		'hero'
	), 
	array(
		'main'
	)
)
?>


<?php
$index = new Layout();

$index->build_page($components);

?>