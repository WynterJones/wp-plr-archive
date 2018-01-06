<?php

// ********* META DATA BOX ********************///

add_action( 'add_meta_boxes', 'yourplugin_meta_box_add' );

function yourplugin_meta_box_add(){
	add_meta_box( 'yourplugin-id', 'Connect Your Page', 'yourplugin_meta_box_cb', 'page', 'side', 'high' );
}

function yourplugin_meta_box_cb(){ 
	
	   global $post;  
	   $values = get_post_custom( $post->ID );  
	   $selected = isset( $values['yourplugin_meta_box_select'] ) ?
	   esc_attr( $values['yourplugin_meta_box_select'] ) : '';
	    
	   wp_nonce_field( 'yourplugin_meta_box_nonce', 'yourplugin_box_nonce' );
	   
	   $yourpluginSelected = $values['yourplugin_meta_box_select'];
	      
	   $yourpluginCurrentSelected = $yourpluginSelected[0];
	      
	?>
	<?php $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE)); ?>
	<img src="<?php echo $full_path; ?>/yourplugin/images/logo.png" style="margin: 0 auto; display: block;width: 100%" alt="">
	
	<select name="yourplugin_meta_box_select" id="yourplugin_meta_box_select" style="margin-top: 10px; width: 250px;">
	
	<option <?php if($yourpluginCurrentSelected == "0"){ echo "selected='selected'"; } ?> value="0">Show None</option>
	
	
		  	<?php 
		   	
		   	global $wpdb;
		   	$table_db_name = $wpdb->prefix . "yourplugin";
		   	$templates = $wpdb->get_results("SELECT * FROM $table_db_name",ARRAY_A);
		   	$templates = array_reverse($templates );
		   	
		   	foreach($templates as $template){
		   	
		   		$name = stripslashes($template['appname']);
		   		$id = stripslashes($template['ID']);
		   		$selectedBox = "";
		   		if($yourpluginCurrentSelected == $id){ $selectedBox = "selected='selected'"; }
		   		
		   		echo "<option $selectedBox value='$id'>$name</option>";
		   	
		   	}
		   	
		   	?>
	
	</select>
	
	<?php
}

// Save Settings

add_action( 'save_post', 'yourplugin_meta_box_save' );

function yourplugin_meta_box_save( $post_id ){
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['yourplugin_box_nonce'] ) || !wp_verify_nonce( $_POST['yourplugin_box_nonce'], 'yourplugin_meta_box_nonce' ) ) return;

	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data 
	  
	// Make sure your data is set before trying to save it  

	if( isset( $_POST['yourplugin_meta_box_select'] ) )  
	        update_post_meta( $post_id, 'yourplugin_meta_box_select', esc_attr( $_POST['yourplugin_meta_box_select'] ) );  
	                         
}

// Get post settings ::

add_action('template_redirect', 'yourplugin_checkpost');

function yourplugin_checkpost(){
	
	// get POST ID:
	global $post;  
	$values = get_post_custom( $post->ID );  
	$selected = isset( $values['yourplugin_meta_box_select'] );	
	$yourpluginSelected = $values['yourplugin_meta_box_select'];
	
	$yourpluginCurrentSelected = $yourpluginSelected[0];
	
	
	if($yourpluginCurrentSelected == "0" || $yourpluginCurrentSelected == ""){
		// do nothing...
	} else {
				
			$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
			
			$client = urlencode($yourpluginCurrentSelected);
			
			$CheckTY = "ty";
			$postID = $post->ID;
	
			
					
			$url = $full_path. "yourplugin/lp/index.php?id=$client&p=$postID";
			
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