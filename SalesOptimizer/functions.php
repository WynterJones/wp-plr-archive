<?php
  // Edit Display Input
  function salesoptimizer_input($name, $placeholder, $title, $help, $id) {
    ?>
      <div class="input">
        <strong><?php echo $title; ?> <small><?php echo $help; ?></small></strong>
        <input type="text" name="<?php echo $name; ?>" placeholder="<?php echo $placeholder; ?>" value="<?php echo htmlspecialchars(get_option($name.'_'.$_GET['edit'])); ?>" />
      </div>
    <?php
  }
  function salesoptimizer_switch($name, $id) {
    ?>
      <div class="switch-wrapper">
        <input type="checkbox" value="on" class="switch" name="<?php echo $name; ?>" <?php if(get_option($name.'_'.$_GET['edit']) != NULL) { ?>checked<?php } ?> />
      </div>
    <?php
  }
  function salesoptimizer_textarea($name, $placeholder, $title, $help, $id) {
    ?>
      <div class="input">
        <strong><?php echo $title; ?> <small><?php echo $help; ?></small></strong>
        <textarea name="<?php echo $name; ?>" placeholder="<?php echo $placeholder; ?>"><?php echo htmlspecialchars(get_option($name.'_'.$_GET['edit'])); ?></textarea>
      </div>
    <?php
  }
  function salesoptimizer_selectOption($options, $values, $title, $help, $name, $id) {
    ?>
    <div class="input">
        <strong><?php echo $title; ?> <small><?php echo $help; ?></small></strong>
        <select name="<?php echo $name; ?>">
        <?php 
          $current = get_option($name.'_'.$id);
          echo $current;
          foreach (array_combine($options, $values) as  $option => $value) { 
            ?>
              <option value="<?php echo $option; ?>" <?php if($current == $option){ echo 'selected'; } ?>><?php echo $value; ?></option>
            <?php
          }
        ?>
        </select>
      </div>
    <?php
  }
  // Update Shortcode Options
  function salesoptimizer_update($options, $data, $id) {
    foreach (array_combine($options, $data) as  $name => $value) { 
      update_option($name.'_'.$id,stripslashes($value));
    } 
  }
  // Admin settings
  function salesoptimizer_wpadmin() {
     add_menu_page('Sales Optimizer', 'Sales Optimizer', 'manage_options', 'salesoptimizer', 'adminpage_for_salesoptimizer', plugins_url().'/SalesOptimizer/include/favicon.png');
  }
  add_action('admin_menu', 'salesoptimizer_wpadmin');
  function adminpage_for_salesoptimizer() { 
    include('admin/jquery.php');
    include('admin/css.php');
    if ( $_GET['edit'] != '' ) { 
      include('admin/edit.php');
    }
    elseif ( $_GET['clone'] != '' ) { 
      include('admin/clone.php');
    }
    else {
      include('admin/new.php');
    }
  }
 
  function salesoptimizer_new($name, $date) {
    $name   = esc_sql( $name );
    $date = esc_sql( $date );
    global $wpdb;
    $table_db_name = $wpdb->prefix . "salesoptimizer";
    $wpdb->insert( $table_db_name, 
        array( 
       'name' => $name,
       'date' => $date
        )
    );
    return mysql_insert_id();
  }
  function deleteSalesOptimizer($id) {
    $id   = esc_sql( $id );
    global $wpdb;
    $table_db_name = $wpdb->prefix . "salesoptimizer";
    $wpdb->query($wpdb->prepare("DELETE FROM $table_db_name WHERE ID = $id", '' ));
  }
  // Create Shortcode
  function salesoptimizer($atts, $content = null) {
    extract(shortcode_atts(array(
      "id" => '#'
    ), $atts));
    global $post;
    global $wpdb;
    $getPage = $wpdb->prefix . "salesoptimizer";
    $templates = $wpdb->get_results("SELECT * FROM $getPage" ,ARRAY_A);
    $tpl = get_post_meta($post->ID,'_template',true);
      foreach($templates as $template) {
      }
    return "<script >function resizeIframe(obj) {obj.style.height = obj.contentWindow.document.body.scrollHeight  + 60 + 'px' ;}</script><iframe scrolling='no' ALLOWTRANSPARENCY='true' id='the_iframe_".$atts['id']."'  frameborder='0' style='width: 100%; height: 80px;  margin: 0; display: block;  position: relative' src='".plugin_dir_url( __FILE__ )."shortcode/index.php?edit=".$atts['id']."' onload='javascript:resizeIframe(this);'></iframe>"; 
  }
  add_shortcode("salesoptimizer", "salesoptimizer");
?>