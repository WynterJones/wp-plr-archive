<img src="../wp-content/plugins/wpsocialboost/logo.png" style="float: left;  " alt="">
<div style="width: 440px; float: left; padding:  0 30px; text-align: center">
  <h2 style="font-size: 32px; padding-top: 50px; line-height: 32px;font-weight: 700; opacity: .9; ">Combine The Power of Social Share Buttons and Email Marketing</h2>
</div>
<br clear="both">
<div id="adminSettings">

  <div class="sidebar">
    <div class="sidebarInner">
      <div class="navs">
        <a href="#" tab="tab1" class="tabLink active"><i class="fa fa-cog"></i> Dashboard</a>
        <a href="#" tab="tab4" class="tabLink"><i class="fa fa-code"></i> Shortcodes</a>
        <a href="#" tab="tab2" class="tabLink"><i class="fa fa-edit"></i> Content</a>
        <a href="#" tab="tab3" class="tabLink"><i class="fa fa-envelope"></i> Auto Responder</a>
        <a href="#" tab="tab5" class="tabLink"><i class="fa fa-level-down"></i> Scroll Popup</a>
        <a href="#" tab="tab6" class="tabLink"><i class="fa fa-external-link"></i> Exit Popup</a>
        <a href="#" tab="tab7" class="tabLink"><i class="fa fa-facebook"></i> Social Links</a>
        <a href="#" tab="tab8" class="tabLink"><i class="fa fa-video-camera"></i> Video Shortcode</a>
      </div>
    </div>
  </div>
  <div class="content">

    <form method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
      <input type="hidden" name="action" value="new" />
      <input type="hidden" name="date" value="<?php echo date("F j, Y"); ?>" />
      
      <div id="tab4" class="tab"  style="display: none;"  >
        <div class="header">
          <i class="fa fa-code"></i>
          <h2>Shortcodes</h2>
          <h4>Add These to Your Posts and Pages</h4>
        </div>
        <div class="tabs">
          <h3>Add Social Boost Optin Box</h3>
          <input type="text" value="[wpsocialboost]" />
          <hr><br>
          <h3>Add Viral Video</h3>
          <input type="text" value="[wpsocialboost_video youtube='' vimeo='']" />
          <hr><br>
          <h3>Add Scroll Popup</h3>
          <input type="text" value="[wpsocialboost_scroll]" />
          <hr><br>

          
          <h3>Add Exit Popup</h3>
          <input type="text" value="[wpsocialboost_popup]" />
          
          <p>Add these shortcodes to your blog posts or pages. Copy and paste into the Wordpress editor to have them appear and activate for that specific post.</p>
        </div>
      </div>

      <!-- Tab 1 -->
      <div id="tab1" class="tab">
        <div class="header">
          <i class="fa fa-cog"></i>
          <h2>Setup Social Optin Box</h2>
          <h4>Collect Emails Leads and Increase Social Shares</h4>
        </div>
        <div class="tabs">
          <h3>Learn How to Setup</h3>
          <p>SocialBoost gives you new ways to boost your followers, get viral traffic and collect email leads. Watch the how-to video to learn how to setup each shortcode for your blog.</p>
          <iframe width="420" height="315" style="width: 100%; height: 400px;" src="//www.youtube.com/embed/6G7LbCSDHnM" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <!-- Tab 2 -->
      <div id="tab2" style="display: none;"  class="tab">
        <div class="header">
          <i class="fa fa-edit"></i>
          <h2>Content Settings</h2>
          <h4>Edit the content for your Social Optin box.</h4>
        </div>
        <div class="tabs">
        <?php 
          function displayInput($title, $help, $id) {
            ?>
                <strong><?php echo $title; ?> <small><i class="fa fa-question-circle"></i> <?php echo $help; ?></small></strong>
                <input type="text" name="<?php echo $id; ?>" class="newInput" placeholder="<?php echo $help; ?>" value="<?php echo stripcslashes(get_option('socialboost_'.$id)); ?>" />
            <?php
          }
         ?>
          <?php 
              displayinput('Open / Close Button', 'Button to open and close opt-in box.', 'openButton');
              displayinput('Facebook Button', 'Text for the Facebook Button', 'facebookButton');
              displayinput('Twitter Button', 'Text for the Twitter Button', 'twitterButton');
              displayinput('Like Us Headline', 'Text for Facebook Button', 'facebookHeadline');
           ?>
          <!--  -->
        </div>
      </div>
      <!-- Tab 3 -->
      <div id="tab3" style="display: none;"  class="tab">
        <div class="header">
          <i class="fa fa-envelope"></i>
          <h2>Auto Responder Settings</h2>
          <h4>Edit the content for your e-mail auto-responder form.</h4>
        </div>
        <div class="tabs">
           
           <?php 
              displayinput('Optin Headline', 'Headline for Your Auto-Responder Form', 'emailHeadline');
              displayinput('Placeholder Text', 'Grey Placeholder Text for Email Input', 'emailPlaceholder');
              displayinput('Optin Button', 'Button Text for Auto-Responder Form', 'emailButton');
              displayinput('Spam Text', 'Notice for Anti-Spam', 'emailSpam');
            ?>
            <strong>Auto Responder Code <small><i class="fa fa-question-circle"></i> HTML Email Form Code</small></strong>
            <small>Make sure your form is only accepting an e-mail address (no name field)</small>
            <textarea name="autoresponder" class="newInput" placeholder="HTML Email Form Code"><?php echo stripcslashes(get_option('socialboost_autoresponder')); ?></textarea>
          <!--  -->
        </div>
      </div>
      <!-- Tab 5 -->
      <div id="tab5" style="display: none;"  class="tab">
        <div class="header">
          <i class="fa fa-level-down"></i>
          <h2>Scroll Popup</h2>
          <h4>Edit the settings for popup that happens when user scrolls to bottom.</h4>
        </div>
        <div class="tabs">
           
           <?php 
              displayinput('Popup Headline', 'Headline for Your Scroll Popup', 'scrollHeadline');
            ?>
           <p>When the user scrolls to the bottom of your post this popup with your headline and Facebook URL in the "Social Links" tab. The popup will scroll up when the users scrolls up on the page.</p>
          <!--  -->
        </div>
      </div>

      <!-- Tab 6 -->
      <div id="tab6" style="display: none;"  class="tab">
        <div class="header">
          <i class="fa fa-external-link"></i>
          <h2>Exit Popup</h2>
          <h4>Edit the settings for when users leave your blog post.</h4>
        </div>
        <div class="tabs">
           <?php 
           displayinput('Facebook Page URL', 'URL to Your Facebook Page', 'facebookPage');
              displayinput('Popup Headline', 'Headline for Your Exit Popup', 'exitHeadline');
              displayinput('Overlay Color', 'Customize the Color of Overlay - Use Hex Color - #000000', 'overlayColor');
            ?>
           <p>When the user moves their mouse away from your blog this popup will show with your headline and Facebook Page URL. The popup will show only once per post or page.</p>
          <!--  -->
        </div>
      </div>

      <!-- Tab 7 -->
      <div id="tab7" style="display: none;"  class="tab">
        <div class="header">
          <i class="fa fa-facebook"></i>
          <h2>Social Links</h2>
          <h4>Add Your Facebook Likes and Tweet Text</h4>
        </div>
        <div class="tabs">
           <?php 
              displayinput('Your Blog URL', 'Add URL for Blog for Facebook Likes', 'facebookURL');
              displayinput('Tweet Share Text', 'Add Text for Share Tweet', 'socialText');

            ?>
           <p>These links are used within the shortcodes like the popup, scroll popup and others.</p>
          <!--  -->
        </div>
      </div>
      <!-- Tab 8 -->
      <div id="tab8" style="display: none;"  class="tab">
        <div class="header">
          <i class="fa fa-video-camera"></i>
          <h2>Viral Video Shortcode</h2>
          <h4>Add Custom Headline for Video Shortcode</h4>
        </div>
        <div class="tabs">
           <?php 
              displayinput('Like Us On Facebook', 'Social Text Below Your Video', 'videoText');

            ?>
           <p>These links are used within the shortcodes like the popup, scroll popup and others.</p>
          <!--  -->
        </div>
      </div>
      <div style="padding: 0 20px;background: #fff">
        <span style="float: right; color: #8A9672; font-weight: bold; display: none;padding-top: 4px" id="msg"><i class="fa fa-check-square-o"></i> Updated and Saved Settings</span>
        <a href="#" id="save" class="button-primary button">Save Settings</a>
        <br><br>
      </div>
    </form>
  </div>
  <br clear="all" />
</div>
<div id="footer">

  <p><span><strong>WP Social Boost</strong></span> Copyright &copy; 2014 - WP Social Boost Plugin</p>
</div>