<?php
	$title = "Backlinks";
	$path = "../../";
	require "../../includes/header.php";
	
	$category = $_POST['category'];
	
	$links = array();
	$ranks = array(6, 5, 4, 3, 2, 1);
	
	foreach($ranks as $rank) {
		$fileName = "Pagerank-" . $rank . ".txt";
		
		if(file_exists($fileName)) {
			$f = file_get_contents($fileName);
			$f = str_replace("\n\r", "\n", $f);
			
			$fileLinks = explode("\n", $f);
			
			foreach($fileLinks as $fileLink) {
				if($fileLink != '') {
					$links[] = array(
						'Url' => $fileLink,
						'PageRank' => $rank
					);
				}
			}
		}
	}
?>

<h2>Browsing Links in <?=$category;?></h2>

<p>
	Welcome to SEO Snake Links. This is a small, free portal in which finds high-PR websites with appropriate conditions for Search Engine Optimization.
	You can manually post your websites to these links to help optimize your search ranking over time. Notice that upgraded versions of Links show a more up-to-date and larger list.
</p>

	<form action="addons/links/inventory.php" method="POST">
		<select name="category" class="select" style="width: 500px;">
		<?php
				$categories = array(
					'Adult', 'Auctions', 'Business and Economy', 'Computers', 'Dating', 'Entertainment and Arts', 'Fashion and Beauty', 'Games', 'Government',
					'Hacking', 'Health and Medicine', 'Home', 'Hunting and Fishing', 'Image and Video', 'Internet Communications', 'Job Search', 'Kids',
					'Legal', 'Military', 'Motor Vehicles', 'Music', 'News and Media', 'Storage', 'Personal Sites and Blogs', 'Search Engines',
					'Shopping', 'Shareware and Freeware', 'Social Networking', 'Society', 'Sports', 'Web Hosting', 'Web Advertisements', 'Technology', 'Other'
				);
				
				foreach($categories as $c) {
			?>
				<option value="<?=$c;?>"><?=$c;?></option>
			<?php
				}
			?>
		</select>
		<input type="submit" value="Browse Links" class="mbutton" onClick="this.value='Loading...'" />
	</form>

	<div class="Popout" style="margin-top: 30px;">
		<p style="font-size: 11px; text-transform: uppercase; padding-bottom: 10px;">
			Showing a total of <?=number_format(count($links));?> results.
		</p>
	</div>

	<table class="BlueTable" width="100%" cellspacing="0px" cellpadding="10px">
		<tr class="HeadRow">
			<td width="40"><center>PR</center></td>
			<td>Website Address</td>
		</tr>
		<?php
			foreach($links as $i=>$link) {
				$class = "Odd";
				if($i % 2 == 0) $class = "Even";
		?>
		<tr class="<?=$class;?>">
			<td class="Column Name"><center><?=$link['PageRank'];?></center></td>
			<td><a href="<?=$link['Url'];?>"><?=$link['Url'];?></a></td>
		</tr>
		<?php
			}
		?>
	</table>


<?php
	require "../../includes/footer.php";
?>
