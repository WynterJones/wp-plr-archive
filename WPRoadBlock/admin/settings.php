<?php 

	    define('WP_USE_THEMES', true);
	    require ('../../../../wp-load.php');
	
 ?>

 <div id="wrap">
 	<h1>WP Road Block</h1>
 	<p>WP Road Block lets you take any web page you have and display it to all new users to your website. You can even use it as a popup for any of your blog posts.</p>
 	<hr>

 	<?php 

				if ( 'update' == $_REQUEST['action'] ) {

					
					update_option('splashURL_roadblock',$_REQUEST['splashURL']); 

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Successfully Updated Road Block</strong></p></div>';
				}

				?>

 	<form method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
 		<input type="hidden" name="action" value="update" />
 		<h3><strong>URL for Full Page Iframe</strong></h3>
	 	<input type="text" placeholder="URL for Your Landing Page or Splash Page" name="splashURL" value="<?php echo get_option('splashURL_roadblock'); ?>">

	 	<input type="submit" class="button-primary" value="Save Popup Settings" style="height: 50px; margin-top: 20px">
 	</form>
 </div>