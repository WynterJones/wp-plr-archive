<?php
	// Full Featured Example -- Replace with Default.php for a Fresh Start
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	$full_path = get_site_url();
	$assets = $full_path . "/wp-content/plugins/wpsocialboost/socialPopup/";
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
<body style="background: none transparent !important">

<div id="content" style="text-align: center;border: 3px solid #ccc; background: #fff; width: 500px; height: 380px; margin: 0 auto; margin-top: 10px;box-shadow: 0 0 5px #444; margin-bottom: 10px; ">
<span class="close" style="padding: 5px; padding-top: 0">x</span>
  <h3 style="padding: 0 20px; letter-spacing: -1px;font-size: 31px; padding-top: 14px"><strong><?php displayInput('exitHeadline', 'Do You Like This Story? Share it on Facebook'); ?></strong></h3>
     <iframe src="//www.facebook.com/plugins/likebox.php?href=<?php displayInput('facebookPage', ''); ?>&amp;width=450&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:258px;" allowTransparency="true"></iframe>
        
</div>
		
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php echo $assets; ?>/js/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo $assets; ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo $assets; ?>/js/velocity.js"></script>
      <script>
$(window).ready(function() {
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
          
           // Velocity Animation - Learn More Here -> http://dailyjs.com/2014/05/01/velocity/
           $('body').velocity({opacity: "1"}, 1000);

          $('.close').on('click', function() {
            $('#wpsocialpopUp', window.parent.document).fadeOut();
            $('#wpsocialOverlay', window.parent.document).fadeOut();
          });


        });
      </script>
	   
</body>
</html>