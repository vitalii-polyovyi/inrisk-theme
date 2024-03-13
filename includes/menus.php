<?php
// Theme menus
register_nav_menus( array(
	'main_header_menu'   => __( 'Main Header Menu', TEXT_DOMAIN ),
	'footer_first_menu'  => __( 'Footer First Menu', TEXT_DOMAIN ),
	'footer_second_menu' => __( 'Footer Second Menu', TEXT_DOMAIN ),
	'footer_third_menu'  => __( 'Footer Third Menu', TEXT_DOMAIN ),
) );

/**
 * Add 'active' class arg to menus
 * @param $classes
 * @param $item
 *
 * @return mixed
 */
function add_active_class_to_menu_item($classes) {
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_active_class_to_menu_item', 10, 2);

/**
 * Replace default 'sub-menu' class for the submenu ul
 * @param $classes
 * @param $args
 * @param $depth
 *
 * @return mixed
 */
function change_submenu_class($classes, $args) {
	if( isset($args->theme_location) && $args->theme_location == 'main_header_menu' ) {
		// Remove the default 'sub-menu' class
		$classes = array_diff( $classes, array( 'sub-menu' ) );

		// Add the new class 'sub-menu__content'
		$classes[] = 'menu-item-has-children__content';
	}
	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'change_submenu_class', 10, 3);

/**
 * Add custom class to the links
 * @param $atts
 * @param $item
 * @param $args
 *
 * @return mixed
 */
function add_specific_menu_atts( $atts, $args ) {
	if( isset($args->theme_location) && $args->theme_location == 'main_header_menu' ) {
		$atts['class'] = 'menu-header-link';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_atts', 10, 3 );