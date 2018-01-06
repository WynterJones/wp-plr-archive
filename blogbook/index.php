<?php 

	/*
		Plugin Name: Blog Book
		Description: Create an professional e-book of your entire wordpress blog. (or) Create & manage unlimited custom ebooks AND spin any word to turn duplicate content into unique content.
		Version: 2.0
	*/

	function blogbook_adminSettings() {
	   add_menu_page('Blog Book', 'Blog Book', 'manage_options', 'blogbook', 'blogbook_adminPage', plugins_url().'/blogbook/images/favicon.png');
	}

	add_action('admin_menu', 'blogbook_adminSettings');

	register_activation_hook( __FILE__, 'activate_blogbook');

	function activate_blogbook() {
		global $wpdb;
		$table_name = $wpdb->prefix . "blogbook_ebook";
		   
		   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
		      
		      $sql = "CREATE TABLE " . $table_name . " (
			    id INTEGER(40) UNSIGNED AUTO_INCREMENT,
			   name varchar(500),
			   header varchar(500),
			   footer varchar(500),
			   content LONGTEXT,
			   UNIQUE KEY id (id)
			 );";
		
		      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		      dbDelta($sql);
		   } 
	}
	
	function blogbook_addnewbook($name, $header, $footer, $content) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "blogbook_ebook";
 		$wpdb->insert( $table_db_name, 
        array( 
	     'name' => $name,
	     'header' => $header,
	     'content' => $content,
	     'footer' => $footer
	      )
		);
	}

	function blogbook_updateEbook($name, $header, $footer, $content, $id) {
		global $wpdb;
 		$table_db_name = $wpdb->prefix . "blogbook_ebook";
		$wpdb->update($table_db_name, array( 
	     'name' => $name,
	     'header' => $header,
	     'content' => $content,
	     'footer' => $footer
	      ), array( 'id' => $id ));
	}

	function blogbook_deleteEbook($id) {
		global $wpdb;
		$table_db_name = $wpdb->prefix . "blogbook_ebook";
		$wpdb->query($wpdb->prepare ("DELETE FROM $table_db_name WHERE ID = $id" ));
	}

	function blogbook_adminPage() { ?>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
		<script>
			$(document).ready(function() {
			  	$(".tabLink").click(function() {
					tabLink = $(this).attr('tab');
					$('.tab').hide();
					$("."+tabLink).delay(500).show();
					$(".tabLink").removeClass('active');
					$(this).addClass('active');
				});
				$('.fade').fadeOut(3000);

				$("#generateEbook").click(function() {
					$('#newEbook').attr('action', '<?php echo plugins_url() ?>/blogbook/save_ebook.php');
					$('#newEbook').attr('target', '_blank');
					$('#newEbook').submit();
				});
				$("#generateEbook2").click(function() {
					$('#editEbook').attr('action', '<?php echo plugins_url() ?>/blogbook/save_ebook.php');
					$('#editEbook').attr('target', '_blank');
					$('#editEbook').submit();
				});
			});
		</script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
		<style>
			@import url(http://fonts.googleapis.com/css?family=Noto+Serif:400,700);
			#options_panel {
				width: 600px;
				margin: 20px 0;
				background: #fff;
				box-shadow: 0 0 4px #ddd;
				border: 1px solid #ccc;
				padding: 25px;
				border-radius: 10px;
				border-top-left-radius: 0; 
				font-size: 15px;
				line-height: 21px;
				color: #666;
				font-family: 'Helvetica Neue', Arial, sans-serif;
			}
			#options_panel input[type=text] {
				width: 100%;
				display: block;
				margin: 8px 0;
			}
			#options_panel h1, #options_panel h2, #options_panel h3, #options_panel h4, #options_panel h5 {
				color: #333;
			}
			.tabLink {
				float: left;
				padding: 10px;
				text-decoration: none;
				padding-left: 37px;
				margin-right: 25px;
				color: #444;
				font-weight: bold;
				outline: none;
			}
			#options_panel a:hover {
				color: #a22f20;
			}
			a:focus {
				outline: none;
			}
			.active, .tabLink:hover {
				border-bottom: 2px solid #165e8b;
				border-radius: 4px;
				color: #a22f20 !important;
			}

			.dash {
				background: url(http://cdn5.iconfinder.com/data/icons/woocons1/Button%20White%20Help.png) no-repeat left;
			}
			.newEbook {
				background: url(http://cdn2.iconfinder.com/data/icons/gur-project-1/32/1_1.png) no-repeat left;
			}
			.blogEbook {
				background: url(http://cdn4.iconfinder.com/data/icons/Classy_Social_Media_Icons/32/wordpress.png) no-repeat left;
			}
			.tab {
				clear: both;
				padding-top: 10px;
			}
			hr {
				border: none;
				border-radius: 4px;
				border-top: 1px solid #eee;
			}
			.save {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 15px;
				color: #333;
				padding: 10px 20px;
				background: -moz-linear-gradient(
					top,
					#ffbb00 0%,
					#ff7700);
				background: -webkit-gradient(
					linear, left top, left bottom, 
					from(#ffbb00),
					to(#ff7700));
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				border-radius: 6px;
				border: 1px solid #ff7700;
				-moz-box-shadow:
					0px 1px 3px rgba(000,000,000,0.5),
					inset 0px 0px 1px rgba(255,255,255,1);
				-webkit-box-shadow:
					0px 1px 3px rgba(000,000,000,0.5),
					inset 0px 0px 1px rgba(255,255,255,1);
				box-shadow:
					0px 1px 3px rgba(000,000,000,0.5),
					inset 0px 0px 1px rgba(255,255,255,1);
				font-weight: bold;
					cursor: pointer;
			}
			.generate {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	color: #123d54;
	padding: 10px 20px;
	background: -moz-linear-gradient(
		top,
		#afd9fa 0%,
		#588fad);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#afd9fa),
		to(#588fad));
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	border: 1px solid #003366;
	-moz-box-shadow:
		0px 0px 0px rgba(000,000,000,0),
		inset 0px 0px 1px rgba(255,255,255,1);
	-webkit-box-shadow:
		0px 0px 0px rgba(000,000,000,0),
		inset 0px 0px 1px rgba(255,255,255,1);
	box-shadow:
		0px 0px 0px rgba(000,000,000,0),
		inset 0px 0px 1px rgba(255,255,255,1);
	text-shadow:
		0px -1px 0px rgba(000,000,000,0.7),
		0px 1px 0px rgba(255,255,255,0.3);
		
					cursor: pointer;
}


		</style>
		<div id="options_panel">
			<?php 
				global $themename, $shortname, $options;
				if ( 'save' == $_REQUEST['action'] ) {
		
					if(isset($_REQUEST['coverImage'])) {
						update_option('blogbook_coverImage', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['coverImage']), ENT_NOQUOTES, "iso-8859-1")));
					} 
					if(isset($_REQUEST['tocHeadline'])) {
						update_option('blogbook_tocHeadline', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['tocHeadline']), ENT_NOQUOTES, "iso-8859-1")));
					} 
					if(isset($_REQUEST['tocSubHeadline'])) {
						update_option('blogbook_tocSubHeadline', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['tocSubHeadline']), ENT_NOQUOTES, "iso-8859-1")));
					} 
					if(isset($_REQUEST['footerImage'])) {
						update_option('blogbook_footerImage', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['footerImage']), ENT_NOQUOTES, "iso-8859-1")));
					} 
					if(isset($_REQUEST['footerHeadline'])) {
						update_option('blogbook_footerHeadline', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['footerHeadline']), ENT_NOQUOTES, "iso-8859-1")));
					} 
					if(isset($_REQUEST['footerSubHeadline'])) {
						update_option('blogbook_footerSubHeadline', html_entity_decode(htmlspecialchars(stripslashes($_REQUEST['footerSubHeadline']), ENT_NOQUOTES, "iso-8859-1")));
					} 

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Successfully Saved Settings.</strong></p></div> <br/>';
					
				}

				if ( 'newEbook' == $_REQUEST['action'] ) {

					blogbook_addnewbook($_REQUEST['ebookName'], $_REQUEST['pageHeader'], $_REQUEST['pageFooter'], $_REQUEST['ebook']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Successfully Created New Ebook.</strong></p></div> <br/>';
				}

				if ( 'updateEbook' == $_REQUEST['action'] ) {

					blogbook_updateEbook($_REQUEST['ebookName'], $_REQUEST['pageHeader'], $_REQUEST['pageFooter'], $_REQUEST['ebook2'], $_REQUEST['pageID']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Successfully updated Ebook</strong></p></div> <br/>';
				}

				if ( $_GET['delete'] != "" ) {

					blogbook_deleteEbook($_GET['delete']);

					echo '<div id="message" class="updated fade" style="clear: both; position: relative; margin: 0;"><p><strong>Deleted Ebook</strong></p></div> <br/>';
				}

				if ( $_GET['edit'] != '' ) { ?>
				<script>
					$(document).ready(function() {
					  	$('.tab').hide();
					  	$('.edit').show();
					});
				</script>
				<?php }
			?>
			<img src="<?php echo plugins_url() ?>/blogbook/images/logo.png" style="margin: 0 0;  width: 300px; display: block" /> <br>
			<a href="#" tab="tab1" class="tabLink dash active">Dashboard</a>
			<a href="#" tab="tab4" class="tabLink newEbook">Manage</a>
			<a href="#" tab="tab2" class="tabLink newEbook">New eBook</a>
			<a href="#" tab="tab3" class="tabLink blogEbook">Blog eBook</a>
			
			<div class="tab tab1">
				<h2>Start Creating Instant eBooks</h2>
				<p>You are about to create ebooks faster than you thought possible. You have the power to create a new ebooks or generate one from ALL of your blog posts with one-click. Come back here to update your blog eBook or create a brand-new eBook.</p>
				<h3>Spin Your Content</h3>
				<p>For any blog post, blog page or when you are creating a new eBook you can spin your content following this one easy to follow method. Find the word you want to replace and add the following snippet:</p>
				<p style="padding: 20px; line-height: 30px; background: #fafafa; border: 1px solid #ddd;border-radius: 10px;border-top-left-radius: 0; ">The best part about <strong>{SEO|Marketing|Real Estate}</strong> is the profit gained from <strong>{proper|excellent|strategic}</strong> execution.</p>
				<p>Each time the page or eBook is loaded it will randomly choose one of the multiple words. This will allow you to use PLR articles, change duplicate content into unique content.</p>
			</div>
			<div class="tab tab2" style="display: none">
				<h2>Create New eBook</h2>
				<p>Add the text for the header and footer of all of your pages. Write and format your ebook inside one text editor making it easy for you to quickly make changes and create instant ebooks.</p>
				<hr>
				<form id="newEbook" method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
					<input type="hidden" name="action" value="newEbook" />
					<strong>Ebook Name:</strong>
					<input type="text" placeholder="Name of Your Ebook (for saving)" name="ebookName" />
					<strong>Page Header:</strong>
					<input type="text" placeholder="At the top right of all your pages" name="pageHeader" />
					<strong>Page Footer:</strong>
					<input type="text" placeholder="At the bottom right of all your pages"  name="pageFooter" />
					<hr>
					<h3>eBook Content:</h3>
					<?php wp_editor( $content, 'ebook', $settings = array() ); ?>
					<p>To add a <strong>New Page: <code style="padding: 5px;"><?php echo htmlspecialchars('<pagebreak />'); ?></code></strong> at any point to create a new page. You can preview your eBook by hitting "Generate eBook" then you can view your ebook while you are editing it.</p>
					<input type="submit" value="Save New Ebook" class="save" style="float: left;"> 
					<strong id="generateEbook" class="generate" value="Generate Ebook" style="float: right;font-weight: normal">Generate Ebook</strong>
					<br clear="all" ><br>
				</form>
			</div>
			<div class="tab edit" style="display: none">
				<h2>Edit and Publish Ebook</h2>
				<p>Add the text for the header and footer of all of your pages. Write and format your ebook inside one text editor making it easy for you to quickly make changes and create instant ebooks.</p>
				<hr>
				<?php
		    		global $post;
					global $wpdb;
					$getPage = $wpdb->prefix . "blogbook_ebook";
					$getID = $_GET['edit'];
					$editBook = $wpdb->get_results("SELECT * FROM $getPage WHERE id = $getID" ,ARRAY_A);
			
					$tpl = get_post_meta($post->ID,'_template',true);
					
					foreach($editBook as $template){} 		
		        ?>
				<form id="editEbook" method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
					<input type="hidden" name="action" value="updateEbook" />
					<input type="hidden" name="pageID" value="<?php echo $getID; ?>" />
					<strong>Ebook Name:</strong>
					<input type="text" name="ebookName" placeholder="Name of Your Ebook (for saving)" value="<?php echo $template['name']; ?>" />
					<strong>Page Header:</strong>
					<input type="text" name="pageHeader" placeholder="At the top right of all your pages" value="<?php echo $template['header']; ?>" />
					<strong>Page Footer:</strong>
					<input type="text" name="pageFooter" placeholder="At the bottom right of all your pages"  value="<?php echo $template['footer']; ?>" />
					<hr>
					<h3>eBook Content:</h3>
					<?php wp_editor( $template['content'], 'ebook2', $settings = array() ); ?>
					<p>To add a <strong>New Page: <span style="padding: 5px; background: #eee;"><?php echo htmlspecialchars('<pagebreak />'); ?></span></strong> at any point to create a new page. You can preview your eBook by hitting "Generate eBook" then you can view your ebook while you are editing it.</p>
					<input type="submit" value="Update Ebook" class="save"  style="float: left;"> 
					<strong id="generateEbook2" class="generate" value="Generate Ebook" style="float: right; font-weight: normal">Generate Ebook</strong>
					<br clear="all" ><br>
				</form>
			</div>
			<div class="tab tab3" style="display: none">
				<h2>Generate Blog eBook</h2>
				<p><strong>Save SETTINGS Before Generating Ebook</strong> Automatically generate a full eBook of all your blog posts. Including a Cover Page, Table of Contents, Page for each blog post and outro page. Set options once and you can generate new eBook when you have new blog posts.</p>
				<hr>
				<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
					<strong>Cover Image URL: </strong>
					<input type="text" name="coverImage" placeholder="URL to your image for Cover Photo" id="coverImage" value="<?php echo get_option('blogbook_coverImage'); ?>" />
					<hr><br>
					<strong>TOC Headline:</strong>
					<input type="text" name="tocHeadline" placeholder="Headline for Table of Contents" value="<?php echo get_option('blogbook_tocHeadline'); ?>" />
					<strong>TOC Sub-Headline</strong>
					<input type="text" name="tocSubHeadline"  placeholder="Sub Headline for Table of Contents" value="<?php echo get_option('blogbook_tocSubHeadline'); ?>" />
					<hr><br>
					
					<input type="hidden" name="action" value="save" />
					<input type="submit" value="Save Settings" class="save" style="float: left;"> 
				</form>
				<form action="<?php echo plugins_url() ?>/blogbook/save_blog.php"  target="_blank" method="post">
					<input type="hidden" name="coverImage"  value="<?php echo get_option('blogbook_coverImage'); ?>" />
					<input type="hidden" name="tocHeadline" value="<?php echo get_option('blogbook_tocHeadline'); ?>" />
					<input type="hidden" name="tocSubHeadline" value="<?php echo get_option('blogbook_tocSubHeadline'); ?>" />
					<input type="hidden" name="footerImage" value="<?php echo get_option('blogbook_footerImage'); ?>" />
					<input type="hidden" name="footerHeadline" value="<?php echo get_option('blogbook_footerHeadline'); ?>" />
					<input type="hidden" name="footerSubHeadline" value="<?php echo get_option('blogbook_footerSubHeadline'); ?>" />
					<input type="submit" value="Generate Ebook" class="generate" style="float: right;">
				</form>
				<br clear="all" ><br>
			</div>
			<div class="tab tab4" style="display: none">
				 <?php
		    		global $post;
					global $wpdb;
					$getPage = $wpdb->prefix . "blogbook_ebook";
					$templates = $wpdb->get_results("SELECT * FROM $getPage" ,ARRAY_A);
			
					$tpl = get_post_meta($post->ID,'_template',true);
					$checkNumber = 0;
					
					foreach($templates as $template)
					{
						$checkNumber += 1;
					} 		
		        ?>
		        <h2>Your eBooks</h2>
		        <?php foreach($templates as $template) { ?>
					<strong style="padding: 10px;font-size: 14px; text-transform: capitalize; float: left"><?php echo $template['name']; ?></strong>
					<strong style="padding: 10px;font-size: 13px; float: right;"><a href="admin.php?page=blogbook&edit=<?php echo $template['id']; ?>">Edit Ebook</a></strong>
					<strong style="padding: 10px;font-size: 13px; float: right;"><a href="admin.php?page=blogbook&delete=<?php echo $template['id']; ?>">Delete</a></strong>
					<br clear="all"><hr>
				<?php } ?>
				<br clear="all">
			</div>
			<hr>
			<span style="float: left; font-size: 12px; color: #999">Create PDF e-Books in Wordpress Instantly</span>
			<span style="float: right; font-size: 12px; color: #999">Copyright 2014 &copy; All Rights Reserved</span>
			<br clear="all">
		</div>
		<?php
	}

	function blogbook_content ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
		$content = get_the_content($more_link_text, $stripteaser, $more_file);
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		return $content;
	}

	function blogbook_snippet ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
		$content = get_the_content();
		return substr($content,0,80);
	}

	function blogbook_get_spin($matches)
	{
	    $rand = array_rand($split = explode("|", $matches[1]));
	    return $split[$rand];
	}
	 
	function blogbook_spin($str)
	{
	    $new_str = preg_replace_callback('/\{([^{}]*)\}/im', "blogbook_get_spin", $str);
	    if ($new_str !== $str) $str = blogbook_spin($new_str);
	    return $str;
	}
	

	function like_content($content) {
			global $post;
            $newContent = blogbook_spin($content);
			return $newContent;
	}
	add_filter( 'the_content', 'like_content' );


?>