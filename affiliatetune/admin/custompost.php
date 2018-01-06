<?php

 add_action( 'init', 'createaffiliatetune' );
	function createaffiliatetune() {
		register_post_type( 'music-review',
			array(
				'labels' => array(
					'name' => __( 'Affiliate Tune' ),
					'singular_name' => __( 'Affiliate Tune' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => plugins_url().'//affiliatetune/images/favicon.png',
			'rewrite' => true
			)
		);
		flush_rewrite_rules( );
	}

    


	
add_action( 'add_meta_boxes', 'settingsforaffiliatetune' );
function settingsforaffiliatetune()
{
	add_meta_box( 'music-review', 'Settings:', 'createaffiliatetunesettings', 'music-review', 'normal', 'high' );
}


function createaffiliatetunesettings( $post )
{
	$values = get_post_custom( $post->ID );
	$mainphoto = isset( $values['mainphoto'] ) ? esc_attr( $values['mainphoto'][0] ) : '';
	$subheadline = isset( $values['subheadline'] ) ? esc_attr( $values['subheadline'][0] ) : '';
	$item1name = isset( $values['item1name'] ) ? esc_attr( $values['item1name'][0] ) : '';
	$item1price = isset( $values['item1price'] ) ? esc_attr( $values['item1price'][0] ) : '';

	$typography = isset( $values['typography'] ) ? esc_attr( $values['typography'][0] ) : '';
	$buttonstyle = isset( $values['buttonstyle'] ) ? esc_attr( $values['buttonstyle'][0] ) : '';
	$videourl = isset( $values['videourl'] ) ? esc_attr( $values['videourl'][0] ) : '';
	$footer = isset( $values['footer'] ) ? esc_attr( $values['footer'][0] ) : '';
	$background = isset( $values['background'] ) ? esc_attr( $values['background'][0] ) : '';
	$mainheadline = isset( $values['mainheadline'] ) ? esc_attr( $values['mainheadline'][0] ) : '';

	$bulleticon1 = isset( $values['bulleticon1'] ) ? esc_attr( $values['bulleticon1'][0] ) : '';
	$benefit1 = isset( $values['benefit1'] ) ? esc_attr( $values['benefit1'][0] ) : '';

	$bulleticon2 = isset( $values['bulleticon2'] ) ? esc_attr( $values['bulleticon2'][0] ) : '';
	$benefit2 = isset( $values['benefit2'] ) ? esc_attr( $values['benefit2'][0] ) : '';

	$bulleticon3 = isset( $values['bulleticon3'] ) ? esc_attr( $values['bulleticon3'][0] ) : '';
	$benefit3 = isset( $values['benefit3'] ) ? esc_attr( $values['benefit3'][0] ) : '';

	$bulleticon4 = isset( $values['bulleticon4'] ) ? esc_attr( $values['bulleticon4'][0] ) : '';
	$benefit4 = isset( $values['benefit4'] ) ? esc_attr( $values['benefit4'][0] ) : '';

	$bulleticon5 = isset( $values['bulleticon5'] ) ? esc_attr( $values['bulleticon5'][0] ) : '';
	$benefit5 = isset( $values['benefit5'] ) ? esc_attr( $values['benefit5'][0] ) : '';

	$bulleticon6 = isset( $values['bulleticon6'] ) ? esc_attr( $values['bulleticon6'][0] ) : '';
	$benefit6 = isset( $values['benefit6'] ) ? esc_attr( $values['benefit6'][0] ) : '';

	$bulleticon7 = isset( $values['bulleticon7'] ) ? esc_attr( $values['bulleticon7'][0] ) : '';
	$benefit7 = isset( $values['benefit7'] ) ? esc_attr( $values['benefit7'][0] ) : '';

	$bulleticon8 = isset( $values['bulleticon8'] ) ? esc_attr( $values['bulleticon8'][0] ) : '';
	$benefit8 = isset( $values['benefit8'] ) ? esc_attr( $values['benefit8'][0] ) : '';

	$bulleticon9 = isset( $values['bulleticon9'] ) ? esc_attr( $values['bulleticon9'][0] ) : '';
	$benefit9 = isset( $values['benefit9'] ) ? esc_attr( $values['benefit9'][0] ) : '';

	$bulleticon10 = isset( $values['bulleticon10'] ) ? esc_attr( $values['bulleticon10'][0] ) : '';
	$benefit10 = isset( $values['benefit10'] ) ? esc_attr( $values['benefit10'][0] ) : '';

	$bulleticon11 = isset( $values['bulleticon11'] ) ? esc_attr( $values['bulleticon11'][0] ) : '';
	$benefit11 = isset( $values['benefit11'] ) ? esc_attr( $values['benefit11'][0] ) : '';

	$bulleticon14 = isset( $values['bulleticon14'] ) ? esc_attr( $values['bulleticon14'][0] ) : '';
	$benefit14 = isset( $values['benefit14'] ) ? esc_attr( $values['benefit14'][0] ) : '';

	$bulleticon12 = isset( $values['bulleticon12'] ) ? esc_attr( $values['bulleticon12'][0] ) : '';
	$benefit12 = isset( $values['benefit12'] ) ? esc_attr( $values['benefit12'][0] ) : '';

	$bulleticon13 = isset( $values['bulleticon13'] ) ? esc_attr( $values['bulleticon13'][0] ) : '';
	$benefit13 = isset( $values['benefit13'] ) ? esc_attr( $values['benefit13'][0] ) : '';

	$buttontext = isset( $values['buttontext'] ) ? esc_attr( $values['buttontext'][0] ) : '';
	$autoresponder = isset( $values['autoresponder'] ) ? esc_attr( $values['autoresponder'][0] ) : '';

	$blurb = isset( $values['blurb'] ) ? esc_attr( $values['blurb'][0] ) : '';
	$reviewstars = isset( $values['reviewstars'] ) ? esc_attr( $values['reviewstars'][0] ) : '';

	$sliderimage1 = isset( $values['sliderimage1'] ) ? esc_attr( $values['sliderimage1'][0] ) : '';
	$sliderimage2 = isset( $values['sliderimage2'] ) ? esc_attr( $values['sliderimage2'][0] ) : '';
	$sliderimage3 = isset( $values['sliderimage3'] ) ? esc_attr( $values['sliderimage3'][0] ) : '';
	$sliderimage4 = isset( $values['sliderimage4'] ) ? esc_attr( $values['sliderimage4'][0] ) : '';
	
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
			$(document).ready(function() {

		  		$(".design").click(function() {
		  		  $(".extraTab").hide(); $(".extra").removeClass('active');
		  		  $(".dashboardTab").hide(); $(".dashboard").removeClass('active');
		  		  $(".slideshowTab").hide(); $(".slideshow").removeClass('active');
		  		  $(".mapTab").hide(); $(".map").removeClass('active');
		  		  $(".menuTab").hide(); $(".menu").removeClass('active');
		  		  $(".languageTab").hide(); $(".language").removeClass('active');
		  		  $(".photosTab").hide(); $(".photos").removeClass('active');
				  $(".designTab").fadeIn(500); $(".design").addClass('active');
				});

				$(".dashboard").click(function() {
		  		  $(".designTab").hide(); $(".design").removeClass('active');
		  		  $(".extraTab").hide(); $(".extra").removeClass('active');
		  		  $(".slideshowTab").hide(); $(".slideshow").removeClass('active');
		  		  $(".mapTab").hide(); $("m.ap").removeClass('active');
		  		  $(".menuTab").hide(); $(".menu").removeClass('active');
		  		  $(".languageTab").hide(); $(".language").removeClass('active');
		  		  $(".photosTab").hide(); $(".photos").removeClass('active');
				  $(".dashboardTab").fadeIn(500); $(".dashboard").addClass('active');
				});

				$(".slideshow").click(function() {
		  		  $(".designTab").hide(); $(".design").removeClass('active');
		  		  $(".dashboardTab").hide(); $(".dashboard").removeClass('active');
		  		  $(".slideshowTab").hide(); $(".extra").removeClass('active');
		  		  $(".mapTab").hide(); $(".map").removeClass('active');
		  		  $(".menuTab").hide(); $(".menu").removeClass('active');
		  		  $(".extraTab").hide(); $(".extra").removeClass('active');
		  		  $(".languageTab").hide(); $(".language").removeClass('active');
		  		  $(".photosTab").hide(); $(".photos").removeClass('active');
				  $(".slideshowTab").fadeIn(500); $(".slideshow").addClass('active');
				});

				$(".map").click(function() {
		  		  $(".designTab").hide(); $(".design").removeClass('active');
		  		  $(".dashboardTab").hide(); $(".dashboard").removeClass('active');
		  		  $(".slideshowTab").hide(); $(".slideshow").removeClass('active');
		  		  $(".extraTab").hide(); $(".extra").removeClass('active');
		  		  $(".menuTab").hide(); $(".menu").removeClass('active');
		  		  $(".languageTab").hide(); $(".language").removeClass('active');
		  		  $(".photosTab").hide(); $(".photos").removeClass('active');
				  $(".mapTab").fadeIn(500); $(".map").addClass('active');
				});

				$(".menu").click(function() {
		  		  $(".designTab").hide(); $(".design").removeClass('active');
		  		  $(".dashboardTab").hide(); $(".dashboard").removeClass('active');
		  		  $(".slideshowTab").hide(); $(".slideshow").removeClass('active');
		  		  $(".mapTab").hide(); $(".map").removeClass('active');
		  		  $(".extraTab").hide(); $(".extra").removeClass('active');
		  		  $(".languageTab").hide(); $(".language").removeClass('active');
		  		  $(".photosTab").hide(); $(".photos").removeClass('active');
				  $(".menuTab").fadeIn(500); $(".menu").addClass('active');
				});

				$(".language").click(function() {
		  		  $(".designTab").hide(); $(".design").removeClass('active');
		  		  $(".dashboardTab").hide(); $(".dashboard").removeClass('active');
		  		  $(".slideshowTab").hide(); $(".slideshow").removeClass('active');
		  		  $(".mapTab").hide(); $(".map").removeClass('active');
		  		  $(".menuTab").hide(); $(".menu").removeClass('active');
		  		  $(".extraTab").hide(); $(".extra").removeClass('active');
		  		  $(".photosTab").hide(); $(".photos").removeClass('active');
				  $(".languageTab").fadeIn(500); $(".language").addClass('active');
				});

				$(".extra").click(function() {
		  		  $(".designTab").hide(); $(".design").removeClass('active');
		  		  $(".dashboardTab").hide(); $(".dashboard").removeClass('active');
		  		  $(".slideshowTab").hide(); $(".slideshow").removeClass('active');
		  		  $(".mapTab").hide(); $(".map").removeClass('active');
		  		  $(".menuTab").hide(); $(".menu").removeClass('active');
		  		  $(".languageTab").hide(); $(".language").removeClass('active');
		  		  $(".photosTab").hide(); $(".photos").removeClass('active');
				  $(".extraTab").fadeIn(500); $(".extra").addClass('active');
				});

				$(".photos").click(function() {
		  		  $(".designTab").hide(); $(".design").removeClass('active');
		  		  $(".dashboardTab").hide(); $(".dashboard").removeClass('active');
		  		  $(".slideshowTab").hide(); $(".slideshow").removeClass('active');
		  		  $(".mapTab").hide(); $(".map").removeClass('active');
		  		  $(".menuTab").hide(); $(".menu").removeClass('active');
		  		  $(".languageTab").hide(); $(".language").removeClass('active');
		  		  $(".extraTab").hide(); $(".extra").removeClass('active');
				  $(".photosTab").fadeIn(500); $(".photos").addClass('active');
				});

								jQuery('.upload_button').click(function() {
									uploadID = jQuery(this).prev('input'); // grabs the correct field
									spanID = jQuery(this).parent().find('span'); // grabs the correct span
									formfield = jQuery('.frp_upload').attr('name');
									tb_show('', 'media-upload.php?type=image&TB_iframe=true');
									return false;
								});

								window.send_to_editor = function(html) {
									imgurl = jQuery(html).attr('href'); // grabs the image URL from the IMG tag
									jQuery('#uploadlogo').val(imgurl); // sends the image URL to the hidden input field
									spanID.html(html); //sends the IMG tag to the preview span
									tb_remove();
								}

			});
		</script>
		<style>
			@import url(http://fonts.googleapis.com/css?family=Poly);
			#siteOptions {
				width: 100%;
				overflow: hidden;
				font-family: 'Helvetica Neue', Arial, sans-serif;
				text-shadow: 0px 0px 1px transparent; 
				font-size: 21px;
			}
			
			#fb_nav {
				width: 20%;
				float: left;
				padding: 10px;
				margin-bottom: -1500px;
				padding-bottom: 1500px;
				padding-top: 0;
			}
				#fb_nav ul {
					margin-top: 0;
				}
				#fb_nav ul li a {
					padding: 10px 0;
					padding-left: 45px;
					display: block;
					margin-bottom: -6px;
					width:86%;
					font-size: 15px;
					color: #2f363e;
					margin-left: -10px;
					text-decoration: none;
				}
			#fb_tabs {
				width: 60%;
				float: left;
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
				background: url(http://cdn3.iconfinder.com/data/icons/UltimateGnome/24x24/actions/go-home.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .dashboard.active, #siteOptions .dashboard:hover {
					background: url(http://cdn3.iconfinder.com/data/icons/UltimateGnome/24x24/actions/go-home.png) no-repeat left #5EBBC2;color: #fff;
					background-position: 9px 7px;
				}
			#siteOptions .design {
				background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/apps/gnome-graphics.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .design.active, #siteOptions .design:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/apps/gnome-graphics.png) no-repeat left #5EBBC2;color: #fff;
					background-position: 9px 7px;
				}
			#siteOptions .slideshow {
				background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .slideshow.active, #siteOptions .slideshow:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left #5EBBC2;color: #fff;
					background-position: 9px 7px;
				}
			#siteOptions .map {
				background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/stock/text/stock_list_bullet.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .map.active, #siteOptions .map:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/stock/text/stock_list_bullet.png) no-repeat left #5EBBC2;color: #fff;
					background-position: 9px 7px;
				}
			#siteOptions .menu {
				background: url(http://cdn1.iconfinder.com/data/icons/professional-toolbar-icons-png/24/Login.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .menu.active, #siteOptions .menu:hover {
					background: url(http://cdn1.iconfinder.com/data/icons/professional-toolbar-icons-png/24/Login.png) no-repeat left #5EBBC2;color: #fff;
					background-position: 9px 7px;
				}
			#siteOptions .language {
				background: url(http://cdn3.iconfinder.com/data/icons/flatforlinux/24/27-Edit%20Text.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .language.active, #siteOptions .language:hover {
					background: url(http://cdn3.iconfinder.com/data/icons/flatforlinux/24/27-Edit%20Text.png) no-repeat left #5EBBC2;color: #fff;
					background-position: 9px 7px;
				}
			#siteOptions .extra {
				background: url(http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .extra.active, #siteOptions .extra:hover {
					background: url(http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png) no-repeat left #5EBBC2;color: #fff;
					background-position: 9px 7px;
				}
			#siteOptions .photos {
				background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .photos.active, #siteOptions .photos:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left #5EBBC2;color: #fff;
					background-position: 9px 7px;
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

			<div id="siteOptions"> <a name="tops"></a>
				                <div id="fb_nav">
				                	<img src="<?php echo plugins_url(); ?>/affiliatetune/images/logo.png" style="margin: 10px 0; width: 260px;">
				                	<br>
<ul> <li><a href="#tops" class="active dashboard">Review Settings</a></li>
<li><a href="#tops" class="design">Design Options</a></li>                         <li><a
href="#tops" class="slideshow">Add BG Video</a></li>  
<li><a
href="#tops" class="extra">Affiliate Setup</a></li>
<li><a
href="#tops" class="map">Track Listing</a></li>
<li><a
href="#tops" class="photos">Photos</a></li>
                      </ul>
</div>                 <div id="fb_tabs">                     
<div
class="dashboardTab">      
		<p>
			<strong>Main Headline:</strong><br />
			<input type="text" name="mainheadline" placeholder="Write your main headline for your page " id="mainheadline" value="<?php echo $mainheadline; ?>" />
		</p>                  
		<p>
			<strong>Thumbnail of Album/Artist:</strong><br />
			<input type="text" name="mainphoto" placeholder="URL for the image of the album"  id="mainphoto" value="<?php echo $mainphoto; ?>" />
		</p>
		<p>
			<strong>Review Stars:</strong> <br>
						<select name="reviewstars" id="reviewstars">
							<option value="1" <?php if ($reviewstars == '1') { ?> selected <?php } ?>>Half Star</option>
							<option value="2" <?php if ($reviewstars == '2') { ?> selected <?php } ?>>One Star</option>
							<option value="3" <?php if ($reviewstars == '3') { ?> selected <?php } ?>>One & a Half Stars</option>
							<option value="4" <?php if ($reviewstars == '4') { ?> selected <?php } ?>>Two Stars</option>
							<option value="5" <?php if ($reviewstars == '5') { ?> selected <?php } ?>>Two & a Half Stars</option>
							<option value="6" <?php if ($reviewstars == '6') { ?> selected <?php } ?>>Three Stars</option>
							<option value="7" <?php if ($reviewstars == '7') { ?> selected <?php } ?>>Three & a Half Stars</option>
							<option value="8" <?php if ($reviewstars == '8') { ?> selected <?php } ?>>Four Stars</option>
							<option value="9" <?php if ($reviewstars == '9') { ?> selected <?php } ?>>Four & a Half Stars</option>
							<option value="10" <?php if ($reviewstars == '10') { ?> selected <?php } ?>>Five Stars</option>
						</select>
		</p>	
		<p>
			<strong>Album Name:</strong><br />
			<input type="text" name="subheadline" placeholder="Name of the album"  id="subheadline" value="<?php echo $subheadline; ?>" />
		</p>
		<p>
			<strong>Artist Name:</strong><br />
			<input type="text" name="item1name" placeholder="Name of the singer or artist"  id="item1name" value="<?php echo $item1name; ?>" />
		</p>
		<p>
			<strong>Review Blurb:</strong><br />
			<input type="text" name="blurb" placeholder="Small text about the album"  id="blurb" value="<?php echo $blurb; ?>" />
		</p>
		<p>
			<strong>Footer Text:</strong><br />
			<input type="text" name="footer" placeholder="Copyright Information for Footer"  id="" value="<?php echo $footer; ?>" />
		</p>
		
</div>    
   <div class="photosTab" style="display: none">
<p>
			<strong>Slider Image #1:</strong><br />
			<input type="text"  placeholder="Add URL to Your Image" name="sliderimage1" id="sliderimage1" value="<?php echo $sliderimage1; ?>" />
		</p>
		<p>
			<strong>Slider Image #2:</strong><br />
			<input type="text"  placeholder="Add URL to Your Image" name="sliderimage2" id="sliderimage2" value="<?php echo $sliderimage2; ?>" />
		</p>
		<p>
			<strong>Slider Image #3:</strong><br />
			<input type="text"  placeholder="Add URL to Your Image" name="sliderimage3" id="sliderimage3" value="<?php echo $sliderimage3; ?>" />
		</p>
		<p>
			<strong>Slider Image #4:</strong><br />
			<input type="text"  placeholder="Add URL to Your Image" name="sliderimage4" id="sliderimage4" value="<?php echo $sliderimage4; ?>" />
		</p>
		

   </div>



                 <div class="designTab" style="display: none">
						
						
						
						<strong>Headline Typography:</strong><br />
						<select name="typography" id="typography">
							<option value="type1" <?php if ($typography == 'type1') { ?> selected <?php } ?>>Default</option>
							<option value="type2" <?php if ($typography == 'type2') { ?> selected <?php } ?>>Cantora One</option>
							<option value="type3" <?php if ($typography == 'type3') { ?> selected <?php } ?>>Orienta</option>
							<option value="type4" <?php if ($typography == 'type4') { ?> selected <?php } ?>>Kite One</option>
							<option value="type5" <?php if ($typography == 'type5') { ?> selected <?php } ?>>Archivo Narrow</option>
							<option value="type6" <?php if ($typography == 'type6') { ?> selected <?php } ?>>Lora</option>
							<option value="type7" <?php if ($typography == 'type7') { ?> selected <?php } ?>>IM Fell English</option>
							<option value="type8" <?php if ($typography == 'type8') { ?> selected <?php } ?>>Old Standard TT</option>
							<option value="type9" <?php if ($typography == 'type9') { ?> selected <?php } ?>>Gloria Hallelujah</option>
						</select> <br>
						<strong>Transparent Background:</strong><br />
						<select name="background" id="background">
							<option value="1" <?php if ($background == '1') { ?> selected <?php } ?>>Stitched Black</option>
							<option value="2" <?php if ($background == '2') { ?> selected <?php } ?>>Hex Black</option>
							<option value="3" <?php if ($background == '3') { ?> selected <?php } ?>>Styled Lines Black</option>
							<option value="4" <?php if ($background == '4') { ?> selected <?php } ?>>Pin-Stripe Black</option>
							<option value="5" <?php if ($background == '5') { ?> selected <?php } ?>>Carbon Dots Black</option>
							<option value="6" <?php if ($background == '6') { ?> selected <?php } ?>>Stars Black</option>
							<option value="7" <?php if ($background == '7') { ?> selected <?php } ?>>Dark Wood</option>
						</select> <br>
						
					</div>
					<div class="extraTab" style="display: none">
						
						<br>
						<strong>Amazon Affiliate Link for Album Being Reviewed:</strong><br />
						<input type="text"  placeholder="Affiliate URL Link for Amazon"  placeholder="" name="buttontext" id="buttontext" value="<?php echo $buttontext; ?>" /><br>
						<strong>iTunes Affiliate Link for Album Being Reviewed:</strong><br />
						<input type="text"  placeholder="Affiliate URL Link for iTunes" name="autoresponder" id="autoresponder" value="<?php echo $autoresponder; ?>" /><br>
					</div>
					<div class="slideshowTab" style="display: none">
						
						
						<strong>Video URL (mp4, ogg, etc) <small>- will play silently without sound.</small>:</strong><br />
						<input type="text"  placeholder="URL to your video to play in background" name="videourl" id="videourl" value="<?php echo $videourl; ?>" />

						<p><strong>How to get mp4 from Youtube?</strong></p>
						<p>You need to download the .mp4 of the youtube file. <a href="http://www.youtubeinmp4.com/" target="_blank">Click here to use a service</a> to download the mp4 from any video on youtube.</p>
						<p>Once you have the file downloaded, you need to upload it to either your FTP or using upload service like DropBox. Use the direct URL to the mp4 from the FTP or upload service.</p>
						<p>You can also upload the mp4 file to the Media in wordpress. Then use the URL provided in the above input box.</p>
						<p><strong>How to get mp4 from Vimeo?</strong></p>
						<p>The same goes as above, except it is a different service. <a href="http://downloadvimeo.com/" target="_blank">Click here to use a vimeo service</a>.</p>
					</div>

					<div class="mapTab"  style="display: none">
						
						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #1:</strong>
						<br clear="all"><br>
						<input  placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon1" id="bulleticon1" value="<?php echo $bulleticon1; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit1" id="benefit1" value="<?php echo $benefit1; ?>" /><br clear="all"><br>
						
						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #2:</strong>
						<br clear="all"><br>
						<input  placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon2" id="bulleticon2" value="<?php echo $bulleticon2; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit2" id="benefit2" value="<?php echo $benefit2; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #3:</strong>
						<br clear="all"><br>
						<input  placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon3" id="bulleticon3" value="<?php echo $bulleticon3; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit3" id="benefit3" value="<?php echo $benefit3; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #4:</strong>
						<br clear="all"><br>
						<input  placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon4" id="bulleticon4" value="<?php echo $bulleticon4; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit4" id="benefit4" value="<?php echo $benefit4; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #5:</strong>
						<br clear="all"><br>
						<input  placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon5" id="bulleticon5" value="<?php echo $bulleticon5; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit5" id="benefit5" value="<?php echo $benefit5; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #6:</strong>
						<br clear="all"><br>
						<input  placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon6" id="bulleticon6" value="<?php echo $bulleticon6; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit6" id="benefit6" value="<?php echo $benefit6; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #7:</strong>
						<br clear="all"><br>
						<input  placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon7" id="bulleticon7" value="<?php echo $bulleticon7; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit7" id="benefit7" value="<?php echo $benefit7; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #8:</strong>
						<br clear="all"><br>
						<input placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon8" id="bulleticon8" value="<?php echo $bulleticon8; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit8" id="benefit8" value="<?php echo $benefit8; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #9:</strong>
						<br clear="all"><br>
						<input  placeholder="YouTube ID" type="text" style="float: right; width: 100px;" name="bulleticon9" id="bulleticon9" value="<?php echo $bulleticon9; ?>" />
						<input  placeholder="Name of the song" type="text" style="float: left; width: 500px;" name="benefit9" id="benefit9" value="<?php echo $benefit9; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #10:</strong>
						<br clear="all"><br>
						<input placeholder="YouTube ID"type="text" style="float: right; width: 100px;" name="bulleticon10" id="bulleticon10" value="<?php echo $bulleticon10; ?>" />
						<input placeholder="Name of the song"type="text" style="float: left; width: 500px;" name="benefit10" id="benefit10" value="<?php echo $benefit10; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #11:</strong>
						<br clear="all"><br>
						<input placeholder="YouTube ID"type="text" style="float: right; width: 100px;" name="bulleticon11" id="bulleticon11" value="<?php echo $bulleticon11; ?>" />
						<input placeholder="Name of the song"type="text" style="float: left; width: 500px;" name="benefit11" id="benefit11" value="<?php echo $benefit11; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #12:</strong>
						<br clear="all"><br>
						<input placeholder="YouTube ID"type="text" style="float: right; width: 100px;" name="bulleticon12" id="bulleticon12" value="<?php echo $bulleticon12; ?>" />
						<input placeholder="Name of the song"type="text" style="float: left; width: 500px;" name="benefit12" id="benefit12" value="<?php echo $benefit12; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #13:</strong>
						<br clear="all"><br>
						<input placeholder="YouTube ID"type="text" style="float: right; width: 100px;" name="bulleticon13" id="bulleticon13" value="<?php echo $bulleticon13; ?>" />
						<input placeholder="Name of the song"type="text" style="float: left; width: 500px;" name="benefit13" id="benefit13" value="<?php echo $benefit13; ?>" /><br clear="all"><br>

						<strong  style="float: right; width: 100px;">YouTube ID:</strong>
						<strong  style="float: left; width: 500px;">Track Title #14:</strong>
						<br clear="all"><br>
						<input placeholder="YouTube ID"type="text" style="float: right; width: 100px;" name="bulleticon14" id="bulleticon14" value="<?php echo $bulleticon14; ?>" />
						<input placeholder="Name of the song"type="text" style="float: left; width: 500px;" name="benefit14" id="benefit14" value="<?php echo $benefit14; ?>" /><br clear="all"><br>

						<br>
					</div>

				</div>
				<br clear="all" />

				
			</div>
			









	
	
	<?php	
}


add_action( 'save_post', 'saveaffiliatetunesettings' );
function saveaffiliatetunesettings( $post_id )
{
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	
	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	
	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data
	$allowed = array( 
		'a' => array( // on allow a tags
			'href' => array() // and those anchords can only have href attribute
		)
	);
	
	// Probably a good idea to make sure your data is set
	if( isset( $_POST['mainphoto'] ) )
		update_post_meta( $post_id, 'mainphoto', wp_kses( $_POST['mainphoto'], $allowed ) );
		
	if( isset( $_POST['subheadline'] ) )
		update_post_meta( $post_id, 'subheadline', esc_attr( $_POST['subheadline'] ) );
		
	if( isset( $_POST['item1name'] ) )
		update_post_meta( $post_id, 'item1name', esc_attr( $_POST['item1name'] ) );
		
	if( isset( $_POST['item1price'] ) )
		update_post_meta( $post_id, 'item1price', esc_attr( $_POST['item1price'] ) );
		
	if( isset( $_POST['item1image'] ) )
		update_post_meta( $post_id, 'item1image', esc_attr( $_POST['item1image'] ) );

if( isset( $_POST['buttonstyle'] ) )
		update_post_meta( $post_id, 'buttonstyle', esc_attr( $_POST['buttonstyle'] ) );
		
	

	if( isset( $_POST['typography'] ) )
		update_post_meta( $post_id, 'typography', esc_attr( $_POST['typography'] ) );

if( isset( $_POST['mainheadline'] ) )
		update_post_meta( $post_id, 'mainheadline', esc_attr( $_POST['mainheadline'] ) );

	if( isset( $_POST['footer'] ) )
		update_post_meta( $post_id, 'footer', esc_attr( $_POST['footer'] ) );

	if( isset( $_POST['videourl'] ) )
		update_post_meta( $post_id, 'videourl', esc_attr( $_POST['videourl'] ) );

	if( isset( $_POST['background'] ) )
		update_post_meta( $post_id, 'background', esc_attr( $_POST['background'] ) );

	if( isset( $_POST['bulleticon1'] ) )
		update_post_meta( $post_id, 'bulleticon1', esc_attr( $_POST['bulleticon1'] ) );

	if( isset( $_POST['benefit1'] ) )
		update_post_meta( $post_id, 'benefit1', esc_attr( $_POST['benefit1'] ) );

	if( isset( $_POST['bulleticon2'] ) )
		update_post_meta( $post_id, 'bulleticon2', esc_attr( $_POST['bulleticon2'] ) );

	if( isset( $_POST['benefit2'] ) )
		update_post_meta( $post_id, 'benefit2', esc_attr( $_POST['benefit2'] ) );

	if( isset( $_POST['bulleticon3'] ) )
		update_post_meta( $post_id, 'bulleticon3', esc_attr( $_POST['bulleticon3'] ) );

	if( isset( $_POST['benefit3'] ) )
		update_post_meta( $post_id, 'benefit3', esc_attr( $_POST['benefit3'] ) );

	if( isset( $_POST['bulleticon4'] ) )
		update_post_meta( $post_id, 'bulleticon4', esc_attr( $_POST['bulleticon4'] ) );

	if( isset( $_POST['benefit4'] ) )
		update_post_meta( $post_id, 'benefit4', esc_attr( $_POST['benefit4'] ) );

	if( isset( $_POST['bulleticon5'] ) )
		update_post_meta( $post_id, 'bulleticon5', esc_attr( $_POST['bulleticon5'] ) );

	if( isset( $_POST['benefit5'] ) )
		update_post_meta( $post_id, 'benefit5', esc_attr( $_POST['benefit5'] ) );

	if( isset( $_POST['bulleticon6'] ) )
		update_post_meta( $post_id, 'bulleticon6', esc_attr( $_POST['bulleticon6'] ) );

	if( isset( $_POST['benefit6'] ) )
		update_post_meta( $post_id, 'benefit6', esc_attr( $_POST['benefit6'] ) );

	if( isset( $_POST['bulleticon7'] ) )
		update_post_meta( $post_id, 'bulleticon7', esc_attr( $_POST['bulleticon7'] ) );

	if( isset( $_POST['benefit7'] ) )
		update_post_meta( $post_id, 'benefit7', esc_attr( $_POST['benefit7'] ) );

	if( isset( $_POST['bulleticon8'] ) )
		update_post_meta( $post_id, 'bulleticon8', esc_attr( $_POST['bulleticon8'] ) );

	if( isset( $_POST['benefit8'] ) )
		update_post_meta( $post_id, 'benefit8', esc_attr( $_POST['benefit8'] ) );


	if( isset( $_POST['bulleticon9'] ) )
		update_post_meta( $post_id, 'bulleticon9', esc_attr( $_POST['bulleticon9'] ) );

	if( isset( $_POST['benefit9'] ) )
		update_post_meta( $post_id, 'benefit9', esc_attr( $_POST['benefit9'] ) );

	if( isset( $_POST['bulleticon10'] ) )
		update_post_meta( $post_id, 'bulleticon10', esc_attr( $_POST['bulleticon10'] ) );

	if( isset( $_POST['benefit10'] ) )
		update_post_meta( $post_id, 'benefit10', esc_attr( $_POST['benefit10'] ) );

	if( isset( $_POST['bulleticon11'] ) )
		update_post_meta( $post_id, 'bulleticon11', esc_attr( $_POST['bulleticon11'] ) );

	if( isset( $_POST['benefit11'] ) )
		update_post_meta( $post_id, 'benefit11', esc_attr( $_POST['benefit11'] ) );

	if( isset( $_POST['bulleticon12'] ) )
		update_post_meta( $post_id, 'bulleticon12', esc_attr( $_POST['bulleticon12'] ) );

	if( isset( $_POST['benefit12'] ) )
		update_post_meta( $post_id, 'benefit12', esc_attr( $_POST['benefit12'] ) );

	if( isset( $_POST['bulleticon13'] ) )
		update_post_meta( $post_id, 'bulleticon13', esc_attr( $_POST['bulleticon13'] ) );

	if( isset( $_POST['benefit13'] ) )
		update_post_meta( $post_id, 'benefit13', esc_attr( $_POST['benefit13'] ) );

	if( isset( $_POST['bulleticon14'] ) )
		update_post_meta( $post_id, 'bulleticon14', esc_attr( $_POST['bulleticon14'] ) );

	if( isset( $_POST['benefit14'] ) )
		update_post_meta( $post_id, 'benefit14', esc_attr( $_POST['benefit14'] ) );

	if( isset( $_POST['autoresponder'] ) )
		update_post_meta( $post_id, 'autoresponder', esc_attr( $_POST['autoresponder'] ) );

	if( isset( $_POST['buttontext'] ) )
		update_post_meta( $post_id, 'buttontext', esc_attr( $_POST['buttontext'] ) );

	if( isset( $_POST['reviewstars'] ) )
		update_post_meta( $post_id, 'reviewstars', esc_attr( $_POST['reviewstars'] ) );

	if( isset( $_POST['blurb'] ) )
		update_post_meta( $post_id, 'blurb', esc_attr( $_POST['blurb'] ) );

	if( isset( $_POST['sliderimage1'] ) )
		update_post_meta( $post_id, 'sliderimage1', esc_attr( $_POST['sliderimage1'] ) );

	if( isset( $_POST['sliderimage3'] ) )
		update_post_meta( $post_id, 'sliderimage3', esc_attr( $_POST['sliderimage3'] ) );

	if( isset( $_POST['sliderimage2'] ) )
		update_post_meta( $post_id, 'sliderimage2', esc_attr( $_POST['sliderimage2'] ) );

	if( isset( $_POST['sliderimage4'] ) )
		update_post_meta( $post_id, 'sliderimage4', esc_attr( $_POST['sliderimage4'] ) );
	
}
?>