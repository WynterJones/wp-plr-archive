<?php
/*
   Plugin Name: WP Optin Lock
 * Plugin URI: http://codecore.io/
 * Description: Your plugin description made with WP Plugin Framework
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://codecore.io/

*/

// DB VERSION CONTROL:
include("inc/dbcontrl.php");

// Activation Here:
register_activation_hook(__FILE__, 'wpoptinlock_installer');
include("inc/activation.php");

// AJAX Callbacks:
include("inc/callback.php");

// Image Uploader:
include("inc/image.php");

// Menu Here:
include("inc/menu.php");

// Dashboard:
include("UI/index.php");

// Page Link:
//include("inc/page_link.php");


function wpoptinlock_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		"id" => '#'
	), $atts));

	return "<script >function resizeIframe(obj) {obj.style.height = obj.contentWindow.document.body.scrollHeight  + 'px' ;}</script><iframe scrolling='no' ALLOWTRANSPARENCY='true' id='the_iframe_".$atts['id']."'  frameborder='0' style='width: 100%; height: 80px;  margin: 5px auto; display: block;  position: relative' class='wpoptinlock' src='".plugin_dir_url( __FILE__ )."lp/index.php?id=".$atts['id']."&time=".str_replace(' ', '+', $results->date) ."&timezone=".$results->timezone ."' onload='javascript:resizeIframe(this);'></iframe>"; 

}
add_shortcode("wpoptinlock", "wpoptinlock_shortcode");

?>