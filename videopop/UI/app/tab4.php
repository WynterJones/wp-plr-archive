<div class="tabber" id="tab4" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-question-circle" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Question Popup</strong></h2>
		<p>Add a question and show targetted video.</p>
	</div>
	<?php
		// Add Your Options Here
	display_field( 
		$_GET['id'],
		$results->questiontime,
		"Time (seconds)", 
		"questiontime",
		"Question Time (ex 4)"
	);
	display_field( 
		$_GET['id'],
		$results->question,
		"Question", 
		"question",
		"Ask a Question for Popup"
	);
	display_field( 
		$_GET['id'],
		$results->question1text,
		"Answer #1", 
		"question1text",
		"Text for First Button"
	);
	display_option( 
		$_GET['id'],
		$results->question1design,
		"Button Color", 
		"question1design",
		"Change button color.",
		"Grey [default], Blue [primary], Light Blue [info], Red [warning], Orange [warning], Green [success]"
	);
	display_field( 
		$_GET['id'],
		$results->question1id,
		"Video ID", 
		"question1id",
		"Video ID for First Button"
	);
	display_field( 
		$_GET['id'],
		$results->question1text,
		"Answer #2", 
		"question2text",
		"Text for First Button"
	);
	display_field( 
		$_GET['id'],
		$results->question2id,
		"Video ID", 
		"question2id",
		"Video ID for First Button"
	);
	display_option( 
		$_GET['id'],
		$results->question2design,
		"Button Color", 
		"question2design",
		"Change button color.",
		"Grey [default], Blue [primary], Light Blue [info], Red [warning], Orange [warning], Green [success]"
	);
	?>
</div>