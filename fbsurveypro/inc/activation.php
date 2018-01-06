<?php

// Run when plugin is activated
function fbsurveypro_installer(){

   global $wpdb;

   // Set Database For Campaigns

   $table_name = $wpdb->prefix . "fbsurveypro_campaigns";
   
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
	   
	   optin_image varchar(250),
	   
	   optin_copy LONGTEXT,
	   
	   btn_copy varchar(250),
	   
	   footer_copy LONGTEXT,
	   	   
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
    
       $table_name = $wpdb->prefix . "fbsurveypro_users";
       
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
        
        // Set Database For Answere
        
           $table_name = $wpdb->prefix . "fbsurveypro_answers";
           
           if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
              
              $sql = "CREATE TABLE " . $table_name . " (
        	   
        	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
        	   
        	   campaign_id varchar(50),
        	   
        	   user_id varchar(50),
        	   
        	   a1 LONGTEXT,
        	   
        	   a2 LONGTEXT,
        	   
        	   a3 LONGTEXT,
        	   
        	   a4 LONGTEXT,
        	   
        	   a5 LONGTEXT,
        	   
        	   UNIQUE KEY id (id)
        	   
        	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";
        
              require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
              
              dbDelta($sql);
              
            }
        
        // Set Database For Questions
        
           $table_name = $wpdb->prefix . "fbsurveypro_questions";
           
           if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
              
              $sql = "CREATE TABLE " . $table_name . " (
        	   
        	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
        	   
        	   campaign_id varchar(250),
        	   
        	   q1_status varchar(20),
        	   q1_qa LONGTEXT,
			   q1_mu_0 LONGTEXT,
			   q1_mu_1 varchar(250),
			   q1_mu_2 varchar(250),
			   q1_mu_3 varchar(250),
			   q1_mu_4 varchar(250),
			   
			   q2_status varchar(20),
			   q2_qa LONGTEXT,
			   q2_mu_0 LONGTEXT,
			   q2_mu_1 varchar(250),
			   q2_mu_2 varchar(250),
			   q2_mu_3 varchar(250),
			   q2_mu_4 varchar(250),
			   
			   q3_status varchar(20),
			   q3_qa LONGTEXT,
			   q3_mu_0 LONGTEXT,
			   q3_mu_1 varchar(250),
			   q3_mu_2 varchar(250),
			   q3_mu_3 varchar(250),
			   q3_mu_4 varchar(250),
			   
			   q4_status varchar(20),
			   q4_qa LONGTEXT,
			   q4_mu_0 LONGTEXT,
			   q4_mu_1 varchar(250),
			   q4_mu_2 varchar(250),
			   q4_mu_3 varchar(250),
			   q4_mu_4 varchar(250),
			   
			   q5_status varchar(20),
			   q5_qa LONGTEXT,
			   q5_mu_0 LONGTEXT,
			   q5_mu_1 varchar(250),
			   q5_mu_2 varchar(250),
			   q5_mu_3 varchar(250),
			   q5_mu_4 varchar(250),
        	   
        	   UNIQUE KEY id (id)
        	   
        	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";
        
              require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
              
              dbDelta($sql);
              
            }
    
} 

?>