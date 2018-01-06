<?php

 add_action( 'init', 'create_questionoptin' );
	function create_questionoptin() {
		register_post_type( 'questionoptin',
			array(
				'labels' => array(
					'name' => __( 'Question Optin' ),
					'singular_name' => __( 'Question Optin' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'http://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/apps/user-info.png',
			'rewrite' => true
			)
		);
		flush_rewrite_rules( );
	}
	
add_action( 'add_meta_boxes', 'create_metadata_questionoptin' );
function create_metadata_questionoptin()
{
	add_meta_box( 'questionoptin', 'Settings:', 'settings_questionoptin', 'questionoptin', 'normal', 'high' );
}


function settings_questionoptin( $post )
{
	$values = get_post_custom( $post->ID );
	$logo = isset( $values['logo'] ) ? esc_attr( $values['logo'][0] ) : '';
	$subheadline = isset( $values['subheadline'] ) ? esc_attr( $values['subheadline'][0] ) : '';

	$paragraph = isset( $values['paragraph'] ) ? esc_attr( $values['paragraph'][0] ) : '';

	$question = isset( $values['question'] ) ? esc_attr( $values['question'][0] ) : '';
	$option1 = isset( $values['option1'] ) ? esc_attr( $values['option1'][0] ) : '';
	$option2 = isset( $values['option2'] ) ? esc_attr( $values['option2'][0] ) : '';
	$option3 = isset( $values['option3'] ) ? esc_attr( $values['option3'][0] ) : '';
	$option4 = isset( $values['option4'] ) ? esc_attr( $values['option4'][0] ) : '';

	$formHeadline = isset( $values['formHeadline'] ) ? esc_attr( $values['formHeadline'][0] ) : '';
	$formSubHeadline = isset( $values['formSubHeadline'] ) ? esc_attr( $values['formSubHeadline'][0] ) : '';
	$showName = isset( $values['showName'] ) ? esc_attr( $values['showName'][0] ) : '';

	$firstbutton = isset( $values['firstbutton'] ) ? esc_attr( $values['firstbutton'][0] ) : '';
	$secondbutton = isset( $values['secondbutton'] ) ? esc_attr( $values['secondbutton'][0] ) : '';
	$warning1 = isset( $values['warning1'] ) ? esc_attr( $values['warning1'][0] ) : '';
	$warning2 = isset( $values['warning2'] ) ? esc_attr( $values['warning2'][0] ) : '';

	$typography = isset( $values['typography'] ) ? esc_attr( $values['typography'][0] ) : '';
	$buttonstyle = isset( $values['buttonstyle'] ) ? esc_attr( $values['buttonstyle'][0] ) : '';
	$footer = isset( $values['footer'] ) ? esc_attr( $values['footer'][0] ) : '';
	$background = isset( $values['background'] ) ? esc_attr( $values['background'][0] ) : '';
	$mainheadline = isset( $values['mainheadline'] ) ? esc_attr( $values['mainheadline'][0] ) : '';
	
	$submitbutton = isset( $values['submitbutton'] ) ? esc_attr( $values['submitbutton'][0] ) : '';
	$autoresponder = isset( $values['autoresponder'] ) ? esc_attr( $values['autoresponder'][0] ) : '';

	$wrapBG = isset( $values['wrapBG'] ) ? esc_attr( $values['wrapBG'][0] ) : '';
	
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
				font-family: 'Poly', serif;
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
				background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/categories/package_settings.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .dashboard.active, #siteOptions .dashboard:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/categories/package_settings.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .design {
				background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/stock_filters-pop-art.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .design.active, #siteOptions .design:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/Open-Office-Icons/stock_filters-pop-art.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .slideshow {
				background: url(http://cdn4.iconfinder.com/data/icons/Lontar_eve/24/hat.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .slideshow.active, #siteOptions .slideshow:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/Lontar_eve/24/hat.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .map {
				background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/apps/user-info.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .map.active, #siteOptions .map:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/apps/user-info.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .menu {
				background: url(http://cdn2.iconfinder.com/data/icons/c9d/email.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .menu.active, #siteOptions .menu:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/c9d/email.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .language {
				background: url(http://cdn3.iconfinder.com/data/icons/flatforlinux/24/27-Edit%20Text.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .language.active, #siteOptions .language:hover {
					background: url(http://cdn3.iconfinder.com/data/icons/flatforlinux/24/27-Edit%20Text.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .extra {
				background: url(http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .extra.active, #siteOptions .extra:hover {
					background: url(http://cdn5.iconfinder.com/data/icons/pursuit/24/email.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .photos {
				background: url(http://cdn2.iconfinder.com/data/icons/icojoy/shadow/standart/png/24x24/001_15.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .photos.active, #siteOptions .photos:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/icojoy/shadow/standart/png/24x24/001_15.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions hr {
				border: none;
				border-bottom: 1px solid #ddd;
				margin-bottom: 20px;
			}
		</style>

			<div id="siteOptions"> <a name="tops"></a>
				                <div id="fb_nav">
				                	<br>
									<ul> 
										<li><a href="#tops" class="active dashboard">Main Content</a></li>
										<li><a href="#tops" class="design">Design Options</a></li>       
										<li><a href="#tops" class="map">Questionaire</a></li> 
										<li><a href="#tops" class="menu">Email Optin</a></li>
										<li><a href="#tops" class="photos">Extra Settings</a></li>                
									</ul>
								</div>                 

									<div id="fb_tabs">
									<div class="mapTab"  style="display: none">
										
										<strong>What is Your Question?</strong><br />
										<input type="text" name="question" id="question" value="<?php echo $question; ?>" /><br>
										<strong>Option #1:</strong><br />
										<input type="text" name="option1" id="option1" value="<?php echo $option1; ?>" /><br>
										<strong>Option #2:</strong><br />
										<input type="text" name="option2" id="option2" value="<?php echo $option2; ?>" /><br>
										<strong>Option #3:</strong><br />
										<input type="text" name="option3" id="option3" value="<?php echo $option3; ?>" /><br>
										<strong>Option #4:</strong><br />
										<input type="text" name="option4" id="option4" value="<?php echo $option4; ?>" /><br>

									</div> 
									<div class="photosTab"  style="display: none">
										
										<strong>First Button Text</strong><br />
										<input type="text" name="firstbutton" id="firstbutton" value="<?php echo $firstbutton; ?>" /><br>
										<strong>Second Button Text:</strong><br />
										<input type="text" name="secondbutton" id="secondbutton" value="<?php echo $secondbutton; ?>" /><br>
										<strong>Warning on Survey:</strong><br />
										<input type="text" name="warning1" id="warning1" value="<?php echo $warning1; ?>" /><br>
										<strong>Warning on Optin:</strong><br />
										<input type="text" name="warning2" id="warning2" value="<?php echo $warning2; ?>" /><br>
										

									</div>   
									<div class="menuTab"  style="display: none">
											<strong>Headline:</strong><br />
											<input type="text" name="formHeadline" id="formHeadline" value="<?php echo $formHeadline; ?>" /><br>
											<strong>Sub Headline:</strong><br />
											<input type="text" name="formSubHeadline" id="formSubHeadline" value="<?php echo $formSubHeadline; ?>" /><br>
											<strong>Your Autoresponder Form HTML Code:</strong><br />
											<textarea name="autoresponder" id="autoresponder"><?php echo $autoresponder; ?></textarea><br>
											<strong>Show or Hide Name Field:</strong><br />
											<select name="showName" id="showName">
												<option value="show" <?php if ($showName == 'show') { ?> selected <?php } ?>>Show</option>
												<option value="hide" <?php if ($showName == 'hide') { ?> selected <?php } ?>>Hide</option>
											</select>
									</div>    
									<div class="photosTab" style="display: none">
											

									</div>                   
									<div class="dashboardTab">  
											<p>
												<strong>Banner or Logo Image URL:</strong><br />
												<input type="text" name="logo" id="logo" value="<?php echo $logo; ?>" />
											</p>     
											<p>
												<strong>Main Headline:</strong><br />
												<input type="text" name="mainheadline" id="mainheadline" value="<?php echo $mainheadline; ?>" />
											</p>                  
											<p>
												<strong>Sub Headline:</strong><br />
												<input type="text" name="subheadline" id="subheadline" value="<?php echo $subheadline; ?>" />
											</p>
											<p>
												<strong>Footer Text:</strong><br />
												<input type="text" name="footer" id="" value="<?php echo $footer; ?>" />
											</p>
											
									</div>                     <div class="designTab" style="display: none">
						
						
						<strong>Content Background:</strong><br />
						<select name="wrapBG" id="wrapBG">
							<option value="1" <?php if ($wrapBG == '1') { ?> selected <?php } ?>>Default</option>
							<option value="2" <?php if ($wrapBG == '2') { ?> selected <?php } ?>>BG #2</option>
							<option value="3" <?php if ($wrapBG == '3') { ?> selected <?php } ?>>BG #3</option>
							<option value="4" <?php if ($wrapBG == '4') { ?> selected <?php } ?>>BG #4</option>
							<option value="5" <?php if ($wrapBG == '5') { ?> selected <?php } ?>>BG #5</option>
						</select>
						<br>
						<strong>Background Style:</strong><br />
						<select name="background" id="background">
							<option value="1" <?php if ($background == '1') { ?> selected <?php } ?>>Default</option>
							<option value="2" <?php if ($background == '2') { ?> selected <?php } ?>>BG #1</option>
							<option value="3" <?php if ($background == '3') { ?> selected <?php } ?>>BG #2</option>
							<option value="4" <?php if ($background == '4') { ?> selected <?php } ?>>BG #3</option>
							<option value="5" <?php if ($background == '5') { ?> selected <?php } ?>>BG #4</option>
							<option value="6" <?php if ($background == '6') { ?> selected <?php } ?>>BG #5</option>
							<option value="7" <?php if ($background == '7') { ?> selected <?php } ?>>BG #6</option>
							<option value="8" <?php if ($background == '8') { ?> selected <?php } ?>>BG #7</option>
							<option value="9" <?php if ($background == '9') { ?> selected <?php } ?>>BG #8</option>
							<option value="10" <?php if ($background == '10') { ?> selected <?php } ?>>BG #9</option>
							<option value="11" <?php if ($background == '11') { ?> selected <?php } ?>>BG #10</option>
							<option value="12" <?php if ($background == '12') { ?> selected <?php } ?>>BG #11</option>
							<option value="13" <?php if ($background == '13') { ?> selected <?php } ?>>BG #12</option>
							<option value="14" <?php if ($background == '14') { ?> selected <?php } ?>>BG #13</option>
							<option value="15" <?php if ($background == '15') { ?> selected <?php } ?>>BG #14</option>
							<option value="16" <?php if ($background == '16') { ?> selected <?php } ?>>BG #15</option>
							<option value="17" <?php if ($background == '17') { ?> selected <?php } ?>>BG #16</option>
							<option value="18" <?php if ($background == '18') { ?> selected <?php } ?>>BG #17</option>
							<option value="19" <?php if ($background == '19') { ?> selected <?php } ?>>BG #18</option>
							<option value="20" <?php if ($background == '20') { ?> selected <?php } ?>>BG #19</option>
							<option value="21" <?php if ($background == '21') { ?> selected <?php } ?>>BG #20</option>
							<option value="22" <?php if ($background == '22') { ?> selected <?php } ?>>BG #21</option>
							<option value="23" <?php if ($background == '23') { ?> selected <?php } ?>>BG #22</option>
							<option value="24" <?php if ($background == '24') { ?> selected <?php } ?>>BG #23</option>
							<option value="25" <?php if ($background == '25') { ?> selected <?php } ?>>BG #24</option>
							<option value="26" <?php if ($background == '26') { ?> selected <?php } ?>>BG #25</option>
							<option value="27" <?php if ($background == '27') { ?> selected <?php } ?>>BG #26</option>
							<option value="28" <?php if ($background == '28') { ?> selected <?php } ?>>BG #27</option>
						</select>
						<br>
						<strong>Headline Font Style:</strong><br />
						<select name="typography" id="typography">
							<option value="1" <?php if ($typography == '1') { ?> selected <?php } ?>>Arimo</option>
							<option value="2" <?php if ($typography == '2') { ?> selected <?php } ?>>Open Sans</option>
							<option value="3" <?php if ($typography == '3') { ?> selected <?php } ?>>Lato</option>
							<option value="4" <?php if ($typography == '4') { ?> selected <?php } ?>>Source Sans Pro</option>
							<option value="5" <?php if ($typography == '5') { ?> selected <?php } ?>>Play</option>
							<option value="6" <?php if ($typography == '6') { ?> selected <?php } ?>>Avro</option>
							<option value="7" <?php if ($typography == '7') { ?> selected <?php } ?>>Lora</option>
							<option value="8" <?php if ($typography == '8') { ?> selected <?php } ?>>Merriweather</option>
							<option value="9" <?php if ($typography == '9') { ?> selected <?php } ?>>Playfair Display</option>
							<option value="10" <?php if ($typography == '10') { ?> selected <?php } ?>>Coda</option>
							<option value="11" <?php if ($typography == '11') { ?> selected <?php } ?>>Patua One</option>
							<option value="12" <?php if ($typography == '12') { ?> selected <?php } ?>>Coming Soon</option>
							<option value="13" <?php if ($typography == '13') { ?> selected <?php } ?>>Marck Script</option>
							<option value="14" <?php if ($typography == '14') { ?> selected <?php } ?>>Short Stack</option>
						</select>
						<br>
						<strong>Paragraph Font Style:</strong><br />
						<select name="paragraph" id="paragraph">
							<option value="1" <?php if ($paragraph == '1') { ?> selected <?php } ?>>Default</option>
							<option value="2" <?php if ($paragraph == '2') { ?> selected <?php } ?>>Open Sans</option>
							<option value="3" <?php if ($paragraph == '3') { ?> selected <?php } ?>>Lato</option>
							<option value="4" <?php if ($paragraph == '4') { ?> selected <?php } ?>>Source Sans Pro</option>
							<option value="5" <?php if ($paragraph == '5') { ?> selected <?php } ?>>Play</option>
							<option value="6" <?php if ($paragraph == '6') { ?> selected <?php } ?>>Avro</option>
							<option value="7" <?php if ($paragraph == '7') { ?> selected <?php } ?>>Lora</option>
							<option value="8" <?php if ($paragraph == '8') { ?> selected <?php } ?>>Merriweather</option>
							<option value="9" <?php if ($paragraph == '9') { ?> selected <?php } ?>>Playfair Display</option>
							<option value="10" <?php if ($paragraph == '10') { ?> selected <?php } ?>>Coda</option>
							<option value="11" <?php if ($paragraph == '11') { ?> selected <?php } ?>>Patua One</option>
							<option value="12" <?php if ($paragraph == '12') { ?> selected <?php } ?>>Coming Soon</option>
							<option value="13" <?php if ($paragraph == '13') { ?> selected <?php } ?>>Marck Script</option>
							<option value="14" <?php if ($paragraph == '14') { ?> selected <?php } ?>>Short Stack</option>
						</select>
						
						
					</div>
					
					
					

				</div>
				<br clear="all" />

				
			</div>
			









	
	
	<?php	
}


add_action( 'save_post', 'save_questionoptin' );
function save_questionoptin( $post_id )
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
		
	if( isset( $_POST['subheadline'] ) )
		update_post_meta( $post_id, 'subheadline', esc_attr( $_POST['subheadline'] ) );
		
	if( isset( $_POST['question'] ) )
		update_post_meta( $post_id, 'question', esc_attr( $_POST['question'] ) );
		
	if( isset( $_POST['option1'] ) )
		update_post_meta( $post_id, 'option1', esc_attr( $_POST['option1'] ) );
		
	if( isset( $_POST['option2'] ) )
		update_post_meta( $post_id, 'option2', esc_attr( $_POST['option2'] ) );

	if( isset( $_POST['option3'] ) )
		update_post_meta( $post_id, 'option3', esc_attr( $_POST['option3'] ) );
		
	if( isset( $_POST['option4'] ) )
		update_post_meta( $post_id, 'option4', esc_attr( $_POST['option4'] ) );

	if( isset( $_POST['wrapBG'] ) )
		update_post_meta( $post_id, 'wrapBG', esc_attr( $_POST['wrapBG'] ) );
		
	if( isset( $_POST['paragraph'] ) )
		update_post_meta( $post_id, 'paragraph', esc_attr( $_POST['paragraph'] ) );
	if( isset( $_POST['formHeadline'] ) )
		update_post_meta( $post_id, 'formHeadline', esc_attr( $_POST['formHeadline'] ) );
	if( isset( $_POST['formSubHeadline'] ) )
		update_post_meta( $post_id, 'formSubHeadline', esc_attr( $_POST['formSubHeadline'] ) );
	if( isset( $_POST['showName'] ) )
		update_post_meta( $post_id, 'showName', esc_attr( $_POST['showName'] ) );
	
	if( isset( $_POST['submitbutton'] ) )
		update_post_meta( $post_id, 'submitbutton', esc_attr( $_POST['submitbutton'] ) );

	if( isset( $_POST['firstbutton'] ) )
		update_post_meta( $post_id, 'firstbutton', esc_attr( $_POST['firstbutton'] ) );
	if( isset( $_POST['secondbutton'] ) )
		update_post_meta( $post_id, 'secondbutton', esc_attr( $_POST['secondbutton'] ) );

	if( isset( $_POST['warning1'] ) )
		update_post_meta( $post_id, 'warning1', esc_attr( $_POST['warning1'] ) );
	if( isset( $_POST['warning2'] ) )
		update_post_meta( $post_id, 'warning2', esc_attr( $_POST['warning2'] ) );

	if( isset( $_POST['typography'] ) )
		update_post_meta( $post_id, 'typography', esc_attr( $_POST['typography'] ) );

	if( isset( $_POST['mainheadline'] ) )
		update_post_meta( $post_id, 'mainheadline', esc_attr( $_POST['mainheadline'] ) );

	if( isset( $_POST['footer'] ) )
		update_post_meta( $post_id, 'footer', esc_attr( $_POST['footer'] ) );

	
	if( isset( $_POST['background'] ) )
		update_post_meta( $post_id, 'background', esc_attr( $_POST['background'] ) );

	if( isset( $_POST['buttonurl'] ) )
		update_post_meta( $post_id, 'buttonurl', esc_attr( $_POST['buttonurl'] ) );

	if( isset( $_POST['buttontext'] ) )
		update_post_meta( $post_id, 'buttontext', esc_attr( $_POST['buttontext'] ) );

	if( isset( $_POST['boxstyle'] ) )
		update_post_meta( $post_id, 'boxstyle', esc_attr( $_POST['boxstyle'] ) );

	if( isset( $_POST['autoresponder'] ) )
		update_post_meta( $post_id, 'autoresponder', esc_attr( $_POST['autoresponder'] ) );
	
}
?>