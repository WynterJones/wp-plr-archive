
<a name="top"></a>
<div id="topBar">
	
	 <?php $path = plugins_url(); ?> 
	<img src="<?php echo $path; ?>/wp_quik/images/logo.png">
</div>
<div id="buzzNav">
	<a href="#top" tab='mainSettings'  class='mainSettings tablink active' style="float: left;">
		<img style="display: block" src="https://cdn2.iconfinder.com/data/icons/crystalproject/32x32/apps/Service%20Manager.png" alt="">
		Main Settings</a>
	<a href="#top" tab='designSettings' class='designSettings tablink' style="float: left;">
		<img style="display: block" src="http://cdn1.iconfinder.com/data/icons/nuvola2/32x32/apps/package_utilities.png" alt="">
		Design</a>
	<!-- <a href="#top" tab="featureSettings" class="featureSettings tablink" style="float: left;">
		<img style="display: block" src="http://cdn2.iconfinder.com/data/icons/32pxmania/misc_57.png" alt="">
		Feature Area</a> -->
	<!-- <a href="#top"  tab="memeSettings" class="memeSettings tablink" style="float: left;">
		<img style="display: block" src="http://cdn2.iconfinder.com/data/icons/tango/32x32/mimetypes/image-x-generic.png" alt="">
		Create Meme</a> -->
	<a href="#top"  tab="socialSettings" class="socialSettings tablink" style="float: left;">
		<img style="display: block" src="http://cdn2.iconfinder.com/data/icons/Rounded_32px/32/Facebook.png" alt="">
		Social Share</a>
	<a href="#top"  tab="leadSettings" class="leadSettings tablink" style="float: left;">
		<img style="display: block" src="http://cdn5.iconfinder.com/data/icons/woocons1/Mail.png" alt="">
		Email Leads</a>

</div>			                  
<div class="tab mainSettings">  
	<h2>Logo Options:</h2>
<p>
			<strong>Logo Image: <small>( leave blank to show below text )</small></strong><br />
			<input type="text" name="logoImage"  id="" value="<?php echo $logoImage; ?>" />
		</p>
		<hr>
		<p>
			<strong>Logo Headline Text:</strong><br />
			<input type="text" name="logoHeadline"  id="" value="<?php echo $logoHeadline; ?>" />
		</p>
		<p>
			<strong>Logo Tagline Text:</strong><br />
			<input type="text" name="logoTagline"  id="" value="<?php echo $logoTagline; ?>" />
		</p>
		<hr>
		<h2>Intro Options:</h2>
		<p>
			<strong>Company Name:</strong><br />
			<input type="text" name="companyName"  id="companyName" value="<?php echo $companyName; ?>" />
		</p>                  
		<p>
			<strong>Sub-Headline: <small>( small )</small></strong><br />
			<input type="text" name="subHeadline"  id="subHeadline" value="<?php echo $subHeadline; ?>" />
		</p>
		<p>
			<strong>Main Headline: <small>( large )</small></strong><br />
			<input type="text" name="main_headline" id="main_headline"  value="<?php echo $main_headline; ?>" />
		</p>
		<hr>
		<h2>Extra Content Options:</h2>
		<p>
			<strong>Footer Left Text:</strong><br />
			<input type="text" name="footerLeft"  id="footerLeft" value="<?php echo $footerLeft; ?>" />
		</p>
		<p>
			<strong>Footer Right Text:</strong><br />
			<input type="text" name="footerRight"  id="" value="<?php echo $footerRight; ?>" />
		</p>
		<p>
			<strong>Phone Number:</strong><br />
			<input type="text" name="phoneNumber"  id="" value="<?php echo $phoneNumber; ?>" />
		</p>
		
		<p>
			<strong>Email Address:</strong><br />
			<input type="text" name="emailAddress"  id="" value="<?php echo $emailAddress; ?>" />
		</p>
		
</div>             
	
<div class="tab designSettings" style="display: none">      
		<p>
			<strong>Background:</strong><br />
			<select name="background" id="background">
				<option value="bg1" <?php if($background == 'bg1') { ?>selected<?php } ?>>Light Background</option>
				<option value="bg2" <?php if($background == 'bg2') { ?>selected<?php } ?>>Dark Texture</option>
				<option value="bg3" <?php if($background == 'bg3') { ?>selected<?php } ?>>Light Texture</option>
				<option value="bg4" <?php if($background == 'bg4') { ?>selected<?php } ?>>Complex Texture</option>
				<option value="bg5" <?php if($background == 'bg5') { ?>selected<?php } ?>>Dark Blue Texture</option>
				<option value="bg6" <?php if($background == 'bg6') { ?>selected<?php } ?>>Subtle Dark Texture</option>
				<option value="bg8" <?php if($background == 'bg8') { ?>selected<?php } ?>>White Stripes Texture</option>
				<option value="bg9" <?php if($background == 'bg9') { ?>selected<?php } ?>>Carbon Texture</option>
				<option value="bg7" <?php if($background == 'bg7') { ?>selected<?php } ?>>Wood Texture #1</option>
				<option value="bg10" <?php if($background == 'bg10') { ?>selected<?php } ?>>Wood Texture #2</option>
				<option value="bg11" <?php if($background == 'bg11') { ?>selected<?php } ?>>Wood Texture #3</option>
				<option value="bg12" <?php if($background == 'bg12') { ?>selected<?php } ?>>Denim Texture</option>
				<option value="bg13" <?php if($background == 'bg13') { ?>selected<?php } ?>>Black CrissCorss Texture</option>
			</select>
		</p>
		<p>
			<strong>Header:</strong><br />
			<select name="header" id="header">
				<option value="white" <?php if($header == 'white') { ?>selected<?php } ?>>White</option>
				<option value="green" <?php if($header == 'green') { ?>selected<?php } ?>>Green</option>
				<option value="blue" <?php if($header == 'blue') { ?>selected<?php } ?>>Blue</option>
				<option value="red" <?php if($header == 'red') { ?>selected<?php } ?>>Red</option>
				<option value="black" <?php if($header == 'black') { ?>selected<?php } ?>>Black</option>
				<option value="orange" <?php if($header == 'orange') { ?>selected<?php } ?>>Orange</option>
			</select>
		</p>
		<p>
			<strong>Feature Box:</strong><br />
			<select name="feature" id="feature">
				<option value="white" <?php if($feature == 'white') { ?>selected<?php } ?>>White</option>
				<option value="green" <?php if($feature == 'green') { ?>selected<?php } ?>>Green</option>
				<option value="blue" <?php if($feature == 'blue') { ?>selected<?php } ?>>Blue</option>
				<option value="red" <?php if($feature == 'red') { ?>selected<?php } ?>>Red</option>
				<option value="black" <?php if($feature == 'black') { ?>selected<?php } ?>>Black</option>
				<option value="orange" <?php if($feature == 'orange') { ?>selected<?php } ?>>Orange</option>
			</select>
		</p>
		
</div> 		

<div class="tab featureSettings" style="display: none">      
		<p>
			<strong>Fo:</strong><br />
			<input type="text" name="featureheadline"  id="featureheadline" value="<?php echo $featureheadline; ?>" />
		</p>
		<h4 style="font-weight: bold; font-size: 17px">Feature Box #1</h4>
		<p>
			<strong>Headline:</strong><br />
			<input type="text" name="headline1"  id="headline1" value="<?php echo $headline1; ?>" />
		</p>
		<p>
			<strong>Text:</strong><br />
			<input type="text" name="text1"  id="text1" value="<?php echo $text1; ?>" />
		</p>
		<h4 style="font-weight: bold; font-size: 17px">Feature Box #2</h4>
		<p>
			<strong>Headline:</strong><br />
			<input type="text" name="headline2"  id="headline2" value="<?php echo $headline2; ?>" />
		</p>
		<p>
			<strong>Text:</strong><br />
			<input type="text" name="text2"  id="text2" value="<?php echo $text2; ?>" />
		</p>
		<h4 style="font-weight: bold; font-size: 17px">Feature Box #3</h4>
		<p>
			<strong>Headline:</strong><br />
			<input type="text" name="headline3"  id="headline3" value="<?php echo $headline3; ?>" />
		</p>
		<p>
			<strong>Text:</strong><br />
			<input type="text" name="text3"  id="text3" value="<?php echo $text3; ?>" />
		</p>
		
</div> 	

<div class="tab memeSettings" style="display: none"> 
		<p>
			<strong>Upload Image:</strong><br />
			<a href="#" class="upload_button">Upload Image</a>
			<input type="text" name="uploadphoto"  id="uploadphoto" value="<?php echo $uploadphoto; ?>" />
		</p>     
		<!-- <p>
			<strong>Font Style:</strong><br />
			<input type="text" name="fontstyle"  id="fontstyle" value="<?php echo $fontstyle; ?>" />
		</p> -->
		<p>
			<strong>Black or White Text:</strong><br />
			<select name="blackwhite" id="blackwhite">
				<option value="white" <?php if($blackwhite == 'white') { ?>selected<?php } ?>>White</option>
				<option value="black" <?php if($blackwhite == 'black') { ?>selected<?php } ?>>Black</option>
			</select>
		</p>

		<p>
			<strong>Top Text:</strong><br />
			<input type="text" name="toptext"  id="toptext" value="<?php echo $toptext; ?>" />
		</p>
		<p>
			<strong>Bottom Text:</strong><br />
			<input type="text" name="bottomtext"  id="bottomtext" value="<?php echo $bottomtext; ?>" />
		</p>
		
</div>		
		
<div class="tab leadSettings" style="display: none"> 

		<p>
			<strong>Your Email Leads:</strong><br />
			<table style="width: 100%; color: #444">
				<tr>
					<td style="background: #ccc; padding: 10px;font-weight: bold;">Name</trd>
					<td style="background: #ccc; padding: 10px;font-weight: bold;">Email Address</td>
					<td style="background: #ccc; padding: 10px;font-weight: bold;">Page ID</td>
					<td style="background: #ccc; padding: 10px;font-weight: bold;">Meme Image</td>
				</r>
				<?php foreach($templates as $template) { ?>
					<tr>
						<td style="padding: 10px;"><?php echo $template['name']; ?></td>
						<td style="padding: 10px;"><?php echo $template['email'];  ?></td>
						<td style="padding: 10px;"><?php echo $template['pageID'];  ?></td>
						<td style="padding: 10px;"><?php echo $template['memeImage']; ?></td>
					</tr>
				<?php } ?>
			</table>
			<br>
			<strong>Copy &amp; Paste into a New File, Save as .CSV and Import to Auto-Responder Service</strong>
			<textarea style="display: block" id="leads" cols="30" rows="10">Name, Email Address <?php echo chr(13); foreach($templates as $template) { ?><?php echo $template['name']; ?>, <?php echo $template['email'];  echo chr(13); ?><?php } ?></textarea>
		</p>     
		
		
</div>

<div class="tab socialSettings" style="display: none">      
		<p>
			<strong>Follow Headline:</strong><br />
			<input type="text" name="social_Headline"  id="social_Headline" value="<?php echo $social_Headline; ?>" />
		</p>
		<p>
			<strong>Facebook FanPage URL:</strong><br />
			<input type="text" name="socialFB"  id="socialFB" value="<?php echo $socialFB; ?>" />
		</p>
		<p>
			<strong>Twitter Profile URL:</strong><br />
			<input type="text" name="socialTwitter"  id="socialTwitter" value="<?php echo $socialTwitter; ?>" />
		</p>
		<p>
			<strong>Google Plus Page URL:</strong><br />
			<input type="text" name="socialGoogle"  id="socialGoogle" value="<?php echo $socialGoogle; ?>" />
		</p>
		<p>
			<strong>Linkedin Profile URL:</strong><br />
			<input type="text" name="socialLinkedin"  id="socialLinkedin" value="<?php echo $socialLinkedin; ?>" />
		</p>
		
</div> 			
<br clear="all">