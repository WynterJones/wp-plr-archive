<?php 

	/*
		Plugin Name: WP CTA Revealr
		Version: 1.0
	*/

	function wp_cta_revealr_wpadmin() {
	   add_menu_page('CTA Revealr', 'CTA Revealr', 'manage_options', 'wpcta_revealr', 'adminpage_for_wpcta_revealr', 'http://cdn2.iconfinder.com/data/icons/splashyIcons/media_controls_dark_play.png');
	}

	add_action('admin_menu', 'wp_cta_revealr_wpadmin');

	register_activation_hook( __FILE__, 'activate_wpcta_revealr');

	function activate_wpcta_revealr() {
		global $wpdb;
		$table_name = $wpdb->prefix . "wpcta_revealr";
		   
		   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
		      
		      $sql = "CREATE TABLE " . $table_name . " (
			    id INTEGER(40) UNSIGNED AUTO_INCREMENT,
			    name varchar(500),
			    background varchar(500),
			    headline varchar(500),
			    subheadline varchar(500),
			    button varchar(500),
			    revealButton varchar(500),
			    price varchar(500),
			    discount varchar(500),
			    revealText varchar(500),
			    footerText varchar(500),
			    auto_responder LONG,
			    ar_button varchar(500),
			    ar_headline varchar(500),
			    fb varchar(500),
			    twitter varchar(500),
			    ar_time varchar(500),
			    rating varchar(500),
			    content LONG,
			    UNIQUE KEY id (id)
			 );";
		
		      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		      dbDelta($sql);
		   } 
	}
	
	function wpcta_revealr_addPlayer($name, $background, $headline, $subheadline, $button, $revealButton, $price, $discount, $revealText, $footerText, $auto_responder, $ar_headline, $ar_button,  $content, $fb, $twitter, $ar_time, $rating) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpcta_revealr";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $name,
	     'background' => $background,
	     'headline' => $headline,
	     'subheadline' => $subheadline,
	     'button' => $button,
	     'revealButton' => $revealButton,
	     'price' => $price,
	     'discount' => $discount,
	     'revealText' => $revealText,
	     'footerText' => $footerText,
	     'auto_responder' => $auto_responder,
	     'ar_headline' => $ar_headline,
	     'ar_button' => $ar_button,
	     'fb' => $fb,
	     'twitter' => $twitter,
	     'ar_time' => $ar_time,
	     'rating' => $rating,
	     'content' => $content
	      )
		);
	}

	function wpcta_revealr_updatePlayer($name, $background, $headline, $subheadline, $button, $revealButton, $price, $discount, $revealText, $footerText, $auto_responder, $ar_headline, $ar_button, $content, $fb, $twitter, $ar_time,$rating, $id)  {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpcta_revealr";
		$wpdb->update($table_db_name, array( 
	     'name' => $name,
	     'background' => $background,
	     'headline' => $headline,
	     'subheadline' => $subheadline,
	     'button' => $button,
	     'revealButton' => $revealButton,
	     'price' => $price,
	     'discount' => $discount,
	     'revealText' => $revealText,
	     'footerText' => $footerText,
	     'auto_responder' => $auto_responder,
	     'ar_headline' => $ar_headline,
	     'ar_button' => $ar_button,
	     'fb' => $fb,
	     'twitter' => $twitter,
	     'ar_time' => $ar_time,
	     'rating' => $rating,
	     'content' => $content
	      ), array( 'id' => $id ));
	}

	function wpcta_revealr_deletePlayer($id) {
		global $wpdb;
		$table_db_name = $wpdb->prefix . "wpcta_revealr";
		$wpdb->query($wpdb->prepare ("DELETE FROM $table_db_name WHERE ID = $id" ));
	}

	include('include/admin.php');

	function wpcta_revealr($atts, $content = null) {
		extract(shortcode_atts(array(
			"id" => '#'
		), $atts));

		global $post;
		global $wpdb;
		$getPage = $wpdb->prefix . "wpcta_revealr";
		$templates = $wpdb->get_results("SELECT * FROM $getPage" ,ARRAY_A);
		
		$tpl = get_post_meta($post->ID,'_template',true);
	         
	    foreach($templates as $template) {


	    }
return "<iframe scrolling='no' ALLOWTRANSPARENCY='true' id='the_iframe_".$atts['id']."'    frameborder='0' style='width: 600px; height: 400px;  margin: 10px auto; display: block; z-index: 9999; position: relative' src='".plugin_dir_url( __FILE__ )."shortcode/index.php?edit=".$atts['id']."''></iframe><br clear='all' />"; 
	    	
	    	
	   
	}

	add_shortcode("wpcta_revealr", "wpcta_revealr");

?>