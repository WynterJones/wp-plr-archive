<div class="tabber" id="tab6" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-pencil" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Design</strong></h2>
		<p>Choose Colors for Main Areas</p>
	</div>
	<?php
		// Add Your Options Here
	display_option( 
		$_GET['id'],
		$results->design,
		"Simple White or Custom Colors", 
		"design",
		"Choose to show custom design or plain white.",
		"Show Basic White Colors [], Show Below Custom Colors [custom]"
	);
		display_color( 
			$_GET['id'],
			$results->logoBG,
			"Logo BG Color", 
			"logoBG",
			"Color for Your Top Logo Background"
		);
		display_field_image( 
			$_GET['id'],
			$results->bgImage,
			"Overlay Image", 
			"bgImage",
			"Image to Show as Background"
		);
		display_field( 
			$_GET['id'],
			$results->bgOpacity,
			"Opacity", 
			"bgOpacity",
			"Choose the opacity 1 - 0 ex. .5 for 50% overlay"
		);
		display_color( 
			$_GET['id'],
			$results->headerBG,
			"Header BG Color", 
			"headerBG",
			"Color for Your Header Background"
		);
		display_color( 
			$_GET['id'],
			$results->headerHighlight,
			"Header Highlight Color", 
			"headerHighlight",
			"Color for Your Header Highlighted Text Background"
		);
		display_option( 
			$_GET['id'],
			$results->headerDark,
			"Header Dark / Light Text", 
			"headerDark",
			"If you bg color is dark choose Light Text",
			"Light [], Dark [dark]"
		);?>
<h3>Email / CTA Design</h3>
		<?php
		display_color( 
			$_GET['id'],
			$results->emailBG,
			"Email BG Color", 
			"emailBG",
			"Color for Your Email Background"
		);
		display_option( 
			$_GET['id'],
			$results->emailDark,
			"Email Dark / Light Text", 
			"emailDark",
			"If you bg color is dark choose Light Text",
			"Light [], Dark [dark]"
		);
		display_field_image( 
			$_GET['id'],
			$results->emailImage,
			"Overlay Image", 
			"emailImage",
			"Image to Show as Background"
		);
		display_field( 
			$_GET['id'],
			$results->emailOpacity,
			"Opacity", 
			"emailOpacity",
			"Choose the opacity 1 - 0 ex. .5 for 50% overlay"
		);
	?>
</div>