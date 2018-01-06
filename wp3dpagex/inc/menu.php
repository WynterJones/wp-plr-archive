<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'wp3dpagex_admin_menu');


function wp3dpagex_admin_menu() 
{
	$pluginName = "wp3dpagex";
	add_menu_page('WP 3D Page', 'WP 3D Page', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn2.iconfinder.com/data/icons/ledicons/page_red.png');	
}

?>