<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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

		$results = get_option('newbiesalespagex_campaign_'. $ID);	
		$full_path = get_site_url();

		$assets = $full_path . "/wp-content/plugins/newbiesalespagex/lp/";
	?>


	<!-- Template #1 - Header Information -->
	<?php if($results->chooseTemplate == '1') { ?>

		<?php  $templateURL = $full_path . "/wp-content/plugins/newbiesalespagex/lp/tmp-1/"; ?>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo $templateURL; ?>include/css/kickstart.css" media="all" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $templateURL; ?>style.css" media="all" />

	<?php } ?>
	<!-- End Template #1  -->

	<!-- ======================================================= -->

	<!-- Template #2 - Header Information -->
	<?php if($results->chooseTemplate == '2') { ?>

		<?php  $templateURL = $full_path . "/wp-content/plugins/newbiesalespagex/lp/tmp-2/"; ?>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

		<script type="text/javascript" src="<?php echo $templateURL; ?>js/prettify.js"></script> 
		<script type="text/javascript" src="<?php echo $templateURL; ?>js/kickstart.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $templateURL; ?>css/kickstart.css" media="all" /> 
		<link rel="stylesheet" type="text/css" href="<?php echo $templateURL; ?>style.css" media="all" />

	<?php } ?>
	<!-- End Template #2  -->

	<!-- ======================================================= -->

	<!-- Template #3 - Header Information -->
	<?php if($results->chooseTemplate == '3') { ?>

		<?php  $templateURL = $full_path . "/wp-content/plugins/newbiesalespagex/lp/tmp-3/"; ?>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		
		<link href="<?php echo $templateURL; ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $templateURL; ?>css/main.css" rel="stylesheet" type="text/css" />
		

	<?php } ?>
	<!-- End Template #3  -->

	<!-- ======================================================= -->

	<!-- Template #4 - Header Information -->
	<?php if($results->chooseTemplate == '4') { ?>

		<?php  $templateURL = $full_path . "/wp-content/plugins/newbiesalespagex/lp/tmp-4/"; ?>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

		

	<?php } ?>
	<!-- End Template #4  -->

</head>
<body>
	<?php echo stripslashes($results->html); ?>
</body>
</html>