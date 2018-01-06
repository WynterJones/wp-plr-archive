<?php

	/*
		Plugin Name: Question Optin for Wordpress
		Description: Create professional email opt-in survey questionaire pages in your wordpress blog. 
		Version: 1.0
	*/

	add_action('template_redirect', 'redirect_to_questionoptin', 5);
	function redirect_to_questionoptin() {
	
		$post_type = get_query_var('post_type');
		if ($post_type == 'questionoptin') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/questionoptin' . '/optinpage.php');
			exit;
			
		}
	}

	register_activation_hook( __FILE__, 'activateWPContestPop');

	function activateWPContestPop() {
		global $wpdb;
		$table_name = $wpdb->prefix . "questionoptin_leads";
		   
		   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
		      
		      $sql = "CREATE TABLE " . $table_name . " (
			    id INTEGER(40) UNSIGNED AUTO_INCREMENT,
			   name varchar(500),
			   email varchar(500),
			   pageID varchar(500),
			   options varchar(500),
			   UNIQUE KEY id (id)
			 );";
		
		      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		      dbDelta($sql);
		   }


		  
	  }
	

	require_once('settings.php');

	add_action('admin_menu', 'questionoptin_leadPanel');

	function show_questionoptinPanel() {
			require_once(WP_PLUGIN_DIR . '/questionoptin' .'/adminSettings.php');
		}

	function questionoptin_leadPanel() {

	   add_menu_page('Question Leads', 'Question Leads', 'manage_options', 'questionoptin', 'show_questionoptinPanel', 'http://cdn2.iconfinder.com/data/icons/ledicons/email_open_image.png', 30);
	}

	
?>