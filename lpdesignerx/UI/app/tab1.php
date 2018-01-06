<div class="tabber" id="tab1">
	<div class="titleBar">
		<i class="fa fa-columns" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Choose Your Layout</strong></h2>
		<p>Choose from a variety of layouts to create any type of landing page.</p>
	</div>
	<div class="dash" style="padding: 10px 20px;">
		<br>
		
	</div>
	<?php 
	// Add Your Inputs

	display_option_img( 
		$_GET['id'],
		$results->layout,
		"Choose Template Layout", 
		"layout",
		"Completely Change The Layout of Your Page",
		"$sitePath"."/images/layout1.png [1],
		 $sitePath"."/images/layout2.png [2],
		 $sitePath"."/images/layout3.png [3],
		 $sitePath"."/images/layout4.png [4],
		 $sitePath"."/images/layout5.png [5],
		 $sitePath"."/images/layout6.png [6],
		 $sitePath"."/images/layout7.png [7],
		 $sitePath"."/images/layout8.png [8],
		 $sitePath"."/images/layout9.png [9],
		 $sitePath"."/images/layout10.png [10],
		 $sitePath"."/images/layout11.png [11],
		 $sitePath"."/images/layout12.png [12],
		 $sitePath"."/images/layout13.png [13],
		 $sitePath"."/images/layout14.png [14],
		 $sitePath"."/images/layout15.png [15]"
	);
	?>
</div>