<?php

// Update Home

add_action('wp_ajax_fbhubpro_create', 'fbhubpro_create_callback');


function fbhubpro_create_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbhubpro";
	
	// FIX TEXTS
	//$title = $_POST['title'];

	$wpdb->insert($table_db_name, 
	array( 
	 'title' => stripcslashes($_POST['title']),
	 'total_views' => '0',
	 'total_optins' => '0',
	 'total_shares' => '0',
	 'created' => date('F j, Y')
	));
	
	echo $wpdb->insert_id;
	die();
	
}

// Edit Campaign

add_action('wp_ajax_fbhubpro_edit', 'fbhubpro_edit_callback');


function fbhubpro_edit_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbhubpro";
	
	$id = $_POST['id'];
	
	$wpdb->update($table_db_name, 
	array( 
	 'fangate_status' => stripcslashes($_POST['fangate_status']),
	 'fangate_image' => stripcslashes($_POST['fangate_image']),
	 'copy_pre' => stripcslashes($_POST['copy_pre']),
	 'copy_main' => stripcslashes($_POST['optin_copy']),
	 'copy_optin' => stripcslashes($_POST['copy_optin']),
	 'copy_name' => stripcslashes($_POST['copy_name']),
	 'copy_email' => stripcslashes($_POST['copy_email']),
	 'copy_btn' => stripcslashes($_POST['copy_btn']),
	 'fb_id' => stripcslashes($_POST['fb_id']),
	 'fb_secret' => stripcslashes($_POST['fb_secret']),
	 'fb_title' => stripcslashes($_POST['fb_title']),
	 'fb_image' => stripcslashes($_POST['fb_image']),
	 'fb_url' => stripcslashes($_POST['fb_url']),
	 'fb_desc' => stripcslashes($_POST['fb_desc']),
	 'ar_code' => stripcslashes($_POST['ar_code']),
	 'ar_name' => stripcslashes($_POST['ar_name']),
	 'ar_email' => stripcslashes($_POST['ar_email']),
	 'ar_url' => stripcslashes($_POST['ar_url']),
	 'ar_hidden' => stripcslashes($_POST['ar_hidden']),
	 'btn_copy' => stripcslashes($_POST['btn_copy']),
	 'header_image' => stripcslashes($_POST['header_image']),
	 'copy_location' => stripcslashes($_POST['copy_location']),
	 'location' => stripcslashes($_POST['location']),
	 'copy_success' => stripcslashes($_POST['copy_success']),
	 'social_1_link' => stripcslashes($_POST['social_1_link']),
	 'social_2_link' => stripcslashes($_POST['social_2_link']),
	 'social_3_link' => stripcslashes($_POST['social_3_link']),
	 'social_4_link' => stripcslashes($_POST['social_4_link']),
	 'social_5_link' => stripcslashes($_POST['social_5_link']),
	 'social_1_copy' => stripcslashes($_POST['social_1_copy']),
	 'social_2_copy' => stripcslashes($_POST['social_2_copy']),
	 'social_3_copy' => stripcslashes($_POST['social_3_copy']),
	 'social_4_copy' => stripcslashes($_POST['social_4_copy']),
	 'social_5_copy' => stripcslashes($_POST['social_5_copy'])
	),
	  array( 'id' => $id )
	);
	
}

?>