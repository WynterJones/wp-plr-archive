<?php 

	/*
		Plugin Name: WP Media Remix
		Description: Brand Audio and Video players with your logo, content and add time-stamp call outs such as a pop-up notice, flashing button and auto-responder optin popup. Create unlimited players and publish using a simple shortcode. Include social media, and even an embed code for users to share you customized player.
		Version: 1.0
	*/

	function newbie_startup_wpadmin() {
	   add_menu_page('WP Media Remix', 'WP Media Remix', 'manage_options', 'wpmediaremix', 'adminpage_for_wpmediaremix', 'http://cdn2.iconfinder.com/data/icons/splashyIcons/media_controls_dark_play.png');
	}

	add_action('admin_menu', 'newbie_startup_wpadmin');

	register_activation_hook( __FILE__, 'activate_wpmediaremix');

	function activate_wpmediaremix() {
		global $wpdb;
		$table_name = $wpdb->prefix . "wpmediaremix";
		   
		   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
		      
		      $sql = "CREATE TABLE " . $table_name . " (
			    id INTEGER(40) UNSIGNED AUTO_INCREMENT,
			    name varchar(500),
			    logo varchar(500),
			    headline varchar(500),
			    subheadline varchar(500),
			    button varchar(500),
			    slider varchar(500),
			    design varchar(500),
			    alert varchar(500),
			    alertTime varchar(500),
			    flash varchar(500),
			    buttonURL varchar(500),
			    auto_responder LONG,
			    ar_button varchar(500),
			    ar_headline varchar(500),
			    m4a varchar(500),
			    ogg varchar(500),
			    video varchar(500),
			    video_poster varchar(500),
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
	
	function wpmediaremix_addPlayer($name, $logo, $headline, $subheadline, $button, $slider, $design, $alert, $alertTime, $flash, $buttonURL, $auto_responder, $ar_headline, $ar_button, $m4a, $ogg, $video, $video_poster, $content, $fb, $twitter, $ar_time, $rating) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpmediaremix";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $name,
	     'logo' => $logo,
	     'headline' => $headline,
	     'subheadline' => $subheadline,
	     'button' => $button,
	     'slider' => $slider,
	     'design' => $design,
	     'alert' => $alert,
	     'alertTime' => $alertTime,
	     'flash' => $flash,
	     'buttonURL' => $buttonURL,
	     'auto_responder' => $auto_responder,
	     'ar_headline' => $ar_headline,
	     'ar_button' => $ar_button,
	     'm4a' => $m4a,
	     'ogg' => $ogg,
	     'video' => $video,
	     'video_poster' => $video_poster,
	     'fb' => $fb,
	     'twitter' => $twitter,
	     'ar_time' => $ar_time,
	     'rating' => $rating,
	     'content' => $content
	      )
		);
	}

	function wpmediaremix_updatePlayer($name, $logo, $headline, $subheadline, $button, $slider, $design, $alert, $alertTime, $flash, $buttonURL, $auto_responder, $ar_headline, $ar_button, $m4a, $ogg, $video, $video_poster, $content, $fb, $twitter, $ar_time,$rating, $id)  {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpmediaremix";
		$wpdb->update($table_db_name, array( 
	     'name' => $name,
	     'logo' => $logo,
	     'headline' => $headline,
	     'subheadline' => $subheadline,
	     'button' => $button,
	     'slider' => $slider,
	     'design' => $design,
	     'alert' => $alert,
	     'alertTime' => $alertTime,
	     'flash' => $flash,
	     'buttonURL' => $buttonURL,
	     'auto_responder' => $auto_responder,
	     'ar_headline' => $ar_headline,
	     'ar_button' => $ar_button,
	     'm4a' => $m4a,
	     'ogg' => $ogg,
	     'video' => $video,
	     'video_poster' => $video_poster,
	     'fb' => $fb,
	     'twitter' => $twitter,
	     'ar_time' => $ar_time,
	     'rating' => $rating,
	     'content' => $content
	      ), array( 'id' => $id ));
	}

	function wpmediaremix_deletePlayer($id) {
		global $wpdb;
		$table_db_name = $wpdb->prefix . "wpmediaremix";
		$wpdb->query($wpdb->prepare ("DELETE FROM $table_db_name WHERE ID = $id" ));
	}

	require_once('include/admin.php');

	function wpmediaremix($atts, $content = null) {
		extract(shortcode_atts(array(
			"id" => '#',
			"player" => '#',
		), $atts));

		global $post;
		global $wpdb;
		$getPage = $wpdb->prefix . "wpmediaremix";
		$templates = $wpdb->get_results("SELECT * FROM $getPage" ,ARRAY_A);
		
		$tpl = get_post_meta($post->ID,'_template',true);
	         
	    foreach($templates as $template) {


	    }
if ($atts['player'] == 'audio') {
	    		 return "<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script><script type='text/javascript'>$(document).ready(function($) {
$('#the_iframe_".$atts['id']."').load(function () {
$(this).height($(this).contents().height());
$(this).width($(this).contents().width());
});
});
</script><iframe scrolling='no' ALLOWTRANSPARENCY='true' id='the_iframe_".$atts['id']."'    frameborder='0' style='width: 100%;  z-index: 9999; position: relative' src='".plugin_dir_url( __FILE__ )."audio/index.php?edit=".$atts['id']."''></iframe><br clear='all' />"; 
	    	}

	    	if ($atts['player'] == 'video') {
	    		 return "<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script><script type='text/javascript'>$(document).ready(function($) {
$('#the_iframe_".$atts['id']."').load(function () {
$(this).height($(this).contents().height());
$(this).width($(this).contents().width());
});
});
</script><iframe scrolling='no' ALLOWTRANSPARENCY='true' id='the_iframe_".$atts['id']."'    frameborder='0' style='width: 100%;  z-index: 9999; position: relative' src='".plugin_dir_url( __FILE__ )."video/index.php?edit=".$atts['id']."''></iframe><br clear='all' />"; 
	    	}
	    	
	   
	}

	add_shortcode("wpmediaremix", "wpmediaremix");

?>