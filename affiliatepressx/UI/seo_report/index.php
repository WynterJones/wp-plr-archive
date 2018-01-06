<?php
	$title = "Main";
	require "includes/header.php";
?>

				<h2>Welcome to SEO Snake!</h2>
				
				<p>This is an advanced SEO tool built using PHP that both generates beautiful SEO reports in which you can send directly to clients, and helps you determine ways to increase the client rank.</p>
				<p>The tool runs without the need of a database, and anything your client sees can easily be fully customized to your liking. And for a plus, the design is very, very neat.</p>
				
				<div class="Popout">
					<h2 style="margin-top: 50px;">Generate SEO Report</h2>
					
					<p>Let's see how you're doing. Enter the website URL below and we'll have a look around the internet to see what can be improved. Please note that this can take a minute to completely load.</p>
					<p style="margin-top: 25px;">
						<form action="report.php" method="POST">
							<input type="text" name="url" class="textbox" placeholder="http://www.example.com/" style="width: 500px;" />
							<input type="submit" value="Generate" class="mbutton" onClick="this.value='Loading...'" />
						</form>
					</p>
				</div>
				
				<?php if($showLinksAddon) { ?>
				<div class="Popout">
					<h2 style="margin-top: 50px;">Browse Link Inventory</h2>
					
					<p>SEO Snake comes with a free add-on that provides a couple demo high-pagerank links for your websites. Click the button below to see our list.</p>
					<p style="margin-top: 25px;">
						<form action="addons/links/inventory.php" method="POST">
							
							<input type="submit" value="Browse Links" class="mbutton" onClick="this.value='Loading...'" />
						</form>
					</p>
				</div>
				<?php } ?>
<?php
	require "includes/footer.php";
?>
