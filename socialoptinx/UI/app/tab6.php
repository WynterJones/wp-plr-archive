<div class="tabber" id="tab6" style="display: none;">

	<div class="titleBar">
		<i class="fa fa-edit" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong style="font-weight: 800;">Edit Language for Your Page</strong></h2>
		<p>Change the default text used on your page.</p>
	</div>

	<?php

	
		// Add Your Options Here
	display_field( 
		$_GET['id'],
		$results->or,
		"OR", 
		"or",
		"The 'or' Text"
	);
	display_field( 
		$_GET['id'],
		$results->watch,
		"Watch Video", 
		"watch",
		"I want to watch the video"
	);
	display_field( 
		$_GET['id'],
		$results->surveyText,
		"Answer the Survey", 
		"surveyText",
		"Answer the survey question by clicking here."
	);
	display_field( 
		$_GET['id'],
		$results->say,
		"Say", 
		"say",
		"The 'say' Text"
	);
	display_field( 
		$_GET['id'],
		$results->agreed,
		"People Agree With You", 
		"agreed",
		"The 'People Agree With You' Text"
	);
	display_field( 
		$_GET['id'],
		$results->placeholder,
		"Email Placeholder", 
		"placeholder",
		"Your Email Address"
	);
		

	?>

</div>