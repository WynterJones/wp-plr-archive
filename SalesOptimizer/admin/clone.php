<?php 
	if ( 'update' == $_REQUEST['action'] ) {
		echo $cloneID; 
		function update($name) {
			update_option($name.'_'.$_REQUEST['newId'],stripslashes($_REQUEST[$name])); 
		}
		update('title');
		update('splitTest');
		update('theme');
		update('panel');
		update('headline');
		update('addtocart');
		update('handwritten');
		update('buyLink');
		update('panelDesign');
		update('buttonDesign');
		update('boxshadow');
		update('button');

		?>
			<script type="text/javascript">
				<!--
				window.location = "admin.php?page=salesoptimizer&edit=<?php echo $_REQUEST['newId']; ?>";
				//-->
			</script>
		<?php
	}
	global $post;
	global $wpdb;
	$getPage = $wpdb->prefix . "salesoptimizer";
	$getID = $cloneID;
	$editSettings = $wpdb->get_results("SELECT * FROM $getPage WHERE id = $getID" , ARRAY_A);
	$tpl = get_post_meta($post->ID,'_template',true);
	foreach($editSettings as $template){} 
	if(get_option('views'.'_'.$template['id']) == '') {
		update_option('views'.'_'.$template['id'], 0);
	}
	if(get_option('clicks'.'_'.$template['id']) == '') {
		update_option('clicks'.'_'.$template['id'], 0);
	}
	$views = get_option('views'.'_'.$template['id']);
	$clicks = get_option('clicks'.'_'.$template['id']);
	if(get_option('clicks'.'_'.$template['id']) != '0' && get_option('views'.'_'.$template['id']) != '0') {
		$convRate = 100 * intval($clicks) / intval($views);
		$convRateNumber = substr($convRate, 0, 2);
		$convRate = substr($convRate, 0, 2) . '%';
		$convRate = str_replace('.', '', $convRate);
	}
	else {
		$convRate = 0;
	}
	function display($name, $placeholder, $title, $help) {
		?>
			<div class="input">
				<strong><?php echo $title; ?> <small><?php echo $help; ?></small></strong>
				<input type="text" name="<?php echo $name; ?>" placeholder="<?php echo $placeholder; ?>" value="<?php echo get_option($name.'_'.$_GET['clone']); ?>" />
			</div>
		<?php
	}
	function option($name, $id) {
		?>
			<option value="<?php echo $name; ?>" <?php if($id == $name){ echo 'selected'; } ?>><?php echo $name; ?></option>
		<?php
	}
?>
<div id="adminSettings">
	<div class="header">
		<img src="<?php echo plugin_dir_url( $file ); ?>/SalesOptimizer/include/logo.png" style="display: block; margin: 0 auto">
		<br />
	</div>
	<div class="item" id="settings">
		<form method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="date" value="<?php echo date("F j, Y"); ?>" />
			<h2>Choose Shortcode  Replace</h2><br clear="all">
			<p>This will replace the content only for chosen shortcode.</p>
			<select name="newId" id="newId">
				<?php
					global $post;
					global $wpdb;
					$getPage = $wpdb->prefix . "salesoptimizer";
					$templates = $wpdb->get_results("SELECT * FROM $getPage ORDER BY id DESC" ,ARRAY_A);
					$tpl = get_post_meta($post->ID,'_template',true);
					$checkNumber = 0;
					foreach($templates as $template){}		
				?>
				<?php foreach($templates as $template) { ?>
					<option value="<?php echo $template['id']; ?>"><?php echo $template['name']; ?></option>
				<?php } ?>
			</select>
			<br><br>
			<div class="cloned" style="display: none">
				<ul class='tabs'>
				    <li><a href='#tab1'>Main Content</a></li>
				    <li><a href='#tab2'>Design Options</a></li>
				    <li><a href='#tab3'>A/B Testing</a></li>
				</ul>
				<div class="tab" id='tab1'>
					<?php display(
						'title', // Variable Name
						'Add Your Title', // Placeholder
						'Panel Headline', // Title
						'Displays at the top in bold.' // Help Text
					); ?>
					<?php display(
						'headline', 
						'You Need to Grab This Product Today', 
						'Main Headline', 
						'Very bold main headline.'
					); ?>
					<?php display(
						'button', 
						'Click to Buy Now', 
						'Button Text', 
						'Call to Action.'
					); ?>
					<?php display(
						'buyLink', 
						'URL to Your Payment Processor', 
						'Payment Link', 
						'URL to buy now.'
					); ?>
					<?php display(
						'addtocart', 
						'Add to Cart', 
						'Add to Cart', 
						'Plain link text.'
					); ?>
					<?php display(
						'handwritten', 
						'** 100% Money Back Guranteed - You WILL Love This **', 
						'Handwritten Text', 
						'At the bottom.'
					); ?>
				</div>
				<div class="tab" id='tab2'>
				    <div class="input">
				    	<strong>Bootstrap Themes <small>Powered by BootWatch.com</small></strong>
				    	<select name="theme">
				    		<?php $theme = get_option('theme'.'_'.$_GET['clone']); ?>
				    		<?php option('default', $theme); ?>
				    		<?php option('darkly', $theme); ?>
				    		<?php option('journal', $theme); ?>
				    		<?php option('cerulean', $theme); ?>
				    		<?php option('cosmo', $theme); ?>
				    		<?php option('flatly', $theme); ?>
				    		<?php option('readable', $theme); ?>
				    		<?php option('simplex', $theme); ?>
				    		<?php option('spacelab', $theme); ?>
				    		<?php option('united', $theme); ?>
				    		<?php option('yeti', $theme); ?>
				    	</select>
				    </div>
				    <div class="input">
				    	<strong>Panel Header On or Off <small>Choose to show panel header.</small></strong>
				    	<select name="panel">
				    		<?php $panel = get_option('panel'.'_'.$_GET['clone']); ?>
				    		<?php option('on', $panel); ?>
				    		<?php option('off', $panel); ?>
				    	</select>
				    </div>
				    <div class="input">
				    	<strong>Panel Style/Color <small>Color with meaning.</small></strong>
				    	<select name="panelDesign">
				    		<?php $panelDesign = get_option('panelDesign'.'_'.$_GET['clone']); ?>
				    		<?php option('default', $panelDesign); ?>
				    		<?php option('warning', $panelDesign); ?>
				    		<?php option('success', $panelDesign); ?>
				    		<?php option('info', $panelDesign); ?>
				    		<?php option('primary', $panelDesign); ?>
				    		<?php option('danger', $panelDesign); ?>
				    	</select>
				    </div>
				    <div class="input">
				    	<strong>Button Style/Color <small>Color with meaning.</small></strong>
				    	<select name="buttonDesign">
				    		<?php $buttonDesign = get_option('buttonDesign'.'_'.$_GET['clone']); ?>
				    		<?php option('default', $buttonDesign); ?>
				    		<?php option('warning', $buttonDesign); ?>
				    		<?php option('success', $buttonDesign); ?>
				    		<?php option('info', $buttonDesign); ?>
				    		<?php option('primary', $buttonDesign); ?>
				    		<?php option('danger', $buttonDesign); ?>
				    	</select>
				    </div>
				    <div class="input">
				    	<strong>Box Shadow <small>The drop shadow effect.</small></strong>
				    	<select name="boxshadow">
				    		<?php $boxshadow = get_option('boxshadow'.'_'.$_GET['clone']); ?>
				    		<?php option('none', $boxshadow); ?>
				    		<?php option('effect1', $boxshadow); ?>
				    		<?php option('effect2', $boxshadow); ?>
				    		<?php option('effect3', $boxshadow); ?>
				    		<?php option('effect4', $boxshadow); ?>
				    		<?php option('effect5', $boxshadow); ?>
				    		<?php option('effect6', $boxshadow); ?>
				    		<?php option('effect7', $boxshadow); ?>
				    	</select>
				    </div>
				</div>
				<div class="tab" id='tab3'>
				    <div class="input">
						<strong>Split Test with <small>Choose A/B split test.</small></strong>
						<select name="splitTest" id="">
							<option value="none" <?php if($isSplitTest == 'none'){ echo 'selected'; } ?>>Do not split test.</option>
							<?php
								global $post;
								global $wpdb;
								$getPage = $wpdb->prefix . "salesoptimizer";
								$templates = $wpdb->get_results("SELECT * FROM $getPage ORDER BY id DESC" ,ARRAY_A);
								$tpl = get_post_meta($post->ID,'_template',true);
								$checkNumber = 0;
								foreach($templates as $template){}		
								$isSplitTest = get_option('splitTest'.'_'.$_GET['clone']);
							?>
							<?php foreach($templates as $template) { ?>
								<option value="<?php echo $template['id']; ?>" <?php if($isSplitTest == $template['id']){ echo 'selected'; } ?>><?php echo $template['name']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<input type="submit" value="Clone Shortcode" class="button-primary button" style="display: block; font-size: 21px;height: 60px; width: 100%; float: none">
		</form>
	</div>
	<div id="preview" style="display: none">
		<br>
		<h3 style="margin: 0;"><a href="#" id="previewClose" class="button-primary button" style="display: block; margin: 0 auto; float: none; width: 200px; text-align: center;">Back to Settings</a></h3>
		<script>function resizeIframe(obj) {obj.style.height = obj.contentWindow.document.body.scrollHeight  + 60 + 'px' ;}</script>
		<iframe scrolling='no' ALLOWTRANSPARENCY='true' id="previewFrame"  frameborder='0' style='width: 100%; height: 550px' src='#' onload='javascript:resizeIframe(this);'></iframe>
	</div>
</div>