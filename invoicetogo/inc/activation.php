<?php

// Run when plugin is activated
function oppro_installer(){

   global $wpdb;

   // Set Database For Campaigns

   $table_name = $wpdb->prefix . "oppro_campaigns";
   
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	   
	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
	   
	   title varchar(250),
	   
	   created varchar(30),
	   
	   total_views varchar(20),

	   heading1 LONGTEXT,
	   heading2 LONGTEXT,
	   blurb LONGTEXT,
	   	   	
	   UNIQUE KEY id (id)
	   
	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      
      dbDelta($sql);
      
    }

	// Plans

   $table_name = $wpdb->prefix . "oppro_plans";
   
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	   
	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,

	   plan varchar(10),

	   blurb LONGTEXT,
	   bullet varchar(10),
	   heading varchar(200),
	   	   	
	   UNIQUE KEY id (id)
	   
	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      
      dbDelta($sql);
      
    } 

    // Settings

    $table_name = $wpdb->prefix . "oppro_settings";
   
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	   
	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
	   
	   settings varchar(10),

	   intro LONGTEXT,
	   company_logo varchar(500),
	   company_info LONGTEXT,

	   testimonial_body_1 LONGTEXT,
	   testimonial_body_2 LONGTEXT,
	   testimonial_name_1 varchar(200),
	   testimonial_name_2 varchar(200),

	   btn varchar(10),

	   plan_title_1 varchar(500),
	   plan_blurb_1 LONGTEXT,
	   plan_btn_1 varchar(500),
	   plan_url_1 varchar(500),

	   plan_title_2 varchar(500),
	   plan_blurb_2 LONGTEXT,
	   plan_btn_2 varchar(500),
	   plan_url_2 varchar(500),

	   plan_title_3 varchar(500),
	   plan_blurb_3 LONGTEXT,
	   plan_btn_3 varchar(500),
	   plan_url_3 varchar(500),
	   	   	
	   UNIQUE KEY id (id)
	   
	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      
      dbDelta($sql);
      
    }

     $wpdb->insert($table_name, 
	      array( 
	       'settings' => 'setup'
	        ),
	        array( 'id' => '1' )
	  );
    
    
} 

?>