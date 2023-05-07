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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web260kassa' );

/** Database username */
define( 'DB_USER', 'zckassa' );

/** Database password */
define( 'DB_PASSWORD', 'ZeKas0522' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'JwhyQejn8m&CN3t[3bf_[;Y!/8,/Ulb<@UiJpjj8:AI)(=+A~UHpA]pOzF&[[P@u' );
define( 'SECURE_AUTH_KEY',  '}fe8dY=wbE:}%z|hS^t@vX!8CkVW]Wywhob)S:8w=2eaD=}4ipU/gV9zu&(~24C{' );
define( 'LOGGED_IN_KEY',    'YCyeSw_`Yga1&am;A*NJZ/3&,&#XA)s)i<]5`5.yBC_o20P*|(TxcE25hWFTUv8E' );
define( 'NONCE_KEY',        'qKER,zqk#pRPU^W_~o7[8iR:[=mRjS0zZ}D:sfK*v|U{~b$)?6fyGk[VuH+J^fv ' );
define( 'AUTH_SALT',        '>iVRh3TQK=F+2%A|25}6rX~`MV3yk61mV}2a n-xDS8wK~B3U@Nj.I5g5f<K{q;G' );
define( 'SECURE_AUTH_SALT', 'jYU0R`qzdY3=a3vmI^V8jEd]|z`yBBR83@_3*IZpC&CAsC)VZVe7S1TkQ!RseQJS' );
define( 'LOGGED_IN_SALT',   'l L{On.,0H>g&bzr6%SK+[jb)(N=`.S]E@S..fYp6EINobXnf8,;=w~+BCn>=HqW' );
define( 'NONCE_SALT',       '$Na?WXv_na_U[Wg%:d0pIF0f;58Vxx|l_k1C5Imf7olY2[szz6SG.l-R5/74vY<W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
