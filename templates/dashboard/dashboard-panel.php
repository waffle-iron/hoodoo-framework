<div class="dashboard-panel">

<?php
$args = array(
	'id'					=> 'acf-form',
	'post_id'				=> false,
	'new_post'				=> false,
	'field_groups'			=> false,
	'fields'				=> false,
	'post_title'			=> false,
	'post_content'			=> false,
	'form'					=> true,
	'form_attributes'		=> array(),
	'return'				=> add_query_arg( 'updated', 'true', $url ),
	'html_before_fields'	=> '',
	'html_after_fields'		=> '',
	'submit_value'			=> __("Update", 'acf'),
	'updated_message'		=> __("Post updated", 'acf'),
	'label_placement'		=> 'top',
	'instruction_placement'	=> 'label',
	'field_el'				=> 'div'
);


if ( is_user_logged_in() ) { 

	acf_form($args);

}
?>

</div>