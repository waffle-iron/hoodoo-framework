<?php

class Layout {

	/*create function to handle if blog etc.*/

	public static function build_page($components) {
		
		/*Add in ability to have multiple blog templates*/

		if (is_single()) {

			include(COMPONENTS_ROOT . 'hoodoo/hoodoo-blog-single.php');

		} elseif (is_archive() || is_home()) {
		
			include(COMPONENTS_ROOT . 'hoodoo/hoodoo-blog-home.php');
		
		} else {

			foreach ($components as $component) 
			{

				include(COMPONENTS_ROOT . 'hoodoo/hoodoo-' . $component . '.php');

			}

		}

	}


	/* accepts: center (default), left, right, side-left, side-right */
	public static function apply_layout($bar = 'center') {

		//$layout = '';

		echo '<div class"content-area"><nav id="primary-nav" class="nav-' . $bar . '">';

		include(NAV_ROOT . 'nav-bar-' . $bar . '.php');

		echo '</nav>';

		echo '<div id="main">';

		if (is_front_page()) {
			
			include(PAGES_ROOT . '/content-index.php');

		} elseif (is_home() || is_archive() || is_single()) {

			include(PAGES_ROOT . '/content-blog.php');

		} elseif (is_page()) {

			$pages = get_pages(); 

			foreach ( $pages as $page ) {
				$page_block = 'content-' . $page->post_title . '.php';
				include(PAGES_ROOT . '/' . $page_block);
			}

		} else {

			include(PAGES_ROOT . '/content-404.php');

		}

		echo '</div></div>';
	}

}