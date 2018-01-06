<a title="Help Tutorials" class="iconLink" href="https://www.youtube.com/watch?v=BwlZRnalTQ8" target="_blank"><img style="margin-top:5px;" src="https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Info.png" /></a>
<a title="Delete" onclick="if (confirm('Are you sure you want to delete this shortcode?')) commentDelete(1); return false"  class="iconLink"href="admin.php?page=salesoptimizer&delete=<?php echo $template['id']; ?>"><img src="https://cdn1.iconfinder.com/data/icons/Koloria-Icon-Set/31/Trash_Warning.png" /></a>
<a class="iconLink"href="admin.php?page=salesoptimizer&clone=<?php echo $template['id']; ?>" title="Clone"><img src="https://cdn4.iconfinder.com/data/icons/momenticons-basic/32x32/copy.png" style="padding-top:8px" /></a>
<a class="iconLink"href="#" id="previewButton" title="Preview"><img src="https://cdn3.iconfinder.com/data/icons/fatcow/32/magnifier.png" style="padding-top:8px" /></a>
<h1><?php echo htmlspecialchars($template['name']); ?></h1>
<p class="date"><strong>Created on</strong> <?php echo $template['date']; ?></p>
<br clear="all">
<div class="stats">
	<span class="shortcode">[salesoptimizer id="<?php echo $template['id']; ?>"]</span>
	<span class="views">Views: <strong class="number"><?php echo $views; ?></strong></span>
	<span class="clicks">Clicks: <strong class="number"><?php echo $clicks; ?></strong></span>
	<span class="convRate">Conv. Rate: <strong class="number"><?php echo $convRate; ?></strong></span>
	<br clear="all" />
</div>