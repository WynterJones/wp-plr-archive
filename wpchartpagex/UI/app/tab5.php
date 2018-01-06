<div class="tabber" id="tab5" style="display: none;">

	<div class="titleBar">
		<h2>Auto-Responder:</h2>
		<p>Add Autoresponder Code or Your Own HTML...</p>
	</div>

	<?php

	echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Auto Responder Code</h2>
		";

		display_textarea( 
			$_GET['id'],
			$results->autoresponder,
			"Auto Responder Form Code", 
			"autoresponder",
			"HTML Form Code (Must Include Name and Email Fields)"
		);

		
		

	?>



</div>