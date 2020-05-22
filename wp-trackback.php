<?php // Set the database table prefix and the format specifiers for database table columns.
$GLOBALS['table_prefix'] = $table_prefix;
wp_set_wpdb_vars();

// Start the WordPress object cache, or an external object cache if the drop-in is present.
wp_start_object_cache();

// Attach the default filters.
require( ABSPATH . WPINC . '/default-filters.php' );

// Initialize multisite if enabled.
if ( is_multisite() ) {
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-site-query.php' );
	require( ABSPATH . WPINC . '/class-wp-network-query.php' );
	require( ABSPATH . WPINC . '/ms-blogs.php' );
	require( ABSPATH . WPINC . '/ms-settings.php' );
} elseif ( ! defined( 'MULTISITE' ) ) {
	define( 'MULTISITE', false );
} ?>
