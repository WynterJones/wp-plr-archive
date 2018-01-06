<div class="tabber" id="tab3" style="display: none;">

	<div class="titleBar">
		<i class="fa fa-envelope" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Email Auto-Responder</strong></h2>
		<p>Add Your Auto Responder Code</p>
	</div>

	<?php

	
		// Add Your Options Here
	display_option( 
		$_GET['id'],
		$results->showLeads,
		"Show / Hide Auto Responder", 
		"showLeads",
		"Hide or Show Optin Form",
		"Hide [], Show [show]"
	);
	display_field( 
		$_GET['id'],
		$results->emailHeadline,
		"Email Headline", 
		"emailHeadline",
		"Headline for Sign Up Box"
	);
	display_field( 
		$_GET['id'],
		$results->emailButton,
		"Submit Button Text", 
		"emailButton",
		"Submit Button Text"
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
		"HTML Auto-Responder Code", 
		"autoresponder",
		"Auto Responder HTML Form Code"
	);
		

	?>

</div>