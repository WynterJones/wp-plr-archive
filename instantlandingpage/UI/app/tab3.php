<div class="tabber" id="tab3" style="display: none;">

	<div class="titleBar">
		<h2>Content Settings</h2>
		<p>Add Your Content</p>
	</div>

	<?php

	
		// Add Your Options Here

		display_field( 
			$_GET['id'],
			$results->headline,
			"Main Headline", 
			"headline",
			"Add Your Headline"
		);
		
		display_field( 
			$_GET['id'],
			$results->subheadline,
			"Sub Headline", 
			"subheadline",
			"Add Your Sub Headline"
		);

		display_textarea( 
			$_GET['id'],
			$results->video,
			"Video Embed Code", 
			"video",
			"Your Video Code"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->sidebar,
			"Sidebar Content", 
			"sidebar",
			"Add Your Sidebar Content"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->footer,
			"Footer Content", 
			"footer",
			"Add Your Footer Content"
		);

		

	?>

</div>