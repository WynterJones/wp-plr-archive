<div class="tabber" id="tab4" style="display: none;">

	<div class="titleBar">
		<h2>Design Settings</h2>
		<p>Add Your Background Images</p>
	</div>

	<?php

	
		// Add Your Options Here
		

		display_field_image( 
			$_GET['id'],
			$results->bgImage1,
			"Your Background Image", 
			"bgImage1",
			"Your Background Image"
		);
		

	?>

</div>