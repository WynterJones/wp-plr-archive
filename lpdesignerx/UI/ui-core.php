<?php
// Functions For Form Elements ::
// DISPLAY SINGLE FIELD:
function display_field($num, $data, $title, $id, $help){
	// Output HTML
	?>
	<div class="editSection">
		<div class="inputTitle">
			<?php echo $title; ?>
			<span><i class="icon-question-sign iconHelp helper " rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>"></i></span>
		</div>
		<div class="inputSection">
			<input class="inputField elem" placeholder="<?php echo $help; ?>" type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo htmlspecialchars(stripcslashes($data)); ?>">
		</div>
		<br clear="left" >
	</div>
	<?php
}
// DISPLAY SINGLE FIELD W/ IMAGE BUTTON
function display_field_image($num, $data, $title, $id, $help){
	// Output HTML
	?>
	<div class="editSection">
		<div class="inputTitle">
			<?php echo $title; ?>
			<span><i class="icon-question-sign iconHelp helper " rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>"></i></span>
		</div>
		<div class="inputSection">
			<input style="float:left; width: 420px; " class="inputField elem" placeholder="<?php echo $help; ?>" type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo htmlspecialchars(stripcslashes($data)); ?>">
			<div style="float:right; margin-top: 10px; margin-bottom:15px;" class='launch_media_lib grey-btn ' photoBox='<?php echo $id; ?>' >Upload Image</div>
			<br clear="all" >
		</div>
		<br clear="left" >
	</div>
	<?php
}
// DISPLAY TEXTAREA:
function display_textarea($num, $data, $title, $id, $help){
	// Output HTML
	?>
	<div class="editSection">
		<div class="inputTitle">
			<?php echo $title; ?>
			<span><i class="icon-question-sign iconHelp helper " rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>"></i></span>
		</div>
		<div class="inputSection">
			<textarea name="<?php echo $id; ?>" id="<?php echo $id; ?>" placeholder="<?php echo $help; ?>" class="inputTextarea elem" ><?php echo htmlspecialchars(stripcslashes($data)); ?></textarea>
		</div>
		<br clear="left" >
	</div>
	<?php
}
// DISPLAY OPTIONS
function display_option($num, $data, $title, $id, $help, $options){
	// Get options:
	$items = explode(",", $options);
	// Output HTML
	?>
	<div class="editSection">
		<div class="inputTitle">
			<?php echo $title; ?>
			<span><i class="icon-question-sign iconHelp helper " rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>"></i></span>
		</div>
		<div class="inputSection">
			<select class="inputField_select elem" type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>"  style=" height:54px; ">
			  <?php
			  	foreach($items as $item) {
			  		// parse value
			  		$item = explode("[", $item);
			  		$item[0] = trim($item[0]);
			  		$item[1] = str_replace("]", "", $item[1]);
			  		?>
			  		<option <?php if($data == $item[1] ){ echo "selected"; } ?> value="<?php echo $item[1]; ?>"><?php echo $item[0]; ?></option>
			  		<?php
			  	}
			  ?>
			</select>
		</div>
		<br clear="left" >
	</div>
	<?php
}
// DISPLAY WP EDITOR:
function display_wpeditor($num, $data, $title, $id, $help){
			// $id = htmlspecialchars(stripcslashes($results->$id));
			$settings = array(
				'wpautop' => false, // use wpautop - add p tags when they press enter
				'media_buttons' => false, // show insert/upload button(s)
				'teeny' => false, // output the minimal editor config used in Press This
				'tinymce' => array(
				'height' => '250' // the height of the editor
			));	
			// Output HTML
			?>
			<div class="editSection">
				<div class="inputTitle">
					<?php echo $title; ?>
					<span><i class="icon-question-sign iconHelp helper " rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>"></i></span>
				</div>
				<div class="inputSection">
					<?php wp_editor( stripcslashes($data) , $id, $settings ); ?>
					<div style="float:right; margin-top: 10px; margin-bottom:15px;" class='launch_media_lib grey-btn ' photoBox='<?php echo $id; ?>' >Insert Image</div>
				</div>
				<br clear="left" >
			</div>
			<?php
}
// DISPLAY WP EDITOR:
function display_wpeditorFull($num, $data, $title, $id, $help){
			// $id = htmlspecialchars(stripcslashes($results->$id));
			$settings = array(
				'wpautop' => false, // use wpautop - add p tags when they press enter
				'media_buttons' => false, // show insert/upload button(s)
				'teeny' => false, // output the minimal editor config used in Press This
				'tinymce' => array(
				'height' => '250' // the height of the editor
			));	
			// Output HTML
			?>
			<div class="editSection">
				
				<div class="inputSection" style="width: 100%">
					<?php wp_editor( stripcslashes($data) , $id, $settings ); ?>
					<div style="float:right; margin-top: 10px; margin-bottom:15px;" class='launch_media_lib grey-btn ' photoBox='<?php echo $id; ?>' >Insert Image</div>
				</div>
				<br clear="left" >
			</div>
			<?php
}
// DISPLAY - ACTION FOR CALLBACK:
function display_field_hidden($id, $callback){
	// Output HTML
	?>
		<input class="inputField elem" type="hidden"  name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo $callback; ?>">
	<?php
}
?>