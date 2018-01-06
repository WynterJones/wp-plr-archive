<?php
/*
Plugin Name: FB Connectr Pro
Plugin URI: Your_URL
Description: Easily Create Facebook Connect Buttons To Put You On Websites. Collect Leads Easily With Facebook Connect!
Version: 1.0
Author: Your Name
Author URI: http://yourwebsite.com
*/

// Activation Here:
register_activation_hook(__FILE__, 'fbcrx_install');
include("inc/activation.php");

// Menu Here:
include("inc/menu.php");

// Dashboard:
include("inc/dashboard.php");

?>