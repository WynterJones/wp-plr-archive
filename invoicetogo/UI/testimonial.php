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
			
			<h1>Testimonials:</h1>
			<p style="margin-top: -10px;">These are show at the bottom of the page...</p>
			
	</div>

	<br clear="all" />


			<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Testimonial #1 Body: </h3>
						<p style="margin-top: -10px;">This is the first testimonial main body...</p>
						
						<?php 
							
							$testimonial_body1 = stripcslashes($resultsX->testimonial_body_1);
							
							$settings = array(
								'wpautop' => false, // use wpautop - add p tags when they press enter
								'media_buttons' => true, // show insert/upload button(s)
								'teeny' => false, // output the minimal editor config used in Press This
								'tinymce' => array(
								     'height' => '250' // the height of the editor
								));																
								wp_editor( $testimonial_body1, 'testimonial_body1', $settings ); 
						?>
						
						<div class="sepper"></div>
							
							
							<h3 style="margin-top: 0px;" >Testimonial #1 Full Name:</h3>
							<p style="margin-top: -10px;">This will be the name of the person...</p>
						
							<input type="text" id="testimonial_name1" value="<?php echo stripcslashes($resultsX->testimonial_name_1); ?>" />
												
					
					</div>
					
				</div>
				
				</div>


				<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Testimonial #2 Body: </h3>
						<p style="margin-top: -10px;">This is the first testimonial main body...</p>
						
						<?php 
							
							$testimonial_body2 = stripcslashes($resultsX->testimonial_body_2);
							
							$settings = array(
								'wpautop' => false, // use wpautop - add p tags when they press enter
								'media_buttons' => true, // show insert/upload button(s)
								'teeny' => false, // output the minimal editor config used in Press This
								'tinymce' => array(
								     'height' => '250' // the height of the editor
								));																
								wp_editor( $testimonial_body2, 'testimonial_body2', $settings ); 
						?>
						
						<div class="sepper"></div>
							
							
							<h3 style="margin-top: 0px;" >Testimonial #2 Full Name:</h3>
							<p style="margin-top: -10px;">This will be the name of the person...</p>
						
							<input type="text" id="testimonial_name2" value="<?php echo stripcslashes($resultsX->testimonial_name_2); ?>" />
												
					
					</div>
					
				</div>
				
				</div>


	<a id="save_testimonial" class="uibutton large special" href="#">Save Testimonial Settings</a>
