<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'yourplugin_admin_menu');


function yourplugin_admin_menu() 
{
	$pluginName = "yourplugin";
	add_menu_page('Your Plugin Browser Title', 'Your Plugin', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', plugin_dir_url($v).'/yourplugin/images/icon.png');	
}

?>