<div class="tabber" id="tab5" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-gear" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Benefit List Settings</strong></h2>
		<p>Create Your Benefit List with Content and Icons</p>
	</div>
	<?php
		// Add Your Options Here
	display_field( 
		$_GET['id'],
		$results->listHeadline,
		"List Headline", 
		"listHeadline",
		"Headline for Benefit List"
	);
	display_field( 
		$_GET['id'],
		$results->listSubHeadline,
		"List Sub Headline", 
		"listSubHeadline",
		"Sub Headline for Benefit List"
	);
	?>
	<h3>List Item #1</h3>
	<?php 
	display_field( 
		$_GET['id'],
		$results->list1Icon,
		"Font Awesome Icon", 
		"list1Icon",
		"http://fontawesome.io/icons/ ex. <i class='fa fa-check-square-o'></i>"
	);
	display_field( 
		$_GET['id'],
		$results->list1Text,
		"List Item Text", 
		"list1Text",
		"Text for List Item"
	);
	 ?>
	 <h3>List Item #2</h3>
	<?php 
	display_field( 
		$_GET['id'],
		$results->list2Icon,
		"Font Awesome Icon", 
		"list2Icon",
		"http://fontawesome.io/icons/ ex. <i class='fa fa-check-square-o'></i>"
	);
	display_field( 
		$_GET['id'],
		$results->list2Text,
		"List Item Text", 
		"list2Text",
		"Text for List Item"
	);
	 ?>
	 <h3>List Item #3</h3>
	<?php 
	display_field( 
		$_GET['id'],
		$results->list3Icon,
		"Font Awesome Icon", 
		"list3Icon",
		"http://fontawesome.io/icons/ ex. <i class='fa fa-check-square-o'></i>"
	);
	display_field( 
		$_GET['id'],
		$results->list3Text,
		"List Item Text", 
		"list3Text",
		"Text for List Item"
	);
	 ?>
	 <h3>List Item #4</h3>
	<?php 
	display_field( 
		$_GET['id'],
		$results->list4Icon,
		"Font Awesome Icon", 
		"list4Icon",
		"http://fontawesome.io/icons/ ex. <i class='fa fa-check-square-o'></i>"
	);
	display_field( 
		$_GET['id'],
		$results->list4Text,
		"List Item Text", 
		"list4Text",
		"Text for List Item"
	);
	 ?>
</div>