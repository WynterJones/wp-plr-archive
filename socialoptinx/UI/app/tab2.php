<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar">
		<i class="fa fa-question-circle" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Question Settings</strong></h2>
		<p>Ask The Perfect Question</p>
	</div>



	<?php

		


		display_field( 
			$_GET['id'],
			$results->question,
			"The Main Question", 
			"question",
			"Ask a Viral Question"
		);

		display_field( 
			$_GET['id'],
			$results->yesText,
			"Yes Button Text", 
			"yesText",
			"The Text for The Yes Button"
		);

		display_field( 
			$_GET['id'],
			$results->noText,
			"No Button Text", 
			"noText",
			"The Text for The No Button"
		);
		

		

	?>


</div>