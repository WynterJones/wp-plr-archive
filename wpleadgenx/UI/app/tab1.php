<div class="tabber" id="tab1">

	<div class="titleBar">
		<h2>Main Settings</h2>
		<p>Here you can change the main settings of your page...</p>
	</div>

	
<?php 


echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #5b6d7b; font-weight: bold;'>Headline Content</h2>
		";

display_field_image( 
			$_GET['id'],
			$results->optinBG,
			"Optin Full Background", 
			"optinBG",
			"Background for the top optin area - auto stretches"
		);
		display_field( 
			$_GET['id'],
			$results->mainHeadline,
			"Optin Main Headline", 
			"mainHeadline",
			"Shown at the very top of the landing page."
		);

		

	

		display_field( 
			$_GET['id'],
			$results->subHeadline,
			"Optin Sub Headline", 
			"subHeadline",
			"Show at the very top of the landing page."
		);

		display_color( 
			$_GET['id'],
			$results->shadowColor,
			"Shadow Color", 
			"shadowColor",
			"Help Text"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Optin Content Settings</h2>
		";

		display_field( 
			$_GET['id'],
			$results->optinButton,
			"Optin Button Text", 
			"optinButton",
			"The signup button text for optin"
		);

		display_field( 
			$_GET['id'],
			$results->optinHeadline,
			"Optin Text", 
			"optinHeadline",
			"The main optin text"
		);

		display_field( 
			$_GET['id'],
			$results->optinHeadline2,
			"Sidebar Optin Headline", 
			"optinHeadline2",
			"The sidebar optin headline"
		);


		display_field( 
			$_GET['id'],
			$results->spam,
			"Spam Content", 
			"spam",
			"The warning shown below the form"
		);

		display_field( 
			$_GET['id'],
			$results->namePlaceholder,
			"Name Placeholder", 
			"namePlaceholder",
			"The text to display as placeholder text"
		);

		display_field( 
			$_GET['id'],
			$results->emailPlaceholder,
			"Name Placeholder", 
			"emailPlaceholder",
			"The text to display as placeholder text"
		);


		display_option_img( 
			$_GET['id'],
			$results->moreIcon,
			"More Icon", 
			"moreIcon",
			"Choose icon to show the full page",
			"https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519708-216_CircledBorderTriangleDown-48.png [https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519708-216_CircledBorderTriangleDown-48.png],
			https://cdn2.iconfinder.com/data/icons/free-funktional-icons/48/22_Down_Arrow_48x48.png [https://cdn2.iconfinder.com/data/icons/free-funktional-icons/48/22_Down_Arrow_48x48.png],
			https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/actions/agt_update_misc.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/actions/agt_update_misc.png],
			https://cdn2.iconfinder.com/data/icons/kids/48x48/actions/down.png [https://cdn2.iconfinder.com/data/icons/kids/48x48/actions/down.png],
			https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519637-138_CircledBorderTriangleDown-48.png [https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519637-138_CircledBorderTriangleDown-48.png],
			https://cdn1.iconfinder.com/data/icons/bnw/48x48/actions/kdevelop_down.png [https://cdn1.iconfinder.com/data/icons/bnw/48x48/actions/kdevelop_down.png],
			https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/433/aiga_downarrow-48.png [https://cdn4.iconfinder.com/data/icons/aiga-symbol-signs/433/aiga_downarrow-48.png],
			https://cdn3.iconfinder.com/data/icons/cue/45/drag_down-48.png [https://cdn3.iconfinder.com/data/icons/cue/45/drag_down-48.png],
			https://cdn2.iconfinder.com/data/icons/dellipack/48/plus.png [https://cdn2.iconfinder.com/data/icons/dellipack/48/plus.png],
			https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519704-212_CircledBorderArrowDown-48.png[https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519704-212_CircledBorderArrowDown-48.png]"
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Auto Responder Code</h2>
		";

		display_textarea( 
			$_GET['id'],
			$results->autoresponder,
			"Auto Responder Form Code", 
			"autoresponder",
			"HTML Form Code (Must Include Name and Email Fields)"
		);



		 ?>

	<div style="border-top: 1px dotted #e2e2e2; padding-top: 15px; margin-top: 25px; ">
		<span style="float: left;" id="deleteCampaign" class="grey-btn" ><strong>Delete</strong></span>
		<br clear="left" />
	</div>



</div>