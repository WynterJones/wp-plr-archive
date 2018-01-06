<?php

 add_action( 'init', 'create_locallander' );
	function create_locallander() {
		register_post_type( 'lbp',
			array(
				'labels' => array(
					'name' => __( 'Local Lander' ),
					'singular_name' => __( 'Local Lander' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => plugins_url().'/locallander/favicon.png',
			'rewrite' => true
			)
		);
		flush_rewrite_rules( );
	}

add_action( 'add_meta_boxes', 'settings_locallander' );
function settings_locallander()
{
	add_meta_box( 'lbp', 'Build Your Local Lander Page:', 'create_lbp_settings', 'lbp', 'normal', 'high' );
}


function create_lbp_settings( $post )
{
	$values = get_post_custom( $post->ID );
	$lbp_logo = isset( $values['lbp_logo'] ) ? esc_attr( $values['lbp_logo'][0] ) : '';
	$lbp_cta1 = isset( $values['lbp_cta1'] ) ? esc_attr( $values['lbp_cta1'][0] ) : '';
	$lbp_cta2 = isset( $values['lbp_cta2'] ) ? esc_attr( $values['lbp_cta2'][0] ) : '';
	$lbp_typography = isset( $values['lbp_typography'] ) ? esc_attr( $values['lbp_typography'][0] ) : '';
	$lbp_buttonstyle = isset( $values['lbp_buttonstyle'] ) ? esc_attr( $values['lbp_buttonstyle'][0] ) : '';
	$lbp_background = isset( $values['lbp_background'] ) ? esc_attr( $values['lbp_background'][0] ) : '';
	$lbp_footer2 = isset( $values['lbp_footer2'] ) ? esc_attr( $values['lbp_footer2'][0] ) : '';
	$lbp_footer = isset( $values['lbp_footer'] ) ? esc_attr( $values['lbp_footer'][0] ) : '';
	$lbp_photo1 = isset( $values['lbp_photo1'] ) ? esc_attr( $values['lbp_photo1'][0] ) : '';
	$lbp_photo2 = isset( $values['lbp_photo2'] ) ? esc_attr( $values['lbp_photo2'][0] ) : '';
	$lbp_photo3 = isset( $values['lbp_photo3'] ) ? esc_attr( $values['lbp_photo3'][0] ) : '';
	$lbp_photo4 = isset( $values['lbp_photo4'] ) ? esc_attr( $values['lbp_photo4'][0] ) : '';
	$lbp_bg1 = isset( $values['lbp_bg1'] ) ? esc_attr( $values['lbp_bg1'][0] ) : '';
	$lbp_bg2 = isset( $values['lbp_bg2'] ) ? esc_attr( $values['lbp_bg2'][0] ) : '';
	$lbp_bg3 = isset( $values['lbp_bg3'] ) ? esc_attr( $values['lbp_bg3'][0] ) : '';
	$lbp_tablink1 = isset( $values['lbp_tablink1'] ) ? esc_attr( $values['lbp_tablink1'][0] ) : '';
	$lbp_tabcontent1 = isset( $values['lbp_tabcontent1'] ) ? esc_attr( $values['lbp_tabcontent1'][0] ) : '';
	$lbp_tablink4 = isset( $values['lbp_tablink4'] ) ? esc_attr( $values['lbp_tablink4'][0] ) : '';
	$lbp_tabcontent4 = isset( $values['lbp_tabcontent4'] ) ? esc_attr( $values['lbp_tabcontent4'][0] ) : '';
	$lbp_tablink2 = isset( $values['lbp_tablink2'] ) ? esc_attr( $values['lbp_tablink2'][0] ) : '';
	$lbp_tabcontent2 = isset( $values['lbp_tabcontent2'] ) ? esc_attr( $values['lbp_tabcontent2'][0] ) : '';
	$lbp_tablink3 = isset( $values['lbp_tablink3'] ) ? esc_attr( $values['lbp_tablink3'][0] ) : '';
	$lbp_tabcontent3 = isset( $values['lbp_tabcontent3'] ) ? esc_attr( $values['lbp_tabcontent3'][0] ) : '';
	$lbp_gmap = isset( $values['lbp_gmap'] ) ? esc_attr( $values['lbp_gmap'][0] ) : '';
	$lbp_yelp = isset( $values['lbp_yelp'] ) ? esc_attr( $values['lbp_yelp'][0] ) : '';
	$lbp_fbcomments = isset( $values['lbp_fbcomments'] ) ? esc_attr( $values['lbp_fbcomments'][0] ) : '';
	$lbp_fbpage = isset( $values['lbp_fbpage'] ) ? esc_attr( $values['lbp_fbpage'][0] ) : '';
	$lbp_twitter = isset( $values['lbp_twitter'] ) ? esc_attr( $values['lbp_twitter'][0] ) : '';
	$lbp_buttontext = isset( $values['lbp_buttontext'] ) ? esc_attr( $values['lbp_buttontext'][0] ) : '';
	$lbp_websiteurl = isset( $values['lbp_websiteurl'] ) ? esc_attr( $values['lbp_websiteurl'][0] ) : '';
	$lbp_phonenumber = isset( $values['lbp_phonenumber'] ) ? esc_attr( $values['lbp_phonenumber'][0] ) : '';
	$lbp_socialh1 = isset( $values['lbp_socialh1'] ) ? esc_attr( $values['lbp_socialh1'][0] ) : '';
	$lbp_socialh2 = isset( $values['lbp_socialh2'] ) ? esc_attr( $values['lbp_socialh2'][0] ) : '';
	$lbp_optinh1 = isset( $values['lbp_optinh1'] ) ? esc_attr( $values['lbp_optinh1'][0] ) : '';
	$lbp_optinh2 = isset( $values['lbp_optinh2'] ) ? esc_attr( $values['lbp_optinh2'][0] ) : '';
	$lbp_optinh3 = isset( $values['lbp_optinh3'] ) ? esc_attr( $values['lbp_optinh3'][0] ) : '';
	$lbp_googlecontent = isset( $values['lbp_googlecontent'] ) ? esc_attr( $values['lbp_googlecontent'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
?>
	<style type="text/css">
		.metaBox label {
			display: block;
			text-transform: uppercase;
			font-size: 11px;
			color: #4278a6;
			font-weight: bold;
			padding: 5px 0;
		}
		.metaBox input[type=text] {
			padding: 5px;
			font-size: 16px;
			width: 650px;
		}
		.metaBox select {
			padding: 5px;
			font-size: 16px;
			width: 650px;
		}
		.metaBox textarea {
			padding: 5px;
			font-size: 16px;
			width: 650px;
			height: 165px;
		}
	</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
						

		<script type="text/javascript">
		<?php $upload_dir = wp_upload_dir(); ?>
			$(document).ready(function() {

		  	$(".tab_link").click(function() {
				tabLink = $(this).attr('tab');
				$('.tabs').fadeOut();
				$("."+tabLink).delay(500).fadeIn();
				$(".tab_link").removeClass('active');
				$(this).addClass('active');
			});


			 

								// var uploadID = ''; /*setup the var*/

								// jQuery('.upload').click(function() {
								//     uploadID = jQuery(this).prev('input'); /*grab the specific input*/
								//     formfield = jQuery('.upload').attr('name');
								//     tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
								//     return false;
								// });

								// window.send_to_editor = function(html) {
								//     imgurl = jQuery('img',html).attr('src');
								//     uploadID.val(imgurl); /*assign the value to the input*/
								//     tb_remove();
								// };


								

			});
		</script>
		<style>
			@import url(http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic);
			#siteOptions {
				width: 100%;
				overflow: hidden;
				font-family: 'Noto Sans', sans-serif;
				text-shadow: 0px 0px 1px transparent; 
				font-size: 21px;
			}
			
			#fb_nav {
				width: 200px;
				float: left;
				padding: 10px; padding-left: 19px; 			
				background: #48656D;
border-bottom-left-radius: 5px;
border-top-left-radius: 5px;
margin: 15px 0;
position: relative;
z-index: 1;
border-right: none;
margin-left: 15px;


			}
				#fb_nav ul {
					margin-top: 0;

				}
				#fb_nav ul li a {
					padding: 10px;
					padding-left: 45px;
					padding-right: 20px;
					display: block;
					font-size: 13px;
					width: 150px;
					margin-right: 10px;  border-radius: 5px;	
					color: #fff;
					text-decoration: none;
				}
			#fb_tabs {
				background: #fff;
				float: left;
				width: 600px;
				margin: 15px 0;
				position: relative;
z-index: 33;
				border-bottom-right-radius: 5px;
				border-top-right-radius: 5px;
				border-top-left-radius: 5px;
				margin-top: -80px;
				border: 1px solid #ccc;
				padding: 14px 24px;
			}
			input[type=text] {
				display: block;
				width: 100%;
				font-size: 16px;
				padding: 6px;
				margin: 5px 0;
				color: #666;
			}
			textarea {
				display: block;
				width: 100%;
				height: 150px;
				font-size: 14px;
				padding: 6px;
				margin: 5px 0;
				color: #666;
			}
			select {
				display: block;
				width: 100%;
				font-size: 16px;
				padding: 6px;
				margin: 5px 0;
				color: #666;
			}
			#siteOptions strong {
				padding: 0 0;
				margin-bottom: -10px;
				display: block;
				font-size: 16px;
			}
			#siteOptions p {
				font-size: 14px;
				line-height: 21px;
			}
			#siteOptions .dashboard {
				background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/apps/Service%20Manager.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .dashboard.active, #siteOptions .dashboard:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/apps/Service%20Manager.png) no-repeat left #fff;
					background-position: 9px 7px;
					color: #333;
				}
			#siteOptions .design {
				background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/actions/gtk-edit.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .design.active, #siteOptions .design:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/actions/gtk-edit.png) no-repeat left #fff;
					background-position: 9px 7px; color: #333;
				}
			#siteOptions .slideshow {
				background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/actions/tab_new_raised.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .slideshow.active, #siteOptions .slideshow:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/actions/tab_new_raised.png) no-repeat left #fff;
					background-position: 9px 7px; color: #333;
				}
			#siteOptions .map {
				background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/apps/keditbookmarks.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .map.active, #siteOptions .map:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/24x24/apps/keditbookmarks.png) no-repeat left #fff;
					background-position: 9px 7px; color: #333;
				}
			#siteOptions .menu {
				background: url(http://cdn1.iconfinder.com/data/icons/professional-toolbar-icons-png/24/Login.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .menu.active, #siteOptions .menu:hover {
					background: url(http://cdn1.iconfinder.com/data/icons/professional-toolbar-icons-png/24/Login.png) no-repeat left #fff;
					background-position: 9px 7px; color: #333;
				}
			#siteOptions .language {
				background: url(http://cdn3.iconfinder.com/data/icons/flatforlinux/24/27-Edit%20Text.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .language.active, #siteOptions .language:hover {
					background: url(http://cdn3.iconfinder.com/data/icons/flatforlinux/24/27-Edit%20Text.png) no-repeat left #fff;
					background-position: 9px 7px; color: #333;
				}
			#siteOptions .extra {
				background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/stock/generic/stock_people.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .extra.active, #siteOptions .extra:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/stock/generic/stock_people.png) no-repeat left #fff;
					background-position: 9px 7px; color: #333;
				}
			#siteOptions .photos {
				background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .photos.active, #siteOptions .photos:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left #fff;
					background-position: 9px 7px; color: #333;
				}
			#siteOptions hr {
				border: none;
				border-bottom: 1px solid #ddd;
				margin-bottom: 20px;
			}
			#postdivrich {
				display: none;
			}
		</style>
 <?php
    		  global $post;
			  global $wpdb;
			  $getlead = $wpdb->prefix . "locallander_leads";
			  $getTitle = get_the_id();
			  $templates = $wpdb->get_results("SELECT * FROM $getlead WHERE pageID = $getTitle" ,ARRAY_A);
	
			  $tpl = get_post_meta($post->ID,'_template',true);
			  $checkNumber = 0;
			
				foreach($templates as $template)
				{
					$checkNumber += 1;
				} 
				
        ?>
			<div id="siteOptions"> <a name="tops"></a>
				<br><br>
				<img src="<?php echo plugins_url() ?>/locallander/logo.png" style="float: left; margin-top: 10px; margin-left: 20px;width: 200px">
				                <div id="fb_nav" style="clear: left;">
				                	<br>
<ul> <li><a href="#tops" tab="tab1" class="tab_link active dashboard">Main Settings</a></li>
<li><a href="#tops" tab="tab2" class="design tab_link">Design Your Page</a></li>                         <li><a
href="#tops" tab="tab4" class="slideshow tab_link">Edit Main Content</a></li>  
<li><a
href="#tops" tab="tab5" class="map tab_link">Extra Features</a></li>
<li><a
href="#tops" tab="tab3" class="extra tab_link">Your Collect Leads</a></li>
                      </ul>
                      
                      <strong style="padding-top: 3px; font-size: 14px; width: 195px; float: left; color: #fff !important;background: #2A3B40; padding: 9px; border-radius: 7px; padding-right: 14px;"><span style="background: #fff; padding: 2px 8px; border-radius: 20px; font-size: 16px;color: #2A3B40 !important; margin-right: 5px;"><?php echo $checkNumber; ?></span> Leads Collected</strong><br clear="all"><br>
</div>                 <div id="fb_tabs">                     
<div
class="tab1 tabs"> 
<h4>Edit Your Landing Page</h4> 
<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/64x64/apps/Service%20Manager.png" style="float: left; padding-right: 14px;">
<p>Here you can edit all the features that appear on your business landing page. You can change your logo, social info, google maps, design and much more. It is all sperated into tabs to make it easy to edit.</p>    
<hr>
		<p>
			<strong>Logo Image URL:</strong><br />
			<input type="text" name="lbp_logo" id="upload1" placeholder="Add URL to your logo image" value="<?php echo $lbp_logo; ?>" />
			
		</p> 
		<br><hr>                 
		<p>
			<strong>CTA Headline:</strong><br />
			<input type="text" name="lbp_cta1" id="lbp_cta1"  placeholder="Your Call to Action Headline" value="<?php echo $lbp_cta1; ?>" />
		</p>
		<p>
			<strong>CTA Sub-Headline:</strong><br />
			<input type="text" name="lbp_cta2" id="lbp_cta2"  placeholder="Sub Headline Below Headline" value="<?php echo $lbp_cta2; ?>" />
		</p>
		<br><hr>
		<p>
			<strong>Footer Line #1:</strong><br />
			<input type="text" name="lbp_footer2"   placeholder="Footer Left Text" id="lbp_footer2" value="<?php echo $lbp_footer2; ?>" />
		</p>
		<p>
			<strong>Footer Line #2:</strong><br />
			<input type="text" name="lbp_footer" id=""  placeholder="Footer Right Text" value="<?php echo $lbp_footer; ?>" />
		</p>
		
		<hr>
		<p style="font-size: 10px; text-align: right;">Copyright  &copy; LocalBusinessPage - All Rights Reserved</p>
		<p style="font-size: 10px; text-align: right; margin-top: -10px;">Icons provided by IconFinder.com</p>
</div>                     


<div class="tab2 tabs" style="display: none">
		<h4>Design Your Landing Page</h4> 
<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Gnome-Preferences-Other-64.png" style="float: left; padding-right: 14px;">
<p>Change the way your landing page looks to personalize it and fit it with your current brand. You can change the typography, background and much more. Just make changes, hit save and you can see your page change instantly.</p>    
<hr>				
						
						
						<strong>Headline Typography:</strong><br />
						<select name="lbp_typography" id="lbp_typography">
							<option value="type1" <?php if ($lbp_typography == 'type1') { ?> selected <?php } ?>>Default</option>
							<option value="type2" <?php if ($lbp_typography == 'type2') { ?> selected <?php } ?>>Cantora One</option>
							<option value="type3" <?php if ($lbp_typography == 'type3') { ?> selected <?php } ?>>Orienta</option>
							<option value="type4" <?php if ($lbp_typography == 'type4') { ?> selected <?php } ?>>Kite One</option>
							<option value="type5" <?php if ($lbp_typography == 'type5') { ?> selected <?php } ?>>Archivo Narrow</option>
							<option value="type6" <?php if ($lbp_typography == 'type6') { ?> selected <?php } ?>>Lora</option>
							<option value="type7" <?php if ($lbp_typography == 'type7') { ?> selected <?php } ?>>IM Fell English</option>
							<option value="type8" <?php if ($lbp_typography == 'type8') { ?> selected <?php } ?>>Old Standard TT</option>
							<option value="type9" <?php if ($lbp_typography == 'type9') { ?> selected <?php } ?>>Gloria Hallelujah</option>
						</select> <br>
						<strong>Container Background:</strong><br />
						<select name="lbp_background" id="lbp_background">
							<option value="1" <?php if ($lbp_background == '1') { ?> selected <?php } ?>>None</option>
							<option value="2" <?php if ($lbp_background == '2') { ?> selected <?php } ?>>Grey Nav</option>
							<option value="3" <?php if ($lbp_background == '3') { ?> selected <?php } ?>>Grey Nav + Blue Top</option>
							<option value="4" <?php if ($lbp_background == '4') { ?> selected <?php } ?>>Black Nav</option>
							<option value="5" <?php if ($lbp_background == '5') { ?> selected <?php } ?>>Grey Nav + Black Top</option>
							<option value="6" <?php if ($lbp_background == '6') { ?> selected <?php } ?>>Blue Nav</option>
							<option value="7" <?php if ($lbp_background == '7') { ?> selected <?php } ?>>Grey Nav + Green Top</option>
						</select> <br>
						<br><hr>
						<strong>Optin Button Text:</strong><br />
						<input type="text" name="lbp_buttontext" placeholder="Subscribe Button Text" id="lbp_buttontext" value="<?php echo $lbp_buttontext; ?>" /><br>
						<p>
							<strong>Optin Headline:</strong><br />
							<input type="text" name="lbp_optinh1" id=""  placeholder="Email Form Headline" value="<?php echo $lbp_optinh1; ?>" />
						</p>
						<p>
							<strong>Optin Sub-Headline:</strong><br />
							<input type="text" name="lbp_optinh2" id=""  placeholder="Email Sub Headline" value="<?php echo $lbp_optinh2; ?>" />
						</p>
						<p>
							<strong>Optin Spam Text:</strong><br />
							<input type="text" name="lbp_optinh3" id=""   placeholder="Optin Spam Text" value="<?php echo $lbp_optinh3; ?>" />
						</p>
						<br><br><hr>
						<strong>Photo #1:</strong><br />
						<input type="text" name="lbp_photo1" id="upload2"  placeholder="URL to your photo / image" value="<?php echo $lbp_photo1; ?>" />
						<p></p><br>
						<strong>Photo #2:</strong><br />
						<input type="text" name="lbp_photo2" id="upload3"  placeholder="URL to your photo / image" value="<?php echo $lbp_photo2; ?>" />
						<p></p><br>
						<strong>Photo #3:</strong><br />
						<input type="text" name="lbp_photo3" id="upload4"  placeholder="URL to your photo / image" value="<?php echo $lbp_photo3; ?>" />
						<p></p><br>
						<strong>Photo #4:</strong><br />
						<input type="text" name="lbp_photo4" id="upload5"  placeholder="URL to your photo / image" value="<?php echo $lbp_photo4; ?>" />
						<p></p><br>
<br><hr>
						<strong>Background Image #1:</strong><br />
						<input type="text" name="lbp_bg1" id="upload6"  placeholder="URL to your photo / image" value="<?php echo $lbp_bg1; ?>" />
						<p></p><br>
						<strong>Background Image #2:</strong><br />
						<input type="text" name="lbp_bg2" id="upload7"  placeholder="URL to your photo / image" value="<?php echo $lbp_bg2; ?>" />
						<p></p><br>
						<strong>Background Image #3:</strong><br />
						<input type="text" name="lbp_bg3" id="upload8"  placeholder="URL to your photo / image" value="<?php echo $lbp_bg3; ?>" />
						<p></p><br>

						<hr>
		<p style="font-size: 10px; text-align: right;">Copyright  &copy; LocalLander - All Rights Reserved</p>
		<p style="font-size: 10px; text-align: right; margin-top: -10px;">Icons provided by IconFinder.com</p>
					</div>
					<div class="tab3 tabs" style="display: none">
						<h4>Your Collected Leads</h4> 
<img src="http://cdn4.iconfinder.com/data/icons/Mobile-Icons/64/01_messages.png" style="float: left; padding-right: 14px;">
<p>Here are all of the leads that you have collected. Displaying the Name, Email Address and Question from all your leads. You can copy and paste the textbox and save it as a .csv to import to any auto-responder service.</p>    
<hr>

						<p>
							
			<strong>Your Email Leads:</strong><br />
			<table style="width: 100%; color: #444; font-size: 15px">
				<tr>
					<td style="background: #b6d3ff; color: #2b528e; padding: 10px;font-weight: bold;">Name</trd>
					<td style="background: #b6d3ff; color: #2b528e; padding: 10px;font-weight: bold;">Email Address</td>
					<td style="background: #b6d3ff; color: #2b528e; padding: 10px;font-weight: bold;">Question</td>
				</r>
				<?php foreach($templates as $template) { ?>
					<tr>
						<td style="padding: 10px;font-size: 13px; text-transform: capitalize;"><?php echo $template['name']; ?></td>
						<td style="padding: 10px;font-size: 13px;"><a href="mailto:<?php echo $template['email'];  ?>"><?php echo $template['email'];  ?></a></td>
						<td style="padding: 10px; font-size: 11px; text-transform: capitalize;"><?php echo $template['question']; ?></td>
					</tr>
				<?php } ?>
			</table>
			<br>
			<strong style="font-size: 13px;">Copy &amp; Paste into a New File, Save as .CSV and Import to Auto-Responder Service</strong><br>
			<textarea style="display: block" id="leads" cols="30" rows="10">Name, Email Address <?php echo chr(13); foreach($templates as $template) { ?><?php echo $template['name']; ?>, <?php echo $template['email'];  echo chr(13); ?><?php } ?></textarea>
		</p>    

		<p style="font-size: 10px; text-align: right;">Copyright  &copy; LocalLander - All Rights Reserved</p>
		<p style="font-size: 10px; text-align: right; margin-top: -10px;">Icons provided by IconFinder.com</p>
					</div>
					<div class="tab4 tabs" style="display: none">
						<h4>Tabbed Main Content:</h4> 
<img src="http://cdn1.iconfinder.com/data/icons/realistiK-new/64x64/actions/tab_new.png" style="float: left; padding-right: 14px;">
<p>Change the way your landing page looks to personalize it and fit it with your current brand. You can change the typography, background and much more. Just make changes, hit save and you can see your page change instantly.</p>    
<hr>
						
						<strong>Tab Link #1:</strong><br />
						<input type="text" name="lbp_tablink1"  placeholder="Tab Link Text" id="lbp_tablink1" value="<?php echo $lbp_tablink1; ?>" />
						<?php wp_editor( html_entity_decode($lbp_tabcontent1), 'lbp_tabcontent1', $settings = array() ); ?>
						<br><hr><br>
						<strong>Tab Link #2:</strong><br />
						<input type="text" placeholder="Tab Link Text" name="lbp_tablink2" id="lbp_tablink2" value="<?php echo $lbp_tablink2; ?>" />
						<?php wp_editor( html_entity_decode($lbp_tabcontent2), 'lbp_tabcontent2', $settings = array() ); ?>
						<br><hr><br>
						<strong>Tab Link #3:</strong><br />
						<input type="text" placeholder="Tab Link Text" name="lbp_tablink3" id="lbp_tablink3" value="<?php echo $lbp_tablink3; ?>" />
						<?php wp_editor(html_entity_decode($lbp_tabcontent3), 'lbp_tabcontent3', $settings = array() ); ?>
						<br><hr><br>
						<strong>Tab Link #4:</strong><br />
						<input type="text" placeholder="Tab Link Text" name="lbp_tablink4" id="lbp_tablink4" value="<?php echo $lbp_tablink4; ?>" />
						<?php wp_editor(html_entity_decode($lbp_tabcontent4), 'lbp_tabcontent4', $settings = array() ); ?>
<hr>
		<p style="font-size: 10px; text-align: right;">Copyright  &copy; LocalLander - All Rights Reserved</p>
		<p style="font-size: 10px; text-align: right; margin-top: -10px;">Icons provided by IconFinder.com</p>
					</div>

					<div class="tab5 tabs"  style="display: none">
						<h4>Extra Page Features</h4> 
<img src="http://cdn1.iconfinder.com/data/icons/professional-toolbar-icons-png/64/Login.png" style="float: left; padding-right: 14px;">
<p>Change the way your landing page looks to personalize it and fit it with your current brand. You can change the typography, background and much more. Just make changes, hit save and you can see your page change instantly.</p>    
<hr>
						<strong>Google Map Location:</strong><br />
						<input type="text" style="float: left; " placeholder="New York, New York"name="lbp_gmap" id="lbp_gmap" value="<?php echo $lbp_gmap; ?>" /><br clear="all"><br>
						<strong>Marker Popup Content:</strong><br />
						<input type="text" style="float: left; " placeholder="Content to Display in Map Tooltip" name="lbp_googlecontent" id="lbp_googlecontent" value="<?php echo $lbp_googlecontent; ?>" /><br clear="all"><br>

						<strong>Yelp Page:</strong><br />
						<input type="text" style="float: left; " placeholder="URL to Your Yelp Page"   name="lbp_yelp" id="lbp_yelp" value="<?php echo $lbp_yelp; ?>" /><br clear="all"><br>

						
<br><hr>
						<strong>Facebook FanPage URL:</strong><br />
						<input type="text" style="float: left; " placeholder="URL to Your Facebook Page"name="lbp_fbpage" id="lbp_fbpage" value="<?php echo $lbp_fbpage; ?>" /><br clear="all"><br>

						<strong>Twitter Profile URL:</strong><br />
						<input type="text" style="float: left; " placeholder="URL to Your Twitter Page"name="lbp_twitter" id="lbp_twitter" value="<?php echo $lbp_twitter; ?>" /><br clear="all"><br>

						<strong>Linkedin Profile URL:</strong><br />
						<input type="text" style="float: left; " placeholder="URL to Your Linkedin Page"name="lbp_websiteurl" id="lbp_websiteurl" value="<?php echo $lbp_websiteurl; ?>" /><br clear="all"><br>

						<strong>Skype Phone Number:</strong><br />
						<input type="text" style="float: left; " placeholder="Your Skype Phone Number"name="lbp_phonenumber" id="lbp_phonenumber" value="<?php echo $lbp_phonenumber; ?>" /><br clear="all"><br>
<br><hr>
						<strong>Social Headline:</strong><br />
						<input type="text" style="float: left; " placeholder="Social Box Headline"name="lbp_socialh1" id="lbp_socialh1" value="<?php echo $lbp_socialh1; ?>" /><br clear="all"><br>

						<strong>Social Sub-Headline:</strong><br />
						<input type="text" style="float: left; " placeholder="Social Box Sub Headline"name="lbp_socialh2" id="lbp_socialh2" value="<?php echo $lbp_socialh2; ?>" /><br clear="all"><br>

						<hr>
		<p style="font-size: 10px; text-align: right;">Copyright  &copy; LocalLander - All Rights Reserved</p>
		<p style="font-size: 10px; text-align: right; margin-top: -10px;">Icons provided by IconFinder.com</p>
					</div>

				</div>
				<br clear="all" />

				
			</div>
			
<br>








	
	
	<?php	
}


add_action( 'save_post', 'save_locallander' );
function save_locallander( $post_id )
{
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	if( !current_user_can( 'edit_post' ) ) return;
	$allowed = array( 
		'a' => array( 
			'href' => array() 
		)
	);
	
		
	if( isset( $_POST['lbp_yelp'] ) )
		update_post_meta( $post_id, 'lbp_yelp', esc_attr( $_POST['lbp_yelp'] ) );
	if( isset( $_POST['lbp_typography'] ) )
		update_post_meta( $post_id, 'lbp_typography', esc_attr( $_POST['lbp_typography'] ) );
	if( isset( $_POST['lbp_fbcomments'] ) )
		update_post_meta( $post_id, 'lbp_fbcomments', esc_attr( $_POST['lbp_fbcomments'] ) );
	if( isset( $_POST['lbp_fbpage'] ) )
		update_post_meta( $post_id, 'lbp_fbpage', esc_attr( $_POST['lbp_fbpage'] ) );
	if( isset( $_POST['lbp_twitter'] ) )
		update_post_meta( $post_id, 'lbp_twitter', esc_attr( $_POST['lbp_twitter'] ) );
	if( isset( $_POST['lbp_websiteurl'] ) )
		update_post_meta( $post_id, 'lbp_websiteurl', esc_attr( $_POST['lbp_websiteurl'] ) );
	if( isset( $_POST['lbp_phonenumber'] ) )
		update_post_meta( $post_id, 'lbp_phonenumber', esc_attr( $_POST['lbp_phonenumber'] ) );
	if( isset( $_POST['lbp_buttonstyle'] ) )
		update_post_meta( $post_id, 'lbp_buttonstyle', esc_attr( $_POST['lbp_buttonstyle'] ) );
	if( isset( $_POST['lbp_socialh1'] ) )
		update_post_meta( $post_id, 'lbp_socialh1', esc_attr( $_POST['lbp_socialh1'] ) );
	if( isset( $_POST['lbp_socialh2'] ) )
		update_post_meta( $post_id, 'lbp_socialh2', esc_attr( $_POST['lbp_socialh2'] ) );
	if( isset( $_POST['lbp_gmap'] ) )
		update_post_meta( $post_id, 'lbp_gmap', esc_attr( $_POST['lbp_gmap'] ) );
	if( isset( $_POST['lbp_background'] ) )
		update_post_meta( $post_id, 'lbp_background', esc_attr( $_POST['lbp_background'] ) );
	if( isset( $_POST['lbp_tabcontent3'] ) )
		update_post_meta( $post_id, 'lbp_tabcontent3', esc_attr( html_entity_decode($_POST['lbp_tabcontent3']) ) );
	if( isset( $_POST['lbp_tabcontent2'] ) )
		update_post_meta( $post_id, 'lbp_tabcontent2', esc_attr( html_entity_decode($_POST['lbp_tabcontent2']) ) );
	if( isset( $_POST['lbp_tabcontent1'] ) )
		update_post_meta( $post_id, 'lbp_tabcontent1', esc_attr( html_entity_decode($_POST['lbp_tabcontent1']) ) );
	if( isset( $_POST['lbp_tabcontent4'] ) )
		update_post_meta( $post_id, 'lbp_tabcontent4', esc_attr( html_entity_decode($_POST['lbp_tabcontent4']) ) );
	if( isset( $_POST['lbp_tablink1'] ) )
		update_post_meta( $post_id, 'lbp_tablink1', esc_attr( $_POST['lbp_tablink1'] ) );
	if( isset( $_POST['lbp_tablink4'] ) )
		update_post_meta( $post_id, 'lbp_tablink4', esc_attr( $_POST['lbp_tablink4'] ) );
	if( isset( $_POST['lbp_tablink2'] ) )
		update_post_meta( $post_id, 'lbp_tablink2', esc_attr( $_POST['lbp_tablink2'] ) );
	if( isset( $_POST['lbp_tablink3'] ) )
		update_post_meta( $post_id, 'lbp_tablink3', esc_attr( $_POST['lbp_tablink3'] ) );
	if( isset( $_POST['lbp_bg3'] ) )
		update_post_meta( $post_id, 'lbp_bg3', esc_attr( $_POST['lbp_bg3'] ) );
	if( isset( $_POST['lbp_bg2'] ) )
		update_post_meta( $post_id, 'lbp_bg2', esc_attr( $_POST['lbp_bg2'] ) );
	if( isset( $_POST['lbp_bg1'] ) )
		update_post_meta( $post_id, 'lbp_bg1', esc_attr( $_POST['lbp_bg1'] ) );
	if( isset( $_POST['lbp_photo1'] ) )
		update_post_meta( $post_id, 'lbp_photo1', esc_attr( $_POST['lbp_photo1'] ) );
	if( isset( $_POST['lbp_photo2'] ) )
		update_post_meta( $post_id, 'lbp_photo2', esc_attr( $_POST['lbp_photo2'] ) );
	if( isset( $_POST['lbp_photo3'] ) )
		update_post_meta( $post_id, 'lbp_photo3', esc_attr( $_POST['lbp_photo3'] ) );
	if( isset( $_POST['lbp_photo4'] ) )
		update_post_meta( $post_id, 'lbp_photo4', esc_attr( $_POST['lbp_photo4'] ) );
	if( isset( $_POST['lbp_footer2'] ) )
		update_post_meta( $post_id, 'lbp_footer2', esc_attr( $_POST['lbp_footer2'] ) );
	if( isset( $_POST['lbp_footer'] ) )
		update_post_meta( $post_id, 'lbp_footer', esc_attr( $_POST['lbp_footer'] ) );
	if( isset( $_POST['lbp_cta2'] ) )
		update_post_meta( $post_id, 'lbp_cta2', esc_attr( $_POST['lbp_cta2'] ) );
	if( isset( $_POST['lbp_cta1'] ) )
		update_post_meta( $post_id, 'lbp_cta1', esc_attr( $_POST['lbp_cta1'] ) );
	if( isset( $_POST['lbp_logo'] ) )
		update_post_meta( $post_id, 'lbp_logo', esc_attr( $_POST['lbp_logo'] ) );
	if( isset( $_POST['lbp_buttontext'] ) )
		update_post_meta( $post_id, 'lbp_buttontext', esc_attr( $_POST['lbp_buttontext'] ) );
	if( isset( $_POST['lbp_optinh1'] ) )
		update_post_meta( $post_id, 'lbp_optinh1', esc_attr( $_POST['lbp_optinh1'] ) );
	if( isset( $_POST['lbp_optinh2'] ) )
		update_post_meta( $post_id, 'lbp_optinh2', esc_attr( $_POST['lbp_optinh2'] ) );
	if( isset( $_POST['lbp_optinh3'] ) )
		update_post_meta( $post_id, 'lbp_optinh3', esc_attr( $_POST['lbp_optinh3'] ) );
	if( isset( $_POST['lbp_googlecontent'] ) )
		update_post_meta( $post_id, 'lbp_googlecontent', esc_attr( $_POST['lbp_googlecontent'] ) );
}
?>