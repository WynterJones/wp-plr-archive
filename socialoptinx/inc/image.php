<?php

// Image Uploader
function socialoptinx_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	// wp_register_script(array('jquery','media-upload','thickbox'));
}

function socialoptinx_admin_styles() {
	wp_enqueue_style('thickbox');
}

add_action('admin_print_scripts', 'socialoptinx_admin_scripts');
add_action('admin_print_styles', 'socialoptinx_admin_styles');


?>