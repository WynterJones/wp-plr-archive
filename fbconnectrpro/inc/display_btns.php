<?php

include("table.btns.class.php");

// Check Action:

if (isset($_GET['action_btn'])) {

	// Action Time
	
	if($_GET['action_btn'] == "edit"){
		
		include("edit.btn.php");
		
	} else if($_GET['action_btn'] == "delete"){
	
		include("delete.btn.php");
		
		
	} else if($_GET['action_btn'] == "new_btn"){
	
		include("new.btn.php");
	
	}

} else {

	echo '<div class="wrap" style=" margin-top:15px;" >';
	echo '<h2 style="margin-bottom: -30px; " >All Your Buttons <a href="?page=fbcrx-dashboard&tab=display_campaigns&action_btn=new_btn" class="button-primary" style=" margin-left: 15px;" > Add New Button</a> </h2>';
	$myListTable = new fbcrx_table_btn();
	$myListTable->prepare_items(); 
	$myListTable->display();  
	echo '</div>';

}

?>