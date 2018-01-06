<?php 

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbcxrxBTNs";
	$ID = $_GET['btn'];
	$lead_data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach ( $lead_data as $lead_data ) {}
	
	$display = "block";

	if(isset($_POST['submit'])){
		
		// Delete
		
		$wpdb->query("DELETE FROM $table_db_name WHERE id = $ID");
		
		// Show notice
		
		$display = "none";
		
		echo '<div id="notice" class="updated fade" style="width:530px; margin-left:8px; margin-top:15px; margin-bottom:-10px;" ><p><b>Button Deleted!</b> Will redirect in a moment...</p></div>';
		
		// Redirect w/ JS
		?>
		
		<script type="text/JavaScript">
		<!--
		redirectTime = "1500";
		redirectURL = "?page=fbcrx-dashboard&tab=display_campaigns";
		function timedRedirect() {
			setTimeout("location.href = redirectURL;",redirectTime);
		}
		
		timedRedirect(); // run function
		
		//   -->
		</script>
		
		<?php	
		
	} else {
	
	
	}

?>
<div style="margin-top: 10px; margin-left: 10px; display: <?php echo $display; ?>;">

<h2>Are you sure you want to delete this button?</h2>
<span>Deleting this button will make the button inactive and no longer work...</span>

<div class="wellx" style="margin-top: 20px;">

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ."?page=fbcrx-dashboard&tab=display_campaigns&action_btn=delete&btn=$ID"; ?>">

	<input type="submit" name="submit" value="Yes, delete this button!" class="button-primary" />
	
	<a href="javascript:void()" onClick="parent.location='?page=fbcrx-dashboard&tab=display_campaigns'" class="button-secondary" style="margin-left: 20px;" >No, do NOT delete this buton!</a>
	
	</form>

</div>

</div>