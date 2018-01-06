<?php
/*
Plugin Name: FB Webinar
Plugin URI: Your_URL
Description: Create and manage your own FB webinar landing pages...
Version: 1.0
Author: Your Name
Author URI: http://yourwebsite.com
*/

// Activation Here:
register_activation_hook(__FILE__, 'fbwebinarpro_installer');

include("inc/activation.php");

// AJAX Callbacks:
include("inc/callback.php");

// Menu Here:
include("inc/menu.php");

// Dashboard:
include("UI/index.php");

// Link Up Webinar Page With WP Page
include("inc/page_link.php");

?>