<div class="tabber" id="tab3" style="display: none;">

	<div class="titleBar">
		<h2>Prcing + Countdown + Social Settings</h2>
		<p>Add extra features to your landing page to increase conversations...</p>
	</div>

	<?php

	echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Pricing Settings</h2>
		";

		display_field( 
			$_GET['id'],
			$results->price,
			"Price", 
			"price",
			"The price of your product"
		);

		display_field( 
			$_GET['id'],
			$results->discount,
			"Discounted Price", 
			"discount",
			"The discount they are getting"
		);

		display_field( 
			$_GET['id'],
			$results->buyText,
			"Buy Button Text", 
			"buyText",
			"The text for the CTA button"
		);

		display_field( 
			$_GET['id'],
			$results->buyLink,
			"URL for Button", 
			"buyLink",
			"The website you want to send traffic too"
		);

echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Countdown Settings</h2>
		";

		display_date( 
			$_GET['id'],
			$results->countdown,
			"Close Offer Date", 
			"countdown",
			"The time to hide to disable the offer"
		);

		display_field( 
			$_GET['id'],
			$results->closedText,
			"Closed Offer Text", 
			"closedText",
			"When the countdown is over"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Social Settings</h2>
		";
		display_field( 
			$_GET['id'],
			$results->socialText,
			"Social Text", 
			"socialText",
			"The text to share with link to the page"
		);

		display_option( 
			$_GET['id'],
			$results->socialStyle,
			"Social Button Style", 
			"socialStyle",
			"The style of the social links",
			"Classic [social-likes_classic], Colorful [social-likes_flat], Plain [social-likes_birman]"
		);

	?>

</div>