<?php
/**
 * ober-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ober-child
 */

/**
 * Enqueue styles.
 */
function ober_child_stylesheets() {
	wp_enqueue_style( 'ober-child-style', get_template_directory_uri() . '/style.css', array( 'ober-main' ), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'ober_child_stylesheets' );
