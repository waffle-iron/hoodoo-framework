<?php

/*$components = array(
	'title'  => 'title-full',
	'main'   => array(
		'main-content',
		'bullet-list'
	),
	'footer' => 'footer-small'
)*/

/* example */

$components = array(
	array(
		'title-small'
	), 
	array(
		'main-content'
	),
	array(
		'contact'
	),
	array(
		'footer-small'
	)
)
?>

<?php 
//move to its own lib file / class in future

$index = new Layout();

$index->build_page($components);

?>