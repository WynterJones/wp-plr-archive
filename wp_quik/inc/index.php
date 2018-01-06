<?php require('wp-blog-header.php'); ?>
<?php $dir = get_site_url() . '/wp-content/plugins/wp_quik/'; ?> 
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php the_title(); ?></title>

  <link rel="stylesheet" href="<?php echo $dir; ?>inc/css/foundation.css" />

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

	 
  <?php include('layout1.php'); ?>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
