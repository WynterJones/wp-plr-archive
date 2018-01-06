<div class="tabber" id="tab6" style="display: none;">
	<div class="titleBar shortcode_icon">
		<a href="http://www.wpaffiliatepress.com/help/AffiliatePress-optin.pdf" target="_blank" ><span style="float: right; margin-top: 13px; margin-right: -23px" id="helpPDF" class="grey-btn" ><img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/pdf.png" style="margin-right: 5px; margin-bottom: -3px">Optin Tutorial PDF</span></a>
		<h2>Auto-Responder Settings:</h2>
		<p>Here you can add an auto-responder to your page...</p>
	</div>
<div id="slider_tab" class="tabby" style="display: none">
<div class="tabBlock" id="coupon_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Slider Settings</h1>
			<h3 style="font-weight: normal">Customize how the slider will function...</h3>
		</div>

	<?php 

	display_option( 
		$_GET['id'],
		$results->showSlider,
		"Show Content Slider", 
		"showSlider",
		"Choose whether to show or hide content slider ** WILL REPLACE VIDEO",
		"Hide Slider [1], Show Slider [2]"
	);

		display_option( 
			$_GET['id'],
			$results->sliderTheme,
			"Theme", 
			"sliderTheme",
			"Choose the theme for your slider",
			"Premium Pixel [premiumpixels], Classic [classic], Lightweight [lightweight], Woody [woody]"
		);

		display_option( 
			$_GET['id'],
			$results->sliderTime,
			"Speed", 
			"sliderTime",
			"Transition time for slides",
			".05 Seconds [half-sec], 1 second [one-sec], 2 Seconds [two-sec]"
		);

		


		display_option( 
			$_GET['id'],
			$results->sliderPreviousEntrance,
			"Entrance Effect", 
			"sliderPreviousEntrance",
			"Choose effect of entrance slide effect",
			"classicFadeInLeft [classicFadeInLeft],
classicFadeInRight [classicFadeInRight],
classicFadeInUp [classicFadeInUp],
classicFadeInDown [classicFadeInDown],
bounceInLeft [bounceInLeft],
tada [tada],
flash [flash],
bounce [bounce],
shake [shake],
swing [swing],
wobble [wobble],
wiggle [wiggle],
pulse [pulse],
flip [flip],
flipInX [flipInX],
flipInY [flipInY],
fadeIn [fadeIn],
fadeInUp [fadeInUp],
fadeInDown [fadeInDown],
fadeInLeft [fadeInLeft],
fadeInRight [fadeInRight],
fadeInUpBig [fadeInUpBig],
fadeInDownBig [fadeInDownBig],
fadeInLeftBig [fadeInLeftBig],
fadeInRightBig [fadeInRightBig],
bounceIn [bounceIn],
bounceInDown [bounceInDown],
bounceInUp [bounceInUp],
bounceInRight [bounceInRight],
rotateIn [rotateIn],
rotateInDownLeft [rotateInDownLeft],
rotateInDownRight [rotateInDownRight],
rotateInUpLeft [rotateInUpLeft],
rotateInUpRight [rotateInUpRight],
rollIn [rollIn]"
		);

		display_option( 
			$_GET['id'],
			$results->sliderPreviousExit,
			"Exit Effect", 
			"sliderPreviousExit",
			"Choose effect of exit slide effect",
			"classicFadeOutRight [classicFadeOutRight],
classicFadeOutLeft [classicFadeOutLeft],
classicFadeOutUp [classicFadeOutUp],
classicFadeOutDown [classicFadeOutDown],
bounceOutRight [bounceOutRight],
flipOutX [flipOutX],
flipOutY [flipOutY],
fadeOut [fadeOut],
fadeOutUp [fadeOutUp],
fadeOutDown [fadeOutDown],
fadeOutLeft [fadeOutLeft],
fadeOutRight [fadeOutRight],
fadeOutUpBig [fadeOutUpBig],
fadeOutDownBig [fadeOutDownBig],
fadeOutLeftBig [fadeOutLeftBig],
fadeOutRightBig [fadeOutRightBig],
bounceOut [bounceOut],
bounceOutDown [bounceOutDown],
bounceOutUp [bounceOutUp],
bounceOutLeft [bounceOutLeft],
rotateOut [rotateOut],
rotateOutDownLeft [rotateOutDownLeft],
rotateOutDownRight [rotateOutDownRight],
rotateOutUpLeft [rotateOutUpLeft],
rotateOutUpRight [rotateOutUpRight],
lightSpeedOut [lightSpeedOut],
rollOut [rollOut]"
		);
	 ?>

	 <div class="tabBlock" id="coupon_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Slides</h1>
			<h3 style="font-weight: normal">Select to show Image or Iframe (YouTube, Website, Google Maps)...</h3>
		</div>

		<?php 

		display_option( 
			$_GET['id'],
			$results->slide1Type,
			"Slide #1 Type", 
			"slide1Type",
			"{4:Help Text Here}",
			"Image [image], Iframe [iframe]"
		);
		display_field( 
			$_GET['id'],
			$results->slide1,
			"Slide #1 URL", 
			"slide1",
			""
		);

		display_option( 
			$_GET['id'],
			$results->slide2Type,
			"Slide #2 Type", 
			"slide2Type",
			"{4:Help Text Here}",
			"Image [image], Iframe [iframe]"
		);
		display_field( 
			$_GET['id'],
			$results->slide2,
			"Slide #2 URL", 
			"slide2",
			""
		);
		display_option( 
			$_GET['id'],
			$results->slide3Type,
			"Slide #3 Type", 
			"slide3Type",
			"{4:Help Text Here}",
			"Image [image], Iframe [iframe]"
		);
		display_field( 
			$_GET['id'],
			$results->slide3,
			"Slide #3 URL", 
			"slide3",
			""
		);
		display_option( 
			$_GET['id'],
			$results->slide4Type,
			"Slide #4 Type", 
			"slide4Type",
			"{4:Help Text Here}",
			"Image [image], Iframe [iframe]"
		);
		display_field( 
			$_GET['id'],
			$results->slide4,
			"Slide #4 URL", 
			"slide4",
			""
		);
		display_option( 
			$_GET['id'],
			$results->slide5Type,
			"Slide #5 Type", 
			"slide5Type",
			"{4:Help Text Here}",
			"Image [image], Iframe [iframe]"
		);
		display_field( 
			$_GET['id'],
			$results->slide5,
			"Slide #5 URL", 
			"slide5",
			""
		);
		display_option( 
			$_GET['id'],
			$results->slide6Type,
			"Slide #6 Type", 
			"slide6Type",
			"{4:Help Text Here}",
			"Image [image], Iframe [iframe]"
		);
		display_field( 
			$_GET['id'],
			$results->slide6,
			"Slide #6 URL", 
			"slide6",
			""
		);
		 ?>



</div>
<div id="email_tab" class="tabby" style="display: none">
<div class="tabBlock" id="coupon_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Popup Settings</h1>
			<h3 style="font-weight: normal">Customize your pop-up for that you can show on your normal blog theme...</h3>
		</div>

	<?php

	display_option( 
		$_GET['id'],
		$results->showOptin,
		"Show / Hide Optin", 
		"showOptin",
		"Choose whether to show or hide the auto-responder",
		"Hide [1], Show [2]"
	);

	display_field( 
		$_GET['id'],
		$results->optinHeadline,
		"Optin Headline", 
		"optinHeadline",
		"The headline for the optin box"
	);

	display_field( 
		$_GET['id'],
		$results->optinSubHeadline,
		"Optin Sub-Headline", 
		"optinSubHeadline",
		"The sub-headline for the optin box"
	);

	display_field( 
		$_GET['id'],
		$results->spam,
		"Spam Text", 
		"spam",
		"Shown with lock icon for spam warning"
	);

	display_field( 
		$_GET['id'],
		$results->optinButton,
		"Optin Button Text", 
		"optinButton",
		"Email optin submit button text"
	);

	display_textarea( 
		$_GET['id'],
		$results->autoresponder,
		"Auto-Responder Form Code", 
		"autoresponder",
		"The HTML form code for your auto-responder"
	);

	?>
</div>
<div id="popup_tab" class="tabby" style="display: none">

	<div class="tabBlock" id="coupon_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Popup Settings</h1>
			<h3 style="font-weight: normal">Customize your pop-up for that you can show on your normal blog theme...</h3>
		</div>

	<?php

		display_field( 
			$_GET['id'],
			$results->popupHeadline,
			"Main Headline", 
			"popupHeadline",
			"Headline that is shown above the main video."
		);
		display_option( 
			$_GET['id'],
			$results->popupBG,
			"Headline BG Color", 
			"popupBG",
			"Choose background color for the main headline.",
			"Black [1], Red [2], Blue [3], Green [4], Orange [5]"
		);

		display_option_img( 
			$_GET['id'],
			$results->popupIcon,
			"Headline Icon", 
			"popupIcon",
			"Choose icon for the headline.",
			"https://cdn2.iconfinder.com/data/icons/crystalproject/48x48/filesystems/favorites.png [https://cdn2.iconfinder.com/data/icons/crystalproject/48x48/filesystems/favorites.png], 
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/apps/clean.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/apps/clean.png],
			 https://cdn2.iconfinder.com/data/icons/RocketTheme_eCommerce_Icon_Pack_1/48/sale.png [https://cdn2.iconfinder.com/data/icons/RocketTheme_eCommerce_Icon_Pack_1/48/sale.png],
			 https://cdn2.iconfinder.com/data/icons/dellipack/48/safe.png [https://cdn2.iconfinder.com/data/icons/dellipack/48/safe.png],
			 https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Alarm_Clock.png [https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Alarm_Clock.png]"
		);
		display_field( 
			$_GET['id'],
			$results->popupLink,
			"Link Back to Offer Page", 
			"popupLink",
			"This is the URL for this landing page for the popup."
		);

		display_field( 
			$_GET['id'],
			$results->popupLinkText,
			"Linkback Text", 
			"popupLinkText",
			"Text for the link to directs back to the full landing page."
		);

		

	?>
</div>

<div id="coupon_tab" class="tabby" style="display: none">
<div class="tabBlock" id="coupon_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Coupon Deal Settings</h1>
			<h3 style="font-weight: normal">Add a coupon to your deal page..</h3>
		</div>

		
	<?php
	display_option( 
		$_GET['id'],
		$results->couponCheck,
		"Choose to Show Coupon", 
		"couponCheck",
		"Choose whether to show your affiliate button or your coupon code",
		"Show Affiliate Button [1], Show Coupon Code [2]"
	);
	display_field( 
			$_GET['id'],
			$results->couponCode,
			"Coupon Code", 
			"couponCode",
			"The coupon code that will be displayed, replacing the 'buy now button'"
		);

	
display_field( 
	$_GET['id'],
	$results->couponLinkText,
	"Coupon Link Text", 
	"couponLinkText",
	"The text that is shown for the coupon link"
);

display_field( 
	$_GET['id'],
	$results->couponLink,
	"Coupon Link", 
	"couponLink",
	"Link to affiliate check out page"
);

display_option( 
	$_GET['id'],
	$results->couponShow,
	"Show Link / Popup", 
	"couponShow",
	"Choose whether to show your link or pop up box.",
	"Show Link [1], Show Popup [2]"
);

display_wpeditor( 
	$_GET['id'],
	$results->couponContent,
	"Coupon Pop-up Content", 
	"couponContent",
	"The content that will appear in a pop up box"
);

		?>

	</div>

<div id="shortcode_tab" class="tabby" style="display: none">
	<div class="tabBlock" id="coupon_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Coming Soon</h1>
			<h3 style="font-weight: normal">...</h3>
		</div>
</div>

	
<div style="padding-top: 15px; margin-top: 15px; ">
		<span style="margin: 10px 0; float: left; padding-left: 10px; color: #888">
			<img src="https://cdn3.iconfinder.com/data/icons/uidesignicons/information.png" style="float: left; margin-right: 7px">
			Need help? Check out the PDF tutorials at the top right of each page.
		</span>
		
		<br clear="right" />
	</div>

</div>