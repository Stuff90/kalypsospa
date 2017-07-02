<?php
/**
 * Create custom classes to the theme elements.
 *
 *
 * @package Brand
 */

/**
 * Display the classes for the navigation wrapper.
 *
 * @since 1.0
 * @param string|array $class One or more classes to add to the class list.
 */
function brand_nav_wrapper_class( $class = '' ) {
	// Separates classes with a single space, collates classes for post DIV.
	echo 'class="' . join( ' ', brand_get_nav_wrapper_class( $class ) ) . '"'; // WPCS: XSS ok.
}

/**
 * Retrieve the classes for the navigation wrapper.
 *
 * @since 1.0
 * @param string|array $class One or more classes to add to the class list.
 * @return array Array of classes.
 */
function brand_get_nav_wrapper_class( $class = '' ) {

	$classes = array();

	if ( !empty($class) ) {
		if ( !is_array( $class ) )
			$class = preg_split('#\s+#', $class);
		$classes = array_merge($classes, $class);
	}

	$classes = array_map('esc_attr', $classes);

	return apply_filters('brand_nav_wrapper_class', $classes, $class);
}

/**
 * Display the classes for the header wrapper.
 *
 * @since 1.0
 * @param string|array $class One or more classes to add to the class list.
 */
function brand_header_wrapper_class( $class = '' ) {
	// Separates classes with a single space, collates classes for post DIV.
	echo 'class="' . join( ' ', brand_get_header_wrapper_class( $class ) ) . '"'; // WPCS: XSS ok.
}

/**
 * Retrieve the classes for the header wrapper.
 *
 * @since 1.0
 * @param string|array $class One or more classes to add to the class list.
 * @return array Array of classes.
 */
function brand_get_header_wrapper_class( $class = '' ) {

	$classes = array();

	if ( !empty($class) ) {
		if ( !is_array( $class ) )
			$class = preg_split('#\s+#', $class);
		$classes = array_merge($classes, $class);
	}

	$classes = array_map('esc_attr', $classes);

	return apply_filters('brand_header_wrapper_class', $classes, $class);
}

/**
 * Display the classes for the footer.
 *
 * @since 1.0
 * @param string|array $class One or more classes to add to the class list.
 */
function brand_footer_class( $class = '' ) {
	// Separates classes with a single space, collates classes for post DIV.
	echo 'class="' . join( ' ', brand_get_footer_class( $class ) ) . '"'; // WPCS: XSS ok.
}

/**
 * Retrieve the classes for the footer widgets container.
 *
 * @since 1.0
 * @param string|array $class One or more classes to add to the class list.
 * @return array Array of classes.
 */
function brand_get_footer_class( $class = '' ) {

	$classes = array();

	if ( !empty($class) ) {
		if ( !is_array( $class ) )
			$class = preg_split('#\s+#', $class);
		$classes = array_merge($classes, $class);
	}

	$classes = array_map('esc_attr', $classes);

	return apply_filters('brand_footer_class', $classes, $class);
}

/**
 * Display the classes for the site info.
 *
 * @since 1.2.1
 * @param string|array $class One or more classes to add to the class list.
 */
function brand_site_info_class( $class = '' ) {
	// Separates classes with a single space, collates classes for post DIV
	echo 'class="' . join( ' ', brand_get_site_info_class( $class ) ) . '"'; // WPCS: XSS ok.
}

/**
 * Retrieve the classes for the site info.
 *
 * @since 1.2.1
 * @param string|array $class One or more classes to add to the class list.
 * @return array Array of classes.
 */
function brand_get_site_info_class( $class = '' ) {

	$classes = array();

	if ( !empty($class) ) {
		if ( !is_array( $class ) )
			$class = preg_split('#\s+#', $class);
		$classes = array_merge($classes, $class);
	}

	$classes = array_map('esc_attr', $classes);

	return apply_filters('brand_site_info_class', $classes, $class);
}

/**
 * Displays the classes for the main title header.
 *
 * @since 1.7.0
 * @param string|array $class One or more classes to add to the class list.
 */
function brand_main_title_class( $class = '' ) {
	// Separates classes with a single space, collates classes for post DIV.
	echo 'class="' . join( ' ', brand_get_main_title_class( $class ) ) . '"'; // WPCS: XSS ok.
}

/**
 * Retrieves the classes for the main title header.
 *
 * @since 1.7.0
 * @param string|array $class One or more classes to add to the class list.
 * @return array Array of classes.
 */
function brand_get_main_title_class( $class = '' ) {

	$classes = array();

	if ( !empty($class) ) {
		if ( !is_array( $class ) )
			$class = preg_split('#\s+#', $class);
		$classes = array_merge($classes, $class);
	}

	$classes = array_map('esc_attr', $classes);

	return apply_filters('brand_main_title_class', $classes, $class);
}
