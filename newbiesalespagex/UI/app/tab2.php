<div class="tabber" id="tab2" style="display: none;">

	<div class="titleBar">
		<?php $full_path = get_site_url(); $assets = $full_path . "/wp-content/plugins/newbiesalespagex/lp/"; ?>
		<a target="_blank" href="<?php  echo $assets . 'tmp-1' ?>" class="grey-btn btn" style="float: right; color: #000; margin-top: 20px; text-decoration: none; margin-right: -18px">
			<span style="float: left;">Open Page Editor </span>
			<img src="https://cdn2.iconfinder.com/data/icons/ledicons/application_edit.png" style="margin-left: 10px; padding-top: 2px; float: left;">
		</a>
		<h2><strong>Header Slider</strong></h2>
		<p>Customize the top sliding image showcase for your landing page:</p>
	</div>



	<?php

		display_textarea( 
			$_GET['id'],
			$results->html,
			"HTML From Editor", 
			"html",
			"Copy and paste the HTML from Page Editor into this box."
		);

	?>

	<div style=" padding-top: 15px; margin-top: 25px; ">
		<span style="float: right;" id="deleteCampaign" class="grey-btn" >
			<span style="float: left; color: #000">DELETE</span>
			<img src="https://cdn3.iconfinder.com/data/icons/uidesignicons/delete.png" style="margin-left: 10px; padding-top: 2px; float: left;">
		</span>
		<br clear="left" />
	</div>

</div>