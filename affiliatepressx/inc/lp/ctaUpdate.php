<?php 

	// Copyright (c) 2013 - Go.rrilla Marketing
	
	define('WP_USE_THEMES', false);
	
	require('../../../../../wp-blog-header.php');

	if (get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalClicks') == "") {
		update_option('affiliatepressx_campaign_'. $_GET['id'].'_totalClicks', 1);
	}
	else {
        
    	update_option('affiliatepressx_campaign_'. $_GET['id'].'_totalClicks', get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalClicks') + 1);
	}

?>