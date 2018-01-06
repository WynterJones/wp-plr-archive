<div class="tabber" id="tab5" style="display: none;">

	<div class="titleBar shortcode_icon">
		<a href="http://www.wpaffiliatepress.com/help/AffiliatePress-optin.pdf" target="_blank" ><span style="float: right; margin-top: 13px; margin-right: -23px" id="helpPDF" class="grey-btn" ><img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/pdf.png" style="margin-right: 5px; margin-bottom: -3px">Optin Tutorial PDF</span></a>
		<h2>Auto-Responder Settings:</h2>
		<p>Here you can add an auto-responder to your page...</p>
	</div>

	<?php

	display_option( 
		$_GET['id'],
		$results->showOptin,
		"Show / Hide Optin", 
		"showOptin",
		"Choose whether to show or hide the auto-responder",
		"Hide [1], Show [2]"
	);

	display_field( 
		$_GET['id'],
		$results->optinHeadline,
		"Optin Headline", 
		"optinHeadline",
		"The headline for the optin box"
	);

	display_field( 
		$_GET['id'],
		$results->optinSubHeadline,
		"Optin Sub-Headline", 
		"optinSubHeadline",
		"The sub-headline for the optin box"
	);

	display_field( 
		$_GET['id'],
		$results->spam,
		"Spam Text", 
		"spam",
		"Shown with lock icon for spam warning"
	);

	display_field( 
		$_GET['id'],
		$results->optinButton,
		"Optin Button Text", 
		"optinButton",
		"Email optin submit button text"
	);

	display_textarea( 
		$_GET['id'],
		$results->autoresponder,
		"Auto-Responder Form Code", 
		"autoresponder",
		"The HTML form code for your auto-responder"
	);

	?>

	
<div style="padding-top: 15px; margin-top: 15px; ">
		<span style="margin: 10px 0; float: left; padding-left: 10px; color: #888">
			<img src="https://cdn3.iconfinder.com/data/icons/uidesignicons/information.png" style="float: left; margin-right: 7px">
			Need help? Check out the PDF tutorials at the top right of each page.
		</span>
		
		<br clear="right" />
	</div>

</div>