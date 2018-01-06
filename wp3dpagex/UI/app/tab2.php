<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar">
		<h2>Featured Images Boxes</h2>
		<p>Customize the content for the featured images:</p>
	</div>



	<?php

		
echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Main Headline</h2>
		";

display_field( 
			$_GET['id'],
			$results->mainHeadline2,
			"Main Headline", 
			"mainHeadline2",
			"Shown at the very top of the landing page."
		);

		

	

		display_field( 
			$_GET['id'],
			$results->subHeadline2,
			"Sub Headline", 
			"subHeadline2",
			"Show at the very top of the landing page."
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Featured Image Box #1</h2>
		";

		display_field_image( 
			$_GET['id'],
			$results->featuredImage1,
			"Featured Image", 
			"featuredImage1",
			"Image for the featured image box"
		);

		display_field( 
			$_GET['id'],
			$results->featuredHeadline1,
			"Headline", 
			"featuredHeadline1",
			"Headline for the featured image box"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->featuredContent1,
			"Featured Content", 
			"featuredContent1",
			"Content for the featured image box"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Featured Image Box #2</h2>
		";

		display_field_image( 
			$_GET['id'],
			$results->featuredImage2,
			"Featured Image", 
			"featuredImage2",
			"Image for the featured image box"
		);

		display_field( 
			$_GET['id'],
			$results->featuredHeadline2,
			"Headline", 
			"featuredHeadline2",
			"Headline for the featured image box"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->featuredContent2,
			"Featured Content", 
			"featuredContent2",
			"Content for the featured image box"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Featured Image Box #3</h2>
		";

		display_field_image( 
			$_GET['id'],
			$results->featuredImage3,
			"Featured Image", 
			"featuredImage3",
			"Image for the featured image box"
		);

		display_field( 
			$_GET['id'],
			$results->featuredHeadline3,
			"Headline", 
			"featuredHeadline3",
			"Headline for the featured image box"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->featuredContent3,
			"Featured Content", 
			"featuredContent3",
			"Content for the featured image box"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Featured Image Box #4</h2>
		";

		display_field_image( 
			$_GET['id'],
			$results->featuredImage4,
			"Featured Image", 
			"featuredImage4",
			"Image for the featured image box"
		);

		display_field( 
			$_GET['id'],
			$results->featuredHeadline4,
			"Headline", 
			"featuredHeadline4",
			"Headline for the featured image box"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->featuredContent4,
			"Featured Content", 
			"featuredContent4",
			"Content for the featured image box"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Featured Image Box #5</h2>
		";

		display_field_image( 
			$_GET['id'],
			$results->featuredImage5,
			"Featured Image", 
			"featuredImage5",
			"Image for the featured image box"
		);

		display_field( 
			$_GET['id'],
			$results->featuredHeadline5,
			"Headline", 
			"featuredHeadline5",
			"Headline for the featured image box"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->featuredContent5,
			"Featured Content", 
			"featuredContent5",
			"Content for the featured image box"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Featured Image Box #6</h2>
		";

		display_field_image( 
			$_GET['id'],
			$results->featuredImage6,
			"Featured Image", 
			"featuredImage6",
			"Image for the featured image box"
		);

		display_field( 
			$_GET['id'],
			$results->featuredHeadline6,
			"Headline", 
			"featuredHeadline6",
			"Headline for the featured image box"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->featuredContent6,
			"Featured Content", 
			"featuredContent6",
			"Content for the featured image box"
		);

		

	?>


</div>