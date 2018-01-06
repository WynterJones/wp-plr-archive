<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'salespageframework_admin_menu');


function salespageframework_admin_menu() 
{
	$pluginName = "salespageframework";
	add_menu_page('Sales Page Framework', 'SP Framework', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn0.iconfinder.com/data/icons/ie_Financial_set/16/49.png');	
}

?>