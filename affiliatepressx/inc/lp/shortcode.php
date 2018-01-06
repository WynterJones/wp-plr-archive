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

	$assets = $full_path . "/wp-content/plugins/affiliatepressx/inc/lp/assets";

	$assets2 = $full_path . "/wp-content/plugins/affiliatepressx/inc/js";

	
?>

<!-- 

	// HTML Header (Headline + Logo)
	// filename: header.php

	// Copyright (c) 2013 - Gue.rrilla Marketing

 -->
<!-- 

	// HTML Header (Headline + Logo)
	// filename: header.php

	// Copyright (c) 2013 - Gue.rrilla Marketing

 -->

<!DOCTYPE html>
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta http-equiv="X-UA-Compatible" content="IE=8"> 
<html>
<head>
	<title><?php echo stripcslashes($results->title); ?></title>
	<meta name="description" content="<?php echo stripcslashes($results->description); ?>">
	<meta name="keywords" content="<?php echo stripcslashes($results->keywords); ?>">
	<meta name="author" content="<?php echo stripcslashes($results->title); ?> : Powered by AffiliatePress">
	<link rel="shortcut icon" type="image/x-icon" href="http://www.wpaffiliatepress.com/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Droid+Sans:400,700|Lato:400,700,900,400italic|Lora:400,700,400italic,700italic|Pompiere|Maiden+Orange|PT+Sans+Narrow|Rokkitt:400,700|Gloria+Hallelujah|Droid+Serif:400,700,400italic,700italic|Open+Sans+Condensed:300,700|Bree+Serif|Special+Elite|Lobster+Two:400,400italic,700,700italic|Indie+Flower|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/css/toast.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/progressbar/style.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/jquery/jquery.countdown.css">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/css/mobile.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/jquery/jquery.share.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo $assets; ?>/css/bonuspopup.css"> 
  <link rel="stylesheet" href="<?php echo $assets; ?>/jquery/animate.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>/jquery/bp-content-slider.css">
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/jquery.share.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/jquery.textfill.min.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/bonuspopup.js"></script>
	<script src="<?php echo $assets; ?>/jquery/jquery.fitTextToHeight.js"></script>
	<script src="<?php echo $assets; ?>/jquery/jsocial.js"></script>
	
  <?php if($results->autoPlay == '2') { ?>
    <script src="<?php echo $assets; ?>/jquery/jquery.embedvideo2.js"></script>
<?php } else { ?>
<script src="<?php echo $assets; ?>/jquery/jquery.embedvideo.js"></script>
<?php } ?>
	<script src="<?php echo $assets; ?>/jquery/cookie.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/date.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/progress.js"></script>
  <script type="text/javascript" src="<?php echo $assets2; ?>/jquery.fontselect.js"></script>

 <script src="<?php echo $assets; ?>/jquery/bp-content-slider.js"></script>
<?php if($results->chooseDate == '1') { ?>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/jquery.flip.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/countdown.js"></script>

<?php } ?>


<?php if($results->chooseDate == '2') { ?>
<script type="text/javascript" src="<?php echo $assets; ?>/jquery/dycountdown.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/jquery.flip.js"></script>
	
	

<?php } ?>

<?php if($results->chooseDate == '3') { ?>

	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/jquery.flip.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/date.js"></script>
	<script type="text/javascript" src="<?php echo $assets; ?>/jquery/wkcountdown.js"></script>

<?php } ?>
	

<?php 

$fullPluginPath = get_site_url() . "/wp-content/plugins/affiliatepressx/inc/lp/";



 ?>







        <script type="text/javascript" >
        $(document).ready(function() {






jQuery.fn.anim_progressbar = function (aOptions) {
        // def values
        var iCms = 1000;
        var iMms = 60 * iCms;
        var iHms = 3600 * iCms;
        var iDms = 24 * 3600 * iCms;
        var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
today = mm+'/'+dd+'/'+yyyy;


var mydate = new Date('<?php echo stripcslashes($results->countdown); ?>');
   var finalDate =  moment(mydate).format("MMMM DD, YYYY HH:MM:SS");

        // def options
        var aDefOpts = {
            start: new Date(today), // now
            finish: new Date(finalDate), // now + 60 sec
            interval: 100
        }
        var aOpts = jQuery.extend(aDefOpts, aOptions);
        var vPb = this;

        // each progress bar
        return this.each(
            function() {
                var iDuration = aOpts.finish - aOpts.start;

                // calling original progressbar
                $(vPb).children('.pbar').progressbar();

                // looping process
                var vInterval = setInterval(
                    function(){
                        var iLeftMs = aOpts.finish - new Date(); // left time in MS
                        var iElapsedMs = new Date() - aOpts.start, // elapsed time in MS
                            iDays = parseInt(iLeftMs / iDms), // elapsed days
                            iHours = parseInt((iLeftMs - (iDays * iDms)) / iHms), // elapsed hours
                            iMin = parseInt((iLeftMs - (iDays * iDms) - (iHours * iHms)) / iMms), // elapsed minutes
                            iSec = parseInt((iLeftMs - (iDays * iDms) - (iMin * iMms) - (iHours * iHms)) / iCms), // elapsed seconds
                            iPerc = (iElapsedMs > 0) ? iElapsedMs / iDuration * 100 : 0; // percentages

                        // display current positions and progress
                        $(vPb).children('.percent').html('<b>'+iPerc.toFixed(1)+'%</b>');
                        $('.progressbar').attr('style', 'width: '+iPerc.toFixed(1)+'%');
                        // $(vPb).children('.elapsed').html(iDays+' days '+iHours+'h:'+iMin+'m:'+iSec+'s</b>');
                        $(vPb).children('.pbar').children('.ui-progressbar-value').css('width', iPerc+'%');

                        // in case of Finish
                        if (iPerc >= 97) {
                            clearInterval(vInterval);
                            $(vPb).children('.percent').html('<b>This Deal is Ending Today!</b>');
                            // $(vPb).children('.elapsed').html('Finished');
                            // the code here will run when the countdown ends
				// window.location.href = "<?php echo stripcslashes($results->redirect); ?>"

                        }
                    } ,aOpts.interval
                );
            }
        );
    }
$('#progress').anim_progressbar();


 // $('.dealprogress').animate({width: '100%'}, 1000000, 'linear', function() {
 //        // the code here will run when the countdown ends
	// 			window.location.href = "<?php echo stripcslashes($results->redirect); ?>"
 // });

        	if($.cookie('affiliatepressx_visitor') != 'trues') {
        		$.ajax({
    type: 'POST',
    url: '<?php echo $fullPluginPath; ?>trackView.php?id=<?php echo $results->id ?>'
});
        	} else {
        		$.cookie('affiliatepressx_visitor', 'trues');
        	}

<?php if($results->progressType == 'hide' || $results->progressType  == '') { ?>
	$('#progressBar').hide();
<?php } ?>

<?php $ampm = array("am", "pm"); ?>
<?php if($results->chooseDate == '1') { ?>

        	// Date Countdown

        	$("#countdown").countdown({

        		
				date: "<?php echo stripcslashes($results->countdown); ?> <?php echo str_replace($ampm, '', stripcslashes($results->time)); ?>:00", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
			     zone:"<?php echo stripcslashes($results->timezone); ?>"
			},
			
			function() { 
				
				// the code here will run when the countdown ends
				window.location.href = "<?php echo stripcslashes($results->redirect); ?>"

			});

			$("#countdown2").countdown({

        		
				date: "<?php echo stripcslashes($results->countdown); ?> <?php echo str_replace($ampm, '', stripcslashes($results->time)); ?>:00", // add the countdown's end date (i.e. 3 november 2012 12:00:00)
			     zone:"<?php echo stripcslashes($results->timezone); ?>"
			},
			
			function() { 
				
				// the code here will run when the countdown ends
				window.location.href = "<?php echo stripcslashes($results->redirect); ?>"

			});

<?php } ?>
<?php if($results->chooseDate == '2') { ?>
// EverGreen Daily
			$("#dycountdown").countdown({
			
			     time:"<?php echo str_replace(':', '.', str_replace($ampm, '', stripcslashes($results->time))); ?>.00", // add time in hh:mm:ss format
				 zone:"<?php echo stripcslashes($results->timezone); ?>"
			});

			$("#dycountdown2").countdown({
			
			     time:"<?php echo str_replace(':', '.', str_replace($ampm, '', stripcslashes($results->time))); ?>.00", // add time in hh:mm:ss format
				 zone:"<?php echo stripcslashes($results->timezone); ?>"
			});

			$('#progressBar').hide();
	<?php } ?>
<?php if($results->chooseDate == '3') { ?>
// EverGreen Weekly

$("#wkcountdown").wkcountdown({
				day:"Monday", // add the weekday for timer
			      time:"<?php echo str_replace(':', '.', str_replace($ampm, '', stripcslashes($results->time))); ?>.00", // add the time in format hh:mm:ss
				 zone:"<?php echo stripcslashes($results->timezone); ?>"
		});

$("#wkcountdown2").wkcountdown({
				day:"Monday", // add the weekday for timer
			      time:"<?php echo str_replace(':', '.', str_replace($ampm, '', stripcslashes($results->time))); ?>.00", // add the time in format hh:mm:ss
				 zone:"<?php echo stripcslashes($results->timezone); ?>"
		});
$('#progressBar').hide();
	<?php } ?>
			





<?php if($results->customEmbed != '' && $results->videoText == '') { ?>
	   $("div#customEmbed").embedVideo(
        '<?php echo stripcslashes($results->customEmbed); ?>', {
            preview: false
        });
	   
<?php } ?>

<?php if($results->customEmbed != '' && $results->videoText != '') { ?>
	   $("div#customEmbed").embedVideo(
        '<?php echo stripcslashes($results->customEmbed); ?>', {
            preview: true
        });
	   
<?php } ?>
	$("#social1").jsocial({
		highlight: true,
		buttons: "nujij,linkedin,ekudos,digg,sphere,technorati,delicious,furl,netscape,yahoo,google,newsvine,reddit,blogmarks,magnolia,live,facebook,twitter,stumbleupon,bligg,symbaloo,misterwong,mail", 
		icon_format: '<?php echo $assets; ?>/images/small/%s.gif',
		blanktarget: false
	});
							
	$("#social2").jsocial({
		highlight: true,
		buttons: "technorati,delicious,reddit,facebook,digg,furl,yahoo,twitter,stumbleupon", 
		icon_format: '<?php echo $assets; ?>/images/big/%s.png',
		blanktarget: true
	});
							
							
	$("#social3").jsocial({
		highlight: true,
		buttons: "technorati,delicious,reddit,facebook,twitter,linkedin,stumbleupon,digg", 
		icon_format: '<?php echo $assets; ?>/images/pop/%s_down.png',
		icon_hover_format: '<?php echo $assets; ?>/images/pop/%s.png',
		blanktarget: true
	});
													
	$("#social4").jsocial({
		highlight: true,
		buttons: "facebook_horizontal,twitter_horizontal,googleplus_horizontalmedium,linkedin_horizontal"
	});

	 $("#social5").jsocial({  
        highlight: false,  
        buttons: "twitter_vertical,facebook_vertical,googleplus_vertical,linkedin_vertical"  
    });  

<?php if ($results->customButton != "") { ?>
$('.myButton').addClass('customButton');
$('.myButton').removeClass('myButton');
<?php } ?>


$(".myButton").click(function() {

$.ajax({
    type: 'POST',
    url: '<?php echo $fullPluginPath; ?>ctaUpdate.php?id=<?php echo $results->id ?>'
});
});
$('.couponButton').textfill();

$('.resizer').textfill();

$('.dealHeadline').textfill();

<?php if ($results->couponShow == "2") {  ?>
$(".couponButton").click(function() {
	 event.preventDefault();
 $('#couponPopup').bPopup();


        
    

});
<?php } ?>






$('#mydiv').share({
        networks: ['facebook','pinterest','googleplus','twitter','linkedin','tumblr','email','stumbleupon']
    });
	$(".video iframe").attr('style', 'width: 470px; height: 258.75px');
	$(".video embed").attr('style', 'width: 460px; height: 258.75px');
	$(".video object").attr('style', 'width: 460px; height: 258.75px');


	var currentDate = new Date(),
          finished = false,
          availiableExamples = {
            set10daysFromNow: 10 * 24 * 60 * 60 * 1000,
            set5daysFromNow: 5 * 24 * 60 * 60 * 1000,
            set1dayFromNow: 1 * 24 * 60 * 60 * 1000,
            set5hoursFromNow  : 300 * 60 * 1000,
            set1hourFromNow  : 60 * 60 * 1000,
            set30minFromNow  : 30 * 60 * 1000,
            set5minFromNow  : 5 * 60 * 1000,
            set1minFromNow  : 1 * 60 * 1000
          };
      
      function callback(event) {
  		  $this = $(this);
  			switch(event.type) {
  				case "seconds":
  				case "minutes":
  				case "hours":
  				case "days":
  				case "weeks":
  				case "daysLeft":
  				  $this.find('span#'+event.type).html(event.value);
  				  if(finished) {
  				    $this.fadeTo(0, 1);
  				    finished = false;
  				  }
  					break;
  				case "finished":
            $this.fadeTo('slow', .5);
            finished = true;
  					break;
  			}
      }

   //    var checkTimer = $('#countdownTimer').val();
   //    if (checkTimer == 'set10daysFromNow') {
   //    	$('div#bigCountdown').countdown(availiableExamples.set10daysFromNow + currentDate.valueOf(), callback);
   //    }
   //    if (checkTimer == 'set5daysFromNow') {
   //    	$('div#bigCountdown').countdown(availiableExamples.set5daysFromNow + currentDate.valueOf(), callback);
   //    }
   //    if (checkTimer == 'set1dayFromNow') {
   //    	$('div#bigCountdown').countdown(availiableExamples.set1dayFromNow + currentDate.valueOf(), callback);
   //    }
   //    if (checkTimer == 'set5hoursFromNow') {
   //    	$('div#bigCountdown').countdown(availiableExamples.set5hoursFromNow + currentDate.valueOf(), callback);
   //    }
   //    if (checkTimer == 'set1hourFromNow') {
   //    	$('div#bigCountdown').countdown(availiableExamples.set1hourFromNow + currentDate.valueOf(), callback);
   //    }
   //    if (checkTimer == 'set30minFromNow') {
   //    	$('div#bigCountdown').countdown(availiableExamples.set30minFromNow + currentDate.valueOf(), callback);
   //    }
   //    if (checkTimer == 'set5minFromNow') {
   //    	$('div#bigCountdown').countdown(availiableExamples.set5minFromNow + currentDate.valueOf(), callback);
   //    }
   //    if (checkTimer == 'set1minFromNow') {
   //    	$('div#bigCountdown').countdown(availiableExamples.set1minFromNow + currentDate.valueOf(), callback);
   //    }
   //    if (checkTimer == '0') {

   //    	$('div#bigCountdown').countdown("<?php echo str_replace('-', '/', stripcslashes($results->countdown)); ?>", function(event) {
	  //   var $this = $(this);
	  //   switch(event.type) {
	  //     case "seconds":
	  //     case "minutes":
	  //     case "hours":
	  //     case "days":
	  //     case "weeks":
	  //     case "daysLeft":
	  //       $this.find('span#'+event.type).html(event.value);
	  //       break;
	  //     case "finished":
	  //       $this.hide();
	  //       $('#closed').show();
	  //       $('.smallDetail').attr('style','opacity: .4');
	  //       $('.myButton').attr('href', '<?php echo stripcslashes($results->closedLink); ?>');
	  //       $('.myButton').text('<?php echo stripcslashes($results->closedButton); ?>');
	  //       break;
	  //   }
	  // });

   //    }
      
  		

	




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



$('#headlineFont').fontselect(); 
          // var headlineFont = $('#headlineFont').val().replace(/\+/g, ' ');
          // headlineFont = headlineFont.split(':');
          $('h1, h2, h3, h4, h5, h6').attr('style','font-family: <?php echo str_replace("+", " ", $results->headlineFont); ?> !important;');

          $('#paragraphFont').fontselect();
          


});
        </script>
	<style>

  body {
    font-family: Open Sans Condensed !important;
  }

	.font-select {
    display: none;
}

.share-affix {
    position: fixed;
    top:50px;
    left:0px;
}
#mydiv {
	float: left;
	width: 500px;
	padding-top: 15px;
	padding-left: 0;
	margin-bottom: 10px;
	z-index: 9999;
	position: relative;
}
.share-icon {
    background-repeat: no-repeat;
    background:url(<?php echo $assets; ?>/images/social-icons.png) no-repeat ;
    height:40px;
    width:40px;
    display: block;    text-indent: -99999px;
    margin:2px;
    opacity: .9;
    filter:Alpha(Opacity=90);
}

.share-icon:hover {
    opacity: 1;
    filter:Alpha(Opacity=100);
}

.share-icon-digg {
    background-position: -526px 0;
    
}
.share-icon-email {
    background-position: -614px 0;
}
.share-icon-flickr {
    background-position: -261px 0;
}
.share-icon-foursquare {
    background-position: 0 0;
}
.share-icon-rss {
    background-position: -305px 0;
}
.share-icon-facebook {
    background-position: -131px 0;
    
}
.share-icon-twitter {
    background-position: -174px 0;
}
.share-icon-tumblr {
    background-position: -87px 0;
}
.share-icon-linkedin {
    background-position: -438px 0;
}
.share-icon-vimeo {
    background-position: -393px 0;
}
.share-icon-instagram {
    background-position: -44px 0;
}
.share-icon-pinterest {
    background-position: -349px 0;
}
.share-icon-googleplus {
    background-position: -218px 0;
}
.share-icon-in1 {
    background-position: -482px 0;
}
.share-icon-stumbleupon {
    background-position: -570px 0;
}

/**a.behance, a.delicious, a.deviantart, a.digg, a.dribbble, a.facebook, a.flickr, a.forrst, a.foursquare, a.googleplus, a.in1, a.instagram, a.lastfm, a.linkedin, a.pinterest, a.rss, a.skype, a.tumblr, a.twitter, a.vimeo, a.youtube {*/
.share-square {
    -moz-transition: all 0.2s linear 0s;
    background: url("<?php echo $assets; ?>/images/social-icons.png") no-repeat scroll left top transparent;
    display: inline-block;
    height: 32px;
    line-height: 0;
    margin: 2px;
    width: 32px;
}
.share-square-behance {
    background-position: -544px -44px;
}
.share-square-behance:hover {
    background-position: -544px -77px;
}
.share-square-delicious {
    background-position: -512px -44px;
}
.share-square-delicious:hover {
    background-position: -512px -77px;
}
.share-square-deviantart {
    background-position: -480px -44px;
}
.share-square-deviantart:hover {
    background-position: -480px -77px;
}
.share-square-digg {
    background-position: -448px -44px;
}
.share-square-digg:hover {
    background-position: -448px -77px;
}
.share-square-dribbble {
    background-position: -416px -44px;
}
.share-square-dribbble:hover {
    background-position: -416px -77px;
}
.share-square-email {
    background-position: -674px -44px;
}
.share-square-email:hover {
    background-position: -674px -77px;
}
.share-square-facebook {
    background-position: -384px -44px;
}
.share-square-facebook:hover {
    background-position: -384px -77px;
}
.share-square-flickr {
    background-position: -352px -44px;
}
.share-square-flickr:hover {
    background-position: -352px -77px;
}
.share-square-forrst {
    background-position: -320px -44px;
}
.share-square-forrst:hover {
    background-position: -320px -77px;
}
.share-square-googleplus {
    background-position: -288px -44px;
}
.share-square-googleplus:hover {
    background-position: -288px -77px;
}
.share-square-in1 {
    background-position: -576px -44px;
}
.share-square-in1:hover {
    background-position: -576px -77px;
}
.share-square-instagram {
    background-position: -608px -44px;
}
.share-square-instagram:hover {
    background-position: -608px -77px;
}
.share-square-lastfm {
    background-position: -256px -44px;
}
.share-square-lastfm:hover {
    background-position: -256px -77px;
}
.share-square-linkedin {
    background-position: -224px -44px;
}
.share-square-linkedin:hover {
    background-position: -224px -77px;
}
.share-square-pinterest {
    background-position: -192px -44px;
}
.share-square-pinterest:hover {
    background-position: -192px -77px;
}
.share-square-rss {
    background-position: -160px -44px;
}
.share-square-rss:hover {
    background-position: -160px -77px;
}
.share-square-skype {
    background-position: -128px -44px;
}
.share-square-skype:hover {
    background-position: -128px -77px;
}
.share-square-stumbleupon {
    background-position: -640px -44px;
}
.share-square-stumbleupon:hover {
    background-position: -640px -77px;
}
.share-square-tumblr {
    background-position: -96px -44px;
}
.share-square-tumblr:hover {
    background-position: -96px -77px;
}
.share-square-twitter {
    background-position: -64px -44px;
}
.share-square-twitter:hover {
    background-position: -64px -77px;
}
.share-square-vimeo {
    background-position: -32px -44px;
}
.share-square-vimeo:hover {
    background-position: -32px -77px;
}
.share-square-youtube {
    background-position: 0 -44px;
}
.share-square-youtube:hover {
    background-position: 0 -77px;
}



		#header {
			background: none !important;
		}
		body {
			background: url(<?php echo $assets; ?>/images/bg<?php echo stripcslashes($results->bannerBG); ?>.png) repeat-x top <?php echo stripcslashes($results->customBanner_color); ?> !important;
		}
		#deal {
      background: #ccc url(<?php echo $assets; ?>/images/<?php echo stripcslashes($results->dealBG); ?>.png) repeat;
    }
    #contentSlider {
      background: #ccc url(<?php echo $assets; ?>/images/<?php echo stripcslashes($results->dealBG); ?>.png) repeat;
    }
		#border {
			background: #fff url(<?php echo $assets; ?>/images/<?php echo stripcslashes($results->borderStyle); ?>.png) repeat;
		}


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



		.content.paragraph1  {
			font-family: 'Oswald', sans-serif !important;
		}
		.content.paragraph2  {
			font-family: 'Droid Sans', sans-serif !important;
		}
		.content.paragraph3  {
			font-family: 'Lato', sans-serif !important;
		}
		.content.paragraph4  {
			font-family: 'Lora', serif  !important;
		}
		.content.paragraph5  {
			font-family: 'Pompiere', cursive !important;
		}
		.content.paragraph6  {
			font-family: 'Patrick Hand', cursive !important;
		}
		.content.paragraph7  {
			font-family: 'Maiden Orange', cursive !important;
		}
		.content.paragraph8  {
			font-family: 'PT Sans Narrow', sans-serif !important;
		}
		.content.paragraph9  {
			font-family: 'Rokkitt', serif !important;
		}
		.content.paragraph11  {
			font-family: 'Droid Serif', serif !important;
		}
		.content.paragraph12  {
			font-family: 'Open Sans Condensed', sans-serif !important;
		}
		.content.paragraph13  {
			font-family: 'Bree Serif', serif !important;
		}
		.content.paragraph14  {
			font-family: 'Special Elite', cursive !important;
		}
		.content.paragraph15  {
			font-family: 'Lobster Two', cursive !important;
		}

		

		<?php 

		if ($results->highlight == "2") { ?>
			
			#headerContent h1, #headerContent h3, #headerContent h4, #headerContent h5, #headerContent h6, #headerContent p, #headerContent li, #headerContent {
				background: none  !important;
				color: #fff  !important;
				text-shadow: 1px 1px 0 #333  !important;
			}

		<?php 

		}
		?>

		<?php 

		if ($results->darkLight == "2") { ?>
			
			#headerContent h1, #headerContent h3, #headerContent h4, #headerContent h5, #headerContent h6, #headerContent p, #headerContent li, #headerContent {
				color: #222 !important;
				text-shadow: 1px 1px 0 #ddd !important; 
			}

		<?php 

		}
		?>

    <?php 

    if ($results->darkLight == "1") { ?>
      
      #headerContent h1, #headerContent h3, #headerContent h4, #headerContent h5, #headerContent h6, #headerContent p, #headerContent li, #headerContent {
        color: #fff !important;
        text-shadow: 1px 1px 0 #333 !important; 
      }

    <?php 

    }
    ?>

		<?php 

		if ($results->darkLight2 == "2") { ?>
			
			#deal h2, .cta .alertHeadline {
				color: #222;
				text-shadow: 1px 1px 0 #fff;
			}

		<?php 

		}
		?>



<?php 

		if ($results->bannerOption == "1") { ?>
			
			body {
				background: url(<?php echo stripcslashes($results->customBanner); ?>)  !important;
				box-shadow: none;
			}

		<?php 

		}
		
		?>
		

		<?php 

		if ($results->bannerOption == "2") { ?>
			
			body {
				background: <?php echo stripcslashes($results->customBanner_color); ?>  !important;
				box-shadow: none;
			}

		<?php 

		}
		
		?>

		<?php 

		if ($results->bannerOption == "3") { ?>
			
			body {
				background: <php echo stripcslashes($results->customBanner_color); ?> url(<?php echo stripcslashes($results->customBanner); ?>)  !important;
				box-shadow: none;
			}

		<?php 

		}
		
		?>




		<?php 

		if ($results->dealOption == "1") { ?>
			
			#deal {
				background: url(<?php echo stripcslashes($results->customDeal); ?>) repeat  !important;
			}

		<?php 

		}
		
		?>

		<?php 

		if ($results->dealOption == "2") { ?>
			
			#deal {
				background: <?php echo stripcslashes($results->customDeal_color); ?>  !important;
				box-shadow: none;
			}

		<?php 

		}
		
		?>

		<?php 

		if ($results->dealOption == "3") { ?>
			
			#deal {
				background: <php echo stripcslashes($results->customDeal_color); ?> url(<?php echo stripcslashes($results->customDeal); ?>)  !important;
				box-shadow: none;
			}

		<?php 

		}
		
		?>

		<?php 

		if ($results->bann == "3") { ?>
			
			#deal {
				background: <php echo stripcslashes($results->customDeal_color); ?> url(<?php echo stripcslashes($results->customDeal); ?>)  !important;
				box-shadow: none;
			}

		<?php 

		}
		
		?>

		<?php echo stripcslashes($results->css); ?>

		<?php echo stripcslashes($results->customButton); ?>

		<?php if($results->customButton != "") { ?>
		
		#miniDeal .customButton {
			width: 250px;
			font-size: 16px;
			margin-left: -7px;
		}
		<?php } ?>

	</style>
</head>
<body class="typography<?php echo stripcslashes($results->typography); ?> bannerImage<?php echo stripcslashes($results->bannerDisplay); ?>">
<input type="hidden" value="<?php echo $results->headlineFont; ?>" id="headlineFont">
  <input type="hidden" value="<?php echo $results->paragraphFont; ?>" id="paragraphFont">
<div style="width: 100%;  padding: 0; background: none !important; " id="border" class="container show<?php echo stripcslashes($results->borderHide); ?> dropshadow<?php echo stripcslashes($results->dropShadow); ?>">
	<div class="container mainBox" style="width: 100%; padding: 0; background: none !important; height: auto">
		<div class="grid">
			<?php 

		if ($results->logoImage == "") { ?>
			<?php 
		}
		else {
			?>
			<img src="<?php echo stripcslashes($results->logoImage); ?>" style="width: 100%; margin-bottom: -6px;">
			<?php } ?>

			<div class="one-of-two unit video" style="height: 258px; width: 510px;">	

<?php if($results->video != '' && $results->customEmbed == '') { ?>
					<?php echo stripcslashes($results->video); ?>
				<?php } else { ?>
				<style>
					#customEmbed {
					}
		            #customEmbed p {
		                color: #fff;
		                font-size: 26px;
		                text-align: center;
		                
		                font-weight: bold;
		                background: url(http://www.huskermax.com/js/lightbox/overlay.png) repeat;
		                border: 1px solid #222;
		                box-shadow: 0 0 5px #000 inset;
		                padding: 20px;
		                width: 300px;
		                border-radius: 8px;
		                margin: 0 auto;
		                display: block;
		                letter-spacing: -1px;
		                text-shadow: 0 1px 0 #333;
		                cursor: pointer;
		            }
		            #bigCountdown {
		            	margin-top: 12px;
		            }
		        </style>
						<div id="customEmbed" style="width: 485px; height: 258.75px;">

<?php if($results->videoText != '') { ?>
				<div style="width: 100%; height: 23%"></div>
							<p class="textfill"><?php echo stripcslashes($results->videoText); ?>
							<img src="<?php echo stripcslashes($results->videoIcon); ?>" style="margin: 0 auto; display: block"></p>


				<?php }  ?>
				</div>
					<?php }  ?> 

				</div>
<div class="one-of-two unit" >	
				<div id="deal">
					<h2 class="dealHeadline"><span><?php echo stripcslashes($results->countdownHeadline); ?></span></h2>
					<div class="one-of-three unit smallDetail firstDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/ledicons/money.png"><span class=""><?php echo stripcslashes($results->priceSmall); ?></span></strong>
						<h4 class="resizer"><span><?php echo stripcslashes($results->priceHeadline); ?></span></h4>
					</div>
					<div class="one-of-three unit smallDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/actions/gtk-stop.png"><span  class=""><?php echo stripcslashes($results->regSmall); ?></span></strong>
						<h4  class="resizer" style="text-decoration: line-through; color: #777"><span><?php echo stripcslashes($results->regHeadline); ?></span></h4>
					</div>
					<div class="one-of-three unit smallDetail lastDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/lin/16/13.png"><span ><?php echo stripcslashes($results->discountSmall); ?></span></strong>
						<h4  class="resizer special_deal"><span><?php echo stripcslashes($results->discountHeadline); ?></span></h4>
					</div>
					

					<?php if ($results->couponCheck == "2") { ?>
							<div class="span-grid unit">
								<strong class="myButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>">
									<input type="text" value="<?php echo stripcslashes($results->couponCode); ?>" class="couponCode" style="width: 160px; font-size: 17px;margin-left: 10px; margin-top: 5px; float: left" />
									<a href="<?php echo stripcslashes($results->couponLink); ?>" class="couponButton" style="float: left; width: 250px;  height: 40px;font-size: 21px; color: #fff; <?php if($results->buttonBG == '5') { ?> color: #333; <?php } ?> padding-top: 16px; margin-left: 13px; padding-left: 30px; margin-right: -30px; background: url(https://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/48x48/emblems/emblem-symbolic-link.png)  no-repeat left; background-position: 0 20px; text-align: left; "><span><?php echo stripcslashes($results->couponLinkText); ?></span></a>
								</strong>
							</div>
					<?php } else { ?>
							<div class="span-grid unit">
								<a href="<?php echo stripcslashes($results->buyNowURL); ?>" target="_blank" class="myButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>"><?php echo stripcslashes($results->buyNow); ?></a>


							</div>
					<?php } ?>

					<div class="span-grid unit cta">
						<h4 class="resizer" style="height: 20px;"><img src="https://cdn4.iconfinder.com/data/icons/sketchdock-ecommerce-icons/alert-square-red.png" class="alertImage" ><span class="alertHeadline"><?php echo stripcslashes($results->alertText); ?></span></h4>
					</div>
				






</div>
					
				
			</div>	</div>

				<div id="bigCountdown" style="margin-top: 10px; background: none; height: 100px;">

					<?php if($results->chooseDate == '1') { ?>
<div id="downtimer">
<div id="countdown" style="padding-left: 10px">
 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tenday">0</span>
			<span class="oneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="tenhour">0</span>
				<span class="onehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tenmin">0</span>
			<span class="onemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tensec">0</span>
			<span class="onesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>
					<?php } ?>

					<?php if($results->chooseDate == '2') { ?>


					<div id="dydowntimer">
<div id="dycountdown" style="padding-left: 10px">

	 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytenday">0</span>
			<span class="dyoneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="dytenhour">0</span>
				<span class="dyonehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytenmin">0</span>
			<span class="dyonemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytensec">0</span>
			<span class="dyonesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>

</div>
				

					<?php } ?>


					<?php if($results->chooseDate == '3') { ?>


					<div id="wkdowntimer">
<div id="wkcountdown" style="padding-left: 10px">

	 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktenday">0</span>
			<span class="wkoneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="wktenhour">0</span>
				<span class="wkonehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktenmin">0</span>
			<span class="wkonemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktensec">0</span>
			<span class="wkonesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>

</div>
				

					<?php } ?>


					
				
			</div>	
			
			
		</div>
	</div>
</div>