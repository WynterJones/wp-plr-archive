
<div id="listapps">

	<div class="editTop" style="position: relative; height: 30px; overflow:hidden">
	

		<div class="appinfo">
					<?php
		
	

	if ($_REQUEST['action'] == 'update') {
		update_option( 'affiliatepressx_popupID', $_REQUEST['affiliatepressx_popupID'] );
	}

	?>
<form action="" method="post" id="changePopup" style="position: absolute; top: 11px; right: 10px;">
	<input name="action" type="hidden" value="update" />
<input name="page_options" type="hidden" value="affiliatepressx_popupID" />
<select name="affiliatepressx_popupID" id="affiliatepressx_popupID">
		<option <?php if (get_option('affiliatepressx_popupID') == '') { ?>selected<?php } ?> value="">Do Not Show Popup</option>
	<?php 
	
		// Display Apps:
		
		global $wpdb;
		
		$table_db_name = $wpdb->prefix . "affiliatepressx";
		
		$query = "

		(SELECT * FROM $table_db_name )
			
			";

		$results = $wpdb->get_results($query, OBJECT);
		
		foreach($results as $results) {
		
	?>

	<option <?php if (get_option('affiliatepressx_popupID') == stripcslashes($results->ID)) { ?>selected<?php } ?> value="<?php echo stripcslashes($results->ID); ?>"><?php echo stripcslashes($results->appname); ?></option>


	<?php
		
	}
	?>
</select>
</form>
			<img src="<?php echo $sitePath; ?>/images/logoOverlay.png" style="float: right; margin-right: -110px; margin-top: -20px; padding: 0" alt="">
			<span class="appTitle" style="padding: 0; font-size: 16px; margin-top: 0; font-weight: normal; opacity: 1; color: #999;margin-left: -5px;">Manage Affiliate Pages:</span>


		</div>

		

		<br clear="left">

</div>

	<?php 
	
		// Display Apps:
		
		global $wpdb;
		
		$table_db_name = $wpdb->prefix . "affiliatepressx";
		
		$query = "

		(SELECT * FROM $table_db_name )
			
			";

		$results = $wpdb->get_results($query, OBJECT);
		
		foreach($results as $results) {
		
	?>

	<div class="appitem">
<a href="<?php echo $_SERVER["REQUEST_URI"]; ?>&id=<?php echo stripcslashes($results->ID); ?>">
		<div class="appinfo">
			<span class="appTitle"><?php echo stripcslashes($results->appname); ?></span>
			<span class="appMeta" style="color: #999;"><b>Created:</b> <?php echo stripcslashes($results->created); ?> - <strong>Views:</strong> <?php echo get_option('affiliatepressx_campaign_'. $results->ID.'_totalViews'); ?>  - <strong>Clicks:</strong> <?php echo get_option('affiliatepressx_campaign_'.$results->ID.'_totalClicks'); ?> - <strong>Conv. Rate:</strong> <?php echo substr(get_option('affiliatepressx_campaign_'.$results->ID.'_totalClicks') / get_option('affiliatepressx_campaign_'. $results->ID.'_totalViews') * 100, 0, 4); ?>% - <strong>SEO Score:</strong> <span class="circle"><?php echo get_option('affiliatepressx_campaign_'.$results->ID.'_seoScore'); ?>%</span></span>

		</div>



		<div class="appedit">
			<span class="blue-btn2 btn" style="float: right; margin-top: -7px; width: 100px; text-align: center" >Click To Edit</span>
			
		</div>

		<br clear="left">
</a>
	</div>

	<?php
		
	}
	?>

	<div class="appnew">
<span style="margin: 10px 0; float: left; padding-left: 10px; color: #888">
			<img src="https://cdn3.iconfinder.com/data/icons/uidesignicons/information.png" style="float: left; margin-right: 7px">
			Need help? Check out the PDF tutorials at the top right of each page.
		</span>
		<div class="blue-btn btn" style="width: 140px; text-align: center; float: right"><a href="<?php echo site_url(); ?>/wp-admin?page=affiliatepressx-dashboard&create">Create New Page</a></div>	

		<br clear="right" >

	</div>

</div>


<br clear="left">