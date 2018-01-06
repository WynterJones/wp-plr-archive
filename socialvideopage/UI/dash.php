
<div id="listapps">

	<div id="appHeader">
		<span><i class="fa fa-cog"></i> Preview, Edit and Update Your Social Optin Pages:</span>
	</div>

	<?php 
	
		// Display Apps:
		
		global $wpdb;
		
		$table_db_name = $wpdb->prefix . "socialoptinx";
		
		$query = "

		(SELECT * FROM $table_db_name )
			
			";

		$results = $wpdb->get_results($query, OBJECT);
		
		foreach($results as $results) {
		
	?>

	<div class="appitem">

		<div class="appinfo appinside">
			
			<span class="appTitle"><?php echo stripcslashes($results->appname); ?></span>
			<span class="appMeta"><b><i class="fa fa-calendar-o"></i> Created:</b> <?php echo stripcslashes($results->created); ?> - <a href="<?php echo  $sitePath."/lp/index.php?id=".$results->ID."&p=".$results->ID; ?>"  class="preview" target="_blank"><i class="fa fa-search"></i> Preview Your Page</a></span>

		</div>

		<div class="appedit">
			<span class="saved btn" ><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>&id=<?php echo stripcslashes($results->ID); ?>">edit</a></span>
		</div>

		<br clear="left">

	</div>

	<?php
		
	}

	?>


	<div class="appnew">
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
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://codecore.io/socialoptin-free-wordpress-plugin" data-text="SocialOptin Free WP Plugin" data-via="wynterjones" data-hashtags="codecore">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fcodecore.io/socialoptin-free-wordpress-plugin%2F&amp;width=150&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe>
		</div>
		<div class="saved btn" style="width: 100px; text-align: center" ><a href="<?php echo site_url(); ?>/wp-admin?page=socialoptinx-dashboard&create">Create New</a></div>	

		<br clear="right" >

	</div>

</div>


<br clear="left">