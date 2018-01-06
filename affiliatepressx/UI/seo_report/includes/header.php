<?php
	ob_start();
	
	// Main PHP configuration //
	
	require $path . "config.php";
	
	date_default_timezone_set("$timeZone");
	error_reporting(0);
	
	// Begin document //
	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?=$title;?> &mdash; <?=$websiteName;?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<meta name="description" content="<?=$websiteDescription;?>" />
		<meta name="keywords" content="<?=$websiteKeywords;?>" />
		
		<link rel='stylesheet' type='text/css' href='<?=$path;?>resources/css/main.css'>
	</head>
	<body>
		
		<div class="body">
			<div class="container">
