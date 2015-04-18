<?php
/**
 * Small Footer Component
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */
 
 //Declare assets
 // hoodoo_enqueue_style('footer-small');
 // hoodoo_enqueue_script('footer-small');
?>


<!--<div class="wrapper-for-content-outside-of-footer">
   Uncomment this whole section for a sticky footer. The content of the page should be inside of this .wrapper-for-content-outside-of-footer
</div>-->

<footer class="footer-2" role="contentinfo">
  <div class="footer-logo">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo image">
  </div>

    <?php
      $args = array(
        'theme-location' => 'primary-nav',
        'menu_class' => 'navigation-menu show',
        'container' => 'false',
        'items_wrap' => '<ul class="navigation-menu show">%3$s</ul>',
      );
      wp_nav_menu( $args );
    ?>

    <div class="footer-secondary-links">
      <ul>
        <li><a href="javascript:void(0)">Terms and Conditions</a></li>
        <li><a href="javascript:void(0)">Privacy Policy</a></li>
      </ul>

      <ul class="footer-social">
        <li><a href="javascript:void(0)">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
          </a></li>
        <li><a href="javascript:void(0)">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
        </a></li>
        <li><a href="javascript:void(0)">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/youtube-logo-circle.png" alt="YouTube">
        </a></li>
      </ul>
    </div>
</footer>