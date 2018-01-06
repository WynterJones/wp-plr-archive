<?php
/*
Plugin Name: 3D Animated Landing Page
Description: Create STUNNING animated landing pages that will grab ATTENTION from all of the visitors that land on this super creative landing page.
Version: 1.0
*/

// DB VERSION CONTROL:
include("inc/dbcontrl.php");

// Activation Here:
register_activation_hook(__FILE__, 'wp3dpagex_installer');
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