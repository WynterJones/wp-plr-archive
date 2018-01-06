<?php
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	$urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	$urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
	$urlx = str_replace( "?", "", $urlx);
	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	$ID = $_GET['id'];
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach($data as $data) {}
	$results = get_option('yourplugin_campaign_'. $ID);	
	$full_path = get_site_url();
	$assets = $full_path . "/wp-content/plugins/yourplugin/lp/";
	// Get Full Path - echo $assets;
	// Track Views
	  $views = get_option($ID.'_views');
	  update_option($ID.'_views', $views + 1);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php if($results->example != '') { ?>
		<?php echo stripslashes($results->example); ?>
	<?php } else { ?>
		Example
	<?php } ?>
</body>
</html>