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
	$results = get_option('optinremix_campaign_'. $ID);	
	$full_path = get_site_url();
	$assets = $full_path . "/wp-content/plugins/optinremix/lp/";
	// Get Full Path - echo $assets;
	// Track Views
	  $views = get_option($ID.'_views');
	  update_option($ID.'_views', $views + 1);
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
  </head>
<body>
	<div class="row">
		<div class="container header">
			<?php if($results->headline != '') { ?>
				<h1><?php echo stripslashes($results->headline); ?></h1>
			<?php } else { ?>
				<h1>Example Page Change Inside index.php File in OptinRemix</h1>
			<?php } ?>
			<?php if($results->subheadline != '') { ?>
				<h3><i class="fa fa-check-square-o"></i> <?php echo stripslashes($results->subheadline); ?></h3>
			<?php } else { ?>
				<h3><i class="fa fa-check-square-o"></i> Example Page with AutoResponder</h3>
			<?php } ?>
		</div>
		<div class="container mainContainer">
			<?php if($results->autoresponder != '' && $results->showEmail == 'show') { ?>
			<!-- Autoresponder -->
			<form action="" method="post" class="ARform">
				<strong><i class="fa fa-user"></i> Your Name:</strong>
				<input type="text" placeholder="Your Full Name" class="form-control"  id="optinName" />
				<strong><i class="fa fa-envelope"></i> Your Email Address:</strong>
				<input type="email" <?php if($results->ar == "mailchimp") { echo 'name="EMAIL" '; } else { echo 'name="email" '; } ?> placeholder="Your Email Address" class="form-control"  id="optinEmail" />
				<input type="submit" class="btn btn-primary btn-lg btn-block trackClick" value="Click Here to Sign Up Now" />
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
		            <?php } else { ?>
				<h4 style="text-align: center; padding: 10px 40px; font-weight: bold">Add your Auto Responder Code to View Example of Auto Responder. Customize this page using Bootstrap to create your own pages.</h4>
				<h5 style="text-align: center">This Page is Tracking Views: <strong><?php echo get_option($ID.'_views'); ?></strong></h5>
				<h5 style="text-align: center">Also Tracking Clicks: <strong><?php echo get_option('clicks'.'_'.$ID); ?></strong> <br> <a href="#" class="trackClick">Track This Link With Clicks</a></h5>
		            <?php } ?>
		</div>
		<div class="container footer">
			<p>Copyright 2014 - WP Plugin Framework - This is an Example Page Edit in lp/index.php</p>
		</div>
	</div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php echo $assets; ?>/js/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo $assets; ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo $assets; ?>/js/velocity.js"></script>
	    <script type="text/javascript">
	      $(document).ready(function() {
	        	       // Autoresponder
		      break_apart_ar();
		      // TAKE APART AR CODE
		      function break_apart_ar(){
		      var tags = ['a','iframe','frame','frameset','script'], reg, val = $('#autoresponderCode').val(),
		      hdn = $('#arcode_hdn_div2'), formurl = $('#arform'), hiddenfields = $('#arhidden');
		      formurl.val('');
		        if(jQuery.trim(val) == '')
		            return false;
		            $('#arcode_hdn_div').html('');
		            $('#arcode_hdn_div2').html('');
		        for(var i=0;i<5;i++){
		            reg = new RegExp('<'+tags[i]+'([^<>+]*[^\/])>.*?</'+tags[i]+'>', "gi");
		        val = val.replace(reg,'');
		        reg = new RegExp('<'+tags[i]+'([^<>+]*)>', "gi");
		            val = val.replace(reg,'');
		        }
		        var tmpval;
		        try {
		            tmpval = decodeURIComponent(val);
		        } catch(err){
		            tmpval = val;
		        }
		        hdn.append(tmpval);
		        var num = 0;
		        var name_selected = '';
		        var email_selected = '';
		        $(':text',hdn).each(function(){
		            var name = $(this).attr('name'),
		            name_selected = num == '0' ? name : (num != '0' ? name_selected : ''), 
		            email_selected = num == '1' ? name : email_selected;
		            if(num=='0') jQuery('#arname').val(name_selected);
		            if(num=='1') jQuery('#aremail').val(email_selected);
		            num++;
		        });
		        jQuery(':input[type=hidden]',hdn).each(function(){
		          jQuery('#arcode_hdn_div').append(jQuery('<input type="hidden" name="'+jQuery(this).attr('name')+'" />').val(jQuery(this).val()));
		        });   
		        var hidden_f = jQuery('#arcode_hdn_div').html();
		        formurl.val(jQuery('form',hdn).attr('action'));
		        hiddenfields.val(hidden_f);
		        hdn.html('');
		      };
		      $('.ARform').attr('action', $('#arform').val());
		      $('.ARhidden').html($('#arhidden').val());
		      $('#optinEmail').attr('name', $('#aremail').val());
		      $('#optinName').attr('name', $('#arname').val());
		      // Track Clicks
		       $('.trackClick').click(function(e) {
		           $.post( "<?php echo $assets; ?>clicks.php?edit=<?php echo $ID; ?>" );
		      });
		       // Velocity Animation - Learn More Here -> http://dailyjs.com/2014/05/01/velocity/
			$('div.mainContainer').velocity({ opacity: 1 }, { duration: 1000 });

	      });
	    </script>
</body>
</html>