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
define( 'DB_NAME', 'wp556' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=<DkgnKlcfEn-u4Fm5ku5SN|=.<)6.KnX/fCQr yJ2pjD+Vxu%],pyE8L{Ni}l?:' );
define( 'SECURE_AUTH_KEY',  '@oO+ul.Sg6B_M*k?4OS;rVyEr^=sGPA>5=mBs{a-E4tILUM~F`#fZhTiu[%&>6+P' );
define( 'LOGGED_IN_KEY',    'kDm3zx>;+>~Cl9orQv,e/;lOK]gQz&X`CCLVZ$D9daaL@kB8Z$*;Y|CG9&9/Bw`5' );
define( 'NONCE_KEY',        '8=_0Xc!3I` -r8+p;s1VN#z liXZ-jh$d/FPo9GX8xV3kr::=!V9>1LlpA=%!!m ' );
define( 'AUTH_SALT',        'usJD+@jtzmT>e;i &Yll=z>^U^a8xW/U9JYw3f/b6YLl.UrIuXS ;>Dl-x!(Fr=`' );
define( 'SECURE_AUTH_SALT', '6>g|#$N$SHBpN5X)Jl1a@xUrS4c(#~1rr`%hE8/QPH@q9&<$|d(,r{Rh(DlNs1& ' );
define( 'LOGGED_IN_SALT',   'IwirKnXW2q<uc,|E1&a*yXn]a(W~M}G-bW;pM9Vb$~ZHq0l9MPlq^4.Jb:17JNZa' );
define( 'NONCE_SALT',       '<Cs]8B!W4yp~n&:ii,|?-3lc,sB-a4+qM40x|qOe@]rcY6XVIoyFnG2<B~cp$I{,' );

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
