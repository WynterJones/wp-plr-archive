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
	<link rel="stylesheet" type="text/css" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/css/toast.css">
	<link rel="stylesheet" type="text/css" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/progressbar/style.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.countdown.css">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/css/mobile.css">

	<link rel="stylesheet" type="text/css" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.share.css"> 
	<link rel="stylesheet" type="text/css" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/css/bonuspopup.css"> 
  <link rel="stylesheet" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/animate.css">
    <link rel="stylesheet" href="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/bp-content-slider.css">
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.share.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.textfill.min.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/bonuspopup.js"></script>
	<script src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.fitTextToHeight.js"></script>
	<script src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jsocial.js"></script>
	
  <?php if($results->autoPlay == '2') { ?>
    <script src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.embedvideo2.js"></script>
<?php } else { ?>
<script src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.embedvideo.js"></script>
<?php } ?>
	<script src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/cookie.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/date.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/progress.js"></script>
  <script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/js/jquery.fontselect.js"></script>

 <script src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/bp-content-slider.js"></script>
<?php if($results->chooseDate == '1') { ?>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.flip.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/countdown.js"></script>

<?php } ?>


<?php if($results->chooseDate == '2') { ?>
<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/dycountdown.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.flip.js"></script>
	
	

<?php } ?>

<?php if($results->chooseDate == '3') { ?>

	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/jquery.flip.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/date.js"></script>
	<script type="text/javascript" src="../wp-content/plugins/affiliatepressx/inc/lp/assets/jquery/wkcountdown.js"></script>

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
		icon_format: '../wp-content/plugins/affiliatepressx/inc/lp/assets/images/small/%s.gif',
		blanktarget: false
	});
							
	$("#social2").jsocial({
		highlight: true,
		buttons: "technorati,delicious,reddit,facebook,digg,furl,yahoo,twitter,stumbleupon", 
		icon_format: '../wp-content/plugins/affiliatepressx/inc/lp/assets/images/big/%s.png',
		blanktarget: true
	});
							
							
	$("#social3").jsocial({
		highlight: true,
		buttons: "technorati,delicious,reddit,facebook,twitter,linkedin,stumbleupon,digg", 
		icon_format: '../wp-content/plugins/affiliatepressx/inc/lp/assets/images/pop/%s_down.png',
		icon_hover_format: '../wp-content/plugins/affiliatepressx/inc/lp/assets/images/pop/%s.png',
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
	$(".video iframe").attr('style', 'width: 460px; height: 258.75px');
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
    font-family: <?php echo str_replace("+", " ", $results->paragraphFont); ?>;
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
    background:url(../wp-content/plugins/affiliatepressx/inc/lp/assets/images/social-icons.png) no-repeat ;
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
    background: url("../wp-content/plugins/affiliatepressx/inc/lp/assets/images/social-icons.png") no-repeat scroll left top transparent;
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
			background: url(../wp-content/plugins/affiliatepressx/inc/lp/assets/images/bg<?php echo stripcslashes($results->bannerBG); ?>.png) repeat-x top <?php echo stripcslashes($results->customBanner_color); ?> !important;
		}
		#deal {
      background: #ccc url(../wp-content/plugins/affiliatepressx/inc/lp/assets/images/<?php echo stripcslashes($results->dealBG); ?>.png) repeat;
    }
    #contentSlider {
      background: #ccc url(../wp-content/plugins/affiliatepressx/inc/lp/assets/images/<?php echo stripcslashes($results->dealBG); ?>.png) repeat;
    }
		#border {
			background: #fff url(../wp-content/plugins/affiliatepressx/inc/lp/assets/images/<?php echo stripcslashes($results->borderStyle); ?>.png) repeat;
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

<?php if ($results == "") { ?> 
<style>
  .container {
    display: none;
  }
  body {
    background: url(http://www.wpaffiliatepress.com/images/bg.jpg) no-repeat center bottom fixed #2270BE !important;

   background-size: 100% auto !important;
   min-width:100% !important; min-height:100% !important; width:auto !important; height:auto !important;
  }
  #new {
    width: 500px;
    margin: 30px auto;
    padding: 40px;
    background: #fff;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 5px #444;
  }
  #new h4 {
    margin-top: -10px;
  }
</style>
<img src="http://support.wpaffiliatepress.com/images/logo.png" style="margin: 0 auto; display: block; margin-top: 10px;" />

<div id="new">
  <h2>Please Add Content to Get Started</h2>
  <h4>In Settings Panel Customize Your Page &amp; Hit Save</h4>
</div>

<?php  } ?>
<body class="typography<?php echo stripcslashes($results->typography); ?> bannerImage<?php echo stripcslashes($results->bannerBG); ?>">
	<input type="hidden" value="<?php echo stripcslashes($results->countdownTimer); ?>" id="countdownTimer">
	<div id="socialshare" style="display:none"><?php echo stripcslashes($results->socialDesc); ?> -> <?php echo stripcslashes($results->URL); ?></div>

<?php if ($results->showHeader != "hide") { ?>

<div id="header">
	<div class="container header">
		<div class="grid">
			<?php 

		if ($results->logoImage == "") { ?>
			<div id="headerContent">
        <?php echo stripcslashes($results->header); ?>   
      </div>
			<?php 
		}
		else {
			?>
			<img src="<?php echo stripcslashes($results->logoImage); ?>" style="margin-top: -50px;margin-bottom: -58px ">
			<?php } ?>
		</div>
	</div>
</div>

<?php } ?>
	<input type="hidden" value="<?php echo $results->headlineFont; ?>" id="headlineFont">
  <input type="hidden" value="<?php echo $results->subheadlineFont; ?>" id="subheadlineFon">
  <input type="hidden" value="<?php echo $results->paragraphFont; ?>" id="paragraphFont">
  <input type="hidden" value="<?php echo $results->dealFont; ?>" id="dealFont">