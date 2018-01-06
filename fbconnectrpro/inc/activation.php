<?php

// Run when plugin is activated
function fbcrx_install(){

   global $wpdb;

   // Set Database For Leads

   $table_name = $wpdb->prefix . "fbcxrxLeads";
   
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	   
	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
	   
	   fullname varchar(250),
	   
	   email varchar(250),
	   
	   location varchar(250),
	   
	   fburl varchar(250),
	   
	   btn varchar(250),
	   
	   date varchar(250),
	   	
	   UNIQUE KEY id (id)
	   
	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      
      dbDelta($sql);
    }
    
	// Set Database For Btns

   $table_name = $wpdb->prefix . "fbcxrxBTNs";
   
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	   
	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
	   
	   btnname varchar(250),
	   
	   totalleads varchar(250),
	   
	   totalviews varchar(250),
	   
	   fbid varchar(250),
	   
	   fbsecret varchar(250),
	   
	   arcode LONGTEXT,
	   
	   arform varchar(500),
	   
	   arname varchar(100),
	   
	   aremail varchar(100),
	   
	   arhidden varchar(500),
	   
	   btn varchar(100),
	   
	   btncustom varchar(500),
	   
	   redirect LONGTEXT,
	   
	   date varchar(100),
	   	
	   UNIQUE KEY id (id)
	   
	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      
      dbDelta($sql);
    }
    
    
} 		

?>