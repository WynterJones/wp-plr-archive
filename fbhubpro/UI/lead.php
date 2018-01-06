<?php  

	global $wpdb;
	$table_db_name = $wpdb->prefix . "fbhubpro";
	
	$ID = $_GET['lead'];
	
	$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$ID'", OBJECT);
	
	foreach($results as $results) {}

?>

<div id="editdep">

	<div class="well">
		
			<div id="depTitle">
				
				<h1><?php echo $results->title; ?></h1>
				<p><b>created:</b> <?php echo $results->created; ?></p>
				
			</div>
			
			<div class="depStat2">
				
				<h1><?php echo $results->total_optins; ?></h1>
				<p>total optins</p>
				
			</div>
			
			<div class="depStat3">
				
				<h1><?php echo $results->total_shares; ?></h1>
				<p>total shares</p>
				
			</div>
			
			<div class="depStat1">
				
				<h1><?php echo $results->total_views; ?></h1>
				<p>total views</p>
				
			</div>
	
			<br clear="all" >
	
	</div>
		
	<table width="820" >
	
	<thead>
	  <tr>
	    <th align="left" style=" border-bottom: 1px solid #d5d5d5; padding-top: 15px; padding-bottom: 15px; " >Name:</th>
	    <th align="left" style=" border-bottom: 1px solid #d5d5d5; padding-top: 15px; padding-bottom: 15px; " >E-Mail:</th>
	    <th align="left" style=" border-bottom: 1px solid #d5d5d5; padding-top: 15px; padding-bottom: 15px; " >Date Signed Up:</th>
	  </tr>
	</thead>
	
	<tbody>	
	<?php 
	
		$table_db_name = $wpdb->prefix . "fbhubpro_leads";
		$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign = '$ID'", OBJECT);
		
		foreach($results as $results) {
		?>
		
			
				<tr style=" border-bottom: 1px solid #333; " >
					<td width="33%" style=" border-bottom: 1px solid #d5d5d5; padding-top: 15px; padding-bottom: 15px; " ><?php echo $results->name; ?></td>
					<td style=" border-bottom: 1px solid #d5d5d5; padding-top: 15px; padding-bottom: 15px; " width="33%" ><?php echo $results->email; ?></td>
					<td style=" border-bottom: 1px solid #d5d5d5; padding-top: 15px; padding-bottom: 15px; " width="33%"><?php echo $results->created; ?></td>
				</tr>
		
		<?php
		}
	?>
	
	</tbody>
	
	</table>
	
	<a href="<?php echo site_url(); ?>/wp-content/plugins/fbhubpro/inc/csv.php?id=<?php echo $_GET['lead']; ?>" class="uibutton large special" target="_blank" style="margin-top: 15px;" >Export To CSV</a>
		

</div>