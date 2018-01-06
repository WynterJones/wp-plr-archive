<div class="tabber" id="tab5" style="display: none;">

	<div class="titleBar">
		<h2>Customize Design:</h2>
		<p>Choose the font typography and the color of CTA and optin buttons...</p>
	</div>

	<?php

	

		
	echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Typography Font</h2>
		";

		display_option( 
			$_GET['id'],
			$results->typography,
			"Main Font", 
			"typography",
			"Choose the Font for your landing page",
			"Oswald [1], 
			Droid Sans [2],
			Lato [3],
			Lora [4],
			Pompiere [5],
			Patrick Hand [6],
			Maiden Orange [7],
			PT Sans Narrow [8],
			Rokkitt [9],
			Droid Serif [11],
			Open Sans Condensed [12],
			Bree Serif [13],
			Special Elite [14],
			Lobster Two [15]
			"
		);


	echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Button Colors</h2>
		";

		display_option( 
			$_GET['id'],
			$results->optinButtonColor,
			"Optin Button Color", 
			"optinButtonColor",
			"Choose the color of all the optin buttons",
			"Grey [default], Orange [warning],  Blue [primary], Green [success], Dark Green [secondary], Black [info]"
		);

		display_option( 
			$_GET['id'],
			$results->ctaButtonColor,
			"CTA Button Color", 
			"ctaButtonColor",
			"Choose the color of all the cta buttons",
			"Grey [default], Orange [warning], Blue [primary], Green [success], Dark Green [secondary], Black [info]"
		);

	?>

</div>