<?php

	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Load Up All Key Departments
	
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbhubpro";
	
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
	 <title>bizHub</title>
	 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	 <link href="css/main.css" rel="stylesheet" type="text/css" />
	 
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

	 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

	 <script type="text/javascript" src="gmap3.min.js"></script>
	 
	 <script type="text/javascript">
	 $(document).ready(function() {
	 
	 	$("#loc").gmap3({
	 		action:'addMarker',
			address: '<?php echo $results->location; ?>',
			map:{
				center: true,
				zoom: 16
			}
		});

		$('#shareIT').click(function() {
			
				showStreamPublish();
			
			  return false;
			});
			
			$('#name').click(function() {
				
				$(this).val("");
				
			  return false;
			});
			
			$('#email').click(function() {
				
				$(this).val("");
				
			  return false;
			});

		// Optin

		$('#coupon').click(function() {
				
				// Validate::
				
				$getName = $("#name").val();
				$getEmail = $("#email").val();
				
				$placeholder_name = "<?php  if($results->copy_name == ""){ echo "Enter Your Full Name..."; } else { echo stripcslashes($results->copy_name); } ?>";
				
				$placeholder_email = "<?php  if($results->copy_email == ""){ echo "Enter Your Email Address..."; } else { echo stripcslashes($results->copy_email); } ?>";
				
				if( $getName == $placeholder_name || $getName == "" ){
					
					$("#name").css("border", "2px solid red");
				
				} else if( $getEmail == $placeholder_email || $getEmail == "" ){
					
					$("#name").css("border", "1px solid #CCC");
					
					$("#email").css("border", "2px solid red");
					
				} else {
				
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					
					if ( !filter.test($getEmail) ) {
						
						$("#email").css("border", "2px solid red");
					
					} else {
					
						$("#email").css("border", "1px solid #CCC");
					
						$("#optinThanks").show();
						$("#optinContent").hide();
					
						var data = {
							id: "<?php echo $_GET['id']; ?>",
							name: ""+$getName+"",
							email: ""+$getEmail+""
						};
							
						var savelead = "<?php echo site_url() ?>/wp-content/plugins/fbhubpro/inc/save_lead.php";
					
						$.post( savelead, data,
						   function(results) {
									     
						});
						
						// Submit AR
						
						$("#AR").attr("src", "<?php echo site_url() ?>/wp-content/plugins/fbhubpro/inc/ar_submit.php?id=<?php echo $_GET['id']; ?>&n="+$getName+"&e="+$getEmail+"");
					
					}
				
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
                        	
                        var savelead = "<?php echo site_url() ?>/wp-content/plugins/fbhubpro/inc/save_share.php";
                        		
                        $.post( savelead, data,
                           function(results) {
                        			     
                        });
                        
                     }
});}

</script>
	
<?php

	// Check if there is a Fan Gate:
	
	if($results->fangate_status == "on"){
		// Yes, there is a fangate...
		if ($like_status == 1){
			// They liked it..
		} else{
			echo "<img src='$results->fangate_image' />";
			die();
		}
		
	} 

?>

<div id="mainContent">
		
		<div id="topShareBar">
		
			<p class="intro">
				<?php 
			     	if($results->copy_pre == ""){
			     		echo "Call Us: 555-555-5555";
			     	} else {
			     		echo stripcslashes($results->copy_pre);
			     	}
			     ?>
			</p>
			
			<p class="share" id="shareIT" >
			<img src="images/fb.png" style="margin-right: 5px; margin-bottom: -4px;" />
			<?php 
	     	if($results->btn_copy == ""){
	     		echo "Share This";
	     	} else {
	     		echo stripcslashes($results->btn_copy);
	     	}
	     ?></p>
			
			<br clear="all"> 
		</div>
		
		<div id="mainHeader">

			<?php 
		     	if($results->header_image == ""){
		     		?>
		     			<img src="images/header.png" width="808" />
		     		<?php
		     	} else {
		     		?>
		     			<img src="<?php echo stripcslashes($results->header_image); ?>" width="808" />
		     		<?php
		     		
		     	}
		     ?>

		</div>
		
		<div id="leftSide">
			
			<div id="companyIntro">

				<?php 
			     	if($results->copy_main == ""){
			     		?>
			     		<h2>AwesomeShop</h2>
						<h3>The #1 Shop On The East Side 4 Years In a Row!</h3>
						<p>Suspendisse eleifend scelerisque nisi vitae adipiscing. Morbi id nibh ut erat posuere fringilla. Cras tempor placerat lobortis. Donec eget magna vitae tortor adipiscing condimentum. Donec ut mauris ac ipsum sodales sagittis. Donec facilisis blandit ultricies...</p>
						
			     		<?php
			     	} else {
			     		echo stripcslashes($results->copy_main);
			     	}
			     ?>

			</div>
			
			<?php 
		     	if($results->location == ""){
		     	} else {
		     		?>
		     			<div id="reviewsBar">
							<span><b><?php echo $results->copy_location; ?></b></span>
							<span style="float:right;"><?php echo $results->location; ?></span>
						</div>
		     			<div id="loc"></div>
		     		<?php
		     		
		     	}
		     ?>
			
		</div>
		
		<div id="rightSide">
		
			<div id="couponBox">
				
				<div id="optinContent">

				<h3>
					<?php 
						if($results->copy_optin == ""){
							echo "Get 40% Off Your Next Visit To The Shop";
						} else {
							echo stripcslashes($results->copy_optin);
						}
					?>
				</h3>
				
				<input type="text" id="name" value="<?php 
					if($results->copy_name == ""){
						echo "Enter Your Full Name...";
					} else {
						echo stripcslashes($results->copy_name);
					}
				?>" />
				
				<input type="text" id="email" value="<?php 
					if($results->copy_email == ""){
						echo "Enter Your Email Address...";
					} else {
						echo stripcslashes($results->copy_email);
					}
				?>" />
				
				<p class="btn btn-sucess" id="coupon" ><?php 
					if($results->copy_btn == ""){
						echo "Claim Deal";
					} else {
						echo stripcslashes($results->copy_btn);
					}
				?></p>

				</div>

				<div id="optinThanks" style="display:none;">
					<?php
						if($results->copy_success == ""){
							echo "Thank you for opting in...";
						} else {
							echo stripcslashes($results->copy_success);
						}
					?>
				</div>
				
			</div>
			
			<div id="socialLinks">
				
				<?php 
			     	if($results->social_1_copy == ""){
			     	} else {
			     		?>
			     		<div class="link">
						<img src="http://cdn4.iconfinder.com/data/icons/socialmediaicons_v120/32/website.png" align="left" />
						<p class="linkName"><a href="<?php echo $results->social_1_link; ?>" target="_blank" /><?php echo $results->social_1_copy; ?></a></p>
						</div>
			     		<?php
			     	}
			     ?>

			     <?php 
			     	if($results->social_2_copy == ""){
			     	} else {
			     		?>
			     		<div class="link">
						<img src="http://cdn5.iconfinder.com/data/icons/WPZOOM_Social_Networking_Icon_Set/32/twitter.png" align="left" />
						<p class="linkName"><a href="<?php echo $results->social_2_link; ?>" target="_blank" /><?php echo $results->social_2_copy; ?></a></p>
						</div>
			     		<?php
			     	}
			     ?>

			     <?php 
			     	if($results->social_3_copy == ""){
			     	} else {
			     		?>
			     		<div class="link">
						<img src="http://cdn5.iconfinder.com/data/icons/Handycons2/32/gmail.png" align="left" />
						<p class="linkName"><a href="mailto:<?php echo $results->social_3_link; ?>" target="_blank" /><?php echo $results->social_3_copy; ?></a></p>
						</div>
			     		<?php
			     	}
			     ?>

			     <?php 
			     	if($results->social_4_copy == ""){
			     	} else {
			     		?>
			     		<div class="link">
						<img src="http://cdn1.iconfinder.com/data/icons/socialmediaicons_v120/32/youtube.png" align="left" />
						<p class="linkName"><a href="<?php echo $results->social_4_link; ?>" target="_blank" /><?php echo $results->social_4_copy; ?></a></p>
						</div>
			     		<?php
			     	}
			     ?>

			     <?php 
			     	if($results->social_5_copy == ""){
			     	} else {
			     		?>
			     		<div class="link">
						<img src="http://cdn1.iconfinder.com/data/icons/socialmediaicons_v120/32/linkedin.png" align="left" />
						<p class="linkName"><a href="<?php echo $results->social_5_link; ?>" target="_blank" /><?php echo $results->social_5_copy; ?></a></p>
						</div>
			     		<?php
			     	}
			     ?>
			
			
				
			</div>
			
		</div>
		
		<br clear="all"> 
		
</div>

<iframe src="" id="AR" width="300" height="300" style="display: none;" ></iframe>
	
</body>
</html>