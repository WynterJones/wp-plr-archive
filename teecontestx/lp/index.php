<?php
	// Full Featured Example -- Replace with Default.php for a Fresh Start
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	$urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	$urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
	$urlx = str_replace( "?", "", $urlx);
	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	$ID = $_GET['id'];
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach($data as $data) {}
	$results = get_option('teecontestx_campaign_'. $ID);	
	$full_path = get_site_url();
	$assets = $full_path . "/wp-content/plugins/teecontestx/lp/";
	// Get Full Path - echo $assets;
	// Track Views
	  $views = get_option($ID.'_tc_views');
	  update_option($ID.'_tc_views', $views + 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SEO SETTINGS -->
    <title><?php echo stripslashes($results->title); ?></title>
    <meta name="description" content="<?php echo stripslashes($results->desc); ?>">
    <link rel="icon" type="image/png" href="<?php echo stripslashes($results->favicon); ?>">
    <?php echo stripslashes($results->tracking); ?>
    <!-- Upgrade Browser Warning -->
    <script type="text/javascript"> 
	var $buoop = {}; 
	$buoop.ol = window.onload; 
	window.onload=function(){ 
	 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
	 var e = document.createElement("script"); 
	 e.setAttribute("type", "text/javascript"); 
	 e.setAttribute("src", "//browser-update.org/update.js"); 
	 document.body.appendChild(e); 
	} 
    </script> 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/bootstrap-theme.min.css">
    <!-- Google Font Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
    <!-- Your CSS Styles in css/style.css -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>/js/jquery.share.css">
    <!-- Font Awesome Icons check http://fontawesome.io/icons/ -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/font-awesome.css">
    <style>
	.backstretch {
		opacity: <?php echo stripslashes($results->bgOverlay); ?>
	}
	.mainContainer {
		background: <?php echo stripslashes($results->contentBG); ?>;
		color: <?php echo stripslashes($results->contentColor); ?>;
		box-shadow: 0 0 5px <?php echo stripslashes($results->contentDrop); ?>, 0 0 10px <?php echo stripslashes($results->contentInner); ?> inset;
		text-shadow: 0 1px 0 <?php echo stripslashes($results->contentInner); ?>;
	}
	.banner {
		box-shadow: 0 0 5px <?php echo stripslashes($results->contentDrop); ?>;
	}
	.countdown {
		color: <?php echo stripslashes($results->countdownColor); ?> !important;
	}
	.modal-body .countdown.popup {
		color: #222 !important;
	}
	.footerContainer, .footerContainer a {
		color: <?php echo stripslashes($results->footerTextColor); ?> !important;
	}
	<?php if($results->ribbon ==  'show') { ?>
	.mainContainer {
		border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px;
		margin-top:5px;
	}
	<?php } ?>
	.ribbon {
		background: <?php echo stripslashes($results->ribbonBG); ?>;
		color: <?php echo stripslashes($results->ribbonColor); ?>;
	}
    </style>
  </head>
<body style="background: <?php echo stripslashes($results->bgColor); ?>;">
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body" style="text-align: center;	">
      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      	<h1 style="letter-spacing: -1px; padding: 0 40px; color: <?php echo $results->headlineColor; ?>"><strong><?php echo stripslashes($results->popupHeadline); ?></strong></h1>
      	<h4><?php echo stripslashes($results->popupSubHeadline); ?></h4>
      	<div class="mydiv" style="text-align: center; margin: 10px auto"></div>
      	<h3 style="letter-spacing: -1px; font-weight: bold; padding: 0 20px"><?php echo stripslashes($results->popupByline); ?></h3>
      	<?php if($results->countdown ==  'on') { ?>
		<ul id="until2d-top" class="countdown popup" style="padding: 0 20px"></ul>
		<br clear="all"><br>
	<?php } ?>
      </div>
      
    </div>
  </div>
</div>


	<div class="row header">
		<div class="container headerContainer">
				
				<div class="col-md-5">
					<img src="<?php echo $results->logo; ?>" style="width: 100%; padding: 10px;">
				</div>
				<div class="col-md-1">
					<br>
				</div>
				<div class="col-md-6">
					<?php if($results->countdown ==  'on') { ?>
					  	
							<ul id="until2d" class="countdown"></ul>
						
					<?php } ?>
				</div>
			
		</div>
	</div>
	<div class="row">
		<div class="container banner">
			<?php if($results->banner !=  '') { ?>
				<img src="<?php echo $results->banner; ?>" style="width: 100%; margin-top: -20px">
			<?php } ?>
			<div class="col-md-6" style="position:relative; z-index: 88">
				<div class="mainShirt">
					<img src="<?php echo $results->tshirt; ?>" style="width: 100%; padding-right: 20px; margin-top: 20px">
				</div>
				<div class="smallShirt shirt1 active">
					<img src="<?php echo $results->tshirt; ?>" id="shirt1" >
				</div>
				<?php if($results->tshirt2 !=  '') { ?>
						
				<div class="smallShirt shirt2">
					<img src="<?php echo $results->tshirt2; ?>" id="shirt2" >
				</div>
				<?php } ?>
				<div class="smallShirt" style="width: 200px; float: left; padding-top: 40px; padding-left: 10px;cursor: default">
					<h4><strong><?php echo stripslashes($results->imageSliderHeadline); ?></strong></h4>
					
					<?php if($results->showStars ==  'solid') { ?>
						<span style="font-size: 1.6em; color:<?php echo $results->starColor; ?>"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span>
					<?php } ?>
					<?php if($results->showStars ==  'outline') { ?>
						<span style="font-size: 1.6em; color:<?php echo $results->starColor; ?>"><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-6" id="offer">
				<div style="padding: 0  10px" >
					<h1 style="color: <?php echo $results->headlineColor; ?>"><?php echo stripslashes($results->mainHeadline); ?></h1>
					<h2><?php echo stripslashes($results->subHeadline); ?></h2>
					<h4><?php echo stripslashes($results->byline); ?></h4>
					
					<ul class="nav nav-tabs nav-justified" style='padding-top: 8px'>
					 	<li class="active"><a href="#"><i class="fa fa-envelope"></i> <?php echo stripslashes($results->signup); ?></a></li>
					 	<li class=" "><a href="#" class="facebook" data-toggle="modal" data-target="#myModal"><i class="fa fa-facebook"></i> <?php echo stripslashes($results->likeShare); ?></a></li>
					 	<li  class=""><a href="#" class="win" data-toggle="modal" data-target="#myModal"><i class="fa fa-star"></i> <?php echo stripslashes($results->chancetoWin); ?></a></li>
					</ul>
					<?php if($results->autoresponder != '' && $results->showEmail == 'show') { ?>
						<!-- Autoresponder -->
						<form action="" method="post" class="ARform" style="border: 1px solid #ddd; padding: 10px 15px; border-top: 0">
							<strong><i class="fa fa-user"></i> Your Name:</strong>
							<input type="text" placeholder="Your Full Name" class="form-control"  id="optinName" style="border: 1px solid #ddd;padding: 8px;background: url(https://cdn0.iconfinder.com/data/icons/strabo/24/user.png) no-repeat #fff; font-size: 16px;height: 40px;background-position: 98% 7px" />
							<strong><i class="fa fa-envelope"></i> Your Email Address:</strong>
							<input type="email" <?php if($results->ar == "mailchimp") { echo 'name="EMAIL" '; } else { echo 'name="email" '; } ?> placeholder="Type Your Email Address Here..." class="form-control"  id="optinEmail" style="border: 1px solid #ddd;padding: 8px;background: url(https://cdn1.iconfinder.com/data/icons/32-soft-media-icons--Vol-1/32/mail.png) no-repeat #fff; font-size: 16px;height: 40px;background-position: 98.5% -2px" />
							<input type="submit" class="btn btn-<?php echo stripslashes($results->submitColor); ?> btn-lg btn-block trackClick" value="<?php echo stripslashes($results->buttonARText); ?>" />
					              	<div class='ARhidden'></div>
					            </form>
					           <div id="autoresponder" style="display: none">
						          <textarea id="autoresponderCode" name="autoresponderCode"><?php echo stripslashes($results->autoresponder); ?></textarea>
						          <input type="text"  name="arname" id="arname" value="" />
						          <input type="text"   name="aremail" id="aremail" value="" />
						          <input type="text"   name="arform" id="arform" value="" />
						          <textarea id="arhidden"   name="arhidden"></textarea>
						          <div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
					            </div>
				            <?php } ?>
				            <h3><?php echo stripslashes($results->spotHeadline); ?></h3>
				            <h4><?php echo stripslashes($results->spotSubHeadline); ?></h4>
				            <a href="<?php echo $results->spotLink; ?>" class="btn btn-<?php echo stripslashes($results->buttonColor); ?> btn-lg btn-block"><?php echo stripslashes($results->spotButton); ?></a>
				</div>
			</div>

		</div>
		<?php if($results->ribbon ==  'show') { ?>
			<div class="container ribbonContainer" style="height:55px">
				<div class="ribbon">
					<div class="ribbon-stitches-top"></div>
					<strong class="ribbon-content"><h1><?php echo stripslashes($results->ribbonHeadline); ?></h1></strong>
					<div class="ribbon-stitches-bottom"></div>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php if($results->showContent ==  'show') { ?>
		<div class="row rowContainer">
			<div class="container mainContainer">

				<br>
				<div class="mydiv" style="text-align: center; margin: 0 auto"></div>
				<div id="theContent">
					<?php echo stripslashes($results->mainContent); ?>
					<br><br>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="row footer">
		<div class="container footerContainer">
			<p><?php echo stripslashes($results->footer); ?></p>
		</div>
	</div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php echo $assets; ?>/js/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo $assets; ?>/js/bootstrap.js"></script>
	    <script src="<?php echo $assets; ?>/js/velocity.js"></script>
	    <script src="<?php echo $assets; ?>/js/bgstretch.js"></script>
	    <script src="<?php echo $assets; ?>/js/jquery.share.js"></script>
	    <script src="<?php echo $assets; ?>/js/autoresponder.js"></script>
	    <?php if($results->countdown == 'on') { ?>
		<script src="<?php echo $assets; ?>/countdown/jquery.plugin.min.js"></script>
		<script src="<?php echo $assets; ?>/countdown/jquery.countdown.min.js"></script>
	    <?php } ?>
	    <script type="text/javascript">
	      $(document).ready(function() {

		<?php if($results->headerStyle ==  'container') { ?>
			var s = "<?php echo $results->headerColor; ?>";
			var patt = /^#([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})$/;
			var matches = patt.exec(s);
			var rgba = "background: rgba("+parseInt(matches[1], 16)+","+parseInt(matches[2], 16)+","+parseInt(matches[3], 16)+", <?php echo $results->headerOverlay; ?>);";
			$('.headerContainer').attr('style', rgba);
		<?php } ?>
		<?php if($results->headerStyle ==  'wide') { ?>
			var s = "<?php echo $results->headerColor; ?>";
			var patt = /^#([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})$/;
			var matches = patt.exec(s);
			var rgba = "background: rgba("+parseInt(matches[1], 16)+","+parseInt(matches[2], 16)+","+parseInt(matches[3], 16)+", <?php echo $results->headerOverlay; ?>);";
			$('.header').attr('style', rgba);
		<?php } ?>

		<?php if($results->footerStyle ==  'container') { ?>
			var s = "<?php echo $results->footerColor; ?>";
			var patt = /^#([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})$/;
			var matches = patt.exec(s);
			var rgba = "background: rgba("+parseInt(matches[1], 16)+","+parseInt(matches[2], 16)+","+parseInt(matches[3], 16)+", <?php echo $results->footerOverlay; ?>);";
			$('.footerContainer').attr('style', rgba);
		<?php } ?>
		<?php if($results->footerStyle ==  'wide') { ?>
			var s = "<?php echo $results->footerColor; ?>";
			var patt = /^#([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})$/;
			var matches = patt.exec(s);
			var rgba = "background: rgba("+parseInt(matches[1], 16)+","+parseInt(matches[2], 16)+","+parseInt(matches[3], 16)+", <?php echo $results->footerOverlay; ?>);";
			$('.footer').attr('style', rgba);
		<?php } ?>

		<?php if($results->popupShow ==  'yes') { ?>
			$( "body" ).mouseleave(function() {
				
				if(localStorage.getItem("<?php echo stripslashes($results->title); ?>_socialpopup") != "Done") {
					$('#myModal').modal();
					localStorage.setItem("<?php echo stripslashes($results->title); ?>_socialpopup", "Done");
				}
			});
		<?php } ?>

		// Track Clicks
		$('.trackClick').click(function(e) {
			$.post( "<?php echo $assets; ?>clicks.php?edit=<?php echo $ID; ?>" );
		});
<?php if($results->background !=  '') { ?>
		$.backstretch('<?php echo $results->background; ?>');
<?php } ?>
		$('.mydiv').share({
			networks: ['facebook','pinterest','googleplus','twitter','linkedin','tumblr'],
			theme: '<?php echo stripslashes($results->socialTheme); ?>'
		});

		<?php if($results->countdown ==  'on') { ?>
			var dateGo = new Date('<?php echo $results->date; ?> 00:00:00');
			$('#until2d').countdown({
			until: dateGo, 
			expiryUrl: "<?php echo $results->redirect; ?>", 
			alwaysExpire: true, 
			timezone: 1.0,
			labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'] 
			}); 
			var dateGo = new Date('<?php echo $results->date; ?> 00:00:00');
			$('#until2d-top').countdown({
			until: dateGo, 
			expiryUrl: "<?php echo $results->redirect; ?>", 
			alwaysExpire: true, 
			timezone: 1.0,
			labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'] 
			}); 
		<?php } ?>


		$('.smallShirt').click(function(e) {
			$('.smallShirt').removeClass('active');
			$(this).addClass('active');
			var image = $(this).find('img').attr('src');
			$('.mainShirt img').attr('src', image);
		});

	      });
	    </script>
</body>
</html>