<?php
/**
 * Side Nav Component
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */
 
 //Declare assets
 hoodoo_enqueue_style('nav-side');
 hoodoo_enqueue_script('nav-side');
?>

<header class="navigation" role="banner">
  <div class="navigation-wrapper">
    <a href="javascript:void(0)" class="logo">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
    </a>
    <div class="navigation-tools">
      <button type="button" class="js-menu-trigger sliding-panel-button">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/menu-white.png" alt="Menu Icon">
	  </button>
    </div>
  </div>
</header>

<nav class="js-menu sliding-panel-content">
  <ul>
    <li><a href="javascript:void(0)">Item 1</a></li>
    <li><a href="javascript:void(0)">Item 2</a></li>
    <li><a href="javascript:void(0)">Item 3</a></li>
  </ul>
</nav>

<div class="js-menu-screen sliding-panel-fade-screen"></div>
