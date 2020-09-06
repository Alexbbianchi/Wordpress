<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aLzAj/nO6lMkGzs5XlxWxG4VrSX4r3mw7mzlh/vD4OAqr47XcE9xnJY1wjr5HhJBFnPWIxAWaUVYqQm+M2JIMA==');
define('SECURE_AUTH_KEY',  'apy8CkiLj/EbKc4Fs/iJhsCFuIZeUhSwgAt9Zio15zJr3bYS72za73q8R5wPfv89CeWyJU9p4/wpNgc+488SNA==');
define('LOGGED_IN_KEY',    'uDjmO03d4fk+ie1ya7uxEiPCow9W+ru+qHLRuL98fOW59I/SirlAT1EtyFQqVA3QrY+cIDNZPdIMqilH4XrnvQ==');
define('NONCE_KEY',        'ifHqRewtneLz4lQeLLnptccWTjdBLGKn7frOE/Q8jlmsy9j9JUHo8S05tttSwvpQIepl8BzN982Drt6xCYgjyQ==');
define('AUTH_SALT',        'zXgmm9Y2NR33lOjORr5fFA2vDpiJKzWIU5e169vve6jByyN11GEi+uQz4XvtTu2kuFFKHqB9Om1Q8R1JDfUOag==');
define('SECURE_AUTH_SALT', 'WPLLkL1DmERBsXFWQowZzYN7o6SYIosgGxRUGVZEZMr96wA5EO9HIgZTGtojYFYYBmHMdKwlsEAfx9zp+NXPSg==');
define('LOGGED_IN_SALT',   'z00eTP9azETo0vrsVpYQUpiLRvqEXIGoubG4D1oGu/2YJwa3LrKPKBx1imTtjkvIR21rwl/hk99VoNfv5Vd4Yg==');
define('NONCE_SALT',       '+7dixh3AUq0s/M1Gf3dsGAx8Uk+uGGdUXwMopLINPEt6yqXAyF6ebbq8MOwLRd61qy/MUKFU4hVVv1ytlzKDSQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
