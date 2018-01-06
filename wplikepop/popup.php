<?php  define('WP_USE_THEMES', false); require('../../../wp-blog-header.php'); ?>

<?php

	$pageTitle = "WPlikepop";   
	$headline1 = get_option('wplikepop_headline2');
	$headline2 = get_option('wplikepop_headline');
	$font_Droid_Sarif = "font-family: 'Droid Serif', serif;";
	$font_Arvo = "font-family: 'Arvo', serif;";
	$font_Lora = "font-family: 'Lora', serif;";
	$font_Open_Sans = "font-family: 'Open Sans', sans-serif;";
	$font_Oswald = "font-family: 'Oswald', sans-serif;";
	$font_Pathway_Gothic_One = "font-family: 'Pathway Gothic One', sans-serif;";
	$font_Unkempt = "font-family: 'Unkempt', cursive;";
	$font_Righteous = "font-family: 'Righteous', cursive;";
	$font_Shadows = "font-family: 'Shadows Into Light', cursive;";
	$font_Coming_Soon = "font-family: 'Coming Soon', cursive;";
	?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700italic,700|Lora:400,400italic,700,700italic|Arvo:400,400italic,700,700italic|Open+Sans:400,400italic,700,700italic|Oswald:700,400|Droid+Sans:400,700|Unkempt:400,700|Righteous|Shadows+Into+Light|Coming+Soon&subset=latin,greek-ext,cyrillic-ext,latin-ext,cyrillic,greek,vietnamese' rel='stylesheet' type='text/css'>
	<style type="text/css">
	* {
		margin: 0;
		padding: 0;
	}
	
	#wplikepop_container {
		width: 280px;
		position: fixed;
		right: 0;
		bottom: 0;
		border: 1px solid #616161;
		border-radius: 5px;
		border-style:solid;
		border-width:1px;
		margin-right: 0px;
		box-shadow: -3px 3px 3px #bbb;
		-webkit-box-shadow: 0 0 0 #000;
		background-clip: padding-box;
		display:none;
	}
	<?php $checkPosition = get_option('wplikepop_position'); ?>

	<?php if ($checkPosition == "position1") { ?>
		#wplikepop_container {
		width: 280px;
		position: fixed;
		right: 0;
		bottom: 0;
		border: 1px solid #616161;
		border-radius: 5px;
		border-style:solid;
		border-width:1px;
		margin-right: 0px;
		box-shadow: -3px 3px 3px #bbb;
		-webkit-box-shadow: 0 0 0 #000;
		background-clip: padding-box;
		display:none;
		}
		<?php } ?>

		<?php if ($checkPosition == "position2") { ?>
		#wplikepop_container {
		width: 280px;
		position: fixed;
		right: 0;
		bottom: 0;
		border: 1px solid #616161;
		border-radius: 5px;
		border-style:solid;
		border-width:1px;
		margin-right: 0px;
		box-shadow: 3px 3px 3px #bbb;
		-webkit-box-shadow: 0 0 0 #000;
		background-clip: padding-box;
		display:none;
		}
		<?php } ?>
		

		<?php if ($checkPosition == "position3") { ?>
		#wplikepop_container {
		width: 280px;
		position: fixed;
		right: 0;
		bottom: 0;
		border: 1px solid #616161;
		border-radius: 5px;
		border-style:solid;
		border-width:1px;
		margin-right: 0px;
		box-shadow: -3px 3px 3px #bbb;
		-webkit-box-shadow: 0 0 0 #000;
		background-clip: padding-box;
		display:none;
		}
		<?php } ?>

		<?php if ($checkPosition == "position4") { ?>
		#wplikepop_container {
		width: 280px;
		position: fixed;
		right: 0;
		bottom: 0;
		border: 1px solid #616161;
		border-radius: 5px;
		border-style:solid;
		border-width:1px;
		margin-right: 0px;
		box-shadow: 3px 3px 3px #bbb;
		-webkit-box-shadow: 0 0 0 #000;
		background-clip: padding-box;
		display:none;
		}
		<?php } ?>
	#wplikepop_header {
		padding: 5px;
		border-top: 10px solid #F18D05;
		border-top-left-radius: 3px 3px;
		border-top-right-radius: 3px 3px;
		background: #faFAFA;
		border-bottom: 1px solid #eee;
	}	
	#wplikepop_header h3 {
		padding-left: 10px !important;
	}


	#wplikepop_content {
		padding:15px;
		background: #FAFAFA;
		border-bottom-right-radius: 4px 4px;
		border-bottom-left-radius: 4px 4px;

	}
	#wplikepop_content h3 {
		font-size: 18px;
		font-weight: normal;
		text-align: center;
		padding-bottom: 10px;

	}

	#wplikebox_icon {
		float: right;
		margin-right: 4px;
		margin-top: 3px;
		padding-left: 10px;
		cursor: pointer;
	}



	#wplikepop_header.design1 {
		border-top: 10px solid #F27435;
	}	
	#wplikepop_header.design3 {
		border-top: 10px solid #00B4CC;
	}

	#wplikepop_header.design5 {
		border-top: 10px solid #005F6B;
	}

	#wplikepop_header.design7 {
		border-top: 10px solid #E60000;
	}


	#wplikepop_header.design9 {
		border-top: 10px solid #08F500;
	}


	#wplikepop_header.design11 {
		border-top: 10px solid #680148;
	}

	#wplikepop_header.design13 {
		border-top: 10px solid #FF3D7F;
	}


	#wplikepop_header.design2 {
		border-top: 10px solid #FA6900; /* darkcolor */
		background: #F38630; /* lightcolor */
	}

		#wplikepop_header.design2 h3 {
			color: #fff;
			text-shadow: 1px 1px 0 #FA6900;
		}


	#wplikepop_header.design4 {
		border-top: 10px solid #69D2E7;
		background: #A7DBD8;
	}
		#wplikepop_header.design4 h3 {
			color: #102F35;
			text-shadow:1px 1px 0 #fff;
		}

	#wplikepop_header.design6 {
		border-top: 10px solid #033649;
		background: #036564;
	}
		#wplikepop_header.design6 h3 {
			color: #fff;
			text-shadow: 1px 1px 0 #102F35;
		}
	
	#wplikepop_header.design10 {
		border-top: 10px solid #519548;
		background: #88C425;
	}
		#wplikepop_header.design10 h3 {
			color: #fff;
			text-shadow: 1px 1px 0 #102F35;
		}
	

	#wplikepop_header.design12 {
		border-top: 10px solid #452632;
		background: #91204D;
	}
		#wplikepop_header.design12 h3 {
			color: #fff;
			text-shadow: 1px 1px 0 #102F35;
		}

	#wplikepop_header.design8 {
		border-top: 10px solid #6B0103;
		background: #A30006;
	}
		#wplikepop_header.design8 h3 {
			color: #fff;
			text-shadow: 1px 1px 0 #102F35;
			font-size: 16px;
		}

		#wplikepop_header.design14 {
		border-top: 10px solid #FE4365;
		background: #FC9D9A;
	}
		#wplikepop_header.design14 h3 {
			color: #fff;
			text-shadow: 1px 1px 0 #102F35;
			font-size: 16px;
		}


	
</style>

<?php $checkFont = get_option('wplikepop_font'); ?>


<?php if ($checkFont == "font1") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Oswald; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font2") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Droid_Sarif; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font3") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Arvo; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font4") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Lora; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font5") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Open_Sans; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font6") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Pathway_Gothic_One; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font7") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Unkempt; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font8") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Righteous; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font9") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Shadows; ?>
		}
	</style>
<?php } ?>

<?php if ($checkFont == "font10") { ?>
	<style>
		#wplikepop_container {
			<?php echo $font_Coming_Soon; ?>
		}
	</style>
<?php } ?>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
$(document).ready(function() {


$("#wplikebox_icon").click(function() {
    $("#wplikepop_container").fadeOut();
});



<?php $checkEffect = get_option('wplikepop_effects'); ?>

<?php 
if ($checkEffect == "effects1") { ?>
// Fade In Effect 
window.parent.onscroll = function(ev) {
    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$('#wplikepop_container').fadeIn();
    }

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$('#wplikepop_container').fadeOut();
    }
};
    
<?php }
?>


<?php 
if ($checkEffect == "effects2") { ?>
//Slide In Effect 
window.parent.onscroll = function(ev) {
    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$('#wplikepop_container').slideDown();
    }

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$('#wplikepop_container').slideUp();
    }
};
<?php }
?>


<?php 
if ($checkEffect == "effects3") { ?>
//Scale Effect 
window.parent.onscroll = function(ev) {
    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$('#wplikepop_container').show( "scale" );
    }

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$('#wplikepop_container').hide( "scale" );
    }
};
<?php }
?>

<?php 
if ($checkEffect == "effects4") { ?>
// Bounce Effect 
window.parent.onscroll = function(ev) {
    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$('#wplikepop_container').show( "bounce", { times: 2 }, "slow" );
    }

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$('#wplikepop_container').hide( "bounce", { times: 2 }, "slow" );
    }
};
<?php }
?>

<?php 
if ($checkEffect == "effects5") { ?>
// Pulse Effect 
window.parent.onscroll = function(ev) {
    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).show( "pulsate", { times: 1 });
}

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).hide( "pulsate", { times: 1 });
    }
};
<?php }
?>

<?php 
if ($checkEffect == "effects6") { ?>
// Clip Effect 
window.parent.onscroll = function(ev) {
    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).show( "clip" );
}

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).hide( "clip" );
    }
};
<?php }
?>

<?php 
if ($checkEffect == "effects7") { ?>
// // Shake Effect 
window.parent.onscroll = function(ev) {
    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).show( "shake" );
}

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).hide( "shake" );
    }
};
<?php }
?>

<?php 
if ($checkEffect == "effects8") { ?>
// // Puff Effect 
window.parent.onscroll = function(ev) {
	if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).show( "puff" );
}

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).hide( "puff" );
    }
};
<?php }
?>


<?php 
if ($checkEffect == "effects9") { ?>
// // // Fold Effect 
window.parent.onscroll = function(ev) {

    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).show( "fold" );
}

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).hide( "fold" );
    }
};
<?php }
?>


<?php 
if ($checkEffect == "effects10") { ?>
// // // Custom Effect 

window.parent.onscroll = function(ev) {
	
    if ((window.parent.innerHeight + window.parent.scrollY) >= window.parent.document.body.offsetHeight) {
  
	$( '#wplikepop_container' ).show( "slideLeft" );
	}

     if ((window.parent.innerHeight + window.parent.scrollY) < window.parent.document.body.offsetHeight) {
$( '#wplikepop_container' ).hide( "slideRight" );
    }
};
<?php }
?>







});
</script>
</head>
<body>

	<div id="wplikepop_container">
		<div id="wplikepop_header" class="<?php echo get_option('wplikepop_design'); ?>">
			
			<?php $checkClose = get_option('wplikepop_close'); ?>
			
			<?php if ($checkClose == "close1") { ?>
				<img id="wplikebox_icon" src="http://cdn3.iconfinder.com/data/icons/lynx/16x16/actions/dialog-close.png" alt="">
			
			<?php } ?>

			<?php if ($checkClose == "close2") { ?>
				<img id="wplikebox_icon" src="http://cdn1.iconfinder.com/data/icons/glaze/16x16/actions/fileclose.png" alt="">
			<?php } ?>

			<?php if ($checkClose == "close3") { ?>
				<img id="wplikebox_icon" src="http://cdn1.iconfinder.com/data/icons/mimiGlyphs/16/close_delete.png" alt="">
			<?php } ?>
			
			<?php if ($checkClose == "close4") { ?>
				<img id="wplikebox_icon" src="http://cdn3.iconfinder.com/data/icons/eightyshades/512/18_Close-16.png" alt="">
			<?php } ?>

			<?php if ($checkClose == "close5") { ?>
				<img id="wplikebox_icon" src="http://cdn1.iconfinder.com/data/icons/bnw/16x16/actions/fileclose.png" alt="">
			<?php } ?>

			<h3><?php echo $headline2; ?></h3>

		</div>
		<div id="wplikepop_content">
			

			<?php $checkSocial = get_option('wplikepop_social'); ?>

			<?php if ($checkSocial == "social1") { ?>
				<h3><?php echo $headline1; ?></h3>
				<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo get_option('wplikepop_socialurl'); ?>&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
			<?php } ?>

			<?php if ($checkSocial == "social2") { ?>
				<h3><?php echo $headline1; ?></h3>

				<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo get_option('wplikepop_socialurl'); ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; margin: 0 auto; display:block; width:100px; height:21px;" allowTransparency="true"></iframe>
			<?php } ?>

			<?php if ($checkSocial == "social3") { ?>
				

				<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo get_option('wplikepop_socialurl'); ?>&amp;send=false&amp;layout=box_count&amp;width=450&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; float: left;  width:60px; height:75px;" allowTransparency="true"></iframe>

				<h3 style="float: left; font-size: 17px; width: 190px; padding-bottom: 10px; text-align: left"><?php echo $headline1; ?></h3>
				<br clear="all">
			<?php } ?>

			<?php if ($checkSocial == "social4") { ?>
			<h3><?php echo $headline1; ?></h3>
			<div style="padding-left: 38px;">

				<!-- Place this tag where you want the +1 button to render. -->
				<div class="g-plusone" data-annotation="inline" data-width="250" data-href="<?php echo get_option('wplikepop_socialurl'); ?>"></div>

				<!-- Place this tag after the last +1 button tag. -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</div>
				
			<?php } ?>


			<?php if ($checkSocial == "social5") { ?>
			<h3 style="float: left; font-size: 17px; width: 190px; padding-bottom: 10px; text-align: left"><?php echo $headline1; ?></h3>
			
			

				<!-- Place this tag where you want the +1 button to render. -->
				<div class="g-plusone" data-size="tall"  data-href="<?php echo get_option('wplikepop_socialurl'); ?>"></div>

				<!-- Place this tag after the last +1 button tag. -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>	


			<?php } ?>

			<?php if ($checkSocial == "social6") { ?>
			<h3><?php echo $headline1; ?></h3>
			<div style="padding-left: 60px;">

			 <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_option('wplikepop_socialurl'); ?>" data-size="large">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

			</div>

			<?php } ?>


			<?php if ($checkSocial == "social7") { ?>
			<h3 style="float: left; font-size: 17px; width: 190px; padding-bottom: 10px; text-align: left"><?php echo $headline1; ?></h3>

			<div style="padding-top: 30px; padding-left:10px;">	

			<a data-pin-do="buttonFollow" href="<?php echo get_option('wplikepop_socialurl'); ?>">Pinterest</a>
			<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
			</div>

			<?php } ?>

			

			<?php if ($checkSocial == "social8") { ?>
			<h3><?php echo $headline1; ?></h3>
			<div style="padding-top: 5px; padding-left:85px;">

			<!-- Place this tag where you want the su badge to render -->
<su:badge layout="1"></su:badge>

<!-- Place this snippet wherever appropriate -->
<script type="text/javascript">
  (function() {
    var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
    li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
  })();
</script>

			</div>
			<?php } ?>


			<?php if ($checkSocial == "social9") { ?>
			<h3 style="float: left; font-size: 17px; width: 190px; padding-bottom: 10px; text-align: left"><?php echo $headline1; ?></h3>
			<!-- Place this tag where you want the su badge to render -->
<su:badge layout="5"></su:badge>

<!-- Place this snippet wherever appropriate -->
<script type="text/javascript">
  (function() {
    var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
    li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
  })();
</script>


			<?php } ?>

			<?php if ($checkSocial == "social10") { ?>
			<h3><?php echo $headline1; ?></h3>

			<div <div style=" padding-left:65px;">

		<a target="_blank" href="http://www.tumblr.com/share/link?url=<?php echo get_option('wplikepop_socialurl'); ?>&name=<?php echo bloginfo('title'); ?>" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; height:20px; background:url('http://platform.tumblr.com/v1/share_3.png') top left no-repeat transparent;">Share on Tumblr</a>

			</div>
			<?php } ?>







		</div>
	</div>

	
</body>
</html>


