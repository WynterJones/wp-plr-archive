<?php

 add_action( 'init', 'createwp_quik' );
	function createwp_quik() {
		register_post_type( 'wp_quik',
			array(
				'labels' => array(
					'name' => __( 'Quik Page' ),
					'singular_name' => __( 'Quik Page' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'http://cdn2.iconfinder.com/data/icons/tango/16x16/apps/system-users.png',
			'rewrite' => true
			)
		);
		flush_rewrite_rules( );
	}

add_action( 'add_meta_boxes', 'settingsforwp_quik' );
function settingsforwp_quik()
{
	add_meta_box( 'wp_quik', 'Edit Your Page:', 'createnewwp_quik', 'wp_quik', 'normal', 'high' );
}


function createnewwp_quik( $post )
{
	$values = get_post_custom( $post->ID );
	$companyName = isset( $values['companyName'] ) ? esc_attr( $values['companyName'][0] ) : '';
	$subHeadline = isset( $values['subHeadline'] ) ? esc_attr( $values['subHeadline'][0] ) : '';
	$main_headline = isset( $values['main_headline'] ) ? esc_attr( $values['main_headline'][0] ) : '';
	$footerLeft = isset( $values['footerLeft'] ) ? esc_attr( $values['footerLeft'][0] ) : '';
	$footerRight = isset( $values['footerRight'] ) ? esc_attr( $values['footerRight'][0] ) : '';
	$logoImage = isset( $values['logoImage'] ) ? esc_attr( $values['logoImage'][0] ) : '';

	// Design Settings

	$logoHeadline = isset( $values['logoHeadline'] ) ? esc_attr( $values['logoHeadline'][0] ) : '';
	$logoTagline = isset( $values['logoTagline'] ) ? esc_attr( $values['logoTagline'][0] ) : '';
	$phoneNumber = isset( $values['phoneNumber'] ) ? esc_attr( $values['phoneNumber'][0] ) : '';
	$emailAddress = isset( $values['emailAddress'] ) ? esc_attr( $values['emailAddress'][0] ) : '';
	$typography = isset( $values['typography'] ) ? esc_attr( $values['typography'][0] ) : '';

	// Features

	$featureheadline = isset( $values['featureheadline'] ) ? esc_attr( $values['featureheadline'][0] ) : '';
	$social_Headline = isset( $values['social_Headline'] ) ? esc_attr( $values['social_Headline'][0] ) : '';
	$socialFB = isset( $values['socialFB'] ) ? esc_attr( $values['socialFB'][0] ) : '';
	$socialTwitter = isset( $values['socialTwitter'] ) ? esc_attr( $values['socialTwitter'][0] ) : '';
	$socialTwitter = isset( $values['socialTwitter'] ) ? esc_attr( $values['socialTwitter'][0] ) : '';
	$socialGoogle = isset( $values['socialGoogle'] ) ? esc_attr( $values['socialGoogle'][0] ) : '';
	$socialLinkedin = isset( $values['socialLinkedin'] ) ? esc_attr( $values['socialLinkedin'][0] ) : '';

	// Meme Settings

	$fontstyle = isset( $values['fontstyle'] ) ? esc_attr( $values['fontstyle'][0] ) : '';
	$uploadphoto = isset( $values['uploadphoto'] ) ? esc_attr( $values['uploadphoto'][0] ) : '';
	$blackwhite = isset( $values['blackwhite'] ) ? esc_attr( $values['blackwhite'][0] ) : '';
	$toptext = isset( $values['toptext'] ) ? esc_attr( $values['toptext'][0] ) : '';
	$bottomtext = isset( $values['bottomtext'] ) ? esc_attr( $values['bottomtext'][0] ) : '';

	// Social Settings

	$shareText = isset( $values['shareText'] ) ? esc_attr( $values['shareText'][0] ) : '';
	$fbapi = isset( $values['fbapi'] ) ? esc_attr( $values['fbapi'][0] ) : '';
	$bigheadline = isset( $values['bigheadline'] ) ? esc_attr( $values['bigheadline'][0] ) : '';
	$socialdesc = isset( $values['socialdesc'] ) ? esc_attr( $values['socialdesc'][0] ) : '';

	
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	include( plugin_dir_path( __FILE__ ) . 'style.php');
	include( plugin_dir_path( __FILE__ ) . 'options.php');
	
}


add_action( 'save_post', 'savewp_quik' );
function savewp_quik( $post_id )
{
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	if( !current_user_can( 'edit_post' ) ) return;
	$allowed = array( 
		'a' => array( 
			'href' => array() 
		)
	);
	
	if( isset( $_POST['companyName'] ) )
		update_post_meta( $post_id, 'companyName', wp_kses( $_POST['companyName'], $allowed ) );
		
	if( isset( $_POST['subHeadline'] ) )
		update_post_meta( $post_id, 'subHeadline', esc_attr( $_POST['subHeadline'] ) );
		
	if( isset( $_POST['main_headline'] ) )
		update_post_meta( $post_id, 'main_headline', esc_attr( $_POST['main_headline'] ) );
	
	if( isset( $_POST['footerLeft'] ) )
		update_post_meta( $post_id, 'footerLeft', esc_attr( $_POST['footerLeft'] ) );
		
	if( isset( $_POST['logoHeadline'] ) )
		update_post_meta( $post_id, 'logoHeadline', esc_attr( $_POST['logoHeadline'] ) );

	if( isset( $_POST['logoTagline'] ) )
		update_post_meta( $post_id, 'logoTagline', esc_attr( $_POST['logoTagline'] ) );

	if( isset( $_POST['phoneNumber'] ) )
		update_post_meta( $post_id, 'phoneNumber', esc_attr( $_POST['phoneNumber'] ) );

	if( isset( $_POST['emailAddress'] ) )
		update_post_meta( $post_id, 'emailAddress', esc_attr( $_POST['emailAddress'] ) );

	if( isset( $_POST['featureheadline'] ) )
		update_post_meta( $post_id, 'featureheadline', esc_attr( $_POST['featureheadline'] ) );

	if( isset( $_POST['social_Headline'] ) )
		update_post_meta( $post_id, 'social_Headline', esc_attr( $_POST['social_Headline'] ) );

	if( isset( $_POST['socialFB'] ) )
		update_post_meta( $post_id, 'socialFB', esc_attr( $_POST['socialFB'] ) );

	if( isset( $_POST['socialTwitter'] ) )
		update_post_meta( $post_id, 'socialTwitter', esc_attr( $_POST['socialTwitter'] ) );

	if( isset( $_POST['socialLinkedin'] ) )
		update_post_meta( $post_id, 'socialLinkedin', esc_attr( $_POST['socialLinkedin'] ) );

	if( isset( $_POST['socialTwitter'] ) )
		update_post_meta( $post_id, 'socialTwitter', esc_attr( $_POST['socialTwitter'] ) );

	if( isset( $_POST['socialGoogle'] ) )
		update_post_meta( $post_id, 'socialGoogle', esc_attr( $_POST['socialGoogle'] ) );

	if( isset( $_POST['fontstyle'] ) )
		update_post_meta( $post_id, 'fontstyle', esc_attr( $_POST['fontstyle'] ) );
	if( isset( $_POST['feature'] ) )
		update_post_meta( $post_id, 'feature', esc_attr( $_POST['feature'] ) );

	if( isset( $_POST['uploadphoto'] ) )
		update_post_meta( $post_id, 'uploadphoto', esc_attr( $_POST['uploadphoto'] ) );

	if( isset( $_POST['blackwhite'] ) )
		update_post_meta( $post_id, 'blackwhite', esc_attr( $_POST['blackwhite'] ) );

	if( isset( $_POST['toptext'] ) )
		update_post_meta( $post_id, 'toptext', esc_attr( $_POST['toptext'] ) );

	if( isset( $_POST['bottomtext'] ) )
		update_post_meta( $post_id, 'bottomtext', esc_attr( $_POST['bottomtext'] ) );

	if( isset( $_POST['shareText'] ) )
		update_post_meta( $post_id, 'shareText', esc_attr( $_POST['shareText'] ) );

	if( isset( $_POST['fbapi'] ) )
		update_post_meta( $post_id, 'fbapi', esc_attr( $_POST['fbapi'] ) );

	if( isset( $_POST['socialdesc'] ) )
		update_post_meta( $post_id, 'socialdesc', esc_attr( $_POST['socialdesc'] ) );

	if( isset( $_POST['bigheadline'] ) )
		update_post_meta( $post_id, 'bigheadline', esc_attr( $_POST['bigheadline'] ) );

	if( isset( $_POST['footerRight'] ) )
		update_post_meta( $post_id, 'footerRight', esc_attr( $_POST['footerRight'] ) );

	if( isset( $_POST['logoImage'] ) )
		update_post_meta( $post_id, 'logoImage', esc_attr( $_POST['logoImage'] ) );
	
}

?>