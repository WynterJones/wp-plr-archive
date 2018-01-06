<?php

	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	
	// Load Up All Key Departments
	$urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	$urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
	$urlx = str_replace( "?", "", $urlx);
	global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	
	$ID = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($data as $data) {}

	// Return Option Object:
	$results = get_option('instantlandingpage_campaign_'. $ID);	
	// echo $data->id;
	
	// $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	$full_path = get_site_url();


	$assets = $full_path . "/wp-content/plugins/instantlandingpage/lp/";

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css"> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

   
    <script type="text/javascript">
	    $(document).ready(function() {
	    
	    	$.backstretch([
	    		'<?php echo stripcslashes($results->bgImage1); ?>'
	    	], {duration: 5000, fade: 3750}); 

	    	$( "body" ).mouseleave(function() {
				$('#myModal').modal();
			});	
	    
	    });
    </script>

    <style>
	   
		.container {
			width: 750px;
			background: #fff;
			border-radius: 10px;
			box-shadow: 0 0 5px #333;
			margin-top: 90px;
		}
		.row {
			padding: 0 30px;
		}
		.footer, .header {
			padding: 20px 50px;
			text-align: center;
		}
		.modal-body {
			text-align: center;
			padding: 40px;
		}
		h1, h2, h3, h4, h5, h6, p {
			padding: 10px 0;
			margin: 0;
		}
		.form-control {
			margin: 8px 0;
		}
		.content iframe, .content object {
			width: 100%;
		}
    </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 header">
				<h1><strong><?php echo stripcslashes($results->headline); ?></strong></h1>
				<h3><?php echo stripcslashes($results->subheadline); ?></h3>
			</div>
			<div class="col-md-7 content">
				<?php echo stripcslashes($results->video); ?>
			</div>
			<div class="col-md-5 sidebar">
				<?php echo stripcslashes($results->sidebar); ?>
			</div>
			<div class="col-md-12 footer">
				<?php echo stripcslashes($results->footer); ?>
			</div>
		</div>
	</div>

<?php 
	if( $results->popupSwitch == "on") {  ?>
	<div class="modal fade" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body">
	       <?php echo stripcslashes($results->popup); ?>
	      </div>
	    </div>
	  </div>
	</div>
<?php 
	}
 ?>
	

</body>
</html>