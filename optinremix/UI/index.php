<?php
function optinremix_dashboard(){
// Universal Variables
$pluginName = "optinremix";
$sitePath = site_url() . "/wp-content/plugins/". $pluginName;
?>
<!-- LOAD CSS -->
<link href="<?php echo $sitePath; ?>/css/bootstrap-2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/table.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/colorpicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $sitePath; ?>/css/font-awesome.css">
<style>
.limiterBox {
	border: 1px solid #000;
	border-top: none;
	background-color: #ffc;
	padding: 3px 6px;
	font-size: 10px;
}
</style>
<?php include("css.php"); ?>
<!-- UI FRAMEWORK -->
<?php include("ui-core.php"); ?>
<?php include("ui-com2.php"); ?>
<!-- JAVASCRIPT -->
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/colorconversion.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/datepicker.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/number.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/jquery.inputlimiter.1.3.1.min.js"></script>
<?php include("js-core.php"); ?>
<?php include("ie.php"); ?>
<div id="mWrapper">
	<div id="container">
	<h4 style="float: right;padding: 0 20px;font-weight: 400;opacity: .4;">Create Engaging Three (3) Step Video Email Squeeze Pages</h4>
		<h1 style="float: left;padding: 0 20px; display: block; font-weight: 800; width: 200px;">Optin<strong style="color: #2d486a">Remix</strong></h1>
		<br clear="all">
	<?php
				// Edit App
				if ( isset($_GET['id']) ) {
					include("editapp.php");
				}
				// Create New App
				else if (isset($_GET['create'])) {
					include("create.php");
				}
				// Support
				else if (isset($_GET['support'])) {
					include("support.php");
				}
				// Show Dashboard ::
				else {
					include("dash.php");
				}
		?>
	</div>
	<div style="padding: 0 30px; margin-top: -10px; opacity: .5">
		<p style="float: right;padding: 0 20px;font-weight: 400;font-size: 11px ">Create Engaging Three (3) Step Video Email Squeeze Pages</p>
		<p style="float: left;padding: 0 20px; display: block; font-weight: 800;width: 200px;">Optin<strong style="color: #666">Remix</strong> <small>v1.0</small></p>
	</div>
</div>
<?php
}
?>
