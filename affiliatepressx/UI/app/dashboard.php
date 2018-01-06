<div class="tabber" id="tab1">

	<div class="titleBar dashboard_icon">
		<span style="float: right; margin-top: 13px; margin-right: -20px;" id="deleteCampaign" class="grey-btn" ><img src="https://cdn3.iconfinder.com/data/icons/lynx/16x16/actions/dialog-close.png" style="margin-right: 5px;margin-bottom: -3px">Delete This Page</span>
		
		
		<h2>Your Dashboard</h2>
		<p>Learn how to create your deal landing pages:</p>
	</div>
<div >
	<iframe src="../wp-content/plugins/affiliatepressx/UI/seo_report/report.php?url=<?php echo get_permalink( $data->postID ); ?>&id=<?php echo $_GET['id']; ?>" id="seoReport_tab" class="tabby" style="display: none; width: 100%; height: 1150px" frameborder="0"></iframe>
	
</div>
<div id="support_tab" class="tabby" style="display: none">
	<div style="margin-top:15px; padding: 10px 20px"  > 
<iframe style="float: right; margin-right: -10px" width="400" height="255" src="//www.youtube.com/embed/eSh_IYFuwmU?rel=0;3&amp;autohide=1&amp;showinfo=0;autoplay=0;autohide=0;iv_load_policy=3;controls=1;modestbranding=1" frameborder="0" allowfullscreen></iframe>
	
<div style="float: left; width: 430px; paddding-right: 30px;">
			
	<h1>Let's Get Started...</h1>
	<img src="https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Gnome-Multimedia-Volume-Control-64.png" style="float: right; margin-left: 10px;">
	<p>Here you can customize all of the details of your landing page from the content, deal information, countdown, customize the design and much more. Add your auto-responder code and control each feature of your landing page.</p>
	<h3>How to Get More Help &amp; Support</h3>
	<img src="https://cdn2.iconfinder.com/data/icons/crystalproject/64x64/apps/help_index.png" style="float: right; margin-left: 10px;">
	<p>If you need more you can find a help PDF for each page at the top right of each tab in the settings. You can also access all of them as well as the support desk in the Support Center link at the very top of every page. Watch the video for a complete tour.</p>


	<br clear="both" />
	<div>
		<h2>View All-in-One Help Guide:</h2>
		<a href="http://www.wpaffiliatepress.com/help/AffiliatePress-Help.pdf" target="_blank" ><span style="float: left; margin-right: 10px" id="helpPDF" class="grey-btn" ><img src="https://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/pdf.png" style="margin-right: 5px; margin-bottom: -3px">Full Tutorial Help eBook</span></a>

	</div>
	<br clear="both" />

</div></div><br clear="both" />
</div>
<div id="started_tab" class="tabby" style="display: block">
<style>
	.goals input {
		width: 330px !important;
	}
	.goals .editSection {
		border: none;
		padding: 0 20px;
	}
</style>
<div class="goals" style="width: 370px; float: right; margin-top: 0px;">
	<?php 
display_field( 
	$_GET['id'],
	$results->viewGoal,
	"Total View Goal", 
	"viewGoal",
	"Total Number of Views You Want to Get"
);

display_field( 
	$_GET['id'],
	$results->clickGoal,
	"Total Clicks Goal", 
	"clickGoal",
	"Total Number of Clicks You Want to Get"
);
	 ?>
	 <div style="padding: 0 40px; color: #777;  ">
	 	<h3>What are your goals?</h3>
	 	<img src="https://cdn1.iconfinder.com/data/icons/Koloria-Icon-Set/30/Chart_Graph_Ascending.png" style="float: right; margin-left: 30px;">
	 <p>You need to know these! Set a number that you would like to attain and watch as the graph shows your progress.</p>
	 </div>
</div>
<!-- css bar graph -->
		<div class="css_bar_graph">
			
			<!-- y_axis labels -->
			<ul class="y_axis">
				<li>100%</li><li>80%</li><li>70%</li><li>60%</li><li>30%</li><li>0%</li>
			</ul>
			
			<!-- x_axis labels -->
			<ul class="x_axis">
				<li>Click Goal</li><li>View Goal</li><li>Conv. Rate</li><li>SEO Score</li>
			</ul>
			
			<!-- graph -->
			<div class="graph">
				<!-- grid -->
				<ul class="grid">
					<li><!-- 100 --></li>
					<li><!-- 80 --></li>
					<li><!-- 60 --></li>
					<li><!-- 40 --></li>
					<li><!-- 20 --></li>
					<li class="bottom"><!-- 0 --></li>
				</ul>
				
				<!-- bars -->
				<!-- 250px = 100% -->
				<ul>
					<li class="bar nr_1 orange" style="height: <?php echo substr((get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalClicks') / stripcslashes($results->clickGoal)) * 100, 0, 4) - 33; ?>%;"><div class="top"></div><div class="bottom"></div><span><?php echo substr((get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalClicks') / stripcslashes($results->clickGoal)) * 100, 0, 4); ?>%</span></li>
					<li class="bar nr_2 blue" style="height: <?php echo substr((get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalViews') / stripcslashes($results->viewGoal)) * 100, 0, 4) - 33; ?>%;"><div class="top"></div><div class="bottom"></div><span><?php echo substr((get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalViews') / stripcslashes($results->viewGoal)) * 100, 0, 4); ?>%</span></li>
					<li class="bar nr_3 green" style="height: <?php echo substr(get_option('affiliatepressx_campaign_'.$_GET['id'].'_totalClicks') / get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalViews') * 100, 0, 4) - 33; ?>%;"><div class="top"></div><div class="bottom"></div><span><?php echo substr(get_option('affiliatepressx_campaign_'.$_GET['id'].'_totalClicks') / get_option('affiliatepressx_campaign_'. $_GET['id'].'_totalViews') * 100, 0, 4); ?>%</span></li>
					<li class="bar nr_4 purple" style="height: <?php echo get_option('affiliatepressx_campaign_'.$_GET['id'].'_seoScore') - 33; ?>%;"><div class="top"></div><div class="bottom"></div><span><?php echo get_option('affiliatepressx_campaign_'.$_GET['id'].'_seoScore'); ?>%</span></li>
				</ul>	
			</div>
		</div>
			
		


	
</div>


	

	<div style="border-top: 1px dotted #e2e2e2; padding-top: 15px; margin-top: 25px; ">
		<span style="margin: 10px 0; float: left; padding-left: 10px; color: #888">
			<img src="https://cdn3.iconfinder.com/data/icons/uidesignicons/information.png" style="float: left; margin-right: 7px">
			Need help? Check out the PDF tutorials at the top right of each page.
		</span>
		
		<br clear="right" />
	</div>



</div>

