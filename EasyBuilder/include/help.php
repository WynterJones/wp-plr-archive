<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $imagePath ?>/include/style.css" media="all">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
	<script type="text/javascript">
			$(document).ready(function() {
				$('#seoSettings').hide();
				$('#designSettings').hide();
			 	
				$('#seoSettings-link').click(function() {
			 	  $('#designSettings').hide();
			 	  $('#innerContent').hide();
			 	  $('#seoSettings').fadeIn('slow');
			 	});
			 	$('#designSettings-link').click(function() {
			 	  $('#seoSettings').hide();
			 	  $('#innerContent').hide();
			 	  $('#designSettings').fadeIn('slow');
			 	});
			 	$('#pages-link').click(function() {
			 	  $('#seoSettings').hide();
			 	  $('#designSettings').hide();
			 	  $('#innerContent').fadeIn('slow');
			 	});
			});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<!-- <a href="admin.php?page=eb_help"><img src="<?php echo $imagePath ?>/include/images/info.png" style="float: right; margin: 14px 5px; border: none; margin-left: -5px;margin-right: 15px;"></a> -->
			<a href="admin.php?page=eb_add_new_campaigns"><img src="<?php echo $imagePath ?>/include/images/addnew.png" style="float: right; margin: 14px 5px; border: none"></a>
			<a href="admin.php?page=eb_manage_campaigns"><img src="<?php echo $imagePath ?>/include/images/manage.png" style="float: right; margin: 18px 0; border: none"></a>
		</div>
		<div id="content">
			<div  class="innerContent">
			<iframe src="http://player.vimeo.com/video/39570122?title=0&amp;byline=0&amp;portrait=0" width="767" height="500" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			<h3>Updated Video w/ Easy Pages</h3>
			<iframe src="http://player.vimeo.com/video/39872107?title=0&amp;byline=0&amp;portrait=0" width="767" height="500" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
		</div>
		<div id="footer2">
			
		</div>
	</div>
	<footer style="width: 840px; text-align: center; padding: 10px; margin-top: -50px; color: #555; font-size: 11px; font-family: 'Myriad Pro', Helvetica, Arial, Sans-serif;">
		<p>Copyright 2012 - EasyBuilder WP Plugin - Manage Marketing Campaigns <br> All Rights Reserved - Icons from IconFinder.com</p>
	</footer>
</body>
</html>