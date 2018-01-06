<?php 

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbcxrxBTNs";
	$ID = $_GET['btn'];
	$lead_data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	foreach ( $lead_data as $lead_data ) {}
	
	$btnname = "";
	$redirect = "";
	$btn = "";
	$btncustom = "";
	$fbid = "";
	$fbsecret = "";
	$arcode = "";
	$arname = "";
	$aremail = "";
	$arform = "";
	$arhidden = "";

	if(isset($_POST['submit'])){
		
		// Save Edit Changes
		
		$wpdb->update($table_db_name, 
		array( 
		 'btnname' => stripcslashes($_POST['btnname']),
		 'redirect' => stripcslashes($_POST['redirect']),
		 'btn' => stripcslashes($_POST['btn']),
		 'btncustom' => stripcslashes($_POST['btncustom']),
		 'fbid' => stripcslashes($_POST['fbid']),
		 'fbsecret' => stripcslashes($_POST['fbsecret']),
		 'arcode' => stripcslashes($_POST['arcode']),
		 'arname' => stripcslashes($_POST['arname']),
		 'aremail' => stripcslashes($_POST['aremail']),
		 'arform' => stripcslashes($_POST['arform']),
		 'arhidden' => stripcslashes($_POST['arhidden'])
		),
		  array( 'id' => $ID )
		);
		
		// Show notice
		
		echo '<div id="notice" class="updated fade" style="width:530px; margin-left:8px; margin-top:15px; margin-bottom:-10px;" ><p><b>Button Changes Saved...</b></p></div>';
		
		// Set new variables
		
		$btnname = $_POST['btnname'];
		$redirect = $_POST['redirect'];
		$btn = $_POST['btn'];
		$btncustom = $_POST['btncustom'];
		$fbid = $_POST['fbid'];
		$fbsecret = $_POST['fbsecret'];
		$arcode = $_POST['arcode'];
		$arname = $_POST['arname'];
		$aremail = $_POST['aremail'];
		$arform = $_POST['arform'];
		$arhidden = $_POST['arhidden'];
		
		
	} else {
		
		$btnname = $lead_data->btnname;
		$redirect = $lead_data->redirect;
		$btn = $lead_data->btn;
		$btncustom = $lead_data->btncustom;
		$fbid = $lead_data->fbid;
		$fbsecret = $lead_data->fbsecret;
		$arcode = $lead_data->arcode;
		$arname = $lead_data->arname;
		$aremail = $lead_data->aremail;
		$arform = $lead_data->arform;
		$arhidden = $lead_data->arhidden;
	
	}

?>
<div style="margin-top: 10px; margin-left: 10px;">

<h2>Edit Button: <b><?php echo $btnname; ?></b></h2>
<span>This button was created: <?php echo $lead_data->date; ?></span>

<div class="alertJS" style="margin-top: 15px;">

 <span style="font-size: 16px;"><b>Button Code:</b></span><Br>
 <span>Copy & paste this code to display the FB Connect button:</span>
 <input type="text" value="<script src='<?php echo site_url() ?>/wp-content/plugins/fbconnectrpro/inc/fbtn.php?id=<?php echo $ID; ?>'></script>" class="xfield" readonly="" style="background-color: #FFF !important;" >
<div class="fieldSplitter"></div>

<span><b><a class="button-primary" href="<?php echo site_url() ?>/wp-content/plugins/fbconnectrpro/test.php?id=<?php echo $ID; ?>" target="_blank" >Preview Button</a></b></span>

</div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ."?page=fbcrx-dashboard&tab=display_campaigns&action_btn=edit&btn=$ID"; ?>">

<div class="wellTitle">Main Settings</div>

<div class="wellx" style="margin-top: 20px;">

	<span class="fieldTitle">Button Name:</span>
	<span>This is just for your own organization of buttons...</span>
	<input name="btnname" type="text" value="<?php echo $btnname; ?>" class="xfield">
	
	<div class="fieldSplitter"></div>

	<span class="fieldTitle" >Redirect URL:</span>
	<span>This is where they are taken after they connect with Facebook...</span>
	<input name="redirect" type="text" value="<?php echo $redirect; ?>" class="xfield">
	<br><br>
	<span style="color: grey; font-size: 10px;">* If you are using the Auto-Responder Integration - you will have to set the redirect URL inside of your AR program settings, IE. if you are using Aweber, you need to set up the redirect URL inside of Aweber...</span>

</div>

<div class="wellTitle2">Button Style Settings</div>

<div class="wellx" style="margin-top: 20px;">

	<span class="fieldTitle">Button Image Style:</span>
	<span>Choose the style of button, or add your own button image...</span>
	
	<script type="text/javascript">
	$(document).ready(function() {
	
		$("#btnStyle option[value='<?php echo $btn; ?>']").attr('selected', 'selected');	
	
	});
	</script>
	
	<select name="btn" class="xfield" id="btnStyle">
		<option value="1" >Blue Classic "Connect With Facebook"</option>
		<option value="2" >Big Blue "Sign In w/ Facebook - Instant Access" </option>
		<option value="3" >Soft Blue "Sign In With Facebook" </option>
		<option value="4" >Custom URL</option>
	</select>
	
	<div id="customBTN" style="display: <?php if($btn == "4"){ echo "block"; } else { echo "none"; } ?>;">
	<div class="fieldSplitter"></div>
	
	<span class="fieldTitle">Custom Button URL:</span>
	<span>This needs to be the full path to the button, ie. http://yoursite.com/button.png</span>
	<input name="btncustom" type="text" value="<?php echo $btncustom; ?>" class="xfield">
	</div>
	
</div>

<div class="wellTitle2">Facebook App Settings</div>

<div class="wellx" style="margin-top: 20px;">

	<span class="fieldTitle">FB App ID:</span>
	<span>This is the Facebook app ID you get when you create an app...</span>
	
	<input name="fbid" type="text" value="<?php echo $fbid; ?>" class="xfield">
	
	<div class="fieldSplitter"></div>
	
	<span class="fieldTitle">FB App Secret Code:</span>
	<span>This is the Facebook app secret code you get when you create an app...</span>
	
	<input name="fbsecret" type="text" value="<?php echo $fbsecret; ?>" class="xfield">
	
	<div class="fieldSplitter"></div>
	
	<span><b><a href="<?php echo site_url(); ?>/wp-content/plugins/fbconnectrpro/guides/fbconnect.pdf" target="_blank" >Read FB App Setup Guide .PDF </a></b></span>
	<br><br>
	<span style="color: grey; font-size: 10px;">* If you need help creating the FB app, its important you read the PDF guide above...</span>
	
</div>

<div class="wellTitle2">AR Integration Settings</div>

<div class="wellx" style="margin-top: 20px;">

	<span class="fieldTitle">Auto-Responder Web Form Code:</span>
	<span>Paste in your web form code here and automatically it will integrate the code...</span>

	<textarea class="xfield" style="height: 150px;" name="arcode" id="arcode" ><?php echo stripslashes($arcode); ?></textarea>	
	
	<div class="fieldSplitter"></div>
	
	<span class="fieldTitle">Name Field:</span>
	<span>This will be the field where the full name is captured...</span>
	
	<input name="arname" type="text" value="<?php echo $arname; ?>" id="arname" class="xfield">
	
	<div class="fieldSplitter"></div>
	
	<span class="fieldTitle">Email Field:</span>
	<span>This will be the field where the email addressed is captured...</span>
	
	<input name="aremail" type="text" value="<?php echo $aremail; ?>" id="aremail" class="xfield">
	
	<div class="fieldSplitter"></div>
	
	<span class="fieldTitle">Form POST URL:</span>
	<span>This will be the URL of where the form will post too ( for advance users )...</span>
	
	<input name="arform" type="text" value="<?php echo $arform; ?>" id="arform" class="xfield">
	
	<div class="fieldSplitter"></div>
	
	<span class="fieldTitle">Hidden Fields:</span>
	<span>This will be the hidden fields ( for advance users )...</span>
		
	<textarea class="xfield" style="height: 100px;" name="arhidden" id="arhidden"  ><?php echo stripslashes($arhidden); ?></textarea>
	
	<div class="fieldSplitter"></div>
	
	<span><b><a href="<?php echo site_url(); ?>/wp-content/plugins/fbconnectrpro/guides/ar.pdf" target="_blank" >Read AR Integration Setup Guide .PDF </a></b></span>
	<br><br>
	<span style="color: grey; font-size: 10px;">* If you do not want to use AR integration, leave the web form code area blank, and it's important to note that if you are using AR integration, it WILL override the redirect URL settings above...</span>
	
					<div id="arcode_debug">
					
						<div id="arcode_hdn_div"></div>
					
						<div id="arcode_hdn_div2"></div>
					
					 </div>	
	
</div>

<input type="submit" name="submit" value="Save Button Changes" class="button-primary" />

</form>

</div>