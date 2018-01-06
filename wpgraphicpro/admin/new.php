<?php
  define('WP_USE_THEMES', false);
  require_once('../../../../wp-blog-header.php');
  $stack = [];
  foreach($_POST as $key => $val) {
    array_push($stack, 'embedfire_'.$key, $val);
    update_option('embedfire_'.$key, $stack); 
  }
 ?>
