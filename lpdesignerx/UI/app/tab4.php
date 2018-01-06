<div class="tabber" id="tab4" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-clock-o" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Countdown Timer Settings</strong></h2>
		<p>Add a Countdown Timer to Your Page </p>
	</div>
	<?php
		// Add Your Options Here
	display_option( 
			$_GET['id'],
			$results->countdown,
			"Show / Hide Countdown", 
			"countdown",
			"Choose to show or hide the countdown",
			"Hide [hide], Show [on]"
		);
		display_date( 
			$_GET['id'],
			$results->date,
			"Countdown Date", 
			"date",
			"Date to End and Redirect"
		);
		display_field( 
			$_GET['id'],
			$results->redirect,
			"Expiry Redirect", 
			"redirect",
			"Redirect to your URL when contest is over"
		);
		display_color( 
			$_GET['id'],
			$results->countdownColor,
			"Countdown Color", 
			"countdownColor",
			"Choose Color for Countdown Text"
		);
	?>
</div>