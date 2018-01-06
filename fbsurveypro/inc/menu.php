<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'fbsurveypro_admin_menu');


function fbsurveypro_admin_menu() 
{
	
	add_menu_page('FBSurveyPro', 'FB Survey', 'manage_options', 'fbsurvey-dashboard', 'fbsurvey_dashboard', 'http://cdn5.iconfinder.com/data/icons/fatcow/16x16/question.png');	
}

?>