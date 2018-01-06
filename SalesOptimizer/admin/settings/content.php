<div class='tab mainTab tab1'>
	<div style="display: block; position: relative;width: 100%; clear: both; ">
		<?php include('help.php'); ?>
		<h2 style="opacity: .8;">Edit Main Content Settings</h2><br clear="all"><br>
		<img src="https://cdn0.iconfinder.com/data/icons/random_icons_by_Rskys/32/setting.png" style="float: left; margin-right: 10px; margin-top: 0; margin-left: 5px">
		<p  style="opacity: .8;">Change the text for your headlines, buy now button, add media or replace with your own HTML. When you replace with your own HTML you can add Twitter Bootstrap markup for better results.</p>
		<br>
	</div>
	<ul class='innerTabs contentTabs'>
	    <li><a href='#' tab="contentTab1" type="contentTab" class="tabLink active">Main Settings</a></li>
	    <li><a href='#' tab="contentTab4" type="contentTab" class="tabLink">Buy Button</a></li>
	    <li><a href='#' tab="contentTab2" type="contentTab" class="tabLink">Add Media</a></li>
	    <li><a href='#' tab="contentTab3" type="contentTab" class="tabLink">Replace with HTML</a></li>
	</ul>
	<div class='tab contentTab contentTab1'>
		<?php salesoptimizer_input(
			'headline', 
			'You Need to Grab This Product Today', 
			'Main Headline', 
			'Very bold main headline.',
			$_GET['edit']
		); ?>
		<?php salesoptimizer_input(
			'handwritten', 
			'** 100% Money Back Guranteed - You WILL Love This **', 
			'Handwritten Text', 
			'At the bottom.',
			$_GET['edit']
		); ?>
	</div>
	<div class='tab contentTab contentTab2' style="display: none">
		<?php salesoptimizer_input(
			'addImage', 
			'URL to Product Image', 
			'URL to Product / Offer Image', 
			'Add Call to Action Image.',
			$_GET['edit']
		); ?>
		<?php salesoptimizer_input(
			'addVideo', 
			'HTML for Embed Video Code', 
			'Embed Code for Video', 
			'Paste in HTML for video.',
			$_GET['edit']
		); ?>
	</div>
	<div class='tab contentTab contentTab3' style="display: none">
		<div class="input">
			<strong>Add HTML to Replace <small>ex. WSOPro or JVZoo</small></strong>
			<textarea name="html" placeholder="Add your HTML code here." cols="30" rows="10"><?php echo get_option('html'.'_'.$_GET['edit']); ?></textarea>
		</div>
	</div>
	<div class='tab contentTab contentTab4' style="display: none">
	<?php salesoptimizer_input(
			'button', 
			'Click to Buy Now', 
			'Button Text', 
			'Call to Action.',
			$_GET['edit']
		); ?>
		<?php salesoptimizer_input(
			'buyLink', 
			'URL to Your Payment Processor', 
			'Payment Link', 
			'URL to buy now.',
			$_GET['edit']
		); ?>
		<?php salesoptimizer_input(
			'addtocart', 
			'Add to Cart', 
			'Add to Cart', 
			'Plain link text.',
			$_GET['edit']
		); ?>
		<?php salesoptimizer_input(
			'buyTooltip', 
			'Buy Now Tooltip', 
			'Buy Now Tooltip', 
			'Shows on hover',
			$_GET['edit']
		); ?>
	</div>
</div>