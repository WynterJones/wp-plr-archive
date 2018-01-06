<?php 
	define('WP_USE_THEMES', false);
	require('../../../wp-blog-header.php');
	 $newViews = get_option('optinpopx_clicks') + 1; 
	 update_option('optinpopx_clicks', $newViews, ENT_NOQUOTES, "iso-8859-1"); 
 ?>