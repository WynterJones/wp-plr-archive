<?php 
	/*                           
	  ______________________________________________________________
	  --------------------------------------------------------------
	    Plugin Name: Sales Optimizer
	    Plugin URI: http://wpsalesoptimizer.com
	    Description: Boost Your Sales with Actionable Shortcodes
	    Version: 1.1
	  --------------------------------------------------------------
	  ______________________________________________________________
	*/

	// Activate and Create Database
	  register_activation_hook( __FILE__, 'activate_salesoptimizer');
	  function activate_salesoptimizer() {
	    global $wpdb;
	    $table_name = $wpdb->prefix . "salesoptimizer";
	       if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	          $sql = "CREATE TABLE " . $table_name . " (
	          id INTEGER(40) UNSIGNED AUTO_INCREMENT,
	          name varchar(500),
	          date varchar(500),
	          UNIQUE KEY id (id)
	       );";
	          require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	          dbDelta($sql);
	          $date =  date("F j, Y");
	          $wpdb->query("INSERT INTO $table_name(id, name, date)
        			VALUES('1', 'Your First Sales Button', '$date')");
	       } 
	  }
	  add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');
	require('functions.php');
?>