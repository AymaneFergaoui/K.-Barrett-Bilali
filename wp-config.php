<?php
if ( file_exists( dirname( __FILE__ ) . '/gd-config.php' ) ) {
	require_once( dirname( __FILE__ ) . '/gd-config.php' );
	define( 'FS_METHOD', 'direct' );
	define( 'FS_CHMOD_DIR', ( 0705 & ~ umask() ) );
	define( 'FS_CHMOD_FILE', ( 0604 & ~ umask() ) );
}




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

define( 'DB_NAME', "o1v144995968728" );


/** Database username */

define( 'DB_USER', "o1v144995968728" );


/** Database password */

define( 'DB_PASSWORD', "U2AXyGgFfwy." );


/** Database hostname */

define( 'DB_HOST', "o1v144995968728.db.44995968.c59.hostedresource.net:3310" );


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

define( 'AUTH_KEY',         '.9d`x&H)9+9[D!q+g:f3b.-bXi~C:CgsdGwL`y>l^Oa4O$1Giy8jf:jKU;fo;}SY' );

define( 'SECURE_AUTH_KEY',  'z${07;)G8jh+mCTaB1uV|yf($7$njfG6Ehm4`pOr8Xf]To):CNa8q3lX9 X;d|QU' );

define( 'LOGGED_IN_KEY',    'U;EB-*pfCG(b]UX.en.yK60Y[%f3RQedU;GYry%&b;`Yu_T=-xzUr2#T1B0)FW`m' );

define( 'NONCE_KEY',        '@oR^?;~!G-bzFRPY^WMm3P4~0]4.aAYo@a@V?xwZ[%R9)2MyuhB9<q<R&j+)GZv}' );

define( 'AUTH_SALT',        'l!U4EFuN@Q?X$-[Y/To0! P]hw7[@aCjC|(WvB22)P5BJ|IXv 1[3h.ni)=]`i$X' );

define( 'SECURE_AUTH_SALT', '$2SwF!9PNOv6*tv;(g,XU6/2JlWZo*U|sgQ`L?49YO3&4gV;8:/9zwPoK?=1q#e-' );

define( 'LOGGED_IN_SALT',   '?sOSd_3[FAlY1Zx(0mxZ1ziJ:7e|q#.*rB`m#G^%5cbwN0:3p8N_ig!<pxoN-z^C' );

define( 'NONCE_SALT',       '>[o]3QXE`JqplOQ.>HcEA?)OG8 _*tcw,vV7K..q,?MtQluAimA?-eU5~t0vQ>]f' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = "wp_acn6jhyb8n_";


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




define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

