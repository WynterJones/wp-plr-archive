<?php
	define('WP_USE_THEMES', true);
	require ('../../../../wp-load.php');
	global $post;
	global $wpdb;
	$getPage = $wpdb->prefix . "wpmediaremix";
	$getID = $_GET['edit'];
	$editBook = $wpdb->get_results("SELECT * FROM $getPage WHERE id = $getID" ,ARRAY_A);

	$tpl = get_post_meta($post->ID,'_template',true);
	
	foreach($editBook as $template){} 		
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title><?php echo $template['name']; ?> -- Media Player</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

<script type="text/javascript">
//<![CDATA[

$(document).ready(function(){



	var myPlayer = $("#jquery_jplayer_1"),
		myPlayerData,
		fixFlash_mp4, // Flag: The m4a and m4v Flash player gives some old currentTime values when changed.
		fixFlash_mp4_id, // Timeout ID used with fixFlash_mp4
		ignore_timeupdate, // Flag used with fixFlash_mp4
		options = {
			ready: function (event) {
				// Hide the volume slider on mobile browsers. ie., They have no effect.
				if(event.jPlayer.status.noVolume) {
					// Add a class and then CSS rules deal with it.
					$(".jp-gui").addClass("jp-no-volume");
				}
				// Determine if Flash is being used and the mp4 media type is supplied. BTW, Supplying both mp3 and mp4 is pointless.
				fixFlash_mp4 = event.jPlayer.flash.used && /m4a|m4v/.test(event.jPlayer.options.supplied);
				// Setup the player with media.
				$(this).jPlayer("setMedia", {
					m4a: "<?php echo $template['m4a']; ?>",
					oga: "<?php echo $template['ogg']; ?>"
				});
			},
			timeupdate: function(event) {
				if(!ignore_timeupdate) {
					myControl.progress.slider("value", event.jPlayer.status.currentPercentAbsolute);
					if ($('.jp-current-time').html() == "<?php echo $template['alertTime']; ?>") {
						$('#alert').fadeIn();
					};

					if ($('.jp-current-time').html() == "<?php echo $template['slider']; ?>") {
						$('.extra').fadeIn();
					};

					if ($('.jp-current-time').html() == "<?php echo $template['ar_time']; ?>") {
						$('#optin').fadeIn();
					};

					if ($('.jp-current-time').html() == "<?php echo $template['flash']; ?>") {
						$('.ctaButton').attr('style', 'background: url(images/button1.png) no-repeat;');
						setTimeout(function(){ $('.ctaButton').attr('style', 'background: url(images/button.png) no-repeat;') },1000);
						setTimeout(function(){ $('.ctaButton').attr('style', 'background: url(images/button1.png) no-repeat;') },2000);
						setTimeout(function(){ $('.ctaButton').attr('style', 'background: url(images/button.png) no-repeat;') },3000);
						setTimeout(function(){ $('.ctaButton').attr('style', 'background: url(images/button1.png) no-repeat;') },4000);
						setTimeout(function(){ $('.ctaButton').attr('style', 'background: url(images/button.png) no-repeat;') },5000);
					};
				}
			},
			volumechange: function(event) {
				if(event.jPlayer.options.muted) {
					myControl.volume.slider("value", 0);
				} else {
					myControl.volume.slider("value", event.jPlayer.options.volume);
				}
			},
			swfPath: "js",
			supplied: "m4a, oga",
			cssSelectorAncestor: "#player",
			wmode: "window",
			keyEnabled: true
		},
		myControl = {
			progress: $(options.cssSelectorAncestor + " .jp-progress-slider"),
			volume: $(options.cssSelectorAncestor + " .jp-volume-slider")
		};

	// Instance jPlayer
	myPlayer.jPlayer(options);

	// A pointer to the jPlayer data object
	myPlayerData = myPlayer.data("jPlayer");

	// Define hover states of the buttons
	$('.jp-gui ul li').hover(
		function() { $(this).addClass('ui-state-hover'); },
		function() { $(this).removeClass('ui-state-hover'); }
	);

	// Create the progress slider control
	myControl.progress.slider({
		animate: "fast",
		max: 100,
		range: "min",
		step: 0.1,
		value : 0,
		slide: function(event, ui) {
			var sp = myPlayerData.status.seekPercent;
			if(sp > 0) {
				// Apply a fix to mp4 formats when the Flash is used.
				if(fixFlash_mp4) {
					ignore_timeupdate = true;
					clearTimeout(fixFlash_mp4_id);
					fixFlash_mp4_id = setTimeout(function() {
						ignore_timeupdate = false;
					},1000);
				}
				// Move the play-head to the value and factor in the seek percent.
				myPlayer.jPlayer("playHead", ui.value * (100 / sp));
			} else {
				// Create a timeout to reset this slider to zero.
				setTimeout(function() {
					myControl.progress.slider("value", 0);
				}, 0);
			}
		}
	});

	// Create the volume slider control
	myControl.volume.slider({
		animate: "fast",
		max: 1,
		range: "min",
		step: 0.01,
		value : $.jPlayer.prototype.options.volume,
		slide: function(event, ui) {
			myPlayer.jPlayer("option", "muted", false);
			myPlayer.jPlayer("option", "volume", ui.value);
		}
	});

$('.embed').focus(function() {
					$('.embedCode').select();
				});

});

$(document).ready(function() {
$('#overlay').height($('#jp_container_1').height());
$('#overlay2').height($('#jp_container_1').height());
$(".close").click(function() {
					$('#overlay').fadeOut();
					$('#pop').fadeOut();
				});
$(".close2").click(function() {
					$('#overlay2').fadeOut();
					$('#pop2').fadeOut();
				});

if ("<?php echo $template['slider']; ?>" == '') {
						$('.extra').show();
					};



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
				
				$('#sidebar-optinName').attr('name', $('#arname').val());
				$('#sidebar-optinEmail').attr('name', $('#aremail').val());
});
//]]>
</script>
<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<style>
<!--
h2, h3 {
	margin: 0;
	padding: 15px 0;
	font-family: 'Average Sans', sans-serif !important;
}
h2 {
	color: #222;
}
h3.title {
	font-size: 13px;
	color: #666;
	text-transform: uppercase;
	font-weight: normal;
	padding: 10px 0;
	font-family: 'Average Sans', sans-serif !important;
	margin-bottom: 10px;
}
p {
	font-size: 15px !important;
}
.extra h1, .extra h2, .extra h3, .extra h4, .extra h5, .extra h6 {
	font-weight: normal;
	font-family: 'Average Sans', sans-serif !important;
}
.jp-gui {
	position:relative;
	padding:20px;
	border: 4px solid #fafafa;
	border-radius: 5px;
	font-family: 'Average Sans', sans-serif !important;
	z-index: 99;
}
.jp-gui.jp-no-volume {
	width:432px;
}
.ui-state-active {
	border: none !important;
}
.jp-gui ul {
	margin:0;
	padding:0;
	float: right;
	width: 52%;
	margin-top: 4px;
}
.jp-gui ul li {

	float:left;
	list-style:none;
	margin:2px;
	padding:4px 0;
	cursor:pointer;
}
.jp-gui ul li a {
	margin:0 4px;
}
.jp-gui ul li:hover {
	background: none !important;
	border: none !important;
}
.jp-gui li.jp-repeat,
.jp-gui li.jp-repeat-off {
	margin-left:344px;
}
.jp-gui li.jp-mute,
.jp-gui li.jp-unmute {
	
}
.jp-gui li.jp-volume-max {
	margin-left:120px;
}
li.jp-pause,
li.jp-repeat-off,
li.jp-unmute,
.jp-no-solution {
	display:none;
}
.jp-progress-slider {
	width:71%;
	float: right;
	margin-left: 5px;
	background: #fafafa;
}
.ui-slider-range {
	background-color: #ddd;
	-webkit-background-size: 30px 30px;
	-moz-background-size: 30px 30px;
	background-size: 30px 30px;			
	background-image: -webkit-gradient(linear, left top, right bottom,
						color-stop(.25, rgba(255, 255, 255, .15)), color-stop(.25, transparent),
						color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .15)),
						color-stop(.75, rgba(255, 255, 255, .15)), color-stop(.75, transparent),
						to(transparent));
	background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
						transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
						transparent 75%, transparent);
	background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
						transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
						transparent 75%, transparent);
	background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
						transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
						transparent 75%, transparent);
	background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
						transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
						transparent 75%, transparent);
	background-image: linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%,
						transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%,
						transparent 75%, transparent);            
	
	-webkit-animation: animate-stripes 3s linear infinite;
	-moz-animation: animate-stripes 3s linear infinite; 
}
.jp-progress-slider .ui-slider-handle {
	cursor:pointer;
	height:.8em;
	width:.8em;
	margin-top: 4px; 
	margin-left: -3px;
	border-top-right-radius: 4px;
	border-bottom-right-radius: 4px;
}
a:focus, a:active {
	outline: none;
}
.jp-volume-slider {
	float: right;
	width: 20%;
	clear: right;
	height:.4em;
	margin-top: 18px;
}
.jp-volume-slider .ui-slider-handle {
	height:.4em;
	width:.4em;
	margin-top: 4px;
	cursor:pointer;
	border-radius: 0;
	margin-left: -1px;
	border-top-right-radius: 4px;
	border-bottom-right-radius: 4px;
}

.jp-gui.jp-no-volume .jp-volume-slider {
	display:none;
}
.jp-current-time,
.jp-duration {
	padding-left: 9px;
	font-size:0.7em;
	cursor:default;
}
.jp-current-time {
	padding-top: 4px;
	float: left;
}
.jp-duration {
	padding-top: 4px;
	float: right;
}
.jp-gui.jp-no-volume .jp-duration {
	right:70px;
}
.jp-clearboth {
	clear:both;
}
#jp_container_1 {
	width: 100%;
	margin: 0 auto;
	margin-top: 10px;
	font-size: 14px;
	border-radius: 5px;
	position: relative;
	border: 1px solid #ccc;
	font-family: 'Average Sans', sans-serif !important;
	z-index: 1;
	box-shadow: 0 3px 3px #eee;
}
.ctaButton {
	width: 131px;
	height: 41px;
	float: right;
	text-decoration: none;
	color: #444;
	font-weight: bold;
	padding-top: 10px;
	text-align: center;
	font-size: 15px;
	margin-top: 7px;
	margin-left: 10px;
	background: url(images/button.png) no-repeat left top;
}
.embed {
	
	position: absolute;
	bottom: -43px;
	left: -1px;
	display: block;
	border: 1px solid #ccc;
	border-bottom-right-radius: 4px;
	border-bottom-left-radius: 4px;
	text-decoration: none;
	background: #fafafa;
	z-index: -99;
	color: #666;
	font-size: 12px;
	box-shadow: 0 3px 3px #eee;
}
.inner {
	padding: 10px;
	border: 4px solid #fafafa;
	border-bottom-right-radius: 4px;
	border-bottom-left-radius: 4px;
	display: block;
	z-index: -999 ;
}
.embedCode {
	width: 70%;
	position: absolute;
	bottom: -41px;
	right: 2px;
	padding: 5px;
	border-radius: 4px;
	display: block;
	border: 1px solid #ccc;
	box-shadow: 0 0 3px #ddd inset;
	font-size: 11px;
	letter-spacing: 1px;
	color: #666;
}
.ARform .name {
	width: 45%;
	float: left;
	padding: 7px;
	background: url(http://cdn2.iconfinder.com/data/icons/ledicons/user_business_boss.png) no-repeat right;
	background-position: 97% 7px;
	border: 1px solid #ccc;
	border-radius: 4px;
}
.ARform .email {
	width: 45%;
	float: right;
	padding: 7px;
	background: url(http://cdn2.iconfinder.com/data/icons/ledicons/email.png) no-repeat;
	background-position: 97% 7px;
	border: 1px solid #ccc;
	border-radius: 4px;
}
.ARform .submit {
	width: 100%;
	margin-top: 10px;
	margin-bottom: 5px;
	padding: 7px;
	font-size: 15px;
	font-weight: bold;
	cursor: pointer;
	-moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #7FBF4D;
    background-image: -moz-linear-gradient(center top , #7FBF4D, #63A62F);
    border-color: #63A62F #63A62F #5B992B;
    border-image: none;
    border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 0 0 #96CA6D inset;
    color: #FFFFFF;
    padding: 7px 0 8px;
    text-align: center;
    text-shadow: 0 -1px 0 #4C9021;
	border-radius: 4px;
}
-->
</style>
</head>
<body>

		<div id="jquery_jplayer_1" class="jp-jplayer"></div>
		
		
		<div id="jp_container_1">

		<div id="optin" style="display: none">
			<?php if ($template['design'] == 'black') { ?>
				<div id="overlay2" style="position: absolute; width: 100%;  border-radius: 5px; border: 1px solid #000; z-index: 9999; background: #222; opacity: .8; display: block; text-align: center;"></div>
			<?php } ?>
			<?php if ($template['design'] == '') { ?>
				<div id="overlay2" style="position: absolute; width: 100%;  border-radius: 5px; border: 1px solid #000; z-index: 9999; background: #222; opacity: .8; display: block; text-align: center;"></div>
			<?php } ?>
			<div id="pop2" style="display: block; position: absolute; margin-left: 4%; border-radius: 5px;border: 1px solid #ccc;box-shadow: 0 2px 2px #999; top: 7%; z-index: 99999; background:#fff; padding: 20px; width: 85%;">
				<form action="" class='ARform' target="_top">
					<div class='ARhidden'></div>
					<h2 style="display: block; text-align: center; padding: 20px 20px; margin-top: -20px"><?php echo $template['ar_headline']; ?></h2>
					<input type="text" name="name" class="name" placeholder="Your Name Here"/>
					<input type="text" required placeholder="Your Email Address Here..."  class="email" id='optinEmail' name="email"/>
					<input type="submit" value="<?php echo $template['ar_button']; ?>" class="submit" />
					<span style="float: left; padding: 7px; padding-left: 0; color: #666; font-size: 12px;"><img src="http://cdn2.iconfinder.com/data/icons/ledicons/lock.png" style="float: left; margin-right: 5px;">We hate SPAM too - won't spam you</span>
					<span style="float: right; padding: 7px; padding-right: 0; font-size: 12px;"><a href="#" class="close2" style="text-decoration: none; color: #666">Click Here to Close <img src="http://cdn3.iconfinder.com/data/icons/UltimateGnome/16x16/actions/gtk-close.png" style="float: right; margin-left: 5px;"></a></span>
				</form>
			</div>
		</div>
		<div id="autoresponder" style="display: none">
			<textarea id="autoresponderCode" name="autoresponderCode"><?php echo $template['auto_responder']; ?></textarea>
			<input type="text"  name="arname" id="arname" value="" />
			<input type="text"   name="aremail" id="aremail" value="" />
			<input type="text"   name="arform" id="arform" value="" />
			<textarea id="arhidden"   name="arhidden"></textarea>
			<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
		</div>

			<a href="#" class="embed"><span class="inner"><img src="http://cdn2.iconfinder.com/data/icons/vaga/heart.png" style="margin-top: 2px; float: left; margin-right: 8px"> Share on Your Blog</span></a>
			<input type="text" class="embedCode" value="<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script><script type='text/javascript'>

			$(document).ready(function($) {
		        $('#the_iframe_<?php echo $template['id']; ?>').load(function () {
				    $(this).height($(this).contents().height());
				    $(this).width($(this).contents().width());
				});
			});

		</script><iframe scrolling='no' ALLOWTRANSPARENCY='true' id='the_iframe_<?php echo $template['id']; ?>'' frameborder='0' style='width: 100%;  z-index: 9999; position: relative' src='<?php echo plugin_dir_url( __FILE__ ) ?>index.php?edit=<?php echo $template['id']; ?>''></iframe><br/>">
			<div id="alert" style="display: none">
				<?php if ($template['design'] == 'black') { ?>
				<div id="overlay" style="position: absolute; width: 100%;  border-radius: 5px; border: 1px solid #000; z-index: 9999; background: #222; opacity: .8; display: block; text-align: center;"></div>
			<?php } ?>
			<?php if ($template['design'] == '') { ?>
				<div id="overlay" style="position: absolute; width: 100%;  border-radius: 5px; border: 1px solid #000; z-index: 9999; background: #222; opacity: .8; display: block; text-align: center;"></div>
			<?php } ?>
				<div id="pop" style="display: block; position: absolute; margin-left: 4%; border-radius: 5px;border: 1px solid #ccc;box-shadow: 0 2px 2px #999; top: 6%; z-index: 99999; background:#fff; padding: 20px; width: 85%;"><?php echo $template['alert']; ?> <span style="display: block; margin: 0 auto; padding: 7px;  padding-top: 20px; clear: both;padding-right: 0; font-size: 12px;"><a href="#" class="close" style="text-decoration: none; color: #666; ">Click Here to Close <img src="http://cdn3.iconfinder.com/data/icons/UltimateGnome/16x16/actions/gtk-close.png" style="float: right; margin-left: 5px;"></a></span></div>
			</div>			<div class="jp-gui ui-widget ui-widget-content ui-corner-all">
				<a href="<?php echo $template['buttonURL']; ?>" target="_blank" class="ctaButton"><?php echo $template['button']; ?></a>
				<div class="rating" style="float: right; clear: right">
					<?php if ($template['rating'] == '5'): ?>
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
					<?php endif ?>
					<?php if ($template['rating'] == '4'): ?>
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
					<?php endif ?>
					<?php if ($template['rating'] == '3'): ?>
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
					<?php endif ?>
					<?php if ($template['rating'] == '2'): ?>
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
					<?php endif ?>
					<?php if ($template['rating'] == '1'): ?>
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="opacity: .3">
						<img src="http://cdn1.iconfinder.com/data/icons/ledicons/star_2.png" style="">
					<?php endif ?>
				</div>
				<h2 style="padding: 0; font-size: 30px"><?php echo $template['headline']; ?></h2>
				<h3 class="title"><?php echo $template['subheadline']; ?></h3>
				<a href="<?php echo get_bloginfo('siteurl'); ?>" target="_blank"><img src="<?php echo $template['logo']; ?>" style="float: left; width: 25%; padding:  4px"></a>
					<div id="player">
						<div class="jp-progress-slider"></div>
					<div class="jp-current-time"></div>
					<div class="jp-duration"></div>
					<div class="jp-volume-slider"></div>
					<ul>
						<li class="jp-play "><a href="javascript:;" class="jp-play" tabindex="1" title="play"><img src="http://cdn2.iconfinder.com/data/icons/splashyIcons/media_controls_light_play.png" style="margin-bottom: -2px"></a></li>
						<li class="jp-pause "><a href="javascript:;" class="jp-pause" tabindex="1" title="pause"><img src="http://cdn2.iconfinder.com/data/icons/splashyIcons/media_controls_light_pause.png" style="margin-bottom: -2px"></a></li>
						<li class="jp-stop "><a href="javascript:;" class="jp-stop" tabindex="1" title="stop"><img src="http://cdn2.iconfinder.com/data/icons/splashyIcons/media_controls_light_stop.png" style="margin-bottom: -2px"></a></li>
						<!-- <li class="jp-repeat "><a href="javascript:;" class="jp-repeat ui-icon ui-icon-refresh" tabindex="1" title="repeat">repeat</a></li>
						<li class="jp-repeat-off ui-state-default ui-state-active ui-corner-all"><a href="javascript:;" class="jp-repeat-off ui-icon ui-icon-refresh" tabindex="1" title="repeat off">repeat off</a></li> -->
						<li class="jp-mute "><a href="javascript:;" class="jp-mute " tabindex="1" title="mute"><img src="http://cdn3.iconfinder.com/data/icons/lynx/16x16/status/audio-volume-high.png" style="margin-bottom: -2px"></a></li>
						<li class="jp-unmute ui-state-default ui-state-active ui-corner-all"><a href="javascript:;" class="jp-unmute " tabindex="1" title="unmute"><img src="http://cdn3.iconfinder.com/data/icons/lynx/16x16/status/audio-volume-low.png" style="margin-bottom: -2px"></a></li>
						<!-- <li class="jp-volume-max "><a href="javascript:;" class="jp-volume-max ui-icon ui-icon-volume-on" tabindex="1" title="max volume">max volume</a></li> -->
						<li class="jp-new "><a href="<?php echo get_bloginfo('siteurl'); ?>" target="_blank" class="" tabindex="1" title="Visit Website" ><img src="http://cdn2.iconfinder.com/data/icons/tango/16x16/apps/internet-web-browser.png" style="margin-bottom: -2px"></a></a></li>
						<?php if ($template['twitter']) { ?>
							<li class="jp-new "><a href="<?php echo $template['twitter']; ?>" target="_blank" class="ui-icon-none" tabindex="1" title="Facebook" ><img src="http://cdn3.iconfinder.com/data/icons/socialmediabookmark/16/twitter.png" style="margin-bottom: -2px"></a></li>
						<?php } ?>
						<?php if ($template['fb']) { ?>
							<li class="jp-new "><a href="<?php echo $template['fb']; ?>" target="_blank" class="" tabindex="1" title="Twitter"><img src="http://cdn3.iconfinder.com/data/icons/socialmediabookmark/16/facebook.png" style="margin-bottom: -2px"></a></a></li>
						<?php } ?>
					</ul>
					</div>
						
					
					
				
				
				
				<div class="jp-clearboth"></div>
				<div class="extra" style="">
					<?php echo html_entity_decode($template['content']); ?>
				</div>
			</div>
			<div class="jp-no-solution">
				<span>Update Required</span>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod quam repudiandae sequi cumque ipsa harum vitae cupiditate fuga culpa. Repellat nesciunt facere voluptatum veniam nobis consectetur mollitia maxime sit asperiores?
				To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
			</div>
		</div>
<br/><br/>
</body>

</html>
