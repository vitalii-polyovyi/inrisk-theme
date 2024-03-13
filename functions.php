<?php
define( 'TEXT_DOMAIN', 'inrisk' );
define( 'PATH_TO_INCLUDES', get_stylesheet_directory() . '/includes' );
define( 'PATH_TO_FRONT', get_stylesheet_directory_uri() . '/assets/dist' );
define( 'LAZY_PRELOAD', 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' );

include_once( PATH_TO_INCLUDES . '/languages.php' );
include_once( PATH_TO_INCLUDES . '/menus.php' );
include_once( PATH_TO_INCLUDES . '/remove.php' );
include_once( PATH_TO_INCLUDES . '/scripts.php' );
include_once( PATH_TO_INCLUDES . '/settings-acf.php' );
include_once( PATH_TO_INCLUDES . '/settings-seo.php' );
include_once( PATH_TO_INCLUDES . '/thumbnails.php' );

/**
 * Admin blocking access to robots
 */
function seo_warning() {
	if ( get_option( 'blog_public' ) ) {
		return;
	}
	$message = __( 'You are blocking access to robots. You must go to your <a href="%s">Reading</a> settings and uncheck the box for Search Engine Visibility.', TEXT_DOMAIN );
	echo '<div class="error"><p>';
	printf( $message, admin_url( 'options-reading.php' ) );
	echo '</p></div>';
}

add_action( 'admin_notices', 'seo_warning' );

function fix_svg() {
	echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

function add_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'add_mime_types' );

/**
 * Remove Contact Form 7 autop tags
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * FOR TESTING ONLY
 * disable spam filter contact form 7
 */
//add_filter('wpcf7_spam', function() { return false; });

/**
 * Cf7 data FOR TESTING
 *
 * @param $cf7
 *
 * @return void
 */
//function cf7_response( $cf7 ) {
//	$submission = WPCF7_Submission::get_instance();
//	// FOR TESTING ONLY - data before sending email
//	$posted_data = $submission->get_posted_data();
//	print_r( $posted_data );
//}
//// wpcf7_mail_sent
//add_action( 'wpcf7_before_send_mail', 'cf7_response' );