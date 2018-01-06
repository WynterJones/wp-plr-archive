<?php
/*
Plugin Name: FB Survey Pro
Plugin URI: Your_URL
Description: Create and manage your own Facebook timeline incentive survey pages!
Version: 1.0
Author: Your Name
Author URI: http://yourwebsite.com
*/

// Activation Here:
register_activation_hook(__FILE__, 'fbsurveypro_installer');

include("inc/activation.php");

// AJAX Callbacks:
include("inc/callback.php");

// Menu Here:
include("inc/menu.php");

// Dashboard:
include("UI/index.php");

?>