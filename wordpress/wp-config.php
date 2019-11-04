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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '42764ee9fee9243c60e2e4ab3c8c9432172838a8a7d19dfb' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ' elos22J3mk+=ulb/s5iZ.lHHgzt2<^Dg{o4ev,p(!6}uj0[h;rI=iS;x1B_v1t{' );
define( 'SECURE_AUTH_KEY',  ']%~0uFp@8Mn+2m>M*TZHfY?UiXwa4sa1)PpC?CBj& U]VfYH9(nK]0XN_9i$X?P ' );
define( 'LOGGED_IN_KEY',    '^!S$Uo<yCJQ3*)@K(nTjT8V>fB%MP#;p4F!&!yStwbzf8?+)!&9(]hZqEff2wqnP' );
define( 'NONCE_KEY',        'qGUtT]f3lX@:jby;whA+4(gfxzJclmJ%oWBA)<^XeDJw8W1sC60bW)FT[n0rA?D+' );
define( 'AUTH_SALT',        'L#LT-NJ4SX2w-> O(PU%G~F[aX(xP,i;UtdvP,^M!@Ga7~EP!4qR-Z;^hhZ0$3E^' );
define( 'SECURE_AUTH_SALT', '_1/QV#OCtv{A*0s7%)7#br8ZuR(n8`,P2?.G%8G+,3?VhEKaiLeI39$B)*q)A_Zm' );
define( 'LOGGED_IN_SALT',   '1%854;]~*A-`;Y_n,`=Za}R*50B3ld.E)[}ze@f{X^8(pzffZIY7MtcZ2Q)[.9bF' );
define( 'NONCE_SALT',       'r~-do&SAp*9`MR0,iRHG,)TW>e7:1x|I9jdp!_k7)lX@f@pHmSaq?z_ux]OP)`Cg' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
