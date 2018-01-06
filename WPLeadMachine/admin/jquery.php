<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $curUrl; ?>/include/jqtransformplugin/jqtransform.css" media="all">
<script type="text/javascript" src="<?php echo $curUrl; ?>/include/jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="<?php echo $curUrl; ?>/include/dropdown.js"></script>
<script type="text/javascript" src="<?php echo $curUrl; ?>/include/close.js"></script>
<script type="text/javascript" src="<?php echo $curUrl; ?>/include/modal.js"></script>
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $curUrl; ?>/include/colorpicker.css" />
<script type="text/javascript" src="<?php echo $curUrl; ?>/include/colorpicker.js"></script>
<!-- Load TinyMCE -->
<script type="text/javascript" src="<?php echo $curUrl; ?>/include/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
	$().ready(function() {
	
	
		$('.BGcolor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('.BGcolor').css('backgroundColor', '#' + hex);
				$('.BGcolor').val(hex);
			}
		});
		
		// LogoColor
		
		$('#logoColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#logoColor').css('backgroundColor', '#' + hex);
				$('#logoColor').val(hex);
			}
		});
		
		// LogoSubColor
		
		$('#logoSubColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#logoSubColor').css('backgroundColor', '#' + hex);
				$('#logoSubColor').val(hex);
			}
		});
		
		// ctaSubColor
		
		$('#ctaSubColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#ctaSubColor').css('backgroundColor', '#' + hex);
				$('#ctaSubColor').val(hex);
			}
		});
		
		// ctaColor
		
		$('#ctaColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#ctaColor').css('backgroundColor', '#' + hex);
				$('#ctaColor').val(hex);
			}
		});
		
		// standoutColor
		
		$('#standoutColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#standoutColor').css('backgroundColor', '#' + hex);
				$('#standoutColor').val(hex);
			}
		});
		
		// optColor
		
		$('#optColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#optColor').css('backgroundColor', '#' + hex);
				$('#optColor').val(hex);
			}
		});
		
		// headlineColor
		
		$('#headlineColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#headlineColor').css('backgroundColor', '#' + hex);
				$('#headlineColor').val(hex);
			}
		});
		
		
		// featureHeadlineColor
		
		$('#featureHeadlineColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#featureHeadlineColor').css('backgroundColor', '#' + hex);
				$('#featureHeadlineColor').val(hex);
			}
		});
		
		// featureTextColor
		
		$('#featureTextColor').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#featureTextColor').css('backgroundColor', '#' + hex);
				$('#featureTextColor').val(hex);
			}
		});
		
		
		$('textarea.mceEditor').tinymce({
			// Location of TinyMCE script
			script_url : '<?php echo $curUrl; ?>/include/tiny_mce/tiny_mce.js',

			// General options
			theme : "advanced",
			
			mode : "exact",
            elements : "elm2",
            theme : "advanced",
            skin : "cirkuit",

			 plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
			// Theme options
			theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontsizeselect",
			theme_advanced_buttons2 : "forecolor,backcolor, |,bullist,numlist,|,blockquote,|,undo,redo,|,link,unlink,anchor,image, |, code",
			theme_advanced_buttons3 : "",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
			
			content_css : "<?php echo $curUrl; ?>/include/tinymce.css"

		});
		
		// ZEBRA ON LEADS
		
		$("tr:odd").addClass("odd");
		
		// Edit Landing Nav - Scale - Full & DBL
		
		$cdWidth = $(".wrapper-plugin").width();
		
		if($cdWidth > "1130"){
		
			$('.columnBox').removeClass('smaller');
			$('.columnBox').addClass('larger');
	
		} 
		if($cdWidth <= "1130") {
			
			$('.columnBox').removeClass('larger');	
			$('.columnBox').addClass('smaller');
			
		}
		
		if($cdWidth <= "800") {
			
			$('.columnBox').removeClass('smaller');	
			$('.columnBox').addClass('smallest');
			
		}
		
		$(window).resize(function() {
		  
		  $cdWidth = $(".wrapper-plugin").width();
		  
			  if($cdWidth > "1130"){
			  	
			  	$('.columnBox').removeClass('smaller');
			  	$('.columnBox').addClass('larger');
			  	
			  } else {
			  	
			  	$('.columnBox').removeClass('larger');	
			  	$('.columnBox').addClass('smaller');
			  	
			  }
		  
		});
		
		
		// Validation on CREATE CLIENT
		
		$('.saveClientBTN').click(function() {
		
			$fullname = $("#addclient_fullname").val();
			$desc = $("#addclient_desc").val();
			
			// Validate FULL NAME:
			
			if($fullname == ""){
				$("#addclient_fullname").addClass("fieldError");
			} else {
				$("#addclient_fullname").removeClass("fieldError");
			}
			
			// Validate DESC:
			
			if($desc == ""){
				$("#addclient_desc").addClass("fieldError");
			} else {
				$("#addclient_desc").removeClass("fieldError");
			}
			
			if($fullname != "" && $desc != "" ){
				$("#webinar_form").submit();
			}
			
		  return false;
		});
		

		// Fade save alerts
		
		$(".alert").delay(2000).fadeOut("fast");
		
		
	});
</script>
<!-- /TinyMCE -->
