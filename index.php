<?php
/**
 * The Index for our theme.
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */

get_header();

	/* accepts: center (default), left, right*/
	Layout::apply_layout('left');

get_footer();