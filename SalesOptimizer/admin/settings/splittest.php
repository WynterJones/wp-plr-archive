<div class='tab mainTab tab5' style="display: none;">
	<div style="display: block; position: relative;width: 100%; clear: both; ">
		<?php include('help.php'); ?>
		<h2 style="opacity: .8;">A/B Split Test For Higher Conversions</h2><br clear="all"><br>
		<img src="https://cdn2.iconfinder.com/data/icons/Rounded_32px/32/pie_chart_graph.png" style="float: left; margin-right: 10px; margin-top: 0; margin-left: 5px">
		<p  style="opacity: .8;">Show another shortcode randomly and compare the two results. Try cloning your shortcode and changing the headline and <strong>see what converts the best!</strong></p>
	</div>
	<?php salesoptimizer_switch('splitTestShow', $_GET['edit']); ?>
    <div class="input">
		<strong>Split Test with <small>Choose A/B split test.</small></strong>
		<select name="splitTest" id="">
			<?php
				global $post;
				global $wpdb;
				$getPage = $wpdb->prefix . "salesoptimizer";
				$templates = $wpdb->get_results("SELECT * FROM $getPage ORDER BY id DESC" ,ARRAY_A);
				$tpl = get_post_meta($post->ID,'_template',true);
				$checkNumber = 0;
				foreach($templates as $template){}		
				$isSplitTest = get_option('splitTest'.'_'.$_GET['edit']);
			?>
			<?php foreach($templates as $template) { ?>
				<option value="<?php echo $template['id']; ?>" <?php if($isSplitTest == $template['id']){ echo 'selected'; } ?>><?php echo $template['name']; ?></option>
			<?php } ?>
		</select>
	</div>
</div>