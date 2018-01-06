<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'teecontestx_admin_menu');


function teecontestx_admin_menu() 
{
	$pluginName = "teecontestx";
	add_menu_page('Manage Your Contest Pages', 'TeeContest', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn4.iconfinder.com/data/icons/fugue/icon_shadowless/t-shirt.png');	
}

?>