<?php
/**
 * Include to theme scripts css js
 */
function scripts_styles() {

	$in_footer = true;
	// CSS
	wp_enqueue_style( 'main-style', PATH_TO_FRONT . '/css/style.min.css', array() );
	// JS
	wp_enqueue_script( 'animation-script', PATH_TO_FRONT . '/js/aos.js', array(), time(), $in_footer );
	wp_enqueue_script( 'main-script', PATH_TO_FRONT . '/js/app.min.js', array( 'jquery' ), time(), $in_footer );
	//	if ( ! is_admin() ) {
	//		// Core jQuery
	//		wp_deregister_script( 'jquery' );
	//		wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', false, null, $in_footer );
	//		wp_enqueue_script( 'jquery' );
	//	}

}

add_action( 'wp_enqueue_scripts', 'scripts_styles' );

/**
 * Additional script attributes
 * @param $tag
 * @param $handle
 *
 * @return array|mixed|string|string[]
 */
function make_script_async( $tag, $handle ) {
	// CF7 reCAPTCHA
	if ( 'google-recaptcha' != $handle ) {
		return $tag;
	}

	return str_replace( '<script', '<script async', $tag );
}

add_filter( 'script_loader_tag', 'make_script_async', 10, 3 );

/**
 * Add preloading CSS
 * @param $html
 * @param $handle
 * @param $href
 * @param $media
 *
 * @return string
 */
function add_rel_preload( $html, $handle, $href, $media ) {
	if ( is_admin() ) {
		return $html;
	}

	$html = <<<EOT
<link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" 
id='$handle' href='$href' type='text/css' media='all' />
EOT;

	return $html;
}

add_filter( 'style_loader_tag', 'add_rel_preload', 10, 4 );