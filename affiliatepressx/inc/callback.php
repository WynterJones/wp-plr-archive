<?php

// Update Home

add_action('wp_ajax_affiliatepressx_create', 'affiliatepressx_create_callback');
function affiliatepressx_create_callback() {
	
	// WP DB Include
	global $wpdb;
	$table_db_name = $wpdb->prefix . "affiliatepressx";
	
	// Save DB Info - Name & Created Date
	$wpdb->insert($table_db_name, 
	array( 
	 'appname' => stripcslashes($_POST['appname']),
	 'created' => date('F j, Y')
	));
	
	// Return The ID Of Campaign Created
	$getID = $wpdb->insert_id;

	// Create Option With This ID:
	add_option('affiliatepressx_campaign_'. $getID, '');

	// CREATE A CORRASPONDING POST ::
	$my_post = array(
	  'post_title'    => wp_strip_all_tags( $_POST['appname'] ),
	  'post_type'     => 'page',
	  'post_content'  => 'NOT USED -- REPLACED WITH BONUS PRESS CONTENT',
	  'post_status'   => 'publish'
	);

	// Insert the post into the database
	$getPostID = wp_insert_post( $my_post );

	// Add postID to db:
	$wpdb->update($table_db_name, array( 'postID' => $getPostID ), array( 'id' => $getID ));

	// Set Meta Info so it links this page with the bonus page::
	update_post_meta( $getPostID, 'affiliatepressx_meta_box_select', esc_attr($getID) );

	// Show ID For redirect
	echo $getID;
	die();
	
}

// Edit Campaign

add_action('wp_ajax_affiliatepressx_edit', 'affiliatepressx_edit_callback');

function affiliatepressx_edit_callback() {
	
	// Get ID & Post Data Array
	$id = $_POST['id'];
	$data = $_POST;

	// Convert Array To Object
	$object = affiliatepressx_array_to_object($data);

	// Update Option Field:
	update_option('affiliatepressx_campaign_'. $id, $object);

	// Show Object For Testing:
	// echo $object;
	
}

// ***********************
//
//  Older Save Function
//
// ***********************

function affiliatepressx_edit_callback_OLD() {
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "affiliatepressx";
	
	$id = $_POST['id'];

	$x = $_POST;

	$x = array_splice($x, 2);

	$wpdb->update($table_db_name, $x, array( 'id' => $id ));

	print_r($x);
	
}

// ARRAY TO OBJECT FUNCTION::
function affiliatepressx_array_to_object($array) {
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