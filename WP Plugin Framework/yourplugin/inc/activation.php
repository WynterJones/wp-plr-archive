<?php

// Run when plugin is activated
function yourplugin_installer(){

   global $wpdb;

   // Set Database For Mail Apps

   $table_name = $wpdb->prefix . "yourplugin";
   
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
      
      $sql = "CREATE TABLE " . $table_name . " (
	   
	   ID INTEGER(100) UNSIGNED AUTO_INCREMENT,
	   
	   created varchar(30),
	   
	   appname varchar(200),

     tElem1 varchar(200),
     tElem2 varchar(200),
     tElem3 varchar(200),
     tElem4 varchar(200),
     tElem5 varchar(200),
     tElem6 varchar(200),
     tElem7 varchar(200),
     tElem8 varchar(200),
     tElem9 varchar(200),
     tElem10 varchar(200),
     tElem11 varchar(200),
     tElem12 varchar(200),
     tElem13 varchar(200),
     tElem14 varchar(200),
	   	   	
	   UNIQUE KEY id (id)
	   
	 )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      
      dbDelta($sql);
    
    }

} 

?>