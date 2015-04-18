<div class="main-content" id="main">

<?php the_field('main_content'); ?>

<?php acf_form( 'main_content' ); ?>

</div>



<?php /*

Add in Ajax Later!!!


<script type="text/javascript">
(function($) {
	
	// setup fields
	acf.do_action('append', $('#main'));
	
})(jQuery);	
</script>
*/
?>