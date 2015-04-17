<?php
/**
 * Template
 * Template for Blog Home, Archive and all other multipost views
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */?>


<?php 


if (is_single()) {
	include(COMPONENTS_ROOT . 'hoodoo/hoodoo-blog-single.php');

} else {
	include(COMPONENTS_ROOT . 'hoodoo/hoodoo-blog-home.php');
}
?>