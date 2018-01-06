<?php

	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	
	// Load Up All Key Departments
	$urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	$urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
	$urlx = str_replace( "?", "", $urlx);
global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	
	$ID = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($data as $data) {}

	// Return Option Object:
	$results = get_option('wpchartpagex_campaign_'. $ID);	
	// echo $data->id;
	
	// $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	$full_path = get_site_url();


	$assets = $full_path . "/wp-content/plugins/wpchartpagex/lp/";



 	

	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo $assets; ?>toast.css">
	<link rel="stylesheet" href="<?php echo $assets; ?>styles.css">
	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Droid+Sans:400,700|Lato:400,700,900,400italic|Lora:400,700,400italic,700italic|Pompiere|Maiden+Orange|PT+Sans+Narrow|Rokkitt:400,700|Gloria+Hallelujah|Droid+Serif:400,700,400italic,700italic|Open+Sans+Condensed:300,700|Bree+Serif|Special+Elite|Lobster+Two:400,400italic,700,700italic|Indie+Flower|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
	<style>

		/* Typography */

		body.typography1 {
			font-family: 'Oswald', sans-serif;
		}
		body.typography2 {
			font-family: 'Droid Sans', sans-serif;
		}
		body.typography3 {
			font-family: 'Lato', sans-serif;
		}
		body.typography4 {
			font-family: 'Lora', serif;
		}
		body.typography5 {
			font-family: 'Pompiere', cursive;
		}
		body.typography6 {
			font-family: 'Patrick Hand', cursive;
		}
		body.typography7 {
			font-family: 'Maiden Orange', cursive;
		}
		body.typography8 {
			font-family: 'PT Sans Narrow', sans-serif;
		}
		body.typography9 {
			font-family: 'Rokkitt', serif;
		}
		body.typography11 {
			font-family: 'Droid Serif', serif;
		}
		body.typography12 {
			font-family: 'Open Sans Condensed', sans-serif;
		}
		body.typography13 {
			font-family: 'Bree Serif', serif;
		}
		body.typography14 {
			font-family: 'Special Elite', cursive;
		}
		body.typography15 {
			font-family: 'Lobster Two', cursive;
		}


		.post.paragraph1  {
			font-family: 'Oswald', sans-serif !important;
		}
		.post.paragraph2  {
			font-family: 'Droid Sans', sans-serif !important;
		}
		.post.paragraph3  {
			font-family: 'Lato', sans-serif !important;
		}
		.post.paragraph4  {
			font-family: 'Lora', serif  !important;
		}
		.post.paragraph5  {
			font-family: 'Pompiere', cursive !important;
		}
		.post.paragraph6  {
			font-family: 'Patrick Hand', cursive !important;
		}
		.post.paragraph7  {
			font-family: 'Maiden Orange', cursive !important;
		}
		.post.paragraph8  {
			font-family: 'PT Sans Narrow', sans-serif !important;
		}
		.post.paragraph9  {
			font-family: 'Rokkitt', serif !important;
		}
		.post.paragraph11  {
			font-family: 'Droid Serif', serif !important;
		}
		.post.paragraph12  {
			font-family: 'Open Sans Condensed', sans-serif !important;
		}
		.post.paragraph13  {
			font-family: 'Bree Serif', serif !important;
		}
		.post.paragraph14  {
			font-family: 'Special Elite', cursive !important;
		}
		.post.paragraph15  {
			font-family: 'Lobster Two', cursive !important;
		}

	</style>
<script type="text/javascript">
	


</script>
<script type="text/javascript">
$(document).ready(function(){
  //   $('#facebook').click(function(e){
  //       $.oauthpopup({
  //           path: '<?php echo $assets; ?>fconnected.php',
		// 	width:600,
		// 	height:300,
  //           callback: function(){
  //               window.location.reload();
  //           }
  //       });
		// e.preventDefault();
  //   });


$('#signUp').click(function() {
    $('.banner').each(function() {
        if ($(this).offset().left < 0) {
            $(this).css("left", "150%");
        } else if ($(this).offset().left > $('.container').width()) {
            $(this).animate({
                left: '50%',
            }, 500 );
        } else {
            $(this).animate({
                left: '-150%',
            }, 500 );
        }
    });
});


$('#SignedUp').click(function() {
    

    if ($('#optinName').val() == "") {
    	alert('Enter in your name to continue');
    }
    if ($('#optinEmail').val() == "") {
    	alert('Enter in your email address to continue');
    }
    if ($('#optinEmail').val() != "" && $('#optinName').val() != "") {
    	$('.banner').fadeOut(1000);
    	$('.lastStep').delay(1000).fadeIn(1000);
    	$('.ARform').submit();
    }

    
});

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
				$('#optinName').attr('name', $('#arname').val());
				$('#optinEmail').attr('name', $('#aremail').val());
				


var myForm = document.getElementById('arForm');
myForm.onsubmit = function() {
    var w = window.open('about:blank','Popup_Window','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=900,height=500,left = 482,top = 134');
    this.target = 'Popup_Window';
};

});


</script>
</head>
<body class="typography<?php echo stripcslashes($results->typography); ?> bg<?php echo stripcslashes($results->background); ?>">

	<div class="container">
		<div class="grid header">
			
			<div class="span-grid top_banner" style="text-align: center;">
				<?php if ($results->logo != "") { ?>
					<img src="<?php echo stripcslashes($results->logo); ?>" style="max-height: 185px; max-width: 100%; display: block; margin: 0 auto; margin-top: -15px">
				<?php } else { ?>
					<h4><?php echo stripcslashes($results->subHeadline); ?></h4>
					<h2><?php echo stripcslashes($results->mainHeadline); ?></h2>
				<?php } ?>
			</div>
		</div>

		</div>

		<div class="banner">
			<div class="video">
				<?php echo stripcslashes($results->videoBox); ?>
			</div>
			<div class="connectr">
				<h2><?php echo stripcslashes($results->bannerHeadline); ?></h2>
				<h3><?php echo stripcslashes($results->bannerSubHeadline); ?></h3>

				<a href="#" class="btn buttonColor<?php echo stripcslashes($results->buttonBG); ?>" id="signUp"><?php echo stripcslashes($results->ctaButton); ?></a>

	
			</div>
		</div>

		<div class="banner" style="left: 180%;">
			<div class="optin">
				
				<h2><?php echo stripcslashes($results->optinHeadline); ?></h2>
				<h3><?php echo stripcslashes($results->optinSubHeadline); ?></h3>
				<form action=""  class='ARform' id="arForm">
					<div class='ARhidden'></div>
					<input type="text"  name="optinName" id="optinName" required class="name" placeholder="Enter your full name..">
					<input type="email" name="optinEmail" id="optinEmail" required class="email" placeholder="Enter your email address..">
				</form>

				

				<div id="autoresponder" style="display: none">
					<textarea id="autoresponderCode" name="autoresponderCode"><?php echo stripcslashes($results->autoresponder); ?>></textarea>
					<input type="text"  name="arname" id="arname" value="" />
					<input type="text"   name="aremail" id="aremail" value="" />
					<input type="text"   name="arform" id="arform" value="" />
					<textarea id="arhidden"   name="arhidden"></textarea>
					<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
				</div>
				<a href="#" class="btn buttonColor<?php echo stripcslashes($results->buttonBG2); ?>" id="SignedUp" style="margin-top: -10px"><?php echo stripcslashes($results->optinButton); ?></a>
				<h4 class="spam"><?php echo stripcslashes($results->spam); ?></h4>
	
			</div>
		</div>


		<div class="lastStep" style="display: none;">
		
				
<?php echo stripcslashes($results->lastStep); ?>
	
		</div>

		<div style="height: 607px;"></div>

<div class="container">

		<div class="grid list">
			<div class="one-of-three unit">
				<img src="<?php echo stripcslashes($results->icon1); ?>" alt="">
				<h4><?php echo stripcslashes($results->item1Headline); ?></h4>
				<p><?php echo stripcslashes($results->item1SubHeadline); ?></p>
			</div>
			<div class="one-of-three unit">
				<img src="<?php echo stripcslashes($results->icon2); ?>" alt="">
				<h4><?php echo stripcslashes($results->item2Headline); ?></h4>
				<p><?php echo stripcslashes($results->item2SubHeadline); ?></p>
			</div>
			<div class="one-of-three unit">
				<img src="<?php echo stripcslashes($results->icon3); ?>" alt="">
				<h4><?php echo stripcslashes($results->item3Headline); ?></h4>
				<p><?php echo stripcslashes($results->item3SubHeadline); ?></p>
			</div>
		</div>

		<div class="grid content">
			


			<div class="two-of-three unit post paragraph<?php echo stripcslashes($results->paragraph); ?>">
				<?php echo stripcslashes($results->mainContent); ?>
			</div>
			<div class="one-of-three unit sidebar">
				<h1 class="title"><?php echo stripcslashes($results->sidebarHeadline); ?></h1>
				<div style="padding: 25px 17px; font-size: 15px;">
					<?php echo stripcslashes($results->sidebar); ?>
				</div>
				
			</div>

			<div class="grid footer">
				<div class="span-grid unit">
					<?php echo stripcslashes($results->footer); ?>
				</div>
			</div>

		</div>
	</div>
	
</body>
</html>