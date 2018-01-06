<?php 
	global $post;
	global $wpdb;
	$getPage = $wpdb->prefix . "salesoptimizer";
	$getID = $_GET['edit'];
	$editBook = $wpdb->get_results("SELECT * FROM $getPage WHERE id = $getID" , ARRAY_A);
	$tpl = get_post_meta($post->ID,'_template',true);
	foreach($editBook as $template){} 
	include('settings/stat.php');
?>
<br><br>
<div id="adminSettings">
	<div class="header">
		<img src="<?php echo plugin_dir_url( $file ); ?>/SalesOptimizer/include/logo.png" style="display: block; margin: 0 auto">
		<br />
	</div>
	<div class="item" id="settings">
		<?php include('settings/header.php'); ?>
		<form method="post" id="updateAndSave" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
			<input type="hidden" name="action" value="update" />
			<?php include('settings/nav.php'); ?>
			<?php include('settings/content.php'); ?>
			<?php include('settings/design.php'); ?>
			<?php include('settings/splittest.php'); ?>
			<?php include('settings/countdown.php'); ?>
			<?php include('settings/leads.php'); ?>
			<!-- <input type="submit" value="Click to Save Settings" id="saveButton" class="button-primary button" style="display: block; font-size: 21px;height: 60px; width: 100%; float: none"> -->
		</form>
	</div>
	<?php include('settings/preview.php'); ?>
</div>
<?php include('settings/footer.php'); ?>