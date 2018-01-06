<div class="tabber" id="tab4" style="display: none;">

	<div class="titleBar">
		<h2>Benefit Content Settings:</h2>
		<p>Here you can change the icons and text for 3 main benefits...</p>
	</div>

	<?php

		

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Benefit Item #1</h2>
		";

		display_option_img( 
			$_GET['id'],
			$results->icon1,
			"Icon for Benefit #1", 
			"icon1",
			"Icon that is shown beside the headline info",
			"https://cdn2.iconfinder.com/data/icons/lin/48/14.png [https://cdn2.iconfinder.com/data/icons/lin/48/14.png],
			 https://cdn2.iconfinder.com/data/icons/lin/48/7.png [https://cdn2.iconfinder.com/data/icons/lin/48/7.png],
			 https://cdn4.iconfinder.com/data/icons/iconset-addictive-flavour/png/social%20media/social_facebook.png [https://cdn4.iconfinder.com/data/icons/iconset-addictive-flavour/png/social%20media/social_facebook.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/kdm/user_female.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/kdm/user_female.png],
			 https://cdn2.iconfinder.com/data/icons/onebit/PNG/onebit_04.png [https://cdn2.iconfinder.com/data/icons/onebit/PNG/onebit_04.png],
			 https://cdn1.iconfinder.com/data/icons/realistiK-new/48x48/actions/lock.png [https://cdn1.iconfinder.com/data/icons/realistiK-new/48x48/actions/lock.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/actions/agt_update_misc.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/actions/agt_update_misc.png],
			 https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Download_Crate.png [https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Download_Crate.png],
			 https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/User-Info-48.png [https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/User-Info-48.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/apps/error.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/apps/error.png],
			 https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Lifebuoy.png [https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Lifebuoy.png],
			 https://cdn2.iconfinder.com/data/icons/crystalproject/48x48/filesystems/favorites.png [https://cdn2.iconfinder.com/data/icons/crystalproject/48x48/filesystems/favorites.png],
			 https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/Emblem-Money-48.png [https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/Emblem-Money-48.png],
			 https://cdn0.iconfinder.com/data/icons/ie_Financial_set/48/20.png [https://cdn0.iconfinder.com/data/icons/ie_Financial_set/48/20.png],
			 https://cdn0.iconfinder.com/data/icons/ie_Bright/48/graph_red.png [https://cdn0.iconfinder.com/data/icons/ie_Bright/48/graph_red.png]"
		);
		display_field( 
			$_GET['id'],
			$results->item1Headline,
			"Benefit #1 Headline", 
			"item1Headline",
			"Benefit #1 Headline shown below the video and connect button."
		);

		display_field( 
			$_GET['id'],
			$results->item1SubHeadline,
			"Benefit #1 Sub Headline", 
			"item1SubHeadline",
			"Benefit #1 Headline shown below the video and connect button."
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Benefit Item #2</h2>
		";

		display_option_img( 
			$_GET['id'],
			$results->icon2,
			"Icon for Benefit #2", 
			"icon2",
			"Icon that is shown beside the headline info",
			"https://cdn2.iconfinder.com/data/icons/lin/48/14.png [https://cdn2.iconfinder.com/data/icons/lin/48/14.png],
			 https://cdn2.iconfinder.com/data/icons/lin/48/7.png [https://cdn2.iconfinder.com/data/icons/lin/48/7.png],
			 https://cdn4.iconfinder.com/data/icons/iconset-addictive-flavour/png/social%20media/social_facebook.png [https://cdn4.iconfinder.com/data/icons/iconset-addictive-flavour/png/social%20media/social_facebook.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/kdm/user_female.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/kdm/user_female.png],
			 https://cdn2.iconfinder.com/data/icons/onebit/PNG/onebit_04.png [https://cdn2.iconfinder.com/data/icons/onebit/PNG/onebit_04.png],
			 https://cdn1.iconfinder.com/data/icons/realistiK-new/48x48/actions/lock.png [https://cdn1.iconfinder.com/data/icons/realistiK-new/48x48/actions/lock.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/actions/agt_update_misc.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/actions/agt_update_misc.png],
			 https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Download_Crate.png [https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Download_Crate.png],
			 https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/User-Info-48.png [https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/User-Info-48.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/apps/error.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/apps/error.png],
			 https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Lifebuoy.png [https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Lifebuoy.png],
			 https://cdn2.iconfinder.com/data/icons/crystalproject/48x48/filesystems/favorites.png [https://cdn2.iconfinder.com/data/icons/crystalproject/48x48/filesystems/favorites.png],
			 https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/Emblem-Money-48.png [https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/Emblem-Money-48.png],
			 https://cdn0.iconfinder.com/data/icons/ie_Financial_set/48/20.png [https://cdn0.iconfinder.com/data/icons/ie_Financial_set/48/20.png],
			 https://cdn0.iconfinder.com/data/icons/ie_Bright/48/graph_red.png [https://cdn0.iconfinder.com/data/icons/ie_Bright/48/graph_red.png]"
		);
		display_field( 
			$_GET['id'],
			$results->item2Headline,
			"Benefit #2 Headline", 
			"item2Headline",
			"Benefit #2 Headline shown below the video and connect button."
		);



		display_field( 
			$_GET['id'],
			$results->item2SubHeadline,
			"Benefit #2 Sub Headline", 
			"item2SubHeadline",
			"Benefit #2 Headline shown below the video and connect button."
		);

		echo "
			<h2 style='padding-left: 20px;padding-top: 40px; color: #243b72'>Benefit Item #3</h2>
		";

		display_option_img( 
			$_GET['id'],
			$results->icon3,
			"Icon for Benefit #3", 
			"icon3",
			"Icon that is shown beside the headline info",
			"https://cdn2.iconfinder.com/data/icons/lin/48/14.png [https://cdn2.iconfinder.com/data/icons/lin/48/14.png],
			 https://cdn2.iconfinder.com/data/icons/lin/48/7.png [https://cdn2.iconfinder.com/data/icons/lin/48/7.png],
			 https://cdn4.iconfinder.com/data/icons/iconset-addictive-flavour/png/social%20media/social_facebook.png [https://cdn4.iconfinder.com/data/icons/iconset-addictive-flavour/png/social%20media/social_facebook.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/kdm/user_female.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/kdm/user_female.png],
			 https://cdn2.iconfinder.com/data/icons/onebit/PNG/onebit_04.png [https://cdn2.iconfinder.com/data/icons/onebit/PNG/onebit_04.png],
			 https://cdn1.iconfinder.com/data/icons/realistiK-new/48x48/actions/lock.png [https://cdn1.iconfinder.com/data/icons/realistiK-new/48x48/actions/lock.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/actions/agt_update_misc.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/actions/agt_update_misc.png],
			 https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Download_Crate.png [https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Download_Crate.png],
			 https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/User-Info-48.png [https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/User-Info-48.png],
			 https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/apps/error.png [https://cdn1.iconfinder.com/data/icons/CrystalClear/48x48/apps/error.png],
			 https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Lifebuoy.png [https://cdn0.iconfinder.com/data/icons/Aristocracy_WebDesignTuts/48/Lifebuoy.png],
			 https://cdn2.iconfinder.com/data/icons/crystalproject/48x48/filesystems/favorites.png [https://cdn2.iconfinder.com/data/icons/crystalproject/48x48/filesystems/favorites.png],
			 https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/Emblem-Money-48.png [https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/48/Emblem-Money-48.png],
			 https://cdn0.iconfinder.com/data/icons/ie_Financial_set/48/20.png [https://cdn0.iconfinder.com/data/icons/ie_Financial_set/48/20.png],
			 https://cdn0.iconfinder.com/data/icons/ie_Bright/48/graph_red.png [https://cdn0.iconfinder.com/data/icons/ie_Bright/48/graph_red.png]"
		);

		display_field( 
			$_GET['id'],
			$results->item3Headline,
			"Benefit #3 Headline", 
			"item3Headline",
			"Benefit #3 Headline shown below the video and connect button."
		);

		display_field( 
			$_GET['id'],
			$results->item3SubHeadline,
			"Benefit #3 Sub Headline", 
			"item3SubHeadline",
			"Benefit #3 Headline shown below the video and connect button."
		);

	?>

</div>