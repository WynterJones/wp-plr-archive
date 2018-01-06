<?php  

	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_campaigns";
	
	$ID = $_GET['id'];
	
	$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($results as $results) {}

?>

<div id="editdep">

	<div class="well">
		
			<div id="depTitle">
				
				<h1><?php echo $results->title; ?></h1>
				<p><b>created:</b> <?php echo $results->created; ?></p>
				
			</div>
			
			
			<div class="depStat1">
				
				<h1><?php echo $results->total_views; ?></h1>
				<p>total views</p>
				
			</div>
	
			<br clear="all" >
	
			
		
		</div>
		
		
		
		

	
	<div id="depTitle2" style="margin-top: 35px;">
				
				
				<h1>Personalized Headline</h1>
				<p style="margin-top: -10px;">This is the main headline on top of the page, best to have the clients name up here...</p>
				
			</div>
			
		
		<div class="well">
	
			<div id="edit_dep2" >	

			<div id="introMp3x"  >
				
				<input type="text" id="heading1" value="<?php echo stripcslashes($results->heading1); ?>" />
			
			</div>
			
		</div>
		
		</div>

		<div id="depTitle2" style="margin-top: 35px;">
				
				
				<h1>Personalized Sub-Headline</h1>
				<p style="margin-top: -10px;">This is the main sub-headline displayed under the main headline...</p>
				
			</div>
			
		
		<div class="well">
	
			<div id="edit_dep2" >	

			<div id="introMp3x"  >
				
				<input type="text" id="heading2" value="<?php echo stripcslashes($results->heading2); ?>" />
			
			</div>
			
		</div>
		
		</div>

		<div id="depTitle2" style="margin-top: 35px;">
				
				
				<h1>Personalized Intro Copy</h1>
				<p style="margin-top: -10px;">This is displayed under the main headline, this is great to introduce the client to the offer you have for them...</p>
				
			</div>
			
		
		<div class="well">
	
			<div id="edit_dep2" >	

			<div id="introMp3x"  >
				
				<input type="text" id="blurb" value="<?php echo stripcslashes($results->blurb); ?>" />

				<input type="hidden" id="id" value="<?php echo stripcslashes($results->ID); ?>" />
			
			</div>
			
		</div>
		
		</div>
		
		
	<span id="editclient"  class="uibutton large special">Update Campaign Settings</span>
	
	<span style="margin-left: 480px;"><a href="#" id="deleteCampaign"><b>Delete This Campaign</b></a></span>

</div>