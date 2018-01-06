<?php

	/*
		Plugin Name: WP Tube Slider
		Description: Create awesome slide show presentations with any YouTube Video. 
		Version: 1.0
	*/

	add_action('template_redirect', 'checkifwpwptubeslideralive', 5);
	function checkifwpwptubeslideralive() {
	
		$post_type = get_query_var('post_type');
		if ($post_type == 'wptubeslider') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/wptubeslider' . '/presentation.php');
			exit;
			
		}

		$post_type = get_query_var('post_type');
		if ($post_type == 'wptubeslider_page') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/wptubeslider' . '/squeezepage.php');
			exit;
			
		}
	}

	require_once('presentation_settings.php');
	require_once('squeezepage_settings.php');
	
?>