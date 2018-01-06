<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'videopop_admin_menu');


function videopop_admin_menu() 
{
	$pluginName = "videopop";
	add_menu_page('VideoPop! Video Player', 'VideoPop!', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', plugin_dir_url($v).'/videopop/images/icon.png');	
}

?>