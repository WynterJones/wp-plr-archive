<?php  

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbwebinarpro";
	
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
				
				<input type="text" id="xcx" style="width: 720px;" value="<?php echo site_url(); ?>/wp-content/plugins/fbwebinarpro/timeline/index.php?id=<?php echo $_GET['id']; ?>" />
				
				
				</span>
				
			</div>
		
		</div>
		
		<div id="depTitle" style="margin-top: -3px;">
			
			
			
			<h1>Fan Gate Image:</h1>
			<p style="margin-top: -10px;">Image that is shown to non-fans (people need to like to reveal webinar)... <i>810x600 for best results</i></p>
			
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
				
				
				<h1>Background Color:</h1>
				<p style="margin-top: -10px;">This will be the background color for the background area...</p>
				
			</div>
			
		
		<div class="well">
	
			<div id="edit_dep2" >	

			<div id="introMp3x"  >
				
			
				
				<h3 style="margin-top: 0px;" >Background Color:</h3>
			
				
				<select id="bg_color">
					
					<option value="white" <?php if($results->bg_color == "" || $results->bg_color == "white"){ echo "selected"; } ?> >WHITE</option>
					
					<option value="grey" <?php if($results->bg_color == "grey"){ echo "selected"; } ?> >GREY</option>
				
					<option value="blue" <?php if($results->bg_color == "blue"){ echo "selected"; } ?> >BLUE</option>
					
					<option value="green" <?php if($results->bg_color == "green"){ echo "selected"; } ?> >GREEN</option>
					
					<option value="red" <?php if($results->bg_color == "red"){ echo "selected"; } ?> >RED</option>
					
					<option value="black" <?php if($results->bg_color == "black"){ echo "selected"; } ?> >BLACK</option>
					
					
				</select>
			
			</div>
			
		</div>
		
		</div>
		
		<div id="depTitle2" style="margin-top: 35px; display: none;">
						
						
						<h1>Background Image:</h1>
						<p style="margin-top: -10px;">Optional - will override color background - this image will be repeated as the background image...</p>
						
					</div>
					
				
				<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
						
					
						
						<h3 style="margin-top: 0px;" >Background Image:</h3>
					
						<select id="bg_image">
							
							<option value="no" <?php if($results->bg_image == "" || $results->bg_color == "no"){ echo "selected"; } ?> >NO TEXTURE</option>
							
							<option value="wood" <?php if($results->bg_image == "wood"){ echo "selected"; } ?> >WOOD</option>
						
							<option value="concrete" <?php if($results->bg_image == "concrete"){ echo "selected"; } ?> >CONCRETE</option>
							
							<option value="dark" <?php if($results->bg_image == "dark"){ echo "selected"; } ?> >DARK METAL</option>
							
							<option value="mesh" <?php if($results->bg_image == "mesh"){ echo "selected"; } ?> >MESH</option>
							
							<option value="blocks" <?php if($results->bg_image == "blocks"){ echo "selected"; } ?> >BLOCKS</option>
							
							
						</select>
					
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
						<p style="margin-top: -10px;">eg. "This Months Free Webinar..."</p>
						
						<input type="text" id="copy_pre" value="<?php echo stripcslashes($results->copy_pre); ?>" />
						
						<h3 style="margin-top: 15px;" >Main Headline: </h3>
						<p style="margin-top: -10px;">eg. "SEO Tips For Local Clients"</p>
						
						<input type="text" id="copy_main" value="<?php echo stripcslashes($results->copy_main); ?>" />
						
						<h3 style="margin-top: 15px;" >Presenters Names: </h3>
						<p style="margin-top: -10px;">eg. "with John Wayne & James Dean"</p>
						
						<input type="text" id="copy_names" value="<?php echo stripcslashes($results->copy_names); ?>" />
						
						<h3 style="margin-top: 15px;" >Time Webinar Takes Place: </h3>
						<p style="margin-top: -10px;">eg. "Thursday, Oct 28th, 4:00pm EST"</p>
						
						<input type="text" id="copy_time" value="<?php echo stripcslashes($results->copy_time); ?>" />	
					
						<h3 style="margin-top: 15px;" >Main Body: </h3>
						<p style="margin-top: -10px;">Shown under the time for webinar...</p>
						
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
							
							
							<h3 style="margin-top: 0px;" >Opt-in Headline:</h3>
							<p style="margin-top: -10px;">This will appear above the optin form "Sign up to the Webinar"...</p>
						
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
							
						<h3 style="margin-top: 15px;" >Spam Notice Copy:</h3>
							<p style="margin-top: -10px;">This is shown under the optin - spam notice...</p>
						
							<input type="text" id="copy_spam" value="<?php echo stripcslashes($results->copy_spam); ?>" />
						
						
						<h3 style="margin-top: 15px;" >Footer Company Name (left):</h3>
							<p style="margin-top: -10px;">This is shown on the footer, on the left side, usually a company name...</p>
						
							<input type="text" id="copy_company" value="<?php echo stripcslashes($results->copy_company); ?>" />
						
						<h3 style="margin-top: 15px;" >Footer Notice (right):</h3>
							<p style="margin-top: -10px;">This is shown on the footer, on the right side, all rights reserved, etc...</p>
						
							<input type="text" id="copy_rights" value="<?php echo stripcslashes($results->copy_rights); ?>" />
									
					
					</div>
					
				</div>
				
				</div>
		
		<div id="depTitle3" style="margin-top: 35px;">
						
						
						<h1>Presenter Photo / Image:</h1>
						<p style="margin-top: -10px;">This image is the image of the presenter(s) or the logo of the product... <i>200x215 for best results</i></p>
						
					</div>
					
				
				<div class="well">
			
					<div id="edit_dep3" >	
		
					<div id="introMp3x"  >
						
					
						<h3 style="margin-top: 0px;" >Presenter Image:</h3>
						<p style="margin-top: -10px;">Must be a full path to an image - must end with .png / .jpg</p>
					
						<input type="text" id="share_image" value="<?php echo stripcslashes($results->share_image); ?>" />
					
						<a class="uibutton large launch_media_lib" photoBox='share_image' style="margin-left: 0px; margin-top: 15px;" href="#button">Upload Image</a>
					
					</div>
					
				</div>
				
				</div>
				
				
				<div id="depTitle2" style="margin-top: 35px;">
								
								<h1>Successful Opt-in Copy:</h1>
								<p style="margin-top: -10px;">This content is shown once they have opted in for the webinar, you can put any content you want here...</p>
								
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
	
	
	
	<div id="depTitle2" style="margin-top: 35px; display: block;">
					
					
					<h1>GoToMeeting Integration:</h1>
					<p style="margin-top: -10px;">Connect up your GoToMeeting campaign with this webinar landing page...</p>
					
				</div>
				
			
			<div class="well">
		
				<div id="edit_dep2" >	
	
				<div id="introMp3x"  >
					
				
					
					<h3 style="margin-top: 0px;" >GoToMeeting Key:</h3>
					<input type="text" id="success_image" value="<?php echo stripcslashes($results->success_image); ?>" />
					
				
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