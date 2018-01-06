<?php
function oppro_dashboard(){
?>

<!--<link href="<?php echo site_url(); ?>/wpcalldirpro/css/style.css" rel="stylesheet" type="text/css" />-->

<?php include("css.php"); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	// Change Switches
	
	// Nav Tabbed Switch

	$('.tabNav').click(function() {
		
		$(".tabNav").removeClass("active");

		$(this).addClass("active");

		$(".tabbIt").hide();

		$id = $(this).attr("id");

		$("#tab_"+$id+"").show();
	
	  return false;
	});

	// EDIT CLIENT ::

	$('#editclient').click(function() {
		
		var data = {
				action: 'oppro_edit',
				id: $("#id").val(),
				heading1: $("#heading1").val(),
				heading2: $("#heading2").val(),
				blurb: $("#blurb").val()
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					// window.location = "<?php echo $_SERVER["REQUEST_URI"]; ?>&id="+ data;
					alert("Saved Client Changes...");
		});
	
	  return false;
	});

	// SAVE TESTIMONIAL ::

	$('#save_testimonial').click(function() {
		
		var data = {
				action: 'oppro_testimonial',
				testimonial_body_1: ""+tinyMCE.get('testimonial_body1').getContent()+"",
				testimonial_body_2: ""+tinyMCE.get('testimonial_body2').getContent()+"",
				testimonial_name_1: $("#testimonial_name1").val(),
				testimonial_name_2: $("#testimonial_name2").val()
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					// window.location = "<?php echo $_SERVER["REQUEST_URI"]; ?>&id="+ data;
					alert("Saved Testimonial Settings...");
		});
	
	  return false;
	});

	// SAVE COMPANY INFO ::

	$('#save_company').click(function() {
		
		var data = {
				action: 'oppro_company',
				intro: ""+tinyMCE.get('intro').getContent()+"",
				company_info: ""+tinyMCE.get('company_info').getContent()+"",
				company_logo: $("#company_logo").val()
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					// window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard&plan=<?php echo $_GET['plan']; ?>";
					alert("Saved Company Settings...");
		});
	
	  return false;
	});
	
	// CREATE NEW PLAN ITEM ::

	$('#createnewitem').click(function() {
		
		var data = {
				action: 'oppro_newitem',
				item_bullet: $("#item_bullet").val(),
				item_title: $("#item_title").val(),
				item_blurb: $("#item_blurb").val(),
				plan: $("#plan").val()
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard&plan=<?php echo $_GET['new_item']; ?>";
					// alert("Created new item...");
		});

	
	  return false;
	});

	// SAVE PLAN ITEM ::

	$('#edititem').click(function() {
		
		var data = {
				action: 'oppro_edititem',
				item_bullet: $("#item_bullet").val(),
				item_title: $("#item_title").val(),
				item_blurb: $("#item_blurb").val(),
				plan: $("#plan").val(),
				id: $("#itemid").val()
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					// window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard&plans";
					alert("Saved item changes...");
		});

	
	  return false;
	});

	// DESIGN & COPY SETTINGS ::

	$('#save_settings').click(function() {
		
		var data = {
				action: 'oppro_copy',
				plan_title_1: $("#plan_title_1").val(),
				plan_blurb_1: $("#plan_blurb_1").val(),
				plan_btn_1: $("#plan_btn_1").val(),
				plan_url_1: $("#plan_url_1").val(),
				plan_title_2: $("#plan_title_2").val(),
				plan_blurb_2: $("#plan_blurb_2").val(),
				plan_btn_2: $("#plan_btn_2").val(),
				plan_url_2: $("#plan_url_2").val(),
				plan_title_3: $("#plan_title_3").val(),
				plan_blurb_3: $("#plan_blurb_3").val(),
				plan_btn_3: $("#plan_btn_3").val(),
				plan_url_3: $("#plan_url_3").val(),
				btn: $("#btncolor").val()
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					// window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard&plans";
					alert("Saved Settings Changes...");
		});

	
	  return false;
	});
	
	$('#createNEW').click(function() {
		
		$getTitle = $("#title_campaign").val();
		
		if($getTitle != ""){
		
		var data = {
					action: 'oppro_create',
					title: ""+$getTitle+""
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					window.location = "<?php echo $_SERVER["REQUEST_URI"]; ?>&id="+ data;
					// alert("created?");
		});
		
		} else {
		
		 	alert("Campaign must have a title!");
		
		}
	
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
				
			var savelead = "<?php echo site_url() ?>/wp-content/plugins/invoicetogo/inc/delete_campaign.php";
			
			$.post( savelead, data,
			   function(results) {
			   		// alert("deleted");
					window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard";						     
			});
			
			
			
		}
		else{
			
		}
	}


	// Delete Campaign
	
	$('#deleteItem').click(function() {
	
		confirmation2();
	
	  return false;
	});
	
	function confirmation2() {
		var answer = confirm("Are You Sure You Want To Delete This Item?")
		if (answer){
			
			var data = {
				id: "<?php echo $_GET['edit_item']; ?>"
			};
				
			var savelead = "<?php echo site_url() ?>/wp-content/plugins/invoicetogo/inc/delete_item.php";
			
			$.post( savelead, data,
			   function(results) {
			   		// alert("deleted");
					window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard";						     
			});
			
			
			
		}
		else{
			
		}
	}
	
	
});
</script>

	<div id="cd_mainWrapper">
	
		<div id="cd_headerWrapper">
			
			<div id="cd_keypad">
				
				<div id="depTitle" style="margin-top: -3px;">
										
				</div>
				
			</div>
			
		</div>
		
		<div id="cd_mainContent">
		
			<?php 
			
				if (isset($_GET['id'])) {
					include("editdep.php");
				} else if (isset($_GET['create'])) {
					include("create.php");
				} else if (isset($_GET['lead'])) {
					include("lead.php");
				} else if (isset($_GET['testimonial'])) {
					include("testimonial.php");
				} else if (isset($_GET['info'])) {
					include("intro.php");
				} else if (isset($_GET['plan'])) {
					include("display_plan.php");
				} else if (isset($_GET['new_item'])) {
					include("new_plan.php");
				} else if (isset($_GET['edit_item'])) {
					include("edit_plan.php");
				} else if (isset($_GET['settings'])) {
					include("settings.php");
				} else {
					include("dash.php");
				}
			
			?>
			
		</div>
		
		<div id="cd_footer">
			<img src="<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/footer.png" />
		</div>
	
	</div>

<?php
}
?>