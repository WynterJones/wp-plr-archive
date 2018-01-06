<?php

	/*
		Plugin Name: WP Quik Landing Pages
		Description: Create quick landing pages inside wordpress.
		Version: 1.0
	*/

	add_action('template_redirect', 'checkifwpquik_pluginx', 5);

	function checkifwpquik_pluginx() {
	
		$post_type = get_query_var('post_type');
		if ($post_type == 'wp_quik') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/wp_quik' . '/inc/index.php');
			exit;
			
		}
	}
	
	require_once('settings/index.php');

	
?>