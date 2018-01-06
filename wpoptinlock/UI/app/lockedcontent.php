<div class="tabber" id="tab4" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-lock" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Show Locked Content</strong></h2>
		<p>Show Custom Content When User Subscribes to Auto-Responder</p>
	</div>
	<?php
		// Add Your Options Here
	display_wpeditor( 
		$_GET['id'],
		$results->lockedContent,
		"Locked Content", 
		"lockedContent",
		"Add Your Custom Content to Be Shown"
	);
	?>
</div>