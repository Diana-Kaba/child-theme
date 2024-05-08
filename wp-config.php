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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simple-theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'n/UIr=Zt;Uy:>j3b_Zo_?L2}6*X%bh1cAV9lMn/}XSf4Jqs]d*qlM0;na<%L+P:*' );
define( 'SECURE_AUTH_KEY',  'a`a$4m820D1sC3N^6mhA0fu)[vb$0V6_%8aPbGNG+FR6dU]=<8fv0#PyRaRw4|;c' );
define( 'LOGGED_IN_KEY',    'QIcfDcFd,2X~SEl[@xl]uH X40=ck%pnY/@b,h=kgcP8<m^wKu;<xR@&,7<a+OGc' );
define( 'NONCE_KEY',        '~5`+ -g9mvA3$;6,BQ9D!#&joB=b^:@;^?qERhCx42CYDF|h&daE9zx;bf%~4 [E' );
define( 'AUTH_SALT',        'h;KpTE,S@|u@emOIi`OHhmBui(s$S6mFAX8C.gy=>9A+CQj&K-a]cN$L[`Pwfw5.' );
define( 'SECURE_AUTH_SALT', 'f}6H}K(A~*L~FJs?7/dMd3|:hKrOoQ+oKQ%Yhrx&)8BHQ`Lc,8fyu`FnbS]$4VYM' );
define( 'LOGGED_IN_SALT',   '$3utG.z@W*sJw%=,*r?-7*-d%l&`>^WqPL?$=MLk_>!.sEQ#nCv.f+T)T=B>A5{b' );
define( 'NONCE_SALT',       'u6D,[HrO1%eay`wR!Q~GMM@=gST6c3A#n$vRBwK@:eJ_PZ1#) D=v|`gRB6rcJ3l' );

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
