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

// SEND GRID INT.

////////////////////////////////////////////////////////

include_once "lib/swift_required.php"; // loading up lib

// ***  EMAIL SET OUT ** //
$emailBody = stripcslashes($template['emailBody']);

$text = "$emailBody
		Fullname: $name\n
        Email Address: $email\n
        Phone Number: $phone\n";
        
$html = <<<EOM
<html>
  <head></head>
  <body>
    <p>$emailBody<br><br>
       Fullname: $name<br>
       Email Address: $email<br>
       Phone Number: $phone<br>
    </p>
  </body>
</html>
EOM;

			  global $post;
			  global $wpdb;
			  $table_db_name2 = $wpdb->prefix . "wpleadmachineSettings";
			  $templates2 = $wpdb->get_results("SELECT * FROM $table_db_name2",ARRAY_A);
	
			  $tpl = get_post_meta($post->ID,'_template',true);
			
				
        ?>
	    <?php
	       foreach($templates2 as $template2)
				{
					?>
								
					<?php
				} 
				

$from = array($template2['emailEmail'] => $template2['emailName']); 


if ($template['client1Email'] != "" && $template['client2Email'] == ""  && $template['client3Email'] == ""  && $template['client4Email'] == "") {
	$to = array(
		$template['client1Email'] => $template['client1Name']
	);
}

if ($template['client2Email'] != "" && $template['client1Email'] != ""  && $template['client3Email'] == ""  && $template['client4Email'] == "") {
	$to = array(
		$template['client1Email'] => $template['client1Name'],
		$template['client2Email'] => $template['client2Name']
	);
}

if ($template['client3Email'] != "" && $template['client2Email'] != ""  && $template['client1Email'] != ""  && $template['client4Email'] == "") {
	$to = array(
		$template['client1Email'] => $template['client1Name'],
		$template['client2Email'] => $template['client2Name'],
		$template['client3Email'] => $template['client3Name']
	);
}

if ($template['client4Email'] != "" && $template['client2Email'] != ""  && $template['client3Email'] != ""  && $template['client1Email'] != "") {
	$to = array(
		$template['client1Email'] => $template['client1Name'],
		$template['client2Email'] => $template['client2Name'],
		$template['client3Email'] => $template['client3Name'],
		$template['client4Email'] => $template['client4Name']
	);
}
// Email subject
$subject = stripslashes($template['subjectLine']);
 
// Login credentials
$username = $template2['sendGridEmail'];   /// API INFO NEEDED FROM USER
$password = $template2['sendGridPassword'];   /// API INFO NEEDED FROM USER
 
// Setup Swift mailer parameters
$transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
$transport->setUsername($username);
$transport->setPassword($password);
$swift = Swift_Mailer::newInstance($transport);
 
// Create a message (subject)
$message = new Swift_Message($subject);
 
// attach the body of the email
$message->setFrom($from);
$message->setBody($html, 'text/html');
$message->setTo($to);
$message->addPart($text, 'text/plain');
 
// send message 
if ($recipients = $swift->send($message, $failures))
{
  // This will let us know how many users received this message
  //echo 'FAILED';
}



?>