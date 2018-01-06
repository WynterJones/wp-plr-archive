<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar main_icon">
		<a href="http://www.wpaffiliatepress.com/help/AffiliatePress-settings.pdf" target="_blank" ><span style="float: right; margin-top: 13px; margin-right: -23px" id="helpPDF" class="grey-btn" ><img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/pdf.png" style="margin-right: 5px; margin-bottom: -3px">Settings Tutorial PDF</span></a>
		<h2>Main Settings</h2>
		<p>Edit the main content and settings for your page:</p>
	</div>


	<!-- <div class="tabBlock" id="seo_tab1_link" style="cursor: pointer;">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 30px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			
			<h1>SEO Settings</h1>
			<h3 style="font-weight: normal">Edit the Search Engine Optimization Settings..</h3>
		</div> -->
<div id="affbutton_tab" class="tabby" style="display: none">
<div class="tabBlock" id="affiliate_tab1_link">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Affiliate Button</h1>
			<h3 style="font-weight: normal">Edit the affiliate button settings..</h3>
		</div>

		
	<?php
	display_field( 
			$_GET['id'],
			$results->buyNowURL,
			"Affiliate Link URL", 
			"buyNowURL",
			"Link used for all buy now buttons"
		);

	

		display_field( 
			$_GET['id'],
			$results->buyNow,
			"Buy Now Button Text", 
			"buyNow",
			"Text shown for buy now button"
		);

		

		display_field( 
			$_GET['id'],
			$results->alertText,
			"Limited Time Text", 
			"alertText",
			"Shown above the date countdown"
		);

		?>
</div>
		<div  id="seo_tab" class="tabby" style="display: block">

			<div class="tabBlock" >
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			
			<h1>SEO Settings</h1>
			<h3 style="font-weight: normal">Edit the Search Engine Optimization Settings..</h3>
	</div>
	<?php

		display_field( 
			$_GET['id'],
			$results->title,
			"Browser Title", 
			"title",
			"Shown in the browser title"
		);

		

		display_field( 
			$_GET['id'],
			$results->keywords,
			"Meta Keywords", 
			"keywords",
			"Meta content keywords for Search Engines"
		);

		display_textarea( 
			$_GET['id'],
			$results->description,
			"Meta Description", 
			"description",
			"Meta description for Search Engines"
		);

		?>
</div>

<!-- <div class="tabBlock" id="mainContent_tab1_link" style="cursor: pointer;">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 30px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Headline &amp; Footer Settings</h1>
			<h3 style="font-weight: normal">Edit the main content settings..</h3>
		</div> -->

		<div id="headline_tab" class="tabby" style="display: none">

			<div class="tabBlock" id="mainContent_tab1_link" style="cursor: pointer;">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Headline &amp; Footer Settings</h1>
			<h3 style="font-weight: normal">Edit the main content settings..</h3>
		</div>
<?php if ($results->logoImage != "") { ?>
		<!-- Load Feather code -->
<script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>

<!-- Instantiate Feather -->
<script type='text/javascript'>
   var featherEditor = new Aviary.Feather({
       apiKey: 'xaexoj5ueqg5ackc',
       apiVersion: 3,
       theme: 'dark', // Check out our new 'light' and 'dark' themes!
       tools: 'text,stickers,effects,frames,focus,colorsplash,draw',
       appendTo: '',
       onSave: function(imageID, newURL) {
           var img = document.getElementById(imageID);
           img.src = newURL;
           document.getElementById('logoImage').value = newURL;
       },
       onError: function(errorObj) {
           alert(errorObj.message);
       }
   });
   function launchEditor(id, src) {
       featherEditor.launch({
           image: id,
           url: src
       });
      return false;
   }
</script>
<style>
	#image1 {
		width: 853px;
		border-radius: 5px;
		box-shadow: 0 0 3px #888;
	}
</style>
<div style=" width: 700px; margin: 20px;">
	
<div id='injection_site'></div>

<img id='image1' src='<?php echo $results->logoImage; ?>'/>

<!-- Add an edit button, passing the HTML id of the image and the public URL of the image -->
<p><input type='image' src='http://images.aviary.com/images/edit-photo.png' value='Edit photo' onclick="return launchEditor('image1', '<?php echo $results->logoImage; ?>');" /></p>
</div>

<?php } ?>
	<?php

		display_option( 
			$_GET['id'],
			$results->showHeader,
			"Show/Hide Header", 
			"showHeader",
			"Choose to show or hide the header image / content.",
			"Show Header [1], Hide Header [hide]"
		);

		display_field_image( 
			$_GET['id'],
			$results->logoImage,
			"Banner Image", 
			"logoImage",
			"Banner Image * auto-stretched (leave blank to show text headline)"
		);
		// display_field( 
		// 	$_GET['id'],
		// 	$results->headline,
		// 	"Main Headline", 
		// 	"headline",
		// 	"The top headline on page"
		// );

		// display_field( 
		// 	$_GET['id'],
		// 	$results->subheadline,
		// 	"Main Sub-Headline", 
		// 	"subheadline",
		// 	"The top sub-headline on page"
		// );

		display_wpeditor( 
			$_GET['id'],
			$results->header,
			"Header Content", 
			"header",
			"Show header content and hide BANNER image"
		);


		display_option( 
			$_GET['id'],
			$results->darkLight,
			"Headline Dark / Light", 
			"darkLight",
			"Change the headline text from white to black text color",
			"Light [1], Dark [2]"
		);

	

		


		

		// display_field( 
		// 	$_GET['id'],
		// 	$results->bannerImage,
		// 	"Main Banner Image", 
		// 	"bannerImage",
		// 	"Large banner ad shown below deal offer block"
		// );

		// display_option( 
		// 	$_GET['id'],
		// 	$results->bannerDisplay,
		// 	"Main Banner Style", 
		// 	"bannerDisplay",
		// 	"Choose the style that affects the main banner",
		// 	"Show Banner Image [1], Hide Banner Image [2]"
		// );

		?>
</div>

<!-- <div class="tabBlock" id="social_tab1_link" style="cursor: pointer;">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 30px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Social Share Settings</h1>
			<h3 style="font-weight: normal">Edit the social share button settings..</h3>
		</div> -->

		<div id="social_tab"  class="tabby" style="display: none">

			<div class="tabBlock" id="social_tab1_link" style="cursor: pointer;">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Social Share Settings</h1>
			<h3 style="font-weight: normal">Edit the social share button settings..</h3>
		</div> 
<?php

		display_field( 
			$_GET['id'],
			$results->socialHeadline,
			"Social Headline", 
			"socialHeadline",
			"Shown below deal offer block"
		);

		


		display_option_img( 
			$_GET['id'],
			$results->socialStyle,
			"Social Button Style", 
			"socialStyle",
			"Choose which style to show the social icons",
			"$sitePath"."/images/smallIcon.png [1],
			 $sitePath"."/images/oundIcon.png [2],
			 $sitePath"."/images/bigIcons.png [3],
			 $sitePath"."/images/small.png [4],
			 $sitePath"."/images/big.png [5]"
		);
		



		

		

		

	?>
</div>

<!-- <div class="tabBlock" id="extraSettings_tab1_link" style="cursor: pointer;">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 30px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Custom CSS/JS &amp; Shortcode URL Settings</h1>
			<h3 style="font-weight: normal">Customize your page further with extra settings..</h3>
		</div> -->

		<div id="extracss_tab"  class="tabby"style="display: none">

			<div class="tabBlock" id="extraSettings_tab1_link" style="cursor: pointer;">
			<div  style="float: right; cursor: pointer; margin-top: 10px; margin-right: 50px; opacity: .5">
				<img  src="https://cdn2.iconfinder.com/data/icons/linecons/32/settings-64.png" style="float: right;">
			</div>
			<h1>Custom CSS/JS &amp; Shortcode URL Settings</h1>
			<h3 style="font-weight: normal">Customize your page further with extra settings..</h3>
		</div>
<?php



		display_textarea( 
			$_GET['id'],
			$results->css,
			"Custom CSS", 
			"css",
			"Add your own custom CSS"
		);

		display_textarea( 
			$_GET['id'],
			$results->jquery,
			"Custom Javascript", 
			"jquery",
			"Add custom javascript and/or tracking code"
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