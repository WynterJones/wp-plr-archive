<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'instantlandingpage_admin_menu');


function instantlandingpage_admin_menu() 
{
	$pluginName = "instantlandingpage";
	add_menu_page('Instant Landing Page', 'Instant Landing Page', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/16x16/apps/control-center2.png');	
}

?>