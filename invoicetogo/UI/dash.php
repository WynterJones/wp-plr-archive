<?php  

	
?>

<div id="dashboard" style="display: <?php echo $statusofID; ?>;">

		<ul class="nav nav-tabs">
			  
			  <li class="active tabNav" id="design" ><a href="#" style="text-decoration: none;" >
			  	<img src="http://cdn3.iconfinder.com/data/icons/UltimateGnome/24x24/actions/gnome-searchtool.png" style="margin-bottom:-5px; margin-right:5px;" />
			  	Design & Copy Settings</a></li>
			  
			  <li class="tabNav" id="copy" ><a href="#" style="text-decoration: none;" >
			  	<img src="http://cdn2.iconfinder.com/data/icons/finance_icons/PNG/png24/coins.png" style="margin-bottom:-5px; margin-right:5px;" />
			  	3 Tier Plan Settings</a></li>
			  
			  <li class="tabNav" id="ar" ><a href="#" style="text-decoration: none;" >
				<img src="http://cdn5.iconfinder.com/data/icons/pursuit/24/person.png" style="margin-bottom:-5px; margin-right:5px;" />
			  	Personalized Campaigns</a></li>
			
			</ul>


			<div class="tabbIt" id="tab_design">
				<?php include("copy.php"); ?>
			</div>

			<div class="tabbIt" id="tab_copy" style="display:none;">
				<?php include("plans.php"); ?>
			</div>

			<div class="tabbIt" id="tab_ar" style="display:none;">
				<?php include("campaigns.php"); ?>
			</div>


	



	
</div>