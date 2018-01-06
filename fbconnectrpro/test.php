<?php 

	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../wp-blog-header.php');

?>

<script src='<?php echo site_url() ?>/wp-content/plugins/fbconnectrpro/inc/fbtn.php?id=<?php echo $_GET['id']; ?>'></script>