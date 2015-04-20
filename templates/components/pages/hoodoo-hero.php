<?php
/**
 * Hero Component
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */
?>

<div class="hero">
	<div class="hero-inner">
		<div class="hero-copy">
			<h1><?php the_field('page_title'); ?></h1>
			<p><?php the_field('page_tagline'); ?></p>
		</div>
    <?php //<button>Learn More</button> ?>
	</div>
</div>