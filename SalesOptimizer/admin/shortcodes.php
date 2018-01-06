<ul id="content">
	<?php
		global $post;
		global $wpdb;
		$getPage = $wpdb->prefix . "salesoptimizer";
		$templates = $wpdb->get_results("SELECT * FROM $getPage ORDER BY id DESC" ,ARRAY_A);		
	    foreach($templates as $template) { 
		include('settings/stat.php');
	?>
	<li>
		<span>
			<div class="item">
				<a title="Help Tutorials" href="https://www.youtube.com/watch?v=BwlZRnalTQ8" target="_blank"><img src="https://cdn1.iconfinder.com/data/icons/google_jfk_icons_by_carlosjj/32/help.png" /></a>
				<a title="Delete" onclick="if (confirm('Are you sure you want to delete this shortcode?')) commentDelete(1); return false"  href="admin.php?page=salesoptimizer&delete=<?php echo $template['id']; ?>"><img src="https://cdn1.iconfinder.com/data/icons/Koloria-Icon-Set/31/Trash_Warning.png" /></a>
				<a href="admin.php?page=salesoptimizer&clone=<?php echo $template['id']; ?>" title="Clone"><img src="https://cdn4.iconfinder.com/data/icons/momenticons-basic/32x32/copy.png" style="padding-top:8px" /></a>
				<a title="Edit Settings" href="admin.php?page=salesoptimizer&edit=<?php echo $template['id']; ?>"><img src="https://cdn3.iconfinder.com/data/icons/fatcow/32/application_edit.png" style="padding-top:8px" /></a>
				<h2><a href="admin.php?page=salesoptimizer&edit=<?php echo $template['id']; ?>"><?php echo $template['name']; ?></a></h2>
				<p class="date"><strong>Created on</strong> <?php echo $template['date']; ?></p>
				<br clear="all">
				<div class="stats">
					<span class="shortcode"><input type="text" value='[salesoptimizer id="<?php echo $template['id']; ?>"]'></span>
					<span class="views">Views: <strong class="number"><?php echo $views; ?></strong></span>
					<span class="clicks">Clicks: <strong class="number"><?php echo $clicks; ?></strong></span>
					<span class="convRate">Conv. Rate: <strong class="number"><?php echo $convRate; ?></strong></span>
					<br clear="all" />
				</div>
			</div>
		</span>
	</li>
	<?php } ?>
</ul>
<div class="holder"></div>