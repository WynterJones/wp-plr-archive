<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar">
		<h2>Main Settings</h2>
		<p>Change the main content areas on your landing page:</p>
	</div>

	

	<?php

		

		display_textarea( 
			$_GET['id'],
			$results->videoBox,
			"Video Embed Code", 
			"videoBox",
			"Video iframe or embed code"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->mainContent,
			"Main Content", 
			"mainContent",
			"Content for the main content block"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->footer,
			"Footer Content", 
			"footer",
			"Content for the footer block"
		);


		

display_field_image( 
			$_GET['id'],
			$results->content1Image,
			"Box 1 Image", 
			"content1Image",
			"This will replace the below headlines. Max height: 185px;"
		);

		

		
			
		

		
			display_wpeditor( 
			$_GET['id'],
			$results->content1Body,
			"First Content Body", 
			"content1Body",
			"Content for first box."
		);

// FIRST CONTENT END//


		

			display_field_image( 
			$_GET['id'],
			$results->content2Image,
			"Box 2 Image", 
			"content2Image",
			"This will replace the below headlines. Max height: 185px;"
		);

		
			

		
			display_wpeditor( 
			$_GET['id'],
			$results->content2Body,
			"Second Content Body", 
			"content2Body",
			"Content body for second box."
		);


			display_field_image( 
			$_GET['id'],
			$results->content3Image,
			"Box 3 Image", 
			"content3Image",
			"This will replace the below headlines. Max height: 185px;"
		);

		

		
			

		

		
			display_wpeditor( 
			$_GET['id'],
			$results->content3Body,
			"Third Content Body", 
			"content3Body",
			"Content for third box"
		);



		

	?>


</div>