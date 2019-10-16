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
define( 'DB_NAME', 'github_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`FC2q_o%7>LOy#X!hyTk(wf]N+nJwA10c.fGK<>9ki-S+LgeG?eTN$NG;2eZ_lsP' );
define( 'SECURE_AUTH_KEY',  'c#>/I-MuZ9,F>/zhak*#N&mrS9145Znv;B&g6/V<>xvDhgwJ2F@05Xo1M7f;rv*D' );
define( 'LOGGED_IN_KEY',    'c!7$hJ`)>WjG=P{IPV/n}$l8/0I2zwg $Q )ybiD9{1qH]~e,Ovr&xPBr@V*,c%!' );
define( 'NONCE_KEY',        ';n:Y-6w?9C:WX&.;3&}IPE`V8qcwlFOVFX+a${vLpFgzeVT%7Fvn@d{5 cPzb(;#' );
define( 'AUTH_SALT',        '#kDHQ@2qx7J5#<-va{H~s+.1_4H$7]|=G]-:n&:T$~t]n<[P.q|Q-wQBiDWM|aI}' );
define( 'SECURE_AUTH_SALT', '=ez0I0vKM( x[[#T.`%y2Wx&@y^uq5xXWM=WK`>-9+!IhzH0mx@(]CN|6!`6s!U<' );
define( 'LOGGED_IN_SALT',   '3S[9J.z$6 ,I-FT6,FU<CHNx xgf`-3I#0dEjPK;}|:xxpehueko 0GVz8D`kK5@' );
define( 'NONCE_SALT',       '}?(<7omL~^}Ez-Ce_Tg|deXa9aU~yahcK-4,oQ8IVnX*2pbDtVnHk#QHOi#4HqXJ' );

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
