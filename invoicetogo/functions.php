<?php
/*
Plugin Name: Invoice To Go
Description: Create stunning personalized pricing pages for your clients...
Version: 2.0
*/

// Activation Here:
register_activation_hook(__FILE__, 'oppro_installer');

include("inc/activation.php");

// AJAX Callbacks:
include("inc/callback.php");

// Menu Here:
include("inc/menu.php");

// Dashboard:
include("UI/index.php");

// Link Up Webinar Page With WP Page
include("inc/page_link.php");

function ddPlay($content, $placeholder) {
	if ($content == "") {
		echo $placeholder;
	}
	else {
		echo stripslashes(html_entity_decode($content));
	}
}

?>