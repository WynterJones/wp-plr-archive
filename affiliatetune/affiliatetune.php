<!DOCTYPE html>
<html><head>
	<title><?php the_title(  ); ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/include/js/prettify.js"></script> 
	<script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/include/js/kickstart.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/include/js/grooveshark.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/include/css/kickstart.css" media="all" />    
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/style.css" media="all" />
	<script src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/include/js/jquery-ui-1.8.22.custom.min.js"></script>
	<script src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/include/js/jquery.imagesloaded.min.js"></script>
    <script src="http://vjs.zencdn.net/c/video.js"></script>
    <script src="<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/include/js/bigvideo.js"></script>
	<script type="text/javascript">
		$(document).ready(function($) {

 			$("#header").backstretch([
			      <?php echo '"' . get_post_meta( $post->ID, 'sliderimage1', true ) . '",'; ?>
			      <?php echo '"' . get_post_meta( $post->ID, 'sliderimage2', true ) . '",'; ?>
			      <?php echo '"' . get_post_meta( $post->ID, 'sliderimage3', true ) . '",'; ?>
			      <?php echo '"' . get_post_meta( $post->ID, 'sliderimage4', true ) . '"'; ?>
			  ], {duration: 3000, fade: 750});

			$('#songlist ul li a.play').click(function(){
			  videoid = $(this).attr("id");
			  autoPlayVideo(videoid,'450','283');
			  $('#songlist ul li').removeClass('songPlay');
			  $('#songlist ul li a.play').removeClass('playing');
			  $(this).parent().addClass('songPlay');
			  $(this).addClass('playing');
			});
			function autoPlayVideo(vcode, width, height){
			  "use strict";
			  $("#videoContainer").html('<iframe width="'+width+'" height="'+height+'" src="https://www.youtube.com/embed/'+vcode+'?autoplay=1&loop=1&rel=0&wmode=transparent" frameborder="0" allowfullscreen wmode="Opaque"></iframe>');
			}

			

			   $(function() {
		            var BV = new $.BigVideo();
					BV.init();
					BV.show('<?php echo get_post_meta( $post->ID, "videourl", true ) ?>',{ambient:true});
			    });
		});
		
	</script>
	 <style type="text/css">
   		
   			
   			<?php if( get_post_meta( $post->ID, 'background', true ) ) {?>
   				#wrap {
   					background: url(<?php echo bloginfo('wpurl'); ?>/wp-content/plugins/affiliatetune/images/bg<?php echo get_post_meta( $post->ID, 'background', true ); ?>.png) repeat;
   					color: #fff;
   					text-shadow: 0 1px 1px #222;
   				}
   			<?php  } ?>
		
   		
   	</style>
</head>
<body  class="<?php echo get_post_meta( $post->ID, 'typography', true ); ?>">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="videoContainer">
		  <iframe width="450" height="283" src="#" frameborder="0" allowfullscreen wmode="Opaque"></iframe>
		</div>
	<?php if( get_post_meta( $post->ID, 'mainheadline', true ) ) { echo '<h1 id="title">'.get_post_meta( $post->ID, 'mainheadline', true  ).'</h1>'; } else { echo '<h1 id="title">Add Content to Your Affiliate Tune Page</h1>'; }  ?>
	<div id="wrap" class="clearfix">
		<div id="header">
			
		</div>
		<div id="sidebar">
			<?php if( get_post_meta( $post->ID, 'mainphoto', true ) ) { echo '<img src="'.get_post_meta( $post->ID, 'mainphoto', true  ).'" id="albumpic">'; } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '1' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_16.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '2' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '3' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_16.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '4' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '5' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_16.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '6' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '7' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_16.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '8' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_17.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '9' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_16.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'reviewstars', true ) == '10' ) { ?> 
				<div id="stars">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" style="float: left; margin: 4px;">
					<br clear="all">
				</div>
			<?php } ?>
			<?php if( get_post_meta( $post->ID, 'subheadline', true ) ) { echo '<h3>'.get_post_meta( $post->ID, 'subheadline', true  ).'</h3>'; } ?>
			<?php if( get_post_meta( $post->ID, 'item1name', true ) ) { echo '<h5>'.get_post_meta( $post->ID, 'item1name', true  ).'</h5>'; } ?>
			<?php if( get_post_meta( $post->ID, 'blurb', true ) ) { echo '<p>'.get_post_meta( $post->ID, 'blurb', true  ).'</p>'; } ?>
			<div id="social">
				<br>
					<div style="float: left; width: 50px;">
						<iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=false&amp;layout=box_count&amp;width=100&amp;show_faces=false&amp;font=segoe+ui&amp;colorscheme=light&amp;action=like&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:140px; height:90px;" allowTransparency="true"></iframe>
				
					</div>
					<div style="float: left; width: 65px;">
					<div class="g-plusone" data-size="tall"></div>
					<script type="text/javascript">
					  (function() {
					    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					    po.src = 'https://apis.google.com/js/plusone.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>
					</div>
					<div style="float: left; width: 70px;">
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>
    					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			
					</div>
			</div>
		</div>
		<div id="content">
			<div id="affButtons">
				<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" title="Download Album on iTunes" style="float: right; width: 150px; height: 60px; text-indent: -999999px" >Buy Now Album on iTunes</a>
				<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" title="Download Album on Amazon" style="float: left; width: 190px; height: 60px; text-indent: -999999px">Buy Now Album on Amazon</a>
			</div>
			<div id="songlist">
				<ul>
					<?php if (get_post_meta( $post->ID, 'benefit1', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit1', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon1', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit2', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit2', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon2', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit3', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit3', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon3', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit4', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit4', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon4', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit5', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit5', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon5', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit6', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit6', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon6', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit7', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit7', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon7', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit8', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit8', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon8', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit9', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit9', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon9', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit10', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit10', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon10', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit11', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit11', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon11', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit12', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit12', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon12', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit13', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit13', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon13', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
					<?php if (get_post_meta( $post->ID, 'benefit14', true )) { ?>
						<li>
							<strong><?php echo get_post_meta( $post->ID, 'benefit14', true ); ?></strong>
							<a class="play" id="<?php echo get_post_meta( $post->ID, 'bulleticon14', true ); ?>" href="#video" title="Play Sample">Play Song</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'autoresponder', true ); ?>" class="itunes"  title="Download on iTunes">Download on iTunes</a>
							<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'buttontext', true ); ?>" class="amazon"  title="Download on Amazon">Download on Amazon</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>		
			
	</div>
	<div id="footer">
		<?php if( get_post_meta( $post->ID, 'footer', true ) ) { echo '<p>'.get_post_meta( $post->ID, 'footer', true  ).'</p>'; } ?>
	</div>
	<?php endwhile; ?>
</body>
</html>