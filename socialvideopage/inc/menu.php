<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'socialoptinx_admin_menu');


function socialoptinx_admin_menu() 
{
	$pluginName = "socialoptinx";
	add_menu_page('Social Video Page Manager', 'Social Video', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', plugin_dir_url($v).'/socialoptinx/images/icon.png');	
}

?>