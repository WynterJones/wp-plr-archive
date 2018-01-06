<?php if ($_POST['create'] == "create") {
	$name = $_POST['pageName']; 
	$pageType = $_POST['pageType']; 
	$campaign = $_GET['edit']; 
	
	if ($pageType == "salesPage") {
		$content = '<style type="text/css">#salesPageList{list-style:none}#salesPageList .imageCol img{float:left;margin:10px 5px}</style>'."\n".'<div class="col_12" style="padding:0 28px;width:700px">'."\n".'<h6 class="center">WARNING: This is a template content that is editable...</h6>'."\n".'<h1 class="center">Discover How to Create Sales Pages Instantly Without Effort</h1>'."\n".'<h3 style="color:#ccc;margin-bottom:40px" class="center">Use This Effective Template to Build a Sales Page or Any Long Form Page</h3>'."\n".'<div class="inner">'."\n".'<p><strong>From the desk of:</strong> Bob Saunderson</p>'."\n".'<p><strong>Subject:</strong> One Amazing Way to Create Pages on the Fly</p>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>'."\n".'<p>Bin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'."\n".'<ul id="salesPageList">'."\n".'<li>'."\n".'<div class="col_1 imageCol">'."\n".'<img src="http://cdn1.iconfinder.com/data/icons/glaze/32x32/actions/button_ok.png">'."\n".'</div>'."\n".'<div class="col_11">'."\n".'<h4>Feature / Benefit Headline</h4>'."\n".'<p>Bin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'."\n".'</div>'."\n".'<br clear="all">'."\n".'</li>'."\n".'<li>'."\n".'<div class="col_1 imageCol">'."\n".'<img src="http://cdn1.iconfinder.com/data/icons/glaze/32x32/actions/button_ok.png">'."\n".'</div>'."\n".'<div class="col_11">'."\n".'<h4>Feature / Benefit Headline</h4>'."\n".'<p>Bin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'."\n".'</div>'."\n".'<br clear="all">'."\n".'</li>'."\n".'</ul>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>'."\n".'</div>'."\n".'</div>';
	}
	
	if ($pageType == "landingPage") {
		$content  = '<style type="text/css">#videoHTML img{width:96%!important}</style>'."\n".'<div class="col_12">'."\n".'<h1 class="center">Create a Powerful Landing Page</h1>'."\n".'<h4 class="center">Click Image Then Click Add HTML to Put a Video</h4>'."\n".'<hr>'."\n".'<div class="col_7" id="videoHTML">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Add+Video+/+Image+Here" alt="">'."\n".'</div>'."\n".'<div class="col_5">'."\n".'<h4>Sign-up to Newsletter</h4>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>'."\n".'<p>Lincididunt ut labore et dolore magna aliqua...</p>'."\n".'<img src="http://dummyimage.com/300x144/bababa/fff.png&text=Add+Optin+Code+Here" alt="">'."\n".'</div>'."\n".'<br clear="all">'."\n".'<h4 class="center">Add Some Feature / Benefits Below</h4>'."\n".'<div class="col_4">'."\n".'<div class="col_2" style="padding-top:10px">'."\n".'<img src="http://cdn1.iconfinder.com/data/icons/glaze/32x32/actions/button_ok.png" alt="">'."\n".'</div>'."\n".'<div class="col_10">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'</div>'."\n".'<div class="col_4">'."\n".'<div class="col_2" style="padding-top:10px">'."\n".'<img src="http://cdn1.iconfinder.com/data/icons/glaze/32x32/actions/button_ok.png" alt="">'."\n".'</div>'."\n".'<div class="col_10">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'</div>'."\n".'<div class="col_4">'."\n".'<div class="col_2" style="padding-top:10px">'."\n".'<img src="http://cdn1.iconfinder.com/data/icons/glaze/32x32/actions/button_ok.png" alt="">'."\n".'</div>'."\n".'<div class="col_10">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'</div>'."\n".'<br clear="all">'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>'."\n".'</div>';
	}
	
	if ($pageType == "homePage") {
		$content  = '<style type="text/css">.homepageBanner img{width:100%}</style>'."\n".'<div class="col_12">'."\n".'<div class="col_12 homepageBanner">'."\n".'<img src="http://dummyimage.com/745x180/bababa/fff.png&text=Banner+Image+Here" alt="">'."\n".'</div>'."\n".'<div class="col_6">'."\n".'<div class="col_3" style="padding-top:10px">'."\n".'<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Gnome-Emblem-Default-64.png" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'</div>'."\n".'<div class="col_6">'."\n".'<div class="col_3" style="padding-top:10px">'."\n".'<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Gnome-Emblem-Default-64.png" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'</div>'."\n".'<div class="col_6">'."\n".'<div class="col_3" style="padding-top:10px">'."\n".'<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Gnome-Emblem-Default-64.png" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'</div>'."\n".'<div class="col_6">'."\n".'<div class="col_3" style="padding-top:10px">'."\n".'<img src="http://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Gnome-Emblem-Default-64.png" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'</div>'."\n".'<div class="col_4">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'<div class="col_4">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'<div class="col_4">'."\n".'<h5>Benefit Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt..</p>'."\n".'</div>'."\n".'<div class="col_12">'."\n".'<h5>Small Footer Headline</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit...</p>'."\n".'</div>'."\n".'</div>';
	}
	
	if ($pageType == "videoPage") {
		$content = '<style type="text/css">.videoArea img{width:100%}.photoArea img{width:95%}</style>'."\n".'<div class="col_12">'."\n".'<h1 class="center">Watch This IMPORTANT Video Now</h1>'."\n".'<h4 class="center">Click the image below then add your video emded code</h4>'."\n".'<div class="col_1">'."\n".'<br>'."\n".'</div>'."\n".'<div class="col_10 videoArea">'."\n".'<img src="http://dummyimage.com/425x250/bababa/fff.png&text=Add+Video+/+Image+Here" alt="">'."\n".'</div>'."\n".'<br clear="all">'."\n".'<h4 class="center">Make sure to take this call-to-action now!</h4>'."\n".'<div class="col_12">'."\n".'<div class="col_3 photoArea">'."\n".'<img src="http://dummyimage.com/425x320/bababa/fff.png&text=Image+Here" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h5>About the video offer</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nsequat. Duis aute irure dolor in reprehenderit..</p>'."\n".'</div>'."\n".'</div>'."\n".'<div class="col_12">'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'."\n".'</div>'."\n".'</div>';
	}
	
	if ($pageType == "reviewPage") {
		$content = '<style type="text/css">.reviewImage img{width:100%}</style>'."\n".'<div class="col_12">'."\n".'<h1 class="center">Affiliate Review Page</h1>'."\n".'<div class="col_12">'."\n".'<div class="col_9">'."\n".'<h4>About This Review Listings</h4>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>'."\n".'</div>'."\n".'<div class="col_3 reviewImage">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Add+Video+/+Image+Here" alt="">'."\n".'</div>'."\n".'</div>'."\n".'<br clear="all">'."\n".'<div class="col_12">'."\n".'<div class="col_4 reviewImage">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Product+Image" alt="">'."\n".'</div>'."\n".'<div class="col_8">'."\n".'<h4>Product Listing Review</h4>'."\n".'<div class="stars">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'</div>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>'."\n".'</div>'."\n".'<hr>'."\n".'<div class="col_4 reviewImage">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Product+Image" alt="">'."\n".'</div>'."\n".'<div class="col_8">'."\n".'<h4>Product Listing Review</h4>'."\n".'<div class="stars">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'</div>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>'."\n".'</div>'."\n".'<hr>'."\n".'<div class="col_4 reviewImage">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Product+Image" alt="">'."\n".'</div>'."\n".'<div class="col_8">'."\n".'<h4>Product Listing Review</h4>'."\n".'<div class="stars">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'<img src="http://cdn2.iconfinder.com/data/icons/icojoy/noshadow/standart/png/24x24/001_15.png" alt="">'."\n".'</div>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>'."\n".'</div>'."\n".'</div>'."\n".'</div>';
	}
	
	if ($pageType == "blogPage") {
		$content = '<style type="text/css">.blog p{padding-right:20px}.photo img{width:100%}</style>'."\n".'<div class="col_12">'."\n".'<div class="col_9 blog">'."\n".'<h3>Write Your Own Blog Style Article Content Pages</h3>'."\n".'<h6 style="font-weight:normal;text-transform:uppercase">Include A Sub-headline for Your Blog or Article Page</h6>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'."\n".'<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'."\n".'<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'."\n".'</div>'."\n".'<div class="col_3">'."\n".'<h4>Sidebar Headline</h4>'."\n".'<ul>'."\n".'<li><a href="#">Sidebar Link</a></li>'."\n".'<li><a href="#">Sidebar Link</a></li>'."\n".'<li><a href="#">Sidebar Link</a></li>'."\n".'<li><a href="#">Sidebar Link</a></li>'."\n".'</ul>'."\n".'<h4>Sidebar Headline</h4>'."\n".'<ul>'."\n".'<li><a href="#">Sidebar Link</a></li>'."\n".'<li><a href="#">Sidebar Link</a></li>'."\n".'<li><a href="#">Sidebar Link</a></li>'."\n".'<li><a href="#">Sidebar Link</a></li>'."\n".'</ul>'."\n".'</div>'."\n".'<hr>'."\n".'<div class="col_3 photo">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Photo+Image" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h5>About This Author</h5>'."\n".'<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'."\n".'</div>'."\n".'</div>';
	}
	
	if ($pageType == "thanksPage") {
		$content = '<style type="text/css">.thumb img{width:100%}</style>'."\n".'<div class="col_12">'."\n".'<h1 class="center">Thank You for Your Purchase</h1>'."\n".'<h4 class="center">Bookmark this page to save the download links</h4><br>'."\n".'<p>You are getting access to these download links and they will be updated at this spot..</p>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>'."\n".'<div class="col_2 thumb">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Image" alt="">'."\n".'</div>'."\n".'<div class="col_10">'."\n".'<h5><a href="#">Download Package #1 Here</a></h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore.</p>'."\n".'</div>'."\n".'<hr>'."\n".'<div class="col_2 thumb">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Image" alt="">'."\n".'</div>'."\n".'<div class="col_10">'."\n".'<h5><a href="#">Download Package #2 Here</a></h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore.</p>'."\n".'</div>'."\n".'<hr>'."\n".'<div class="col_2 thumb">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Image" alt="">'."\n".'</div>'."\n".'<div class="col_10">'."\n".'<h5><a href="#">Download Package #3 Here</a></h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore.</p>'."\n".'</div>'."\n".'<hr>'."\n".'<h5>Thank you so much for your purchase</h5>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>'."\n".'</div>';
	}
	
	if ($pageType == "memberPage") {
		$content  = '<style type="text/css">.image img{width:100%}</style>'."\n".'<div class="col_12">'."\n".'<div class="col_10">'."\n".'<h2>Members Dashboard</h2>'."\n".'</div>'."\n".'<div class="col_2">'."\n".'<p style="padding-top:10px"><a href="#">Click to Logout</a></p>'."\n".'</div>'."\n".'<hr>'."\n".'<h3>Package for Week #1:</h3>'."\n".'<div class="col_3 image">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Photo+Image" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h4>Member Module Package #1</h4>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..</p>'."\n".'<p><a href="#">Download Package Here</a></p>'."\n".'</div>'."\n".'<hr>'."\n".'<div class="col_3 image">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Photo+Image" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h4>Member Module Package #2</h4>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..</p>'."\n".'<p><a href="#">Download Package Here</a></p>'."\n".'</div>'."\n".'<hr>'."\n".'<h3>Package for Week #2:</h3>'."\n".'<div class="col_3 image">'."\n".'<img src="http://dummyimage.com/425x300/bababa/fff.png&text=Photo+Image" alt="">'."\n".'</div>'."\n".'<div class="col_9">'."\n".'<h4>All New Module Package</h4>'."\n".'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..</p>'."\n".'<p><a href="#">Download Package Here</a></p>'."\n".'</div>'."\n".'</div>';
	}
	
	create_new_eb_page($name, $campaign, $content);	
?>
<script type="text/javascript">
<!--
window.location = "admin.php?page=eb_manage_campaigns&edit=<?php echo $campaign; ?>"
//-->
</script>
<?php } ?>

<?php if ($_POST['updateDesign'] == "updateDesign") {
	$headerImage = $_POST['headerImage']; 
	$backgroundImage = $_POST['backgroundImage']; 
	$typography = $_POST['typography'];
	$repeatBG = $_POST['repeatBG'];
	$bgColor = $_POST['bgColor'];
	$roundCorners = $_POST['roundCorners'];
	$dropShadow = $_POST['dropShadow'];
	$id = $_POST['id']; 
	update_eb_design_settings($headerImage, $backgroundImage,  $bgColor,  $repeatBG, $typography, $dropShadow, $roundCorners, $id);	
?>
<script type="text/javascript">
<!--
window.location = "admin.php?page=eb_manage_campaigns&edit=<?php echo $_GET['edit']; ?>"
//-->
</script>
<?php } ?>

<?php if ($_POST['updateSettings'] == "updateSettings") {
	$browserTitle = $_POST['browserTitle']; 
	$metaDescription = $_POST['metaDescription']; 
	$metaKeywords = $_POST['metaKeywords']; 
	$footerContent = $_POST['footerContent']; 
	$customJS = $_POST['customJS']; 
	$customCSS = $_POST['customCSS']; 
	$id = $_POST['id']; 
	
	update_eb_seo_settings($browserTitle, $metaDescription, $metaKeywords, $footerContent, $customJS, $customCSS, $id);	
?>
<script type="text/javascript">
<!--
window.location = "admin.php?page=eb_manage_campaigns&edit=<?php echo $_GET['edit']; ?>"
//-->
</script>
<?php } ?>

<?php if ($_POST['deleteCampaign'] == "deleteCampaign") {
	$id = $_POST['id']; 
	
	delete_eb_campaign($id);	
?>
<script type="text/javascript">
<!--
window.location = "admin.php?page=eb_manage_campaigns"
//-->
</script>
<?php } ?>

<?php if ($_GET['delete'] != "") {
	$id = $_GET['delete']; 
	
	delete_eb_page($id);	
?>
<script type="text/javascript">
<!--
window.location = "admin.php?page=eb_manage_campaigns&edit=<?php echo $_GET['edit']; ?>"
//-->
</script>
<?php } ?>


<?php if ($_GET['reloadThumbnails'] == "reloadThumbnails") {
	$id = $_POST['id']; 
	$reloadThumbnails = $_POST['reloadThumbnails'];
	
	eb_reloadThumbnails($reloadThumbnails, $id);	
?>
<?php } ?>

<?php 
if (get_option('seoSlug') == '') {
	add_option('seoSlug', '');
}

if ($_POST['updateSlug'] == "updateSlug") {
	update_option('seoSlug', $_POST['slugName']);
	
?>
<?php } ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $imagePath ?>/include/style.css" media="all">
	<script type="text/javascript" src="<?php echo $imagePath ?>/include/jscolor/jscolor.js"></script>
<!-- 	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
 -->
 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/blitzer/jquery-ui.css" type="text/css" />
<!-- <script src="https://raw.github.com/wiggin/jQuery-Easy-Confirm-Dialog-plugin/master/jquery.easy-confirm-dialog.js"></script> -->
	<script src="<?php echo get_site_url(); ?>/wp-content/plugins/EasyBuilder/page/confirm.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#seoSettings').hide();
				jQuery('#designSettings').hide();
			 	jQuery('#newPage').hide();
				jQuery('#seoSettings-link').click(function() {
			 	  jQuery('#designSettings').hide();
			 	  jQuery('#innerContent').hide();
			 	  jQuery('#newPage').hide();
			 	  jQuery('#pages-link').removeClass('activeLink');
			 	  jQuery('#designSettings-link').removeClass('activeLink');
			 	  jQuery('#new-link').removeClass('activeLink');
			 	  jQuery('#seoSettings-link').addClass('activeLink');
			 	  jQuery('#seoSettings').show();
			 	});
			 	jQuery('#designSettings-link').click(function() {
			 	  jQuery('#seoSettings').hide();
			 	  jQuery('#innerContent').hide();
			 	  jQuery('#newPage').hide();
			 	  jQuery('#pages-link').removeClass('activeLink');
			 	  jQuery('#seoSettings-link').removeClass('activeLink');
			 	  jQuery('#new-link').removeClass('activeLink');
			 	  jQuery('#designSettings-link').addClass('activeLink');
			 	  jQuery('#designSettings').show();
			 	});
			 	jQuery('#pages-link').click(function() {
			 	  jQuery('#seoSettings').hide();
			 	  jQuery('#designSettings').hide();
			 	  jQuery('#newPage').hide();
			 	  jQuery('#designSettings-link').removeClass('activeLink');
			 	  jQuery('#seoSettings-link').removeClass('activeLink');
			 	  jQuery('#new-link').removeClass('activeLink');
			 	  jQuery('#pages-link').addClass('activeLink');
			 	  jQuery('#innerContent').show();
			 	});
			 	jQuery('#new-link').click(function() {
			 	  jQuery('#seoSettings').hide();
			 	  jQuery('#designSettings').hide();
			 	  jQuery('#innerContent').hide();
			 	  jQuery('#designSettings-link').removeClass('activeLink');
			 	  jQuery('#seoSettings-link').removeClass('activeLink');
			 	  jQuery('#pages-link').removeClass('activeLink');
			 	  jQuery('#new-link').addClass('activeLink');
			 	  jQuery('#newPage').show();
			 	});
			 	
			 	
			 	jQuery(".deleteCampaign").easyconfirm();
				jQuery(".deleteCampaign").click(function() {
			 	 	 jQuery('#deleteCampaign').submit();
				});
			 	
			 	
				jQuery('#blank').click(function() {
				  jQuery('.salesPage').removeClass('activeType');
				  jQuery('.homePage').removeClass('activeType'); jQuery('.memberPage').removeClass('activeType');
				  jQuery('.landingPage').removeClass('activeType');
				  jQuery('.videoPage').removeClass('activeType'); jQuery('.blogPage').removeClass('activeType'); jQuery('.thanksPage').removeClass('activeType');
				  jQuery('.reviewPage').removeClass('reviewPage');
				  jQuery('.blank').addClass('activeType');
				  jQuery('#pageType').val('blank');
				});
				
				jQuery('#salesPage').click(function() {
				  jQuery('.blank').removeClass('activeType');
				  jQuery('.homePage').removeClass('activeType'); jQuery('.memberPage').removeClass('activeType');
				  jQuery('.landingPage').removeClass('activeType');
				  jQuery('.videoPage').removeClass('activeType'); jQuery('.blogPage').removeClass('activeType'); jQuery('.reviewPage').removeClass('activeType'); jQuery('.thanksPage').removeClass('activeType');
				  jQuery('.salesPage').addClass('activeType');
				  jQuery('#pageType').val('salesPage');
				});
				
				jQuery('#landingPage').click(function() {
				  jQuery('.blank').removeClass('activeType');
				  jQuery('.homePage').removeClass('activeType');
				  jQuery('.videoPage').removeClass('activeType'); jQuery('.memberPage').removeClass('activeType');
				  jQuery('.salesPage').removeClass('activeType'); jQuery('.blogPage').removeClass('activeType'); jQuery('.reviewPage').removeClass('activeType'); jQuery('.thanksPage').removeClass('activeType');
				  jQuery('.landingPage').addClass('activeType');
				  jQuery('#pageType').val('landingPage');
				});
				
				jQuery('#homePage').click(function() {
				  jQuery('.blank').removeClass('activeType');
				  jQuery('.videoPage').removeClass('activeType'); jQuery('.memberPage').removeClass('activeType');
				  jQuery('.landingPage').removeClass('activeType');
				  jQuery('.salesPage').removeClass('activeType'); jQuery('.blogPage').removeClass('activeType'); jQuery('.reviewPage').removeClass('activeType'); jQuery('.thanksPage').removeClass('activeType');
				  jQuery('.homePage').addClass('activeType');
				  jQuery('#pageType').val('homePage');
				});
				
				jQuery('#videoPage').click(function() {
				  jQuery('.blank').removeClass('activeType');
				  jQuery('.homePage').removeClass('activeType');
				  jQuery('.landingPage').removeClass('activeType');
				  jQuery('.salesPage').removeClass('activeType'); jQuery('.blogPage').removeClass('activeType'); jQuery('.thanksPage').removeClass('activeType'); jQuery('.memberPage').removeClass('activeType');
				  jQuery('.reviewPage').removeClass('activeType');
				  jQuery('.videoPage').addClass('activeType');
				  jQuery('#pageType').val('videoPage');
				});
				
				jQuery('#reviewPage').click(function() {
				  jQuery('.blank').removeClass('activeType');
				  jQuery('.homePage').removeClass('activeType');
				  jQuery('.landingPage').removeClass('activeType');
				  jQuery('.salesPage').removeClass('activeType'); jQuery('.videoPage').removeClass('activeType'); jQuery('.thanksPage').removeClass('activeType'); jQuery('.memberPage').removeClass('activeType');
				  jQuery('.blogPage').removeClass('activeType');
				  
				  jQuery('.reviewPage').addClass('activeType');
				  jQuery('#pageType').val('reviewPage');
				});
				
				jQuery('#blogPage').click(function() {
				  jQuery('.blank').removeClass('activeType');
				  jQuery('.homePage').removeClass('activeType');
				  jQuery('.landingPage').removeClass('activeType');
				  jQuery('.salesPage').removeClass('activeType');
				   jQuery('.videoPage').removeClass('activeType');
				  jQuery('.reviewPage').removeClass('activeType'); jQuery('.thanksPage').removeClass('activeType'); jQuery('.memberPage').removeClass('activeType');
				  jQuery('.blogPage').addClass('activeType');
				  jQuery('#pageType').val('blogPage');
				});
				
				jQuery('#thanksPage').click(function() {
				  jQuery('.blank').removeClass('activeType');
				  jQuery('.homePage').removeClass('activeType');
				  jQuery('.landingPage').removeClass('activeType');
				  jQuery('.salesPage').removeClass('activeType');
				   jQuery('.videoPage').removeClass('activeType');
				  jQuery('.reviewPage').removeClass('activeType');
				  jQuery('.blogPage').removeClass('activeType'); jQuery('.memberPage').removeClass('activeType');
				  jQuery('.thanksPage').addClass('activeType');
				  jQuery('#pageType').val('thanksPage');
				});
				
				jQuery('#memberPage').click(function() {
				  jQuery('.blank').removeClass('activeType');
				  jQuery('.homePage').removeClass('activeType');
				  jQuery('.landingPage').removeClass('activeType');
				  jQuery('.salesPage').removeClass('activeType');
				   jQuery('.videoPage').removeClass('activeType');
				  jQuery('.reviewPage').removeClass('activeType');
				  jQuery('.blogPage').removeClass('activeType');
				  jQuery('.thanksPage').removeClass('activeType');
				  jQuery('.memberPage').addClass('activeType');
				  jQuery('#pageType').val('memberPage');
				});
		  
					jQuery('.reload').click(function() {
					  jQuery('#reloadThumbnails').submit();
					});
			});
			
			 function confirmDelete(delUrl) {
			  if (confirm("WARNING: Are you sure you want to delete page?")) {
			   document.location = delUrl;
			  }
			  
		  }
			
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<!-- <a href="admin.php?page=eb_help"><img src="<?php echo $imagePath ?>/include/images/info.png" style="float: right; margin: 14px 5px; border: none; margin-left: -5px;margin-right: 15px;"></a> -->
			<a href="admin.php?page=eb_add_new_campaigns"><img src="<?php echo $imagePath ?>/include/images/addnew.png" style="float: right; margin: 14px 5px; border: none"></a>
			<a href="admin.php?page=eb_manage_campaigns"><img src="<?php echo $imagePath ?>/include/images/manage.png" style="float: right; margin: 18px 0; border: none"></a>
		</div>
<?php if ($_GET['edit'] == "") { ?>
	
		<div id="content">
	<?php
	
			global $post;
			  global $wpdb;
			  $table_db_name = $wpdb->prefix . "eb_campaign";
			  $templates2 = $wpdb->get_results("SELECT * FROM $table_db_name",ARRAY_A);
			  $templates2 = array_reverse($templates2 );
        ?>
	       <?php
	       foreach($templates2 as $templatee)
				{ ?>
					<div class="campaignList">
						<?php
	
								global $post;
								  global $wpdb;
								  $table_db_name = $wpdb->prefix . "eb_pages";
								  $name = $templatee['name'];
								  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign = '$name'",ARRAY_A);
								  $templates = array_reverse($templates );
					        ?>
						       <?php
						       foreach($templates as $template)
									{ ?>
										
									<?php	
							}
							
						?>
				<span class="pages"><?php echo $wpdb->num_rows; ?></span>
						<a href="admin.php?page=eb_manage_campaigns&edit=<?php echo $templatee['name']; ?>" style="padding-top: 20px;" class="title"><?php echo $templatee['name']; ?></a>
						<a href="admin.php?page=eb_manage_campaigns&edit=<?php echo $templatee['name']; ?>" class="manage">Manage Campaign</a>
					</div>
					
					
					
				<?php	
		}
		
	?>
					<br>
					<h2 style="margin: 10px 20px; width: 785px; color: #fff;">SEO Slug Settings:</h2>
					<form action="" method="post">
						<input type="hidden" name="updateSlug" value="updateSlug">
						<input type="text" value="<?php echo get_option('seoSlug'); ?>" name="slugName" style="margin: 0 20px; width: 785px;">
						<button style="margin: 10px 20px;" class="green button">Save Slug Settings</button>
					</form>
					<br><br><br>
		</div>
<?php } ?>
<?php if ($_GET['edit'] != "") { ?>
			<form method="post" action="" id="deleteCampaign">
					<input type="hidden" value="deleteCampaign" name="deleteCampaign">
					<?php
	
								global $post;
								  global $wpdb;
								  $table_db_name = $wpdb->prefix . "eb_campaign";
								  $name = $_GET['edit'];
								  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$name'",ARRAY_A);
								  $templates = array_reverse($templates );
					        ?>
						       <?php
						       foreach($templates as $template)
									{ ?>
										<input type="hidden" value="<?php echo $template['id']; ?>" name="id">
									<?php	
							}
							
						?>
				</form>
		<div id="content">
			<div class="campaignList inner">
				<?php
	
								global $post;
								  global $wpdb;
								  $table_db_name = $wpdb->prefix . "eb_pages";
								  $name = $_GET['edit'];
								  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign = '$name'",ARRAY_A);
								  $templates = array_reverse($templates );
					        ?>
						       <?php
						       foreach($templates as $template)
									{ ?>
									<?php	
							}
							
						?>
				<span class="pages"><?php echo $wpdb->num_rows; ?></span>
				<a href="#" class="title" style="font-size: 14px; padding-top: 20px;"><?php echo $_GET['edit']; ?></a>
				<a href="#" class="delete deleteCampaign"  title="Delete Campaign and ALL Pages!">Delete</a>
				<a href="#" class="link"  id="seoSettings-link" title="Edit Settings">SEO Settings</a>
				<a href="#" class="link" id="designSettings-link" title="Customize Your Design">Design Settings</a>
				<a href="#" class="link" id="new-link" title="Create New Page">Add New Page</a>
				<a href="#" class="link activeLink"  id="pages-link" title="Edit All Your Pages">Manage Your Pages</a>
			</div>
			<div id="innerContent" class="innerContent">
				<a href="#" class="reload">Reload Thumbnails</a>
				<h1>Manage All Your Pages:</h1>
				<form method="post" action="" id="reloadThumbnails">
					<input type="hidden" value="reloadThumbnails" name="reloadThumbnails">
					<?php
	
								global $post;
								  global $wpdb;
								  $table_db_name = $wpdb->prefix . "eb_campaign";
								  $name = $_GET['edit'];
								  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$name'",ARRAY_A);
								  $templates = array_reverse($templates );
					        ?>
						       <?php
						       foreach($templates as $template)
									{ ?>
										<input type="hidden" value="<?php echo $template['id']; ?>" name="id">
									<?php	
							}
							
						?>
						<input type="hidden" value="<?php echo $template['reloadThumbnails'] + 1; ?>" name="reloadThumbnails">
				</form>
				<hr><br>
				<?php
						global $post;
						  global $wpdb;
						  $table_db_name = $wpdb->prefix . "eb_pages";
						  $campaign = $_GET['edit'];
						  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE campaign = '$campaign'",ARRAY_A);
						  $templates = array_reverse($templates );
						  
						  global $post;
						  global $wpdb;
						  $table_db_name5 = $wpdb->prefix . "eb_campaign";
						  $name = $_GET['edit'];
						  $templates5 = $wpdb->get_results("SELECT * FROM $table_db_name5 WHERE name = '$name'",ARRAY_A);
						  $templates5 = array_reverse($templates5 );
						
							
			        ?>
				       <?php
				       foreach($templates as $template)
							{ ?>
								<div class="innerList">
									<a target="_blank" href="<?php echo $imagePath; ?>/page/index.php?campaign=<?php echo $campaign; ?>&page=<?php echo $template['name']; ?>"  ><img src="http://pagepeeker.com/thumbs.php?size=x&url=<?php echo $imagePath; ?>/page/index.php?campaign=<?php echo $campaign; ?>&page=<?php echo $template['name']; ?>&update=<?php global $post; global $wpdb; $table_db_name5 = $wpdb->prefix . "eb_campaign"; $name = $_GET['edit']; $templates5 = $wpdb->get_results("SELECT * FROM $table_db_name5 WHERE name = '$name'",ARRAY_A); foreach($templates5 as $templater){ ?><?php echo $templater['reloadThumbnails']; } ?>"></a>
									<hr>
									<a href="javascript:confirmDelete('admin.php?page=eb_manage_campaigns&edit=<?php echo $campaign; ?>&delete=<?php echo $template['id']; ?>')" class="delete deletePage">Delete</a>
									
									<a target="_blank" href="<?php echo $imagePath; ?>/editor/index.php?campaign=<?php echo $campaign; ?>&page=<?php echo $template['name']; ?>"  class="edit">Edit</a>
									<a target="_blank" href="<?php echo $imagePath; ?>/page/index.php?campaign=<?php echo $campaign; ?>&page=<?php echo $template['name']; ?>"  class="preview">Preview</a>
									<strong class="name"><?php echo $template['name']; ?></strong>
								</div>
							<?php	
					}
					
				?>
				<br clear="all" >
			</div>
			<div id="designSettings"  class="innerContent">
				<h1>Design Settings:</h1>
				<hr><br>
				<form method="post" action="">
					<input type="hidden" value="updateDesign" name="updateDesign">
					<?php
	
								global $post;
								  global $wpdb;
								  $table_db_name = $wpdb->prefix . "eb_campaign";
								  $name = $_GET['edit'];
								  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$name'",ARRAY_A);
								  $templates = array_reverse($templates );
					        ?>
						       <?php
						       foreach($templates as $template)
									{ ?>
										<input type="hidden" value="<?php echo $template['id']; ?>" name="id">
									<?php	
							}
							
						?>
					<strong class="label">Header Image: <small>(width: 810px)</small></strong>
					<input type="text" placeholder="URL to Header Image..." name="headerImage" value="<?php if ($template['headerImage'] != '') { echo $template['headerImage']; }  ?>"><br>
					<strong class="label">Background Image:</strong>
					<input type="text" placeholder="URL to Background Image..." name="backgroundImage" value="<?php if ($template['backgroundImage'] != '') { echo $template['backgroundImage']; }  ?>"><br>
					<input type="text" class="color" name="bgColor" value="<?php echo $template['bgColor']; ?>" style="width: 11%; float: right; margin-bottom: -37px;">
					<select name="repeatBG" style="width: 85%">
						<option <?php if($template['repeatBG'] == 'no-repeat top left') { ?>selected<?php } ?> value="no-repeat top left">no-repeat top left</option>
						<option <?php if($template['repeatBG'] == 'no-repeat top center') { ?>selected<?php } ?> value="no-repeat top center">no-repeat top center</option>
						<option <?php if($template['repeatBG'] == 'no-repeat top right') { ?>selected<?php } ?> value="no-repeat top right">no-repeat top right</option>
						<option <?php if($template['repeatBG'] == 'repeat-x top') { ?>selected<?php } ?> value="repeat-x top">repeat-x top</option>
						<option <?php if($template['repeatBG'] == 'repeat-y center') { ?>selected<?php } ?> value="repeat-y center">repeat-y center</option>
						<option <?php if($template['repeatBG'] == 'repeat') { ?>selected<?php } ?> value="repeat">repeat</option>
					</select>
					<br>
					<strong class="label">Typography:</strong>
					<select name="typography">
						<option <?php if($template['typography'] == 'type1') { ?>selected<?php } ?> value="type1">Arial, Sans-serif</option>
						<option <?php if($template['typography'] == 'type2') { ?>selected<?php } ?> value="type2">Georgia, Serif</option>
						<option <?php if($template['typography'] == 'type3') { ?>selected<?php } ?> value="type3">Default Font</option>
					</select>
					<br>
					<strong class="label">Drop Shadow:</strong>
					<select name="dropShadow">
						<option <?php if($template['roundCorners'] == 'No Drop Shadow') { ?>selected<?php } ?> value="No Drop Shadowp">No Drop Shadow</option>
						<option <?php if($template['roundCorners'] == 'Dark Drop Shadow') { ?>selected<?php } ?> value="Dark Drop Shadow">Dark Drop Shadow</option>
						<option <?php if($template['roundCorners'] == 'Bottom Drop Shadow') { ?>selected<?php } ?> value="Bottom Drop Shadow">Bottom Drop Shadow</option>
					</select>
					<br>
					<strong class="label">Round Corners:</strong>
					<select name="roundCorners">
						<option <?php if($template['dropShadow'] == 'No Round Corners') { ?>selected<?php } ?> value="No Round Corners">No Round Corners</option>
						<option <?php if($template['dropShadow'] == "5px Corners") { ?>selected<?php } ?> value="5px Corners">5px Corners</option>
						<option <?php if($template['dropShadow'] == '10px Corners') { ?>selected<?php } ?> value="10px Corners">10px Corners</option>
					</select>
					<input type="submit" value="Save Design Settings" class="css3button">
				</form>
			</div>
			<div id="seoSettings"  class="innerContent">
				<h1>SEO Settings:</h1>
				<hr><br>
				<form method="post" action="">
					<input type="hidden" value="updateSettings" name="updateSettings">
					<?php
	
								global $post;
								  global $wpdb;
								  $table_db_name = $wpdb->prefix . "eb_campaign";
								  $name = $_GET['edit'];
								  $templates = $wpdb->get_results("SELECT * FROM $table_db_name WHERE name = '$name'",ARRAY_A);
								  $templates = array_reverse($templates );
					        ?>
						       <?php
						       foreach($templates as $template)
									{ ?>
										<input type="hidden" value="<?php echo $template['id']; ?>" name="id">
									<?php	
							}
							
						?>
					<strong class="label">Browser Title:</strong>
					<input type="text" placeholder="Browser Title..." name="browserTitle" value="<?php if ($template['browserTitle'] != '') { echo $template['browserTitle']; }  ?>"><br>
					<strong class="label">META Description:</strong>
					<input type="text" placeholder="META Description..." name="metaDescription" value="<?php if ($template['metaDescription'] != '') { echo $template['metaDescription']; }  ?>"><br>
					<strong class="label">META Keywords:</strong>
					<input type="text" placeholder="META Keywords..." name="metaKeywords" value="<?php if ($template['metaKeywords'] != '') { echo $template['metaKeywords']; }  ?>"><br>
					<strong class="label">Footer Content:</strong>
					<textarea name="footerContent" ><?php if ($template['footerContent'] != '') { echo $template['footerContent']; }  ?></textarea><br>
					<strong class="label">Custom CSS:</strong>
					<textarea name="customCSS" ><?php if ($template['customCSS'] != '') { echo $template['customCSS']; }  ?></textarea><br>
					<strong class="label">Custom Javascript:</strong>
					<textarea name="customJS" ><?php if ($template['customJS'] != '') { echo $template['customJS']; }  ?></textarea>
					<input type="submit" value="Save Settings" class="css3button">
				</form>
			</div>
			<div id="newPage"  class="innerContent">
				<h1>Create New Page:</h1>
				<hr><br>
				<form method="post" action="">
					<input type="hidden" value="create" name="create">
					<strong class="label">Page Name: <small>(must be unique)</small></strong>
					<input type="text" placeholder="Write page name here..." name="pageName"><br>
					<input type="hidden" name="pageType" id="pageType">
					<div class="column blank activeType">
						<img src="<?php echo $imagePath ?>/include/images/blank.jpg" id="blank" style="width:240px; height: 220px;">
					</div>
					<div class="column salesPage">
						<img src="<?php echo $imagePath ?>/include/images/salesPage.jpg" id="salesPage" style="width:240px; height: 220px;">
					</div>
					<div class="column landingPage">
						<img src="<?php echo $imagePath ?>/include/images/landingPage.jpg" id="landingPage" style="width:240px; height: 220px;">
					</div>
					<hr><br>
					<div class="column homePage">
						<img src="<?php echo $imagePath ?>/include/images/homePage.jpg" id="homePage" style="width:240px; height: 220px;">
					</div>
					
					<div class="column videoPage">
						<img src="<?php echo $imagePath ?>/include/images/videoPage.jpg" id="videoPage" style="width:240px; height: 220px;">
					</div>
					<div class="column reviewPage">
						<img src="<?php echo $imagePath ?>/include/images/reviewPage.jpg"  id="reviewPage" style="width:240px; height: 220px;">
					</div>
					<div class="column blogPage">
						<img src="<?php echo $imagePath ?>/include/images/blogPage.jpg" id="blogPage" style="width:240px; height: 220px;">
					</div>
					<div class="column memberPage">
						<img src="<?php echo $imagePath ?>/include/images/memberPage.jpg" id="memberPage" style="width:240px; height: 220px;">
					</div>
					<div class="column thanksPage">
						<img src="<?php echo $imagePath ?>/include/images/thanksPage.jpg" id="thanksPage" style="width:240px; height: 220px;">
					</div>
					<hr><br>
					<input type="submit" value="Create New Page" class="css3button">
				</form>
			</div>
		</div>
<?php } ?>
		<div id="footer2">
			
		</div>
	</div>
	<footer style="width: 840px; text-align: center; padding: 10px; margin-top: -50px; color: #555; font-size: 11px; font-family: 'Myriad Pro', Helvetica, Arial, Sans-serif;">
		<p>Copyright 2012 - EasyBuilder WP Plugin - Manage Marketing Campaigns <br> All Rights Reserved - Icons from IconFinder.com</p>
	</footer>
</body>
</html>