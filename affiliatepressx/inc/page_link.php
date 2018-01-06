<?php

// ********* META DATA BOX ********************///

add_action( 'add_meta_boxes', 'affiliatepressx_meta_box_add' );

function affiliatepressx_meta_box_add(){
	add_meta_box( 'affiliatepressx-id', 'Link To AffiliatePress', 'affiliatepressx_meta_box_cb', 'page', 'side', 'high' );
}

function affiliatepressx_meta_box_cb(){ 
	
	   global $post;  
	   $values = get_post_custom( $post->ID );  
	   $selected = isset( $values['affiliatepressx_meta_box_select'] ) ?
	   esc_attr( $values['affiliatepressx_meta_box_select'] ) : '';
	    
	   wp_nonce_field( 'affiliatepressx_meta_box_nonce', 'affiliatepressx_box_nonce' );
	   
	   $affiliatepressxSelected = $values['affiliatepressx_meta_box_select'];
	      
	   $affiliatepressxCurrentSelected = $affiliatepressxSelected[0];
	      
	?>
	<h4 style=" margin-bottom: 0px; margin-top: 15px;">Select an AffiliatePress Page:</h4>
	<span style="font-size: 11px;" >This page will be replaced with this landing page...</span>
	<br>   
	<select name="affiliatepressx_meta_box_select" id="affiliatepressx_meta_box_select" style="margin-top: 10px; width: 250px;">
	
	<option <?php if($affiliatepressxCurrentSelected == "0"){ echo "selected='selected'"; } ?> value="0">NONE</option>
	
	
		  	<?php 
		   	
		   	global $wpdb;
		   	
			$table_db_name = $wpdb->prefix . "affiliatepressx";

		   	$templates = $wpdb->get_results("SELECT * FROM $table_db_name",ARRAY_A);
		   	$templates = array_reverse($templates );
		   	
		   	foreach($templates as $template){
		   	
		   		$name = stripslashes($template['appname']);
		   		$id = stripslashes($template['ID']);
		   		$selectedBox = "";
		   		if($affiliatepressxCurrentSelected == $id){ $selectedBox = "selected='selected'"; }
		   		
		   		echo "<option $selectedBox value='$id'>$name</option>";
		   	
		   	}
		   	
		   	?>
	
	</select>
	
	<?php
}

// Save Settings

add_action( 'save_post', 'affiliatepressx_meta_box_save' );

function affiliatepressx_meta_box_save( $post_id ){
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['affiliatepressx_box_nonce'] ) || !wp_verify_nonce( $_POST['affiliatepressx_box_nonce'], 'affiliatepressx_meta_box_nonce' ) ) return;

	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data 
	  
	// Make sure your data is set before trying to save it  

	if( isset( $_POST['affiliatepressx_meta_box_select'] ) )  
	        update_post_meta( $post_id, 'affiliatepressx_meta_box_select', esc_attr( $_POST['affiliatepressx_meta_box_select'] ) );  
	                         
}

// Get post settings ::

add_action('template_redirect', 'affiliatepressx_checkpost');

function affiliatepressx_checkpost(){
	
	// get POST ID:
	global $post;  
	$values = get_post_custom( $post->ID );  
	$selected = isset( $values['affiliatepressx_meta_box_select'] );	
	$affiliatepressxSelected = $values['affiliatepressx_meta_box_select'];
	
	$affiliatepressxCurrentSelected = $affiliatepressxSelected[0];
	
	
	if($affiliatepressxCurrentSelected == "0" || $affiliatepressxCurrentSelected == ""){
		// do nothing...
	} else {
				
			$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
			
			$client = urlencode($affiliatepressxCurrentSelected);
			
			$postID = $post->ID;
			
			// Shows Main Page
			include("lp/index.php");
			
			die();
			
		}
		
	

}

?>