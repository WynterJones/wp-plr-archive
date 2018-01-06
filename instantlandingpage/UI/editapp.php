<?php  



	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	
	$ID = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($data as $data) {}

	// Return Option Object:
	$results = get_option('instantlandingpage_campaign_'. $ID);	
	// echo $data->id;

?>

<div class="editTop">
	

		<div class="appinfo">
			
			<span class="appTitle"><?php echo stripcslashes($data->appname); ?></span>
			<span class="appMeta"><b>Created:</b> <?php echo stripcslashes($data->created); ?></span>

		</div>

		

		<br clear="left">

</div>

<div class="editNav">
		
		<div class="editItem editSelected" tab="tab1" >
			
			Dashboard
		</div>

		<!-- <div class="editItem" tab="tab2" >
			Test Elements
		</div> -->

		<div class="editItem" tab="tab3" >
			Content Settings
		</div>

		<div class="editItem" tab="tab4" >
			Design Settings
		</div>

		<div class="editItem" tab="tab5" >
			Popup Settings
		</div>


		<div class="editItem2" style="float:right;">
			<span class="saved btn" id="saveIt" style="margin-left:10px;" ><a href="#" id="saveIt_text">save</a></span>
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


	?>

	<div style="border-top: 1px dotted #e2e2e2; padding-top: 15px; margin-top: 25px; ">
		<span style="float: left;" id="deleteCampaign" class="grey-btn" ><strong>Delete</strong></span>
		<br clear="left" />
	</div>


	</form>




	<div id="arcode_hdn_div" ></div>
	<div id="arcode_hdn_div2"></div>

</div>