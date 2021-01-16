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
define( 'DB_NAME', 'wp_mywpsitelocal' );

/** MySQL database username */
define( 'DB_USER', 'wp_mywpsitelocal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_mywpsitelocal' );

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
define( 'AUTH_KEY',         'qH/op9Gs;zII-E%+y9&}Z&.hQwq&5_z6./$Z}q}BS&j>FiHEuiM]/_!t/>{)3NMb' );
define( 'SECURE_AUTH_KEY',  'DA&A1MrWFi6z-0DSAOWU2e<RB(2@E aayt^x%|`[4u;H`Yp?2oI=$AB<T^lgxsuj' );
define( 'LOGGED_IN_KEY',    '=0+1n$.}pYTMAW)UZ>?u/I$gisAF[}F.~9eK$m8_i5=0f&Xk?MEIuoZx1wZ4k_l^' );
define( 'NONCE_KEY',        'aI:4Fvrj}(09#=A;qO4,1p1*!uBTiuu--lBy>k}V+NQOJI!v?Xh`EDNqMa-={KT?' );
define( 'AUTH_SALT',        'cPr<d k8#zt0X%7zaK8;;>G#d1}`cu9*P8.j%JLQ$N{C-L4OC4r}.hu(gl<*gu(T' );
define( 'SECURE_AUTH_SALT', 'P9s #3 bM[q9DcL`u7TxXCy1y!mmg9Dwq`hvg{8qc&bwPlV3cmrW?%^;T87nq|M;' );
define( 'LOGGED_IN_SALT',   '>-1! cK8FnP739< z}[1:*NcO*m#tITybt(Bk6zR!E]e<!@%:Jkz76D.%uqg9,D/' );
define( 'NONCE_SALT',       'Hs%!+sRyU(m D/I~PV4.[|$j1w#IY?#c/Z:(tjKj8FBoue2S;oJ2L0J<$7K`G>;e' );

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
