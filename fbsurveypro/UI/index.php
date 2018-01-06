<?php
function fbsurvey_dashboard(){
?>

<!--<link href="<?php echo site_url(); ?>/wpcalldirpro/css/style.css" rel="stylesheet" type="text/css" />-->

<?php include("css.php"); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	// Change Switches
	
	// Change For Status
	$('#fangate_status').change(function() {
		
		$getVal = $(this).val();
		
		if($getVal == "off"){
			$("#edit_dep").hide();
		} else {
			$("#edit_dep").show();
		}
		
	  return false;
	});
	
	$('#showadvar').click(function() {
		
		$("#adv_ar").toggle();
		
	  return false;
	});
	

	
	$('#createNEW').click(function() {
		
		$getTitle = $("#title_campaign").val();
		
		if($getTitle != ""){
		
		var data = {
					action: 'fbsurveypro_create',
					title: ""+$getTitle+""
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					window.location = "<?php echo $_SERVER["REQUEST_URI"]; ?>&settings&id="+ data;
		});
		
		} else {
		
		 	alert("Campaign must have a title!");
		
		}
	
	  return false;
	});
	
	$('#editCAMPAIGN').click(function() {
		
		// General Stuff
		$fangate_status = $("#fangate_status").val();
		$fangate_image = $("#fangate_image").val();
		$optin_image = $("#optin_image").val();
		$btn_copy = $("#btn_copy").val();
		
		// AR Stuff
		$ar_code = $("#ar_code").val();
		$ar_name = $("#ar_name").val();
		$ar_email = $("#ar_email").val();
		$ar_url = $("#ar_url").val();
		$ar_hidden = $("#ar_hidden").val();
		
		var data = {
					action: 'fbsurveypro_edit',
					id: '<?php echo $_GET['id']; ?>',
					fangate_status: ""+$fangate_status+"",
					fangate_image: ""+$fangate_image+"",
					optin_image: ""+$optin_image+"",
					ar_code: ""+$ar_code+"",
					ar_name: ""+$ar_name+"",
					ar_email: ""+$ar_email+"",
					ar_url: ""+$ar_url+"",
					ar_hidden: ""+$ar_hidden+"",
					optin_copy: ""+tinyMCE.get('optin_copy').getContent()+"",
					footer_copy: ""+tinyMCE.get('footer_copy').getContent()+"",
					btn_copy: ""+$btn_copy+""
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					alert("Campaign Settings Saved!");
		});
		
	
	  return false;
	});
	
	// EDIT QUESTIONS
	
	$('#editQuestions').click(function() {
		
		// Q1
		$q1_status = $("#q1_status").val();
		$q1_qa = $("#q1_qa").val();
		$q1_mu_0 = $("#q1_mu_0").val();
		$q1_mu_1 = $("#q1_mu_1").val();
		$q1_mu_2 = $("#q1_mu_2").val();
		$q1_mu_3 = $("#q1_mu_3").val();
		$q1_mu_4 = $("#q1_mu_4").val();
		
		// Q2
		$q2_status = $("#q2_status").val();
		$q2_qa = $("#q2_qa").val();
		$q2_mu_0 = $("#q2_mu_0").val();
		$q2_mu_1 = $("#q2_mu_1").val();
		$q2_mu_2 = $("#q2_mu_2").val();
		$q2_mu_3 = $("#q2_mu_3").val();
		$q2_mu_4 = $("#q2_mu_4").val();
		
		// Q3
		$q3_status = $("#q3_status").val();
		$q3_qa = $("#q3_qa").val();
		$q3_mu_0 = $("#q3_mu_0").val();
		$q3_mu_1 = $("#q3_mu_1").val();
		$q3_mu_2 = $("#q3_mu_2").val();
		$q3_mu_3 = $("#q3_mu_3").val();
		$q3_mu_4 = $("#q3_mu_4").val();
		
		// Q4
		$q4_status = $("#q4_status").val();
		$q4_qa = $("#q4_qa").val();
		$q4_mu_0 = $("#q4_mu_0").val();
		$q4_mu_1 = $("#q4_mu_1").val();
		$q4_mu_2 = $("#q4_mu_2").val();
		$q4_mu_3 = $("#q4_mu_3").val();
		$q4_mu_4 = $("#q4_mu_4").val();
		
		// Q5
		$q5_status = $("#q5_status").val();
		$q5_qa = $("#q5_qa").val();
		$q5_mu_0 = $("#q5_mu_0").val();
		$q5_mu_1 = $("#q5_mu_1").val();
		$q5_mu_2 = $("#q5_mu_2").val();
		$q5_mu_3 = $("#q5_mu_3").val();
		$q5_mu_4 = $("#q5_mu_4").val();
		
		
		var data = {
					action: 'fbsurveypro_editquestions',
					id: '<?php echo $_GET['id']; ?>',
					q1_status: ""+$q1_status+"",
					q1_qa: ""+$q1_qa+"",
					q1_mu_0: ""+$q1_mu_0+"",
					q1_mu_1: ""+$q1_mu_1+"",
					q1_mu_2: ""+$q1_mu_2+"",
					q1_mu_3: ""+$q1_mu_3+"",
					q1_mu_4: ""+$q1_mu_4+"",
					q2_status: ""+$q2_status+"",
					q2_qa: ""+$q2_qa+"",
					q2_mu_0: ""+$q2_mu_0+"",
					q2_mu_1: ""+$q2_mu_1+"",
					q2_mu_2: ""+$q2_mu_2+"",
					q2_mu_3: ""+$q2_mu_3+"",
					q2_mu_4: ""+$q2_mu_4+"",
					q3_status: ""+$q3_status+"",
					q3_qa: ""+$q3_qa+"",
					q3_mu_0: ""+$q3_mu_0+"",
					q3_mu_1: ""+$q3_mu_1+"",
					q3_mu_2: ""+$q3_mu_2+"",
					q3_mu_3: ""+$q3_mu_3+"",
					q3_mu_4: ""+$q3_mu_4+"",
					q4_status: ""+$q4_status+"",
					q4_qa: ""+$q4_qa+"",
					q4_mu_0: ""+$q4_mu_0+"",
					q4_mu_1: ""+$q4_mu_1+"",
					q4_mu_2: ""+$q4_mu_2+"",
					q4_mu_3: ""+$q4_mu_3+"",
					q4_mu_4: ""+$q4_mu_4+"",
					q5_status: ""+$q5_status+"",
					q5_qa: ""+$q5_qa+"",
					q5_mu_0: ""+$q5_mu_0+"",
					q5_mu_1: ""+$q5_mu_1+"",
					q5_mu_2: ""+$q5_mu_2+"",
					q5_mu_3: ""+$q5_mu_3+"",
					q5_mu_4: ""+$q5_mu_4+""
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					alert("Question Settings Saved!");
		});
		
	
	  return false;
	});
	
	// POP OPEN IMAGE UPLOADER
	$photoURLSelected = "";
	
	$('.launch_media_lib').click(function() {
		
			$photoURLSelected = $(this).attr("photoBox"); 
			// gets the ID from the photoBox
			
			tb_show('', 'media-upload.php?type=image&TB_iframe=true'); 
			// launches Media Library
		 
		  return false;
	});
	
	window.send_to_editor = function(html) {
	        
	   	    imgurl = $('img',html).attr('src'); 
	    	// gets the selected image URL path
		 	
		 	$("#"+$photoURLSelected+"").val(imgurl); 
		 	// sets the field with the photoBox ID with the image path
		 
		 tb_remove();
	}
	
	// Split AR Code
	
	$('#ar_code').keyup(function() {
				change_selects();
				//alert("?");
		  return false;
		});
		
		function change_selects(){
				var tags = ['a','iframe','frame','frameset','script'], reg, val = $('#ar_code').val(),
					hdn = $('#arcode_hdn_div2'), formurl = $('#ar_url'), hiddenfields = $('#ar_hidden');
			    formurl.val('');
				if(jQuery.trim(val) == '')
					return false;
				$('#arcode_hdn_div').html('');
				$('#arcode_hdn_div2').html('');
				for(var i=0;i<5;i++){
					reg = new RegExp('<'+tags[i]+'([^<>+]*[^\/])>.*?</'+tags[i]+'>', "gi");
					val = val.replace(reg,'');
					
					reg = new RegExp('<'+tags[i]+'([^<>+]*)>', "gi");
					val = val.replace(reg,'');
				}
				var tmpval;
				try {
					tmpval = decodeURIComponent(val);
				} catch(err){
					tmpval = val;
				}
				hdn.append(tmpval);
				var num = 0;
				var name_selected = '';
				var email_selected = '';
				$(':text',hdn).each(function(){
					var name = $(this).attr('name'),
						name_selected = num == '0' ? name : (num != '0' ? name_selected : ''), 
						email_selected = num == '1' ? name : email_selected;
						if(num=='0') jQuery('#ar_name').val(name_selected);
						if(num=='1') jQuery('#ar_email').val(email_selected);
				num++;
				});
				jQuery(':input[type=hidden]',hdn).each(function(){
					jQuery('#arcode_hdn_div').append(jQuery('<input type="hidden" name="'+jQuery(this).attr('name')+'" />').val(jQuery(this).val()));
				});		
				var hidden_f = jQuery('#arcode_hdn_div').html();
				formurl.val(jQuery('form',hdn).attr('action'));
				hiddenfields.val(hidden_f);
				//alert(tmpval);
				hdn.html('');
				
			};
			
	
	// Delete Campaign
	
	$('#deleteCampaign').click(function() {
	
		confirmation();
	
	  return false;
	});
	
	function confirmation() {
		var answer = confirm("Are You Sure You Want To Delete This Campaign?")
		if (answer){
			
			var data = {
				id: "<?php echo $_GET['id']; ?>"
			};
				
			var savelead = "<?php echo site_url() ?>/wp-content/plugins/fbsurveypro/inc/delete_campaign.php";
			
			$.post( savelead, data,
			   function(results) {
					window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=fbsurvey-dashboard";						     
			});
			
			
			
		}
		else{
			
		}
	}
	
	
	// Edit Questions - H/S - #1
	
	$('#q1_status').change(function() {
	
		$get = $(this).val();
	
		if($get == "qa"){
			$("#q1_edit_qa").show();
			$("#q1_edit_mu").hide();
		} else {
			$("#q1_edit_qa").hide();
			$("#q1_edit_mu").show();
		}
	
	  return false;
	});
	
	// Edit Questions - H/S - #2
	
	$('#q2_status').change(function() {
	
		$get = $(this).val();
	
		if($get == "qa"){
			$("#q2_edit_qa").show();
			$("#q2_edit_mu").hide();
		} else {
			$("#q2_edit_qa").hide();
			$("#q2_edit_mu").show();
		}
	
	  return false;
	});
	
	// Edit Questions - H/S - #3
	
	$('#q3_status').change(function() {
	
		$get = $(this).val();
	
		if($get == "qa"){
			$("#q3_edit_qa").show();
			$("#q3_edit_mu").hide();
		} else {
			$("#q3_edit_qa").hide();
			$("#q3_edit_mu").show();
		}
	
	  return false;
	});
	
	// Edit Questions - H/S - #4
	
	$('#q4_status').change(function() {
	
		$get = $(this).val();
	
		if($get == "qa"){
			$("#q4_edit_qa").show();
			$("#q4_edit_mu").hide();
		} else {
			$("#q4_edit_qa").hide();
			$("#q4_edit_mu").show();
		}
	
	  return false;
	});
	
	// Edit Questions - H/S - #5
	
	$('#q5_status').change(function() {
	
		$get = $(this).val();
	
		if($get == "qa"){
			$("#q5_edit_qa").show();
			$("#q5_edit_mu").hide();
		} else {
			$("#q5_edit_qa").hide();
			$("#q5_edit_mu").show();
		}
	
	  return false;
	});
	
	// Edit Question Switcher
	
	$('.editQ').click(function() {
	
		$get = $(this).attr("id");
		
			$('.editQ').removeClass("confirm");
			$(this).addClass("confirm");
		
		if($get == "e_Q1"){
		
			$(".qblock").hide();
			$("#Q1").show();
			
		} else if($get == "e_Q2"){
		
			$(".qblock").hide();
			$("#Q2").show();
		
		} else if($get == "e_Q3"){
		
			$(".qblock").hide();
			$("#Q3").show();
		
		} else if($get == "e_Q4"){
		
			$(".qblock").hide();
			$("#Q4").show();
		
		} else if($get == "e_Q5"){
		
			$(".qblock").hide();
			$("#Q5").show();
		
		}
		
	  return false;
	});
	
	// Toggle Report A1
	
	$('#tog_A1').click(function() {
		
		$("#A1").toggle();
		
	  return false;
	});
	
	// Toggle Report A2
	
	$('#tog_A2').click(function() {
		
		$("#A2").toggle();
		
	  return false;
	});
	
	// Toggle Report A3
	
	$('#tog_A3').click(function() {
		
		$("#A3").toggle();
		
	  return false;
	});
	
	// Toggle Report A4
	
	$('#tog_A4').click(function() {
		
		$("#A4").toggle();
		
	  return false;
	});
	
	// Toggle Report A5
	
	$('#tog_A5').click(function() {
		
		$("#A5").toggle();
		
	  return false;
	});
	
	
});
</script>

	<div id="cd_mainWrapper">
	
		<div id="cd_headerWrapper">
			
			<div id="cd_keypad">
				
				<div id="depTitle" style="margin-top: -3px;">
					
					
					<h1>Manage Surveys:</h1>
					<p style="margin-top: -10px;">Here you can manage all your different timeline survey campaigns...</p>
					
				</div>
				
			</div>
			
		</div>
		
		<div id="cd_mainContent">
		
			<?php 
			
				if (isset($_GET['id']) && isset($_GET['settings'])) {
					include("editdep.php");
				} else if (isset($_GET['id']) && isset($_GET['questions'])) {
					include("editquestions.php");
				} else if (isset($_GET['create'])) {
					include("create.php");
				} else if (isset($_GET['report'])) {
					include("report.php");
				} else if (isset($_GET['leads'])) {
					include("lead.php");
				} else {
					include("dash.php");
				}
			
			?>
			
		</div>
		
		<div id="cd_footer">
			<img src="<?php echo site_url(); ?>/wp-content/plugins/timelineoptinpro/images/footer.png" />
		</div>
	
	</div>

<?php
}
?>