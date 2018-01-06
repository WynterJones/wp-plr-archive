<?php  



	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	
	$ID = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($data as $data) {}

	// Return Option Object:
	$results = get_option('socialoptinx_campaign_'. $ID);	
	// echo $data->id;

?>
<?php include('socialCount.php'); ?>
<?php


?>
<div class="editTop">
	

		<div class="appinfo">

	<a href="http://codecore.io" target="_blank" style="width: 40px; float: right;text-align: center;text-decoration: none;color: #ccc; margin-right: -25px;margin-top: 5px; margin-bottom: -10px"><img src="../wp-content/plugins/socialoptinx/images/codecore.png" style="width: 100%"><strong>v1.0</strong></a>
			<div id="msg" style="display: none; float: right;font-size: 18px; margin-top: 30px; margin-right: 20px; text-align: right;color: #FEEAA8"><i class="fa fa-floppy-o"></i> Successfully Saved Changes</div>
			
			<span class="appTitle"><?php echo stripcslashes($data->appname); ?></span>
			<span class="appMeta"><b><i class="fa fa-calendar-o"></i> Created:</b> <?php echo stripcslashes($data->created); ?> - <a href="<?php echo  $sitePath."/lp/index.php?id=".$_GET['id']."&p=".$_GET['id']; ?>" class="preview" target="_blank"><i class="fa fa-search"></i> Preview Your Page</a></span>

		</div>

		

		<br clear="left">

</div>

<div class="editNav">
		
		<div class="editItem editSelected" tab="tab1" >
			<i class="fa fa-dashboard"></i> 
			Dashboard
		</div>
		
		<div class="editItem" tab="tab7" >
			<i class="fa fa-globe"></i> 
			SEO
		</div>

		<div class="editItem" tab="tab8" >
			<i class="fa fa-video-camera"></i> 
			Video
		</div>

		<div class="editItem" tab="tab2" >
			<i class="fa fa-question-circle"></i> 
			Question
		</div>

		<div class="editItem" tab="tab3" >
			<i class="fa fa-envelope"></i> 
			Leads
		</div>

		<div class="editItem" tab="tab4" >
			<i class="fa fa-money"></i> 
			Link
		</div>

		<div class="editItem" tab="tab5" >
			<i class="fa fa-pencil"></i> 
			Design
		</div>

		

		<div class="editItem" tab="tab6" >
			<i class="fa fa-edit"></i> 
			Text
		</div>



		<div class="editItem2" style="float:right;">
			<span class="saved btn" id="saveIt" style="margin-left:-10px;" ><a href="#" id="saveIt_text">save</a></span>
		</div>

		

		<br clear="all" >

</div>

<div class="editArea">

	<form id="editApp" >

	<?php
	
		display_field_hidden(
			"action", 
			$pluginName . "_edit"
		);

		display_field_hidden(
			"id", 
			$_GET['id']
		);

	?>

	<?php


		include("app/tab1.php");
		include("app/tab2.php");
		include("app/tab3.php");
		include("app/tab4.php");
		include("app/tab5.php");
		include("app/tab6.php");
		include("app/tab7.php");
		include("app/tab8.php");


	?>

	<div style="border-top: 1px dotted #e2e2e2; padding-top: 15px; margin-top: 25px; ">
	<div style="float: right;">
			<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-href="http://codecore.io/socialoptin-free-wordpress-plugin"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://codecore.io/socialoptin-free-wordpress-plugin" data-text="Share Coredy" data-via="wynterjones" data-hashtags="codecore">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fcodecore.io/socialoptin-free-wordpress-plugin%2F&amp;width=150&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe>
		</div>
		<span style="float: left;" id="deleteCampaign" class="grey-btn" ><strong>Delete</strong></span>
		<br clear="left" />
	</div>


	</form>




	<div id="arcode_hdn_div" ></div>
	<div id="arcode_hdn_div2"></div>

</div>