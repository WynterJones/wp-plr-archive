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
	$results = get_option('lpdesignerx_campaign_'. $ID);	
	$full_path = get_site_url();
	$assets = $full_path . "/wp-content/plugins/lpdesignerx/lp/";
	// Get Full Path - echo $assets;
	// Track Views
	  $views = get_option($ID.'_lp_views');
	  update_option($ID.'_lp_views', $views + 1);
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
    
    <!-- Font Awesome Icons check http://fontawesome.io/icons/ -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/font-awesome.css">
    <style>
	ul.countdown  {
		color: <?php echo stripslashes($results->countdownColor); ?>;
	}
</style>
  </head>
<body>
	<div class="row logo">
		<div class="container">
			<?php include('content/logo.php'); ?>
		</div>
	</div>
<?php if($results->layout == "1") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
			<div class="container header">
				<div class="col-md-12">
					<?php include('content/headline.php'); ?>
					<br>
				</div>
				<div class="col-md-8 video">
					<?php include('content/video.php'); ?>
				</div>
				<div class="col-md-4 list">
					<?php include('content/list.php'); ?>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA Button -->
	<div class="row ctaButton" style="display: block">
	<div class="emailInner">
		<div class="container">
			<div class="col-md-12">
				<?php include('content/emailHeadline.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
			<div class="col-md-6">
				<?php include('content/email.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
		</div>
	</div>
	</div>
<?php } ?>

<?php if($results->layout == "2") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				<br>
			</div>
			<div class="col-md-4 list">
				<?php include('content/list.php'); ?>
			</div>
			<div class="col-md-8 video">
				<?php include('content/video.php'); ?>
			</div>
		
		</div>
	</div>
	</div>

	<!-- CTA Button -->
	<div class="row ctaButton" style="display: block">
		<div class="emailInner">
		<div class="container">
			<div class="col-md-12">
				<?php include('content/emailHeadline.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
			<div class="col-md-6">
				<?php include('content/email.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
		</div>
	</div>
	</div>
<?php } ?>

<?php if($results->layout == "3") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				<br>
			</div>
			<div class="col-md-4 list">
				<?php include('content/list.php'); ?>
			</div>
			<div class="col-md-8 video">
				<?php include('content/video.php'); ?>
			</div>
			<br clear="all"><br>
			<div class="ctaButton">
				<div class="emailInner">
				<div class="col-md-12">
					<br>
					<?php include('content/emailHeadline.php'); ?>
				</div>
				<div class="col-md-3">
					<br>
				</div>
				<div class="col-md-6">
					<?php include('content/email.php'); ?>
				</div>
				<div class="col-md-3">
					<br>
				</div>
				<br clear="all"><br><br>
			</div>
			</div>
		</div>
	</div>
	</div>
<?php } ?>

<?php if($results->layout == "4") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				<br>
			</div>
			
			<div class="col-md-8 video">
				<?php include('content/video.php'); ?>
			</div>
			<div class="col-md-4 list">
				<?php include('content/list.php'); ?>
			</div>
			<br clear="all"><br>
			<div class="ctaButton">
				<div class="emailInner">
				<div class="col-md-12">
					<br>
					<?php include('content/emailHeadline.php'); ?>
				</div>
				<div class="col-md-3">
					<br>
				</div>
				<div class="col-md-6">
					<?php include('content/email.php'); ?>
				</div>
				<div class="col-md-3">
					<br>
				</div>
				<br clear="all"><br><br>
			</div>
			</div>
		</div>
	</div>
	</div>
<?php } ?>

<?php if($results->layout == "5") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				<br>
			</div>
			
			<div class="col-md-8 video">
				<?php include('content/video.php'); ?>
			</div>
			<div class="col-md-4 list">
				<?php include('content/list.php'); ?>
			</div>
			<div class="col-md-12">
				<br>
				<?php include('content/emailHeadline.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
			<div class="col-md-6">
				<?php include('content/email.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
			
		</div>
	</div>
	</div>
<?php } ?>
<?php if($results->layout == "6") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				<br>
			</div>
			<div class="col-md-4 list">
				<?php include('content/list.php'); ?>
			</div>
			<div class="col-md-8 video">
				<?php include('content/video.php'); ?>
			</div>
			
			<div class="col-md-12">
				<br>
				<?php include('content/emailHeadline.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
			<div class="col-md-6">
				<?php include('content/email.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
			
		</div>
	</div>
	</div>
<?php } ?>

<?php if($results->layout == "7") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				
			</div>
			<?php if($results->video != "") { ?>

			<div class="col-md-1">
				<br>
			</div>
			<div class="col-md-10 video">
				<br>
				<?php include('content/video.php'); ?>
			</div>
			<div class="col-md-1">
				<br>
			</div>
			<br clear="all">
			<?php } ?>
			<div class="col-md-1">
				<br>
			</div>
			<div class="col-md-10 list">
				<br>
				<?php include('content/list.php'); ?>
			</div>
			<div class="col-md-1">
				<br>
			</div>
			
			
			
		</div>
	</div>
	</div>

	<!-- CTA Button -->
	<div class="row ctaButton" style="display: block">
		<div class="emailInner">
		<div class="container">
			<div class="col-md-12">
				<?php include('content/emailHeadline.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
			<div class="col-md-6">
				<?php include('content/email.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
		</div>
	</div>
	</div>
<?php } ?>
<?php if($results->layout == "8") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				<br>
			</div>

			<div class="col-md-1">
				<br>
			</div>
			<div class="col-md-10 list" style="margin-top: -20px">
				
				<?php include('content/list.php'); ?>
				<br clear="all"><br>
			</div>
			<div class="col-md-1">
				<br>
			</div>
			<?php if($results->video != "") { ?>
			<br clear="all">
			<div class="col-md-1">
				<br>
			</div>
			<div class="col-md-10 video">
				<?php include('content/video.php'); ?>
			</div>
			<div class="col-md-1">
				<br>
			</div>
			<?php } ?>
			
			
			
			
			
		</div>
	</div>
	</div>

	<!-- CTA Button -->
	<div class="row ctaButton" style="display: block">
		<div class="emailInner">
		<div class="container">
			<div class="col-md-12">
				<?php include('content/emailHeadline.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
			<div class="col-md-6">
				<?php include('content/email.php'); ?>
			</div>
			<div class="col-md-3">
				<br>
			</div>
		</div>
	</div>
	</div>
<?php } ?>

<?php if($results->layout == "9") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				
			</div>
<?php if($results->video != "") { ?>
			<div class="col-md-1">
				<br>
			</div>
			<div class="col-md-10 video">
				<br>
				<?php include('content/video.php'); ?>
			</div>
			<div class="col-md-1">
				<br>
			</div>
			<?php } ?>
			<div class="col-md-6 list">
				<br><br>
				<?php include('content/list.php'); ?>
			</div>
			<div class="col-md-6 optinSmaller">
				<br><br>
				<?php include('content/emailHeadline.php'); ?>
				<?php include('content/email.php'); ?>
			</div>
		</div>
	</div>
	</div>
<?php } ?>
<?php if($results->layout == "10") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				
			</div>
<?php if($results->video != "") { ?>
			<div class="col-md-1">
				<br>
			</div>
			<div class="col-md-10 video">
				<br>
				<?php include('content/video.php'); ?>
			</div>
			<div class="col-md-1">
				<br>
			</div>
			<?php } ?>
			
			<div class="col-md-6 optinSmaller">
				<br><br>
				<?php include('content/emailHeadline.php'); ?>
				<?php include('content/email.php'); ?>
			</div>
			<div class="col-md-6 list">
				<br><br>
				<?php include('content/list.php'); ?>
			</div>
		</div>
	</div>
	</div>
<?php } ?>
<?php if($results->layout == "11") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				<br>
			</div>
<?php if($results->video != "") { ?>
			<div class="col-md-1">
				<br>
			</div>
			<div class="col-md-10 video">
				<?php include('content/video.php'); ?>
				<br>
			</div>
			<div class="col-md-1">
				<br>
			</div>

			
				<br clear="all"><br><br>
				<?php } ?>
			<div class="col-md-2">
					<br>
				</div>
				<div class="col-md-8 ctaButton">
					<div class="emailInner">
					<div style="padding: 20px 40px">
					
					<?php include('content/emailHeadline.php'); ?>
					<?php include('content/email.php'); ?>
					</div>
				</div>
				</div>
				<div class="col-md-2">
					<br>
				</div>
			
		</div>
	</div>
	</div>
<?php } ?>
<?php if($results->layout == "12") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				
			</div>
<?php if($results->video != "") { ?>
			<div class="col-md-1">
				<br>
			</div>
			<div class="col-md-10 video">
				<br>
				<?php include('content/video.php'); ?>
				<br>
			</div>
			<div class="col-md-1">
				<br>
			</div>
			<?php } ?>
			
				
		</div>
	</div>
	</div>
<?php } ?>
<?php if($results->layout == "13") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
				<br>
			</div>

			<div class="col-md-2">
					<br>
				</div>
				<div class="col-md-8 ctaButton">
					<div class="emailInner">
					<div style="padding: 20px 40px">
					
					<?php include('content/emailHeadline.php'); ?>
					<?php include('content/email.php'); ?>
					</div>
				</div>
				</div>
				<div class="col-md-2">
					<br>
				</div>
			
		</div>
	</div>
	</div>
<?php } ?>
<?php if($results->layout == "14") { ?>
	<div class="row headerRow header">
		<div class="headerInner">
		<div class="container header">
			<div class="col-md-12">
				<?php include('content/headline.php'); ?>
			
			</div>	
		</div>
	</div>
	</div>
<?php } ?>
<?php if($results->benefitShow == "show") { ?>
<style>
	.row.features i {
		color: <?php echo stripslashes($results->benefitColor); ?>;
	}
</style>
<div class="row features">
		<div class="container">
			
			<div class="col-md-12" style="font-size: 110%; ">
				<br>
				<?php include('content/benefits.php'); ?>
				<br>
			</div>
		</div>
	</div>
<?php } ?>
<!-- Content -->
<?php if($results->content != "") { ?>
	<div class="row">
		<div class="container mainContainer">
			
			<div class="innerContent" >
				<?php echo stripslashes($results->content); ?>
				<br>
			</div>
		</div>
	</div>
<?php } ?>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php echo $assets; ?>/js/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo $assets; ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo $assets; ?>/js/velocity.js"></script>
	    <script src="<?php echo $assets; ?>/js/tinycolor.js"></script>
	    <script src="<?php echo $assets; ?>/js/autoresponder.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
	    <?php if($results->countdown == 'on') { ?>
		<script src="<?php echo $assets; ?>/countdown/jquery.plugin.min.js"></script>
		<script src="<?php echo $assets; ?>/countdown/jquery.countdown.min.js"></script>
	    <?php } ?>
	    <script type="text/javascript">
	      $(document).ready(function() {

			$(".video iframe, .video embed, .video object").each(function() {
		              var orig = $(this);
		              var ratio = orig.attr("height") / orig.attr("width");
		              var parWidth = $(".video").width();

		                orig
		                  .attr("width", parWidth)
		                  .attr("height", (parWidth * ratio));
		              
		            });

			

			
		<?php if($results->design == "custom") { ?>
			var color = tinycolor("<?php echo stripslashes($results->logoBG); ?>");
			var darkColor = tinycolor.darken(color, amount = 20).toHexString();
			var textColor = tinycolor.lighten(color, amount = 100).toHexString();
			var innerShadow = tinycolor.brighten(color, amount = 20).toHexString();
			$('.logo').attr('style', 'background: '+color+';box-shadow: 0 0 5px '+darkColor+' inset,  0 0 2px '+innerShadow+' inset;  text-shadow: 1px 1px 2px '+darkColor+';  color: '+textColor);

			//  Email Background
			<?php if ($results->emailDark == "dark") { ?>
				var color = tinycolor("<?php echo stripslashes($results->emailBG); ?>");
				var darkColor = tinycolor.darken(color, amount = 10).toHexString();
				var textColor = tinycolor.darken(color, amount = 100).toHexString();
				var innerShadow = tinycolor.brighten(color, amount = 30).toHexString();
				var textShadow = tinycolor.brighten(color, amount = 100).toHexString();
				$('.ctaButton').attr('style', 'background: '+color+';box-shadow: 0 0 5px '+darkColor+' inset,  0 0 2px '+innerShadow+' inset;  border-top: 1px solid '+darkColor+'; border-bottom: 1px solid '+darkColor+'; text-shadow: 1px 1px 2px '+textShadow+';  color: '+textColor);
			<?php } else {  ?>
				var color = tinycolor("<?php echo stripslashes($results->emailBG); ?>");
				var darkColor = tinycolor.darken(color, amount = 20).toHexString();
				var textColor = tinycolor.lighten(color, amount = 100).toHexString();
				var innerShadow = tinycolor.brighten(color, amount = 20).toHexString();
				$('.ctaButton').attr('style', 'background: '+color+';box-shadow: 0 0 5px '+darkColor+' inset,  0 0 2px '+innerShadow+' inset;  border-top: 1px solid '+darkColor+'; border-bottom: 1px solid '+darkColor+'; text-shadow: 1px 1px 2px '+darkColor+';  color: '+textColor);
			<?php } ?>

			//  Header Background
			<?php if ($results->headerDark == "dark") { ?>
				var color = tinycolor("<?php echo stripslashes($results->headerBG); ?>");
				var darkColor = tinycolor.darken(color, amount = 10).toHexString();
				var darkerColor = "<?php echo stripslashes($results->headerHighlight); ?>";
				var iconColor = "<?php echo stripslashes($results->headerHighlight); ?>";
				var textColor = tinycolor.darken(color, amount = 100).toHexString();
				var innerShadow = tinycolor.brighten(color, amount = 30).toHexString();
				var textShadow = tinycolor.brighten(color, amount = 100).toHexString();
				$('.headerRow').attr('style', 'background: '+color+';box-shadow: 0 0 5px '+darkColor+' inset,  0 0 2px '+innerShadow+' inset;  border-top: 1px solid '+darkColor+'; border-bottom: 1px solid '+darkColor+'; text-shadow: 1px 1px 2px '+textShadow+';  color: '+tinycolor.readable(color, textColor));
				$('.headerRow h1 strong').attr('style', 'color: '+darkerColor);
				$('.list h3').attr('style', 'color: '+darkerColor);
				$('.list i').attr('style', 'color: '+iconColor);
				$('.headerRow iframe').attr('style', 'border: none;box-shadow: 0 0 8px  '+darkColor);
			<?php } else {  ?>
				var color = tinycolor("<?php echo stripslashes($results->headerBG); ?>");
				var darkColor = tinycolor.darken(color, amount = 20).toHexString();
				var textColor = tinycolor.lighten(color, amount = 100).toHexString();
				var innerShadow = tinycolor.brighten(color, amount = 10).toHexString();
				var darkerColor = "<?php echo stripslashes($results->headerHighlight); ?>";
				var iconColor = "<?php echo stripslashes($results->headerHighlight); ?>";
				$('.headerRow').attr('style', 'background: '+color+';box-shadow: 0 0 5px '+darkColor+' inset,  0 0 2px '+innerShadow+' inset;  border-top: 5px solid '+darkColor+'; border-bottom: 5px solid '+darkColor+'; text-shadow: 1px 1px 2px '+darkColor+';  color: '+textColor);
				$('.headerRow h1 strong').attr('style', 'color: '+darkerColor);
				$('.list h3').attr('style', 'color: '+darkerColor);
				$('.list i').attr('style', 'color: '+iconColor);
				$('.headerRow iframe').attr('style', 'border: none;box-shadow: 0 0 8px  '+darkColor);
			<?php } ?>
		<?php } else { ?>
			//  Email Background
			<?php if ($results->emailDark == "dark") { ?>
				var color = tinycolor("<?php echo stripslashes($results->emailBG); ?>");
				var darkColor = tinycolor.darken(color, amount = 10).toHexString();
				var textColor = tinycolor.darken(color, amount = 100).toHexString();
				var innerShadow = tinycolor.brighten(color, amount = 30).toHexString();
				var textShadow = tinycolor.brighten(color, amount = 100).toHexString();
				$('.ctaButton').attr('style', 'background: '+color+';box-shadow: 0 0 5px '+darkColor+' inset,  0 0 2px '+innerShadow+' inset;  border-top: 1px solid '+darkColor+'; border-bottom: 1px solid '+darkColor+'; text-shadow: 1px 1px 2px '+textShadow+';  color: '+textColor);
			<?php } else {  ?>
				var color = tinycolor("<?php echo stripslashes($results->emailBG); ?>");
				var darkColor = tinycolor.darken(color, amount = 20).toHexString();
				var textColor = tinycolor.lighten(color, amount = 100).toHexString();
				var innerShadow = tinycolor.brighten(color, amount = 20).toHexString();
				$('.ctaButton').attr('style', 'background: '+color+';box-shadow: 0 0 5px '+darkColor+' inset,  0 0 2px '+innerShadow+' inset;  border-top: 1px solid '+darkColor+'; border-bottom: 1px solid '+darkColor+'; text-shadow: 1px 1px 2px '+darkColor+';  color: '+textColor);
			<?php } ?>

			//  Header Background
			<?php if ($results->headerDark == "dark") { ?>
				var color = tinycolor("<?php echo stripslashes($results->headerBG); ?>");
				var darkColor = tinycolor.darken(color, amount = 10).toHexString();
				var darkerColor = "<?php echo stripslashes($results->headerHighlight); ?>";
				var iconColor = "<?php echo stripslashes($results->headerHighlight); ?>";
				var textColor = tinycolor.darken(color, amount = 100).toHexString();
				var innerShadow = tinycolor.brighten(color, amount = 30).toHexString();
				var textShadow = tinycolor.brighten(color, amount = 100).toHexString();
				$('.headerRow').attr('style', ' text-shadow: 1px 1px 2px '+textShadow+';  color: '+tinycolor.readable(color, textColor));
				$('.headerRow h1 strong').attr('style', 'color: '+darkerColor);
				$('.list h3').attr('style', 'color: '+darkerColor);
				$('.list i').attr('style', 'color: '+iconColor);
				$('.headerRow iframe').attr('style', 'border: none;box-shadow: 0 0 8px  #ddd');
			<?php } else {  ?>
				var color = tinycolor("<?php echo stripslashes($results->headerBG); ?>");
				var darkColor = tinycolor.darken(color, amount = 20).toHexString();
				var textColor = tinycolor.lighten(color, amount = 100).toHexString();
				var innerShadow = tinycolor.brighten(color, amount = 10).toHexString();
				var darkerColor = "<?php echo stripslashes($results->headerHighlight); ?>";
				var iconColor = "<?php echo stripslashes($results->headerHighlight); ?>";
				$('.headerRow').attr('style', 'text-shadow: 1px 1px 2px '+darkColor+';  color: '+textColor);
				$('.headerRow h1 strong').attr('style', 'color: '+darkerColor);
				$('.list h3').attr('style', 'color: '+darkerColor);
				$('.list i').attr('style', 'color: '+iconColor);
				$('.headerRow iframe').attr('style', 'border: none;box-shadow: 0 0 8px  #ddd');
			<?php } ?>
		<?php } ?>
<?php if ($results->bgImage != "") { ?>
 $(".headerInner").backstretch("<?php echo $results->bgImage; ?>");
 var backstretch = $('.backstretch').attr('style');
 $('.headerInner .backstretch').attr('style', backstretch+'; opacity: <?php echo $results->bgOpacity; ?>')
 <?php } ?>

 <?php if ($results->emailImage != "") { ?>
 $(".emailInner").backstretch("<?php echo $results->emailImage; ?>");
 var backstretch = $('.backstretch').attr('style');
 $('.emailInner .backstretch').attr('style', backstretch+'; opacity: <?php echo $results->emailOpacity; ?>')
 <?php } ?>
 <?php if($results->countdown ==  'on') { ?>
			var dateGo = new Date('<?php echo $results->date; ?> 00:00:00');
			$('#until2d').countdown({
			until: dateGo, 
			expiryUrl: "<?php echo $results->redirect; ?>", 
			alwaysExpire: true, 
			timezone: 1.0,
			labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'] 
			}); 
			
		<?php } ?>
		$('.trackClick').click(function(e) {
			$.post( "<?php echo $assets; ?>clicks.php?edit=<?php echo $ID; ?>" );
		});

	      });
	    </script>
</body>
</html>