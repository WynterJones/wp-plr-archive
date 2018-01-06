<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'wpchartpagex_admin_menu');


function wpchartpagex_admin_menu() 
{
	$pluginName = "wpchartpagex";
	add_menu_page('WP Chart Page', 'WP Chart Page', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn0.iconfinder.com/data/icons/ie_Financial_set/16/20.png');	
}

?>