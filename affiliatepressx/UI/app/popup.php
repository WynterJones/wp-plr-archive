<div class="tabber" id="tab8" style="display: none;">

	<div class="titleBar popup_icon">
		<a href="http://www.wpaffiliatepress.com/help/AffiliatePress-popup.pdf" target="_blank" ><span style="float: right; margin-top: 13px; margin-right: -23px" id="helpPDF" class="grey-btn" ><img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/pdf.png" style="margin-right: 5px; margin-bottom: -3px">Popup Tutorial PDF</span></a>
		<h2>Popup Settings:</h2>
		<p>Customize your pop-up for that you can show on your normal blog theme...</p>
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

	
<div style="padding-top: 15px; margin-top: 15px; ">
		<span style="margin: 10px 0; float: left; padding-left: 10px; color: #888">
			<img src="https://cdn3.iconfinder.com/data/icons/uidesignicons/information.png" style="float: left; margin-right: 7px">
			Need help? Check out the PDF tutorials at the top right of each page.
		</span>
		
		<br clear="right" />
	</div>

</div>