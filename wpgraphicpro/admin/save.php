<?php
  define('WP_USE_THEMES', false);
  require_once('../../../../wp-blog-header.php');
  foreach($_POST as $key => $val) {
    update_option('embedfire_'.$key, stripcslashes(htmlspecialchars($val))); 
  }
 ?>
