<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar">
		<h2><strong>Paste In CSS Links from Editor</strong></h2>
	</div>



	<?php

		

		echo '<h2 class="headline">Paste CSS Links</h2>';

	

		display_textarea( 
			$_GET['id'],
			$results->css,
			"CSS Links", 
			"css",
			"Add CSS Links Here"
		);

		

		
		

		

		

		

	?>


</div>