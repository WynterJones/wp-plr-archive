<div class="tabber" id="tab4" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-pencil" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Edit Content</strong></h2>
		<p>Add All The Content for Your Contest Page</p>
	</div>
	<?php
		// Add Your Options Here
	display_field( 
		$_GET['id'],
		$results->mainHeadline,
		"Main Headline", 
		"mainHeadline",
		"Your main headline for contest page"
	);
	display_color( 
		$_GET['id'],
		$results->headlineColor,
		"Headline Color", 
		"headlineColor",
		"Color of the Headline Text"
	);
	display_field( 
		$_GET['id'],
		$results->subHeadline,
		"Sub Headline", 
		"subHeadline",
		"Your sub headline for contest page"
	);
	display_field( 
		$_GET['id'],
		$results->byline,
		"Contest Text", 
		"byline",
		"Text below your headline for contest page"
	);
	?>
	<h2 style="font-weight: bold; padding: 10px;">Reserve Your Spot Content</h2>
	<hr>
	<?php 
	display_field( 
		$_GET['id'],
		$results->spotHeadline,
		"Order Now Headline", 
		"spotHeadline",
		"Headline below your contest details"
	);
	display_field( 
		$_GET['id'],
		$results->spotSubHeadline,
		"Order Now Sub Headline", 
		"spotSubHeadline",
		"Sub Headline for your contest details"
	);
	display_field( 
		$_GET['id'],
		$results->spotLink,
		"Order Now URL Link", 
		"spotLink",
		"Link to your TeeSpring Page"
	);
	display_field( 
		$_GET['id'],
		$results->spotButton,
		"Order Now Button Text", 
		"spotButton",
		"Text for your Order Now Button"
	);
	display_option( 
			$_GET['id'],
			$results->buttonColor,
			"Button Button Color", 
			"buttonColor",
			"Choose the button color for your button",
			"Grey [default], Blue [primary], Light Blue [info], Green [success], Red [danger], Orange [warning]"
		);
	 ?>
	 <h2 style="font-weight: bold; padding: 10px;">'Below The Fold' Content</h2>
	<hr>
	<?php 
	display_option( 
		$_GET['id'],
		$results->showContent,
		"Show / Hide Content", 
		"showContent",
		"Choose whether to show or hide main content",
		"Hide [hide], Show [show]"
	);
	display_wpeditor( 
		$_GET['id'],
		$results->mainContent,
		"Main Content", 
		"mainContent",
		"Add more content to your contest page"
	);
	display_color( 
		$_GET['id'],
		$results->contentBG,
		"Content BG Color", 
		"contentBG",
		"Color for the bottom content background"
	);
	display_color( 
		$_GET['id'],
		$results->contentColor,
		"Content Text Color", 
		"contentColor",
		"Color for the bottom content text"
	);
	display_color( 
		$_GET['id'],
		$results->contentInner,
		"Content Inner Shadow", 
		"contentInner",
		"Color for the content inner shadow"
	);
	display_color( 
		$_GET['id'],
		$results->contentDrop,
		"Content Drop Shadow", 
		"contentDrop",
		"Color for the content drop shadow"
	);
	
	 ?>
	<h2 style="font-weight: bold; padding: 10px;">Footer Content</h2>
	 <hr>
	 <?php 
	 display_wpeditor( 
		$_GET['id'],
		$results->footer,
		"Footer Content", 
		"footer",
		"Add your own footer content"
	);
	 display_color( 
	 	$_GET['id'],
	 	$results->footerTextColor,
	 	"Footer Text Color", 
	 	"footerTextColor",
	 	"Color for your footer text"
	 );
	 	display_option( 
			$_GET['id'],
			$results->footerStyle,
			"footer Style", 
			"footerStyle",
			"Choose the style of Footer",
			"None [none], Full Width [wide], Container Width [container]"
		);
		display_color( 
			$_GET['id'],
			$results->footerColor,
			"Footer Color", 
			"footerColor",
			"Choose color for the Footer area"
		);
		display_field( 
			$_GET['id'],
			$results->footerOverlay,
			"Footer Transparency", 
			"footerOverlay",
			"From 1 to 0 ex. .5 is 50% Overlay"
		);
	  ?>
</div>