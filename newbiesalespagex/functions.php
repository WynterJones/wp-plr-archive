<?php

	/*
		Plugin Name: Newbie Sales Page Plugin
		Description: ----.
		Version: 1.0
	*/

	// DB VERSION CONTROL:
	include("inc/dbcontrl.php");

	// Activation Here:
	register_activation_hook(__FILE__, 'newbiesalespagex_installer');
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