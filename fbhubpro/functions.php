<?php
/*
Plugin Name: FB Local Hub
Plugin URI: Your_URL
Description: Create local hub pages for your offline clients...
Version: 1.0
Author: Your Name
Author URI: http://yourwebsite.com
*/

// Activation Here:
register_activation_hook(__FILE__, 'fbhubpro_installer');

include("inc/activation.php");

// AJAX Callbacks:
include("inc/callback.php");

// Menu Here:
include("inc/menu.php");

// Dashboard:
include("UI/index.php");

?>