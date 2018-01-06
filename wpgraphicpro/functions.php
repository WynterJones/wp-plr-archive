<?php
/*
   Plugin Name: WP Graphic Pro
 * Plugin URI: http://codecore.io/
 * Description: Create Graphics in Your Wordpress Blog
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://codecore.io/

*/


function WPGraphicPro_settings() {
  add_menu_page('Connect to WPGraphicPro', 'WPGraphicPro', 'manage_options', 'WPGraphicPro-settings', 'settingsforWPGraphicPro', '../wp-content/plugins/wpgraphicpro/inc/images/favicon.png');
  }
  add_action('admin_menu', 'WPGraphicPro_settings');
  function settingsforWPGraphicPro() {
    include('admin/jquery.php');
    include('admin/css.php');
    include('admin/settings.php');
  }


?>