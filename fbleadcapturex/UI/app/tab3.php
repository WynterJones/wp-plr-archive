<div class="tabber" id="tab3" style="display: none;">

	<div class="titleBar">
		<h2>Design Settings</h2>
		<p>Customize the look and fonts for your landing page..</p>
	</div>

	<?php

	echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Background Color</h2>
		";

		display_option_img( 
			$_GET['id'],
			$results->background,
			"Background Style", 
			"background",
			"Choose color for call-to-action buttons",
			"https://cdn1.iconfinder.com/data/icons/developperss/PNG/Green%20Ball.png [1], 
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Orange%20Ball.png [2],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Blue%20Ball.png [3],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Red%20Ball.png [4],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Grey%20Ball.png [5],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Purple%20Ball.png [6]"
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

		display_option( 
			$_GET['id'],
			$results->paragraph,
			"Content Font", 
			"paragraph",
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

		display_option_img( 
			$_GET['id'],
			$results->buttonBG,
			"CTA Button Color", 
			"buttonBG",
			"Choose color for call-to-action buttons",
			"https://cdn1.iconfinder.com/data/icons/developperss/PNG/Green%20Ball.png [1], 
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Orange%20Ball.png [2],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Blue%20Ball.png [3],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Red%20Ball.png [4],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Grey%20Ball.png [5],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Purple%20Ball.png [6]"
		);

		display_option_img( 
			$_GET['id'],
			$results->buttonBG2,
			"Sign Up Button Color", 
			"buttonBG2",
			"Choose color for call-to-action buttons",
			"https://cdn1.iconfinder.com/data/icons/developperss/PNG/Green%20Ball.png [1], 
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Orange%20Ball.png [2],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Blue%20Ball.png [3],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Red%20Ball.png [4],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Grey%20Ball.png [5],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Purple%20Ball.png [6]"
		);

		

	?>

</div>