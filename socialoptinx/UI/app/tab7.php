<div class="tabber" id="tab7" style="display: none;">

	<div class="titleBar">
		<i class="fa fa-globe" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Search Engine Settings</strong></h2>
		<p>Make Your Page Visible to Search Engines</p>
	</div>

	<?php

	
		// Add Your Options Here
	display_field( 
		$_GET['id'],
		$results->title,
		"Browser Title", 
		"title",
		"SEO Title and Web Browser Title"
	);
	display_field( 
		$_GET['id'],
		$results->desc,
		"Meta Description", 
		"desc",
		"Meta Description for SEO"
	);
	display_field( 
		$_GET['id'],
		$results->favicon,
		"PNG Favicon URL", 
		"favicon",
		"URL to Your 16x16 PNG Favicon"
	);
	display_textarea( 
		$_GET['id'],
		$results->tracking,
		"Javascript Tracking Code", 
		"tracking",
		"Google Analytics, etc"
	);
		

	?>

</div>