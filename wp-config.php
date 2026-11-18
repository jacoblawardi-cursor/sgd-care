<?php
/**
 * The base configuration for WordPress
 * Configured for SGD Care (Home Maintenance)
 */

// ** Database settings - Configured for local MAMP environment ** //
define( 'DB_NAME', 'sgd_care' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/** Authentication unique keys and salts. */
define( 'AUTH_KEY',         'a3b8d9e2f4c1e7a5b6d9c2e4f7a1b3d5c8e2f6a9b4c7d1e3f8a2b5c7d9e1f4a6' );
define( 'SECURE_AUTH_KEY',  'c1e7a4f9b2d8c3e6a1f5a85e4c0d9518a42f6e9b8f2d5a3c1e7b9c2d5a8f1e4a' );
define( 'LOGGED_IN_KEY',    'f6a9c2d5e8b1f4a7b3c6e9d2f5a8b1c4e7a9b2c5d8e1f4a7b5c8d2e6a9f3b1c7' );
define( 'NONCE_KEY',        '8e9a2b5d4c1f6a3e7b9c2d5a8f1e4a7b3c6e9d2f5a8b1c4e3f6a9c2d5e8b1f4a' );
define( 'AUTH_SALT',        '3c7e9a2f5b8d1c4e6a9f2b5d8c1e4a7b3f6a9c2d5e8b1f4ad5a8f1e4a7b3c6e9' );
define( 'SECURE_AUTH_SALT', 'd5a8f1e4a7b3c6e9d2f5a8b1c4e7a9b2c5d8e1f4a7b3c6e96a9f2b5d8c1e4a7b' );
define( 'LOGGED_IN_SALT',   'e7a4f9b2d8c3e6a1f5a85e4c0d9518a42f6e9b8f2d5a3c1eb1c4e7a9b2c5d8e1' );
define( 'NONCE_SALT',       'b1c4e7a9b2c5d8e1f4a7b3c6e9d2f5a8f6a9c2d5e8b1f4a7e7a4f9b2d8c3e6a1' );

/** WordPress database table prefix. */
$table_prefix = 'wp_';

/** For developers: WordPress debugging mode. */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
