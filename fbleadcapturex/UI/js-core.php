

<script type="text/javascript">

jQuery(document).ready(function($) {

	// IE BROWSER CHECK

	$BROWSER = $("#iecheck").attr("browser-check");

	if( $BROWSER == "ie6" || $BROWSER == "ie7" || $BROWSER == "ie8" ){
		// THEY ARE USING IE6 OR IE7
		$("#IE-NO").show();
	} else if( $BROWSER == "ie9" || $BROWSER == "ie10"  ){
		// THEY ARE USING IE8, IE9 OR IE10
		$("#IE-REC").show();
	}

	$('.helper').tooltip();

	// Create NEW App ::

	$('#createnewapp').click(function() {
		
		$appname = $("#appname").val();

		if($appname == ""){
			$("#notice_name").fadeIn("fast");
		} else {
			$("#notice_name").fadeOut("fast");

			var data = {
					action: '<?php echo $pluginName; ?>_create',
					appname: ""+$appname+""
				};
				
				$.post( ajaxurl, data,
						   function(data) {
							window.location = "<?php echo site_url(); ?>/wp-admin/?page=<?php echo $pluginName; ?>-dashboard&id="+ data;
				});

		}
	
	  return false;
	});


	// Split AR Code
	
		$('#ar_code').keyup(function() {
				change_selects();
				// alert("?");
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
						
					var savelead = "<?php echo site_url() ?>/wp-content/plugins/<?php echo $pluginName; ?>/inc/delete_app.php";
					
					$.post( savelead, data,
					   function(results) {
							window.location = "<?php echo site_url(); ?>/wp-admin/admin.php?page=<?php echo $pluginName; ?>-dashboard";						     
					});
					
					
					
				}
				else{
					
				}
			}

    // Image Add Media Btns

    $photoURLSelected = "";
    $photoWPEditorCheck = "";
	
	$('.launch_media_lib').click(function() {
	
		$photoURLSelected = $(this).attr("photoBox"); 
		
		tb_show('Test', 'media-upload.php?type=image&TB_iframe=true'); 
	 
	  return false;
	});
	
	window.send_to_editor = function(html) {
        
        imgurl = $('img',html).attr('src');

        $getHTMLEditorClass = $("#"+$photoURLSelected+"").attr("class");

        if( $getHTMLEditorClass == "wp-editor-area" ){
        	console.log("WP Editor");
        	tinyMCE.execCommand('mceInsertContent',false, "<img src='"+imgurl+"' />");
        } else {
        	// Normal Input Field
        	$("#"+$photoURLSelected+"").val(imgurl);
        } 
	 	
	 tb_remove();
	}

	// Image Option Selector

	$('.dub_select_image').click(function() {
		// Get Data
		$ID = $(this).attr("dsID");
		$Data = $(this).attr("dsData");
		// Set Data
		$("#"+$ID+"").val($Data);
		// Set visible indicator
		$(".ds_"+$ID).removeClass("dub_select_image_selected");
		$(this).addClass("dub_select_image_selected");
	  return false;
	});

	// Save Parts ::

	$('#saveIt').click(function() {
		

		$(this).removeClass("blue-btn");
		$(this).addClass("saved");
		$("#saveIt_text").text("saving..");

	    // Loop Through all WP Editors

	    $( ".wp-editor-wrap" ).each(function( index ) {

	    	$getID = $(this).attr("id"); // get ID wp-ID-wrap
		  	$getID = $getID.replace("wp-", ""); // replace pre-fix
		  	$getID = $getID.replace("-wrap", ""); // replace post-fix

		  	if ($("#wp-"+$getID+"-wrap").hasClass("tmce-active")){  // on Visual State
        	
	        	$getContent = tinyMCE.get($getID).getContent();
	        	$("#"+$getID).val($getContent);

		    } else { // on HTML state

		      	$getContent = $("#"+$getID).val();

		    }

		}).promise().done( function() { // on complete
        	
        	data = $('#editApp').serializeArray();

			$.post( ajaxurl, data,
			function(data) {

				$('#saveIt').removeClass("saved");
				$('#saveIt').addClass("blue-btn");
				$("#saveIt_text").text("save");

			});

        });
		
		// setTimeout('wpfix()', 1000);
	
	  return false;
	});

	// Tabs For Editing App

	$('.editItem').click(function() {
		
		$tab = $(this).attr("tab");

		$(".editItem").removeClass("editSelected");
		$(this).addClass("editSelected");

		$(".tabber").hide();
		$("#"+$tab+"").show();
	
	  return false;
	});

	// Date Picker

	$('.dp-date').datepicker({
		format: 'mm-dd-yyyy',
		todayHighlight: true,
		autoclose: true,
		startDate: '<?php echo date("m-d-Y"); ?>'
	});

  	// Color Picker

  	$('.cp-picker').colorpicker().on('changeColor', function(ev){
	  
	  $color = ev.color.toHex();
	  $(this).css("background-color", $color);
	  $(this).val($color);

	  // Convert HEX so inner text is visible (black or white)

	  	var bg  = $color.replace("#", "");
	    var rgb = bg.match(/../g);
	    for(var i = 0; i < 3; ++i)
	        rgb[i] = parseInt(rgb[i], 16);
	    var hsv = rgbToHsv(rgb[0], rgb[1], rgb[2]);
	    var fg  = 'ffffff';
	    if(hsv[2] > 0.8)
	        fg = '000000';
	    $(this).css({
	        color: '#' + fg
	    });
	
	});


	// Color Picker On Load - HEX Convert

	$(".cp-picker").each(function( index ) {
	  
	  	$color = $(this).val();

	  	if( $color == "" ){ 
	  		// do nothing
	  	} else {

		  	var bg  = $color.replace("#", "");
		    var rgb = bg.match(/../g);
		    for(var i = 0; i < 3; ++i)
		        rgb[i] = parseInt(rgb[i], 16);
		    var hsv = rgbToHsv(rgb[0], rgb[1], rgb[2]);
		    var fg  = 'ffffff';
		    if(hsv[2] > 0.8)
		        fg = '000000';
		    $(this).css({
		        color: '#' + fg
		    });

		}	

	});


});
</script>