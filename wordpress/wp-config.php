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
define( 'DB_NAME', 'makeyourpcwordpress_db' );

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
define( 'AUTH_KEY',         'e*Hq,Gv9_<^g*)lE&-pJA`jJuyj7+Qsq.HR&LLXEttEKJN[ELP=V2Lz<aKeqL&H2' );
define( 'SECURE_AUTH_KEY',  'iYPshRgA}UGf3C)R7SX~|X?@&+7BmqCGZd9cr)Sw:L_A<4?4k.iJx>2.`O/+>$ZE' );
define( 'LOGGED_IN_KEY',    'Wo9%E> #QL;9:OU<[uc@b[7blp{rUJaR4p)2}Si/Qe)d7)$)>5jp>m_nw;j{qwgr' );
define( 'NONCE_KEY',        'r}:O6y+mTbJ}r+h><%22MmsL=Wt?hSLr4Qzm+pj)`eY|B6e5-{ena[k!?zQ0q.]3' );
define( 'AUTH_SALT',        'jg4P;~na$7 qAp1h]*Rpi`UA}PQ&wwq?V{;=w`e?^I7+&-/nSQP,}sNpC~#B&xMe' );
define( 'SECURE_AUTH_SALT', 'DAUE}Gfk@(Rs1M7L<n%Bj]:4?i0JgjSVa74Vf_=yC/pe:|[x9,R`oXbW=): pqMD' );
define( 'LOGGED_IN_SALT',   'Q%c{kaY#hPeL4+-p~q`/SyC7AVk<GH-%hG%}-^-qz)yA:Isa$3b~Rt!~g _VM9f%' );
define( 'NONCE_SALT',       '[lI{I{?M@V_m*81)EgGjNKc6eHH|8Ewvyc-2X:pP<G#3tr,^7Sv |:g5i9I5d1(A' );

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
