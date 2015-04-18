<?php
/**
 * ACF Contact Form Component
 *
 * @package WordPress
 * @subpackage Hoodoo
 * @since Hoodoo 0.1.0
 *
 * @todo Edit Form to Name, Email, Message & Display Contact Posts on Frontend
 *
 */
?>

<?php
/*

Contact form connects via the hoodoo_acf lib file, sends email to admin user details information

*/
?>

<div class="contact-from">

<?php
	
	acf_form(array(
		'post_id'		=> 'new_post',
		'post_title'	=> true,
		'post_content'	=> true,
		'new_post'		=> array(
			'post_type'		=> 'contact_form',
			'post_status'	=> 'publish'
		),
		'return'		=> home_url('contact-form-thank-you'),
		'submit_value'	=> 'Send'
	));
	
?>

</div>