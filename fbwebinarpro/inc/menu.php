<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'fbwebinarpro_admin_menu');


function fbwebinarpro_admin_menu() 
{
	
	add_menu_page('FBWebinar', 'FB Webinar', 'manage_options', 'fbwebinarpro-dashboard', 'fbwebinarpro_dashboard', 'http://cdn1.iconfinder.com/data/icons/musthave/16/Presentation.png');	
}

?>