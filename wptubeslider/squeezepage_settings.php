<?php

 add_action( 'init', 'checkwppresentr_squeeze' );
	function checkwppresentr_squeeze() {
		register_post_type( 'wptubeslider_page',
			array(
				'labels' => array(
					'name' => __( 'Slideshow Page' ),
					'singular_name' => __( 'Slideshow Page' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'http://cdn2.iconfinder.com/data/icons/tango/16x16/mimetypes/x-office-presentation-template.png',
			'rewrite' => true
			)
		);
		flush_rewrite_rules( );
	}

    


	
add_action( 'add_meta_boxes', 'settingsforwppresentr_squeeze' );
function settingsforwppresentr_squeeze()
{
	add_meta_box( 'wptubeslider_page', 'Settings:', 'createwppresentrsettings_squeeze', 'wptubeslider_page', 'normal', 'high' );
}


function createwppresentrsettings_squeeze( $post )
{
	$values = get_post_custom( $post->ID );
	$timer = isset( $values['timer'] ) ? esc_attr( $values['timer'][0] ) : '';
	$paragraph = isset( $values['paragraph'] ) ? esc_attr( $values['paragraph'][0] ) : '';
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

	$buttontext = isset( $values['buttontext'] ) ? esc_attr( $values['buttontext'][0] ) : '';
	$presentr_slideContent_1 = isset( $values['presentr_slideContent_1'] ) ? esc_attr( $values['presentr_slideContent_1'][0] ) : '';
	
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
			#siteOptions {
				width: 100%;
				overflow: hidden;
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
				width: 94%;
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
					background: url(http://cdn3.iconfinder.com/data/icons/UltimateGnome/24x24/actions/go-home.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .design {
				background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/apps/gnome-graphics.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .design.active, #siteOptions .design:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/apps/gnome-graphics.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .slideshow {
				background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .slideshow.active, #siteOptions .slideshow:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .map {
				background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/stock/text/stock_list_bullet.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .map.active, #siteOptions .map:hover {
					background: url(http://cdn2.iconfinder.com/data/icons/gnomeicontheme/24x24/stock/text/stock_list_bullet.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions .menu {
				background: url(http://cdn1.iconfinder.com/data/icons/professional-toolbar-icons-png/24/Login.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .menu.active, #siteOptions .menu:hover {
					background: url(http://cdn1.iconfinder.com/data/icons/professional-toolbar-icons-png/24/Login.png) no-repeat left #fff;
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
				background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left;
				background-position: 9px 7px;
			}
				#siteOptions .photos.active, #siteOptions .photos:hover {
					background: url(http://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/24x24/mimetypes/gnome-mime-video.png) no-repeat left #fff;
					background-position: 9px 7px;
				}
			#siteOptions hr {
				border: none;
				border-bottom: 1px solid #ddd;
				margin-bottom: 20px;
			}
		</style>



			<div id="siteOptions"> <a name="tops"></a>
				                <div id="fb_tabs">                     
<div
class="dashboardTab">  
           
		
<div style="float:left;width:45%">
	<strong>Headline Font Style:</strong><br />
						<select name="typography" id="typography">
							<option value="1" <?php if ($typography == '1') { ?> selected <?php } ?>>Default</option>
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
						<p style="font-size: 11px;">Control the font style for all of the headlines.</p>
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
						<p style="font-size: 11px;">Control the font style for all of the sub-headlines and paragraphs.</p>
	<br>
<strong>Footer Text:</strong><br />
						<input type="text" name="mainheadline" placeholder="Copyright 2013 &copy; All Right Reserved" id="mainheadline" value="<?php echo $mainheadline; ?>" />
						<p style="font-size: 11px;">Show the footer information such as he copyright and website name. </p>
</div>

<div style="float:right;width:45%">
	<strong>URL to Presentation:</strong><br />
						<input type="text" name="videourl" id="videourl" value="<?php echo $videourl; ?>" />
						<p style="font-size: 11px;">Paste the full URL to the Presentr Presentation page in wordpress.</p>
<br>
<strong>Background Style:</strong><br />
						<select name="background" id="background">
							<option value="1" <?php if ($background == '1') { ?> selected <?php } ?>>Default White</option>
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
						<p style="font-size: 11px;">Choose from 27 different light and dark textures for background.</p>
						<br>
<strong>Logo Image URL:</strong><br />
						<input type="text" name="timer" placeholder="Add URL to Your Image Here..." id="timer" value="<?php echo $timer; ?>" />
						<p style="font-size: 11px;">Add your own logo or banner to the top area to brand your page.</p>
</div>
		
</div>             

					

				</div>
				<br clear="all" />

				
			</div>
			









	
	
	<?php	
}


add_action( 'save_post', 'savewppresentrsettings_squeeze' );
function savewppresentrsettings_squeeze( $post_id )
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
	if( isset( $_POST['timer'] ) )
		update_post_meta( $post_id, 'timer', wp_kses( $_POST['timer'], $allowed ) );
		
	if( isset( $_POST['paragraph'] ) )
		update_post_meta( $post_id, 'paragraph', esc_attr( $_POST['paragraph'] ) );
		
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

	if( isset( $_POST['presentr_slideContent_1'] ) )
		update_post_meta( $post_id, 'presentr_slideContent_1', esc_attr( $_POST['presentr_slideContent_1'] ) );

	if( isset( $_POST['presentr_slideContent_2'] ) )
		update_post_meta( $post_id, 'presentr_slideContent_2', esc_attr( $_POST['presentr_slideContent_2'] ) );

	if( isset( $_POST['buttontext'] ) )
		update_post_meta( $post_id, 'buttontext', esc_attr( $_POST['buttontext'] ) );
	
}
?>