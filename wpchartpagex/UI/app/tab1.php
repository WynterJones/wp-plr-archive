<div class="tabber" id="tab1">

	<div class="titleBar">
		<h2>Main Settings</h2>
		<p>Here you can change the main settings of your page...</p>
	</div>

	
<?php 



		display_field( 
			$_GET['id'],
			$results->mainHeadline,
			"Top Main Headline", 
			"mainHeadline",
			"Shown at the very top of the landing page."
		);

		display_field( 
			$_GET['id'],
			$results->subHeadline,
			"Top Sub Headline", 
			"subHeadline",
			"Show at the very top of the landing page."
		);



display_option( 
			$_GET['id'],
			$results->graph,
			"Choose the Graph for Your page", 
			"graph",
			"Choose the graph for your landing page",
			"Pie[pie], Bar[bar],Doughnut[doughnut], Line Chart [linechart], Polar Chart [polar], Radar Chart [radar]"
		);
display_field( 
			$_GET['id'],
			$results->valuetext1,
			"Value Text 1", 
			"valuetext1",
			"The information."
		);
display_field( 
			$_GET['id'],
			$results->value1,
			"Value 1", 
			"value1",
			"Value in the chart."
		);
display_color( 
			$_GET['id'],
			$results->color1,
			"Color 1", 
			"color1",
			"Color of the value represented."
		);
display_field( 
			$_GET['id'],
			$results->valuetext2,
			"Value Text 2", 
			"valuetext2",
			"Show at the very top of the landing page."
		);

display_field( 
			$_GET['id'],
			$results->value2,
			"Value 2", 
			"value2",
			"Show at the very top of the landing page."
		);
display_color( 
			$_GET['id'],
			$results->color2,
			"Color 2", 
			"color2",
			"Show at the very top of the landing page."
		);
display_field( 
			$_GET['id'],
			$results->valuetext3,
			"Value Text 3", 
			"valuetext3",
			"Show at the very top of the landing page."
		);
display_field( 
			$_GET['id'],
			$results->value3,
			"Value 3", 
			"value3",
			"Show at the very top of the landing page."
		);
display_color( 
			$_GET['id'],
			$results->color3,
			"Color 3", 
			"color3",
			"Show at the very top of the landing page."
		);


display_field( 
			$_GET['id'],
			$results->valuetext4,
			"Value Text 4", 
			"valuetext4",
			"The information."
		);
display_field( 
			$_GET['id'],
			$results->value4,
			"Value 4", 
			"value4",
			"Value in the chart."
		);
display_color( 
			$_GET['id'],
			$results->color4,
			"Color 4", 
			"color4",
			"Color of the value represented."
		);



		 ?>


	<div style="border-top: 1px dotted #e2e2e2; padding-top: 15px; margin-top: 25px; ">
		<span style="float: right; font-weight: bold;" id="deleteCampaign" class="grey-btn" >Delete This Chart Page</span>
		<br clear="right" />
	</div>



</div>