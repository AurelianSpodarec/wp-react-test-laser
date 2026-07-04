<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-react-test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'WuuPLquRWiTHKY90WK7Z7PsBSiKdfUEsTmlO3DJOdJTf4OeN5v2KLZmBMbL4SVOi' );
define( 'SECURE_AUTH_KEY',  't5xsH1RD5OACXuIWFlaTzATEAH8Ex6tiNkIah1SVI4e5JTtJ6bUypqAjP8CpEibY' );
define( 'LOGGED_IN_KEY',    '4KkZFbV6zEvF5sh1SKEIE8G1h15IeahmiKY2Fdfq0EXKU3r4Znm8HXanv6T5PZYO' );
define( 'NONCE_KEY',        'uhp0E8MvOcsKkjHXP8mGZiw60C8SFfJOKJdi5IDjzs4AZm2McjyirHiFXS5LA4Ov' );
define( 'AUTH_SALT',        '1iwxPZaxdHABTPNM0IKKM68KwEvNsVcrqa59F3Bz1lJ8kXeSdOGUUvu30Z8QoiP6' );
define( 'SECURE_AUTH_SALT', 'Gtlg18LCTvGrks6IHkSGifFGJmOAvC1Ha3Wxe5xqs21wLoOzVy5TW98azffSD0LN' );
define( 'LOGGED_IN_SALT',   's9bdmaUlJgW44I4xCbGIf2Zbqtr9VVO80mquZU4EULQDr92CrQojHRPmJOfgWaRp' );
define( 'NONCE_SALT',       'CK8ZwZ0BcUWP2CQPWU8bXimX9erCMFDf6vmDu2TjnNWB83L7dkvqpVNNPyF0uSBy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
