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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=Q#5M)>4oX[j*(i)9!F`J@+@KSD&u;4T<!-<DFl!-cH,@,7~C0qf~j)PMvPPHL54' );
define( 'SECURE_AUTH_KEY',  'xG~Nn *6]-xmJ-Ob9R6PtA4`1?5${#@l==P1}9|S+f!,w&}AH4sgC1.y1Hw(_w[=' );
define( 'LOGGED_IN_KEY',    '8OE@kF0?f(@d %Fu+O16QTSf/t:}[=9w3+S(}mner&.lJAZH%mPf]n1 kX-M<VT#' );
define( 'NONCE_KEY',        '8kLSJ&8DdZ8MFcIRyBj5GB:QbID&B%3QUPkLa!n}ymzN>8!fWwRx>]J&NKZlN-Lw' );
define( 'AUTH_SALT',        '2<M(4T%X|p@2):HfYFre+mpO4Wy5E=;Be)HS]KKl15O7:KVi@RV{c[;TQk~@_d[=' );
define( 'SECURE_AUTH_SALT', 'FNmfDkO#YZz8YW$k^g^cQK4nqqDX}}@4pmAjHo2MN._{s8C#OLi,E3k yuox-4R/' );
define( 'LOGGED_IN_SALT',   '$7:+^Lx#9^(z`HOasFwqUAkKU~?q?Q=j|z+jvByk]H?r?|BE`XZ5<M$Z4cm ?G/n' );
define( 'NONCE_SALT',       'k&VOS|wU&8@P;J^sgnI)0suJ:Dgk^sQM9DCVG-rjZPQvY||4^+4B.D;/#A)kT^lM' );

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
