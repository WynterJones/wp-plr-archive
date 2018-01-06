<?php

define('WP_USE_THEMES', false);
	
	require('../../../../../wp-blog-header.php');


	$title = "Report";
	
	////////////////////////////////
	// Include Required Resources //
	////////////////////////////////
	
	require "includes/header.php";
	require "addons/blacklist/black.check.php";
	require "includes/dom.php";
	
	///////////////////////////
	// Process the Input URL //
	///////////////////////////
	
	$inputLink = $_POST['url'];
	if($_GET['url']) $inputLink = $_GET['url'];
	
	$linkParsed = parse_url($inputLink);
	if($linkParsed === false) {
		echo "<h2>Report Error</h2>";
		echo "<p>Failed to generate an SEO report.</p>";
		echo "<p>The URL entered is extremely malformed.</p>";
		
		require "includes/footer.php";
		exit;
	}
	
	$webLink = array(
		'CompleteURL' => $inputLink,
		'Domain' => $linkParsed['host'],
		'Scheme' => $linkParsed['scheme']
	);
	
	// Alternative variables for $webLink contents //
	
	$wwwDirectLink = $inputLink;
	$wwwShortName = $webLink['Domain'];
	
	// Check that the link is working //
	
	$microTime = explode(" ", microtime()); 
	$startTime = $microTime[1] + $microTime[0]; // Let's see how long it takes to load.
	
	$f = file_get_contents($wwwDirectLink);
	if(!$f) {
		echo "<h2>Report Error</h2>";
		echo "<p>Failed to generate an SEO report.</p>";
		echo "<p>The website failed to load, for some strange reason. Some possible causes include 1) the server is down 2) the page is in a redirect loop or 3) the website has misconfigured DNS.</p>";
		
		require "includes/footer.php";
		exit;
	}
	
	$microTime = explode(" ", microtime()); 
	$endTime = $microTime[1] + $microTime[0]; // Alright, not too long. Just a few lines.
	
	$totalTime = ($endTime - $startTime); 
	
	// Create separate arrays for different SEO factors used throughout the script //
	
	$webInformation = array(
		'Hostname' => gethostbyname($wwwShortName),
		'TimeToLoad' => $totalTime,
		'Blacklisted' => dnsbllookup($webInformation["Hostname"])
	);
	
	// Required Functions //
	
	function FormatScore($percent) {
		if($percent < 25) return "<font color='#E51400'>$percent%</font>";
		if($percent >= 25 && $percent < 75) return "<font color='#F09609'>$percent%</font>";
		if($percent >= 75) return "<font color='#339933'>$percent%</font>";
	}
	function ScoreColor($percent) {
		if($percent < 25) return "#E51400";
		if($percent >= 25 && $percent < 75) return "#F09609";
		if($percent >= 75) return "#339933";
	}
	
	function ScoreIt($value, $goal, $allowOpposite = true, $limitToGoal = false, $opposite = false, $doCount = true) {
		global $totalPointsAvail;
		global $totalPointsGot;
		
		if($limitToGoal && $value > $goal) $value = $goal;
		if($allowOpposite && $value > $goal) $value = $goal - ($value - $goal);
		
		if($doCount) {
			$totalPointsAvail = $totalPointsAvail + $goal;
			$totalPointsGot = $totalPointsGot + $value;
		}
		
		if($opposite) return FormatScore(round(100 - (($value / $goal) * 100)));
		else return FormatScore(round(($value / $goal) * 100));
	}
	
	function StatusIcon($result, $good, $okay, $bad) {
		$goodReturn = '<img src="resources/img/Good.png" class="StatusIcon" />';
		$okReturn = '<img src="resources/img/Warning.png" class="StatusIcon" />';
		$badReturn = '<img src="resources/img/Bad.png" class="StatusIcon" />';
		
		$current = null;
		
		if(is_array($good)) { if($result >= ($good[0]) && $result <= ($good[1])) $current = $goodReturn; }
		if(is_array($okay)) { if($result >= ($okay[0]) && $result <= ($okay[1])) $current = $okReturn; }
		if(is_array($bad)) { if($result >= ($bad[0]) && $result <= ($bad[1])) $current = $badReturn; }
		else if($result >= $bad) $current = $badReturn;
		
		return $current;
	}
	
	function Good($t = '') { return '<img src="resources/img/Good.png" class="StatusIcon" title="'.$t.'" />'; }
	function Ok($t = '') { return '<img src="resources/img/Warning.png" class="StatusIcon" title="'.$t.'" />'; }
	function Bad($t = '') { return '<img src="resources/img/Bad.png" class="StatusIcon" title="'.$t.'" />'; }
	
	// Ranking Information //
	
	$rankInformation = array();
	
	$googleResult1 = file_get_html("https://www.google.com/search?q=" . urlencode('"'.$wwwShortName.'"'));
	$googleResult2 = file_get_html("https://www.google.com/search?q=" . urlencode('"'.str_replace("www.", "", $wwwShortName).'"'));
	
	$googleResults1 = $googleResult1->find('div[id=resultStats]', 0)->innertext;
	$googleResults1 = str_replace("About ", "", $googleResults1);
	$googleResults1 = str_replace(" results", "", $googleResults1);
	$googleResults1 = str_replace(",", "", $googleResults1);
	
	$googleResults2 = $googleResult2->find('div[id=resultStats]', 0)->innertext;
	$googleResults2 = str_replace("About ", "", $googleResults2);
	$googleResults2 = str_replace(" results", "", $googleResults2);
	$googleResults2 = str_replace(",", "", $googleResults2);
	
	$totalLinks = $googleResults1 + $googleResults2;
	$rankInformation["WebLinks"] = $totalLinks;
	
	$websiteResult = file_get_html( $wwwDirectLink );
	
	// Get: Keywords //
	
	$metaElements = $websiteResult->find( "meta[name=keywords]" );
	$metaKeywords =  $metaElements[0]->content;
	
	$metaKeywords = explode(",", $metaKeywords);
	foreach($metaKeywords as $i=>$kw) {
		$metaKeywords[$i] = trim($kw);
	}
	
	$rankInformation["MetaTags"] = $metaKeywords;
	
	// Get: Description //
	
	$metaElements = $websiteResult->find( "meta[name=description]" );
	$metaDescription = $metaElements[0]->content;
	
	$rankInformation["MetaDesc"] = $metaDescription;
	
	// Get: Title //
	
	$titleraw = $websiteResult->find('title', 0);
	$title = $titleraw->innertext;
	
	$rankInformation["PageTitle"] = $title;
	
	// Get: Body Text //
	
	$titleraw = $websiteResult->find('body', 0);
	$title = $titleraw->innertext;
	
	$rankInformation["BodyContents"] = $title;
	
	// Get the Pagerank //
	
	$page_rank = GooglePageRankChecker::getRank(@$wwwShortName); // found at "/includes/dom.php" (near bottom)
	$wwwPageRank = $page_rank;
	
	// Let's make an array of all the links on the webpage, with their attributes. //
	
	$links = array();
	
	$linkQuery = $websiteResult->find("a");
	foreach($linkQuery as $x) {
		$links[] = array(
			'href' => $x->href,
			'rel' => $x->rel,
			'text' => $x->innertext
		);
	}
	
?>

	<div id="TitleBar">
		<div class="column-2">
			<h2>Search Optimization Report</h2>
		</div>
		<div id="ScoreBox" class="column-2" style="text-align: right; padding-right: 0px; width: 50%;">
			<div style="margin-top: 35px; display: inline-block; background: #EEE; padding: 10px 25px; color: #FFF; font-size: 1.5em; font-weight: bold;">
				LOADING...
			</div>
		</div>
		<div class="clear"></div>
		<p style="margin-bottom: 20px;"></p>
	</div>
	
	<table class="BlueTable" width="100%" cellspacing="0px" cellpadding="10px">
		
		<tr class="HeadRow">
			<td width="200">Name</td>
			<td>Content and Information</td>
			<td width="150" style="text-align: center;">Score</td>
		</tr>
		
		<tr class="Odd">
			<td class="Column Name">Current Pagerank</td>
			<td>This website has a current Google Pagerank reading of <b><?=number_format($wwwPageRank);?></b>.</td>
			<td class="Column Score"><?=ScoreIt($wwwPageRank, 2, false, true);?></td>
		</tr>
		
		<tr class="Even">
			<?php
				$wwwWebsiteURL = 0;
				
				if(strlen(str_replace("www.", "", $wwwShortName)) <= 12) $wwwWebsiteURL++;
				if(strlen(str_replace("www.", "", $wwwShortName)) <= 15) $wwwWebsiteURL++;
				if(strlen(str_replace("www.", "", $wwwShortName)) <= 18) $wwwWebsiteURL++;
				if(strlen(str_replace("www.", "", $wwwShortName)) <= 24) $wwwWebsiteURL++;
				if(strlen(str_replace("www.", "", $wwwShortName)) <= 36) $wwwWebsiteURL++; // A little long!
			?>
			<td class="Column Name">Website URL</td>
			<td><?=$wwwShortName;?></td>
			<td class="Column Score"><?=ScoreIt($wwwWebsiteURL, 5, true, true);?></td>
		</tr>
		
		<tr class="Odd">
			<td class="Column Name">Blacklist Records</td>
			<td><?=number_format(count($webInformation['Blacklisted']));?> blacklists have listed this host.</td>
			<td class="Column Score"><?=ScoreIt(count($webInformation['Blacklisted']), 1, false, true, true);?></td>
		</tr>
		
		<tr class="Even">
			<?php
				$time = round($webInformation["TimeToLoad"], 2);
				$timeScore = 0;
				
				if($time < 1) $timeScore = 5;
				elseif($time < 2) $timeScore = 4;
				elseif($time < 3) $timeScore = 3;
				elseif($time < 5) $timeScore = 2;
				elseif($time < 10) $timeScore = 1;
			?>
			<td class="Column Name">Website Speed</td>
			<td>This website loaded in about <b><?=$time;?> seconds</b>.</td>
			<td class="Column Score"><?=ScoreIt($timeScore, 5, false, true);?></td>
		</tr>
		
		<tr class="HeadRow">
			<td colspan=3>Content and Settings</td>
		</tr>
		
		<tr class="Odd">
			<?php
				$domain = str_replace("www.", "", $wwwShortName);
				$domainScore = 0;
				$domainNameNotes = "";
				
				if(strlen($domain) < 14) $domainScore++;
				if(strlen($domain) < 19) $domainScore++;
				if(strlen($domain) < 24) $domainScore++;
				
				if((strpos($domain, '-') !== false) || (strpos($domain, '_') !== false)) {
					$domainNameNotes .= "Your domain name contains symbols that can make an impact on memorization. ";
				}
				else {
					$domainScore++;
				}
				
				$tld = substr($domain,strrpos($domain, '.')+1);
				if($tld == 'com' || $tld == 'net' || $tld == 'org') $domainScore++;
				else $domainNameNotes .= "You are using a TLD ($tld) that is not specifically favored by most search engines. ";
				
				if($domainNameNotes == '') $domainNameNotes = 'Great. This domain name is as perfect as perfect can be!';
			?>
			<td class="Column Name">Domain Name Rating</td>
			<td><?=$domainNameNotes;?></td>
			<td class="Column Score"><?=ScoreIt($domainScore, 5, false, true);?></td>
		</tr>
		
		<tr class="Even">
			<?php
				$titleScore = 0;
				
				$title = strlen($rankInformation["PageTitle"]);
				if($title < 10 && $title > 3) $titleScore++;
				if($title > 5) $titleScore++;
				if($title > 5 && $title < 50) $titleScore++;
				if($title < 20) $titleScore++;
			?>
			<td class="Column Name">Homepage Title Rating</td>
			<td>"<?=$rankInformation["PageTitle"];?>" </td>
			<td class="Column Score"><?=ScoreIt($titleScore, 4, true);?></td>
		</tr>
		
		<tr class="Odd">
			<?php
				$descScore = 0;
				$desc = strlen($rankInformation["MetaDesc"]);
				
				if($desc < 190) $descScore = 4;
				elseif($desc < 215) $descScore = 3;
				elseif($desc < 235) $descScore = 2;
				elseif($desc < 265) $descScore = 1; 
			?>
			<td class="Column Name">Description Rating</td>
			<td>
				<div style="max-height: 98px; overflow-y:auto;">
					"<?=$rankInformation["MetaDesc"];?>" 
				</div>
			</td>
			<td class="Column Score"><?=ScoreIt($descScore, 4, true);?></td>
		</tr>
		
		<tr class="Even">
			<?php
				$tagScore = 0;
				$tags = count($rankInformation["MetaTags"]);
				$tagsarr = $rankInformation["MetaTags"];
				
				if($tags <= 1) $tagScore = 5;
				elseif($tags > 1 && $tags < 5) $tagScore = 5;
				elseif($tags > 1 && $tags < 15) $tagScore = 4;
				elseif($tags > 1 && $tags < 25) $tagScore = 3;
				elseif($tags > 1 && $tags < 50) $tagScore = 2;
				elseif($tags > 1 && $tags < 100) $tagScore = 1;
			?> 
			<td class="Column Name">Keywords Rating</td>
			<td>
				<div style="max-height: 98px; overflow-y:auto;">
					<?php if($tagsarr[0] == '' && $tags == 1) { ?>No keywords/tags identified.<?php } else { ?>"<?php foreach($rankInformation["MetaTags"] as $i=>$tag) { if($tag != '') { echo $tag; if($i != $tags) echo ', '; } } ?>"<?php } ?>
				</div>
			</td>
			<td class="Column Score"><?=ScoreIt($tagScore, 5, true);?></td>
		</tr>
		
		<tr class="Odd">
			<?php
				$body = $rankInformation["BodyContents"];
				
				$mentions = 0;
				foreach($tagsarr as $tag) {
					if($tag != '') {
						if(strpos($body, $tag) !== false) $mentions++;
					}
				}
				
				$mentions2 = $mentions;
				if($tags <= 1) $mentions2 = 1;
			?>
			<td class="Column Name">Rich Content Rating</td>
			<td>A total of <b><?=number_format($mentions);?></b> of your keywords are mentioned on the site.</td>
			<td class="Column Score"><?=ScoreIt($mentions2, $tags, false);?></td>
		</tr>
		
		<tr class="HeadRow">
			<td colspan=3>Links and Mentions</td>
		</tr>
		
		<tr class="Odd">
			<?php
				$number = $totalLinks;
				$score = 0;
				
				if($number > 100) $score++;
				if($number > 1000) $score++;
				if($number > 5000) $score++;
				if($number > 10000) $score++;
				if($number > 25000) $score++;
			?>
			<td class="Column Name">Domain Mentions</td>
			<td>A total of <b><?=number_format($number);?></b> websites mentioned this domain name.</td>
			<td class="Column Score"><?=ScoreIt($score, 5, false, true);?></td>
		</tr>
		
		<tr class="HeadRow">
			<td colspan=3>Web Formatting</td>
		</tr>
		
		<tr class="Odd">
			<?php
				$images = 0;
				$alts = 0;
				
				foreach($websiteResult->find('img') as $img) {
					$images++;
					
					if($img->alt && $img->alt != '') {
						$alts++;
					}
				}
				
				$images2 = $images; if($images2 == 0) $images2 = 1;
				$alts2 = $alts; if($alts2 == 0 && $images == 0) $alts2 = 1;
			?>
			<td class="Column Name">Image ALT Tags</td>
			<td>Of all <b><?=number_format($images);?></b> images on this webpage, <b><?=number_format($alts);?></b> had alt attributes.</td>
			<td class="Column Score"><?=ScoreIt($alts2, $images2, false, true);?></td>
		</tr>
		
		<tr class="Even">
			<?php
				$images = 0;
				$alts = 0;
				
				foreach($websiteResult->find('img') as $img) {
					$images++;
					
					if($img->title && $img->title != '') {
						$alts++;
					}
				}
				
				$images2 = $images; if($images2 == 0) $images2 = 1;
				$alts2 = $alts; if($alts2 == 0 && $images == 0) $alts2 = 1;
			?>
			<td class="Column Name">Image Titles</td>
			<td>Of all <b><?=number_format($images);?></b> images on this webpage, <b><?=number_format($alts);?></b> had titles set.</td>
			<td class="Column Score"><?=ScoreIt($alts2, $images2, true, false, false, false);?></td>
		</tr>
		
		<tr class="Odd">
			<?php
				$images = 0;
				
				foreach($websiteResult->find('h1') as $img) { $images++; }
			?>
			<td class="Column Name">Title Headers</td>
			<td>This website had a total of <b><?=number_format($images);?></b> header tags used. These help engines categorize.</td>
			<td class="Column Score"><?=ScoreIt($images, 1, false, true, false, false);?></td>
		</tr>
		
		<tr class="HeadRow">
			<td colspan=3>Search Engine Resources</td>
		</tr>
		
		<tr class="Odd">
			<?php
				$robotsFound = "Not Found";
				$robotsFoundNum = 0;
				
				$file = $wwwDirectLink . "/robots.txt";
				$file_headers = @get_headers($file);
				if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
					
				} 
				else {
					$robotsFound = "Found";
					$robotsFoundNum = 1;
				}
			?>
			<td class="Column Name">Robots.txt File</td>
			<td><b><?=$robotsFound;?></b> : http://<?=$wwwShortName;?>/robots.txt</td>
			<td class="Column Score"><?=ScoreIt($robotsFoundNum, 1, false, true);?></td>
		</tr>
		
		<tr class="HeadRow">
			<td colspan=3>Website Links</td>
		</tr>
		
		<tr class="Odd">
			<?php
				$inBoundLinks = 0;
				foreach($links as $link) {
					$linkUrl = parse_url($link['href']);
					
					if($linkUrl === false || $linkUrl['host'] == $wwwShortName) {
						$inBoundLinks++;
					}
					elseif((substr($link['href'], 0, 2) != "//") && (substr($link['href'], 0, 1) == "/")) {
						$inBoundLinks++;
					}
				}
				
				$inBoundScore;
				if($inBoundLinks < 25) $inBoundScore = 5;
				elseif($inBoundLinks < 50) $inBoundScore = 4;
				elseif($inBoundLinks < 100) $inBoundScore = 3;
				elseif($inBoundLinks < 150) $inBoundScore = 2;
				elseif($inBoundLinks < 200) $inBoundScore = 1; // The "ideal" site structure.
				else $inBoundScore = 0;
			?>
			<td class="Column Name">Inbound Links</td>
			<td>This website has a total of <b><?=number_format($inBoundLinks);?></b> inbound links.</td>
			<td class="Column Score"><?=ScoreIt($inBoundScore, 5, false, true);?></td>
		</tr>
		
		<tr class="Even">
			<?php
				$outBoundLinks = 0;
				foreach($links as $link) {
					$linkUrl = parse_url($link['href']);
					
					if($linkUrl !== false && $linkUrl['host'] != $wwwShortName) {
						$outBoundLinks++;
					}
					elseif((substr($link['href'], 0, 2) == "//") && (substr($link['href'], 0, 1) != "/")) {
						$outBoundLinks++;
					}
				}
				
				$outBoundScore;
				if($outBoundLinks < 5) $outBoundScore = 5;
				elseif($outBoundLinks < 15) $outBoundScore = 4;
				elseif($outBoundLinks < 25) $outBoundScore = 3;
				elseif($outBoundLinks < 50) $outBoundScore = 2;
				elseif($outBoundLinks < 75) $outBoundScore = 1; // The common "max" outbound links. It's really 100, but 75+ will hurt PR drastically.
				else $outBoundScore = 0;
			?>
			<td class="Column Name">Outbound Links</td>
			<td>This website has a total of <b><?=number_format($outBoundLinks);?></b> outbound links.</td>
			<td class="Column Score"><?=ScoreIt($outBoundScore, 1, false, true);?></td>
		</tr>
		
		<tr class="Odd">
			<?php
				$doFollowLinks = 0;
				foreach($links as $link) {
					$linkRel = $link['rel'];
					
					if($linkRel == 'dofollow') $doFollowLinks++;
				}
				
			?>
			<td class="Column Name">DoFollow Links</td>
			<td>This website has a total of <b><?=number_format($doFollowLinks);?></b> DoFollow links.</td>
			<td class="Column Score"><font color='#339933'>100%</font></td>
		</tr>
		
		<tr class="Even">
			<?php
				$noFollowLinks = 0;
				foreach($links as $link) {
					$linkRel = $link['rel'];
					
					if($linkRel == 'nofollow') $noFollowLinks++;
				}
				
			?>
			<td class="Column Name">NoFollow Links</td>
			<td>This website has a total of <b><?=number_format($noFollowLinks);?></b> NoFollow links.</td>
			<td class="Column Score"><font color='#339933'>100%</font></td>
		</tr>
	</table>
	
	<?php
		$overallPercent = round(($totalPointsGot / $totalPointsAvail) * 100);
	?>
	
	<div id="BottomInfo">
		<div style="text-align:right;">
			<div style="margin-top: 35px; display: inline-block; background: <?=ScoreColor($overallPercent);?>; padding: 10px 25px; color: #FFF; font-size: 1.5em; font-weight: bold;">
				<?=$overallPercent;?>%
			</div>
		</div>
		
		<script type='text/javascript'>
			document.getElementById("ScoreBox").innerHTML = '<div style="margin-top: 35px; display: inline-block; background: <?=ScoreColor($overallPercent);?>; padding: 10px 25px; color: #FFF; font-size: 1.5em; font-weight: bold;"><?=$overallPercent;?>%</div>';
		</script>
	</div>
	
<?php
	require "includes/footer.php";

	update_option('affiliatepressx_campaign_'. $_GET['id'].'_seoScore', $overallPercent);
?>
