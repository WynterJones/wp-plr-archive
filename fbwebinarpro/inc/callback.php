<?php

// Update Home

add_action('wp_ajax_fbwebinarpro_create', 'fbwebinarpro_create_callback');


function fbwebinarpro_create_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbwebinarpro";
	
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

add_action('wp_ajax_fbwebinarpro_edit', 'fbwebinarpro_edit_callback');


function fbwebinarpro_edit_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbwebinarpro";
	
	$id = $_POST['id'];
	
	$wpdb->update($table_db_name, 
	array( 
	 'fangate_status' => stripcslashes($_POST['fangate_status']),
	 'fangate_image' => stripcslashes($_POST['fangate_image']),
	 'bg_color' => stripcslashes($_POST['bg_color']),
	 'bg_image' => stripcslashes($_POST['bg_image']),
	 'copy_pre' => stripcslashes($_POST['copy_pre']),
	 'copy_main' => stripcslashes($_POST['copy_main']),
	 'copy_names' => stripcslashes($_POST['copy_names']),
	 'copy_time' => stripcslashes($_POST['copy_time']),
	 'copy_optin' => stripcslashes($_POST['copy_optin']),
	 'copy_name' => stripcslashes($_POST['copy_name']),
	 'copy_email' => stripcslashes($_POST['copy_email']),
	 'copy_btn' => stripcslashes($_POST['copy_btn']),
	 'copy_spam' => stripcslashes($_POST['copy_spam']),
	 'copy_company' => stripcslashes($_POST['copy_company']),
	 'copy_rights' => stripcslashes($_POST['copy_rights']),
	 'share_image' => stripcslashes($_POST['share_image']),
	 'success_image' => stripcslashes($_POST['success_image']),
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
	 'optin_copy' => stripcslashes($_POST['optin_copy']),
	 'footer_copy' => stripcslashes($_POST['footer_copy']),
	 'btn_copy' => stripcslashes($_POST['btn_copy'])
	),
	  array( 'id' => $id )
	);
	
}

?>