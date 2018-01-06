<div class="tabber" id="tab5" style="display: none;">

	<div class="titleBar">
		<i class="fa fa-pencil" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Design Your Page</strong></h2>
		<p>Customize Your Page Settings</p>
	</div>

	<?php

	
		// Add Your Options Here
	display_option( 
		$_GET['id'],
		$results->bootwatch,
		"Bootwatch Themes", 
		"bootwatch",
		"Change The Style of Buttons",
		"Default [default], Lumen [lumen], Darkly [darkly], Readable [readable], Spacelab [spacelab], Slate [slate], United [united], Cyborg [cyborg], Cerulean [cerulean]"
	);
	display_option( 
		$_GET['id'],
		$results->design,
		"Show / Hide Design", 
		"design",
		"Show Default or Show Your Custom Design",
		"Default [], Show Colors [1]"
	);
	display_color( 
		$_GET['id'],
		$results->border,
		"Border Color", 
		"border",
		"#eee"
	);
	display_color( 
		$_GET['id'],
		$results->borderText,
		"Border Text Color", 
		"borderText",
		"#222"
	);
	display_color( 
		$_GET['id'],
		$results->containerColor,
		"Conatiner BG Color", 
		"containerColor",
		"#fff"
	);
	display_color( 
		$_GET['id'],
		$results->containerText,
		"Conatiner Text Color", 
		"containerText",
		"#222"
	);
		

	?>

</div>