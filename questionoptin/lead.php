<?php 
	define('WP_USE_THEMES', true);

	/** Loads the WordPress Environment and Template */
	require ('../../../wp-blog-header.php');

	
	$table_db_name = $wpdb->prefix . "questionoptin_leads";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $_POST['questionoptin_name'],
	     'email' => $_POST['questionoptin_email'],
	     'pageID' => $_POST['questionoptin_pageid'],
	     'options' => $_POST['questionoptin_option']
	      )
		);
	
 ?>