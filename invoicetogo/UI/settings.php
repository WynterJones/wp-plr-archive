	<?php  

	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_settings";
	
	$results = $wpdb->get_results(" SELECT * FROM $table_db_name WHERE id = '1' ", OBJECT);
	
	foreach($results as $resultsX) {}

	?>

	<script>
	function goBack()
	  {
	  window.history.back()
	  }
	</script>

	<a onclick="goBack()" class="uibutton large" style="float: right; margin-top:15px; " >Go Back</a>

	<div id="depTitle" style="margin-top: -3px;">
			
			<h1>Design & Copy Settings:</h1>
			<p style="margin-top: -10px;">Choose the button color and the copy for the pricing plan...</p>
			
	</div>

	<br clear="all" />


			<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Button Color: </h3>
						<p style="margin-top: -10px;">Choose the style of the buttons on the page...</p>
						
						<select id="btncolor" >
						  <option value="1" <?php if($resultsX->btn == "1"){ echo "selected"; } ?> >Black</option>
						  <option value="2" <?php if($resultsX->btn == "2"){ echo "selected"; } ?> >Blue</option>
						  <option value="3" <?php if($resultsX->btn == "3"){ echo "selected"; } ?> >Green</option>
						  <option value="4" <?php if($resultsX->btn == "4"){ echo "selected"; } ?> >Light Blue</option>
						</select>
						
					</div>
					
				</div>
				
				</div>


				<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Plan #1 Copy :: Title </h3>
						<p style="margin-top: -10px;">This will be the heading for the first pricing level...</p>
						
						<input type="text" id="plan_title_1" value="<?php echo stripcslashes($resultsX->plan_title_1); ?>" />
						
						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #1 Copy :: Blurb</h3>
						<p style="margin-top: -10px;">This will be shown under the heading...</p>
						
						<input type="text" id="plan_blurb_1" value="<?php echo stripcslashes($resultsX->plan_blurb_1); ?>" />
						
						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #1 Copy :: Button Copy</h3>
						<p style="margin-top: -10px;">This will be shown on the pay button for this level...</p>
						
						<input type="text" id="plan_btn_1" value="<?php echo stripcslashes($resultsX->plan_btn_1); ?>" />

						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #1 Copy :: Pay URL</h3>
						<p style="margin-top: -10px;">This is the URL they will be taken to once they click on this level pay button...</p>
						
						<input type="text" id="plan_url_1" value="<?php echo stripcslashes($resultsX->plan_url_1); ?>" />
												
					
					</div>
					
				</div>
				
				</div>

<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Plan #2 Copy :: Title </h3>
						<p style="margin-top: -10px;">This will be the heading for the first pricing level...</p>
						
						<input type="text" id="plan_title_2" value="<?php echo stripcslashes($resultsX->plan_title_2); ?>" />
						
						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #2 Copy :: Blurb</h3>
						<p style="margin-top: -10px;">This will be shown under the heading...</p>
						
						<input type="text" id="plan_blurb_2" value="<?php echo stripcslashes($resultsX->plan_blurb_2); ?>" />
						
						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #2 Copy :: Button Copy</h3>
						<p style="margin-top: -10px;">This will be shown on the pay button for this level...</p>
						
						<input type="text" id="plan_btn_2" value="<?php echo stripcslashes($resultsX->plan_btn_2); ?>" />

						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #2 Copy :: Pay URL</h3>
						<p style="margin-top: -10px;">This is the URL they will be taken to once they click on this level pay button...</p>
						
						<input type="text" id="plan_url_2" value="<?php echo stripcslashes($resultsX->plan_url_2); ?>" />
												
					
					</div>
					
				</div>
				
				</div>

				<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Plan #3 Copy :: Title </h3>
						<p style="margin-top: -10px;">This will be the heading for the first pricing level...</p>
						
						<input type="text" id="plan_title_3" value="<?php echo stripcslashes($resultsX->plan_title_3); ?>" />
						
						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #3 Copy :: Blurb</h3>
						<p style="margin-top: -10px;">This will be shown under the heading...</p>
						
						<input type="text" id="plan_blurb_3" value="<?php echo stripcslashes($resultsX->plan_blurb_3); ?>" />
						
						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #3 Copy :: Button Copy</h3>
						<p style="margin-top: -10px;">This will be shown on the pay button for this level...</p>
						
						<input type="text" id="plan_btn_3" value="<?php echo stripcslashes($resultsX->plan_btn_3); ?>" />

						<div class="sepper"></div>
							
							
						<h3 style="margin-top: 0px;" >Plan #3 Copy :: Pay URL</h3>
						<p style="margin-top: -10px;">This is the URL they will be taken to once they click on this level pay button...</p>
						
						<input type="text" id="plan_url_3" value="<?php echo stripcslashes($resultsX->plan_url_3); ?>" />
												
					
					</div>
					
				</div>
				
				</div>

	<a id="save_settings" class="uibutton large special" href="#">Save Design & Copy Settings</a>
