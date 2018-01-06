<div class="tabber" id="tab7" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-gear" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Content</strong></h2>
		<p>Write Your Page Content</p>
	</div>
	<?php
		// Add Your Options Here
	display_wpeditorFull( 
		$_GET['id'],
		$results->content,
		"Content", 
		"content",
		"Write Your Main Content Below Header"
	);
	?>
	<h3>Benefit Icons / Text</h3>
	<?php 
	display_option( 
		$_GET['id'],
		$results->benefitShow,
		"Show Benefit Content", 
		"benefitShow",
		"Choose To Show or Hide Benefit Content",
		"Hide Benefit Content [], Show Benefit Content [show]"
	);
	display_color( 
		$_GET['id'],
		$results->benefitColor,
		"Benefit Icon Color", 
		"benefitColor",
		"Color for Benefit Icons"
	);
	 ?>
	 <h3>Benefit Item #1</h3>
	 <?php 
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit1Icon,
	 	"Icon", 
	 	"benefit1Icon",
	 	"Font Awesome Icon HTML"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit1Headline,
	 	"Benefit Headline", 
	 	"benefit1Headline",
	 	"Headline for Benefit"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit1Text,
	 	"Benefit Text", 
	 	"benefit1Text",
	 	"Text for Benefit"
	 );
	  ?>
	  <h3>Benefit Item #2</h3>
	 <?php 
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit2Icon,
	 	"Icon", 
	 	"benefit2Icon",
	 	"Font Awesome Icon HTML"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit2Headline,
	 	"Benefit Headline", 
	 	"benefit2Headline",
	 	"Headline for Benefit"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit2Text,
	 	"Benefit Text", 
	 	"benefit2Text",
	 	"Text for Benefit"
	 );
	  ?>
	  <h3>Benefit Item #3</h3>
	 <?php 
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit3Icon,
	 	"Icon", 
	 	"benefit3Icon",
	 	"Font Awesome Icon HTML"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit3Headline,
	 	"Benefit Headline", 
	 	"benefit3Headline",
	 	"Headline for Benefit"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit3Text,
	 	"Benefit Text", 
	 	"benefit3Text",
	 	"Text for Benefit"
	 );
	  ?>
	  <h3>Benefit Item #4</h3>
	 <?php 
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit4Icon,
	 	"Icon", 
	 	"benefit4Icon",
	 	"Font Awesome Icon HTML"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit4Headline,
	 	"Benefit Headline", 
	 	"benefit4Headline",
	 	"Headline for Benefit"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit4Text,
	 	"Benefit Text", 
	 	"benefit4Text",
	 	"Text for Benefit"
	 );
	  ?>
	  <h3>Benefit Item #5</h3>
	 <?php 
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit5Icon,
	 	"Icon", 
	 	"benefit5Icon",
	 	"Font Awesome Icon HTML"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit5Headline,
	 	"Benefit Headline", 
	 	"benefit5Headline",
	 	"Headline for Benefit"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit5Text,
	 	"Benefit Text", 
	 	"benefit5Text",
	 	"Text for Benefit"
	 );
	  ?>
	  <h3>Benefit Item #6</h3>
	 <?php 
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit6Icon,
	 	"Icon", 
	 	"benefit6Icon",
	 	"Font Awesome Icon HTML"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit6Headline,
	 	"Benefit Headline", 
	 	"benefit6Headline",
	 	"Headline for Benefit"
	 );
	 display_field( 
	 	$_GET['id'],
	 	$results->benefit6Text,
	 	"Benefit Text", 
	 	"benefit6Text",
	 	"Text for Benefit"
	 );
	  ?>
</div>