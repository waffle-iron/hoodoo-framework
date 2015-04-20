<?php
/**
 * 
 * Class for building page layouts
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 *
 * @todo Convert the functions below to methods, implement class scope, build out for resuse, rework methods for long term use
 *
 */

class Layout {

	/*create function to handle if blog etc. look into convention of not using include, works for now (dynamic content issues) */

	public static function build_page($components) {
		
		/*Add in ability to have multiple blog templates*/

		if (is_single()) {

			include(COMPONENTS_ROOT . '/blog/hoodoo-blog-single.php');

			foreach ($components as $component) 
			{

				$component_accesible_variables = $component['parameters'];

				include(COMPONENTS_ROOT . '/blog/hoodoo-' . $component[0] . '.php');

			}

		} elseif (is_archive() || is_home()) {
		
			include(COMPONENTS_ROOT . '/blog/hoodoo-blog-home.php');

			foreach ($components as $component) 
			{

				$component_accesible_variables = $component['parameters'];

				include(COMPONENTS_ROOT . '/blog/hoodoo-' . $component[0] . '.php');

			}
		
		} else {

			foreach ($components as $component) 
			{

				$component_accesible_variables = $component['parameters'];

				include(COMPONENTS_ROOT . '/pages/hoodoo-' . $component[0] . '.php');

			}

		}

	}


	/* accepts: center (default), left, right, side-left, side-right */
	public static function apply_layout($bar = 'center') {


		echo '<div id="wrapper">';

		if ( is_user_logged_in() ) { 
			echo '<div id="dashboard">';
			include(DASHBOARD_ROOT . '/dashboard-panel.php');
		}

		echo '<div id="content-area"><nav id="primary-nav" id="nav-' . $bar . '">';

		include(NAV_ROOT . '/nav.php');

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

		if ( is_user_logged_in() ) { 
			echo '</div></div>';
		}

		echo '</div>';

	}

}