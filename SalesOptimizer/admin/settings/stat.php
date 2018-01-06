<?php 
	if(get_option('views'.'_'.$template['id']) == '') {
		update_option('views'.'_'.$template['id'], 0);
	}
	if(get_option('clicks'.'_'.$template['id']) == '') {
		update_option('clicks'.'_'.$template['id'], 0);
	}
	$views = get_option('views'.'_'.$template['id']);
	$clicks = get_option('clicks'.'_'.$template['id']);
	if(get_option('clicks'.'_'.$template['id']) != '0' && get_option('views'.'_'.$template['id']) != '0') {
		$convRate = 100 * intval($clicks) / intval($views);
		$convRateNumber = substr($convRate, 0, 2);
		$convRate = substr($convRate, 0, 2) . '%';
		$convRate = str_replace('.', '', $convRate);
	}
	else {
		$convRate = 0;
	}