<?php

		// ADD WORDPRESS
		
		define('WP_USE_THEMES', false);
		require('../../../../wp-blog-header.php');
	
		// Deal ID
		$ID = $_GET['id'];
		
		// +1 For Total Shares
			
		global $wpdb;
		$table_db_name = $wpdb->prefix . "fbsurveypro_campaigns";
		
		$findstat = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
		
		foreach($findstat as $findstat){}
		

?>

<form action="<?php echo $findstat->ar_url; ?>" id="xCAPTURE" method="POST" >

	<?php echo $findstat->ar_hidden; ?>
	
	<input type="text" name="<?php echo $findstat->ar_name; ?>" value="<?php echo $_GET['n']; ?>" />
	<input type="text" name="<?php echo $findstat->ar_email; ?>" value="<?php echo $_GET['e']; ?>" />

</form>

<?php 

	if($findstat->ar_url == ""){} else {

?>

<script type="text/javascript">
    function myfunc () {
        var frm = document.getElementById("xCAPTURE");
        frm.submit();
    }
    window.onload = myfunc;
</script>

<?php } ?>