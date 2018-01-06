<?php

	/*
		Plugin Name: Uber Optin Page
		Description: Create ATTENTION grabbing 2-step optin pages instantly - beautiful and exciting every time!
		Author: UberOptin
		Version: 1.3
	*/

	add_action('template_redirect', 'redirecttotemplate_uberoptin', 5);
	function redirecttotemplate_uberoptin() {
	
		$post_type = get_query_var('post_type');
		if ($post_type == 'uberoptin') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/uberoptin' . '/page.php');
			exit;
			
		}
	}

	require_once('settings.php');

	function uberoptinx($atts, $content = null) {
		extract(shortcode_atts(array(
			"url" => '#'
		), $atts));

		global $post;
		global $wpdb;
		$getPage = $wpdb->prefix . "uberoptinx";
		$templates = $wpdb->get_results("SELECT * FROM $getPage" ,ARRAY_A);
		
		$tpl = get_post_meta($post->ID,'_template',true);
	         
	    foreach($templates as $template) {


	    }

		return "<script >function resizeIframe(obj) {obj.style.height = obj.contentWindow.document.body.scrollHeight  + 'px' ;}</script><iframe scrolling='no' ALLOWTRANSPARENCY='true' id='uberoptinframe'  frameborder='0' style='width: 100%; height: 740px; border-radius: 10px; box-shadow: 0 0 5px #333;  margin: 5px auto; display: block;  position: relative' height='300' class='scarcitybuilder' src='".$atts['url']."' onload='javascript:resizeIframe(this);'></iframe>"; 
	    	
	   
	}

	add_shortcode("uberoptinx", "uberoptinx");


	// ********* META DATA BOX ********************///

add_action( 'add_meta_boxes', 'uberoptin_meta_box_add' );

function uberoptin_meta_box_add(){
	add_meta_box( 'uberoptin-id', 'Link to UberOptin Page', 'uberoptin_meta_box_cb', 'page', 'side', 'high' );
}

function uberoptin_meta_box_cb(){ 
	
	   global $post;  
	   $values = get_post_custom( $post->ID );  
	   $selected = isset( $values['uberoptin_meta_box_select'] ) ?
	   esc_attr( $values['uberoptin_meta_box_select'] ) : '';
	    
	   wp_nonce_field( 'uberoptin_meta_box_nonce', 'uberoptin_box_nonce' );
	   
	   $uberoptinSelected = $values['uberoptin_meta_box_select'];
	      
	   $uberoptinCurrentSelected = $uberoptinSelected[0];
	      
	?>
	<img src="<?php echo plugins_url() ?>/uberoptin/logo.png" style="width: 100%">
	<br>   
	
	<select name="uberoptin_meta_box_select" id="uberoptin_meta_box_select" style="margin-top: 10px; width: 250px;">
	
	<option <?php if($uberoptinCurrentSelected == "0"){ echo "selected='selected'"; } ?> value="0">Show None</option>
	
	
	<?php $loop = new WP_Query( array( 'post_type' => 'uberoptin', 'posts_per_page' => 10 ) ); ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	    <option <?php if($uberoptinCurrentSelected == get_permalink()){ echo "selected='selected'"; } ?> value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
	<?php endwhile; ?>
	
	</select>
	
	<?php
}

// Save Settings

add_action( 'save_post', 'uberoptin_meta_box_save' );

function uberoptin_meta_box_save( $post_id ){
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['uberoptin_box_nonce'] ) || !wp_verify_nonce( $_POST['uberoptin_box_nonce'], 'uberoptin_meta_box_nonce' ) ) return;

	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data 
	  
	// Make sure your data is set before trying to save it  

	if( isset( $_POST['uberoptin_meta_box_select'] ) )  
	        update_post_meta( $post_id, 'uberoptin_meta_box_select', esc_attr( $_POST['uberoptin_meta_box_select'] ) );  
	                         
}

// Get post settings ::

add_action('template_redirect', 'uberoptin_checkpost');

function uberoptin_checkpost(){
	
	// get POST ID:
	global $post;  
	$values = get_post_custom( $post->ID );  
	$selected = isset( $values['uberoptin_meta_box_select'] );	
	$uberoptinSelected = $values['uberoptin_meta_box_select'];
	
	$uberoptinCurrentSelected = $uberoptinSelected[0];
	
	
	if($uberoptinCurrentSelected == "0" || $uberoptinCurrentSelected == ""){
		// do nothing...
	} else {
				
		echo file_get_contents($uberoptinCurrentSelected);

		die();
			
	}
		
	

}
	
?>