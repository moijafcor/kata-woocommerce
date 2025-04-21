<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kata-woocommerce' );

/** Database username */
define( 'DB_USER', 'testlocal' );

/** Database password */
define( 'DB_PASSWORD', 'uuy66asss990asafsiuouoyyouyo' );

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
define( 'AUTH_KEY',         'XhTqxo?DDq?Cu7?/,/CMz`7yl>7SAqDkbf]H,ksLDpJU?.lx{sM:MIrd?jicU}=R' );
define( 'SECURE_AUTH_KEY',  '><*<;TIMeIja8Wxy8-nX M#7uX!V`pboG-:lkqbLVm~@xRC,qH5dE(Jsrhb*IfA*' );
define( 'LOGGED_IN_KEY',    '^mz.9SVw~M5J(<;s U/]D!C$O?Qs_R4f(~b=.8%=|x0_ZxV3pa0V{YkeLvQ+s+dg' );
define( 'NONCE_KEY',        'd?c!5j[V((T]2q#tk W?.6C{wh;TPLvgig6Vg{!!*/!A{^3z^t0`y>!|MS#$| b2' );
define( 'AUTH_SALT',        ')/U@*ooh[j&-A*V23b+iQ6tjmJll|$TRbITjMQ8BR?.[@GE@*])s(73|Va?h;4%@' );
define( 'SECURE_AUTH_SALT', '{hpNIMVed$M`b]RPN3_2lO)4Mz 8i3G|`l=eN!{dXS}FsPuWYTF% :5sgcK^f?;~' );
define( 'LOGGED_IN_SALT',   '`6`3;`aHb8$vI}0w18f^O ]{/i8bW|azpNe/r@Tx[9xc6gCZK+i+tz~5g1X#zg,o' );
define( 'NONCE_SALT',       'E,RYZB+A3Xfh|hX`NxKbUG5._H~m+n{!NAHe5c4sI^(R|mu3+%lwuQW0= D8]@-B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
