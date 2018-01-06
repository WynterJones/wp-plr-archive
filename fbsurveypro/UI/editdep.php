<?php  

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbsurveypro_campaigns";
	
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
			
			<div class="depStat2">
				
				<h1><?php echo $results->total_optins; ?></h1>
				<p>total optins</p>
				
			</div>
			
			<div class="depStat3">
				
				<h1><?php echo $results->total_shares; ?></h1>
				<p>total finished</p>
				
			</div>
			
			<div class="depStat1">
				
				<h1><?php echo $results->total_views; ?></h1>
				<p>total views</p>
				
			</div>
	
			<br clear="all" >
	
			<div id="twilioAPI">
				
				<!--<span style="font-size: 16px; font-weight: bold;">Facebook Canvas URL:</span>-->
				<img src="http://cdn4.iconfinder.com/data/icons/socialmediaicons_v120/24/facebook.png" align="left" style="margin-right: 15px; margin-top: 8px;" />
				
				<input type="text" id="xcx" style="width: 720px;" value="<?php echo site_url(); ?>/wp-content/plugins/fbsurveypro/timeline/index.php?id=<?php echo $_GET['id']; ?>" />
				
				
				</span>
				
			</div>
		
		</div>
		
<!--		<div id="depTitle" style="margin-top: -3px;">
			
			<img src="http://cdn2.iconfinder.com/data/icons/drf/PNG/lock.png" align="right" style="margin-top: 14px; margin-right: -345px;" />
			
			<h1>Fan Gate Image:</h1>
			<p style="margin-top: -10px;">Image that is shown to non-fans (people need to like to reveal the survey page)... <i>810x600 for best results</i></p>
			
		</div>
		
		<br clear="all" />
	

	<div class="well">

		
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/32x32/apps/package_settings.png" align="right" style="" />
			
			<h3 style="margin-top: 0px;" >Fan Gate Switch:</h3>
			<p style="margin-top: -10px;">Here you can turn off or on a fan gate image...</p>
			
			<select id="fangate_status">
				
				<option value="off" <?php if($results->fangate_status == "" || $results->fangate_status == "off"){ echo "selected"; } ?> >Off - Do not require a like to see survey...</option>
				<option value="on" <?php if($results->fangate_status == "on"){ echo "selected"; } ?> >On - Yes, they have to like before they see the survey...</option>
			
			</select>
			
		
		<div id="edit_dep" style="display: <?php if($results->fangate_status == "" || $results->fangate_status == "off"){ echo "none"; } else { echo "block"; } ?>;" >	
			
	
		
		<div id="introMp3x"  >
		
			<div class="sepper"></div>
			
			<img src="http://cdn5.iconfinder.com/data/icons/fatcow/32x32/thumb_up.png" align="right" style="" />
			
			<h3 style="margin-top: 0px;" >Fan Gate Image URL:</h3>
			<p style="margin-top: -10px;">Must be a full path to an image - must end with .png / .jpg</p>
		
			<input type="text" id="fangate_image" value="<?php echo stripcslashes($results->fangate_image); ?>" />
		
			<a class="uibutton large launch_media_lib" photoBox='fangate_image' style="margin-left: 0px; margin-top: 15px;" href="#button">Upload Image</a>
		
		</div>
		
	</div>
	
	</div>-->
	
	<div id="depTitle2" style="margin-top: 35px;">
				
				<img src="http://cdn3.iconfinder.com/data/icons/discovery/32x32/apps/gnome-settings-background.png" align="right" style="margin-top: -4px; margin-right: 10px;" />
				
				<h1>Background Image:</h1>
				<p style="margin-top: -10px;">This image will be shown as the background on your survey page... <i>810x600 for best results</i></p>
				
			</div>
			
		
		<div class="well">
	
			<div id="edit_dep2" >	

			<div id="introMp3x"  >
				
				<!---->
			
				<input type="text" id="optin_image" value="<?php echo stripcslashes($results->optin_image); ?>" />
			
				<a class="uibutton large launch_media_lib" photoBox='optin_image' style="margin-left: 0px; margin-top: 15px;" href="#button">Upload Image</a>
			
			</div>
			
		</div>
		
		</div>
		
		<div id="depTitle2" style="margin-top: 35px;">
						
						<img src="http://cdn3.iconfinder.com/data/icons/musthave/32/Copy.png" align="right" style="margin-top: -4px; margin-right: 10px;" />
						
						<h1>Survey Intro Copy:</h1>
						<p style="margin-top: -10px;">This will be the text that is shown in the survey box before they start the survey...</p>
						
					</div>
					
				
				<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					

					
						
						<?php 
							
							$optincopy = stripcslashes($results->optin_copy);
							
							$settings = array(
								'wpautop' => false, // use wpautop - add p tags when they press enter
								'media_buttons' => true, // show insert/upload button(s)
								'teeny' => false, // output the minimal editor config used in Press This
								'tinymce' => array(
								     'height' => '250' // the height of the editor
								));																
								wp_editor( $optincopy, 'optin_copy', $settings ); 
						?>
						
						<div class="sepper"></div>
							
							<img src="http://cdn3.iconfinder.com/data/icons/musthave/32/Copy.png" align="right" style="" />
							
							<h3 style="margin-top: 0px;" >Start Survey Button Copy:</h3>
							<p style="margin-top: -10px;">This will be copy on the button to start the survey...</p>
						
							<input type="text" id="btn_copy" value="<?php echo stripcslashes($results->btn_copy); ?>" />
						
					
					</div>
					
				</div>
				
				</div>
		

				
				<div id="depTitle2" style="margin-top: 35px;">
								
								<img src="http://cdn3.iconfinder.com/data/icons/musthave/32/Copy.png" align="right" style="margin-top: -4px; margin-right: 10px;" />
								
								<h1>Survey Success Copy:</h1>
								<p style="margin-top: -10px;">This will be the copy that is displayed when they complete the survey, you can give away a coupon, download link, etc...</p>
								
							</div>
							
						
						<div class="well">
					
							<div id="edit_dep2" >	
				
							<div id="introMp3x"  >
								
								<?php 
									
									$footercopy = stripcslashes($results->footer_copy);
									
									$settings = array(
										'wpautop' => false, // use wpautop - add p tags when they press enter
										'media_buttons' => true, // show insert/upload button(s)
										'teeny' => false, // output the minimal editor config used in Press This
										'tinymce' => array(
										     'height' => '250' // the height of the editor
										));																
										wp_editor( $footercopy, 'footer_copy', $settings ); 
								?>
							
							</div>
							
						</div>
						
						</div>
	
	
	
	<div id="depTitle3" style="margin-top: 35px;">
					
					<img src="http://cdn3.iconfinder.com/data/icons/fatcow/32x32_0280/connect.png" align="right" style="margin-top: -4px; margin-right: 10px;" />
					
					<h1>Auto-Responder Settings:</h1>
					<p style="margin-top: -10px;">Add your auto-responder code here to be displayed inside of the opt-in pop up... <i>(design will be over written)</i></p>
					
				</div>
				
			
			<div class="well">
		
				<div id="edit_dep3" >
				
				<div id="introMp3x"  >
					
					<img src="http://cdn2.iconfinder.com/data/icons/oxygen/32x32/mimetypes/application-xml.png" align="right" style="" />
					
					<h3 style="margin-top: 0px;" >Your Opt-in Form Code:</h3>
					<p style="margin-top: -10px;">Paste in the <b>HTML raw form code</b> below... works best with aweber, etc</p>
				
					<textarea id="ar_code" ><?php echo stripcslashes($results->ar_code); ?></textarea>
					
					<div id="arcode_hdn_div" ></div>
					<div id="arcode_hdn_div2"></div>
					
					<p style="font-size: 11px; margin-top: 15px;">* If you find the opt-in not working,<b> make sure that the code above is HTML form code, no javascript, or iframes or else it wont work...</b></p>
					
					<p><b><a href="#" id="showadvar">Show Adv AR Fields</a></b></p>
					
					<div id="adv_ar" style="display: none;">
					
						<div id="introMp3x" >
							
							<h3 style="margin-top: 0px;" >Name Field:</h3>
							<p style="margin-top: -10px;">This is the name of the "name" attribute for the leads name. This should correspond with the name="" in the AR code above (pro users only)</p>
						
							<input type="text" id="ar_name" value="<?php echo stripcslashes($results->ar_name); ?>" />
						
						</div>
						
						<div id="introMp3x" style="margin-top: 15px;"  >
							
							<h3 style="margin-top: 0px;" >Email Field:</h3>
							<p style="margin-top: -10px;">This is the name of the "name" attribute for the leads email. This should correspond with the name="" in the AR code above (pro users only)</p>
						
							<input type="text" id="ar_email" value="<?php echo stripcslashes($results->ar_email); ?>" />
						
						</div>
						
						<div id="introMp3x" style="margin-top: 15px;"  >
							
							<h3 style="margin-top: 0px;" >Post URL:</h3>
							<p style="margin-top: -10px;">This should be the same as above for the POST url, where the form is posted too... (pro users only)</p>
						
							<input type="text" id="ar_url" value="<?php echo stripcslashes($results->ar_url); ?>" />
						
						</div>
						
						<div id="introMp3x" style="margin-top: 15px;"  >
							
							<h3 style="margin-top: 0px;" >Hidden Fields:</h3>
							<p style="margin-top: -10px;">This should be the hidden fields required in the ar web code... (pro users only)</p>
						
							<textarea id="ar_hidden" ><?php echo stripcslashes($results->ar_hidden); ?></textarea>
						
						</div>
					
					</div>
				
				</div>
				
			</div>
			
			</div>	
	
	
	<span id="editCAMPAIGN"  class="uibutton large special">Update Campaign Settings</span>
	
	<span style="margin-left: 480px;"><a href="#" id="deleteCampaign"><b>Delete This Campaign</b></a></span>

</div>