<?php  

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbhubpro";
	
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
				<p>total shares</p>
				
			</div>
			
			<div class="depStat1">
				
				<h1><?php echo $results->total_views; ?></h1>
				<p>total views</p>
				
			</div>
	
			<br clear="all" >
	
			<div id="twilioAPI">
				
				<!--<span style="font-size: 16px; font-weight: bold;">Facebook Canvas URL:</span>-->
				<img src="http://cdn4.iconfinder.com/data/icons/socialmediaicons_v120/24/facebook.png" align="left" style="margin-right: 15px; margin-top: 8px;" />
				
				<input type="text" id="xcx" style="width: 720px;" value="<?php echo site_url(); ?>/wp-content/plugins/fbhubpro/timeline/index.php?id=<?php echo $_GET['id']; ?>" />
				
				
				</span>
				
			</div>
		
		</div>
		
		<div id="depTitle" style="margin-top: -3px;">
			
			
			
			<h1>Fan Gate Image:</h1>
			<p style="margin-top: -10px;">Image that is shown to non-fans (people need to like to reveal page)... <i>810x600 for best results</i></p>
			
		</div>
		
		<br clear="all" />
	

	<div class="well">

		
			
			<h3 style="margin-top: 0px;" >Fan Gate Switch:</h3>
			<p style="margin-top: -10px;">Here you can turn off or on a fan gate image...</p>
			
			<select id="fangate_status">
				
				<option value="off" <?php if($results->fangate_status == "" || $results->fangate_status == "off"){ echo "selected"; } ?> >Off - Do not require a like to see opt-in...</option>
				<option value="on" <?php if($results->fangate_status == "on"){ echo "selected"; } ?> >On - Yes, they have to like before they see the opt-in...</option>
			
			</select>
			
		
		<div id="edit_dep" style="display: <?php if($results->fangate_status == "" || $results->fangate_status == "off"){ echo "none"; } else { echo "block"; } ?>;" >	
			
	
		
		<div id="introMp3x"  >
		
			<div class="sepper"></div>
			
		
			
			<h3 style="margin-top: 0px;" >Fan Gate Image URL:</h3>
			<p style="margin-top: -10px;">Must be a full path to an image - must end with .png / .jpg</p>
		
			<input type="text" id="fangate_image" value="<?php echo stripcslashes($results->fangate_image); ?>" />
		
			<a class="uibutton large launch_media_lib" photoBox='fangate_image' style="margin-left: 0px; margin-top: 15px;" href="#button">Upload Image</a>
		
		</div>
		
	</div>
	
	</div>
	
	<div id="depTitle2" style="margin-top: 35px;">
				
				
				<h1>Header Image:</h1>
				<p style="margin-top: -10px;">This will be the main header image, best results: 809x300...</p>
				
			</div>
			
		
		<div class="well">
	
			<div id="edit_dep2" >	

			<div id="introMp3x"  >
				
				<input type="text" id="header_image" value="<?php echo stripcslashes($results->header_image); ?>" />
			
			</div>
			
		</div>
		
		</div>
		
		
		
		<div id="depTitle2" style="margin-top: 35px;">
						
						
						
						<h1>Main Copy:</h1>
						<p style="margin-top: -10px;">This is the copy for the webinar landing page...</p>
						
					</div>
					
				
				<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Pre-Headline:</h3>
						<p style="margin-top: -10px;">eg. "Call Us: 1-555-555-5555"</p>
						
						<input type="text" id="copy_pre" value="<?php echo stripcslashes($results->copy_pre); ?>" />
					
						<h3 style="margin-top: 15px;" >Main Body: </h3>
						<p style="margin-top: -10px;">Shown under the time for webinar...</p>
						
						<?php 
							
							$copy_main = stripcslashes($results->copy_main);
							
							$settings = array(
								'wpautop' => false, // use wpautop - add p tags when they press enter
								'media_buttons' => true, // show insert/upload button(s)
								'teeny' => false, // output the minimal editor config used in Press This
								'tinymce' => array(
								     'height' => '250' // the height of the editor
								));																
								wp_editor( $copy_main, 'copy_main', $settings ); 
						?>
						
						<div class="sepper"></div>
							
							
							<h3 style="margin-top: 0px;" >Opt-in Headline:</h3>
							<p style="margin-top: -10px;">This will appear above the optin form "Sign up for a free gift"...</p>
						
							<input type="text" id="copy_optin" value="<?php echo stripcslashes($results->copy_optin); ?>" />
						
							<h3 style="margin-top: 15px;" >Name Field Place Holder:</h3>
								<p style="margin-top: -10px;">This appears in the name field before they enter in their name "Enter in your Full Name"...</p>
							
								<input type="text" id="copy_name" value="<?php echo stripcslashes($results->copy_name); ?>" />
							
							<h3 style="margin-top: 15px;" >Email Field Place Holder:</h3>
								<p style="margin-top: -10px;">This appears in the email field before they enter in their name "Enter in your Email Address"...</p>
							
								<input type="text" id="copy_email" value="<?php echo stripcslashes($results->copy_email); ?>" />
						
						<h3 style="margin-top: 15px;" >Optin Button Copy:</h3>
							<p style="margin-top: -10px;">This is the text that is shown on the optin button...</p>
						
							<input type="text" id="copy_btn" value="<?php echo stripcslashes($results->copy_btn); ?>" />

							<div class="sepper"></div>

							<h3 style="margin-top: 15px;" >Successful Opt-in Copy:</h3>
							<p style="margin-top: -10px;">This content is shown once they have opted in, you can put any content you want here...</p>
								

							<?php 
									
									$copy_success = stripcslashes($results->copy_success);
									
									$settings = array(
										'wpautop' => false, // use wpautop - add p tags when they press enter
										'media_buttons' => true, // show insert/upload button(s)
										'teeny' => false, // output the minimal editor config used in Press This
										'tinymce' => array(
										     'height' => '250' // the height of the editor
										));																
										wp_editor( $copy_success, 'copy_success', $settings ); 
								?>							
					
					</div>
					
				</div>
				
				</div>
		
	
	<div id="depTitle2" style="margin-top: 35px; display: block;">
					
					
					<h1>Social Side Bar Link:</h1>
					<p style="margin-top: -10px;">Link up the companies Twitter, Facebook, etc... * leave <b>Link Copy</b> blank to not show...</p>
					
				</div>
				
			
			<div class="well">
		
				<div id="edit_dep2" >	
	
				<div id="introMp3x"  >
					
				
					
					<h2 style="margin-top: 0px;" >
						<img src="http://cdn4.iconfinder.com/data/icons/socialmediaicons_v120/16/website.png">
						Website Link:
					</h2>

					<div class="sepper"></div>
					<h3 style="" >Website URL:</h3>
					<input type="text" id="social_1_link" value="<?php echo stripcslashes($results->social_1_link); ?>" />
					<h3 style="margin-top: 15px;" >Link Copy:</h3>
					<input type="text" id="social_1_copy" value="<?php echo stripcslashes($results->social_1_copy); ?>" />

					<h2 style="margin-top: 20px;" >
						<img src="http://cdn4.iconfinder.com/data/icons/Classy_Social_Media_Icons/16/twitter.png">
						Twitter Link:
					</h2>

					<div class="sepper"></div>
					<h3 style="" >Twitter Account URL:</h3>
					<input type="text" id="social_2_link" value="<?php echo stripcslashes($results->social_2_link); ?>" />
					<h3 style="margin-top: 15px;" >Link Copy:</h3>
					<input type="text" id="social_2_copy" value="<?php echo stripcslashes($results->social_2_copy); ?>" />

					<h2 style="margin-top: 20px;" >
						<img src="http://cdn2.iconfinder.com/data/icons/diagona/icon/16/004.png">
						Email Link:
					</h2>

					<div class="sepper"></div>
					<h3 style="" >Email Address:</h3>
					<input type="text" id="social_3_link" value="<?php echo stripcslashes($results->social_3_link); ?>" />
					<h3 style="margin-top: 15px;" >Email Us Copy:</h3>
					<input type="text" id="social_3_copy" value="<?php echo stripcslashes($results->social_3_copy); ?>" />


					<h2 style="margin-top: 20px;" >
						<img src="http://cdn4.iconfinder.com/data/icons/socialmediaicons_v120/16/youtube.png">
						Youtube Link:
					</h2>

					<div class="sepper"></div>
					<h3 style="" >Youtube Account URL:</h3>
					<input type="text" id="social_4_link" value="<?php echo stripcslashes($results->social_4_link); ?>" />
					<h3 style="margin-top: 15px;" >Link Copy:</h3>
					<input type="text" id="social_4_copy" value="<?php echo stripcslashes($results->social_4_copy); ?>" />

					<h2 style="margin-top: 20px;" >
						<img src="http://cdn4.iconfinder.com/data/icons/socialmediaicons_v120/16/linkedin.png">
						LinkedIn Link:
					</h2>

					<div class="sepper"></div>
					<h3 style="" >LinkedIn Account URL:</h3>
					<input type="text" id="social_5_link" value="<?php echo stripcslashes($results->social_5_link); ?>" />
					<h3 style="margin-top: 15px;" >Link Copy:</h3>
					<input type="text" id="social_5_copy" value="<?php echo stripcslashes($results->social_5_copy); ?>" />
				
				</div>
				
			</div>
			
			</div>
	
	
	<div id="depTitle2" style="margin-top: 35px; display: block;">
					
					
					<h1>Location :: Google Maps:</h1>
					<p style="margin-top: -10px;">How map on footer of page... * leave <b>address</b> blank to not show map area...</p>
					
				</div>
				
			
			<div class="well">
		
				<div id="edit_dep2" >	
	
				<div id="introMp3x"  >
					
				
					<h3 style="" >Location Headline:</h3>
					<input type="text" id="copy_location" value="<?php echo stripcslashes($results->copy_location); ?>" />
					
					<h3 style="margin-top: 15px;" >Location Address: (eg. 23 1st st, New York, New York) </h3>
					<input type="text" id="location" value="<?php echo stripcslashes($results->location); ?>" />
				
				</div>
				
			</div>
			
			</div>

	
	<div id="depTitle3" style="margin-top: 35px;">
					
				
					<h1>Facebook Share Settings:</h1>
					<p style="margin-top: -10px;">This the info you need for the FB share so they can share this with their friends...</p>
					
				</div>
				
			
			<div class="well">
		
				<div id="edit_dep3" >
				
				
				<div id="introMp3x"  >
					
					
					<h3 style="margin-top: 0px;" >FB App ID:</h3>
					<p style="margin-top: -10px;">This will be your unique App ID (see support video)...</p>
				
					<input type="text" id="fb_id" value="<?php echo stripcslashes($results->fb_id); ?>" />
				
				</div>
				
				<div id="introMp3x" style="margin-top: 15px;"  >
					
					
					<h3 style="margin-top: 0px;" >FB App Secret Code:</h3>
					<p style="margin-top: -10px;">This will be your unique App Secret Code (see support video)...</p>
				
					<input type="text" id="fb_secret" value="<?php echo stripcslashes($results->fb_secret); ?>" />
				
					<p><a href="http://admine.eu/addapp.html" target="_blank"><b>* Add App To Fan Page</b></a></p>
				
				</div>
				
				<div id="introMp3x" style="margin-top: 15px;"  >
					
					
					<h3 style="margin-top: 0px;" >Share Button Copy:</h3>
					<p style="margin-top: -10px;">This will be the text that is shown on the share button...</p>
				
					<input type="text" id="btn_copy" value="<?php echo stripcslashes($results->btn_copy); ?>" />
				
				</div>
				
				<div id="introMp3x" style="margin-top: 15px;"  >
					
					
					<h3 style="margin-top: 0px;" >Share Title:</h3>
					<p style="margin-top: -10px;">This will be the main title for the share block...</p>
				
					<input type="text" id="fb_title" value="<?php echo stripcslashes($results->fb_title); ?>" />
				
				</div>
	
				<div id="introMp3x"  style="margin-top: 15px;" >
					

					<h3 style="margin-top: 0px;" >Share URL:</h3>
					<p style="margin-top: -10px;">This is the URL that the share links to... should be the Fanpage URL so it redirects back to the opt-in tab...</p>
				
					<input type="text" id="fb_url" value="<?php echo stripcslashes($results->fb_url); ?>" />
				
				</div>
				
				<div id="introMp3x" style="margin-top: 15px;"  >
					
					
					<h3 style="margin-top: 0px;" >Share Image URL:</h3>
					<p style="margin-top: -10px;">This will be the small image inside of the share block... <i>best results should be 90x90</i></p>
				
					<input type="text" id="fb_image" value="<?php echo stripcslashes($results->fb_image); ?>" />
					
					<a class="uibutton large launch_media_lib" photoBox='fb_image' style="margin-left: 0px; margin-top: 15px;" href="#button">Upload Image</a>
				
				</div>
				
				<div id="introMp3x" style="margin-top: 15px;"  >
					
					
					<h3 style="margin-top: 0px;" >Share Description:</h3>
					<p style="margin-top: -10px;">This will be the small image inside of the share block... <i>best results should be 90x90</i></p>
				
					<textarea id="fb_desc" ><?php echo stripcslashes($results->fb_desc); ?></textarea>
				
				</div>
				
			</div>
			
			</div>	
	
	
	<div id="depTitle3" style="margin-top: 35px;">
					
					
					<h1>Auto-Responder Settings:</h1>
					<p style="margin-top: -10px;">Add your auto-responder code here to be displayed inside of the opt-in pop up... <i>(design will be over written)</i></p>
					
				</div>
				
			
			<div class="well">
		
				<div id="edit_dep3" >
				
				<div id="introMp3x"  >
					
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