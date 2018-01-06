<?php  
	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	$ID = $_GET['id'];
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach($data as $data) {}
	// Return Option Object:
	$results = get_option('wpoptinlock_campaign_'. $ID);	
	// echo $data->id;
?>
<?php
?>
<span style="float: right; position: relative; margin-top: -73px;padding-right: 15px;font-weight: bold;font-size: 13px; text-transform: uppercase;color: #CD4E38">Optin Shortcode</span>
<input type="text" value="[wpoptinlock id='<?php echo $_GET['id']; ?>']" style="float: right; font-weight: bold;margin-top: -90px;width: 400px;color: #CD4E38;border: 3px solid #CD4E38;font-size: 18px; height: 50px;padding:10px;">
<div class="editTop">
		<div class="appinfo" style="position: relative">

	<div style="float: right; margin-top: 15px; margin-right: -60px">
		<?php 
			if (get_option($_GET['id'].'_optinviews') != '') {
				$views = get_option($_GET['id'].'_optinviews');	
			}
			else {
				$views = 0;
			}
			if (get_option('clicksoptin'.'_'.$_GET['id']) != '') {
				$clicks = get_option('clicksoptin'.'_'.$_GET['id']) ;
			}
			else {
				$clicks = 0;
			}
			if($clicks != '0' && $views != '0') {
				$convRate = 100 * intval($clicks) / intval($views);
				$convRateNumber = substr($convRate, 0, 3);
				$convRate = substr($convRate, 0, 3);
			}
			else {
				$convRate = 0;
			}
		 ?>
		<span style="float: left; width: 90px; padding-right: 10px; text-align: center;"> <strong style="font-size: 18px; font-weight: bold;"><?php echo $views; ?></strong> <br> <strong><i class="fa fa-eye"></i> Views</strong></span>
		<span  style="float: left; width: 90px; padding-right: 10px; text-align: center;"> <strong style="font-size: 18px; font-weight: bold;"><?php echo $clicks; ?></strong> <br> <strong><i class="fa fa-check"></i> Clicks</strong></span>
		<span  style="float: left; width: 90px; padding-right: 10px; text-align: center;"> <strong style="font-size: 18px; font-weight: bold;"><?php echo $convRate; ?>%</strong> <br> <strong><i class="fa fa-bar-chart-o"></i> Conv. Rate</strong></span>
	
	</div>
			<span class="appTitle"><?php echo stripcslashes($data->appname); ?></span>
			<span class="appMeta"><b><i class="fa fa-calendar-o"></i> Created:</b> <?php echo stripcslashes($data->created); ?> <a href="<?php echo  $sitePath."/lp/index.php?id=".$_GET['id']."&p=".$_GET['id']; ?>" class="preview" target="_blank" style="display: inline !important; float: none; padding-left: 10px; text-decoration: none"><i class="fa fa-search"></i> Preview Your Page</a></span>
		</div>
		<br clear="left">
</div>
<div class="editNav">
		<div class="editItem editSelected" tab="tab1" >
			<i class="fa fa-dashboard"></i> 
			How to Get Started
		</div>
		
		<div class="editItem" tab="autoresponder" >
			<i class="fa fa-envelope"></i> 
			Email Opt-in Auto-Responder
		</div>
		
		<div class="editItem" tab="tab4" >
			<i class="fa fa-lock"></i> 
			Show Locked Content
		</div>
		<div class="editItem" tab="tab5" >
			<i class="fa fa-gear"></i> 
			Settings
		</div> 
		<div class="editItem2" style="float:right;">
			<span class="grey-btn btn" id="saveIt" style="margin-left:-10px;" ><a href="#" id="saveIt_text">Update Page</a></span>
		</div>
		<br clear="all" >
</div>
<div class="editArea">
	<form id="editApp" >
	<?php
		display_field_hidden(
			"action", 
			$pluginName . "_edit"
		);
		display_field_hidden(
			"id", 
			$_GET['id']
		);
	?>
	<?php
		include("app/dashboard.php");
		include("app/lockedcontent.php");
		include("app/autoresponder.php");
	?>
	<div style="border-top: 1px dotted #e2e2e2; padding-top: 15px; margin-top: 25px; ">
		<span style="float: left;" id="deleteCampaign" class="grey-btn" ><strong>Delete</strong></span>
		<br clear="left" />
	</div>
	</form>
	<div id="arcode_hdn_div" ></div>
	<div id="arcode_hdn_div2"></div>
</div>