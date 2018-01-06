<?php

define('WP_USE_THEMES', true);
require('../../../wp-blog-header.php');
locallander_addnewlead($_POST['name'], $_POST['email'], $_POST['pageID'], $_POST['question']);

?>