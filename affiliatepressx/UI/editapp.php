<?php  



	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	
	$ID = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($data as $data) {}

	// Return Option Object:
	$results = get_option('affiliatepressx_campaign_'. $ID);	
	// echo $data->id;

?>

<div class="editTop" style="position: relative">
	

		<div class="appinfo">
			<div id="updatedMessage" style="display: none;position: absolute; background: #b7e595; padding: 8px 11px; border-radius: 4px; border: 1px solid #6fab43;  color: #152b06;top: 185px; font-size: 17px; right: 225px;">
				<img src="https://cdn2.iconfinder.com/data/icons/c9d/check.png" style="float: left; margin-right: 10px; margin-top: -4px">
				<strong>Updated Changes</strong>

			</div>
			<input type="text" value="[affiliatepressx id='<?php echo $_GET['id']; ?>']" class="grey-btn" style="float: right; z-index: 4 !important;padding: 10px; height: 38px; margin-top: 13px; margin-right: -10px; cursor: text">
			<span class="blue-btn2 btn" id="previewIt"  style="position: absolute; top: 33px; font-size: 17px; right: 20px; padding: 10px;z-index: 991;" ><a href="<?php echo get_permalink( $data->postID ); ?>" target="_blank" >View</a></span>
			
			<span class="appTitle" style="color: #fff; padding-left: 0;  font-size: 21px; letter-spacing: -1px; text-shadow: 0 0 1px #000"><?php echo stripcslashes($data->appname); ?></span>
			<span class="appMeta"style="color: #ddd; padding-left: 0; text-shadow: 0 0 1px #000">
 
				<strong>Views:</strong> <?php echo get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalViews'); ?> 
				- <strong><acronym title="Call to Action Clicks">Clicks:</acronym></strong> <?php echo get_option('affiliatepressx_campaign_'.$_GET['id'].'_totalClicks'); ?> 
				- <strong><acronym title="Conversion Rate">Conv. Rate:</acronym></strong> <?php echo substr(get_option('affiliatepressx_campaign_'.$_GET['id'].'_totalClicks') / get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalViews') * 100, 0, 4); ?>% 
				- <strong>SEO Score:</strong> <span class="circle"><?php echo get_option('affiliatepressx_campaign_'.$_GET['id'].'_seoScore'); ?>%</span></span>
		</div>

		

		<br clear="left">

</div>

<div class="editNav">
		
		<div class="editItem editSelected" tab="tab1" nav="dashNav" firstTab="started_tab" >
			Dashboard
		</div>

		<div class="editItem" tab="tab2"  nav="settingsNav" firstTab="seo_tab">
			Main Settings
		</div>

		<div class="editItem" tab="tab7"  nav="designNav" firstTab="main_tab">
			Customize
		</div>

		<div class="editItem" tab="tab3"  nav="dealNav" firstTab="countdown_tab">
			Countdown
		</div>

		<div class="editItem" tab="tab4"  nav="contentNav" firstTab="content_tab">
			Content
		</div>

		<div class="editItem" tab="tab6"  nav="extraNav" firstTab="email_tab">
			Extra Features
		</div>

		

		<div class="editItem2" style="float:right;">
			<span class="blue-btn btn" id="saveIt" style="margin-left:10px; padding: 10px 20px" ><a href="#" id="saveIt_text">Click to Save</a></span>
		</div>

		

		<br clear="all" >

</div>

<style>
	
	.mainNav {
		display: none;
		width:941px;
		background-image: linear-gradient(to bottom, #2BA0E8, #45b7fe);background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzE0NzBjMSIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iNCUiIHN0b3AtY29sb3I9IiMyMzgxZDUiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzJiOGZlMyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iNTMlIiBzdG9wLWNvbG9yPSIjMzE5YmU5IiBzdG9wLW9wYWNpdHk9IjEiLz4KPHN0b3Agb2Zmc2V0PSI5NyUiIHN0b3AtY29sb3I9IiMzZGFiZjkiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxOTg2ZDIiIHN0b3Atb3BhY2l0eT0iMSIvPgogICA8L2xpbmVhckdyYWRpZW50PgoKPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIGZpbGw9InVybCgjaGF0MCkiIC8+Cjwvc3ZnPg==);
background-image: -moz-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: -o-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: -webkit-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);

		-webkit-text-shadow: 0 1px 0 #135891;
		-moz-text-shadow: 0 1px 0 #135891;
		text-shadow: 0 1px 0 #135891;
		height: 42px;
		margin: 0;

	}
		.mainNav a {
			float: left;
			display: block;
			padding: 13px 20px;
			text-align: center;
			color: #fff;
			font-weight: bold;
			text-shadow: 0 1px 0 #0d3f72;
			font-size: 14px;
			text-decoration: none;
		}
			.mainNav a.active,.mainNav a:hover {
				-moz-box-shadow: inset 0 0 32px rgba(134,39,47,.75), inset 0 0 3px rgba(237,111,102,.53);
-webkit-box-shadow: inset 0 0 32px rgba(134,39,47,.75), inset 0 0 3px rgba(237,111,102,.53);
box-shadow: inset 0 0 32px rgba(134,39,47,.75), inset 0 0 3px rgba(237,111,102,.53);
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2JiMjczMyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2Q1M2Y0MyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+);
background-image: -moz-linear-gradient(bottom, #bb2733 0%, #d53f43 100%);
background-image: -o-linear-gradient(bottom, #bb2733 0%, #d53f43 100%);
background-image: -webkit-linear-gradient(bottom, #bb2733 0%, #d53f43 100%);
background-image: linear-gradient(bottom, #bb2733 0%, #d53f43 100%);

				color: #fff;
				font-weight: bold;
				text-shadow: 0 1px 0 #222;
			}
</style>

<div class="mainNav" id="dashNav" style="display: block">
	<a href="#" class="newTab active" tab="started_tab">Getting Started</a>
	<a href="#" class="newTab" tab="support_tab">Support Center</a>
	<a href="#" class="newTab" tab="seoReport_tab">SEO Page Report</a>
</div>

<div class="mainNav" id="settingsNav">
	<a href="#" class="newTab active" tab="seo_tab">SEO Settings</a>
	<a href="#" class="newTab" tab="affbutton_tab">Affiliate Button</a>
	<a href="#" class="newTab" tab="headline_tab">Header</a>
	<a href="#" class="newTab" tab="social_tab">Social Sharing</a>
	<a href="#" class="newTab" tab="extracss_tab">Extra CSS + JS</a>
</div>

<div class="mainNav" id="designNav">
	<a href="#" class="newTab active" tab="main_tab">Button Color</a>
	<a href="#" class="newTab" tab="font_tab">Typography</a>
	<a href="#" class="newTab" tab="banner_tab">Background</a>
	<a href="#" class="newTab" tab="design_tab">Deal Box</a>
	<a href="#" class="newTab" tab="layout_tab">Layout</a>
</div>

<div class="mainNav" id="dealNav">
	<a href="#" class="newTab active" tab="countdown_tab">Countdown Settings</a>
	<a href="#" class="newTab" tab="video_tab">Video</a>
	<a href="#" class="newTab" tab="progress_tab">Progress Bar</a>
	<a href="#" class="newTab" tab="price_tab">Special Price</a>
	<a href="#" class="newTab" tab="reg_tab">Regular Price</a>
	<a href="#" class="newTab" tab="discount_tab">Discount</a>
</div>

<div class="mainNav" id="contentNav">
	<a href="#" class="newTab active" tab="content_tab">Main Content</a>
	<a href="#" class="newTab" tab="sidebar_tab">Sidebar</a>
	<a href="#" class="newTab" tab="footer_tab">Footer</a>
</div>

<div class="mainNav" id="extraNav">
	<a href="#" class="newTab active" tab="email_tab">Auto-Responder</a>
	<a href="#" class="newTab" tab="popup_tab">Pop-up</a>
	<a href="#" class="newTab" tab="coupon_tab">Coupon</a>
	<a href="#" class="newTab" tab="slider_tab">Content Slider</a>
</div>


<div class="editArea">

	<form id="editApp" >

	<?php
	
		display_field_hidden(
			"action", 
			$pluginName . "_edit"
		);

		display_field_hidden(
			"id", 
			$_GET['id']
		);

	?>

	<?php


		include("app/dashboard.php");
		include("app/settings.php");
		include("app/design.php");
		include("app/countdown.php");
		include("app/sidebar.php");
		include("app/content.php");

	?>


	</form>


	<div id="arcode_hdn_div" ></div>
	<div id="arcode_hdn_div2"></div>

</div>