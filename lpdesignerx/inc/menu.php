<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'lpdesignerx_admin_menu');


function lpdesignerx_admin_menu() 
{
	$pluginName = "lpdesignerx";
	add_menu_page('Create Your Landing Page', 'LP Designer', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', plugin_dir_url($v).'/lpdesignerx/images/icon.png');	
}

?>