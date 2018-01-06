<?php

	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Load Up All Key Departments
	
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbwebinarpro";
	
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
	
	$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Webinar Landing Page</title>
	
	 <link href="<?php echo $full_path; ?>fbwebinarpro/timeline/css/bootstrap.css" rel="stylesheet" type="text/css" />
	 
	  <link href="<?php echo $full_path; ?>fbwebinarpro/timeline/css/main.css" rel="stylesheet" type="text/css" />
	
		<style>
		
			body{
				
				<?php 
					if($results->bg_color == "white"){
						echo "background-color: #FFF;";
					} else if($results->bg_color == "grey"){
						echo "background-color: #d7d7d7;";
					} else if($results->bg_color == "blue"){
						echo "background-color: #66b2c9;";
					} else if($results->bg_color == "green"){
						echo "background-color: #438b42;";
					} else if($results->bg_color == "red"){
						echo "background-color: #d53d41;";
					} else if($results->bg_color == "black"){
						echo "background-color: #333333;";
					}
				?>
				
				<?php 
					if($results->bg_image == "none"){
						// no texture
					} else if($results->bg_image == "wood"){
						echo "background: url(".$full_path."fbwebinarpro/timeline/images/wood.png) repeat;";
					} else if($results->bg_image == "concrete"){
						echo "background: url(".$full_path."fbwebinarpro/timeline/images/concrete.png) repeat;";
					} else if($results->bg_image == "dark"){
						echo "background: url(".$full_path."fbwebinarpro/timeline/images/gun.png) repeat;";
					} else if($results->bg_image == "mesh"){
						echo "background: url(".$full_path."fbwebinarpro/timeline/images/mesh.png) repeat;";
					} else if($results->bg_image == "blocks"){
						echo "background: url(".$full_path."fbwebinarpro/timeline/images/blocks.png) repeat;";
					}
				?>
				
			}
		
		</style>
	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		
		<script type="text/javascript">
		$(document).ready(function() {
		
		// Click Register
		
			$('#register').click(function() {
				
				// Validate::
				
				$getName = $("#fullName").val();
				$getEmail = $("#emailAddy").val();
				
				$placeholder_name = "<?php  if($results->copy_name == ""){ echo "Enter Your Full Name..."; } else { echo stripcslashes($results->copy_name); } ?>";
				
				$placeholder_email = "<?php  if($results->copy_email == ""){ echo "Enter Your Email Address..."; } else { echo stripcslashes($results->copy_email); } ?>";
				
				if( $getName == $placeholder_name || $getName == "" ){
					
					$("#fullName").css("border", "2px solid red");
				
				} else if( $getEmail == $placeholder_email || $getEmail == "" ){
					
					$("#fullName").css("border", "1px solid #CCC");
					
					$("#emailAddy").css("border", "2px solid red");
					
				} else {
				
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					
					if ( !filter.test($getEmail) ) {
						
						$("#emailAddy").css("border", "2px solid red");
					
					} else {
					
						$("#emailAddy").css("border", "1px solid #CCC");
					
						$("#optinBox").removeClass("showArrow");
						$("#optinBox").addClass("noArrow");
					
						$("#optinThanks").show();
						$("#optinContent").hide();
						
						$("#bodyContent").slideUp();
						$("#bodyContent").fadeOut(50);
					
						var data = {
							id: "<?php echo $_GET['id']; ?>",
							name: ""+$getName+"",
							email: ""+$getEmail+""
						};
							
						var savelead = "<?php echo site_url() ?>/wp-content/plugins/fbwebinarpro/inc/save_lead.php";
					
						$.post( savelead, data,
						   function(results) {
									     
						});
						
						// Submit AR
						
						$("#AR").attr("src", "<?php echo site_url() ?>/wp-content/plugins/fbwebinarpro/inc/ar_submit.php?id=<?php echo $_GET['id']; ?>&n="+$getName+"&e="+$getEmail+"");
					
						// Submit GOTOMEETING
						
						$("#GOTO").attr("src", "<?php echo site_url() ?>/wp-content/plugins/fbwebinarpro/inc/goto_submit.php?id=<?php echo $_GET['id']; ?>&n="+$getName+"&e="+$getEmail+"");
					
					}
				
				} 
				
			  return false;
			});
			
			$('#shareIT').click(function() {
			
				showStreamPublish();
			
			  return false;
			});
			
			$('#fullName').click(function() {
				
				//$placeholder = "<?php  if($results->copy_name == ""){ echo "Enter Your Full Name..."; } else { echo stripcslashes($results->copy_name); } ?>";
				
				$(this).val("");
				
			  return false;
			});
			
			$('#emailAddy').click(function() {
				
				$(this).val("");
				
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
                 name: '<?php if($results->fb_title == ""){ echo "Check Out This Amazing Webinar"; } else { echo addslashes($results->fb_title); } ?>',
                 link: '<?php echo $results->fb_url; ?>',
                 caption: '<?php echo $results->fb_url; ?>',
                 'picture':'<?php if($results->fb_image == ""){ echo ""; } else { echo $results->fb_image; } ?>',
                 description: '<?php if($results->fb_desc == ""){ echo "Join now and watch this amazing free webinar..."; } else { echo addslashes($results->fb_desc); } ?>'
               },
               function(response) {
                     if (response && response.post_id) {
                        
                        var data = {
                        	id: "<?php echo $_GET['id']; ?>"
                        };
                        	
                        var savelead = "<?php echo site_url() ?>/wp-content/plugins/fbwebinarpro/inc/save_share.php";
                        		
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
	
	<div id="header">
	                
	     <p class="intro">
	     <?php 
	     	if($results->copy_pre == ""){
	     		echo "This Month's Free Webinar:";
	     	} else {
	     		echo stripcslashes($results->copy_pre);
	     	}
	     ?>
	     </p>
	     
	     <p class="share" id="shareIT">
	     <img src="<?php echo $full_path; ?>fbwebinarpro/timeline/images/fb.png" style="margin-right: 5px; margin-bottom: -4px;" />
	     <?php 
	     	if($results->btn_copy == ""){
	     		echo "Share This Free Webinar";
	     	} else {
	     		echo stripcslashes($results->btn_copy);
	     	}
	     ?>
	     </p>
	     
	     <br clear="all"> 
	                
	     <h1 class="webTitle">
	     <?php 
	     	if($results->copy_main == ""){
	     		echo "SEO Tips for Local Clients Using Facebook";
	     	} else {
	     		echo stripcslashes($results->copy_main);
	     	}
	     ?>
	     </h1>
	     
	     <div id="bodyContent">
	     
	     <h2 class="droidserif subhead"><span class="droid">
	     <?php 
	     	if($results->copy_names == ""){
	     		echo "With James Dean & John Wayne...";
	     	} else {
	     		echo stripcslashes($results->copy_names);
	     	}
	     ?>
	     </span></h2>
	     
	     <img src="<?php 
	     	if($results->share_image == ""){
	     		echo  $full_path ."fbwebinarpro/timeline/images/place.png";
	     	} else {
	     		echo $results->share_image;
	     	}
	     ?>" align="right"  id="webImage" width="200" height="215" >
	     
	     
	     <h2 class="droid" style="padding-bottom:10px;">
	     <?php 
	     	if($results->copy_time == ""){
	     		echo "Thursday, October 25, 2012 11:00 AM";
	     	} else {
	     		echo stripcslashes($results->copy_time);
	     	}
	     ?>
	     </h2>
	      
	      <p style="padding:0;">
	      <?php 
	      	if($results->optin_copy == ""){
	      		echo "Tune in for our Fake webinar: SEO Tips for Small Businesses. We’ll discuss how to maximize your success against the competition in your industry and in your local area. Learn what roles directories play, how to use social media to your advantage, what on-site factors to pay attention to and more!";
	      	} else {
	      		echo stripcslashes($results->optin_copy);
	      	}
	      ?></p>
	       
	      </div>       
	                
	</div>
	
	<div id="optinBox" class="showArrow" >
	
	<div id="optinThanks" style="display: none;">
		
		<?php 
			if($results->footer_copy == ""){
				echo "<center><h1>Thanks for signing up</h1><p>Any text you want would go here...</p></center>";
			} else {
				echo stripcslashes($results->footer_copy);
			}
		?>
		
	</div>
	
	<div id="optinContent">
	
		<h1>
		<?php 
			if($results->copy_optin == ""){
				echo "Sign Up To The Webinar Now:";
			} else {
				echo stripcslashes($results->copy_optin);
			}
		?>
		</h1>
		
		<input type="text" id="fullName" value="<?php 
			if($results->copy_name == ""){
				echo "Enter Your Full Name...";
			} else {
				echo stripcslashes($results->copy_name);
			}
		?>" class="inputz" />
		
		<input type="text" id="emailAddy" value="<?php 
			if($results->copy_email == ""){
				echo "Enter Your Email Address...";
			} else {
				echo stripcslashes($results->copy_email);
			}
		?>" class="inputz" />
		
		<span class="btn success" id="register">
		<?php 
			if($results->copy_btn == ""){
				echo "Reserve Your Spot Now!";
			} else {
				echo stripcslashes($results->copy_btn);
			}
		?>
		</span>
		
		<p style="margin-top: 15px; font-size: 12px; color: #9d9d9d;">
		<?php 
			if($results->copy_spam == ""){
				echo "By registering you will be getting news about this event via email...";
			} else {
				echo stripcslashes($results->copy_spam);
			}
		?>
		</p>
		
	</div>
	
		
	</div>
	
	<div id="footer" style="margin-top: 20px;">
		
		<div style="float: left;">
			<p>
			<?php 
				if($results->copy_company == ""){
					echo "Company Name";
				} else {
					echo stripcslashes($results->copy_company);
				}
			?>
			</p>
		</div>
		
		<div style="float: right;">
			<p>
			<?php 
				if($results->copy_rights == ""){
					echo "All Rights Reserved";
				} else {
					echo stripcslashes($results->copy_rights);
				}
			?>
			</p>
		</div>
		
	</div>
	
</div>
	
	
	<iframe src="" id="AR" width="300" height="300" style="display: none;" ></iframe>
	
	<iframe src="" id="GOTO" width="300" height="300" style="display: none;" ></iframe>
	
</body>
</html>