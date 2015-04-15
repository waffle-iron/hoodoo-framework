<?php
/**
 * Bullet List Component
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */
 
 //Declare assets
 hoodoo_enqueue_style('bullet-list');
 hoodoo_enqueue_script('bullet-list');
?>

<ul class="bullets">
  <li class="bullet three-col-bullet">
    <div class="bullet-icon bullet-icon-1">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2.png
" alt="">
    </div>
    <div class="bullet-content">
      <h2>This Bullet Title</h2>
      <p>Lorem dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
      </div>
  </li>  
  <li class="bullet three-col-bullet">
    <div class="bullet-icon bullet-icon-2">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3.png" alt="">
    </div>
    <div class="bullet-content">
      <h2>Another Bullet Title</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum.</p>
    </div>
  </li>
  <li class="bullet three-col-bullet">
    <div class="bullet-icon bullet-icon-3">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_4.png" alt="">
    </div>
    <div class="bullet-content">
      <h2>Last Bullet Title</h2>
      <p>Lorem ipsum sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
    </div>
  </li> 
</ul>
