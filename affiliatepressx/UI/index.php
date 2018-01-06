<?php
function affiliatepressx_dashboard(){

// Universal Variables

$pluginName = "affiliatepressx";
$sitePath = site_url() . "/wp-content/plugins/". $pluginName;
error_reporting(E_ERROR | E_PARSE);
?>

<!-- LOAD CSS -->

<link href="<?php echo $sitePath; ?>/css/bootstrap-2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/table.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/colorpicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/inc/js/fontselect.css" rel="stylesheet" type="text/css" />

<?php include("css.php"); ?>

<!-- UI FRAMEWORK -->

<?php include("ui-core.php"); ?>
<?php include("ui-com2.php"); ?>

<!-- JAVASCRIPT -->

<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/colorconversion.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/datepicker.js"></script>
<script src="<?php echo $sitePath; ?>/inc/lp/assets/jquery/timepicker.js"></script>
<script src="<?php echo $sitePath; ?>/inc/js/jquery.fontselect.js"></script>

<?php include("js-core.php"); ?>
<?php include("ie.php"); ?>

<div id="mWrapper" style="position: relative">
	
<p id="updateText" style="position: absolute; top: -5px; right: 40px;  color: #777; font-weight: bold;"><a href="#" style="text-decoration: none; color: #c6313b">Testing Version - You are running:</a> Version 1.4</p>
	<div id="container">

		<img src="<?php echo $sitePath; ?>/images/logo.png" style="margin-bottom: 0px; width: 390px; margin-top: -30px; margin-left: 10px;" alt="">
		<a href="http://support.wpaffiliatepress.com/" target="_blank"><span style="float: right;margin-right: 20px;margin-top: 15px;" id="" class="grey-btn" ><img src="https://cdn2.iconfinder.com/data/icons/crystalproject/16x16/actions/agt_support.png" style="margin-right: 5px;margin-bottom: -3px">Support</span></a>

		<a href="admin.php?page=affiliatepressx-dashboard" style="color: #333"><span style="float: right;margin-right: 10px;margin-top: 15px" id="" class="grey-btn" ><img src="https://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/apps/system-file-manager.png" style="margin-right: 5px; margin-bottom: -3px; color: #333">Manage</span></a>
		<a href="?page=affiliatepressx-dashboard&create" title="Create New Page">
<img src="https://cdn0.iconfinder.com/data/icons/Pixel_Pulp___Teaser___by_kyo_tux/24/5.png" style="float: right; margin-top: 22px; opacity: .6; margin-right: 12px">
</a>

		
		
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
	
	<p style="float: right; padding-right: 30px; text-align: right;  margin-top: 15px;color: #666; font-weight: bold">AffiliatePress -- High Converting Deal Landing Pages <br>
		<span style="font-weight: normal">Copyright 2013 &copy; all rights reserved <a href="http://go.rrilla.com/" style="text-decoration: none; color: #2c76a5" target="_blank">Go.rrilla Marketing</a></span></p>
		

</div>		


<?php
}
?>