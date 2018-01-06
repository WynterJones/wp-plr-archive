<?php

// Run when plugin is activated
function affiliatepressx_installer(){

   global $wpdb;

   // Set Database For Mail Apps

   $table_name = $wpdb->prefix . "affiliatepressx";
   
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	   
	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
	   
	   created varchar(30),
	   
	   appname varchar(200),

     attr1 varchar(200),
     attr2 varchar(200),
     attr3 varchar(200),
     attr4 varchar(200),
     attr5 varchar(200),
     attr6 varchar(200),
     attr7 varchar(200),
     attr8 varchar(200),
     attr9 varchar(200),
     attr10 varchar(200),
     attr11 varchar(200),
     attr12 varchar(200),
     attr13 varchar(200),
     attr14 varchar(200),

     postID varchar(10),
	   	   	
	   UNIQUE KEY id (id)
	   
	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      
      dbDelta($sql);
    
    }

} 

?>