<?php
/*
Plugin Name: Affiliate Press
Plugin URI: http://wpaffiliatepress.com/
Description: Create high-converting deal landing pages and shortcodes. Customize your page to make it unique with a variety of features. 
Version: 1.4
Author: Go.rrilla Marketing
Author URI: http://go.rrilla.com/
*/

GLOBAL $affiliatepressx_version;
// Activation Here:
register_activation_hook(__FILE__, 'affiliatepressx_installer');
include("inc/activation.php");

// AJAX Callbacks:
include("inc/callback.php");

// Image Uploader:
include("inc/image.php");

// Menu Here:
include("inc/menu.php");

// Dashboard:
include("UI/index.php");

// Page Link
include("inc/page_link.php");

function affiliatepressx_shortcode($atts, $content = null) {
   extract(shortcode_atts(array('id' => '1'), $atts));
   return '<script>function sizeFrame() {
var F = document.getElementById("affiliatepressx_shortcode");
if(F.contentDocument) {
F.height = F.contentDocument.documentElement.scrollHeight+10; //FF 3.0.11, Opera 9.63, and Chrome
} else {



F.height = F.contentWindow.document.body.scrollHeight+10; //IE6, IE7 and Chrome

}

}

window.onload=sizeFrame; </script><iframe src="'.plugins_url().'/affiliatepressx/inc/lp/shortcode.php?id='.$id.'" scrolling="no" style="margin: 10px auto; display: block; box-shadow: 0 0 5px #333;width: 470px;  border: none; scroll: none;" id="affiliatepressx_shortcode"></iframe>';
}
add_shortcode('affiliatepressx', 'affiliatepressx_shortcode');


include('wpupdates.php');
new WPUpdatesPluginUpdater( 'http://wp-updates.com/api/1/plugin', 201, plugin_basename(__FILE__) );



function display_affiliatepressx_popup() { ?>

	<?php if (get_option('affiliatepressx_popupID') != '' ) {  ?>

		<?php $popupID = get_option('affiliatepressx_popupID'); ?>

		<iframe src="<?php echo plugins_url(); ?>/affiliatepressx/inc/lp/popup.php?id=<?php echo $popupID; ?>" style="width: 100%; height: 100%;z-index: 2147483647  !important; position: fixed; top: 0; left: 0" scrolling="no" frameborder="no" id="popup" ></iframe>

	<?php }
}
	
	add_action('wp_head', 'display_affiliatepressx_popup');



?>