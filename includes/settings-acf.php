<?php
/**
 * Options tab
 * @return void
 */
function acf_op_init() {
	if ( function_exists( 'acf_add_options_page' ) ) {

		// Add parent.
		$parent = acf_add_options_page( array(
			'page_title' => __( 'Theme General Settings' ),
			'menu_title' => __( 'Theme Settings' ),
			'redirect'   => false,
		) );
	}
}

add_action( 'acf/init', 'acf_op_init' );

/**
 * Custom Wysiwyg Editor Toolbar
 * @param $toolbars
 *
 * @return array
 */
function acf_change_wysiwyg_tools( $toolbars ) {
	// Uncomment to view format of $toolbars
	/*
	echo '< pre >';
		print_r($toolbars);
	echo '< /pre >';
	die;
	*/
	// Unset Basic Type Toolbar
	unset( $toolbars['Basic'] );
	// [1] formatselect. bold, italic, bullist, numlist, blockquote, alignleft, aligncenter, alignright, link, wp_more, spellchecker, fullscreen, wp_adv
	// [2] strikethrough, hr, forecolor, pastetext, removeformat, charmap, outdent, indent, undo, redo, wp_help
	// Register a basic toolbar with a single row of options
	$toolbars['Full'][1] = [
		'formatselect',
		'bold',
		'link',
		'unlink',
		'removeformat',
		'forecolor',
		'hr',
		//'bullist',
		//'numlist',
		//'slogan_text' // custom
	];
	$toolbars['Full'][2] = [];

	return $toolbars;
}

add_filter( 'acf/fields/wysiwyg/toolbars', 'acf_change_wysiwyg_tools' );