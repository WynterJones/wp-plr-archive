<div class="tabber" id="tab5" style="display: none;">

	<div class="titleBar">
		<h2>Customize Design:</h2>
		<p>Choose the font typography, custom background and upload your logo...</p>
	</div>

	<?php

	
echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Customize Your Page Design</h2>
		";

			display_field_image( 
			$_GET['id'],
			$results->logoImage,
			"Logo Image", 
			"logoImage",
			"Shown at the top of the page"
		);
		display_field_image( 
			$_GET['id'],
			$results->optinBG,
			"Full Background", 
			"optinBG",
			"Background for your landing page - auto stretches"
		);

		display_color( 
			$_GET['id'],
			$results->shadowColor,
			"Shadow Color", 
			"shadowColor",
			"Help Text"
		);

		display_option( 
			$_GET['id'],
			$results->overlay,
			"Container Overlay BG", 
			"overlay",
			"Choose whether to show a overlay background or not",
			"Light [light], Dark [dark], None [none]"
		);
		display_option( 
			$_GET['id'],
			$results->textColor,
			"Text Color", 
			"textColor",
			"Choose white or black text.",
			"White [white], Black [black]"
		);

		display_option( 
			$_GET['id'],
			$results->effect,
			"Input Animation Effect", 
			"effect",
			"Choose whether to show a overlay background or not",
			"Effect1 [1], Effect2 [2], Effect3 [3], Effect4 [4], Effect5 [5]"
		);
		
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


	

	?>

</div>