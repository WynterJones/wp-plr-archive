 <?php

	// Affiliate Offers Prototype
	// Main Template
	// Version 1.0

	// Copyright (c) 2013 - Gue.rrilla Marketing
	
	define('WP_USE_THEMES', false);
	require('../../../../../wp-blog-header.php');
	
	// Load Up All Key Departments
	$urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	$urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
	$urlx = str_replace( "?", "", $urlx);

	global $wpdb;
	$table_db_name = $wpdb->prefix . "affiliatepressx";

	$id = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$id'", OBJECT);
	
	foreach($data as $data) {}

	
	// $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	$full_path = get_site_url();

	// Return Option Object:
	$results = get_option('affiliatepressx_campaign_'. $id);

	$assets = $full_path . "/wp-content/plugins/affiliatepressx/inc/lp/";

	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Droid+Sans:400,700|Lato:400,700,900,400italic|Lora:400,700,400italic,700italic|Pompiere|Maiden+Orange|PT+Sans+Narrow|Rokkitt:400,700|Gloria+Hallelujah|Droid+Serif:400,700,400italic,700italic|Open+Sans+Condensed:300,700|Bree+Serif|Special+Elite|Lobster+Two:400,400italic,700,700italic|Indie+Flower|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>assets/css/toast.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>assets/css/bonuspopup.css"> 
	<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>assets/jquery/bonuspopup.js"></script>
	 <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>assets/jquery/jquery.countdown.css"> 
	<script type="text/javascript" src="<?php echo $assets; ?>assets/jquery/jquery.countdown.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>assets/jquery/cookie.js"></script>
	<script>
$(document).ready(function() {

	if ($.cookie('affiliatepressx_popup_cookie_<?php echo $_GET["id"]; ?>') != "true") {
		 $('#bonusPopup2').bPopup({
		  	onClose: function() {
		  		$.cookie('affiliatepressx_popup_cookie_<?php echo $_GET["id"]; ?>', 'true', { expires: 7 });
				$('#popup',parent.document).remove();
		     }
		  });
	}
	else {
		$('#popup',parent.document).remove();
	}
 

  $('div#bigCountdown').countdown("<?php echo str_replace('-', '/', stripcslashes($results->countdown)); ?>", function(event) {
	    var $this = $(this);
	    switch(event.type) {
	      case "seconds":
	      case "minutes":
	      case "hours":
	      case "days":
	      case "weeks":
	      case "daysLeft":
	        $this.find('span#'+event.type).html(event.value);
	        break;
	      case "finished":
	        $this.hide();
	        $('#closed').show();
	        $('.smallDetail').attr('style','opacity: .4');
	        $('.myButton').attr('href', '<?php echo stripcslashes($results->closedLink); ?>');
	        $('.myButton').text('<?php echo stripcslashes($results->closedButton); ?>');
	        break;
	    }
	  });
});
	</script>

</head>
<body>

	<style>
		body {
			background: none;
		}
		#bonusPopup2 {
			width: 900px; 
			position: relative;
			background-color: #fff;
			display: none;
			top: 0;
			border-radius: 5px;
			box-shadow: 0 0 5px #000;
			z-index: 2147483647  !important;
			height: 424px;
		}
		.b-modal {
			z-index: 214748346 !important;
		}
		#bonusCountdown {
			width: 354px;
			float: right;
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
			padding-bottom: 20px;
			background: #eee;
			height: 424px;
		}
			#bonusCountdown .smallDetail {
				width: 100px;
				margin-top: 10px;
			}
			#bonusCountdown .myButton {
				width: 324px;
				margin-top: 10px;
				margin-left: 4px;
			}
			#bonusCountdown .cta {
				width: 324px;
				margin-left: 4px;
				color: #333;
				font-size: 10px;
				margin-top: 8px;
			}
			#bonusCountdown h2 {
				font-size: 28px;
				font-weight: bold;
				text-align: center;
				margin: 0;
				padding: 15px 25px;
				padding-top: 10px;
			}
			#bonusCountdown #bigCountdown {
				margin-top: 0;
				margin-left: 4px;
				position: relative;
			}
			#bonusCountdown .bigDetail {
				width: 74px;
				margin-top: 10px;
			}
			#bonusCountdown .bigDetail h4 {
				font-size: 47px;
			}
		#bonusHeader {
			width: 547px;
			height: 153px;
			background: url(<?php echo $assets; ?>assets/images/bonus-header<?php echo stripcslashes($results->popupBG); ?>.png) repeat-x top left;
			
			padding-top: 35px;
		}
			#bonusHeader h2 {
				color: #fff;
				text-shadow: 0 1px 0 #000;
				
				font-size: 29px;
				margin-top: -3px;
				font-weight: bold;

			}
		#bonusContent {
			position: relative;
			
			width: 470px;
			margin-top: -44px;
		}
			#bonusContent iframe {
				width: 547px;
			}
			#bonusContent p {
				text-align: center;
				padding: 0 20px;
				padding-right: 50px;
			}
		.gift {
			padding: 5px 0;
			
			float: left;
			width: 160px;
			padding-bottom: 0;
			text-align: center;

		}
			.gift h3 {
				padding: 10px;

				display: block;
				font-size: 16px;
				margin-bottom: 10px;
			}
			.gift img {
				width: 120px;
				height: 120px;
				display: block;
				margin: 0 auto;
			}
			
				#bonusContent p {
					font-size: 23px !important;
				}
		#seeOffer {
			font-size: 15px;
			padding: 10px;
			padding-right: 40px;
			border-radius: 5px;
			text-align: center;
			padding-left: 40px;

			color: #fff;
			text-decoration: none;
			display: block;
			margin: 0 auto;
			margin-bottom: -80px;
			width: 300px;
			font-weight: 300;
			opacity: .5;
		}
			#seeOffer:hover {
				opacity: 1;
			}
	</style>
	<div id="bonusPopup2">
		<div id="bonusCountdown">

			<img src="<?php echo stripcslashes($results->logoImage); ?>" style="width: 100%; height: 111px;">
					<div class="one-of-three unit smallDetail firstDetail">
						<strong><img src="https://cdn2.iconfinder.com/data/icons/ledicons/money.png"><span><?php echo stripcslashes($results->priceSmall); ?></span></strong>
						<h4><?php echo stripcslashes($results->priceHeadline); ?></h4>
					</div>
					<div class="one-of-three unit smallDetail">
						<strong><img src="https://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/actions/gtk-stop.png"><span><?php echo stripcslashes($results->regSmall); ?></span></strong>
						<h4 style="text-decoration: line-through; color: #777"><?php echo stripcslashes($results->regHeadline); ?></h4>
					</div>
					<div class="one-of-three unit smallDetail lastDetail">
						<strong><img src="https://cdn2.iconfinder.com/data/icons/lin/16/13.png"><span><?php echo stripcslashes($results->discountSmall); ?></span></strong>
						<h4 class="special_deal"><?php echo stripcslashes($results->discountHeadline); ?></h4>
					</div>
					<!-- Buy Now Button -->
					<div class="span-grid unit">
						<a href="<?php echo stripcslashes($results->buyNowURL); ?>" target="_blank" class="myButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>"><?php echo stripcslashes($results->buyNow); ?></a>
					</div>

					

					<div id="closed" style="padding: 10px 20px; display: none; margin-top: 270px;">
					<?php echo stripcslashes($results->closedText); ?>
				
				


				
				
		</div>

		<div id="bigCountdown">
						<div class="one-of-three unit bigDetail <?php echo stripcslashes($results->countdownColor); ?>  firstBigDetail" >
							<h4><span id="days"></span></h4>
							<strong>DAY(S)</strong>
						</div>
						<div class="one-of-three unit <?php echo stripcslashes($results->countdownColor); ?>  bigDetail">
							<h4><span id="hours"></span></h4>
							<strong>HOUR(S)</strong>
						</div>

						<div class="one-of-three unit <?php echo stripcslashes($results->countdownColor); ?>  bigDetail">
							<h4><span id="minutes"></span></h4>
							<strong>MIN.(S)</strong>
						</div>
						<div class="one-of-three unit <?php echo stripcslashes($results->countdownColor); ?>  bigDetail" style="margin-right: -10px">
							<h4><span id="seconds"></span></h4>
							<strong>SEC.(S)</strong>
						</div>
					</div>
				</div>

		<div id="bonusHeader">
			<img src="<?php echo stripcslashes($results->popupIcon); ?>" style="float: left; margin-right: 20px;margin-top: -4px; margin-left: 20px">
			<h2><?php echo stripcslashes($results->popupHeadline); ?></h2>	
		</div>
				<div id="bonusContent">
					<?php echo stripcslashes($results->video); ?>

				</div>
		<a href="<?php echo stripcslashes($results->popupLink); ?>" target="_parent" id="seeOffer"><?php echo stripcslashes($results->popupLinkText); ?></a>
	</div>
	
</body>
</html>