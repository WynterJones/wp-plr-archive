<?php
// Include WordPress 

error_reporting(E_ERROR);

define('WP_USE_THEMES', false);
require('../../../../wp-blog-header.php');	
?>
<?php
    		  global $post;
			  global $wpdb;
			  $getOptin = get_post_meta( $post->ID, 'rndNumber', true );
			  $table_db_name = $wpdb->prefix . "wpleadmachineClients";
			  $client = $_GET['client'];
			  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$client'",ARRAY_A);
	
			  $tpl = get_post_meta($post->ID,'_template',true);
			
				
        ?>
	    <?php
	       foreach($templates as $template)
				{
					?>
								
					<?php
				} 
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php if($template['siteTitle'] != ""){ echo stripslashes($template['siteTitle']);} else { echo "Site Title Here..."; } ?></title>
	<meta name="description" content="<?php echo stripslashes($template['siteDesc']); ?>" />
	<meta name="keywords" content="<?php echo stripslashes($template['siteKeywords']); ?>" />
	
	<!--LOAD UP CSS FILES HERE-->
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	
	<!--LOAD UP JS FILES HERE-->
		
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
	
	<script src="../include/jquery.cookie.js"></script>
	
	<style type="text/css">
	    #wpadminbar {
	        display: none;
	    }
	    
	    </style>
	
	<script type="text/javascript">
			$(document).ready(function() {
				
				
				
				$("#ms_video iframe").attr('style','height: 342px; width: 540px;');
				$("#ms_video embed").attr('style','height: 342px; width: 540px;');
				$("#ms_video object").attr('style','height: 342px; width: 540px;');
				
				// *************************************
				// DYNAMIC SIZING OF ELEMENTS...
				// *************************************
				
				// Logo Headline  *************************************
				
				$getLogoCopy =  $("#lfwp_LogoText").text().length;
				//alert($getLogoCopy);
				
				if ($getLogoCopy > "60") {
					$(".lfwp_LogoText").css("font-size", 14);
				} else if ($getLogoCopy > "56") {
					$(".lfwp_LogoText").css("font-size", 18);
				} else if ($getLogoCopy > "46") {
					$(".lfwp_LogoText").css("font-size", 20);
				} else if ($getLogoCopy > "40") {
					$(".lfwp_LogoText").css("font-size", 24);
				} else if($getLogoCopy > "34"){
					$(".lfwp_LogoText").css("font-size", 27);
				} 
				
				// Sub-Logo Headline  *************************************
				
				$getSubLogoCopy =  $("#lfwp_subLogoText").text().length;
				//alert($getSubLogoCopy);
				
				if($getSubLogoCopy > "90"){
					$(".lfwp_subLogoText").css("font-size", 11);
				} else if($getSubLogoCopy > "85"){
					$(".lfwp_subLogoText").css("font-size", 12);
				} else if($getSubLogoCopy > "78"){
					$(".lfwp_subLogoText").css("font-size", 13);
				} 
				
				// STAND OUT Headline  *************************************
				
				$getStandoutCopy =  $(".lfwp_standOUT").text().length;
				//alert($getStandoutCopy);
				
				if($getStandoutCopy > "99"){
					$(".lfwp_standOUT").css("font-size", 14);
				} else if($getStandoutCopy > "91"){
					$(".lfwp_standOUT").css("font-size", 16);
				} else if($getStandoutCopy > "87"){
					$(".lfwp_standOUT").css("font-size", 18);
				} else if($getStandoutCopy > "79"){
					$(".lfwp_standOUT").css("font-size", 22);
				} else if($getStandoutCopy > "75"){
					$(".lfwp_standOUT").css("font-size", 24);
				} 
				
				// OPTIN Headline  *************************************
				
				$getOptinHeadlineCopy =  $(".lfwp_optinHeadline").text().length;
				//alert($getOptinHeadlineCopy);
				
				if($getOptinHeadlineCopy > "50"){
					$(".lfwp_optinHeadline").css("font-size", 14);
				} else if($getOptinHeadlineCopy > "43"){
					$(".lfwp_optinHeadline").css("font-size", 16);
				} else if($getOptinHeadlineCopy > "34"){
					$(".lfwp_optinHeadline").css("font-size", 18);
				}
				
				
				
				
				
					
			});
			
			// UPDATE FUNCTION
			
					function update() {
						//$.cookie("checkSubscribed_<?php echo str_replace(" ", "", $client); ?>", 1, { expires : 1 }); 
					    //$("#addLead").submit();     
				    }
				    
	</script>
	
	<?php if ($template['bgStyle'] != "" && $template['selectBGStyle'] == "premade") { ?>
		<style type="text/css">
			html, body {
				background: url(images/<?php echo $template['bgStyle']; ?>.png) repeat-x top #fff;
			}
		</style>
	<?php } ?>
	<?php if ($template['customBG'] != "" && $template['selectBGStyle'] == "custom") { ?>
		<style type="text/css">
			html, body {
				background: url(<?php echo $template['customBG']; ?>) <?php echo $template['customBGrepeat']; ?> #<?php echo $template['BGcolor']; ?>;
			}
		</style>
	<?php } ?>
	
	<?php if ($template['bgStyle'] == "" && $template['customBG'] == "") { ?>
		<style type="text/css">
			html, body {
				background: url(images/wood_light.png) repeat-x top #fff;
			}
		</style>
	<?php } ?>
	
	<?php if ($template['optinStyle'] != "") { ?>
		<style type="text/css">
			#optinHeader{
				background: url(images/optin_1/<?php echo $template['optinStyle']; ?>.png) repeat-x;
			}
		</style>
	<?php } ?>
	
	<?php if ($template['buttonStyle'] == "grey") { ?>
		<script type="text/javascript">
				$(document).ready(function() {
				 	$('#addLeadbtn').removeClass('btn-success');
				});
		</script>
	<?php } ?>
	<?php if ($template['buttonStyle'] == "black") { ?>
		<script type="text/javascript">
				$(document).ready(function() {
				 	$('#addLeadbtn').removeClass('btn-success');
				 	$('#addLeadbtn').addClass('btn-inverse');
				});
		</script>
	<?php } ?>
	<?php if ($template['buttonStyle'] == "red") { ?>
		<script type="text/javascript">
				$(document).ready(function() {
				 	$('#addLeadbtn').removeClass('btn-success');
				 	$('#addLeadbtn').addClass('btn-danger');
				});
		</script>
	<?php } ?>
	<?php if ($template['buttonStyle'] == "orange") { ?>
		<script type="text/javascript">
				$(document).ready(function() {
				 	$('#addLeadbtn').removeClass('btn-success');
				 	$('#addLeadbtn').addClass('btn-warning');
				});
		</script>
	<?php } ?>
	<?php if ($template['buttonStyle'] == "dark_blue") { ?>
		<script type="text/javascript">
				$(document).ready(function() {
				 	$('#addLeadbtn').removeClass('btn-success');
				 	$('#addLeadbtn').addClass('btn-primary');
				});
		</script>
	<?php } ?>
	<?php if ($template['buttonStyle'] == "light_blue") { ?>
		<script type="text/javascript">
				$(document).ready(function() {
				 	$('#addLeadbtn').removeClass('btn-success');
				 	$('#addLeadbtn').addClass('btn-info');
				});
		</script>
	<?php } ?>
	
	<!--CUSTOM TRACKING CODES HERE-->
	
	<?php echo stripslashes($template['siteTracking']); ?>
	
</head>
<body>
	
<?php 
  
/*
	if(isset($_POST['plugin_hidden']) == 'newLead') {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$client = $_POST['client'];
		$signedUp = date("F j, Y");
		create_new_lead($name, $email, $phone, $client, $signedUp);
	*/	
		
		
?>

	<!--SUCCESS-->

<?php // } ?>

<!--MAIN WRAPPER-->

<?php

$clientClean = str_replace(" ", "", $client);

$clientCookie = "checkSubscribed_$clientClean";

 if ( isset( $_COOKIE["$clientCookie"] )) {
	?>
		
	

<!--MAIN WRAPPER-->

<div id="mainWrapper"> 
	
	<!--LOGO - Phone Number CTA-->
	
	<div id="headerWrapper">
		
		<div id="logoArea">
			<?php if ($template['logoStyle'] == "text" || $template['logoStyle'] == "") { ?>
			
				<h1 class="lfwp_LogoText" id="lfwp_LogoText" style="color: #<?php if($template['logoColor'] == ""){ echo "333"; } else { echo $template['logoColor'];} ?>;" >
				<?php 
				if($template['logoHeadline'] == ""){ echo "WP Local Fuxsion"; } else {echo stripslashes($template['logoHeadline']);}
				?>
				</h1>
				
				<h4 class="lfwp_subLogoText"  id="lfwp_subLogoText" style="color: #<?php if($template['logoSubColor'] == ""){ echo "333"; } else { echo $template['logoSubColor'];} ?>;"  >
				<?php
				if($template['logoSubHeadline'] == ""){ echo "Customize this text inside dashboard"; } else { echo stripslashes($template['logoSubHeadline']); } ?>
				</h4>
			
			<?php } if ($template['logoStyle'] == "image") { ?>
				<img src="<?php echo $template['logoImageURL']; ?>" style="margin-top: 13px;">
			<?php } ?>
			
			
		</div>
		
		<div id="phoneCTA">
			<?php if ($template['ctaStyle'] == "text" || $template['ctaStyle'] == "" ) { ?>
			
			<span class="phoneCTA_sub lfwp_PhoneSUB" style="color: #<?php if($template['ctaSubColor'] == ""){ echo "767676"; } else { echo $template['ctaSubColor'];} ?>;">
			<?php
			if( $template['ctaSubHeadline'] == "" ){ echo "Call to action text here"; } else { echo $template['ctaSubHeadline']; }
			?></span>
			
			<span class="phoneCTA_number lfwp_PhoneNUMBER" style="color: #<?php if($template['ctaColor'] == ""){ echo "333"; } else { echo $template['ctaColor'];} ?>;">
			<?php
			if( $template['ctaHeadline'] == "" ){ echo "1-800-888-5555"; } else { echo $template['ctaHeadline']; }
			?>
			</span>
			
			<?php } if ($template['ctaStyle'] == "image") { ?>
				<img src="<?php echo $template['ctaImageURL']; ?>" style="margin-top: -10px;"  >
			<?php } ?>
			
			
		</div>
		
		<br clear="all" >
	</div>
	
	<!--Standout Headline-->
	
	<div id="standoutWrapper">
		
		<div id="standoutHeadline">
		<table>
			<tr>
			
			<?php if($template['thankyouHeadline'] != ""){ ?>
			
			<td valign="middle" align="center" height="72" width="960" class="lfwp_standOUT"><?php echo stripslashes($template['thankyouHeadline']); ?></td>
			
			<?php } else { ?> 
			
			<td valign="middle" align="center" height="72" width="960" class="lfwp_standOUT">Thank You For Signing Up!</td>
			
			<?php } ?>
			
			</tr>
		</table>
		</div>
		
	</div>
	
	<!-- MAIN AREA - VIDEO/GRAPHIC/TEXT - OPTIN BOX - SUBHEADLINE	-->
	
	<div id="mainSectionWrapper">
		
		<!-- THANK YOU AREA -->

		<div id="thankyouWrapper">

			<div id="thankyou_top">
				<img src="images/thankyou_top.png" />
			</div>
			
			<div id="thankyou_content">
				
				
				<?php if($template['thankYou'] != ""){  echo stripslashes($template['thankYou']);  } else { ?> 
				
				<center><h1>Thanks For Claiming This Amazing Deal!</h1>
				<h3>Here you can showcase the download page OR sell them something else!</h3>
				<br>
				<p>You must edit this part in the page settings under the "THANK YOU" tab...</p>
				</center>
				
				<?php } ?>
				
			</div>
			
			<div id="thankyou_footer">
				<img src="images/thankyou_footer.png" />
			</div>

		</div>
		
	</div>
	
	<footer style="border-top: 1px solid #ddd;padding-top: 20px; clear: both;">
		
		<?php if($template['siteFooter'] != ""){ echo stripslashes($template['siteFooter']);} else { ?> 
		
		<center><p>Copyright &copy; 2012 - <strong>Your Company - Something</strong> - All Rights Reserved</p></center>
		
		<?php } ?>
		<br><br><br>
	</footer>
	
</div>	

<!--EOA - MAIN WRAPPER-->	
	
</body>
</html>
	
	<?php
} else { ?>

<div id="mainWrapper"> 
	
	<!--LOGO - Phone Number CTA-->
	
	<div id="headerWrapper">
		
		<div id="logoArea">
			<?php if ($template['logoStyle'] == "text" || $template['logoStyle'] == "") { ?>
				<h1 class="lfwp_LogoText" id="lfwp_LogoText" style="color: #<?php if($template['logoColor'] == ""){ echo "333"; } else { echo $template['logoColor'];} ?>;" >
				<?php 
				if($template['logoHeadline'] == ""){ echo "WP Local Fusion"; } else {echo stripslashes($template['logoHeadline']);}
				?>
				</h1>
				
				<h4 class="lfwp_subLogoText"  id="lfwp_subLogoText" style="color: #<?php if($template['logoSubColor'] == ""){ echo "333"; } else { echo $template['logoSubColor'];} ?>;" >
				<?php
				if($template['logoSubHeadline'] == ""){ echo "Customize this text inside dashboard"; } else { echo stripslashes($template['logoSubHeadline']); } ?>
				</h4>
			<?php } if ($template['logoStyle'] == "image") { ?>
				<img src="<?php echo $template['logoImageURL']; ?>" style="margin-top: 13px;">
			<?php } ?>
			
			
		</div>
		
		<div id="phoneCTA">
			<?php if ($template['ctaStyle'] == "text" || $template['ctaStyle'] == "" ) { ?>
				
				<span class="phoneCTA_sub lfwp_PhoneSUB" style="color: #<?php if($template['ctaSubColor'] == ""){ echo "767676"; } else { echo $template['ctaSubColor'];} ?>;">
				<?php
				if( $template['ctaSubHeadline'] == "" ){ echo "Call to action text here"; } else { echo $template['ctaSubHeadline']; }
				?></span>
				
				<span class="phoneCTA_number lfwp_PhoneNUMBER" style="color: #<?php if($template['ctaColor'] == ""){ echo "333"; } else { echo $template['ctaColor'];} ?>;">
				<?php
				if( $template['ctaHeadline'] == "" ){ echo "1-800-888-5555"; } else { echo $template['ctaHeadline']; }
				?>
				</span>
		
			<?php } if ($template['ctaStyle'] == "image") { ?>
				<img src="<?php echo $template['ctaImageURL']; ?>" style="margin-top: -10px;"  >
			<?php } ?>
			
		
		</div>
		
		<br clear="all" >
	</div>
	
	<!--Standout Headline-->
	
	<div id="standoutWrapper">
		
		<div id="standoutHeadline">
		<table>
			<tr>
			<?php if ($template['headlineStyle'] == "text" && $template['headlineText'] != "") { ?>
				<td valign="middle" align="center" height="72" width="960" class="lfwp_standOUT" style="color: #<?php if($template['standoutColor'] == ""){ echo "FFF"; } else { echo $template['standoutColor'];} ?>;" ><?php echo stripslashes($template['headlineText']); ?></td>
			<?php } if ($template['headlineStyle'] == "image") { ?>
				<img src="<?php echo $template['headlineImageURL']; ?>" >
			<?php } ?>
			
			<?php if ($template['headlineText'] == "" && $template['headlineImageURL'] == "") { ?>
				<td valign="middle" align="center" height="72" width="960" style="color: #<?php if($template['standoutColor'] == ""){ echo "FFF"; } else { echo $template['standoutColor'];} ?>;" >Customize This Landing Page As Per Your Clients Services</td>
			<?php } ?>
			</tr>
		</table>
		</div>
		
	</div>
		
	<!-- MAIN AREA - VIDEO/GRAPHIC/TEXT - OPTIN BOX - SUBHEADLINE	-->
	
	<div id="mainSectionWrapper">
		
		<!-- VIDEO OPTION -->
		
			
			<?php if ($template['videoStyle'] == "video" && $template['videoCode'] != "") { ?>
				<div id="ms_video"><?php echo stripslashes($template['videoCode']); ?></div>
			<?php } if ($template['videoStyle'] == "image") { ?>
				<img src="<?php echo $template['videoImageURL']; ?>" style="margin-top: 40px;">
			<?php } ?>
			
			<?php if ($template['videoCode'] == "" && $template['videoImageURL'] == "") { ?>
				<div id="ms_video">
				
				<iframe src="http://player.vimeo.com/video/22439234" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				
				</div>
			<?php } ?>
		
		<!-- OPTIN AREA -->
		
		<div id="optinWrapper">
			
			<div id="optinHeader">
				<?php if ($template['optinHeadline'] != "") { ?>
					<div id="optinHeadline" class="lfwp_optinHeadline" style="color: #<?php if($template['optColor'] == ""){ echo "FFF"; } else { echo $template['optColor'];} ?>;"  ><?php echo stripslashes($template['optinHeadline']); ?></div>
				<?php } ?>
				<?php if ($template['optinHeadline'] == "") { ?>
					<div id="optinHeadline" style="color: #<?php if($template['optColor'] == ""){ echo "FFF"; } else { echo $template['optColor'];} ?>;" >Headline for Optin Area</div>
				<?php } ?>
			</div>
			
			<div id="optinContent">
				
				<?php if ($template['optinContent'] != "") { ?>
					<?php echo stripslashes($template['optinContent']); ?>
				<?php } ?>
				<?php if ($template['optinContent'] == "") { ?>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc.</p>
				<?php } ?>
				
				<!-- OPTIN FORMS -->
				
				<!-- SPAM NOTICE -->
				
				<form id="addLead" name="plugin_form" method="post" action="<?php if ($template['ar_formurl'] != "") { echo $template['ar_formurl']; }  else { echo "#"; } ?>">
					
					<?php if ($template['ar_hidden'] != "") { echo $template['ar_hidden']; }  else { echo ""; } ?>
					<input type="hidden" name="id" value="<?php echo $template['id']; ?>">
					<input type="hidden" name="client" id="client" value="<?php echo $_GET['client']; ?>">
					<input type="hidden" name="clientStripped" id="clientStripped" value="<?php echo str_replace(" ", "", $_GET['client']); ?>">
					
					<input type="text" class="optinClean optinName" name="<?php if ($template['ar_name'] != "") { echo stripslashes($template['ar_name']); }  else { echo "name"; } ?>" id="lname" placeholder="<?php if ($template['namePlaceholder'] != "") { ?><?php echo stripslashes($template['namePlaceholder']); ?><?php }   else { echo "Your Full Name"; } ?>">
					<input type="text" class="optinClean optinEmail" name="<?php if ($template['ar_email'] != "") { echo stripslashes($template['ar_email']); }  else { echo "email"; } ?>" id="lemail" placeholder="<?php if ($template['emailPlaceholder'] != "") { ?><?php echo stripslashes($template['emailPlaceholder']); ?><?php }  else { echo "Your Email Address"; }  ?>">
					<input type="text" class="optinClean optinPhone" name="<?php if ($template['ar_phone'] != "") { echo stripslashes($template['ar_phone']); }  else { echo "phone"; } ?>" id="lphone" placeholder="<?php if ($template['phonePlaceholder'] != "") { ?><?php echo stripslashes($template['phonePlaceholder']); ?><?php } else { echo "Your Phone Number"; } ?>">
				
				<?php 
				
				if($template['buttonStyle'] == "custom" ){
				
					echo "<img src='". $template['buttonCustom'] . "' id='addLeadbtn' style='cursor:pointer;' />";
				
				} else {
				
				?>
				
					<button class="btn btn-success btn-large btnOptin" id="addLeadbtn"  ><?php if ($template['buttonText'] != "") { ?><?php echo stripslashes($template['buttonText']); ?><?php }  else { echo "Click Here to Subscribe"; }  ?></button>
					
					<?php } ?>
					
				</form>
				
				<?php if ($template['optinSpam'] != "") { ?>
					<div id="spamNotice"><?php echo stripslashes($template['optinSpam']); ?></div>
				<?php } ?>
				<?php if ($template['optinSpam'] == "") { ?>
					<div id="spamNotice">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<?php } ?>
			</div>
		
			<div id="optinFooter">
				<img src="images/optin/optin_footer.png" />
			</div>
			
		</div>
		
		<!-- LOWER HEADLINE -->
		
		<div id="lowerheadlineArea">
			
			<?php if ($template['subHeadlineStyle'] == "text" && $template['subHeadlineText'] != "") { ?>
				<h1 style="margin-bottom: 30px;" style="color: #<?php if($template['headlineColor'] == ""){ echo "333"; } else { echo $template['headlineColor'];} ?>;" ><?php echo stripslashes($template['subHeadlineText']); ?></h1>
			<?php } if ($template['subHeadlineStyle'] == "image") { ?>
				<img src="<?php echo $template['subHeadlineImage']; ?>" alt="">
			<?php } ?>
			
			<?php if ($template['subHeadlineText'] == "" && $template['subHeadlineImage'] == "") { ?>
				<h1 style="color: #<?php if($template['headlineColor'] == ""){ echo "333"; } else { echo $template['headlineColor'];} ?>;" >Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h1>
			<?php } ?>
			
		</div>
		
		<!-- CLEAR - w/ FIRST SEPARATOR -->
		
		<div class="clearms">
		<?php if ($template['seperatorStyle'] != ""  && $template['seperatorImage'] == "") { ?>
				<img src="images/<?php echo $template['seperatorStyle']; ?>.png" style="margin-top: 10px;" />
			<?php } if ($template['seperatorStyle'] == ""  && $template['seperatorImage'] == "") { ?>
				<img src="images/sep_1.png" style="margin-top: 10px;"  />
			<?php } ?>
			<?php if ($template['seperatorImage'] != "") { ?>
				<img src="<?php echo $template['seperatorImage']; ?>" style="clear: both; display: block;"/>
			<?php } ?>
	</div>
		
	</div>
	
	<!-- FEATURES AREA -->
	
	<div id="featuresArea">
		
		<div class="featureBlock featureBlock_left">
			
			
			<?php if ($template['feature1Style'] == "text" || $template['feature1Style'] == "") { ?>
			
				<img src="<?php
				if($template['feature1ImageSmall'] == ""){ echo "http://dummyimage.com/140x120/eeeeee/242424.png&text=Your+Image+Here+1";} else {echo $template['feature1ImageSmall'];}  
				?>" class="<?php if($template['featureCSS'] == "" ){ echo "fullshadow"; } else {echo $template['featureCSS'];} ?>" style="width: 140px; height: 120px;" align="left" />
				<h2 style="color: #<?php if($template['featureHeadlineColor'] == ""){ echo "333"; } else { echo $template['featureHeadlineColor'];} ?>;" >
				<?php
				if($template['feature1Headline']== ""){ echo "Feature Headline #1";} else {echo $template['feature1Headline'];}  
				?>
				</h2>
				<p style="color: #<?php if($template['featureTextColor'] == ""){ echo "757575"; } else { echo $template['featureTextColor'];} ?>;">
				<?php
				if($template['feature1Text']== ""){ echo "Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";} else {echo stripslashes($template['feature1Text']);}  
				?>
				</p>
			
			<?php } if ($template['feature1Style'] == "image") { ?>
				<img src="<?php echo $template['feature1Image']; ?>" alt="">
			<?php } ?>
			
	
			
		</div>
		
		<div class="featureBlock featureBlock_right">
			
			<?php if ($template['feature2Style'] == "text" || $template['feature2Style'] == "") { ?>
			
				<img src="<?php
				if($template['feature2ImageSmall'] == ""){ echo "http://dummyimage.com/140x120/eeeeee/242424.png&text=Your+Image+Here+2";} else {echo $template['feature2ImageSmall'];}  
				?>" class="<?php if($template['featureCSS'] == "" ){ echo "fullshadow"; } else {echo $template['featureCSS'];} ?>" style="width: 140px; height: 120px;" align="left" />
				<h2 style="color: #<?php if($template['featureHeadlineColor'] == ""){ echo "333"; } else { echo $template['featureHeadlineColor'];} ?>;">
				<?php
				if($template['feature2Headline']== ""){ echo "Feature Headline #2";} else {echo $template['feature2Headline'];}  
				?>
				</h2>
				<p style="color: #<?php if($template['featureTextColor'] == ""){ echo "757575"; } else { echo $template['featureTextColor'];} ?>;">
				<?php
				if($template['feature2Text']== ""){ echo "Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";} else {echo stripslashes($template['feature2Text']);}  
				?>
				</p>
			<?php } if ($template['feature2Style'] == "image") { ?>
				<img src="<?php echo $template['feature2Image']; ?>" alt="">
			<?php } ?>
			
		
			
		</div>
		<br clear="all">
		<div class="featureBlock featureBlock_left">
			
			<?php if ($template['feature3Style'] == "text" || $template['feature3Style'] == "") { ?>
			
				<img src="<?php
				if($template['feature3ImageSmall'] == ""){ echo "http://dummyimage.com/140x120/eeeeee/242424.png&text=Your+Image+Here+3";} else {echo $template['feature3ImageSmall'];}  
				?>" class="<?php if($template['featureCSS'] == "" ){ echo "fullshadow"; } else {echo $template['featureCSS'];} ?>" style="width: 140px; height: 120px;" align="left" />
				<h2 style="color: #<?php if($template['featureHeadlineColor'] == ""){ echo "333"; } else { echo $template['featureHeadlineColor'];} ?>;">
				<?php
				if($template['feature3Headline']== ""){ echo "Feature Headline #3";} else {echo $template['feature3Headline'];}  
				?>
				</h2>
				<p style="color: #<?php if($template['featureTextColor'] == ""){ echo "757575"; } else { echo $template['featureTextColor'];} ?>;" >
				<?php
				if($template['feature3Text']== ""){ echo "Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";} else {echo stripslashes($template['feature3Text']);}  
				?>
				</p>
			<?php } if ($template['feature3Style'] == "image") { ?>
				<img src="<?php echo $template['feature3Image']; ?>" alt="">
			<?php } ?>
			
			
			
		</div>
		
		<div class="featureBlock featureBlock_right">
			
			<?php if ($template['feature4Style'] == "text" || $template['feature4Style'] == "") { ?>
			
				<img src="<?php
				if($template['feature4ImageSmall'] == ""){ echo "http://dummyimage.com/140x120/eeeeee/242424.png&text=Your+Image+Here+4";} else {echo $template['feature4ImageSmall'];}  
				?>" class="<?php if($template['featureCSS'] == "" ){ echo "fullshadow"; } else {echo $template['featureCSS'];} ?>" style="width: 140px; height: 120px;" align="left" />
				<h2 style="color: #<?php if($template['featureHeadlineColor'] == ""){ echo "333"; } else { echo $template['featureHeadlineColor'];} ?>;">
				<?php
				if($template['feature4Headline']== ""){ echo "Feature Headline #4";} else {echo $template['feature4Headline'];}  
				?>
				</h2>
				<p style="color: #<?php if($template['featureTextColor'] == ""){ echo "757575"; } else { echo $template['featureTextColor'];} ?>;" >
				<?php
				if($template['feature4Text']== ""){ echo "Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";} else {echo stripslashes($template['feature4Text']);}  
				?>
				</p>
			<?php } if ($template['feature4Style'] == "image") { ?>
				<img src="<?php echo $template['feature4Image']; ?>" alt="">
			<?php } ?>
			
			
			
		</div>
		
		<!-- CLEAR - w/ SECOND SEPARATOR -->
		<div class="clearms">
		<?php if ($template['seperatorStyle'] != ""  && $template['seperatorImage'] == "") { ?>
				<img src="images/<?php echo $template['seperatorStyle']; ?>.png" style="margin-top: 50px;" />
			<?php } if ($template['seperatorStyle'] == ""  && $template['seperatorImage'] == "") { ?>
				<img src="images/sep_1.png" style="margin-top: 50px;"  />
			<?php } ?>
			<?php if ($template['seperatorImage'] != "") { ?>
				<img src="<?php echo $template['seperatorImage']; ?>" style="clear: both; display: block; margin-top: 50px;float: left;"/>
				<br clear="all">
			<?php } ?>
	</div>
		
	</div>
	
	<!-- TESTIMONIAL AREA -->
	
	<div id="testimonialArea">
		
			<?php if ($template['customContent'] != "") { ?>
				<?php echo stripslashes($template['customContent']); ?>
			<?php } ?>
			<?php if ($template['customContent'] == "") { ?>
				<center>
					<h1>Add Your Custom Content</h1>
					<h4>This block is for your own custom content using the WYSIWYG text-editor</h4>
				</center>
			<?php } ?>
		
	</div>
	
	<!-- CLEAR - w/ THIRD SEPARATOR -->
	
	<div class="clearms">
		<?php if ($template['seperatorStyle'] != ""  && $template['seperatorImage'] == "") { ?>
				<img src="images/<?php echo $template['seperatorStyle']; ?>.png"  />
			<?php } if ($template['seperatorStyle'] == ""  && $template['seperatorImage'] == "") { ?>
				<img src="images/sep_1.png"   />
			<?php } ?>
			<?php if ($template['seperatorImage'] != "") { ?>
				<img src="<?php echo $template['seperatorImage']; ?>" style="clear: both; display: block;"/>
			<?php } ?>
	</div>
	
	<div style="padding-top: 40px;float: right; margin: 5px;">
		<?php if ($template['email'] != "") { ?>
			<a href="mailto:<?php echo $template['email']; ?>" target="_blank" style="float: right; margin: 5px;"><img src="http://cdn3.iconfinder.com/data/icons/socialnetworking/32/email.png" alt=""></a>
		<?php } ?>
		<?php if ($template['linkedin'] != "") { ?>
			<a href="<?php echo $template['linkedin']; ?>" target="_blank" style="float: right; margin: 5px;"><img src="http://cdn3.iconfinder.com/data/icons/socialmediabookmark/32/linkedin.png" alt=""></a>
		<?php } ?>
		<?php if ($template['youtube'] != "") { ?>
			<a href="<?php echo $template['youtube']; ?>" target="_blank" style="float: right; margin: 5px;"><img src="http://cdn3.iconfinder.com/data/icons/socialmediabookmark/32/youtube.png" alt=""></a>
		<?php } ?>
		<?php if ($template['facebook'] != "") { ?>
			<a href="<?php echo $template['facebook']; ?>" target="_blank" style="float: right; margin: 5px;"><img src="http://cdn3.iconfinder.com/data/icons/socialmediabookmark/32/facebook.png" alt=""></a>
		<?php } ?>
		<?php if ($template['twitter'] != "") { ?>
			<a href="<?php echo $template['twitter']; ?>" target="_blank" style="float: right; margin: 5px;"><img src="http://cdn3.iconfinder.com/data/icons/socialmediabookmark/32/twitter.png" alt=""></a>
		<?php } ?>
		<?php if ($template['googleMaps'] != "") { ?>
			<a href="<?php echo $template['googleMaps']; ?>" target="_blank" style="float: right; margin: 5px;"><img src="http://cdn4.iconfinder.com/data/icons/Classy_Social_Media_Icons/32/map.png" alt=""></a>
		<?php } ?>
		
	</div>
	
	<div style="margin-top: 30px;">
	<?php if ($template['logoStyle'] == "text") { ?>
		<h1 class="lfwp_LogoText"><?php echo stripslashes($template['logoHeadline']); ?></h1>
		<h4 class="lfwp_subLogoText"><?php echo stripslashes($template['logoSubHeadline']); ?></h4>
	<?php } if ($template['logoStyle'] == "image") { ?>
		<img src="<?php echo $template['logoImageURL']; ?>" alt="">
	<?php } ?>
	
	<?php if ($template['logoStyle'] == "") { ?>
		<h1>WP Local Fusion</h1>
		<h4>Customize this text inside dashboard</h4>
	<?php } ?>
	
	</div>
	
	<br clear="all"><br>
	
	<footer style="border-top: 1px solid #ddd;padding-top: 20px; clear: both;">
		
		<?php if($template['siteFooter'] != ""){ echo stripslashes($template['siteFooter']);} else { ?> 
		
		<center><p>Copyright &copy; 2012 - <strong>Your Company - Something</strong> - All Rights Reserved</p></center>
		
		<?php } ?>
		<br><br><br>
	</footer>
</div>	
<?php } ?>
<!--EOA - MAIN WRAPPER-->	

<?php
	$client = $_GET['client'];
 	if (!isset($_COOKIE['trackingCodez-'.$client])) {
        
        global $post;
		global $wpdb;
		$getOptin = get_post_meta( $post->ID, 'rndNumber', true );
		$table_db_name = $wpdb->prefix . "wpleadmachineClients";
		$templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$client'",ARRAY_A);
	
		foreach($templates as $template) { } 

 		$table_db_name = $wpdb->prefix . "wpleadmachineClients";
 		$tracked = $template['tracked'] + 1;
 		$wpdb->update($table_db_name, 
        array( 
	     'tracked' => $tracked
	      ),
	      array( 'name' => $_GET['client'] )
		);
		$clientNew = str_replace(' ', '_', $client);
		//setcookie("trackingCodez-$clientNew", $client );
    }
?>
	
	<?php wp_footer(); ?>
	
</body>
</html>