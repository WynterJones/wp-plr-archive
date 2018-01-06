<div class="tabber" id="tab3" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-question-circle" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Design Settings</strong></h2>
		<p>Customize All The Design Options for Your T-Shirt Contest</p>
	</div>
	<?php
		display_field_image( 
			$_GET['id'],
			$results->logo,
			"Logo Image", 
			"logo",
			"Max Width 350px"
		);
		display_field_image( 
			$_GET['id'],
			$results->banner,
			"Banner Image", 
			"banner",
			"Automatically resized to 100% width"
		);
		display_field_image( 
			$_GET['id'],
			$results->background,
			"Background Image", 
			"background",
			"Full width scaling background image"
		);
		display_color( 
			$_GET['id'],
			$results->bgColor,
			"Background Color", 
			"bgColor",
			"Choose background for overlay of bg image"
		);
		display_field( 
			$_GET['id'],
			$results->bgOverlay,
			"Background Image Transparency", 
			"bgOverlay",
			"From 1 to 0 ex. .5 is 50% Overlay"
		);
		?>
	<h2 style="font-weight: bold; padding: 10px;">Header Settings</h2>
	 <hr>
		<?php
		display_option( 
			$_GET['id'],
			$results->headerStyle,
			"Header Style", 
			"headerStyle",
			"Choose the style of header",
			"None [none], Full Width [wide], Container Width [container]"
		);
		display_color( 
			$_GET['id'],
			$results->headerColor,
			"Header Color", 
			"headerColor",
			"Choose color for the header area"
		);
		display_field( 
			$_GET['id'],
			$results->headerOverlay,
			"Header Transparency", 
			"headerOverlay",
			"From 1 to 0 ex. .5 is 50% Overlay"
		);
	?>
	<h2 style="font-weight: bold; padding: 10px;">Ribbon Settings</h2>
	 <hr>
	 <?php 
	 	display_option( 
	 		$_GET['id'],
	 		$results->ribbon,
	 		"Show / Hide Ribbon", 
	 		"ribbon",
	 		"Show or Hide Ribbon with Headline",
	 		"Hide [hide], Show [show]"
	 	);
	 	display_field( 
			$_GET['id'],
			$results->ribbonHeadline,
			"Ribbon Headline", 
			"ribbonHeadline",
			"Text for your ribbon headline"
		);
		display_color( 
			$_GET['id'],
			$results->ribbonBG,
			"Ribbon Background Color", 
			"ribbonBG",
			"Color for your ribbon background color"
		);
		display_color( 
			$_GET['id'],
			$results->ribbonColor,
			"Ribbon Text Color", 
			"ribbonColor",
			"Color for your ribbon headline"
		);
	  ?>
</div>