<?php

// Update Home

add_action('wp_ajax_instantlandingpage_create', 'instantlandingpage_create_callback');

function instantlandingpage_create_callback() {
	
	// WP DB Include
	global $wpdb;
	$table_db_name = $wpdb->prefix . "instantlandingpage";
	
	// Save DB Info - Name & Created Date
	$wpdb->insert($table_db_name, 
	array( 
	 'appname' => stripcslashes($_POST['appname']),
	 'created' => date('F j, Y')
	));
	
	// Return The ID Of Campaign Created
	$campaignID = $wpdb->insert_id;

	// Create Option With This ID:
	add_option('instantlandingpage_campaign_'. $campaignID, '');

	// Show ID For Redirect
	echo $campaignID;
	die();
	
}

// Edit Campaign

add_action('wp_ajax_instantlandingpage_edit', 'instantlandingpage_edit_callback');

function instantlandingpage_edit_callback() {
	
	// Get ID & Post Data Array
	$id = $_POST['id'];
	$data = $_POST;

	// Convert Array To Object
	$object = instantlandingpage_array($data);

	// Update Option Field:
	update_option('instantlandingpage_campaign_'. $id, $object);

	// Show Object For Testing:
	// echo $object;
	
}

// ***********************
//
//  Older Save Function
//
// ***********************

function instantlandingpage_edit_callback_OLD() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "instantlandingpage";
	
	$id = $_POST['id'];

	$x = $_POST;

	$x = array_splice($x, 2);

	$wpdb->update($table_db_name, $x, array( 'id' => $id ));

	print_r($x);
	
}

// ARRAY TO OBJECT FUNCTION::
function instantlandingpage_array($array) {
  $obj = new stdClass;
  foreach($array as $k => $v) {
     if(is_array($v)) {
        $obj->{$k} = instantlandingpage_array($v); //RECURSION
     } else {
        $obj->{$k} = $v;
     }
  }
  return $obj;
}


?>