<?php
/*
    Plugin Name: Blah
 * Description: <strong>Create engaging social landing pages. Using video backgrounds, ask a question, collect leads and create HIGHLY shareable landing pages. </strong>
 * Version: 1.2

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



?>