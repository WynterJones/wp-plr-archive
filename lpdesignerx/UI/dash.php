<div id="listapps">
	<div id="appHeader">
		<span style="float: right;"><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>&clonePage=yes" style="color: #fff; text-decoration: none"><i class="fa fa-cog"></i> Clone a Page</a></span>
		<span><i class="fa fa-cog"></i> Preview, Edit and Update Your Pages:</span>
	</div>
	<?php 
		// Display Apps:
		global $wpdb;
		$table_db_name = $wpdb->prefix . "lpdesignerx";
		$query = "
		(SELECT * FROM $table_db_name )
			";
		$results = $wpdb->get_results($query, OBJECT);
		foreach($results as $results) {
	?>
	<div class="appitem">
		<div class="appinfo appinside">
			<span class="appTitle"><?php echo stripcslashes($results->appname); ?></span>
			<span class="appMeta"><b><i class="fa fa-calendar-o"></i> Created:</b> <?php echo stripcslashes($results->created); ?> - <a href="<?php echo  $sitePath."/lp/index.php?id=".$results->ID."&p=".$results->ID; ?>"  class="preview" target="_blank" style="display: inline !important; float: none; padding-left: 10px; text-decoration: none"><i class="fa fa-search"></i> Preview Your Page</a></span>
		</div>
		<div class="appedit">
			<span class="grey-btn btn" ><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>&id=<?php echo stripcslashes($results->ID); ?>">edit</a></span>
		</div>
		<br clear="left">
	</div>
	<?php
	}
	?>
	<div class="appnew">
		<div class="grey-btn btn" style="width: 100px; text-align: center" ><a href="<?php echo site_url(); ?>/wp-admin?page=lpdesignerx-dashboard&create">Create New</a></div>	
		<br clear="right" >
	</div>
</div>