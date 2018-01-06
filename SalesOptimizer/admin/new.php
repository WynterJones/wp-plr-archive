<br>
<div id="adminSettings">
	<div class="header">
		<img src="<?php echo plugin_dir_url( $file ); ?>/SalesOptimizer/include/logo.png" style="display: block; margin: 20px auto">
	</div>
	<?php include('settings/totalstats.php'); ?>
	<form method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="hidden" name="action" value="new" />
		<input type="hidden" name="date" value="<?php echo date("F j, Y"); ?>" />
		<input type="text" name="name" class="newInput" placeholder="Type New Shortcode Name Here..." />
		<input type="submit" value="Create New Shortcode" class="button-primary button">
	</form>
	<?php 
		if ( 'new' == $_REQUEST['action'] ) {
			salesoptimizer_new(stripslashes($_REQUEST['name']), stripslashes($_REQUEST['date']));
		} else {
			include('settings/delete.php');
		}
	?>
	<?php include('shortcodes.php'); ?>
</div>
<br clear="all" />
<?php include('settings/footer.php'); ?>