<?php
	
	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Campaign ID
	$ID = $_POST['id'];
	
	// +1 For Total Leads
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "instantlandingpage_leads";
		
	$wpdb->insert($table_db_name, 
	array(
	 'app_id' => $_POST['id'],
	 'name' => $_POST['name'],
	 'email' => $_POST['email'],
	 'created' => date('F j, Y')
	));
	
	$table_db_name = $wpdb->prefix . "instantlandingpage";
	$findstat = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($findstat as $findstat){}
	
	$wpdb->update($table_db_name, 
	array( 
	 'total_leads' => $findstat->total_leads + 1
	),
	  array( 'id' => $ID )
	);
		
?>