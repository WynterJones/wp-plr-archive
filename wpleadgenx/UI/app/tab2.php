<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar">
		<h2>Header Slider</h2>
		<p>Customize the top sliding image showcase for your landing page:</p>
	</div>



	<?php

		
echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Header Slider Images</h2>
		";


		display_field_image( 
			$_GET['id'],
			$results->slider1,
			"Slider Image #1", 
			"slider1",
			"WIll be shown in the header slider"
		);

		display_field_image( 
			$_GET['id'],
			$results->slider2,
			"Slider Image #2", 
			"slider2",
			"WIll be shown in the header slider"
		);

		display_field_image( 
			$_GET['id'],
			$results->slider3,
			"Slider Image #3", 
			"slider3",
			"WIll be shown in the header slider"
		);

		display_field_image( 
			$_GET['id'],
			$results->slider4,
			"Slider Image #4", 
			"slider4",
			"WIll be shown in the header slider"
		);

		display_field_image( 
			$_GET['id'],
			$results->slider5,
			"Slider Image #5", 
			"slider5",
			"WIll be shown in the header slider"
		);

		

	?>


</div>