<?php  

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbsurveypro_campaigns";
	
	$ID = $_GET['lead'];
	
	$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($results as $results) {}

?>

<div id="editdep">

	<div class="well">
		
			<div id="depTitle">
				
				<h1><?php echo $results->title; ?></h1>
				<p><b>created:</b> <?php echo $results->created; ?></p>
				
			</div>
			
			<div class="depStat2">
				
				<h1><?php echo $results->total_optins; ?></h1>
				<p>total optins</p>
				
			</div>
			
			<div class="depStat3">
				
				<h1><?php echo $results->total_shares; ?></h1>
				<p>total finished</p>
				
			</div>
			
			<div class="depStat1">
				
				<h1><?php echo $results->total_views; ?></h1>
				<p>total views</p>
				
			</div>
	
			<br clear="all" >
	
	</div>
	
	
	<?php  
	
		$table_db_name = $wpdb->prefix . "fbsurveypro_questions";
		
		$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID'", OBJECT);
		
		foreach($results as $results) {}
		
		// Get Answers
		
		$table_db_name = $wpdb->prefix . "fbsurveypro_answers";
		
		$answers = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID'", OBJECT);
		
		foreach($answers as $answers_single) {}
	
	?>

	
	<!--// QUESTION #1 - MU-->
	
	<div class="reportResults">
	
	<?php if($results->q1_status == "" || $results->q1_status == "qa"){ 
		?>
		<h1><?php echo $results->q1_qa; ?></h1>
		<p class='uibutton' id="tog_A1" >Show / Hide Written Responses...</p>
		
		<div id="A1" style="display: none;" >
			
			<div class="sepper"></div>
			
			<?php 
			
			$A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID'", OBJECT);
			
				foreach($A1 as $A1){
					?>
					
					<p><?php echo $A1->a1;  ?></p>
					<div class="sepper"></div>
					
					<?php
				}	
			
			?>
		
		</div>
		
		
	<?php	
	} else { ?>
	
	<h1><?php echo $results->q1_mu_0; ?></h1>
	
	<?php  
		
		$table_db_name = $wpdb->prefix . "fbsurveypro_answers";
		
		// Get Total For MU #1
		$mu_total_A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a1 = 'mu_1'", OBJECT);
		
		// Get Total For MU #2
		$mu_total_A2 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a1 = 'mu_2'", OBJECT);
		
		// Get Total For MU #3
		$mu_total_A3 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a1 = 'mu_3'", OBJECT);
		
		// Get Total For MU #4
		$mu_total_A4 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a1 = 'mu_4'", OBJECT);
		
	?>
	
	<div style="margin-left: 10px; margin-top: 25px;">
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A1); ?></span>
	
	<span style="font-size: 14px;"><i><?php echo $results->q1_mu_1; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A2);  ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q1_mu_2; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A3); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q1_mu_3; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A4); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q1_mu_4; ?></i></span>
	</p>
	
	</div>
	
	<?php } ?>
	
	</div>
	
	
	
	<!--// QUESTION #2 - MU-->
	
	<div class="reportResults" style="margin-top: 25px;">
	
	<?php if($results->q2_status == "" || $results->q2_status == "qa"){ 
		?>
		<h1><?php echo $results->q2_qa; ?></h1>
		<p class='uibutton' id="tog_A2" >Show / Hide Written Responses...</p>
		
		<div id="A2" style="display: none;" >
			
			<div class="sepper"></div>
			
			<?php 
			
			$A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID'", OBJECT);
			
				foreach($A1 as $A1){
					?>
					
					<p><?php echo $A1->a2;  ?></p>
					<div class="sepper"></div>
					
					<?php
				}	
			
			?>
		
		</div>
		
	<?php	
	} else { ?>
	
	<h1><?php echo $results->q2_mu_0; ?></h1>
	
	<?php  
		
		$table_db_name = $wpdb->prefix . "fbsurveypro_answers";
		
		// Get Total For MU #1
		$mu_total_A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a2 = 'mu_1'", OBJECT);
		
		// Get Total For MU #2
		$mu_total_A2 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a2 = 'mu_2'", OBJECT);
		
		// Get Total For MU #3
		$mu_total_A3 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a2 = 'mu_3'", OBJECT);
		
		// Get Total For MU #4
		$mu_total_A4 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a2 = 'mu_4'", OBJECT);
		
	?>
	
	<div style="margin-left: 10px; margin-top: 25px;">
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A1); ?></span>
	
	<span style="font-size: 14px;"><i><?php echo $results->q2_mu_1; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A2);  ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q2_mu_2; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A3); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q2_mu_3; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A4); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q2_mu_4; ?></i></span>
	</p>
	
	</div>
	
	<?php } ?>
	
	</div>
	
	<!--// QUESTION #3 - MU-->
	
	<div class="reportResults" style="margin-top: 25px;">
	
	
	<?php if($results->q3_status == "" || $results->q3_status == "qa"){ 
		?>
		<h1><?php echo $results->q3_qa; ?></h1>
		<p class='uibutton' id="tog_A3" >Show / Hide Written Responses...</p>
		
		<div id="A3" style="display: none;" >
			
			<div class="sepper"></div>
			
			<?php 
			
			$A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID'", OBJECT);
			
				foreach($A1 as $A1){
					?>
					
					<p><?php echo $A1->a3;  ?></p>
					<div class="sepper"></div>
					
					<?php
				}	
			
			?>
		
		</div>
		
	<?php	
	} else { ?>
	
	<h1><?php echo $results->q3_mu_0; ?></h1>
	
	<?php  
		
		$table_db_name = $wpdb->prefix . "fbsurveypro_answers";
		
		// Get Total For MU #1
		$mu_total_A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a3 = 'mu_1'", OBJECT);
		
		// Get Total For MU #2
		$mu_total_A2 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a3 = 'mu_2'", OBJECT);
		
		// Get Total For MU #3
		$mu_total_A3 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a3 = 'mu_3'", OBJECT);
		
		// Get Total For MU #4
		$mu_total_A4 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a3 = 'mu_4'", OBJECT);
		
	?>
	
	<div style="margin-left: 10px; margin-top: 25px;">
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A1); ?></span>
	
	<span style="font-size: 14px;"><i><?php echo $results->q3_mu_1; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A2);  ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q3_mu_2; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A3); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q3_mu_3; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A4); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q3_mu_4; ?></i></span>
	</p>
	
	</div>
	
	<?php } ?>
	
	</div>
	
	
	<!--// QUESTION #4 - MU-->
	
	<div class="reportResults" style="margin-top: 25px;">
	
	
	<?php if($results->q4_status == "" || $results->q4_status == "qa"){ 
		?>
		<h1><?php echo $results->q4_qa; ?></h1>
		<p class='uibutton' id="tog_A4" >Show / Hide Written Responses...</p>
		
		<div id="A4" style="display: none;" >
			
			<div class="sepper"></div>
			
			<?php 
			
			$A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID'", OBJECT);
			
				foreach($A1 as $A1){
					?>
					
					<p><?php echo $A1->a4;  ?></p>
					<div class="sepper"></div>
					
					<?php
				}	
			
			?>
		
		</div>
		
	<?php	
	} else { ?>
	
	<h1><?php echo $results->q4_mu_0; ?></h1>
	
	<?php  
		
		$table_db_name = $wpdb->prefix . "fbsurveypro_answers";
		
		// Get Total For MU #1
		$mu_total_A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a4 = 'mu_1'", OBJECT);
		
		// Get Total For MU #2
		$mu_total_A2 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a4 = 'mu_2'", OBJECT);
		
		// Get Total For MU #3
		$mu_total_A3 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a4 = 'mu_3'", OBJECT);
		
		// Get Total For MU #4
		$mu_total_A4 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a4 = 'mu_4'", OBJECT);
		
	?>
	
	<div style="margin-left: 10px; margin-top: 25px;">
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A1); ?></span>
	
	<span style="font-size: 14px;"><i><?php echo $results->q4_mu_1; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A2);  ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q4_mu_2; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A3); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q4_mu_3; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A4); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q4_mu_4; ?></i></span>
	</p>
	
	</div>
	
	<?php } ?>
	
	</div>
	
	
	<!--// QUESTION #5 - MU-->
	
	<div class="reportResults" style="margin-top: 25px;">
	
	
	
	<?php if($results->q5_status == "" || $results->q5_status == "qa"){ 
		?>
		
		<h1><?php echo $results->q5_qa; ?></h1>
		<p class='uibutton' id="tog_A5" >Show / Hide Written Responses...</p>
		
		<div id="A5" style="display: none;" >
			
			<div class="sepper"></div>
			
			<?php 
			
			$A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID'", OBJECT);
			
				foreach($A1 as $A1){
					?>
					
					<p><?php echo $A1->a5;  ?></p>
					<div class="sepper"></div>
					
					<?php
				}	
			
			?>
		
		</div>
		
	<?php	
	} else { ?>
	
	<h1><?php echo $results->q5_mu_0; ?></h1>
	
	<?php  
	
		
		$table_db_name = $wpdb->prefix . "fbsurveypro_answers";
		
		// Get Total For MU #1
		$mu_total_A1 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a5 = 'mu_1'", OBJECT);
		
		// Get Total For MU #2
		$mu_total_A2 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a5 = 'mu_2'", OBJECT);
		
		// Get Total For MU #3
		$mu_total_A3 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a5 = 'mu_3'", OBJECT);
		
		// Get Total For MU #4
		$mu_total_A4 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID' AND a5 = 'mu_4'", OBJECT);
		
	?>
	
	<div style="margin-left: 10px; margin-top: 25px;">
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A1); ?></span>
	
	<span style="font-size: 14px;"><i><?php echo $results->q5_mu_1; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A2);  ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q5_mu_2; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A3); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q5_mu_3; ?></i></span>
	</p>
	
	<p>
	<span class="uibutton" style="margin-right: 15px;"><?php echo count($mu_total_A4); ?></span>
	<span style="font-size: 14px;"><i><?php echo $results->q5_mu_4; ?></i></span>
	</p>
	
	</div>
	
	<?php } ?>
	
	</div>
	

	
	</div>	

