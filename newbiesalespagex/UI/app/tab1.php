<div class="tabber" id="tab1">

	<div class="titleBar">

		<?php $full_path = get_site_url(); $assets = $full_path . "/wp-content/plugins/newbiesalespagex/lp/"; ?>
		<a  target="_blank" href="<?php  echo $assets . 'tmp-3' ?>" class="grey-btn btn" style="float: right; color: #000; margin-top: 20px; text-decoration: none; margin-right: -18px">
			<span style="float: left;">Open Page Editor </span>
			<img src="https://cdn2.iconfinder.com/data/icons/ledicons/application_edit.png" style="margin-left: 10px; padding-top: 2px; float: left;">
		</a>

		<h2><strong>Choose Your Template</strong></h2>
		<p>Pick from what sales page layout you would like to start with...</p>
		
	</div>

	
	<?php 

		display_option_img( 
			$_GET['id'],
			$results->chooseTemplate,
			"Choose Template", 
			"chooseTemplate",
			"Choose the template",
			"http://cdn2.hubspot.net/hub/53/file-23127415-jpg/blog/images/landing-page-anatomy-resized-600.jpg%3Ft%3D1362982506000 [1], 
			http://cdn2.hubspot.net/hub/53/file-23127415-jpg/blog/images/landing-page-anatomy-resized-600.jpg%3Ft%3D1362982506000 [2], 
			http://cdn2.hubspot.net/hub/53/file-23127415-jpg/blog/images/landing-page-anatomy-resized-600.jpg%3Ft%3D1362982506000 [3]"
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