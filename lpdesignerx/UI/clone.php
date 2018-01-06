<?php  
	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	$ID = $_GET['clone'];
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach($data as $data) {}
	// Return Option Object:
	$results = get_option('lpdesignerx_campaign_'. $ID);	
	// echo $data->id;
	$ID = $_GET['to'];
	$dataTo = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach($dataTo as $dataTo) {}
	// Return Option Object:
	$resultsTo = get_option('lpdesignerx_campaign_'. $ID);	
?>
<?php
?>
<div style="width: 400px; margin: 0 auto">
<h3 class="appTitle">Clone: <span style="font-weight: normal;"><?php echo stripcslashes($data->appname); ?></span></h3>
			<h3 class="appTitle">Destination: <span style="font-weight: normal;"><?php echo stripcslashes($dataTo->appname); ?></span></h3>
			<p>Will Replace All Content for Destination Page</p>
			<input type="hidden" id="url" value="<?php echo $_SERVER["REQUEST_URI"]; ?>&amp;">
			<input type="hidden" id="clone" value="<?php echo $_GET['to']; ?>">
<span class="grey-btn btn" id="cloneIt" style="margin: 0 auto; display: block; width: 94%;text-align: center;" theid="<?php echo $_GET['to']; ?>"><a href="#" id="saveIt_text"  style="color: #333">Confirm Page Clone</a></span>
	<br><br>
		</div>
<div class="editArea" style="display: none">
	<form id="editApp" >
	<?php
		display_field_hidden(
			"action", 
			$pluginName . "_edit"
		);
		display_field_hidden(
			"id", 
			$_GET['to']
		);
	?>
	<?php
		include("app/tab1.php");
		include("app/tab2.php");
		include("app/tab3.php");
		include("app/tab4.php");
		include("app/tab5.php");
		include("app/tab6.php");
		include("app/tab7.php");
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