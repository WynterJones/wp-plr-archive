<?php 

$display = "block";

if(isset($_POST['submit'])){
	
	// Create a New Button
	
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbcxrxBTNs";
	
	$wpdb->insert($table_db_name, 
	array( 
	 'btnname' => stripcslashes($_POST['btnname']),
	 'totalviews' => '0',
	 'totalleads' => '0',
	 'date' => date("F j, Y"),
	 'btn' => '1'
	));
	
	// Show notice
	$display = "none";
	
	echo '<div id="notice" class="updated fade" style="width:530px; margin-left:8px; margin-top:15px; margin-bottom:-10px;" ><p><b>New Button Created!</b> Will redirect in a moment...</p></div>';
	
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
	// Do nothing...
}

?>

<div style="margin-top: 10px; margin-left: 10px; display: <?php echo $display; ?>;">

<h2>Create a New Button:</h2>
<span>You can create a new button campaign easily just give the button a name...</span>

<div class="wellx" style="margin-top: 20px;">

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ."?page=fbcrx-dashboard&tab=display_campaigns&action_btn=new_btn"; ?>">

	<span class="fieldTitle">Button Name:</span>
	<input name="btnname" type="text" value="" class="xfield">
	
	<div class="fieldSplitter"></div>

	<input type="submit" name="submit" value="Save Edit" class="button-primary" />
	
	</form>

</div>

<span style="color: grey;">* You will be able to do all the edits once the button has been created...</span>

</div>