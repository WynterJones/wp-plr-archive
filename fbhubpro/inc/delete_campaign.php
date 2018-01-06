<?php
	
	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Deal ID
	$ID = $_POST['id'];
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbhubpro";
	
	$wpdb->query("DELETE FROM $table_db_name WHERE id = $ID");
		
?>