<!DOCTYPE html>
<html><head>
	<title><?php the_title(  ); ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/wptubeslider/include/js/slide.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/wptubeslider/include/js/prettify.js"></script> 
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/wptubeslider/include/css/kickstart.css" media="all" />    
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/wptubeslider/style.css" media="all" />  
	 <script type="text/javascript">
	// 	$(document).ready(function($) {
			
	
	// $('#presentation').fathom({
	//    timeline: [ <?php echo get_post_meta( $post->ID, 'timer', true  ) ?> ]
	// });




	// 	});
	 </script>
</head>
<body class="font<?php echo get_post_meta( $post->ID, 'typography', true  ); ?> paragraph<?php echo get_post_meta( $post->ID, 'paragraph', true  ); ?> bg<?php echo get_post_meta( $post->ID, 'background', true  ); ?>">

<?php if(get_post_meta( $post->ID, 'videourl', true  ) != "") { ?>

<div id="ytplayer" style="position: fixed; bottom: 5px;right: 55px;  z-index:99999!important; padding: 10px; background: #fff; box-shadow: 0 0 4px #ddd; height: 268px;"></div>

<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '268',
      width: '474',
      videoId: '<?php echo get_post_meta( $post->ID, "videourl", true  ) ?>',
      playerVars: { 'autoplay': 1, 'controls': 0,'autohide':0,'wmode':'opaque','showinfo':'0','modestbranding':'0','ap':'%2526fmt%3D18','rel':'0' },
      events: { 'onStateChange': onPlayerStateChange }
          
    });
  }

  	function onPlayerStateChange(event) {

        $('#presentation').fathom({
		   timeline: [ <?php echo get_post_meta( $post->ID, 'timer', true  ) ?> ]

		});
      }

</script>
<?php } ?>
<div id="presentation">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<?php if( get_post_meta( $post->ID, 'presentr_slideContent_1', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_1', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_1', true  )).'</div>'; } ?>

		<?php if( get_post_meta( $post->ID, 'presentr_slideContent_2', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_2', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_2', true  )).'</div>'; } ?>
		<?php if( get_post_meta( $post->ID, 'presentr_slideContent_3', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_3', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_3', true  )).'</div>'; } ?>
		<?php if( get_post_meta( $post->ID, 'presentr_slideContent_4', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_4', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_4', true  )).'</div>'; } ?>
		<?php if( get_post_meta( $post->ID, 'presentr_slideContent_5', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_5', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_5', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_6', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_6', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_6', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_7', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_7', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_7', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_8', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_8', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_8', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_9', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_9', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_9', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_10', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_10', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_10', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_11', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_11', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_11', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_12', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_12', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_12', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_13', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_13', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_13', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_14', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_14', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_14', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_15', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_15', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_15', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_16', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_16', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_16', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_17', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_17', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_17', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_18', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_18', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_18', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_19', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_19', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_19', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_20', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_20', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_20', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_21', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_21', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_21', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_22', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_22', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_22', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_23', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_23', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_23', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_24', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_24', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_24', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_25', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_25', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_25', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_26', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_26', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_26', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_27', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_27', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_27', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_28', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_28', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_28', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_29', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_29', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_29', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_30', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_30', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_30', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_31', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_31', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_31', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_32', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_32', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_32', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_33', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_33', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_33', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_34', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_34', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_34', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_35', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_35', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_35', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_36', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_36', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_36', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_37', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_37', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_37', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_38', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_38', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_38', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_39', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_39', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_39', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_40', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_40', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_40', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_41', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_41', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_41', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_42', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_42', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_42', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_43', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_43', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_43', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_44', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_44', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_44', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_45', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_45', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_45', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_46', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_46', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_46', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_47', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_47', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_47', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_48', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_48', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_48', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_49', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_49', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_49', true  )).'</div>'; } ?>
	<?php if( get_post_meta( $post->ID, 'presentr_slideContent_50', true ) ) { echo '<div class="slide '.get_post_meta( $post->ID, 'presentr_slideStyle_50', true  ).'">'.html_entity_decode(get_post_meta( $post->ID, 'presentr_slideContent_50', true  )).'</div>'; } ?>
			
	<?php endwhile; ?>

</div>

</body>
</html>