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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'chirag' );

/** MySQL hostname */
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

define('AUTH_KEY',         '*}}R+VO[`Vz+E|vKTh]tquQ_DbpV.g8v<V$>/|ZdX1[#-O<o5~fGNA+<Y4Pr,XB`');
define('SECURE_AUTH_KEY',  'dBpxH=9B&o)-DM/_01X*=%8i!oSUzDNIZ?BmWQ+q?D;,5+M|hjP85=!06T`66z^Z');
define('LOGGED_IN_KEY',    'M^O0,@2lo;XxM82@6&MS{qVrDVV$|DKGKh+cy[?LqZ,S0lLw3d}Xd)*YYV4pP~ig');
define('NONCE_KEY',        '=%< O/a0}m^s/?Jp)YZ<Le%!2-@g4rNy2A|?|<Ad31V&Xvg@|Q?^ce5)9V]pIy35');
define('AUTH_SALT',        '%@(qD!g~E[+mt>UYO0kr?us8LQL954B7,}5xu0*( g-zIvNQqQwAY,C4y@B/of3b');
define('SECURE_AUTH_SALT', 'ae+jfBBH=xPopsnOmAC!yFwB,|e)O`#Tig+hoO0SUdz+N$TY!Y6SIw:O?#EBCsS:');
define('LOGGED_IN_SALT',   '#+=,c5[=[ew(^)!*zTF WF/[yZ)^xNCWRP_T /+ii+1U6;{=q>) c)~YY?s#rZ6b');
define('NONCE_SALT',       'UjCNfZm/@[kni#;}U+g&QZ?8b@`@[,H-_+iC(iawOiAa,|NPU1+nZGm#wuTxdBU:');


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
