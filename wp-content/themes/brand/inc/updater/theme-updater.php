<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'http://api.wp-brandtheme.com/1.0/get_version', // API server
		'item_name'      => 'Brand', // Name of theme
		'theme_slug'     => 'brand', // Theme slug
		'version'        => BRAND_VER, // The current version of this theme
		'author'         => 'Massimo Sanfelice | Maxsdesign', // The author of this theme
	),

	// Strings
	$strings = array(
		'update-notice'             => __( "Updating this theme? 'Cancel' to stop, 'OK' to update.", 'brand' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'brand' ),
	)

);
