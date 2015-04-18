<?php
/**
 * 
 * Page for Blog Template Hierarchy
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
		'footer-small'
	)
)
?>


<?php 

$blog = new Layout();

$blog->build_page($components);

?>