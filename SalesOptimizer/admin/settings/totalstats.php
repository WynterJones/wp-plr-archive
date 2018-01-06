<?php 
	global $post;
	global $wpdb;
	$getPage = $wpdb->prefix . "salesoptimizer";
	$templates = $wpdb->get_results("SELECT * FROM $getPage ORDER BY id DESC" ,ARRAY_A);
	$convRates = array();	
    foreach($templates as $template) { 
		if(get_option('views'.'_'.$template['id']) == '') {
			update_option('views'.'_'.$template['id'], 0);
		}
		if(get_option('clicks'.'_'.$template['id']) == '') {
			update_option('clicks'.'_'.$template['id'], 0);
		}
		$views = get_option('views'.'_'.$template['id']);
		$clicks = get_option('clicks'.'_'.$template['id']);
		$totalViews = $views + $totalViews;
		$totalClicks = $clicks + $totalClicks;
		$counter = $counter + 1;
		if(get_option('clicks'.'_'.$template['id']) != '0' && get_option('views'.'_'.$template['id']) != '0') {
			$convRate = 100 * intval($clicks) / intval($views);
			$convRate = substr($convRate, 0, 2);
			$convRate = str_replace('.', '', $convRate);
		}
		else {
			$convRate = 0;
		}
		array_push($convRates, $convRate);
	}
	$highestRate = max($convRates);
?>
<div class="info">
	<div class="total views">
		<h3><?php echo $totalViews; ?></h3>
		<span>Total Views</span>
	</div>
	<div class="total clicks">
		<h3><?php echo $totalClicks; ?></h3>
		<span>Total Clicks</span>
	</div>
	<div class="total rate">
		<h3><?php echo $highestRate; ?>%</h3>
		<span>Highest Conv. Rate</span>
	</div>
	<div class="total shortcodes">
		<h3><?php echo $counter; ?></h3>
		<span>Shortcodes</span>
	</div>
</div>
<br clear="all" />