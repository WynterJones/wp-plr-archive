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
  $results = get_option('socialoptinx_campaign_'. $ID); 
  // echo $data->id;
  // $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
  $full_path = get_site_url();
  $assets = $full_path . "/wp-content/plugins/socialoptinx/lp/";
  // Tracking
  $views = get_option($ID.'_views');
  update_option($ID.'_views', $views + 1);
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo stripslashes($results->title); ?></title>
    <meta name="description" content="<?php echo stripslashes($results->desc); ?>">
    <link rel="icon" 
      type="image/png" 
      href="<?php echo stripslashes($results->favicon); ?>">

    <?php echo stripslashes($results->tracking); ?>
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
    <!-- <link rel="stylesheet" href="<?php echo $assets; ?>/css/bootstrap-theme.min.css"> -->
    <?php if($results->bootwatch != '' ) { ?>
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/themes/<?php echo $results->bootwatch; ?>.css">
    <?php  } ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo $assets; ?>/js/jquery.share.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="ie/html5shiv.js"></script>
    <script src="ie/respond.min.js"></script>
    <![endif]-->
    <style>
      .step1 {
      font-family: 'Open Sans', sans-serif !important;
      <?php if($results->border != '') { ?>
      border: 5px solid <?php echo stripslashes($results->border); ?>
      <?php } ?>
      
      }
      body .row .step1 .borderText a {
      <?php if($results->border != '' && $results->borderText != '') { ?>
      color: <?php echo stripslashes($results->borderText); ?> !important;
      <?php } ?>
      }
      .step1, .step1 h1, .step1 h2, .step1 h3, .step1 h4, .step1 h5, .step1 h6, .step1 p {
      <?php if($results->containerColor != '' && $results->containerText != '') { ?>
      color: <?php echo stripslashes($results->containerText); ?> !important;
      <?php } else { ?>
      color: #222 !important;
      <?php } ?>
      }
      .step1 {
      <?php if($results->containerColor != '') { ?>
      background: <?php echo stripslashes($results->containerColor); ?> !important;
      <?php } ?>
      }

    </style>
  </head>
  <body>
    <div class="row">
      <a href="#" class="tubular-mute"><i class="fa fa-volume-off " style="cursor:pointer;position: fixed;top: 30px; right: 30px; z-index: 9999; font-size: 32px; color: #fff"></i></a>
      <div class="container step1">
        <?php if($results->next != '') { ?>
        <a href="<?php echo stripslashes($results->next); ?>" id="next"><i class="fa fa-chevron-right" id="i_56d0_0"></i></a>
        <?php  } ?>
        <?php if($results->prev != '') { ?>
        <a href="<?php echo stripslashes($results->prev); ?>" id="prev"><i class="fa fa-chevron-left" id="i_56d0_1"></i></a>
        <?php } ?>
        <div class="col-md-12 question">
          <div id="div_56d0_0">
            <h1 id="h1_56d0_0" class="mainHeadline"><?php if($results->question == '') { echo 'What Do You Like Better Tigers or Monkeys?'; } else { echo stripslashes($results->question); } ?></h1>
            <div id="div_56d0_1">
              <a href="#" class="btn btn-success  sayYes" id="a_56d0_0"><i class="fa fa-check"></i> <?php if($results->yesText == '') { echo 'Tigers'; } else { echo stripslashes($results->yesText); } ?></a>
              <strong><?php if($results->or == '') { echo 'OR'; } else { echo stripslashes($results->or);} ?></strong>
              <a href="#" class="btn btn-danger  sayNo" id="a_56d0_1"><i class="fa fa-times"></i> <?php if($results->noText == '') { echo 'Monkeys'; } else { echo stripslashes($results->noText);} ?></a>
            </div>
          </div>
          <h4 class="borderText" id="h4_56d0_0"><a href="#" class="watch " id="watch" ><i class="fa fa-toggle-up"></i> <?php if($results->watch == "") { echo "I want to watch the video."; } else { echo stripslashes($results->watch); } ?></a></h4>
        </div>
        <div class="col-md-12 yes" id="div_56d0_2">
          <div id="div_56d0_3">
            <h1 id="h1_56d0_1"><strong class="numberAgree"><i class="fa fa-check"></i> <?php if(get_option('agree'.'_'.$_GET['id']) != '') { echo get_option('agree'.'_'.$_GET['id']); } else { echo '0';} ?></strong></h1>
            <h3 id="h3_56d0_0"><?php if($results->agreed == "") { echo "People Agreed With You!"; } else { echo stripslashes($results->agreed);} ?></h3>
            <h4 id="h4_56d0_1"><?php if($results->emailHeadline == "") { echo "Sign Up for More Surveys Every Day"; } else { echo stripslashes($results->emailHeadline);} ?></h4>
            <form action="" method="post" class='ARform' target="submitIframe"  id="submitNo" >
              <input type="email"  <?php if($results->ar == "mailchimp") { echo 'name="EMAIL" '; } else { echo 'name="email" '; } ?> required class="form-control"  id="optinEmail" placeholder="<?php if($results->placeholder == "") { echo "Your Email Address"; } else { echo stripslashes($results->placeholder);} ?>" style="padding: 11px; height: 45px; font-size: 1.3em; border: 1px solid #ccc !important;background: url(https://cdn0.iconfinder.com/data/icons/woocons1/Mail.png) #fff no-repeat right;background-position: 98.6% 5px">
              <a href="#" class="btn btn-block btn-lg btn-warning submitNo" id="a_56d0_3"><?php if($results->emailButton == "") { echo "Subscribe to Daily Mailing List"; } else { echo stripslashes($results->emailButton); } ?></a>
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
          <h4 class="borderText" id="h4_56d0_2"><a href="#" class="watch " id="watch" ><i class="fa fa-toggle-up"></i> <?php if($results->watch == "") { echo "I want to watch the video."; } else { echo stripslashes($results->watch); } ?></a></h4>
        </div>
        <div class="col-md-12 no" id="div_56d0_4">
          <div id="div_56d0_5">
            <h1 id="h1_56d0_2"><strong class="numberDisagree"><i class="fa fa-times"></i> <?php if(get_option('disagree'.'_'.$_GET['id']) != '') { echo get_option('disagree'.'_'.$_GET['id']); } else { echo '0'; } ?></strong></h1>
            <h3 id="h3_56d0_1"><?php if($results->agreed == "") { echo "People Agreed With You!"; } else { echo stripslashes($results->agreed); } ?></h3>
            <h4 id="h4_56d0_3"><?php if($results->emailHeadline == "") { echo "Sign Up for More Surveys Every Day"; } else { echo stripslashes($results->emailHeadline); } ?></h4>
            <form action="" method="post" class='ARform' target="submitIframe"  id="submitNo" >
              <input type="email"  <?php if($results->ar == "mailchimp") { echo 'name="EMAIL" '; } else { echo 'name="email" '; } ?> required class="form-control"  id="optinEmail" placeholder="<?php if($results->placeholder == "") { echo "Your Email Address"; } else { echo stripslashes($results->placeholder); } ?>" style="padding: 11px; height: 45px; font-size: 1.3em; border: 1px solid #ccc !important;background: url(https://cdn0.iconfinder.com/data/icons/woocons1/Mail.png) #fff no-repeat right;background-position: 98.6% 5px">
              <a href="#" class="btn btn-block btn-lg btn-warning submitNo" id="a_56d0_3"><?php if($results->emailButton == "") { echo "Subscribe to Daily Mailing List"; } else { echo stripslashes($results->emailButton); } ?></a>
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
          <h4 class="borderText" id="h4_56d0_4"><a href="#" class="watch" id="watch" ><i class="fa fa-toggle-up"></i> <?php if($results->watch == "") { echo "I want to watch the video."; } else { echo stripslashes($results->watch); } ?></a></h4>
        </div>
        <div class="col-md-12 thanks" id="div_56d0_6">
          <div id="div_56d0_7">
            <h1 id="h1_56d0_3"><strong style="padding-top: 4px;display: block;"><?php if($results->linkHeadline == "") { echo "Take The Video Course to Become a Politician"; } else { echo stripslashes($results->linkHeadline); } ?></strong></h1>
            <h3 id="h3_56d0_2"><?php if($results->linkSubHeadline == "") { echo "Learn Leadership and Politics"; } else { echo stripslashes($results->linkSubHeadline); } ?></h3>
            <h4 id="h4_56d0_5"><?php if($results->linkSmallHeadline == "") { echo "Take the Politician Video Course"; } else { echo stripslashes($results->linkSmallHeadline); } ?></h4>
            <a href="<?php if($results->linkURL == "") { echo "http://codecore.io"; } else { echo stripslashes($results->linkURL); } ?>" class="btn btn-block btn-lg btn-success" id="click" style="margin-top: 10px; font-weight: bolder; font-size:19px !important"> <?php if($results->linkButton == "") { echo "Become a Master Leader and Politican"; } else { echo stripslashes($results->linkButton); } ?></a>
          </div>
          <h4 class="borderText" id="h4_56d0_6"><a href="#" class="watch tubular-volume-up" id="watch" ><i class="fa fa-volume-up"></i> <?php if($results->watch == "") { echo "I want to watch the video."; } else { echo stripslashes($results->watch); } ?></a></h4>
        </div>
      </div>
    </div>
    <div class="videoInfo">
      <?php if($results->next != '') { ?>
      <a href="<?php echo stripslashes($results->next); ?>" id="footerNext"><i class="fa fa-chevron-right" id="i_56d0_2"></i></a>
      <?php  } ?>
      <?php if($results->prev != '') { ?>
      <a href="<?php echo stripslashes($results->prev); ?>" id="footerPrev"><i class="fa fa-chevron-left" id="i_56d0_3"></i></a>
      <?php  } ?>
      <div id="mydiv" ></div>
      <h2 id="h2_56d0_0"><?php if($results->question == '') { echo 'What Do You Like Better Tigers or Monkeys?'; } else { echo stripslashes($results->question); } ?></h2>
      <h4>
        <div id="div_56d0_8"><strong class="numberAgree2"><i class="fa fa-check"></i> <?php if(get_option('agree'.'_'.$_GET['id']) != '') { echo get_option('agree'.'_'.$_GET['id']); } else { echo '0'; } ?></strong> <?php if($results->say == '') { echo 'say'; } else { echo stripslashes($results->say); } ?> <span><?php if($results->yesText == '') { echo 'Tigers'; } else { echo stripslashes($results->yesText); } ?></span></div>
        <div id="div_56d0_9"><strong  class="numberDisagree2"><i class="fa fa-times"></i> <?php if(get_option('disagree'.'_'.$_GET['id']) != '') { echo get_option('disagree'.'_'.$_GET['id']); } else { echo '0'; } ?></strong> <?php if($results->say == '') { echo 'say'; } else { echo stripslashes($results->say); } ?> <span><?php if($results->noText == '') { echo 'Monkeys'; } else { echo stripslashes($results->noText); } ?></span></div>
      </h4>
    </div>
    <iframe src="#"  id="submitIframe" name="submitIframe" style="z-index:-999" frameborder="0"></iframe>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $assets; ?>/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $assets; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $assets; ?>/js/velocity.js"></script>
    <script src="<?php echo $assets; ?>/js/jquery.share.js"></script>
    <script src="<?php echo $assets; ?>/js/jquery.tubular.1.0.js"></script>
    <script src="<?php echo $assets; ?>/js/number.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

         $('.tubular-mute').click(function(e) {
          e.preventDefault();
           if($('.tubular-mute i').hasClass('fa-volume-off')) {
            $('.tubular-mute i').removeClass('fa-volume-off');
            $('.tubular-mute i').addClass('fa-volume-up');
           } else {
            $('.tubular-mute i').removeClass('fa-volume-up');
            $('.tubular-mute i').addClass('fa-volume-off');
           }
      });

         <?php if($results->autoplay != '') { ?>
            $('.tubular-mute i').removeClass('fa-volume-off');
            $('.tubular-mute i').addClass('fa-volume-up');
          <?php } ?>

        // Format Number

        $('.numberAgree2').html('<i class="fa fa-check"></i> '+$.number($('.numberAgree2').text()));
        $('.numberAgree').html('<i class="fa fa-check"></i> '+$.number($('.numberAgree').text()));

        $('.numberDisagree2').html('<i class="fa fa-times"></i> '+$.number($('.numberDisagree2').text()));
        $('.numberDisagree').html('<i class="fa fa-times"></i> '+$.number($('.numberDisagree').text()));

        if($('.mainHeadline').text().length <=  25) {
          $('.mainHeadline').attr('style', 'padding-top: 50px;');
        }
         if($('.mainHeadline').text().length >=  26 && $('.mainHeadline').text().length <=  50) {
          $('.mainHeadline').attr('style', 'padding-top: 30px;');
        }
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
      $('#email').attr('email', $('#aremail').val());

      
         $('#mydiv').share({
          networks: ['facebook','pinterest','googleplus','twitter','linkedin','tumblr','in1','email','stumbleupon','digg']
      });
         <?php if($results->autoplay == '') { ?>
          <?php if($results->startTime == '') { ?>
           $('.row').tubular({videoId: "<?php if($results->video == '') { echo 'xDMP3i36naA'; } else { echo stripslashes($results->video); } ?>", increaseVolumeBy: 100}); 
           <?php } else { ?>
            $('.row').tubular({videoId: "<?php if($results->video == '') { echo 'xDMP3i36naA'; } else { echo stripslashes($results->video); } ?>", increaseVolumeBy: 100, start: <?php echo $results->startTime;  ?>}); 
            <?php } ?>
      <?php } else { ?>
        <?php if($results->startTime == '') { ?>
           $('.row').tubular({videoId: "<?php if($results->video == '') { echo 'xDMP3i36naA'; } else { echo stripslashes($results->video); } ?>", increaseVolumeBy: 100, mute: false}); 
           <?php } else { ?>
            $('.row').tubular({videoId: "<?php if($results->video == '') { echo 'xDMP3i36naA'; } else { echo stripslashes($results->video); } ?>", increaseVolumeBy: 100, mute: false, start: <?php echo $results->startTime;  ?>}); 
            <?php } ?>
      <?php } ?>
     
      $('#tubular-container').css({'opacity':'0'});
      $('#tubular-container').velocity({ opacity: 1 }, { duration: 2000 });
      $('#next').velocity({ opacity: 1 }, { delay: 4500}, { duration: 2000 }, {easing: 'spring'});
      $('#prev').velocity({ opacity: 1 }, { delay: 4500}, { duration: 2000 }, {easing: 'spring'});
        $('div.question').velocity({ opacity: 1 }, { delay: 3500}, { duration: 2000 });
        $('div.videoInfo').velocity({ marginBottom: -80 }, { delay: 3500}, { duration: 2000 });
      $('#click').click(function(e) {
           $.post( "<?php echo $assets; ?>clicks.php?edit=<?php echo $ID; ?>" );
      });
      $('.submitYes').click(function(e) {
      if($('#optinEmail').val() == '') {
          alert('Add Your Email');
        }
        if($('#optinEmail').val() != '') {
          $('#submitNo').submit();
      $('div.yes').hide();
        $('div.no').hide();$('div.yes').velocity({ opacity: 0, marginTop: -1400 }, { duration: 1 });
      $('div.no').velocity({ opacity: 0, marginTop: -1400 }, { duration: 1 });
          $('div.thanks').velocity({ opacity: 1 }, {delay: 200}, { duration: 1000 });
           $.post( "<?php echo $assets; ?>leads.php?edit=<?php echo $ID; ?>" );
        }
      });
      $('.submitNo').click(function(e) {
     
        if($('#optinEmail').val() == '') {
          alert('Add Your Email');
        }
        if($('#optinEmail').val() != '') {
          $('#submitNo').submit();
      $('div.yes').hide();
        $('div.no').hide();$('div.yes').velocity({ opacity: 0, marginTop: -1400 }, { duration: 1 });
      $('div.no').velocity({ opacity: 0, marginTop: -1400 }, { duration: 1 });
          $('div.thanks').velocity({ opacity: 1 }, {delay: 200}, { duration: 1000 });
           $.post( "<?php echo $assets; ?>leads.php?edit=<?php echo $ID; ?>" );
        }
      
      });
      if (navigator.appVersion.indexOf("Chrome/") != -1) {
      // modify button 
      $('div.container').velocity({
      borderBottomWidth: ['45px', 'easeInSine' ],
      width: '600px',
      height: '310px',
      opacity: 1,
      marginTop:-270
      },{ delay: 2500},  {
      easing: 'easeInSine'
      });
            $('div.videoInfo').velocity({
            marginBottom:-80
            }, {
            easing: 'easeInSine'
            }, { duration: 1});
                      $('div.container').velocity({
            marginTop:100
            }, {
            easing: 'easeInSine'
            }, { duration: 1});
      }
      else {
      $('div.container').velocity({
      borderBottomWidth: ['45px', 'easeInSine' ],
      width: '600px',
      height: '310px',
      opacity: 1
      },{ delay: 2500},  {
      easing: 'easeInSine'
      });
      }
        $('.watch').click(function(e) {
          e.preventDefault();

          $('#footerNext').velocity({ opacity: 1 }, { delay: 500}, { duration: 2000 }, {easing: 'spring'});
      $('#footerPrev').velocity({ opacity: 1 }, { delay: 500}, { duration: 2000 }, {easing: 'spring'});

          if($(this).hasClass('watchSelected')) {
            $(this).removeClass('watchSelected');
            $(this).html('<i class="fa fa-toggle-up"></i> <?php if($results->watch == "") { echo "I want to watch the video."; } else { echo stripslashes($results->watch); } ?>');
            $('div.container').velocity({
            marginTop:100
            }, {
            easing: 'spring'
            }, { duration: 2000});
             $('div.videoInfo').velocity({
            marginBottom:-80
            }, {
            easing: 'spring'
            }, { duration: 2000});
          }
          else {
            $(this).addClass('watchSelected');
            $(this).html('<i class="fa fa-question-circle"></i> <?php if($results->surveyText == "") { echo "Answer the survey question by clicking here."; } else { echo stripslashes($results->surveyText); } ?>');
            $('div.container').velocity({
            marginTop:-270
            }, {
            easing: 'spring'
            }, { duration: 2000});
            $('div.videoInfo').velocity({
            marginBottom:-10
            }, {
            easing: 'spring'
            }, { duration: 2000});
          }
        });
        $('.sayYes').click(function(e) {
          e.preventDefault();
          $('div.question').velocity({ opacity: 0, marginTop: -1400 }, { duration: 1 });
          <?php if($results->showLeads == '') { ?>
              $('div.yes').hide();
        $('div.no').hide();
          $('div.thanks').velocity({ opacity: 1 },  { duration: 1000 });
           <?php } else { ?> 
            $('div.yes').velocity({ opacity: 1 }, {delay: 200}, { duration: 1000 });
            <?php  } ?>
          $.post( "<?php echo $assets; ?>agree.php?edit=<?php echo $ID; ?>" );
        });
        $('.sayNo').click(function(e) {
          e.preventDefault();
          $('.yes').hide();
          $('div.question').velocity({ opacity: 0, marginTop: -1400 }, { duration: 1 });
          <?php if($results->showLeads == '') { ?>
              $('div.yes').hide();
        $('div.no').hide();
          $('div.thanks').velocity({ opacity: 1 },  { duration: 1000 });
           <?php } else { ?> 
            $('div.no').velocity({ opacity: 1 }, {delay: 200}, { duration: 1000 });
            <?php  } ?>
          $.post( "<?php echo $assets; ?>disagree.php?edit=<?php echo $ID; ?>" );
        });
      });
    </script>
  </body>
</html>