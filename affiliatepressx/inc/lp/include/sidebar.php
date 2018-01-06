<!-- 

	// Sidebar (List, Image and Mini-Deal)
	// filename: sidebar.php

	// Copyright (c) 2013 - Gue.rrilla Marketing

 -->

 		<div class="one-of-five unit sidebar">
 			<a href="<?php echo stripcslashes($results->buyNowURL); ?>" id="smallAd" target="_blank"><img src="<?php echo stripcslashes($results->bannerSmall); ?>" class="smallAd"></a>
 			<?php echo stripcslashes($results->sidebarContent); ?>
 			<br>
 			<!-- <hr>
			<div id="list">
	 			<h5><?php echo stripcslashes($results->listItem1); ?></h5>
	 			<h5><?php echo stripcslashes($results->listItem2); ?></h5>
	 			<h5><?php echo stripcslashes($results->listItem3); ?></h5>
	 			<h5><?php echo stripcslashes($results->listItem4); ?></h5>
 			</div>
			<hr> -->
 			<br>
 			<div id="miniDeal">
 					<div class="one-of-three unit smallDetail firstDetail">
						<strong class="resizer"><span><?php echo stripcslashes($results->priceSmall); ?></span></strong>
						<h4 class="resizer" style="height: 40px; margin-top: -2px"><span><?php echo stripcslashes($results->priceHeadline); ?></span></h4>
					</div>
					<div class="one-of-three unit smallDetail">
						<strong class="resizer"><span><?php echo stripcslashes($results->regSmall); ?></span></strong>
						<h4 class="resizer" style="text-decoration: line-through; color: #777; height: 40px; margin-top: -2px"><span><?php echo stripcslashes($results->regHeadline); ?></span></h4>
					</div>
					<div class="one-of-three unit smallDetail lastDetail">
						<strong class="resizer"><span><?php echo stripcslashes($results->discountSmall); ?></span></strong>
						<h4 class="resizer" style="height: 40px; margin-top: -2px" class="special_deal"><span><?php echo stripcslashes($results->discountHeadline); ?></span></h4>
					</div>
					

					<?php if ($results->couponCheck == "2") { ?>
							<div class="span-grid unit">
								<strong class="">
									<input type="text" value="<?php echo stripcslashes($results->couponCode); ?>" class="couponCode" />
								</strong>
							</div>
							<div class="span-grid unit">
								<a  href="<?php echo stripcslashes($results->couponLink); ?>" target="_blank" class="myButton resizer couponButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>"><span><?php echo stripcslashes($results->couponLinkText); ?></span></a>
							</div>
					<?php } else { ?>
							<div class="span-grid unit">
								<a href="<?php echo stripcslashes($results->buyNowURL); ?>" target="_blank" class="myButton buttonColor<?php echo stripcslashes($results->buttonBG); ?>"><?php echo stripcslashes($results->buyNow); ?></a>
							</div>
					<?php } ?>

				

				<div id="bigCountdown" style="margin-left: -18px !important; margin-top: 10px !important">

					<?php if($results->chooseDate == '1') { ?>
<div id="downtimer">
<div id="countdown2" style="padding-left: 10px">
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
<div id="dycountdown2" style="padding-left: 10px">

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
<div id="wkcountdown2" style="padding-left: 10px">

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
					
					<!-- <div id="bigCountdown">
						<div class="one-of-three unit bigDetail <?php echo stripcslashes($results->countdownColor); ?>  firstBigDetail" >
							<h4><span id="days"></span></h4>
							<strong>DAYS</strong>
						</div>
						<div class="one-of-three unit bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
							<h4><span id="hours"></span></h4>
							<strong>HOURS</strong>
						</div>

						<div class="one-of-three unit bigDetail <?php echo stripcslashes($results->countdownColor); ?>">
							<h4><span id="minutes"></span></h4>
							<strong>MIN.</strong>
						</div>
						<div class="one-of-three unit bigDetail <?php echo stripcslashes($results->countdownColor); ?>" style="margin-right: -10px">
							<h4><span id="seconds"></span></h4>
							<strong>SEC.</strong>
						</div>
					</div> -->
<br clear="all">
<div style="padding:  20px 18px; padding-right: 35px;">
	<?php echo stripcslashes($results->sidebarContent2); ?>
</div>

 			</div>
 		</div>
 	</div>
 </div></div>