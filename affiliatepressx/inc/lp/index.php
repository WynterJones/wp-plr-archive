 <?php

	// Copyright (c) 2013 - Go.rrilla Marketing
	
	define('WP_USE_THEMES', false);
	
	require('wp-blog-header.php');
	
	// Load Up All Key Departments
	$urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	$urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
	$urlx = str_replace( "?", "", $urlx);

	global $wpdb;
	$table_db_name = $wpdb->prefix . "affiliatepressx";

	$id = $client;
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$id'", OBJECT);
	
	foreach($data as $data) {}
	
	
	
	$full_path2 = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$full_path = get_site_url();

	// Return Option Object:
	$results = get_option('affiliatepressx_campaign_'. $id);


	
        


    

	$assets = $full_path . "/wp-content/plugins/affiliatepressx/inc/lp/";



 	// HTML Header (Headline + Logo)
	include('include/header.php'); 

	?>

	<?php

	// Deal (Countdown, Deal Info, etc)
	include('include/deal.php'); 

if($results->contentLayout == '2') { 
	// Unique Content
	include('include/content2.php'); 

	// Sidebar (List, Image and Mini-Deal)
	include('include/sidebar2.php'); 

} else {
// Unique Content
	include('include/content.php'); 

	// Sidebar (List, Image and Mini-Deal)
	include('include/sidebar.php'); 

}

	// Footer (Links + Logo)
	include('include/footer.php');


if($results->contentReplace != '') { ?> 

<style>
	
	.mainContent {
		display: none;
	}
</style>
</div></div></div>
	<img src="<?php echo $results->contentReplace; ?>" style="margin: 0 auto; display: block">


<?php }
	
?>