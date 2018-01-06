<?php

		// ADD WORDPRESS
		
		define('WP_USE_THEMES', false);
		require('../../../../wp-blog-header.php');
	
		// Deal ID
		$ID = $_GET['id'];
		
		// +1 For Total Shares
			
		global $wpdb;
		$table_db_name = $wpdb->prefix . "fbwebinarpro";
		
		$findstat = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
		
		foreach($findstat as $findstat){}
		

?>

<form action="https://www3.gotomeeting.com//en_US/island/webinar/registration.flow" id="xCAPTURE" method="POST" >

	<input type="hidden" name="Template" value="island/webinar/registration.tmpl">
	<input type="hidden" name="Form" value="webinarRegistrationForm">
	<input type="hidden" name="WebinarKey" value="<?php echo $findstat->success_image; ?>">
	<input type="hidden" name="ViewArchivedWebinar" value="false">
	<input type="hidden" name="registrant" value="">
	<input type="hidden" name="RegistrantTimeZoneKey" id="RegistrantTimeZoneKey" value="67">
	
	<?php 
	
		// IF name is a full name, ie has space, seperate, otherwise repeat
		
		$name = explode(" ", $_GET['n']);
		
		if($name[1] == ""){
			?>
			<input type="text" name="Name_First" value="<?php echo $_GET['n']; ?>" />
			<input type="text" name="Name_Last" value="<?php echo $_GET['n']; ?>" />
			<?php
		} else {
			?>
			<input type="text" name="Name_First" value="<?php echo $name[0]; ?>" />
			<input type="text" name="Name_Last" value="<?php echo $name[1]; ?>" />
			<?php
		}
		
	
	
	?>
	
	<input type="text" name="Email" value="<?php echo $_GET['e']; ?>" />

</form>



<script type="text/javascript">
    function myfunc () {
        var frm = document.getElementById("xCAPTURE");
        frm.submit();
    }
    window.onload = myfunc;
</script>
