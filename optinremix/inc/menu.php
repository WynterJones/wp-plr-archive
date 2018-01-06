<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'optinremix_admin_menu');


function optinremix_admin_menu()
{
	$pluginName = "optinremix";
	add_menu_page('OptinRemix Browser Title', 'OptinRemix', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn1.iconfinder.com/data/icons/famfamfam_mini_icons/icon_email.gif');	
}

?>
