<?php
// ********* META DATA BOX ********************///

add_action('add_meta_boxes', 'nodopages_meta_box_add');

function nodopages_meta_box_add() {
    add_meta_box('nodopages-id', 'Link To Pulse Page', 'nodopages_meta_box_cb', 'page', 'side', 'high');
}

function nodopages_meta_box_cb() {

    global $post;
    $values = get_post_custom($post->ID);

    wp_nonce_field('nodopages_meta_box_nonce', 'nodopages_box_nonce');

    $nodopagesSelected = $values['nodopages_meta_box_select'];

    $webinar_id = $nodopagesSelected[0];
    ?>
    <h4 style=" margin-bottom: 0px; margin-top: 15px;">Select A Pulse Landing Page:</h4>
    <span style="font-size: 11px;">This page will be replaced with this pulse editor page...</span>
    <br>
    <select name="nodopages_meta_box_select" id="nodopages_meta_box_select"
            style="margin-top: 10px; width: 250px;">

        <option <?php
        if ($webinar_id == "0") {
            echo "selected='selected'";
        }
        ?> value="0">NONE
        </option>


        <?php
        global $wpdb;

        $table_db_name = $wpdb->prefix . "nodopages";

        $templates = $wpdb->get_results("SELECT * FROM $table_db_name ORDER BY ID DESC", ARRAY_A);

        foreach ($templates as $template) {

            $name = stripslashes($template['appname']);
            $id = stripslashes($template['ID']);
            $selectedBox = "";
            if ($webinar_id == $id) {
                $selectedBox = "selected='selected'";
            }

            echo "<option $selectedBox value='$id'>$name</option>";
        }
        ?>

    </select>

<?php
}

// Save Settings

add_action('save_post', 'nodopages_meta_box_save');

function nodopages_meta_box_save($post_id) {
    // Bail if we're doing an auto save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // if our nonce isn't there, or we can't verify it, bail
    if (!isset($_POST['nodopages_box_nonce']) || !wp_verify_nonce($_POST['nodopages_box_nonce'], 'nodopages_meta_box_nonce'))
        return;

    // if our current user can't edit this post, bail
    if (!current_user_can('edit_post'))
        return;

    // now we can actually save the data
    // Make sure your data is set before trying to save it

    if (isset($_POST['nodopages_meta_box_select']))
        update_post_meta($post_id, 'nodopages_meta_box_select', esc_attr($_POST['nodopages_meta_box_select']));
}

// Get post settings ::

add_action('template_redirect', 'nodopages_checkpost');

function nodopages_checkpost() {

    // get POST ID:
    global $post;
    $values = get_post_custom($post->ID);
    $nodopagesSelected = $values['nodopages_meta_box_select'];
    $pluginName = 'nodopages';
    $webinar_id = $nodopagesSelected[0];


    if ($webinar_id !== "0" && !empty($webinar_id)) {

        $client = urlencode($webinar_id); // used as global, do not remove

        // Return Option Object:
        $results = get_option('nodopages_campaign_' . $webinar_id);

        ?>
            
            <!DOCTYPE html>
            <!--  Nodo.io - Marketing Landing Pages -->
            <html>
            <head>
        
            <script type="text/javascript" src="http://nodo-landers.s3.amazonaws.com/app/tmp/ixOIz8AL8rjvXNnfCoIo5Mo765if4n3Dx<?php echo $results->nodo_page; ?>.js" ></script>

            <title><?php echo stripcslashes($results->meta_title); ?></title>
            <meta class="metaTagTop" name="description" content="<?php echo stripcslashes($results->meta_desc); ?>">
            <meta class="metaTagTop" property="og:image" content="<?php echo stripcslashes($results->meta_image); ?>" id="social-image">
            <link href="http://nodo-assets.s3.amazonaws.com/lander.css?v=20" rel="stylesheet">

             <style>
                #IntercomDefaultWidget{
                    display: none;
                }
             </style>

             <meta name="nodo-proxy" content="html" />
            </head>
            <body>
            </body>
            </html><!--  Nodo.io Lander -->
        <?php

        die();
    }
}