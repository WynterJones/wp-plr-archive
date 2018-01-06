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
			
			<h1>Company Intro & Company Info:</h1>
			<p style="margin-top: -10px;">This is the intro to your company & services and info for your company, ie. logo and address, etc...</p>
			
	</div>

	<br clear="all" />


			<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Company Services Intro: </h3>
						<p style="margin-top: -10px;">This is the text that should explain your services to your client...</p>
						
						<?php 
							
							$intro = stripcslashes($resultsX->intro);
							
							$settings = array(
								'wpautop' => false, // use wpautop - add p tags when they press enter
								'media_buttons' => true, // show insert/upload button(s)
								'teeny' => false, // output the minimal editor config used in Press This
								'tinymce' => array(
								     'height' => '250' // the height of the editor
								));																
								wp_editor( $intro, 'intro', $settings ); 
						?>
									
					
					</div>
					
				</div>
				
				</div>


				<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
			
							
							
							<h3 style="margin-top: 0px;" >Company Logo Image:</h3>
							<p style="margin-top: -10px;">This will be the image that is display as your logo - 335px wide for best results - full image URL (.jpg/.png)...</p>
						
							<input type="text" id="company_logo" value="<?php echo stripcslashes($resultsX->company_logo); ?>" />
						
							<div class="sepper"></div>


					
						<h3 style="margin-top: 0px;" >Company Info: </h3>
						<p style="margin-top: -10px;">This is shown under your logo, best place for address, etc...</p>
						
						<?php 
							
							$company_info = stripcslashes($resultsX->company_info);
							
							$settings = array(
								'wpautop' => false, // use wpautop - add p tags when they press enter
								'media_buttons' => true, // show insert/upload button(s)
								'teeny' => false, // output the minimal editor config used in Press This
								'tinymce' => array(
								     'height' => '250' // the height of the editor
								));																
								wp_editor( $company_info, 'company_info', $settings ); 
						?>
						
											
					
					</div>
					
				</div>
				
				</div>


	<a id="save_company" class="uibutton large special" href="#">Save Company Settings</a>
