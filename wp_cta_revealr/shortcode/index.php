<?php
	define('WP_USE_THEMES', true);
	require ('../../../../wp-load.php');
	global $post;
	global $wpdb;
	$getPage = $wpdb->prefix . "wpcta_revealr";
	$getID = $_GET['edit'];
	$editBook = $wpdb->get_results("SELECT * FROM $getPage WHERE id = $getID" ,ARRAY_A);

	$tpl = get_post_meta($post->ID,'_template',true);
	
	foreach($editBook as $template){} 		
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title><?php echo $template['name']; ?> -- Shortcode</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="jquery.js"></script>
</head>
<body>
	<div id="cta_revealBox">
		<h1><?php echo $template['headline']; ?></h1>
		<h2><?php echo $template['subheadline']; ?></h2>
		<a href="#" id="revealButton">
			<span class="activate"><?php echo $template['revealButton']; ?></span>
			<div id="discount">
				<span class="price"><?php echo $template['price']; ?></span> 
				<span class="discount"><?php echo $template['discount']; ?></span>
			</div>
			
		</a>
		<div id="hiddenBox" style="display: none">
			<h3 id="coupon1"><?php echo $template['revealText']; ?></h3>
		</div>
		<div id="bottom">
			<h3><?php echo $template['footerText']; ?></h3>
		</div>
	</div>
	<div id="social">
		<div id="fb">
			<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $template['fb']; ?>&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px;" allowTransparency="true"></iframe>
		</div>
		<div id="google">
			<!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone" data-size="medium"></div>

			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/plusone.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
		</div>
		<div id="twitter">
			<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
	</div>
</body>
</html>