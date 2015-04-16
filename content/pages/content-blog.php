<?php
/**
 * Template for Blog Home, Archive and all other multipost views
 *
 * Pulls in all content
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 */?>


<?php //move to function / class ?>

<!-- Blog Home / Archive / Etc. -->
<article id="blog-post">
	<header class="blog-title">
		<h2><?php //blog title ?></h2>
	</header>
	<section class="blog-excerpt">
	<p><?php 

		//blog excerpts, get rid of [] 

	//expanable view full post or go to single?

	?></p>
	</section>
	<footer>
		<?php // add in links, tags, author ?>
		<button class="read-more">Read More</button>
	</footer>
</article>

<?php //move to function / class ?>

<!-- Blog Single 
<article id="blog-post">
	<header class="blog-title">
		<h2><?php //blog title ?></h2>
	</header>
	<section class="blog-content">
	<p><?php 

		//blog content, get rid of []

	?></p>
	</section>
	<footer>
		<?php // add in links & comments ?>
		<button class="read-more">Read More</button>
	</footer>
</article>

-->