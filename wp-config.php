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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '/bN;:6oECE]nXB4[Lz`o@BP@dA~DT[P8X{b_G{6P7mvs=_C<WeL*_kv<.9Vrka>n' );
define( 'SECURE_AUTH_KEY',  'AR227%?:Iz&!Ub^tx41Kz$v>U,n1t-k&P+77HB=dAhXi23Ql{#PyxOC,e>h3hvYz' );
define( 'LOGGED_IN_KEY',    'k>%K4kIwxycHRcKrMIb?T~~>ZuOhk*m=,6b!:Q,n6d2De_29~GpL^5&8vEw/(r;.' );
define( 'NONCE_KEY',        '<Zz`xODdk$ go#WYsR8vL/t^vv5z,S3x5&^|k2]2bE#[[9$QS5EC=g-W e&|`Gi=' );
define( 'AUTH_SALT',        'ey[jfSr{&gX%y[,>ah;r:Ja2SKZ+76Wg?Fs5,E/I2G~Q4gNnqR4}([th}~9Z2).,' );
define( 'SECURE_AUTH_SALT', '*pPKF~{IMml.qxHeX7&! ePowWv3unW*EHP/)&$VmPkl^{N`cUM:`iJMM^`&GW16' );
define( 'LOGGED_IN_SALT',   'goo}U]2*pvH<0W;uQGhA-iAB P_5R3Y6M:^=7eSL7)&A-cup[bH9!feB_]oj(T_B' );
define( 'NONCE_SALT',       'D$-9kS?q3e=o@;S-sj#!B]c,-Apu<7I=:|%GA/FQ^|!F/tXxN,f*gcEpfp2zRuHE' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// Contact form
define( 'WPCF7_AUTOP', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
