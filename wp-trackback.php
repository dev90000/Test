<?php
/**
 * Handle Trackbacks and Pingbacks Sent to WordPress
 *
 * @since 0.71
 *
 * @package WordPress
 * @subpackage Trackbacks
 */

if (empty($wp)) {
	require_once( dirname( __FILE__ ) . '/wp-load.php' );
	wp( array( 'tb' => '1' ) );
}

//This is my local rahul branch changes.
