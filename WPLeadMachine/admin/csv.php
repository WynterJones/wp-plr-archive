<?php 

// ADD WORDPRESS

define('WP_USE_THEMES', false);
require('../../../../wp-blog-header.php');

$curUrl = '../wp-content/plugins/WPLeadMachine'; 

header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=exported_leads.csv");
header("Pragma: no-cache");
header("Expires: 0");

		  global $post;
		  global $wpdb;
		  $getOptin = get_post_meta( $post->ID, 'rndNumber', true );
		  $table_db_name = $wpdb->prefix . "wpleadmachineLeads";
		  $client = $_GET['client'];
		  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE client = '$client'",ARRAY_A);

		  $tpl = get_post_meta($post->ID,'_template',true);
		
			
    ?>
    <?php
       foreach($templates as $template){ echo $template['name'] . ",". $template['email'] . ",". $template['phone'] .",". $template['signedUp'] ."\n";
       } 
	?>