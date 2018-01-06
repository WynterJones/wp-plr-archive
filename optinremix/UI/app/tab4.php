<div class="tabber" id="tab4" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-pencil" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Step #1 - Main CTA Settings</strong></h2>
		<p>Add Your Content and Settings for Step #1 "Headline and CTA Button"</p>
	</div>
	<?php
		// Add Your Options Here

    display_field_image(
      $_GET['id'],
      $results->step1Image,
      "Background Image",
      "step1Image",
      "Automatically Resized to Fit 100% Background"
    );

    echo '<h2 class="headline">Headline Content</h2>';

  display_field(
    $_GET['id'],
    $results->headline,
    "Headline (top line)",
    "headline",
    "The First Line of Main Headline"
  );
  display_field(
    $_GET['id'],
    $results->headline2,
    "Headline (middle line)",
    "headline2",
    "The Middle Line of The Main Headline"
  );
  display_field(
    $_GET['id'],
    $results->headline3,
    "Headline (last line)",
    "headline3",
    "The Last Line of The Main Headline"
  );
  display_field(
    $_GET['id'],
    $results->headline4,
    "Small Headline (HTML allowed)",
    "headline4",
    "The Small Headline Above the Button"
  );

  echo '<h2 class="headline">Call to Action Button</h2>';

  display_field(
    $_GET['id'],
    $results->ctaText,
    "Button Text",
    "ctaText",
    "The Text for The CTA Button"
  );
  display_option(
    $_GET['id'],
    $results->ctaColor,
    "Button Color",
    "ctaColor",
    "Edit the color of the CTA Button",
    "Grey [default], Orange [warning], Red [danger], Blue [primary], Light Blue [info], Green [success]"
  );
	?>
</div>
