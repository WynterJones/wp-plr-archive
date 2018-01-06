<?php 
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	$id = $_GET['edit'];
	$clicks = get_option('clicksoptin'.'_'.$id) + 1; 
	update_option('clicksoptin'.'_'.$id, $clicks, ENT_NOQUOTES, "iso-8859-1"); 
 ?>