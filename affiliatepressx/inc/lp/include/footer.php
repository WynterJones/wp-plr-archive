<!-- 

	// Footer Information
	// filename: footer.php

	// Copyright (c) 2013 - Gue.rrilla Marketing

 -->
	<div class="container" id="footer" style="margin-bottom: -20px;">
		<div class="grid">
			<div class="span-grid unit">
				<a id="smallLogo" href="http://www.wpaffiliatepress.com/" target="_blank" title="Powered by AffiliatePress" style="float: right; z-index: 99999; margin: 10px; margin-right: -20px; width: 200px; opacity: .8"><img src="../wp-content/plugins/affiliatepressx/inc/lp/assets/images/smallLogo.png" style=" width: 200px; opacity: .4"></a>
				<br>
				<?php echo stripcslashes($results->footer); ?>
			</div>
		</div>
	</div>
	<?php echo stripcslashes($results->jquery); ?>


	
<!-- Coupon Pop-up -->
<div id="couponPopup">
	<?php echo stripcslashes($results->couponContent); ?>
</div>
	


</body>
</html>