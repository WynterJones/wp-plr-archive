<?php 

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbcxrxLeads";
	$ID = $_GET['lead'];
	$lead_data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach ( $lead_data as $lead_data ) {}
	
	$fullname = "";
	$email = "";
	$location = "";
	$fburl = "";

	if(isset($_POST['submit'])){
		
		// Save Edit Changes
		
		$wpdb->update($table_db_name, 
		array( 
		 'fullname' => stripcslashes($_POST['fullname']),
		 'email' => stripcslashes($_POST['email']),
		 'location' => stripcslashes($_POST['location']),
		 'fburl' => stripcslashes($_POST['fburl'])
		),
		  array( 'id' => $ID )
		);
		
		// Show notice
		
		echo '<div id="notice" class="updated fade" style="width:530px; margin-left:8px; margin-top:15px; margin-bottom:-10px;" ><p><b>Lead Changes Saved...</b></p></div>';
		
		// Set new variables
		
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$location = $_POST['location'];
		$fburl = $_POST['fburl'];
	} else {
	
		$fullname = $lead_data->fullname;
		$email = $lead_data->email;
		$location = $lead_data->location;
		$fburl = $lead_data->fburl;
	
	}

?>
<div style="margin-top: 10px; margin-left: 10px;">

<h2>Edit Lead Information:</h2>
<span>This lead was captured: <?php echo $lead_data->date; ?></span>

<div class="wellx" style="margin-top: 20px;">

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ."?page=fbcrx-dashboard&action=edit&lead=$ID"; ?>">

	<span class="fieldTitle">Full Name:</span>
	<input name="fullname" type="text" value="<?php echo $fullname; ?>" class="xfield">
	
	<div class="fieldSplitter"></div>

	<span class="fieldTitle">Email:</span>
	<input name="email" type="text" value="<?php echo $email; ?>" class="xfield">
	
	<div class="fieldSplitter"></div>

	<span class="fieldTitle">Location:</span>
	<input name="location" type="text" value="<?php echo $location; ?>" class="xfield">
	
	<div class="fieldSplitter"></div>

	<span class="fieldTitle">FB ID:</span>
	<input name="fburl" type="text" value="<?php echo $fburl; ?>" class="xfield">

	<div class="fieldSplitter"></div>

	<input type="submit" name="submit" value="Save Edit" class="button-primary" />
	
	</form>

</div>

</div>