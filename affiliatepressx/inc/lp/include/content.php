<!-- 

	// Unique Content
	// Filename: content.php

	// Copyright (c) 2013 - Gue.rrilla Marketing

 -->

 

<?php if($results->showProgress == '2') { ?>
<style>
	#progressBar {
		width: 100%;

		padding: 18px;
		background: #fafafa;
		box-shadow: 0 0 4px #ccc inset;
	}
	#progressBar span {
		position: absolute;
		font-size: 15px;
		text-shadow: 0 1px 0 #444;
		z-index: 999;
		color: #fff;
		top: 5px;
		margin-bottom: -10px;
	}
	#progressBar .progressbar {
		width: 30%;

	}
	#progress {
		overflow:hidden;
	}
	.progress_type1 {
		height: 34px;
	}
		.progress_type1 .progressbar {
			height: 30px;
		}
	.progress_type2 {
		height: 32px;
	}
		.progress_type2 .progressbar {
			height: 30px;
		}
	.progress_type3 {
		height: 30px;
	}
		.progress_type3 .progressbar {
			height: 30px;
		}
	
	.progress_type4 .progressbar {
		margin-top: -1px;
		margin-left: -1px;
	}
		.progress_type4 span {
			display: none; !important;
		}
	.progress_type5 {
		height: 36px;
	}
		.progress_type5 .progressbar {
			height: 30px;
		}
		.progress_type5 span {
			top: 7px !important;
		}

	.progress_type6 {
		height: 32px;
	}
		.progress_type6 .progressbar {
			height: 30px;
		}

	.progress_type7 {
		height: 30px;
	}
		.progress_type7 .progressbar {
			height: 30px;
		}

</style>


<div id="progressBar">
	<div id="progress" class="progress_type<?php echo stripcslashes($results->progressType); ?>">

		<span class="elapsed" style="left: 10px;"><?php echo stripcslashes($results->progressHeadline); ?></span>
		<span class="percent" style="right: 10px;">0%</span>
		<div class="progressbar pbar color<?php echo stripcslashes($results->progressColor); ?>"></div>
	</div>
</div>

<?php } ?>

 <div class="container mainContent">






 	<div class="grid" style="clear: both">

 		<div class="four-of-five unit content  paragraph<?php echo stripcslashes($results->paragraph); ?>">
 			
<p><?php echo stripcslashes($results->socialHeadline); ?></p>

<div style="margin-left: -30px; margin-top: -30px;">
	<?php if($results->socialStyle == '1') { ?>
	<div id="social1"> </div>
<?php } ?>
<?php if($results->socialStyle == '2') { ?>
	<div id="social2"> </div>
<?php } ?>
<?php if($results->socialStyle == '3') { ?>
	<div id="social3"> </div>
<?php } ?>
<?php if($results->socialStyle == '4') { ?>
	<div id="social4"> </div>
<?php } ?>
<?php if($results->socialStyle == '5') { ?>
	<div id="social5"> </div>
<?php } ?>
</div>
	<br clear="both"><br>
			<?php echo stripcslashes($results->content); ?>


			<?php if($results->showOptin == "2") { ?>
				<div id="optin">
					<h2 style="margin: 0; padding: 0; text-align: center"><strong><?php echo stripcslashes($results->optinHeadline); ?></strong></h2>
					<h4 style="margin: 0; padding: 0; text-align: center; text-transform: uppercase; color: #777; letter-spacing: 1px; margin-top: -10px; font-size: 16px;"><?php echo stripcslashes($results->optinSubHeadline); ?></h4>
					<form action=""  style="padding-top: 20px;" class='ARform' id="arForm">
						<div class='ARhidden'></div>
						<input type="text" placeholder="Enter Your Name Here..." name="name" id="optinName"  class="nameInput" >
						<input type="text" placeholder="Enter Your Email Here..." name="email" id="optinEmail"  class="emailInput" >
						<br clear="all">
						<span class="spam"><?php echo stripcslashes($results->spam); ?></span>
						<a href="#" class="btn" id="SignedUp" style="float: right;  margin-top: 20px; "><?php echo stripcslashes($results->optinButton); ?></a>
						<br clear="all">
					</form>

					<div id="autoresponder" style="display: none">
						<textarea id="autoresponderCode" name="autoresponderCode"><?php echo stripcslashes($results->autoresponder); ?>></textarea>
						<input type="text"  name="arname" id="arname" value="" />
						<input type="text"   name="aremail" id="aremail" value="" />
						<input type="text"   name="arform" id="arform" value="" />
						<textarea id="arhidden"   name="arhidden"></textarea>
						<div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
					</div>
				</div>
			<?php } ?>
			

 		</div>
 	 	