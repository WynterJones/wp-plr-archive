<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
<script type="text/javascript" src="<?php echo plugin_dir_url( $file ); ?>/SalesOptimizer/include/jquery.pages.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/redmond/jquery-ui.css">
<link rel="stylesheet" href="<?php echo plugin_dir_url( $file ); ?>/SalesOptimizer/include/jquery.switchButton.css">
<link rel="stylesheet" href="<?php echo plugin_dir_url( $file ); ?>/SalesOptimizer/shortcode/css/shadows.css">
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo plugin_dir_url( $file ); ?>/SalesOptimizer/include/jquery.switchButton.js"></script>
<script>
	$(document).ready(function() {
		// Tabs for Settings
		$(".tabLink").click(function() {
			tabLink = $(this).attr('tab');
			type = $(this).attr('type');
			$('.'+type).hide();
			$("."+tabLink).delay(500).show();
			$(".tabLink").removeClass('active');
			$(this).addClass('active');
		});
		// Update / Error Message Alert
		$('.fade').delay(1000).fadeOut();
		// Show / Hide Preview
		$('#previewButton').click(function(){
			$('#settings').hide();
			$('#preview').fadeIn();
			$('.fade').hide();
			$('#previewFrame').attr('src', '../wp-content/plugins/SalesOptimizer/shortcode/index.php?edit=<?php echo $_GET["edit"]; ?>&preview=1');
		});
		$('#previewClose').click(function(){
			$('#settings').fadeIn();
			$('#preview').hide();
		});
		$("div.holder").jPages({
		    containerID : "content",
		    perPage: 3
	  	});
	  	$( "#datepicker" ).datepicker();
	  	$(".switch").switchButton({
		  width: 50,
		  height: 20,
		  button_width: 20,
		  labels_placement: "right"
		});
		$("select[name='boxshadow']").change(function(){
			var effect = $(this).val();
			$('#boxshadow').removeClass();
			$('#boxshadow').addClass(effect);
		});
		$("select[name='theme']").change(function(){
			var theme = $(this).val();
			$('#themePreview img').attr('src', 'http://bootswatch.com/'+theme+'/thumbnail.png');
		});
		$("#updateAndSave").submit(function(){
			title = $('[name=title]').val()
			headline = $('[name=headline]').val();
			splitTest = $('[name=splitTest]').val();
			theme = $('[name=theme]').val();
			addtocart = $('[name=addtocart]').val();
			handwritten = $('[name=handwritten]').val();
			buyLink = $('[name=buyLink]').val();
			panelDesign = $('[name=panelDesign]').val();
			buttonDesign = $('[name=buttonDesign]').val();
			button = $('[name=button]').val();
			date = $('[name=date]').val();
			time = $('[name=time]').val();
			timezone = $('[name=timezone]').val();
			countdownDesign = $('[name=countdownDesign]').val();
			buyTooltip = $('[name=buyTooltip]').val();
			if ($('[name=countdown]').is(':checked')) {
		        countdown = 'on';
		    }
		    else {
		    	countdown = '';
		    }
			addImage = $('[name=addImage]').val();
			addVideo = $('[name=addVideo]').val();
			html = $('[name=html]').val();
			if ($('[name=emailShow]').is(':checked')) {
		        emailShow = 'on';
		    }
		    else {
		    	emailShow = '';
		    }
			autoresponder = $('[name=autoresponder]').val();
			namePlaceholder = $('[name=namePlaceholder]').val();
			emailPlaceholder = $('[name=emailPlaceholder]').val();
			if ($('[name=splitTestShow]').is(':checked')) {
		        splitTestShow = 'on';
		        alert(splitTestShow);
		    }
		    else {
		    	splitTestShow = '';
		    }
			$('#saveButton').removeClass('button-primary');
			$('#saveButton').val('Saving...');
			$.post( "../wp-content/plugins/SalesOptimizer/admin/settings/save.php", { 'options[]': [ "title", "headline", "splitTest", "theme", "addtocart", "handwritten","buyLink", "panelDesign", "buttonDesign", "button", "date", "time", "timezone", "countdownDesign", "countdown", "addImage", "addVideo", "html", "emailShow", "autoresponder", "namePlaceholder", "emailPlaceholder", "splitTestShow", "buyTooltip" ], 'data[]': [ title, headline, splitTest, theme, addtocart, handwritten,buyLink, panelDesign, buttonDesign, button, date, time, timezone, countdownDesign, countdown, addImage, addVideo, html, emailShow, autoresponder, namePlaceholder, emailPlaceholder, splitTestShow, buyTooltip ], 'id': "<?php echo $_GET['edit']; ?>" })
				.done(function( data ) {
					$('#saveButton').delay(5000).addClass('button-primary');
					$('#saveButton').delay(5000).val('Click to Save Settings');
				});
				
			return false;
		});
		$("input, textarea, select, checkbox").change(function(){
			title = $('[name=title]').val()
			headline = $('[name=headline]').val();
			splitTest = $('[name=splitTest]').val();
			theme = $('[name=theme]').val();
			addtocart = $('[name=addtocart]').val();
			handwritten = $('[name=handwritten]').val();
			buyLink = $('[name=buyLink]').val();
			panelDesign = $('[name=panelDesign]').val();
			buttonDesign = $('[name=buttonDesign]').val();
			button = $('[name=button]').val();
			date = $('[name=date]').val();
			time = $('[name=time]').val();
			timezone = $('[name=timezone]').val();
			countdownDesign = $('[name=countdownDesign]').val();
			buyTooltip = $('[name=buyTooltip]').val();
			if ($('[name=countdown]').is(':checked')) {
		        countdown = 'on';
		    }
		    else {
		    	countdown = '';
		    }
			addImage = $('[name=addImage]').val();
			addVideo = $('[name=addVideo]').val();
			html = $('[name=html]').val();
			if ($('[name=emailShow]').is(':checked')) {
		        emailShow = 'on';
		    }
		    else {
		    	emailShow = '';
		    }
			autoresponder = $('[name=autoresponder]').val();
			namePlaceholder = $('[name=namePlaceholder]').val();
			emailPlaceholder = $('[name=emailPlaceholder]').val();
			boxshadow = $('[name=boxshadow]').val();
			if ($('[name=splitTestShow]').is(':checked')) {
		        splitTestShow = 'on';
		    }
		    else {
		    	splitTestShow = '';
		    }
		    if ($('[name=panel]').is(':checked')) {
		        panel = 'on';
		    }
		    else {
		    	panel = '';
		    }
			$('#saveButton').removeClass('button-primary');
			$('#saveButton').val('Saving...');
			$.post( "../wp-content/plugins/SalesOptimizer/admin/settings/save.php", { 'options[]': [ "title", "headline", "splitTest", "theme", "addtocart", "handwritten","buyLink", "panelDesign", "buttonDesign", "button", "date", "time", "timezone", "countdownDesign", "countdown", "addImage", "addVideo", "html", "boxshadow", "emailShow", "autoresponder", "namePlaceholder", "emailPlaceholder", "splitTestShow", "panel", "buyTooltip" ], 'data[]': [ title, headline, splitTest, theme, addtocart, handwritten,buyLink, panelDesign, buttonDesign, button, date, time, timezone, countdownDesign, countdown, addImage, addVideo, html, boxshadow, emailShow, autoresponder, namePlaceholder, emailPlaceholder, splitTestShow, panel, buyTooltip ], 'id': "<?php echo $_GET['edit']; ?>" })
				.done(function( data ) {
					$('#saveButton').delay(5000).addClass('button-primary');
					$('#saveButton').delay(5000).val('Click to Save Settings');
				});
			$(this).effect( "highlight" );
			return false;
		});
	});
</script>