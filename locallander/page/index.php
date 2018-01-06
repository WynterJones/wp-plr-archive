<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php the_title(  ); ?></title>
	<link rel="stylesheet" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/locallander/page/toast.css">
	<link rel="stylesheet" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/locallander/page/style.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/locallander/page/js/stretch.js"></script> 
	<script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/locallander/page/js/maps.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/locallander/page/js/slimbox2.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/locallander/page/js/iframePop.js"></script>
	<link rel="stylesheet" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/locallander/page/css/slimbox2.css" type="text/css" media="screen" />
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<?php 
		$address = str_replace(" ", "+", get_post_meta( $post->ID, 'lbp_gmap', true ));
		$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');

		$output= json_decode($geocode);

		$lat = $output->results[0]->geometry->location->lat;
		$long = $output->results[0]->geometry->location->lng;
	 ?>
    <script>
        $(document).ready(function() {
			$(".tab_link").click(function() {
				tabLink = $(this).attr('tab');
				$('.tabs').fadeOut();
				$("."+tabLink).delay(500).fadeIn();
				$(".tab_link").removeClass('active');
				$(this).addClass('active');
			});

			$('#mapBG').height($('html').height());

			var geocoder = new google.maps.Geocoder();
			var address = "<?php echo get_post_meta( $post->ID, 'lbp_gmap', true ); ?>";

			geocoder.geocode( { 'address': address}, function(results, status) {

			if (status == google.maps.GeocoderStatus.OK) {
			    var latitude = results[0].geometry.location.lat();
				var longitude = results[0].geometry.location.lng();
			    var yourStartLatLng = new google.maps.LatLng(latitude, longitude);
            	
            	

            	$('#map_canvas').gmap({'zoom':16, 'center': '<?php echo $lat; ?>, <?php echo $long; ?>'}).bind('init', function(ev, map) {
                $('#map_canvas').gmap('addMarker', { 'position': map.getCenter(), 'bounds': false}).click(function() {
	                    $('#map_canvas').gmap('openInfoWindow', { 'content': '<?php echo get_post_meta( $post->ID, "lbp_googlecontent", true ); ?>' }, this);
	                });
	            });


			    } 
			}); 

			$("#save").click(function() {

				var nameData = $('#name').val();
				var emailData = $('#email').val();
				var pageIDData = $('#pageID').val();
				var questionData = $('#question').val();

				
				if ($('#name').val() != '' || $('#email').val() != '') {
					

					$.ajax({ url: '<?php echo  plugins_url(); ?>locallander/saveLead.php',
				         data: {name: nameData, email: emailData, pageID: pageIDData, question: questionData},
				         type: 'post',
				         success: function(output) {
				            
				         }
					});

					$('.optinBox').hide();
				    $('.loading').fadeIn();
				    $('.loading').delay(1200).fadeOut();
				    $('.saved').delay(2000).fadeIn();
				}
				else {
					alert('Add your name and email to share.');
				}
		});

			 $.backstretch([
			<?php if( get_post_meta( $post->ID, 'lbp_bg1', true ) ) { echo '"'.get_post_meta( $post->ID, 'lbp_bg1', true  ).'",'; } ?>
			<?php if( get_post_meta( $post->ID, 'lbp_bg2', true ) ) { echo '"'.get_post_meta( $post->ID, 'lbp_bg2', true  ).'",'; } ?>
			<?php if( get_post_meta( $post->ID, 'lbp_bg3', true ) ) { echo '"'.get_post_meta( $post->ID, 'lbp_bg3', true  ).'"'; } ?>
			], {duration: 5000, fade: 1750});
			
		});
    </script>
</head>
<body class="<?php echo get_post_meta( $post->ID, 'lbp_typography', true ); ?>">
	<div id="mapBG"></div>
		<div class="container bg<?php echo get_post_meta( $post->ID, 'lbp_background', true ); ?>">
			<div class="grid">
				<div class="unit span-grid" style="height: 155px;">
					<div class="unit one-of-two">
						<?php if( get_post_meta( $post->ID, 'lbp_logo', true ) ) { echo '<img src="'.get_post_meta( $post->ID, 'lbp_logo', true  ).'" style="max-width: 230px; max-height: 100px; margin: 10px 0; margin-top: 25px">'; } else { echo '<img src="'.plugins_url().'/locallander/logo.png" style="max-width: 230px; max-height: 100px; margin: 10px 0; margin-top: 25px">'; } ?>
					</div>
					<div class="unit one-of-two cta" style="text-align: right; ">
						<br>
						<?php if( get_post_meta( $post->ID, 'lbp_cta1', true ) ) { echo '<h2 style="margin: 0; padding: 0;"><strong>'.get_post_meta( $post->ID, 'lbp_cta1', true  ).'</strong></h2>'; } else { echo '<h2 style="margin: 0; padding: 0;"><strong>Local Lander Business Page</strong></h2>'; } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_cta2', true ) ) { echo '<h3 style="margin: 0; padding: 0;">'.get_post_meta( $post->ID, 'lbp_cta2', true  ).'</h3>'; } else { echo '<h3 style="margin: 0; padding: 0;">Describe Your Local Business Page</h3>'; } ?>
						<br>
					</div>
				</div>
				<div class="unit two-of-three">
					<ul id="nav">
						<?php if( get_post_meta( $post->ID, 'lbp_tablink1', true ) ) { echo '<li><a href="#" tab="tab1" class="tab_link active">'.get_post_meta( $post->ID, 'lbp_tablink1', true  ).'</a></li>'; } else { echo '<li><a href="#" tab="tab1" class="tab_link active">Your Tab Link</a></li>'; } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_tablink2', true ) ) { echo '<li><a href="#" tab="tab2" class="tab_link">'.get_post_meta( $post->ID, 'lbp_tablink2', true  ).'</a></li>'; } else { echo ''; } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_tablink3', true ) ) { echo '<li><a href="#" tab="tab3" class="tab_link">'.get_post_meta( $post->ID, 'lbp_tablink3', true  ).'</a></li>'; } else { echo ''; } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_tablink4', true ) ) { echo '<li><a href="#" tab="tab4" class="tab_link">'.get_post_meta( $post->ID, 'lbp_tablink4', true  ).'</a></li>'; } else { echo ''; } ?>
					</ul>
					<div class="tab1 tabs" >
						<?php if( get_post_meta( $post->ID, 'lbp_tabcontent1', true ) ) { echo html_entity_decode(get_post_meta( $post->ID, 'lbp_tabcontent1', true  )); } else { echo 'Add content to your local lander page...'; } ?>
					</div>
					<div class="tab2 tabs" style="display: none" >
						<?php if( get_post_meta( $post->ID, 'lbp_tabcontent2', true ) ) { echo html_entity_decode(get_post_meta( $post->ID, 'lbp_tabcontent2', true  )); } else { echo ''; } ?>
					</div>
					<div class="tab3 tabs" style="display: none" >
						<?php if( get_post_meta( $post->ID, 'lbp_tabcontent3', true ) ) { echo html_entity_decode(get_post_meta( $post->ID, 'lbp_tabcontent3', true  )); }  else { echo ''; } ?>
					</div>
					<div class="tab4 tabs" style="display: none" >
						<?php if( get_post_meta( $post->ID, 'lbp_tabcontent4', true ) ) { echo html_entity_decode(get_post_meta( $post->ID, 'lbp_tabcontent4', true  )); } else { echo ''; } ?>
					</div>
				</div>
				<div class="unit one-of-three optin" align="center">
					<div class="loading" style="display: none" align="center">
						<img src="<?php echo  plugins_url(); ?>/locallander/page/images/loading.png" style="margin: 40px auto;">
					</div>
					<div class="saved" style="display: none" align="center">
						<img src="http://cdn1.iconfinder.com/data/icons/CrystalClear/128x128/apps/clean.png" style="margin: 40px auto;">
					</div>
					<div class="optinBox">
						<?php if( get_post_meta( $post->ID, 'lbp_optinh1', true ) ) { echo '<h3>'.get_post_meta( $post->ID, 'lbp_optinh1', true  ).'</h3>'; } else { echo '<h3>Sign Up Today</h3>'; } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_optinh2', true ) ) { echo '<h4>'.get_post_meta( $post->ID, 'lbp_optinh2', true  ).'</h4>'; } else { echo '<h4>Show Case Your Local Business</h4>'; } ?>
						<input type="text" id="name" name="name" placeholder="Your Name Here..." class="name">
						<input type="text" id="email" name="email" placeholder="Your Email Address Here..." class="email">
						<textarea  id="question" name="question" placeholder="..." style="height: 120px;"></textarea>
						<input type="hidden" name="pageID" id="pageID" value="<?php echo get_the_id(); ?>">
						<a href="#" id="save"><?php if( get_post_meta( $post->ID, 'lbp_buttontext', true ) ) { echo get_post_meta( $post->ID, 'lbp_buttontext', true  ); } else { echo 'Click to Subscribe'; } ?></a>
						<?php if( get_post_meta( $post->ID, 'lbp_optinh3', true ) ) { echo '<p class="spam"><small>'.get_post_meta( $post->ID, 'lbp_optinh3', true  ).'</small></p>'; } ?>
					</div>
				</div>
				<?php if( get_post_meta( $post->ID, 'lbp_gmap', true ) ) { ?>
					<div id="map_canvas" style="width: 103%; height: 275px; margin: 20px 0;  border-top: 1px solid #ccc;  border-bottom: 1px solid #ccc;"></div>
				<?php } ?>
				<div class="bottom">
					<div class="unit two-of-three">
						<h3 style="font-size: 19px">
							<?php if( get_post_meta( $post->ID, 'lbp_gmap', true ) ) { ?> 
								<img src="http://cdn4.iconfinder.com/data/icons/PixeloPhilia_2/PNG/shop.png" style="float: left; margin-top: -7px; padding-right: 10px;">
								<?php echo get_post_meta( $post->ID, 'lbp_gmap', true ); ?>
							<?php } ?>
						</h3>
						<div class="unit one-of-four" style="padding: 0; margin: 0; clear: both;">
							<?php if( get_post_meta( $post->ID, 'lbp_photo1', true ) ) { ?> 
								<a href="<?php echo get_post_meta( $post->ID, 'lbp_photo1', true ); ?>" rel="lightbox"><img  src="<?php echo get_post_meta( $post->ID, 'lbp_photo1', true ); ?>" class="image" style="width:100%; height: 90px; margin-top: 8px;"></a>
							<?php } ?>
						</div>
						<div class="unit one-of-four" style="padding: 0; margin: 0;">
							<?php if( get_post_meta( $post->ID, 'lbp_photo2', true ) ) { ?> 
								<a href="<?php echo get_post_meta( $post->ID, 'lbp_photo2', true ); ?>" rel="lightbox"><img  src="<?php echo get_post_meta( $post->ID, 'lbp_photo2', true ); ?>" class="image" style="width:100%; height: 90px; margin-top: 8px;"></a>
							<?php } ?>
						</div>
						<div class="unit one-of-four" style="padding: 0; margin: 0;">
							<?php if( get_post_meta( $post->ID, 'lbp_photo3', true ) ) { ?> 
								<a href="<?php echo get_post_meta( $post->ID, 'lbp_photo3', true ); ?>" rel="lightbox"><img  src="<?php echo get_post_meta( $post->ID, 'lbp_photo3', true ); ?>" class="image" style="width:100%; height: 90px; margin-top: 8px;"></a>
							<?php } ?>
						</div>
						<div class="unit one-of-four" style="padding: 0; margin: 0;">
							<?php if( get_post_meta( $post->ID, 'lbp_photo4', true ) ) { ?> 
								<a href="<?php echo get_post_meta( $post->ID, 'lbp_photo4', true ); ?>" rel="lightbox"><img  src="<?php echo get_post_meta( $post->ID, 'lbp_photo4', true ); ?>" class="image" style="width:100%; height: 90px; margin-top: 8px;"></a>
							<?php } ?>
						</div>
					</div>
					<div class="unit one-of-three" style="padding-top: 20px">
						<?php if( get_post_meta( $post->ID, 'lbp_socialh1', true ) ) { echo '<h3 style="text-align: right; ">'.get_post_meta( $post->ID, 'lbp_socialh1', true  ).'</h3>'; } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_socialh2', true ) ) { echo '<h4 style="text-align: right; margin-top: -10px; font-size: 11px; letter-spacing: 1px; text-transform: uppercase; ">'.get_post_meta( $post->ID, 'lbp_socialh2', true  ).'</h4>'; } ?>
						
						<?php if( get_post_meta( $post->ID, 'lbp_fbpage', true ) ) { ?> 
								<a href="<?php echo get_post_meta( $post->ID, 'lbp_fbpage', true ); ?>" target="_blank"><img src="http://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_color-32.png" style="float: right; padding: 3px 5px; padding-right: 0; cursor: pointer" id="FB"></a>
						<?php } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_twitter', true ) ) { ?> 
								<a href="<?php echo get_post_meta( $post->ID, 'lbp_twitter', true ); ?>" target="_blank"><img src="http://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_color-32.png" style="float: right; padding: 3px 5px;  cursor: pointer" id="FB"></a>
						<?php } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_websiteurl', true ) ) { ?> 
								<a href="<?php echo get_post_meta( $post->ID, 'lbp_websiteurl', true ); ?>" target="_blank"><img src="http://cdn3.iconfinder.com/data/icons/free-social-icons/67/linkedin_circle_color-32.png" style="float: right; padding: 3px 5px;  cursor: pointer" id="FB"></a>
						<?php } ?>
						<?php if( get_post_meta( $post->ID, 'lbp_phonenumber', true ) ) { ?> 
								<a href="tel:<?php echo get_post_meta( $post->ID, 'lbp_phonenumber', true ); ?>" target="_blank"><img src="http://cdn3.iconfinder.com/data/icons/free-social-icons/67/skype_circle_color-32.png" style="float: right; padding: 3px 5px;  cursor: pointer" id="FB"></a>
						<?php } ?>
					</div>
					<div class="unit span-grid" style="padding-top: 20px;">
							<?php echo html_entity_decode(get_post_meta( $post->ID, 'content', true  )); ?>
						<hr>
						<?php if( get_post_meta( $post->ID, 'lbp_yelp', true ) ) { ?> 
								<script>(function() { var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("<?php echo get_post_meta( $post->ID, 'lbp_yelp', true ); ?>","","RED","n","n","6");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})();</script>
								<div id='yelpwidget'></div>
						<?php } ?>
					</div>
				</div>
				<div class="unit span-grid footer">
					
					<div class="unit one-of-two" style="font-size: 12px;">
						<?php if( get_post_meta( $post->ID, 'lbp_footer', true ) ) { echo '<p style="margin: 0; padding: 0; padding-top: 10px;">'.get_post_meta( $post->ID, 'lbp_footer', true  ).'</p>'; } else { echo '<p style="margin: 0; padding: 0; padding-top: 10px;font-size: 12px;">Page Powered by LocalLander</p>'; }  ?>
						<?php if( get_post_meta( $post->ID, 'lbp_footer2', true ) ) { echo '<p style="margin: 0; padding: 0;">'.get_post_meta( $post->ID, 'lbp_footer2', true  ).'</p>'; } else { echo '<p style="margin: 0; padding: 0; padding-top: 10px;font-size: 12px;">Make Your Local Lead Landing Page Today</p>'; }  ?>
					</div>
					<div class="unit one-of-two">
						<br>
						<?php if( get_post_meta( $post->ID, 'lbp_logo', true ) ) { echo '<img src="'.get_post_meta( $post->ID, 'lbp_logo', true  ).'" style="max-width: 115px; margin:  0; float: right;max-height: 100px;" id="footerlogo">'; }  else { echo '<img src="'.plugins_url().'/locallander/logo.png" style="max-width: 115px; margin:  0; float: right;max-height: 100px;" id="footerlogo">'; }  ?>
					</div>
					<br clear="all"> <br>
				</div>
			</div>
		</div>
</body>
</html>