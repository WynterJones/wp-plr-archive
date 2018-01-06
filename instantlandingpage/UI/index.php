<?php
function instantlandingpage_dashboard(){

// Universal Variables

$pluginName = "instantlandingpage";
$sitePath = site_url() . "/wp-content/plugins/". $pluginName;

?>

<!-- LOAD CSS -->

<link href="<?php echo $sitePath; ?>/css/bootstrap-2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/table.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sitePath; ?>/css/colorpicker.css" rel="stylesheet" type="text/css" />

<?php include("css.php"); ?>

<!-- UI FRAMEWORK -->

<?php include("ui-core.php"); ?>
<?php include("ui-com2.php"); ?>

<!-- JAVASCRIPT -->

<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/colorconversion.js"></script>
<script type="text/javascript" src="<?php echo $sitePath; ?>/inc/js/datepicker.js"></script>

<?php include("js-core.php"); ?>
<?php include("ie.php"); ?>

<div id="mWrapper">

	<div id="container">
	
		<img src="<?php echo $sitePath; ?>/images/logo.png" style="margin: 20px auto; display: block;" alt="">


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
	
	<div style="padding: 0 30px; margin-top: -10px">
		<p>Copyright 2014 &copy; Your Plugin - All Rights Reserved</p>
	</div>


</div>		


<?php
}
?>