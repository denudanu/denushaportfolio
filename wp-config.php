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
define( 'DB_NAME', 'denushaportffolio_db' );

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
define( 'AUTH_KEY',         '6RR%UGq;m|Oj3W|c)[W`F9YW!O}xU:uR6. toeY%B+[0XINN4}9GHIj+<&BJmuNm' );
define( 'SECURE_AUTH_KEY',  ',{=yaxk/H0v~ieF4f;4MXYaqp5]Hi{xs)*RbRG=e<.**:^*_%<)`U&vMM.,pT~#c' );
define( 'LOGGED_IN_KEY',    'vpxwk]cx|<P445(<7A9C*agT=|RVl>Amks-6||%X1r/W<l.S36=PyDJf(@nNcX%t' );
define( 'NONCE_KEY',        ' kiaY>A:|V1w%1 $Yiuwz*0GWzedq_%+cZT:Ut0 mAexG{JBf-xo%c0Pj>5Z[>e[' );
define( 'AUTH_SALT',        'I%ge2)LF{bTuV)EYP|X:pB;qz$yx5DUD#FsFqZTO}V*H77v8N5XY3SPH;dok_M={' );
define( 'SECURE_AUTH_SALT', 'K$lC|8#-/m0q],8Bvc^e|w!{vk$MBDD+znNPl.f:}Ma?]iY}Xujcc,,g7~Gv^@ZI' );
define( 'LOGGED_IN_SALT',   '4w2=QB^SiU&Osl8=D<f@b5T|Q3?WQ,@bL N5[$j3%+z0>!c2ZS+Pu=L18$k*!RLv' );
define( 'NONCE_SALT',       '%z_5a}<pS@gbW!8H4Z`+%HhW4F{bLdYi7O2J*n{xFv~.x/g$2^s,SgwHav6. Cnh' );

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
