<div class="tabber" id="tab3" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-question-circle" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Header Settings</strong></h2>
		<p>Change the Logo and Headline Settings</p>
	</div>
	<?php
		display_field_image( 
			$_GET['id'],
			$results->logo,
			"Logo Image", 
			"logo",
			"Add Your Logo Image"
		);
		display_field( 
			$_GET['id'],
			$results->mainHeadline,
			"Main Headline", 
			"mainHeadline",
			"HTML Allowed"
		);
		display_field( 
			$_GET['id'],
			$results->mainSubHeadline,
			"Sub Headline", 
			"mainSubHeadline",
			"HTML Allowed"
		);
		display_textarea( 
		$_GET['id'],
		$results->video,
		"Video Embed Code", 
		"video",
		"Embed Code for Video"
	);
	?>
</div>