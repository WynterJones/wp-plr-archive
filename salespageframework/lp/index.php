<?php

  
  define('WP_USE_THEMES', false);
  require('../../../../wp-blog-header.php');
  
  // Load Up All Key Departments
  $urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
  $urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
  $urlx = str_replace( "?", "", $urlx);
  global $wpdb;
  $table_db_name = $wpdb->prefix . $pluginName;
  
  $ID = $_GET['id'];
  
  $data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
  
  foreach($data as $data) {}

  // Return Option Object:
  $results = get_option('salespageframework_campaign_'. $ID); 
  // echo $data->id;
  
  // $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
  $full_path = get_site_url();


  $assets = $full_path . "/wp-content/plugins/salespageframework/lp/";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Google Font  -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $assets  ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $assets  ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo $assets  ?>/css/style.css">
    
    <!--[if lt IE 9]>
      <script src="ie/html5shiv.js"></script>
      <script src="ie/respond.min.js"></script>
    <![endif]-->

    <!-- ADD CSS LINKS HERE -->
    <!-- ----------------- -->
      <div id="css">
        <?php echo stripcslashes($results->css); ?>
      </div>
    <!-- ----------------- -->
    <!-- ADD CSS LINKS HERE -->



  </head>
  <body>
  
  <!-- ADD HTML HERE -->
    <!-- ----------------- -->
    <?php echo stripcslashes($results->body); ?>
    <!-- ----------------- -->
  <!-- ADD HTML HERE -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $assets  ?>/js/jquery.js"></script>
    <script src="<?php echo $assets  ?>/js/bootstrap.js"></script>
    <script>
    $(document).ready(function() {
 
         $( "#css link" ).each(function( index ) {
       
        var id = $(this).attr('href');
        $(this).attr('href', '<?php echo $assets  ?>'+id);
        });
         var texture = $('#textureCSS').attr('texture');
         if(texture != '') {
          $('#textureCSS').html('html, body {  background: url(<?php echo $assets  ?>/images/textures/'+texture+'.png) repeat !important; }')
         }
      });
    </script>
  </body>
</html>