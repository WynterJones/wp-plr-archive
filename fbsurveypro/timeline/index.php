<?php

	// ADD WORDPRESS
	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	// Load Up All Key Departments
	
	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbsurveypro_campaigns";
	
	$id = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$id'", OBJECT);
	
	foreach($data as $results) {}
	
	// +1 For Views
	$views = $results->total_views + 1;
	$wpdb->update($table_db_name, 
	array( 
	 'total_views' => $views
	),
	  array( 'id' => $id )
	);
	
	$table_db_name = $wpdb->prefix . "fbsurveypro_questions";
	$data2 = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$id'", OBJECT);
	
	foreach($data2 as $question) {}
			
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Survey</title>
	<style>
		body{
			margin: 0px;
			text-align:center;
		}
		.optinform{
			display: block;
			width: 465px;
			padding: 15px;
			font-weight: bold;
		}
		.optinbtn{
			padding: 15px;
			width: 465px;
			text-align: center;
			font-size: 18px;
			font-weight: bold;
		}
		
		.radioBTN{
			padding-bottom: 10px;
			padding-top: 10px;
			margin-left: 20px;
			margin-right: 20px;
			padding-left: 20px;
			padding-right: 20px;
			border-bottom: 1px dotted #cde9f9;
			cursor: pointer;
		}
		
		.radioBTN:hover{
			background-color: #cde9f9;
		}
		
		.radioITEM{
			font-size: 18px;
			margin-left: 15px;
		}
		
		.QAtextarea{
			width: 490px;
			height: 100px;
		}
		
	</style>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.0.6" media="screen" />
	 <link href="bootstrap.css" rel="stylesheet" type="text/css" />
	 
	 <script type="text/javascript" src="jquery.backstretch.js"></script>
	
	 <link href="main.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">
	$(document).ready(function() {
	
		$.backstretch("<?php echo $results->optin_image; ?>");
		
		// optin
		
		$('#startSurvey').click(function() {
		
			$name = $("#optin_name").val();
			$email = $("#optin_email").val();
			
			var data = {
				id: "<?php echo $_GET['id']; ?>",
				name: ""+$name+"",
				email: ""+$email+""
			};
				
			var savelead = "<?php echo site_url() ?>/wp-content/plugins/fbsurveypro/inc/save_lead.php";
			
			if($name == ""){
				
				$("#optin_name").css('borderColor', 'red');
				
			} 
			
			if($email == ""){
				
				$("#optin_email").css('borderColor', 'red');
				
			} else {
				
				
				
				$("#step1").hide();
				
				// ON LOAD SKIP QUESTIONS IF EMPTY
				// QA - Question / Answer
				
				$qSkip_1 = $("#qSkip_1").val();
				$qSkip_2 = $("#qSkip_2").val();
				$qSkip_3 = $("#qSkip_3").val();
				$qSkip_4 = $("#qSkip_4").val();
				$qSkip_5 = $("#qSkip_5").val();
				
				// FINDS STARTING POINT...
				
				if($qSkip_1 == "YES"){
					$("#q1").hide();
					$("#q2").fadeIn("fast");
					
					if($qSkip_2 == "YES"){
						$("#q2").hide();
						$("#q3").fadeIn("fast");
						
						if($qSkip_3 == "YES"){
							$("#q3").hide();
							$("#q4").fadeIn("fast");
							
							if($qSkip_4 == "YES"){
								$("#q4").hide();
								$("#q5").fadeIn("fast");
								
								if($qSkip_5 == "YES"){
									$("#q5").hide();
									$("#END").fadeIn("fast");
								}
								
							}
							
						}
						
					}
					
				} else {
					$("#q1").fadeIn("fast");
				}
				
				
				$.post( savelead, data,
				   function(results) {
							     
				});
				
				// Submit AR
				
				$("#AR").attr("src", "<?php echo site_url() ?>/wp-content/plugins/fbsurveypro/inc/ar_submit.php?id=<?php echo $_GET['id']; ?>&n="+$name+"&e="+$email+"");
			
			}
		
		  return false;
		});
		
		
		
		// SAVE ANSWERS
		var save = "<?php echo site_url() ?>/wp-content/plugins/fbsurveypro/inc/save_answer.php";
		
		var answer1 = "";
		var answer2 = "";
		var answer3 = "";
		var answer4 = "";
		var answer5 = "";
		
		// Radio Click Nearest
		
		$('.radioBTN').click(function() {
		
			$getQ = $(this).attr("qNum");
		
			$('input:radio', this).attr('checked', true);
		
			if($getQ == "q1"){
				
				$("#q1").hide();
				
						// See if next question is skipped
						if($qSkip_2 == "YES"){
							// Q2 is skipped // check if 3 is skipped too...
							if($qSkip_3 == "YES"){
								// Q3 is skipped // check if 4 is skipped too..
								if($qSkip_4 == "YES"){
									// Q4 is skipped // check if 5 is skipped too..
									if($qSkip_5 == "YES"){
										// Q5 is skipped...
										$("#END").fadeIn("fast");
										SaveAnswers();
									} else {
										// Q5 is not skipped... stop here
										$("#q5").fadeIn("fast");
									}
								} else {
									// Q4 is not skipped... stop here
									$("#q4").fadeIn("fast");
								}
								
							} else{
								// Q3 is not skipped... stop here
								$("#q3").fadeIn("fast");
							}
							
						} else {
							// Q2 is not skipped... stop here
							$("#q2").fadeIn("fast");
						}
				
				answer1 = $('input:radio', this).val();	
				console.log(answer1);
						
			} else if($getQ == "q2"){
				
				$("#q2").hide();
				
				// See if next question is skipped
				if($qSkip_3 == "YES"){
					// Q3 is skipped // check if 3 is skipped too...
					if($qSkip_4 == "YES"){
						// Q4 is skipped // check if 5 is skipped too..
						if($qSkip_5 == "YES"){
							// Q5 is skipped // check if 5 is skipped too..
							$("#END").fadeIn("fast");
							SaveAnswers();
						} else {
							// Q5 is not skipped... stop here
							$("#q5").fadeIn("fast");
						}
						
					} else{
						// Q4 is not skipped... stop here
						$("#q4").fadeIn("fast");
					}
					
				} else {
					// Q3 is not skipped... stop here
					$("#q3").fadeIn("fast");
				}
				
				
				answer2 = $('input:radio', this).val();
				console.log(answer2);		
		
			}	else if($getQ == "q3"){
				
				$("#q3").hide();
				
				// See if next question is skipped
				if($qSkip_4 == "YES"){
					// Q4 is skipped...
					if($qSkip_5 == "YES"){
						// Q5 is skipped...
						$("#END").fadeIn("fast");
						SaveAnswers();
					} else{
						// Q5 is not skipped
						$("#q5").fadeIn("fast");
					}
					
				} else {
					// Q4 is not skipped... stop here
					$("#q4").fadeIn("fast");
				}
				
				answer3 = $('input:radio', this).val();
				console.log(answer3);	
					
			} else if($getQ == "q4"){
				
				$("#q4").hide();
				
				// See if next question is skipped
				if($qSkip_5 == "YES"){
					// Q5 is skipped...
					$("#END").fadeIn("fast");
					SaveAnswers();
				} else {
					// Q5 is not skipped...
					$("#q5").fadeIn("fast");	
				}
				
				answer4 = $('input:radio', this).val();
				console.log(answer4);		
			} else if($getQ == "q5"){
				$("#q5").hide();
				$("#END").fadeIn("fast");
				answer5 = $('input:radio', this).val();
				console.log(answer5);	
				
				SaveAnswers();
					
			}
		
		  return false;
		});
		
		
		// Text Area Question
		$('.QContinue').click(function() {
		
			$getQ = $(this).attr("qNum");
				
			if($getQ == "q1"){
			
				$("#q1").hide();
			
					// See if next question is skipped
					if($qSkip_2 == "YES"){
						// Q2 is skipped // check if 3 is skipped too...
						if($qSkip_3 == "YES"){
							// Q3 is skipped // check if 4 is skipped too..
							if($qSkip_4 == "YES"){
								// Q4 is skipped // check if 5 is skipped too..
								if($qSkip_5 == "YES"){
									// Q5 is skipped...
									$("#END").fadeIn("fast");
									SaveAnswers();
								} else {
									// Q5 is not skipped... stop here
									$("#q5").fadeIn("fast");
								}
							} else {
								// Q4 is not skipped... stop here
								$("#q4").fadeIn("fast");
							}
							
						} else{
							// Q3 is not skipped... stop here
							$("#q3").fadeIn("fast");
						}
						
					} else {
						// Q2 is not skipped... stop here
						$("#q2").fadeIn("fast");
					}
					
				answer1 = $("#q1_a").val();
				console.log(answer1);
				
			} else if($getQ == "q2"){
				
				$("#q2").hide();
				
				// See if next question is skipped
				if($qSkip_3 == "YES"){
					// Q3 is skipped // check if 3 is skipped too...
					if($qSkip_4 == "YES"){
						// Q4 is skipped // check if 4 is skipped too..
						if($qSkip_5 == "YES"){
							// Q5 is skipped // check if 5 is skipped too..
							$("#END").fadeIn("fast");
							SaveAnswers();
						} else {
							// Q5 is not skipped... stop here
							$("#q5").fadeIn("fast");
						}
						
					} else{
						// Q4 is not skipped... stop here
						$("#q4").fadeIn("fast");
					}
					
				} else {
					// Q3 is not skipped... stop here
					$("#q3").fadeIn("fast");
				}
					
				answer2 = $("#q2_a").val();
				console.log(answer2);
				
			} else if($getQ == "q3"){
				
				$("#q3").hide();
				
				// See if next question is skipped
				if($qSkip_4 == "YES"){
					// Q4 is skipped...
					if($qSkip_5 == "YES"){
						// Q5 is skipped...
						$("#END").fadeIn("fast");
						SaveAnswers();
					} else{
						// Q5 is not skipped
						$("#q5").fadeIn("fast");
					}
					
				} else {
					// Q4 is not skipped... stop here
					$("#q4").fadeIn("fast");
				}
					
				answer3 = $("#q3_a").val();
				console.log(answer3);
				
			} else if($getQ == "q4"){
				
				$("#q4").hide();
				
				// See if next question is skipped
				if($qSkip_5 == "YES"){
					// Q5 is skipped...
					$("#END").fadeIn("fast");
					SaveAnswers();
					
				} else {
					// Q5 is not skipped...
					$("#q5").fadeIn("fast");	
				}
				
				answer4 = $("#q4_a").val();
				console.log(answer4);
				
			} else if($getQ == "q5"){
				$("#q5").hide();
				$("#END").fadeIn("fast");	
				answer5 = $("#q5_a").val();
				console.log(answer5);
				
				SaveAnswers();
				
			}
			
		  return false;
		});
	
		function SaveAnswers(){
		
			var data2 = {
				id: "<?php echo $_GET['id']; ?>",
				answer1: ""+answer1+"",
				answer2: ""+answer2+"",
				answer3: ""+answer3+"",
				answer4: ""+answer4+"",
				answer5: ""+answer5+""
			};
			
			$.post( save, data2, function(results) {});
		
		}
	
	});
	</script>
	
</head>
<body>



	
	<div id="optin" style=" width: 500px;">
		
		<div id="step1" style="display: block;">
		
		<?php 
			// Display Optin Copy
			echo $results->optin_copy;
		?>
		
		<input type="text" id="optin_name" placeholder="Enter In Your Full Name..." class="optinform" value="" />
		<input type="text" id="optin_email" placeholder="Enter In Your Email Address..." class="optinform" value="" />
		
		<a href="#" id="startSurvey" class="btn btn-success optinbtn"><?php 
			// Display Footer Copy
			echo $results->btn_copy;
		?></a>
		
		</div>
		
		<div id="q1" style="display: none;">
		
			<?php 
			
				if($question->q1_status == "mu" && $question->q1_mu_0 == ""){
								
								?>
								<input type="hidden" id="qSkip_1" value="YES" />
								<?php
				
				 } else if($question->q1_status == "mu"){
					
					// SHOW MULTI-CHOICE AREA
					?>
					
					<h2 style="margin-bottom: 15px;"><?php echo $question->q1_mu_0;  ?></h2>
					
					<div class="radioBTN" qNum="q1" style="display: <?php if($question->q1_mu_1 == ""){ echo "none"; } else { echo "block"; }?>;" >
					<input type="radio" class="radio_q1" name="q1" value="mu_1" />
					<span class="radioITEM"><?php echo $question->q1_mu_1;  ?></span>
					</div>
					
				
					<div class="radioBTN" qNum="q1" style="display: <?php if($question->q1_mu_2 == ""){ echo "none"; } else { echo "block"; }?>;" >
					<input type="radio" class="radio_q1" name="q1" value="mu_2" />
					<span class="radioITEM"><?php echo $question->q1_mu_2;  ?></span>
					</div>
					
					<div class="radioBTN" qNum="q1" style="display: <?php if($question->q1_mu_3 == ""){ echo "none"; } else { echo "block"; }?>;" >
					<input type="radio" class="radio_q1" name="q1" value="mu_3" />
					<span class="radioITEM"><?php echo $question->q1_mu_3;  ?></span>
					</div>
					
					<div class="radioBTN" qNum="q1" style="display: <?php if($question->q1_mu_4 == ""){ echo "none"; } else { echo "block"; }?>;" >
					<input type="radio" class="radio_q1" name="q1" value="mu_4" />
					<span class="radioITEM"><?php echo $question->q1_mu_4;  ?></span>
					</div>
					
					<?php
				
				} else if($question->q1_status == "qa" && $question->q1_qa == ""){
								
								// SHOW NOTHING
								?>
								<input type="hidden" id="qSkip_1" value="YES" />
								<?php
				
				 } else if($question->q1_status == "qa"){
					
					// SHOW QUESTION & ANSWER AREA
					?>
					
					<h2 style="margin-bottom: 15px;"><?php echo $question->q1_qa;  ?></h2>
					
					<textarea class="QAtextarea" id="q1_a"></textarea>
					
					<center>
					<img src="continue.png" class="QContinue" qNum="q1" style="margin-top: 10px; cursor: pointer;" />
					</center>
					
					<?php
					
				} 
			
			?>
			
			
		
		</div>
		
		
			<div id="q2" style="display: none;">
			
				<?php 
				
					if($question->q2_status == "mu" && $question->q2_mu_0 == ""){
									
									?>
									<input type="hidden" id="qSkip_2" value="YES" />
									<?php
					
					 } else if($question->q2_status == "mu"){
						
						// SHOW MULTI-CHOICE AREA
						?>
						
						<h2 style="margin-bottom: 15px;"><?php echo $question->q2_mu_0;  ?></h2>
						
						<div class="radioBTN" qNum="q2" style="display: <?php if($question->q2_mu_1 == ""){ echo "none"; } else { echo "block"; }?>;" >
						<input type="radio" class="radio_q2" name="q2" value="mu_1" />
						<span class="radioITEM"><?php echo $question->q2_mu_1;  ?></span>
						</div>
						
					
						<div class="radioBTN" qNum="q2" style="display: <?php if($question->q2_mu_2 == ""){ echo "none"; } else { echo "block"; }?>;" >
						<input type="radio" class="radio_q2" name="q2" value="mu_2" />
						<span class="radioITEM"><?php echo $question->q2_mu_2;  ?></span>
						</div>
						
						<div class="radioBTN" qNum="q2" style="display: <?php if($question->q2_mu_3 == ""){ echo "none"; } else { echo "block"; }?>;" >
						<input type="radio" class="radio_q1" name="q2" value="mu_3" />
						<span class="radioITEM"><?php echo $question->q2_mu_3;  ?></span>
						</div>
						
						<div class="radioBTN" qNum="q2" style="display: <?php if($question->q2_mu_4 == ""){ echo "none"; } else { echo "block"; }?>;" >
						<input type="radio" class="radio_q1" name="q2" value="mu_4" />
						<span class="radioITEM"><?php echo $question->q2_mu_4;  ?></span>
						</div>
						
						<?php
					
					} else if($question->q2_status == "qa" && $question->q2_qa == ""){
									
									// SHOW NOTHING
									?>
									<input type="hidden" id="qSkip_2" value="YES" />
									<?php
					
					 } else if($question->q2_status == "qa"){
						
						// SHOW QUESTION & ANSWER AREA
						?>
						
						<h2 style="margin-bottom: 15px;"><?php echo $question->q2_qa;  ?></h2>
						
						<textarea class="QAtextarea" id="q2_a"></textarea>
						
						<center>
						<img src="continue.png" class="QContinue" qNum="q2" style="margin-top: 10px; cursor: pointer;" />
						</center>
						
						<?php
						
					} else if($question->q2_status == ""){
						
						// SHOW NOTHING
						?>
						
						
						
						<?php
		
					}
				
				?>
				
				
			
			</div>
	

<div id="q3" style="display: none;">
	
		<?php 
		
			if($question->q3_status == "mu" && $question->q3_mu_0 == ""){
							
							?>
							<input type="hidden" id="qSkip_3" value="YES" />
							<?php
			
			 } else if($question->q3_status == "mu"){
				
				// SHOW MULTI-CHOICE AREA
				?>
				
				<h2 style="margin-bottom: 15px;"><?php echo $question->q3_mu_0;  ?></h2>
				
				<div class="radioBTN" qNum="q3" style="display: <?php if($question->q3_mu_1 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q2" name="q3" value="mu_1" />
				<span class="radioITEM"><?php echo $question->q3_mu_1;  ?></span>
				</div>
				
			
				<div class="radioBTN" qNum="q3" style="display: <?php if($question->q3_mu_2 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q3" name="q3" value="mu_2" />
				<span class="radioITEM"><?php echo $question->q3_mu_2;  ?></span>
				</div>
				
				<div class="radioBTN" qNum="q3" style="display: <?php if($question->q3_mu_3 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q1" name="q3" value="mu_3" />
				<span class="radioITEM"><?php echo $question->q3_mu_3;  ?></span>
				</div>
				
				<div class="radioBTN" qNum="q3" style="display: <?php if($question->q3_mu_4 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q1" name="q3" value="mu_4" />
				<span class="radioITEM"><?php echo $question->q3_mu_4;  ?></span>
				</div>
				
				<?php
			
			} else if($question->q3_status == "qa" && $question->q3_qa == ""){
							
							// SHOW NOTHING
							?>
							<input type="hidden" id="qSkip_3" value="YES" />
							<?php
			
			 } else if($question->q3_status == "qa"){
				
				// SHOW QUESTION & ANSWER AREA
				?>
				
				<h2 style="margin-bottom: 15px;"><?php echo $question->q3_qa;  ?></h2>
				
				<textarea class="QAtextarea" id="q3_a"></textarea>
				
				<center>
				<img src="continue.png" class="QContinue" qNum="q3" style="margin-top: 10px; cursor: pointer;" />
				</center>
				
				<?php
				
			} else if($question->q3_status == ""){
				
				// SHOW NOTHING
				
				?>
				
				
				<?php

			}
		
		?>
		
		
	
	</div>
	
<div id="q4" style="display: none;">
	
		<?php 
		
			if($question->q4_status == "mu" && $question->q4_mu_0 == ""){
							
							?>
							<input type="hidden" id="qSkip_4" value="YES" />
							<?php
			
			 } else if($question->q4_status == "mu"){
				
				// SHOW MULTI-CHOICE AREA
				?>
				
				<h2 style="margin-bottom: 15px;"><?php echo $question->q4_mu_0;  ?></h2>
				
				<div class="radioBTN" qNum="q4" style="display: <?php if($question->q4_mu_1 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q2" name="q4" value="mu_1" />
				<span class="radioITEM"><?php echo $question->q4_mu_1;  ?></span>
				</div>
				
			
				<div class="radioBTN" qNum="q4" style="display: <?php if($question->q4_mu_2 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q3" name="q4" value="mu_2" />
				<span class="radioITEM"><?php echo $question->q4_mu_2;  ?></span>
				</div>
				
				<div class="radioBTN" qNum="q4" style="display: <?php if($question->q4_mu_3 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q1" name="q4" value="mu_3" />
				<span class="radioITEM"><?php echo $question->q4_mu_3;  ?></span>
				</div>
				
				<div class="radioBTN" qNum="q4" style="display: <?php if($question->q4_mu_4 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q1" name="q4" value="mu_4" />
				<span class="radioITEM"><?php echo $question->q4_mu_4;  ?></span>
				</div>
				
				<?php
			
			} else if($question->q4_status == "qa" && $question->q4_qa == ""){
							
							?>
							<input type="hidden" id="qSkip_4" value="YES" />
							<?php
			
			 } else if($question->q4_status == "qa"){
				
				// SHOW QUESTION & ANSWER AREA
				?>
				
				<h2 style="margin-bottom: 15px;"><?php echo $question->q4_qa;  ?></h2>
				
				<textarea class="QAtextarea" id="q4_a"></textarea>
				
				<center>
				<img src="continue.png" class="QContinue" qNum="q4" style="margin-top: 10px; cursor: pointer;" />
				</center>
				
				<?php
				
			} else if($question->q4_status == ""){
				
				// SHOW NOTHING
				?>
				
			
				<?php

			}
		
		?>
		
		
	
	</div>	


<div id="q5" style="display: none;">
	
		<?php 
		
			if($question->q5_status == "mu" && $question->q5_mu_0 == ""){
							
							?>
							<input type="hidden" id="qSkip_5" value="YES" />
							<?php
			
			 } else if($question->q5_status == "mu"){
				
				// SHOW MULTI-CHOICE AREA
				?>
				
				<h2 style="margin-bottom: 15px;"><?php echo $question->q5_mu_0;  ?></h2>
				
				<div class="radioBTN" qNum="q5" style="display: <?php if($question->q5_mu_1 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q2" name="q5" value="mu_1" />
				<span class="radioITEM"><?php echo $question->q5_mu_1;  ?></span>
				</div>
				
			
				<div class="radioBTN" qNum="q5" style="display: <?php if($question->q5_mu_2 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q3" name="q5" value="mu_2" />
				<span class="radioITEM"><?php echo $question->q5_mu_2;  ?></span>
				</div>
				
				<div class="radioBTN" qNum="q5" style="display: <?php if($question->q5_mu_3 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q1" name="q5" value="mu_3" />
				<span class="radioITEM"><?php echo $question->q5_mu_3;  ?></span>
				</div>
				
				<div class="radioBTN" qNum="q5" style="display: <?php if($question->q5_mu_4 == ""){ echo "none"; } else { echo "block"; }?>;" >
				<input type="radio" class="radio_q1" name="q5" value="mu_4" />
				<span class="radioITEM"><?php echo $question->q5_mu_4;  ?></span>
				</div>
				
				<?php
			
			} else if($question->q5_status == "qa" && $question->q5_qa == ""){
							
							?>
							<input type="hidden" id="qSkip_5" value="YES" />
							<?php
			
			 } else if($question->q5_status == "qa"){
				
				// SHOW QUESTION & ANSWER AREA
				?>
				
				<h2 style="margin-bottom: 15px;"><?php echo $question->q5_qa;  ?></h2>
				
				<textarea class="QAtextarea" id="q5_a"></textarea>
				
				<center>
				<img src="continue.png" class="QContinue" qNum="q5" style="margin-top: 10px; cursor: pointer;" />
				</center>
				
				<?php
				
			} else if($question->q5_status == ""){
				
				// SHOW NOTHING
				
				?>
				
				
				<?php

			}
		
		?>
		
		
	
	</div>
	
	<div id="END" style="display: none;" >
	
		<?php 
			// Display Footer Copy
			echo $results->footer_copy;
		?>
	
	</div>
		
		<!--<div id="optinForm" style="margin-top: 15px;">
		
			<input type="text" id="optin_name" placeholder="Enter In Your Full Name..." class="optinform" value="" />
			<input type="text" id="optin_email" placeholder="Enter In Your Email Address..." class="optinform" value="" />
			
			<a href="#" id="optinBTN" class="btn btn-success optinbtn"><?php 
				// Display Footer Copy
				echo $results->btn_copy;
			?></a>
		
		</div>-->
		
	</div>

	<!--<div id="footercopy" style="margin-top: 15px; max-width: 810px;">	
	<?php 
		// Display Footer Copy
		echo $results->footer_copy;
	?>
	</div>-->
	
	<iframe src="" id="AR" width="300" height="300" style="display: none;" ></iframe>
	
</body>
</html>