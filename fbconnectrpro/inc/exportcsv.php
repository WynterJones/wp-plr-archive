<?php

	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	
	// DB Stuff
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbcxrxLeads";
	$data = $wpdb->get_results("SELECT * FROM $table_db_name", OBJECT);
	
	// CSV Header:
	
	header("Content-type: application/text");
	header("Content-Disposition: attachment; filename=export_csv_leads_from_socialdeals.csv");
	header("Pragma: no-cache");
	header("Expires: 0");
	
	echo "Full Name, E-Mail, Location, FB ID, Button, Sign Up Date";
	echo "\n";
	
	foreach ($data as $results) {
	    
	    $location = str_replace(",", "", $results->location);
	    
	    echo $results->fullname;
	    echo ",";
	    echo $results->email;
	    echo ",";
	    echo $location;
	    echo ",";
	    echo $results->fburl;
	    echo ",";
	    echo $results->btn;
	    echo ",";
	    echo $results->date;
	    echo "\n";
	}

?>