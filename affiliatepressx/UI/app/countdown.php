<div class="tabber" id="tab3" style="display: none;">

	<div class="titleBar deal_icon">
		<a href="http://www.wpaffiliatepress.com/help/AffiliatePress-deals.pdf" target="_blank" ><span style="float: right; margin-top: 13px; margin-right: -23px" id="helpPDF" class="grey-btn" ><img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/pdf.png" style="margin-right: 5px; margin-bottom: -3px">Deals Tutorial PDF</span></a>
		<h2>Deal Offer Settings</h2>
		<p>Edit the deal offer setting for this page:</p>
	</div>
<div id="progress_tab"  class="tabby" style="display: none">

<div class="tabBlock" id="countdown_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Progress Bar</h1>
			<h3 style="font-weight: normal">Edit progress bar shown for Date Countdown ONLY..</h3>
		</div>

		<?php 

		display_option( 
			$_GET['id'],
			$results->showProgress,
			"Show Progress Bar", 
			"showProgress",
			"Choose whether to show or hide progress bar",
			"Hide [1], Show [2]"
		);
		display_field( 
			$_GET['id'],
			$results->progressHeadline,
			"Progress Headline", 
			"progressHeadline",
			"Shown on the left side of the progress bar."
		);
		display_option_img( 
			$_GET['id'],
			$results->progressColor,
			"Bar Color", 
			"progressColor",
			"Choose the background color of progress bar.",
			"https://cdn1.iconfinder.com/data/icons/developperss/PNG/Green%20Ball.png [green], 
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Orange%20Ball.png [orange],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Blue%20Ball.png [blue],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Grey%20Ball.png [grey],
			 https://cdn1.iconfinder.com/data/icons/developperss/PNG/Purple%20Ball.png [pink]"
		);

		display_option( 
			$_GET['id'],
			$results->progressType,
			"Progress Bar Type", 
			"progressType",
			"Choose the style type of progress bar.",
			"Hide Progress Bar [hide], Chunky [1], Smooth Rounded [2], Solid Rounded [3], Thin (no text) [4], Border [5], Square [6], Italic [7]"
		);
		 ?>
</div>
<div id="countdown_tab"  class="tabby" style="display: block">

<div class="tabBlock" id="countdown_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Countdown Settings</h1>
			<h3 style="font-weight: normal">Edit the countdown date settings..</h3>
		</div>

		
	<?php

	

	
	display_option_img( 
		$_GET['id'],
		$results->chooseDate,
		"Choose Countdown Type", 
		"chooseDate",
		"Countdown towards a specific date or EverGreen daily reset on specific time or weekly on Monday at your specific time.",
		"$sitePath"."/images/icon-date.png [1],
		 $sitePath"."/images/icon-daily.png [2],
		 $sitePath"."/images/icon-weekly.png [3]"
	);
	display_date( 
			$_GET['id'],
			$results->countdown,
			"Countdown Date", 
			"countdown",
			"Choose the date that will close this offer page ** NOT used for EverGreen"
	);

	display_field( 
		$_GET['id'],
		$results->time,
		"Closing Exact Time", 
		"time",
		"The exact Hour and Minute to Close ** Used for EverGreen Daily and Weekly Reset Time"
	);

	display_option( 
		$_GET['id'],
		$results->timezone,
		"Timezone", 
		"timezone",
		"Used for Specific Date Countdown ONLY! ** EverGreen countdown use the timezone of the visitor!",
		"Eniwetok - Kwajalein [-12],
Midway Island - Samoa [-11],
Hawaii[-10],
Alaska[-9],
Pacific Time (US &amp; Canada)[-8],
Mountain Time (US &amp; Canada)[-7],
Central Time (US &amp; Canada)[-6],
Eastern Time (US &amp; Canada)[-5],
Atlantic Time (Canada)[-4],
Newfoundland[-3.5],
Brazil - Buenos Aires - Georgetown[-3],
Mid-Atlantic[-2],
Azores - Cape Verde Islands[-1],
Western Europe Time - London - Lisbon - Casablanca[0],
Brussels - Copenhagen - Madrid - Paris[1],
Kaliningrad - South Africa[2],
Baghdad - Riyadh - Moscow - St. Petersburg[3],
Tehran[3.5],
Abu Dhabi - Muscat - Baku - Tbilisi[4],
Kabul[4.5],
Ekaterinburg - Islamabad - Karachi - Tashkent[5],
Bombay - Calcutta - Madras - New Delhi[5.5],
Kathmandu[5.75],
Almaty - Dhaka - Colombo[6],
Bangkok - Hanoi - Jakarta[7],
Beijing - Perth - Singapore - Hong Kong[8],
Tokyo - Seoul - Osaka - Sapporo - Yakutsk[9],
Adelaide - Darwin[9.5],
Eastern Australia - Guam - Vladivostok[10],
Magadan - Solomon Islands - New Caledonia[11],
Auckland - Wellington - Fiji - Kamchatka[12]"
	);

	
display_field( 
		$_GET['id'],
		$results->countdownHeadline,
		"Countdown Headline", 
		"countdownHeadline",
		"Show above the buy now button"
	);
	display_option( 
		$_GET['id'],
		$results->countdownColor,
		"Countdown Color", 
		"countdownColor",
		"Choose the background color for your countdown box",
		"Grey [grey], Black [black], Red [red], Gold [gold]"
	);

	display_field( 
		$_GET['id'],
		$results->redirect,
		"Closed Redirect URL", 
		"redirect",
		"Closed redirect url countdown is finished"
	);

	?>
</div>

<div id="closed_tab"  class="tabby" style="display: none">

<div class="tabBlock" id="countdown_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Closed Redirect Link</h1>
			<h3 style="font-weight: normal">The redirect link that will show when the timer has run out..</h3>
		</div>
	<?php 
	display_field( 
		$_GET['id'],
		$results->redirect,
		"Redirect URL Link", 
		"redirect",
		"Closed button text shown when countdown is finished"
	);
	

	?>
</div>

<div id="video_tab" class="tabby" style="display: none">
<div class="tabBlock" id="affiliate_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Video Settings</h1>
			<h3 style="font-weight: normal">Choose one leave others blank..</h3>
		</div>

		<?php

		display_option( 
			$_GET['id'],
			$results->autoPlay,
			"Auto-Play", 
			"autoPlay",
			"Choose whether to auto-play video for visitors",
			"Don't Auto-Play [1], Auto-Play Video [2]"
		);
		display_field( 
			$_GET['id'],
			$results->customEmbed,
			"YouTube, Vimeo or DailyMotion", 
			"customEmbed",
			"The URL link to your YouTube, Vimeo or DailyMotion video"
		);

		display_field( 
			$_GET['id'],
			$results->videoText,
			"Preview Video Text", 
			"videoText",
			"The text that will appear above the preview image of your video.. Leave Blank to show default."
		);

		display_option_img( 
			$_GET['id'],
			$results->videoIcon,
			"Video Play Icon", 
			"videoIcon",
			"Choose the video icon",
			"https://cdn4.iconfinder.com/data/icons/Basic_set2_Png/64/paly.png [https://cdn4.iconfinder.com/data/icons/Basic_set2_Png/64/paly.png],
			 https://cdn1.iconfinder.com/data/icons/Futurosoft%20Icons%200.5.2/64x64/apps/vlc.png [https://cdn1.iconfinder.com/data/icons/Futurosoft%20Icons%200.5.2/64x64/apps/vlc.png],
			https://cdn1.iconfinder.com/data/icons/bnw/64x64/actions/player_play.png [https://cdn1.iconfinder.com/data/icons/bnw/64x64/actions/player_play.png],
			https://cdn0.iconfinder.com/data/icons/super-mono-reflection/red/button-play_red.png [https://cdn0.iconfinder.com/data/icons/super-mono-reflection/red/button-play_red.png],
			https://cdn1.iconfinder.com/data/icons/CrystalClear/64x64/actions/player_play.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/64x64/actions/player_play.png],
			https://cdn0.iconfinder.com/data/icons/ie_Glossy_button/64/button_16.png [https://cdn0.iconfinder.com/data/icons/ie_Glossy_button/64/button_16.png],
			https://cdn1.iconfinder.com/data/icons/CrystalClear/64x64/apps/xmms.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/64x64/apps/xmms.png]"
		);
		

		display_textarea( 
			$_GET['id'],
			$results->video,
			"Video Embed Code", 
			"video",
			"Add your video embed code ** replaces above video and does not auto play on command."
		);

		?>

	</div>

<div id="reg_tab"  class="tabby" style="display: none">
<div class="tabBlock" id="extra_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Regular Price</h1>
			<h3 style="font-weight: normal">The regular price of the product or service..</h3>
		</div>

		<?php display_field( 
			$_GET['id'],
			$results->regSmall,
			"Small Headline", 
			"regSmall",
			"Shown in small text above the bottom headline"
		);
		display_field( 
			$_GET['id'],
			$results->regHeadline,
			"Regular Price", 
			"regHeadline",
			"Shown in large text below the smaller headline"
		); ?>
</div>
<div id="discount_tab"  class="tabby" style="display: none">
<div class="tabBlock" id="extra_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Discount</h1>
			<h3 style="font-weight: normal">The discount or savings for this deal..</h3>
		</div>
		<?php display_field( 
			$_GET['id'],
			$results->discountSmall,
			"Small Headline", 
			"discountSmall",
			"Shown in small text above the bottom headline"
		);
		display_field( 
			$_GET['id'],
			$results->discountHeadline,
			"Discount", 
			"discountHeadline",
			"Shown in large text below the smaller headline"
		); ?>
</div>
<div id="price_tab"  class="tabby" style="display: none">
	<div class="tabBlock" id="extra_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Special Price</h1>
			<h3 style="font-weight: normal">The special price for this deal..</h3>
		</div>

		

		<?php


		display_field( 
			$_GET['id'],
			$results->priceSmall,
			"Small Headline", 
			"priceSmall",
			"Shown in small text above the bottom headline"
		);
		display_field( 
			$_GET['id'],
			$results->priceHeadline,
			"Special Price", 
			"priceHeadline",
			"Shown in large text below the smaller headline"
		);




		



		

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