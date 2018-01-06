<?php

// ********* META DATA BOX ********************///

add_action( 'add_meta_boxes', 'wpoptinlock_meta_box_add' );

function wpoptinlock_meta_box_add(){
	add_meta_box( 'wpoptinlock-id', 'Connect Your Page', 'wpoptinlock_meta_box_cb', 'page', 'side', 'high' );
}

function wpoptinlock_meta_box_cb(){ 
	
	   global $post;  
	   $values = get_post_custom( $post->ID );  
	   $selected = isset( $values['wpoptinlock_meta_box_select'] ) ?
	   esc_attr( $values['wpoptinlock_meta_box_select'] ) : '';
	    
	   wp_nonce_field( 'wpoptinlock_meta_box_nonce', 'wpoptinlock_box_nonce' );
	   
	   $wpoptinlockSelected = $values['wpoptinlock_meta_box_select'];
	      
	   $wpoptinlockCurrentSelected = $wpoptinlockSelected[0];
	      
	?>
	<?php $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE)); ?>
	<img src="<?php echo $full_path; ?>/wpoptinlock/images/logo.png" style="margin: 0 auto; display: block;width: 100%" alt="">
	
	<select name="wpoptinlock_meta_box_select" id="wpoptinlock_meta_box_select" style="margin-top: 10px; width: 250px;">
	
	<option <?php if($wpoptinlockCurrentSelected == "0"){ echo "selected='selected'"; } ?> value="0">Show None</option>
	
	
		  	<?php 
		   	
		   	global $wpdb;
		   	$table_db_name = $wpdb->prefix . "wpoptinlock";
		   	$templates = $wpdb->get_results("SELECT * FROM $table_db_name",ARRAY_A);
		   	$templates = array_reverse($templates );
		   	
		   	foreach($templates as $template){
		   	
		   		$name = stripslashes($template['appname']);
		   		$id = stripslashes($template['ID']);
		   		$selectedBox = "";
		   		if($wpoptinlockCurrentSelected == $id){ $selectedBox = "selected='selected'"; }
		   		
		   		echo "<option $selectedBox value='$id'>$name</option>";
		   	
		   	}
		   	
		   	?>
	
	</select>
	
	<?php
}

// Save Settings

add_action( 'save_post', 'wpoptinlock_meta_box_save' );

function wpoptinlock_meta_box_save( $post_id ){
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['wpoptinlock_box_nonce'] ) || !wp_verify_nonce( $_POST['wpoptinlock_box_nonce'], 'wpoptinlock_meta_box_nonce' ) ) return;

	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data 
	  
	// Make sure your data is set before trying to save it  

	if( isset( $_POST['wpoptinlock_meta_box_select'] ) )  
	        update_post_meta( $post_id, 'wpoptinlock_meta_box_select', esc_attr( $_POST['wpoptinlock_meta_box_select'] ) );  
	                         
}

// Get post settings ::

add_action('template_redirect', 'wpoptinlock_checkpost');

function wpoptinlock_checkpost(){
	
	// get POST ID:
	global $post;  
	$values = get_post_custom( $post->ID );  
	$selected = isset( $values['wpoptinlock_meta_box_select'] );	
	$wpoptinlockSelected = $values['wpoptinlock_meta_box_select'];
	
	$wpoptinlockCurrentSelected = $wpoptinlockSelected[0];
	
	
	if($wpoptinlockCurrentSelected == "0" || $wpoptinlockCurrentSelected == ""){
		// do nothing...
	} else {
				
			$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
			
			$client = urlencode($wpoptinlockCurrentSelected);
			
			$CheckTY = "ty";
			$postID = $post->ID;
	
			
					
			$url = $full_path. "wpoptinlock/lp/index.php?id=$client&p=$postID";
			
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

			   
			   
			   echo url_get_contents($url);
			   
			} else {

				
				
				echo file_get_contents("$url", true);
			
			}
			
			die();
			
		}
		
	

}

?>