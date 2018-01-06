<?php

// ADD WORDPRESS

define('WP_USE_THEMES', false);
require('../../../../wp-blog-header.php');

// FUNCTION TO SAVE LEAD & RUN NOTIFY MESSAGES TO CLIENT

////////////////////////////////////////////////////////

// Posted Variables 

$clientID = $_POST['client']; // campaign ID

$name = $_POST['name']; // lead NAME
$email = $_POST['email']; // lead EMAIL
$phone = $_POST['phone']; // PHONE
$signedUp = date("F j, Y"); // DATE


  global $post;
		  global $wpdb;
		  $getOptin = get_post_meta( $post->ID, 'rndNumber', true );
		  $table_db_name = $wpdb->prefix . "wpleadmachineClients";
		  $client = $_POST['client'];
		  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$client'",ARRAY_A);

		  $tpl = get_post_meta($post->ID,'_template',true);
		
			
    ?>
    <?php
       foreach($templates as $template)
			{
				?>
							
				<?php
			} 

////////////////////////////////////////////////////////

// TWILIO INTEGRATION

////////////////////////////////////////////////////////

  require "Services/Twilio.php";

   // set our AccountSid and AuthToken - from www.twilio.com/user/account
   $AccountSid = "AC473d2cf72f932d14c9746b39a4e701b6";
   $AuthToken = "6ec403c74e0f93d53725fa610c07a589";

   // instantiate a new Twilio Rest Client
   $client = new Services_Twilio($AccountSid, $AuthToken);

   // make an associative array of people we know, indexed by phone number. Feel
   // free to change/add your own phone number and name here.
   $people = array(
       "+16134075666" => "Dylan Jones"
   );

   // iterate over all our friends. $number is a phone number above, and $name 
   // is the name next to it
   foreach ($people as $number => $name) {

       // Send a new outgoing SMS */
       $sms = $client->account->sms_messages->create(
           // the number we are sending from, must be a valid Twilio number
           "415-599-2671", 

           $number,
           
           "Hey $name, Monkey Party at 6PM. Bring Bananas!"
       );

       echo "Sent message to $name";
   }

?>