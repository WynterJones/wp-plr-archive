<?php  



	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	
	$ID = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($data as $data) {}

	// Return Option Object:
	$results = get_option('wpchartpagex_campaign_'. $ID);	
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
			Main Settings
		</div>

		<div class="editItem" tab="tab2" >
			Content Settings
		</div>

		<div class="editItem" tab="tab3" >
			Customize Design
		</div>


		<div class="editItem" tab="tab5" >
			Auto-Responder
		</div>
		<div class="editItem2" style="float:right;">
			<span class="blue-btn btn" id="saveIt" style="margin-left:10px;" ><a href="#" id="saveIt_text">save</a></span>

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


	</form>


	<div id="arcode_hdn_div" ></div>
	<div id="arcode_hdn_div2"></div>

</div>