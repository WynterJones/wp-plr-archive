<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'fbcrx_admin_menu');


function fbcrx_admin_menu() 
{
	
	add_menu_page('FBConnectr', 'FBConnectr', 'manage_options', 'fbcrx-dashboard', 'fbcrx_dashboard', '../wp-content/plugins/fbconnectrpro/imgs/fblogo.png');	
}

?>