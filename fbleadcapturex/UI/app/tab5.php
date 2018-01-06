<div class="tabber" id="tab5" style="display: none;">

	<div class="titleBar">
		<h2>Auto-Responder:</h2>
		<p>Here you can manage the style of the slide optin app...</p>
	</div>

	<?php

	echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Auto Responder Code</h2>
		";

		display_textarea( 
			$_GET['id'],
			$results->autoresponder,
			"Auto Responder Form Code", 
			"autoresponder",
			"HTML Form Code (Must Include Name and Email Fields)"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Optin Content Settings</h2>
		";

		display_field( 
			$_GET['id'],
			$results->optinButton,
			"Optin Button Text", 
			"optinButton",
			"The signup button text for optin"
		);

		display_field( 
			$_GET['id'],
			$results->optinHeadline,
			"Optin Headline", 
			"optinHeadline",
			"The main optin headline"
		);

		display_field( 
			$_GET['id'],
			$results->optinSubHeadline,
			"Optin Sub Headline", 
			"optinSubHeadline",
			"The sub headline for optin section"
		);

		display_field( 
			$_GET['id'],
			$results->spam,
			"Spam Content", 
			"spam",
			"The warning shown below the form"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Final Step Content</h2>
		";

		display_wpeditor( 
			$_GET['id'],
			$results->lastStep,
			"Last Step Content", 
			"lastStep",
			"Shown after user has signed up to mailing list"
		);

	?>

</div>