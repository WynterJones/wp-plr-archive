<?php 
	
	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	$ID = $_GET['id'];
	
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbhubpro_leads";
	
	$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign = '$ID'", OBJECT);
	
	// CSV Header:
	
	header("Content-type: application/text");
	header("Content-Disposition: attachment; filename=export_fbhub.csv");
	header("Pragma: no-cache");
	header("Expires: 0");
	
	echo "Full Name, E-Mail, Sign Up";
	echo "\n";
	
	foreach ($results as $results) {
	    
	    echo $results->name;
	    echo " ";
	    echo $results->email;
	    echo ",";
	    echo $results->created;
	    echo "\n";
	}
	
	//print_r($results);
	
?>