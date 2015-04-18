<div>
<?php the_field('main_content'); ?>
</div>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Single Blog Post -->
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
	<section class="blog-content">
	
	<?php the_content(); ?>

	<?php
	
	if ( is_user_logged_in() ) {
		acf_form(array(
				'post_id'		=> $post_id,
				'post_title'	=> true,
				'post_content'	=> true,
				'new_post'		=> array(
					'post_status'	=> 'publish'
				)
		));
	} 
			
	?>
	
	</section>
	<footer>
		<?php // add in links, tags, author ?>
		<a class="back-to-basics" href="<?php bloginfo('url');?>/blog">Back to Blog</a>
		<!-- URL will not resolve so use /blog -->
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