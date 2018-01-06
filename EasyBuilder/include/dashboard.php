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
	<script type="text/javascript">
<!--
window.location = "admin.php?page=eb_manage_campaigns"
//-->
</script>
</body>
</html>