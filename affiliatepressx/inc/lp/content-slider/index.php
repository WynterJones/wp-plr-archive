 <?php

    // Affiliate Offers Prototype
    // Main Template
    // Version 1.0

    // Copyright (c) 2013 - Gue.rrilla Marketing
    
    define('WP_USE_THEMES', false);
    require('../../../../../../wp-blog-header.php');
    
    // Load Up All Key Departments
    $urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    $urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
    $urlx = str_replace( "?", "", $urlx);

    global $wpdb;
    $table_db_name = $wpdb->prefix . "affiliatepressx";

    $id = $_GET['id'];
    
    $data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$id'", OBJECT);
    
    foreach($data as $data) {}

    
    // $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
    $full_path = get_site_url();

    // Return Option Object:
    $results = get_option('affiliatepressx_campaign_'. $id);

    $assets = $full_path . "/wp-content/plugins/affiliatepressx/inc/lp/assets";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <title></title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="demo/demo.css">
    <link rel="stylesheet" href="demo/select2-3.4.0/select2.css">

    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="bp-content-slider.css">
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body id="home">


        <div class="box" id="slider-wrap">
            <ul id="slider">
                <?php if($results->slide1 != '' && $results->slide1Type == 'image') { ?>
                    <li class="bp-content-slider-image bp-content-slider-item" rel="<?php echo $results->slide1; ?>"></li>
                <?php } ?>
                <?php if($results->slide1 != '' && $results->slide1Type == 'iframe') { ?>
                    <li class="bp-content-slider-iframe bp-content-slider-item" rel="<?php echo $results->slide1; ?>"></li>
                <?php } ?>

                <?php if($results->slide2 != '' && $results->slide2Type == 'image') { ?>
                    <li class="bp-content-slider-image bp-content-slider-item" rel="<?php echo $results->slide2; ?>"></li>
                <?php } ?>
                <?php if($results->slide2 != '' && $results->slide2Type == 'iframe') { ?>
                    <li class="bp-content-slider-iframe bp-content-slider-item" rel="<?php echo $results->slide2; ?>"></li>
                <?php } ?>


                <?php if($results->slide3 != '' && $results->slide3Type == 'image') { ?>
                    <li class="bp-content-slider-image bp-content-slider-item" rel="<?php echo $results->slide3; ?>"></li>
                <?php } ?>
                <?php if($results->slide3 != '' && $results->slide3Type == 'iframe') { ?>
                    <li class="bp-content-slider-iframe bp-content-slider-item" rel="<?php echo $results->slide3; ?>"></li>
                <?php } ?>

                <?php if($results->slide4 != '' && $results->slide4Type == 'image') { ?>
                    <li class="bp-content-slider-image bp-content-slider-item" rel="<?php echo $results->slide4; ?>"></li>
                <?php } ?>
                <?php if($results->slide4 != '' && $results->slide4Type == 'iframe') { ?>
                    <li class="bp-content-slider-iframe bp-content-slider-item" rel="<?php echo $results->slide4; ?>"></li>
                <?php } ?>

                <?php if($results->slide5 != '' && $results->slide5Type == 'image') { ?>
                    <li class="bp-content-slider-image bp-content-slider-item" rel="<?php echo $results->slide5; ?>"></li>
                <?php } ?>
                <?php if($results->slide5 != '' && $results->slide5Type == 'iframe') { ?>
                    <li class="bp-content-slider-iframe bp-content-slider-item" rel="<?php echo $results->slide5; ?>"></li>
                <?php } ?>


                <?php if($results->slide6 != '' && $results->slide6Type == 'image') { ?>
                    <li class="bp-content-slider-image bp-content-slider-item" rel="<?php echo $results->slide6; ?>"></li>
                <?php } ?>
                <?php if($results->slide6 != '' && $results->slide6Type == 'iframe') { ?>
                    <li class="bp-content-slider-iframe bp-content-slider-item" rel="<?php echo $results->slide6; ?>"></li>
                <?php } ?>
                </li>
            </ul>
        </div>

        <div id="footer">
        </div>

   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="demo/select2-3.4.0/select2.min.js"></script>

    <script src="bp-content-slider.js"></script>

    <script>
        $(document).ready(function() {
            
            
          
$('#slider').bpSlider({
                "theme": '<?php echo $results->sliderTheme; ?>',
                "animation": {
                    "next" : {
                        "entrance" : '<?php echo $results->sliderPreviousEntrance; ?>',
                        "exit" : '<?php echo $results->sliderPreviousExit; ?>'
                    },
                    "prev" : {
                        "entrance" : '<?php echo $results->sliderPreviousEntrance; ?>',
                        "exit" : '<?php echo $results->sliderPreviousExit; ?>'
                    }
                },
                "speed": '<?php echo $results->sliderTime; ?>',
                "separated": 'false'
            });

            

        });
    </script>

</body>
</html>