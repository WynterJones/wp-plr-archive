<?php

	/*
		Plugin Name: Local Lander
		Description: Create fully optimized business page that has Yelp, Facebook, Photos, Tabbed Content, Collect Leads/Quotes, Slide-Show and edit SEO settings. You can create unlimited of local business pages! 
		Version: 2.0
	*/

	add_action('template_redirect', 'checkif_locallander', 5);
	function checkif_locallander() {
		
		$post_type = get_query_var('post_type');
		if ($post_type == 'lbp') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/locallander' . '/page/index.php');
			exit;
			
		}
	}
function locallanderPlaceholder($content, $placeholder) {
	if ($content == "") {
		echo $placeholder;
	}
	else {
		echo stripslashes(html_entity_decode($content));
	}
}

	register_activation_hook( __FILE__, 'activatelocallander');

	function activatelocallander() {
		global $wpdb;
		$table_name = $wpdb->prefix . "locallander_leads";
		   
		   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
		      
		      $sql = "CREATE TABLE " . $table_name . " (
			    id INTEGER(40) UNSIGNED AUTO_INCREMENT,
			   name varchar(500),
			   email varchar(500),
			   pageID varchar(500),
			   question LONGTEXT,
			   UNIQUE KEY id (id)
			 );";
		
		      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		      dbDelta($sql);
		   }


		  
	  }
	
	function locallander_addnewlead($name, $email, $pageID, $question) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "locallander_leads";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $name,
	     'email' => $email,
	     'question' => $question,
	     'pageID' => $pageID
	      )
		);
		
		
	}

	require_once('settings.php');
	
?>