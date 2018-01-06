<?php

include("table.leads.class.php");

// Check Action:

if (isset($_GET['action'])) {

	// Action Time
	
	if($_GET['action'] == "edit"){
		
		include("edit.lead.php");
		
	} else if($_GET['action'] == "delete"){
		include("delete.lead.php");
	}

} else {

	echo '<div class="wrap" style=" margin-top:15px;" >';
	echo '<h2 style="margin-bottom: -30px; " >All Your Leads <a href="' .site_url() .'/wp-content/plugins/fbconnectrpro/inc/exportcsv.php" class="button-secondary" style=" margin-left: 15px; margin-top: 0px;" > Export To CSV</a> </h2>';
	$myListTable = new fbcrx_table_leads();
	$myListTable->prepare_items(); 
	$myListTable->display();  
	echo '</div>';

}

?>