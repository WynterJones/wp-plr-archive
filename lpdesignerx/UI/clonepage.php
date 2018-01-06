<div style="width: 400px; margin: 0 auto">
	<h3>Choose Page to Clone:</h3>
	<select id="clone" style="width: 100%">
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
		<option value="<?php echo stripcslashes($results->ID); ?>"><?php echo stripcslashes($results->appname); ?></option>
		<?php
		}
		?>
	</select>
	<hr>
	<h3>Choose Destination Page:</h3>
	<select  id="to" style="width: 100%">
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
		<option value="<?php echo stripcslashes($results->ID); ?>"><?php echo stripcslashes($results->appname); ?></option>
		<?php
		}
		?>
	</select>
	<input type="hidden" id="url" value="<?php echo $_SERVER["REQUEST_URI"]; ?>&amp;">
	<span class="grey-btn btn"  style="margin: 0 auto; display: block; width: 94%;text-align: center;" ><a href="#" id="cloneThePage">Clone Your  Page</a></span>
	<br><br>
</div>
