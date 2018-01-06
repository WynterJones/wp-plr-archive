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
	$results = get_option('videopop_campaign_'. $ID);	
	$full_path = get_site_url();
	$assets = $full_path . "/wp-content/plugins/videopop/lp/";
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php echo $assets; ?>/js/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo $assets; ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo $assets; ?>/js/velocity.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/bootstrap-theme.min.css">
    <!-- Google Font Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
    <!-- Your CSS Styles in css/style.css -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/style.css">
    <!-- Font Awesome Icons check http://fontawesome.io/icons/ -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/font-awesome.css">

    <script>
 var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('video', {
      events: {
        // call this function when player is ready to use
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }
  var changedvideo = 0;
  var checkOptin = 0;
  var checkCTA = 0;
  function onPlayerStateChange(event) {
    if(event.data === 0) {
      $('#iframe').hide();
      $('.theend_area').show();
    }
    
    
    setInterval(function(){
      <?php if ($results->showEmail == 'show') { ?>
    	<?php if ($results->optintime != '') { ?>
        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->optintime); ?> && checkOptin == 0){
            checkOptin = 1;
            $( ".optinpop" ).velocity({
              top: 0
            });
            player.pauseVideo();
        }
        <?php }
        } ?>
         
        <?php if ($results->socialtime != '') { ?>
          if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->socialtime); ?>) {
              $( ".popup_social" ).fadeIn();
          }
        <?php } ?>

        <?php if ($results->ctaposition == 'popup_top' && $results->ctatime != "") { ?>

        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->ctatime); ?> && checkCTA == 0){
            $('.popup_top').velocity({
              top: 10
            });
        }
        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->ctatime); ?> + 10 && checkCTA == 0){
            $('.popup_top').velocity({
              top: -510
            });
            checkCTA = 1;
        }
          <?php } ?>

        <?php if ($results->ctaposition == 'popup_bottom' && $results->ctatime != "") { ?>

        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->ctatime); ?> && checkCTA == 0){
            $('.popup_bottom').velocity({
              bottom: 10
            });
        }
        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->ctatime); ?> + 10 && checkCTA == 0){
            $('.popup_bottom').velocity({
              bottom: -510
            });
            checkCTA = 1;
        }
          <?php } ?>

          <?php if ($results->ctaposition == 'popup_right' && $results->ctatime != "") { ?>

        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->ctatime); ?> && checkCTA == 0){
            $('.popup_right').velocity({
              right: 10
            });
        }
        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->ctatime); ?> + 10 && checkCTA == 0){
            $('.popup_right').velocity({
              right: -511
            });
            checkCTA = 1;
        }

         <?php } ?>

           <?php if ($results->ctaposition == 'popup_left' && $results->ctatime != "") { ?>


        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->ctatime); ?> && checkCTA == 0){
            $('.popup_left').velocity({
              left: 11
            });
        }
        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->ctatime); ?> + 10 && checkCTA == 0){
            $('.popup_left').velocity({
              left: -511
            });
            checkCTA = 1;
        }
         <?php } ?>


          <?php if ($results->questiontime != '') { ?>

        if (Math.ceil(player.getCurrentTime()) === <?php echo stripslashes($results->questiontime); ?> && changedvideo == 0){
            $('.questionbox').velocity({
              top: 10
            });
            player.pauseVideo();
        }
        
          <?php } ?>

    },1000);
  }
  function onPlayerReady(event) {
    <?php if ($results->showEmail == 'show') { ?>
    var playviedeo2 = document.getElementById("playvideo2");
          playviedeo2.addEventListener("click", function() {
            
            $( ".optinpop" ).velocity({
              top: -410
            });
            player.playVideo();


          });
 <?php } ?>

 <?php if ($results->questiontime != '') { ?>
    var question1 = document.getElementById("question1");
          question1.addEventListener("click", function() {
            
    $("#question1").html('<i class="fa fa-spinner fa-spin"></i> Loading...');
            setTimeout(function(){
 $( ".questionbox" ).velocity({
              top: -410
            });
            },500);
           
            changedvideo = 1;
            var videoId = "<?php echo stripslashes($results->question1id); ?>";
           setTimeout(function(){
            player.loadVideoById(videoId);
            },1500);


          });

          var question2 = document.getElementById("question2");
          question2.addEventListener("click", function() {
      
       $("#question2").html('<i class="fa fa-spinner fa-spin"></i> Loading...');
            setTimeout(function(){
 $( ".questionbox" ).velocity({
              top: -410
            });
            },500);
            changedvideo = 1;
            var videoId = "<?php echo stripslashes($results->question2id); ?>";
            setTimeout(function(){
            player.loadVideoById(videoId);
            },1500);


          });
 <?php } ?>


    var playButton = document.getElementById("playvideo");
    playButton.addEventListener("click", function() {
      player.playVideo();
    });
    
  
  }
  var tag = document.createElement('script');
  tag.src = "//www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  
    </script>
	 <script>
		$(function() {
	    $('#play-button').on('click', function() {
	      $('.thevideo_area').hide();
	      $('#iframe').show();
	      $( "#playvideo" ).trigger( "click" );
	    });
	   
	  });
	  </script>
	  <!-- Custom CSS -->
	  <link rel="stylesheet" href="<?php echo $assets; ?>/videoplayer/videoplayer.css" />
  </head>
<body>
	<div class="row">
		
		<div class="container mainContainer">
			
		            <div id="thevideo" class="<?php echo stripslashes($results->design); ?>">
  <div class="thevideo_area">
    <span id="playvideo"></span>
    <img id="play-button" src="<?php echo stripslashes($results->videoimage); ?>" class="imagethumbnail" />
  </div>

   <div class="theend_area" style="display: none !important">
    <a target="_parent" href="<?php echo stripslashes($results->endlink); ?>" class="trackClick"><img  src="<?php echo stripslashes($results->endimage); ?>" class="imagethumbnail" /></a>
  </div>


    <div id="iframe" style="display: none !important">
      <div class="h_iframe">
        <img class="ratio" src="http://placehold.it/16x9"/>
        <iframe id="video" src="http://www.youtube.com/embed/<?php echo stripslashes($results->videoid); ?>?enablejsapi=1&html5=1&controls=0&rel=0&title=0&showinfo=0&iv_load_policy=3&hd=1&vq=hd720" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="questionbox">
    <br>
    <h3><strong><?php echo stripslashes($results->question); ?></strong></h3>
    <br>
    <div class="col-xs-6">
      <button id="question1" class="btn  btn-block btn-<?php echo stripslashes($results->question1design); ?> btn-lg"><?php echo stripslashes($results->question1text); ?></button>
    </div>
    <div class="col-xs-6">
      <button id="question2" class="btn btn-block btn-<?php echo stripslashes($results->question2design); ?> btn-lg"><?php echo stripslashes($results->question2text); ?></button>
    </div>
  </div>
  


    <div class="<?php echo stripslashes($results->ctaposition); ?>">
    <h4><?php echo stripslashes($results->ctaheadline); ?></h4>
    <a href="<?php echo stripslashes($results->ctalink); ?>" target="_parent" class="btn trackClick btn-<?php echo stripslashes($results->ctadesign); ?>" style="margin: 10px 0"><?php echo stripslashes($results->ctabutton); ?></a>
  </div>
    
  <?php if($results->autoresponder != '' && $results->showEmail == 'show') { ?>
  <div class=" optinpop">

    <h3><strong><?php echo stripslashes($results->optinheadline); ?></strong></h3>
    <a href="#" id="playvideo2" style="display: block; color: #fff; padding: 10px 0;"><?php echo stripslashes($results->optinskip); ?></a>

   
			<!-- Autoresponder -->
			<form action="" method="post" class="ARform" target="_parent">
				<input type="text" placeholder="<?php echo stripslashes($results->nameplace); ?>" class="form-control"  id="optinName" />
				<input type="email" <?php if($results->ar == "mailchimp") { echo 'name="EMAIL" '; } else { echo 'name="email" '; } ?> placeholder="<?php echo stripslashes($results->emailplace); ?>" class="form-control"  id="optinEmail" />
				<input type="submit" class="btn btn-<?php echo stripslashes($results->optindesign); ?> btn-lg btn-block trackClick" value="<?php echo stripslashes($results->optinbutton); ?>" />
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
		          
  </div>
 <?php } ?>

  <div class="popup_social">
    <h4><?php echo stripslashes($results->socialheadline); ?></h4>
    <!-- Twitter -->
    <div style="float: left;width: 105px">
    
    <a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php echo stripslashes($results->sharetext); ?>" data-url="<?php echo stripslashes($results->sharelink); ?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</div>
<div style="float: left;padding-left: 10px; width: 100px">
  <!-- Facebook -->
  <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo stripslashes($results->sharelink); ?>&amp;width=100&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
</div>
  <!-- Google+ -->
<div style="float: left;padding-left: 10px;width: 90px">
  <!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-href="<?php echo stripslashes($results->sharelink); ?>"></div>

</div>
  </div>

</div>

  </div>
		</div>
	</div>
	    
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