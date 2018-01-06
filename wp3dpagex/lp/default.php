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
	$results = get_option('wpleadgenx_campaign_'. $ID);	
	// echo $data->id;
	
	// $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	$full_path = get_site_url();


	$assets = $full_path . "/wp-content/plugins/wpleadgenx/lp/";



 	

	?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Lead Gen Plugin</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		 However, there is a blank style.css in the css directory should you prefer -->
	<link rel="stylesheet" href="<?php echo $assets; ?>css/gumby.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="<?php echo $assets; ?>js/libs/modernizr-2.6.2.min.js"></script>

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>

	<!--
	Include gumby.js followed by UI modules followed by gumby.init.js
	Or concatenate and minify into a single file -->
	<link rel="stylesheet" href="<?php echo $assets; ?>jquery.countdown.css">
<style type="text/css">
#defaultCountdown {  }
</style>
	<script gumby-touch="<?php echo $assets; ?>js/libs" src="js/libs/gumby.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.retina.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.fixed.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.skiplink.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.checkbox.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.radiobtn.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.tabs.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.navbar.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/jquery.validation.js"></script>
	<script src="<?php echo $assets; ?>js/libs/gumby.init.js"></script>
<script src="<?php echo $assets; ?>social-likes.min.js"></script>

<script src="<?php echo $assets; ?>jquery.bxslider.js"></script>
<!-- bxSlider CSS file -->
<link href="<?php echo $assets; ?>jquery.bxslider.css" rel="stylesheet" />
<script src="<?php echo $assets; ?>jquery.plugin.js"></script>
<script src="<?php echo $assets; ?>jquery.countdown.js"></script>
<script src="<?php echo $assets; ?>jquery-imagefill.js"></script>
	<script>


$( document ).ready(function() {
$("html, body").animate({ scrollTop: 0 }, 10);


	

    <?php if ($results->countdown != "") { ?>
	$('#defaultCountdown').countdown({
        date: "<?php echo stripcslashes($results->countdown); ?>",
        onEnd: function() {
            $('#ctabutton').html('<span class="pretty large <?php echo stripcslashes($results->ctaButtonColor); ?> btn" style="width: 100%; font-size: 32px;cursor: pointer; font-weight: bold; " ><?php echo stripcslashes($results->closedText); ?></span>');

          }
    });
<?php } ?>


  $.fn.center = function() {
    this.css({
        'position': 'fixed',
        'left': '50%',
        'top': '50%'
    });
    this.css({
        'margin-left': -this.outerWidth() / 2 + 'px',
        'margin-top': -this.outerHeight() / 2 + 'px'
    });

    return this;
}
$("#centered").center(true);
var windowH = $(window).height();
    var wrapperH = $('#topPage').height();
    if(windowH > wrapperH) {                            
        $('#topPage').css({'height':($(window).height())+'px'});
    }                                                                               
    $(window).resize(function(){
        var windowH = $(window).height();
        var wrapperH = $('#topPage').height();
        var differenceH = windowH - wrapperH;
        var newH = wrapperH + differenceH;
        var truecontentH = $('#truecontent').height();
        if(windowH > truecontentH) {
            $('#topPage').css('height', (newH)+'px');
        }

    });
$('#bottomPage').css('margin-top', $(document).height()+'px');

 $(window).resize();
    
document.body.style.overflow = 'hidden';


    $( "#dropdownNow" ).click(function() {
    	$('#bottomPage').css('margin-top', 0);
    	$('#centered').fadeOut(500);
  $('#topPage').slideUp(850);

$('#dropdownNow').hide();
  document.body.style.overflow = 'scroll';
});

$('.bxslider').bxSlider();   




$('#SignedUp2').click(function() {
    

    if ($('#optinName2').val() == "") {
    	alert('Enter in your name to continue');
    }
    if ($('#optinEmail2').val() == "") {
    	alert('Enter in your email address to continue');
    }
    if ($('#optinEmail2').val() != "" && $('#optinName2').val() != "") {
    	$('.banner').fadeOut(1000);
    	$('.lastStep').delay(1000).fadeIn(1000);
    	$('.ARform2').submit();
    }

    
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






				// Second AR
				break_apart_ar();
						
				// TAKE APART AR CODE
						
				function break_apart_ar(){
				
				var tags = ['a','iframe','frame','frameset','script'], reg, val = $('#autoresponderCode2').val(),
				
				hdn = $('#arcode_hdn_div22'), formurl = $('#arform2'), hiddenfields = $('#arhidden2');
				
				formurl.val('');
					if(jQuery.trim(val) == '')
					    return false;
					    $('#arcode_hdn_div2').html('');
					    $('#arcode_hdn_div22').html('');
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
					    if(num=='0') jQuery('#arname2').val(name_selected);
					    if(num=='1') jQuery('#aremail2').val(email_selected);
					    num++;
					});
								jQuery(':input[type=hidden]',hdn).each(function(){
									jQuery('#arcode_hdn_div2').append(jQuery('<input type="hidden" name="'+jQuery(this).attr('name')+'" />').val(jQuery(this).val()));
								});		
								var hidden_f = jQuery('#arcode_hdn_div2').html();
								formurl.val(jQuery('form',hdn).attr('action'));
								hiddenfields.val(hidden_f);
								hdn.html('');
								
				};
				
				$('.ARform2').attr('action', $('#arform2').val());
				$('.ARhidden2').html($('#arhidden2').val());
				$('#optinName2').attr('name', $('#arname2').val());
				$('#optinEmail2').attr('name', $('#aremail2').val());
				


var myForm = document.getElementById('arForm');
myForm.onsubmit = function() {
    var w = window.open('about:blank','Popup_Window','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=900,height=500,left = 482,top = 134');
    this.target = 'Popup_Window';
};

$('.bxImage').imageFill();

});
	</script>

	<script src="<?php echo $assets; ?>js/plugins.js"></script>
	<script src="<?php echo $assets; ?>js/main.js"></script>
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Droid+Sans:400,700|Lato:400,700,900,400italic|Lora:400,700,400italic,700italic|Pompiere|Maiden+Orange|PT+Sans+Narrow|Rokkitt:400,700|Gloria+Hallelujah|Droid+Serif:400,700,400italic,700italic|Open+Sans+Condensed:300,700|Bree+Serif|Special+Elite|Lobster+Two:400,400italic,700,700italic|Indie+Flower|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<style>

	/* Typography */

		body.typography1 {
			font-family: 'Oswald', sans-serif !important;
		}
		body.typography2 {
			font-family: 'Droid Sans', sans-serif !important;
		}
		body.typography3 {
			font-family: 'Lato', sans-serif !important;
		}
		body.typography4 {
			font-family: 'Lora', serif !important;
		}
		body.typography5 {
			font-family: 'Pompiere', cursive !important;
		}
		body.typography6 {
			font-family: 'Patrick Hand', cursive !important;
		}
		body.typography7 {
			font-family: 'Maiden Orange', cursive !important;
		}
		body.typography8 {
			font-family: 'PT Sans Narrow', sans-serif !important;
		}
		body.typography9 {
			font-family: 'Rokkitt', serif !important;
		}
		body.typography11 {
			font-family: 'Droid Serif', serif !important;
		}
		body.typography12 {
			font-family: 'Open Sans Condensed', sans-serif !important;
		}
		body.typography13 {
			font-family: 'Bree Serif', serif !important;
		}
		body.typography14 {
			font-family: 'Special Elite', cursive !important;
		}
		body.typography15 {
			font-family: 'Lobster Two', cursive !important;
		}


#topPage {
	width: 100%;
	position: relative;
	background: url(<?php echo stripcslashes($results->optinBG); ?>) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.bg.jpg', sizingMethod='scale');
    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='bg.jpg', sizingMethod='scale')";
    zoom:1;
}

#centered {
	background: #fff;
	border-radius: 10px;
	box-shadow: 0 0 10px <?php echo stripcslashes($results->shadowColor); ?>;
	padding: 40px 0;
}
#dropdownNow {
	text-indent: -9999px;
	width: 48px;
	height: 48px;
	display: block;
	left: 50%;	
  margin-left: -50px;	
	bottom: 30px;
	position: absolute;
	z-index: 9999;
	cursor: pointer;
	background: url(<?php echo stripcslashes($results->moreIcon); ?>) no-repeat;
}

#bottomPage {
	width: 100%;
	position: relative;
	clear: both;
	
}
.bxslider li img {
	width: 100%;
}
.bx-pager.bx-default-pager {
	display: none;
}
.footer p {
	font-size: .9em;
	color: #555;
}
.footer hr {
	border: none;
	border-top: 1px dashed #ddd;
	
	margin-top: 20px;
}
#footerLogo {
	width: 150px;
	opacity: .7;
	float: right;
}
#content ul li {
	padding: 10px;
	padding-left: 34px;
	background: url(https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-checkmark-circled-24.png) no-repeat left;
}
#content ol {
	margin-left: 0;
}
#content ol li {
	padding: 10px;
	padding-left: 34px;
	list-style: none;
	margin-left: 0;
	background: url(https://cdn3.iconfinder.com/data/icons/eightyshades/512/18_Close-24.png) no-repeat left;
}
#content blockquote {
	width: 300px;
	float: right;
	padding: 10px;
	padding-bottom: 0;
	text-align: right;
	border: none;
	border-left: none;
	font-style: italic;
	font-size: 1.4em;
}
#optinName {
	background: url(https://cdn2.iconfinder.com/data/icons/ledicons/user_silhouette.png) no-repeat;
	background-position: 295px 10px;
}
#optinEmail {
	background: url(https://cdn2.iconfinder.com/data/icons/ledicons/email_open.png) no-repeat;
	background-position: 295px 10px;
}


#bottomPage .row {

}

#share {
	width: 100px;
	margin: 0 auto;
	height: 60px;
}
.info.btn, .primary.btn, .success.btn, .secondary.btn {
	color: #fff !important;
}
.styled div {
  display: inline-block;
  margin-left: 10px;
  font-size: 30px;
  font-weight: 100;
  line-height: 1;
  text-align: right;
}
/* IE7 inline-block hack */
*+html .styled div{
  display: inline;
  zoom: 1;
}
.styled div:first-child {
  margin-left: 0;
}
.styled div span {
  display: block;
  border-top: 1px solid #cecece;
  padding-top: 3px;
  font-size: 12px;
  font-weight: normal;
  text-transform: uppercase;
  text-align: left;
}


	</style>
	

<?php if ($results->socialStyle != "") { ?>
	<link rel="stylesheet" href="<?php echo $assets; ?><?php echo stripcslashes($results->socialStyle); ?>.css">
<?php } else { ?>
	<link rel="stylesheet" href="<?php echo $assets; ?>social-likes_birman.css">
<?php } ?>
</head>

<body class="typography<?php echo stripcslashes($results->typography); ?> paragraph<?php echo stripcslashes($results->paragraph); ?>">
<?php if ($results->hidePage == "hide") { } else { ?>
	<span href="#" id="dropdownNow">Drop Down</span>
<?php } ?>

<div id="topPage">
	<div id="truecontent">
		<div class="row" id="centered">
	    <div class="ten columns centered" >
	      <div class="seven columns">
	      	<h3><strong><?php echo stripcslashes($results->mainHeadline); ?></strong></h3>
	      	<h4><?php echo stripcslashes($results->subHeadline); ?></h4>
	      	<div class="social-likes" data-url="<?php echo get_site_url(); ?>" data-title="<?php echo stripcslashes($results->socialText); ?>" style="margin-top: 10px;">
				<div class="facebook" title="Share link on Facebook">Facebook</div>
				<div class="twitter" data-via="twitter" data-related="twitter usernae" title="<?php echo stripcslashes($results->socialText); ?>">Twitter</div>
				<div class="plusone" title="Share link on Google+">Google+</div>
			</div>
	      </div>
	      <div class="five columns">
	      	<p><?php echo stripcslashes($results->optinHeadline); ?></p>
	   

	      	<form action=""  class='ARform' id="arForm">
					<div class='ARhidden'></div>
					
					<div class="field">
	      		<input type="text" name="optinName" id="optinName" placeholder="<?php echo stripcslashes($results->namePlaceholder); ?>" class="text input">
	      	</div>
	      	<div class="field">
	      		<input type="text"   name="optinEmail" id="optinEmail" required placeholder="<?php echo stripcslashes($results->emailPlaceholder); ?>" class="text input">
	      	</div>
				</form>

				

				<div id="autoresponder" style="display: none">
					<textarea id="autoresponderCode" name="autoresponderCode"><?php echo stripcslashes($results->autoresponder); ?></textarea>
					<input type="text"  name="arname" id="arname" value="" />
					<input type="text"   name="aremail" id="aremail" value="" />
					<input type="text"   name="arform" id="arform" value="" />
					<textarea id="arhidden"   name="arhidden"></textarea>
					<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
				</div>
	      	<input value="<?php echo stripcslashes($results->optinButton); ?>" id="SignedUp" type="button" class="pretty large <?php echo stripcslashes($results->optinButtonColor); ?> btn" style="width: 100%; cursor: pointer">
	      	<p style="font-size: 11px; color: #999; padding-top: 10px; text-align: center;"><?php echo stripcslashes($results->spam); ?></p>
	      </div>
	    </div>
	  </div>
	</div>
</div>

<div id="bottomPage">
	<div id="mainSlider">
<?php if ($results->slider1 != "") { ?>
	<ul class="bxslider">
			<li><img src="<?php echo stripcslashes($results->slider1); ?>" alt=""></li>
		<?php if ($results->slider2 != "") { ?>
			<li><img src="<?php echo stripcslashes($results->slider2); ?>" alt=""></li>
		<?php } ?>
		<?php if ($results->slider3 != "") { ?>
			<li><img src="<?php echo stripcslashes($results->slider3); ?>" alt=""></li>
		<?php } ?>
		<?php if ($results->slider4 != "") { ?>
			<li><img src="<?php echo stripcslashes($results->slider4); ?>" alt=""></li>
		<?php } ?>
		<?php if ($results->slider5 != "") { ?>
			<li><img src="<?php echo stripcslashes($results->slider5); ?>" alt=""></li>
		<?php } ?>
	</ul>
<?php } else { ?>
	<br><br>
<?php } ?>
	</div>
		<div class="row" style="margin-top:-30px">
		    <div class="eleven columns" >
				<h1 style="letter-spacing: -1px;"><strong><?php echo stripcslashes($results->contentHeadline); ?></strong></h1>
		    </div>
			<div class="one columns">
				<br><br>
				<!-- <img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/64x64/actions/knewstuff.png" alt=""> -->
			</div>
		     
		</div>

		<div class="row">
			<div class="eight columns" id="content">
				<h3 style=" padding: 16px 0; line-height: 1.4em"><?php echo stripcslashes($results->contentSubHeadline); ?> </h3>

					       <?php echo stripcslashes($results->mainContent); ?>


					       
						    </div>
		    <div class="four columns" >

		   <div id="share">
		   	 <div class="social-likes social-likes_single" data-single-title="Share" data-url="<?php echo get_site_url(); ?>" data-title="<?php echo stripcslashes($results->socialText); ?>" style="margin-top: -10px; ">
				<div class="facebook" title="Share link on Facebook">Facebook</div>
				<div class="twitter" data-via="twitter" data-related="twitter usernae" title="<?php echo stripcslashes($results->socialText); ?>">Twitter</div>
				<div class="plusone" title="Share link on Google+">Google+</div>
			</div>
		   </div>
				

				<div id="ctabutton">
				<a class="pretty large <?php echo stripcslashes($results->ctaButtonColor); ?> btn" style="width: 100%; font-size: 32px;cursor: pointer; font-weight: bold; " href="<?php echo stripcslashes($results->buyLink); ?>"><?php echo stripcslashes($results->buyText); ?></a>
	
				</div>


								<h2 style="text-align: center;"><span><strong><?php echo stripcslashes($results->price); ?></strong> <span style="color: #777; text-decoration:line-through; font-size: .8em"><?php echo stripcslashes($results->discount); ?></span></span></h2>
			<div id="defaultCountdown" style="text-align: center; padding: 0 30px; font-size: 26px;"></div>
				<br>
				
<?php if ($results->sidebarImage != "") { ?>
					<img src="<?php echo stripcslashes($results->sidebarImage); ?>" alt="">
						
				<?php } ?>
				<?php echo stripcslashes($results->sidebarContent); ?>
				<div class="optin" style="padding: 20px; background: #eee; margin: 10px 0;">
					<h4><strong><?php echo stripcslashes($results->optinHeadline2); ?></strong></h4>
					<p><?php echo stripcslashes($results->optinHeadline); ?></p>
	      	<form action=""  class='ARform2' id="arForm2">
					<div class='ARhidden2'></div>
					
					<div class="field">
	      		<input type="text" name="optinName" id="optinName2" placeholder="<?php echo stripcslashes($results->namePlaceholder); ?>" class="text input">
	      	</div>
	      	<div class="field">
	      		<input type="text"   name="optinEmail" id="optinEmail2" required placeholder="<?php echo stripcslashes($results->emailPlaceholder); ?>" class="text input">
	      	</div>
	      	<input value="<?php echo stripcslashes($results->optinButton); ?>" id="SignedUp2" type="button" class="pretty large <?php echo stripcslashes($results->optinButtonColor); ?> btn" style="width: 100%; cursor: pointer; font-size: 22px">
	      	<p style="font-size: 11px; color: #999; padding-top: 10px; text-align: center;"><?php echo stripcslashes($results->spam); ?></p>
				</form>

				

				<div id="autoresponder2" style="display: none">
					<textarea id="autoresponderCode2" name="autoresponderCode2"><?php echo stripcslashes($results->autoresponder); ?></textarea>
					<input type="text"  name="arname" id="arname2" value="" />
					<input type="text"   name="aremail" id="aremail2" value="" />
					<input type="text"   name="arform" id="arform2" value="" />
					<textarea id="arhidden2"   name="arhidden"></textarea>
					<div id="arcode_debug2"><div id="arcode_hdn_div2"></div><div id="arcode_hdn_div22"></div></div>
				</div>
	      </div>
		    </div>
<br clear="both"><br>
			
<?php echo stripcslashes($results->secondaryContent); ?>
		</div>
		<div class="row footer" >
				<hr>
				<?php if ($results->footerLogo != "") { ?>
					<a href="#" id="footerLogo"><img src="<?php echo stripcslashes($results->footerLogo); ?>" alt=""></a>
						
				<?php } ?>
				<p><?php echo stripcslashes($results->footerContent); ?></p>

				<br clear="both"><br>
			</div>
</div>

	

  </body>
</html>
