<?php
	// Include WordPress 
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');	
	$full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	$imagePath = $full_path  .'EasyBuilder';
	
?>
<!DOCTYPE html>
<html><head>
<title>EasyEditor - HTML5 Page Editor</title>
<meta charset="UTF-8">
<meta name="description" content="" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<link href="css/jquery.reject.css" rel="stylesheet" />

	<script type="text/javascript" src="js/jquery.reject.js"></script>
	<script src="js/shortcut.js" type="text/javascript"></script>
	<script src="js/farbtastic/farbtastic.js" type="text/javascript"></script>
	<script src="js/ui/jquery-ui-1.8.16.custom.js"></script>
	<script src="js/freshereditor.js" type="text/javascript"></script>
	<script src="js/ui/jquery.ui.core.js"></script>
	<script src="js/ui/jquery.ui.widget.js"></script>

	<script src="js/ui/jquery.ui.mouse.js"></script>
	<script src="js/ui/jquery.ui.resizable.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#wrap').freshereditor({toolbar_selector: "#toolbar", excludes: ['removeFormat', 'insertheading4']});
		$("#wrap").freshereditor("edit", true);
		
		
		  $('.CodeMirror').hide();
		  
		  $('#openSource').click(function() {
		  	
		   // $('#sourceEditor').html("<textarea style='height: 325px !important; margin: 0 auto' id='code'>" + 
					//$('#wrap').html() + 
					//"</textarea>");
					
				 $('#getHTML').text($('#wrap').html());
			
		      
		      
		  });
		  
		  $('#saveSource').click(function() {
		  	 $('#inner').text(editor.mirror.getCode());
		  	 $('.CodeMirror').hide();
		  });
		  
		  $('#addContent').change(function() {
		    if ($(this).attr('value') == "1_column") {
		    	var currentHTML = $('#wrap').html();
		    	var html = '<div class="col_12 column"><div class="inner"><h3>Add 1 Column Box</h3><p>Lorem ipsum dolor sit amet, consectetuer, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div></div>';
		    	$('#wrap').html(currentHTML + html)
		    };
		    if ($(this).attr('value') == "2_column_r") {
		    	var currentHTML = $('#wrap').html();
		    	var html = '<div class="col_12 column"><div class="col_8"><h4>Add 2 Column Box</h4><p>Lorem ipsum dolor sit amet, consectetuer, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div><div class="col_4"><h5>Sidebar Right Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div></div>';
		    	$('#wrap').html(currentHTML + html)
		    };
		    if ($(this).attr('value') == "2_column_l") {
		    	var currentHTML = $('#wrap').html();
		    	var html = '<div class="col_12 column"><div class="col_4"><h5>Sidebar Left Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div><div class="col_8"><h4>Add 2 Column Box</h4><p>Lorem ipsum dolor sit amet, consectetuer, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div></div>';
		    	$('#wrap').html(currentHTML + html)
		    };
		    if ($(this).attr('value') == "3_column") {
		    	var currentHTML = $('#wrap').html();
		    	var html = '<div class="col_12 column"><div class="col_4"><h5>Column Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div><div class="col_4"><h5>Column Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div><div class="col_4"><h5>Column Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div></div>';
		    	$('#wrap').html(currentHTML + html)
		    };
		    if ($(this).attr('value') == "4_column") {
		    	var currentHTML = $('#wrap').html();
		    	var html = '<div class="col_12 column"><div class="col_3"><h5>Column Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div><div class="col_3"><h5>Column Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div><div class="col_3"><h5>Column Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div><div class="col_3"><h5>Column Headline</h5><p>Duis nostrud exerci tation nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit...</p></div></div>';
		    	$('#wrap').html(currentHTML + html)
		    };
		    
		  });
		  
		  
		  
		  
		  $('#wrap').load('http://mixergy.com/master-class-increase-online-sales/');
		  
			$('iframe').attr('style','width: 100%; height: 300px');
		 	$('embed').attr('style','width: 100%;  height: 300px');
		 	$('object').attr('style','width: 100%; height: 300px');
		 	
		 	options = {  
    reject : { // Rejection flags for specific browsers  
        all: false, // Covers Everything (Nothing blocked)  
        msie5: true, msie6: true, msie7: true, msie8: true, firefox1: true, firefox2: true, konqueror: true, konqueror1: true, konqueror2: true, chrome: true, chrome1: true, chrome2: true, opera: true, opera7: true, opera8: true // Covers MSIE 5-6 (Blocked by default)  
        /* 
            * Possibilities are endless... 
            * 
            * // MSIE Flags (Global, 5-8) 
             msie, msie5, msie6, msie7, msie8, 
            * // Firefox Flags (Global, 1-3) 
            * firefox, firefox1, firefox2, firefox3, 
            * // Konqueror Flags (Global, 1-3) 
            * konqueror, konqueror1, konqueror2, konqueror3, 
            * // Chrome Flags (Global, 1-4) 
            * chrome, chrome1, chrome2, chrome3, chrome4, 
            * // Safari Flags (Global, 1-4) 
            * safari, safari2, safari3, safari4, 
            * // Opera Flags (Global, 7-10) 
            * opera, opera7, opera8, opera9, opera10, 
            * // Rendering Engines (Gecko, Webkit, Trident, KHTML, Presto) 
            * gecko, webkit, trident, khtml, presto, 
            * // Operating Systems (Win, Mac, Linux, Solaris, iPhone) 
            * win, mac, linux, solaris, iphone, 
            * unknown // Unknown covers everything else 
            */  
    },  
    display: [], // What browsers to display and their order (default set below)  
    browserInfo: { // Settings for which browsers to display  
        firefox: {  
            text: 'Firefox 4', // Text below the icon  
            url: 'http://www.mozilla.com/firefox/' // URL For icon/text link  
        },  
        safari: {  
            text: 'Safari 5',  
            url: 'http://www.apple.com/safari/download/'  
        },  
        opera: {  
            text: 'Opera 11',  
            url: 'http://www.opera.com/download/'  
        },  
        chrome: {  
            text: 'Chrome 11+',  
            url: 'http://www.google.com/chrome/'  
        },  
        msie: {  
            text: 'Internet Explorer 9',  
            url: 'http://www.microsoft.com/windows/Internet-explorer/'  
        },  
        gcf: {  
            text: 'Google Chrome Frame',  
            url: 'http://code.google.com/chrome/chromeframe/',  
            // This browser option will only be displayed for MSIE  
            allow: { all: false, msie: true }  
        }  
    },  
  
    // Header of pop-up window  
    header: 'Did you know that your Internet Browser is out of date?',  
    // Paragraph 1  
    paragraph1: 'Your browser is out of date, and may not be compatible with '+  
                'our website. A list of the most popular web browsers can be '+  
                'found below.',  
    // Paragraph 2  
    paragraph2: 'Just click on the icons to get to the download page',  
    close: true, // Allow closing of window  
    // Message displayed below closing link  
    closeMessage: 'By closing this window you acknowledge that your experience '+  
                    'on this website may be degraded',  
    closeLink: 'Close This Window', // Text for closing link  
    closeURL: '#', // Close URL  
    closeESC: true, // Allow closing of window with esc key  
  
    // If cookies should be used to remmember if the window was closed  
    // See cookieSettings for more options  
    closeCookie: false,  
    // Cookie settings are only used if closeCookie is true  
    cookieSettings: {  
        // Path for the cookie to be saved on  
        // Should be root domain in most cases  
        path: '/',  
        // Expiration Date (in seconds)  
        // 0 (default) means it ends with the current session  
        expires: 0  
    },  
  
    imagePath: './images/', // Path where images are located  
    overlayBgColor: '#000', // Background color for overlay  
    overlayOpacity: 0.8, // Background transparency (0-1)  
  
    // Fade in time on open ('slow','medium','fast' or integer in ms)  
    fadeInTime: 'fast',  
    // Fade out time on close ('slow','medium','fast' or integer in ms)  
    fadeOutTime: 'fast'  
}; 
$.reject(options);

$('#editorSaved .white_content').fadeOut(1700);
$('#editorSaved .black_overlay').delay(1200).fadeOut(500);
	});
	</script>
	
	<link rel="stylesheet" type="text/css" 
href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>

	<link rel="stylesheet" href="js/lib/codemirror.css">
    <script src="js/lib/codemirror.js"></script>
    <link rel="stylesheet" href="js/theme/eclipse.css">
    <script src="js/mode/javascript/javascript.js"></script>
	
	<link href="css/freshereditor.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet">
	<link href="js/farbtastic/farbtastic.css" rel="stylesheet" type="text/css" />   
	<style type="text/css">
		body {
			background: url(images/grid.png) repeat;
		}
		.inner {
			margin-top: 0 !important;
			margin-bottom: 0 !important;
			padding-top: 0 !important;
			padding-bottom: 0 !important;
		}
		.column {
			margin-bottom: 0;
		}
		#wrap {
			position: relative;
			width: 790px;
			padding: 10px;
			margin-top: 10px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			-khtml-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0px 1px 3px 1px #999;
			-moz-box-shadow: 0px 1px 3px 1px #999;
			box-shadow: 0px 1px 3px 1px #999; 
		}
		#colorpanel {
			z-index: 999999;
		}
	</style>
</head><body>
	
	
	
	
<?php if ($_POST['updatePage'] == "updatePage") {
	$id = $_POST['id']; 
	$content = html_entity_decode(stripslashes($_POST['getHTML']));
	update_eb_page($content, $id);	
	?>
		
	<style type="text/css">
		.black_overlay{
			display: block;
			position: absolute;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			background-color: black;
			z-index:1001;
			-moz-opacity: 0.8;
			opacity:.80;
			filter: alpha(opacity=80);
		}
		 
		.white_content {
			display: block;
			position: absolute;
			top: 33%;
			left: 33%;
			width: 33%;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px;
			border-radius: 10px;
			padding: 16px;
			background-color: white;
			z-index:1002;
			overflow: auto;
			  -moz-box-shadow:    3px 3px 5px 6px #ccc;
			  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
			  box-shadow:         3px 3px 5px 6px #ccc;
			  border: 1px solid #888;
		}
	</style>
	<div id="editorSaved"><div id="light" class="white_content"><center><h2 style="color: #56912f; font-size: 32px;">Successfully Updated Page</h2></center></div><div id="fade" class="black_overlay"></div></div>
	<?php
	} 
?>
	
	
	  <?php 
	  
global $post;
		global $wpdb;
		$table_db_name = $wpdb->prefix . "eb_pages";
		$campaign = $_GET['campaign'];
		$name = $_GET['page'];
		$templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign = '$campaign' AND name = '$name'",ARRAY_A);
		$templates = array_reverse($templates );
			
		foreach($templates as $template){  } ?>
	<div id="sourceEditor"></div>
	   <div id="topEditor">
	  		<div id="toolbar">
	  		</div>
	  		<div style="padding-left: 8px;"><select id="addContent" class="">
	  			<option value="">Add Content</option>
	  			<option value="1_column">1 Column</option>
	  			<option value="2_column_r">2 Column (R)</option>
	  			<option value="2_column_l">2 Column (L)</option>
	  			<option value="3_column">3 Columns</option>
	  			<option value="4_column">4 Columns</option>
  			</select></div>
  			<form method="post" action="">
					<input type="hidden" value="updatePage" name="updatePage">
					<input type="hidden" value="<?php echo $template['id']; ?>" name="id">
					<textarea id="getHTML" style="display: none" name="getHTML"></textarea>
	  				<input type="submit" class="button pill green" id="openSource" style="width: 100px;" value="Save Page">
	  		</form>
	   </div>
<div id="wrap" class="clearfix"><?php echo $template['content']; ?></div><!-- END WRAP -->
</body></html>