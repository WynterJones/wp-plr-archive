<!DOCTYPE html>
<html lang="en">
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
    $views = get_option($ID.'optinremix_views');
    update_option($ID.'optinremix_views', $views + 1);
?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SEO SETTINGS -->
    <title><?php echo stripslashes($results->title); ?></title>
    <meta name="description" content="<?php echo stripslashes($results->desc); ?>">
    <link rel="icon" type="image/png" href="<?php echo stripslashes($results->favicon); ?>">
    <?php echo stripslashes($results->tracking); ?>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo $assets; ?>/inc/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $assets; ?>/inc/bootstrap/css/bootstrap-theme.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="<?php echo $assets; ?>/inc/jquery.min.js"></script>
  <script src="<?php echo $assets; ?>/inc/jquery.velocity.min.js"></script>
  <script src="<?php echo $assets; ?>/inc/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $assets; ?>/inc/bgstretch.js"></script>
  <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
  <script>
  $(document).ready(function() {


<?php if($results->step1Image != '') { ?>
           $.backstretch("<?php echo stripslashes($results->step1Image); ?>");
          <?php } else { ?>

          <?php } ?>


  $('#nextStep').on("click", function() {
    $('.backstretch').fadeOut();

    setTimeout(function() {
      <?php if($results->step2Image != '') { ?>
           $.backstretch("<?php echo stripslashes($results->step2Image); ?>");
          <?php } else { ?>

          <?php } ?>

    }, 200);
    setTimeout(function() {
      $('.backstretch').fadeIn();
    }, 500);
    $('#step1').velocity({
      left: "-2000px"
    });
    $('#step2').velocity({
      right: "0"
    });
    $('#skipVideo').fadeIn(4000);

    $( "#play-button" ).trigger( "click" );
  })
});

<?php if($results->videoType == 'youtube') { ?>
// YouTube
  var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerStateChange(event) {
            if(event.data === 0) {
                $('#step2').velocity({
                  left: "-2000px"
                });
                $('#step3').velocity({
                  right: "0"
                });
                 $('.backstretch').fadeOut();
                   <?php if($results->step3Image != '') { ?>
                setTimeout(function() {

           $.backstretch("<?php echo stripslashes($results->step3Image); ?>");


    }, 200);
    setTimeout(function() {
      $('.backstretch').fadeIn();
    }, 500);
     <?php } else { ?>

          <?php } ?>

            }
        }

function onPlayerReady(event) {

  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });

  var pauseButton = document.getElementById("skipVideo");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
    $('#step2').velocity({
                  left: "-2000px"
                });
                $('#step3').velocity({
                  right: "0"
                });
                $('.backstretch').fadeOut();
               <?php if($results->step3Image != '') { ?>
                setTimeout(function() {

           $.backstretch("<?php echo stripslashes($results->step3Image); ?>");


    }, 200);
    setTimeout(function() {
      $('.backstretch').fadeIn();
    }, 500);
     <?php } else { ?>

          <?php } ?>
  });

}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

<?php } ?>

  </script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/style.css">
</head>
<body>

<?php if($results->bgColor != '') { ?>
  <style>
    body {
      background: <?php echo stripslashes($results->bgColor); ?> url(<?php echo $assets; ?>/images/<?php echo stripslashes($results->bgTexture); ?>.png) repeat !important;
    }
  </style>
<?php } ?>

<?php if($results->headlineColor != '') { ?>
  <style>
    body, h1, h2, h3, h4, h5, a {
      color: <?php echo stripslashes($results->headlineColor); ?> !important;
    }
  </style>
<?php } ?>

<?php if($results->highlight != '') { ?>
  <style>
    .headline2 {
      color: <?php echo stripslashes($results->highlight); ?> !important;
    }
  </style>
<?php } ?>

<?php if($results->dropShadow != '') { ?>
  <style>
    .btn {
      box-shadow: 0 0 5px <?php echo stripslashes($results->dropShadow); ?> !important;
    }
    .video-wrapper {
       box-shadow: 0 0 5px <?php echo stripslashes($results->dropShadow); ?>, 0 0 40px <?php echo stripslashes($results->dropShadow); ?> !important;
    }
  </style>
<?php } ?>

<?php if($results->greyScale == 'greyscale') { ?>
  <style>
    .backstretch{
      filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */
filter: gray; /* IE6-9 */
-webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */
    }
  </style>
<?php } ?>


<?php if($results->logo != '') { ?>
<br>
            <div class="top" style="width: 98%">
              <img src="<?php echo stripslashes($results->logo); ?>" style="display: block;margin: 50px auto; max-width: 300px;margin-top: 60px;" alt="">
            </div>
          <?php } else { ?>
            <br><br> <br><br>
          <?php } ?>
  <div class="row" style="margin-top: -20px">
    <div class="container">
      <div class="col-md-12">

        <div id="step1">
        <div id="bigtext">
          <?php if($results->headline != '') { ?>
            <h1  class="headline"><?php echo stripslashes($results->headline); ?></h1>
          <?php } else { ?>
            <h1 class="headline">Write Your Own</h1>
          <?php } ?>

          <?php if($results->headline2 != '') { ?>
            <h1 class="headline2"><?php echo stripslashes($results->headline2); ?></h1>
          <?php } else { ?>
            <h1 class="headline2">Optin Remix</h1>
          <?php } ?>

          <?php if($results->headline3 != '') { ?>
            <h1  class="headline"><?php echo stripslashes($results->headline3); ?></h1>
          <?php } else { ?>
            <h1 class="headline">3 Step Squeeze Page</h1>
          <?php } ?>

          <?php if($results->headline4 != '') { ?>
            <h2  class="bottomheadline"><?php echo stripslashes($results->headline4); ?></h2>
          <?php } else { ?>
            <h2 class="bottomheadline"><i class="fa fa-star"></i> Find Out How to Experience OptinRemix <i class="fa fa-star"></i></h2>
          <?php } ?>
        </div>

          <?php if($results->ctaText != '') { ?>
            <button href="#" id="nextStep" class="btn btn-lg  btn-<?php echo stripslashes($results->ctaColor); ?>" style="margin-top: 25px"><?php echo stripslashes($results->ctaText); ?></button>
          <?php } else { ?>
            <button href="#" id="nextStep" class="btn btn-lg  btn-<?php echo stripslashes($results->ctaColor); ?>" style="margin-top: 25px">Click to Experience the Future</button>
          <?php } ?>
          <div class="footer">
                    <?php if($results->footer != '') { ?>
                      <p><?php echo stripslashes($results->footer); ?></p>
                    <?php } ?>
                  </div>
        </div>

        <div id="step2">

          <div class="video-wrapper <?php echo stripslashes($results->videoStyle); ?>">
            <div class="videoWrapper">
            <?php if($results->videoType == 'youtube') { ?>
          <div style="position: absolute; width: 700px; top: 10px;height: 420px;  z-index: 9999"></div>
        <iframe id="video" src="//www.youtube.com/embed/<?php echo stripslashes($results->videoID); ?>?enablejsapi=1&html5=1&controls=0&modestbranding=0&;rel=0&;showinfo=0;autohide=1" frameborder="0" allowfullscreen></iframe>

      <?php } ?>

      <?php if($results->videoType == 'vimeo') { ?>

<div style="position: absolute; width: 700px; top: 10px;height: 420px;  z-index: 9999"></div>
<iframe class="vimeo" id="player1" src="http://player.vimeo.com/video/<?php echo stripslashes($results->videoID); ?>?api=1&player_id=player1" width="500" height="281" frameborder="0"></iframe>

<script charset="utf-8">
  <?php if($results->videoType == 'vimeo') { ?>



  // Enable the API on each Vimeo video
            jQuery('iframe.vimeo').each(function(){
                Froogaloop(this).addEvent('ready', ready);
            });

            function ready(playerID){

              var playButton = document.getElementById("play-button");
              playButton.addEventListener("click", function() {
                Froogaloop(playerID).addEvent('play', play(playerID));
                Froogaloop(playerID).addEvent('finish', onFinish);
                Froogaloop(playerID).addEvent('pause', onPause);
                Froogaloop(playerID).api('play');
              });

              var skipbutton = document.getElementById("skipVideo");
              skipbutton.addEventListener("click", function() {
                Froogaloop(playerID).api('pause');
              });

            }

function play(playerID){

            }
            function onPause(id) {
      $('#step2').velocity({
        left: "-2000px"
      });
      $('#step3').velocity({
        right: "0"
      });
       $('.backstretch').fadeOut();
         <?php if($results->step3Image != '') { ?>
      setTimeout(function() {

 $.backstretch("<?php echo stripslashes($results->step3Image); ?>");


}, 200);
setTimeout(function() {
$('.backstretch').fadeIn();
}, 500);
<?php } else { ?>

<?php } ?>
    }

            function onFinish(id) {
        $('#step2').velocity({
          left: "-2000px"
        });
        $('#step3').velocity({
          right: "0"
        });
         $('.backstretch').fadeOut();
           <?php if($results->step3Image != '') { ?>
        setTimeout(function() {

   $.backstretch("<?php echo stripslashes($results->step3Image); ?>");


}, 200);
setTimeout(function() {
$('.backstretch').fadeIn();
}, 500);
<?php } else { ?>

  <?php } ?>
    }

  <?php } ?>
</script>

  <?php } ?>
            </div>
          </div>

<?php if($results->showSkip == 'show') { ?>
          <?php if($results->skipButton != '') { ?>
            <h2  class="bottomheadline"></h2>
            <a href="#" id="skipVideo" style="text-align: center;display: block;margin-top: 20px; color: #fff; opacity: .5;display: block"><i class="fa fa-caret-square-o-right"></i> <?php echo stripslashes($results->skipButton); ?></a>
          <?php } else { ?>
            <a href="#" id="skipVideo" style="text-align: center;display: block;margin-top: 20px; color: #fff; opacity: .5;display: block"><i class="fa fa-caret-square-o-right"></i> Click to Skip Video</a>
          <?php }
  } ?>

  <?php if($results->showFB == 'show') { ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<br>
<div class="fb-comments" data-href="<?php echo stripslashes($results->fbURL); ?>" data-width="700" data-numposts="5" data-colorscheme="<?php echo stripslashes($results->fbColor); ?>"></div>
<br>
<?php } ?>
          <button id="play-button" style="display: none">Play</button>
<br><br><br><br>
          <div class="footer">
                    <?php if($results->footer != '') { ?>
                      <p><?php echo stripslashes($results->footer); ?></p>
                    <?php } ?>
                  </div>
        </div>

        <div id="step3">
         <div id="bigtext2">
          <?php if($results->optinHeadline != '') { ?>
            <h1  class="headline"><?php echo stripslashes($results->optinHeadline); ?></h1>
          <?php } else { ?>
            <h1 class="headline">Write Your Own</h1>
          <?php } ?>

          <?php if($results->optinHeadline2 != '') { ?>
            <h1 class="headline2"><?php echo stripslashes($results->optinHeadline2); ?></h1>
          <?php } else { ?>
            <h1 class="headline2">Headline</h1>
          <?php } ?>
          <!-- <span class="bottomheadline"><i class="fa fa-star-o"></i> Just Fill Out The Form Below <i class="fa fa-star-o"></i></span> -->
        </div>
        <?php if($results->autoresponder != '') { ?>
      <!-- Autoresponder -->
      <form action="" method="post" class="ARform" style="display: block; width: 65%; margin: 0 auto">
        <input type="text" placeholder="<?php if($results->namePlaceholder != '') { ?><?php echo stripslashes($results->namePlaceholder); ?> <?php } else { ?>Your Full Name...<?php } ?>" class="form-control name"  id="optinName" />
        <input type="email" <?php if($results->ar == "mailchimp") { echo 'name="EMAIL" '; } else { echo 'name="email" '; } ?> placeholder="<?php if($results->emailPlaceholder != '') { ?><?php echo stripslashes($results->emailPlaceholder); ?> <?php } else { ?>Your Email Address...<?php } ?>" class="form-control email"  id="optinEmail" />
        <input type="submit" class="btn btn-<?php echo stripslashes($results->buttonColor); ?> btn-block btn-lg trackClick" value="  <?php if($results->buttonText != '') { ?><?php echo stripslashes($results->buttonText); ?> <?php } else { ?>Click Here to Sign Up Now<?php } ?>" />


        <?php if($results->spamText != '') { ?>
            <p style="font-size: .9em"><small><i class="fa fa-lock"></i> <?php echo stripslashes($results->spamText); ?></small></p>
          <?php } else { ?>
            <p style="font-size: .9em"><small><i class="fa fa-lock"></i> Your Privacy is Protected</small></p>
          <?php } ?>
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
        <h3>Add Your Email Auto-Responder Code</h3>
                <?php } ?>
<div class="footer">
          <?php if($results->footer != '') { ?>
            <p><?php echo stripslashes($results->footer); ?></p>
          <?php } ?>
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
