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
define( 'DB_NAME', 'guiadb' );

/** Database username */
define( 'DB_USER', 'guiauser' );

/** Database password */
define( 'DB_PASSWORD', 'Is9LmO$fx0^N&An@X&BHN0' );

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
define( 'AUTH_KEY',         '_i^/lTmBx_R8zU9=]ilD#u1MHC5~Kro[$Hzxg|S>|SI+~qpmOra@(4ySgaYp!B=*' );
define( 'SECURE_AUTH_KEY',  'x<C55}2ZRe,>#(NA_x^Z>+9~5}g#|]6CPRG4aEU_$?NhU>i[m}Gh9$oQ`mEgB[+P' );
define( 'LOGGED_IN_KEY',    '9$3ZYY2X8mH2xg_$hM^jXSPJzTG8!Pl1=J{Cvi{d2mO:9(aa,MG-pQQkN[%IUv L' );
define( 'NONCE_KEY',        '^5eT{4 oJYi Rl;kJcp_-GaYS<%$KW0p/JahL{{g#v@l&r.X};I1{thj68H7^xt:' );
define( 'AUTH_SALT',        'bfL5Z;~VAFU.n%PI:.aITe4l|/&0t(pSrW/;tTOlE/GE<|=wvo36#z1_$[z,>m#R' );
define( 'SECURE_AUTH_SALT', '0 g?JhW)4a$gk06r^P46j1_ FAWHh9gG8i~g:0mB}!{>#zz.@]v>:u^GJZcytTj6' );
define( 'LOGGED_IN_SALT',   'nmd@zt!ii|RNIxAed=`Ay^b%(#b!qESk8${=n3.9!Qg;XVyBaJ:~HRxAVr+LD#p,' );
define( 'NONCE_SALT',       ']v!n]kR?-[P5mj6t$3jcZ:G3qOV.l`t%;-x,[-i#L.po{Jbp4.1,z}@=.[-~eE|m' );

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
