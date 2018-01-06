<?php

// Update Home

add_action('wp_ajax_oppro_create', 'oppro_create_callback');


function oppro_create_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_campaigns";
	
	// FIX TEXTS
	//$title = $_POST['title'];

	$wpdb->insert($table_db_name, 
	array( 
	 'title' => stripcslashes($_POST['title']),
	 'total_views' => '0',
	 'created' => date('F j, Y')
	));
	
	echo $wpdb->insert_id;
	die();
	
}

// Edit Campaign

add_action('wp_ajax_oppro_edit', 'oppro_edit_callback');


function oppro_edit_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_campaigns";
	
	$id = $_POST['id'];
	
	$wpdb->update($table_db_name, 
	array( 
	 'heading1' => stripcslashes($_POST['heading1']),
	 'heading2' => stripcslashes($_POST['heading2']),
	 'blurb' => stripcslashes($_POST['blurb'])
	),
	  array( 'id' => $id )
	);
	
}

// Edit Testimonial

add_action('wp_ajax_oppro_testimonial', 'oppro_testimonial_callback');


function oppro_testimonial_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_settings";
	
	
	$wpdb->update($table_db_name, 
	array( 
	 'testimonial_body_1' => stripcslashes($_POST['testimonial_body_1']),
	 'testimonial_body_2' => stripcslashes($_POST['testimonial_body_2']),
	 'testimonial_name_1' => stripcslashes($_POST['testimonial_name_1']),
	 'testimonial_name_2' => stripcslashes($_POST['testimonial_name_2'])
	),
	  array( 'id' => '1' )
	);
	
}

// Edit Company Info

add_action('wp_ajax_oppro_company', 'oppro_company_callback');


function oppro_company_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_settings";
	
	
	$wpdb->update($table_db_name, 
	array( 
	 'intro' => stripcslashes($_POST['intro']),
	 'company_info' => stripcslashes($_POST['company_info']),
	 'company_logo' => stripcslashes($_POST['company_logo'])
	),
	  array( 'id' => '1' )
	);

	echo "saved company";
	
}

// New Plan Item

add_action('wp_ajax_oppro_newitem', 'oppro_newitem_callback');


function oppro_newitem_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_plans";
	
	
	$wpdb->insert($table_db_name, 
	array( 
	 'plan' => stripcslashes($_POST['plan']),
	 'bullet' => stripcslashes($_POST['item_bullet']),
	 'heading' => stripcslashes($_POST['item_title']),
	 'blurb' => stripcslashes($_POST['item_blurb'])
	));

	echo "new item... ";
	
}

// Edit Plan Item

add_action('wp_ajax_oppro_edititem', 'oppro_edititem_callback');


function oppro_edititem_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_plans";
	
	
	$wpdb->update($table_db_name, 
	array( 
	 'plan' => stripcslashes($_POST['plan']),
	 'bullet' => stripcslashes($_POST['item_bullet']),
	 'heading' => stripcslashes($_POST['item_title']),
	 'blurb' => stripcslashes($_POST['item_blurb'])
	),
	  array( 'id' => $_POST['id'] )
	);

	echo "saved item... ";
	
}

// Save Copy Settings

add_action('wp_ajax_oppro_copy', 'oppro_copy_callback');


function oppro_copy_callback() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_settings";
	
	
	$wpdb->update($table_db_name, 
	array( 
	 'btn' => stripcslashes($_POST['btn']),
	 'plan_title_1' => stripcslashes($_POST['plan_title_1']),
	 'plan_blurb_1' => stripcslashes($_POST['plan_blurb_1']),
	 'plan_btn_1' => stripcslashes($_POST['plan_btn_1']),
	 'plan_url_1' => stripcslashes($_POST['plan_url_1']),
	 'plan_title_2' => stripcslashes($_POST['plan_title_2']),
	 'plan_blurb_2' => stripcslashes($_POST['plan_blurb_2']),
	 'plan_btn_2' => stripcslashes($_POST['plan_btn_2']),
	 'plan_url_2' => stripcslashes($_POST['plan_url_2']),
	 'plan_title_3' => stripcslashes($_POST['plan_title_3']),
	 'plan_blurb_3' => stripcslashes($_POST['plan_blurb_3']),
	 'plan_btn_3' => stripcslashes($_POST['plan_btn_3']),
	 'plan_url_3' => stripcslashes($_POST['plan_url_3']),
	),
	  array( 'id' => '1' )
	);

	echo "saved settings... ";
	
}

?>