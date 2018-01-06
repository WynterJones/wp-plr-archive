<!DOCTYPE html>
<html><head>
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


		$assets = $full_path . "/wp-content/plugins/newbiesalespagex/lp/tmp-2/";
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
	<meta charset="UTF-8">
	<meta name="description" content="" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="<?php echo $assets; ?>js/prettify.js"></script> 
	<script type="text/javascript" src="<?php echo $assets; ?>js/kickstart.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>css/kickstart.css" media="all" />    
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>style.css" media="all" />  
	
	<style type="text/css">
		

h1, h2, h3, h4, h5, h6 {
  font-family: sans-serif;
  color: #1c94c4;
  border-bottom:1px solid #ddd;
  padding-bottom:0.17em;
  padding-top:0.5em;
}

h1 { font-size: 188%; }
h2 { font-size: 150%; }
h3 { font-size: 132%; }
h4 { font-size: 116%; }
h5 { font-size: 100%; }
h6 { font-size: 80%;  }
	</style>
	
</head>
<body>


	<!-- Editor HTML -->
	<a href="#" id="saveHTML">SAVE</a>
	<div style='position: fixed;z-index: 9999; '><div id="toolbar"></div></div>
	<textarea name="html" id="html" cols="30" rows="10"></textarea>
	<!-- Editor HTML -->

	<div id="content-editor">



<div id="wrap" class="clearfix">
	<div id="header">
		<a href="#" ><img src="<?php echo $assets; ?>images/header.jpg" alt=""></a>
	</div>
	<div class="col_12" style="margin-top: -20px;">
		<div class="col_4">
			<img src="http://cdn5.iconfinder.com/data/icons/social/24/picons56.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Wordpress Shortcodes</h4>
			<p>Show your custom optin forms on any wordpress post using a simple shortcode that is this easy: [largeoptin name="main"] and your form will appear..</p>
		</div>
		<div class="col_4">
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/apps/package_graphics.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Professional Design</h4>
			<p>Be confident that it will work on and look good on your wordpress blog. Increase the conversions of your email optin rate with professional email optin design..</p>
		</div>
		<div class="col_4">
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/apps/Startup%20Wizard.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Creative Techniques</h4>
			<p>Using the latest web techniques to fade-in and other techniques to grab the attention of readers and get them interested in the email optin form right away..</p>
		</div>
		<div class="col_4">
			<img src="http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Email Auto-Responder</h4>
			<p>Use any email auto-responder service by just pasting in the code into one box and the wordpres plugin will do the rest it couldn't be any easier!</p>
		</div>
		<div class="col_4">
			<img src="http://cdn2.iconfinder.com/data/icons/splashyIcons/application_windows_shrink.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Large Email Optin Forms</h4>
			<p>Create large email optin forms for your blog posts to create an impact and increase your email optin rate conversions with simple shortcodes..</p>
		</div>
		<div class="col_4">
			<img src="http://cdn2.iconfinder.com/data/icons/oxygen/22x22/categories/applications-graphics.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Customize Design</h4>
			<p>Choose the background color, customize all of the content using a simple and easy interface that only takes a few seconds..</p>
		</div>
		<br clear="all">
		<div class="col_4">
			<img src="http://cdn1.iconfinder.com/data/icons/nuvola2/22x22/apps/konqsidebar_mediaplayer.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Add Video + More</h4>
			<p>Add your own video embed code, images and much more using the wizard when creating or editing your email optin shortcodes inside wordpress..</p>
		</div>
		<div class="col_4">
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/apps/Session%20Manager.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Manage Shortcodes</h4>
			<p>Create unlimited email optins for every page / post on your blog. Create, edit and manage all of your custom email optin forms for easy access..</p>
		</div>
		<div class="col_4">
			<img src="http://cdn3.iconfinder.com/data/icons/UltimateGnome/24x24/mimetypes/video-x-msvideo.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Fake-Video Popup</h4>
			<p>Powerful way to collect leads while offering a video to your leads while tricking them into clicking a fake-video and presenting email optin form..</p>
		</div>
		<div class="col_8">
			<h2 style="font-weight: normal">Easy to Use WP Email Optin Shortcodes</h2>
				       
			<p>Install the easy optin plugin in only seconds. Choose the type of email optin form you would like to create, add your auto responder code, customize the design and content, add your image or video and click save. Show your custom email shortcode on any blog post or sidebar with a simple shortcode. Create one for all pages, or create a new shortcode for each page. </p>
			<p>It is very easy and effective way to increase the conversion rate of your email optin form. The best place to showcase your optin is in the middle or end of your blog posts. View some examples of email optin forms that can be created...</p>
			<br>
			<h4 style="font-weight: normal">Create Awesome Email Optin Forms</h4>
			<img src="<?php echo $assets; ?>images/demo.png" alt="">
			
		</div>
		<div class="col_4">
			<img src="http://cdn2.iconfinder.com/data/icons/c9d/email.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Traditional Optin</h4>
			<p>Use the effective email optin showcasing a photo or video next to email optin form with social links to promote your email optin form..</p>
			<br clear="all">
			<img src="http://cdn5.iconfinder.com/data/icons/strabo/24/window_sidebar.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Easy to Use Shortcodes</h4>
			<p>Just paste the small shortcode text onto any blog post and showcase the email optin forms with custom text that specific post and much more..</p>
			<br clear="all">
			<img src="http://cdn5.iconfinder.com/data/icons/socialize-icons-set/24/facebook.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Socially Connected</h4>
			<p>Bonus feature post a link that you want to share on facebook, twitter and even google plus for extra exposure..</p>
			<br clear="all">
			<img src="http://cdn1.iconfinder.com/data/icons/CrystalClear/22x22/actions/agt_update_misc.png" style="float: left;margin-top: 15px; margin-right: 10px;">
			<h4>Download Now</h4>
			<p>Get instant download access to the wordpress plugin, install on your blog, add your auto-responder code and you can create unlimited shortcodes..</p>
		</div>
		<br clear="all">
		
			<a href="#"><img src="<?php echo $assets; ?>images/order.png" style="margin-left: -25px"></a>
		
		<p style="text-align: center; padding-top: 10px; color: #666;">Copyright 2012 - WP EasyOptinPro - All Rights Reserved <br> <strong style="font-size: 12px;">Create Powerful Email Optins for Wordpress Shortcodes</strong></p>
	</div>
	
</div>


</div>
</body>
</html>