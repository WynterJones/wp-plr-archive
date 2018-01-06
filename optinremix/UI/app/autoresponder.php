<div class="tabber" id="autoresponder" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-envelope" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Email Auto Responder Settings</strong></h2>
		<p>Collect leads with your page by adding in your HTML form code.</p>
	</div>
	<?php		
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
