<div class='tab mainTab tab4' style="display: none;">
	<div style="display: block; position: relative;width: 100%; clear: both; ">
		<?php include('help.php'); ?>
		<h2 style="opacity: .8;">Collect Leads &amp; Setup Auto Responder</h2><br clear="all"><br>
		<img src="https://cdn0.iconfinder.com/data/icons/woocons1/Mail.png" style="float: left; margin-right: 10px; margin-top: 0; margin-left: 5px">
		<p  style="opacity: .8;">Generate more leads and add to auto-responder campaign. Paste your HTML form code for your auto-responder. Must include Name and Email form elements.</p>
	</div>
	<?php salesoptimizer_switch('emailShow', $_GET['edit']); ?>
	<div class="input">
		<strong>Auto Responder Code <small>Provided by email provider.</small></strong>
		<textarea name="autoresponder" placeholder="Add your HTML code here." cols="30" rows="10"><?php echo get_option('autoresponder'.'_'.$_GET['edit']); ?></textarea>
	</div>
	<?php salesoptimizer_input(
		'namePlaceholder', 
		'Your Full Name...', 
		'Name Placeholder', 
		'Placeholder for name input.',
		$_GET['edit']
	); ?>
	<?php salesoptimizer_input(
		'emailPlaceholder', 
		'Your Email Address...', 
		'Email Placeholder', 
		'Placeholder for email input.',
		$_GET['edit']
	); ?>
</div>