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
define( 'DB_NAME', 'wp_wik' );

/** MySQL database username */
define( 'DB_USER', 'Dwikay' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dwikyadham1' );

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
define( 'AUTH_KEY',         '^qCmq;Qw]BA&{A~6xUX`8M8z4tXGc1]s/1C/dR52a{8|PRW>(p@pNsKRky:?s;JZ' );
define( 'SECURE_AUTH_KEY',  '5u(kl;aouT&~G,9At,X(Z1A2x ARkdYIpb5yLmepGV>HMO]P_--O3KQP(ixm1j&[' );
define( 'LOGGED_IN_KEY',    'krz_VQm(`f:qF@i<fj5E+/ov/Uw}OA=Nk%y!3{pc5ipF7bC<^FQ$<faK:T._1oyg' );
define( 'NONCE_KEY',        ',-}R3>YZAS+|Y!kP%@_13Wj&iE@s9S60;~cLB3}p6`-$;ZE;A^>rd{[ig07v)hD>' );
define( 'AUTH_SALT',        'gon :A*^@$@;yg$F|DpY|H7rC_X9vT!=e(@VhX0v!pR__*L] SdL,w>%@>hbJr7R' );
define( 'SECURE_AUTH_SALT', 'oQ|lM=xBG3iIZ4yjLADX.Xb/GZI)=2/FVrzXs>bZ{Q]<]C{j]>rM{|Ru3;heKEUd' );
define( 'LOGGED_IN_SALT',   '0<P:r;@Vq7me+x0.I[:p:9D7sx*wo9hsICU>{f,{4Kw%#n!jZL5VOg7NWA*hr;s1' );
define( 'NONCE_SALT',       'nwi2V=8@PBuDyfMKS-jz3MtzKqzU3S#H?H~ 1 78f6rI(tMD{+{&gH2.B5mHuF5v' );

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