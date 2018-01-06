<div class="tabber" id="tab1">

	<div class="titleBar">
		<h2>Main Settings</h2>
		<p>Here you can change the main settings of your page...</p>
	</div>

	
<?php 


echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Headline Content</h2>
		";

display_field_image( 
			$_GET['id'],
			$results->logo,
			"Logo Image", 
			"logo",
			"This will replace the below headlines. Max height: 185px;"
		);
		display_field( 
			$_GET['id'],
			$results->mainHeadline,
			"Top Main Headline", 
			"mainHeadline",
			"Shown at the very top of the landing page."
		);

		display_field( 
			$_GET['id'],
			$results->subHeadline,
			"Top Sub Headline", 
			"subHeadline",
			"Show at the very top of the landing page."
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Video Embed Code</h2>
		";

		display_textarea( 
			$_GET['id'],
			$results->videoBox,
			"Video Embed Code", 
			"videoBox",
			"Video iframe or embed code"
		);



		 ?>

	<div style="border-top: 1px dotted #e2e2e2; padding-top: 15px; margin-top: 25px; ">
		<span style="float: right;" id="deleteCampaign" class="grey-btn" >Delete This App</span>
		<br clear="right" />
	</div>



</div>