<?php 

function adminpage_for_wpmediaremix() { ?>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
		<script>
			$(document).ready(function() {
			  	$(".tabLink").click(function() {
					tabLink = $(this).attr('tab');
					$('.tab').hide();
					$("."+tabLink).delay(500).show();
					$(".tabLink").removeClass('active');
					$(this).addClass('active');
				});

				$(".second").click(function() {
					tabLink = $(this).attr('tab');
					$('.inner_tab').hide();
					$("."+tabLink).delay(500).show();
					$(".second").removeClass('active');
					$(this).addClass('active');
				});

				$('#message').fadeOut(3000);

				
			});
		</script>
		<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
		<style>
			#options_panel {
				width: 600px;
				background: #fff;
				box-shadow: 0 0 4px #ddd;
				border: 1px solid #cec2b3;
				padding: 25px;
				border-bottom-left-radius: 10px;
				border-bottom-right-radius: 10px;
				font-size: 15px;
				margin-top: -2px;
				line-height: 21px;
				color: #666;
				background: url(../wp-content/plugins/wpmediaremix/include/bg.png) repeat-x top #e6e1db;
				font-family: 'Average Sans', sans-serif;
			}
			#options_panel input[type=text] {
				width: 100%;
				display: block;
				margin: 8px 0;
			}
			#options_panel select {
				width: 100%;
				display: block;
				margin: 8px 0;
			}
			#options_panel h1, #options_panel h2, #options_panel h3, #options_panel h4, #options_panel h5 {
				color: #333;
			}
			.tabLink {
				float: left;
				position: relative;
				padding:  17px 13px;
				text-decoration: none;
				padding-left: 42px;
				margin-top: 75px;
				color: #595959;
				font-weight: normal;
				outline: none;
				z-index: 999;
				border-right: 1px solid #d5d3d3;
				font-size: 16px;
				border-radius: 0;
			}
			.tabLink:first-child {
				margin-left: 20px;
			}
			#topnewbie {
				width: 650px;
				margin-top: -25px;
				margin-left: -45px;
				height: 120px;
				background: url(../wp-content/plugins/wpmediaremix/include/logo.png) no-repeat top left;
				background-position: 232px 17px
			}
			#options_panel a:hover {
				color: #7e7e7e;
			}
			a:focus {
				outline: none;
			}
			.active, .tabLink:hover {
				color: #7e7e7e !important;
			}
			.second {
				border: 1px solid #eee;
				border-bottom: none;
				float: left;
				margin-right: 4px;
				border-top-left-radius: 3px;
				border-top-right-radius: 3px;
				padding: 8px;
				text-decoration: none;
				color: #777;
			}
			.second.active {
				background: #ebebeb;
				border: 1px solid #ddd;
				border-bottom: none;
			}
			.dash {
				background: url(http://cdn5.iconfinder.com/data/icons/woocons1/Dashboard.png) no-repeat left;
				background-position: 6px 11px;
			}
			.dash:hover, .dash.active {
				background: url(http://cdn5.iconfinder.com/data/icons/woocons1/Dashboard.png) no-repeat left #ebebeb;
				background-position: 6px 11px;
			}
			.newEbook {
				background: url(http://cdn2.iconfinder.com/data/icons/august/PNG/Badge%20New.png) no-repeat left;
				background-position: 6px 11px;
			}
			.newEbook:hover, .newEbook.active {
				background: url(http://cdn2.iconfinder.com/data/icons/august/PNG/Badge%20New.png) no-repeat left #ebebeb;
				background-position: 6px 11px;
			}
			.help {
				background: url(http://cdn1.iconfinder.com/data/icons/Koloria-Icon-Set/30/Help.png) no-repeat left;
				background-position: 6px 11px;
			}
			.help:hover, .help.active {
				background: url(http://cdn1.iconfinder.com/data/icons/Koloria-Icon-Set/30/Help.png) no-repeat left #ebebeb;
				background-position: 6px 11px;
			}
			.blogEbook {
				background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/32x32/apps/system-file-manager.png) no-repeat left;
				background-position: 6px 11px;
			}
			.blogEbook:hover, .blogEbook.active {
				background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/32x32/apps/system-file-manager.png) no-repeat left #ebebeb;
				background-position: 6px 11px;
			}
			.tab {
				clear: both;
				padding-top: 10px;
			}
			hr {
				border: none;
				border-radius: 4px;
				border-top: 1px solid #eee;
			}
			.save {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 17px;
				color: #333;
				padding: 10px 20px;
				margin-top: 20px;
				width: 100%;
				background: -moz-linear-gradient(
					top,
					#ffbb00 0%,
					#ff7700);
				background: -webkit-gradient(
					linear, left top, left bottom, 
					from(#ffbb00),
					to(#ff7700));
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				border-radius: 6px;
				border: 1px solid #ff7700;
				-moz-box-shadow:
					0px 1px 3px rgba(000,000,000,0.5),
					inset 0px 0px 1px rgba(255,255,255,1);
				-webkit-box-shadow:
					0px 1px 3px rgba(000,000,000,0.5),
					inset 0px 0px 1px rgba(255,255,255,1);
				box-shadow:
					0px 1px 3px rgba(000,000,000,0.5),
					inset 0px 0px 1px rgba(255,255,255,1);
				font-weight: bold;
					cursor: pointer;
			}
		</style>
		<div id="options_panel">
			
			<div id="topnewbie">
				<a href="#" tab="tab1" class="tabLink dash active">Dashboard</a>
			<a href="#" tab="tab2" class="tabLink newEbook">New Player</a>
			<a href="#" tab="tab4" class="tabLink blogEbook">Manage Players</a>
			<a href="#" tab="tab3" class="tabLink help">Help Video</a>
			</div>
			


			
			<div class="tab tab1">
				<div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">Start Creating Your Own Media Player</h1>
					<p style="color: #837769">You have the power to create unlimited brandable media players that will work for you not against you... Get started now and manage your players here.</p>
				</div>
				<?php 
				

				if ( 'new' == $_REQUEST['action'] ) {

					wpmediaremix_addPlayer($_REQUEST['name'], $_REQUEST['logo'], $_REQUEST['headline'], $_REQUEST['subheadline'], $_REQUEST['button'], $_REQUEST['slider'], $_REQUEST['design'], $_REQUEST['alert'], $_REQUEST['alertTime'], $_REQUEST['flash'], $_REQUEST['buttonURL'], stripcslashes($_REQUEST['auto_responder']), $_REQUEST['ar_headline'], $_REQUEST['ar_button'], $_REQUEST['m4a'], $_REQUEST['ogg'], $_REQUEST['video'],$_REQUEST['video_poster'], $_REQUEST['content'], $_REQUEST['fb'], $_REQUEST['twitter'], $_REQUEST['ar_time'], $_REQUEST['rating']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Successfully Created New Player - Click "Manage Players" to edit and view.</strong></p></div> <br/>';
				}

				

				if ( $_GET['delete'] != "" ) {

					wpmediaremix_deletePlayer($_GET['delete']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>You Have Deleted a Media Player -- Cannot be retrieved.</strong></p></div> <br/>';
				}

				if ( $_GET['edit'] != '' ) { ?>
				<script>
					$(document).ready(function() {
					  	$('.tab').hide();
					  	$('.tab2').show();
					});
				</script>
				<?php }
			?>
				<div style="padding: 10px 20px;  background: #fff; border: 1px solid #ccc;border-radius: 10px;">
					<h2 style="color: #53483b">Full Control Over Your Media</h2>
					<p>Use your audio/video media files, customize a player and you can add it using a shortcode in any blog post or page. Visitors can view your media, share on social websites or even embed your custom player on their blogs!</p>
					<div style="width: 160px; float: left; padding: 0 10px">
						<h3 style="color: #53483b">Audio Player</h3>
						<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/32/Gnome-Audio-Volume-High-32.png" style="float: right; ">
						<p>Create beautiful audio players that will engage with your listeners using the player. </p>
					</div>
					<div style="width: 160px; float: left; padding: 0 10px">
						<h3 style="color: #53483b">Video Player</h3>
						<img src="http://cdn1.iconfinder.com/data/icons/nuvola2/32x32/apps/konqsidebar_mediaplayer.png" style="float: right; ">
						<p>Professional video players that are highly customizable and interactable.</p>
					</div>
					<div style="width: 160px; float: left; padding: 0 10px;">
						<h3 style="color: #e97c5f">Brand Your Player</h3>
						<img src="http://cdn2.iconfinder.com/data/icons/32pxmania/misc_57.png" style="float: right; ">
						<p>Brand your players with your logo, text, social links, button and even change design. </p>
					</div>
					<br clear="all"><br clear="all">
				</div>
				
			</div>
			<div class="tab tab2" style="display: none">
				
				<?php if ($_GET['edit'] != '') { ?>

				<?php
		    		global $post;
					global $wpdb;
					$getPage = $wpdb->prefix . "wpmediaremix";
					$getID = $_GET['edit'];
					$editBook = $wpdb->get_results("SELECT * FROM $getPage WHERE id = $getID" ,ARRAY_A);
			
					$tpl = get_post_meta($post->ID,'_template',true);
					
					foreach($editBook as $template){} 		
		        ?>
				

				<div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">Edit "<?php echo $template['name']; ?>" Player</h1>
					<p style="color: #837769">Make quick changes that will take effect immediately.</p>
				</div>
				<?php 

				if ( 'updatePlayer' == $_REQUEST['action'] ) {

					wpmediaremix_updatePlayer($_REQUEST['name'], $_REQUEST['logo'], $_REQUEST['headline'], $_REQUEST['subheadline'], $_REQUEST['button'], $_REQUEST['slider'], $_REQUEST['design'], $_REQUEST['alert'], $_REQUEST['alertTime'], $_REQUEST['flash'], $_REQUEST['buttonURL'], stripcslashes($_REQUEST['auto_responder']), $_REQUEST['ar_headline'], $_REQUEST['ar_button'], $_REQUEST['m4a'], $_REQUEST['ogg'], $_REQUEST['video'],$_REQUEST['video_poster'], $_REQUEST['content'], $_REQUEST['fb'], $_REQUEST['twitter'], $_REQUEST['ar_time'],$_REQUEST['rating'], $_GET['edit']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Successfully Updated " '.$template["name"].' " Media Player</strong></p></div> <br/><script> window.location = "admin.php?page=wpmediaremix&edit='. $template['id'] .'"; </script>';
				}

				?>
				
				<div style="padding: 10px 20px;  background: #fff; border: 1px solid #ccc;border-radius: 10px;">
				<p><a href="#" tab="brand" class="second active">Brand Player</a>
					<a href="#" tab="design" class="second">Design</a>
				<a href="#" tab="timed" class="second">Actions</a>
				<a href="#" tab="a_responder" class="second">Auto-Responder</a>
				<a href="#" tab="addMedia" class="second">Add Media</a>
				<a href="#" tab="extraContent" class="second">Content</a></p>
				<hr style="clear: both">
				<form id="newEbook" method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
					<input type="hidden" name="action" value="updatePlayer" />
					<input type="hidden" name="pageID" value="<?php echo $getID; ?>" />
					<div class="brand inner_tab">
						<h3>Required Informtion:</h3>
						<p>Add your player name, logo and main content.</p>
						<input type="hidden" value="<?php echo $template['name']; ?>"  name="name" />
						<strong>Logo Image:</strong>
						<input type="text" value="<?php echo $template['logo']; ?>" name="logo" />
						<strong>Headline:</strong>
						<input type="text" value="<?php echo $template['headline']; ?>" name="headline" />
						<strong>Sub Headline:</strong>
						<input type="text" value="<?php echo $template['subheadline']; ?>" name="subheadline" />
						<strong>Facebook FanPage URL:</strong>
						<input type="text" value="<?php echo $template['fb']; ?>" name="fb" />
						<strong>Twitter Profile URL:</strong>
						<input type="text" value="<?php echo $template['twitter']; ?>" name="twitter" />
					</div>
					<div class="design inner_tab" style="display: none">
						<h3>Customize Player:</h3>
						<p>Change button style, text and overall design style. </p>
						<strong>Button Text:</strong>
						<input type="text" value="<?php echo $template['button']; ?>" name="button" />
						<strong>Button Link URL:</strong>
						<input type="text" value="<?php echo $template['buttonURL']; ?>" name="buttonURL" />
						<strong>Popup Overlay:</strong>
						<select name="design" id="design">
							<option value="black" <?php if ($template['design'] == 'black') { ?> selected <?php } ?>>Black Opacity</option>
							<option value="none" <?php if ($template['design'] == 'none') { ?> selected <?php } ?>>None</option>
						</select>
						<strong>Star Rating:</strong>
						<select name="rating" id="rating">
							<option value="5" <?php if ($template['rating'] == '5') { ?> selected <?php } ?>>5 / 5 Rating</option>
							<option value="4" <?php if ($template['rating'] == '4') { ?> selected <?php } ?>>4 / 5 Rating</option>
							<option value="3" <?php if ($template['rating'] == '3') { ?> selected <?php } ?>>3 / 5 Rating</option>
							<option value="2" <?php if ($template['rating'] == '2') { ?> selected <?php } ?>>2 / 5 Rating</option>
							<option value="1" <?php if ($template['rating'] == '1') { ?> selected <?php } ?>>1 / 5 Rating</option>
							<option value="none">None</option>
						</select>
					</div>
					<div class="timed inner_tab" style="display: none">
						<h3>Timed Player Actions:</h3>
						<p>Set alert time, text and what time for button to flash. </p>
						<strong>Alert:</strong>
						<?php wp_editor( $template['alert'], 'alert', $settings = array() ); ?>
						<br>
						<strong>Alert Time:</strong>
						<input type="text" value="<?php echo $template['alertTime']; ?>" name="alertTime" />
						<strong>Button Flash Time:</strong>
						<input type="text" value="<?php echo $template['flash']; ?>" name="flash" />
					</div>
					<div class="a_responder inner_tab" style="display: none">
						<h3>Add Auto Responder:</h3>
						<p>Capture email leads using any auto-responder service form code. </p>
						<strong>Auto Responder Code:</strong>
						<textarea name="auto_responder" id="" style="width: 100%; height: 150px; font-size: 11px;"><?php echo htmlspecialchars($template['auto_responder']); ?></textarea> <br>
						<strong>Headline:</strong>
						<input type="text" value="<?php echo $template['ar_headline']; ?>" name="ar_headline" />
						<strong>Button Text:</strong>
						<input type="text" value="<?php echo $template['ar_button']; ?>" name="ar_button" />
						<strong>Time to Appear: ex. 00:00</strong>
						<input type="text" name="ar_time" value="<?php echo $template['ar_time']; ?>" />
					</div>
					<div class="addMedia inner_tab" style="display: none">
						<h3>Create Audio Player:</h3>
						<p>Convert your mp3 files for free using <a href="http://www.freemake.com/free_audio_converter/" target="_blank">this free mp3 convertor</a>. </p>
						<strong>URL to M4A File:</strong>
						<input type="text" value="<?php echo $template['m4a']; ?>" name="m4a" />
						<strong>URL to OGG File:</strong>
						<input type="text" value="<?php echo $template['ogg']; ?>" name="ogg" />
						<h3>Or Create Video Player:</h3>
						<p>Convert your video files to .m4v for free using <a href="http://www.freemake.com/free_video_converter/" target="_blank">this free video convertor</a>. </p>
						<strong>URL to M4V or MP4 File:</strong>
						<input type="text" value="<?php echo $template['video']; ?>" name="video" />
						<strong>URL to Video Poster:</strong>
						<input type="text" value="<?php echo $template['video_poster']; ?>" name="video_poster" />
					</div>
					<div class="extraContent inner_tab" style="display: none">
						<h3>Add Extra Content:</h3>
						<p>This will be displayed below your player functions. </p>
						<?php wp_editor( $template['content'], 'content', $settings = array() ); ?>
					</div>
					 
				</div>
				<input type="submit" value="Click Here to Save Media Player" class="save" >
					<br clear="all" ><br>
				</form>
				<?php } else { ?>
				<div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">Create New Media Player</h1>
					<p style="color: #837769">Follow this small wizard to get started.</p>
				</div>
				<div style="padding: 10px 20px;  background: #fff; border: 1px solid #ccc;border-radius: 10px;">
				<p><a href="#" tab="brand" class="second active">Brand Player</a>
					<a href="#" tab="design" class="second">Design</a>
				<a href="#" tab="timed" class="second">Actions</a>
				<a href="#" tab="a_responder" class="second">Auto-Responder</a>
				<a href="#" tab="addMedia" class="second">Add Media</a>
				<a href="#" tab="extraContent" class="second">Content</a></p>
				<hr style="clear: both">
				<form id="newEbook" method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
					<input type="hidden" name="action" value="new" />
					<div class="brand inner_tab">
						<h3>Required Informtion:</h3>
						<p>Add your player name, logo and main content.</p>
						<strong>Player Name <small>(* Required)</small>:</strong>
						<input type="text" name="name" />
						<strong>Logo Image:</strong>
						<input type="text" name="logo" />
						<strong>Headline:</strong>
						<input type="text" name="headline" />
						<strong>Sub Headline:</strong>
						<input type="text" name="subheadline" />
						<strong>Facebook FanPage URL:</strong>
						<input type="text" name="fb" />
						<strong>Twitter Profile URL:</strong>
						<input type="text" name="twitter" />
					</div>
					<div class="design inner_tab" style="display: none">
						<h3>Customize Player:</h3>
						<p>Change button style, text and overall design style. </p>
						<strong>Button Text:</strong>
						<input type="text" name="button" />
						<strong>Button Link URL:</strong>
						<input type="text" name="buttonURL" />
						<strong>Popup Overlay:</strong>
						<select name="design" id="design">
							<option value="black">Black Opacity</option>
							<option value="none">None</option>
						</select>
						<strong>Star Rating:</strong>
						<select name="rating" id="rating">
							<option value="5">5 / 5 Rating</option>
							<option value="4">4 / 5 Rating</option>
							<option value="3">3 / 5 Rating</option>
							<option value="2">2 / 5 Rating</option>
							<option value="1">1 / 5 Rating</option>
							<option value="none">None</option>
						</select>
					</div>
					<div class="timed inner_tab" style="display: none">
						<h3>Timed Player Actions:</h3>
						<p>Set alert time, text and what time for button to flash. </p>
						<strong>Alert:</strong>
						<?php wp_editor( $alert, 'alert', $settings = array() ); ?>
						<br>
						<strong>Alert Time:</strong>
						<input type="text" name="alertTime" />
						<strong>Button Flash Time:</strong>
						<input type="text" name="flash" />
					</div>
					<div class="a_responder inner_tab" style="display: none">
						<h3>Add Auto Responder:</h3>
						<p>Capture email leads using any auto-responder service form code. </p>
						<strong>Auto Responder Code:</strong>
						<textarea name="auto_responder" id="" style="width: 100%; height: 150px; font-size: 11px;"></textarea> <br>
						<strong>Headline:</strong>
						<input type="text" name="ar_headline" />
						<strong>Button Text:</strong>
						<input type="text" name="ar_button" />
						<strong>Time to Appear: ex. 00:00</strong>
						<input type="text" name="ar_time" />
					</div>
					<div class="addMedia inner_tab" style="display: none">
						<h3>Create Audio Player:</h3>
						<p>Convert your mp3 files for free using <a href="http://www.freemake.com/free_audio_converter/" target="_blank">this free mp3 convertor</a>. </p>
						<strong>URL to M4A File:</strong>
						<input type="text" name="m4a" />
						<strong>URL to OGG File:</strong>
						<input type="text" name="ogg" />
						<h3>Or Create Video Player:</h3>
						<p>Convert your video files to .m4v for free using <a href="http://www.freemake.com/free_video_converter/" target="_blank">this free video convertor</a>. </p>
						<strong>URL to M4V or MP4 File:</strong>
						<input type="text" name="video" />
						<strong>URL to Video Poster:</strong>
						<input type="text" name="video_poster" />
					</div>
					<div class="extraContent inner_tab" style="display: none">
						
						<h3>Add Extra Content:</h3>
						<p>This will be displayed below your player functions. </p>
						<?php wp_editor( $content, 'content', $settings = array() ); ?>
					</div>
					 
				</div> 
				<input type="submit" value="Click Here to Save Media Player" class="save" style="float: left;">
					<br clear="all" ><br>
				</form>
				<?php } ?>
			</div>
			<div class="tab tab3" style="display: none">
				<div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">Need Help? Watch This Video</h1>
					<p style="color: #837769">Watch this video to learn how it all works.</p>
					<div style="padding: 10px 20px;  background: #fff; border: 1px solid #ccc;border-radius: 10px;">
						<iframe src="http://www.screenr.com/embed/O9TH" style="width: 100%; height: 360px;" frameborder="0"></iframe>
					</div>
				</div>
				
			</div>
			<div class="tab tab4" style="display: none">
				 <?php
		    		global $post;
					global $wpdb;
					$getPage = $wpdb->prefix . "wpmediaremix";
					$templates = $wpdb->get_results("SELECT * FROM $getPage ORDER BY id DESC" ,ARRAY_A);
			
					$tpl = get_post_meta($post->ID,'_template',true);
					$checkNumber = 0;
					
					foreach($templates as $template)
					{
						$checkNumber += 1;
					} 		
		        ?>
		        <div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">View, Edit and Manage Players</h1>
					<p style="color: #837769">Here you can take control over all your players.</p>
				</div>
				<div style="padding: 10px 20px;  background: #fff; border: 1px solid #ccc;border-radius: 10px;">
		        <?php foreach($templates as $template) { ?>
					<strong style="padding: 10px;font-size: 16px; text-transform: capitalize; float: left"><?php echo $template['name']; ?></strong>
					<strong style="padding: 6px; padding-top: 16px;font-size: 13px; float: right;"><a href="admin.php?page=wpmediaremix&edit=<?php echo $template['id']; ?>"><img src="http://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/actions/gtk-edit.png" alt=""></a></strong>
					<strong style="padding: 6px; padding-top: 16px;font-size: 13px; float: right;"><a href="admin.php?page=wpmediaremix&delete=<?php echo $template['id']; ?>"><img src="http://cdn2.iconfinder.com/data/icons/vaga/trash.png" alt=""></a></strong>

					<?php if ($template['video'] == '') { ?>
						<strong style="padding: 5px; margin-right: 10px;font-size: 11px; letter-spacing: 1px; color: #98836a; border-radius: 4px; margin-top: 5px; border: 1px solid #ded7cf;background: #f7f6f4; float: right; font-weight: normal; width: 180px;"><input style="margin: 0;" type="text" value='[wpmediaremix player="audio" id="<?php echo $template['id']; ?>"]'></strong>
					<?php } else { ?>
						<strong style="padding: 5px; margin-right: 10px;font-size: 11px; letter-spacing: 1px; color: #98836a; border-radius: 4px; margin-top: 5px; border: 1px solid #ded7cf;background: #f7f6f4; float: right; font-weight: normal; width: 180px;"><input style="margin: 0;" type="text" value='[wpmediaremix player="video" id="<?php echo $template['id']; ?>"]'></strong>
					<?php } ?>
					<br clear="all"><hr>
				<?php } ?>
				</div>
			</div>
			<br>
			<span style="float: left; font-size: 12px; color: #666">WP Media Remix Player</span>
			<span style="float: right; font-size: 12px; color: #666">Copyright 2013 &copy; All Rights Reserved</span>
			<br clear="all">
		</div>
		<?php
	}

?>