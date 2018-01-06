<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'wpoptinlock_admin_menu');


function wpoptinlock_admin_menu() 
{
	$pluginName = "wpoptinlock";
	add_menu_page('Optin Lock Shortcodes', 'Optin Lock', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', plugin_dir_url($v).'/wpoptinlock/images/icon.png');	
}

?>