<?php

  /*
      Plugin Name: WP Social Boost
   * Description: Boost The Social Power of Your Wordpress Blog Posts
   * Version: 1.0
   * Author: Social Boost Plugin
  */

  function wpsocialboost($atts, $content = null) {
      extract(shortcode_atts(array(
        "id" => '#'
      ), $atts));
      
         $url = get_permalink();
      return "<script >function resizeIframe(obj) {obj.style.height = obj.contentWindow.document.body.scrollHeight  + 'px' ;}</script><iframe scrolling='no' ALLOWTRANSPARENCY='true'  id='wpsocialOptinBox'  frameborder='0' style='width: 100%; height: 290px;  margin: 0 auto; margin-bottom:10px;display: block;  position: relative' src='".plugin_dir_url( __FILE__ )."socialoptin/index.php?url=$url' onload='javascript:resizeIframe(this);'></iframe>"; 
    }
    add_shortcode("wpsocialboost", "wpsocialboost");

    function wpsocialboost_scroll($atts, $content = null) {
      extract(shortcode_atts(array(
        "id" => '#'
      ), $atts));
     
      return "<iframe scrolling='no' ALLOWTRANSPARENCY='true'  id='wpsocialcornerPopup'  scrolling='no' frameborder='0' style='width: 340px; height: 180px;  position: fixed; bottom: -253px; right: -2px' src='".plugin_dir_url( __FILE__ )."socialCorner/index.php'></iframe>
      <script src='http://code.jquery.com/jquery-latest.min.js'></script>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
$(window).scroll(function() {
  var checkBottom = $('#wpsocialcornerPopup').css('bottom');
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
       if (checkBottom == '-55px') {
        $('#wpsocialcornerPopup').animate({bottom: '-253'}, 1000);
       }
       else {
        $('#wpsocialcornerPopup').animate({bottom: '-55'}, 1000);
       }
   } 

   if (checkBottom == '-55px') {
          if($(window).scrollTop() + $(window).height() != $(document).height()) {
              $('#wpsocialcornerPopup').animate({bottom: '-253'}, 1000);
          }
       }
   
});
});
</script>"; 
    }
    add_shortcode("wpsocialboost_scroll", "wpsocialboost_scroll");

    function wpsocialboost_popup($atts, $content = null) {
      extract(shortcode_atts(array(
        "id" => '#'
      ), $atts));
      
        $overlay = get_option('socialboost_overlayColor'); 
        if ($overlay == "") { $overlay = "#FF6402"; }
      
      return "<div id='wpsocialOverlay' style='background: $overlay; opacity: .8;z-index: 99999;position: fixed;top: 0; left: 0;' ></div><iframe scrolling='no' ALLOWTRANSPARENCY='true'  id='wpsocialpopUp'  scrolling='no' frameborder='0' style='width: 0; background: none !important;height: 0; position: fixed;top: 0; left: 0;z-index: 99999;' src='".plugin_dir_url( __FILE__ )."socialPopup/index.php'></iframe>
      <script src='http://code.jquery.com/jquery-latest.min.js'></script>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {

  $('body').mouseleave(function() {
    
    $('#wpsocialpopUp').width($(window).width());
$('#wpsocialpopUp').height($(window).height());

$('#wpsocialOverlay').width($(window).width());
$('#wpsocialOverlay').height($(window).height());
  });

});
</script>"; 
    }
    add_shortcode("wpsocialboost_popup", "wpsocialboost_popup");

    function wpsocialboost_video($atts, $content = null) {
      extract(shortcode_atts(array(
        "youtube" => '',
        "vimeo" => ''
      ), $atts));

        if ($youtube != "") { $video = "http://www.youtube.com/embed/".$youtube; }
        if ($vimeo != "") { $video = "http://player.vimeo.com/video/".$vimeo; }
      $text = get_option('socialboost_videoText');
      $url = get_option('socialboost_facebookURL');
      return "<style>
.videoWrapperSocialBoost {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  padding-top: 25px;
  height: 0;
}
.videoWrapperSocialBoost iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.videoWrapperSocialBoost_side {
  clear: both;
  width: 20%;
  float: left;
  font-size: 13px;
  color: #777;
  padding-top: 15px;
}
..videoWrapperSocialBoost_side span { display: block; padding-left: 10px;}
.videoWrapperSocialBoost_facebook {
  width: 80%;
  float: left;
  padding-top: 15px;
}
</style>
<div class='videoWrapperSocialBoost'>
<iframe src='$video' frameborder='0' allowfullscreen></iframe><br clear='both'>
</div>
<div class='videoWrapperSocialBoost_wrapper'>
<div class='videoWrapperSocialBoost_side'><span>$text</span></div>
<div class='videoWrapperSocialBoost_facebook'>
<iframe src='//www.facebook.com/plugins/like.php?href=$url&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80' scrolling='no' frameborder='0' style='border:none; overflow:hidden; height:80px;width: 100%; margin-bottom: -10px;' allowTransparency='true'></iframe>
</div>
<br clear='both'>
</div>"; 
    }
    add_shortcode("wpsocialboost_video", "wpsocialboost_video");



    // Settings
    function wpsocialboost_settings() {
       add_menu_page('Edit Social Boost Settings', 'Social Boost', 'manage_options', 'socialboost-settings', 'settingsforWPsocialboost', '../wp-content/plugins/wpsocialboost/favicon.png');
    }
    add_action('admin_menu', 'wpsocialboost_settings');
    function settingsforWPsocialboost() { 
      include('admin/jquery.php');
      include('admin/css.php');
      include('admin/settings.php');
    }

?>