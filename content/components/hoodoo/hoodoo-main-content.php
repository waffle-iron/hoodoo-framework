<?php
/**
 * Main Content WYSIWYG Component
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 *
 * @todo TEST for Multisite
 *
 */
?>
<div class="main-content" id="main">

<?php the_field('main_content'); ?>

<?php 

/*

Checks if user is logged in and then allows frontend editing

*/

if ( is_user_logged_in() ) { 

	acf_form( 'main_content' );

}
?>

</div>