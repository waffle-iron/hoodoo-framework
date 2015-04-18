<?php
/**
 * Left Aligned Nav Component
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */
 
 //Declare assets
 // hoodoo_enqueue_style('nav-left');
 // hoodoo_enqueue_script('nav-left');

/* WP Menu Defaults

$defaults = array(
  'theme_location'  => '',
  'menu'            => '',
  'container'       => 'div',
  'container_class' => '',
  'container_id'    => '',
  'menu_class'      => 'menu',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap' => '<ul class="navigation-menu show"><li class="nav-link">%3$s</li></ul>',
);

*/

?>

<div class="navigation" role="banner">
  <div class="navigation-wrapper">
    <a href="javascript:void(0)" class="logo">
      <?php //add in logo ACF :) ?>
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
    </a>
    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
    <div role="navigation" class="primary-navigation">
      
      <?php
        $args = array(
          'theme-location' => 'primary-nav',
          'menu_class' => 'navigation-menu show',
          'container' => 'false',
          'items_wrap' => '<ul class="navigation-menu show">%3$s</ul>',
        );
        wp_nav_menu( $args );
      ?>

    </div>   
    <div class="navigation-tools">
    <?php
    /*

    Enable Search Bar at later date

      <div class="search-bar">
        <form role="search">
          <input type="search" placeholder="Enter Search" />
          <button type="submit">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon.png" alt="Search Icon">
          </button>
        </form>
      </div>
            
    */
    ?>
  
    <?php
    if ( is_user_logged_in() ) {
        
        echo '<a href="'.wp_logout_url( get_permalink() ).'" title="Logout" class="sign-up">Logout</a>';
    
    } else {
    
        echo '<a href="'.wp_login_url( get_permalink() ).'" title="Login" class="sign-up">Login</a>';
    
    }
    ?>
    </div>
  </div>
</header>