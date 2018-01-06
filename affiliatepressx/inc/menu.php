<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'affiliatepressx_admin_menu');


function affiliatepressx_admin_menu() 
{
	$pluginName = "affiliatepressx";
	add_menu_page('AffiliatePress', 'AffiliatePress', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', '../wp-content/plugins/affiliatepressx/images/icon.png');	
}

?>