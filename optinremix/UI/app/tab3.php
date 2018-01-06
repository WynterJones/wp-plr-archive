<div class="tabber" id="tab3" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-picture-o" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Design and Main Settings</strong></h2>
		<p>Example for All Input Elements:</p>
	</div>
	<?php
display_field_image(
  $_GET['id'],
  $results->logo,
  "Logo Image",
  "logo",
  "Optional"
);


  display_color(
    $_GET['id'],
    $results->bgColor,
    "Background Color",
    "bgColor",
    "Background Color"
  );
	display_option(
		$_GET['id'],
		$results->bgTexture,
		"Background Texture",
		"bgTexture",
		"Add a background texture.",
		"None [none], Grey1 [grey1], Grey2 [grey2], Grey3 [grey3], Black1 [black1], Black2 [black2], Black3 [black3]"
	);
  display_color(
    $_GET['id'],
    $results->headlineColor,
    "Headline Color",
    "headlineColor",
    "Headline Color"
  );
  display_color(
    $_GET['id'],
    $results->highlight,
    "Sub Headline Color",
    "highlight",
    "Sub Headline Color"
  );

    display_color(
    $_GET['id'],
    $results->dropShadow,
    "Drop Shadow Color",
    "dropShadow",
    "Drop Shadow Color"
  );

    display_option(
      $_GET['id'],
      $results->greyScale,
      "Grey Scale",
      "greyScale",
      "Make All Background Images Black / White",
      "Color [color], GreyScale [greyscale]"
    );

	?>
</div>
