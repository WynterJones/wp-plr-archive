<div class="tabber" id="tab4" style="display: none;">

	<div class="titleBar">
		<h2>Content Settings:</h2>
		<p>Customize the content to appear on your landing page...</p>
	</div>

	<?php

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Add a Video To Fade In</h2>
		";
		display_textarea( 
				$_GET['id'],
				$results->embed,
				"Video Embed Code", 
				"embed",
				"Embed a video to be displayed"
			);	
echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Add Content to Fade in On Scroll</h2>
		";

		display_wpeditor( 
			$_GET['id'],
			$results->content1,
			"Content Area #1", 
			"content1",
			"Fade in when user scrolls to view it"
		);
		display_wpeditor( 
			$_GET['id'],
			$results->content2,
			"Content Area #2", 
			"content2",
			"Fade in when user scrolls to view it"
		);
		display_wpeditor( 
			$_GET['id'],
			$results->content3,
			"Content Area #3", 
			"content3",
			"Fade in when user scrolls to view it"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Add Footer to Fade in On Scroll</h2>
		";

		display_wpeditor( 
			$_GET['id'],
			$results->footer,
			"Footer Content", 
			"footer",
			"Fade in when user scrolls to view it"
		);
	?>

</div>