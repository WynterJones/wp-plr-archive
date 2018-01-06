<?php
$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	$imagePath = $full_path  .'EasyBuilder';
	global $post;
	global $wpdb;
	$table_db_name = $wpdb->prefix . "eb_campaign";
	$name = get_post_meta($post->ID,'ebcampaign',true);
	$templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$name'",ARRAY_A);
		
	foreach($templates as $template){  }
	
	$meta = get_post_meta($post->ID, $field['campaign'], true);
	 echo $meta['campaign'][0]; 
	
?>
<!DOCTYPE html>
<html><head>
<title><?php echo $template['browserTitle']; ?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $template['metaDescription']; ?>" />
<meta name="keywords" content="<?php echo $template['metaKeywords']; ?>" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo $imagePath; ?>/page/js/prettify.js"></script>                                   <!-- PRETTIFY -->
<script type="text/javascript" src="<?php echo $imagePath; ?>/page/js/kickstart.js"></script>                                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo $imagePath; ?>/page/css/kickstart.css" media="all" />    
<link rel="stylesheet" type="text/css" href="<?php echo $imagePath; ?>/page/css/kickstart-grid.css" media="all" />                 <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo $imagePath; ?>/page/css/style.css" media="all" />       
<style type="text/css">
	body {
		background: url(<?php echo $template['backgroundImage']; ?>) <?php echo $template['repeatBG']; ?> #<?php echo $template['bgColor']; ?>;
	}
    <?php echo $template['customCSS']; ?>
   <?php if ($template['typography'] == 'type1') { ?>
   		body, h1, h2, h3, h4, h5, h6, ul, li, blockquote {
   			font-family: Arial, Sans-serif;
   		}
   <?php } ?>
   <?php if ($template['typography'] == 'type2') { ?>
   		body, h1, h2, h3, h4, h5, h6, ul, li, blockquote {
   			font-family: Georgia, Serif;
   		}
   <?php } ?>
   <?php if ($template['typography'] == 'type3') { ?>
   		body, h1, h2, h3, h4, h5, h6, ul, li, blockquote {
   			
   		}
   <?php } ?>
   <?php if ($template['roundCorners'] == 'Dark Drop Shadow') { ?>
   		#wrap {
   			  -moz-box-shadow:    0 3px 5px 0 #444;
			  -webkit-box-shadow: 0 3px 5px 0 #444;
			  box-shadow:         0 3px 5px 0 #444;
   		}
   <?php } ?>
   <?php if ($template['roundCorners'] == 'Bottom Drop Shadow') { ?>
   		#wrap {
   			 -webkit-box-shadow: 0 8px 6px -6px #444;
	   			-moz-box-shadow: 0 8px 6px -6px #444;
	        		 box-shadow: 0 8px 6px -6px #444;
   		}
   <?php } ?>
   <?php if ($template['dropShadow'] == '5px Corners') { ?>
   		#wrap {
   			-moz-border-radius: 5px;
   			-webkit-border-radius: 5px;
   			-khtml-border-radius: 5px;
   			border-radius: 5px;
   		}
   <?php } ?>
   <?php if ($template['dropShadow'] == '10px Corners') { ?>
   		#wrap {
   			-moz-border-radius: 10px;
   			-webkit-border-radius: 10px;
   			-khtml-border-radius: 10px;
   			border-radius: 10px;
   		}
   <?php } ?>
</style> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
<script type="text/javascript">
		$(document).ready(function() {
		 	<?php echo $template['customJS']; ?>
		 	
		 	$('iframe').attr('style','width: 100%; height: 300px');
		 	$('embed').attr('style','width: 100%;  height: 300px');
		 	$('object').attr('style','width: 100%; height: 300px');
		});
</script>                 
</head><body><a id="top-of-page"></a>
	<div id="header">
		<img src="<?php echo $template['headerImage']; ?>" alt="">
	</div>
	<div id="wrap" class="clearfix">
				
<?php
	global $post;
	global $wpdb;
	$table_db_name = $wpdb->prefix . "eb_pages";
	$campaign = get_post_meta($post->ID,'ebcampaign',true);
	$name = get_post_meta($post->ID,'ebpage',true);
	$templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign = '$campaign' AND name = '$name'",ARRAY_A);
	$templates = array_reverse($templates );
		
	foreach($templates as $template){ echo $template['content']; }
	
?>

</div>
<div id="footer2">
	<?php
		global $post;
		global $wpdb;
		$table_db_name = $wpdb->prefix . "eb_campaign";
		$name = $_GET['campaign'];
		$templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$name'",ARRAY_A);
			
		foreach($templates as $template){  }
		
	?>
	<?php echo $template['footerContent']; ?>
</div>
</div><!-- END WRAP -->
</body></html>