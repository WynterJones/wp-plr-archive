<?php  
	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	$ID = $_GET['id'];
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach($data as $data) {}
	// Return Option Object:
	$results = get_option('yourplugin_campaign_'. $ID);	
	// echo $data->id;
?>
<?php
?>
<div class="editTop">
		<div class="appinfo" style="position: relative">

	<div style="float: right; margin-top: 15px; margin-right: -60px">
		<?php 
			if (get_option($_GET['id'].'_views') != '') {
				$views = get_option($_GET['id'].'_views');	
			}
			else {
				$views = 0;
			}
			if (get_option('clicks'.'_'.$_GET['id']) != '') {
				$clicks = get_option('clicks'.'_'.$_GET['id']) ;
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
			Dashboard
		</div>
		<div class="editItem" tab="tab2" >
			<i class="fa fa-globe"></i> 
			SEO
		</div>
		<div class="editItem" tab="autoresponder" >
			<i class="fa fa-envelope"></i> 
			Email
		</div>
		<div class="editItem" tab="tab3" >
			<i class="fa fa-question-circle"></i> 
			Test Inputs
		</div>
		<div class="editItem" tab="tab4" >
			<i class="fa fa-gear"></i> 
			Empty
		</div>
		<div class="editItem" tab="tab5" >
			<i class="fa fa-gear"></i> 
			Empty
		</div>
		<div class="editItem" tab="tab6" >
			<i class="fa fa-gear"></i> 
			Empty
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
		include("app/tab1.php");
		include("app/tab2.php");
		include("app/tab3.php");
		include("app/tab4.php");
		include("app/tab5.php");
		include("app/tab6.php");
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