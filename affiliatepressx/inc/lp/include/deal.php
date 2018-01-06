<!-- 

	// Deal (Countdown, Deal Info, etc)
	// filename: deal.php

	// Copyright (c) 2013 - Gue.rrilla Marketing

 -->
<div id="border" class="container show<?php echo stripcslashes($results->borderHide); ?> dropshadow<?php echo stripcslashes($results->dropShadow); ?>">
	
<?php if($results->showSlider == '2') { ?>

	<div id="contentSlider">
		<iframe src="../wp-content/plugins/affiliatepressx/inc/lp/content-slider/index.php?id=<?php echo $results->id; ?>" scrolling="no" style="width: 100%; height: 365px !important; position: relative;" frameborder="0"></iframe>
	</div>

<?php } ?>

<?php if($results->dealLayout == '2') { ?>
<div class="container mainBox">
		<div class="grid">

			<div class="one-of-two unit" style="float: right; margin-right: 34px; margin-left: -10px">	
				<div id="deal">
					<h2 class="dealHeadline"><span><?php echo stripcslashes($results->countdownHeadline); ?></span></h2>
					<div class="one-of-three unit smallDetail firstDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/ledicons/money.png"><span class=""><?php echo stripcslashes($results->priceSmall); ?></span></strong>
						<h4 class="resizer"><span><?php echo stripcslashes($results->priceHeadline); ?></span></h4>
					</div>
					<div class="one-of-three unit smallDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/actions/gtk-stop.png"><span  class=""><?php echo stripcslashes($results->regSmall); ?></span></strong>
						<h4  class="resizer" style="text-decoration: line-through; color: #777"><span><?php echo stripcslashes($results->regHeadline); ?></span></h4>
					</div>
					<div class="one-of-three unit smallDetail lastDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/lin/16/13.png"><span ><?php echo stripcslashes($results->discountSmall); ?></span></strong>
						<h4  class="resizer special_deal"><span><?php echo stripcslashes($results->discountHeadline); ?></span></h4>
					</div>
					

					<?php if ($results->couponCheck == "2") { ?>
							<div class="span-grid unit">
								<strong class="myButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>">
									<input type="text" value="<?php echo stripcslashes($results->couponCode); ?>" class="couponCode" style="width: 160px; font-size: 17px;margin-left: 10px; margin-top: 5px; float: left" />
									<a href="<?php echo stripcslashes($results->couponLink); ?>" class="couponButton" style="float: left; width: 250px;  height: 40px;font-size: 21px; color: #fff; <?php if($results->buttonBG == '5') { ?> color: #333; <?php } ?> padding-top: 16px; margin-left: 13px; padding-left: 30px; margin-right: -30px; background: url(https://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/48x48/emblems/emblem-symbolic-link.png)  no-repeat left; background-position: 0 20px; text-align: left; "><span><?php echo stripcslashes($results->couponLinkText); ?></span></a>
								</strong>
							</div>
					<?php } else { ?>
							<div class="span-grid unit">
								<a href="<?php echo stripcslashes($results->buyNowURL); ?>" target="_blank" class="myButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>"><?php echo stripcslashes($results->buyNow); ?></a>


							</div>
					<?php } ?>

					<div class="span-grid unit cta">
						<h4 class="resizer" style="height: 20px;"><img src="https://cdn4.iconfinder.com/data/icons/sketchdock-ecommerce-icons/alert-square-red.png" class="alertImage" ><span class="alertHeadline"><?php echo stripcslashes($results->alertText); ?></span></h4>
					</div>
				






</div>
					
				
			</div>	


	<div class="one-of-two unit video" style="float: left; margin-left: 25x; width: 459px;">	

<?php if($results->video != '' && $results->customEmbed == '') { ?>
					<?php echo stripcslashes($results->video); ?>
				<?php } else { ?>
				<style>
					#customEmbed {
					}
		            #customEmbed p {
		                color: #fff;
		                font-size: 26px;
		                text-align: center;
		                
		                font-weight: bold;
		                background: url(http://www.huskermax.com/js/lightbox/overlay.png) repeat;
		                border: 1px solid #222;
		                box-shadow: 0 0 5px #000 inset;
		                padding: 20px;
		                width: 300px;
		                border-radius: 8px;
		                margin: 0 auto;
		                display: block;
		                letter-spacing: -1px;
		                text-shadow: 0 1px 0 #333;
		                cursor: pointer;
		            }
		            #bigCountdown {
		            	margin-top: 12px;
		            }
		        </style>
						<div id="customEmbed" style="width: 461px; height: 258.75px; margin-left: -1px">

<?php if($results->videoText != '') { ?>
				<div style="width: 100%; height: 23%"></div>
							<p class="textfill"><?php echo stripcslashes($results->videoText); ?>
							<img src="<?php echo stripcslashes($results->videoIcon); ?>" style="margin: 0 auto; display: block"></p>


				<?php }  ?>
				</div>
					<?php }  ?> 

				

				<div id="bigCountdown">

					<?php if($results->chooseDate == '1') { ?>
<div id="downtimer">
<div id="countdown" style="padding-left: 10px">
 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tenday">0</span>
			<span class="oneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="tenhour">0</span>
				<span class="onehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tenmin">0</span>
			<span class="onemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tensec">0</span>
			<span class="onesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>
					<?php } ?>

					<?php if($results->chooseDate == '2') { ?>


					<div id="dydowntimer">
<div id="dycountdown" style="padding-left: 10px">

	 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytenday">0</span>
			<span class="dyoneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="dytenhour">0</span>
				<span class="dyonehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytenmin">0</span>
			<span class="dyonemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytensec">0</span>
			<span class="dyonesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>

</div>
				

					<?php } ?>


					<?php if($results->chooseDate == '3') { ?>


					<div id="wkdowntimer">
<div id="wkcountdown" style="padding-left: 10px">

	 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktenday">0</span>
			<span class="wkoneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="wktenhour">0</span>
				<span class="wkonehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktenmin">0</span>
			<span class="wkonemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktensec">0</span>
			<span class="wkonesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>

</div>
				

					<?php } ?>



		

<?php } else { ?>
	<div class="container mainBox">
		<div class="grid">
			<div class="one-of-two unit" >	
				<div id="deal">
					<h2 class="dealHeadline"><span><?php echo stripcslashes($results->countdownHeadline); ?></span></h2>
					<div class="one-of-three unit smallDetail firstDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/ledicons/money.png"><span class=""><?php echo stripcslashes($results->priceSmall); ?></span></strong>
						<h4 class="resizer"><span><?php echo stripcslashes($results->priceHeadline); ?></span></h4>
					</div>
					<div class="one-of-three unit smallDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/gnomeicontheme/16x16/actions/gtk-stop.png"><span  class=""><?php echo stripcslashes($results->regSmall); ?></span></strong>
						<h4  class="resizer" style="text-decoration: line-through; color: #777"><span><?php echo stripcslashes($results->regHeadline); ?></span></h4>
					</div>
					<div class="one-of-three unit smallDetail lastDetail">
						<strong class="resizer"><img src="https://cdn2.iconfinder.com/data/icons/lin/16/13.png"><span ><?php echo stripcslashes($results->discountSmall); ?></span></strong>
						<h4  class="resizer special_deal"><span><?php echo stripcslashes($results->discountHeadline); ?></span></h4>
					</div>
					

					<?php if ($results->couponCheck == "2") { ?>
							<div class="span-grid unit">
								<strong class="myButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>">
									<input type="text" value="<?php echo stripcslashes($results->couponCode); ?>" class="couponCode" style="width: 160px; font-size: 17px;margin-left: 10px; margin-top: 5px; float: left" />
									<a href="<?php echo stripcslashes($results->couponLink); ?>" class="couponButton" style="float: left; width: 250px;  height: 40px;font-size: 21px; color: #fff; <?php if($results->buttonBG == '5') { ?> color: #333; <?php } ?> padding-top: 16px; margin-left: 13px; padding-left: 30px; margin-right: -30px; background: url(https://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/48x48/emblems/emblem-symbolic-link.png)  no-repeat left; background-position: 0 20px; text-align: left; "><span><?php echo stripcslashes($results->couponLinkText); ?></span></a>
								</strong>
							</div>
					<?php } else { ?>
							<div class="span-grid unit">
								<a href="<?php echo stripcslashes($results->buyNowURL); ?>" target="_blank" class="myButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>"><?php echo stripcslashes($results->buyNow); ?></a>


							</div>
					<?php } ?>

					<div class="span-grid unit cta">
						<h4 class="resizer" style="height: 20px;"><img src="https://cdn4.iconfinder.com/data/icons/sketchdock-ecommerce-icons/alert-square-red.png" class="alertImage" ><span class="alertHeadline"><?php echo stripcslashes($results->alertText); ?></span></h4>
					</div>
				






</div>
					
				
			</div>	
			<div class="one-of-two unit video">	

<?php if($results->video != '' && $results->customEmbed == '') { ?>
					<?php echo stripcslashes($results->video); ?>
				<?php } else { ?>
				<style>
					#customEmbed {
					}
		            #customEmbed p {
		                color: #fff;
		                font-size: 26px;
		                text-align: center;
		                
		                font-weight: bold;
		                background: url(http://www.huskermax.com/js/lightbox/overlay.png) repeat;
		                border: 1px solid #222;
		                box-shadow: 0 0 5px #000 inset;
		                padding: 20px;
		                width: 300px;
		                border-radius: 8px;
		                margin: 0 auto;
		                display: block;
		                letter-spacing: -1px;
		                text-shadow: 0 1px 0 #333;
		                cursor: pointer;
		            }
		            #bigCountdown {
		            	margin-top: 12px;
		            }
		        </style>
						<div id="customEmbed" style="width: 460px; height: 258.75px;">

<?php if($results->videoText != '') { ?>
				<div style="width: 100%; height: 23%"></div>
							<p class="textfill"><?php echo stripcslashes($results->videoText); ?>
							<img src="<?php echo stripcslashes($results->videoIcon); ?>" style="margin: 0 auto; display: block"></p>


				<?php }  ?>
				</div>
					<?php }  ?> 

				

				<div id="bigCountdown">

					<?php if($results->chooseDate == '1') { ?>
<div id="downtimer">
<div id="countdown" style="padding-left: 10px">
 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tenday">0</span>
			<span class="oneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="tenhour">0</span>
				<span class="onehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tenmin">0</span>
			<span class="onemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="tensec">0</span>
			<span class="onesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>
					<?php } ?>

					<?php if($results->chooseDate == '2') { ?>


					<div id="dydowntimer">
<div id="dycountdown" style="padding-left: 10px">

	 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytenday">0</span>
			<span class="dyoneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="dytenhour">0</span>
				<span class="dyonehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytenmin">0</span>
			<span class="dyonemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="dytensec">0</span>
			<span class="dyonesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>

</div>
				

					<?php } ?>


					<?php if($results->chooseDate == '3') { ?>


					<div id="wkdowntimer">
<div id="wkcountdown" style="padding-left: 10px">

	 <div id="days"  style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktenday">0</span>
			<span class="wkoneday">0</span>
		</p>
		<strong>Days</strong>
	</div> 

		<div id="hours" style="float: left; margin: 7px 6px;" class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
			<p>
				<span class="wktenhour">0</span>
				<span class="wkonehour">0</span>
			</p>
			<strong>Hours</strong>
		</div>
	
	<div id="minutes" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktenmin">0</span>
			<span class="wkonemin">0</span>
		</p>
		<strong>Minutes</strong>
	</div>
	<div id="seconds" style="float: left; margin: 7px 6px;"class="bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
		<p>
			<span class="wktensec">0</span>
			<span class="wkonesec">0</span>
		</p>
		<strong>Seconds</strong>
	</div>
</div>

</div>
				

					<?php } ?>

<?php } ?>
				<!-- <div id="bigCountdown">
						<div class="one-of-three unit bigDetail <?php echo stripcslashes($results->countdownColor); ?>  firstBigDetail" >
							<h4><span id="days"></span></h4>
							<strong>DAY(S)</strong>
						</div>
						<div class="one-of-three unit <?php echo stripcslashes($results->countdownColor); ?>  bigDetail">
							<h4><span id="hours"></span></h4>
							<strong>HOUR(S)</strong>
						</div>

						<div class="one-of-three unit <?php echo stripcslashes($results->countdownColor); ?>  bigDetail">
							<h4><span id="minutes"></span></h4>
							<strong>MIN.(S)</strong>
						</div>
						<div class="one-of-three unit <?php echo stripcslashes($results->countdownColor); ?>  bigDetail" style="margin-right: -10px">
							<h4><span id="seconds"></span></h4>
							<strong>SEC.(S)</strong>
						</div>
					</div> -->
			</div>
			
		</div>
	</div>
</div>
</div>
<div id="banner" >