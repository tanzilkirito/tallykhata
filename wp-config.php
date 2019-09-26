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
define( 'DB_NAME', 'tallykhata' );

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
define( 'AUTH_KEY',         '3^>)R,ZZZPd!=t~>qu^GoI:&fogzt/E~Y>SPz$O.o7Z0~jxfx*,Nd*uN<sBr,s,%' );
define( 'SECURE_AUTH_KEY',  'Q:?p@R#&=0TB)cG~;f6zN Xl=w?IAs*An`Vb~!Al[B+eEb?WC:><B)6]<SEdhd3A' );
define( 'LOGGED_IN_KEY',    'ViBAR/`.MYm!_]-vW*X^7E:hjfWlMDY<6 Z_[cP8WA)O/I!gj*fM(w#I?_/i%L?>' );
define( 'NONCE_KEY',        '-r4`G4G,pi]0~bp%T2lCz34DJ`WM/,?b7;uor%(/7pCNR=A*uy7$$CgSY8updj#D' );
define( 'AUTH_SALT',        'm-a)^Y[t6@EeP77.rD]>sxneq^V{^hqq/2+ATGd8|%Jf5G4]/!QY#60*j()>T:8J' );
define( 'SECURE_AUTH_SALT', '&d,tzPlaF/~utQoz0J[r!vnu@A031n&{QfaU0t)DW =B0$qr(=#Zh.zxh>CpWE]Y' );
define( 'LOGGED_IN_SALT',   't:*ny,4P;_v$0rro=ovb/Ix,Q>ZO)vosFv.?XN.K+yWeuZnYs:/7%YMU# ~L(.ip' );
define( 'NONCE_SALT',       '&Py3$=q+#J]QCdB{}3EEJ|e1,WN#/G=yMt[U)0e*xH|f^)T9C;c`{nb7S&LaRCzk' );

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
