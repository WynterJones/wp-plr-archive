<?php
/*
Plugin Name: FB Redirect Pro 
Description: A simple wordpress plugin to redirect traffic from facebook to anywhere on the web. (w/ Built-in Tab Icon Editor)
*/

	add_action('template_redirect', 'fbredirectpro_page', 5);
	function fbredirectpro_page() {
		$post_type = get_query_var('post_type');
		if ($post_type == 'fbredirectpro') {  
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
			load_template(WP_PLUGIN_DIR . '/FBRedirectPro' . '/redirect.php');
			exit;
		}
	}

    add_action( 'init', 'create_fbredirectpro_redirect' );
	function create_fbredirectpro_redirect() {
		register_post_type( 'fbredirectpro',
			array(
				'labels' => array(
					'name' => __( 'Redirect Page' ),
					'singular_name' => __( 'Redirect Page' )
				),
				'public' => true,
				'publicly_queryable' => true,
				'query_var' => true,
				'rewrite' => true,
				'menu_icon' => 'http://cdn2.iconfinder.com/data/icons/tango/16x16/emblems/emblem-symbolic-link.png'
			)
		);
		flush_rewrite_rules();
	}
	
	add_action( 'add_meta_boxes', 'fbredirectpro_metabox' );
	function fbredirectpro_metabox()
	{
		add_meta_box( 'fbredirectpro', 'FB Redirect Pro :: Settings', 'fbredirectsettings', 'fbredirectpro', 'normal', 'high' );
	}
	
	
	function fbredirectsettings( $post )
	{
		$values = get_post_custom( $post->ID );
		$redirect = isset( $values['redirect'] ) ? esc_attr( $values['redirect'][0] ) : '';
		wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
	<style type="text/css" media="screen">
		#postdivrich {
			display: none;
		}
		#redirect {
			display: block;
			width: 100%;
			padding: 10px;
			font-size: 16px;
			margin: 5px 0;
			color: #333;
		}
		
	</style>
		<div id="ui-box">
			<p>
				<strong>Full URL to Your Website to Redirect</strong>
				<input type="text" name="redirect" id="redirect" value="<?php echo $redirect; ?>" />
				<small>* ex. http://www.google.com/ *</small>
			</p>
			
				<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="812" height="400" id="FBAppDesigner" align="middle">
				<param name="movie" value="../wp-content/plugins/FBRedirectPro/FBAppDesigner.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="../wp-content/plugins/FBRedirectPro/FBAppDesigner.swf" width="812" height="400">
					<param name="movie" value="../wp-content/plugins/FBRedirectPro/FBAppDesigner.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
			
			<p><small>Save Your Tab Icon and Upload to Facebook. Use the permalink for this post as the URL for your facebook fanpage.</small></p>
		</div>
		<?php	
	}


	add_action( 'save_post', 'fbredirect_metasave' );
	function fbredirect_metasave( $post_id )
	{
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		
		if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
		
		if( !current_user_can( 'edit_post' ) ) return;
		
		$allowed = array( 
			'a' => array(
				'href' => array() 
			)
		);
		
		
		if( isset( $_POST['redirect'] ) )
			update_post_meta( $post_id, 'redirect', wp_kses( $_POST['redirect'], $allowed ) );
	}

?>