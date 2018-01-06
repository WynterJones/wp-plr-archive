<div class="tabber" id="tab5" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-youtube" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Step #2 - Video</strong></h2>
		<p>Add Your Video Content</p>
	</div>
	<?php
		// Add Your Options Here
  display_field_image(
    $_GET['id'],
    $results->step2Image,
    "Background Image",
    "step2Image",
    "Optionals"
  );
      echo '<h2 class="headline">Video Content</h2>';
  display_option(
    $_GET['id'],
    $results->videoType,
    "Video Type",
    "videoType",
    "Choose between Youtube and Vimeo for video.",
    "YouTube [youtube], Vimeo [vimeo]"
  );
  display_field(
    $_GET['id'],
    $results->videoID,
    "YouTube or Vimeo ID",
    "videoID",
    "The ID for Your YouTube or Vimeo ID. Found in the URL."
  );
  display_option(
    $_GET['id'],
    $results->videoStyle,
    "Style of Video Box",
    "videoStyle",
    "Choose The Style of The Video Box",
    "None [none], White [white], Black [black]"
  );

  display_field(
    $_GET['id'],
    $results->skipButton,
    "Skip Button Text",
    "skipButton",
    "The Text for The Skip Video Button"
  );
  display_option(
    $_GET['id'],
    $results->showSkip,
    "Show / Hide Skip",
    "showSkip",
    "Show or Hide the Skip Button",
    "Show [show], Hide [hide]"
  );

	echo '<h2 class="headline">Facebook Comments</h2>';

	display_option(
		$_GET['id'],
		$results->showFB,
		"Show / Hide Comments",
		"showFB",
		"Show or Hide the Comments",
		" Hide [hide],Show [show]"
	);

	display_field(
		$_GET['id'],
		$results->fbURL,
		"FB Comment URL",
		"fbURL",
		"URL to Your Page or Another Page"
	);

	display_option(
		$_GET['id'],
		$results->fbColor	,
		"Light or Dark Comments",
		"fbColor",
		"Fit comments to your design.",
		"Light [light], Dark [dark]"
	);
	?>
</div>
