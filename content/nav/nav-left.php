<?php
/**
 * Left Aligned Nav Component
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */
 
 //Declare assets
 // hoodoo_enqueue_style('nav-left');
 // hoodoo_enqueue_script('nav-left');

// $defaults = array(
//   'theme_location'  => '',
//   'menu'            => '',
//   'container'       => 'div',
//   'container_class' => '',
//   'container_id'    => '',
//   'menu_class'      => 'menu',
//   'menu_id'         => '',
//   'echo'            => true,
//   'fallback_cb'     => 'wp_page_menu',
//   'before'          => '',
//   'after'           => '',
//   'link_before'     => '',
//   'link_after'      => '',
//   'items_wrap' => '<ul class="navigation-menu show"><li class="nav-link">%3$s</li></ul>',
// );


?>



<?php // add in primary navigation + ACF Normal ?>

<div class="navigation" role="banner">
  <div class="navigation-wrapper">
    <a href="javascript:void(0)" class="logo">
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



<?php
/*
      <ul id="js-navigation-menu" class="navigation-menu show">
        <li class="nav-link"><a href="javascript:void(0)">Products</a></li>
        <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
        <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
        <li class="nav-link more"><a href="javascript:void(0)">More</a>
          <ul class="submenu">
            <li><a href="javascript:void(0)">Submenu Item</a></li>
            <li><a href="javascript:void(0)">Another Item</a></li>
            <li class="more"><a href="javascript:void(0)">Item with submenu</a>
              <ul class="submenu">
                <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
                <li><a href="javascript:void(0)">Another Item</a></li>
              </ul>
            </li>
            <li class="more"><a href="javascript:void(0)">Another submenu</a>
              <ul class="submenu">
                <li><a href="javascript:void(0)">Sub-submenu</a></li>
                <li><a href="javascript:void(0)">An Item</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>

*/
?>

    </div>
    
    <div class="navigation-tools">
    <?php
  /*
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