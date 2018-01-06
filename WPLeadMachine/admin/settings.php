<?php 

error_reporting(E_ERROR);

$curUrl = '../wp-content/plugins/WPLeadMachine';  ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/jquery.php'); ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/styles.php'); ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/styles_btn.php'); ?>


<?php 	if($_POST['plugin_hidden'] == 'newClient') {
		
		$prettyURL = $_POST['prettyURL'];
		
		$emailEmail = $_POST['emailEmail'];
		$emailName = $_POST['emailName'];
		$sendGridEmail = $_POST['sendGridEmail'];
		$sendGridPassword = $_POST['sendGridPassword'];
		$twilioID = $_POST['twilioID'];
		$twilioAuth = $_POST['twilioAuth'];
		$twilioNumber = $_POST['twilioNumber'];
		
		update_settings($prettyURL, $emailName, $emailEmail, $sendGridEmail, $sendGridPassword, $twilioID, $twilioAuth, $twilioNumber);
		
		
?>
	    
    
 <div class="alert alert-success" style="width: 300px;margin-top: 25px; margin-right: 2%">
    <a class="close" data-dismiss="alert">x</a>
    <strong>Successfully Updated Settings</strong>
    </div>

<?php } ?>

		<?php 
		
		 
			  global $post;
			  global $wpdb;
			  $table_db_name = $wpdb->prefix . "wpleadmachineSettings";
			  $templates = $wpdb->get_results("SELECT * FROM $table_db_name",ARRAY_A);
	
			  $tpl = get_post_meta($post->ID,'_template',true);
			
			
				
        ?>
	    <?php
	       foreach($templates as $template)
				{
					?>
								
					<?php
				} ?>


<form id="webinar_form" name="plugin_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	
	<input type="hidden" name="plugin_hidden" value="newClient">
	<div id="topBar">
		<h1 class="settings">Settings</h1>
		
	</div>
	
	<div id="formBox">
			<div class="columnBox emailSettings " style=" width: 75% !important; margin-left: 8%; margin-top: 25px;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon20.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Pretty URL Settings:</h2>
									<h4 style="margin-top: -12px;"  >Turn off and pretty URLs on landing pages:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
			
			<div class="fieldarea">
			<span class="fieldtitle">Pretty URL Switch:</span>
			<span class="fielddesc">Switch pretty URLs off and ons...</span>
			<br>
			<select name="prettyURL" id="featureCSS">
				<option <?php if($template['prettyURL'] == 'off') { ?>selected<?php } ?> value="off">OFF</option>
				<option <?php if($template['prettyURL'] == 'on') { ?>selected<?php } ?> value="on">ON</option>
			</select>
			
			<span class="fielddesc" style="font-size: 11px;"> ** This only works if mod_rewrite works on your hosting...<Br> An easy way to find out is if you are able to use pretty permalinks on your blog, if you can, then pretty URL's with this plugin will work too.<br><br>
			 ** Viewing your landing page will show the non-pretty URL <b>until you edit the Pretty SLUG inside of your page settings...</b> </span>
			
			</div>
			
			
			
			
			
			<br clear="all">
			</div>
			<br clear="all">
		</div>
			<div class="columnBox emailSettings " style=" width: 75% !important; margin-left: 8%; margin-top: -5px;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									<a href="http://www.sendgrid.com/" target="_blank"><img src="<?php echo $imagePath; ?>/images/sendgrid.png" style="float: right;margin-top: 5px; border: none;"></a>
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon16.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">SendGrid Account Settings:</h2>
									<h4 style="margin-top: -12px;"  >Connect your WP Local Fusion to SendGrid to send email notifications:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
			
			<div class="fieldarea">
			<span class="fieldtitle">Login Email:</span>
			<span class="fielddesc">Your Email Address for SendGrid account</span>
			<input type="text" name="sendGridEmail" value="<?php echo $template['sendGridEmail']; ?>" >
			</div>
			
			
			
			<div class="fieldarea">
			<span class="fieldtitle">Login Password:</span>
			<span class="fielddesc">Password for your SendGrid account</span>
			<input type="text" name="sendGridPassword" value="<?php echo $template['sendGridPassword']; ?>"  >
			</div>
			
			<hr>
			
			<div class="fieldarea">
			<span class="fieldtitle">FROM Name:</span>
			<span class="fielddesc">This would be your name, or company name...</span>
			<input type="text" name="emailName" value="<?php echo $template['emailName']; ?>">
			</div>
			
			
			
			<div class="fieldarea">
			<span class="fieldtitle">FROM Email:</span>
			<span class="fielddesc">Will be shown as From: email on all notifications</span>
			<input type="text" name="emailEmail" value="<?php echo $template['emailEmail']; ?>" >
			</div>
			
			<br clear="all">
			</div>
			<br clear="all">
		</div>
			<div class="columnBox emailSettings " style=" width: 75% !important; margin-left: 8%; margin-top: 25px;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									<a href="http://www.twilio.com/" target="_blank"><img src="<?php echo $imagePath; ?>/images/sms.png" style="float: right;margin-top: 5px; border: none;"></a>
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon18.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Twilio Account Settings:</h2>
									<h4 style="margin-top: -12px;"  >Connect your WP Local Fusion to Twilio to send SMS text message notifications:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
			<?php if (_iscurlinstalled()) {
				?>
					<div class="fieldarea">
			<span class="fieldtitle">Account ID:</span>
			<span class="fielddesc">This is given inside your Twilio dashboard.</span>
			<input type="text" name="twilioID" value="<?php echo $template['twilioID']; ?>" >
			</div>
			
			
			
			<div class="fieldarea">
			<span class="fieldtitle">Auth Token:</span>
			<span class="fielddesc">This is given inside your Twilio dashboard.</span>
			<input type="text" name="twilioAuth" value="<?php echo $template['twilioAuth']; ?>"  >
			</div>
			
			<div class="fieldarea">
			<span class="fieldtitle">Twilio Number:</span>
			<span class="fielddesc">This is given inside your Twilio dashboard.</span>
			<input type="text" name="twilioNumber" value="<?php echo $template['twilioNumber']; ?>"  >
			</div>
				<?php
				}  else {
					?>
					
					<div class="alert alert-danger" style="width: 500px;margin-top: 25px; margin-right: 2%">
   
    <strong>curl is NOT installed (please contact hosting admin to activate)</strong>
    </div>	
					
					<?php
					}; ?>
			
			
			
			<br clear="all">
			</div>
			<br clear="all">
		</div>
	</div>
	<br clear="all" >
	<div id="topBar">
		
		<a href="../wp-admin/admin.php?page=wplocalfusion&new=client" class=" saveClientBTN btn btn-success btn-large" style="text-decoration: none; float: right; margin-right: 10px; margin-top: 8px;">
		<img src="<?php echo $imagePath; ?>/images/saveicon.png" align="left" style="margin-right: 8px; margin-top: -4px;" > Save Settings</a>
	
	</div>
</form>

<br>
<p style="text-align: center">Copyright &copy; 2012 - <strong>WP Local Fusion</strong> - All Rights Reserved <br>The Ultimate Lead Capturing and Client Management Wordpress Plugin <br><small>Brought to You By <a href="#">AgencyScripts - Internet Marketing 2.0</a></small></p>