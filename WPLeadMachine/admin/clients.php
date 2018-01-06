<?php 
error_reporting(E_ERROR);
$curUrl = '../wp-content/plugins/WPLeadMachine';  ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/jquery.php'); ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/styles.php'); ?>
<?php include('../wp-content/plugins/WPLeadMachine/admin/styles_btn.php'); ?>

<?php 

// CHECK DB SETTINGS

global $wpdb;
$table_name = $wpdb->prefix . "wpleadmachineClients";
if($wpdb->get_var("show tables like '$table_name'") == $table_name) {
        //echo 'All good man!';
} else {
		echo "<div class='label label-important' id='createClientsDB' style='margin-top:30px; margin-right:25px; cursor:pointer;' >Clients Database Not Setup - Click Here To Create It!</div>";
}


?>


<?php 


		// check number of leads
		global $post;
		global $wpdb;
		$getOptin = get_post_meta( $post->ID, 'rndNumber', true );
		$table_db_name = $wpdb->prefix . "wpleadmachineLeads";
		$client = $_GET['client'];
		$templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE client = '$client'");
		$checkLeads = 0;
		foreach($templates as $template) { $checkLeads = $checkLeads + 1;  }
		
		
		
   function get_percentage($total, $number)
	{
	  if ( $total > 0 ) {
	   return round($number / ($total / 100), 0);
	  } else {
	    return 0;
	  }
	}
	if($_POST['plugin_hidden'] == 'newClient') {
		
		$name = html_entity_decode(stripslashes($_POST['name']));
		$description = $_POST['description'];
		$photo = $_POST['photo'];
		
		create_new_client($name, $description, $photo);
		
		
?>
	    
    
    <script type="text/javascript">
<!--
window.location = "../wp-admin/admin.php?page=wplocalfusion&client=<?php echo $_POST['name']; ?>"
//-->
</script>

<?php } ?>



<?php if ($_GET['new']) { ?>
<form id="webinar_form" name="plugin_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	
	<input type="hidden" name="plugin_hidden" value="newClient">
	<div id="topBar">
		<h1 class="newClient">Add New Client</h1>
		
	</div>
	
	<div id="formBox">
		<div class="columnBox emailSettings " style=" width: 75% !important; margin-left: 8%; margin-top: 25px;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon19.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Add New Client:</h2>
									<h4 style="margin-top: -12px;"  >Add new client campaign starting with basic information:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
			
			<div class="fieldarea">
			<span class="fieldtitle">Full Name: *</span>
			<span class="fielddesc">the full name of your client or project...</span>
			<input type="text" name="name" id="addclient_fullname">
			</div>
			
			
			
			<div class="fieldarea">
			<span class="fieldtitle">Short Description About Client: *</span>
			<span class="fielddesc">120 character business name or description of client or project...</span>
			<input type="text" name="description"  id="addclient_desc">
			</div>
			
			<div class="fieldarea">
			<span class="fieldtitle">Photo Of Client - URL:</span>
			<span class="fielddesc">a full URL ( http://... ) of a photo. Best results use 107x107 photo. </span>
			<input type="text" name="photo"  id="addclient_photo">
			</div>
			<br clear="all">
			</div>
			<br clear="all">
		</div>
	</div>
	<br clear="all" >
	<div id="topBar">
		
		<a href="../wp-admin/admin.php?page=wplocalfusion&new=client" class=" saveClientBTN btn btn-success btn-large" style="text-decoration: none; float: right; margin-right: 10px; margin-top: 8px;">
		<img src="<?php echo $imagePath; ?>/images/saveicon.png" align="left" style="margin-right: 8px; margin-top: -2px;" > Save New Client</a>
	
	</div>
</form>
<?php } ?>

<?php if ($_GET['client'] && $_GET['new'] == "") { ?>
	<script type="text/javascript">
			$(document).ready(function() {
		 		$('.leads').click(function() {
				   $('#tab1').fadeIn(); $('.leads').addClass('active');
				   
				   $('#tab2').hide(); $('.landingpages').removeClass('active');
				   $('#tab3').hide(); $('.notifications').removeClass('active');
				   $('#tab4').hide(); $('.reports').removeClass('active');
				});
				
				$('.landingpages').click(function() {
				   $('#tab2').fadeIn(); $('.landingpages').addClass('active');
				   
				   $('#tab1').hide(); $('.leads').removeClass('active');
				   $('#tab3').hide(); $('.notifications').removeClass('active');
				   $('#tab4').hide(); $('.reports').removeClass('active');
				});
				
				$('.notifications').click(function() {
				   $('#tab3').fadeIn(); $('.notifications').addClass('active');
				   
				   $('#tab2').hide(); $('.landingpages').removeClass('active');
				   $('#tab1').hide(); $('.leads').removeClass('active');
				   $('#tab4').hide(); $('.reports').removeClass('active');
				});
				
				$('.reports').click(function() {
				   $('#tab4').fadeIn(); $('.reports').addClass('active');
				   
				   $('#tab2').hide(); $('.landingpages').removeClass('active');
				   $('#tab3').hide(); $('.notifications').removeClass('active');
				   $('#tab1').hide(); $('.leads').removeClass('active');
				});
				
				  if($('#logoStyle').val() == 'text'){
				  	$('.logoImage').hide();
				    $('.logoText').fadeIn();
				  }
				  if($('#logoStyle').val() == 'image'){
				    $('.logoText').hide();
				    $('.logoImage').fadeIn();
				  }
				   if($('#ctaStyle').val() == 'text'){
				  	$('.ctaImage').hide();
				    $('.ctaText').fadeIn();
				  }
				  if($('#ctaStyle').val() == 'image'){
				    $('.ctaText').hide();
				    $('.ctaImage').fadeIn();
				  }
				  if($('#headlineStyle').val() == 'text'){
				  	$('.displayImage').hide();
				    $('.displayHeadline').fadeIn();
				  }
				  if($('#headlineStyle').val() == 'image'){
				    $('.displayHeadline').hide();
				    $('.displayImage').fadeIn();
				  }
				  if($('#videoStyle').val() == 'video'){
				  	$('.displayVideoImage').hide();
				    $('.displayVideo').fadeIn();
				  }
				  if($('#videoStyle').val() == 'image'){
				    $('.displayVideo').hide();
				    $('.displayVideoImage').fadeIn();
				  }
				   if($('#subHeadlineStyle').val() == 'text'){
				  	$('.displaySubHeadlineImage').hide();
				    $('.displaySubHeadlineText').fadeIn();
				  }
				  if($('#subHeadlineStyle').val() == 'image'){
				    $('.displaySubHeadlineText').hide();
				    $('.displaySubHeadlineImage').fadeIn();
				  }
				  
				  if($('#feature1Style').val() == 'text'){
				  	$('.feature1Image').hide();
				    $('.feature1Text').fadeIn();
				  }
				  if($('#feature1Style').val() == 'image'){
				    $('.feature1Text').hide();
				    $('.feature1Image').fadeIn();
				  }
				  
				   if($('#feature2Style').val() == 'text'){
				  	$('.feature2Image').hide();
				    $('.feature2Text').fadeIn();
				  }
				  if($('#feature2Style').val() == 'image'){
				    $('.feature2Text').hide();
				    $('.feature2Image').fadeIn();
				  }
				   if($('#feature3Style').val() == 'text'){
				  	$('.feature3Image').hide();
				    $('.feature3Text').fadeIn();
				  }
				  if($('#feature3Style').val() == 'image'){
				    $('.feature3Text').hide();
				    $('.feature3Image').fadeIn();
				  }
				  
				   if($('#feature4Style').val() == 'text'){
				  	$('.feature4Image').hide();
				    $('.feature4Text').fadeIn();
				  }
				  if($('#feature4Style').val() == 'image'){
				    $('.feature4Text').hide();
				    $('.feature4Image').fadeIn();
				  }
				  if($('#selectBGStyle').val() == 'premade'){
				  	$('.showBGCustom').hide();
				    $('.showBGPremade').fadeIn();
				  }
				  if($('#selectBGStyle').val() == 'custom'){
				    $('.showBGPremade').hide();
				    $('.showBGCustom').fadeIn();
				  }
				  
				  if($('#quoteStyle').val() == 'text'){
				  	$('.quoteImage').hide();
				    $('.quoteText').fadeIn();
				  }
				  if($('#quoteStyle').val() == 'image'){
				    $('.quoteText').hide();
				    $('.quoteImage').fadeIn();
				  }

				$('#logoStyle').change(function(){
				  if($(this).val() == 'text'){
				  	$('.logoImage').hide();
				    $('.logoText').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.logoText').hide();
				    $('.logoImage').fadeIn();
				  }
				});
				
				$('#ctaStyle').change(function(){
				  if($(this).val() == 'text'){
				  	$('.ctaImage').hide();
				    $('.ctaText').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.ctaText').hide();
				    $('.ctaImage').fadeIn();
				  }
				});
				
				$('#headlineStyle').change(function(){
				  if($(this).val() == 'text'){
				  	$('.displayImage').hide();
				    $('.displayHeadline').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.displayHeadline').hide();
				    $('.displayImage').fadeIn();
				  }
				});
				
				$('#videoStyle').change(function(){
				  if($(this).val() == 'video'){
				  	$('.displayVideoImage').hide();
				    $('.displayVideo').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.displayVideo').hide();
				    $('.displayVideoImage').fadeIn();
				  }
				});
				
				$('#subHeadlineStyle').change(function(){
				  if($(this).val() == 'text'){
				  	$('.displaySubHeadlineImage').hide();
				    $('.displaySubHeadlineText').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.displaySubHeadlineText').hide();
				    $('.displaySubHeadlineImage').fadeIn();
				  }
				});
				
				$('#feature1Style').change(function(){
				  if($(this).val() == 'text'){
				  	$('.feature1Image').hide();
				    $('.feature1Text').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.feature1Text').hide();
				    $('.feature1Image').fadeIn();
				  }
				});
				
				$('#feature2Style').change(function(){
				  if($(this).val() == 'text'){
				  	$('.feature2Image').hide();
				    $('.feature2Text').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.feature2Text').hide();
				    $('.feature2Image').fadeIn();
				  }
				});
				
				$('#feature3Style').change(function(){
				  if($(this).val() == 'text'){
				  	$('.feature3Image').hide();
				    $('.feature3Text').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.feature3Text').hide();
				    $('.feature3Image').fadeIn();
				  }
				});
				
				$('#feature4Style').change(function(){
				  if($(this).val() == 'text'){
				  	$('.feature4Image').hide();
				    $('.feature4Text').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.feature4Text').hide();
				    $('.feature4Image').fadeIn();
				  }
				});
				
				$('#quoteStyle').change(function(){
				  if($(this).val() == 'text'){
				  	$('.quoteImage').hide();
				    $('.quoteText').fadeIn();
				  }
				  if($(this).val() == 'image'){
				    $('.quoteText').hide();
				    $('.quoteImage').fadeIn();
				  }
				});
				
				$('#selectBGStyle').change(function(){
				  if($(this).val() == 'premade'){
				  	$('.showBGCustom').hide();
				    $('.showBGPremade').fadeIn();
				  }
				  if($(this).val() == 'custom'){
				    $('.showBGPremade').hide();
				    $('.showBGCustom').fadeIn();
				  }
				});
				
				$('.lpmenu_item').click(function() {
				  
				  	$getLP_item = $(this).attr("lpmenu_name");
				  
				  	$(".lpmenu_item").removeClass('lpmenu_current');
				  	$(this).addClass("lpmenu_current");
				  
				  	$(".lpedit_box").hide();
				  	
				    $('.'+$getLP_item+'').fadeIn();
					
					return false;
					
				});
				
				$('.lpmenu_item1').click(function() {
				  
				  	$getLP_item = $(this).attr("lpmenu_name1");
				  
				  	$(".lpmenu_item1").removeClass('lpmenu_current1');
				  	$(this).addClass("lpmenu_current1");
				  
				  	$(".lpedit_box1").hide();
				  	
				    $('.'+$getLP_item+'').fadeIn();
					
					return false;
					
				});
				
				
				$('#clientSave').click(function() {
				  $('#formSave').submit();
				});
				
//				if( $(window).width() > 1080)
//				{
//				  $('.columnBox').addClass('larger');
//				} 
//				
//				if( $(window).width() < 1080)
//				{
//				  $('.columnBox').removeClass('larger');	
//				  $('.columnBox').addClass('smaller');
//				} 
				
				$('.dropdown-menu').dropdown();
			
			});


	</script>
	<div class="wrapper-plugin clearfix">
		<div id="headerArea">
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
					
								<div id="logoArea">
									<h1><img class="logoareaCD" src="<?php echo $imagePath; ?>/images/clientdashboard.png" /></h1>
										<img src="<?php echo $template['photo']; ?>" class="clientImage">
										<div id="clientName">
											<h2><?php echo $template['name']; ?></h2>
											<h4 class="clientdesc"><?php echo $template['description']; ?></h4>
											
<?php 
	
	if($_POST['plugin_hidden'] == 'saveLandingPage') {
		
		
		
		
		$logoHeadline = $_POST['logoHeadline'];
		$logoSubHeadline = $_POST['logoSubHeadline'];
		$logoStyle = $_POST['logoStyle'];
		$logoImageURL = $_POST['logoImageURL'];
		
		$ctaHeadline = $_POST['ctaHeadline'];
		$ctaSubHeadline = $_POST['ctaSubHeadline'];
		$ctaStyle = $_POST['ctaStyle'];
		$ctaImageURL = $_POST['ctaImageURL'];
		
		$headlineText = $_POST['headlineText'];
		$headlineImageURL = $_POST['headlineImageURL'];
		$headlineStyle = $_POST['headlineStyle'];
		
		$videoCode = html_entity_decode(stripslashes($_POST['videoCode']));
		$videoImageURL = $_POST['videoImageURL'];
		$videoStyle = $_POST['videoStyle'];
		
		$subHeadlineText = $_POST['subHeadlineText'];
		$subHeadlineImage = $_POST['subHeadlineImage'];
		$subHeadlineStyle = $_POST['subHeadlineStyle'];
		
		$featureCSS = $_POST['featureCSS'];
		
		$feature1Text = $_POST['feature1Text'];
		$feature1Headline = $_POST['feature1Headline'];
		$feature1ImageSmall = $_POST['feature1ImageSmall'];
		$feature1Image = $_POST['feature1Image'];
		$feature1Style = $_POST['feature1Style'];
		
		$feature2Text = $_POST['feature2Text'];
		$feature2Headline = $_POST['feature2Headline'];
		$feature2ImageSmall = $_POST['feature2ImageSmall'];
		$feature2Image = $_POST['feature2Image'];
		$feature2Style = $_POST['feature2Style'];
		
		$feature3Text = $_POST['feature3Text'];
		$feature3Headline = $_POST['feature3Headline'];
		$feature3ImageSmall = $_POST['feature3ImageSmall'];
		$feature3Image = $_POST['feature3Image'];
		$feature3Style = $_POST['feature3Style'];
		
		$feature4Text = $_POST['feature4Text'];
		$feature4Headline = $_POST['feature4Headline'];
		$feature4ImageSmall = $_POST['feature4ImageSmall'];
		$feature4Image = $_POST['feature4Image'];
		$feature4Style = $_POST['feature4Style'];
		
		$customContent = $_POST['customContent'];
		$thankYou = $_POST['thankYou'];
		$thankyouHeadline = $_POST['thankyouHeadline'];
		
		$facebook = $_POST['facebook'];
		$twitter = $_POST['twitter'];
		$youtube = $_POST['youtube'];
		$googleMaps = $_POST['googleMaps'];
		$email = $_POST['email'];
		$linkedin = $_POST['linkedin'];
		
		$optinStyle = $_POST['optinStyle'];
		$optinHeadline = $_POST['optinHeadline'];
		$buttonStyle = $_POST['buttonStyle'];
		$buttonText = $_POST['buttonText'];
		$buttonCustom = $_POST['buttonCustom'];
		$namePlaceholder = $_POST['namePlaceholder'];
		$emailPlaceholder = $_POST['emailPlaceholder'];
		$phonePlaceholder = $_POST['phonePlaceholder'];
		$optinContent = $_POST['optinContent'];
		$optinSpam = $_POST['optinSpam'];
		
		$bgStyle = $_POST['bgStyle'];
		$customBG = $_POST['customBG'];
		$selectBGStyle = $_POST['selectBGStyle'];
		
		$seperatorStyle = $_POST['seperatorStyle'];
		$seperatorImage = $_POST['seperatorImage'];
		
		$checkLeads = $_POST['checkLeads'];
		
		$ar_name = $_POST['ar_name'];
		$ar_email = $_POST['ar_email'];
		$ar_phone = $_POST['ar_phone'];
		$ar_formurl = $_POST['ar_formurl'];
		$ar_hidden =  html_entity_decode(stripslashes($_POST['ar_hidden']));
		$ar_code = html_entity_decode(stripslashes($_POST['ar_code']));
		
		$BGcolor = $_POST['BGcolor'];
		$customBGrepeat = $_POST['customBGrepeat'];
		
		// Save Colors:
		
		$logoColor = $_POST['logoColor'];
		$logoSubColor = $_POST['logoSubColor'];
		$ctaColor = $_POST['ctaColor'];
		$ctaSubColor = $_POST['ctaSubColor'];
		$standoutColor = $_POST['standoutColor'];
		$optColor = $_POST['optColor'];
		$headlineColor = $_POST['headlineColor'];
		$featureHeadlineColor = $_POST['featureHeadlineColor'];
		$featureTextColor = $_POST['featureTextColor'];
		
		// Save Site Settings
		
		$siteTitle = $_POST['siteTitle'];
		$siteKeywords = $_POST['siteKeywords'];
		$siteDesc = $_POST['siteDesc'];
		$siteTracking = $_POST['siteTracking'];
		$siteSLUG1 = $_POST['siteSLUG'];
		
		$slugBad2 = array("!", "?", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "+", "+", "/", "|", "{", "}", "[", "]", ":", ";", '"', "'");
		
		$slugGood2 = str_replace($slugBad2, "", $siteSLUG1);
		$siteSLUG = str_replace(" ", "-", $slugGood2);
		
		$siteFooter = $_POST['siteFooter'];
		
		$id = $_POST['id'];
		
		update_landing_page($logoHeadline, $logoSubHeadline, $logoStyle, $logoImageURL, $ctaHeadline, $ctaSubHeadline, $ctaStyle, $ctaImageURL, $headlineText, $headlineImageURL, $headlineStyle, $videoCode, $videoImageURL, $videoStyle, $subHeadlineText, $subHeadlineImage, $subHeadlineStyle, $featureCSS, $feature1Text, $feature1Headline, $feature1ImageSmall, $feature1Image, $feature1Style, $feature2Text, $feature2Headline, $feature2ImageSmall, $feature2Image, $feature2Style, $feature3Text, $feature3Headline, $feature3ImageSmall, $feature3Image, $feature3Style, $feature4Text, $feature4Headline, $feature4ImageSmall, $feature4Image, $feature4Style, $customContent, $facebook, $twitter,$youtube,$email,$googleMaps,$linkedin,$optinStyle, $optinHeadline, $buttonStyle, $buttonCustom, $buttonText, $namePlaceholder, $emailPlaceholder, $phonePlaceholder, $optinContent, $optinSpam, $bgStyle, $checkLeads, $seperatorStyle, $seperatorImage, $thankYou, $thankyouHeadline, $ar_name, $ar_email, $ar_phone, $ar_formurl, $ar_hidden, $ar_code, $customBG, $BGcolor, $customBGrepeat, $selectBGStyle, $siteTitle, $siteKeywords, $siteDesc, $siteTracking, $siteSLUG, $siteFooter, $logoColor, $logoSubColor, $ctaColor, $ctaSubColor, $standoutColor, $optColor, $headlineColor, $featureHeadlineColor, $featureTextColor, $id);
		
?>
	 <div class="alert alert-success" style="width: 300px;margin-top: 25px">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Successfully Saved Landing Page Settings</strong>
    </div>
<?php } ?>

<?php 
	
	if($_POST['plugin_hidden'] == 'saveNotifications') {
		
		
		$subjectLine = $_POST['subjectLine'];
		$emailBody = $_POST['emailBody'];
		$textMessage = $_POST['textMessage'];
		
		$client1Name = $_POST['client1Name'];
		$client1Email = $_POST['client1Email'];
		$client1Phone = $_POST['client1Phone'];
		$client2Name = $_POST['client2Name'];
		$client2Email = $_POST['client2Email'];
		$client2Phone = $_POST['client2Phone'];
		$client3Name = $_POST['client3Name'];
		$client3Email = $_POST['client3Email'];
		$client3Phone = $_POST['client3Phone'];
		$client4Name = $_POST['client4Name'];
		$client4Email = $_POST['client4Email'];
		$client4Phone = $_POST['client4Phone'];
		
		$id = $_POST['id'];
		
		save_notifications($subjectLine, $emailBody, $textMessage, $client1Name, $client1Email, $client1Phone, $client2Name, $client2Email, $client2Phone, $client3Name, $client3Email, $client3Phone, $client4Name, $client4Email, $client4Phone, $id);
		
?>
	 <div class="alert alert-success" style="width: 300px;margin-top: 25px">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Successfully Saved Notification Settings</strong>
    </div>
<?php } ?>



										
<?php 
	
	if($_POST['editClient'] == 'y') {
		
		$name = $_POST['name'];
		$description = $_POST['description'];
		$photo = $_POST['photo'];
		
		$id = $_POST['id'];
		
		update_client($description, $photo,  $id);
		
?>
	 <div class="alert alert-success" style="width: 330px;margin-top: 25px">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Successfully Saved Client Settings</strong>
    </div>
    <input type="hidden" id="clientSettingsSaved" value="1" clientid="<?php echo $id; ?>" />
<?php } ?>
										</div>
										
									</div>
									
									
	<div class="modal" id="myModal" style="display: none">
    <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Customize Client Details:</h3>
    </div>
    <div class="modal-body">
   		<form method="post" style="padding-left: 10px;" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
   			<input type="hidden" name="editClient" value="y">
   			<input type="hidden" name="id" value="<?php echo $template['id']; ?>">
   			<div class="columnBox2">
   				<strong>Client Name:</strong><br><br>
	   			<input type="text" disabled name="name" style="background: #fafafa;" value="<?php echo $client; ?>" >
	   			<br>
	   			<strong>Description:</strong><br><br>
	   			<input type="text" name="description" value="<?php echo $template['description']; ?>">
	   			<br>
	   			<strong>Photo Link:</strong><br><br>
	   			<input type="text" name="photo" value="<?php echo $template['photo']; ?>">
	   			<br clear="all">
   			</div>
   		
    </div>
    <div class="modal-footer">
    
    
    <input type="submit" class="btn btn-success btn-large" value="Save Client Info" style="color: #fff; margin-top: -5px; padding: 10px;">
    
    <a class="btn  btn-large" onClick="confirmation()" style="text-decoration: none; color: #777777; float: right; margin-right: 10px; margin-top: -6px; " href="#"><img src="<?php echo $imagePath; ?>/images/del_page.png" align="left" style="margin-right: 8px; margin-top: 0px; " > Delete Client</a>
    
    </form>
    </div>
    </div>
									
								       <script type="text/javascript">
   <!--
   function confirmation() {
    var answer = confirm("Are you sure you want to delete this client?")
    if (answer){
     window.location = "../wp-admin/admin.php?page=wplocalfusion&id=<?php echo $template['id']; ?>&delete=yes";
    }
    else{
    }
   }</script>	
									
									<div id="statArea"> 
										
										<?php  
										
										global $wpdb;
										$table_name2 = $wpdb->prefix . "wpleadmachineSettings";
										$settingsCheck2 = $wpdb->get_row("SELECT * FROM $table_name2");
										
										$prettyCheck2 = $settingsCheck2->prettyURL;
										//$prettyCheck2 = "on";
										
										$showPretty2 = "";
										
										$getClientName = $_GET['client'];
										
										$getClientSLUG = $template['siteSLUG'];
										
																					
										if($prettyCheck2 == "on"){
										
											if($getClientSLUG == ""){
												$showPretty2 = $curUrl . "/landingpage/index.php?client=$getClientName";		
											} else {
												$showPretty2 = "../v/$getClientSLUG";
											}
											
										} else if($prettyCheck2 == "off") {
											$showPretty2 = $curUrl . "/landingpage/index.php?client=$getClientName";
										} else {
											$showPretty2 = $curUrl . "/landingpage/index.php?client=$getClientName";
										}
										
										?>
										
										<a href="<?php echo $showPretty2; //echo $curUrl . '/landingpage/index.php?client=' . $_GET['client']; ?>" class="btn btn-info btn-large" style="text-decoration: none; float: right; margin-right: 5px; margin-top: -6px;" target="_blank">
										<img src="<?php echo $imagePath; ?>/images/icon_viewsite.png" align="left" style="margin-right: 8px; margin-top: -2px;" > View Landing Page</a>
										   <a class="btn btn-inverse btn-large" data-toggle="modal" href="#myModal"  style="float: right; margin-top: -7px; margin-right: 10px;">  <img src="<?php echo $imagePath; ?>/images/icon_clientinfo.png" align="left" style="margin-right: 8px; margin-top: 2px;" > Edit Client</a>
									
  
   
    
										
										<div id="statBoxes" style="margin-top: 5px;">
											<h3 class="totalVisitors"><?php  if ($template['tracked'] != "") {echo $template['tracked'];} else { echo "0";} ?></h3>
											<h3 class="conversions"><?php echo get_percentage($template['tracked'],$checkLeads) ."%"; ?></h3>
											<h3 class="totalLeads"><?php  if ($checkLeads != "") { echo $checkLeads;} else { echo "0";} ?></h3>
											
										</div>
									</div>
					<?php
				} 
		?>
			<div id="clientNav" style="margin-right: -5px;"> 
				<ul>
					<li><a href="#" class="leads active" style="border-left: none">Leads</a></li>
					<li><a href="#" class="landingpages">Landing Page</a></li>
					<li><a href="#" class="notifications">Notifications</a></li>
					<!---<li><a href="#" class="reports" style="border-right: none">Reports</a></li>--->
				</ul>
			</div>
			<div id="clientContent"> 
				<div id="tab1" class="tab">
					<a href="<?php echo $curUrl ?>/admin/csv.php?client=<?php echo $_GET['client']; ?>" target="_blank" class="btn btn-inverse btn-large" style="text-decoration: none; float: right; margin-right: 7px; margin-top: -17px;">
						<img src="<?php echo $imagePath; ?>/images/csv_icon.png" align="left" style="margin-right: 8px; margin-top: -3px;" > Download as CSV</a>
						
					<div id="landingpageTOPbar">
						
	<div id="lp_title" style="margin-top: -7px;" >
		
					<img src="<?php echo $imagePath; ?>/images/leadstitle.png" style="margin-left: 20px;" >
					</div>
					
					<div id="lp_edittitle">
						<!-- <img src="<?php echo $imagePath; ?>/images/landingpageedit/edittitle.png"> -->
					</div>
					
					
					
				</div>
				
				<br clear="all">				
					
					<style type="text/css">
						table.gridtable {
							font-family: verdana,arial,sans-serif;
							font-size:11px;
							color:#333333;
							border-collapse: collapse;
							-webkit-border-radius: 4px;
							-moz-border-radius: 4px;
							border-radius: 4px;
						}
						table.gridtable th {
							padding-left: 8px;
							padding-top: 15px;
							padding-bottom: 15px;
							border-style: solid;
							text-align: left;
							border-color: #ddd;
							background-color: #f7f7f7;
							border-bottom-width: 1px;
							border-top-width: 1px;
							background-image: url(<?php echo $imagePath; ?>/images/tableleadshadow.png);
							background-repeat: repeat-x;
						}
						table.gridtable td {
							border-bottom-width: 1px;
							background-image: url(<?php echo $imagePath; ?>/images/tableleadshadow.png);
							background-repeat: repeat-x;
							padding-left: 8px;
							padding-top: 15px;
							padding-bottom: 15px;
							border-style: solid;
							border-color: #ddd;
						}
					</style>
					
					<div style="margin-left: -5px; margin-right: -5px; margin-top: -16px;">
					
					
					<table class="gridtable" style="width: 100%; margin: 0 auto;" border="0">
						<thead>
							<th style="padding-left: 20px;"><img src="<?php echo $imagePath; ?>/images/icon_leadname.png" style="margin-right: 10px;" align="left" > Full Name:</th>
							<th><img src="<?php echo $imagePath; ?>/images/icon_leademail.png" style="margin-right: 10px;" align="left" >E-Mail Address:</th>
							<th><img src="<?php echo $imagePath; ?>/images/icon_leadphone.png" style="margin-right: 10px;" align="left" >Phone Number:</th>
							<th><img src="<?php echo $imagePath; ?>/images/icon_leaddate.png" style="margin-right: 10px;" align="left" >Signed Up:</th>
							<th style="width: 10%;  ">Actions:</th>
						</thead>
						
						
						
						
						<?php
				    		  global $post;
							  global $wpdb;
							  $getOptin = get_post_meta( $post->ID, 'rndNumber', true );
							  $table_db_name = $wpdb->prefix . "wpleadmachineLeads";
							  $client = $_GET['client'];
							  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE client = '$client'",ARRAY_A);
					
							  $tpl = get_post_meta($post->ID,'_template',true);
							
								
				        ?>
					    <?php
					       foreach($templates as $template)
								{
									?>
										<tr>
											<td style="padding-left: 20px;"><?php echo $template['name']; ?></td><td><?php echo $template['email']; ?></td><td><?php echo $template['phone']; ?></td><td><?php echo $template['signedUp']; ?></td><td ><a href="#" class="delete_lead" leadName="<?php echo $template['id']; ?>" style="text-decoration: none;" />delete lead</td>
										</tr>
									<?php
								} 
						?>
					</table>
					
					</div>

				</div>
				<div id="tab2" class="tab" style="display: none;">
				
				
				<!-- TOP BAR FOR LANDING PAGE -->
				
				<div id="landingpageTOPbar">
					
					<div id="lp_title">
						<img src="<?php echo $imagePath; ?>/images/landingpage_edit.png" style="margin-left: 20px; margin-top: 20px;" >
					</div>
					
					<div id="lp_edittitle">
						<!-- <img src="<?php echo $imagePath; ?>/images/landingpageedit/edittitle.png"> -->
					</div>
					
					
					
				</div>
				
				<br clear="all">
				
				<!-- LANDING PAGE MENU -->
				
				<div id="lp_menu">
					
					<div id="lpmenu_designsettings" class="lpmenu_item lpmenu_current" lpmenu_name="tabSettings" >
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item0.png">
					</div>
					
					<div id="lpmenu_designsettings" class="lpmenu_item" lpmenu_name="tabDesign" >
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item1.png">
					</div>
					
					<div id="lpmenu_header" class="lpmenu_item" lpmenu_name="editHeader">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item2.png"  >
					</div>
					
					<div id="lpmenu_maincta" class="lpmenu_item" lpmenu_name="mainCTA">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item10.png"  >
					</div>
					
					<div id="lpmenu_optin" class="lpmenu_item" lpmenu_name="tabOptin">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item3.png">
					</div>
					
					<div id="lpmenu_ar" class="lpmenu_item" lpmenu_name="editAR">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item9.png">
					</div>
					
					<div id="lpmenu_subheadline" class="lpmenu_item" lpmenu_name="tabSubHeadline">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item4.png">
					</div>
					
					<div id="lpmenu_features" class="lpmenu_item" lpmenu_name="tabFeatures">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item5.png">
					</div>
					
					<div id="lpmenu_content" class="lpmenu_item" lpmenu_name="tabQuote">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item6.png">
					</div>
					
					<div id="lpmenu_footer" class="lpmenu_item" lpmenu_name="tabSocialFooter">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item7.png">
					</div>
					
					<div id="lpmenu_thankyou" class="lpmenu_item" lpmenu_name="tabThankYou">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item8.png">
					</div>
					
					
				</div>
				
				
				
				<div id="lp_content">
				
		
				
				
					<form name="plugin_form" id="formSave" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
						<input type="hidden" name="plugin_hidden" value="saveLandingPage">
						<input type="hidden" name="checkLeads" value="<?php echo $checkLeads ?>">
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
	<input type="hidden" name="id" value="<?php echo $template['id']; ?>">
					
	<div class="editAR lpedit_box" style="display: none;">
					
					<div class="columnBox" style="margin-top: 10px;">
							
							
							<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
								
								<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon13.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
								
								<h2 style="color: #333538;">Auto-Responder Settings:</h2>
								<h4 style="margin-top: -12px;"  >Add the FORM code for your auto-responder service:</h4>
							</div>
							
							<div class="lp_edit_indent">
	
		
<script type="text/javascript">
$(document).ready(function() {

	//$('#getarcode').change(change_selects);
	
	$('#runar').click(function() {
			change_selects();
	  return false;
	});
	
	function change_selects(){
			var tags = ['a','iframe','frame','frameset','script'], reg, val = $('#getarcode').val(),
				hdn = $('#arcode_hdn_div2'), formurl = $('#ar_formurl'), hiddenfields = $('#ar_hidden');
		    formurl.val('');
			if(jQuery.trim(val) == '')
				return false;
			$('#arcode_hdn_div').html('');
			$('#arcode_hdn_div2').html('');
			for(var i=0;i<5;i++){
				reg = new RegExp('<'+tags[i]+'([^<>+]*[^\/])>.*?</'+tags[i]+'>', "gi");
				val = val.replace(reg,'');
				
				reg = new RegExp('<'+tags[i]+'([^<>+]*)>', "gi");
				val = val.replace(reg,'');
			}
			var tmpval;
			try {
				tmpval = decodeURIComponent(val);
			} catch(err){
				tmpval = val;
			}
			hdn.append(tmpval);
			var num = 0;
			var name_selected = '';
			var email_selected = '';
			var phone_selected = '';
			$(':text',hdn).each(function(){
				var name = $(this).attr('name'),
					name_selected = num == '0' ? name : (num != '0' ? name_selected : ''), 
					email_selected = num == '1' ? name : email_selected;
					phone_selected = num == '2' ? name : phone_selected;
					if(num=='0') jQuery('#ar_name').val(name_selected);
					if(num=='1') jQuery('#ar_email').val(email_selected);
					if(num=='2') jQuery('#ar_phone').val(phone_selected);
			num++;
			});
			jQuery(':input[type=hidden]',hdn).each(function(){
				jQuery('#arcode_hdn_div').append(jQuery('<input type="hidden" name="'+jQuery(this).attr('name')+'" />').val(jQuery(this).val()));
			});		
			var hidden_f = jQuery('#arcode_hdn_div').html();
			formurl.val(jQuery('form',hdn).attr('action'));
			hiddenfields.val(hidden_f);
			//alert(tmpval);
			hdn.html('');
			
		};


});
</script>


<div id="arcode">
<br>

<div class="fieldarea">
	<span class="fieldtitle">Your HTML Form Code:</span>
	<span class="fielddesc">Paste your auto-responder HTML Form code here... press "Add Auto-Responder Code" then click save.</span>
	<br>
	<span class="fielddesc">** Please use your landing page URL as your redirect page within your AR settings...</span>
	<textarea id="getarcode" style="height: 150px; margin-top: 15px;" name="ar_code"  ><?php echo $template['ar_code']; ?></textarea>
	
</div>


<button class="btn btn-success" style="display: block;" id="runar" >
  Add Auto-Responder Code
</button>
<br><br>
</div>

<div id="arcode_pieces">

<div class="fieldarea">
	<span class="fieldtitle">Name:</span>
	<span class="fielddesc">Full Name Field</span>
	
	<input type="text" id="ar_name" name="ar_name" value="<?php echo $template['ar_name']; ?>" >
	
</div>

<div class="fieldarea">
	<span class="fieldtitle">Email:</span>
	<span class="fielddesc">Email Address Field</span>
	
	<input type="text" id="ar_email" name="ar_email" value="<?php echo $template['ar_email']; ?>"  >
	
</div>

<div class="fieldarea">
	<span class="fieldtitle">Phone:</span>
	<span class="fielddesc">Phone Number Field</span>
	
	<input type="text" id="ar_phone" name="ar_phone" value="<?php echo $template['ar_phone']; ?>"  >
	
</div>

<div class="fieldarea">
	<span class="fieldtitle">Form URL:</span>
	<span class="fielddesc">Post action URL</span>
	
	<input type="text" id="ar_formurl" name="ar_formurl" value="<?php echo $template['ar_formurl']; ?>"  >
	
</div>

<div class="fieldarea">
	<span class="fieldtitle">Hidden Fields:</span>
	<span class="fielddesc">hidden fields area</span>
	
	<textarea id="ar_hidden" name="ar_hidden" style="height: 100px; margin-top: 15px;"   ><?php echo $template['ar_hidden']; ?></textarea>
	
</div>

</div>
</div>
<div id="arcode_debug">

<div id="arcode_hdn_div"></div>

<div id="arcode_hdn_div2"></div>

</div>

</div>
	</div>
					
					<div class="editHeader lpedit_box" style="display: none;">
					
					<div class="columnBox" style="margin-top: 10px;">
							
							
							<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
								
								<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon1.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
								
								<h2 style="color: #333538;">Logo Setup:</h2>
								<h4 style="margin-top: -12px;"  >Appears on the top left of the page:</h4>
							</div>
							
							<div class="lp_edit_indent">
							
							<div class="fieldarea" style="margin-top: 25px;">
							<span class="fieldtitle">Logo Style:</span>
							<span class="fielddesc">choose whether to show text or image...</span>
							
							<select name="logoStyle" id="logoStyle"  style="margin-top: 15px;">
								<option <?php if($template['logoStyle'] == 'text') { ?>selected<?php } ?> value="text">Text</option>
								<option <?php if($template['logoStyle'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
							</select>
							
							</div>
							<hr>
									<div class="logoText">
											<div class="fieldarea">
												<span class="fieldtitle">Logo Headline:</span>
												<span class="fielddesc">large and bold logo headline  (also shown in browser title & footer)</span>
												
												<input type="text" name="logoHeadline" value="<?php echo htmlentities(stripslashes($template['logoHeadline'])); ?>">
												
											</div>
											
											<div class="fieldarea">
												<span class="fieldtitle">Logo Sub-Headline:</span>
												<span class="fielddesc">small logo tagline or sub-headline  (also shown in browser title & footer)</span>
												
												<input type="text" name="logoSubHeadline"  value="<?php echo htmlentities(stripslashes($template['logoSubHeadline'])); ?>">
												
											</div>
										</div>
										
									<div class="fieldarea logoImage" style="display: none">
										<span class="fieldtitle">Logo Image URL:</span>
										<span class="fielddesc">URL to your image (400px by 70px)</span>
										
										<input type="text" name="logoImageURL"  value="<?php echo $template['logoImageURL']; ?>">
										
										</div>
										
									
									</div>
								
								</div>	
									
									
									<div class="columnBox"  style="margin-top: 15px;">
										
										<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
											
											<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon3.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
											
											<h2 style="color: #333538;">Client Phone Number:</h2>
											<h4 style="margin-top: -12px;"  >Appears on the top right of the page:</h4>
										</div>
										
										<div class="lp_edit_indent">
										
										
										<div class="fieldarea">
										<span class="fieldtitle" style="margin-top: 25px;">CTA Style:</span>
										<span class="fielddesc">choose whether to show text or image...</span>
										
										<select name="ctaStyle" id="ctaStyle" style="margin-top: 15px;" >
											<option <?php if($template['ctaStyle'] == 'text') { ?>selected<?php } ?> value="text">Text</option>
											<option <?php if($template['ctaStyle'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
										</select>
										
										</div>
										<hr>
										<div class="ctaText">
											<div class="fieldarea">
											<span class="fieldtitle">Phone Number:</span>
											<span class="fielddesc">bold and large call-to-action headline...</span>
											
											<input type="text" name="ctaHeadline" value="<?php echo htmlentities(stripslashes($template['ctaHeadline'])); ?>">
											
											</div>
											
											<div class="fieldarea">
											<span class="fieldtitle">CTA Sub-Headline:</span>
											<span class="fielddesc">smaller sub-headline for call-to-action text...</span>
											
											<input type="text" name="ctaSubHeadline"  value="<?php echo htmlentities(stripslashes($template['ctaSubHeadline'])); ?>">
											
											</div>
										</div>
										
										<div class="fieldarea ctaImage" style="display: none">
										<span class="fieldtitle">CTA Image URL:</span>
										<span class="fielddesc">URL to image for CTA area (400px by 70px)</span>
										
										<input type="text" name="ctaImageURL"  value="<?php echo $template['ctaImageURL']; ?>">
										
										</div>
										
										</div>
									
									</div>
						
						
						<br clear="all">
						</div>
						<div class="mainCTA lpedit_box" style="display: none;">
							<div class="columnBox"  style="margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon5.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Main Headline:</h2>
									<h4 style="margin-top: -12px;"  >Appears above the video/image and optin box:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
								
										<div class="fieldarea">
											<span class="fieldtitle">Headline Style:</span>
											<span class="fielddesc">Choose whether to show text or image...</span>
											<br>
											<select name="headlineStyle" id="headlineStyle">
												<option <?php if($template['headlineStyle'] == 'text') { ?>selected<?php } ?> value="text">Text</option>
												<option <?php if($template['headlineStyle'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
											</select>
										</div>
										<hr>
										<div class="fieldarea">
											<div class="displayHeadline">
												<span class="fieldtitle">Headline Text:</span>
												<span class="fielddesc">Main headline text large, centered and bold...</span>
												<input type="text" name="headlineText" value="<?php echo htmlentities(stripslashes($template['headlineText'])); ?>">
											</div>
											
											<div class="displayImage" style="display: none">
												<span class="fieldtitle">Headline Image:</span>
												<span class="fielddesc">URL to the image for headline (960px by 72px)</span>
												<input type="text" name="headlineImageURL"  value="<?php echo $template['headlineImageURL']; ?>">	
											</div>
											
											</div>
										</div>
								
							</div>
							
							
							
							
							<div class="columnBox"  style="margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon12.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Video / Image Attention Area:</h2>
									<h4 style="margin-top: -12px;"  >Video OR Image for the main attention - appears left of the optin form:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
								
									<div class="fieldarea">
											<span class="fieldtitle">Attention Area Style:</span>
											<span class="fielddesc">Choose whether to show Video or Graphic (image)...</span>
											<br>
											<select name="videoStyle" id="videoStyle">
												<option <?php if($template['videoStyle'] == 'video') { ?>selected<?php } ?> value="video">Video</option>
												<option <?php if($template['videoStyle'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
											</select>
										</div>
										<hr>
										<div class="fieldarea">
											
											<div class="displayVideo">
												<span class="fieldtitle">Video or HTML:</span>
												<span class="fielddesc">add video embed code or your custom content...( if a video, it will resize automatically ) </span>
												<textarea name="videoCode" style="margin-top: 15px; height: 100px;"><?php echo $template['videoCode']; ?></textarea>
											</div>
											
											<div class="displayVideoImage" style="display: none">
												<span class="fieldtitle">Image:</span>
												<span class="fielddesc">URL of the image to display (540px by 340px) * must be full path, ie: http://yoursite.com/image.png</span>
												<input type="text" name="videoImageURL"  value="<?php echo $template['videoImageURL']; ?>">
											</div>
											
											</div>
										</div>
							</div>
							
						</div>
						
						<div class="tabOptin lpedit_box" style="display: none">
						
						<div class="columnBox" style="margin-top: 15px;">
							
							<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
								
								<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon5.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
								
								<h2 style="color: #333538;">Optin Header:</h2>
								<h4 style="margin-top: -12px;"  >Main headline of the optin form:</h4>
							</div>
							
							<div class="lp_edit_indent">
								
									
									<div class="fieldarea" style="margin-top: 25px;">
										
										
										<div class="feature3Text">
											<span class="fieldtitle">Optin Style:</span>
											<span class="fielddesc">Change the style of optin...</span><br>
											<select name="optinStyle" id="optinStyle">
												<option <?php if($template['optinStyle'] == 'black_dark') { ?>selected<?php } ?> value="black_dark">Black Dark</option>
												<option <?php if($template['optinStyle'] == 'black_light') { ?>selected<?php } ?> value="black_light">Black Light</option>
												<option <?php if($template['optinStyle'] == 'blue_dark') { ?>selected<?php } ?> value="blue_dark">Blue Dark</option>
												<option <?php if($template['optinStyle'] == 'blue_light') { ?>selected<?php } ?> value="blue_light">Blue Light</option>
												<option <?php if($template['optinStyle'] == 'green_dark') { ?>selected<?php } ?> value="green_dark">Green Dark</option>
												<option <?php if($template['optinStyle'] == 'green_light') { ?>selected<?php } ?> value="green_light">Green Light</option>
												<option <?php if($template['optinStyle'] == 'red_dark') { ?>selected<?php } ?> value="red_dark">Red Dark</option>
												<option <?php if($template['optinStyle'] == 'red_light') { ?>selected<?php } ?> value="red_light">Red Light</option>
											</select>
											
											<span class="fieldtitle">Optin Headline:</span>
											<span class="fielddesc">Customize headline text...</span>
											<input type="text" name="optinHeadline" value="<?php echo htmlentities(stripslashes($template['optinHeadline'])); ?>">
											
										
											
										</div>
										
										</div>
										
									</div>
						</div>
						
						
							<div class="columnBox" style="margin-top: 15px;">
								
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon6.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Optin Custom Content:</h2>
									<h4 style="margin-top: -12px;"  >Edit the content ABOVE and BELOW the optin form:</h4>
								</div>
								
								<div class="lp_edit_indent">
									
										
										<div class="fieldarea" style="margin-top: 25px;">
											
											
											<div class="feature3Text">
												<span class="fieldtitle">Top Content Area:</span>
												<span class="fielddesc">Add your content below headline...</span><br>
												<textarea style="width: 100%; height: 300px;" name="optinContent" class="mceEditor"><?php echo htmlentities(stripslashes($template['optinContent'])); ?></textarea><br>
												
											</div>
											<span class="fieldtitle">Bottom Content Area:</span>
												<span class="fielddesc">Add content below button (spam area)...</span><br>
												<textarea style="width: 100%; height: 100px;" name="optinSpam"><?php echo htmlentities(stripslashes($template['optinSpam'])); ?></textarea>
											
										</div>
										
										</div>
							</div>
							
							
							<div class="columnBox" style="margin-top: 15px;">
								
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon7.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Optin Button:</h2>
									<h4 style="margin-top: -12px;"  >Customize the button on the optin form:</h4>
								</div>
								
								<div class="lp_edit_indent">
									
										
										<div class="fieldarea" style="margin-top: 25px;">
											
											
											<div class="feature3Text">
												<span class="fieldtitle">Button Style:</span>
												<span class="fielddesc">Change the style of optin button...</span><br>
													<select name="buttonStyle" id="buttonStyle">
													<option <?php if($template['buttonStyle'] == 'green') { ?>selected<?php } ?> value="green">Green</option>
													<option <?php if($template['buttonStyle'] == 'light_blue') { ?>selected<?php } ?> value="light_blue">Light Blue</option>
													<option <?php if($template['buttonStyle'] == 'dark_blue') { ?>selected<?php } ?> value="dark_blue">Dark Blue</option>
													<option <?php if($template['buttonStyle'] == 'black') { ?>selected<?php } ?> value="black">Black</option>
													<option <?php if($template['buttonStyle'] == 'grey') { ?>selected<?php } ?> value="grey">Grey</option>
													<option <?php if($template['buttonStyle'] == 'red') { ?>selected<?php } ?> value="red">Red</option>
													<option <?php if($template['buttonStyle'] == 'orange') { ?>selected<?php } ?> value="orange">Orange</option>
													<option <?php if($template['buttonStyle'] == 'custom') { ?>selected<?php } ?> value="custom">Custom Button</option>
												</select>
												
												<?php 
												
												if($template['buttonStyle'] != 'custom' ){
												?>
												
												<span class="fieldtitle">Button Text:</span>
												<span class="fielddesc">Customize button text...</span>
												<input type="text" name="buttonText" value="<?php echo htmlentities(stripslashes($template['buttonText'])); ?>">
												
												<?php
												} else{
												?>
												<div id="buttonCustom" >
												<span class="fieldtitle">Custom Button Image:</span>
												<span class="fielddesc">The FULL image path of an image...</span>
												<input type="text" name="buttonCustom" value="<?php echo $template['buttonCustom']; ?>">
												<hr>
												</div>
												
												<?php 
												} 
												?>
												
												
												
												
												
											</div>
											</div>
											
											
										</div>
							</div>
							<div class="columnBox" style="margin-top: 15px;">
								
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon8.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Optin Placeholder Copy:</h2>
									<h4 style="margin-top: -12px;"  >Copy shown in each form before visitors enters their info:</h4>
								</div>
								
								<div class="lp_edit_indent">
									
										
										<div class="fieldarea" style="margin-top: 25px;">
											
											
											<div class="feature3Text">
												
												<span class="fieldtitle">Name Placeholder Text:</span>
												<span class="fielddesc">Optin input for name placeholder text...</span>
												<input type="text" name="namePlaceholder" value="<?php echo htmlentities(stripslashes($template['namePlaceholder'])); ?>">
												<span class="fieldtitle">Email Placeholder Text:</span>
												<span class="fielddesc">Optin input for email placeholder text...</span>
												<input type="text" name="emailPlaceholder" value="<?php echo htmlentities(stripslashes($template['emailPlaceholder'])); ?>">
												<span class="fieldtitle">Phone Placeholder Text:</span>
												<span class="fielddesc">Optin input for phone placeholder text...</span>
												<input type="text" name="phonePlaceholder" value="<?php echo htmlentities(stripslashes($template['phonePlaceholder'])); ?>">
												
											</div>
											
											</div>
											
										</div>
							</div>
							
						</div>
						<div class="tabSubHeadline lpedit_box" style="display: none">
							<div class="columnBox" style="margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon5.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Sub Headline:</h2>
									<h4 style="margin-top: -12px;"  >Appears under the main video/image:</h4>
								</div>
								
								<div class="lp_edit_indent">
								
									<div class="fieldarea" style="margin-top: 25px;">
											<span class="fieldtitle">Headline Style:</span>
											<span class="fielddesc">Choose whether to show text or image...</span>
											<br>
											<select name="subHeadlineStyle" id="subHeadlineStyle">
												<option <?php if($template['subHeadlineStyle'] == 'text') { ?>selected<?php } ?> value="text">Text</option>
												<option <?php if($template['subHeadlineStyle'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
											</select>
										</div>
										<hr>
										<div class="fieldarea">
											
											
											<div class="displaySubHeadlineText">
												<span class="fieldtitle">Sub Headline Text:</span>
												<span class="fielddesc">Add text that will be shown as the sub-headline...</span>
												<input type="text" name="subHeadlineText" value="<?php echo htmlentities(stripslashes($template['subHeadlineText'])); ?>">
											</div>
											
											<div class="displaySubHeadlineImage" style="display: none">
												<span class="fieldtitle">Sub-Headline Image:</span>
												<span class="fielddesc">URL of the image to display (550px by 150px)</span>
												<input type="text" name="subHeadlineImage"  value="<?php echo $template['subHeadlineImage']; ?>">
											</div>
										</div>
							</div>
							
							</div>
							
						</div>
						<div class="tabFeatures lpedit_box"  style="display: none">
							<div class="columnBox" style="margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon2.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Feature Image CSS Effect:</h2>
									<h4 style="margin-top: -12px;"  >Choose a CSS style for the feature thumbnails:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
								
									<div class="fieldarea">
											<span class="fieldtitle">CSS Style:</span>
											<span class="fielddesc">Select a CSS style for your thumbnails...</span>
											<br>
											<select name="featureCSS" id="featureCSS">
												<option <?php if($template['featureCSS'] == 'fullshadow') { ?>selected<?php } ?> value="fullshadow">Shadow</option>
												<option <?php if($template['featureCSS'] == 'dropshadow') { ?>selected<?php } ?> value="dropshadow">Drop Shadow</option>
												<option <?php if($template['featureCSS'] == 'nostyle') { ?>selected<?php } ?> value="nostyle">No Style</option>
												
											</select>
										</div>
								</div>
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: 15px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon9.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Feature / Benefit #1:</h2>
									<h4 style="margin-top: -12px;"  >Setup your first feature block:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
								
									<div class="fieldarea">
											<span class="fieldtitle">Feature Style:</span>
											<span class="fielddesc">Choose whether to show text or image...</span>
											<br>
											<select name="feature1Style" id="feature1Style">
												<option <?php if($template['feature1Style'] == 'text') { ?>selected<?php } ?> value="text">Text</option>
												<option <?php if($template['feature1Style'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
											</select>
										</div>
										<hr>
										<div class="fieldarea">
											
											
											<div class="feature1Text">
												<span class="fieldtitle">Feature Headline:</span>
												<span class="fielddesc">Main headline for this feature...</span>
												<input type="text" name="feature1Headline" value="<?php echo htmlentities(stripslashes($template['feature1Headline'])); ?>">
												<span class="fieldtitle">Feature Text:</span>
												<span class="fielddesc">Add your paragraph of text...</span>
												<textarea name="feature1Text" style="margin-top: 10px;"><?php echo htmlentities(stripslashes($template['feature1Text'])); ?></textarea>
												<span class="fieldtitle">Feature Small Image:</span>
												<span class="fielddesc">URL to your image (will be resized - best results: 140px by 120px)...</span>
												<input type="text" name="feature1ImageSmall" value="<?php echo htmlentities(stripslashes($template['feature1ImageSmall'])); ?>">
											</div>
											
											<div class="feature1Image" style="display: none">
												<span class="fieldtitle">Feature Large Image:</span>
												<span class="fielddesc">URL of the image to display (480px by 140px)</span>
												<input type="text" name="feature1Image"  value="<?php echo $template['feature1Image']; ?>">
											</div>
										</div>
										</div>
							</div>
							<div class="columnBox" style="margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon9.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Feature / Benefit #2:</h2>
									<h4 style="margin-top: -12px;"  >Setup your second feature block:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
								
									<div class="fieldarea">
											<span class="fieldtitle">Feature Style:</span>
											<span class="fielddesc">Choose whether to show text or image...</span>
											<br>
											<select name="feature2Style" id="feature2Style">
												<option <?php if($template['feature2Style'] == 'text') { ?>selected<?php } ?> value="text">Text</option>
												<option <?php if($template['feature2Style'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
											</select>
										</div>
										<hr>
										<div class="fieldarea">
											
											
											<div class="feature2Text">
												<span class="fieldtitle">Feature Headline:</span>
												<span class="fielddesc">Main headline for this feature...</span>
												<input type="text" name="feature2Headline" value="<?php echo htmlentities(stripslashes($template['feature2Headline'])); ?>">
												<span class="fieldtitle">Feature Text:</span>
												<span class="fielddesc">Add your paragraph of text...</span>
												<textarea name="feature2Text" style="margin-top: 10px;"><?php echo htmlentities(stripslashes($template['feature2Text'])); ?></textarea>
												<span class="fieldtitle">Feature Small Image:</span>
												<span class="fielddesc">URL to your image (will be resized  - best results: 140px by 120px)...</span>
												<input type="text" name="feature2ImageSmall" value="<?php echo htmlentities(stripslashes($template['feature2ImageSmall'])); ?>">
											</div>
											
											<div class="feature2Image" style="display: none">
												<span class="fieldtitle">Feature Large Image:</span>
												<span class="fielddesc">URL of the image to display (480px by 140px)</span>
												<input type="text" name="feature2Image"  value="<?php echo $template['feature2Image']; ?>">
											</div>
										</div>
										</div>
							</div>
							
							<br clear="all">
							
								<div class="columnBox" style="margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon9.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Feature / Benefit #3:</h2>
									<h4 style="margin-top: -12px;"  >Setup your third feature block:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
								
									<div class="fieldarea">
											<span class="fieldtitle">Feature Style:</span>
											<span class="fielddesc">Choose whether to show text or image...</span>
											<br>
											<select name="feature3Style" id="feature3Style">
												<option <?php if($template['feature3Style'] == 'text') { ?>selected<?php } ?> value="text">Text</option>
												<option <?php if($template['feature3Style'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
											</select>
										</div>
										<hr>
										<div class="fieldarea">
											
											
											<div class="feature3Text">
												<span class="fieldtitle">Feature Headline:</span>
												<span class="fielddesc">Main headline for this feature...</span>
												<input type="text" name="feature3Headline" value="<?php echo htmlentities(stripslashes($template['feature3Headline'])); ?>">
												<span class="fieldtitle">Feature Text:</span>
												<span class="fielddesc">Add your paragraph of text...</span>
												<textarea name="feature3Text" style="margin-top: 10px;"><?php echo htmlentities(stripslashes($template['feature3Text'])); ?></textarea>
												<span class="fieldtitle">Feature Small Image:</span>
												<span class="fielddesc">URL to your image (will be resized  - best results: 140px by 120px)...</span>
												<input type="text" name="feature3ImageSmall" value="<?php echo $template['feature3ImageSmall']; ?>">
											</div>
											
											<div class="feature3Image" style="display: none">
												<span class="fieldtitle">Feature Large Image:</span>
												<span class="fielddesc">URL of the image to display (480px by 140px)</span>
												<input type="text" name="feature3Image"  value="<?php echo $template['feature3Image']; ?>">
											</div>
										</div>
										</div>
							</div>
								<div class="columnBox" style="margin-top: 15px;">
								
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon9.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Feature / Benefit #4:</h2>
									<h4 style="margin-top: -12px;"  >Setup your fourth feature block:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
								
									<div class="fieldarea">
											<span class="fieldtitle">Feature Style:</span>
											<span class="fielddesc">Choose whether to show text or image...</span>
											<br>
											<select name="feature4Style" id="feature4Style">
												<option <?php if($template['feature4Style'] == 'text') { ?>selected<?php } ?> value="text">Text</option>
												<option <?php if($template['feature4Style'] == 'image') { ?>selected<?php } ?> value="image">Image</option>
											</select>
										</div>
										<hr>
										<div class="fieldarea">
											
											
											<div class="feature4Text">
												<span class="fieldtitle">Feature Headline:</span>
												<span class="fielddesc">Main headline for this feature...</span>
												<input type="text" name="feature4Headline" value="<?php echo htmlentities(stripslashes($template['feature4Headline'])); ?>">
												<span class="fieldtitle">Feature Text:</span>
												<span class="fielddesc">Add your paragraph of text...</span>
												<textarea name="feature4Text" style="margin-top: 10px;"><?php echo htmlentities(stripslashes($template['feature4Text'])); ?></textarea>
												<span class="fieldtitle">Feature Small Image:</span>
												<span class="fielddesc">URL to your image (will be resized  - best results: 140px by 120px)...</span>
												<input type="text" name="feature4ImageSmall" value="<?php echo $template['feature4ImageSmall']; ?>">
											</div>
											
											<div class="feature4Image" style="display: none">
												<span class="fieldtitle">Feature Large Image:</span>
												<span class="fielddesc">URL of the image to display (480px by 140px)</span>
												<input type="text" name="feature4Image"  value="<?php echo $template['feature4Image']; ?>">
											</div>
										</div>
										</div>
							</div>
						</div>
						
						<!-- MAIN CONTENT EDIT -->
						
						<div class="tabQuote lpedit_box" style="display: none;" >
							<div class="columnBox"  >
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: 15px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon6.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Main Content Area:</h2>
									<h4 style="margin-top: -12px;"  >Appears UNDER the feature area:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										
										<div class="fieldarea">
											
											
											<div class="quoteText">
												<textarea style="width: 100%; height: 300px;" name="customContent" class="mceEditor"><?php echo htmlentities(stripslashes($template['customContent'])); ?></textarea>
											</div>
											
										</div>
										</div>
							</div>
							
						</div>
						<div class="tabSocialFooter lpedit_box" style="display: none">
							<div class="columnBox" style=" margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon10.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Social Footer Links:</h2>
									<h4 style="margin-top: -12px;"  >Add social links to the footer of the landing page:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
									
										
										<div class="fieldarea">
											
											
											<div class="feature3Text">
												<span class="fieldtitle">Facebook:</span>
												<span class="fielddesc">Add your facebook fanpage link...</span>
												<input type="text" name="facebook" value="<?php echo $template['facebook']; ?>">
												<span class="fieldtitle">Twitter:</span>
												<span class="fielddesc">Add your twitter page link...</span>
												<input type="text" name="twitter" value="<?php echo $template['twitter']; ?>">
												<span class="fieldtitle">Google Maps:</span>
												<span class="fielddesc">Add your google maps link...</span>
												<input type="text" name="googleMaps" value="<?php echo $template['googleMaps']; ?>">
												<span class="fieldtitle">YouTube:</span>
												<span class="fielddesc">Add your youtube page link...</span>
												<input type="text" name="youtube" value="<?php echo $template['youtube']; ?>">
												<span class="fieldtitle">LinkedIn:</span>
												<span class="fielddesc">Add your linkedin page link...</span>
												<input type="text" name="linkedin" value="<?php echo $template['linkedin']; ?>">
												<span class="fieldtitle">Email:</span>
												<span class="fielddesc">Add your email link...</span>
												<input type="text" name="email" value="<?php echo $template['email']; ?>">
											</div>
											
											</div>
										</div>
							</div>
							
						</div>
						<div class="tabThankYou lpedit_box"  style="display: none">
							<div class="columnBox"  style="margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
										
										<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon5.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
										
										<h2 style="color: #333538;">Thank You Headline:</h2>
										<h4 style="margin-top: -12px;"  >Appears above the main content area:</h4>
									</div>
									
									<div class="lp_edit_indent" style=" margin-top: 25px;">
											
											<div class="fieldarea">
												
												
												<div class="quoteText">
												<span class="fieldtitle">Headline:</span>
												<span class="fielddesc">This will appear above the main content box, thank them for signing up!</span>
												
													<input type="text" name="thankyouHeadline" value="<?php echo htmlentities(stripslashes($template['thankyouHeadline'])); ?>" />
												</div>
												</div>
											</div>
								
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: 15px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon11.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Thank You Page Content:</h2>
									<h4 style="margin-top: -12px;"  >What leads see once they optin into the form:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										
										<div class="fieldarea">
											
											
											<div class="quoteText">
												<textarea style="width: 100%; height: 300px;" name="thankYou" class="mceEditor"><?php echo htmlentities(stripslashes($template['thankYou'])); ?></textarea>
											</div>
											</div>
										</div>
							</div>
						</div>
						
						
						<div class="tabSettings lpedit_box">
							<div class="columnBox"  style="margin-top: 15px;">
								
								<!--PAGE SETTINGS HERE-->
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon14.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Site Meta Info:</h2>
									<h4 style="margin-top: -12px;"  >Important meta info for your page - SEO settings:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										
										<div class="fieldarea">
											
											<span class="fieldtitle">Site Title:</span>
											<span class="fielddesc">This will appear as the title of your site...</span>
											<input type="text" name="siteTitle" value="<?php echo htmlentities(stripslashes($template['siteTitle'])); ?>">
											
											</div>
											
											<div class="fieldarea">
												
												<span class="fieldtitle">Meta Keywords:</span>
												<span class="fielddesc">SEO settings, add some keywords to describe your page...</span>
												<input type="text" name="siteKeywords" value="<?php echo htmlentities(stripslashes($template['siteKeywords'])); ?>">
												
												</div>
												
											<div class="fieldarea">
												
												<span class="fieldtitle">Meta Description:</span>
												<span class="fielddesc">SEO settings, add a description of your page...</span>
												<input type="text" name="siteDesc" value="<?php echo htmlentities(stripslashes($template['siteDesc'])); ?>">
												
												</div>	
											
											
										</div>
										
										<div class="well2" style=" margin-bottom: 10px; margin-top: 15px;">
											
											<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon15.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
											
											<?php  
											
											global $wpdb;
											$table_name = $wpdb->prefix . "wpleadmachineSettings";
											$settingsCheck = $wpdb->get_row("SELECT * FROM $table_name");
											
											$prettyCheck = $settingsCheck->prettyURL;
											$showPretty = "";
																						
											if($prettyCheck == "on"){
												$showPretty = "<span style='color: #00a84b;'>ON</span>";
											} else if($prettyCheck == "off") {
												$showPretty = "<span style='color: #903c3c;'>OFF</span>";
											} else {
												$showPretty = "<span style='color: #903c3c;'>OFF</span>";											
											}
											
											?>
											
											<h2 style="color: #333538;">Pretty URL: <?php echo $showPretty; ?></h2>
											<h4 style="margin-top: -12px;"  >This will be your pretty URL (slug) .ie: yoursite.com/v2/<b>Get-50-Off</b></h4>
										</div>
										
										<div class="lp_edit_indent" style=" margin-top: 25px;">
												
												<div class="fieldarea">
													
													<span class="fieldtitle">Pretty URL Link: <span style="font-weight: normal;">* Unique to this client *</span></span>
													<span class="fielddesc">This will be your URL for this page. Spaces will be replaced with ' - ' so make note of that... <b>** LETTER & Numbers ONLY!</b> </span>
													
													<?php 
													
													$slugBad = array("!", "?", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "+", "+", "/", "|", "{", "}", "[", "]", ":", ";", '"', "'");
													
													$slugGood = $template['siteSLUG'];
													$slugGood2 = str_replace($slugBad, "", $slugGood);
													$slugGood3 = str_replace(" ", "-", $slugGood2);
													
													?>
													
													<input type="text" name="siteSLUG" value="<?php echo htmlentities(stripslashes($slugGood3)); ?>">
													
													<span class="fielddesc" style="font-size: 11px;">** It's best to write the link with the dashes so you can control completely how<br> its displayed. "Get-50-Off-Now" is better than writing "Get 50% Off Now"...</span>
													
													<br>
													
													<span class="fielddesc" style="font-size: 11px;">** If this is BLANK but pretty URL is turned on.. you will still see <br>the non-pretty url until you enter something here...</span>
													
													</div>
													
													
												</div>
									
									
									<div class="well2" style=" margin-bottom: 10px; margin-top: 20px;">
										
										<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon16.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
										
										<h2 style="color: #333538;">Tracking Code:</h2>
										<h4 style="margin-top: -12px;"  >If you want to add your own tracking to the page, Google Analytics, etc. Place the code here...</h4>
									</div>
									
									<div class="lp_edit_indent" style=" margin-top: 25px;">
											
											<div class="fieldarea">
												
												<span class="fieldtitle">Tracking Code:</span>
												<span class="fielddesc">This will appear in the HEAD area of the page. Copy and paste any javascript tags in here... </span>
												<textarea class="fielddesc" style="margin-top: 15px; height: 100px;" name="siteTracking"><?php echo htmlentities(stripslashes($template['siteTracking'])); ?></textarea>
												
												
												</div>
												
												
											</div>			
									
									<div class="well2" style=" margin-bottom: 10px; margin-top: 20px;">
										
										<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon17.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
										
										<h2 style="color: #333538;">Footer HTML:</h2>
										<h4 style="margin-top: -12px;"  >Here you can edit your footer to be anything you like...</h4>
									</div>
									
									<div class="lp_edit_indent" style=" margin-top: 25px;">
											
											<div class="fieldarea">
												
												<span class="fieldtitle">Footer Copy:</span>
												<span class="fielddesc">This will appear on the footer of both the landing page and the thank you page...</span><br>
												<textarea class="mceEditor" style="width: 100%; height: 150px;" name="siteFooter"><?php if($template['siteFooter'] != ""){ echo $template['siteFooter'];} else { ?> 
												
												<center><p>Copyright &copy; 2012 - <strong>Your Company - Something</strong> - All Rights Reserved</p></center>
												
												<?php } ?></textarea>
												
												
												</div>
												
												
											</div>				
												
												
										
							</div>
						</div>
						
						
						
						<div class="tabDesign lpedit_box" style="display: none;">
							<div class="columnBox" style="margin-left: 8px; margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 25px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon2.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Background Design</h2>
									<h4 style="margin-top: -12px;"  >Select your background image:</h4>
								</div>
								
								<div class="lp_edit_indent">
								
									<div class="fieldarea">
										<span class="fieldtitle">Choose Pre-Designed Style or Custom Image:</span>
											<span class="fielddesc">Use on of included styles or add your own background...</span>
											<br>
											<select name="selectBGStyle" id="selectBGStyle">
												<option  <?php if($template['selectBGStyle'] == 'premade') { ?>selected<?php } ?> value="premade">Pre-Made Background</option>
												<option  <?php if($template['selectBGStyle'] == 'custom') { ?>selected<?php } ?> value="custom">Custom Background</option>
											</select>
									</div>
									<hr>
									<div class="fieldarea showBGPremade">
											<span class="fieldtitle">Background Style:</span>
											<span class="fielddesc">Choose pre-built background graphics...</span>
											<br>
											<select name="bgStyle" id="bgStyle">
												<option <?php if($template['bgStyle'] == 'ash') { ?>selected<?php } ?> value="ash">Ash Style</option>
												<option <?php if($template['bgStyle'] == 'carbon') { ?>selected<?php } ?> value="carbon">Carbon Style</option>
												<option <?php if($template['bgStyle'] == 'grey') { ?>selected<?php } ?> value="grey">Grey Style</option>
												<option <?php if($template['bgStyle'] == 'linen_dark') { ?>selected<?php } ?> value="linen_dark">Linen Dark</option>
												<option <?php if($template['bgStyle'] == 'linen_light') { ?>selected<?php } ?> value="linen_light">Linen Light</option>
												<option <?php if($template['bgStyle'] == 'wood_dark') { ?>selected<?php } ?> value="wood_dark">Wood Dark</option>
												<option <?php if($template['bgStyle'] == 'wood_light') { ?>selected<?php } ?> value="wood_light">Wood Light</option>
												<option <?php if($template['bgStyle'] == 'black_dark') { ?>selected<?php } ?> value="black_dark">Black Dark</option>
												<option <?php if($template['bgStyle'] == 'black_light') { ?>selected<?php } ?> value="black_light">Black Light</option>
												<option <?php if($template['bgStyle'] == 'blue_dark') { ?>selected<?php } ?> value="blue_dark">Blue Dark</option>
												<option <?php if($template['bgStyle'] == 'blue_light') { ?>selected<?php } ?> value="blue_light">Blue Light</option>
												<option <?php if($template['bgStyle'] == 'brown_dark') { ?>selected<?php } ?> value="brown_dark">Brown Dark</option>
												<option <?php if($template['bgStyle'] == 'brown_light') { ?>selected<?php } ?> value="brown_light">Brown Light</option>
												<option <?php if($template['bgStyle'] == 'green_dark') { ?>selected<?php } ?> value="green_dark">Green Dark</option>
												<option <?php if($template['bgStyle'] == 'green_light') { ?>selected<?php } ?> value="green_light">Green Light</option>
												<option <?php if($template['bgStyle'] == 'orange_dark') { ?>selected<?php } ?> value="orange_dark">Orange Dark</option>
												<option <?php if($template['bgStyle'] == 'orange_light') { ?>selected<?php } ?> value="orange_light">Orange Light</option>
												<option <?php if($template['bgStyle'] == 'purple_dark') { ?>selected<?php } ?> value="purple_dark">Purple Dark</option>
												<option <?php if($template['bgStyle'] == 'purple_light') { ?>selected<?php } ?> value="purple_light">Purple Light</option>
												<option <?php if($template['bgStyle'] == 'red_dark') { ?>selected<?php } ?> value="red_dark">Red Dark</option>
												<option <?php if($template['bgStyle'] == 'red_light') { ?>selected<?php } ?> value="red_light">Red Light</option>
											</select>
										</div>
										
										<div class="fieldarea showBGCustom" style="display: none">
											
											
											<div class="quoteText">
												<span class="fieldtitle">Custom BG URL:</span>
												<span class="fielddesc">Show a custom image background from URL...</span>
												<input type="text" class="BGcolor color" name="BGcolor" value="<?php echo $template['BGcolor']; ?>" style="background-color: #<?php echo $template['BGcolor']; ?>;">
												<input type="text" name="customBG" value="<?php echo $template['customBG']; ?>" style="width: 90% !important; float: left">
												<select name="customBGrepeat" id="customBGrepeat">
													<option <?php if($template['customBGrepeat'] == 'repeat') { ?>selected<?php } ?> value="repeat">repeat</option>
													<option <?php if($template['customBGrepeat'] == 'no-repeat center top') { ?>selected<?php } ?> value="no-repeat center top">no-repeat center top</option>
													<option <?php if($template['customBGrepeat'] == 'repeat-x top') { ?>selected<?php } ?> value="repeat-x top">repeat-x top</option>
													<option <?php if($template['customBGrepeat'] == 'repeat-y center') { ?>selected<?php } ?> value="repeat-y center">repeat-y center</option>
												</select>
											</div>
											
											
										</div>
										
										
										
							</div>
							
							
							
							
							
							</div>
							
							<div class="columnBox" style="margin-left: 8px; margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 25px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon2.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Seperator Graphic</h2>
									<h4 style="margin-top: -12px;"  >Select your seperator image:</h4>
								</div>
								
								<div class="lp_edit_indent">
								
								
									<div class="fieldarea">
											<span class="fieldtitle">Seperator Style:</span>
											<span class="fielddesc">Choose pre-built seperator graphics...</span>
											<br>
											<select name="seperatorStyle" id="seperatorStyle">
												<option <?php if($template['seperatorStyle'] == 'sep_1') { ?>selected<?php } ?> value="sep_1">Double Line Style</option>
												<option <?php if($template['seperatorStyle'] == 'sep_2') { ?>selected<?php } ?> value="sep_2">Drop Shadow Style</option>
												<option <?php if($template['seperatorStyle'] == 'sep_3') { ?>selected<?php } ?> value="sep_3">Grainy Style</option>
												<option <?php if($template['seperatorStyle'] == 'sep_4') { ?>selected<?php } ?> value="sep_4">Grungey Line Style</option>
											</select>
										</div>
										
										<div class="fieldarea">
											
											
											<div class="quoteText">
												<span class="fieldtitle">Custom Seperator URL: (leave empty to show above Image)</span>
												<span class="fielddesc">Show a custom image seperator from URL...</span>
												<input type="text" name="seperatorImage" value="<?php echo $template['seperatorImage']; ?>">
											</div>
											
											
										</div>
							</div>
							
							
							
							
						</div>
						
						<div class="columnBox" style="margin-left: 8px; margin-top: 15px;">
								
								<div class="well2" style=" margin-bottom: 25px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon2.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Copy Color Settings:</h2>
									<h4 style="margin-top: -12px;"  >You can change the colors the text on the elements of the page:</h4>
								</div>
								
								<div class="lp_edit_indent">
								
								
									<div class="fieldarea">
											
											<input type="text" class="color" name="logoColor" id="logoColor" value="<?php if($template['logoColor'] == ""){ echo "333"; } else { echo $template['logoColor'];} ?>" style="background-color: #<?php if($template['logoColor'] == ""){ echo "333"; } else { echo $template['logoColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Logo Text Color:</span>
											<span class="fielddesc">The text color of your main logo...</span>
											
											<hr>
											
											<input type="text" class="color" name="logoSubColor"  id="logoSubColor" value="<?php if($template['logoSubColor'] == ""){ echo "333"; } else { echo $template['logoSubColor'];} ?>" style="background-color: #<?php if($template['logoSubColor'] == ""){ echo "333"; } else { echo $template['logoSubColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Sub - Logo Text Color:</span>
											<span class="fielddesc">The text color of your sub - logo text...</span>
											
											<hr>
											
											<input type="text" class="color" name="ctaSubColor" id="ctaSubColor" value="<?php if($template['ctaSubColor'] == ""){ echo "767676"; } else { echo $template['ctaSubColor'];} ?>" style="background-color: #<?php if($template['ctaSubColor'] == ""){ echo "767676"; } else { echo $template['ctaSubColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Call CTA Sub Headline:</span>
											<span class="fielddesc">The text color of your sub headline above the phone #...</span>
											
											<hr>
											
											<input type="text" class="color" name="ctaColor" id="ctaColor" value="<?php if($template['ctaColor'] == ""){ echo "333"; } else { echo $template['ctaColor'];} ?>" style="background-color: #<?php if($template['ctaColor'] == ""){ echo "333"; } else { echo $template['ctaColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Call CTA Headline:</span>
											<span class="fielddesc">The text color of your headline - the phone #...</span>
											
											<hr>
											
											<input type="text" class="color" name="standoutColor" id="standoutColor" value="<?php if($template['ctaColor'] == ""){ echo "FFF"; } else { echo $template['standoutColor'];} ?>" style="background-color: #<?php if($template['standoutColor'] == ""){ echo "FFF"; } else { echo $template['standoutColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Stand Out Headline:</span>
											<span class="fielddesc">This headline appears above the video / optin area...</span>
											
											<hr>
											
											<input type="text" class="color" name="optColor" id="optColor" value="<?php if($template['optColor'] == ""){ echo "FFF"; } else { echo $template['optColor'];} ?>" style="background-color: #<?php if($template['optColor'] == ""){ echo "FFF"; } else { echo $template['optColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Optin Headline:</span>
											<span class="fielddesc">This headline appears above the optin box...</span>
											
											<hr>
											
											<input type="text" class="color" name="headlineColor" id="headlineColor" value="<?php if($template['headlineColor'] == ""){ echo "333"; } else { echo $template['headlineColor'];} ?>" style="background-color: #<?php if($template['headlineColor'] == ""){ echo "333"; } else { echo $template['headlineColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Main Headline:</span>
											<span class="fielddesc">This headline appears under the video...</span>
											
											<hr>
											
											<input type="text" class="color" name="featureHeadlineColor" id="featureHeadlineColor" value="<?php if($template['featureHeadlineColor'] == ""){ echo "333"; } else { echo $template['featureHeadlineColor'];} ?>" style="background-color: #<?php if($template['featureHeadlineColor'] == ""){ echo "333"; } else { echo $template['featureHeadlineColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Feature Headline:</span>
											<span class="fielddesc">The color for all the feature headlines...</span>
											
											<hr>
											
											<input type="text" class="color" name="featureTextColor" id="featureTextColor" value="<?php if($template['featureTextColor'] == ""){ echo "757575"; } else { echo $template['featureTextColor'];} ?>" style="background-color: #<?php if($template['featureTextColor'] == ""){ echo "757575"; } else { echo $template['featureTextColor'];} ?>; margin-top: -5px;">
											
											<span class="fieldtitle">Feature Copy:</span>
											<span class="fielddesc">The color for all the feature content...</span>
											
											<hr>
											
										</div>
										
										
							</div>
							
							
							</div>
							
						</div>
						
						
							</div>
						
						<!-- END OF LANDING PAGE EOA -->
						
						<br clear="all">
						<div class="innerBar" style="clear: both; margin-top: 20px;">
							<input type="submit" class=" btn btn-success btn-large" style="font-weight: bold;text-decoration: none; float: right; margin-right: 10px; margin-top: 10px; color: #fff;" value="Save Landing Page Settings" >
						</div>
					</form>
				</div>
				<div id="tab3" class="tab" style="display: none;">
					<div id="landingpageTOPbar">
					
					<div id="lp_title">
						<img src="<?php echo $imagePath; ?>/images/notificationstitle.png" style="margin-left: 20px; margin-top: 20px;" >
					</div>
					
					<div id="lp_edittitle">
						<!-- <img src="<?php echo $imagePath; ?>/images/landingpageedit/edittitle.png"> -->
					</div>
					
					
					
				</div>
				
				<br clear="all">
				
				<div id="lp_menu1">
					
					
					<div id="lpmenu_emailsettings" class="lpmenu_item1 lpmenu_current1" lpmenu_name1="emailSettings" >
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item11.png">
					</div>
					
					<div id="lpmenu_smssettings" class="lpmenu_item1" lpmenu_name1="smsSettings">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item12.png"  >
					</div>
					
					<div id="lpmenu_client1" class="lpmenu_item1" lpmenu_name1="client1">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item14.png"  >
					</div>
					
					<div id="lpmenu_optin" class="lpmenu_item1" lpmenu_name1="client2">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item15.png">
					</div>
					
					<div id="lpmenu_ar" class="lpmenu_item1" lpmenu_name1="client3">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item16.png">
					</div>
					
					<div id="lpmenu_subheadline" class="lpmenu_item1" lpmenu_name1="client4">
						<img src="<?php echo $imagePath; ?>/images/landingpageedit/item17.png">
					</div>
					
					
					
				</div>
				<form name="plugin_form" id="formSave" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
						<input type="hidden" name="plugin_hidden" value="saveNotifications">
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
	<input type="hidden" name="id" value="<?php echo $template['id']; ?>">
				
				
						<div class="columnBox emailSettings lpedit_box1" style="margin-left: 0px; margin-top: 15px;">
								
								<?php 
								
								global $wpdb;
								$table_db_name2 = $wpdb->prefix . "wpleadmachineSettings";
								$templates3 = $wpdb->get_results("SELECT * FROM $table_db_name2 WHERE id= 1", ARRAY_A);
								
								foreach($templates3 as $template3){}
								//print_r($templates3);
								
								$emailName = $template3['emailName'];
								$emailEmail = $template3['emailEmail'];
								$sendGridEmail = $template3['sendGridEmail'];
								$sendGridPassword = $template3['sendGridPassword'];
								
								if($emailName == "" || $emailEmail == "" || $sendGridEmail == "" || $sendGridPassword == "" ){
									echo "<span class='label label-important'>SendGrid Is NOT Setup - Email Messaging Is Disabled</span>";
								} else {
									echo "<span class='label label-success' >SendGrid Is Setup - Email Messaging Is Enabled</span>";
								}
								?>
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: 25px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon13.png" align="left" style="margin-right: 15px; margin-top: 10px; " />
									
									<h2 style="color: #333538;">Email Notification:</h2>
									<h4 style="margin-top: -12px;"  >Customize the email that your clients get notified with:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										<div class="fieldarea">
												<span class="fieldtitle">Subject Line:</span>
												<span class="fielddesc">Customize the email subject line...</span>
												<input type="text" name="subjectLine" value="<?php echo htmlentities(stripslashes($template['subjectLine'])); ?>">
												<span class="fieldtitle">Email Body:</span>
												<span class="fielddesc">Customize the body content of email...</span>
												<textarea class="mceEditor" name="emailBody"  style="width: 100%; height: 200px;" ><?php echo htmlentities(stripslashes($template['emailBody'])); ?></textarea>
											
										</div>
									</div>
							</div>
							<div class="columnBox smsSettings lpedit_box1" style="margin-top: 15px; display: none;">
								
								<?php 
								
								global $wpdb;
								$table_db_name2 = $wpdb->prefix . "wpleadmachineSettings";
								$templates2 = $wpdb->get_results("SELECT * FROM $table_db_name2 WHERE id= 1", ARRAY_A);
								
								foreach($templates2 as $template2){}
								
								$twilioID = $template2['twilioID'];
								$twilioAuth = $template2['twilioAuth'];
								$twilioNumber = $template2['twilioNumber'];
								
								if($twilioID == "" || $twilioAuth == "" || $twilioNumber== "" ){
									echo "<span class='label label-important'>Twilio Is NOT Setup - SMS Messaging Is Disabled</span>";
								} else {
									echo "<span class='label label-success' >Twilio Is Setup - SMS Messaging Is Enabled</span>";
								}
								?>
								
								<div class="well2" style=" margin-bottom: 10px; margin-top: 25px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon18.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">SMS Text Message Settings:</h2>
									<h4 style="margin-top: -12px;"  >Customize the text message that is sent out:</h4>
								</div>
								
								
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										<div class="fieldarea">
											
											
												<span class="fieldtitle">Text Message:</span>
												<span class="fielddesc">Show before lead information...</span>
												<input type="text" name="textMessage" value="<?php echo htmlentities(stripslashes($template['textMessage'])); ?>">
												<p>- Name - Email - Phone Number</p>
											
											
											
										</div>
									</div>
							</div>
							<div class="columnBox  client1 lpedit_box1" style="margin-top: 15px; display: none;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon19.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Client #1 Details:</h2>
									<h4 style="margin-top: -12px;"  >Notify your clients with email and SMS text message:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										<div class="fieldarea">
											
											
												<span class="fieldtitle">Client Name:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client1Name" value="<?php echo $template['client1Name']; ?>">
												<span class="fieldtitle">Client Email:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client1Email" value="<?php echo $template['client1Email']; ?>">
												<span class="fieldtitle">Client Phone:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client1Phone" value="<?php echo $template['client1Phone']; ?>">
											
											
											
										</div>
									</div>
							</div>
							
							<div class="columnBox client2 lpedit_box1" style="margin-top: 15px; display: none;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon19.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Client #2 Details:</h2>
									<h4 style="margin-top: -12px;"  >Notify your clients with email and SMS text message:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										<div class="fieldarea">
											
											
												<span class="fieldtitle">Client Name:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client2Name" value="<?php echo $template['client2Name']; ?>">
												<span class="fieldtitle">Client Email:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client2Email" value="<?php echo $template['client2Email']; ?>">
												<span class="fieldtitle">Client Phone:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client2Phone" value="<?php echo $template['client2Phone']; ?>">
											
											
											
										</div>
									</div>
							</div>
							
							<div class="columnBox client3 lpedit_box1" style="margin-top: 15px; display: none;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon19.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Client #3 Details:</h2>
									<h4 style="margin-top: -12px;"  >Notify your clients with email and SMS text message:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										<div class="fieldarea">
											
											
												<span class="fieldtitle">Client Name:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client3Name" value="<?php echo $template['client3Name']; ?>">
												<span class="fieldtitle">Client Email:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client3Email" value="<?php echo $template['client3Email']; ?>">
												<span class="fieldtitle">Client Phone:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client3Phone" value="<?php echo $template['client3Phone']; ?>">
											
											
											
										</div>
									</div>
							</div>
							
							<div class="columnBox client4 lpedit_box1" style="margin-top: 15px; display: none;">
								<div class="well2" style=" margin-bottom: 10px; margin-top: -5px;">
									
									<img src="<?php echo $imagePath; ?>/images/landingpageedit/icon19.png" align="left" style="margin-right: 15px; margin-top: 10px; margin-left: 5px;" />
									
									<h2 style="color: #333538;">Client #4 Details:</h2>
									<h4 style="margin-top: -12px;"  >Notify your clients with email and SMS text message:</h4>
								</div>
								
								<div class="lp_edit_indent" style=" margin-top: 25px;">
										<div class="fieldarea">
											
											
												<span class="fieldtitle">Client Name:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client4Name" value="<?php echo $template['client4Name']; ?>">
												<span class="fieldtitle">Client Email:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client4Email" value="<?php echo $template['client4Email']; ?>">
												<span class="fieldtitle">Client Phone:</span>
												<span class="fielddesc">Shown on email and text message...</span>
												<input type="text" name="client4Phone" value="<?php echo $template['client4Phone']; ?>">
										
											
										</div>
									</div>
							</div>
							<br clear="all"><br>
						<!-- <div class="columnBox" style="float: right; margin-left: 2%; margin-right: 8px;  margin-top: 15px;">
							<div style="border-bottom: 1px solid #ccc; margin-bottom: 10px;">
								<br>
								<img src="<?php echo $imagePath; ?>/images/sendgrid.png" style="float: right">
								<h2>Edit SendGrid API</h2>
								<h4>Signup for free to SendGrid to send out emails.</h4>
							</div>
							<a href="#"  class="css3button">Edit SendGrid API Settings</a>
							<div style="border-bottom: 1px solid #ccc; margin-bottom: 10px;">
								<br>
								<img src="<?php echo $imagePath; ?>/images/sms.png" style="float: right">
								<h2>Edit SMSified API</h2>
								<h4>Signup for free to SMSified to send out text messages.</h4>
							</div>
							<a href="#" class="css3button">Edit SMSified API Settings</a>
							<br clear="all" ><br><br>
						</div> -->
					<br clear="all" >
					<div class="innerBar" style="clear: both; margin-top: 20px;">
							<input type="submit" class=" btn btn-success btn-large" style="font-weight: bold;text-decoration: none; float: right; margin-right: 10px; margin-top: 10px; color: #fff;" value="Save Notification Settings" >
						</div>
					</form>
				</div>
				<div id="tab4" class="tab" style="display: none;">
					
				</div>
				
			</div>
			<br clear="all" >
		</div>
	</div>
<?php }  ?>
<?php if ($_GET['delete'] == "yes") { 
	
	delete_client($_GET['id']);
	?>
		<div class="alert alert-danger" style="width: 300px;margin-top: 25px; margin-right: 2%">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Successfully Deleted</strong>
    </div>
	<?php
}
		
?>
<?php if ($_GET['client'] == "" && $_GET['new'] == "") { ?>
	<div id="topBar">
		<img src="<?php echo $imagePath; ?>/images/clientlist.png" style="margin-left: 20px; margin-top: 13px;" />
		
		<a href="../wp-admin/admin.php?page=wplocalfusion&new=client" class="btn btn-inverse btn-large" style="text-decoration: none; float: right; margin-right: 10px; margin-top: 8px;">
		<img src="<?php echo $imagePath; ?>/images/icon_addclient.png" align="left" style="margin-right: 8px; margin-top: -0px;" > Add New Client</a>
		
		
	</div>
	
	
	
		<?php
		
	
		
		
    		  global $post;
			  global $wpdb;
			  $getOptin = get_post_meta( $post->ID, 'rndNumber', true );
			  $table_db_name = $wpdb->prefix . "wpleadmachineClients";
			  $templates = $wpdb->get_results("SELECT * FROM $table_db_name",ARRAY_A);
			  $templates = array_reverse($templates );
			  $tpl = get_post_meta($post->ID,'_template',true);
			
				
        ?>
	       <?php
	       foreach($templates as $template)
				{
					?>
							<div class="wrapper-plugin clearfix client">
								<div id="logoArea" style="margin-top: -16px;">
										<img src="<?php echo $template['photo']; ?>" class="clientImage">
										<div id="clientName">
											<h2><a href="../wp-admin/admin.php?page=wplocalfusion&client=<?php echo $template['name']; ?>" style="text-decoration: none; color: #fff;"><?php echo $template['name']; ?></a></h2>
											<h4 class="clientdesc"><?php echo $template['description']; ?></h4>
										</div>
									</div>
									
									<?php 
									
									global $post;
		global $wpdb;
		$getOptin = get_post_meta( $post->ID, 'rndNumber', true );
		$table_db_name3 = $wpdb->prefix . "wpleadmachineLeads";
		$client = $template['name'];
		$templates3 = $wpdb->get_results("SELECT * FROM $table_db_name3 WHERE client = '$client'");
		$checkLeads2 = 0;
		foreach($templates3 as $template3) { $checkLeads2 = $checkLeads2 + 1;  }
		
									?>
									 
										
										<div id="statBoxes" style="margin-top: -1px;">
											<h3 class="totalVisitors"><?php  if ($template['tracked'] == "") { echo "0"; } else { echo $template['tracked']; } ?></h3>
											<h3 class="conversions"><?php echo get_percentage($template['tracked'],$checkLeads2) ."%"; ?></h3>
											<h3 class="totalLeads"><?php echo $checkLeads2;  ?></h3>
										</div>
									<a href="../wp-admin/admin.php?page=wplocalfusion&client=<?php echo $template['name']; ?>" class="viewDashboard">View Client Dashboard</a>
							</div>
					<?php
				
				
				}
		
		?>
<?php } ?>
<br>
<p style="text-align: center">Copyright &copy; 2012 - <strong>WP Local Fusion</strong> - All Rights Reserved <br>The Ultimate Lead Capturing and Client Management Wordpress Plugin <br><small>Brought to You By <a href="#">AgencyScripts - Internet Marketing 2.0</a></small></p>