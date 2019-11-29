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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '/>-zzrwvPCcF~%Jezzz&kq-ZAAVdEt:t0hB+_Tw`V3K6+}YoIj9y&kb&6V0]~KGg' );
define( 'SECURE_AUTH_KEY',  '[fP5gP+#-;kXL720.^Az^[G^w>Mq%.z[n~ub%:6iL&t%(Up$wYA?;s;q!?;(xIs(' );
define( 'LOGGED_IN_KEY',    '6_2)Z3sm)PbwnoJSm!aGoOX%r9;PSQVGtl{)EhB(4Wcp&SH1nGL{(oP8JN]f_ddu' );
define( 'NONCE_KEY',        'xx<]G!i!$84&T&Q(Ya GK2oKB!=zN~8~z`qriBg(hyK_Fx);vtkXL[<rcNYw+ONF' );
define( 'AUTH_SALT',        'vqfMU*$k~4$p7Tp9z`F~JvYK+o!|AvkYDAG`1E?^(SvgK3hJ,tUvCgNr(l<i>6V4' );
define( 'SECURE_AUTH_SALT', 'vzUN@S9qWosBwSooie8He|&8~%Xq/f5c~^clFnF]-%ddtv(;hwOT6)r.vzle<:8#' );
define( 'LOGGED_IN_SALT',   '.,0atUBtnA|#Z@p5b+VKu;F#XJ*qUPtCCB=..NQm68@c#m65%o23<!D)NkU2J=dh' );
define( 'NONCE_SALT',       'Yd%/s&t$b{S>::s`8b#Eqw-g0<,$P9W#j|QNNJ`|vgJh6J:GCr<UI+eC}/}c>@r5' );

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
