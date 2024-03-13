<?php
// Theme thumbnails

add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails

/**
 * Remove all the image sizes keeping only the default WordPress image sizes
 */
function remove_extra_image_sizes() {
	foreach ( get_intermediate_image_sizes() as $size ) {
		if ( !in_array( $size, array( 'thumbnail', 'medium', 'medium_large', 'large' ) ) ) {
			remove_image_size( $size );
		}
	}
}

add_action('init', 'remove_extra_image_sizes');

/**
 * Limit media uploader maximum upload file size
 * @param $file
 *
 * @return mixed
 */
function limit_upload_file_size( $file ) {
	// set limit in kB
	$image_limit = 500;
	// get filesize of upload
	$size = $file['size'];
	// Calculate down to KB
	$size = $size / 1024;
	$type = $file['type'];
	// get image type of upload
	$is_image = strpos( $type, 'image' ) !== false;
	if ( $is_image && $size > $image_limit ) {
		$file['error'] = sprintf( __( 'WARNING: You should not upload images larger than %d KB. Please reduce the image file size and try again.' ), $image_limit );
	}

	return $file;
}

add_filter( 'wp_handle_upload_prefilter', 'limit_upload_file_size' );