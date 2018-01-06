<?php

	/*
		Plugin Name: WP Like Pop!
		Description: Create Animated Pop-up Social Widgets for Your Wordpress Blog 
		Version: 1.0
	*/

	add_action('template_redirect', 'checkifoptinpopx_pluginx', 5);
	function checkifoptinpopx_pluginx() {
	
		$post_type = get_query_var('post_type');
		if ($post_type == 'optinpopx_pluginx') {  
	
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
				load_template(WP_PLUGIN_DIR . '/optinpopx_pluginx' . '/popup.php');
			exit;
			
		}
	}
function displayoptinpopxfooter_pluginx() { ?>

	<?php if (get_option('optinpopx_show') == 'show' ) {  ?>
</div>
	<?php }
}

	function displayoptinpopx_pluginx() { ?>

	<?php if (get_option('optinpopx_show') == 'show' ) {  ?>

		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script>

$(document).ready(function() {

	var top = '-' + $('#slidedown_content_optinpopx .content_optinpopx').css('height');
	var easing = "<?php echo get_option('optinpopx_effect'); ?>";
	var quickCheck = 1;
	$('html').mouseleave(function() {
		$('#slidedown_content_optinpopx').animate({'top' : 0}, {queue:false, duration:1000, easing: easing});
		$.post( "<?php echo plugin_dir_url( __FILE__ ); ?>view.php" );
	});
	
	$('#slidedown_bottom_optinpopx').mouseover(function() {
		$('#slidedown_content_optinpopx').animate({'top' : top}, {queue:false, duration:500, easing: easing});
	});
	$('#clickNo_optinpopx').click(function() {
		$('#slidedown_content_optinpopx').animate({'top' : top}, {queue:false, duration:500, easing: easing});
	});
	$('#clickYes_optinpopx').click(function() {
		$('#step1box_optinpopx').hide();
		$('#step2box_optinpopx').fadeIn();
	});

	$("form.optinpopx_form").submit(function (e) {
   
   $.post( "<?php echo plugin_dir_url( __FILE__ ); ?>click.php" );
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




});

</script>

<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=<?php echo str_replace(" ","+",get_option("optinpopx_font")); ?>'>
<style>
#slidedown_bottom_optinpopx {
	z-index: 999;

}

#slidedown_content_optinpopx {
position: fixed !important;
width: 100%;
height: 260px;
top: -225px;
z-index: 99999;
text-align:center;
background:url('<?php echo plugin_dir_url( __FILE__ ); ?>images/bg.png') repeat-x 0 bottom;
color: #fff;
} 

#slidedown_content_optinpopx .content_optinpopx {
margin:0 auto !important;
width:830px !important;
height:225px !important;
font-family: <?php echo get_option("optinpopx_font"); ?> !important;
text-shadow: 1px 1px 0 #000 !important;
}
#slidedown_content_optinpopx  * {
	margin: 0 !important;
	padding: 0 !important;
	font-size: 16px !important;
}
#slidedown_content_optinpopx img#box {
	z-index: 999999;
	display: block;
	width: 400px;
}
#slidedown_content_optinpopx .footer_optinpopx {
height:40px !important;
padding-top: 0 !important;
font-family: 'Ruda', sans-serif !important;
color: #333 !important; text-shadow: 1px 1px 0 #ddd !important;
}


#slidedown_content_optinpopx .content_optinpopx h2 {
	font-weight: bold !important;
	color: #fff !important;
	padding: 10px 0 !important;
	padding-top: 30px !important;
	font-size: 34px !important;
	line-height: 25px !important;
	letter-spacing: -1px;
	margin: 0 !important;
}
#slidedown_content_optinpopx .content_optinpopx h4 {
	font-weight: bold !important;
	color: #fff !important;
	opacity: .8 !important;
	padding: 10px 0 !important;
	padding-top: 0 !important;
	font-size: 17px !important;
	line-height: 20px !important;
	letter-spacing: -1px;
	margin: 0 !important;
}
#slidedown_content_optinpopx .content_optinpopx h3 {
	font-weight: bold !important;
	color: #fff !important;
	opacity: 1 !important;
	padding: 10px 30px !important;	font-size: 26px !important;
	letter-spacing: -1px;
	margin: 0 !important;
	line-height: 29px !important;
}
#slidedown_content_optinpopx .content_optinpopx p {
	margin: 0 !important;
	color: #fff !important;
	opacity: 1 !important;
	padding: 10px 0 !important; margin: 0 !important;
	padding-top: 0 !important;
	font-size: 14px !important;
	line-height: 19px !important;
}
#step2box_optinpopx p {
	
	color: #fff !important !important;
	opacity: 1 !important;
	padding: 10px 0 !important;
	font-size: 14px !important;
}
#step2box_optinpopx input {
	width: 315px !important;
	border: 1px solid #000 !important;
	font-size: 16px !important;
	font-weight: bold !important;
	padding: 7px !important;
	margin: 3px auto !important;
	display: block !important;
	border-radius: 4px !important;
	box-shadow: 0 0 5px #ddd inset !important;

}
#step2box_optinpopx input.step2box_optinpopx_user {
	background: url(https://cdn2.iconfinder.com/data/icons/ledicons/user_business.png) no-repeat #fff !important;
	background-position: 96% 7px !important;
}
#step2box_optinpopx input.step2box_optinpopx_email {
	background: url(https://cdn2.iconfinder.com/data/icons/ledicons/email.png) no-repeat #fff !important;
	background-position: 96% 7px !important;
}
.clear_optinpopx {clear:both}
.optinpopx_button,
a.optinpopx_button, input.optinpopx_button {
	border: 1px solid #777;
	border-color: rgba(0,0,0,0.2);
	border-bottom-color: #333;
	border-bottom-color: rgba(0,0,0,0.4);
	color: #fff;
	-moz-box-shadow: inset 0 0.08em 0 rgba(255,255,255,0.4), inset 0 0 0.1em rgba(255,255,255,0.9);
	-webkit-box-shadow: inset 0 0.08em 0 rgba(255,255,255,0.4), inset 0 0 0.1em rgba(255,255,255,0.9);
	box-shadow: inset 0 0.08em 0 rgba(255,255,255,0.4), inset 0 0 0.1em rgba(255,255,255,0.9);
	cursor: pointer;
	display: inline-block;
	font: bold 100%/2.1 "Lucida Grande", Tahoma, sans-serif;
	padding: 0 .95em 0 0;
	text-align: center;
	text-decoration: none;
	text-shadow: 0 1px 0 rgba(0,0,0,0.5);
	white-space: nowrap;
	font-family: <?php echo get_option("optinpopx_font"); ?> !important;
	-moz-user-select: none;
	-webkit-user-select: none;
	user-select: none;
	
	position: relative;
	
	-moz-border-radius: .3em;
	-webkit-border-radius: .3em;
	border-radius: .3em;
	padding: 20px 40px !important;
	font-size: 32px !important;
    text-transform: uppercase !important;
    font-weight: bold !important;
    text-decoration: none !important;
    cursor: pointer !important;

}

.optinpopx_button:active {
	outline: none !important; /* outline is visible on :focus */
}


/* Gradients */

.optinpopx_button {
	background-image: -moz-linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.05) 49%, rgba(0,0,0,.05) 51%, rgba(0,0,0,.1)) !important;
	background-image: -ms-linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.05) 49%, rgba(0,0,0,.05) 51%, rgba(0,0,0,.1)) !important;
	background-image: -o-linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.05) 49%, rgba(0,0,0,.05) 51%, rgba(0,0,0,.1)) !important;
	background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,.1)), color-stop(49%, rgba(255,255,255,.05)), color-stop(51%, rgba(0,0,0,.05)), to(rgba(0,0,0,.1))) !important;
	background-image: -webkit-linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.05) 49%, rgba(0,0,0,.05) 51%, rgba(0,0,0,.1)) !important;
	background-image: linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.05) 49%, rgba(0,0,0,.05) 51%, rgba(0,0,0,.1)) !important;

}

.optinpopx_button:hover, .optinpopx_button:focus {
	background-image: -moz-linear-gradient(rgba(255,255,255,.15) 49%, rgba(0,0,0,.1) 51%, rgba(0,0,0,.15)) !important;
	background-image: -ms-linear-gradient(rgba(255,255,255,.15) 49%, rgba(0,0,0,.1) 51%, rgba(0,0,0,.15)) !important;
	background-image: -o-linear-gradient(rgba(255,255,255,.15) 49%, rgba(0,0,0,.1) 51%, rgba(0,0,0,.15)) !important;
	background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,.15)), color-stop(49%, rgba(255,255,255,.15)), color-stop(51%, rgba(0,0,0,.1)), to(rgba(0,0,0,.15))) !important;
	background-image: -webkit-linear-gradient(rgba(255,255,255,.15) 49%, rgba(0,0,0,.1) 51%, rgba(0,0,0,.15)) !important;
	background-image: linear-gradient(rgba(255,255,255,.15) 49%, rgba(0,0,0,.1) 51%, rgba(0,0,0,.15)) !important;
}

.optinpopx_button:active {
	background-image: -moz-linear-gradient(bottom, rgba(255,255,255,.1), rgba(255,255,255,0) 30%, transparent 50%, rgba(0,0,0,.1)) !important;
	background-image: -ms-linear-gradient(bottom, rgba(255,255,255,.1), rgba(255,255,255,0) 30%, transparent 50%, rgba(0,0,0,.1)) !important;
	background-image: -o-linear-gradient(bottom, rgba(255,255,255,.1), rgba(255,255,255,0) 30%, transparent 50%, rgba(0,0,0,.1)) !important;
	background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,.1)), color-stop(30%, rgba(255,255,255,0)), color-stop(50%, transparent), to(rgba(0,0,0,.1))) !important;
	background-image: -webkit-linear-gradient(bottom, rgba(255,255,255,.1), rgba(255,255,255,0) 30%, transparent 50%, rgba(0,0,0,.1)) !important;
	background-image: linear-gradient(bottom, rgba(255,255,255,.1), rgba(255,255,255,0) 30%, transparent 50%, rgba(0,0,0,.1)) !important;
}

/* Adjustments for light background buttons */

.optinpopx_button.acrobat,
.optinpopx_button.bitcoin,
.optinpopx_button.cloudapp,
.optinpopx_button.dropbox,
.optinpopx_button.email,
.optinpopx_button.eventful,
.optinpopx_button.github,
.optinpopx_button.gmail,
.optinpopx_button.instapaper,
.optinpopx_button.itunes,
.optinpopx_button.ninetyninedesigns,
.optinpopx_button.openid,
.optinpopx_button.plancast,
.optinpopx_button.pocket,
.optinpopx_button.posterous,
.optinpopx_button.reddit,
.optinpopx_button.secondary,
.optinpopx_button.stackoverflow,
.optinpopx_button.viadeo,
.optinpopx_button.weibo,
.optinpopx_button.wikipedia {
	border: 1px solid #aaa !important;
	border-color: rgba(0,0,0,0.3) !important;
	border-bottom-color: #777 !important;
	border-bottom-color: rgba(0,0,0,0.5) !important;
	-moz-box-shadow: inset 0 0.08em 0 rgba(255,255,255,0.7), inset 0 0 0.08em rgba(255,255,255,0.5) !important;
	-webkit-box-shadow: inset 0 0.08em 0 rgba(255,255,255,0.7), inset 0 0 0.08em rgba(255,255,255,0.5) !important;
	box-shadow: inset 0 0.08em 0 rgba(255,255,255,0.7), inset 0 0 0.08em rgba(255,255,255,0.5) !important;
	text-shadow: 0 1px 0 rgba(255,255,255,0.8) !important;

}

/* :hover adjustments for light background buttons */

.optinpopx_button.acrobat:focus,
.optinpopx_button.acrobat:hover,
.optinpopx_button.bitcoin:focus,
.optinpopx_button.bitcoin:hover,
.optinpopx_button.dropbox:focus,
.optinpopx_button.dropbox:hover,
.optinpopx_button.email:focus,
.optinpopx_button.email:hover,
.optinpopx_button.eventful:focus,
.optinpopx_button.eventful:hover,
.optinpopx_button.github:focus,
.optinpopx_button.github:hover,
.optinpopx_button.gmail:focus,
.optinpopx_button.gmail:hover,
.optinpopx_button.instapaper:focus,
.optinpopx_button.instapaper:hover,
.optinpopx_button.itunes:focus,
.optinpopx_button.itunes:hover,
.optinpopx_button.ninetyninedesigns:focus,
.optinpopx_button.ninetyninedesigns:hover,
.optinpopx_button.openid:focus,
.optinpopx_button.openid:hover,
.optinpopx_button.plancast:focus,
.optinpopx_button.plancast:hover,
.optinpopx_button.pocket:focus,
.optinpopx_button.pocket:hover,
.optinpopx_button.posterous:focus,
.optinpopx_button.posterous:hover,
.optinpopx_button.reddit:focus,
.optinpopx_button.reddit:hover,
.optinpopx_button.secondary:focus,
.optinpopx_button.secondary:hover,
.optinpopx_button.stackoverflow:focus,
.optinpopx_button.stackoverflow:hover,
.optinpopx_button.twitter:focus,
.optinpopx_button.viadeo:focus,
.optinpopx_button.viadeo:hover,
.optinpopx_button.weibo:focus,
.optinpopx_button.weibo:hover,
.optinpopx_button.wikipedia:focus,
.optinpopx_button.wikipedia:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,0.5)), color-stop(49%, rgba(255,255,255,0.2)), color-stop(51%, rgba(0,0,0,0.05)), to(rgba(0,0,0,0.15))) !important;
	background-image: -moz-linear-gradient(top, rgba(255,255,255,0.5), rgba(255,255,255,0.2) 49%, rgba(0,0,0,0.05) 51%, rgba(0,0,0,0.15)) !important;
	background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.5), rgba(255,255,255,0.2) 49%, rgba(0,0,0,0.05) 51%, rgba(0,0,0,0.15)) !important;
	background-image: -o-linear-gradient(top, rgba(255,255,255,0.5), rgba(255,255,255,0.2) 49%, rgba(0,0,0,0.05) 51%, rgba(0,0,0,0.15)) !important;
	background-image: -ms-linear-gradient(top, rgba(255,255,255,0.5), rgba(255,255,255,0.2) 49%, rgba(0,0,0,0.05) 51%, rgba(0,0,0,0.15)) !important;
	background-image: linear-gradient(top, rgba(255,255,255,0.5), rgba(255,255,255,0.2) 49%, rgba(0,0,0,0.05) 51%, rgba(0,0,0,0.15)) !important;
}

/* :active adjustments for light background buttons */

.optinpopx_button.acrobat:active,
.optinpopx_button.bitcoin:active,
.optinpopx_button.dropbox:active,
.optinpopx_button.email:active,
.optinpopx_button.eventful:active,
.optinpopx_button.github:active,
.optinpopx_button.gmail:active,
.optinpopx_button.instapaper:active,
.optinpopx_button.itunes:active,
.optinpopx_button.ninetyninedesigns:active,
.optinpopx_button.openid:active,
.optinpopx_button.plancast:active,
.optinpopx_button.pocket:active,
.optinpopx_button.posterous:active,
.optinpopx_button.reddit:active,
.optinpopx_button.secondary:active,
.optinpopx_button.stackoverflow:active,
.optinpopx_button.viadeo:active,
.optinpopx_button.weibo:active,
.optinpopx_button.wikipedia:active {
	background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,0)), color-stop(30%, rgba(255,255,255,0)), color-stop(50%, rgba(0,0,0,0)), to(rgba(0,0,0,0.1))) !important;
	background-image: -moz-linear-gradient(bottom, rgba(255,255,255,0), rgba(255,255,255,0) 30%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.1)) !important;
	background-image: -webkit-linear-gradient(bottom, rgba(255,255,255,0), rgba(255,255,255,0) 30%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.1)) !important;
	background-image: -o-linear-gradient(bottom, rgba(255,255,255,0), rgba(255,255,255,0) 30%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.1)) !important;
	background-image: -ms-linear-gradient(bottom, rgba(255,255,255,0), rgba(255,255,255,0) 30%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.1)) !important;
	background-image: linear-gradient(bottom, rgba(255,255,255,0), rgba(255,255,255,0) 30%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.1)) !important;
}


/* Button background and text color */

.optinpopx_button.acrobat {background-color: #fff !important; color: #000 !important;}
.optinpopx_button.amazon {background-color: #ffad1d !important; color: #030037 !important; text-shadow: 0 1px 0 rgba(255,255,255,0.5) !important;}
.optinpopx_button.android {background-color: #a4c639 !important;}
.optinpopx_button.angellist {background-color: #000 !important;}
.optinpopx_button.aol {background-color: #f00 !important;}
.optinpopx_button.appnet {background-color: #3178bd !important;}
.optinpopx_button.appstore {background-color: #000 !important;}
.optinpopx_button.bitbucket {background-color: #205081 !important;}
.optinpopx_button.bitcoin {background-color: #efefef !important; color: #4d4d4d !important;}
.optinpopx_button.blogger {background-color: #ee5a22 !important;}
.optinpopx_button.buffer {background-color: #232323 !important;}
.optinpopx_button.call {background-color: #008000 !important;}
.optinpopx_button.cal {background-color: #d63538 !important;}
.optinpopx_button.cart {background-color: #333 !important;}
.optinpopx_button.chrome {background-color: #006cd4 !important;}
.optinpopx_button.cloudapp {background-color: #fff !important; color: #312c2a !important;}
.optinpopx_button.creativecommons {background-color: #000 !important;}
.optinpopx_button.delicious {background-color: #3271cb !important;}
.optinpopx_button.digg {background-color: #164673 !important;}
.optinpopx_button.disqus {background-color: #5d8aad !important;}
.optinpopx_button.dribbble {background-color: #ea4c89 !important;}
.optinpopx_button.dropbox {background-color: #fff !important; color: #312c2a !important;}
.optinpopx_button.drupal {background-color: #0077c0 !important; color: #fff !important;}
.optinpopx_button.dwolla {background-color: #e88c02 !important;}
.optinpopx_button.email {background-color: #f0f0eb !important; color: #312c2a !important;}
.optinpopx_button.eventasaurus {background-color: #192931 !important; color: #fff !important;}
.optinpopx_button.eventbrite {background-color: #ff5616 !important;}
.optinpopx_button.eventful {background-color: #fff !important; color: #47ab15 !important;}
.optinpopx_button.evernote {background-color: #6bb130 !important; color: #fff !important;}
.optinpopx_button.facebook {background-color: #4863ae !important;}
.optinpopx_button.fivehundredpx {background-color: #333 !important;}
.optinpopx_button.flattr {background-color: #8aba42 !important;}
.optinpopx_button.flickr {background-color: #ff0084 !important;}
.optinpopx_button.forrst {background-color: #1e360d !important;}
.optinpopx_button.foursquare {background-color: #44a8e0 !important;}
.optinpopx_button.github {background-color: #fbfbfb !important; color: #050505 !important;}
.optinpopx_button.gmail {background-color: #efefef !important; color: #222 !important;}
.optinpopx_button.google {background-color: #4e6cf7 !important;}
.optinpopx_button.googleplay {background-color: #000 !important;}
.optinpopx_button.googleplus {background-color: #dd4b39 !important;}
.optinpopx_button.gowalla {background-color: #ff720a !important;}
.optinpopx_button.grooveshark {background-color: #111 !important; color:#eee !important;}
.optinpopx_button.guest {background-color: #1b4d6d !important;}
.optinpopx_button.html5 {background-color: #ff3617 !important;}
.optinpopx_button.ie {background-color: #00a1d9 !important;}
.optinpopx_button.instapaper {background-color: #eee !important; color: #222 !important;}
.optinpopx_button.instagram {background-color: #3f729b !important;}
.optinpopx_button.intensedebate {background-color: #0099e1 !important;}
.optinpopx_button.klout {background-color: #e34a25 !important;}
.optinpopx_button.itunes {background-color: #efefeb !important; color: #312c2a !important;}
.optinpopx_button.lanyrd {background-color: #2e6ac2 !important;}
.optinpopx_button.lastfm {background-color: #dc1a23 !important;}
.optinpopx_button.lego {background-color: #fb0000 !important;}
.optinpopx_button.linkedin {background-color: #0083a8 !important;}
.optinpopx_button.lkdto {background-color: #7c786f !important;}
.optinpopx_button.logmein {background-color: #000 !important;}
.optinpopx_button.macstore {background-color: #007dcb}
.optinpopx_button.meetup {background-color: #ff0026 !important;}
.optinpopx_button.myspace {background-color: #000 !important;}
.optinpopx_button.ninetyninedesigns {background-color: #fff !important; color: #072243 !important;}
.optinpopx_button.openid {background-color: #f5f5f5 !important; color: #333 !important;}
.optinpopx_button.opentable {background-color: #990000 !important;}
.optinpopx_button.paypal {background-color: #fff !important; color: #32689a !important; text-shadow: 0 1px 0 rgba(255,255,255,0.5) !important;}
.optinpopx_button.pinboard {background-color: blue !important;}
.optinpopx_button.pinterest {background-color: #c91618 !important;}
.optinpopx_button.plancast {background-color: #e7ebed !important; color: #333 !important;}
.optinpopx_button.plurk {background-color: #cf682f !important;}
.optinpopx_button.pocket {background-color: #fff !important; color: #777 !important;}
.optinpopx_button.podcast {background-color: #9365ce !important;}
.optinpopx_button.posterous {background-color: #ffd959 !important; color: #bc7134 !important;}
.optinpopx_button.print {background-color: #f0f0eb !important; color: #222 !important; text-shadow: 0 1px 0 rgba(255,255,255,0.8) !important;}
.optinpopx_button.quora {background-color: #a82400 !important;}
.optinpopx_button.reddit {background-color: #fff !important; color: #222 !important;}
.optinpopx_button.rss {background-color: #ff7f25 !important;}
.optinpopx_button.scribd {background-color: #231c1a !important;}
.optinpopx_button.skype {background-color: #00a2ed !important;}
.optinpopx_button.smashing {background-color: #ff4f27 !important;}
.optinpopx_button.songkick {background-color: #ff0050 !important;}
.optinpopx_button.soundcloud {background-color: #ff4500 !important;}
.optinpopx_button.spotify {background-color: #60af00 !important;}
.optinpopx_button.stackoverflow {background-color: #fff !important; color: #555 !important;}
.optinpopx_button.statusnet {background-color: #829d25 !important;}
.optinpopx_button.steam {background-color: #000 !important;}
.optinpopx_button.stripe {background-color: #2f7ed6 !important;}
.optinpopx_button.stumbleupon {background-color: #eb4924 !important;}
.optinpopx_button.tumblr {background-color: #374a61 !important;}
.optinpopx_button.twitter {background-color: #46c0fb !important;}
.optinpopx_button.viadeo {background-color: #fff !important;  color: #000 !important;}
.optinpopx_button.vimeo {background-color: #00a2cd !important;}
.optinpopx_button.vk {background-color: #45688E !important;}
.optinpopx_button.weibo {background-color: #faf6f1 !important; color: #000 !important;}
.optinpopx_button.wikipedia {background-color: #fff !important; color: #000 !important;}
.optinpopx_button.windows {background-color: #0052a4 !important; color: #fff !important;}
.optinpopx_button.wordpress {background-color: #464646 !important;}
.optinpopx_button.xing {background-color: #0a5d5e !important;}
.optinpopx_button.yahoo {background-color: #a200c2 !important;}
.optinpopx_button.ycombinator {background-color: #ff6600 !important;}
.optinpopx_button.yelp {background-color: #e60010 !important;}
.optinpopx_button.youtube {background-color: #f00 !important;}



/*
The Miscellaneous Buttons
These button have no icons and can be general purpose buttons while ensuring consistent button style
Credit to @guillermovs for suggesting
*/

.optinpopx_button.primary, .optinpopx_button.secondary {margin: 0.1em 0 !important; padding: 0 1em !important;}
.optinpopx_button.primary:before, .optinpopx_button.secondary:before {display: none !important;}
.optinpopx_button.primary {background-color: #333 !important;}
.optinpopx_button.secondary {background-color: #f0f0eb !important; color: #222 !important; text-shadow: 0 1px 0 rgba(255,255,255,0.8) !important;}
</style>


<div id="slidedown_content_optinpopx" class="youtube">

	<div class="content_optinpopx">
		<div id="step1box_optinpopx">
			<div style="width: 400px !important;float: left !important; text-align: left !important;">
				<?php if(get_option('optinpopx_replaceimage') == '') { ?>
					<h2><?php echo get_option('optinpopx_headline'); ?></h2>
					<h4><?php echo get_option('optinpopx_subheadline'); ?></h4>
					<p><?php echo get_option('optinpopx_content'); ?></p>
				<?php } else { ?>
					<img src="<?php echo get_option('optinpopx_replaceimage'); ?>" style="width: 440px !important; z-index: 9999 !important; display: block !important; -moz-bindin: none !important; max-height: 180px !important; margin-top: 10px !important">
				<?php } ?>
			</div>
			<div style="width: 400px !important;float: right !important; text-align: center !important;">
				<br>
				<h3><?php echo get_option('optinpopx_question'); ?></h3>
				<br>
				<span id="clickYes_optinpopx" class=" optinpopx_button <?php echo get_option('optinpopx_yesColor'); ?>" style="margin-right: 20px !important; padding: 0 10px !important; font-size: 32px !important"><?php echo get_option('optinpopx_yes'); ?></span>
				<strong>OR</strong>
				<span id="clickNo_optinpopx" class=" optinpopx_button <?php echo get_option('optinpopx_noColor'); ?>" style="margin-left: 20px !important; padding: 0 10px !important; font-size: 32px !important"><?php echo get_option('optinpopx_no'); ?></span>
			</div>
			<div class="clear_optinpopx"></div>
		</div>
		<div id="step2box_optinpopx" style="display: none">
			<div style="width: 400px !important;float: left !important; text-align: left !important;">
				<?php if(get_option('optinpopx_replaceimage2') == '') { ?>
					<h2><?php echo get_option('optinpopx_headline2'); ?></h2>
					<h4><?php echo get_option('optinpopx_subheadline2'); ?></h4>
					<p><?php echo get_option('optinpopx_content2'); ?></p>
				<?php } else { ?>
					<img src="<?php echo get_option('optinpopx_replaceimage2'); ?>" style="width: 440px !important; z-index: 9999 !important; display: block !important; -moz-bindin: none !important; max-height: 180px !important; margin-top: 10px !important">
				<?php } ?>
			</div>
			<div style="width: 400px !important;float: right !important; text-align: center !important;padding-top:20px !important">
				<h4><?php echo get_option('optinpopx_optinheadline'); ?></h4>
				

				<form action=""  class='ARform optinpopx_form ' id="arForm">
		     		<div class='ARhidden'></div>
		     	
	
	<input required type="text" id="optinName" placeholder="<?php echo get_option('optinpopx_name'); ?>" class="step2box_optinpopx_user" />
				<input required type="email" id="optinEmail" placeholder="<?php echo get_option('optinpopx_email'); ?>" class="step2box_optinpopx_email" />
				<input type="submit" class=" optinpopx_button  <?php echo get_option('optinpopx_buttonColor'); ?>" style="font-size: 17px !important; margin-top: 5px !important !important;display: block !important; width: 330px !important; margin: 0 auto !important" value="<?php echo get_option('optinpopx_buttontext'); ?>">
</form>
				

				<div id="autoresponder" style="display: none">
					<textarea id="autoresponderCode" name="autoresponderCode"><?php echo stripcslashes(get_option('optinpopx_autoresponder')); ?></textarea>
					<input type="text"  name="arname" id="arname" value="" />
					<input type="text"   name="aremail" id="aremail" value="" />
					<input type="text"   name="arform" id="arform" value="" />
					<textarea id="arhidden"   name="arhidden"></textarea>
					<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
				</div>



				
			</div>
			<div class="clear_optinpopx"></div>
		</div>
	</div> <!-- content -->
	
	
</div> <!-- slidedown_content -->

<div id="slidedown_bottom_optinpopx">
	<!--  -->
	<?php }
}
	
	add_action('wp_head', 'displayoptinpopx_pluginx');
	add_action('wp_footer', 'displayoptinpopxfooter_pluginx');

	add_action('admin_menu', 'optinpopx_pluginxadminsettings');

	function checkoptinpopx_pluginxadmin() {
			include('adminsettings.php');
	}

	function optinpopx_pluginxadminsettings() {
	   add_menu_page('Optin Pop!', 'Optin Pop!', 'manage_options', 'optinpopx_pluginxsettings', 'checkoptinpopx_pluginxadmin', 'https://cdn2.iconfinder.com/data/icons/splashyIcons/shield_star.png');
	}

	
?>