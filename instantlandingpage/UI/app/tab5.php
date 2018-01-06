<div class="tabber" id="tab5" style="display: none;">

	<div class="titleBar">
		<h2>Popup Settings</h2>
		<p>Popup Settings</p>
	</div>

	<?php

	
		// Add Your Options Here

		display_wpeditor( 
			$_GET['id'],
			$results->popup,
			"Popup Area", 
			"popup",
			"Your Popup Content"
		);

		display_option( 
			$_GET['id'],
			$results->popupSwitch,
			"Popup On / Off", 
			"popupSwitch",
			"Turn on or off your popup",
			"On [on], Off [off]"
		);
		

	?>

</div>