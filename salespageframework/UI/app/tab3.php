<div class="tabber" id="tab3" style="display: none;">

	<div class="titleBar">
		<h2><strong>Paste in HTML Code from Editor</strong></h2>
	</div>

	<?php

	
		// Add Your Options Here
	echo '<h2 class="headline">Paste HTML Links</h2>';

		display_textarea( 
			$_GET['id'],
			$results->body,
			"Body HTML", 
			"body",
			"Add HTML Content"
		);
		

	?>

</div>