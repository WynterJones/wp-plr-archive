<?php

 add_action( 'init', 'createuberoptinpropage' );
	function createuberoptinpropage() {
		register_post_type( 'uberoptin',
			array(
				'labels' => array(
					'name' => __( 'Uber Optin' ),
					'singular_name' => __( 'Uber Optin' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'https://cdn0.iconfinder.com/data/icons/iicon/512/message-email-16.png',
			'rewrite' => true
			)
		);
		flush_rewrite_rules( );
	}
	
add_action( 'add_meta_boxes', 'createmetadatauberoptin' );
function createmetadatauberoptin()
{
	add_meta_box( 'uberoptin', 'Settings:', 'settingsforuberoptinpage', 'uberoptin', 'normal', 'high' );
}


function settingsforuberoptinpage( $post )
{
	$values = get_post_custom( $post->ID );
	$logo = isset( $values['logo'] ) ? esc_attr( $values['logo'][0] ) : '';
	$autoresponder = isset( $values['autoresponder'] ) ? esc_attr( $values['autoresponder'][0] ) : '';
	$subheadline = isset( $values['subheadline'] ) ? esc_attr( $values['subheadline'][0] ) : '';

	$ctaarrow = isset( $values['ctaarrow'] ) ? esc_attr( $values['ctaarrow'][0] ) : '';
	$buttonstyle = isset( $values['buttonstyle'] ) ? esc_attr( $values['buttonstyle'][0] ) : '';
	$videourl = isset( $values['videourl'] ) ? esc_attr( $values['videourl'][0] ) : '';
	$footer = isset( $values['footer'] ) ? esc_attr( $values['footer'][0] ) : '';
	$background = isset( $values['background'] ) ? esc_attr( $values['background'][0] ) : '';
	$background2 = isset( $values['background2'] ) ? esc_attr( $values['background2'][0] ) : '';
	$background3 = isset( $values['background3'] ) ? esc_attr( $values['background3'][0] ) : '';
	$mainheadline = isset( $values['mainheadline'] ) ? esc_attr( $values['mainheadline'][0] ) : '';
	$buttonurl = isset( $values['buttonurl'] ) ? esc_attr( $values['buttonurl'][0] ) : '';

	$buttontext = isset( $values['buttontext'] ) ? esc_attr( $values['buttontext'][0] ) : '';

	$ctaimage1 = isset( $values['ctaimage1'] ) ? esc_attr( $values['ctaimage1'][0] ) : '';
	$ctaimage2 = isset( $values['ctaimage2'] ) ? esc_attr( $values['ctaimage2'][0] ) : '';
	$ctaimage3 = isset( $values['ctaimage3'] ) ? esc_attr( $values['ctaimage3'][0] ) : '';
	$ctaimage4 = isset( $values['ctaimage4'] ) ? esc_attr( $values['ctaimage4'][0] ) : '';

	$blurb = isset( $values['blurb'] ) ? esc_attr( $values['blurb'][0] ) : '';

	$ctaheadline = isset( $values['ctaheadline'] ) ? esc_attr( $values['ctaheadline'][0] ) : '';
	$ctasubheadline = isset( $values['ctasubheadline'] ) ? esc_attr( $values['ctasubheadline'][0] ) : '';

	$affiliatelink = isset( $values['affiliatelink'] ) ? esc_attr( $values['affiliatelink'][0] ) : '';

	$ctaimage1 = isset( $values['ctaimage1'] ) ? esc_attr( $values['ctaimage1'][0] ) : '';
	$ctaimage2 = isset( $values['ctaimage2'] ) ? esc_attr( $values['ctaimage2'][0] ) : '';
	$ctaimage3 = isset( $values['ctaimage3'] ) ? esc_attr( $values['ctaimage3'][0] ) : '';
	$ctaimage4 = isset( $values['ctaimage4'] ) ? esc_attr( $values['ctaimage4'][0] ) : '';

	$video = isset( $values['video'] ) ? esc_attr( $values['video'][0] ) : '';

	$favicon = isset( $values['favicon'] ) ? esc_attr( $values['favicon'][0] ) : '';
	$seoTitle = isset( $values['seoTitle'] ) ? esc_attr( $values['seoTitle'][0] ) : '';
	$metaDescription = isset( $values['metaDescription'] ) ? esc_attr( $values['metaDescription'][0] ) : '';
	$tracking = isset( $values['tracking'] ) ? esc_attr( $values['tracking'][0] ) : '';

	$mainVideo = isset( $values['mainVideo'] ) ? esc_attr( $values['mainVideo'][0] ) : '';
	
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
		.metaBox input[type=text], .metaBox textarea {
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
				font-family: 'Helvetica Neue', Arial,  serif;
				text-shadow: 0px 0px 1px transparent; 
				font-size: 21px;
			}
			#postdivrich {
				display: none;
			}
			#fb_nav {
				width: 30%;
				float: left;
				clear: left;
				z-index: 99999;
								margin-bottom: -1500px;
				padding-bottom: 1500px;
				background: #fafafa;
				box-shadow: 0 0 20px #ddd;

				padding-top: 0;
			}
				#fb_nav ul {
					margin-top: 0;
				}
				#fb_nav ul li a {
					padding: 10px 0;
					display: block;
					margin-bottom: -6px;
					width:100%;
					font-size: 15px;
					color: #2f363e;
					text-decoration: none;
				}
			#fb_tabs {
				width: 70%;
				float: left;
				padding:  0;
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
				background: url(http://cdn2.iconfinder.com/data/icons/c9d/home.png) no-repeat left;
				background-position: 15px 7px;
			}
				#siteOptions .dashboard.active, #siteOptions .dashboard:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/c9d/home.png) no-repeat left #DE532D; color: #fff;
					background-position: 15px 7px;
				}
			#siteOptions .design {
				background: url(http://cdn2.iconfinder.com/data/icons/icojoy/shadow/standart/png/24x24/001_15.png) no-repeat left;
				background-position: 15px 7px;
			}
				#siteOptions .design.active, #siteOptions .design:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/icojoy/shadow/standart/png/24x24/001_15.png) no-repeat left #DE532D; color: #fff;
					background-position: 15px 7px;
				}
			#siteOptions .slideshow {
				background: url(http://cdn4.iconfinder.com/data/icons/Lontar_eve/24/hat.png) no-repeat left;
				background-position: 15px 7px;
			}
				#siteOptions .slideshow.active, #siteOptions .slideshow:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/Lontar_eve/24/hat.png) no-repeat left #DE532D; color: #fff;
					background-position: 15px 7px;
				}
			#siteOptions .map {
				background: url(http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png) no-repeat left;
				background-position: 15px 7px;
			}
				#siteOptions .map.active, #siteOptions .map:hover {
					background: url(http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png) no-repeat left #DE532D; color: #fff;
					background-position: 15px 7px;
				}
			#siteOptions .menu {
				background: url(https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/stock_slide-design.png) no-repeat left;
				background-position: 15px 7px;
			}
				#siteOptions .menu.active, #siteOptions .menu:hover {
					background: url(https://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/stock_slide-design.png) no-repeat left #DE532D; color: #fff;
					background-position: 15px 7px;
				}
			#siteOptions .language {
				background: url(http://cdn3.iconfinder.com/data/icons/flatforlinux/24/27-Edit%20Text.png) no-repeat left;
				background-position: 15px 7px;
			}
				#siteOptions .language.active, #siteOptions .language:hover {
					background: url(http://cdn3.iconfinder.com/data/icons/flatforlinux/24/27-Edit%20Text.png) no-repeat left #DE532D; color: #fff;
					background-position: 15px 7px;
				}
			#siteOptions .extra {
				background: url(http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png) no-repeat left;
				background-position: 15px 7px;
			}
				#siteOptions .extra.active, #siteOptions .extra:hover {
					background: url(http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png) no-repeat left #DE532D; color: #fff;
					background-position: 15px 7px;
				}
			#siteOptions .photos {
				background: url(https://cdn0.iconfinder.com/data/icons/glyph_set/32/globe_world_browser.png) no-repeat left;
				background-position: 12px 4px;
			}
				#siteOptions .photos.active, #siteOptions .photos:hover {
					background: url(https://cdn0.iconfinder.com/data/icons/glyph_set/32/globe_world_browser.png) no-repeat left #DE532D; color: #fff;
					background-position: 12px 4px;
				}
			#siteOptions hr {
				border: none;
				border-bottom: 1px solid #ddd;
				margin-bottom: 20px;
			}
			#uberoptin.postbox  {
				background-image: url(<?php echo plugins_url(); ?>/uberoptin/options.png);
			    -webkit-background-size: cover;
			    -moz-background-size: cover;
			    -o-background-size: cover;
			    background-size: cover;
			}
		</style>
		<p>Embed on any Blog Post or Page</p>
		<input type="text" value="[uberoptinx url='<?php the_permalink(); ?>']">
<img src="<?php echo plugins_url(); ?>/uberoptin/logo.png" style="">
			<div id="siteOptions"> <a name="tops"></a>
				                <div id="fb_nav">
				                	
									<ul> 
										<li><a href="#" class="active dashboard"><span style="display: block; padding-left: 50px; font-weight: bold;">Main Settings</span></a></li>
										<li><a href="#" class="design"><span style="display: block; padding-left: 50px; font-weight: bold;">Background &amp; Design</span></a></li>       
										<li><a href="#" class="map"><span style="display: block; padding-left: 50px; font-weight: bold;">Auto-Responder Settings</span></a></li> 
										<li><a href="#" class="menu"><span style="display: block; padding-left: 50px; font-weight: bold;">Box Styles</span></a></li>
										<li><a href="#" class="photos"><span style="display: block; padding-left: 50px; font-weight: bold;">SEO Settings</span></a></li>           
									</ul>
								</div>                 

									<div id="fb_tabs">
									<div style="padding: 0 30px">
										<div class="mapTab"  style="display: none">

											<h1><strong  style="font-size: 30px;">Auto-Responder Settings</strong></h1>
										<h4 style="font-weight: lighter;font-size: 17px; letter-spacing: 1px">Do Your Best To Convert New Leads!</h4>
										
										
											<p>
												<strong>Headline:</strong><br />
												<input  placeholder="Write Headline" type="text" name="ctaheadline" id="ctaheadline" value="<?php echo $ctaheadline; ?>" />
											</p>  
											<p>
												<strong>Sub Headline:</strong><br />
												<input  placeholder="Write The Sub Headline" type="text" name="ctasubheadline" id="ctasubheadline" value="<?php echo $ctasubheadline; ?>" />
											</p>  
											
											<p>
												<strong>Button Text:</strong><br />
												<input  placeholder="Sign Up Button Text" type="text" name="buttontext" id="buttontext" value="<?php echo $buttontext; ?>" />
											</p> 
											<strong>Form Submit Button Color:</strong><br />
						<select name="ctaarrow" id="ctaarrow">
							<option value="warning" <?php if ($ctaarrow == 'warning') { ?> selected <?php } ?>>Orange</option>
							<option value="success" <?php if ($ctaarrow == 'success') { ?> selected <?php } ?>>Green</option>
							<option value="primary" <?php if ($ctaarrow == 'primary') { ?> selected <?php } ?>>Blue</option>
							<option value="info" <?php if ($ctaarrow == 'info') { ?> selected <?php } ?>>Light Blue</option>
							<option value="danger" <?php if ($ctaarrow == 'danger') { ?> selected <?php } ?>>Red</option>
							<option value="default" <?php if ($ctaarrow == 'default') { ?> selected <?php } ?>>Grey</option>
							
						</select> 
											<p>
												<strong>Spam Text:</strong><br />
												<input  placeholder="We Protect Your Data!" type="text" name="ctaimage1" id="ctaimage1" value="<?php echo $ctaimage1; ?>" />
											</p>   

											<p>
												<strong>Auto-Responder Code:</strong> <br>
												<textarea name="autoresponder" id="" cols="30" rows="10"><?php echo $autoresponder; ?></textarea>
											</p>
									</div>  


									<div class="menuTab"  style="display: none">
											 
											<h1><strong  style="font-size: 30px;">Customize Background Color/Texture</strong></h1>
										<h4 style="font-weight: lighter;font-size: 17px; letter-spacing: 1px">Change to Get More Attention</h4>
											<p>
												<strong>First Box Background Style:</strong><br />
												<select name="ctaimage3" id="ctaimage3">
													<option value="" <?php if ($ctaimage3 == '') { ?> selected <?php } ?>>White</option>
													<option value="blue_style" <?php if ($ctaimage3 == 'blue_style') { ?> selected <?php } ?>>Blue Color BG</option>
													<option value="red_style" <?php if ($ctaimage3 == 'red_style') { ?> selected <?php } ?>>Red Color BG</option>
													<option value="orange_style" <?php if ($ctaimage3 == 'orange_style') { ?> selected <?php } ?>>Orange Color BG</option>
													<option value="black_style" <?php if ($ctaimage3 == 'black_style') { ?> selected <?php } ?>>Black Color BG</option>
													<option value="green_style" <?php if ($ctaimage3 == 'green_style') { ?> selected <?php } ?>>Green Color BG</option>
													<option value="brick_style" <?php if ($ctaimage3 == 'brick_style') { ?> selected <?php } ?>>Bricks Texture</option>
													<option value="jean_style" <?php if ($ctaimage3 == 'jean_style') { ?> selected <?php } ?>>Jean Texture</option>
													<option value="blackwood_style" <?php if ($ctaimage3 == 'blackwood_style') { ?> selected <?php } ?>>Black Wood Texture</option>
													<option value="wood_style" <?php if ($ctaimage3 == 'wood_style') { ?> selected <?php } ?>>Wood Texture</option>
													<option value="textured_style" <?php if ($ctaimage3 == 'textured_style') { ?> selected <?php } ?>>Black Texture</option>

												</select> 
											</p> 
											<p>
												<strong>Second Box Background Style:</strong><br />
												<select name="ctaimage4" id="ctaimage4">
													<option value="" <?php if ($ctaimage4 == '') { ?> selected <?php } ?>>White</option>
													<option value="blue_style" <?php if ($ctaimage4 == 'blue_style') { ?> selected <?php } ?>>Blue Color BG</option>
													<option value="red_style" <?php if ($ctaimage4 == 'red_style') { ?> selected <?php } ?>>Red Color BG</option>
													<option value="orange_style" <?php if ($ctaimage4 == 'orange_style') { ?> selected <?php } ?>>Orange Color BG</option>
													<option value="black_style" <?php if ($ctaimage4 == 'black_style') { ?> selected <?php } ?>>Black Color BG</option>
													<option value="green_style" <?php if ($ctaimage4 == 'green_style') { ?> selected <?php } ?>>Green Color BG</option>
													<option value="brick_style" <?php if ($ctaimage4 == 'brick_style') { ?> selected <?php } ?>>Bricks Texture</option>
													<option value="jean_style" <?php if ($ctaimage4 == 'jean_style') { ?> selected <?php } ?>>Jean Texture</option>
													<option value="blackwood_style" <?php if ($ctaimage4 == 'blackwood_style') { ?> selected <?php } ?>>Black Wood Texture</option>
													<option value="wood_style" <?php if ($ctaimage4 == 'wood_style') { ?> selected <?php } ?>>Wood Texture</option>
													<option value="textured_style" <?php if ($ctaimage4 == 'textured_style') { ?> selected <?php } ?>>Black Texture</option>

												</select> <br>
											</p> 
									</div>    
									<div class="photosTab" style="display: none">
											
											   
											<h1><strong  style="font-size: 30px;">SEO Settings</strong></h1>
										<h4 style="font-weight: lighter;font-size: 17px; letter-spacing: 1px">Customize Search Engine Settings</h4>
										<hr>

										<p>
												<strong>URL to Favicon:</strong><br />
												<input  placeholder="Add URL to Your Favicon Image" type="text" name="favicon" id="favicon" value="<?php echo $favicon; ?>" />
											</p>
											<p>
												<strong>Web Browser Title:</strong><br />
												<input  placeholder="Write SEO Web Browser Title" type="text" name="seoTitle" id="seoTitle" value="<?php echo $seoTitle; ?>" />
											</p>
											<p>
												<strong>META Description:</strong><br />
												<input  placeholder="Write SEO META Description" type="text" name="metaDescription" id="metaDescription" value="<?php echo $metaDescription; ?>" />
											</p>
											<p>
												<strong>Tracking Javscript:</strong><br />
												<textarea name="tracking" id="" cols="30" rows="10"><?php echo $tracking; ?></textarea>
											</p>

									</div>                   
									<div class="dashboardTab">  

										<h1><strong  style="font-size: 30px;">Edit Page Settings</strong></h1>
										<h4 style="font-weight: lighter;font-size: 17px; letter-spacing: 1px">Customize Main Content</h4>
										<hr>

										<p>
												<strong>URL to Logo Image:</strong><br />
												<input  placeholder="Add URL to Your Logo Image" type="text" name="ctaimage2" id="ctaimage2" value="<?php echo $ctaimage2; ?>" />
											</p> 
											    
											<p>
												<strong>Main Headline:  <small>( html is allowed )</small></strong><br />
												<input  placeholder="Write Your Main Headline" type="text" name="mainheadline" id="mainheadline" value="<?php echo $mainheadline; ?>" />
											</p>  

											<p>
												<strong>Sub Headline: <small>( html is allowed )</small></strong><br />
												<input  placeholder="Write Your Sub Headline" type="text" name="subheadline" id="subheadline" value="<?php echo $subheadline; ?>" />
											</p>
											<p>
												<strong>Blurb: <small>( html is allowed )</small></strong><br />
												<input  placeholder="Write about the affiliate offer" type="text" name="blurb" id="blurb" value="<?php echo $blurb; ?>" />
											</p>

											<p>
												<strong>Main Video:</strong> <br>
												<textarea name="mainVideo" id="" cols="30" rows="10"><?php echo $mainVideo; ?></textarea>
											</p>

											<p>
												<strong>Button Text:</strong><br />
												<input  placeholder="The First CTA Button Text" type="text" name="affiliatelink" id="affiliatelink" value="<?php echo $affiliatelink; ?>" />
											</p> 
											<strong>Button Color:</strong><br />
						<select name="buttonstyle" id="buttonstyle">
							<option value="warning" <?php if ($buttonstyle == 'warning') { ?> selected <?php } ?>>Orange</option>
							<option value="success" <?php if ($buttonstyle == 'success') { ?> selected <?php } ?>>Green</option>
							<option value="primary" <?php if ($buttonstyle == 'primary') { ?> selected <?php } ?>>Blue</option>
							<option value="info" <?php if ($buttonstyle == 'info') { ?> selected <?php } ?>>Light Blue</option>
							<option value="danger" <?php if ($buttonstyle == 'danger') { ?> selected <?php } ?>>Red</option>
							<option value="default" <?php if ($buttonstyle == 'default') { ?> selected <?php } ?>>Grey</option>
						</select> 
											
											<p>
												<strong>Footer Text:</strong><br />
												<input  placeholder="Copyright &copy; All Rights Reserved" type="text" name="footer" id="" value="<?php echo $footer; ?>" />
											</p>
											
									</div>                     



									<div class="designTab" style="display: none">
						
						<h1><strong  style="font-size: 30px;">Customize Page Design</strong></h1>
										<h4 style="font-weight: lighter;font-size: 17px; letter-spacing: 1px">Time to be Creative!</h4>
						<hr>
						<p>
												<strong>YouTube Video ID: <small>ex. 0vrdgDdPApQ</small></strong><br />
												<input  placeholder="Add YouTube Video ID ex. 0vrdgDdPApQ" type="text" name="video" id="video" value="<?php echo $video; ?>" />
											</p>  
											<hr>
											<h2 style="font-weight: lighter;font-size: 20px;letter-spacing:1px">Don't Want a Video? Add Background Slideshow Images</h2>
											<hr>
						<p>
												<strong>Background Image #1:</strong><br />
												<input  placeholder="Add URL to Image for Background" type="text" name="background" id="background" value="<?php echo $background; ?>" />
											</p> 

											<p>
												<strong>Background Image #2:</strong><br />
												<input  placeholder="Add URL to Image for Background" type="text" name="background2" id="background2" value="<?php echo $background2; ?>" />
											</p> 
											<p>
												<strong>Background Image #3:</strong><br />
												<input  placeholder="Add URL to Image for Background" type="text" name="background3" id="background3" value="<?php echo $background3; ?>" />
											</p> 
						<br>
						
						
						
						
					</div>
									</div>
					
					
					

				</div>
				<br clear="all" />

				
			</div>
			









	
	
	<?php	
}


add_action( 'save_post', 'saveuberoptinpagesettings' );
function saveuberoptinpagesettings( $post_id )
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
	if( isset( $_POST['logo'] ) )
		update_post_meta( $post_id, 'logo', wp_kses( $_POST['logo'], $allowed ) );

	if( isset( $_POST['autoresponder'] ) )
		update_post_meta( $post_id, 'autoresponder', wp_kses( htmlspecialchars(stripslashes($_POST['autoresponder'])), $allowed ) );

	if( isset( $_POST['video'] ) )
		update_post_meta( $post_id, 'video', wp_kses( $_POST['video'], $allowed ) );

	if( isset( $_POST['favicon'] ) )
		update_post_meta( $post_id, 'favicon', wp_kses( $_POST['favicon'], $allowed ) );
	if( isset( $_POST['seoTitle'] ) )
		update_post_meta( $post_id, 'seoTitle', wp_kses( $_POST['seoTitle'], $allowed ) );
	if( isset( $_POST['metaDescription'] ) )
		update_post_meta( $post_id, 'metaDescription', wp_kses( $_POST['metaDescription'], $allowed ) );
	if( isset( $_POST['tracking'] ) )
		update_post_meta( $post_id, 'tracking', wp_kses( htmlspecialchars(stripslashes($_POST['tracking'])), $allowed ) );
		
	if( isset( $_POST['subheadline'] ) )
		update_post_meta( $post_id, 'subheadline', esc_attr( $_POST['subheadline'] ) );
		
if( isset( $_POST['mainVideo'] ) )
		update_post_meta( $post_id, 'mainVideo', wp_kses( htmlspecialchars(stripslashes($_POST['mainVideo'])), $allowed ) );

	if( isset( $_POST['buttonstyle'] ) )
		update_post_meta( $post_id, 'buttonstyle', esc_attr( $_POST['buttonstyle'] ) );

	if( isset( $_POST['blurb'] ) )
		update_post_meta( $post_id, 'blurb', esc_attr( $_POST['blurb'] ) );

	if( isset( $_POST['ctaheadline'] ) )
		update_post_meta( $post_id, 'ctaheadline', esc_attr( $_POST['ctaheadline'] ) );
	if( isset( $_POST['ctasubheadline'] ) )
		update_post_meta( $post_id, 'ctasubheadline', esc_attr( $_POST['ctasubheadline'] ) );

	if( isset( $_POST['affiliatelink'] ) )
		update_post_meta( $post_id, 'affiliatelink', esc_attr( $_POST['affiliatelink'] ) );

	if( isset( $_POST['ctaimage1'] ) )
		update_post_meta( $post_id, 'ctaimage1', esc_attr( $_POST['ctaimage1'] ) );
	if( isset( $_POST['ctaimage2'] ) )
		update_post_meta( $post_id, 'ctaimage2', esc_attr( $_POST['ctaimage2'] ) );
	if( isset( $_POST['ctaimage3'] ) )
		update_post_meta( $post_id, 'ctaimage3', esc_attr( $_POST['ctaimage3'] ) );
	if( isset( $_POST['ctaimage4'] ) )
		update_post_meta( $post_id, 'ctaimage4', esc_attr( $_POST['ctaimage4'] ) );
		
	

	if( isset( $_POST['ctaarrow'] ) )
		update_post_meta( $post_id, 'ctaarrow', esc_attr( $_POST['ctaarrow'] ) );

	if( isset( $_POST['mainheadline'] ) )
		update_post_meta( $post_id, 'mainheadline', esc_attr( $_POST['mainheadline'] ) );

	if( isset( $_POST['footer'] ) )
		update_post_meta( $post_id, 'footer', esc_attr( $_POST['footer'] ) );

	if( isset( $_POST['videourl'] ) )
		update_post_meta( $post_id, 'videourl', esc_attr( $_POST['videourl'] ) );

	if( isset( $_POST['background'] ) )
		update_post_meta( $post_id, 'background', esc_attr( $_POST['background'] ) );
	if( isset( $_POST['background2'] ) )
		update_post_meta( $post_id, 'background2', esc_attr( $_POST['background2'] ) );
	if( isset( $_POST['background3'] ) )
		update_post_meta( $post_id, 'background3', esc_attr( $_POST['background3'] ) );

	if( isset( $_POST['buttonurl'] ) )
		update_post_meta( $post_id, 'buttonurl', esc_attr( $_POST['buttonurl'] ) );

	if( isset( $_POST['buttontext'] ) )
		update_post_meta( $post_id, 'buttontext', esc_attr( $_POST['buttontext'] ) );

	if( isset( $_POST['boxstyle'] ) )
		update_post_meta( $post_id, 'boxstyle', esc_attr( $_POST['boxstyle'] ) );

	if( isset( $_POST['ctaimage1'] ) )
		update_post_meta( $post_id, 'ctaimage1', esc_attr( $_POST['ctaimage1'] ) );
	if( isset( $_POST['ctaimage2'] ) )
		update_post_meta( $post_id, 'ctaimage2', esc_attr( $_POST['ctaimage2'] ) );
	if( isset( $_POST['ctaimage3'] ) )
		update_post_meta( $post_id, 'ctaimage3', esc_attr( $_POST['ctaimage3'] ) );
	if( isset( $_POST['ctaimage4'] ) )
		update_post_meta( $post_id, 'ctaimage4', esc_attr( $_POST['ctaimage4'] ) );
	
}
?>