<?php

	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Load Up All Key Departments
	
	global $wpdb;
	$table_db_name = $wpdb->prefix . "timelineoptinpro";
	
	$id = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$id'", OBJECT);
	
	foreach($data as $results) {}
	
	// +1 For Views
	$views = $results->total_views + 1;
	$wpdb->update($table_db_name, 
	array( 
	 'total_views' => $views
	),
	  array( 'id' => $id )
	);
	
	
	require "facebook.php";
	
	$app_id = $results->fb_id;
	$app_secret = $results->fb_secret;
	$facebook = new Facebook(array(
	    'appId' => $app_id,
	    'secret' => $app_secret,
	    'cookie' => true,
	));
	
	$signed_request = $facebook->getSignedRequest();
	
	
	$like_status = $signed_request["page"]["liked"];
	
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Timeline Opt-in</title>
	<style>
		body{
			margin: 0px;
			width: 810px;
		}
		.optinform{
			display: block;
			width: 465px;
			padding: 15px;
			font-weight: bold;
		}
		.optinbtn{
			padding: 15px;
			width: 465px;
			text-align: center;
			font-size: 18px;
			font-weight: bold;
		}
		
	</style>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.0.6" media="screen" />
	 <link href="bootstrap.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">
	$(document).ready(function() {
	
		$('.fancybox').fancybox();
		
		// optin
		
		$('#optinBTN').click(function() {
		
			$name = $("#optin_name").val();
			$email = $("#optin_email").val();
			
			var data = {
				id: "<?php echo $_GET['id']; ?>",
				name: ""+$name+"",
				email: ""+$email+""
			};
				
			var savelead = "<?php echo site_url() ?>/wp-content/plugins/timelineoptinpro/inc/save_lead.php";
			
			if($name == ""){
				
				$("#optin_name").css('borderColor', 'red');
				
			} 
			
			if($email == ""){
				
				$("#optin_email").css('borderColor', 'red');
				
			} else {
				
				$.fancybox.close();
				
				$("#optin_area").hide();
				
				$("#share_area").show();
				
				$.post( savelead, data,
				   function(results) {
							     
				});
				
				// Submit AR
				
				$("#AR").attr("src", "<?php echo site_url() ?>/wp-content/plugins/timelineoptinpro/inc/ar_submit.php?id=<?php echo $_GET['id']; ?>&n="+$name+"&e="+$email+"");
			
			}
		
		  return false;
		});
	
	});
	</script>
	
</head>
<body>

<div id='fb-root'></div>
<script src='http://connect.facebook.net/en_US/all.js'></script>
    <script>
        FB.init(
        {
            "appId"  : "<?php echo $results->fb_id; ?>",
            "status" : true,
            "cookie" : true,
            "xfbml"  : true,
            "oauth"  : true
        });
        window.fbAsyncInit = function() {
            FB.Canvas.setAutoGrow();
            //FB.Canvas.setSize( {height: 1200 });
        }

    </script>

<script>
            
function showStreamPublish() {
            FB.ui(
               {
                 method: 'feed',
                 name: '<?php if($results->fb_title == ""){ echo "Check Out This Amazing Deal"; } else { echo addslashes($results->fb_title); } ?>',
                 link: '<?php echo $results->fb_url; ?>',
                 caption: '<?php echo $results->fb_url; ?>',
                 'picture':'<?php if($results->fb_image == ""){ echo ""; } else { echo $results->fb_image; } ?>',
                 description: '<?php if($results->fb_desc == ""){ echo "Get the best deals you can find around town, it\'s all here!"; } else { echo addslashes($results->fb_desc); } ?>'
               },
               function(response) {
                     if (response && response.post_id) {
                        
                        $("#share_area").hide();
                        $("#success_area").show();
                        
                        var data = {
                        	id: "<?php echo $_GET['id']; ?>"
                        };
                        	
                        var savelead = "<?php echo site_url() ?>/wp-content/plugins/timelineoptinpro/inc/save_share.php";
                        		
                        $.post( savelead, data,
                           function(results) {
                        			     
                        });
                        
                     }
});}

</script>
	
	<div id="optin_area" style="text-align: center; max-width: 810px;">
	<?php
	
	// Check if there is a Fan Gate:
	
	if($results->fangate_status == "on"){
		// Yes, there is a fangate...
		if ($like_status == 1){
			echo "<a class='fancybox' href='#optin'><img src='$results->optin_image' border='0' /></a>";
		} else{
			echo "<img src='$results->fangate_image' />";
		}
		
	} else {
		// No, there is NO fan gate...
		echo "<a class='fancybox' href='#optin'><img src='$results->optin_image' border='0' /></a>";
	}
	
	?>
	</div>
	
	<div id="share_area" style="text-align: center; display:none; max-width: 810px;">
	<?php
	
		// Share Image
		echo "<a id='shareThis' href='javascript:;' onclick='showStreamPublish();'><img src='$results->share_image' border='0' /></a>";
	
	?>
	</div>
	
	<div id="success_area" style="text-align: center; display:none; max-width: 810px;">
	<?php
	
		// Share Image
		echo "<img src='$results->success_image' border='0' />";
	
	?>
	</div>
	
	<div id="optin" style="display: none; width: 500px;">
		
		<?php 
			// Display Footer Copy
			echo $results->optin_copy;
		?>
		
		<div id="optinForm" style="margin-top: 15px;">
		
			<input type="text" id="optin_name" placeholder="Enter In Your Full Name..." class="optinform" value="" />
			<input type="text" id="optin_email" placeholder="Enter In Your Email Address..." class="optinform" value="" />
			
			<a href="#" id="optinBTN" class="btn btn-success optinbtn"><?php 
				// Display Footer Copy
				echo $results->btn_copy;
			?></a>
		
		</div>
		
	</div>

	<div id="footercopy" style="margin-top: 15px; max-width: 810px;">	
	<?php 
		// Display Footer Copy
		echo $results->footer_copy;
	?>
	</div>
	
	<iframe src="" id="AR" width="300" height="300" style="display: none;" ></iframe>
	
</body>
</html>