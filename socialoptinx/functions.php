<?php
/*
 Plugin Name: SocialOptin
 * Plugin URI: http://codecore.io/socialoptin-free-wordpress-plugin/
 * Description: Create engaging social landing pages.
 * Version: 1.0
 * Author: Wynter Jones
 * Author URI: http://codecore.io/

*/

// DB VERSION CONTROL:
include("inc/dbcontrl.php");

// Activation Here:
register_activation_hook(__FILE__, 'socialoptinx_installer');
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
include("inc/page_link.php");


// Update Plugin
require_once('wp-updates-plugin.php');
new WPUpdatesPluginUpdater_510( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));

?>