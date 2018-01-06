<?php

// Update Home

add_action('wp_ajax_fbsurveypro_create', 'fbsurveypro_create_callback');


function fbsurveypro_create_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbsurveypro_campaigns";
	
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
	
	$getID = $wpdb->insert_id;
	
	$table_db_name = $wpdb->prefix . "fbsurveypro_questions";
	$wpdb->insert($table_db_name, 
	array(
	 'campaign_id' => $getID
	));
	
	echo $getID;
	die();
	
}

// Edit Campaign

add_action('wp_ajax_fbsurveypro_edit', 'fbsurveypro_edit_callback');


function fbsurveypro_edit_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbsurveypro_campaigns";
	
	$id = $_POST['id'];
	
	$wpdb->update($table_db_name, 
	array( 
	 'fangate_status' => stripcslashes($_POST['fangate_status']),
	 'fangate_image' => stripcslashes($_POST['fangate_image']),
	 'optin_image' => stripcslashes($_POST['optin_image']),
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

// Edit Campaign

add_action('wp_ajax_fbsurveypro_editquestions', 'fbsurveypro_editquestions_callback');


function fbsurveypro_editquestions_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbsurveypro_questions";
	
	$id = $_POST['id'];
	
	$wpdb->update($table_db_name, 
	array( 
	 'q1_status' => stripcslashes($_POST['q1_status']),
	 'q1_qa' => stripcslashes($_POST['q1_qa']),
	 'q1_mu_0' => stripcslashes($_POST['q1_mu_0']),
	 'q1_mu_1' => stripcslashes($_POST['q1_mu_1']),
	 'q1_mu_2' => stripcslashes($_POST['q1_mu_2']),
	 'q1_mu_3' => stripcslashes($_POST['q1_mu_3']),
	 'q1_mu_4' => stripcslashes($_POST['q1_mu_4']),
	 'q2_status' => stripcslashes($_POST['q2_status']),
	 'q2_qa' => stripcslashes($_POST['q2_qa']),
	 'q2_mu_0' => stripcslashes($_POST['q2_mu_0']),
	 'q2_mu_1' => stripcslashes($_POST['q2_mu_1']),
	 'q2_mu_2' => stripcslashes($_POST['q2_mu_2']),
	 'q2_mu_3' => stripcslashes($_POST['q2_mu_3']),
	 'q2_mu_4' => stripcslashes($_POST['q2_mu_4']),
	 'q3_status' => stripcslashes($_POST['q3_status']),
	 'q3_qa' => stripcslashes($_POST['q3_qa']),
	 'q3_mu_0' => stripcslashes($_POST['q3_mu_0']),
	 'q3_mu_1' => stripcslashes($_POST['q3_mu_1']),
	 'q3_mu_2' => stripcslashes($_POST['q3_mu_2']),
	 'q3_mu_3' => stripcslashes($_POST['q3_mu_3']),
	 'q3_mu_4' => stripcslashes($_POST['q3_mu_4']),
	 'q4_status' => stripcslashes($_POST['q4_status']),
	 'q4_qa' => stripcslashes($_POST['q4_qa']),
	 'q4_mu_0' => stripcslashes($_POST['q4_mu_0']),
	 'q4_mu_1' => stripcslashes($_POST['q4_mu_1']),
	 'q4_mu_2' => stripcslashes($_POST['q4_mu_2']),
	 'q4_mu_3' => stripcslashes($_POST['q4_mu_3']),
	 'q4_mu_4' => stripcslashes($_POST['q4_mu_4']),
	 'q5_status' => stripcslashes($_POST['q5_status']),
	 'q5_qa' => stripcslashes($_POST['q5_qa']),
	 'q5_mu_0' => stripcslashes($_POST['q5_mu_0']),
	 'q5_mu_1' => stripcslashes($_POST['q5_mu_1']),
	 'q5_mu_2' => stripcslashes($_POST['q5_mu_2']),
	 'q5_mu_3' => stripcslashes($_POST['q5_mu_3']),
	 'q5_mu_4' => stripcslashes($_POST['q5_mu_4'])
	),
	  array( 'campaign_id' => $id )
	);
	
}


?>