<?php
	
	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Campaign ID
	$ID = $_POST['id'];
	
	// Save Question
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbsurveypro_answers";
		
	$wpdb->insert($table_db_name, 
	array( 
	 'campaign_id' => $_POST['id'],
	 'a1' => stripcslashes($_POST['answer1']),
	 'a2' => stripcslashes($_POST['answer2']),
	 'a3' => stripcslashes($_POST['answer3']),
	 'a4' => stripcslashes($_POST['answer4']),
	 'a5' => stripcslashes($_POST['answer5'])
	));

	// Add + Finished...
	
	$table_db_name = $wpdb->prefix . "fbsurveypro_campaigns";
	$findstat = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($findstat as $findstat){}
	
	$wpdb->update($table_db_name, 
	array( 
	 'total_shares' => $findstat->total_shares + 1
	),
	  array( 'id' => $ID )
	);
		
?>