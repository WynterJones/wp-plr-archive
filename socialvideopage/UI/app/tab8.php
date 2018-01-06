<div class="tabber" id="tab8" style="display: none;">

	<div class="titleBar">
		<i class="fa fa-globe" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>YouTube Video Settings</strong></h2>
		<p>Customize How Your Video Functions</p>
	</div>

	<?php

	
		// Add Your Options Here
	display_field( 
		$_GET['id'],
		$results->video,
		"YouTube Video ID", 
		"video",
		"ID is at end of URL ex. xDMP3i36naA"
	);
display_field( 
	$_GET['id'],
	$results->startTime,
	"Video Start Time", 
	"startTime",
	"Time in Seconds for Start Time - ex. 60 for 1 minute"
);
display_option( 
	$_GET['id'],
	$results->autoplay,
	"Stating Volume", 
	"autoplay",
	"The Start Volume for The Video",
	"Mute [], Play Full Volume [play]"
);
		

	?>

</div>