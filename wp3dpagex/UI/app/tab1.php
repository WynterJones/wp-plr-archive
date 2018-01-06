<div class="tabber" id="tab1">

	<div class="titleBar">
		<h2>Main Settings</h2>
		<p>Here you can change the main settings of your page...</p>
	</div>

	
<?php 




echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #5b6d7b; font-weight: bold;'>Customize Headline</h2>
		";
		display_field( 
			$_GET['id'],
			$results->mainHeadline,
			"Main Headline", 
			"mainHeadline",
			"Shown at the very top of the landing page."
		);

		

	

		display_field( 
			$_GET['id'],
			$results->subHeadline,
			"Sub Headline", 
			"subHeadline",
			"Show at the very top of the landing page."
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
			$results->namePlaceholder,
			"Name Placeholder", 
			"namePlaceholder",
			"The text to display as placeholder text"
		);

		display_field( 
			$_GET['id'],
			$results->emailPlaceholder,
			"Name Placeholder", 
			"emailPlaceholder",
			"The text to display as placeholder text"
		);


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



		 ?>

	<div style="border-top: 1px dotted #e2e2e2; padding-top: 15px; margin-top: 25px; ">
		<span style="float: left;" id="deleteCampaign" class="grey-btn" ><strong>Delete</strong></span>
		<br clear="left" />
	</div>



</div>