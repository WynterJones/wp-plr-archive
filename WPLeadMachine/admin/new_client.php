<?php $curUrl = '../wp-content/plugins/WPLeadMachine';  ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/jquery.php'); ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/styles.php'); ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/styles_btn.php'); ?>

<?php
	if($_POST['plugin_hidden'] == 'newClient') {
		
		$name = html_entity_decode(stripslashes($_POST['name']));
		$description = $_POST['description'];
		$photo = $_POST['photo'];
		
		create_new_client($name, $description, $photo);
		
		
?>
	    
    
<script type="text/javascript">
<!--
window.location = "../wp-admin/admin.php?page=wplocalfusion&client=<?php echo $_POST['name']; ?>"
//-->
</script>

<?php } ?>



<form id="webinar_form" name="plugin_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	
	<input type="hidden" name="plugin_hidden" value="newClient">
	<div id="topBar">
		<h1 class="newClient">Add New Client</h1>
		
	</div>
	
		<div class="columnBox emailSettings " style=" width: 75% !important; margin-left: 8%; margin-top: 25px;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon19.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Add New Client:</h2>
									<h4 style="margin-top: -12px;"  >Add new client campaign starting with basic information:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
			<div class="fieldarea">
			<span class="fieldtitle">Full Name: *</span>
			<span class="fielddesc">the full name of your client or project...</span>
			<input type="text" name="name" id="addclient_fullname">
			</div>
			
			
			
			<div class="fieldarea">
			<span class="fieldtitle">Short Description About Client: *</span>
			<span class="fielddesc">120 character business name or description of client or project...</span>
			<input type="text" name="description"  id="addclient_desc">
			</div>
			
			<div class="fieldarea">
			<span class="fieldtitle">Photo Of Client - URL:</span>
			<span class="fielddesc">a full URL ( http://... ) of a photo. Best results use 107x107 photo. </span>
			<input type="text" name="photo"  id="addclient_photo">
			</div>
			<br clear="all">
			</div>
			<br clear="all">
		
	</div>
	<br clear="all" >
	<div id="topBar">
		
		<a href="../wp-admin/admin.php?page=wplocalfusion&new=client" class=" saveClientBTN btn btn-success btn-large" style="text-decoration: none; float: right; margin-right: 10px; margin-top: 8px;">
		<img src="<?php echo $imagePath; ?>/images/saveicon.png" align="left" style="margin-right: 8px; margin-top: -2px;" > Save New Client</a>
	
	</div>
</form>

<br>
<p style="text-align: center">Copyright &copy; 2012 - <strong>WP Local Fusion</strong> - All Rights Reserved <br>The Ultimate Lead Capturing and Client Management Wordpress Plugin <br><small>Brought to You By <a href="#">AgencyScripts - Internet Marketing 2.0</a></small></p>