<?php
/**
 * Plugin Name: An Introduction To Plugin Development - Demo Plugin
 * Author: Cameron Jones
 * Author URI: https://mongoosemarketplace.com
 * Plugin URI: https://mongoosemarketplace.com/wcbne19
 * Description: Example plugin from An Introduction To Plugin Development at WordCamp Brisbane 2019
 * License: GPL v2
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Add our custom stylesheet to the login page
 */
function an_introduction_to_plugin_development_wcbne_19_stylesheet() {
	wp_enqueue_style( 'an-introduction-to-plugin-development-wcbne-19-styles', plugins_url( 'styles.css', __FILE__ ) );
}

add_action( 'login_enqueue_scripts', 'an_introduction_to_plugin_development_wcbne_19_stylesheet' );

/**
 * Update the logo link on the login page to go to our website
 *
 * @param string $login_header_url The URL the logo clicks through to.
 * @return string
 */
function an_introduction_to_plugin_development_wcbne_19_link( $login_header_url ) {
	$login_header_url = 'https://mongoosemarketplace.com';
	return $login_header_url;
}

add_filter( 'login_headerurl', 'an_introduction_to_plugin_development_wcbne_19_link' );

/**
 * Update the link text on for the logo on the login page
 *
 * @param string $login_header_text The login header logo link text.
 * @return string
 */
function an_introduction_to_plugin_development_wcbne_19_text( $login_header_text ) {
	$login_header_text = 'Visit Mongoose Marketplace';
	return $login_header_text;
}

add_filter( 'login_headertext', 'an_introduction_to_plugin_development_wcbne_19_text' );
