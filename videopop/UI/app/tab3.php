<div class="tabber" id="tab3" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-facebook" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Social Settings</strong></h2>
		<p>Edit the Twitter, Facebook and Google+ Buttons</p>
	</div>
	<?php
		display_field( 
			$_GET['id'],
			$results->socialtime,
			"Time (seconds)", 
			"socialtime",
			"Time for Social Links to Show (ex. 4)"
		);
		display_field( 
			$_GET['id'],
			$results->socialheadline,
			"Social Headline", 
			"socialheadline",
			"Share This Video"
		);
		display_field( 
			$_GET['id'],
			$results->sharetext,
			"Share Text", 
			"sharetext",
			"Check out this amazing video here ->"
		);
		display_field( 
			$_GET['id'],
			$results->sharelink,
			"Share Link", 
			"sharelink",
			"http://yourblog.com/blog-post"
		);
	?>
</div>