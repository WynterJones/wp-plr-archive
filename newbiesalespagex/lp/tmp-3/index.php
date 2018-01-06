<html>
<head>
	<title>Page Editor</title>
	<?php
	
		define('WP_USE_THEMES', false);
		require('../../../../../wp-blog-header.php');
		
		$urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		$urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
		$urlx = str_replace( "?", "", $urlx);
		global $wpdb;
		$table_db_name = $wpdb->prefix . $pluginName;
		
		$ID = $_GET['id'];
		
		$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
		
		foreach($data as $data) {}

		$results = get_option('newbiesalespagex_campaign_'. $ID);	
		$full_path = get_site_url();


		$assets = $full_path . "/wp-content/plugins/newbiesalespagex/lp/tmp-3/";
		$toolbar = $full_path . "/wp-content/plugins/newbiesalespagex/lp/editor/";

	?>

	<!-- Editor Start -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $toolbar; ?>shortcut.js" type="text/javascript"></script>
	<script src="<?php echo $toolbar; ?>farbtastic/farbtastic.js" type="text/javascript"></script>
	<script src="<?php echo $toolbar; ?>bootstrap/bootstrap-dropdown.js" type="text/javascript"></script>	
	<script src="<?php echo $toolbar; ?>freshereditor.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#content-editor').freshereditor({toolbar_selector: "#toolbar", excludes: ['removeFormat', 'strikethrough', 'forecolor', 'backcolor', 'FontSize', 'fontname']});
		$("#content-editor").freshereditor("edit", true);
		$('.btn-group:empty').hide();
		$('#saveHTML').click(function () {
			$('#html').val();
			var htmlBox = $.trim($('#content-editor').html().replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g,""));
			$('#html').val(htmlBox);
			$('#html').show();
		});
	});
	</script>
	<link href="<?php echo $toolbar; ?>bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $toolbar; ?>farbtastic/farbtastic.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $toolbar; ?>freshereditor.css" rel="stylesheet" type="text/css" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo $toolbar; ?>toolbar.css" media="all" />
	<!-- Editor End -->

	<link href="<?php echo $assets; ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $assets; ?>css/main.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!-- Editor HTML -->
	<a href="#" id="saveHTML">SAVE</a>
	<div style='position: fixed;z-index: 9999; '><div id="toolbar"></div></div>
	<textarea name="html" id="html" cols="30" rows="10"></textarea>
	<!-- Editor HTML -->

	<div id="content-editor">
<div id="mainWrapper">

	<div id="topArea">
		
		<img src="<?php echo $assets; ?>images/logo.png" alt="">

		<img src="<?php echo $assets; ?>images/headline.png" style="margin-top:2px;" alt="">

		<img src="<?php echo $assets; ?>images/headline2.png" style="margin-top:37px;" alt="">

	</div>

	<div id="mainContent">
		
		<div id="blocks">
				
				<div class="blockContent" style="margin-right:35px;">
			    	      <h3><img src="http://cdn3.iconfinder.com/data/icons/socialmediabookmark/32/wordpress.png" align="right" style="margin-left:10px; " />Powerful WP Plugin</h3>
			    	      <p>Easy to install & use Wordpress plugin. Get started right away, and set up as many timeline optin pages as you want...</p>
			      </div>
			    	    <div class="blockContent" style="margin-left:45px; margin-right:35px;">
			    	      <h3><img src="http://cdn1.iconfinder.com/data/icons/CrystalClear/32x32/actions/edit.png" align="right" style="margin-left:10px;" />Super Easy To Edit & Get Going</h3>
			    	      <p>In a few minutes you can have your own high converting landing page...</p>
			  	      </div>
			  	      
			  	      <div class="blockContent" style="margin-left:45px;">
			  	        <h3><img src="http://cdn3.iconfinder.com/data/icons/humano2/32x32/emblems/emblem-art2.png" align="right" style="margin-left:10px;" />Easy To Customize</h3>
			  	        <p>A ton of design combinations, and you can add your own backgrounds and optin buttons...</p>
			  	      </div>
			  	      
			  	      
			  	      <div style="margin-bottom:10px; margin-top:10px; float:left; width:100%;"></div>
			  	      
			  	      
			  	      <div class="blockContent" style="margin-right:35px;">
			  	          	      <h3><img src="http://cdn2.iconfinder.com/data/icons/finance_icons/PNG/png32/coins.png" align="right" style="margin-left:10px; " />High Converting Designs</h3>
			  	          	      <p>Everything is done for you, just enter in your copy and you have a very high converting landing page...</p>
			  	            </div>
			  	          	    <div class="blockContent" style="margin-left:45px; margin-right:35px;">
			  	          	      <h3><img src="http://cdn4.iconfinder.com/data/icons/IMPRESSIONS/database/png/24/connect.png" align="right" style="margin-left:10px;" />Connect ANY Auto-Responder Service</h3>
			  	          	      <p>Collect leads inside of WP and export them to CSV and have them automatically opted in to your favourite AR service...</p>
			  	        	      </div>
			  	        	      
			  	        	      <div class="blockContent" style="margin-left:45px;">
			  	        	        <h3><img src="http://cdn4.iconfinder.com/data/icons/IMPRESSIONS/multimedia/png/32/video.png" align="right" style="margin-left:10px;" />Add a Video or a Headline Image!</h3>
			  	        	        <p>You can replace your copy in the landing page with a video, or your own graphics very easily!</p>
			  	        	      </div>
			  	        	      
			  	        	      
			  	        	      
			  	      <div style="margin-bottom:10px; margin-top:10px; float:left; width:100%;"></div>
			  	      
			  	      
			  	      <div class="blockContent" style="margin-right:35px;">
			  	          	      <h3><img src="http://cdn3.iconfinder.com/data/icons/discovery/24x24/apps/system-installer.png" align="right" style="margin-left:10px; " />Easy To Install</h3>
			  	          	      <p>Just upload the zip file to your WP install, and your good to go! It's really that simple to get started...</p>
			  	            </div>
			  	          	    <div class="blockContent" style="margin-left:45px; margin-right:35px;">
			  	          	      <h3><img src="http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/apps/help.png" align="right" style="margin-left:10px;" />Helpful Tutorial Guides</h3>
			  	          	      <p>You will be able to access helpful guides on how to setup your optin pages with the plugin... Super helpful!</p>
			  	        	      </div>
			  	        	      
			  	        	      <div class="blockContent" style="margin-left:45px;">
			  	        	        <h3><img src="http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/apps/keditbookmarks.png" align="right" style="margin-left:10px;" />DEVELOPERS LICENSE</h3>
			  	        	        <p>Yes, just for the low price of $9, you can also get Developers license! You can use this for as many projects as you want. Unlimited domains!</p>
			  	        	      </div> 

			  	        	      <br clear="all" />
			</div>

			<div id="designs">

				<img src="<?php echo $assets; ?>images/designs.png" style="margin-top:2px;" alt="">

			</div>

			<div id="video">

				<img src="<?php echo $assets; ?>images/video.png" style="margin-top:2px;" alt="">

				<center>
				<iframe style="margin-top: 40px; margin-bottom:20px;" width="774" height="515" src="http://www.youtube.com/embed/eny9kSf-V4Q?rel=0" frameborder="0" allowfullscreen=""></iframe>
				</center>

			</div>

			<div id="order" class="hero-unit" style="margin-top:30px;" >
				<center>
				<h1 style="margin-top:-20px;">Order Now For Only $24</h1>
				  <p style="margin-top:15px; margin-bottom:25px;">Simple one time payment of only $24 gets you this plugin for ALL your wordpress projects - that's right, you get the full developers license with it! Create landing pages for your own projects or clients projects. This low price will not last forever!</p>
				  <p>
				    <a class="btn btn-success btn-large" style="width:500px; padding:20px; font-size:32px;">
				      Order Your Copy Now
				    </a>
				  </p>

				</center>
			</div>
		
		<div class="alert alert-block">
			<center>
		  		<h3>30 Day No Questions Asked Money Back Guarantee</h3>
		  		If you have any problem with this order, for any reason, just email us, and we will refund your money as soon as we can!<Br> Try out this amazing plugin today in your business and see the difference!
			</center>
		</div>

		<div style="margin-top: 20px; margin-bottom:40px;">
			<center>
		  		<p>EverLead - All Rights Reservered</p>
			</center>
		</div>


	</div>
	
</div>	</div>	

</body>
</html>