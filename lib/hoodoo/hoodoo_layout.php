<?php

/* accepts: center (default), left, right, side-left, side-right */
function apply_layout($bar = 'center') {

	echo '<div class"content-area"><nav id="primary-nav" class="hoodoo-nav-' . $bar . '">';

	include(COMPONENTS_ROOT . '/hoodoo-nav-' . $bar . '.php');

	echo '</nav>';

	echo '<div id="main">';

	if ( is_page() ) {
		
		$pages = get_pages(); 

		foreach ( $pages as $page ) {
			$page_block = 'content-' . $page->post_title . '.php';
			include(PAGES_ROOT . '/' . $page_block);
		}

	} else {

		include(PAGES_ROOT . '/content-404.php');

	}

	echo '</div></div>'
}