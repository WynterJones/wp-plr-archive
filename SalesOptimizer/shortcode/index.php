<?php
	// Make Wordpress Work on This Page
	define('WP_USE_THEMES', true);
	require ('../../../../wp-load.php');
	function trackView($id) {
		if ($_GET['preview'] == '') {
			if (get_option('views'.'_'.$id) == '') {
				update_option('views'.'_'.$id, 0);
			}
			else {
				$newView = get_option('views'.'_'.$id) + 1;
				update_option('views'.'_'.$id, $newView);
			}
		}
	}
	// Check if Split Testing A/B
	if(get_option('splitTestShow'.'_'.$_GET['edit']) == 'on') {
		$rand = rand(1, 2);
		// Show Original Shortcode
		if($rand == 1) {
			$id = $_GET['edit']; 
			trackView($id);
		}
		// Show Split Test Shortcode
		if($rand == 2) {
			$id = get_option('splitTest'.'_'.$_GET['edit']); 
			trackView($id);
		}
	}
	// It Is Not Split Testing Show Original Shortcode
	else {
		$id = $_GET['edit'];
		trackView($id);
	}
	function showValue($name, $id) {
		echo get_option($name.'_'.$id);
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shortcode</title>
	<!-- jQuery / Javascript -->
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
	<!-- Bootstrap 3.1.1 -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<!-- Countdown -->
	<?php if(get_option('countdown'.'_'.$id) == 'on') { ?>
		<script src="countdown/jquery.plugin.min.js"></script>
		<script src="countdown/jquery.countdown.min.js"></script>
	<?php } ?>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Theme -->
	<?php if( get_option('theme'.'_'.$id) != 'default') { ?>
		<link rel="stylesheet" href="http://bootswatch.com/<?php echo get_option('theme'.'_'.$id); ?>/bootstrap.min.css">
	<?php } else { ?>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<?php } ?>
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/shadows.css">
	<link rel="stylesheet" href="css/buttons.css">
	<!-- jQuery to Run on Ready -->
	<script>
		$(document).ready(function() {
			// jQuery Tracking Clicks
			<?php if ($_GET['preview'] == '') { ?>
				$('a').click(function() {
					$.post( "inc/track.php?edit=<?php echo $id; ?>" );
				});
			<?php } ?>
			<?php if(get_option('countdown'.'_'.$id) == 'on') { ?>
				    var dateGo = new Date('<?php showValue("date", $id); ?> <?php showValue("time", $id); ?>:00');
			                $('#until2d').countdown({
			                    until: dateGo, 
			                    onExpiry: liftOff, 
			                    timezone: <?php showValue("timezone", $id); ?>,
			                    labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'] 
			                }); 
			                function liftOff() { 
			                	alert('Done');
			                }
		            <?php } ?>
		            $('#video iframe').attr('style', 'width: 100% !important;');
		            $('#video object').attr('style', 'width: 100% !important;');
		            $('#video embed').attr('style', 'width: 100% !important;');
		            $(".button-tooltip a").hover(function(){
				$(this).parent().find(".tooltip").addClass("init-button-tooltip");
				}, function(){
				$(this).parent().find(".tooltip").removeClass("init-button-tooltip");
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
			$('#email').attr('email', $('#aremail').val());

			$('#submitForm').click(function(event) {
				event.preventDefault();
				if($('#optinName').val() == '') {
					alert('Add Your Name');
				}
				if($('#optinEmail').val() == '') {
					alert('Add Your Email');
				}
				if($('#optinEmail').val() != '' && $('#optinName').val() != '') {
					$('.ARform').submit();
				}
				
			});
		});
	</script>
	<style>
		<?php if(get_option('theme'.'_'.$id) == 'lumen') { ?>
			.btn {
				padding: 30px !important;
			}
			@media screen and ( max-width: 480px ) {
				.btn {
					padding: 10px !important;
				}
			}
		<?php } ?>
	</style>
</head>
<body>
	
	<div class=" <?php showValue('boxshadow', $id); ?>" style="margin: 10px">
		<?php if(get_option('html'.'_'.$id) == '') { ?>
			<?php if(get_option('panel'.'_'.$id) == 'on') { ?>
			<div class="panel panel-<?php showValue('panelDesign', $id); ?>">
			  <div class="panel-heading">
			    <h3 class="panel-title"><?php showValue('title', $id); ?></h3>
			  </div>
			<?php } ?>
			  <div class="panel-body">
			  	<?php if(get_option('countdown'.'_'.$id) == 'on') { ?>
				  	<div class="alert alert-<?php showValue('countdownDesign', $id); ?>" style="padding-top: 10px; margin-bottom: -20px;position: relative">
						<ul id="until2d" class="countdown"></ul><br clear="all">
					</div>
					<br><br>
				<?php } ?>
			  	<h1 class="mainHeadline"><?php showValue('headline', $id); ?></h1>
			  	<?php if(get_option('addImage'.'_'.$id) != '') { ?>
					<img src="<?php showValue('addImage', $id); ?>" style="display: block; margin: 0 auto; margin-top: 10px; max-width: 100%;">
			  	<?php } ?>
			  	<?php if(get_option('addVideo'.'_'.$id) != '') { ?>
					<div id="video" style="margin-top: 20px;">
						<?php html_entity_decode(showValue('addVideo', $id)); ?>
					</div>
			  	<?php } ?>
			  	<?php if(get_option('emailShow'.'_'.$id) == 'on') { ?>
			  	<form action="" method="post" class='ARform'  target="_parent">
						
						<br>
						<input type="text" required placeholder="<?php showValue('namePlaceholder', $id); ?>" name="name" id="optinName" class="form-control input" />
						<input type="text" required placeholder="<?php showValue('emailPlaceholder', $id); ?>" name="email" id="optinEmail" class="form-control input" />
						<div class="button-wrap btn-center">
							<div class="button button-<?php showValue('buttonDesign', $id); ?> txt-right button-tooltip" style="width: 100%">
								<?php if(get_option('buyTooltip'.'_'.$id) != '') { ?>
									<div class="tooltip">
										<?php showValue('buyTooltip', $id); ?>
									</div>
								<?php } ?>
								<a href="#" id="submitForm" target="_parent"><?php showValue('button', $id); ?></a>
							</div>
						</div>
						<div class='ARhidden'></div>
				</form>

				<div id="autoresponder" style="display: none">
					<textarea id="autoresponderCode" name="autoresponderCode"><?php showValue('autoresponder', $id); ?></textarea>
					<input type="text"  name="arname" id="arname" value="" />
					<input type="text"   name="aremail" id="aremail" value="" />
					<input type="text"   name="arform" id="arform" value="" />
					<textarea id="arhidden"   name="arhidden"></textarea>
					<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
				</div>
			  	<?php } else { ?>
				    <div class="button-wrap btn-center">
					<div class="button button-<?php showValue('buttonDesign', $id); ?> txt-right button-tooltip" style="width: 100%">
						<?php if(get_option('buyTooltip'.'_'.$id) != '') { ?>
							<div class="tooltip">
								<?php showValue('buyTooltip', $id); ?>
							</div>
						<?php } ?>
						<a href="<?php showValue('buyLink', $id); ?>"  target="_parent"><?php showValue('button', $id); ?></a>
					</div>
				</div>
				    <h3 class="normalLink"><a target="_parent" href="<?php showValue('buyLink', $id); ?>"><?php showValue('addtocart', $id); ?></a></h3>
			    <?php } ?>
			    <br>
			    <h4 class="ps"><?php showValue('handwritten', $id); ?></h4>
			  </div>
			<?php if(get_option('panel'.'_'.$id) == 'on') { ?>
			</div>
			<?php } ?>
		<?php } else { ?>
			<?php html_entity_decode(showValue('html', $id)); ?>
		<?php } ?>
	</div>
</body>
</html>