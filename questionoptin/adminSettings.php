

<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
		
	#wrapper {
		width: 600px;
		padding: 10px;
		font-family: 'Roboto Condensed', serif;
		font-size: 14px;
	}
	.float {
		float: left;
		padding: 10px;
		width: 280px;
	}
	select {
		width: 100%;
	}
	input[type=text] {
		width: 100%;
	}
	#wrapper h3 {
		font-weight: normal;
	}
	#wrapper td {
		padding: 5px 0;
	}
</style>	
<script src="http://code.jquery.com/jquery.js"></script>
 	 <?php
    		  global $post;
			  global $wpdb;
			  $getlead = $wpdb->prefix . "questionoptin_leads";
			  $getTitle = get_the_id();
			  $templates = $wpdb->get_results("SELECT * FROM $getlead " ,ARRAY_A);
	
			  $tpl = get_post_meta($post->ID,'_template',true);
			
				foreach($templates as $template)
				{

				} 
				
        ?>
   <div id="wrapper" >
   	<h3>View Collect Leads:</h3>
   	<table style="width: 700px;margin: 20px 0;">
   		<thead>
   			<tr style="text-align: left; padding-bottom: 10px; border-bottom: 1px solid #ccc;">
   				<th style="text-align: left; padding-bottom: 10px; border-bottom: 1px solid #ccc;">Full Name</th>
   				<th style="text-align: left; padding-bottom: 10px; border-bottom: 1px solid #ccc;">Email Address</th>
   				<th style="text-align: left; padding-bottom: 10px; border-bottom: 1px solid #ccc;">Option</th>
   				<th style="text-align: left; padding-bottom: 10px; border-bottom: 1px solid #ccc;">Page ID</th>
   			</tr>
   		</thead>
   		<tbody>
   			<?php echo chr(13); foreach($templates as $template) { ?><?php echo '<tr><td>'.$template['name'].'</td>'; ?> <?php echo '<td>'.$template['email'].'</td>'; echo chr(13); ?> <?php echo '<td>'.$template['options'].'</td>'; echo chr(13); ?> <?php echo '<td>'.$template['pageID'].'</td></tr>'; echo chr(13); ?><?php } ?>
   		</tbody>
   	</table>
   <h3>View Leads to Copy into CSV</h3>
  	<textarea name="autoresponder" id="autoresponder" style="display: block; width: 700px; height: 100px; font-size: 11px;">Full Name, Email Address <?php echo chr(13); foreach($templates as $template) { ?><?php echo $template['name']; ?>, <?php echo $template['email']; echo chr(13); ?><?php } ?></textarea>
   	 
   </div> <!-- /container -->
   <br clear="all">
