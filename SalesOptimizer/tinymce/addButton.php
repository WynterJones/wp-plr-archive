<?php 
	add_action('admin_head', 'salesoptimizer_button');
	add_action('admin_head', 'salesoptimizer_shortcode_button');
	function salesoptimizer_button(){
	global $post;
	global $wpdb;
	$getPage = $wpdb->prefix . "salesoptimizer";
	$templates = $wpdb->get_results("SELECT * FROM $getPage ORDER BY id DESC" ,ARRAY_A);		
	?>
		<script type="text/javascript">
			var my_shortcodes = [<?php foreach($templates as $template) { ?>'[salesoptimizer name="<?php echo $template['name']; ?>" id="<?php echo $template['id']; ?>"]',<?php } ?>];
		</script>
	<?php
	}
	function salesoptimizer_shortcode_button() {
		add_filter('mce_external_plugins', 'my_add_salesoptimizer_plugin');
		add_filter('mce_buttons', 'my_add_salesoptimizer_button');
	}
	function my_add_salesoptimizer_plugin($plugin_array) {
		$plugin_array['salesoptimizer'] = plugins_url( 'editor.js',__FILE__ );
		return $plugin_array;
	}
	function my_add_salesoptimizer_button($buttons) {
		array_push($buttons, 'salesoptimizer');
		return $buttons;
	}
?>