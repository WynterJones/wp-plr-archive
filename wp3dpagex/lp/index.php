<?php

	
	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');
	
	// Load Up All Key Departments
	$urlx = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
	$urlx = str_replace( $_SERVER["QUERY_STRING"], "", $urlx);
	$urlx = str_replace( "?", "", $urlx);
global $wpdb;
	$table_db_name = $wpdb->prefix . $pluginName;
	
	$ID = $_GET['id'];
	
	$data = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($data as $data) {}

	// Return Option Object:
	$results = get_option('wp3dpagex_campaign_'. $ID);	
	// echo $data->id;
	
	// $full_path = WP_PLUGIN_URL.'/'.str_replace(basename( FILE),"",plugin_basename(FILE));
	$full_path = get_site_url();


	$assets = $full_path . "/wp-content/plugins/wp3dpagex/lp/";



 	

	?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>3D Animated Landing Page</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		 However, there is a blank style.css in the css directory should you prefer -->
	<link rel="stylesheet" href="<?php echo $assets; ?>css/gumby.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="<?php echo $assets; ?>js/libs/modernizr-2.6.2.min.js"></script>


	<link rel="stylesheet" href="<?php echo $assets; ?>fancyInput/fancyInput.css">
	<link rel="stylesheet" href="<?php echo $assets; ?>fancyInput/styles.css">
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Droid+Sans:400,700|Lato:400,700,900,400italic|Lora:400,700,400italic,700italic|Pompiere|Maiden+Orange|PT+Sans+Narrow|Rokkitt:400,700|Gloria+Hallelujah|Droid+Serif:400,700,400italic,700italic|Open+Sans+Condensed:300,700|Bree+Serif|Special+Elite|Lobster+Two:400,400italic,700,700italic|Indie+Flower|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<style>
body {
    background: url(<?php echo stripcslashes($results->optinBG); ?>) fixed;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

}

a.bigButton {
	position: relative;
    color: rgba(255,255,255,1);
    text-decoration: none;
    background-color: rgba(219,87,5,1);
    font-weight: 700;
    font-size: 3em;
    display: block;
    padding: 4px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
    -moz-box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
    box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
    margin: 10px auto;
	width: 80%;
	text-align: center;
	padding: 30px 0;
	letter-spacing: -1px;
	-webkit-transition: all .1s ease;
	-moz-transition: all .1s ease;
	-ms-transition: all .1s ease;
	-o-transition: all .1s ease;
	transition: all .1s ease;
	margin-top: 30px;
}

a.bigButton :active {
    -webkit-box-shadow: 0px 3px 0px rgba(219,31,5,1), 0px 3px 6px rgba(0,0,0,.9);
    -moz-box-shadow: 0px 3px 0px rgba(219,31,5,1), 0px 3px 6px rgba(0,0,0,.9);
    box-shadow: 0px 3px 0px rgba(219,31,5,1), 0px 3px 6px rgba(0,0,0,.9);
    position: relative;
    top: 6px;
}
#mainHeadline h1 {
	color: #fff;
	font-weight: bold;
	letter-spacing: -1px;
	
	padding: 20px 100px;
	font-size: 3.5em;
}
#mainHeadline h3 {
	color: #fff;
	font-weight: normal;
	letter-spacing: 1px;
	
	padding: 0 150px;
	padding-bottom: 30px;
	font-size: 1.5em;
}

#subHeadline h1 {
	color: #fff;
	font-weight: bold;
	letter-spacing: -1px;
	
	padding: 20px 100px;
	font-size: 3.5em;
}
#subHeadline h3 {
	color: #fff;
	font-weight: normal;
	letter-spacing: 1px;
	
	padding: 0 150px;
	padding-bottom: 30px;
	font-size: 1.5em;
}

.row {
	<?php if($results->overlay == "dark") { ?>
		background: url(<?php echo $assets; ?>img/darkoverlay.png) repeat;
		box-shadow: 0 0 5px <?php echo stripcslashes($results->shadowColor); ?>;
	<?php } ?>
	<?php if($results->overlay == "light") { ?>
		background: url(<?php echo $assets; ?>img/overlay.png) repeat;
		box-shadow: 0 0 5px <?php echo stripcslashes($results->shadowColor); ?>;
	<?php } ?>
	padding-bottom: 20px;
	
	border-bottom-left-radius: 10px;
	margin-bottom: 20px;
	border-bottom-right-radius: 10px;
}
#footer {
	background: none;
	box-shadow: none;
	text-align: center;
	color: #fff;
}
#footer p {
	opacity: .7;
}

body.typography1, input {
			font-family: 'Oswald', sans-serif !important;
		}
		body.typography2, input {
			font-family: 'Droid Sans', sans-serif !important;
		}
		body.typography3, input {
			font-family: 'Lato', sans-serif !important;
		}
		body.typography4, input {
			font-family: 'Lora', serif !important;
		}
		body.typography5, input {
			font-family: 'Pompiere', cursive !important;
		}
		body.typography6, input {
			font-family: 'Patrick Hand', cursive !important;
		}
		body.typography7, input {
			font-family: 'Maiden Orange', cursive !important;
		}
		body.typography8, input {
			font-family: 'PT Sans Narrow', sans-serif !important;
		}
		body.typography9, input {
			font-family: 'Rokkitt', serif !important;
		}
		body.typography11, input {
			font-family: 'Droid Serif', serif !important;
		}
		body.typography12, input {
			font-family: 'Open Sans Condensed', sans-serif !important;
		}
		body.typography13, input {
			font-family: 'Bree Serif', serif !important;
		}
		body.typography14, input {
			font-family: 'Special Elite', cursive !important;
		}
		body.typography15, input {
			font-family: 'Lobster Two', cursive !important;
		}

h1, h2, h3, h4, h5, h6 {
	<?php if($results->textColor == "black") { ?>
		color: #000 !important;
	<?php } else { ?>
		color: #fff;
	<?php } ?>
	font-weight: bold;
	letter-spacing: -1px;
	text-shadow: 2px 2px 2px  <?php echo stripcslashes($results->shadowColor); ?>;
}
 p {
	<?php if($results->textColor == "black") { ?>
		color: #000 !important;
	<?php } else { ?>
		color: #fff;
	<?php } ?>
	font-weight: normal;
	letter-spacing: -1px;
	text-shadow: 2px 2px 4px  <?php echo stripcslashes($results->shadowColor); ?>;
}
.fadesIn {
	opacity:0;
}.content {
	text-align: left;
	padding: 20px 50px;
}
#showcase { padding: 20px 0; margin-left: 10px; }
.gallery { width: 960px;  text-align: center; }
.gallery figure { text-align: center; float: left; width: 30%; margin: 10px;  display: inline-block; }
.gallery figure p { opacity: .8;}
.gallery figure img { box-shadow: 0 0 5px <?php echo stripcslashes($results->shadowColor); ?>; margin-bottom: 10px; }


	</style>
</head>

<body class="typography<?php echo stripcslashes($results->typography); ?>">
	

		<div class="row effect<?php echo stripcslashes($results->effect); ?>">
		    <div class="twelve columns">
				<?php if($results->logoImage != "") { ?>
					<img src="<?php echo stripcslashes($results->logoImage); ?>" style="display: block; margin: 0 auto; margin-top: 40px;max-width: 60%">
				<?php } else { ?>
					<br><br>
				<?php } ?>
		    	<div id="mainHeadline">
		    		<h1><?php echo stripcslashes($results->mainHeadline); ?></h1>
		    		<h3><?php echo stripcslashes($results->subHeadline); ?></h3>
		    	</div>
		     	<form action=""  class='ARform' id="arForm">
		     		<div class='ARhidden'></div>
		     	<section class='input' style="margin-bottom: 20px;">
					<div style="width: 100%">
						<input type='text' name="optinName" id="optinName" placeholder='<?php echo stripcslashes($results->namePlaceholder); ?>'>
					</div>
				</section>

				<section class='input' >
					<div style="width: 100%">
						<input type='text' name="optinEmail" id="optinEmail" placeholder='<?php echo stripcslashes($results->emailPlaceholder); ?>'>
					</div>
				</section>

					
				</form>

				

				<div id="autoresponder" style="display: none">
					<textarea id="autoresponderCode" name="autoresponderCode"><?php echo stripcslashes($results->autoresponder); ?></textarea>
					<input type="text"  name="arname" id="arname" value="" />
					<input type="text"   name="aremail" id="aremail" value="" />
					<input type="text"   name="arform" id="arform" value="" />
					<textarea id="arhidden"   name="arhidden"></textarea>
					<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
				</div>

				<a href="#" id="SignedUp" class="bigButton"><?php echo stripcslashes($results->optinButton); ?></a>
					



<div id="showcase">
		<div id="subHeadline" class="fadesIn">
    		<h1><?php echo stripcslashes($results->mainHeadline2); ?></h1>
    		<h3><?php echo stripcslashes($results->subHeadline2); ?></h3>
    		<br>
    	</div>
    	
		<div class="gallery clearfix">
			<?php if($results->featuredImage1 != "") { ?>
				<figure class="fadesIn">
					<img src="<?php echo stripcslashes($results->featuredImage1); ?>" alt="">
					<figcaption>
						<h4><?php echo stripcslashes($results->featuredHeadline1); ?></h4>
						<p><?php echo stripcslashes($results->featuredContent1); ?></p>
					</figcaption>				
				</figure>
			<?php } ?>
			
			<?php if($results->featuredImage2 != "") { ?>
				<figure class="fadesIn">
					<img src="<?php echo stripcslashes($results->featuredImage2); ?>" alt="">
					<figcaption>
						<h4><?php echo stripcslashes($results->featuredHeadline2); ?></h4>
						<p><?php echo stripcslashes($results->featuredContent2); ?></p>
					</figcaption>				
				</figure>
			<?php } ?>

			<?php if($results->featuredImage3 != "") { ?>
				<figure class="fadesIn">
					<img src="<?php echo stripcslashes($results->featuredImage3); ?>" alt="">
					<figcaption>
						<h4><?php echo stripcslashes($results->featuredHeadline3); ?></h4>
						<p><?php echo stripcslashes($results->featuredContent3); ?></p>
					</figcaption>				
				</figure>

				<br clear="all"><br>
			<?php } ?>

			<?php if($results->featuredImage4 != "") { ?>
				<figure class="fadesIn">
					<img src="<?php echo stripcslashes($results->featuredImage4); ?>" alt="">
					<figcaption>
						<h4><?php echo stripcslashes($results->featuredHeadline4); ?></h4>
						<p><?php echo stripcslashes($results->featuredContent4); ?></p>
					</figcaption>				
				</figure>
			<?php } ?>

			<?php if($results->featuredImage5 != "") { ?>
				<figure class="fadesIn">
					<img src="<?php echo stripcslashes($results->featuredImage5); ?>" alt="">
					<figcaption>
						<h4><?php echo stripcslashes($results->featuredHeadline5); ?></h4>
						<p><?php echo stripcslashes($results->featuredContent5); ?></p>
					</figcaption>				
				</figure>
			<?php } ?>

			<?php if($results->featuredImage6 != "") { ?>
				<figure class="fadesIn">
					<img src="<?php echo stripcslashes($results->featuredImage6); ?>" alt="">
					<figcaption>
						<h4><?php echo stripcslashes($results->featuredHeadline6); ?></h4>
						<p><?php echo stripcslashes($results->featuredContent6); ?></p>
					</figcaption>				
				</figure>
			<?php } ?>


		</div>
	</div>



<?php if($results->embed != "") { ?>
	<div id="videoLoad"  class="fadesIn">
		<?php echo stripcslashes($results->embed); ?>
		<br><br>
	</div>
<?php } ?>

<?php if($results->content1 != "") { ?>
	<div id="content1"  class="fadesIn content">
		<?php echo stripcslashes($results->content1); ?>
	</div>
<?php } ?>

<?php if($results->content2 != "") { ?>
	<div id="content2"  class="fadesIn content">
		<?php echo stripcslashes($results->content2); ?>
	</div>
<?php } ?>

<?php if($results->content3 != "") { ?>
	<div id="content3"  class="fadesIn content">
		<?php echo stripcslashes($results->content3); ?>
	</div>
<?php } ?>



		    </div>
		  </div>
<?php if($results->footer != "") { ?>
	<div id="footer"  class="row fadesIn content">
		<?php echo stripcslashes($results->footer); ?>
	</div>
<?php } ?>

	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>
	<script gumby-touch="js/libs" src="<?php echo $assets; ?>js/libs/gumby.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.retina.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.fixed.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.skiplink.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.checkbox.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.radiobtn.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.tabs.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/gumby.navbar.js"></script>
	<script src="<?php echo $assets; ?>js/libs/ui/jquery.validation.js"></script>
	<script src="<?php echo $assets; ?>js/libs/gumby.init.js"></script>
	<script src="<?php echo $assets; ?>js/plugins.js"></script>
	<script src="<?php echo $assets; ?>js/main.js"></script>

	<script src='<?php echo $assets; ?>fancyInput/fancyInput.js'></script>

	<script>

		(function(){
			var viewTogglers = $('menu.radio input');
			
			$(document).on('keydown', function(e){
				if( e.key == 'tab' || e.keyCode == 9 ){
					var $checked = viewTogglers.filter(':checked');
					var $next = viewTogglers.eq(viewTogglers.index($checked) + 1);
					if(!$next.length){
						$next = viewTogglers.first();
					}
					$next.prop("checked", true).change();
						
					return false;
				}
			});


		})();
$( document ).ready(function() {


    $(window).scroll( function(){
    
        $('.fadesIn').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }

            
        }); 
    
    });


$('#videoLoad iframe').attr('style', 'width: 100% !important; height: 560px !important');
$('#videoLoad object').attr('style', 'width: 100% !important; height: 560px !important');
$('#videoLoad embed').attr('style', 'width: 100% !important; height: 560px !important');


$('#SignedUp').click(function() {
    

    if ($('#optinName').val() == "") {
    	alert('Enter in your name to continue');
    }
    if ($('#optinEmail').val() == "") {
    	alert('Enter in your email address to continue');
    }
    if ($('#optinEmail').val() != "" && $('#optinName').val() != "") {
    	$('.banner').fadeOut(1000);
    	$('.lastStep').delay(1000).fadeIn(1000);
    	$('.ARform').submit();
    }

    
});

break_apart_ar();
						
				// TAKE APART AR CODE
						
				function break_apart_ar(){
				
				var tags = ['a','iframe','frame','frameset','script'], reg, val = $('#autoresponderCode').val(),
				
				hdn = $('#arcode_hdn_div2'), formurl = $('#arform'), hiddenfields = $('#arhidden');
				
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
					    if(num=='0') jQuery('#arname').val(name_selected);
					    if(num=='1') jQuery('#aremail').val(email_selected);
					    num++;
					});
								jQuery(':input[type=hidden]',hdn).each(function(){
									jQuery('#arcode_hdn_div').append(jQuery('<input type="hidden" name="'+jQuery(this).attr('name')+'" />').val(jQuery(this).val()));
								});		
								var hidden_f = jQuery('#arcode_hdn_div').html();
								formurl.val(jQuery('form',hdn).attr('action'));
								hiddenfields.val(hidden_f);
								hdn.html('');
								
				};
				
				$('.ARform').attr('action', $('#arform').val());
				$('.ARhidden').html($('#arhidden').val());
				$('#optinName').attr('name', $('#arname').val());
				$('#optinEmail').attr('name', $('#aremail').val());



});

	
		$('section :input').val('').fancyInput()[0].focus();

		function init(str){
			var input = $('section input').val('')[0],
				s = '<?php echo stripcslashes($results->namePlaceholder); ?>'.split('').reverse(),
				len = s.length-1,
				e = $.Event('keypress');
				
				input.nextElementSibling.className = '';
			
			var	initInterval = setInterval(function(){
					if( s.length ){
						var c = s.pop();
						fancyInput.writer(c, input, len-s.length).setCaret(input);
						input.value += c;
						//e.charCode = c.charCodeAt(0);
						//input.trigger(e);
						
					}
					else clearInterval(initInterval);
			},150);
		}
		
		init();


	</script>

	

  </body>
</html>
