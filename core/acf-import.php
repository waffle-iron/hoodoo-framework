<?php
//Code for ACF pages
if( function_exists('register_field_group') ) {

	register_field_group(array (
		'key' => 'group_5531bf56a0e50',
		'title' => 'Pages',
		'fields' => array (
			array (
				'key' => 'field_5531bf6ab1106',
				'label' => 'Page',
				'name' => 'main_content',
				'prefix' => '',
				'type' => 'wysiwyg',
				'instructions' => 'Enter in you\'re main conteddnt here.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Here is myyyyyy main content.',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array (
				'key' => 'field_5531bf6ab1106',
				'label' => 'Page',
				'name' => 'main_content',
				'prefix' => '',
				'type' => 'wysiwyg',
				'instructions' => 'Enter in you\'re main conteddnt here.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Here is myyyyyy main content.',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'custom_fields',
			4 => 'discussion',
			5 => 'comments',
			6 => 'revisions',
			7 => 'slug',
			8 => 'author',
			9 => 'format',
			10 => 'page_attributes',
			11 => 'featured_image',
			12 => 'categories',
			13 => 'tags',
			14 => 'send-trackbacks',
		),
	));

}