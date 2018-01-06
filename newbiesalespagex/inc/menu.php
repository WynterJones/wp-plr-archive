<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'newbiesalespagex_admin_menu');


function newbiesalespagex_admin_menu() 
{
	$pluginName = "newbiesalespagex";
	add_menu_page('Manage Pages', 'Manage Pages', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/actions/format-text-bold.png');	
}

?>