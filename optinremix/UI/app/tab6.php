<div class="tabber" id="tab6" style="display: none;">
	<div class="titleBar">
		<i class="fa fa-users" style="float: right; font-size: 55px; padding: 10px 10px"></i>
		<h2><strong>Step #3 - Sign Up</strong></h2>
		<p>Customize The Optin Form Content</p>
	</div>
	<?php
		// Add Your Options Here

  display_field_image(
    $_GET['id'],
    $results->step3Image,
    "Background Image",
    "step3Image",
    "Optional"
  );

      echo '<h2 class="headline">Headline Content</h2>';
  display_field(
    $_GET['id'],
    $results->optinHeadline,
    "Headline",
    "optinHeadline",
    "Optin Headline"
  );
  display_field(
    $_GET['id'],
    $results->optinHeadline2,
    "Sub Headline",
    "optinHeadline2",
    "Sub Headline"
  );

      echo '<h2 class="headline">Form Content</h2>';

      display_field(
        $_GET['id'],
        $results->namePlaceholder,
        "Name Placeholder",
        "namePlaceholder",
        "Text for Input Placeholder"
      );
      display_field(
        $_GET['id'],
        $results->emailPlaceholder,
        "Email Placeholder",
        "emailPlaceholder",
        "Text for Input Placeholder"
      );
      display_field(
        $_GET['id'],
        $results->buttonText,
        "Sign Up Button Text",
        "buttonText",
        "Text for The Sign Up Button"
      );
        display_option(
    $_GET['id'],
    $results->buttonColor,
    "Button Color",
    "buttonColor",
    "Edit the color of the CTA Button",
    "Grey [default], Orange [warning], Red [danger], Blue [primary], Light Blue [info], Green [success]"
  );
      display_field(
        $_GET['id'],
        $results->spamText,
        "Spam Text",
        "spamText",
        "Text for Anti-Spam / Privacy"
      );


	?>
</div>
