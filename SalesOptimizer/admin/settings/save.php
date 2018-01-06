<?php 
		define('WP_USE_THEMES', true);
		require ('../../../../../wp-load.php');
		$option = $_POST["options"];
		$data = $_POST["data"];
		salesoptimizer_update($option, $data, $_POST['id']);
		echo "Saved";
?>