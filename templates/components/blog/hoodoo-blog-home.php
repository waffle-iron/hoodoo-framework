<?php
/**
 * Blog Template Hierarchy Template/Component (includes: home.php, archive.php, category.php etc.)
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 *
 *
 * @todo Seperate Blog into seperate files or allow for override of archive.php, category.php etc.
 *
 *
 */
?>


<div>
<?php the_field('main_content'); ?>
</div>

<!-- Create new blog post -->

<?php if ( is_user_logged_in() ) { ?>
<h1>Create new blog post</h1>
<?php
		acf_form(array(
			'post_id'		=> 'new_post',
			'post_title'	=> true,
			'post_content'	=> true,
			'new_post'		=> array(
				'post_status'	=> 'publish'
			)
		));
	}
	
?>


<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Blog Posts -->
<article id="blog-post">
	<header class="blog-title">
		<h2><?php //blog title ?></h2>
		<p>
	        <em>
	          By <?php the_author(); ?> 
	          on <?php echo the_time('l, F jS, Y'); ?>
	        </em>
	          in <?php the_category(', '); ?> 
	    </p>
	</header>
	<section class="blog-excerpt">
	
	<?php the_excerpt(); ?>
	
	</section>
	<footer>
		<?php // add in links, tags, author ?>
		<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
	</footer>
</article>

<?php endwhile; else: ?>

<header class="blog-title">
	<h1>We goofed!</h1>
</header>
<section class="blog-excerpt">
	
	<p>It appears we forgot to add content to this page..<a>contact</a> us and let us know!</p>
	
</section>
<footer>
	<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
</footer>

<?php endif; ?>