<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u725178045_GwqMH' );

/** Database username */
define( 'DB_USER', 'u725178045_OIali' );

/** Database password */
define( 'DB_PASSWORD', 'f6GABsKPpC' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '{QeuFrb8Eh@/*~82 K|%[L[]aHdEs^7NIZC4ZT[{4O)M[Wf1QY]Q5vT6:-x_@sf>' );
define( 'SECURE_AUTH_KEY',   '0,Jx%Z^psL>N7}u#kGD,z&ZMk*6+247(V$,g01V@yofJ.$rbFs/)6+%<^+}PJAp?' );
define( 'LOGGED_IN_KEY',     'BFg4JhHesv3Vr`=o*a%A]p^GUOddA`m8Nn%%0mE46j%Ig(^B=JLd9b;RYl&b. ^V' );
define( 'NONCE_KEY',         'O{?=grr166_+[zQkCpx}v:wHC*3Pi.T]]}J*J7>IL@v)<E#_@gbx$VXnI!CVzRbd' );
define( 'AUTH_SALT',         'Anf&5ui0-XJ5>J=?/0Q~HDhQB)[-%0MnHL `;q$ZAXvg7vUU[`c>6=KzJ<P>Vs~h' );
define( 'SECURE_AUTH_SALT',  '3`,?m$~+5I>>_iq+.I@Bhazqq&r;*L?z SO|*9~r3phc|Mv|rT>XBYdXkqUiooWA' );
define( 'LOGGED_IN_SALT',    '=;:q0f 0NARN9u;RPr?SK$YM7/8jH#5E~{eU^6AuE FDpY(49HL?d8=$J} pn}ds' );
define( 'NONCE_SALT',        'ug(=dd)ZK/jwoQuv%|3fyr2.|OMfmh %@Xg*M%N:wAT?Ykg(3mn/+%>:c5c!YvSw' );
define( 'WP_CACHE_KEY_SALT', 'a%l_#y2O>1s}>*W.{ D^u#E6hi#E]EVoiSv&%0-EGLUh}zlEraUwXtG3w,XK<ay|' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
