<?php

	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Load Up All Key Departments
	
	global $wpdb;
	$table_db_name = $wpdb->prefix . "oppro_settings";
	
	$id = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '1'", OBJECT);
	
	foreach($data as $settings) {}

	
	$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
   
?>

<html>
<head>
	<title>Invoice To Go</title>

	<link href="<?php echo $full_path; ?>invoicetogo/lp/css/bootstrap.css" rel="stylesheet" type="text/css" />

	<?php

	// Css for button colors:

	if($settings->btn == "" || $settings->btn == "1" ){
		?>
		<link href="<?php echo $full_path; ?>invoicetogo/lp/css/table1.css" rel="stylesheet" type="text/css" />
		<?php
	} else if($settings->btn == "2" ){
		?>
		<link href="<?php echo $full_path; ?>invoicetogo/lp/css/table2.css" rel="stylesheet" type="text/css" />
		<?php
	} else if($settings->btn == "3" ){
		?>
		<link href="<?php echo $full_path; ?>invoicetogo/lp/css/table3.css" rel="stylesheet" type="text/css" />
		<?php
	} else if($settings->btn == "4" ){
		?>
		<link href="<?php echo $full_path; ?>invoicetogo/lp/css/table4.css" rel="stylesheet" type="text/css" />
		<?php
	}

	?>
	<link href="<?php echo $full_path; ?>invoicetogo/lp/css/main.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() {
	
		$('.dropdown').mouseover(function() {
		    $(this).find(".description").show();
		}).mouseout(function(){
		    $(this).find(".description").hide();
		});
	
	});
	</script>

	<style type="text/css">


	.feature-list li span {
	margin-top: 7px !important;
	}

	.description{
	display: none;
}


	</style>

</head>
<body>

<div id="mainWrapper">


	<div class="headline">

		<?php

		$table_db_name = $wpdb->prefix . "oppro_campaigns";
	
		$id = $_GET['id'];
	
		$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$id'", OBJECT);
	
		foreach($data as $intro) {}

			// +1 For Views
			$views = $intro->total_views + 1;
			$wpdb->update($table_db_name, 
			array( 
			 'total_views' => $views
			),
			  array( 'id' => $id )
			);

		?>

		<h1><?php ddPlay($intro->heading1, 'Invoice To Go'); ?></h1>
		<h3><?php ddPlay($intro->heading2, 'Display Your Invoice Pricing Table for Your Client'); ?></h3>
		<p style="font-size: 16px !important; "><?php ddPlay($intro->blurb, 'Write Small Blurb About Your Company'); ?></p>
	</div>

	<div id="intro">

		<?php ddPlay($settings->intro, '<h3>Your Company Name</h3><p>Introduction for your invoice to keep track of what this invoice is for - descibe your offer, product or service.</p>'); ?>

		
	</div>

	<div id="branding">
		<img src="<?php ddPlay($settings->company_logo, plugins_url().'/invoicetogo/images/logo.png'); ?>" >
		<br><br>
		<p><?php ddPlay($settings->company_info, 'Describe your company here and discuss the invoice for your clients'); ?></p>

	</div>


	<!-- PRICING PLAN SECTION -->

	<section class="plan">
		<article class="free clearfix">

			<div class="plan-info clearfix">
				
				<h1><?php ddPlay($settings->plan_title_1, 'Plan Title #1') ?></h1>
				<h3><?php ddPlay($settings->plan_blurb_1, 'Quickly describe plan..') ?></h3>

				
			</div>

			<ul class="feature-list">

				<?php

				$table_db_name = $wpdb->prefix . "oppro_plans";
	
				$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE plan = '1' ", OBJECT);
				
				foreach($data as $plan) {


				?>


				<?php
					if($plan->blurb == ""){
						?>
						<li>
						<?php
					} else {
						?>
						<li class="dropdown">
						<?php
					}
					?>

					<?php
					if($plan->bullet == "" || $plan->bullet == "1"){
						?><span class="check"></span><?php
					} else {
						?><span class="x"></span><?php
					}
					?>

					<h2><?php echo $plan->heading; ?></h2>

					

					<p class="description">
						<?php echo $plan->blurb; ?>
						</p>

				
				</li>

				<?php

				}

				?>
				
			</ul>

			<a href="<?php echo $settings->plan_url_1; ?>" class="sign-up button"><?php ddPlay($settings->plan_btn_1, 'Buy This Plan') ?></a>

		</article>



		<article class="classic clearfix">

			<div class="plan-info clearfix">
				
				<h1><?php ddPlay($settings->plan_title_2, 'Plan Title #2') ?></h1>
				<h3><?php ddPlay($settings->plan_blurb_2, 'Quickly describe plan..') ?></h3>

				
			</div>

			<ul class="feature-list">

				<?php

				$table_db_name = $wpdb->prefix . "oppro_plans";
	
				$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE plan = '2' ", OBJECT);
				
				foreach($data as $plan) {


				?>


				<?php
					if($plan->blurb == ""){
						?>
						<li>
						<?php
					} else {
						?>
						<li class="dropdown">
						<?php
					}
					?>

					<?php
					if($plan->bullet == "" || $plan->bullet == "1"){
						?><span class="check"></span><?php
					} else {
						?><span class="x"></span><?php
					}
					?>

					<h2><?php echo $plan->heading; ?></h2>

					

					<p class="description">
						<?php echo $plan->blurb; ?>
						</p>

				
				</li>

				<?php

				}

				?>
				
			</ul>

			<a href="<?php echo $settings->plan_url_2; ?>" class="sign-up button"><?php ddPlay($settings->plan_btn_2, 'Buy This Plan') ?></a>

		</article>


		<article class="professional clearfix">

			<div class="plan-info clearfix">
				
				<h1><?php ddPlay($settings->plan_title_3, 'Plan Title #3') ?></h1>
				<h3><?php ddPlay($settings->plan_blurb_3, 'Quickly describe plan..') ?></h3>

			</div>

			<ul class="feature-list">

				<?php

				$table_db_name = $wpdb->prefix . "oppro_plans";
	
				$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE plan = '3' ", OBJECT);
				
				foreach($data as $plan) {


				?>


				<?php
					if($plan->blurb == ""){
						?>
						<li>
						<?php
					} else {
						?>
						<li class="dropdown">
						<?php
					}
					?>

					<?php
					if($plan->bullet == "" || $plan->bullet == "1"){
						?><span class="check"></span><?php
					} else {
						?><span class="x"></span><?php
					}
					?>

					<h2><?php echo $plan->heading; ?></h2>

					

					<p class="description">
						<?php echo $plan->blurb; ?>
						</p>

				
				</li>

				<?php

				}

				?>
				
			</ul>

			<a href="<?php echo $settings->plan_url_3; ?>" class="sign-up button"><?php ddPlay($settings->plan_btn_3, 'Buy This Plan') ?></a>

		</article>

	</section>

	<br clear="left" />


	<div class="quote">
		
		
		<?php echo $settings->testimonial_body_1; ?>
		<h3><?php echo $settings->testimonial_name_1; ?></h3>

	</div>

	<div class="quote">
		
		
		<?php echo $settings->testimonial_body_2; ?>
		<h3><?php echo $settings->testimonial_name_2; ?></h3>
		
	</div>

	<!-- <div id="footer">
		<span style="float: right;">Company Name Here</span>
		<span style="float: left;">Copyright 2012 &copy; - All Rights Reserved</span>
		<br clear="all" />
	</div> -->

</div>	



</body>
</html>