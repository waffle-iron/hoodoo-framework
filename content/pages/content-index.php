<?php

/*$components = array(
	'title' => 'title-full',
	'footer' => 'footer-small'
)*/

/* example */

$components = array(
	'title-small',
	'main-content',
	'bullet-list',
	'portfolio',
	'contact',
	'footer-small'
)
?>

<?php 
//move to its own lib file / class in future

$index = new Layout();

$index->build_page($components);

?>