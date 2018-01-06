<?php

// Update Home

add_action('wp_ajax_wpleadgenx_create', 'wpleadgenx_create_callback');

function wpleadgenx_create_callback() {
	
	// WP DB Include
	global $wpdb;
	$table_db_name = $wpdb->prefix . "wpleadgenx";
	
	// Save DB Info - Name & Created Date
	$wpdb->insert($table_db_name, 
	array( 
	 'appname' => stripcslashes($_POST['appname']),
	 'created' => date('F j, Y')
	));
	
	// Return The ID Of Campaign Created
	$campaignID = $wpdb->insert_id;

	// Create Option With This ID:
	add_option('wpleadgenx_campaign_'. $campaignID, '');

	// Show ID For Redirect
	echo $campaignID;
	die();
	
}

// Edit Campaign

add_action('wp_ajax_wpleadgenx_edit', 'wpleadgenx_edit_callback');

function wpleadgenx_edit_callback() {
	
	// Get ID & Post Data Array
	$id = $_POST['id'];
	$data = $_POST;

	// Convert Array To Object
	$object = array_to_object($data);

	// Update Option Field:
	update_option('wpleadgenx_campaign_'. $id, $object);

	// Show Object For Testing:
	// echo $object;
	
}

// ***********************
//
//  Older Save Function
//
// ***********************

function wpleadgenx_edit_callback_OLD() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "wpleadgenx";
	
	$id = $_POST['id'];

	$x = $_POST;

	$x = array_splice($x, 2);

	$wpdb->update($table_db_name, $x, array( 'id' => $id ));

	print_r($x);
	
}

// ARRAY TO OBJECT FUNCTION::
function array_to_object($array) {
  $obj = new stdClass;
  foreach($array as $k => $v) {
     if(is_array($v)) {
        $obj->{$k} = array_to_object($v); //RECURSION
     } else {
        $obj->{$k} = $v;
     }
  }
  return $obj;
}


?>