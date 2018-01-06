
<div id="listapps">

	<div id="appHeader">
		<span>Manage all of your landing pages:</span>
	</div>

	<?php 
	
		// Display Apps:
		
		global $wpdb;
		
		$table_db_name = $wpdb->prefix . "wpleadgenx";
		
		$query = "

		(SELECT * FROM $table_db_name )
			
			";

		$results = $wpdb->get_results($query, OBJECT);
		
		foreach($results as $results) {
		
	?>

	<div class="appitem">

		<div class="appinfo">
			
			<span class="appTitle"><?php echo stripcslashes($results->appname); ?></span>
			<span class="appMeta"><b>Created:</b> <?php echo stripcslashes($results->created); ?></span>

		</div>

		<div class="appedit">
			<span class="saved btn" ><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>&id=<?php echo stripcslashes($results->ID); ?>">edit</a></span>
		</div>

		<br clear="left">

	</div>

	<?php
		
	}

	?>


	<div class="appnew">

		<div class="blue-btn btn" style="width: 100px; text-align: center" ><a href="<?php echo site_url(); ?>/wp-admin?page=wpleadgenx-dashboard&create">Create New</a></div>	

		<br clear="right" >

	</div>

</div>


<br clear="left">