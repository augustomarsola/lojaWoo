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
define('AUTH_KEY',         'BMLuajmzd/3DhvXwctI6fiew/DvwpYdwV7vIcvN8SWaDXnmMMjwf5ikjwLWYQUaqc02bTsd8e32fX3uxAA9Xrg==');
define('SECURE_AUTH_KEY',  'q0sFaZbTVwLBRXLFzAR5Ik5MtxmONjHyjKZXvHpVRwTYT6x1qG128mQquyw1kZSkGhs2kGrn6sDerSsF6H1PUw==');
define('LOGGED_IN_KEY',    'zCpVwNxz1IBK3ALn6tVIRnodGAbX5rBMl0+FzyfTEQtYBHaI82aLrHM82zj8qPeL8kunb1+RiWDMTcR6vxOasA==');
define('NONCE_KEY',        'Fagcfxu9NH0EGw9YpDKLmN6ZzZUgzZ3wf89CyhO8jEFfErxFWVGKr1R8hmzVsE4t8rCmZDDk+8iJO34Eq8dxSQ==');
define('AUTH_SALT',        'XonBSPI2G7vYnGruCo5QAHuDnjXmkGISAc/J9lvRkKtiN8gx8p6uDFL1cttkbPaNLBVO+sG8uY0XwSoxi4bUIQ==');
define('SECURE_AUTH_SALT', 'MW9yWJHYTgUcvRdVTfkGwW4U8evRHyK00QhF/k8+lv0IN4h7uVa9+r4CnNwiGqGdDxRZ4mHSQRTq0+KIHv49PA==');
define('LOGGED_IN_SALT',   'Qbc/nUx2N5Gciad61xWvlYo2SR7ErLJj2cLXDwiKCkeFxlQuLvyGl1iPeHa8tTDKOxJH1G7rYLKOTujlFDJ7XQ==');
define('NONCE_SALT',       'JxshLEppuZkmhoBuruOAmcSqLVPuipnyzfBSnH19n+qyb1Ixb4g+SXpsnMwOpZ0CHxZyxFK+NW6cK6KP9R24RQ==');

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
