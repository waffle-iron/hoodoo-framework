<?php
/**
 * Hero Unit Component
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */
 
 //Declare assets
 hoodoo_enqueue_style('hero');
 hoodoo_enqueue_script('hero');
?>


<div class="grid-piece-12">
	<div class="hero">
		<div class="hero-inner">
	    <a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png
	" alt="Logo Image"></a>
			<div class="hero-copy">
				<h1>Short description of Product</h1>
				<p>A few reasons why this product is worth using, who it's for and why they need it.</p>	
			</div>
	    <button>Learn More</button>
		</div>
	</div>
</div>