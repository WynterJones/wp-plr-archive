<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar">
		<i class="fa fa-question-circle" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Question Settings</strong></h2>
		<p>Ask The Perfect Question</p>
	</div>

<br>
<div class="innerQuestion">
		<h2>Starting Question</h2>
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
		);?>
<h3>Show Specific Auto-Responder for Answers</h3>
<h4>Answer Yes Settings</h4>
		<?php
		display_option( 
			$_GET['id'],
			$results->showAgree,
			"Show Yes Count", 
			"showAgree",
			"Show the Yes Count",
			"Show Headline [], Show Counter [show]"
		);
		display_field( 
			$_GET['id'],
			$results->answerYesHeadline,
			"Headline", 
			"answerYesHeadline",
			"Headline for Yes Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerYesSubHeadline,
			"Sub Headline", 
			"answerYesSubHeadline",
			"Sub Headline for Yes Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerYesText,
			"Small Text", 
			"answerYesText",
			"Small Text for Yes Answer"
		);
		display_textarea( 
		$_GET['id'],
		$results->autoresponderYes,
		"Answer Optin #1 Yes", 
		"autoresponderYes",
		"Auto Responder HTML Form Code"
	); ?>
<h4>Answer No Settings</h4>
		<?php
display_option( 
			$_GET['id'],
			$results->showDisAgree,
			"Show No Count", 
			"showDisAgree",
			"Show the No Count",
			"Show Headline [], Show Counter [show]"
		);
		display_field( 
			$_GET['id'],
			$results->answerNoHeadline,
			"Headline", 
			"answerNoHeadline",
			"Headline for No Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerNoSubHeadline,
			"Sub Headline", 
			"answerNoSubHeadline",
			"Sub Headline for No Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerNoText,
			"Small Text", 
			"answerNoText",
			"Small Text for No Answer"
		);
	display_textarea( 
		$_GET['id'],
		$results->autoresponderNo,
		"Answer Optin #1 No", 
		"autoresponderNo",
		"Auto Responder HTML Form Code"
	);
	?>
<h3>Or.. Show a Follow Up Question</h3>
	<?php
		display_option( 
			$_GET['id'],
			$results->questionFollowup,
			"Show Follow Up Question", 
			"questionFollowup",
			"Show or Hide Follow Up Question",
			"None [], Show [show]"
		);
		

		

	?>
	<div id="followUp" style="display: block">
		<h2>Follow Up Question </h2>
	<?php 
		display_field( 
			$_GET['id'],
			$results->questionfollow1yes,
			"The Main Question", 
			"questionfollow1yes",
			"Ask a Viral Question"
		);

		display_field( 
			$_GET['id'],
			$results->yesTextfollow1yes,
			"Yes Button Text", 
			"yesTextfollow1yes",
			"The Text for The Yes Button"
		);

		display_field( 
			$_GET['id'],
			$results->noTextfollow1yes,
			"No Button Text", 
			"noTextfollow1yes",
			"The Text for The No Button"
		);

		?>
<h3>Show Specific Auto-Responder for Answers</h3>
<h4>Answer Yes /Yes Settings</h4>
		<?php
		display_field( 
			$_GET['id'],
			$results->answerYesYesHeadline,
			"Headline", 
			"answerYesYesHeadline",
			"Headline for YesYes Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerYesYesSubHeadline,
			"Sub Headline", 
			"answerYesYesSubHeadline",
			"Sub Headline for YesYes Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerYesYesText,
			"Small Text", 
			"answerYesYesText",
			"Small Text for YesYes Answer"
		);
display_textarea( 
		$_GET['id'],
		$results->autoresponderYesYes,
		"Answer Optin #2 Yes / Yes", 
		"autoresponderYesYes",
		"Auto Responder HTML Form Code"
	);
?>
<h4>Answer Yes / No Settings</h4>
		<?php

		display_field( 
			$_GET['id'],
			$results->answerYesNoHeadline,
			"Headline", 
			"answerYesNoHeadline",
			"Headline for YesNo Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerYesNoSubHeadline,
			"Sub Headline", 
			"answerYesNoSubHeadline",
			"Sub Headline for YesNo Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerYesNoText,
			"Small Text", 
			"answerYesNoText",
			"Small Text for YesNo Answer"
		);
	display_textarea( 
		$_GET['id'],
		$results->autoresponderYesNo,
		"Answer Optin #2 Yes / No", 
		"autoresponderYesNo",
		"Auto Responder HTML Form Code"
	);

	?><h4>Answer No / Yes Settings</h4>
		<?php

		display_field( 
			$_GET['id'],
			$results->answerNoYesHeadline,
			"Headline", 
			"answerNoYesHeadline",
			"Headline for NoYes Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerNoYesSubHeadline,
			"Sub Headline", 
			"answerNoYesSubHeadline",
			"Sub Headline for NoYes Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerNoYesText,
			"Small Text", 
			"answerNoYesText",
			"Small Text for NoYes Answer"
		);

	display_textarea( 
		$_GET['id'],
		$results->autoresponderNoYes,
		"Answer Optin #2 No / Yes", 
		"autoresponderNoYes",
		"Auto Responder HTML Form Code"
	);

	?>
	<h4>Answer No / No Settings</h4>
		<?php

		display_field( 
			$_GET['id'],
			$results->answerNoNoHeadline,
			"Headline", 
			"answerNoNoHeadline",
			"Headline for NoNo Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerNoNoSubHeadline,
			"Sub Headline", 
			"answerNoNoSubHeadline",
			"Sub Headline for NoNo Answer"
		);
		display_field( 
			$_GET['id'],
			$results->answerNoNoText,
			"Small Text", 
			"answerNoNoText",
			"Small Text for NoNo Answer"
		);
	display_textarea( 
		$_GET['id'],
		$results->autoresponderNoNo,
		"Answer Optin #2 No / No", 
		"autoresponderNoNo",
		"Auto Responder HTML Form Code"
	);
		
		
	 ?>
	</div>
	
	</div>


</div>