<div class="tabber" id="tab4" style="display: none;">

	<div class="titleBar">
		<h2>Content Settings:</h2>
		<p>Customize the content to appear on your landing page...</p>
	</div>

	<?php

		display_option( 
			$_GET['id'],
			$results->hidePage,
			"Hide Content", 
			"hidePage",
			"Hide all content and show only optin",
			"Show [show], Hide [hide]"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Main Content</h2>
		";

		display_field( 
			$_GET['id'],
			$results->contentHeadline,
			"Content Headline", 
			"contentHeadline",
			"Big bold headline to grab attention!"
		);
		display_field( 
			$_GET['id'],
			$results->contentSubHeadline,
			"Content Sub-Headline", 
			"contentSubHeadline",
			"Create interest in your targeted sub-headline"
		);
		display_wpeditor( 
			$_GET['id'],
			$results->mainContent,
			"Main Content", 
			"mainContent",
			"The main content to appear next to the sidebar"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->secondaryContent,
			"Secondary Content", 
			"secondaryContent",
			"The appear below both columns under the sidebar and content"
		);
echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Sidebar Content</h2>
		";

		display_wpeditor( 
			$_GET['id'],
			$results->sidebarContent,
			"Sidebar Content", 
			"sidebarContent",
			"Shown above optin in the sidebar"
		);

		display_field_image( 
			$_GET['id'],
			$results->sidebarImage,
			"Sidebar Image", 
			"sidebarImage",
			"Image shown in the sidebar"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Footer Content</h2>
		";


		display_wpeditor( 
			$_GET['id'],
			$results->footerContent,
			"Footer Content", 
			"footerContent",
			"The main content to appear as the footer"
		);

		display_field_image( 
			$_GET['id'],
			$results->footerLogo,
			"Footer Logo Image", 
			"footerLogo",
			"The footer logo"
		);

	?>

</div>