<div class="tabber" id="tab4" style="display: none;">

	<div class="titleBar">
		<i class="fa fa-money" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Affiliate Link Settings</strong></h2>
		<p>Add Your Description Here</p>
	</div>

	<?php

	
		// Add Your Options Here
	display_field( 
		$_GET['id'],
		$results->linkHeadline,
		"Main Headline", 
		"linkHeadline",
		"Main Headline"
	);
	display_field( 
		$_GET['id'],
		$results->linkSubHeadline,
		"Sub Headline", 
		"linkSubHeadline",
		"Sub Headline"
	);
	display_field( 
		$_GET['id'],
		$results->linkSmallHeadline,
		"Small Headline", 
		"linkSmallHeadline",
		"Small Headline"
	);
	display_field( 
		$_GET['id'],
		$results->linkURL,
		"Link URL", 
		"linkURL",
		"URL to for Your Affiliate Button"
	);
	display_field( 
		$_GET['id'],
		$results->linkButton,
		"Button Text", 
		"linkButton",
		"Button Text"
	);
		

	?>

</div>