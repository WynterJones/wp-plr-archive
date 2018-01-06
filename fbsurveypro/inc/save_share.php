<?php
	
	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Deal ID
	$ID = $_POST['id'];
	
	// +1 For Total Shares
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "timelineoptinpro";
	
	$findstat = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($findstat as $findstat){}
	
	$wpdb->update($table_db_name, 
	array( 
	 'total_shares' => $findstat->total_shares + 1
	),
	  array( 'id' => $ID )
	);
		
?>