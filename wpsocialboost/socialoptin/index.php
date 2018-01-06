<?php
	// Full Featured Example -- Replace with Default.php for a Fresh Start
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	$full_path = get_site_url();
	$assets = $full_path . "/wp-content/plugins/wpsocialboost/socialoptin/";
	// Get Full Path - echo $assets;
	// Track Views
	  // $views = get_option($ID.'_views');
	  // update_option($ID.'_views', $views + 1);

      function displayInput($id, $default) {
        $value = get_option('socialboost_'.$id);
        if ($value != "") {
          echo stripcslashes(html_entity_decode($value));
        }
        else {
          echo $default;
        }
      }
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
		<div class=" header">
		
      
          <script type="text/javascript">
    function popUp(URL) {
    day = new Date();
    id = day.getTime();
    eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=500,left = 710,top = 290');");
    }
    </script>
     
     <div style="display: none">
    <?php
    $currentsite = $_GET['url'];
    $text = get_option('socialboost_socialText');
    $twitter_url = "http://twitter.com/share?url=" . $currentsite . "&text=" . $text;
    $facebook_url = "http://www.facebook.com/sharer.php?u=" . $currentsite;
    ?>    
     </div>
   
     
			<div class="col-xs-4" style="margin:0;padding:0 3px; padding-left: 0"><button class="btn btn-block btn-lg btn-warning subscribe" checky="yes" ><?php displayInput('openButton', 'Subscribe Today') ?> <span><i class="fa fa-sort-asc" style="position: absolute; top: 18px; right: 18px"></i></span></button></div>
			<div class="col-xs-4"style="margin:0;padding:0 3px" ><a style="padding: 10px;" class="btn btn-block btn-lg btn-primary facebook" href="javascript:popUp('<?php print urlencode($facebook_url); ?>')"><i class="fa fa-facebook"></i> <?php displayInput('facebookButton', 'Share on Facebook') ?></a></div>
			<div class="col-xs-4"style="margin:0;padding:0 3px; padding-right: 0"><a style="padding: 10px;"  class="btn btn-block btn-lg btn-info twitter" href="javascript:popUp('<?php print urlencode($twitter_url); ?>')"><i class="fa fa-twitter"></i> <?php displayInput('twitterButton', 'Share on Twitter') ?></a></div>
		</div>
		<div  style="padding: 0; overflow: hidden; clear: both;padding-bottom: 5px">
			<div class="mainContainer">
				<div class="innerContent">
					<div class="col-xs-8">
         
						<h3><?php displayInput('emailHeadline', 'Join The Newsletter for Awesome Emails') ?></h3>
           <form action="" method="post" class="ARform">
           <input type="hidden" placeholder="Your Full Name" value="SocialBoost-Email" class="form-control name" name="name" id="optinName" />
						<input type="text" class="form-control" name="email"  id="optinEmail"  placeholder="<?php displayInput('emailPlaceholder', 'Enter Your E-mail Address'); ?>"  style="background: #fff no-repeat right url(https://cdn2.iconfinder.com/data/icons/ledicons/email.png); background-position: 97% 8px">
						<button class="btn btn-warning"><?php displayInput('emailButton', 'Click to Subscribe'); ?></button>
						<span><small style="opacity: .5"><?php displayInput('emailSpam', 'You will never receive any spam to your email address.'); ?></small></span>
            <div class='ARhidden'></div>
            </form>
					</div>
					<div class="col-xs-4">
                                    <br>
						<h3><?php displayInput('facebookHeadline', 'Like Us on Facebook'); ?></h3>
						<iframe src="http://www.facebook.com/plugins/like.php?href=<?php displayInput('facebookURL', ''); ?>&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
					</div>

					<br clear="all">
				</div>
			</div>
		</div>

    <!-- Autoresonder Hidden -->
        <div id="autoresponder" style="display: none">
          <textarea id="autoresponderCode" name="autoresponderCode"></textarea>
          <input type="text"  name="arname" id="arname" value="" />
          <input type="text"   name="aremail" id="aremail" value="" />
          <input type="text"   name="arform" id="arform" value="" />
          <textarea id="arhidden"   name="arhidden"></textarea>
          <div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
        </div>
        <div style="display: none">
            <div id="optinCode">
              <!-- AutoResonderCode -->
              <?php displayInput('autoresponder', '') ?>
              <!-- AutoResponderCode -->
            </div>
        </div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php echo $assets; ?>/js/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo $assets; ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo $assets; ?>/js/velocity.js"></script>
      <script>
$(window).ready(function() {
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

      var optinCode = $('#optinCode').html();
          $('#autoresponderCode').val(optinCode);
          break_apart_ar();
            $('.ARform').attr('action', $('#arform').val());
            $('.ARhidden').html($('#arhidden').val());
           // Velocity Animation - Learn More Here -> http://dailyjs.com/2014/05/01/velocity/
           $('body').velocity({opacity: "1"}, 1000);

      $('.subscribe').bind('click', function() {

        var heightBox = $('.mainContainer').height() + 10;

        if ($('.subscribe').attr('checky') == "yes") {
          $('.mainContainer').velocity({marginTop: -heightBox}, '500');
          $('.subscribe').attr('style', 'padding-bottom: 10px; border-radius: 6px');
          $('.subscribe').html('<?php displayInput("openButton", "Subscribe Today") ?> <span><i class="fa fa-sort-desc" style="position: absolute; top: 11px; right: 19px"></i></span>');
          $('.subscribe').attr('checky', 'no');
          $('#wpsocialOptinBox', window.parent.document).velocity({height: 60}, 590);
        }
        else {
          $('.mainContainer').velocity({marginTop: 0}, '500');
          $('#wpsocialOptinBox', window.parent.document).velocity({height: 280}, 590);
          $('.subscribe').attr('style', '');
          $('.subscribe').html('<?php displayInput("openButton", "Subscribe Today") ?> <span><i class="fa fa-sort-asc" style="position: absolute; top: 18px; right: 18px"></i></span>');
          $('.subscribe').attr('checky', 'yes');
        }
      });

      $('.facebook, .twitter').velocity({
          translateY: "-1.5rem",
          width: "300px",
          fontSize: "24px",
          marginTop: "-100px",
          marginLeft: "-80px"
        }, 200, "easeOut").velocity({
          opacity: ".3",
        }, 450).velocity({
          translateY: "0",
          rotateZ: "0",
          opacity: "1",
          width: "100%",
          fontSize: "15px",
          marginTop: "0",
          marginBottom: '0',
          marginLeft: 0
        }, 1000, "easeIn");


        


        });
      </script>
	   
</body>
</html>