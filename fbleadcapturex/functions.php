<?php
/*
Plugin Name: WP Lead Capture Page
Description: Create simple yet powerful lead capture pages that will collect leads with 3 step system making it quick and simple!
Version: 1.0
*/

// DB VERSION CONTROL:
include("inc/dbcontrl.php");

// Activation Here:
register_activation_hook(__FILE__, 'fbleadcapturex_installer');
include("inc/activation.php");

// AJAX Callbacks:
include("inc/callback.php");

// Image Uploader:
include("inc/image.php");

// Menu Here:
include("inc/menu.php");

// Dashboard:
include("UI/index.php");

// Dashboard:
include("inc/page_link.php");

?>