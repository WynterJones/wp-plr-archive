<div class="tabber" id="autoresponder" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-envelope" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Email Auto Responder Settings</strong></h2>
		<p>Collect leads with your page by adding in your HTML form code.</p>
	</div>
	<?php
		display_option( 
			$_GET['id'],
			$results->showEmail,
			"Show / Hide Auto Responder", 
			"showEmail",
			"Hide or Show Optin Form",
			"Hide [], Show [show]"
		);
		display_field( 
			$_GET['id'],
			$results->optintime,
			"Time: (seconds)", 
			"optintime",
			"Number of seconds to wait to show optin."
		);
		display_field( 
			$_GET['id'],
			$results->optinheadline,
			"Optin Headline", 
			"optinheadline",
			"Headline Above Optin"
		);
		display_field( 
			$_GET['id'],
			$results->optinskip,
			"Skip Text", 
			"optinskip",
			"Skip Optin and Watch Video"
		);
		
		display_field( 
			$_GET['id'],
			$results->nameplace,
			"Name Placeholder", 
			"nameplace",
			"Text for The Name Input"
		);
		display_field( 
			$_GET['id'],
			$results->emailplace,
			"Email Placeholder", 
			"emailplace",
			"Text for The Email Input"
		);
		display_field( 
			$_GET['id'],
			$results->optinbutton,
			"Button Text", 
			"optinbutton",
			"Text for Sign Up Button"
		);
		display_option( 
		$_GET['id'],
		$results->optindesign,
		"Button Color", 
		"optindesign",
		"Change button color.",
		"Grey [default], Blue [primary], Light Blue [info], Red [warning], Orange [warning], Green [success]"
	);
		display_option( 
			$_GET['id'],
			$results->ar,
			"Choose Email Service", 
			"ar",
			"Aweber or Mail Chimp",
			"Aweber [], MailChimp [mailchimp], GetResponse [getresponse], Other [other]"
		);
		display_textarea( 
			$_GET['id'],
			$results->autoresponder,
			"Auto Responder Code", 
			"autoresponder",
			"Your HTML Auto Responder Form Code"
		);
	?>
</div>