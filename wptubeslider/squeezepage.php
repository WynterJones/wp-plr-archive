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

	<script>
	$(document).load(function() {
		$('iframe').load(function() {
		    this.style.height =
		    this.contentWindow.document.body.offsetHeight + 'px';
		});
});
	</script>
	<style>body {

font-size: 85%;
		}</style>
</head>
<body class="font<?php echo get_post_meta( $post->ID, 'typography', true  ); ?> paragraph<?php echo get_post_meta( $post->ID, 'paragraph', true  ); ?> bg<?php echo get_post_meta( $post->ID, 'background', true  ); ?>">
<?php if(get_post_meta( $post->ID, 'timer', true  )) { echo '<img src="'.get_post_meta( $post->ID, 'timer', true  ).'" style="max-width: 670px; margin: 0 auto; margin-top: 20px; margin-bottom: -20px; display: block;" />'; } ?>
<div id="content_squeeze">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div id="iframe_squeeze">
		<iframe src="<?php echo get_post_meta( $post->ID, 'videourl', true  ) ?>" style="width: 615px; margin: 25px auto; display: block; height: 700px;" frameborder="0" scrolling="no" ></iframe>
	</div>	

	<div  style="display: block;padding: 0 60px; padding-top: 0; ">
		<div id="form" style="display:block">
			<!-- <h4 style="padding-left: 15px; font-size: 17px">Sign up to get instant access to SEO course today...</h4>
		<input type="text" name="name" id="name" placeholder="Your Full Name" style="float: left; background: url(http://cdn2.iconfinder.com/data/icons/ledicons/user_business.png) no-repeat right; background-position: 210px 9px; width: 240px; margin: 0 15px; padding: 6px; padding-right: 35px;" value="" tabindex="1" />
		<input type="text" name="email" id="email" placeholder="Your Email Address" style="float: left;background: url(http://cdn2.iconfinder.com/data/icons/ledicons/email_open_image.png) no-repeat right; background-position: 210px 9px; width: 240px;margin: 0 15px; padding: 6px; padding-right: 35px;" value="" tabindex="1" />
		
		<input type="submit" value="Sign Up Today"  style="float: left; width: 135px; font-size: 13px; padding: 6px; border: 1px solid #833f07;
-moz-box-shadow: inset 0 0 5px rgba(255,148,58,.75);
-webkit-box-shadow: inset 0 0 5px rgba(255,148,58,.75);
box-shadow: inset 0 0 5px rgba(255,148,58,.75);
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y3N2QxNyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2Y3OTYxOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+);
background-image: -moz-linear-gradient(bottom, #f77d17 0%, #f79618 100%);
background-image: -o-linear-gradient(bottom, #f77d17 0%, #f79618 100%);
background-image: -webkit-linear-gradient(bottom, #f77d17 0%, #f79618 100%);
background-image: linear-gradient(bottom, #f77d17 0%, #f79618 100%);
color: #fff; text-shadow: 1px 1px 0 #b25609; font: inherit" /> -->

<?php the_content(); ?>
		
		</div>
	</div>
<br clear="all" />
	
	

	<?php endwhile; ?>

</div>

<div style="text-align: center; font-size: 11px; padding-top: 20px">
	<p><?php echo get_post_meta( $post->ID, 'mainheadline', true  ) ?></p>
</div>

</body>
</html>