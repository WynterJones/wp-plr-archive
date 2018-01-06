<?php

	/*
		Plugin Name: WP Like Pop!
		Description: Create Animated Pop-up Social Widgets for Your Wordpress Blog 
		Version: 1.0
	*/

	add_action('template_redirect', 'checkifwplikepop_pluginx', 5);
	function checkifwplikepop_pluginx() {
	
		$post_type = get_query_var('post_type');
		if ($post_type == 'wplikepop_pluginx') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/wplikepop_pluginx' . '/popup.php');
			exit;
			
		}
	}


	function displaylikepop_pluginx() { ?>

	<?php if (get_option('wplikepop_show') == 'show' ) {  ?>

		<?php $checkPosition = get_option('wplikepop_position'); ?>

		<?php if ($checkPosition == "position1") { ?>
		<!-- Bottom Right -->
		<iframe src="wp-content/plugins/wplikepop/popup.php" frameborder="0" style="width: 290px; height: 210px; position: fixed; bottom: 0; right: 0; z-index:9999;"></iframe>
		<?php } ?>

		<?php if ($checkPosition == "position2") { ?>
			<!-- Bottom Left -->
		<iframe src="wp-content/plugins/wplikepop/popup.php" frameborder="0" style="width: 290px; height: 210px; position: fixed; bottom: 0; left: 0; z-index:9999;"></iframe>
		<?php } ?>
		
		<?php if ($checkPosition == "position3") { ?>
		<!-- Top Right -->
		<iframe src="wp-content/plugins/wplikepop/popup.php" frameborder="0" style="width: 290px; height: 210px; position: fixed; top: 0; right: 0; z-index:9999;"></iframe>
		<?php } ?>
		
		<?php if ($checkPosition == "position4") { ?>
		<!-- Top Left -->
		<iframe src="wp-content/plugins/wplikepop/popup.php" frameborder="0" style="width: 290px; height: 210px; position: fixed; top: 0; left: 0; z-index:9999;"></iframe>
		<?php } ?>

	<?php }
}
	
	add_action('wp_head', 'displaylikepop_pluginx');

	add_action('admin_menu', 'wplikepop_pluginxadminsettings');

	function checkwplikepop_pluginxadmin() {
			include('adminsettings.php');
	}

	function wplikepop_pluginxadminsettings() {
	   add_menu_page('WP Like Pop', 'WP Like Pop', 'manage_options', 'wplikepop_pluginxsettings', 'checkwplikepop_pluginxadmin', 'http://cdn2.iconfinder.com/data/icons/linecons/32/like-16.png', 30);
	}

	
?>