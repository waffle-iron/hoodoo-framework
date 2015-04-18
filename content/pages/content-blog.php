<?php
/**
 * 
 * Template for Blog Home, Archive and all other multipost views
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
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