<div class="tabber" id="tab2" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-globe" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>SEO Page Settings</strong></h2>
		<p>Edit the Search Engine options for your page to rank. Title and Description used for Social Share Text **</p>
	</div>
	<?php
		display_field( 
			$_GET['id'],
			$results->title,
			"Title / Social Title", 
			"title",
			"Shown in Title and Browser Title"
		);
		display_field( 
			$_GET['id'],
			$results->desc,
			"META / Social Description", 
			"desc",
			"Shown for your search results"
		);
		display_field( 
			$_GET['id'],
			$results->favicon,
			"Favicon PNG", 
			"favicon",
			"URL to your 16 by 16 PNG Icon"
		);
		display_textarea( 
			$_GET['id'],
			$results->tracking,
			"Tracking Code", 
			"tracking",
			"Tracking Code for Google Analytics, etc"
		);
	?>
</div>