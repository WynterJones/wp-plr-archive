<div class="tabber" id="tab4" style="display: none;">
<div class="titleBar content_icon">
		<a href="http://www.wpaffiliatepress.com/help/AffiliatePress-content.pdf" target="_blank" ><span style="float: right; margin-top: 13px; margin-right: -23px" id="helpPDF" class="grey-btn" ><img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/pdf.png" style="margin-right: 5px; margin-bottom: -3px">Content Tutorial PDF</span></a>
		<h2>Content Settings:</h2>
		<p>Add your own custom content to the main page of your landing page...</p>
	</div>
<div id="sidebar_tab" class="tabby" style="display: none">


	<div class="tabBlock" id="affiliate_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Sidebar Content</h1>
			<h3 style="font-weight: normal">Edit the sidebar settings..</h3>
		</div>
	<?php

		display_field( 
			$_GET['id'],
			$results->bannerSmall,
			"Banner Ad Image", 
			"bannerSmall",
			"Banner ad shown at the top of sidebar - linked with affiliate link"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->sidebarContent,
			"Sidebar Content", 
			"sidebarContent",
			"Add your own sidebar content here above smaller countdown box"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->sidebarContent2,
			"Below Countdown Content", 
			"sidebarContent2",
			"Add your own sidebar content here below smaller countdown box"
		);

		?>
</div>
<div id="content_tab" class="tabby" style="display: none">
	
<div class="tabBlock">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Main Content Settings</h1>
			<h3 style="font-weight: normal">Edit the main content box settings..</h3>
		</div>


	<?php

		display_field( 
			$_GET['id'],
			$results->contentReplace,
			"Replace with Image", 
			"contentReplace",
			"Replace Content, Sidebar and Footer with One Image"
		);

		display_wpeditor( 
			$_GET['id'],
			$results->content,
			"Main Content", 
			"content",
			"Shown in the main content box"
		);

	?>
</div>


<div id="footer_tab" class="tabby" style="display: none">
	
<div class="tabBlock">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Footer Content</h1>
			<h3 style="font-weight: normal">Edit the bottom footer content..</h3>
		</div>


	<?php

		display_wpeditor( 
			$_GET['id'],
			$results->footer,
			"Footer Content", 
			"footer",
			"Content that will appear bottom left of page"
		);

	?>
</div>
	
<div style="padding-top: 15px; margin-top: 15px; ">
		<span style="margin: 10px 0; float: left; padding-left: 10px; color: #888">
			<img src="https://cdn3.iconfinder.com/data/icons/uidesignicons/information.png" style="float: left; margin-right: 7px">
			Need help? Check out the PDF tutorials at the top right of each page.
		</span>
		
		<br clear="right" />
	</div>

</div>