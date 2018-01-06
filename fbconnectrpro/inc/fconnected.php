<?php 

	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	
	$ID = $_GET['id'];
	
	// DB Stuff
		
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbcxrxBTNs";
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach ( $data as $data ) {}

   // FB Stuff

	require 'facebook.php';
	$app_id = $data->fbid;
	$app_secret = $data->fbsecret;
	$facebook = new Facebook(array(
		'appId' => $app_id,
		'secret' => $app_secret,
		'cookie' => true
	));

	$signed_request = $facebook->getSignedRequest();
		
	// Get User ID
	$user = $facebook->getUser();

	// Check if user is logged in
	
	if ($user) {
	  try {
	    $user_profile = $facebook->api('/me');
	  } catch (FacebookApiException $e) {
	    error_log($e);
	    $user = null;
	  }
	}

	// Full Name
	
	$fullname = $user_profile['first_name'] ." ". $user_profile['last_name'];

	// Create New Lead ::
	
		// CHECK IF LEAD EXIST::
		$table_db_name = $wpdb->prefix . "fbcxrxLeads";
		$LEADID = $user_profile['id'];
		$lead_data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE fburl = '$LEADID'", OBJECT);
		
				
		if (empty($lead_data)) {
		
			$table_db_name = $wpdb->prefix . "fbcxrxLeads";
			
			$wpdb->insert($table_db_name, 
			array( 
			 'fullname' => $fullname,
			 'email' => $user_profile['email'],
			 'location' => $user_profile['location']['name'],
			 'fburl' => $user_profile['id'],
			 'date' => date("F j, Y"),
			 'btn' => $data->btnname
			));
			
			// +1 Total Leads
			
			$table_db_name = $wpdb->prefix . "fbcxrxBTNs";
			$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
			foreach ( $data as $data ) {}
			
			$newview = $data->totalleads + 1;
			
			$wpdb->update($table_db_name, 
			array( 
			 'totalleads' => $newview
			),
			  array( 'id' => $ID )
			);    
		    
		} else {
		
			// Lead Captured already...	
				
		}

	// Check If AR Is Setup
	
	if($data->arcode == ""){
	
		// AR must not be setup...
		// Check if there is a redirect URL
		
		if($data->redirect == ""){
			
			// No redirect...
			echo "<h2>Thanks For Signing up - but you don't have a redirect URL, yet!</h2>";
			
		} else {
		
			// Redirect to URL...
			header("Location: ". $data->redirect);
		
		}
	
	} else {
	
		?>
		
		<form method="post" action="<?php echo $data->arform; ?>" id="arSubmit">
		
			<?php echo $data->arhidden; ?>
		
			<input type="hidden" name="<?php echo $data->arname; ?>" value="<?php echo $fullname; ?>" />
			<input type="hidden" name="<?php echo $data->aremail; ?>" value="<?php echo $user_profile['email']; ?>" />
			
		
		</form>
		
		<script type="text/javascript">
			document.forms["arSubmit"].submit();
		</script>
		
		<?php
	
	}

?>