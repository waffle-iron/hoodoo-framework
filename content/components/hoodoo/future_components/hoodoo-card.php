<?php
/**
 * Hover Card Component
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */
 
 //Declare assets
 hoodoo_enqueue_style('card');
 hoodoo_enqueue_script('card');
?>

<div class="cards">
  <div class="card">
    <div class="card-image">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
    </div>
    <div class="card-header">
      First Card
    </div>
    <div class="card-copy">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
    </div>
  </div>

  <div class="card">
    <div class="card-image">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-4.png" alt="">
    </div>
    <div class="card-header">
      Another Card
    </div>
    <div class="card-copy">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
    </div>
  </div>

  <div class="card">
    <div class="card-image">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-3.png" alt="">
    </div>
    <div class="card-header">
      The Last Card
    </div>
    <div class="card-copy">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    </div>
  </div>
</div>
