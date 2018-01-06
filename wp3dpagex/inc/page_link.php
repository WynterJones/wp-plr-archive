<?php

// ********* META DATA BOX ********************///

add_action( 'add_meta_boxes', 'wp3dpagex_meta_box_add' );

function wp3dpagex_meta_box_add(){
	add_meta_box( 'wp3dpagex-id', 'Link to Lead Capture Page', 'wp3dpagex_meta_box_cb', 'page', 'side', 'high' );
}

function wp3dpagex_meta_box_cb(){ 
	
	   global $post;  
	   $values = get_post_custom( $post->ID );  
	   $selected = isset( $values['wp3dpagex_meta_box_select'] ) ?
	   esc_attr( $values['wp3dpagex_meta_box_select'] ) : '';
	    
	   wp_nonce_field( 'wp3dpagex_meta_box_nonce', 'wp3dpagex_box_nonce' );
	   
	   $wp3dpagexSelected = $values['wp3dpagex_meta_box_select'];
	      
	   $wp3dpagexCurrentSelected = $wp3dpagexSelected[0];
	      
	?>
	<h4 style=" margin-bottom: 0px; margin-top: 15px;">Select A Landing Page</h4>
	<span style="font-size: 11px;" >This page will be replaced with this landing page...</span>
	<br>   
	<select name="wp3dpagex_meta_box_select" id="wp3dpagex_meta_box_select" style="margin-top: 10px; width: 250px;">
	
	<option <?php if($wp3dpagexCurrentSelected == "0"){ echo "selected='selected'"; } ?> value="0">Show None</option>
	
	
		  	<?php 
		   	
		   	global $wpdb;
		   	$table_db_name = $wpdb->prefix . "wp3dpagex";
		   	$templates = $wpdb->get_results("SELECT * FROM $table_db_name",ARRAY_A);
		   	$templates = array_reverse($templates );
		   	
		   	foreach($templates as $template){
		   	
		   		$name = stripslashes($template['appname']);
		   		$id = stripslashes($template['ID']);
		   		$selectedBox = "";
		   		if($wp3dpagexCurrentSelected == $id){ $selectedBox = "selected='selected'"; }
		   		
		   		echo "<option $selectedBox value='$id'>$name</option>";
		   	
		   	}
		   	
		   	?>
	
	</select>
	
	<?php
}

// Save Settings

add_action( 'save_post', 'wp3dpagex_meta_box_save' );

function wp3dpagex_meta_box_save( $post_id ){
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['wp3dpagex_box_nonce'] ) || !wp_verify_nonce( $_POST['wp3dpagex_box_nonce'], 'wp3dpagex_meta_box_nonce' ) ) return;

	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data 
	  
	// Make sure your data is set before trying to save it  

	if( isset( $_POST['wp3dpagex_meta_box_select'] ) )  
	        update_post_meta( $post_id, 'wp3dpagex_meta_box_select', esc_attr( $_POST['wp3dpagex_meta_box_select'] ) );  
	                         
}

// Get post settings ::

add_action('template_redirect', 'wp3dpagex_checkpost');

function wp3dpagex_checkpost(){
	
	// get POST ID:
	global $post;  
	$values = get_post_custom( $post->ID );  
	$selected = isset( $values['wp3dpagex_meta_box_select'] );	
	$wp3dpagexSelected = $values['wp3dpagex_meta_box_select'];
	
	$wp3dpagexCurrentSelected = $wp3dpagexSelected[0];
	
	
	if($wp3dpagexCurrentSelected == "0" || $wp3dpagexCurrentSelected == ""){
		// do nothing...
	} else {
				
			$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
			
			$client = urlencode($wp3dpagexCurrentSelected);
			
			$CheckTY = "ty";
			$postID = $post->ID;
	
			
					
			$url = $full_path. "wp3dpagex/lp/index.php?id=$client&p=$postID";
			
			$url_feed = @file_get_contents("$url", true);
			
			if ( $url_feed === false )
			{
			   
			   // Try cURL to open the file ::
			   
			   function url_get_contents ($Url) {
			       if (!function_exists('curl_init')){ 
			           die('CURL is not installed!');
			       }
			       $ch = curl_init();
			       curl_setopt($ch, CURLOPT_URL, $Url);
			       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			       $output = curl_exec($ch);
			       curl_close($ch);
			       return $output;
			   }

			    echo "<title>";
				echo get_the_title($post->ID);
				echo "</title>";
			   
			   echo url_get_contents($url);
			   
			} else {

				echo "<title>";
				echo get_the_title($post->ID);
				echo "</title>";
				
				echo file_get_contents("$url", true);
			
			}
			
			die();
			
		}
		
	

}

?>