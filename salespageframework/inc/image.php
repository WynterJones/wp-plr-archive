<?php

// Image Uploader
function salespageframework_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	// wp_register_script(array('jquery','media-upload','thickbox'));
}

function salespageframework_admin_styles() {
	wp_enqueue_style('thickbox');
}

add_action('admin_print_scripts', 'salespageframework_admin_scripts');
add_action('admin_print_styles', 'salespageframework_admin_styles');


?>