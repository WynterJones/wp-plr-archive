<div class="tabber" id="tab5" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-facebook" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Social Contest Settings</strong></h2>
		<p>Control the main social settings for your contest page</p>
	</div>
	<?php
		// Add Your Options Here
	display_field_image( 
			$_GET['id'],
			$results->tshirt,
			"T-Shirt Image", 
			"tshirt",
			"Image of Your TeeSpring T-shirt"
		);
	display_field_image( 
			$_GET['id'],
			$results->tshirt2,
			"2nd T-Shirt Image", 
			"tshirt2",
			"Image of Your TeeSpring T-shirt"
		);
	display_field( 
		$_GET['id'],
		$results->imageSliderHeadline,
		"Image Slider Headline", 
		"imageSliderHeadline",
		"Headline for Image Slider"
	);
	display_option( 
		$_GET['id'],
		$results->showStars,
		"Show Rating Stars", 
		"showStars",
		"{4:Help Text Here}",
		"Hide [], Show Solid [solid], Show Outline [outline]"
	);
	display_color( 
		$_GET['id'],
		$results->starColor,
		"Rating Star Color", 
		"starColor",
		"Color for the Rating Stars"
	);
	display_option( 
		$_GET['id'],
		$results->socialTheme,
		"Social Icon Theme", 
		"socialTheme",
		"Choose the theme for your social share icons",
		"Circle [icon], Square [square]"
	);
	display_option( 
		$_GET['id'],
		$results->popupShow,
		"Popup on Mouse Leave", 
		"popupShow",
		"Choose to show the social popup when mouse leaves window - ONLY SHOWN ONCE",
		"No [no], Yes [yes]"
	);
		?>
	
	<h2 style="font-weight: bold; padding: 10px;">Tab Settings</h2>
	<hr>
	<?php
	display_field( 
		$_GET['id'],
		$results->signup,
		"Sign Up Text", 
		"signup",
		"Text for the Signup Box"
	);
	display_field( 
		$_GET['id'],
		$results->likeShare,
		"Like &amp; Share", 
		"likeShare",
		"Like and Share Text"
	);
	display_field( 
		$_GET['id'],
		$results->chancetoWin,
		"Chance to Win", 
		"chancetoWin",
		"Chance to Win Text"
	);
	?>
	<h2 style="font-weight: bold; padding: 10px;">Popup Settings</h2>
	<hr>
	<?php  
		display_field( 
			$_GET['id'],
			$results->popupHeadline,
			"Popup Headline", 
			"popupHeadline",
			"Text for the main Popup Headline"
		);
		display_field( 
			$_GET['id'],
			$results->popupSubHeadline,
			"Popup Sub Headline", 
			"popupSubHeadline",
			"Text for the Popup Sub Headline"
		);
		display_field( 
			$_GET['id'],
			$results->popupByline,
			"Popup Text", 
			"popupByline",
			"Text for above your t-shirt image"
		);
	?>
</div>