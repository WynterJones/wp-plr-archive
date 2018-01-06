

<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
		
	#wrapper {
		width: 600px;
		padding: 10px;
		font-family: 'Roboto Condensed', serif;
		font-size: 14px;
	}
	.float {
		float: left;
		width: 260px;
	}
	.right {
		float: right;
		width: 260px;
	}
	.long {
		
		width: 100%;
		clear: both;
	}
	select {
		width: 100%;
	}
	input[type=text], textarea {
		width: 100%;
	}
	#wrapper h3 {
		font-weight: normal;
	}
	
	h1, h2, h3, h4 {
		color: #444;
	}
	hr {
		border: none;
		border-bottom: 1px solid #ddd;
		border-top: 3px solid #eee;
	}
	.tabLink {
		text-decoration: none;
		padding: 10px;
		float: left;
		text-align: center;
		background: #fafafa;
		margin-right: 4px;
		color: #333;
		border: 1px solid #ccc;
		border-bottom: none;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
	.tabLink.active, .tabLink:hover {
		background: #6ba4fc;
		color: #fff;
	}
	.stat {
	background: #ddd;
	text-align: center;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 3px;
	float: left;
	margin-right: 10px;
	width: 168px;
	margin-bottom: 15px;
}
	.stat span {
		display: block;
		font-size: 39px;
		font-weight: bold;
		padding: 10px 0;
	}
	.stat strong {
		display: block;
		padding: 4px 0;
		font-size: 16px;
		font-weight: normal;
	}
</style>	
<script src="http://code.jquery.com/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>js/fontselect.css" />
<script src="<?php echo plugin_dir_url( __FILE__ ); ?>js/jquery.fontselect.js"></script>

<script>
	
	$(document).ready(function() {
		$('#headlineFont').fontselect().change(function(){
          var font = $(this).val().replace(/\+/g, ' ');
          font = font.split(':');
          $('.headlineFont').val(font[0]);
        });


         
		
		$('#tab1_link').click(function() {
			$('.tab').hide();
			$('#tab1Box').fadeIn();
			$('.tabLink').removeClass('active');
			$(this).addClass('active');
		});

		$('#tab2_link').click(function() {
			$('.tab').hide();
			$('#tab2Box').fadeIn();
			$('.tabLink').removeClass('active');
			$(this).addClass('active');
		});

		$('#tab3_link').click(function() {
			$('.tab').hide();
			$('#tab3Box').fadeIn();
			$('.tabLink').removeClass('active');
			$(this).addClass('active');
		});

		$('#tab4_link').click(function() {
			$('.tab').hide();
			$('#tab4Box').fadeIn();
			$('.tabLink').removeClass('active');
			$(this).addClass('active');
		});

		$('#tab5_link').click(function() {
			$('.tab').hide();
			$('#tab5Box').fadeIn();
			$('.tabLink').removeClass('active');
			$(this).addClass('active');
		});

		
	});
</script>
 	
   <div id="wrapper" >
  	
<form id="form" name="plugin_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		  
   	  			<img src="../wp-content/plugins/optinpopx/images/logo.png" style="margin: 0 auto; display: block"> <br><br>
   	  			<?php 
	
			if ( 'save' == $_REQUEST['action'] ) {
	
				if(isset($_REQUEST['optinpopx_show'])) {
					update_option('optinpopx_show', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_show']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_headline'])) {
					update_option('optinpopx_headline', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_headline']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_subheadline'])) {
					update_option('optinpopx_subheadline', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_subheadline']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_content'])) {
					update_option('optinpopx_content', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_content']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_replaceimage'])) {
					update_option('optinpopx_replaceimage', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_replaceimage']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_headline2'])) {
					update_option('optinpopx_headline2', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_headline2']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_subheadline2'])) {
					update_option('optinpopx_subheadline2', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_subheadline2']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_content2'])) {
					update_option('optinpopx_content2', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_content2']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_replaceimage2'])) {
					update_option('optinpopx_replaceimage2', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_replaceimage2']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_yes'])) {
					update_option('optinpopx_yes', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_yes']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_no'])) {
					update_option('optinpopx_no', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_no']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_question'])) {
					update_option('optinpopx_question', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_question']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_optinheadline'])) {
					update_option('optinpopx_optinheadline', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_optinheadline']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_name'])) {
					update_option('optinpopx_name', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_name']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_email'])) {
					update_option('optinpopx_email', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_email']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_autoresponder'])) {
					update_option('optinpopx_autoresponder', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_autoresponder']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_buttontext'])) {
					update_option('optinpopx_buttontext', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_buttontext']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_yesColor'])) {
					update_option('optinpopx_yesColor', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_yesColor']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_noColor'])) {
					update_option('optinpopx_noColor', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_noColor']), ENT_NOQUOTES, "iso-8859-1")));
				} 

				if(isset($_REQUEST['optinpopx_buttonColor'])) {
					update_option('optinpopx_buttonColor', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_buttonColor']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_effect'])) {
					update_option('optinpopx_effect', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_effect']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				if(isset($_REQUEST['optinpopx_font'])) {
					update_option('optinpopx_font', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['optinpopx_font']), ENT_NOQUOTES, "iso-8859-1")));
				} 
				
 

				echo '<div id="message" class="updated fade" style="margin-top: -20px; margin-bottom: 20px"><p>You have saved the settings!</p></div><br/><br>';
				 
			} 
		
	
	
		global $themename, $shortname, $options;
	
		
	
	?>
				
   	  			<div style="padding: 0 10px; margin-top: -50px; text-align: center">
   	  				<h1 style="color: #555">Setup Your Lead Generating Exit Popup</h1>
   	  				<p style="font-size: 15px; line-height: 21px; padding: 0 20px">Welcome to Optin Pop plugin for wordpress. The lead generating popup will activate when the user has moved their mouse away from your blog to grab the attention of your users.</p>
   	  				
   	  			</div>

   	  			<div >

   	  				<div class="stat">
   	  					<span><?php echo get_option('optinpopx_views'); ?></span>
   	  					<strong>Popup Views</strong>
   	  				</div>
   	  				<div class="stat">
   	  					<span><?php echo get_option('optinpopx_clicks'); ?></span>
   	  					<strong>Sign Ups</strong>
   	  				</div>
   	  				<div class="stat" style="float: right">
   	  					<span><?php

$views =  get_option('optinpopx_views');
$clicks =  get_option('optinpopx_clicks');
$ctr = 100 * intval($clicks) / intval($views);
if($ctr == '') {
	echo '0';
}
else {
	echo str_replace('.','',substr($ctr, 0, 2));
}

                	 ?>%</span>
                	 <strong>Conversion Rate</strong></div>
   	  				
	   	  			<select style="width: 300px; float: right"name="optinpopx_show" id="optinpopx_show">
	   	  				<option value="hide" <?php if (get_option('optinpopx_show') == 'hide' ) { ?> selected <?php } ?>>Hide</option>
	   	  				<option value="show" <?php if (get_option('optinpopx_show') == 'show' ) { ?> selected <?php } ?>>Show</option>
	   	  			</select>
	   	  			<h3><img src="http://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/stock/object/stock_slide-showhide.png" style="float: left; padding-right: 10px;">Show or Hide OptinPop?</h3>
   	  			</div>
   	  			<br>

   	  			<a href="#" id="tab1_link" class="tabLink active">Quetion</a>
   	  			<a href="#" id="tab2_link" class="tabLink">Step #1 Content</a>
   	  			<a href="#" id="tab3_link" class="tabLink">Step #2 Content</a>
   	  			<a href="#" id="tab4_link" class="tabLink">Edit Design</a>
   	  			<a href="#" id="tab5_link" class="tabLink">Auto-Responder</a>
   	  			<br clear="all">
   	  			
				<div id="tab1Box"  class="tab"><div style="background: #fafafa; border: 1px solid #ccc; padding: 10px 20px;"> 
					<h2 style="margin-bottom: 0"><strong>The Question</strong></h2>
   	  			<p style="font-size: 12px;  color: #777">The headline to your YES/NO to reveal the optin box.</p>
   	  				
   	  				<div class="long">
	   	  			<h3>The Question Headline</h3>

	   	  			<input type="text" name="optinpopx_question" value="<?php echo get_option('optinpopx_question'); ?>" />
   	  			</div>
				<div class="float">
	   	  			<h3>YES (Button Text)</h3>


	   	  			<input type="text" name="optinpopx_yes" value="<?php echo get_option('optinpopx_yes'); ?>" />
   	  			</div>
   	  			<div class="right">
	   	  			<h3>NO (Button Text)</h3>

	   	  			<input type="text" name="optinpopx_no" value="<?php echo get_option('optinpopx_no'); ?>" />
   	  			</div>

   	  			

   	  			<br clear="all"><br>
				</div></div>

				<div id="tab2Box" class="tab" style="display: none">
						<div style="background: #fafafa; border: 1px solid #ccc; padding: 10px 20px;"> 
<!-- START -->

   	  					<h2 style="margin-bottom: 0"><strong>Step #1 Content</strong></h2>
   	  			<p style="font-size: 12px;  color: #777">The first step your user will read when they leave the page.</p>
   	  				
				<div class="float">
	   	  			<h3>Main Headline</h3>


	   	  			<input type="text" name="optinpopx_headline" value="<?php echo get_option('optinpopx_headline'); ?>" />
   	  			</div>
   	  			<div class="right">
	   	  			<h3>Sub Headline</h3>

	   	  			<input type="text" name="optinpopx_subheadline" value="<?php echo get_option('optinpopx_subheadline'); ?>" />
   	  			</div>

   	  			<div class="long">

	   	  			<h3 style="padding-top: 20px;">Paragraph of Text</h3>

	   	  			<textarea name="optinpopx_content"cols="10" style="height: 80px;"rows="10"><?php echo get_option('optinpopx_content'); ?></textarea>
   	  			</div>

   	  			<div class="long">
	   	  			<h3>(OR) Replace Content with Image <small style="color: #999; font-size: 11px;">(resized to 400px width)</small></h3>

	   	  			<input type="text" name="optinpopx_replaceimage" value="<?php echo get_option('optinpopx_replaceimage'); ?>" />
   	  			</div>

   	  			<br>
<!-- END -->
   	  			</div>
				</div>

				<div id="tab3Box" class="tab" style="display: none"><div style="background: #fafafa; border: 1px solid #ccc; padding: 10px 20px;"> 
					<!-- START -->

   	  					<h2 style="margin-bottom: 0"><strong>Step #2 Content</strong></h2>
   	  			<p style="font-size: 12px;  color: #777">The second step your user after they have hit yes!</p>
   	  				
				<div class="float">
	   	  			<h3>Main Headline</h3>


	   	  			<input type="text" name="optinpopx_headline2" value="<?php echo get_option('optinpopx_headline2'); ?>" />
   	  			</div>
   	  			<div class="right">
	   	  			<h3>Sub Headline</h3>

	   	  			<input type="text" name="optinpopx_subheadline2" value="<?php echo get_option('optinpopx_subheadline2'); ?>" />
   	  			</div>

   	  			<div class="long">

	   	  			<h3 style="padding-top: 20px;">Paragraph of Text</h3>

	   	  			<textarea name="optinpopx_content2"cols="10" style="height: 80px;"rows="10"><?php echo get_option('optinpopx_content2'); ?></textarea>
   	  			</div>

   	  			<div class="long">
	   	  			<h3>(OR) Replace Content with Image <small style="color: #999; font-size: 11px;">(resized to 400px width)</small></h3>

	   	  			<input type="text" name="optinpopx_replaceimage2" value="<?php echo get_option('optinpopx_replaceimage2'); ?>" />
   	  			</div>

   	  			<br>
<!-- END -->
				</div></div>

				<div id="tab4Box" class="tab" style="display: none"><div style="background: #fafafa; border: 1px solid #ccc; padding: 10px 20px;"> 
					

					<h2 style="margin-bottom: 0"><strong>Design Your Popup</strong></h2>
   	  			<p style="font-size: 12px;  color: #777">Change the font, button colors and popup effect.</p>

   	  			<div class="long">
   	  				<h3>Choose Google Font</h3>
   	  				<input id="headlineFont" type="text" value="<?php echo get_option('optinpopx_font'); ?>" /> 
   	  			<input type="hidden" name="optinpopx_font" class="headlineFont"  value="<?php echo get_option('optinpopx_font'); ?>">

   	  			</div>   	  				<div class="float">
					
	   	  			<h3>YES Button Color</h3>
					<select name="optinpopx_yesColor">
						<option value="facebook" <?php if(get_option('optinpopx_yesColor') == 'facebook') { ?>selected<?php } ?>>Purple</option>
						<option value="google" <?php if(get_option('optinpopx_yesColor') == 'google') { ?>selected<?php } ?>>Light Blue #1</option>
						<option value="twitter" <?php if(get_option('optinpopx_yesColor') == 'twitter') { ?>selected<?php } ?>>Light Blue #2</option>
						<option value="linkedin" <?php if(get_option('optinpopx_yesColor') == 'linkedin') { ?>selected<?php } ?>>Dark Blue</option>
						<option value="dropbox" <?php if(get_option('optinpopx_yesColor') == 'dropbox') { ?>selected<?php } ?>>Grey</option>
						<option value="evernote" <?php if(get_option('optinpopx_yesColor') == 'evernote') { ?>selected<?php } ?>>Green</option>
						<option value="forrst" <?php if(get_option('optinpopx_yesColor') == 'forrst') { ?>selected<?php } ?>>Dark Green</option>
						<option value="dribbble" <?php if(get_option('optinpopx_yesColor') == 'dribbble') { ?>selected<?php } ?>>Pink</option>
						<option value="cloudapp" <?php if(get_option('optinpopx_yesColor') == 'cloudapp') { ?>selected<?php } ?>>Grey #2</option>
						<option value="spotify" <?php if(get_option('optinpopx_yesColor') == 'spotify') { ?>selected<?php } ?>>Green #2</option>
						<option value="soundcloud" <?php if(get_option('optinpopx_yesColor') == 'soundcloud') { ?>selected<?php } ?>>Orange</option>
						<option value="tumblr" <?php if(get_option('optinpopx_yesColor') == 'tumblr') { ?>selected<?php } ?>>Dark Blue #2</option>
						<option value="smashing" <?php if(get_option('optinpopx_yesColor') == 'smashing') { ?>selected<?php } ?>>Red #2</option>
						<option value="itunes" <?php if(get_option('optinpopx_yesColor') == 'itunes') { ?>selected<?php } ?>>Grey #3</option>
						<option value="appstore" <?php if(get_option('optinpopx_yesColor') == 'appstore') { ?>selected<?php } ?>>Black #1</option>
						<option value="macstore" <?php if(get_option('optinpopx_yesColor') == 'macstore') { ?>selected<?php } ?>>Bright Blue</option>
						<option value="pinterest" <?php if(get_option('optinpopx_yesColor') == 'pinterest') { ?>selected<?php } ?>>Dark Red</option>
						<option value="android" <?php if(get_option('optinpopx_yesColor') == 'android') { ?>selected<?php } ?>>Green #3</option>
						<option value="quora" <?php if(get_option('optinpopx_yesColor') == 'quora') { ?>selected<?php } ?>>Darker Red</option>
						<option value="amazon" <?php if(get_option('optinpopx_yesColor') == 'amazon') { ?>selected<?php } ?>>Yellow</option>
						<option value="skype" <?php if(get_option('optinpopx_yesColor') == 'skype') { ?>selected<?php } ?>>Blue #3</option>
						<option value="lastfm" <?php if(get_option('optinpopx_yesColor') == 'lastfm') { ?>selected<?php } ?>>Red #4</option>
						<option value="yelp" <?php if(get_option('optinpopx_yesColor') == 'yelp') { ?>selected<?php } ?>>Red #5</option>
						<option value="foursquare" <?php if(get_option('optinpopx_yesColor') == 'foursquare') { ?>selected<?php } ?>>Light Blue</option>
						<option value="disqus" <?php if(get_option('optinpopx_yesColor') == 'disqus') { ?>selected<?php } ?>>Lighter Blue</option>
						<option value="gmail" <?php if(get_option('optinpopx_yesColor') == 'gmail') { ?>selected<?php } ?>>Dark Grey</option>
						<option value="songkick" <?php if(get_option('optinpopx_yesColor') == 'songkick') { ?>selected<?php } ?>>Bright Pink</option>
						<option value="flattr" <?php if(get_option('optinpopx_yesColor') == 'flattr') { ?>selected<?php } ?>>Bright Green</option>
						<option value="chrome" <?php if(get_option('optinpopx_yesColor') == 'chrome') { ?>selected<?php } ?>>Lovely Blue</option>
					</select>
   	  			</div>

   	  			<div class="right">
					
	   	  			<h3>NO Button Color</h3>
					<select name="optinpopx_noColor">
						<option value="facebook" <?php if(get_option('optinpopx_noColor') == 'facebook') { ?>selected<?php } ?>>Purple</option>
						<option value="google" <?php if(get_option('optinpopx_noColor') == 'google') { ?>selected<?php } ?>>Light Blue #1</option>
						<option value="twitter" <?php if(get_option('optinpopx_noColor') == 'twitter') { ?>selected<?php } ?>>Light Blue #2</option>
						<option value="linkedin" <?php if(get_option('optinpopx_noColor') == 'linkedin') { ?>selected<?php } ?>>Dark Blue</option>
						<option value="dropbox" <?php if(get_option('optinpopx_noColor') == 'dropbox') { ?>selected<?php } ?>>Grey</option>
						<option value="evernote" <?php if(get_option('optinpopx_noColor') == 'evernote') { ?>selected<?php } ?>>Green</option>
						<option value="forrst" <?php if(get_option('optinpopx_noColor') == 'forrst') { ?>selected<?php } ?>>Dark Green</option>
						<option value="dribbble" <?php if(get_option('optinpopx_noColor') == 'dribbble') { ?>selected<?php } ?>>Pink</option>
						<option value="cloudapp" <?php if(get_option('optinpopx_noColor') == 'cloudapp') { ?>selected<?php } ?>>Grey #2</option>
						<option value="spotify" <?php if(get_option('optinpopx_noColor') == 'spotify') { ?>selected<?php } ?>>Green #2</option>
						<option value="soundcloud" <?php if(get_option('optinpopx_noColor') == 'soundcloud') { ?>selected<?php } ?>>Orange</option>
						<option value="tumblr" <?php if(get_option('optinpopx_noColor') == 'tumblr') { ?>selected<?php } ?>>Dark Blue #2</option>
						<option value="smashing" <?php if(get_option('optinpopx_noColor') == 'smashing') { ?>selected<?php } ?>>Red #2</option>
						<option value="itunes" <?php if(get_option('optinpopx_noColor') == 'itunes') { ?>selected<?php } ?>>Grey #3</option>
						<option value="appstore" <?php if(get_option('optinpopx_noColor') == 'appstore') { ?>selected<?php } ?>>Black #1</option>
						<option value="macstore" <?php if(get_option('optinpopx_noColor') == 'macstore') { ?>selected<?php } ?>>Bright Blue</option>
						<option value="pinterest" <?php if(get_option('optinpopx_noColor') == 'pinterest') { ?>selected<?php } ?>>Dark Red</option>
						<option value="android" <?php if(get_option('optinpopx_noColor') == 'android') { ?>selected<?php } ?>>Green #3</option>
						<option value="quora" <?php if(get_option('optinpopx_noColor') == 'quora') { ?>selected<?php } ?>>Darker Red</option>
						<option value="amazon" <?php if(get_option('optinpopx_noColor') == 'amazon') { ?>selected<?php } ?>>Yellow</option>
						<option value="skype" <?php if(get_option('optinpopx_noColor') == 'skype') { ?>selected<?php } ?>>Blue #3</option>
						<option value="lastfm" <?php if(get_option('optinpopx_noColor') == 'lastfm') { ?>selected<?php } ?>>Red #4</option>
						<option value="yelp" <?php if(get_option('optinpopx_noColor') == 'yelp') { ?>selected<?php } ?>>Red #5</option>
						<option value="foursquare" <?php if(get_option('optinpopx_noColor') == 'foursquare') { ?>selected<?php } ?>>Light Blue</option>
						<option value="disqus" <?php if(get_option('optinpopx_noColor') == 'disqus') { ?>selected<?php } ?>>Lighter Blue</option>
						<option value="gmail" <?php if(get_option('optinpopx_noColor') == 'gmail') { ?>selected<?php } ?>>Dark Grey</option>
						<option value="songkick" <?php if(get_option('optinpopx_noColor') == 'songkick') { ?>selected<?php } ?>>Bright Pink</option>
						<option value="flattr" <?php if(get_option('optinpopx_noColor') == 'flattr') { ?>selected<?php } ?>>Bright Green</option>
						<option value="chrome" <?php if(get_option('optinpopx_noColor') == 'chrome') { ?>selected<?php } ?>>Lovely Blue</option>
					</select>
   	  			</div>

   	  			<div class="long">
					<br>
	   	  			<h3>Optin Button Color</h3>
					<select name="optinpopx_buttonColor">
						<option value="facebook" <?php if(get_option('optinpopx_buttonColor') == 'facebook') { ?>selected<?php } ?>>Purple</option>
						<option value="google" <?php if(get_option('optinpopx_buttonColor') == 'google') { ?>selected<?php } ?>>Light Blue #1</option>
						<option value="twitter" <?php if(get_option('optinpopx_buttonColor') == 'twitter') { ?>selected<?php } ?>>Light Blue #2</option>
						<option value="linkedin" <?php if(get_option('optinpopx_buttonColor') == 'linkedin') { ?>selected<?php } ?>>Dark Blue</option>
						<option value="dropbox" <?php if(get_option('optinpopx_buttonColor') == 'dropbox') { ?>selected<?php } ?>>Grey</option>
						<option value="evernote" <?php if(get_option('optinpopx_buttonColor') == 'evernote') { ?>selected<?php } ?>>Green</option>
						<option value="forrst" <?php if(get_option('optinpopx_buttonColor') == 'forrst') { ?>selected<?php } ?>>Dark Green</option>
						<option value="dribbble" <?php if(get_option('optinpopx_buttonColor') == 'dribbble') { ?>selected<?php } ?>>Pink</option>
						<option value="cloudapp" <?php if(get_option('optinpopx_buttonColor') == 'cloudapp') { ?>selected<?php } ?>>Grey #2</option>
						<option value="spotify" <?php if(get_option('optinpopx_buttonColor') == 'spotify') { ?>selected<?php } ?>>Green #2</option>
						<option value="soundcloud" <?php if(get_option('optinpopx_buttonColor') == 'soundcloud') { ?>selected<?php } ?>>Orange</option>
						<option value="tumblr" <?php if(get_option('optinpopx_buttonColor') == 'tumblr') { ?>selected<?php } ?>>Dark Blue #2</option>
						<option value="smashing" <?php if(get_option('optinpopx_buttonColor') == 'smashing') { ?>selected<?php } ?>>Red #2</option>
						<option value="itunes" <?php if(get_option('optinpopx_buttonColor') == 'itunes') { ?>selected<?php } ?>>Grey #3</option>
						<option value="appstore" <?php if(get_option('optinpopx_buttonColor') == 'appstore') { ?>selected<?php } ?>>Black #1</option>
						<option value="macstore" <?php if(get_option('optinpopx_buttonColor') == 'macstore') { ?>selected<?php } ?>>Bright Blue</option>
						<option value="pinterest" <?php if(get_option('optinpopx_buttonColor') == 'pinterest') { ?>selected<?php } ?>>Dark Red</option>
						<option value="android" <?php if(get_option('optinpopx_buttonColor') == 'android') { ?>selected<?php } ?>>Green #3</option>
						<option value="quora" <?php if(get_option('optinpopx_buttonColor') == 'quora') { ?>selected<?php } ?>>Darker Red</option>
						<option value="amazon" <?php if(get_option('optinpopx_buttonColor') == 'amazon') { ?>selected<?php } ?>>Yellow</option>
						<option value="skype" <?php if(get_option('optinpopx_buttonColor') == 'skype') { ?>selected<?php } ?>>Blue #3</option>
						<option value="lastfm" <?php if(get_option('optinpopx_buttonColor') == 'lastfm') { ?>selected<?php } ?>>Red #4</option>
						<option value="yelp" <?php if(get_option('optinpopx_buttonColor') == 'yelp') { ?>selected<?php } ?>>Red #5</option>
						<option value="foursquare" <?php if(get_option('optinpopx_buttonColor') == 'foursquare') { ?>selected<?php } ?>>Light Blue</option>
						<option value="disqus" <?php if(get_option('optinpopx_buttonColor') == 'disqus') { ?>selected<?php } ?>>Lighter Blue</option>
						<option value="gmail" <?php if(get_option('optinpopx_buttonColor') == 'gmail') { ?>selected<?php } ?>>Dark Grey</option>
						<option value="songkick" <?php if(get_option('optinpopx_buttonColor') == 'songkick') { ?>selected<?php } ?>>Bright Pink</option>
						<option value="flattr" <?php if(get_option('optinpopx_buttonColor') == 'flattr') { ?>selected<?php } ?>>Bright Green</option>
						<option value="chrome" <?php if(get_option('optinpopx_buttonColor') == 'chrome') { ?>selected<?php } ?>>Lovely Blue</option>
					</select>
   	  			</div>

   	  			<div class="long">
   	  				<h3>Popup Effect Style</h3>
   	  				<select name="optinpopx_effect">
						<option value="easeOutBounce" <?php if(get_option('optinpopx_effect') == 'easeOutBounce') { ?>selected<?php } ?>>Bounce</option>
						<option value="easeOutElastic" <?php if(get_option('optinpopx_effect') == 'easeOutElastic') { ?>selected<?php } ?>>Elastic</option>
						<option value="easeOutQuad" <?php if(get_option('optinpopx_effect') == 'easeOutQuad') { ?>selected<?php } ?>>Simple</option>
					</select>
   	  			</div>
<br>



				</div></div>
				
   	  			<div id="tab5Box" class="tab" style="display: none"><div style="background: #fafafa; border: 1px solid #ccc; padding: 10px 20px;"> 
   	  			<h2 style="margin-bottom: 0"><strong>Auto Responder Settings</strong></h2>
   	  			<p style="font-size: 12px;  color: #777">Change the content and settings for optin form</p>
   	  				<div class="long">
	   	  			<h3>Optin Headline</h3>

	   	  			<input type="text" name="optinpopx_optinheadline" value="<?php echo get_option('optinpopx_optinheadline'); ?>" />
   	  			</div>
				<div class="float">
	   	  			<h3>Name Placeholder</h3>


	   	  			<input type="text" name="optinpopx_name" value="<?php echo get_option('optinpopx_name'); ?>" />
   	  			</div>
   	  			<div class="right">
	   	  			<h3>Email Placeholder</h3>

	   	  			<input type="text" name="optinpopx_email" value="<?php echo get_option('optinpopx_email'); ?>" />
   	  			</div>

				<div class="long">
					<br>
	   	  			<h3>Submit Button Text</h3>

	   	  			<input type="text" name="optinpopx_buttontext" value="<?php echo get_option('optinpopx_buttontext'); ?>" />
   	  			</div>


   	  			<div class="long">

	   	  			<h3 style="padding-top: 20px;">Auto-Responder HTML Form Code</h3>

	   	  			<textarea name="optinpopx_autoresponder"cols="10" style="height: 80px;"rows="10"><?php echo get_option('optinpopx_autoresponder'); ?></textarea>
   	  			</div>
   	  			
<br>
   	  			</div></div>

   	  			

   	  			<br clear="all">
   	  			<input type="hidden" name="action" value="save" />
   	  		<input type="image" src="../wp-content/plugins/optinpopx/images/save.png">
</form>

    </div> <!-- /container -->
    <br clear="all">
