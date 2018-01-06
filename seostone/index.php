<?php 

	/*
		Plugin Name: SEO STONE
		Description: Find out how well your blog is doing on Google, Alexa, and Important Social Networking Sites
	*/

	function seostone_adminSettings() {
	   add_menu_page('SEO STONE', 'SEO STONE', 'manage_options', 'seostone', 'seostone_adminPage', plugins_url().'/seostone/seo/favicon.png');
	}

	add_action('admin_menu', 'seostone_adminSettings');


	function seostone_adminPage() { ?>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
			
				$('#seoURL').change(function() {
					
					$('#seostone_iframe').attr('src', '<?php echo plugins_url(); ?>/seostone/seo/index.php?url='+$('#seoURL').val());
					 
				});

				$('#showpost').change(function() {
					
					$('#seostone_iframe').attr('src', '<?php echo plugins_url(); ?>/seostone/seo/index.php?url='+$('#showpost').val());
					 
				});

				$('#showpage').change(function() {
					
					$('#seostone_iframe').attr('src', '<?php echo plugins_url(); ?>/seostone/seo/index.php?url='+$('#showpage').val());
					 
				});
			
			});
		</script>

		<div style="width: 800px; margin-left: 15px; margin-top: 30px ">
			

<div style="width: 31%; float: left">
			<h3>Write URL to Test</h3>
			<input type="text" style="width: 90%" id="seoURL" placeholder="Paste in URL for Web Page">
		</div>
		<div style="width: 31%; float: left">
		  <h3>Select Post:</h3>
			<select style="width: 90%" id="showpost">
				<option value=""><?php echo attribute_escape(__('Select a Post')); ?></option> 
			 <?php
			 global $post;
			 $args = array( 'numberposts' => -1);
			 $posts = get_posts($args);
			 foreach( $posts as $post ) : setup_postdata($post); ?>
			                <option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
			 <?php endforeach; ?>
			 </select>
		</div>
		<div style="width: 31%; float: left">
		  <h3>Select Page:</h3>
		  <select style="width: 90%" id="showpage" name="page-dropdown"> 
		    <option value=""><?php echo attribute_escape(__('Select a Page')); ?></option> 
		    <?php 
		        $pages = get_pages(); 
		        foreach ($pages as $pagg) {
		            $option = '<option value="'.get_page_link($pagg->ID).'">';
		            $option .= $pagg->post_title;
		            $option .= '</option>';
		            echo $option;
		        }
		    ?>
		</select>
	</div>


		</div>



		<iframe id="seostone_iframe" src="<?php echo plugins_url(); ?>/seostone/seo/index.php?url=<?php bloginfo('url'); ?>" 
			style="width: 100%; height: 660px;margin-top: 30px; border: none" scrolling="0" frameborder="0"></iframe>
		
		<?php
	}


?>