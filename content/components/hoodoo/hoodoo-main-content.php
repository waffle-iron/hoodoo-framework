<div class="main-content" id="main">

<?php the_field('main_content'); ?>

<?php 

if ( is_user_logged_in() ) { 

	acf_form( 'main_content' );

}
 
?>

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