<?php  

	$statusofID = "block";
	
	if (isset($_GET['id'])) {
		$statusofID = "none";
	} else {
		$statusofID = "block";
	}
	
	
?>

<div id="dashboard" style="display: <?php echo $statusofID; ?>;">

	<?php 
	
		// Display Campaigns:
		
		global $wpdb;
		$table_db_name = $wpdb->prefix . "fbsurveypro_campaigns";
		
		$results = $wpdb->get_results("SELECT * FROM $table_db_name", OBJECT);
		
		foreach($results as $results) {
		
	?>
	

	<div class="well">
	
		<div id="depTitle">
			
			<h1><?php echo $results->title; ?></h1>
			<p><b>created:</b> <?php echo $results->created; ?></p>
			
		</div>
		
		<div class="depStat2">
			
			<h1><?php echo $results->total_optins; ?></h1>
			<p>total entries</p>
			
		</div>
		
		<div class="depStat3">
			
			<h1><?php echo $results->total_shares; ?></h1>
			<p>total finished</p>
			
		</div>
		
		<div class="depStat1">
			
			<h1><?php echo $results->total_views; ?></h1>
			<p>total views</p>
			
		</div>

		<br clear="all" >

		<div id="twilioAPI">
			
			<a class="uibutton large confirm" href="<?php echo $_SERVER["REQUEST_URI"]; ?>&id=<?php echo $results->ID; ?>&settings">Edit Settings</a>
			
			<a class="uibutton large confirm" style="margin-left: 20px;" href="<?php echo $_SERVER["REQUEST_URI"]; ?>&id=<?php echo $results->ID; ?>&questions">Edit Questions</a>
			
			<a class="uibutton large" style="margin-left: 20px;" href="<?php echo $_SERVER["REQUEST_URI"]; ?>&lead=<?php echo $results->ID; ?>&report">View Report</a>
			
			<a class="uibutton large" style="margin-left: 20px;" href="<?php echo $_SERVER["REQUEST_URI"]; ?>&lead=<?php echo $results->ID; ?>&leads">View Leads</a>
			
			<a class="uibutton large" style="margin-left: 20px;" href="<?php echo site_url(); ?>/wp-content/plugins/fbsurveypro/timeline/index.php?id=<?php echo $results->ID; ?>" target="_blank" >Preview</a>
			
			
			</span>
			
		</div>
	
	</div>
	
	<?php 
	
	}
	// EOA
	
	?>
	
	
	
	
		
		<a class="uibutton large special" href="<?php echo $_SERVER["REQUEST_URI"]; ?>&create">Create New Survey</a>

</div>