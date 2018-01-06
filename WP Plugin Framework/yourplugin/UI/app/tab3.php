<div class="tabber" id="tab3" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-question-circle" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Test Input</strong></h2>
		<p>Example for All Input Elements:</p>
	</div>
	<?php
		echo '<h2 class="headline">Example Page Headlines</h2>';
		display_field( 
			$_GET['id'],
			$results->headline,
			"Example Headline", 
			"headline",
			"Headline for Example Page"
		);
		display_field( 
			$_GET['id'],
			$results->subheadline,
			"Example Sub Headline", 
			"subheadline",
			"Sub Headline for Example Page"
		);
		echo '<h2 class="headline">Basic Inputs</h2>';
		display_field( 
			$_GET['id'],
			$results->inputData,
			"Input Data", 
			"inputData",
			"Help Text"
		);
		display_option( 
			$_GET['id'],
			$results->optionExample,
			"Select Options", 
			"optionExample",
			"Help Text",
			"Element #1 [1], Element #1 [1]"
		);
		display_field_image( 
			$_GET['id'],
			$results->imageExample,
			"Upload Image", 
			"imageExample",
			"Help Text"
		);
		display_textarea( 
			$_GET['id'],
			$results->textareaExample,
			"Textarea Example", 
			"textareaExample",
			"Help Text"
		);
		echo '<h2 class="headline">Custom Inputs</h2>';
		display_date( 
			$_GET['id'],
			$results->dateExample,
			"Date Picker", 
			"dateExample",
			"Help Text"
		);
		display_color( 
			$_GET['id'],
			$results->colorExample,
			"Choose Color", 
			"colorExample",
			"Help Text"
		);
		echo '<h2 class="headline">Advanced Inputs</h2>';
		display_wpeditor( 
			$_GET['id'],
			$results->editorExample,
			"WP Editor", 
			"editorExample",
			"Help Text"
		);
		display_option_img( 
			$_GET['id'],
			$results->optionImage,
			"Image Select Example", 
			"optionImage",
			"Help Text",
			"https://cdn2.iconfinder.com/data/icons/lin/64/13.png [1],
			 https://cdn1.iconfinder.com/data/icons/metroicons/black/favs.png [2]"
		);
	?>
</div>