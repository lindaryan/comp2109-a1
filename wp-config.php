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
define( 'DB_NAME', 'comp2109-a1' );

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
define( 'AUTH_KEY',         'WJYg0GL2_4XrWz5aD;1{q$vJa[Oaco38nPPiTyY|c/`15p#Bf_x77R{?-tJ}2GFk' );
define( 'SECURE_AUTH_KEY',  '&r[l-n%0w&`6V[my@]s2!fjRQY>Sxg->lt~F!YKsl2cS1+GJnv%7#.}t+jk?vtB2' );
define( 'LOGGED_IN_KEY',    'pFnE~1$~8;/u^.DJ8opS1&MzhROo-M_N?Y$910qzMpQ7fB*#5<-^A?EpSg7BNNhX' );
define( 'NONCE_KEY',        'VK9h/y?InB!:*C2x?f|1kC)U~ /clciUj!L,bNyA{[;&r?F7ZM?Tg<<ndpqzPaz?' );
define( 'AUTH_SALT',        'K;u:4|7[L43!>:1d]wdROZ1=k63afysGW_HCxx#=wQ<id%p[Yl0!`+.{Dz>@Scxi' );
define( 'SECURE_AUTH_SALT', '!usww9z`^TUWRIyU1z) vzetZ=R0)=L$gwr-7VY{fSHWF2A T.#2mEL]g=7jIOz?' );
define( 'LOGGED_IN_SALT',   'T}^mXY[vn=R/eoZ1P8q5#dTUXH/?L@WjllcE)K:K9ZbAG6iY4ySf?DUYe~ZFX?Yc' );
define( 'NONCE_SALT',       'EX#+-Ca4H2}U;yG5uQ;:`Kz`HfKwu4-YK1a9o5uSvpA<6djA-sxGoazRN?~=-EiB' );

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
