<div class="tabber" id="tab5" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-money" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Call to Action</strong></h2>
		<p>Add a Order / Link Button to Your Video</p>
	</div>
	<?php
		// Add Your Options Here
	display_field( 
		$_GET['id'],
		$results->ctatime,
		"Time (seconds)", 
		"ctatime",
		"Time to show CTA button popup (ex. 4)"
	);
	display_field( 
		$_GET['id'],
		$results->ctaheadline,
		"CTA Headline", 
		"ctaheadline",
		"Call to Action Headline"
	);
	display_field( 
		$_GET['id'],
		$results->ctabutton,
		"CTA Button", 
		"ctabutton",
		"Text for the CTA Button"
	);
	display_field( 
		$_GET['id'],
		$results->ctalink,
		"CTA Link", 
		"ctalink",
		"http://yourblog.com/salespage"
	);
	display_option( 
		$_GET['id'],
		$results->ctadesign,
		"Button Color", 
		"ctadesign",
		"Change button color.",
		"Grey [default], Blue [primary], Light Blue [info], Red [warning], Orange [warning], Green [success]"
	);
	display_option( 
		$_GET['id'],
		$results->ctaposition,
		"Popup Position", 
		"ctaposition",
		"Choose the Position of Popup",
		"Left [popup_left], Right [popup_right], Bottom [popup_bottom], Top [popup_top]"
	);
	?>
</div>