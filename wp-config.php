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
define( 'DB_NAME', 'motshagen' );

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
define( 'AUTH_KEY',         'c]~.8/bA0Dzb8^e{K{^96X<U.O6nxun>%0_%8cWr0M-%A]`~zT/?5fuZHf>me9J:' );
define( 'SECURE_AUTH_KEY',  '9q]f ^ dpcF?pOl4LlkaF{->%-CAVa&>Kc;Q5Wl3X+~7E>F&BqUtkSz*X) 5KsgM' );
define( 'LOGGED_IN_KEY',    'Fnqbq@#Cr?<#e-2g0qF2#%;iE3M vW!+I1~H48c5Vce[pi_?Tn+8k.`c:5YW:$m=' );
define( 'NONCE_KEY',        '.rCzwg~mB|sRn>3v&-d`QGlyGfF~9Ys9+Rv7+n7nNAzd(O+SHi3;}`Pn@r7,X=r ' );
define( 'AUTH_SALT',        'AgNe^Jx!]u};a`_Kx.uid2T_2Q=>O^lw3)j&bH^dLA)<PwBs8WyE3L_bxWG.t9e@' );
define( 'SECURE_AUTH_SALT', '},XK6;(y}=?O)(?a5jkj*g`4)Dd~J]`4&+:?qDysqYsF`;4qVN4eQKJo0J )3<@W' );
define( 'LOGGED_IN_SALT',   'S{<LpMcl4s<H$;6LAaM:{sxYrz)a-5sQuj0JU74G6*lA|B lJM_$l<SE4%)m45u^' );
define( 'NONCE_SALT',       'ZHr,H77=>je{?{#@Ih:r(~c=PqpX;OVryG)/|}5OoktSlS&DJ~_=)N#nWmzOL[&(' );

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
