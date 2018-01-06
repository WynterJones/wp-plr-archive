<?php  

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbsurveypro_questions";
	
	$ID = $_GET['id'];
	
	$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign_id = '$ID'", OBJECT);
	
	foreach($results as $results) {}

?>

<div id="editQbtns">

<span  class="editQ uibutton large confirm" id="e_Q1" style="margin-right: 20px;">Edit Question 1</span>

<span  class="editQ uibutton large" id="e_Q2" style="margin-right: 20px;">Edit Question 2</span>

<span  class="editQ uibutton large" id="e_Q3" style="margin-right: 20px;">Edit Question 3</span>

<span class="editQ uibutton large" id="e_Q4" style="margin-right: 20px;">Edit Question 4</span>

<span class="editQ uibutton large" id="e_Q5" style="margin-right: 20px;">Edit Question 5</span>

</div>

<!--QUESTION #1-->

<div id="Q1" class="qblock">


		<div id="depTitle" style="margin-top: -3px;">
			
			<img src="http://cdn5.iconfinder.com/data/icons/fatcow/32x32/question.png" align="right" style="margin-top: 14px; margin-right: -345px;" />
			
			<h1>Question #1: </h1>
			<p style="margin-top: -10px;">This will be the first question in the series... </p>
			
		</div>
		
		<br clear="all" />
	

	<div class="well">

		
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/32x32/apps/package_settings.png" align="right" style="" />
			
			<h3 style="margin-top: 0px;" >Question Style:</h3>
			<p style="margin-top: -10px;">You can switch between a Question / Answer or Multi-Choice question...</p>
			
			<select id="q1_status">
				
				<option value="qa" <?php if($results->q1_status == "" || $results->q1_status == "qa"){ echo "selected"; } ?> >Q / A Style Question</option>
				<option value="mu" <?php if($results->q1_status == "mu"){ echo "selected"; } ?> >Multi Choice Style Question</option>
			
			</select>
			
		
		<div id="edit_dep" >	
			
	
		
		<div id="q1_edit_qa" style="display: <?php if($results->q1_status == "" || $results->q1_status == "qa"){ echo "block"; } else { echo "none"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Question / Answer - Question:</h3>
			<p style="margin-top: -10px;">This is your question is where you ask the user to answer the question, or give their feedback on your service...</p>
			
			<textarea id="q1_qa"><?php echo stripcslashes($results->q1_qa); ?></textarea>
		
		
		</div>
		
		<div id="q1_edit_mu" style="display: <?php if($results->q1_status == "" || $results->q1_status == "qa"){ echo "none"; } else { echo "block"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Multi Choice Question:</h3>
			<p style="margin-top: -10px;">This will be the question your asking for the multi-choice question...</p>
			
			
			<textarea id="q1_mu_0"><?php echo stripcslashes($results->q1_mu_0); ?></textarea>
			
			<div class="sepper"></div>
			
			<h3 style="margin-top: 0px;" >Multi Choice Answers:</h3>
			<p style="margin-top: -10px;">This will be the options they can choose, if you leave one blank, it wont be shown...</p>
		
			<input type="text" id="q1_mu_1" value="<?php echo stripcslashes($results->q1_mu_1); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q1_mu_2" value="<?php echo stripcslashes($results->q1_mu_2); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q1_mu_3" value="<?php echo stripcslashes($results->q1_mu_3); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q1_mu_4" value="<?php echo stripcslashes($results->q1_mu_4); ?>" />
			
	
		</div>
		
	</div>
	
	</div>

	</div>	

<!--QUESTION #2-->

<div id="Q2" class="qblock" style="display: none;">


		<div id="depTitle" style="margin-top: -3px;">
			
			<img src="http://cdn5.iconfinder.com/data/icons/fatcow/32x32/question.png" align="right" style="margin-top: 14px; margin-right: -345px;" />
			
			<h1>Question #2: </h1>
			<p style="margin-top: -10px;">This will be the second question in the series... </p>
			
		</div>
		
		<br clear="all" />
	

	<div class="well">

		
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/32x32/apps/package_settings.png" align="right" style="" />
			
			<h3 style="margin-top: 0px;" >Question Style:</h3>
			<p style="margin-top: -10px;">You can switch between a Question / Answer or Multi-Choice question...</p>
			
			<select id="q2_status">
				
				<option value="qa" <?php if($results->q2_status == "" || $results->q2_status == "qa"){ echo "selected"; } ?> >Q / A Style Question</option>
				<option value="mu" <?php if($results->q2_status == "mu"){ echo "selected"; } ?> >Multi Choice Style Question</option>
			
			</select>
			
		
		<div id="edit_dep" >	
			
	
		
		<div id="q2_edit_qa" style="display: <?php if($results->q2_status == "" || $results->q2_status == "qa"){ echo "block"; } else { echo "none"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Question / Answer - Question:</h3>
			<p style="margin-top: -10px;">This is your question is where you ask the user to answer the question, or give their feedback on your service...</p>
			
			<textarea id="q2_qa"><?php echo stripcslashes($results->q2_qa); ?></textarea>
		
		
		</div>
		
		<div id="q2_edit_mu" style="display: <?php if($results->q2_status == "" || $results->q2_status == "qa"){ echo "none"; } else { echo "block"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Multi Choice Question:</h3>
			<p style="margin-top: -10px;">This will be the question your asking for the multi-choice question...</p>
			
			
			<textarea id="q2_mu_0"><?php echo stripcslashes($results->q2_mu_0); ?></textarea>
			
			<div class="sepper"></div>
			
			<h3 style="margin-top: 0px;" >Multi Choice Answers:</h3>
			<p style="margin-top: -10px;">This will be the options they can choose, if you leave one blank, it wont be shown...</p>
		
			<input type="text" id="q2_mu_1" value="<?php echo stripcslashes($results->q2_mu_1); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q2_mu_2" value="<?php echo stripcslashes($results->q2_mu_2); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q2_mu_3" value="<?php echo stripcslashes($results->q2_mu_3); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q2_mu_4" value="<?php echo stripcslashes($results->q2_mu_4); ?>" />
			
	
		</div>
		
	</div>
	
	</div>
	</div>
	
<!--QUESTION #3-->

<div id="Q3" class="qblock" style="display: none;">


		<div id="depTitle" style="margin-top: -3px;">
			
			<img src="http://cdn5.iconfinder.com/data/icons/fatcow/32x32/question.png" align="right" style="margin-top: 14px; margin-right: -345px;" />
			
			<h1>Question #3: </h1>
			<p style="margin-top: -10px;">This will be the third question in the series... </p>
			
		</div>
		
		<br clear="all" />
	

	<div class="well">

		
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/32x32/apps/package_settings.png" align="right" style="" />
			
			<h3 style="margin-top: 0px;" >Question Style:</h3>
			<p style="margin-top: -10px;">You can switch between a Question / Answer or Multi-Choice question...</p>
			
			<select id="q3_status">
				
				<option value="qa" <?php if($results->q3_status == "" || $results->q3_status == "qa"){ echo "selected"; } ?> >Q / A Style Question</option>
				<option value="mu" <?php if($results->q3_status == "mu"){ echo "selected"; } ?> >Multi Choice Style Question</option>
			
			</select>
			
		
		<div id="edit_dep" >	
			
	
		
		<div id="q3_edit_qa" style="display: <?php if($results->q3_status == "" || $results->q3_status == "qa"){ echo "block"; } else { echo "none"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Question / Answer - Question:</h3>
			<p style="margin-top: -10px;">This is your question is where you ask the user to answer the question, or give their feedback on your service...</p>
			
			<textarea id="q3_qa"><?php echo stripcslashes($results->q3_qa); ?></textarea>
		
		
		</div>
		
		<div id="q3_edit_mu" style="display: <?php if($results->q3_status == "" || $results->q3_status == "qa"){ echo "none"; } else { echo "block"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Multi Choice Question:</h3>
			<p style="margin-top: -10px;">This will be the question your asking for the multi-choice question...</p>
			
			
			<textarea id="q3_mu_0"><?php echo stripcslashes($results->q3_mu_0); ?></textarea>
			
			<div class="sepper"></div>
			
			<h3 style="margin-top: 0px;" >Multi Choice Answers:</h3>
			<p style="margin-top: -10px;">This will be the options they can choose, if you leave one blank, it wont be shown...</p>
		
			<input type="text" id="q3_mu_1" value="<?php echo stripcslashes($results->q3_mu_1); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q3_mu_2" value="<?php echo stripcslashes($results->q3_mu_2); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q3_mu_3" value="<?php echo stripcslashes($results->q3_mu_3); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q3_mu_4" value="<?php echo stripcslashes($results->q3_mu_4); ?>" />
			
	
		</div>
		
	</div>
	
	</div>
	</div>


<!--QUESTION #4-->

<div id="Q4" class="qblock" style="display: none;">


		<div id="depTitle" style="margin-top: -3px;">
			
			<img src="http://cdn5.iconfinder.com/data/icons/fatcow/32x32/question.png" align="right" style="margin-top: 14px; margin-right: -345px;" />
			
			<h1>Question #4: </h1>
			<p style="margin-top: -10px;">This will be the fourth question in the series... </p>
			
		</div>
		
		<br clear="all" />
	

	<div class="well">

		
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/32x32/apps/package_settings.png" align="right" style="" />
			
			<h3 style="margin-top: 0px;" >Question Style:</h3>
			<p style="margin-top: -10px;">You can switch between a Question / Answer or Multi-Choice question...</p>
			
			<select id="q4_status">
				
				<option value="qa" <?php if($results->q4_status == "" || $results->q4_status == "qa"){ echo "selected"; } ?> >Q / A Style Question</option>
				<option value="mu" <?php if($results->q4_status == "mu"){ echo "selected"; } ?> >Multi Choice Style Question</option>
			
			</select>
			
		
		<div id="edit_dep" >	
			
	
		
		<div id="q4_edit_qa" style="display: <?php if($results->q4_status == "" || $results->q4_status == "qa"){ echo "block"; } else { echo "none"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Question / Answer - Question:</h3>
			<p style="margin-top: -10px;">This is your question is where you ask the user to answer the question, or give their feedback on your service...</p>
			
			<textarea id="q4_qa"><?php echo stripcslashes($results->q4_qa); ?></textarea>
		
		
		</div>
		
		<div id="q4_edit_mu" style="display: <?php if($results->q4_status == "" || $results->q4_status == "qa"){ echo "none"; } else { echo "block"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Multi Choice Question:</h3>
			<p style="margin-top: -10px;">This will be the question your asking for the multi-choice question...</p>
			
			
			<textarea id="q4_mu_0"><?php echo stripcslashes($results->q4_mu_0); ?></textarea>
			
			<div class="sepper"></div>
			
			<h3 style="margin-top: 0px;" >Multi Choice Answers:</h3>
			<p style="margin-top: -10px;">This will be the options they can choose, if you leave one blank, it wont be shown...</p>
		
			<input type="text" id="q4_mu_1" value="<?php echo stripcslashes($results->q4_mu_1); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q4_mu_2" value="<?php echo stripcslashes($results->q4_mu_2); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q4_mu_3" value="<?php echo stripcslashes($results->q4_mu_3); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q4_mu_4" value="<?php echo stripcslashes($results->q4_mu_4); ?>" />
			
	
		</div>
		
	</div>
	
	</div>
	</div>


<!--QUESTION #5-->

<div id="Q5" class="qblock" style="display: none;">


		<div id="depTitle" style="margin-top: -3px;">
			
			<img src="http://cdn5.iconfinder.com/data/icons/fatcow/32x32/question.png" align="right" style="margin-top: 14px; margin-right: -345px;" />
			
			<h1>Question #5: </h1>
			<p style="margin-top: -10px;">This will be the final question in the series... </p>
			
		</div>
		
		<br clear="all" />
	

	<div class="well">

		
			<img src="http://cdn2.iconfinder.com/data/icons/crystalproject/32x32/apps/package_settings.png" align="right" style="" />
			
			<h3 style="margin-top: 0px;" >Question Style:</h3>
			<p style="margin-top: -10px;">You can switch between a Question / Answer or Multi-Choice question...</p>
			
			<select id="q5_status">
				
				<option value="qa" <?php if($results->q5_status == "" || $results->q5_status == "qa"){ echo "selected"; } ?> >Q / A Style Question</option>
				<option value="mu" <?php if($results->q5_status == "mu"){ echo "selected"; } ?> >Multi Choice Style Question</option>
			
			</select>
			
		
		<div id="edit_dep" >	
			
	
		
		<div id="q5_edit_qa" style="display: <?php if($results->q5_status == "" || $results->q5_status == "qa"){ echo "block"; } else { echo "none"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Question / Answer - Question:</h3>
			<p style="margin-top: -10px;">This is your question is where you ask the user to answer the question, or give their feedback on your service...</p>
			
			<textarea id="q5_qa"><?php echo stripcslashes($results->q5_qa); ?></textarea>
		
		
		</div>
		
		<div id="q5_edit_mu" style="display: <?php if($results->q5_status == "" || $results->q5_status == "qa"){ echo "none"; } else { echo "block"; } ?>;"  >
		
			<div class="sepper"></div>
			
			
			<h3 style="margin-top: 0px;" >Multi Choice Question:</h3>
			<p style="margin-top: -10px;">This will be the question your asking for the multi-choice question...</p>
			
			
			<textarea id="q5_mu_0"><?php echo stripcslashes($results->q5_mu_0); ?></textarea>
			
			<div class="sepper"></div>
			
			<h3 style="margin-top: 0px;" >Multi Choice Answers:</h3>
			<p style="margin-top: -10px;">This will be the options they can choose, if you leave one blank, it wont be shown...</p>
		
			<input type="text" id="q5_mu_1" value="<?php echo stripcslashes($results->q5_mu_1); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q5_mu_2" value="<?php echo stripcslashes($results->q5_mu_2); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q5_mu_3" value="<?php echo stripcslashes($results->q5_mu_3); ?>" />
			
			<input style="margin-top: 15px;" type="text" id="q5_mu_4" value="<?php echo stripcslashes($results->q5_mu_4); ?>" />
			
	
		</div>
		
	</div>
	
	</div>
	</div>


	
	<span id="editQuestions"  class="uibutton large special">Update Question Settings</span>
	
	<br><br>
	
	<p>* When this goes live, make sure to not change questions or else your reports may not make sense, so once you set your 5 questions, keep them set. :)</p>
	
	<p><b>Why only 5 questions?</b> To force you to keep it simple, so you can get results, the less the questions, the more people will answer them truthfully and honestly. The more questions you have the more they will rush through the answers.</p>
	

