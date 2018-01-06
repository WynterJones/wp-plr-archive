<?php 
    /**
     * Plugin Name: Link Tweet
     * Description: Create tweetable content with sweet tooltip popups. Click to tweet any text you want.
     * Version: 2.0
     */

    function wptweeter($atts) {
   extract(shortcode_atts(array(
      'tweet' => '',
      'tooltip' => '',
      'content' => '',
      'theme' => '',
      'position' => '',
      'id' => ''
   ), $atts));
   if ($position == "topMiddle") { 
     $newPosition = 'target: "topMiddle", 
     tooltip: "bottomMiddle"';
   } 
   if ($position == "bottomMiddle") { 
     $newPosition = 'target: "bottomMiddle", 
     tooltip: "topMiddle"';
   } 
   if ($position == "bottomRight") { 
     $newPosition ='target: "bottomRight", 
     tooltip: "topLeft"';
   } 
   if ($position == "bottomLeft") { 
     $newPosition ='target: "bottomLeft", 
     tooltip: "topRight"';
   } 
   if ($position == "topLeft") { 
     $newPosition ='target: "topLeft", 
     tooltip: "bottomRight"';
   } 
   if ($position == "topRight") { 
     $newPosition ='target: "topRight", 
     tooltip: "bottomLeft"';
   } 
return '<a href="#" id="tweetLink'.$id.'">'.stripslashes($content).'</a>    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="'.plugins_url().'/linktweet/assets/js/jquery.tweetAction.js"></script>
<script src="'.plugins_url().'/linktweet/assets/js/qtip.js"></script>
<script>
$(document).ready(function(){
    
  $("#tweetLink'.$id.'").tweetAction({
                  text:       "'.$tweet.'"
              },function(){
                  
                  // When the user closes the pop-up window:

              });

$("#tweetLink'.$id.'").qtip({
   content: "'.stripslashes($tooltip).'",
   show: {
        when: "mouseover",
        solo: true
    },
    hide: {
         when: { event: "unfocus" }
    },
   style: {
        border: {
           width: 2,
           radius: 5
        },
        padding: 10, 
        textAlign: "center",
        tip: true, 
        name: "'.$theme.'"
     },
    position: {
      corner: {
        '. $newPosition .'
      }
   }
});
    
});
        </script>';
}

add_shortcode('linktweet', 'wptweeter');


function linktweetr_register_options_page() {
  add_menu_page('Create New Link Tweet Shortcodes', 'Link Tweet', 'manage_options', 'linktweetr-options', 'linktweetr_options_page', plugins_url().'/linktweet/assets/img/favicon.png');
}
add_action('admin_menu', 'linktweetr_register_options_page');
 
function linktweetr_options_page() {
  ?>

  <?php if($_GET['saved'] == 'true') {



?>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
        <script src="<?php echo plugins_url(); ?>linktweet/assets/js/jquery.tweetAction.js"></script>
        <script src="<?php echo plugins_url(); ?>linktweet/assets/js/qtip.js"></script>
        <script>
          $(document).ready(function(){

              
             


          $("#tweetLink").tweetAction({
                  text:       '<?php echo $_POST["tweetText"]; ?>',
                  url:        '<?php echo $_POST["tweetURL"]; ?>'
              },function(){
                  
                  // When the user closes the pop-up window:

              });

          $("#tweetLink").qtip({
             content: '<?php echo $_POST["tweetTooltip"]; ?>',
             show: {
                  when: 'mouseover',
                  solo: true
              },
              hide: {
                   when: { event: 'unfocus' }
              },
             style: {
                            border: {
                               width: 2,
                               radius: 5
                            },
                            padding: 10, 
                            textAlign: "center",
                            tip: true, 
                            name: '<?php echo $_POST["tweetTheme"]; ?>'
                         },
              position: {
                corner: {
                  <?php if ($_POST['tweetPosition'] == 'topMiddle') { ?>
                     target: "topMiddle",
                     tooltip: "bottomMiddle"
                  <?php } ?>
                  <?php if ($_POST['tweetPosition'] == 'bottomMiddle') { ?>
                     target: "bottomMiddle",
                     tooltip: "topMiddle"
                  <?php } ?>
                  <?php if ($_POST['tweetPosition'] == 'bottomRight') { ?>
                     target: "bottomRight",
                     tooltip: "topLeft"
                  <?php } ?>
                  <?php if ($_POST['tweetPosition'] == 'bottomLeft') { ?>
                     target: "bottomLeft",
                     tooltip: "topRight"
                  <?php } ?>
                  <?php if ($_POST['tweetPosition'] == 'topLeft') { ?>
                     target: "topLeft",
                     tooltip: "bottomRight"
                  <?php } ?>
                  <?php if ($_POST['tweetPosition'] == 'topRight') { ?>
                     target: "topRight",
                     tooltip: "bottomLeft"
                  <?php } ?>
                }
             }
          });
              
          });

        </script>



<div id="previewTweet">

        
       
  <h4>Success! Copy and Paste Your Shortcode</h4>
  <textarea name="yourShortcode" id="yourShortcode" cols="30" rows="10">[linktweet tweet="<?php echo $_POST["tweetText"]; ?>" content="<?php echo stripslashes($_POST["tweetContent"]); ?>" tooltip="<?php echo stripslashes(str_replace('"', "'", $_POST["tweetTooltip"])); ?>" position="<?php echo $_POST["tweetPosition"]; ?>" theme="<?php echo $_POST["tweetTheme"]; ?>" id="<?php echo $_POST["tweetID"]; ?>" ]</textarea>
  <h1>Example of a Blog Post</h1>
  <h3>Posted on December 18th, 1984 - Filed Under: George Orwell</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, voluptate, eius voluptas laboriosam error dolore pariatur nesciunt illo nihil facilis amet dolorem culpa ipsum.</p>
  <p> Eaque, sed a voluptatem dolores error <a href="#" id="tweetLink"><?php echo stripslashes($_POST["tweetContent"]); ?></a> harum perspiciatis dolorum debitis! Rem, explicabo inventore voluptatem culpa sapiente nihil eius dolorum consectetur iste nam?</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, voluptate, eius voluptas laboriosam error dolore pariatur nesciunt illo nihil facilis amet dolorem culpa ipsum. Eaque, sed a voluptatem dolores error harum perspiciatis dolorum debitis! Rem, explicabo inventore voluptatem culpa sapiente nihil eius dolorum consectetur iste nam?</p>
</div>

<?php 

   } ?>
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,900' rel='stylesheet' type='text/css'>

<style>
  #tabs {
    font-family: 'Roboto', sans-serif !important;
      width: 595px;
  }
  #tabs h2 {
    font-weight: bold;
    color: #44686e;
    font-size: 26px;
    letter-spacing: -1px
  }
  #tabs label small {
    font-weight: normal;
  }
  #tabs label {
    font-weight: bold;
    color: #333;
    float: left;
    text-decoration: none;
    font-size: 15px;
    clear: both;
    width: 100%;
    text-transform: capitalize;
  }
  #tabs input[type=checkbox], #tabs input[type=radio] {
    float: left;
    margin: 10px;
    margin-top: 2px;
    margin-left: 0;
  }
  #tabs input[type=text], #tabs textarea, #tabs select {
    padding: 10px !important;
    font-size: 16px !important;
    line-height: 19px;
    height: 40px;
    width: 100% !important;
    margin: 10px 0;
  }
  #tabs textarea {
    height: 100px;
  }
  #previewTweet {
    width: 550px;
    padding: 25px;
    padding-top:0;
    font-size: 15px;
    font-family: 'Roboto', sans-serif !important;
    padding-bottom: 0;
    margin-bottom: -20px;
    position: relative;
  }
    #previewTweet p {
      font-size: 14px;
    } 
    #previewTweet textarea {
      font-size: 13px !important;
      width: 100%;
      height: 120px;
      margin-top: -10px;
      margin-bottom: 20px;
      padding: 10px;
      border: 2px dashed #45A9EF;
    } 
    #previewTweet h3 {
      font-weight: normal;
      color: #777;
      font-size: 16px;
    }
    #previewTweet h4 {
      color: #44686e;
    }
</style>

<div id="tabs" style="margin: 0">
<img src="<?php echo plugins_url(); ?>/linktweet/assets/img/logo.png" style="margin: 20px 0;margin-left: 23px; display: block; width: 460px;">
  <div style="padding-left: 24px; margin-top: 10px;">
    
  <form method="post" action="<?php echo admin_url( 'admin.php?page=linktweetr-options&saved=true' ); ?>"> 

   


    <input type="hidden" value="true" name="saved">
    <?php settings_fields( 'default' ); ?>
      <h2>Create New Shortcode</h2>
      <p style="margin-top: -10px; margin-bottom: 10px; font-size: 12px; color: #555">Use this wizard to generate shortcodes to use in your posts.</p>
<br>
      <label for="">Text to Tweet:</label>
      <textarea name="tweetText" id="tweetText" placeholder="Write what your tweet will say..."><?php echo $_POST["tweetText"]; ?></textarea> <br>

      <label for="">Text to Highlight: <small>HTML is Allowed</small></label>
      <textarea name="tweetContent" id="tweetContent" placeholder="Text for your tweet link..."><?php echo  stripslashes($_POST["tweetContent"]); ?></textarea> <br>

      <label for="">Tooltip Text: <small>HTML is Allowed - max width 220px</small></label>
      <textarea name="tweetTooltip" id="tweetTooltip" placeholder="Write content for tooltip when hovering over link..."><?php echo stripslashes($_POST["tweetTooltip"]); ?></textarea> <br>

      <label for="">Unique ID: <small>Allows for multiple shortcodes on one page.</small></label>
      <input type="text" name="tweetID" id="tweetID" placeholder="1" value="<?php echo  stripslashes($_POST["tweetID"]); ?>">

      <div style="width: 48%; float: left">
        <label for="">Position:</label>
        <select name="tweetPosition" id="tweetPosition">
           <option <?php if($_POST["tweetPosition"] == 'topMiddle') { ?> selected <?php } ?> value="topMiddle">Top Middle</option>
           <option <?php if($_POST["tweetPosition"] == 'topLeft') { ?> selected <?php } ?> value="topLeft">Top Left</option>
           <option <?php if($_POST["tweetPosition"] == 'topRight') { ?> selected <?php } ?> value="topRight">Top Right</option>
           <option <?php if($_POST["tweetPosition"] == 'bottomMiddle') { ?> selected <?php } ?> value="bottomMiddle">Bottom Middle</option>
           <option <?php if($_POST["tweetPosition"] == 'bottomLeft') { ?> selected <?php } ?> value="bottomLeft">Bottom Left</option>
           <option <?php if($_POST["tweetPosition"] == 'bottomRight') { ?> selected <?php } ?> value="bottomRight">Bottom Right</option>
        </select>
      </div>
      <div style="width: 48%; float: right">
        <label for="">Theme:</label>
        <select name="tweetTheme" id="tweetTheme">
          <option <?php if($_POST["tweetTheme"] == 'cream') { ?> selected <?php } ?> value="cream">Cream</option>
          <option <?php if($_POST["tweetTheme"] == 'dark') { ?> selected <?php } ?> value="dark">Dark</option>
          <option <?php if($_POST["tweetTheme"] == 'green') { ?> selected <?php } ?> value="green">Green</option>
          <option <?php if($_POST["tweetTheme"] == 'blue') { ?> selected <?php } ?> value="blue">Blue</option>
          <option <?php if($_POST["tweetTheme"] == 'red') { ?> selected <?php } ?> value="red">Red</option>
          <option <?php if($_POST["tweetTheme"] == 'light') { ?> selected <?php } ?> value="light">Light</option>
        </select>
      </div>
      

  
      <br clear="both">

       
     <input type="submit" value="Create Tweeet Shortcode" style=" font-size: 13px; margin-top: 10px" class="button-primary" />
  </form><br>
  
  </div>
</div>
<?php
}
?>