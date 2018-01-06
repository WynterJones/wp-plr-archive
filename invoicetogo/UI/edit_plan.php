	<?php 
	
		// Display Plan Items:
		
		global $wpdb;
		$table_db_name = $wpdb->prefix . "oppro_plans";
		$plan = $_GET['edit_item'];
		
		$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$plan' ", OBJECT);
		
		foreach($results as $results) {}
		
	?>

	<script>
	function goBack()
	  {
	  window.history.back()
	  }
	</script>

	<a onclick="goBack()" class="uibutton large" style="float: right; margin-top:15px; " >Go Back</a>

	<div id="depTitle" style="margin-top: -3px;">
			
			<h1>Edit This Item:</h1>
			<p style="margin-top: -10px;">You can edit this item or delete this item...</p>
			
	</div>

	<br clear="all" />

	<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Item Bullet Image - Check OR X: </h3>
						<p style="margin-top: -10px;">You can either have a check mark or a cross for the item...</p>
						
						<select id="item_bullet" >

						  <?php

							if($results->bullet == "1"){
								?>
								<option value="1" selected >Check</option>
								<option value="2">X</option>	
								<?php
							} 
							if($results->bullet == "2") {
								?>
								<option value="1" >Check</option>
								<option value="2"  selected >X</option>
								<?php
							}	

							?>	

						</select>
						
						<div class="sepper"></div>
							
							
							<h3 style="margin-top: 0px;" >Item Title:</h3>
							<p style="margin-top: -10px;">This is the title for the item, keep it short & sweet...</p>
						
							<input type="text" id="item_title" value="<?php echo $results->heading; ?>" />

							<div class="sepper"></div>
							
							
							<h3 style="margin-top: 0px;" >Item Blurb:</h3>
							<p style="margin-top: -10px;">OPTIONAL - you can have a quick blurb about this item/service, leave it blank if you dont want one...</p>
						
							<input type="text" id="item_blurb" value="<?php echo $results->blurb; ?>" />

							<input type="hidden" id="itemid" value="<?php echo $results->ID; ?>" />
							<input type="hidden" id="plan" value="<?php echo $results->plan; ?>" />
												
					
					</div>
					
				</div>
				
				</div>

	<a class="uibutton large special" href="#" id="edititem" >Save Changes</a>

	<span style="margin-left: 620px;"><a href="#" id="deleteItem"><b>Delete item</b></a></span>
			