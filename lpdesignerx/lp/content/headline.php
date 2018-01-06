
<?php if($results->mainHeadline != '') { ?>
	<h1><?php echo stripslashes($results->mainHeadline); ?></h1>
<?php } else { ?>
	<h1>Build Your Own Professional Landing Page</h1>
<?php } ?>
<?php if($results->mainSubHeadline != '') { ?>
	<h3><?php echo stripslashes($results->mainSubHeadline); ?></h3>
<?php } else { ?>
	<h3>Edit Your Page in LP Designer Options Panel</h3>
<?php } ?>
 <?php if($results->countdown == 'on') { ?>
<div id="countdownBox">
	<br>
	<ul id="until2d" class="countdown"></ul>
	<br clear="all">
</div>
<?php } ?>