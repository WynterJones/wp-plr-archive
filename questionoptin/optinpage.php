<!DOCTYPE html>
<html><head>
	<title><?php the_title(  ); ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="" />
	 <script src="http://code.jquery.com/jquery-latest.min.js "></script>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/questionoptin/include/css/kickstart.css" media="all" />    
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/questionoptin/style.css" media="all" />
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#optionSelect').val('');
			$('.first').click(function() {
				if ($(this).hasClass('first')) {
					if ($('#optionSelect').val() == '') {
						$('.step1Error').fadeIn();
					}
					else {
						$('#step1Tab').hide();
						$('#loading').fadeIn().delay(300).fadeOut();
						$('#step2Tab').delay(1400).slideDown();
						$(this).text('Sign Up Now for More Info');
						$(this).removeClass('first');
						$(this).addClass('signup');
						$('#step1').removeClass('activeStep');
						$('#step2').addClass('activeStep');
					}
				}
				else {
					if ($('#name').val() == '' || $('#email').val() == '') {
						$('.optinError').fadeIn();
					}
					else {
						$('.ARform').submit( );
						$.ajax({
							type: "POST",
							url: "<?php echo bloginfo('url'); ?>/wp-content/plugins/questionoptin/lead.php",
							data: { questionoptin_name: $('#name').val(), questionoptin_email: $('#email').val(), questionoptin_pageid: $('#pageid').val(), questionoptin_option: $('#optionSelect').val() }

						})
						$('#step2').removeClass('activeStep');
						$('#step3').addClass('activeStep');
						$('#nextButton').hide();
						$('#step2Tab').hide();
						$('#loading').fadeIn().delay(300).fadeOut();
						$('#step3Tab').delay(1400).slideDown();
					}
				};
			});

			$('.radio').click(function() {
				$('.radio').removeClass('activeRadio');
				$(this).addClass('activeRadio');
				$('#optionSelect').val($(this).text());
			});

				break_apart_ar();
						
				// TAKE APART AR CODE
						
				function break_apart_ar(){
				
				var tags = ['a','iframe','frame','frameset','script'], reg, val = $('#autoresponderCode').val(),
				
				hdn = $('#arcode_hdn_div2'), formurl = $('#arform'), hiddenfields = $('#arhidden');
				
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
					
					$(':text',hdn).each(function(){
					    var name = $(this).attr('name'),
					    name_selected = num == '0' ? name : (num != '0' ? name_selected : ''), 
					    email_selected = num == '1' ? name : email_selected;
					    if(num=='0') jQuery('#arname').val(name_selected);
					    if(num=='1') jQuery('#aremail').val(email_selected);
					    num++;
					});
								jQuery(':input[type=hidden]',hdn).each(function(){
									jQuery('#arcode_hdn_div').append(jQuery('<input type="hidden" name="'+jQuery(this).attr('name')+'" />').val(jQuery(this).val()));
								});		
								var hidden_f = jQuery('#arcode_hdn_div').html();
								formurl.val(jQuery('form',hdn).attr('action'));
								hiddenfields.val(hidden_f);
								hdn.html('');
								
				};
				
				$('.ARform').attr('action', $('#arform').val());
				$('.ARhidden').html($('#arhidden').val());
				$('#optinName').attr('name', $('#arname').val());
				$('#optinEmail').attr('name', $('#arname').val());
				
				$('#sidebar-optinName').attr('name', $('#arname').val());
				$('#sidebar-optinEmail').attr('name', $('#arname').val());

				
		});
	</script> 
</head>
<body class="bg<?php echo get_post_meta( $post->ID, 'background', true ); ?> paragraph<?php echo get_post_meta( $post->ID, 'paragraph', true ); ?> font<?php echo get_post_meta( $post->ID, 'typography', true ); ?>">
<br>
<?php if( get_post_meta( $post->ID, 'logo', true ) ) { echo '<img id="logo" src="'.get_post_meta( $post->ID, 'logo', true  ).'" />'; } else { echo "<br/><br/>"; } ?>
<div id="wrap" class="wrap<?php echo get_post_meta( $post->ID, 'wrapBG', true ); ?>" class="clearfix">

	<div id="headline">
		<?php if( get_post_meta( $post->ID, 'mainheadline', true ) ) { echo '<h2>'.get_post_meta( $post->ID, 'mainheadline', true  ).'</h2>'; } ?>
		<?php if( get_post_meta( $post->ID, 'subheadline', true ) ) { echo '<h4>'.get_post_meta( $post->ID, 'subheadline', true  ).'</h4>'; } ?>
	</div>
	<div id="steps">
		<h3 id="step1" class="step activeStep">#1</h3>
		<h3 id="step2" class="step">#2</h3>
		<h3 id="step3" class="step">#3</h3>
	</div>
	<div id="content">
		<div id="loading" style="display: none"><img src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/questionoptin/images/loading.gif" style="display: block; margin: 10px auto"></div>
		<div id="step1Tab">
			<?php if( get_post_meta( $post->ID, 'question', true ) ) { echo '<h2>'.get_post_meta( $post->ID, 'question', true  ).'</h2>'; } ?>
			<div class="notice error step1Error" style="display: none; text-align: center; width: 315px; margin: 0 auto; margin-bottom: 10px;"><?php if( get_post_meta( $post->ID, 'warning1', true ) ) { echo get_post_meta( $post->ID, 'warning1', true  ); } else { echo "Please select one of the follow options..."; } ?></div>
			<h4 id="survey1" class="radio"><?php if( get_post_meta( $post->ID, 'option1', true ) ) { echo get_post_meta( $post->ID, 'option1', true  ); } ?></h4>
			<h4 id="survey2" class="radio"><?php if( get_post_meta( $post->ID, 'option2', true ) ) { echo get_post_meta( $post->ID, 'option2', true  ); } ?></h4>
			<h4 id="survey3" class="radio"><?php if( get_post_meta( $post->ID, 'option3', true ) ) { echo get_post_meta( $post->ID, 'option3', true  ); } ?></h4>
			<h4 id="survey4" class="radio"><?php if( get_post_meta( $post->ID, 'option4', true ) ) { echo get_post_meta( $post->ID, 'option4', true  ); } ?></h4>
		</div>

		<div id="step2Tab" style="display: none">
			<?php if( get_post_meta( $post->ID, 'formHeadline', true ) ) { echo '<h3>'.get_post_meta( $post->ID, 'formHeadline', true  ).'</h3>'; } ?>
			<?php if( get_post_meta( $post->ID, 'formSubHeadline', true ) ) { echo '<p>'.get_post_meta( $post->ID, 'formSubHeadline', true  ).'</p>'; } ?>
			<div class="notice error optinError" style="display: none; width: 315px; margin: 0 auto; margin-bottom: 10px;"><?php if( get_post_meta( $post->ID, 'warning2', true ) ) { echo get_post_meta( $post->ID, 'warning1', true  ); } else { echo "Please fill out the form below..."; } ?></div>
			<div id="optin">
				<form action="" method="post" class='ARform' target="my-iframe" >
					<input type="text" disabled id="optionSelect" />
					<input type="hidden" disabled id="pageid" value="<?php echo get_the_id(); ?>" />
					<div class='ARhidden'></div>
					<?php if( get_post_meta( $post->ID, 'showName', true ) == "hide" ) {  } else { echo '<input type="text" name="name" required id="name" placeholder="Your Full Name..." tabindex="1" />'; } ?>
					<input type="email" required name="email" id="email" placeholder="Your E-mail Address..." value="" tabindex="1" />
				</form>
			</div>
			<div id="autoresponder" style="display: none">
				<textarea id="autoresponderCode" name="autoresponderCode"><?php echo get_post_meta( $post->ID, 'autoresponder', true  ); ?></textarea>
				<input type="text"  name="arname" id="arname" value="" />
				<input type="text"   name="aremail" id="aremail" value="" />
				<input type="text"   name="arform" id="arform" value="" />
				<textarea id="arhidden"   name="arhidden"></textarea>
				<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
			</div>
		</div>

		<div id="step3Tab" style="display: none">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(  ); ?>
			<?php endwhile; ?>
		</div>
	</div>
	<div id="nextButton">
		<a href="#" class="next first green">Continue to Second Step...</a>
	</div>
	
</div>
<iframe src="#" name="my-iframe" style="display: none"></iframe>
<?php if( get_post_meta( $post->ID, 'footer', true ) ) { echo '<div id="footer"><p>'.get_post_meta( $post->ID, 'footer', true  ).'</p></div>'; } ?>
</body>
</html>