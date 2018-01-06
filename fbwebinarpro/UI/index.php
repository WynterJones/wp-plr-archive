<?php
function fbwebinarpro_dashboard(){
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
					action: 'fbwebinarpro_create',
					title: ""+$getTitle+""
		};
		
		$.post( ajaxurl, data,
				   function(data) {
					window.location = "<?php echo $_SERVER["REQUEST_URI"]; ?>&id="+ data;
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
		$share_image = $("#share_image").val();
		$success_image = $("#success_image").val();
		$btn_copy = $("#btn_copy").val();
		
		// Copy Area
		$copy_pre = $("#copy_pre").val();
		$copy_main = $("#copy_main").val();
		$copy_names = $("#copy_names").val();
		$copy_time = $("#copy_time").val();
		$copy_optin = $("#copy_optin").val();
		$copy_name = $("#copy_name").val();
		$copy_email = $("#copy_email").val();
		$copy_btn = $("#copy_btn").val();
		$copy_spam = $("#copy_spam").val();
		$copy_company = $("#copy_company").val();
		$copy_rights = $("#copy_rights").val();
		
		$bg_color = $("#bg_color").val();
		$bg_image = $("#bg_image").val();
		
		// FB Settings
		$fb_id = $("#fb_id").val();
		$fb_secret = $("#fb_secret").val();
		$fb_title = $("#fb_title").val();
		$fb_image = $("#fb_image").val();
		$fb_url = $("#fb_url").val();
		$fb_desc = $("#fb_desc").val();
		
		// AR Stuff
		$ar_code = $("#ar_code").val();
		$ar_name = $("#ar_name").val();
		$ar_email = $("#ar_email").val();
		$ar_url = $("#ar_url").val();
		$ar_hidden = $("#ar_hidden").val();
		
		var data = {
					action: 'fbwebinarpro_edit',
					id: '<?php echo $_GET['id']; ?>',
					fangate_status: ""+$fangate_status+"",
					fangate_image: ""+$fangate_image+"",
					bg_color: ""+$bg_color+"",
					bg_image: ""+$bg_image+"",
					copy_pre: ""+$copy_pre+"",
					copy_main: ""+$copy_main+"",
					copy_names: ""+$copy_names+"",
					copy_time: ""+$copy_time+"",
					copy_optin: ""+$copy_optin+"",
					copy_name: ""+$copy_name+"",
					copy_email: ""+$copy_email+"",
					copy_btn: ""+$copy_btn+"",
					copy_spam: ""+$copy_spam+"",
					copy_company: ""+$copy_company+"",
					copy_rights: ""+$copy_rights+"",
					share_image: ""+$share_image+"",
					success_image: ""+$success_image+"",
					fb_id: ""+$fb_id+"",
					fb_secret: ""+$fb_secret+"",
					fb_title: ""+$fb_title+"",
					fb_image: ""+$fb_image+"",
					fb_url: ""+$fb_url+"",
					fb_desc: ""+$fb_desc+"",
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
				
			var savelead = "<?php echo site_url() ?>/wp-content/plugins/fbwebinarpro/inc/delete_campaign.php";
			
			$.post( savelead, data,
			   function(results) {
					window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=fbwebinarpro-dashboard";						     
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
					
					<img src="http://cdn1.iconfinder.com/data/icons/Koloria-Icon-Set/32/Dashboard.png" align="right" style="margin-top: 14px; margin-right: -345px;" />
					
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
				} else {
					include("dash.php");
				}
			
			?>
			
		</div>
		
		<div id="cd_footer">
			<img src="<?php echo site_url(); ?>/wp-content/plugins/fbwebinarpro/images/footer.png" />
		</div>
	
	</div>

<?php
}
?>