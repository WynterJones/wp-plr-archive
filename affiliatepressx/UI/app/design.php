<div class="tabber" id="tab7" style="display: none;">

	<div class="titleBar design_icon">
		<a href="http://www.wpaffiliatepress.com/help/AffiliatePress-design.pdf" target="_blank" ><span style="float: right; margin-top: 13px; margin-right: -23px" id="helpPDF" class="grey-btn" ><img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/pdf.png" style="margin-right: 5px; margin-bottom: -3px">Design Tutorial PDF</span></a>
		<h2>Design Settings:</h2>
		<p>Customize the way your landing page looks and feels like...</p>
	</div>

	<?php



		

		?>

<div id="layout_tab"  class="tabby"style="display: none">
<div class="tabBlock" id="main_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			
			<h1>Layout Options</h1>
			<h3 style="font-weight: normal">Customize the layout of your deal page..</h3>
		</div>
	<?php 

display_option( 
	$_GET['id'],
	$results->dealLayout,
	"Deal Box Layout", 
	"dealLayout",
	"Choose the layout of the deal box",
	"Deal Left & Video Right [1], Deal Right & Video Left [2]"
);

display_option( 
	$_GET['id'],
	$results->contentLayout,
	"Content & Sidebar Layout", 
	"contentLayout",
	"Choose the layout of the content and sidebar",
	"Content Left & Sidebar Right [1], Content Right & Sidebar Left [2]"
);

	 ?>

</div>
		<div id="main_tab"  class="tabby"style="display: none">

		<div class="tabBlock" id="main_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			
			<h1>Button Color &amp; Create Your Own</h1>
			<h3 style="font-weight: normal">Customize the look and feel of your page..</h3>
		</div>

		


		<?php 

		
		display_option_img( 
			$_GET['id'],
			$results->buttonBG,
			"CTA Button Color", 
			"buttonBG",
			"Choose color for call-to-action buttons",
			"https://cdn1.iconfinder.com/data/icons/developperss/PNG/Green%20Ball.png [1], 
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Orange%20Ball.png [2],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Blue%20Ball.png [3],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Red%20Ball.png [4],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Grey%20Ball.png [5],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Purple%20Ball.png [6]"
		);

		

		?>
<script language="javascript" type="text/javascript">

function popitup(url) {
newwindow=window.open(url,'name','height=770,width=995,top=70,left=100');
if (window.focus) {newwindow.focus()}
return false;
}


</script>
		<a href="#" class="grey-btn" onclick="return popitup('http://www.wpaffiliatepress.com/button-editor/index.html')" style="text-decoration: none; clear: both;margin-left: 318px;"  target="_blank">Click Here to Open Button Editor</a>

		<?php 

		display_textarea( 
			$_GET['id'],
			$results->customButton,
			"Custom Button CSS", 
			"customButton",
			"Paste the CSS Code from Button editor into this box -->"
		);
		 ?>
<!-- 
</div>
		<div class="tabBlock" id="header_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 20px; margin-right: 40px;">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-32.png" style="float: right;">
			</div>
			<h1>Header Design Settings</h1>
			<h3 style="font-weight: normal">Customize the design of the main header area..</h3>
		</div>

		<div id="header_tab1"  class="tabby"style="display: none">


		<?php 

		display_option( 
			$_GET['id'],
			$results->headerOption,
			"Header Design Option", 
			"headerOption",
			"Choose which to show patterns, custom bg or solid color",
			"Show Header Background [3], Show Custom BG Image [1], Show Color BG [2]"
		);

		display_option_img( 
			$_GET['id'],
			$results->headerBG,
			"Header Background", 
			"headerBG",
			"The background style for header area",
			"../wp-content/plugins/affiliatepressx/inc/lp/assets/images/1.png [1],  
			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/2.png [2],			 
			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/3.png [3], 
			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/4.png [4],  
			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/5.png [5]
			 "
		);

		display_field_image( 
			$_GET['id'],
			$results->customBG,
			"Header Custom BG", 
			"customBG",
			"Add your own background image for header area"
		);
		
		display_color( 
			$_GET['id'],
			$results->customBG_color,
			"Header Custom Color", 
			"customBG_color",
			"Custom header background color"
		);


		?>
 -->

		</div>

		<div id="font_tab"  class="tabby"style="display: none">

		<div class="tabBlock" id="main_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			
			<h1>Font Settings</h1>
			<h3 style="font-weight: normal">Customize the look and feel of your page..</h3>
		</div>

<?php


display_field( 
	$_GET['id'],
	$results->headlineFont,
	"Main Headlines", 
	"headlineFont",
	"Font for all headlines."
);


display_field( 
	$_GET['id'],
	$results->paragraphFont,
	"Paragraphs and Content", 
	"paragraphFont",
	"Font for all paragraphs."
);


 // display_option( 
	// 		$_GET['id'],
	// 		$results->typography,
	// 		"Main Font", 
	// 		"typography",
	// 		"Choose the Font for your landing page",
	// 		"
	// 		Droid Sans [2],
	// 		Lato [3],
	// 		Lora [4],
	// 		Pompiere [5],
	// 		Patrick Hand [6],
	// 		Maiden Orange [7],
	// 		PT Sans Narrow [8],
	// 		Rokkitt [9],
	// 		Droid Serif [11],
	// 		Open Sans Condensed [12],
	// 		Bree Serif [13],
	// 		Special Elite [14],
	// 		Lobster Two [15]
	// 		"
	// 	);

		// display_option( 
		// 	$_GET['id'],
		// 	$results->paragraph,
		// 	"Content Font", 
		// 	"paragraph",
		// 	"Choose the Font for your landing page",
		// 	"
		// 	Droid Sans [2],
		// 	Lato [3],
		// 	Lora [4],
		// 	Pompiere [5],
		// 	Patrick Hand [6],
		// 	Maiden Orange [7],
		// 	PT Sans Narrow [8],
		// 	Rokkitt [9],
		// 	Droid Serif [11],
		// 	Open Sans Condensed [12],
		// 	Bree Serif [13],
		// 	Special Elite [14],
		// 	Lobster Two [15]
		// 	"
		// ); 


?>

	</div>

<div id="banner_tab"  class="tabby"style="display: none">
			<div class="tabBlock" id="banner_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Background  Design Settings</h1>
			<h3 style="font-weight: normal">Edit design settings for the main background area..</h3>
		</div>

		


		<?php 

		display_option( 
			$_GET['id'],
			$results->bannerOption,
			"Choose What to Display", 
			"bannerOption",
			"Choose which to show patterns, custom bg or solid color",
			"Show Repeating Top + Custom Color [3], Show Custom BG Image [1]"
		);


		// display_option( 
		// 	$_GET['id'],
		// 	$results->bannerBG,
		// 	"Background Style", 
		// 	"bannerBG",
		// 	"{4:Help Text Here}",
		// 	"Background Style #1 [1], 
		// 	 $sitePath"."/inc/lp/assets/images/bg2.png [2], 
		// 	 $sitePath"."/inc/lp/assets/images/bg3.png [3], 
		// 	 $sitePath"."/inc/lp/assets/images/bg4.png [4], 
		// 	 $sitePath"."/inc/lp/assets/images/bg5.png [5], 
		// 	 $sitePath"."/inc/lp/assets/images/bg6.png [6], 
		// 	 $sitePath"."/inc/lp/assets/images/bg7.png [7], 
		// 	 $sitePath"."/inc/lp/assets/images/bg8.png [8], 
		// 	 $sitePath"."/inc/lp/assets/images/bg9.png [9], 
		// 	 $sitePath"."/inc/lp/assets/images/bg10.png [10], 
		// 	 $sitePath"."/inc/lp/assets/images/bg11.png [11], 
		// 	 $sitePath"."/inc/lp/assets/images/bg12.png [12], 
		// 	 $sitePath"."/inc/lp/assets/images/bg13.png [13], 
		// 	 $sitePath"."/inc/lp/assets/images/bg14.png [14], 
		// 	 $sitePath"."/inc/lp/assets/images/bg15.png [15], 
		// 	 $sitePath"."/inc/lp/assets/images/bg16.png [16], 
		// 	 $sitePath"."/inc/lp/assets/images/bg17.png [17], 
		// 	 $sitePath"."/inc/lp/assets/images/bg18.png [18], 
		// 	 $sitePath"."/inc/lp/assets/images/bg19.png [19], 
		// 	 $sitePath"."/inc/lp/assets/images/bg20.png [20], 
		// 	 $sitePath"."/inc/lp/assets/images/bg21.png [21], 
		// 	 $sitePath"."/inc/lp/assets/images/bg22.png [22], 
		// 	 $sitePath"."/inc/lp/assets/images/bg23.png [23], 
		// 	 $sitePath"."/inc/lp/assets/images/bg24.png [24], 
		// 	 $sitePath"."/inc/lp/assets/images/bg25.png [25], 
		// 	 $sitePath"."/inc/lp/assets/images/bg26.png [26], 
		// 	 $sitePath"."/inc/lp/assets/images/bg27.png [27], 
		// 	 $sitePath"."/inc/lp/assets/images/bg28.png [28], 
		// 	 $sitePath"."/inc/lp/assets/images/bg29.png [29], 
		// 	 $sitePath"."/inc/lp/assets/images/bg30.png [30], 
		// 	 $sitePath"."/inc/lp/assets/images/bg31.png [31], 
		// 	 $sitePath"."/inc/lp/assets/images/bg32.png [32]"
		// );

display_option_img( 
	$_GET['id'],
	$results->bannerBG,
	"Title Of Area", 
	"bannerBG",
	"Help Text",
	"$sitePath"."/inc/lp/assets/images/bg1.png [1],
	 $sitePath"."/inc/lp/assets/images/bg2.png [2], 
	 $sitePath"."/inc/lp/assets/images/bg3.png [3], 
	 $sitePath"."/inc/lp/assets/images/bg4.png [4], 
	 $sitePath"."/inc/lp/assets/images/bg5.png [5], 
	 $sitePath"."/inc/lp/assets/images/bg6.png [6], 
	 $sitePath"."/inc/lp/assets/images/bg7.png [7], 
	 $sitePath"."/inc/lp/assets/images/bg8.png [8], 
	 $sitePath"."/inc/lp/assets/images/bg9.png [9], 
	 $sitePath"."/inc/lp/assets/images/bg10.png [10], 
	 $sitePath"."/inc/lp/assets/images/bg11.png [11], 
	 $sitePath"."/inc/lp/assets/images/bg12.png [12], 
	 $sitePath"."/inc/lp/assets/images/bg13.png [13], 
	 $sitePath"."/inc/lp/assets/images/bg14.png [14], 
	 $sitePath"."/inc/lp/assets/images/bg15.png [15], 
	 $sitePath"."/inc/lp/assets/images/bg16.png [16], 
	 $sitePath"."/inc/lp/assets/images/bg17.png [17], 
	 $sitePath"."/inc/lp/assets/images/bg18.png [18], 
	 $sitePath"."/inc/lp/assets/images/bg19.png [19], 
	 $sitePath"."/inc/lp/assets/images/bg20.png [20], 
	 $sitePath"."/inc/lp/assets/images/bg21.png [21], 
	 $sitePath"."/inc/lp/assets/images/bg22.png [22], 
	 $sitePath"."/inc/lp/assets/images/bg23.png [23], 
	 $sitePath"."/inc/lp/assets/images/bg24.png [24], 
	 $sitePath"."/inc/lp/assets/images/bg25.png [25], 
	 $sitePath"."/inc/lp/assets/images/bg26.png [26], 
	 $sitePath"."/inc/lp/assets/images/bg27.png [27], 
	 $sitePath"."/inc/lp/assets/images/bg28.png [28], 
	 $sitePath"."/inc/lp/assets/images/bg29.png [29], 
	 $sitePath"."/inc/lp/assets/images/bg30.png [30], 
	 $sitePath"."/inc/lp/assets/images/bg31.png [31], 
	 $sitePath"."/inc/lp/assets/images/bg32.png [32]"
);
		
		
		display_color( 
			$_GET['id'],
			$results->customBanner_color,
			"Background Custom Color", 
			"customBanner_color",
			"Custom header background color"
		);

		display_field_image( 
			$_GET['id'],
			$results->customBanner,
			"Background Custom BG", 
			"customBanner",
			"Custom Background background image"
		);


		

		

		

	?>
</div>

<div id="design_tab"  class="tabby"style="display: none">
		<div class="tabBlock" id="design_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Deal Box Settings</h1>
			<h3 style="font-weight: normal">Choose variety of options to customize deal offer box..</h3>
		</div>

		
			


		<?php 

		display_option( 
			$_GET['id'],
			$results->dealOption,
			"Choose What to Display", 
			"dealOption",
			"Choose which to show patterns, custom bg or solid color",
			"Show Texture Background [3], Show Custom BG Image [1], Show Color BG [2]"
		);
		display_option_img( 
			$_GET['id'],
			$results->dealBG,
			"Deal Offer BG", 
			"dealBG",
			"The background style for deal offer area",
			"../wp-content/plugins/affiliatepressx/inc/lp/assets/images/1.png [1],  
			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/2.png [2],			 
			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/3.png [3], 
			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/4.png [4],  
			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/5.png [5]"
		);

		display_field_image( 
			$_GET['id'],
			$results->customDeal,
			"Deal Custom BG", 
			"customDeal",
			"Custom deal background image"
		);

		
		display_color( 
			$_GET['id'],
			$results->customDeal_color,
			"Deal Custom Color", 
			"customDeal_color",
			"Custom header background color"
		);

		display_option( 
			$_GET['id'],
			$results->darkLight2,
			"Deal Text Color Dark / Light", 
			"darkLight2",
			"Change the headline text from white to black text color",
			"Light [1], Dark [2]"
		);
// display_option( 
// 			$_GET['id'],
// 			$results->borderHide,
// 			"Show / Hide Border", 
// 			"borderHide",
// 			"Choose whether to show or hide border on deal block",
// 			"Hide Border [1], Show Border [2]"
// 		);

// 		display_option_img( 
// 			$_GET['id'],
// 			$results->borderStyle,
// 			"Deal Border Background", 
// 			"borderStyle",
// 			"Choose background for deal block border",
// 			"../wp-content/plugins/affiliatepressx/inc/lp/assets/images/1.png [1],  
// 			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/2.png [2],			 
// 			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/3.png [3], 
// 			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/4.png [4],  
// 			 ../wp-content/plugins/affiliatepressx/inc/lp/assets/images/5.png [5]"
// 		);
		

		

		

		?>

		</div>

	

<div style="padding-top: 15px; margin-top: 15px; ">
		<span style="margin: 10px 0; float: left; padding-left: 10px; color: #888">
			<img src="https://cdn3.iconfinder.com/data/icons/uidesignicons/information.png" style="float: left; margin-right: 7px">
			Need help? Check out the PDF tutorials at the top right of each page.
		</span>
		
		<br clear="right" />
	</div>

</div>