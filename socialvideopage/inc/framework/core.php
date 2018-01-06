<?php

// Functions For Form Elements ::


// DISPLAY SINGLE FIELD:

function display_field($num, $title, $id, $help){

	// Get Value ::

	global $wpdb;
	$table_db_name = $wpdb->prefix . "slideoptinprox";
	$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$num'", OBJECT);
	foreach($results as $results) {}

	// Output HTML

	?>

	<div class="editSection">

		<div class="inputTitle">
			<?php echo $title; ?>
			<span><img class="iconHelp helper" rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>" src="<?php echo site_url(); ?>/wp-content/plugins/slideoptinprox/images/help.png" /></span>
		</div>


		
		<div class="inputSection">
			<input class="inputField elem" type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo htmlspecialchars(stripcslashes($results->$id)); ?>">
		</div>
		<br clear="left" >

	</div>

	<?php
}

// DISPLAY TEXTAREA:

function display_textarea($num, $title, $id, $help){

	// Get Value ::

	global $wpdb;
	$table_db_name = $wpdb->prefix . "slideoptinprox";
	$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$num'", OBJECT);
	foreach($results as $results) {}

	// Output HTML

	?>

	<div class="editSection">

		<div class="inputTitle">
			<?php echo $title; ?>
			<span><img class="iconHelp helper" rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>" src="<?php echo site_url(); ?>/wp-content/plugins/slideoptinprox/images/help.png" /></span>
		</div>


		
		<div class="inputSection">
			<textarea name="<?php echo $id; ?>" id="<?php echo $id; ?>" class="inputTextarea elem" ><?php echo htmlspecialchars(stripcslashes($results->$id)); ?></textarea>
		</div>
		<br clear="left" >

	</div>

	<?php
}

// DISPLAY OPTIONS

function display_option($num, $title, $id, $help, $options){

	// Get Value ::

	global $wpdb;
	$table_db_name = $wpdb->prefix . "slideoptinprox";
	$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$num'", OBJECT);
	foreach($results as $results) {}

	$selected = htmlspecialchars(stripcslashes($results->$id));	

	// Get options:

	$items = explode(",", $options);

	// Output HTML

	?>

	<div class="editSection">

		<div class="inputTitle">
			<?php echo $title; ?>
			<span><img class="iconHelp helper" rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>" src="<?php echo site_url(); ?>/wp-content/plugins/slideoptinprox/images/help.png" /></span>
		</div>


		
		<div class="inputSection">
			<select class="inputField_select elem" type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>"  style=" height:54px; ">
			  
			  <?php

			  	foreach($items as $item) {
			  		?>
			  		<option <?php if($selected == $item ){ echo "selected"; } ?> value="<?php echo $item; ?>"><?php echo $item; ?></option>
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

function display_wpeditor($num, $title, $id, $help){

			// Get Value ::

			global $wpdb;
			$table_db_name = $wpdb->prefix . "slideoptinprox";
			$results = $wpdb->get_results("SELECT * FROM $table_db_name WHERE id = '$num'", OBJECT);
			foreach($results as $results) {}

			// $id = htmlspecialchars(stripcslashes($results->$id));
			
			$settings = array(
				'wpautop' => false, // use wpautop - add p tags when they press enter
				'media_buttons' => true, // show insert/upload button(s)
				'teeny' => false, // output the minimal editor config used in Press This
				'tinymce' => array(
				'height' => '250' // the height of the editor
			));	

			// Output HTML

			?>

			<div class="editSection">

				<div class="inputTitle">
					<?php echo $title; ?>
					<span><img class="iconHelp helper" rel="tooltip" data-placement="top" data-original-title="<?php echo $help; ?>" src="<?php echo site_url(); ?>/wp-content/plugins/slideoptinprox/images/help.png" /></span>
				</div>

				<div class="inputSection">
					<?php wp_editor( stripcslashes($results->$id) , $id, $settings ); ?>
				</div>
				<br clear="left" >

			</div>

			<?php

}

// DISPLAY - ACTION FOR CALLBACK:

function display_field_hidden($id, $callback){

	// Output HTML

	?>
		<input class="inputField elem" type="hidden" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo $callback; ?>">
	
	<?php
}


?>