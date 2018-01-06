<div class='tab mainTab tab2' style="display: none">
	<div style="display: block; position: relative;width: 100%; clear: both; ">
		<?php include('help.php'); ?>
		<h2 style="opacity: .8;">Customize Design Settings</h2><br clear="all"><br>
		<img src="https://cdn1.iconfinder.com/data/icons/Koloria-Icon-Set/28/Application_Design.png" style="float: left; margin-right: 10px; margin-top: 0; margin-left: 5px">
		<p  style="opacity: .8;">Change your design using multiple options. Choose a Twitter Bootstrap theme for over all change and tweak the finer details. <strong>Save and hit Preview for a quick look!</strong></p>
	</div>
	<br>
	<ul class='innerTabs designTabs'>
	    <li><a href='#' tab="designTab1" type="designTab" class="tabLink active">Bootstrap Themes</a></li>
	    <li><a href='#' tab="designTab2" type="designTab" class="tabLink">Box Shadow</a></li>
	    <li><a href='#' tab="designTab3" type="designTab" class="tabLink">Header Panel</a></li>
	    <li><a href='#' tab="designTab4" type="designTab" class="tabLink">Button Design</a></li>
	</ul>
	<div class='tab designTab designTab1'>
		<!-- Bootstrap Themes -->
		<div style="background: #fff;position: relative">
			<?php 
				$options = array('default', 'lumen', 'darkly', 'cerulean', 'cosmo', 'flatly', 'readable', 'simplex', 'spacelab', 'united', 'yeti', 'slate', 'superhero', 'amelia', 'journal', 'cyborg');
				$values = array('Default Bootstrap Theme', 'Lumen', 'Darkly', 'Cerulean', 'Cosmo', 'Flatly', 'Readable', 'Simplex', 'Spacelab', 'United', 'Yeti', 'Slate', 'Superhero', 'Amelia', 'Journal',  'Cyborg');
				salesoptimizer_selectOption($options, $values, 'Bootstrap Themes', 'Powered by <strong style="display: inline; float: none; color: #777;">Bootswatch</strong>', 'theme', $_GET['edit']); 
			?>
		</div>
		<div id="themePreview" style="margin-top: -100px;">
			<img src="http://bootswatch.com/<?php echo get_option('theme'.'_'.$_GET['edit']); ?>/thumbnail.png" style="width: 100%">
		</div>
	</div>
	<div class='tab designTab designTab2' style="display: none">
		<!-- Box Shadows -->
		<?php 
			$options = array('none', 'effect1', 'effect2', 'effect3', 'effect4', 'effect5', 'effect6', 'effect7');
			salesoptimizer_selectOption($options, $options, 'Box Shadow', 'The drop shadow effect.', 'boxshadow', $_GET['edit']); 
		?>
		<div id="boxshadow" class="<?php echo get_option('boxshadow'.'_'.$_GET['edit']); ?>" style="z-index:888; padding: 0; margin: 0;"><div id="shadowDemo">
			<h4>PREVIEW OF BOX SHADOW</h4>
		</div></div>
	</div>
	<div class='tab designTab designTab3' style="display: none">
		<?php salesoptimizer_switch('panel', $_GET['edit']); ?>
		<?php salesoptimizer_input(
			'title', // Variable Name
			'Add Your Title', // Placeholder
			'Panel Headline', // Title
			'Displays at the top in bold.', // Help Text
			$_GET['edit']
		); ?>
		<!-- Panel Style -->
		<?php 
			$options = array('default', 'warning', 'success', 'info', 'primary', 'danger');
			salesoptimizer_selectOption($options, $options, 'Panel Style/Color', 'Color with meaning.', 'panelDesign', $_GET['edit']); 
		?>
	</div>
	<div class='tab designTab designTab4' style="display: none">
		<!-- CTA Button Style -->
		<?php 
			$options =  array('green', 'blue', 'grey', 'orange');
			salesoptimizer_selectOption($options, $options, 'Button Style/Color', 'Color with meaning.', 'buttonDesign', $_GET['edit']); 
		?>
	</div>
</div>