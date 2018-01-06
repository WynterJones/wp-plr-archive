<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar">
		<h2>Main Settings</h2>
		<p>Change the main content areas on your landing page:</p>
	</div>



	<?php

		
echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Banner Headline (Below Video)</h2>
		";


		display_field( 
			$_GET['id'],
			$results->bannerHeadline,
			"Banner Headline", 
			"bannerHeadline",
			"Shown below the main video."
		);

		display_field( 
			$_GET['id'],
			$results->bannerSubHeadline,
			"Banner SubHeadline", 
			"bannerSubHeadline",
			"Shown below the banner headline and video"
		);


		display_field( 
			$_GET['id'],
			$results->ctaButton,
			"First Button Text", 
			"ctaButton",
			"First Button Text Before Optin Box"
		);


		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Main Content</h2>
		";

		

		

		display_wpeditor( 
			$_GET['id'],
			$results->mainContent,
			"Main Content", 
			"mainContent",
			"Main content shown beside sidebar"
		);


		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Sidebar Content</h2>
		";

		display_field( 
			$_GET['id'],
			$results->sidebarHeadline,
			"Sidebar Headline", 
			"sidebarHeadline",
			"Sidebar headline shown with bold background"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->sidebar,
			"Sidebar Content", 
			"sidebar",
			"Shown below the sidebar headline"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Footer</h2>
		";

		display_wpeditor( 
			$_GET['id'],
			$results->footer,
			"Footer Text", 
			"footer",
			"Shown at the very bottom of page"
		);

		

	?>


</div>