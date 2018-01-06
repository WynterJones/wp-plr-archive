<?php

// Run when plugin is activated
function fbwebinarpro_installer(){

   global $wpdb;

   // Set Database For Campaigns

   $table_name = $wpdb->prefix . "fbwebinarpro";
   
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	   
	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
	   
	   title varchar(250),
	   
	   created varchar(30),
	   
	   total_optins varchar(20),
	   
	   total_views varchar(20),
	   
	   total_shares varchar(20),
	   
	   fangate_status varchar(10),
	   
	   fangate_image varchar(250),
	   
	   bg_color varchar(250),
	   
	   bg_image varchar(250),
	   
	   share_btn varchar(250),
	   
	   copy_pre LONGTEXT,
	   
	   copy_main LONGTEXT,
	   
	   copy_time LONGTEXT,
	   
	   copy_names LONGTEXT,
	   
	   copy_optin LONGTEXT,
	   
	   copy_name LONGTEXT,
	   
	   copy_email LONGTEXT,
	   
	   copy_btn LONGTEXT,
	   
	   copy_spam LONGTEXT,
	   
	   copy_company LONGTEXT,
	   
	   copy_rights LONGTEXT,
	   
	   optin_copy LONGTEXT,
	   
	   btn_copy varchar(250),
	   
	   share_image varchar(250),
	   
	   success_image varchar(250),
	   
	   footer_copy LONGTEXT,
	   
	   fb_id varchar(50),
	   
	   fb_secret varchar(50),
	   
	   fb_title varchar(200),
	   
	   fb_image varchar(250),
	   
	   fb_desc varchar(300),
	   
	   fb_url varchar(300),
	   
	   ar_code LONGTEXT,
	   
	   ar_email varchar(50),
	   
	   ar_name varchar(50),
	   
	   ar_url varchar(250),
	   
	   ar_hidden LONGTEXT,
	   	   	
	   UNIQUE KEY id (id)
	   
	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      
      dbDelta($sql);
      
    }
    
       // Set Database For Leads
    
       $table_name = $wpdb->prefix . "fbwebinarpro_leads";
       
       if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
          
          $sql = "CREATE TABLE " . $table_name . " (
    	   
    	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
    	   
    	   name varchar(250),
    	   
    	   email varchar(250),
    	   
    	   created varchar(40),
    	   
    	   campaign varchar(100),
    	   
    	   UNIQUE KEY id (id)
    	   
    	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";
    
          require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
          
          dbDelta($sql);
          
        }
    
} 

?>