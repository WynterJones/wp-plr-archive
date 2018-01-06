<?
	
	Header("content-type: application/x-javascript");
	
	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	
	$ID = $_GET['id'];
	
	// Save +1 for views
	
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbcxrxBTNs";
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach ( $data as $data ) {}
	
	$newview = $data->totalviews + 1;
	
	$wpdb->update($table_db_name, 
	array( 
	 'totalviews' => $newview
	),
	  array( 'id' => $ID )
	);
	
	// Button Codes
	
	$BTN = $data->btn;
	
	$buttonimage = "";
	
	if($BTN == "4"){
		$buttonimage = $data->btncustom;
	} else {
		$buttonimage = site_url(). "/wp-content/plugins/fbconnectrpro/imgs/btns/". $BTN .".png";
	}
	
	// FB Stuff
	
		$LANDINGURL =  site_url() ."/wp-content/plugins/fbconnectrpro/inc/fconnected.php?id=$ID";
		
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
		
		// Login or logout url will be needed depending on current user state.
		if ($user) {
		  $logoutUrl = $facebook->getLogoutUrl();
		  $loginUrl = $LANDINGURL;
		} else {
		  $params = array(
		    'scope' => 'email',
		    'redirect_uri' => $LANDINGURL
		  );	
		  $loginUrl = $facebook->getLoginUrl($params);
		}
	
		
	// Display Button
	echo "document.write(\"<a href='$loginUrl' ><img src='$buttonimage' border='0' /></a>\")";

	

?>