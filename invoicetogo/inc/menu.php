<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'oppro_admin_menu');


function oppro_admin_menu() 
{
	
	add_menu_page('Invoice To Go', 'Invoice To Go', 'manage_options', 'oppro-dashboard', 'oppro_dashboard', plugins_url().'/invoicetogo/images/favicon.png');	
}

?>