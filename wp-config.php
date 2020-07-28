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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' @qBK$l9%Cw/SE^9UuO(nk;V-XmhlT[LLw[{=2(z2;$-Hal/_sSQ`rIm2B=]<?<w' );
define( 'SECURE_AUTH_KEY',  'p7Eqw2I7J)&VLMGC5Ry> yN/,.r>umWbH[v@^sha1N?i<5:pVh}iBf-B&^XHH=IB' );
define( 'LOGGED_IN_KEY',    '+*jww>PW<U_OqGv$9Hwz1d/UNMI{zy+o[l=K9NNVG=T3-O+-o=]4o;@oQ#1w#juB' );
define( 'NONCE_KEY',        'e?4`?VH.xO`-%/)/9noS.z5~:Zui >}Q[c =AL%JrDnFzY/&j&^K9[P6)oo!R]30' );
define( 'AUTH_SALT',        'M}Ag_q}=mSln;?M@7Rsx=soY!%Ia[z`&s+EmG.JNZp]Olp{(hc5X2/-&p;B<|#-}' );
define( 'SECURE_AUTH_SALT', 'u5^Z*:A8xVO) Tf>6/DpE[yq0`kg6L~Vh{V+qjb>w@:cO2[.{POPy*J`~Tmy}MU(' );
define( 'LOGGED_IN_SALT',   'I!?SDPZ?aL`]S5jGOmAx0dpJ9@kv#FTyCJ-;~FDT(R*h&Mps&4WqT{sv@p<:@[4F' );
define( 'NONCE_SALT',       'U=I$jIQ<=Ior0S=N[akOTRI_`XK1uoNQvrg$p7g%WJff~~O3+qKY~hNX !X@4k.+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
