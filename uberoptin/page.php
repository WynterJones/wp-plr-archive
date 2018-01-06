<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<title><?php echo get_post_meta( $post->ID, 'seoTitle', true  ); ?></title>

	<!-- Googley Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kavoon&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic&subset=latin,greek-ext,greek,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic&subset=latin,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,400italic,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'> -->

	<!-- Twitter Goodness aka Bootstrap -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Twitter Themes -->
	<!-- <link rel="stylesheet" href="http://bootswatch.com/lumen/bootstrap.min.css"> -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Real Styles -->
	<link rel="stylesheet" href="<?php echo plugins_url(); ?>/uberoptin/style.css">

	<meta name="description" content="<?php echo get_post_meta( $post->ID, 'metaDescription', true  ); ?>">

			<?php if(get_post_meta( $post->ID, 'favicon', true  ) != '') { ?>
				<link rel="shortcut icon" type="image/png" href="<?php echo get_post_meta( $post->ID, 'favicon', true  ); ?>"/>
			<?php } else { ?>
				<link rel="shortcut icon" type="image/png" href="https://cdn0.iconfinder.com/data/icons/iicon/512/message-email-16.png"/>
			<?php } ?>
	

	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

	<!-- Plugins -->
	<script type="text/javascript" charset="utf-8" src="<?php echo plugins_url(); ?>/uberoptin/plugins/jquery.tubular.1.0.js"></script> 
	<script src="<?php echo plugins_url(); ?>/uberoptin/plugins/jquery.pointpoint/transform.js"></script>
	<script src="<?php echo plugins_url(); ?>/uberoptin/plugins/jquery.pointpoint/jquery.pointpoint.js"></script>
	<link rel="stylesheet" href="<?php echo plugins_url(); ?>/uberoptin/plugins/jquery.pointpoint/jquery.pointpoint.css" />
	<script src="http://cdn.jsdelivr.net/jquery.backstretch/2.0.3/jquery.backstretch.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {

			


			// YouTube BG
			<?php if(get_post_meta( $post->ID, 'video', true  ) != '') { ?>
				$('#wrapper').tubular({videoId: "<?php echo get_post_meta( $post->ID, 'video', true  ); ?>"});
			<?php } ?>

			<?php if(get_post_meta( $post->ID, 'video', true  ) == '' && get_post_meta( $post->ID, 'background', true  ) != '') { ?>
				<?php if(get_post_meta( $post->ID, 'background2', true  )  == '' && get_post_meta( $post->ID, 'background3', true  ) == '') { ?>
 					$.backstretch("<?php echo get_post_meta( $post->ID, 'background', true  ); ?>");
				<?php } ?>
				<?php if(get_post_meta( $post->ID, 'background2', true  )  != '' && get_post_meta( $post->ID, 'background3', true  ) == '') { ?>
 					 $.backstretch([
						"<?php echo get_post_meta( $post->ID, 'background', true  ); ?>"
						, "<?php echo get_post_meta( $post->ID, 'background2', true  ); ?>"
						], {duration: 3000, fade: 750});
				<?php } ?>
				<?php if(get_post_meta( $post->ID, 'background2', true  )  != '' && get_post_meta( $post->ID, 'background3', true  ) != '') { ?>
 					 $.backstretch([
						"<?php echo get_post_meta( $post->ID, 'background', true  ); ?>"
						, "<?php echo get_post_meta( $post->ID, 'background2', true  ); ?>",
						"<?php echo get_post_meta( $post->ID, 'background3', true  ); ?>"
						], {duration: 3000, fade: 750});
				<?php } ?>

			<?php } ?>

			// Center Div
			jQuery.fn.center = function ()
			{
			    this.css("position","fixed");
			    this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
			    this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));
			    return this;
			}
			$('.startDiv').center();
			$('.endDiv').center();
			$(window).resize(function(){
			   $('.startDiv').center();
			   $('.endDiv').center();
			});

			// Arrow
			var pp = $('#cta').pointPoint();

			// Show Optin Form
			$('#cta').click(function() {
				pp.destroyPointPoint();
				$('.endDiv').center();
				$(window).resize(function(){
				   $('.endDiv').center();
				});
				$('#signup').pointPoint();
				$('#name').focus();
				$('.startDiv').fadeOut();
				$('.endDiv').fadeIn();
			});


			// Autoresponder
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
				$('#name').attr('name', $('#arname').val());
				$('#email').attr('name', $('#aremail').val());

				$('#video iframe').attr('style', 'width: 100%');
				$('#video embed').attr('style', 'width: 100%');
				$('#video object').attr('style', 'width: 100%');
			 
		});
	</script>

	

</head>
<body>
	<div id="wrapper">
		<div class="container startDiv <?php echo get_post_meta( $post->ID, 'ctaimage3', true  ); ?>">
			<div class="row startRow">
				<div class="col-md-12">
					<?php if(get_post_meta( $post->ID, 'ctaimage2', true  ) != '') { ?>
						<img src="<?php echo html_entity_decode(get_post_meta( $post->ID, 'ctaimage2', true  )); ?>" style="display: block; margin: 0 auto; max-width: 70%">
					<?php } ?>
					<?php if(get_post_meta( $post->ID, 'mainheadline', true  ) != '') { ?>
						<h1><strong><?php echo html_entity_decode(get_post_meta( $post->ID, 'mainheadline', true  )); ?></strong></h1>
					<?php } else { ?>
					<?php } ?>	
					<?php if(get_post_meta( $post->ID, 'subheadline', true  ) != '') { ?>
						<h2><?php echo html_entity_decode(get_post_meta( $post->ID, 'subheadline', true  )); ?></h2>
					<?php } else { ?>				
					<?php } ?>

					
						<?php if(get_post_meta( $post->ID, 'blurb', true  ) != '') { ?>
							<div class="panel" style="padding: 10px 20px; margin-top: 20px; background: #fff; color: #333; text-shadow: none"><p><?php echo html_entity_decode(get_post_meta( $post->ID, 'blurb', true  )); ?></p></div>
						<?php } else { ?>				
							
						<?php } ?>
					

					<?php if(get_post_meta( $post->ID, 'mainVideo', true  ) != '') { ?>
							<div id="video"><p><?php echo html_entity_decode(get_post_meta( $post->ID, 'mainVideo', true  )); ?></p></div>
						<?php } else { ?>				
							
						<?php } ?>
					<a href="#" id="cta" class="btn btn-<?php echo get_post_meta( $post->ID, 'buttonstyle', true  ); ?> btn-lg btn-block" style=" font-size: 3em;font-weight: bold; padding: 20px"><?php echo html_entity_decode(get_post_meta( $post->ID, 'affiliatelink', true  )); ?></a>
					
					<?php if(get_post_meta( $post->ID, 'footer', true  ) != '') { ?>
						<p class="copyright"><?php echo html_entity_decode(get_post_meta( $post->ID, 'footer', true  )); ?></p>
					<?php } ?>
				</div>
			</div>

		</div>

		<div class="container endDiv <?php echo get_post_meta( $post->ID, 'ctaimage4', true  ); ?>" style="display: none">
			<div class="row endRow">
				<div class="col-md-12">
					
					<?php if(get_post_meta( $post->ID, 'ctaheadline', true  ) != '') { ?>
						<h1><strong><?php echo html_entity_decode(get_post_meta( $post->ID, 'ctaheadline', true  )); ?></strong></h1>
					<?php } else { ?>
					<?php } ?>	
					<?php if(get_post_meta( $post->ID, 'ctasubheadline', true  ) != '') { ?>
						<h2><?php echo html_entity_decode(get_post_meta( $post->ID, 'ctasubheadline', true  )); ?></h2>
					<?php } else { ?>				
					<?php } ?>
					<br>
				<form action="" method="post" class='ARform' >
					
						<input type="text" id="name" name="name" placeholder="Your Full Name..." class="form-control name" />
						<input type="text" id="email" name="email" placeholder="Your Email Address..." class="form-control email" />
						<button id="signup" class="btn btn-<?php echo get_post_meta( $post->ID, 'ctaarrow', true  ); ?> btn-lg btn-block" style=" font-size: 3em;font-weight: bold;padding: 20px"><?php echo html_entity_decode(get_post_meta( $post->ID, 'buttontext', true  )); ?></button>
						
						<?php if(get_post_meta( $post->ID, 'ctaimage1', true  ) != '') { ?>
							<br>
							<div class="alert alert-warning"> <p><?php echo html_entity_decode(get_post_meta( $post->ID, 'ctaimage1', true  )); ?></p></div>
						<?php }  ?>	
						<div class='ARhidden'></div>

					</form>
					<div id="autoresponder" style="display: none">
						<textarea id="autoresponderCode" name="autoresponderCode"><?php echo html_entity_decode(get_post_meta( $post->ID, 'autoresponder', true  )); ?></textarea>
						<input type="text"  name="arname" id="arname" value="" />
						<input type="text"   name="aremail" id="aremail" value="" />
						<input type="text"   name="arform" id="arform" value="" />
						<textarea id="arhidden"   name="arhidden"></textarea>
						<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
					</div>

					<?php if(get_post_meta( $post->ID, 'footer', true  ) != '') { ?>
						<p class="copyright"><?php echo html_entity_decode(get_post_meta( $post->ID, 'footer', true  )); ?></p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<?php echo html_entity_decode(get_post_meta( $post->ID, 'tracking', true  )); ?>
</body>
</html>