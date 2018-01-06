<?php
/*
    Plugin Name: TeeContest
 * Plugin URI: http://teecontest.com
 * Description: Increase the sales your sales for TeeSpring campaign
 * Version: 1.1

*/

// DB VERSION CONTROL:
include("inc/dbcontrl.php");

// Activation Here:
register_activation_hook(__FILE__, 'teecontestx_installer');
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

require_once('wp-updates-plugin.php');
new WPUpdatesPluginUpdater_515( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));

?>