<?php

// DISPLAY OPTIONS

function display_option_img($num, $data, $title, $id, $help, $options){

	// Get options:

	$items = trim($items);
	$items = explode(",", $options);

	// Output HTML

	?>

	<div class="editSection">

		<div class="inputTitle">
			<?php echo $title; ?>
			<span><i class="icon-question-sign iconHelp helper " rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>"></i></span>
		</div>


		
		<div class="inputSection">
			 
			  <?php

			  	foreach($items as $item) {

			  		// parse value

			  		$item = explode("[", $item);
			  		$item[0] = trim($item[0]);
			  		$item[1] = str_replace("]", "", $item[1]);

			  		?>
			  		<div class="dub_select_image <?php if($data == $item[1] ){ echo "dub_select_image_selected"; } ?> ds_<?php echo $id; ?>" dsData="<?php echo $item[1]; ?>" dsID="<?php echo $id; ?>" > 

			  		<img src="<?php echo $item[0]; ?>" />

			  		</div>
			  		<?php
			  	}

			  ?>

			  <br clear="left" >
			  
			<input type='hidden' class="elem" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo $data; ?>" />
		
		</div>
		<br clear="left" >

	</div>

	<?php
}

// DISPLAY A COLOR PICKER

function display_color($num, $data, $title, $id, $help){

	// Output HTML

	?>

	<div class="editSection">

		<div class="inputTitle">
			<?php echo $title; ?>
			<span><i class="icon-question-sign iconHelp helper " rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>"></i></span>
		</div>

		<div class="inputSection ">
			<input class="inputField elem  cp-picker color-field-picker" type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo htmlspecialchars(stripcslashes($data)); ?>" style=" background-color: <?php echo htmlspecialchars(stripcslashes($data)); ?>;" >
		</div>
		<br clear="left" >

	</div>

	<?php
}

// DISPLAY A COLOR PICKER

function display_date($num, $data, $title, $id, $help){

	// Output HTML

	?>

	<div class="editSection">

		<div class="inputTitle">
			<?php echo $title; ?>
			<span><i class="icon-question-sign iconHelp helper " rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>"></i></span>
		</div>

		<div class="inputSection ">
			<input class="inputField elem dp-date date-field-picker" type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo htmlspecialchars(stripcslashes($data)); ?>" >
		</div>
		<br clear="left" >

	</div>

	<?php
}

?>