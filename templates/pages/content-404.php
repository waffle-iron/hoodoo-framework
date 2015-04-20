<?php
/**
 * 404 Page
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */

/* 

Working | Change/Update at later date 

Loop through components array to build page

*/

$components = array(
	array(
		'404'
	)
)
?>

<?php

$fourOfour = new Layout();

$fourOfour->build_page($components);

?>