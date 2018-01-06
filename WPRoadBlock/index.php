<?php 

	/*
		Plugin Name: WP Road Block
		Description: Stop new users with a splash screen with any URL you would like to display. Use cookies to show only to new users.
		Version: 1.0
	*/

	  function wproadblock_adminOptions() {
	     add_menu_page('RoadBlock Settings', 'RoadBlock', 'manage_options', 'wproadblock', 'wproadblock_loadSettings', 'https://cdn2.iconfinder.com/data/icons/crystalproject/16x16/actions/lock.png');
	  }
	  add_action('admin_menu', 'wproadblock_adminOptions');
	  function wproadblock_loadSettings() { 
	    include('admin/jquery.php');
	    include('admin/css.php');
	    include('admin/settings.php');
	  }

	  function wproadblockLoads() {
		  if (get_option('splashURL_roadblock') != "") {
		    ?>
		    	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
		    	<script src='<?php echo plugin_dir_url(); ?>/WPRoadBlock/admin/waypoints.min.js'></script>
			<script>
				var $j = jQuery.noConflict();

				$j(document).ready(function() {
					var height = $j(window).height();
					$j('#wproadBlockIframe').height(height);
					// localStorage.setItem('showedRoadBlock','shown');
					// if (localStorage.getItem('showedRoadBlock') == 'shown') {
					// 	$j('#wproadBlockIframe').hide();
					// }

					$j('.thing').waypoint(function(direction) {
					  $j('#wproadBlockIframe').fadeOut();
					});
				});
			</script>
			<iframe src="<?php echo get_option('splashURL_roadblock'); ?>" width="100%" height="100%" id="wproadBlockIframe" marginheight="0" frameborder="0"></iframe>
			<div class="thing"></div>
		<?php
		}
	}

	add_action('wp_head', 'wproadblockLoads');

 ?>