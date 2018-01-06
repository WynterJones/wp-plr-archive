<?php
	/*
	Plugin Name: Easy Builder 
	Description: Create and Manage Marketing Campaigns With Multiple Pages (HTML5 Live Editor)
	Version: 2.0
	*/
	
	register_activation_hook(__FILE__,'wpleadmachine_install');

	function wpleadmachine_install () {
	  global $wpdb;
	  $table_name = $wpdb->prefix . "eb_campaign";
	   
	   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	      
	      $sql = "CREATE TABLE " . $table_name . " (
		   id INTEGER(40) UNSIGNED AUTO_INCREMENT,
		   name varchar(500),
		   headerImage varchar(500),
		   backgroundImage varchar(500),
		   browserTitle varchar(500),
		   metaDescription varchar(500),
		   metaKeywords varchar(500),
		   footerContent varchar(500),
		   customCSS varchar(500),
		   customJS varchar(500),
		   typography varchar(500),
		   repeatBG varchar(500),
		   bgColor varchar(500),
		   dropShadow varchar(500),
		   roundCorners varchar(500),
		   reloadThumbnails varchar(500),
		   UNIQUE KEY id (id)
		 );";
	
	      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	      dbDelta($sql);
	   }
	   
	   $table_name = $wpdb->prefix . "eb_pages";
	   
	   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	      
	      $sql = "CREATE TABLE " . $table_name . " (
		   id INTEGER(40) UNSIGNED AUTO_INCREMENT,
		   content LONGTEXT,
		   name varchar(500),
		   campaign varchar(500),
		   UNIQUE KEY id (id)
		 );";
	
	      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	      dbDelta($sql);
	   }
	   
	   
	}
	
	
	function create_new_eb_campaign($name) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "eb_campaign";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $name
	      )
		);
	}
	
	function delete_eb_campaign($id) {
		global $wpdb;
		$table_name = $wpdb->prefix . 'eb_campaign';
		$tabinfo = $wpdb->query("DELETE FROM $table_name WHERE id = $id");
		
	}
	
	function delete_eb_page($id) {
		global $wpdb;
		$table_name = $wpdb->prefix . 'eb_pages';
		$tabinfo = $wpdb->query("DELETE FROM $table_name WHERE id = $id");
		
	}
	
	function create_new_eb_page($name, $campaign, $content) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "eb_pages";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $name,
	     'content' => $content,
	     'campaign' => $campaign
	      )
		);
		
	}
	
	function update_eb_page($content, $id) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "eb_pages";
 		$wpdb->update($table_db_name, 
        array( 
	     'content' => $content
	      ),
	      array( 'ID' => $id )
		);
		
	}
	
	
	
	function update_eb_design_settings($headerImage, $backgroundImage,  $bgColor,  $repeatBG, $typography, $roundCorners, $dropShadow, $id) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "eb_campaign";
 		$wpdb->update($table_db_name, 
        array( 
	     'headerImage' => $headerImage,
	     'bgColor' => $bgColor,
	     'repeatBG' => $repeatBG,
	     'typography' => $typography,
	     'roundCorners' => $roundCorners,
	     'dropShadow' => $dropShadow,
	     'backgroundImage' => $backgroundImage
	      ),
	      array( 'ID' => $id )
		);
		
	}
	
	function update_eb_seo_settings($browserTitle, $metaDescription, $metaKeywords, $footerContent, $customJS, $customCSS, $id) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "eb_campaign";
 		$wpdb->update($table_db_name, 
        array( 
	     'browserTitle' => $browserTitle,
	     'metaKeywords' => $metaKeywords,
	     'footerContent' => $footerContent,
	     'customJS' => $customJS,
	     'customCSS' => $customCSS,
	     'metaDescription' => $metaDescription
	      ),
	      array( 'ID' => $id )
		);
		
	}
	
	function eb_reloadThumbnails($reloadThumbnails, $id) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "eb_campaign";
 		$wpdb->update($table_db_name, 
        array( 
	     'reloadThumbnails' => $reloadThumbnails
	      ),
	      array( 'ID' => $id )
		);
		
	}
	
	function easybuilder_nav_dash() {
	    $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'EasyBuilder';
		include('include/dashboard.php');
	}
	
	function easybuilder_nav_manage() {
	    $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'EasyBuilder';
		include('include/manage.php');
	}
	
	function easybuilder_nav_campaign() {
	    $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'EasyBuilder';
		include('include/new.php');
	}
	
	function easybuilder_nav_help() {
	    $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'EasyBuilder';
		include('include/help.php');
	}
	
	function easybuilder_menu() {
		add_menu_page('EasyBuilder - Create and Manage Marketing Campaigns', 'Easy Builder', 'manage_options', 'easybuilder', 'easybuilder_nav_dash', 'http://cdn1.iconfinder.com/data/icons/nuvola2/16x16/apps/package_settings.png');
		add_submenu_page( 'easybuilder', 'Manage Campaigns', 'Manage Campaigns', 'manage_options', 'eb_manage_campaigns', 'easybuilder_nav_manage');
		add_submenu_page( 'easybuilder', 'Add New Campaign', 'Add New Campaign', 'manage_options', 'eb_add_new_campaigns', 'easybuilder_nav_campaign');
		// add_submenu_page( 'easybuilder', 'Help Video', 'Help Video', 'manage_options', 'eb_help', 'easybuilder_nav_help');
	}
	
	add_action('admin_menu', 'easybuilder_menu');
	
	add_action( 'init', 'create_easybuilder_pages' );
	function create_easybuilder_pages() {
		$seoSlug = get_option('seoSlug');
			if ($seoSlug == "") {
				$seoSlug = "easybuilzzzzzz";
			}
		register_post_type( 'easybuilder_page',
			array(
				'labels' => array(
					'name' => __( 'Easy Pages' ),
					'singular_name' => __( 'Easy Pages' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'http://cdn1.iconfinder.com/data/icons/nuvola2/16x16/apps/package_settings.png',
			'rewrite' => array('slug' => $seoSlug)
			)
		);
		flush_rewrite_rules();
	}
	
	
	add_action('template_redirect', 'redirect_to_easybuilder', 5);
	function redirect_to_easybuilder() {
		$post_type = get_query_var('post_type');
		
		if ($post_type == 'easybuilder_page') {  
			if (file_exists(TEMPLATEPATH . '/single-' . $post_type . '.php')) return;
			load_template(WP_PLUGIN_DIR . '/EasyBuilder' . '/page/easypage.php');
			exit;
		}
	}
	
	
	
		add_action( 'add_meta_boxes', 'cd_meta_box_add' );
		function cd_meta_box_add()
		{
			add_meta_box( 'easybuilder_page', 'EasyBuilder', 'page_blongs_to_campaign_eb', 'easybuilder_page', 'normal', 'high' );
		}
		
		
		function page_blongs_to_campaign_eb( $post )
		{
			?>
				<style type="text/css">
					#postdivrich { display: none; }
					#easybuilder_page strong {
						padding: 5px 0;
						display: block;
						font-size: 13px;
					}
					#easybuilder_page select {
						padding: 3px 0;
						display: block;
						font-size: 14px;
						width: 100%;
					}
					.box {
						padding: 20px;
						border: 1px solid #ccc;
						-moz-border-radius: 5px;
						-webkit-border-radius: 5px;
						-khtml-border-radius: 5px;
						border-radius: 5px;
						background: #fff;
						margin-top: 10px;
						background-image: linear-gradient(bottom, rgb(245,245,245) 45%, rgb(255,255,255) 73%);
						background-image: -o-linear-gradient(bottom, rgb(245,245,245) 45%, rgb(255,255,255) 73%);
						background-image: -moz-linear-gradient(bottom, rgb(245,245,245) 45%, rgb(255,255,255) 73%);
						background-image: -webkit-linear-gradient(bottom, rgb(245,245,245) 45%, rgb(255,255,255) 73%);
						background-image: -ms-linear-gradient(bottom, rgb(245,245,245) 45%, rgb(255,255,255) 73%);
						
						background-image: -webkit-gradient(
							linear,
							left bottom,
							left top,
							color-stop(0.45, rgb(245,245,245)),
							color-stop(0.73, rgb(255,255,255))
						);
					}
					.title {
						padding: 0 !important;
						padding-left: 40px !important;
						background: url(http://cdn2.iconfinder.com/data/icons/crystalproject/32x32/apps/Session%20Manager.png) no-repeat left;
					}
				</style>
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
				<script type="text/javascript">
						$(document).ready(function() {
						 	$(".selectpages1").click(function(){$("#selectedPage").val($(".selectpages1").val())});$(".selectpages2").click(function(){$("#selectedPage").val($(".selectpages2").val())});$(".selectpages3").click(function(){$("#selectedPage").val($(".selectpages3").val())});$(".selectpages4").click(function(){$("#selectedPage").val($(".selectpages4").val())});$(".selectpages5").click(function(){$("#selectedPage").val($(".selectpages5").val())});$(".selectpages6").click(function(){$("#selectedPage").val($(".selectpages6").val())});$(".selectpages7").click(function(){$("#selectedPage").val($(".selectpages7").val())});$(".selectpages8").click(function(){$("#selectedPage").val($(".selectpages8").val())});$(".selectpages9").click(function(){$("#selectedPage").val($(".selectpages9").val())});$(".selectpages10").click(function(){$("#selectedPage").val($(".selectpages10").val())});$(".selectpages11").click(function(){$("#selectedPage").val($(".selectpages11").val())});$(".selectpages12").click(function(){$("#selectedPage").val($(".selectpages12").val())});$(".selectpages13").click(function(){$("#selectedPage").val($(".selectpages13").val())});$(".selectpages14").click(function(){$("#selectedPage").val($(".selectpages14").val())});$(".selectpages15").click(function(){$("#selectedPage").val($(".selectpages15").val())});$(".selectpages16").click(function(){$("#selectedPage").val($(".selectpages16").val())});$(".selectpages17").click(function(){$("#selectedPage").val($(".selectpages17").val())});$(".selectpages18").click(function(){$("#selectedPage").val($(".selectpages18").val())});$(".selectpages19").click(function(){$("#selectedPage").val($(".selectpages19").val())});$(".selectpages20").click(function(){$("#selectedPage").val($(".selectpages20").val())});$(".selectpages21").click(function(){$("#selectedPage").val($(".selectpages21").val())});$(".selectpages22").click(function(){$("#selectedPage").val($(".selectpages22").val())});$(".selectpages23").click(function(){$("#selectedPage").val($(".selectpages23").val())});$(".selectpages24").click(function(){$("#selectedPage").val($(".selectpages24").val())});$(".selectpages25").click(function(){$("#selectedPage").val($(".selectpages25").val())});$(".selectpages26").click(function(){$("#selectedPage").val($(".selectpages26").val())});$(".selectpages27").click(function(){$("#selectedPage").val($(".selectpages27").val())});$(".selectpages28").click(function(){$("#selectedPage").val($(".selectpages28").val())});$(".selectpages29").click(function(){$("#selectedPage").val($(".selectpages29").val())});$(".selectpages30").click(function(){$("#selectedPage").val($(".selectpages30").val())});$(".selectpages31").click(function(){$("#selectedPage").val($(".selectpages31").val())});$(".selectpages32").click(function(){$("#selectedPage").val($(".selectpages32").val())});$(".selectpages33").click(function(){$("#selectedPage").val($(".selectpages33").val())});$(".selectpages34").click(function(){$("#selectedPage").val($(".selectpages34").val())});$(".selectpages35").click(function(){$("#selectedPage").val($(".selectpages35").val())});$(".selectpages36").click(function(){$("#selectedPage").val($(".selectpages36").val())});$(".selectpages37").click(function(){$("#selectedPage").val($(".selectpages37").val())});$(".selectpages38").click(function(){$("#selectedPage").val($(".selectpages38").val())});$(".selectpages39").click(function(){$("#selectedPage").val($(".selectpages39").val())});$(".selectpages40").click(function(){$("#selectedPage").val($(".selectpages40").val())});$(".selectpages41").click(function(){$("#selectedPage").val($(".selectpages41").val())});$(".selectpages42").click(function(){$("#selectedPage").val($(".selectpages42").val())});$(".selectpages43").click(function(){$("#selectedPage").val($(".selectpages43").val())});$(".selectpages44").click(function(){$("#selectedPage").val($(".selectpages44").val())});$(".selectpages45").click(function(){$("#selectedPage").val($(".selectpages45").val())});$(".selectpages46").click(function(){$("#selectedPage").val($(".selectpages46").val())});$(".selectpages47").click(function(){$("#selectedPage").val($(".selectpages47").val())});$(".selectpages48").click(function(){$("#selectedPage").val($(".selectpages48").val())});$(".selectpages49").click(function(){$("#selectedPage").val($(".selectpages49").val())});$(".selectpages50").click(function(){$("#selectedPage").val($(".selectpages50").val())});$(".selectpages51").click(function(){$("#selectedPage").val($(".selectpages51").val())});$(".selectpages52").click(function(){$("#selectedPage").val($(".selectpages52").val())});$(".selectpages53").click(function(){$("#selectedPage").val($(".selectpages53").val())});$(".selectpages54").click(function(){$("#selectedPage").val($(".selectpages54").val())});$(".selectpages55").click(function(){$("#selectedPage").val($(".selectpages55").val())});$(".selectpages56").click(function(){$("#selectedPage").val($(".selectpages56").val())});$(".selectpages57").click(function(){$("#selectedPage").val($(".selectpages57").val())});$(".selectpages58").click(function(){$("#selectedPage").val($(".selectpages58").val())});$(".selectpages59").click(function(){$("#selectedPage").val($(".selectpages59").val())});$(".selectpages60").click(function(){$("#selectedPage").val($(".selectpages60").val())});$(".selectpages61").click(function(){$("#selectedPage").val($(".selectpages61").val())});$(".selectpages62").click(function(){$("#selectedPage").val($(".selectpages62").val())});$(".selectpages63").click(function(){$("#selectedPage").val($(".selectpages63").val())});$(".selectpages64").click(function(){$("#selectedPage").val($(".selectpages64").val())});$(".selectpages65").click(function(){$("#selectedPage").val($(".selectpages65").val())});$(".selectpages66").click(function(){$("#selectedPage").val($(".selectpages66").val())});$(".selectpages67").click(function(){$("#selectedPage").val($(".selectpages67").val())});$(".selectpages68").click(function(){$("#selectedPage").val($(".selectpages68").val())});$(".selectpages69").click(function(){$("#selectedPage").val($(".selectpages69").val())});$(".selectpages70").click(function(){$("#selectedPage").val($(".selectpages70").val())});$(".selectpages71").click(function(){$("#selectedPage").val($(".selectpages71").val())});$(".selectpages72").click(function(){$("#selectedPage").val($(".selectpages72").val())});$(".selectpages73").click(function(){$("#selectedPage").val($(".selectpages73").val())});$(".selectpages74").click(function(){$("#selectedPage").val($(".selectpages74").val())});$(".selectpages75").click(function(){$("#selectedPage").val($(".selectpages75").val())});$(".selectpages76").click(function(){$("#selectedPage").val($(".selectpages76").val())});$(".selectpages77").click(function(){$("#selectedPage").val($(".selectpages77").val())});$(".selectpages78").click(function(){$("#selectedPage").val($(".selectpages78").val())});$(".selectpages79").click(function(){$("#selectedPage").val($(".selectpages79").val())});$(".selectpages80").click(function(){$("#selectedPage").val($(".selectpages80").val())});$(".selectpages81").click(function(){$("#selectedPage").val($(".selectpages81").val())});$(".selectpages82").click(function(){$("#selectedPage").val($(".selectpages82").val())});$(".selectpages83").click(function(){$("#selectedPage").val($(".selectpages83").val())});$(".selectpages84").click(function(){$("#selectedPage").val($(".selectpages84").val())});$(".selectpages85").click(function(){$("#selectedPage").val($(".selectpages85").val())});$(".selectpages86").click(function(){$("#selectedPage").val($(".selectpages86").val())});$(".selectpages87").click(function(){$("#selectedPage").val($(".selectpages87").val())});$(".selectpages88").click(function(){$("#selectedPage").val($(".selectpages88").val())});$(".selectpages89").click(function(){$("#selectedPage").val($(".selectpages89").val())});$(".selectpages90").click(function(){$("#selectedPage").val($(".selectpages90").val())});$(".selectpages91").click(function(){$("#selectedPage").val($(".selectpages91").val())});$(".selectpages92").click(function(){$("#selectedPage").val($(".selectpages92").val())});$(".selectpages93").click(function(){$("#selectedPage").val($(".selectpages93").val())});$(".selectpages94").click(function(){$("#selectedPage").val($(".selectpages94").val())});$(".selectpages95").click(function(){$("#selectedPage").val($(".selectpages95").val())});$(".selectpages96").click(function(){$("#selectedPage").val($(".selectpages96").val())});$(".selectpages97").click(function(){$("#selectedPage").val($(".selectpages97").val())});$(".selectpages98").click(function(){$("#selectedPage").val($(".selectpages98").val())});$(".selectpages99").click(function(){$("#selectedPage").val($(".selectpages99").val())});$(".selectpages100").click(function(){$("#selectedPage").val($(".selectpages100").val())});$(".selectpages101").click(function(){$("#selectedPage").val($(".selectpages101").val())});$(".selectpages102").click(function(){$("#selectedPage").val($(".selectpages102").val())});$(".selectpages103").click(function(){$("#selectedPage").val($(".selectpages103").val())});$(".selectpages104").click(function(){$("#selectedPage").val($(".selectpages104").val())});$(".selectpages105").click(function(){$("#selectedPage").val($(".selectpages105").val())});$(".selectpages106").click(function(){$("#selectedPage").val($(".selectpages106").val())});$(".selectpages107").click(function(){$("#selectedPage").val($(".selectpages107").val())});$(".selectpages108").click(function(){$("#selectedPage").val($(".selectpages108").val())});$(".selectpages109").click(function(){$("#selectedPage").val($(".selectpages109").val())});$(".selectpages110").click(function(){$("#selectedPage").val($(".selectpages110").val())});$(".selectpages111").click(function(){$("#selectedPage").val($(".selectpages111").val())});$(".selectpages112").click(function(){$("#selectedPage").val($(".selectpages112").val())});$(".selectpages113").click(function(){$("#selectedPage").val($(".selectpages113").val())});$(".selectpages114").click(function(){$("#selectedPage").val($(".selectpages114").val())});$(".selectpages115").click(function(){$("#selectedPage").val($(".selectpages115").val())});$(".selectpages116").click(function(){$("#selectedPage").val($(".selectpages116").val())});$(".selectpages117").click(function(){$("#selectedPage").val($(".selectpages117").val())});$(".selectpages118").click(function(){$("#selectedPage").val($(".selectpages118").val())});$(".selectpages119").click(function(){$("#selectedPage").val($(".selectpages119").val())});$(".selectpages120").click(function(){$("#selectedPage").val($(".selectpages120").val())});$(".selectpages121").click(function(){$("#selectedPage").val($(".selectpages121").val())});$(".selectpages122").click(function(){$("#selectedPage").val($(".selectpages122").val())});$(".selectpages123").click(function(){$("#selectedPage").val($(".selectpages123").val())});$(".selectpages124").click(function(){$("#selectedPage").val($(".selectpages124").val())});$(".selectpages125").click(function(){$("#selectedPage").val($(".selectpages125").val())});$(".selectpages126").click(function(){$("#selectedPage").val($(".selectpages126").val())});$(".selectpages127").click(function(){$("#selectedPage").val($(".selectpages127").val())});$(".selectpages128").click(function(){$("#selectedPage").val($(".selectpages128").val())});$(".selectpages129").click(function(){$("#selectedPage").val($(".selectpages129").val())});$(".selectpages130").click(function(){$("#selectedPage").val($(".selectpages130").val())});$(".selectpages131").click(function(){$("#selectedPage").val($(".selectpages131").val())});$(".selectpages132").click(function(){$("#selectedPage").val($(".selectpages132").val())});$(".selectpages133").click(function(){$("#selectedPage").val($(".selectpages133").val())});$(".selectpages134").click(function(){$("#selectedPage").val($(".selectpages134").val())});$(".selectpages135").click(function(){$("#selectedPage").val($(".selectpages135").val())});$(".selectpages136").click(function(){$("#selectedPage").val($(".selectpages136").val())});$(".selectpages137").click(function(){$("#selectedPage").val($(".selectpages137").val())});$(".selectpages138").click(function(){$("#selectedPage").val($(".selectpages138").val())});$(".selectpages139").click(function(){$("#selectedPage").val($(".selectpages139").val())});$(".selectpages140").click(function(){$("#selectedPage").val($(".selectpages140").val())});$(".selectpages141").click(function(){$("#selectedPage").val($(".selectpages141").val())});$(".selectpages142").click(function(){$("#selectedPage").val($(".selectpages142").val())});$(".selectpages143").click(function(){$("#selectedPage").val($(".selectpages143").val())});$(".selectpages144").click(function(){$("#selectedPage").val($(".selectpages144").val())});$(".selectpages145").click(function(){$("#selectedPage").val($(".selectpages145").val())});$(".selectpages146").click(function(){$("#selectedPage").val($(".selectpages146").val())});$(".selectpages147").click(function(){$("#selectedPage").val($(".selectpages147").val())});$(".selectpages148").click(function(){$("#selectedPage").val($(".selectpages148").val())});$(".selectpages149").click(function(){$("#selectedPage").val($(".selectpages149").val())});$(".selectpages150").click(function(){$("#selectedPage").val($(".selectpages150").val())});$(".selectpages151").click(function(){$("#selectedPage").val($(".selectpages151").val())});$(".selectpages152").click(function(){$("#selectedPage").val($(".selectpages152").val())});$(".selectpages153").click(function(){$("#selectedPage").val($(".selectpages153").val())});$(".selectpages154").click(function(){$("#selectedPage").val($(".selectpages154").val())});$(".selectpages155").click(function(){$("#selectedPage").val($(".selectpages155").val())});$(".selectpages156").click(function(){$("#selectedPage").val($(".selectpages156").val())});$(".selectpages157").click(function(){$("#selectedPage").val($(".selectpages157").val())});$(".selectpages158").click(function(){$("#selectedPage").val($(".selectpages158").val())});$(".selectpages159").click(function(){$("#selectedPage").val($(".selectpages159").val())});$(".selectpages160").click(function(){$("#selectedPage").val($(".selectpages160").val())});$(".selectpages161").click(function(){$("#selectedPage").val($(".selectpages161").val())});$(".selectpages162").click(function(){$("#selectedPage").val($(".selectpages162").val())});$(".selectpages163").click(function(){$("#selectedPage").val($(".selectpages163").val())});$(".selectpages164").click(function(){$("#selectedPage").val($(".selectpages164").val())});$(".selectpages165").click(function(){$("#selectedPage").val($(".selectpages165").val())});$(".selectpages166").click(function(){$("#selectedPage").val($(".selectpages166").val())});$(".selectpages167").click(function(){$("#selectedPage").val($(".selectpages167").val())});$(".selectpages168").click(function(){$("#selectedPage").val($(".selectpages168").val())});$(".selectpages169").click(function(){$("#selectedPage").val($(".selectpages169").val())});$(".selectpages170").click(function(){$("#selectedPage").val($(".selectpages170").val())});$(".selectpages171").click(function(){$("#selectedPage").val($(".selectpages171").val())});$(".selectpages172").click(function(){$("#selectedPage").val($(".selectpages172").val())});$(".selectpages173").click(function(){$("#selectedPage").val($(".selectpages173").val())});$(".selectpages174").click(function(){$("#selectedPage").val($(".selectpages174").val())});$(".selectpages175").click(function(){$("#selectedPage").val($(".selectpages175").val())});$(".selectpages176").click(function(){$("#selectedPage").val($(".selectpages176").val())});$(".selectpages177").click(function(){$("#selectedPage").val($(".selectpages177").val())});$(".selectpages178").click(function(){$("#selectedPage").val($(".selectpages178").val())});$(".selectpages179").click(function(){$("#selectedPage").val($(".selectpages179").val())});$(".selectpages180").click(function(){$("#selectedPage").val($(".selectpages180").val())});$(".selectpages181").click(function(){$("#selectedPage").val($(".selectpages181").val())});$(".selectpages182").click(function(){$("#selectedPage").val($(".selectpages182").val())});$(".selectpages183").click(function(){$("#selectedPage").val($(".selectpages183").val())});$(".selectpages184").click(function(){$("#selectedPage").val($(".selectpages184").val())});$(".selectpages185").click(function(){$("#selectedPage").val($(".selectpages185").val())});$(".selectpages186").click(function(){$("#selectedPage").val($(".selectpages186").val())});$(".selectpages187").click(function(){$("#selectedPage").val($(".selectpages187").val())});$(".selectpages188").click(function(){$("#selectedPage").val($(".selectpages188").val())});$(".selectpages189").click(function(){$("#selectedPage").val($(".selectpages189").val())});$(".selectpages190").click(function(){$("#selectedPage").val($(".selectpages190").val())});$(".selectpages191").click(function(){$("#selectedPage").val($(".selectpages191").val())});$(".selectpages192").click(function(){$("#selectedPage").val($(".selectpages192").val())});$(".selectpages193").click(function(){$("#selectedPage").val($(".selectpages193").val())});$(".selectpages194").click(function(){$("#selectedPage").val($(".selectpages194").val())});$(".selectpages195").click(function(){$("#selectedPage").val($(".selectpages195").val())});$(".selectpages196").click(function(){$("#selectedPage").val($(".selectpages196").val())});$(".selectpages197").click(function(){$("#selectedPage").val($(".selectpages197").val())});$(".selectpages198").click(function(){$("#selectedPage").val($(".selectpages198").val())});$(".selectpages199").click(function(){$("#selectedPage").val($(".selectpages199").val())});$(".selectpages200").click(function(){$("#selectedPage").val($(".selectpages200").val())}); 
						});
				</script>
				<?php
				 		  $number = 1;
						  
						  global $post;
						  global $wpdb;
						  $table_db_name5 = $wpdb->prefix . "eb_campaign";
						  $templates5 = $wpdb->get_results("SELECT * FROM $table_db_name5",ARRAY_A);
						  $templates5 = array_reverse($templates5 );
						
							$campaign = get_post_meta($post->ID,'ebcampaign',true);
							$page = get_post_meta($post->ID,'ebpage',true);
			        ?>
					<strong>Select Campaign:</strong>
					<?php
					echo '<select name="selectedCampaign" class="selectcampaign">';
						foreach($templates5 as $templatee)
							{
								?>
									<option <?php if ($campaign == $templatee['name']) { echo "selected"; } ?> value="<?php echo $templatee['name']; ?>"><?php echo $templatee['name']; ?></option>
								<?php
							}
							echo '</select>';
					?>
					<strong>Select Page:</strong>
					<input type="text" value="<?php echo $page; ?>" style="width: 100%; padding: 5px; font-size: 14px;" name="selectedPage" id="selectedPage">
					<?php
							echo '<div class="box" id="box-'.$templatee['name'].'">';
							echo '<h2 class="title">Page Manager: <small style="font-size: 12px;">( select page to show )</small></h2>';
							foreach($templates5 as $templatee)
							{
								$number = $number + 1;
								echo '<strong>'.$templatee['name'].'</strong>';
								echo '<select class="selectpages'.$number.'">';
								
									  global $post;
									  global $wpdb;
									  $table_db_name = $wpdb->prefix . "eb_pages";
									  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign = '".$templatee['name']."'",ARRAY_A);
									  $templates = array_reverse($templates );
									foreach($templates as $template)
									{
										echo '<option value="'.$template['name'].'">'.$template['name'].'</option>';
									}
								echo '</select> <br>';	
							}
							echo '</div>';
					?>
			<?php	
		}
		
		 add_action('save_post', 'easybuilder_save_metadata');
		  
		  function easybuilder_save_metadata($post_id) {
				 if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
					 return $post->ID;
				 
			  update_post_meta($post_id, "ebpage", $_POST["selectedPage"]);
			  update_post_meta($post_id, "ebcampaign", $_POST["selectedCampaign"]);
			   
		  }



?>