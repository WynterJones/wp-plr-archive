<?php
	/*
	Plugin Name: WP Local Fusion - BETA
	Description: Collect Leads for Clients and Sell it To Them!
	Version: 0.1
	*/
	
	error_reporting(E_ERROR);
	
	register_activation_hook(__FILE__,'wpleadmachine_install');

	function wpleadmachine_install () {
		
		  global $wp_rewrite;
		  add_rewrite_rule( 'v/([^/]+)/?', 'index.php?pagename=v&vx2=$matches[1]', 'top' );
		  $wp_rewrite->flush_rules();
  
  
	   global $wpdb;
	
	   $table_name = $wpdb->prefix . "wpleadmachineClients";
	   
	   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	      
	      $sql = "CREATE TABLE " . $table_name . " (
		   id INTEGER(40) UNSIGNED AUTO_INCREMENT,
		   name varchar(500),
		   description varchar(500),
		   photo varchar(500),

		   logoHeadline varchar(500),
		   logoSubHeadline varchar(500),
		   logoStyle varchar(500),
		   logoImageURL varchar(500),
		   
		   ctaStyle varchar(500),
		   ctaHeadline varchar(500),
		   ctaSubHeadline varchar(500),
		   ctaImageURL varchar(500),
		   
		   headlineStyle varchar(500),
		   headlineText varchar(500),
		   headlineImageURL varchar(500),
		   
		   videoStyle varchar(500),
		   videoCode varchar(500),
		   videoImageURL varchar(500),
		   
		   subHeadlineText varchar(500),
		   subHeadlineImage varchar(500),
		   subHeadlineStyle varchar(500),
		   
		   featureCSS varchar(500),
		   
		   feature1Text varchar(500),
		   feature1Headline varchar(500),
		   feature1ImageSmall varchar(500),
		   feature1Image varchar(500),
		   feature1Style varchar(500),
		   
		   feature2Text varchar(500),
		   feature2Headline varchar(500),
		   feature2ImageSmall varchar(500),
		   feature2Image varchar(500),
		   feature2Style varchar(500),
		   
		   feature3Text varchar(500),
		   feature3Headline varchar(500),
		   feature3ImageSmall varchar(500),
		   feature3Image varchar(500),
		   feature3Style varchar(500),
		   
		   feature4Text varchar(500),
		   feature4Headline varchar(500),
		   feature4ImageSmall varchar(500),
		   feature4Image varchar(500),
		   feature4Style varchar(500),
		   
		   customContent LONGTEXT,
		   thankYou LONGTEXT,
		   thankyouHeadline LONGTEXT,
		   optinContent LONGTEXT,
		   optinSpam LONGTEXT,
		   
		   bgStyle varchar(500),
		   customBG varchar(500),
		   
		   optinStyle varchar(500),
		   optinHeadline varchar(500),
		   buttonStyle varchar(500),
		   buttonText varchar(500),
		   buttonCustom varchar(500),
		   namePlaceholder varchar(500),
		   emailPlaceholder varchar(500),
		   phonePlaceholder varchar(500),
		   
		   facebook varchar(500),
		   twitter varchar(500),
		   youtube varchar(500),
		   linkedin varchar(500),
		   email varchar(500),
		   googleMaps varchar(500),
		   
		   subjectLine varchar(500),
		   emailBody varchar(500),
		   textMessage varchar(500),
		   
		   client1Name varchar(500),
		   client1Email varchar(500),
		   client1Phone varchar(500),
		   
		   client2Name varchar(500),
		   client2Email varchar(500),
		   client2Phone varchar(500),
		   
		   client3Name varchar(500),
		   client3Email varchar(500),
		   client3Phone varchar(500),
		   
		   client4Name varchar(500),
		   client4Email varchar(500),
		   client4Phone varchar(500),
		   
		   seperatorStyle varchar(500),
		   seperatorImage varchar(500),
		   
		   tracked varchar(500),
		   numberofLeads varchar(500),
		   
		   BGcolor varchar(500),
		   customBGrepeat varchar(500),
		   selectBGStyle varchar(500),
		   
		   logoColor varchar(500),
		   logoSubColor varchar(500),
		   ctaColor varchar(500),
		   ctaSubColor varchar(500),
		   standoutColor varchar(500),
		   optColor varchar(500),
		   headlineColor varchar(500),
		   featureHeadlineColor varchar(500),
		   featureTextColor varchar(500),
		   
		   ar_name varchar(500),
		   ar_email varchar(500),
		   ar_phone varchar(500),
		   ar_formurl varchar(500),
		   
		   ar_hidden LONGTEXT,
		   ar_code LONGTEXT,
		   
		   siteTitle varchar(500),
		   siteKeywords varchar(500),
		   siteDesc varchar(500),
		   siteSLUG varchar(500),
		   siteTracking varchar(500),
		   siteFooter varchar(500),
		   
		   UNIQUE KEY id (id)
		 );";
	
	      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	      dbDelta($sql);
	   }
	   
	   $table_name = $wpdb->prefix . "wpleadmachineLeads";
	   
	   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	      
	      $sql = "CREATE TABLE " . $table_name . " (
		   id INTEGER(40) UNSIGNED AUTO_INCREMENT,
		   name varchar(500),
		   email varchar(500),
		   phone varchar(500),
		   client varchar(500),
		   signedUp varchar(500),
		   UNIQUE KEY id (id)
		 );";
	
	      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	      dbDelta($sql);
	   }
	   
	   $table_name = $wpdb->prefix . "wpleadmachineSettings";
	   
	   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	      
	      $sql = "CREATE TABLE " . $table_name . " (
		   id INTEGER(40) UNSIGNED,
		   emailName varchar(500),
		   emailEmail varchar(500),
		   sendGridEmail varchar(500),
		   sendGridPassword varchar(500),
		   twilioID varchar(500),
		   twilioAuth varchar(500),
		   twilioNumber varchar(500),
		   prettyURL varchar(500),
		   UNIQUE KEY id (id)
		 );";
	
	      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	      dbDelta($sql);
	   }
	   
	}
	
	
	function create_new_client($name, $description, $photo) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpleadmachineClients";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $name,
	     'description' => $description,
	     'photo' => $photo
	      )
		);
		
	}
	
	
	

// ****************** MOD REWRIE ******************* //

add_filter( 'query_vars', 'wpa5413_query_vars' );
	
	function wpa5413_query_vars( $query_vars )
	{
	   $query_vars[] = 'vx2';
	   return $query_vars;
	}
	
// --- CHECK ON WP HEADER - THEN OPEN IFRAME --- //

function lfwp_loadUp_lander(){
	global $wp_query;
	$CheckPageName = $wp_query->query_vars['pagename'];
	$VX2 = $wp_query->query_vars['vx2'];
	if($CheckPageName == "v"){
	//echo "You did it.. Here is your landing page ID: $VX2";
	$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	//include("../../../WPLeadMachine/landingpage/index.php?client=Marting");
	
	global $wpdb;
	$table_name = $wpdb->prefix . 'wpleadmachineClients';
	$getClientVX2 = $wpdb->get_results( "SELECT * FROM $table_name WHERE siteSLUG = '$VX2'",ARRAY_A); 
	// $clientinfo = $wpdb->get_row("SELECT * FROM $table_name WHERE link_id = 10");
	
	$currentClient = "";
	  
	  foreach($getClientVX2 as $client)
	  {
	  	//echo $client['name'];
	  	$currentClient = $client['name'];
	  }	

	
	echo '<style type="text/css"> 
	html {overflow: auto;} 
	html, body, div, iframe {margin: 0px; padding: 0px; height: 100%; border: none; background-color:#FFF;} 
	iframe {display: block; width: 100%; border: none; overflow-y: auto; overflow-x: hidden;} 
	</style> ';
	echo "<script>document.title = '$VX2'; </script>";
	echo "<iframe frameborder='0' marginheight='0' marginwidth='0' width='100%' height='100%' scrolling='auto' src='".$full_path."WPLeadMachine/landingpage/index.php?client=$currentClient'></iframe> ";
	die();
	}
}
add_action('wp_head', 'lfwp_loadUp_lander');

// ************************************************* //
					
	

	
	
	
	
	function update_client($description, $photo,  $id) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpleadmachineClients";
 		$wpdb->update($table_db_name, 
        array( 
	     'description' => $description,
	     'photo' => $photo
	      ),
	      array( 'ID' => $id )
		);
		
	}
	
	function delete_client($id) {
		global $wpdb;
		$table_name = $wpdb->prefix . 'wpleadmachineClients';
		$tabinfo = $wpdb->query("DELETE FROM $table_name WHERE id = $id");
		
	}
	
	function create_new_lead($name, $email, $phone, $client, $signedUp) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpleadmachineLeads";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $name,
	     'email' => $email,
	     'phone' => $phone,
	     'client' => $client,
	     'signedUp' => $signedUp
	      )
		);
		
		
	}
	
	// ### Checks for presence of the cURL extension.
	function _iscurlinstalled() {
		if  (in_array  ('curl', get_loaded_extensions())) {
			return true;
		}
		else{
			return false;
		}
	}
	
	function update_landing_page($logoHeadline, $logoSubHeadline, $logoStyle, $logoImageURL, $ctaHeadline, $ctaSubHeadline, $ctaStyle, $ctaImageURL, $headlineText, $headlineImageURL, $headlineStyle, $videoCode, $videoImageURL, $videoStyle, $subHeadlineText, $subHeadlineImage, $subHeadlineStyle, $featureCSS, $feature1Text, $feature1Headline, $feature1ImageSmall, $feature1Image, $feature1Style, $feature2Text, $feature2Headline, $feature2ImageSmall, $feature2Image, $feature2Style, $feature3Text, $feature3Headline, $feature3ImageSmall, $feature3Image, $feature3Style, $feature4Text, $feature4Headline, $feature4ImageSmall, $feature4Image, $feature4Style, $customContent, $facebook, $twitter,$youtube,$email,$googleMaps,$linkedin,$optinStyle, $optinHeadline, $buttonStyle, $buttonCustom, $buttonText, $namePlaceholder, $emailPlaceholder, $phonePlaceholder, $optinContent, $optinSpam, $bgStyle, $checkLeads, $seperatorStyle, $seperatorImage, $thankYou, $thankyouHeadline, $ar_name, $ar_email, $ar_phone, $ar_formurl, $ar_hidden, $ar_code, $customBG, $BGcolor, $customBGrepeat, $selectBGStyle, $siteTitle, $siteKeywords, $siteDesc, $siteTracking, $siteSLUG, $siteFooter,  $logoColor, $logoSubColor, $ctaColor, $ctaSubColor, $standoutColor, $optColor, $headlineColor, $featureHeadlineColor, $featureTextColor, $id) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpleadmachineClients";
 		$wpdb->update($table_db_name, 
        array( 
	     'logoHeadline' => $logoHeadline,
	     'logoSubHeadline' => $logoSubHeadline,
	     'logoStyle' => $logoStyle,
	     'logoImageURL' => $logoImageURL,
	     
	     'ctaHeadline' => $ctaHeadline,
	     'ctaSubHeadline' => $ctaSubHeadline,
	     'ctaStyle' => $ctaStyle,
	     'ctaImageURL' => $ctaImageURL,
	     
	     'headlineText' => $headlineText,
	     'headlineStyle' => $headlineStyle,
	     'headlineImageURL' => $headlineImageURL,
	     
	     'subHeadlineText' => $subHeadlineText,
	     'subHeadlineStyle' => $subHeadlineStyle,
	     'subHeadlineImage' => $subHeadlineImage,
	     
	     'featureCSS' => $featureCSS,
	     
	     'feature1Text' => $feature1Text,
	     'feature1Headline' => $feature1Headline,
	     'feature1ImageSmall' => $feature1ImageSmall,
	     'feature1Image' => $feature1Image,
	     'feature1Style' => $feature1Style,
	     
	     'feature2Text' => $feature2Text,
	     'feature2Headline' => $feature2Headline,
	     'feature2ImageSmall' => $feature2ImageSmall,
	     'feature2Image' => $feature2Image,
	     'feature2Style' => $feature2Style,
	     
	     'feature3Text' => $feature3Text,
	     'feature3Headline' => $feature3Headline,
	     'feature3ImageSmall' => $feature3ImageSmall,
	     'feature3Image' => $feature3Image,
	     'feature3Style' => $feature3Style,
	     
	     'feature4Text' => $feature4Text,
	     'feature4Headline' => $feature4Headline,
	     'feature4ImageSmall' => $feature4ImageSmall,
	     'feature4Image' => $feature4Image,
	     'feature4Style' => $feature4Style,
	     
	     'customContent' => $customContent,
	     'thankYou' => $thankYou,
	     'thankyouHeadline' => $thankyouHeadline,
	     
	     'optinStyle' => $optinStyle,
	     'optinHeadline' => $optinHeadline,
	     'buttonStyle' => $buttonStyle,
	     'buttonText' => $buttonText,
	     'buttonCustom' => $buttonCustom,
	     'namePlaceholder' => $namePlaceholder,
	     'emailPlaceholder' => $emailPlaceholder,
	     'phonePlaceholder' => $phonePlaceholder,
	     'optinContent' => $optinContent,
	     'optinSpam' => $optinSpam,
	     
	     'facebook' => $facebook,
	     'twitter' => $twitter,
	     'youtube' => $youtube,
	     'linkedin' => $linkedin,
	     'email' => $email,
	     'googleMaps' => $googleMaps,
	     
	     'bgStyle' => $bgStyle,
	     'customBG' => $customBG,
	     'selectBGStyle' => $selectBGStyle,
	     
	     'ar_name' => $ar_name,
	     'ar_email' => $ar_email,
	     'ar_phone' => $ar_phone,
	     'ar_formurl' => $ar_formurl,
	     'ar_hidden' => $ar_hidden,
	     'ar_code' => $ar_code,
	     
	     'BGcolor' => $BGcolor,
	     'customBGrepeat' => $customBGrepeat,
	     
	     'logoColor' => $logoColor,
	     'logoSubColor' => $logoSubColor,
	     'ctaColor' => $ctaColor,
	     'ctaSubColor' => $ctaSubColor,
	     'standoutColor' => $standoutColor,
	     'optColor' => $optColor,
	     'headlineColor' => $headlineColor,
	     'featureHeadlineColor' => $featureHeadlineColor,
	     'featureTextColor' => $featureTextColor,
	     
	     'seperatorStyle' => $seperatorStyle,
	     'seperatorImage' => $seperatorImage,
	     
	     'videoCode' => $videoCode,
	     'videoStyle' => $videoStyle,
	     'videoImageURL' => $videoImageURL,
	     
	     'siteTitle' => $siteTitle,
	     'siteKeywords' => $siteKeywords,
	     'siteDesc' => $siteDesc,
	     'siteTracking' => $siteTracking,
	     'siteSLUG' => $siteSLUG,
	     'siteFooter' => $siteFooter,
	     
	     'numberofLeads' => $checkLeads
	      ),
	      array( 'ID' => $id )
		);
		
		
		
	}
	
	function save_notifications($subjectLine, $emailBody, $textMessage, $client1Name, $client1Email, $client1Phone, $client2Name, $client2Email, $client2Phone, $client3Name, $client3Email, $client3Phone, $client4Name, $client4Email, $client4Phone, $id) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "wpleadmachineClients";
 		$wpdb->update($table_db_name, 
        array( 
	     'subjectLine' => $subjectLine,
	     'emailBody' => $emailBody,
	     'textMessage' => $textMessage,
	     
	     'client1Name' => $client1Name,
	     'client1Email' => $client1Email,
	     'client1Phone' => $client1Phone,
	     
	     'client2Name' => $client2Name,
	     'client2Email' => $client2Email,
	     'client2Phone' => $client2Phone,
	     
	     'client3Name' => $client3Name,
	     'client3Email' => $client3Email,
	     'client3Phone' => $client3Phone,
	     
	     'client4Name' => $client4Name,
	     'client4Email' => $client4Email,
	     'client4Phone' => $client4Phone,
	     
	     'videoCode' => $videoCode,
	     'videoStyle' => $videoStyle,
	     'videoImageURL' => $videoImageURL
	      ),
	      array( 'ID' => $id )
		);
		
	}
	
	function update_settings($prettyURL, $emailName, $emailEmail, $sendGridEmail, $sendGridPassword, $twilioID, $twilioAuth, $twilioNumber) {
		
		global $post;
		global $wpdb;
		
		$table_db_name = $wpdb->prefix . "wpleadmachineSettings";
		$templates3 = $wpdb->get_results("SELECT * FROM $table_db_name");
		
		$wpdb->insert($table_db_name, 
		        array( 
		      'id' => '1'
		        ));
		
		
 		$wpdb->update($table_db_name, 
        array( 
         'prettyURL' => $prettyURL,
	     'emailName' => $emailName,
	     'emailEmail' => $emailEmail,
	     'sendGridEmail' => $sendGridEmail,
	     'sendGridPassword' => $sendGridPassword,
	     'twilioID' => $twilioID,
	     'twilioAuth' => $twilioAuth,
	     'twilioNumber' => $twilioNumber
	      ),
	       array( 'id' => '1')
		);
		
	}
	
		
    function update_lead_page($id, $name, $content, $type) {
		 global $wpdb;
		 $table_name = $wpdb->prefix . 'wpleadmachine';
		 $wpdb->update($table_name,array('name'=>$name, 'content'=>$content), array( 'ID' => $id ) );
	}
	
	function delete_lead_page($id) {
		 global $wpdb;
		 $table_name = $wpdb->prefix . 'wpleadmachine';
		 $tabinfo = $wpdb->query("DELETE FROM $table_name WHERE id = $id");
	}
	
	
	
	function wpleadmachine_customBox() {
	    global $post;
	    global $wpdb;
	    $table_db_name = $wpdb->prefix . "wpleadmachine";
	    $templates = $wpdb->get_results("SELECT * FROM $table_db_name where type = 'webinar'",ARRAY_A);
	    
	    $tpl = get_post_meta($post->ID,'_template',true);
	     
	    ?>
	    	<style type="text/css">
	    		#select-webinar-template {
	    			font-size: 20px;
	    		}
	    		#select-webinar-template select {
					width: 100%;
					display: block;
					margin-top: -20px;
					margin-left: -1px;
				}
				#postdivrich {
					display: block !important;
				}
	    	</style>
	       <div id="select-webinar-template">
	       	<h4 style="margin-top: 10px;">Select Webinar Page:<br/><p style="font-weight: normal">Here you can select any of your created webinar pages inside any category.  </p></h4>
	       	
	             <p>
	             <select name="webinar_template" id="webinar_template">
	             <option value="none"> none </option>
	             <?php 
				    foreach($templates as $template)
				    {
				     if($tpl==$template["id"])
				     echo "<option value='$template[id]' selected> $template[name] </option>";
				     else
				     echo "<option value='$template[id]'> $template[name] </option>";
				    } ?>
				  </select></p>
			</div>
	    
	    <?php }	
	  add_action('save_post', 'wpWebinar_save_postdata');
		  
	  function wpWebinar_save_postdata($post_id) {
			 // to prevent metadata or custom fields from disappearing...
			 if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
				 return $post->ID;
			 
		  update_post_meta($post_id, "_template", $_POST["webinar_template"]);
		   
	  }
  
    
    function add_implugin_custom_box() {
	    add_meta_box('implugin_editor', 'GVO Webinar Manager -- Select Webinar Page & Use URL Above to Link to Your Page', 'wpleadmachine_customBox','wp_lead', 'normal', 'high');
	  }
	add_action('admin_menu', 'add_implugin_custom_box');
	
  
	   
	function plugin_wpleadmachine4_admin() {
	     $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'/WPLeadMachine';
		include('admin/new_campaign.php');
	}
	
	function plugin_wpleadmachine5_admin() {
	     $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'/WPLeadMachine';
		include('admin/settings.php');
	}
	
	function plugin_wpleadmachine8_admin() {
	     $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'/WPLeadMachine';
		include('admin/support.php');
	}
	
	function plugin_wpleadmachine9_admin() {
	     $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'/WPLeadMachine';
		include('admin/update.php');
	}
	
	function plugin_wpleadmachine6_admin() {
	     $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'/WPLeadMachine';
		include('admin/clients.php');
	}
	
	function wplocalfusion_addclient_admin() {
	    $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
        $imagePath = $full_path  .'/WPLeadMachine';
		include('admin/new_client.php');
	}
	
	function plugin_wpleadmachine_admin_actions() {
		add_menu_page('WP Local Fusion - Manage Your Clients Campaigns', 'Manage Clients', 'manage_options', 'wplocalfusion', 'plugin_wpleadmachine6_admin', 'http://cdn2.iconfinder.com/data/icons/basicset/user_16.png');
		add_submenu_page( 'wplocalfusion', 'Add New Client', 'Add New Client', 'manage_options', 'add-new-client', 'wplocalfusion_addclient_admin');
  		add_submenu_page( 'wplocalfusion', 'Settings', 'Settings', 'manage_options', 'wplocalfusion-settings', 'plugin_wpleadmachine5_admin');
		add_submenu_page( 'wplocalfusion', 'Support & FAQ', 'Support & FAQ', 'manage_options', 'wplocalfusion-support', 'plugin_wpleadmachine8_admin');
		add_submenu_page( 'wplocalfusion', 'Update', 'Update', 'manage_options', 'wplocalfusion-update', 'plugin_wpleadmachine9_admin');
	}
	
	add_action('admin_menu', 'plugin_wpleadmachine_admin_actions');

	// *****************************************************************
	
	// AJAX STUFF FOR THE PLUGIN
	
	add_action('admin_head', 'lfwp_adminajax_javascript');
	
	function lfwp_adminajax_javascript() {
	?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {
		
		// DB CHECK (hostgator hack)
		
		$('#createClientsDB').click(function() {
			
			var data = {
					action: 'lfwp_adminajax_createdb_clients',
					lead: "0"
				};
			
			$.post( ajaxurl, data,
			   function(data) {
			     //alert("Data Loaded: " + data);
			});
			
			$(this).removeClass('label-important');
			$(this).addClass('label-success');
			$(this).text('Clients Database Created! You are now all setup...');
			$(this).delay(2000).fadeOut("fast");
			
		  return false;
		});
	
		// Update Client After Saving...
		
		$clientSettingsCheck = $("#clientSettingsSaved").val();
		
		if($clientSettingsCheck == "1"){
			// return live info:
			
			$clientSettingsID = $("#clientSettingsSaved").attr("clientid");
			
			var data = {
					action: 'lfwp_adminajax_client_save_settings',
					client: ""+$clientSettingsID+""
				};
			
			$.post( ajaxurl, data,
			   function(data) {
			     //alert("Data Loadedx: " + data.name + " & " + data.photourl );
			     $(".clientdesc").text(data.name);
			     $(".clientImage").attr("src", data.photourl);
			}, "json");
		
		}
		
		// Check Custom Optin Image
		
		$('#buttonStyle').change(function() {
		
		  $getChange = $(this).val();	
		  
		  if($getChange == "custom"){
		  	$('#buttonCustom').show();
		  } else {
		    $('#buttonCustom').hide();
		  }
		
		  return false;
		});
		
		// Delete Lead

		$('.delete_lead').click(function() {
		
			$getLead = $(this).attr("leadName");
			//alert($getLead);
			
			var answer = confirm("Are you sure you want to delete this lead?");
			
			if (answer){

				$(this).closest('tr').fadeOut("fast");
				
				var data = {
						action: 'lfwp_adminajax_delete_lead',
						lead: ""+$getLead+""
					};
				
				$.post( ajaxurl, data,
				   function(data) {
				     //alert("Data Loaded: " + data);
				});

			}
			else{
			
				// do nothing
			
			}
			
			
			
		  return false;
		});

	});
	</script>
	<?php
	}
	
	add_action('wp_ajax_lfwp_adminajax_createdb_clients', 'lfwp_adminajax_createdb_clients_callback');
	
	function lfwp_adminajax_createdb_clients_callback() {
		
		global $wpdb;
			
			   $table_name = $wpdb->prefix . "wpleadmachineClients";
			   
			   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
			      
			      $sql = "CREATE TABLE " . $table_name . " (
				   id INTEGER(40) UNSIGNED AUTO_INCREMENT,
				   name varchar(500),
				   description varchar(500),
				   photo varchar(500),
		
				   logoHeadline varchar(500),
				   logoSubHeadline varchar(500),
				   logoStyle varchar(500),
				   logoImageURL varchar(500),
				   
				   ctaStyle varchar(500),
				   ctaHeadline varchar(500),
				   ctaSubHeadline varchar(500),
				   ctaImageURL varchar(500),
				   
				   headlineStyle varchar(500),
				   headlineText varchar(500),
				   headlineImageURL varchar(500),
				   
				   videoStyle varchar(500),
				   videoCode varchar(500),
				   videoImageURL varchar(500),
				   
				   subHeadlineText varchar(500),
				   subHeadlineImage varchar(500),
				   subHeadlineStyle varchar(500),
				   
				   featureCSS varchar(500),
				   
				   feature1Text varchar(500),
				   feature1Headline varchar(500),
				   feature1ImageSmall varchar(500),
				   feature1Image varchar(500),
				   feature1Style varchar(500),
				   
				   feature2Text varchar(500),
				   feature2Headline varchar(500),
				   feature2ImageSmall varchar(500),
				   feature2Image varchar(500),
				   feature2Style varchar(500),
				   
				   feature3Text varchar(500),
				   feature3Headline varchar(500),
				   feature3ImageSmall varchar(500),
				   feature3Image varchar(500),
				   feature3Style varchar(500),
				   
				   feature4Text varchar(500),
				   feature4Headline varchar(500),
				   feature4ImageSmall varchar(500),
				   feature4Image varchar(500),
				   feature4Style varchar(500),
				   
				   customContent LONGTEXT,
				   thankYou LONGTEXT,
				   thankyouHeadline LONGTEXT,
				   optinContent LONGTEXT,
				   optinSpam LONGTEXT,
				   
				   bgStyle varchar(500),
				   customBG varchar(500),
				   
				   optinStyle varchar(500),
				   optinHeadline varchar(500),
				   buttonStyle varchar(500),
				   buttonText varchar(500),
				   buttonCustom varchar(500),
				   namePlaceholder varchar(500),
				   emailPlaceholder varchar(500),
				   phonePlaceholder varchar(500),
				   
				   facebook varchar(500),
				   twitter varchar(500),
				   youtube varchar(500),
				   linkedin varchar(500),
				   email varchar(500),
				   googleMaps varchar(500),
				   
				   subjectLine varchar(500),
				   emailBody varchar(500),
				   textMessage varchar(500),
				   
				   client1Name varchar(500),
				   client1Email varchar(500),
				   client1Phone varchar(500),
				   
				   client2Name varchar(500),
				   client2Email varchar(500),
				   client2Phone varchar(500),
				   
				   client3Name varchar(500),
				   client3Email varchar(500),
				   client3Phone varchar(500),
				   
				   client4Name varchar(500),
				   client4Email varchar(500),
				   client4Phone varchar(500),
				   
				   seperatorStyle varchar(500),
				   seperatorImage varchar(500),
				   
				   tracked varchar(500),
				   numberofLeads varchar(500),
				   
				   BGcolor varchar(500),
				   customBGrepeat varchar(500),
				   selectBGStyle varchar(500),
				   
				   logoColor varchar(500),
				   logoSubColor varchar(500),
				   ctaColor varchar(500),
				   ctaSubColor varchar(500),
				   standoutColor varchar(500),
				   optColor varchar(500),
				   headlineColor varchar(500),
				   featureHeadlineColor varchar(500),
				   featureTextColor varchar(500),
				   
				   ar_name varchar(500),
				   ar_email varchar(500),
				   ar_phone varchar(500),
				   ar_formurl varchar(500),
				   
				   ar_hidden LONGTEXT,
				   ar_code LONGTEXT,
				   
				   siteTitle varchar(500),
				   siteKeywords varchar(500),
				   siteDesc varchar(500),
				   siteSLUG varchar(500),
				   siteTracking varchar(500),
				   siteFooter varchar(500),
				   
				   UNIQUE KEY id (id)
				 );";
			
			      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			      dbDelta($sql);
			   }
		
		echo "CREATED DB";
		
		die(); 
	}
	
	add_action('wp_ajax_lfwp_adminajax_delete_lead', 'lfwp_adminajax_delete_lead_callback');
	
	function lfwp_adminajax_delete_lead_callback() {
		global $wpdb; 
	
		$lead = $_POST['lead'];
		
		$table_name = $wpdb->prefix . 'wpleadmachineLeads';
		$tabinfo = $wpdb->query("DELETE FROM $table_name WHERE id = $lead");
		
		echo $lead;
		
		die(); 
	}
	
	add_action('wp_ajax_lfwp_adminajax_client_save_settings', 'lfwp_adminajax_client_save_settings_callback');
	
	function lfwp_adminajax_client_save_settings_callback() {
		global $wpdb; 
        
        $client = $_POST['client'];
        
        $table_name = $wpdb->prefix . 'wpleadmachineClients';
        $clients = $wpdb->get_results( "SELECT * FROM $table_name WHERE id = '$client'",ARRAY_A); 
      // $clientinfo = $wpdb->get_row("SELECT * FROM $table_name WHERE link_id = 10");
        
        foreach($clients as $client)
        {
        	$returnDesc = $client['description'];
        	$returnPhoto = $client['photo'];
        	echo json_encode(array("name"=>"$returnDesc","photourl"=>"$returnPhoto"));
        	die();
        }
       
		die(); 
	}
	
	// AJAX STUFF FOR THE LANDING PAGE
	
			
		add_action('wp_footer', 'lfwp_lpajax_javascript');
		
		function lfwp_lpajax_javascript() {
		?>
		<script type="text/javascript" >
		jQuery(document).ready(function($) {
		
		
	
		
		
			$("#addLeadbtn").click(function() {
			
//				 Passed Variables to POST function
				
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				
				if ($("#lname").val() == "") {
					 $("#lname").css("border", "2px solid #a54141");
					 return false;
				} if ($("#lemail").val() == "") {
					 $("#lname").css("border", "1px solid #4c996f");
					 $("#lemail").css("border", "2px solid #a54141");
					 return false;
				} if (!emailReg.test($("#lemail").val()) ) {
					 $("#lname").css("border", "1px solid #4c996f");
					 $("#lemail").css("border", "2px solid #a54141");
					 return false;
				} if ($("#lphone").val() == "") {
				     $("#lname").css("border", "1px solid #4c996f");
				     $("#lemail").css("border", "1px solid #4c996f");
					 $("#lphone").css("border", "2px solid #a54141");
					 return false;
				} else {
					$clientID = $("#client").val();
					$clientIDStripped = $("#clientStripped").val();
					$leadName = $("#lname").val()
					$leadEmail = $("#lemail").val()
					$leadPhone = $("#lphone").val();
					$id = $("#id").val();
				

					// SAVE LEAD...
					
				    
				    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
				    
				    var data = {
				    		action: 'lfwp_lpajax_add_lead',
				    		client: ""+$clientID+"",
				    		name: ""+$leadName+"", 
				    		email: ""+$leadEmail+"", 
				    		phone: ""+$leadPhone+"" 
				    	};
				    
				    $.post( ajaxurl, data,
				       function(data) {
				         //alert("LEAD ADDED");
				         
				         $.cookie("checkSubscribed_"+$clientIDStripped+"", 1, { expires : 1 }); 
				         $("#addLead").submit();
				         
				    });
				    
				    // SEND OUT SENDGRID
				    
				    $.post("notify.php", { client: ""+$clientID+"", name: ""+$leadName+"", email: ""+$leadEmail+"", phone: ""+$leadPhone+""  },
				       function(data) {
				    });
				    
				    // SMS
				    
				    <?php 
				    
				    global $wpdb;
				    $table_db_name2 = $wpdb->prefix . "wpleadmachineSettings";
				    $templates2 = $wpdb->get_results("SELECT * FROM $table_db_name2 WHERE id= 1", ARRAY_A);
				    
				    foreach($templates2 as $template2){}
				    
				    $twilioID = $template2['twilioID'];
				    $twilioAuth = $template2['twilioAuth'];
				    $twilioNumber = $template2['twilioNumber'];
				    
				    if($twilioID == "" || $twilioAuth == "" || $twilioNumber== "" ){
				    	echo "// TWILIO NOT SETUP";
				    } else {
				    	echo "// TWILIO IS SETUP!";
				    	?>
				    	
				    	var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
				    	
				    	var data = {
				    			action: 'lfwp_lpajax_sms',
				    			client: ""+$clientID+"",
				    			name: ""+$leadName+"", 
				    			email: ""+$leadEmail+"", 
				    			phone: ""+$leadPhone+"" 
				    		};
				    	
				    	$.post( ajaxurl, data,
				    	   function(data) {
				    	     //alert("Data Loaded: " + data);
				    	});
				    	
				    	<?php
				    }
				    
				    ?>
				    
				   
				    
					
					    
				    setTimeout('update()', 500); 
				    
				    return false;
				
				}
				
				
			});
			
	
		});
		</script>
		<?php
		}
		
	add_action('wp_ajax_lfwp_lpajax_add_lead', 'lfwp_lpajax_add_lead_callback');
	
	function lfwp_lpajax_add_lead_callback() {
		// Posted Variables 
		
		$clientID = $_POST['client']; // campaign ID
		
		$name = $_POST['name']; // lead NAME
		$email = $_POST['email']; // lead EMAIL
		$phone = $_POST['phone']; // PHONE
		$signedUp = date("F j, Y"); // DATE
		
		// ADD LEAD TO DB
		
		create_new_lead($name, $email, $phone, $clientID, $signedUp);
		
		//echo $clientID;
		
		die(); 
	}
	
	add_action('wp_ajax_lfwp_lpajax_sms', 'lfwp_lpajax_sms_callback');
	
	function lfwp_lpajax_sms_callback() {
		// Posted Variables 
		
		$clientID = $_POST['client']; // campaign ID
		
		$name = $_POST['name']; // lead NAME
		$email = $_POST['email']; // lead EMAIL
		$phone = $_POST['phone']; // PHONE
		$signedUp = date("F j, Y"); // DATE
		
		// Get Settings
		
		global $wpdb;
		$table_db_name2 = $wpdb->prefix . "wpleadmachineSettings";
		$templates2 = $wpdb->get_results("SELECT * FROM $table_db_name2 WHERE id= 1", ARRAY_A);
		
		foreach($templates2 as $template2){}
		
		$twilioID = $template2['twilioID'];
		$twilioAuth = $template2['twilioAuth'];
		$twilioNumber = $template2['twilioNumber'];
		
		// Get Clients from client
		
		$table_db_name3 = $wpdb->prefix . "wpleadmachineClients";
		$templates3 = $wpdb->get_results("SELECT * FROM $table_db_name3 WHERE name = '$clientID'", ARRAY_A);
		
		foreach($templates3 as $template3){}
		
		$txtMessage = $template3['textMessage'];
		
		$client1Name = $template3['client1Name'];
		$client2Name = $template3['client2Name'];
		$client3Name = $template3['client3Name'];
		$client4Name = $template3['client4Name'];
		
		$client1Phone = $template3['client1Phone'];
		$client2Phone = $template3['client2Phone'];
		$client3Phone = $template3['client3Phone'];
		$client4Phone = $template3['client4Phone'];
		
		//print_r($template3);
		
		////////////////////////////////////////////////////////
		
		// TWILIO INTEGRATION
		
		////////////////////////////////////////////////////////
		
		  //require "Services/Twilio.php";
		  require_once(ABSPATH . 'wp-content/plugins/WPLeadMachine/landingpage/Services/Twilio.php');
		  //require ('wp-content/plugins/WPLeadMachine/landingpage/Services/Twilio.php');	
		
		   // set our AccountSid and AuthToken - from www.twilio.com/user/account
		   $AccountSid = $twilioID;
		   $AuthToken = $twilioAuth;
		
		   // instantiate a new Twilio Rest Client
		   $client = new Services_Twilio($AccountSid, $AuthToken);
		
		   // ONLY CLIENT 1
		   	    
		   if($client1Phone != "" && $client2Phone == "" && $client3Phone == "" && $client4Phone == ""){
		  	
			  	$people = array(
			  	    "+$client1Phone" => "$client1Name"
			  	);
		  	
		   } 	
		  
		  // ONLY 2 CLIENTS
		  	    
		  if($client1Phone != "" && $client2Phone != "" && $client3Phone == "" && $client4Phone == ""){
		  	
		  	  	$people = array(
		  	  	    "+$client1Phone" => "$client1Name",
		  	  	    "+$client2Phone" => "$client2Name"
		  	  	);
		  	
		  } 
		  
		  // ONLY 3 CLIENTS
		  	    
		  if($client1Phone != "" && $client2Phone != "" && $client3Phone != "" && $client4Phone == ""){
		  	
		  	  	$people = array(
		  	  	    "+$client1Phone" => "$client1Name",
		  	  	    "+$client2Phone" => "$client2Name",
		  	  	    "+$client3Phone" => "$client3Name"
		  	  	);
		  	
		  }		
		  
		  // ONLY 4 CLIENTS
		  	    
		  if($client1Phone != "" && $client2Phone != "" && $client3Phone != "" && $client4Phone != ""){
		  	
		  	  	$people = array(
		  	  	    "+$client1Phone" => "$client1Name",
		  	  	    "+$client2Phone" => "$client2Name",
		  	  	    "+$client3Phone" => "$client3Name",
		  	  	    "+$client4Phone" => "$client4Name"
		  	  	);
		  	
		  }		  
		  
		
		   // iterate over all our friends. $number is a phone number above, and $name 
		   // is the name next to it
		   foreach ($people as $number => $name) {
		
		       // Send a new outgoing SMS */
		       $sms = $client->account->sms_messages->create(
		           // the number we are sending from, must be a valid Twilio number
		           "$twilioNumber", 
		
		           $number,
		           
		           "$txtMessage - $name - $email - $phone"
		       );
		
		       //echo "Sent message to $name";
		   }
		
		die(); 
	}
	
	
	
?>