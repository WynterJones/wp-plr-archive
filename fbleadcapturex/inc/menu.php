<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'fbleadcapturex_admin_menu');


function fbleadcapturex_admin_menu() 
{
	$pluginName = "fbleadcapturex";
	add_menu_page('WP Lead Capture', 'WP Lead Capture', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn4.iconfinder.com/data/icons/Classy_Social_Media_Icons/16/email.png');	
}

?>