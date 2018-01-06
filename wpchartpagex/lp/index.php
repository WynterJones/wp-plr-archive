
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
	$results = get_option('wpchartpagex_campaign_'. $ID);	
	// echo $data->id;
	
	// $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	$full_path = get_site_url();


	$assets = $full_path . "/wp-content/plugins/wpchartpagex/lp/";



 	

	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WPChartPage</title>
	<link rel="stylesheet" href="<?php echo $assets; ?>css/framework.css">
	<link rel="stylesheet" href="<?php echo $assets; ?>css/style.css">
	<script src="<?php echo $assets; ?>javascript/jquery.js" type="text/javascript"></script>
	<script src="<?php echo $assets; ?>javascript/Chart.js"></script>
	<style>

#pie1 {
	background: <?php echo stripcslashes($results->color1); ?>;
}
#pie2 {
	background: <?php echo stripcslashes($results->color2); ?>;
}
#pie3 {
	background: <?php echo stripcslashes($results->color3); ?>;
}
#pie4 {
	background: <?php echo stripcslashes($results->color4); ?>;
}
<?php if ($results->graph == "bar" || $results->graph == 'linechart' || $results->graph == 'radar') { ?>
#pie1 {
	display: none; text-align: center;
}
#pie2 {
	display: none; text-align: center;
}
#pie3 {
	display: none; text-align: center;
}
#pie4 {
	display: none; text-align: center;
}
<?php } ?>
	</style>

	<script>
		$( window ).ready(function() {
			// Start -------------------------------------------

			
		<?php if ($results->graph == "pie") { ?>
			var pieData = [
				
				<?php if ($results->value1 != "") { ?>
				
				{
					value : <?php echo stripcslashes($results->value1); ?>,
					color : "<?php echo stripcslashes($results->color1); ?>"
				}<?php } ?>
				<?php if ($results->value2 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value2); ?>,
					color : "<?php echo stripcslashes($results->color2); ?>"
				}<?php } ?>
				<?php if ($results->value3 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value3); ?>,
					color : "<?php echo stripcslashes($results->color3); ?>"
				}<?php } ?>

				<?php if ($results->value4 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value4); ?>,
					color : "<?php echo stripcslashes($results->color4); ?>"
				}<?php } ?>

			];

			var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(pieData);

		<?php } ?>

		  	


			<?php if ($results->graph == "bar") { ?>

			var barData = {
				labels : [
				<?php if ($results->valuetext1 != "") { ?>
					"<?php echo stripcslashes($results->valuetext1); ?>"
				<?php } ?>
				<?php if ($results->valuetext2 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext2); ?>"
				<?php } ?>
				<?php if ($results->valuetext3 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext3); ?>"
				<?php } ?>
				<?php if ($results->valuetext4 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext4); ?>"
				<?php } ?>
				],
				datasets : [
					{
						fillColor : "<?php echo stripcslashes($results->color1); ?>",
						strokeColor : "<?php echo stripcslashes($results->color2); ?>",
						data : [
				<?php if ($results->value1 != "") { ?>
					<?php echo stripcslashes($results->value1); ?>
				<?php } ?>
				<?php if ($results->value2 != "") { ?>
					,
					<?php echo stripcslashes($results->value2); ?>
				<?php } ?>
				<?php if ($results->value3 != "") { ?>
					,
					<?php echo stripcslashes($results->value3); ?>
				<?php } ?>
				<?php if ($results->value4 != "") { ?>
					,
					<?php echo stripcslashes($results->value4); ?>
				<?php } ?>
						]
					}
				]
			}

			var barData = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barData);

			<?php } ?>


			<?php if ($results->graph == "doughnut") { ?>
						
				var doughnutdata = [
					<?php if ($results->value1 != "") { ?>
				
				{
					value : <?php echo stripcslashes($results->value1); ?>,
					color : "<?php echo stripcslashes($results->color1); ?>"
				}<?php } ?>
				<?php if ($results->value2 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value2); ?>,
					color : "<?php echo stripcslashes($results->color2); ?>"
				}<?php } ?>
				<?php if ($results->value3 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value3); ?>,
					color : "<?php echo stripcslashes($results->color3); ?>"
				}<?php } ?>

				<?php if ($results->value4 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value4); ?>,
					color : "<?php echo stripcslashes($results->color4); ?>"
				}<?php } ?>

				]

				var doughnutdata = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutdata);

				<?php  } ?>


				<?php if ($results->graph == "polar") { ?>
						
				var doughnutdata = [
					<?php if ($results->value1 != "") { ?>
				
				{
					value : <?php echo stripcslashes($results->value1); ?>,
					color : "<?php echo stripcslashes($results->color1); ?>"
				}<?php } ?>
				<?php if ($results->value2 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value2); ?>,
					color : "<?php echo stripcslashes($results->color2); ?>"
				}<?php } ?>
				<?php if ($results->value3 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value3); ?>,
					color : "<?php echo stripcslashes($results->color3); ?>"
				}<?php } ?>

				<?php if ($results->value4 != "") { ?>
				,

				{
					value : <?php echo stripcslashes($results->value4); ?>,
					color : "<?php echo stripcslashes($results->color4); ?>"
				}<?php } ?>

				]

				var doughnutdata = new Chart(document.getElementById("canvas").getContext("2d")).PolarArea(doughnutdata);

				<?php  } ?>



				<?php if ($results->graph == "linechart") { ?>

			var barData = {
				labels : [
				<?php if ($results->valuetext1 != "") { ?>
					"<?php echo stripcslashes($results->valuetext1); ?>"
				<?php } ?>
				<?php if ($results->valuetext2 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext2); ?>"
				<?php } ?>
				<?php if ($results->valuetext3 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext3); ?>"
				<?php } ?>
				<?php if ($results->valuetext4 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext4); ?>"
				<?php } ?>
				],
				datasets : [
					{
						fillColor : "<?php echo stripcslashes($results->color1); ?>",
						strokeColor : "<?php echo stripcslashes($results->color2); ?>",
						data : [
				<?php if ($results->value1 != "") { ?>
					<?php echo stripcslashes($results->value1); ?>
				<?php } ?>
				<?php if ($results->value2 != "") { ?>
					,
					<?php echo stripcslashes($results->value2); ?>
				<?php } ?>
				<?php if ($results->value3 != "") { ?>
					,
					<?php echo stripcslashes($results->value3); ?>
				<?php } ?>
				<?php if ($results->value4 != "") { ?>
					,
					<?php echo stripcslashes($results->value4); ?>
				<?php } ?>
						]
					}
				]
			}

			var barData = new Chart(document.getElementById("canvas").getContext("2d")).Line(barData);

			<?php } ?>



			<?php if ($results->graph == "radar") { ?>

			var barData = {
				labels : [
				<?php if ($results->valuetext1 != "") { ?>
					"<?php echo stripcslashes($results->valuetext1); ?>"
				<?php } ?>
				<?php if ($results->valuetext2 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext2); ?>"
				<?php } ?>
				<?php if ($results->valuetext3 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext3); ?>"
				<?php } ?>
				<?php if ($results->valuetext4 != "") { ?>
					,
					"<?php echo stripcslashes($results->valuetext4); ?>"
				<?php } ?>
				],
				datasets : [
					{
						fillColor : "<?php echo stripcslashes($results->color1); ?>",
						strokeColor : "<?php echo stripcslashes($results->color2); ?>",
						data : [
				<?php if ($results->value1 != "") { ?>
					<?php echo stripcslashes($results->value1); ?>
				<?php } ?>
				<?php if ($results->value2 != "") { ?>
					,
					<?php echo stripcslashes($results->value2); ?>
				<?php } ?>
				<?php if ($results->value3 != "") { ?>
					,
					<?php echo stripcslashes($results->value3); ?>
				<?php } ?>
				<?php if ($results->value4 != "") { ?>
					,
					<?php echo stripcslashes($results->value4); ?>
				<?php } ?>
						]
					}
				]
			}

			var barData = new Chart(document.getElementById("canvas").getContext("2d")).Radar(barData);

			<?php } ?>

$('#video iframe').attr('style', 'width: 100% !important; height: 560px !important');
$('#video object').attr('style', 'width: 100% !important; height: 560px !important');
$('#video embed').attr('style', 'width: 100% !important; height: 560px !important');
			// End -------------------------------------------
		});
	</script>


<link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Droid+Sans:400,700|Lato:400,700,900,400italic|Lora:400,700,400italic,700italic|Pompiere|Maiden+Orange|PT+Sans+Narrow|Rokkitt:400,700|Gloria+Hallelujah|Droid+Serif:400,700,400italic,700italic|Open+Sans+Condensed:300,700|Bree+Serif|Special+Elite|Lobster+Two:400,400italic,700,700italic|Indie+Flower|Oswald:400,300,700' rel='stylesheet' type='text/css'>

	<style>
	.bucket img {
		width: 100%;
		border-radius: 6px !important;
		box-shadow: 0 0 3px <?php echo stripcslashes($results->shadowColor); ?>;
		margin: 10px 0;
	}
	.post h1, .post h2, .post h3, .post h4, .post h5, .post h6, .post p {
		padding-bottom: 10px;
	}
	.post ul, .post ol {
		margin:  0 ;
		margin-left: 50px !important;
		padding-bottom: 20px;
		<?php if($results->textColor == "black") { ?>
		color: #000 !important;
	<?php } else { ?>
		color: #fff;
	<?php } ?>
	}
	a {
		<?php if($results->textColor == "black") { ?>
		color: #000 !important;
	<?php } else { ?>
		color: #fff;
	<?php } ?>
	}

.bucket p {
	font-size: .8em;
}

body.typography1, input {
			font-family: 'Oswald', sans-serif !important;
		}
		body.typography2, input {
			font-family: 'Droid Sans', sans-serif !important;
		}
		body.typography3, input {
			font-family: 'Lato', sans-serif !important;
		}
		body.typography4, input {
			font-family: 'Lora', serif !important;
		}
		body.typography5, input {
			font-family: 'Pompiere', cursive !important;
		}
		body.typography6, input {
			font-family: 'Patrick Hand', cursive !important;
		}
		body.typography7, input {
			font-family: 'Maiden Orange', cursive !important;
		}
		body.typography8, input {
			font-family: 'PT Sans Narrow', sans-serif !important;
		}
		body.typography9, input {
			font-family: 'Rokkitt', serif !important;
		}
		body.typography11, input {
			font-family: 'Droid Serif', serif !important;
		}
		body.typography12, input {
			font-family: 'Open Sans Condensed', sans-serif !important;
		}
		body.typography13, input {
			font-family: 'Bree Serif', serif !important;
		}
		body.typography14, input {
			font-family: 'Special Elite', cursive !important;
		}
		body.typography15, input {
			font-family: 'Lobster Two', cursive !important;
		}

		body {
    background: url(<?php echo stripcslashes($results->optinBG); ?>) fixed;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

}

		h1, h2, h3, h4, h5, h6 {
	<?php if($results->textColor == "black") { ?>
		color: #000 !important;
	<?php } else { ?>
		color: #fff;
	<?php } ?>
	font-weight: bold;
	letter-spacing: -1px;
	text-shadow: 2px 2px 2px  <?php echo stripcslashes($results->shadowColor); ?>;

	<?php if($results->overlay == "white") { ?>
		
		text-shadow: none !important;
	<?php } ?>
}
 p {
	<?php if($results->textColor == "black") { ?>
		color: #000 !important;
	<?php } else { ?>
		color: #fff;
	<?php } ?>
	font-weight: normal;
	letter-spacing: -1px;
	text-shadow: 2px 2px 4px  <?php echo stripcslashes($results->shadowColor); ?>;
	<?php if($results->overlay == "white") { ?>
		
		text-shadow: none !important;
	<?php } ?>
}

.container {
	<?php if($results->overlay == "dark") { ?>
		background: url(<?php echo $assets; ?>images/darkoverlay.png) repeat;
		box-shadow: 0 0 5px <?php echo stripcslashes($results->shadowColor); ?>;
	<?php } ?>
	<?php if($results->overlay == "light") { ?>
		background: url(<?php echo $assets; ?>images/overlay.png) repeat;
		box-shadow: 0 0 5px <?php echo stripcslashes($results->shadowColor); ?>;
	<?php } ?>
	<?php if($results->overlay == "white") { ?>
		background: #fff repeat;
		text-shadow: none !important;
		box-shadow: 0 0 5px <?php echo stripcslashes($results->shadowColor); ?>;
	<?php } ?>
}

	</style>
	<!-- DO NOT PUT HTML HERE!! -->
</head>
<body  class="typography<?php echo stripcslashes($results->typography); ?>">
	<!-- YES! PUT HTML HERE -->
	<div class="container">
		<div class="grid">
			<div class="unit span-grid header">
			<?php if ($results->logoImage != '') { ?>
		        <img src=<?php echo stripcslashes($results->logoImage); ?> style="max-width: 500px; margin: 0 auto; display: block;">
		        <?php } ?>
		       	<h1><?php echo stripcslashes($results->mainHeadline); ?></h1>
		       	<h2><?php echo stripcslashes($results->subHeadline); ?></h2>
		    </div>

		    <div class="unit three-of-five">
		        <canvas id="canvas" height="400" width="400" style="margin: 0 auto; display: block"></canvas>
		    </div>

		    <div class="unit two-of-five">
		    	
		    	<h3 style="margin-bottom:10px;"><span id="pie1" class="legend"></span><?php echo stripcslashes($results->valuetext1); ?></h3>
		    	<h3 style="margin-bottom:10px;"><span id="pie2" class="legend"></span><?php echo stripcslashes($results->valuetext2); ?></h3>
		    	<h3 style="margin-bottom:10px;"><span id="pie3" class="legend"></span><?php echo stripcslashes($results->valuetext3); ?></h3>
		    	<h3 style="margin-bottom:10px;"><span id="pie4" class="legend"></span><?php echo stripcslashes($results->valuetext4); ?></h3>
				<div id="formbox">
		      <p style="padding: 10px 30px; text-align: center;"><?php echo stripcslashes($results->optinHeadline); ?></p>
				<?php echo stripcslashes($results->autoresponder); ?>

			</div>


			</div>

        
<br clear="all">
<br>    
</div>
		    

		    <div class="unit one-of-three bucket">
		        <?php if ($results->content1Image != '') { ?>
		        <img src=<?php echo stripcslashes($results->content1Image); ?> alt="">
		        <?php } ?>
<?php echo stripcslashes($results->content1Body); ?>
		    </div>

		    <div class="unit one-of-three bucket">
		    <?php if ($results->content2Image != '') { ?>
		        <img src=<?php echo stripcslashes($results->content2Image); ?> alt="">
		        <?php } ?>
		       	<?php echo stripcslashes($results->content2Body); ?>
		    </div>


		    <div class="unit one-of-three bucket">
		        <?php if ($results->content3Image != '') { ?>
		        <img src=<?php echo stripcslashes($results->content3Image); ?> alt="">
		        <?php } ?>
		        <?php echo stripcslashes($results->content3Body); ?>
		    </div>

		    <div  class="unit span-grid video-container" >
		    	
		    	
         <div id="video" style="padding: 20px 0">
         	<?php echo stripcslashes($results->videoBox); ?>
         </div>

		    	
		    </div>

		    <div class=" unit span-grid" style="padding-top: 20px;">
		    <div class="post">
		    	<?php echo stripcslashes($results->mainContent); ?>
		    </div>

		    <br clear="all">
<br>  

		    		    	<div class="footer">
		    		    		<?php echo stripcslashes($results->footer); ?>

		    		    		<br><br>
		    		    	</div>
		
	</div>
	<!-- YES! PUT HTML HERE -->
</body>
</html>

