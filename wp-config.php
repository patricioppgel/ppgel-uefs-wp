<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agenci14_wp305' );

/** Database username */
define( 'DB_USER', 'agenci14_wp305' );

/** Database password */
define( 'DB_PASSWORD', 'U5-[8p0vSG' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yenhwgcbt0nexkfuex1vh9mjdtpshaqzzgzck0qxveoqpqolpllrds6gexrx3pej' );
define( 'SECURE_AUTH_KEY',  'sipw6kj975noypfcexr0zbtyfzldtslwfui2ewnarisvjvcgx5ng6yl0gaspx93l' );
define( 'LOGGED_IN_KEY',    'ijjq1thopikj9tu7tnuh748zcsl3yockxdzfkytjgvzvzjhheejcjdva1nfkdl4p' );
define( 'NONCE_KEY',        'cuo3dxt5v07p4s3rougmq66zbrholpo5xwpirbke66kfcihcrwlwuprrut5dbeve' );
define( 'AUTH_SALT',        'eg9edyh5timdbb9nof0hx9hvrdhre8wz77mctq69sh29ljhhy9kuop7mho9i0imu' );
define( 'SECURE_AUTH_SALT', 'szrwxjhvxqfk4rz2stojbuqed1x4jitnjbmwndxmlswcv8bdmo5d1ebqelv0zshc' );
define( 'LOGGED_IN_SALT',   'kz6egzmtvi72hetbwfp7jdwxbsjdxe97miky2smglrzvu1albts7aad1ndwiimhy' );
define( 'NONCE_SALT',       '4jkgfnmifqqxodw8dm7kwjdtw9uj7keldxaqbjjvvbyucsnbanpc4nv3oo2otx15' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpre_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
