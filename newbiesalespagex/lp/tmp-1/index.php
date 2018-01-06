<!doctype html>
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


		$assets = $full_path . "/wp-content/plugins/newbiesalespagex/lp/tmp-1/";
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

	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>include/css/kickstart.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>style.css" media="all" />
	
</head>
<body>	

	<!-- Editor HTML -->
	<a href="#" id="saveHTML">SAVE</a>
	<div style='position: fixed;z-index: 9999; '><div id="toolbar"></div></div>
	<textarea name="html" id="html" cols="30" rows="10"></textarea>
	<!-- Editor HTML -->


	<!-- Wrap Body inside #content-editor Div ** -->
	  <div id="content-editor" >
	<!-- Wrap Body inside #content-editor Div ** -->


		<div id="wrap" class="clearfix">
			<div id="header">
				<div id="nav">
					<ul>
						<li>
							<strong>WPSPEEDLOCK</strong>
						</li>	
						<li><a href="#features">Features</a></li>
						<li><a target="_blank" href="http://blog.monetizedesignplr.com/go-limited/speed-lock-viral-page/">Demo</a></li>
						<li><a href="#checklist">Check List</a></li>
						<li><a href="#video">Watch Video</a></li>
						<li><a href="#">Buy Now</a></li>
					</ul>
				</div>
				<a href="#" id="topbutton">Download Now for $29.99</a>

				<div id="mainheadline">
					<h1>"The Ultimate Viral Lead Collecting System"</h1>
					<h3>Collect Leads, Generate Twitter Traffic &amp; / OR Profit in Minutes</h3>
				</div>

				<div id="banner">
					<img src="<?php echo $assets; ?>images/preview.gif" alt="">
				</div>
			</div>

			<div id="content">
				<div class="subheadline">
					<a href="#" id="greenbutton">Download Now for $29.99</a>
					<a target="_blank" href="http://blog.monetizedesignplr.com/go-limited/speed-lock-viral-page/" id="bluebutton">Click Here to View Demo</a>
					<br clear="all" />
					<h1>Create Unlimited Speed Countdown Viral Pages</h1>
					<h3>Watch The Video to See How Easy It Is to Setup</h3>
					<a name="video"></a>
					<!-- <iframe src="http://www.screenr.com/embed/nBO7" width="650" height="396" frameborder="0" style="margin: 0 auto; margin-top: 40px; display: block;"></iframe> -->
				</div>
				<div class="subheadline">
					<h1>Browse WPSPEEDLOCK Features</h1>
				</div>
				<div class="col_8">
					<h3>The Power of The Time Limit</h3>
					<h5>Increase Your Conversions with Time Limit Lock System</h5>
					<p>The timed countdown can by any number of minutes ranging from 1 to 99 minutes. This allows you to showcase a ebook graphic, video or image that indicate the countdown. Once the time hits 0 it will fade away the free viral options and display the payment options that will cookie as well to make sure the fast-action offer is now locked. This is perfect to create suspense and will increase conversions the more you use it.</p>
				</div>
				<div class="col_4">
					<img src="<?php echo $assets; ?>images/thumb1.png" alt="">
				</div>
				<hr>
				<div class="col_8">
					<h3>Collect Email Leads With Ease</h3>
					<h5>Paste Your Auto-Responder Code to Setup in Seconds</h5>
					<p>Collect email leads using any of your favorite email auto responder service such as Aweber. Just copy and paste in your HTML form auto-responder into the options panel form and it will automatically connect it to the styled optin box that appears on your page. It's fast and easy. You can collect leads from new twitter traffic or from users who do not have twitter accounts. Two ways to increase your overall conversions.</p>
				</div>
				<div class="col_4">
					<img src="<?php echo $assets; ?>images/thumb2.png" alt="">
				</div>
				<hr>
				<div class="col_8">
					<h3>Easy to Setup and Install</h3>
					<h5>Only Takes a Small Effort to Setup a New Speed Lock Page</h5>
					<p>A easy to use wordpress plugin that is simple to upload as a .zip in the Plugins area in your wordpress blog. Click the activate button and you will be able to create new Speed Lock pages that will give you all the options to make high converting lead collecting and traffic generating pages. You can create as many pages as you would like. Its very fast to setup just like any other wordpress plugin.</p>
				</div>
				<div class="col_4">
					<img src="<?php echo $assets; ?>images/thumb4.png" alt="">
				</div>
				<hr>
				<div class="col_8">
					<h3>Facebook + Mobile Enabled</h3>
					<h5>Ready To Fit The Size &amp; Scale for Facebook and Mobile</h5>
					<p>All of your pages will respond to the size of your web broswer if you have a smaller resolution the page will scale to fit. This also works to fit on mobile devices such as iPhones, iPads and the page will also sclae to fit the facebook fan page iframe. You do not need to do anything the desktop link for your page will look good on all of those other devices. Just to make sure you get the maximium conversions.</p>
				</div>
				<div class="col_4">
					<img src="<?php echo $assets; ?>images/thumb3.png" alt="">
				</div>
				<hr> <a name="features"></a>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn2.iconfinder.com/data/icons/windows-metro-style-icons-graphics-vibe/64/wordpress-px.png" alt="">
						<h4>Wordpress 3.5+</h4>
						<p>Tested to work in the latest wordpress version as well as the older versions, so you have a easy setup!</p>
					</div>
				</div>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn3.iconfinder.com/data/icons/diagram/64x64/diagram-02.png" alt="">
						<h4>Full Blog System</h4>
						<p>Add new content that promotes your business that will generate more traffic/leads from twitter.</p>
					</div>
				</div>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn2.iconfinder.com/data/icons/dellipack/64/safe.png" alt="">
						<h4>Give Away / Sell</h4>
						<p>You can give away products for a small time frame and then force them to purchase if time's up.</p>
					</div>
				</div>
				<hr>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Gnome-Video-X-Generic-64.png" alt="">
						<h4>Add Your Video</h4>
						<p>Add your business commercial or add your own your video for the front page to increase your lead generation.</p>
					</div>
				</div>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/64x64/apps/applixware.png" alt="">
						<h4>Typography Fonts</h4>
						<p>Make your pages beautiful with a few clicks using Google Fonts to change your page instantly.</p>
					</div>
				</div>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn5.iconfinder.com/data/icons/Hosting_Icons/64/secure-server-px-png.png" alt="">
						<h4>Timed Lock Out</h4>
						<p>After your set time the user will be locked out of the free offer and forced to purchase.</p>
					</div>
				</div>
				<hr>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn4.iconfinder.com/data/icons/elegantmediaicons/PNG/twitter.png" alt="">
						<h4>Send Twitter Traffic</h4>
						<p>Force users to tweet your offer page to gain access to your offer within your time limit.</p>
					</div>
				</div>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn3.iconfinder.com/data/icons/quartz/Box_content.png" alt="">
						<h4>Full Content Pages</h4>
						<p>Add all the content you need with the featured boxes, footer and wordpress post content.</p>
					</div>
				</div>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn1.iconfinder.com/data/icons/glaze/64x64/filesystems/desktop.png" alt="">
						<h4>Easy to Edit</h4>
						<p>Change the background style, font and all of the content on the fly. Using the wordpress options panel.</p>
					</div>
				</div>
				<hr>
				<div class="col_8">
					<h3>Design Options Change on The Fly</h3>
					<h5>Give Your Pages a Professional Style With Ease</h5>
					<p>You have control over how you would like to showcase your viral offer pages. You can change the background style from a variety of colors and even includes a rainbow option. You also have access to 14 different Google Fonts to edit the Headline and Paragraph fonts seperately to create a unique offer page. If you have a bold display font attitude or a soft hand written style. It's all up to you!</p>
				</div>
				<div class="col_4">
					<img src="<?php echo $assets; ?>images/thumb1.png" alt="">
				</div>
				<hr>
				<div class="col_8">
					<h3>Tweet Payment Option</h3>
					<h5>Share Your Offer URL to Gain Instant Access</h5>
					<p>Before the time runs out the users have the option to share the offer on their twitter account which includes your custom description and link to the page to increase your overall views. The other option is to sign up using their email account. The twitter option is a quick way to increase the overall exposure of the page and since there is a small time limit, more action will be taken sooner.</p>
				</div>
				<div class="col_4">
					<img src="<?php echo $assets; ?>images/thumb5.png" alt="">
				</div>
				<hr>
				<div class="col_8">
					<h3>Featured Box Elements</h3>
					<h5>Add Professional Column Box for Your Pages</h5>
					<p>Add your three (3) features to help describe the offer that you have. Include your custom image, headline and content. The content is powered by the wordpress wysiwyg editor to give you the best control over the content and how it is displayed. This will help give your web traffic a better understanding of your product or service that is up for grabs within the time limit.</p>
				</div>
				<div class="col_4">
					<img src="<?php echo $assets; ?>images/thumb6.png" alt="">
				</div>
				<hr>
				<div class="subheadline">
					<h1>Take The Direct-Response Approach</h1>
					<h3>Learn How WP SPEED LOCK Can Help You</h3>
				</div><a name="checklist"></a>
				<div style="width: 700px; margin: 20px auto; margin-top: 0;clear: both">
					<ul class="check-list">
						<li>
							<h4><strong>Create Unlimited SpeedLock Pages in Wordpress</strong></h4>
						</li>
						<li>
							<h4><strong>Generate Twitter Traffic on Viral Auto-Pilot</strong></h4>
						</li>
						<li>
							<h4><strong>Collect New Leads With Any Auto-Responder Service</strong></h4>
						</li>
						<li>
							<h4><strong>Force Payment After Time is Up - <span style="color: #ad2b2b;">Cookied and Locked</span></strong></h4>
						</li>
					</ul>
					<ul class="x-list">
						<li>
							<h4><strong>No Need for Long Frustrating Setup.. It's REALLY Easy!</strong></h4>
						</li>
						<li>
							<h4><strong>WP Plugin is NOT Encoded or Hassle to Install</strong></h4>
						</li>
						<li>
							<h4><strong>It is NOT LOCKED - Includes Unlimited Use License</strong></h4>
						</li>
					</ul>
				</div>
					<img src="<?php echo $assets; ?>images/logo.png" style="display: block; margin: 0 auto; margin-left: 100px; text-align: center">
					<br clear=" both;">
				<div class="subheadline">

					<a href="#" id="greenbutton">Download Now for $29.99</a>
					<a target="_blank" href="http://blog.monetizedesignplr.com/go-limited/speed-lock-viral-page/" id="bluebutton">Click Here to View Demo</a>
					<br clear="all" />
				</div>

				<hr>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Emblem-Money-64.png" alt="">
						<h4>Money Back Gaurantee</h4>
						<p>If For Any Reason You Are Not Happy You Will Get Your Money Back No Questions Asked</p>
					</div>
				</div>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn4.iconfinder.com/data/icons/elegantmediaicons/PNG/wordpress.png" alt="">
						<h4>Works on Any Blog</h4>
						<p>The plugin will not interact with your current wordpress blog it will only effect individual pages.</p>
					</div>
				</div>
				<div class="col_4">
					<div style="padding: 10px 8px; text-align: center;">
						<img src="http://cdn1.iconfinder.com/data/icons/CrystalClear/64x64/apps/clock.png" alt="">
						<h4>Timed Countdown</h4>
						<p>You can give away products for a small time frame and then force them to purchase if time's up.</p>
					</div>
				</div>
				<hr>
				<p>Copyright 2013 &copy; WP Speed Lock Plugin - The Ultimate Viral Offer System</p>
			</div>	
		</div>

	<!-- HTML #content-editor DIV ENDING -->
	</div>	 
	<!-- HTML #content-editor DIV ENDING -->
</body>
</html>