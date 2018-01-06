
<div id="listapps">

	<div id="appHeader">
		<span>Manage all of your landing pages:</span>
	</div>

	<?php 
	
		// Display Apps:
		
		global $wpdb;
		
		$table_db_name = $wpdb->prefix . "wpchartpagex";
		
		$query = "

		(SELECT * FROM $table_db_name )
			
			";

		$results = $wpdb->get_results($query, OBJECT);
		
		foreach($results as $results) {
		
	?>

	<div class="appitem">
<a href="<?php echo $_SERVER["REQUEST_URI"]; ?>&id=<?php echo stripcslashes($results->ID); ?>">
<div class="appedit" style="width: 300px;">
			<span class="grey-btn btn" style="color: #333"><span>EDIT</span></span>
		</div>
		<div class="appinfo">
			
			<span class="appTitle"><?php echo stripcslashes($results->appname); ?></span>
			<span class="appMeta"><b>Created:</b> <?php echo stripcslashes($results->created); ?></span>

		</div>

		

		<br clear="left">
</a>
	</div>

	<?php
		
	}

	?>


	<div class="appnew">

		<div class="grey-btn btn" style="width: 100px; text-align: center" ><a href="<?php echo site_url(); ?>/wp-admin?page=wpchartpagex-dashboard&create">+ New Page</a></div>	

		<br clear="right" >

	</div>

</div>


<br clear="left">