<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'wpleadgenx_admin_menu');


function wpleadgenx_admin_menu() 
{
	$pluginName = "wpleadgenx";
	add_menu_page('Lead Generator', 'Lead Generator', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn2.iconfinder.com/data/icons/ledicons/page_red.png');	
}

?>