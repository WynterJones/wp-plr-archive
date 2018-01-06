<div class="tabber" id="tab2" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-globe" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Main Settings</strong></h2>
		<p>Add the important settings for your video embed.</p>
	</div>
	<?php
		display_field( 
			$_GET['id'],
			$results->videoid,
			"Video ID", 
			"videoid",
			"YouTube Video ID"
		);
		display_field_image( 
			$_GET['id'],
			$results->videoimage,
			"Video Play Image", 
			"videoimage",
			"Image for Video Thumbnail"
		);
		
		display_field_image( 
			$_GET['id'],
			$results->endimage,
			"Video End Image", 
			"endimage",
			"Image for When Video is Over (URL to image)"
		);
		display_field( 
			$_GET['id'],
			$results->endlink,
			"End Link", 
			"endlink",
			"URL for End Image Link"
		);
		display_option( 
			$_GET['id'],
			$results->design,
			"Design", 
			"design",
			"Change Color of Video player",
			"None [none], Black [black], Blue [blue], Red [red], Green [green]"
		);
	?>
</div>