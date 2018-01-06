<div class="tabber" id="autoresponder" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-envelope" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Email Optin / Buy Now Settings</strong></h2>
		<p>Collect leads with your page by adding in your HTML form code.</p>
	</div>
	<?php
		display_option( 
			$_GET['id'],
			$results->showEmail,
			"Show / Hide Auto Responder", 
			"showEmail",
			"Hide or Show Optin Form",
			"Show Buy Now Box [], Show Auto-Responder Box [show]"
		);

		display_field( 
			$_GET['id'],
			$results->emailHeadline,
			"Headline", 
			"emailHeadline",
			"Headline for Your Optin Box"
		);
		display_field( 
			$_GET['id'],
			$results->emailSubHeadline,
			"Sub-Headline", 
			"emailSubHeadline",
			"Sub Headline for Your Optin Box"
		);
		display_field( 
			$_GET['id'],
			$results->emailText,
			"More Text", 
			"emailText",
			"Text shown for the Buy Now Box"
		);
		display_field( 
			$_GET['id'],
			$results->emailButton,
			"Button Text", 
			"emailButton",
			"Email Button Text for Optin Box"
		);
		
		display_field( 
			$_GET['id'],
			$results->emailURL,
			"Buy Now URL", 
			"emailURL",
			"Link for Your Buy Now Button"
		);
		display_field_image( 
			$_GET['id'],
			$results->emailImage2,
			"Image Below Button", 
			"emailImage2",
			"Image for Below Your Submit / Buy Now Button"
		);
		display_option( 
			$_GET['id'],
			$results->emailButtonColor,
			"Submit Button Color", 
			"emailButtonColor",
			"{4:Help Text Here}",
			"Gray [default], Green [success], Blue [primary], Light Blue [info], Red [danger], Orange [warning]"
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