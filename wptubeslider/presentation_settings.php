<?php

 add_action( 'init', 'checkwppresentr' );
	function checkwppresentr() {
		register_post_type( 'wptubeslider',
			array(
				'labels' => array(
					'name' => __( 'Presentation' ),
					'singular_name' => __( 'Presentation' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'http://cdn2.iconfinder.com/data/icons/tango/16x16/mimetypes/x-office-presentation.png',
			'rewrite' => true
			)
		);
		flush_rewrite_rules( );
	}

    


	
add_action( 'add_meta_boxes', 'settingsforwppresentr' );
function settingsforwppresentr()
{
	add_meta_box( 'wptubeslider', 'Settings:', 'createwppresentrsettings', 'wptubeslider', 'normal', 'high' );
}


function createwppresentrsettings( $post )
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
	$presentr_slideContent_2 = isset( $values['presentr_slideContent_2'] ) ? esc_attr( $values['presentr_slideContent_2'][0] ) : '';
	$presentr_slideContent_3 = isset( $values['presentr_slideContent_3'] ) ? esc_attr( $values['presentr_slideContent_3'][0] ) : '';
	$presentr_slideContent_4 = isset( $values['presentr_slideContent_4'] ) ? esc_attr( $values['presentr_slideContent_4'][0] ) : '';
	$presentr_slideContent_5 = isset( $values['presentr_slideContent_5'] ) ? esc_attr( $values['presentr_slideContent_5'][0] ) : '';
	$presentr_slideContent_6 = isset( $values['presentr_slideContent_6'] ) ? esc_attr( $values['presentr_slideContent_6'][0] ) : '';
	$presentr_slideContent_7 = isset( $values['presentr_slideContent_7'] ) ? esc_attr( $values['presentr_slideContent_7'][0] ) : '';
	$presentr_slideContent_8 = isset( $values['presentr_slideContent_8'] ) ? esc_attr( $values['presentr_slideContent_8'][0] ) : '';
	$presentr_slideContent_9 = isset( $values['presentr_slideContent_9'] ) ? esc_attr( $values['presentr_slideContent_9'][0] ) : '';
	$presentr_slideContent_10 = isset( $values['presentr_slideContent_10'] ) ? esc_attr( $values['presentr_slideContent_10'][0] ) : '';
	$presentr_slideContent_11 = isset( $values['presentr_slideContent_11'] ) ? esc_attr( $values['presentr_slideContent_11'][0] ) : '';
	$presentr_slideContent_12 = isset( $values['presentr_slideContent_12'] ) ? esc_attr( $values['presentr_slideContent_12'][0] ) : '';
	$presentr_slideContent_13 = isset( $values['presentr_slideContent_13'] ) ? esc_attr( $values['presentr_slideContent_13'][0] ) : '';
	$presentr_slideContent_14 = isset( $values['presentr_slideContent_14'] ) ? esc_attr( $values['presentr_slideContent_14'][0] ) : '';
	$presentr_slideContent_15 = isset( $values['presentr_slideContent_15'] ) ? esc_attr( $values['presentr_slideContent_15'][0] ) : '';
	$presentr_slideContent_16 = isset( $values['presentr_slideContent_16'] ) ? esc_attr( $values['presentr_slideContent_16'][0] ) : '';
	$presentr_slideContent_17 = isset( $values['presentr_slideContent_17'] ) ? esc_attr( $values['presentr_slideContent_17'][0] ) : '';
	$presentr_slideContent_18 = isset( $values['presentr_slideContent_18'] ) ? esc_attr( $values['presentr_slideContent_18'][0] ) : '';
	$presentr_slideContent_19 = isset( $values['presentr_slideContent_19'] ) ? esc_attr( $values['presentr_slideContent_19'][0] ) : '';
	$presentr_slideContent_20 = isset( $values['presentr_slideContent_20'] ) ? esc_attr( $values['presentr_slideContent_20'][0] ) : '';
	$presentr_slideContent_21 = isset( $values['presentr_slideContent_21'] ) ? esc_attr( $values['presentr_slideContent_21'][0] ) : '';
	$presentr_slideContent_22 = isset( $values['presentr_slideContent_22'] ) ? esc_attr( $values['presentr_slideContent_22'][0] ) : '';
	$presentr_slideContent_23 = isset( $values['presentr_slideContent_23'] ) ? esc_attr( $values['presentr_slideContent_23'][0] ) : '';
	$presentr_slideContent_24 = isset( $values['presentr_slideContent_24'] ) ? esc_attr( $values['presentr_slideContent_24'][0] ) : '';
	$presentr_slideContent_25 = isset( $values['presentr_slideContent_25'] ) ? esc_attr( $values['presentr_slideContent_25'][0] ) : '';
	$presentr_slideContent_26 = isset( $values['presentr_slideContent_26'] ) ? esc_attr( $values['presentr_slideContent_26'][0] ) : '';
	$presentr_slideContent_27 = isset( $values['presentr_slideContent_27'] ) ? esc_attr( $values['presentr_slideContent_27'][0] ) : '';
	$presentr_slideContent_28 = isset( $values['presentr_slideContent_28'] ) ? esc_attr( $values['presentr_slideContent_28'][0] ) : '';
	$presentr_slideContent_29 = isset( $values['presentr_slideContent_29'] ) ? esc_attr( $values['presentr_slideContent_29'][0] ) : '';
	$presentr_slideContent_30 = isset( $values['presentr_slideContent_30'] ) ? esc_attr( $values['presentr_slideContent_30'][0] ) : '';
	$presentr_slideContent_31 = isset( $values['presentr_slideContent_31'] ) ? esc_attr( $values['presentr_slideContent_31'][0] ) : '';
	$presentr_slideContent_32 = isset( $values['presentr_slideContent_32'] ) ? esc_attr( $values['presentr_slideContent_32'][0] ) : '';
	$presentr_slideContent_33 = isset( $values['presentr_slideContent_33'] ) ? esc_attr( $values['presentr_slideContent_33'][0] ) : '';
	$presentr_slideContent_34 = isset( $values['presentr_slideContent_34'] ) ? esc_attr( $values['presentr_slideContent_34'][0] ) : '';
	$presentr_slideContent_35 = isset( $values['presentr_slideContent_35'] ) ? esc_attr( $values['presentr_slideContent_35'][0] ) : '';
	$presentr_slideContent_36 = isset( $values['presentr_slideContent_36'] ) ? esc_attr( $values['presentr_slideContent_36'][0] ) : '';
	$presentr_slideContent_37 = isset( $values['presentr_slideContent_37'] ) ? esc_attr( $values['presentr_slideContent_37'][0] ) : '';
	$presentr_slideContent_38 = isset( $values['presentr_slideContent_38'] ) ? esc_attr( $values['presentr_slideContent_38'][0] ) : '';
	$presentr_slideContent_39 = isset( $values['presentr_slideContent_39'] ) ? esc_attr( $values['presentr_slideContent_39'][0] ) : '';
	$presentr_slideContent_40 = isset( $values['presentr_slideContent_40'] ) ? esc_attr( $values['presentr_slideContent_40'][0] ) : '';
	$presentr_slideContent_41 = isset( $values['presentr_slideContent_41'] ) ? esc_attr( $values['presentr_slideContent_41'][0] ) : '';
	$presentr_slideContent_42 = isset( $values['presentr_slideContent_42'] ) ? esc_attr( $values['presentr_slideContent_42'][0] ) : '';
	$presentr_slideContent_43 = isset( $values['presentr_slideContent_43'] ) ? esc_attr( $values['presentr_slideContent_43'][0] ) : '';
	$presentr_slideContent_44 = isset( $values['presentr_slideContent_44'] ) ? esc_attr( $values['presentr_slideContent_44'][0] ) : '';
	$presentr_slideContent_45 = isset( $values['presentr_slideContent_45'] ) ? esc_attr( $values['presentr_slideContent_45'][0] ) : '';
	$presentr_slideContent_46 = isset( $values['presentr_slideContent_46'] ) ? esc_attr( $values['presentr_slideContent_46'][0] ) : '';
	$presentr_slideContent_47 = isset( $values['presentr_slideContent_47'] ) ? esc_attr( $values['presentr_slideContent_47'][0] ) : '';
	$presentr_slideContent_48 = isset( $values['presentr_slideContent_48'] ) ? esc_attr( $values['presentr_slideContent_48'][0] ) : '';
	$presentr_slideContent_49 = isset( $values['presentr_slideContent_49'] ) ? esc_attr( $values['presentr_slideContent_49'][0] ) : '';
	$presentr_slideContent_50 = isset( $values['presentr_slideContent_50'] ) ? esc_attr( $values['presentr_slideContent_50'][0] ) : '';
	
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
				height: 350px;
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
			#postdivrich { display: none;}
#presentr {
	overflow: hidden;
}
		</style>
<script src="../wp-content/plugins/wptubeslider/ckeditor/ckeditor.js"></script>
<script>
    window.onload = function() {
        CKEDITOR.replace( 'editor1', { height: 225 });
        CKEDITOR.replace( 'editor2', { height: 225 } );
        CKEDITOR.replace( 'editor3', { height: 225 } );
        CKEDITOR.replace( 'editor4', { height: 225 } );
        CKEDITOR.replace( 'editor5', { height: 225 } );
        CKEDITOR.replace( 'editor6', { height: 225 } );
        CKEDITOR.replace( 'editor7', { height: 225 } );
        CKEDITOR.replace( 'editor8', { height: 225 } );
        CKEDITOR.replace( 'editor9', { height: 225 } );
        CKEDITOR.replace( 'editor10', { height: 225 } );
        CKEDITOR.replace( 'editor11', { height: 225 } );
        CKEDITOR.replace( 'editor12', { height: 225 } );
        CKEDITOR.replace( 'editor13', { height: 225 } );
        CKEDITOR.replace( 'editor14', { height: 225 } );
        CKEDITOR.replace( 'editor15', { height: 225 } );
        CKEDITOR.replace( 'editor16', { height: 225 } );
        CKEDITOR.replace( 'editor17', { height: 225 } );
        CKEDITOR.replace( 'editor18', { height: 225 } );
        CKEDITOR.replace( 'editor19', { height: 225 } );
        CKEDITOR.replace( 'editor20', { height: 225 } );
        CKEDITOR.replace( 'editor21', { height: 225 } );
        CKEDITOR.replace( 'editor22', { height: 225 } );
        CKEDITOR.replace( 'editor23', { height: 225 } );
        CKEDITOR.replace( 'editor24', { height: 225 } );
        CKEDITOR.replace( 'editor25', { height: 225 } );
        CKEDITOR.replace( 'editor26', { height: 225 } );
        CKEDITOR.replace( 'editor27', { height: 225 } );
        CKEDITOR.replace( 'editor28', { height: 225 } );
        CKEDITOR.replace( 'editor29', { height: 225 } );
        CKEDITOR.replace( 'editor30', { height: 225 } );
        CKEDITOR.replace( 'editor31', { height: 225 } );
        CKEDITOR.replace( 'editor32', { height: 225 } );
        CKEDITOR.replace( 'editor33', { height: 225 } );
        CKEDITOR.replace( 'editor34', { height: 225 } );
        CKEDITOR.replace( 'editor35', { height: 225 } );
        CKEDITOR.replace( 'editor36', { height: 225 } );
        CKEDITOR.replace( 'editor37', { height: 225 } );
        CKEDITOR.replace( 'editor38', { height: 225 } );
        CKEDITOR.replace( 'editor39', { height: 225 } );
        CKEDITOR.replace( 'editor40', { height: 225 } );
        CKEDITOR.replace( 'editor41', { height: 225 } );
        CKEDITOR.replace( 'editor42', { height: 225 } );
        CKEDITOR.replace( 'editor43', { height: 225 } );
        CKEDITOR.replace( 'editor44', { height: 225 } );
        CKEDITOR.replace( 'editor45', { height: 225 } );
        CKEDITOR.replace( 'editor46', { height: 225 } );
        CKEDITOR.replace( 'editor47', { height: 225 } );
        CKEDITOR.replace( 'editor48', { height: 225 } );
        CKEDITOR.replace( 'editor49', { height: 225 } );
        CKEDITOR.replace( 'editor50', { height: 225 } );
    };
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$("#slideSelect").change(function() {
		  		 $('.slide').hide();
		  		 $('#slide'+$(this).val()).show();
		});
	});
</script>



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
						<p style="font-size: 11px;">Control the font style for all of the sub-headlines and paragraphs. </p>

</div>
<div style="float:right;width:45%">
	<strong>YouTube Video ID:</strong><br />
						<input type="text" name="videourl" id="videourl" value="<?php echo $videourl; ?>" />
<p style="font-size: 11px;">The YouTube video ID example: XJSH890-2 (found at end of URL) </p>
<br>
						<strong>Timer:</strong><br />
						<input type="text" name="timer" placeholder="0, 5, 10, 20" id="timer" value="<?php echo $timer; ?>" />
						<p style="font-size: 11px;">Seconds to display each slide. Example: 0, 5, 10, 20, 25 </p>

</div>


						
<br clear="all">

<h5 style="margin: 15px 0">Select Slide to Edit</h5>
<select id="slideSelect">
	<option value="1">Slide #1</option>
	<option value="2">Slide #2</option>
	<option value="3">Slide #3</option>
	<option value="4">Slide #4</option>
	<option value="5">Slide #5</option>
	<option value="6">Slide #6</option>
	<option value="7">Slide #7</option>
	<option value="8">Slide #8</option>
	<option value="9">Slide #9</option>
	<option value="10">Slide #10</option>
	<option value="11">Slide #11</option>
	<option value="12">Slide #12</option>
	<option value="13">Slide #13</option>
	<option value="14">Slide #14</option>
	<option value="15">Slide #15</option>
	<option value="16">Slide #16</option>
	<option value="17">Slide #17</option>
	<option value="18">Slide #18</option>
	<option value="19">Slide #19</option>
	<option value="20">Slide #20</option>
	<option value="21">Slide #21</option>
	<option value="22">Slide #22</option>
	<option value="23">Slide #23</option>
	<option value="24">Slide #24</option>
	<option value="25">Slide #25</option>
	<option value="26">Slide #26</option>
	<option value="27">Slide #27</option>
	<option value="28">Slide #28</option>
	<option value="29">Slide #29</option>
	<option value="30">Slide #30</option>
	<option value="31">Slide #31</option>
	<option value="32">Slide #32</option>
	<option value="33">Slide #33</option>
	<option value="34">Slide #34</option>
	<option value="35">Slide #35</option>
	<option value="36">Slide #36</option>
	<option value="37">Slide #37</option>
	<option value="38">Slide #38</option>
	<option value="39">Slide #39</option>
	<option value="40">Slide #40</option>
	<option value="41">Slide #41</option>
	<option value="42">Slide #42</option>
	<option value="43">Slide #43</option>
	<option value="44">Slide #44</option>
	<option value="45">Slide #45</option>
	<option value="46">Slide #46</option>
	<option value="47">Slide #47</option>
	<option value="48">Slide #48</option>
	<option value="49">Slide #49</option>
	<option value="50">Slide #50</option>
</select>    

<?php for ($i = 100; $i <= 50; $i++) { ?>
    <p class="slide"  id="slide<?php echo $i; ?>" style="display: none">
		<span style="display: block; padding-bottom: 10px;">Slide Content #<?php echo $i; ?>:</span>
		<textarea id="editor<?php echo $i; ?>" name="presentr_slideContent_<?php echo $i; ?>"><?php echo $presentr_slideContent_.$i; ?></textarea>
	</p>
<?php } ?>
		<p class="slide" id="slide1">
			<span style="display:none">Slide Content #1:</span>
			<textarea id="editor1" name="presentr_slideContent_1"><?php echo $presentr_slideContent_1; ?></textarea>
		</p> 

		<p class="slide"  id="slide2" style="display: none">
			<span style="display:none">Slide Content #2:</span>
			<textarea id="editor2" name="presentr_slideContent_2"><?php echo $presentr_slideContent_2; ?></textarea>
		</p>  
		<p id="slide3" class="slide" style="display: none">
		<span style="display:none">Slide Content #3:</span>
		<textarea id="editor3" name="presentr_slideContent_3"><?php echo $presentr_slideContent_3; ?></textarea>
		</p>
		<p id="slide4" class="slide" style="display: none">
		<span style="display:none">Slide Content #4:</span>
		<textarea id="editor4" name="presentr_slideContent_4"><?php echo $presentr_slideContent_4; ?></textarea>
		</p>
		<p id="slide5" class="slide" style="display: none">
		<span style="display:none">Slide Content #5:</span>
		<textarea id="editor5" name="presentr_slideContent_5"><?php echo $presentr_slideContent_5; ?></textarea>
		</p>
		<p id="slide6" class="slide" style="display: none">
		<span style="display:none">Slide Content #6:</span>
		<textarea id="editor6" name="presentr_slideContent_6"><?php echo $presentr_slideContent_6; ?></textarea>
		</p>
		<p id="slide7" class="slide" style="display: none">
		<span style="display:none">Slide Content #7:</span>
		<textarea id="editor7" name="presentr_slideContent_7"><?php echo $presentr_slideContent_7; ?></textarea>
		</p>
		<p id="slide8" class="slide" style="display: none">
		<span style="display:none">Slide Content #8:</span>
		<textarea id="editor8" name="presentr_slideContent_8"><?php echo $presentr_slideContent_8; ?></textarea>
		</p>
		<p id="slide9" class="slide" style="display: none">
		<span style="display:none">Slide Content #9:</span>
		<textarea id="editor9" name="presentr_slideContent_9"><?php echo $presentr_slideContent_9; ?></textarea>
		</p>
		<p id="slide10" class="slide" style="display: none">
		<span style="display:none">Slide Content #10:</span>
		<textarea id="editor10" name="presentr_slideContent_10"><?php echo $presentr_slideContent_10; ?></textarea>
		</p>  
		<p class="slide"  id="slide11" style="display: none">
		<span style="display:none">Slide Content #11:</span>
		<textarea id="editor11" name="presentr_slideContent_11"><?php echo $presentr_slideContent_11; ?></textarea>
	</p>
    <p class="slide"  id="slide12" style="display: none">
		<span style="display:none">Slide Content #12:</span>
		<textarea id="editor12" name="presentr_slideContent_12"><?php echo $presentr_slideContent_12; ?></textarea>
	</p>
    <p class="slide"  id="slide13" style="display: none">
		<span style="display:none">Slide Content #13:</span>
		<textarea id="editor13" name="presentr_slideContent_13"><?php echo $presentr_slideContent_13; ?></textarea>
	</p>
    <p class="slide"  id="slide14" style="display: none">
		<span style="display:none">Slide Content #14:</span>
		<textarea id="editor14" name="presentr_slideContent_14"><?php echo $presentr_slideContent_14; ?></textarea>
	</p>
    <p class="slide"  id="slide15" style="display: none">
		<span style="display:none">Slide Content #15:</span>
		<textarea id="editor15" name="presentr_slideContent_15"><?php echo $presentr_slideContent_15; ?></textarea>
	</p>
    <p class="slide"  id="slide16" style="display: none">
		<span style="display:none">Slide Content #16:</span>
		<textarea id="editor16" name="presentr_slideContent_16"><?php echo $presentr_slideContent_16; ?></textarea>
	</p>
    <p class="slide"  id="slide17" style="display: none">
		<span style="display:none">Slide Content #17:</span>
		<textarea id="editor17" name="presentr_slideContent_17"><?php echo $presentr_slideContent_17; ?></textarea>
	</p>
    <p class="slide"  id="slide18" style="display: none">
		<span style="display:none">Slide Content #18:</span>
		<textarea id="editor18" name="presentr_slideContent_18"><?php echo $presentr_slideContent_18; ?></textarea>
	</p>
    <p class="slide"  id="slide19" style="display: none">
		<span style="display:none">Slide Content #19:</span>
		<textarea id="editor19" name="presentr_slideContent_19"><?php echo $presentr_slideContent_19; ?></textarea>
	</p>
    <p class="slide"  id="slide20" style="display: none">
		<span style="display:none">Slide Content #20:</span>
		<textarea id="editor20" name="presentr_slideContent_20"><?php echo $presentr_slideContent_20; ?></textarea>
	</p>
    <p class="slide"  id="slide21" style="display: none">
		<span style="display:none">Slide Content #21:</span>
		<textarea id="editor21" name="presentr_slideContent_21"><?php echo $presentr_slideContent_21; ?></textarea>
	</p>
    <p class="slide"  id="slide22" style="display: none">
		<span style="display:none">Slide Content #22:</span>
		<textarea id="editor22" name="presentr_slideContent_22"><?php echo $presentr_slideContent_22; ?></textarea>
	</p>
    <p class="slide"  id="slide23" style="display: none">
		<span style="display:none">Slide Content #23:</span>
		<textarea id="editor23" name="presentr_slideContent_23"><?php echo $presentr_slideContent_23; ?></textarea>
	</p>
    <p class="slide"  id="slide24" style="display: none">
		<span style="display:none">Slide Content #24:</span>
		<textarea id="editor24" name="presentr_slideContent_24"><?php echo $presentr_slideContent_24; ?></textarea>
	</p>
    <p class="slide"  id="slide25" style="display: none">
		<span style="display:none">Slide Content #25:</span>
		<textarea id="editor25" name="presentr_slideContent_25"><?php echo $presentr_slideContent_25; ?></textarea>
	</p>
    <p class="slide"  id="slide26" style="display: none">
		<span style="display:none">Slide Content #26:</span>
		<textarea id="editor26" name="presentr_slideContent_26"><?php echo $presentr_slideContent_26; ?></textarea>
	</p>
    <p class="slide"  id="slide27" style="display: none">
		<span style="display:none">Slide Content #27:</span>
		<textarea id="editor27" name="presentr_slideContent_27"><?php echo $presentr_slideContent_27; ?></textarea>
	</p>
    <p class="slide"  id="slide28" style="display: none">
		<span style="display:none">Slide Content #28:</span>
		<textarea id="editor28" name="presentr_slideContent_28"><?php echo $presentr_slideContent_28; ?></textarea>
	</p>
    <p class="slide"  id="slide29" style="display: none">
		<span style="display:none">Slide Content #29:</span>
		<textarea id="editor29" name="presentr_slideContent_29"><?php echo $presentr_slideContent_29; ?></textarea>
	</p>
    <p class="slide"  id="slide30" style="display: none">
		<span style="display:none">Slide Content #30:</span>
		<textarea id="editor30" name="presentr_slideContent_30"><?php echo $presentr_slideContent_30; ?></textarea>
	</p>
    <p class="slide"  id="slide31" style="display: none">
		<span style="display:none">Slide Content #31:</span>
		<textarea id="editor31" name="presentr_slideContent_31"><?php echo $presentr_slideContent_31; ?></textarea>
	</p>
    <p class="slide"  id="slide32" style="display: none">
		<span style="display:none">Slide Content #32:</span>
		<textarea id="editor32" name="presentr_slideContent_32"><?php echo $presentr_slideContent_32; ?></textarea>
	</p>
    <p class="slide"  id="slide33" style="display: none">
		<span style="display:none">Slide Content #33:</span>
		<textarea id="editor33" name="presentr_slideContent_33"><?php echo $presentr_slideContent_33; ?></textarea>
	</p>
    <p class="slide"  id="slide34" style="display: none">
		<span style="display:none">Slide Content #34:</span>
		<textarea id="editor34" name="presentr_slideContent_34"><?php echo $presentr_slideContent_34; ?></textarea>
	</p>
    <p class="slide"  id="slide35" style="display: none">
		<span style="display:none">Slide Content #35:</span>
		<textarea id="editor35" name="presentr_slideContent_35"><?php echo $presentr_slideContent_35; ?></textarea>
	</p>
    <p class="slide"  id="slide36" style="display: none">
		<span style="display:none">Slide Content #36:</span>
		<textarea id="editor36" name="presentr_slideContent_36"><?php echo $presentr_slideContent_36; ?></textarea>
	</p>
    <p class="slide"  id="slide37" style="display: none">
		<span style="display:none">Slide Content #37:</span>
		<textarea id="editor37" name="presentr_slideContent_37"><?php echo $presentr_slideContent_37; ?></textarea>
	</p>
    <p class="slide"  id="slide38" style="display: none">
		<span style="display:none">Slide Content #38:</span>
		<textarea id="editor38" name="presentr_slideContent_38"><?php echo $presentr_slideContent_38; ?></textarea>
	</p>
    <p class="slide"  id="slide39" style="display: none">
		<span style="display:none">Slide Content #39:</span>
		<textarea id="editor39" name="presentr_slideContent_39"><?php echo $presentr_slideContent_39; ?></textarea>
	</p>
    <p class="slide"  id="slide40" style="display: none">
		<span style="display:none">Slide Content #40:</span>
		<textarea id="editor40" name="presentr_slideContent_40"><?php echo $presentr_slideContent_40; ?></textarea>
	</p>
    <p class="slide"  id="slide41" style="display: none">
		<span style="display:none">Slide Content #41:</span>
		<textarea id="editor41" name="presentr_slideContent_41"><?php echo $presentr_slideContent_41; ?></textarea>
	</p>
    <p class="slide"  id="slide42" style="display: none">
		<span style="display:none">Slide Content #42:</span>
		<textarea id="editor42" name="presentr_slideContent_42"><?php echo $presentr_slideContent_42; ?></textarea>
	</p>
    <p class="slide"  id="slide43" style="display: none">
		<span style="display:none">Slide Content #43:</span>
		<textarea id="editor43" name="presentr_slideContent_43"><?php echo $presentr_slideContent_43; ?></textarea>
	</p>
    <p class="slide"  id="slide44" style="display: none">
		<span style="display:none">Slide Content #44:</span>
		<textarea id="editor44" name="presentr_slideContent_44"><?php echo $presentr_slideContent_44; ?></textarea>
	</p>
    <p class="slide"  id="slide45" style="display: none">
		<span style="display:none">Slide Content #45:</span>
		<textarea id="editor45" name="presentr_slideContent_45"><?php echo $presentr_slideContent_45; ?></textarea>
	</p>
    <p class="slide"  id="slide46" style="display: none">
		<span style="display:none">Slide Content #46:</span>
		<textarea id="editor46" name="presentr_slideContent_46"><?php echo $presentr_slideContent_46; ?></textarea>
	</p>
    <p class="slide"  id="slide47" style="display: none">
		<span style="display:none">Slide Content #47:</span>
		<textarea id="editor47" name="presentr_slideContent_47"><?php echo $presentr_slideContent_47; ?></textarea>
	</p>
    <p class="slide"  id="slide48" style="display: none">
		<span style="display:none">Slide Content #48:</span>
		<textarea id="editor48" name="presentr_slideContent_48"><?php echo $presentr_slideContent_48; ?></textarea>
	</p>
    <p class="slide"  id="slide49" style="display: none">
		<span style="display:none">Slide Content #49:</span>
		<textarea id="editor49" name="presentr_slideContent_49"><?php echo $presentr_slideContent_49; ?></textarea>
	</p>
    <p class="slide"  id="slide50" style="display: none">
		<span style="display:none">Slide Content #50:</span>
		<textarea id="editor50" name="presentr_slideContent_50"><?php echo $presentr_slideContent_50; ?></textarea>
	</p>              
		
		
</div>                     <div class="designTab" style="display: none">
						
						
						
					
					</div>
					<div class="extraTab" style="display: none">
						
						<br>
						<strong>Submit Button Text:</strong><br />
						<input type="text" name="buttontext" id="buttontext" value="<?php echo $buttontext; ?>" /><br>
						<strong>Your Autoresponder Form HTML Code:</strong><br />
					</div>
					<div class="slideshowTab" style="display: none">


						
				

						
					</div>

					

				</div>
				<br clear="all" />

				
			</div>
			









	
	
	<?php	
}


add_action( 'save_post', 'savewppresentrsettings' );
function savewppresentrsettings( $post_id )
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
	if( isset( $_POST['presentr_slideContent_3'] ) )
			update_post_meta( $post_id, 'presentr_slideContent_3', esc_attr( $_POST['presentr_slideContent_3'] ) );
	if( isset( $_POST['presentr_slideContent_4'] ) )
			update_post_meta( $post_id, 'presentr_slideContent_4', esc_attr( $_POST['presentr_slideContent_4'] ) );
		if( isset( $_POST['presentr_slideContent_5'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_5', esc_attr( $_POST['presentr_slideContent_5'] ) );
		if( isset( $_POST['presentr_slideContent_6'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_6', esc_attr( $_POST['presentr_slideContent_6'] ) );
		if( isset( $_POST['presentr_slideContent_7'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_7', esc_attr( $_POST['presentr_slideContent_7'] ) );
		if( isset( $_POST['presentr_slideContent_8'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_8', esc_attr( $_POST['presentr_slideContent_8'] ) );
		if( isset( $_POST['presentr_slideContent_9'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_9', esc_attr( $_POST['presentr_slideContent_9'] ) );
		if( isset( $_POST['presentr_slideContent_10'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_10', esc_attr( $_POST['presentr_slideContent_10'] ) );
		if( isset( $_POST['presentr_slideContent_11'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_11', esc_attr( $_POST['presentr_slideContent_11'] ) );
		if( isset( $_POST['presentr_slideContent_12'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_12', esc_attr( $_POST['presentr_slideContent_12'] ) );
		if( isset( $_POST['presentr_slideContent_13'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_13', esc_attr( $_POST['presentr_slideContent_13'] ) );
		if( isset( $_POST['presentr_slideContent_14'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_14', esc_attr( $_POST['presentr_slideContent_14'] ) );
		if( isset( $_POST['presentr_slideContent_15'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_15', esc_attr( $_POST['presentr_slideContent_15'] ) );
		if( isset( $_POST['presentr_slideContent_16'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_16', esc_attr( $_POST['presentr_slideContent_16'] ) );
		if( isset( $_POST['presentr_slideContent_17'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_17', esc_attr( $_POST['presentr_slideContent_17'] ) );
		if( isset( $_POST['presentr_slideContent_18'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_18', esc_attr( $_POST['presentr_slideContent_18'] ) );
		if( isset( $_POST['presentr_slideContent_19'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_19', esc_attr( $_POST['presentr_slideContent_19'] ) );
		if( isset( $_POST['presentr_slideContent_20'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_20', esc_attr( $_POST['presentr_slideContent_20'] ) );
		if( isset( $_POST['presentr_slideContent_21'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_21', esc_attr( $_POST['presentr_slideContent_21'] ) );
		if( isset( $_POST['presentr_slideContent_22'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_22', esc_attr( $_POST['presentr_slideContent_22'] ) );
		if( isset( $_POST['presentr_slideContent_23'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_23', esc_attr( $_POST['presentr_slideContent_23'] ) );
		if( isset( $_POST['presentr_slideContent_24'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_24', esc_attr( $_POST['presentr_slideContent_24'] ) );
		if( isset( $_POST['presentr_slideContent_25'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_25', esc_attr( $_POST['presentr_slideContent_25'] ) );
		if( isset( $_POST['presentr_slideContent_26'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_26', esc_attr( $_POST['presentr_slideContent_26'] ) );
		if( isset( $_POST['presentr_slideContent_27'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_27', esc_attr( $_POST['presentr_slideContent_27'] ) );
		if( isset( $_POST['presentr_slideContent_28'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_28', esc_attr( $_POST['presentr_slideContent_28'] ) );
		if( isset( $_POST['presentr_slideContent_29'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_29', esc_attr( $_POST['presentr_slideContent_29'] ) );
		if( isset( $_POST['presentr_slideContent_30'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_30', esc_attr( $_POST['presentr_slideContent_30'] ) );
		if( isset( $_POST['presentr_slideContent_31'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_31', esc_attr( $_POST['presentr_slideContent_31'] ) );
		if( isset( $_POST['presentr_slideContent_32'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_32', esc_attr( $_POST['presentr_slideContent_32'] ) );
		if( isset( $_POST['presentr_slideContent_33'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_33', esc_attr( $_POST['presentr_slideContent_33'] ) );
		if( isset( $_POST['presentr_slideContent_34'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_34', esc_attr( $_POST['presentr_slideContent_34'] ) );
		if( isset( $_POST['presentr_slideContent_35'] ) )
				update_post_meta( $post_id, 'presentr_slideContent_35', esc_attr( $_POST['presentr_slideContent_35'] ) );
			if( isset( $_POST['presentr_slideContent_36'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_36', esc_attr( $_POST['presentr_slideContent_36'] ) );
			if( isset( $_POST['presentr_slideContent_37'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_37', esc_attr( $_POST['presentr_slideContent_37'] ) );
			if( isset( $_POST['presentr_slideContent_38'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_38', esc_attr( $_POST['presentr_slideContent_38'] ) );
			if( isset( $_POST['presentr_slideContent_39'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_39', esc_attr( $_POST['presentr_slideContent_39'] ) );
			if( isset( $_POST['presentr_slideContent_40'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_40', esc_attr( $_POST['presentr_slideContent_40'] ) );
			if( isset( $_POST['presentr_slideContent_41'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_41', esc_attr( $_POST['presentr_slideContent_41'] ) );
			if( isset( $_POST['presentr_slideContent_42'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_42', esc_attr( $_POST['presentr_slideContent_42'] ) );
			if( isset( $_POST['presentr_slideContent_43'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_43', esc_attr( $_POST['presentr_slideContent_43'] ) );
			if( isset( $_POST['presentr_slideContent_44'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_44', esc_attr( $_POST['presentr_slideContent_44'] ) );
			if( isset( $_POST['presentr_slideContent_45'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_45', esc_attr( $_POST['presentr_slideContent_45'] ) );
			if( isset( $_POST['presentr_slideContent_46'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_46', esc_attr( $_POST['presentr_slideContent_46'] ) );
			if( isset( $_POST['presentr_slideContent_47'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_47', esc_attr( $_POST['presentr_slideContent_47'] ) );
			if( isset( $_POST['presentr_slideContent_48'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_48', esc_attr( $_POST['presentr_slideContent_48'] ) );
			if( isset( $_POST['presentr_slideContent_49'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_49', esc_attr( $_POST['presentr_slideContent_49'] ) );
			if( isset( $_POST['presentr_slideContent_50'] ) )
					update_post_meta( $post_id, 'presentr_slideContent_50', esc_attr( $_POST['presentr_slideContent_50'] ) );

	if( isset( $_POST['buttontext'] ) )
		update_post_meta( $post_id, 'buttontext', esc_attr( $_POST['buttontext'] ) );
	
}
?>