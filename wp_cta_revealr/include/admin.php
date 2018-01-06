<?php 

function adminpage_for_wpcta_revealr() { ?>
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
		<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>
		<style>
			#options_panel {
				width: 630px;
				background: #fff;
				padding: 25px;
				border-bottom-left-radius: 10px;
				border-bottom-right-radius: 10px;
				font-size: 15px;
				margin-top: -2px;
				line-height: 21px;
				color: #666;
				font-family: 'Average Sans', sans-serif;
			}
			#options_panel input[type=text] {
				width: 100%;
				display: block;
				margin: 8px 0;
			}
			#options_panel h1 {
				font-family: 'Patrick Hand', cursive;
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
				margin-top: 75px;
				color: #595959;
				font-weight: normal;
				outline: none;
				z-index: 999;
				font-size: 16px;
				color: #fff !important;
				border-radius: 4px;
				text-shadow: 1px 1px 0 #000;
				border: 1px solid #10209b;
				padding:  15px 11px;
				margin-right: 5px;
				border: 1px solid #10209b;
-moz-box-shadow: inset 0 0 3px rgba(255,255,255,.75), inset 0 0 3px rgba(255,255,255,.75);
-webkit-box-shadow: inset 0 0 3px rgba(255,255,255,.75), inset 0 0 3px rgba(255,255,255,.75);
box-shadow: inset 0 0 3px rgba(255,255,255,.75), inset 0 0 3px rgba(255,255,255,.75);
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzM0NGU4NSIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMSUiIHN0b3AtY29sb3I9IiMzNDRlODUiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM0NDY1YWUiIHN0b3Atb3BhY2l0eT0iMSIvPgogICA8L2xpbmVhckdyYWRpZW50PgoKPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIGZpbGw9InVybCgjaGF0MCkiIC8+Cjwvc3ZnPg==);
background-image: -moz-linear-gradient(bottom, #344e85 0%, #344e85 0.51%, #4465ae 100%);
background-image: -o-linear-gradient(bottom, #344e85 0%, #344e85 0.51%, #4465ae 100%);
background-image: -webkit-linear-gradient(bottom, #344e85 0%, #344e85 0.51%, #4465ae 100%);
background-image: linear-gradient(bottom, #344e85 0%, #344e85 0.51%, #4465ae 100%);
			}
			.tabLink:first-child {
				margin-left: 20px;
			}
			#topnewbie {
				width: 638px;
				display: block;
				padding-top: 130px;	
				margin-left: -30px;
				margin-bottom: -100px;
							height: 205px;
				background: url(../wp-content/plugins/wp_cta_revealr/include/logo.png) no-repeat top center;
				
			}
			#options_panel a:hover {
				color: #7e7e7e;
			}
			a:focus {
				outline: none;
			}
			.active, .tabLink:hover {
				color: #fff !important;
				border-radius: 4px;
				text-shadow: 1px 1px 0 #000;
				border: 1px solid #10209b;
				padding:  15px 11px;
				border: 1px solid #9b260f;
-moz-box-shadow: inset 0 0 3px rgba(255,255,255,.75), inset 0 0 3px rgba(255,255,255,.75);
-webkit-box-shadow: inset 0 0 3px rgba(255,255,255,.75), inset 0 0 3px rgba(255,255,255,.75);
box-shadow: inset 0 0 3px rgba(255,255,255,.75), inset 0 0 3px rgba(255,255,255,.75);
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2NhM2UyMyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMSUiIHN0b3AtY29sb3I9IiNjYTNlMjMiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlYjQ5MmEiIHN0b3Atb3BhY2l0eT0iMSIvPgogICA8L2xpbmVhckdyYWRpZW50PgoKPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIGZpbGw9InVybCgjaGF0MCkiIC8+Cjwvc3ZnPg==);
background-image: -moz-linear-gradient(bottom, #ca3e23 0%, #ca3e23 0.51%, #eb492a 100%);
background-image: -o-linear-gradient(bottom, #ca3e23 0%, #ca3e23 0.51%, #eb492a 100%);
background-image: -webkit-linear-gradient(bottom, #ca3e23 0%, #ca3e23 0.51%, #eb492a 100%);
background-image: linear-gradient(bottom, #ca3e23 0%, #ca3e23 0.51%, #eb492a 100%);

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
				
				font-size: 17px;
				color: #333;
				padding: 20px;
				margin-top: 20px;
				width: 95%;
				margin: 20px;
				border: 1px solid #a97612;
-moz-box-shadow: inset 0 0 5px rgba(255,255,255,.75), inset 0 0 5px rgba(255,255,190,.75);
-webkit-box-shadow: inset 0 0 5px rgba(255,255,255,.75), inset 0 0 5px rgba(255,255,190,.75);
box-shadow: inset 0 0 5px rgba(255,255,255,.75), inset 0 0 5px rgba(255,255,190,.75);
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZkODcwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZlYWYwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+);
background-image: -moz-linear-gradient(bottom, #fd8700 0%, #feaf00 100%);
background-image: -o-linear-gradient(bottom, #fd8700 0%, #feaf00 100%);
background-image: -webkit-linear-gradient(bottom, #fd8700 0%, #feaf00 100%);
background-image: linear-gradient(bottom, #fd8700 0%, #feaf00 100%);
border-radius: 5px;
font-size: 21px;
color: #623d0b;
text-shadow: 1px 1px 0 #febe35;
				font-weight: bold;
					cursor: pointer;
			}
		</style>
		<div id="options_panel">
			
			<div id="topnewbie">
				<a href="#" tab="tab1" class="tabLink dash active"><img src="https://cdn3.iconfinder.com/data/icons/flatforlinux/24/15-Dashboard%20.png" style="margin-bottom: -6px; margin-right: 8px">Dashboard</a>
			<a href="#" tab="tab2" class="tabLink newEbook"><img src="https://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/actions/folder-new.png" style="margin-bottom: -6px; margin-right: 8px">New Shortcode</a>
			<a href="#" tab="tab4" class="tabLink blogEbook"><img src="https://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/apps/system-file-manager.png" style="margin-bottom: -6px; margin-right: 8px">Manage Shortcode</a>
			<a href="#" tab="tab3" class="tabLink help"><img src="https://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/stock/generic/stock_help-agent.png" style="margin-bottom: -6px; margin-right: 8px">Help Video</a>
			</div>
			


			
			<div class="tab tab1">
				<div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">Start Creating Your Own Reveal Button</h1>
					<p style="color: #837769">You have the power to create unlimited call to action reveal buttons to display links, coupons, and much more!</p>
				</div>
				<?php 
				

				if ( 'new' == $_REQUEST['action'] ) {

					wpcta_revealr_addPlayer($_REQUEST['name'], $_REQUEST['background'], $_REQUEST['headline'], $_REQUEST['subheadline'], $_REQUEST['button'], $_REQUEST['revealButton'], $_REQUEST['price'], $_REQUEST['discount'], $_REQUEST['revealText'], $_REQUEST['footerText'], stripcslashes($_REQUEST['auto_responder']), $_REQUEST['ar_headline'], $_REQUEST['ar_button'],  $_REQUEST['content'], $_REQUEST['fb'], $_REQUEST['twitter'], $_REQUEST['ar_time'], $_REQUEST['rating']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Successfully Created New Player - Click "Manage Players" to edit and view.</strong></p></div> <br/>';
				}

				

				if ( $_GET['delete'] != "" ) {

					wpcta_revealr_deletePlayer($_GET['delete']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>You Have Deleted a Shortcode -- Cannot be retrieved.</strong></p></div> <br/>';
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
				<div style="padding: 10px 20px;  background: #fff;  box-shadow: 0 0 5px #ccc; border: 1px solid #ccc;border-radius: 10px;">
					<h2 style="color: #53483b">Full Control Over Your Reveal Button</h2>
					<p>You can increase your conversions on affiliate offers or your own offers!</p>
					<div style="width: 160px; float: left; padding: 0 10px">
						<h3 style="color: #53483b">CTA Buttons</h3>
						<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/32/Gnome-Audio-Volume-High-32.png" style="float: right; ">
						<p>Create beautiful audio players that will engage with your listeners using the player. </p>
					</div>
					<div style="width: 160px; float: left; padding: 0 10px">
						<h3 style="color: #53483b">Design Settings</h3>
						<img src="http://cdn1.iconfinder.com/data/icons/nuvola2/32x32/apps/konqsidebar_mediaplayer.png" style="float: right; ">
						<p>Professional video players that are highly customizable and interactable.</p>
					</div>
					<div style="width: 160px; float: left; padding: 0 10px;">
						<h3 style="color: #e97c5f">More Features</h3>
						<img src="http://cdn2.iconfinder.com/data/icons/32pxmania/misc_57.png" style="float: right; ">
						<p>Brand your players with your background, text, social links, button and even change design. </p>
					</div>
					<br clear="all"><br clear="all">
				</div>
				
			</div>
			<div class="tab tab2" style="display: none">
				
				<?php if ($_GET['edit'] != '') { ?>

				<?php
		    		global $post;
					global $wpdb;
					$getPage = $wpdb->prefix . "wpcta_revealr";
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

					wpcta_revealr_updatePlayer($_REQUEST['name'], $_REQUEST['background'], $_REQUEST['headline'], $_REQUEST['subheadline'], $_REQUEST['button'], $_REQUEST['revealButton'], $_REQUEST['price'], $_REQUEST['discount'], $_REQUEST['revealText'], $_REQUEST['footerText'], stripcslashes($_REQUEST['auto_responder']), $_REQUEST['ar_headline'], $_REQUEST['ar_button'],  $_REQUEST['content'], $_REQUEST['fb'], $_REQUEST['twitter'], $_REQUEST['ar_time'], $_REQUEST['rating'], $_GET['edit']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Successfully Updated " '.$template["name"].' " Shortcode</strong></p></div> <br/><script> window.location = "admin.php?page=wpcta_revealr&edit='. $template['id'] .'"; </script>';
				}

				?>
				
				<div style="padding: 10px 20px;  background: #fff; border: 1px solid #ccc;border-radius: 10px;">
				<p><a href="#" tab="brand" class="second active">Main Settings</a>
					<a href="#" tab="design" class="second">Customize</a>
					<a href="#" tab="timed" class="second">CTA Button</a>
				<a href="#" tab="a_responder" class="second">Auto-Responder</a></p>
				<hr style="clear: both">
				<form id="newEbook" method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
					<input type="hidden" name="action" value="updatePlayer" />
					<input type="hidden" name="pageID" value="<?php echo $getID; ?>" />
					<div class="brand inner_tab">
						<h3>Required Informtion:</h3>
						<p>Add your player name, background and main content.</p>
						<input type="hidden" value="<?php echo $template['name']; ?>"  name="name" />
						<strong>Background Image:</strong>
						<input type="text" value="<?php echo $template['background']; ?>" name="background" />
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
						<strong>Reveal Button Text:</strong>
						<input type="text" value="<?php echo $template['revealButton']; ?>" name="revealButton" />
						<strong>Reveal Text:</strong>
						<input type="text" value="<?php echo $template['revealText']; ?>" name="revealText" />
						<strong>Footer Text:</strong>
						<input type="text" value="<?php echo $template['footerText']; ?>" name="footerText" />
						<strong>Price / Discount:</strong>
						<input type="text" value="<?php echo $template['price']; ?>" name="price" />
						<strong>Small Text:</strong>
						<input type="text" value="<?php echo $template['discount']; ?>" name="discount" />
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
					<div class="extraContent inner_tab" style="display: none">
						
						<h3>Add Extra Content:</h3>
						<p>This will be displayed below your player functions. </p>
						<?php wp_editor( $content, 'content', $settings = array() ); ?>
					</div>
					
				<input type="submit" value="Click Here to Save Shortcode" class="save" >
					<br clear="all" ><br>
				</form>
				<?php } else { ?>
				<div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">Create New Shortcode</h1>
					<p style="color: #837769">Follow this small wizard to get started.</p>
				</div>
				<div style="padding: 10px 20px;  background: #fff; margin-top: -20px;border-radius: 10px;">
				<p><a href="#" tab="brand" class="second active">Main Settings</a>
					<a href="#" tab="design" class="second">Customize</a>
					<a href="#" tab="timed" class="second">CTA Button</a>
				<a href="#" tab="a_responder" class="second">Auto-Responder</a></p>
				<hr style="clear: both">
				<form id="newEbook" method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
					<input type="hidden" name="action" value="new" />
					<div class="brand inner_tab">
						<h3>Required Informtion:</h3>
						<p>Add your player name, logo and main content.</p>
						<strong>Player Name <small>(* Required)</small>:</strong>
						<input type="text" name="name" />
						
						<strong>Headline:</strong>
						<input type="text" name="headline" />
						<strong>Sub Headline:</strong>
						<input type="text" name="subheadline" />
						<strong>Footer Text:</strong>
						<input type="text"  name="footerText" />
						<strong>Social Media URL: <small>( Page to Share on Facebook, Twitter and Google+ )</small></strong>
						<input type="text" name="fb" />
					</div>
					<div class="design inner_tab" style="display: none">
						<h3>Customize Player:</h3>
						<strong>Background:</strong>
						<select name="background" id="background">
							<option value="1">Orange Style</option>
						</select>
						<strong>Button Style:</strong>
						<select name="buttonStyle" id="buttonStyle">
							<option value="1">Orange Style</option>
						</select>
						<strong>Coupon Style:</strong>
						<select name="couponStyle" id="couponStyle">
							<option value="1">Orange Style (Sale)</option>
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
						<h3>CTA Button:</h3>
						<strong>Reveal Button Text:</strong>
						<input type="text"  name="revealButton" />
						<strong>Coupon Text:</strong>
						<input type="text"  name="revealText" />
						<strong>Coupon Link: <small>( Leave blank to show only text )</small></strong>
						<input type="text"  name="revealLink" />
						<br>
						<hr>
						<br>
						<strong>Price / Discount:</strong>
						<input type="text"  name="price" />
						<strong>Small Text:</strong>
						<input type="text"  name="discount" />
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
					
					<div class="extraContent inner_tab" style="display: none">
						
						<h3>Add Extra Content:</h3>
						<p>This will be displayed below your player functions. </p>
						<?php wp_editor( $content, 'content', $settings = array() ); ?>
					</div>
					 
				</div> 
				<input type="submit" value="Click Here to Save Shortcode" class="save" style="float: left;">
					<br clear="all" ><br>
				</form>
				<?php } ?>
			</div>
			<div class="tab tab3" style="display: none">
				<div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">Need Help? Watch This Video</h1>
					<p style="color: #837769">Watch this video to learn how it all works.</p>
					<div style="padding: 10px 20px;  background: #fff; box-shadow: 0 0 5px #ccc; border: 1px solid #ccc;border-radius: 10px;">
						<iframe src="http://www.screenr.com/embed/O9TH" style="width: 100%; height: 360px;" frameborder="0"></iframe>
					</div>
				</div>
				
			</div>
			<div class="tab tab4" style="display: none">
				 <?php
		    		global $post;
					global $wpdb;
					$getPage = $wpdb->prefix . "wpcta_revealr";
					$templates = $wpdb->get_results("SELECT * FROM $getPage ORDER BY id DESC" ,ARRAY_A);
			
					$tpl = get_post_meta($post->ID,'_template',true);
					$checkNumber = 0;
					
					foreach($templates as $template)
					{
						$checkNumber += 1;
					} 		
		        ?>
		        <div style="padding: 10px 30px; text-align: center; ">
					<h1 style="color: #53483b">View, Edit and Manage Shortcodes</h1>
					<p style="color: #837769">Here you can take control over all your shortcodes.</p>
				</div>
				<div style="padding: 10px 20px;  background: #fff;  box-shadow: 0 0 5px #ccc; border: 1px solid #ccc;border-radius: 10px;">
		        <?php foreach($templates as $template) { ?>
					<strong style="padding: 10px;font-size: 16px; text-transform: capitalize; float: left"><?php echo $template['name']; ?></strong>
					<strong style="padding: 6px; padding-top: 16px;font-size: 13px; float: right;"><a href="admin.php?page=wpcta_revealr&edit=<?php echo $template['id']; ?>"><img src="http://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/actions/gtk-edit.png" alt=""></a></strong>
					<strong style="padding: 6px; padding-top: 16px;font-size: 13px; float: right;"><a href="admin.php?page=wpcta_revealr&delete=<?php echo $template['id']; ?>"><img src="http://cdn2.iconfinder.com/data/icons/vaga/trash.png" alt=""></a></strong>

					<strong style="padding: 5px; margin-right: 10px;font-size: 11px; letter-spacing: 1px; color: #98836a; border-radius: 4px; margin-top: 5px; border: 1px solid #ded7cf;background: #f7f6f4; float: right; font-weight: normal; width: 180px;"><input style="margin: 0;" type="text" value='[wpcta_revealr id="<?php echo $template['id']; ?>"]'></strong>
					
					<br clear="all"><hr>
				<?php } 
?>
				</div>
			</div>
			<br>
			<span style="float: left; font-size: 12px; color: #666">WP CTA Revealr</span>
			<span style="float: right; font-size: 12px; color: #666">Copyright 2013 &copy; All Rights Reserved</span>
			<br clear="all">
		</div>
		<?php
	}
	?>