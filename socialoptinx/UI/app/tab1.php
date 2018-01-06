<div class="tabber" id="tab1">

	<div class="titleBar">
		<i class="fa fa-dashboard" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Track Your Social Page</strong></h2>
		<p>Get all the detailed insights about your social page in your dashboard.</p>
	</div>

	<br>
	<div style="text-align: center; padding-top: 0; ">
		<?php 
		ini_set( "display_errors", 0); 
if($results->url != '') {
		 $obj=new shareCount($results->url);  //Use your website or URL
$social = $social + $obj->get_tweets(); //to get tweets
$social = $social + $obj->get_fb(); //to get facebook total count (likes+shares+comments)
$social = $social + $obj->get_linkedin(); //to get linkedin shares
$social = $social + $obj->get_plusones(); //to get google plusones
$social = $social + $obj->get_delicious(); //to get delicious bookmarks  count
$social = $social + $obj->get_stumble(); //to get Stumbleupon views
$social = $social + $obj->get_pinterest(); //to get pinterest pins
}
// Calculate CTR (Click Through Rate)

		$views = get_option('clicks'.'_'.$_GET['id']);
	$clicks = get_option('clicks'.'_'.$_GET['id']) ;
	if($clicks != '0' && $views != '0') {
		$convRate = 100 * intval($clicks) / intval($views);
		$convRateNumber = substr($convRate, 0, 2);
		$convRate = substr($convRate, 0, 2);
		$convRate = str_replace('.', '', $convRate);
	}
	else {
		$convRate = 0;
	}

		 ?>
				<!-- Views -->
				<span class="helper " rel="tooltip" data-placement="top" data-original-title="Total Pages Views" style="width: 115px; margin-right: 5px;border:1px solid #ccc;border-radius: 5px; background: #fafafa;padding: 10px 0;float: left;"><span style="font-size: 21px;font-weight: bold;" id="views"><?php if(get_option($_GET['id'].'_views') != '') { echo get_option($_GET['id'].'_views') / 2; } else { echo '0'; } ?></span> <strong style="display: block;"><i class="fa fa-eye"></i> Views</strong></span>
				<!-- Shares -->
				<span class="helper " rel="tooltip" data-placement="top" data-original-title="Social Page Shares" style="width: 115px;margin-right: 5px;border:1px solid #ccc;border-radius: 5px; background: #fafafa;padding: 10px 0;float: left;"><span style="font-size: 21px;font-weight: bold;" id="shares"><?php if( $social != '') {  echo $social; } else { echo '0';} ?></span> <strong style="display: block;"><i class="fa fa-heart"></i> Shares</strong></span>
				<!-- Leads -->
				<span class="helper " rel="tooltip" data-placement="top" data-original-title="Total Leads Collected" style="width: 115px;margin-right: 5px;border:1px solid #ccc;border-radius: 5px; background: #fafafa;padding: 10px 0;float: left;"><span style="font-size: 21px;font-weight: bold;" id="leads"><?php if(get_option('leads'.'_'.$_GET['id']) != '') { echo get_option('leads'.'_'.$_GET['id']); } else { echo '0'; } ?></span> <strong style="display: block;"><i class="fa fa-user"></i> Leads</strong></span>
				<!-- Clicks -->
				<span class="helper " rel="tooltip" data-placement="top" data-original-title="Total Link Clicks" class="helper " rel="tooltip" data-placement="top" data-original-title="adas" style="width: 115px;margin-right: 5px;border:1px solid #ccc;border-radius: 5px; background: #fafafa;padding: 10px 0;float: left;"><span style="font-size: 21px;font-weight: bold;" id="clicks"><?php if(get_option('clicks'.'_'.$_GET['id']) != '') { echo get_option('clicks'.'_'.$_GET['id']); } else { echo '0'; } ?></span> <strong style="display: block;"><i class="fa fa-external-link-square"></i> Clicks</strong></span>
				<!-- CTR -->
				<span class="helper " rel="tooltip" data-placement="top" data-original-title="Click Through Rate" style="width: 115px;margin-right: 5px;border:1px solid #ccc;border-radius: 5px; background: #fafafa;padding: 10px 0;float: left;"><span style="font-size: 21px;font-weight: bold;" id="ctr"><?php echo $convRate; ?>%</span> <strong style="display: block;"><i class="fa fa-money"></i> CTR</strong></span>
				<!-- Agree -->
				<span class="helper " rel="tooltip" data-placement="top" data-original-title="People That Agree" style="width: 115px;margin-right: 5px;border:1px solid #ccc;border-radius: 5px; background: #fafafa;padding: 10px 0;float: left;color: #D44B47"><span style="font-size: 21px;font-weight: bold;" id="agree"><?php if(get_option('agree'.'_'.$_GET['id']) != '') { echo get_option('agree'.'_'.$_GET['id']); } else { echo '0'; } ?></span> <strong style="display: block;"><i class="fa fa-check"></i> Agree</strong></span>
				<!-- Disagree -->
				<span class="helper " rel="tooltip" data-placement="top" data-original-title="People That Disagree" style="width: 115px;margin-right: 5px;border:1px solid #ccc;border-radius: 5px; background: #fafafa;padding: 10px 0;float: left; color: #54AE54"><span style="font-size: 21px;font-weight: bold;" id="disagree"><?php if(get_option('disagree'.'_'.$_GET['id']) != '') { echo get_option('disagree'.'_'.$_GET['id']); } else { echo '0'; } ?></span> <strong style="display: block;"><i class="fa fa-times"></i> Disagree</strong></span>
			</div>
			<br clear="all">
			<?php 

			display_field( 
			 	$_GET['id'],
			 	$results->url,
			 	"Page URL for Social Count", 
			 	"url",
			 	"Add URL to Your Page to Count Social Shares"
			 );

			display_field( 
				$_GET['id'],
				$results->next,
				"Next Page URL", 
				"next",
				"URL for The Next Arrow"
			);

			display_field( 
				$_GET['id'],
				$results->prev,
				"Previous Page URL", 
				"prev",
				"URL for The Previous Arrow"
			);

			  ?>
	
	<?php 

	// Add Your Inputs


	?>

	



</div>