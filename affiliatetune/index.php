<?php

	/*
		Plugin Name: Affiliate Tune
		Description: Create affiliate music review pages for iTunes and Amazon. Use the review area to create Search-Engine Optimized content to direct traffic to page.  
		Version: 2.0
	*/

	add_action('template_redirect', 'checkifaffiliatetune', 5);
	function checkifaffiliatetune() {
	
		$post_type = get_query_var('post_type');
		if ($post_type == 'music-review') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/affiliatetune' . '/affiliatetune.php');
			exit;
			
		}
	}

	require_once('admin/custompost.php');
	
?>