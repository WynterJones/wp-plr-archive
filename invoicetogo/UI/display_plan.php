	<script>
	function goBack()
	  {
	  window.history.back()
	  }
	</script>

	<div class="well">
	<!-- <img style="padding-top:10px; padding-right:10px;" align="right" src="<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/plan1.png"> -->

		<div class="" >
			<h1 style="" >Plan Level #<?php echo $_GET['plan']; ?></h1>
		</div>

		<a style='margin-bottom: 10px;' onclick="goBack()" class="uibutton large " >Go Back</a>
	</div>


<?php 
	
		// Display Plan Items:
		
		global $wpdb;
		$table_db_name = $wpdb->prefix . "oppro_plans";
		$plan = $_GET['plan'];
		
		$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE plan = '$plan' ", OBJECT);
		
		foreach($results as $results) {
		
	?>
	
			<div class="op_check" >

			<?php

			if($results->bullet == "1"){
				?>
				<img src="http://cdn3.iconfinder.com/data/icons/UltimateGnome/24x24/actions/dialog-apply.png" align="left" />
				<?php
			} 
			if($results->bullet == "2") {
				?>
				<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_05.png" align="left" />
				<?php
			}	

			?>

		
			</div>

			<div class="op_item">
			<a class="uibutton large" style="float: right; margin-top:20px; " href="<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard&edit_item=<?php echo $results->ID; ?>" >Edit Item</a>

			<h1 style="font-size:18px;" ><?php echo $results->heading; ?></h1>
			<?php

			if($results->blurb == ""){
				?>
				<p style="margin-top:-5px;" >no blurb for this item...</p>
				<?php
			} else {
				?>
				<p style="margin-top:-5px;" ><?php echo $results->blurb; ?></p>
				<?php
			}	

			?>
			

			</div>

			<br clear="all" />

			<div class="sepper"></div>

	
	<?php 
	
	}
	// EOA
	
	?>
	

	<!-- <div class="op_check" >
	<img src="http://cdn3.iconfinder.com/data/icons/UltimateGnome/24x24/actions/dialog-apply.png" align="left" />
	</div>

	<div class="op_item">
	<a class="uibutton large" style="float: right; margin-top:20px; " href="<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard&edit_item=3" >Edit Item</a>

	<h1 style="font-size:18px;" >Title Of Item</h1>
	<p style="margin-top:-5px;" >blurb about the item would be shown here...</p>

	</div>

	<br clear="all" />

	<div class="sepper"></div> -->




	<a class="uibutton large special" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=oppro-dashboard&new_item=<?php echo $_GET['plan']; ?>" >Add New Item</a>

	<p style="color:#9d9d9d;" >* items will be shown in the order as displayed above...</p>
