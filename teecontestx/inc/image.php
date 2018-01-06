<?php

// Image Uploader
function teecontestx_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	// wp_register_script(array('jquery','media-upload','thickbox'));
}

function teecontestx_admin_styles() {
	wp_enqueue_style('thickbox');
}

add_action('admin_print_scripts', 'teecontestx_admin_scripts');
add_action('admin_print_styles', 'teecontestx_admin_styles');


?>