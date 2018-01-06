<?php 
	
		// Display Campaigns:
		
		global $wpdb;
		$table_db_name = $wpdb->prefix . "oppro_campaigns";
		
		$results = $wpdb->get_results("SELECT * FROM $table_db_name", OBJECT);
		
		foreach($results as $results) {
		
	?>
	

	<div class="well">
	
		<div id="depTitle">
			
			<h1><?php echo $results->title; ?></h1>
			<p><b>created:</b> <?php echo $results->created; ?></p>
			
		</div>
		
		
		<div class="depStat1">
			
			<h1><?php echo $results->total_views; ?></h1>
			<p>total views</p>
			
		</div>

		<br clear="all" >

		<div id="twilioAPI">
			
			<a class="uibutton large special" href="<?php echo $_SERVER["REQUEST_URI"]; ?>&id=<?php echo $results->ID; ?>">Edit This Campaign</a>
						
			<a class="uibutton large" style="margin-left: 20px;" href="<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/lp/index.php?id=<?php echo $results->ID; ?>" target="_blank" >Preview</a>
			
			
		
			
		</div>
	
	</div>
	
	<?php 
	
	}
	// EOA
	
	?>
	
	
	
	
		
		<a class="uibutton large special" href="<?php echo $_SERVER["REQUEST_URI"]; ?>&create">Create New Personalized Page</a>
