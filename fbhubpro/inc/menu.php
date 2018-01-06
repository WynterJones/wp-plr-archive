<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'fbhubpro_admin_menu');


function fbhubpro_admin_menu() 
{
	
	add_menu_page('FBhub', 'FB Hub', 'manage_options', 'fbhubpro-dashboard', 'fbhubpro_dashboard', 'http://cdn2.iconfinder.com/data/icons/ledicons/connect.png');	
}

?>