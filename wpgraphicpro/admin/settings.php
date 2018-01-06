<?php
function displayInput($title, $help, $id) {
  ?>
  <strong><?php echo $title; ?> <small><i class="fa fa-question-circle"></i> <?php echo $help; ?></small></strong>
  <input type="text" name="<?php echo $id; ?>" class="newInput" placeholder="<?php echo $help; ?>" value="<?php echo stripcslashes(get_option('embedfire_'.$id)); ?>" />
  <?php
}
?>
<div id="logo">
  <a href="https://embedfire.com/" class="black-btn"><i class="fa fa-user"></i> Login to EmberFire.com</a>
  <a href="https://embedfire.com/new" class="black-btn" style="margin-right: 10px;"><i class="fa fa-plus"></i> Create New Widget</a>
  <h1><img src="../wp-content/plugins/embedfire/inc/images/logo.png" alt="" /> <span>Embed<strong>Fire</strong></span></h1>
</div>
<div id="adminSettings">

  <div class="sidebar">
    <div class="sidebarInner">
      <div class="navs">
        <a href="#" tab="tab1" class="tabLink active"><img src="../wp-content/plugins/embedfire/inc/images/favicon.png" alt="" /> EmbedFire</a>
        <a href="#" tab="tab3" class="tabLink"><i class="fa fa-cog"></i> Shortcodes</a>
        <a href="#" tab="tab2" class="tabLink"><i class="fa fa-lock"></i> API Key</a>
      </div>
    </div>
  </div>
  <div class="content">

    <form method="post"  action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
      <input type="hidden" name="action" value="new" />
      <input type="hidden" name="date" value="<?php echo date("F j, Y"); ?>" />


      <!-- Tab 1 -->
      <div id="tab1" class="tab">
        <div class="header">
          <i class="fa fa-wordpress"></i>
          <h2>WP EmbedFire Plugin</h2>
          <h4>Power up your widgets. Beta version.</h4>
        </div>
        <div class="tabs">
          <a href="//fast.wistia.net/embed/iframe/nb1gp9agvi?popover=true" class="wistia-popover[height=360,playerColor=7b796a,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/6928fcba8355e38de4d95863a659e1de23cb2071.jpg?image_play_button=true&image_play_button_color=7b796ae0&image_crop_resized=650x366" alt="" /></a>
<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
        </div>
      </div>
      <!-- Tab 2 -->
      <div id="tab2" style="display: none;"  class="tab">
        <div class="header">
          <i class="fa fa-lock"></i>
          <h2>Add Your API Key</h2>
          <h4>Connect to your EmbedFire.com account.</h4>
        </div>
        <div class="tabs">
          <?php
          displayinput('API Key', 'Copy and Paste Your API Key Here', 'apiKey');
          ?>
          <br>
          <span style="float: right; color: #8A9672; font-weight: bold; display: none;padding-top: 4px" id="msg"><i class="fa fa-check-square-o"></i> Updated API Settings</span>
          <a href="#" id="save" class="button-primary button">Save API Settings</a>
          <br clear="all"><br>
          <!--  -->
        </div>
      </div>

      <!-- Tab 3 -->
      <div id="tab3" style="display: none;"  class="tab">
        <div class="header">
          <i class="fa fa-cog"></i>
          <h2>Your Shortcodes</h2>
          <h4>Copy and paste these shortcodes to use in any post or page.</h4>
        </div>
        <div class="tabs">
          <div id="shortcodes">

          </div>
        </div>
      </div>

      <div style="padding: 0 20px;background: #fafafa">

      </div>
    </form>
  </div>
  <br clear="all" />
</div>
<div id="footer">

  <p> Copyright &copy; 2014 EmbedFire.com -  Running BETA Version <?php echo embedfire_version(); ?></p>


</div>
