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
define( 'DB_NAME', 'velilinedb' );

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
define( 'AUTH_KEY',         'x@/Q@N? {u}jPRNxA#=!j2Cc_-2PKn6a*h!.uE:gQ#JF0:u&T}Bhn37_RG$J`{)c' );
define( 'SECURE_AUTH_KEY',  'MHoR|iTV<?u,W3}`$rgj|:xcX-yqJ89FLummXv2MvM=(%oQ,R8(^!t3w=]Pd_cL2' );
define( 'LOGGED_IN_KEY',    ' >M#MTGU<&{fGfC|ozWN5e@^5E tFT5yGW!0X//=Ka{6klsH~wsE~blf%cT)m*Jb' );
define( 'NONCE_KEY',        '|^V{lis}%&j1yT8g06N`1fu#Wi|N5bG_Za^?`5.yvyIz{nsIY3G&?ZX7~ K>^A5<' );
define( 'AUTH_SALT',        'VjOD)5 dI,`0T*1xVZY_ZO7v7joC@/G(.|A{qV: (_kFftBq7#^bYRC)Zy.[7`m5' );
define( 'SECURE_AUTH_SALT', '(e-ot%M0+Z_kpcM};Z+N;&2,KR;:t1Lh!35!-NLk$hY)yb(v6Tm90Zco?9)qTNWl' );
define( 'LOGGED_IN_SALT',   'd|1csaT5O#[;pxY.dHpY_Ktkav_Ih,{L~^f.FJVV$<Hw6GMy3[uP0%;(UbjVXQ@J' );
define( 'NONCE_SALT',       '%p!q)x6w=^eb96#1tRZj{a%CJ,J8L1p5)ReMN(C<*~ (`zPdZgngkr:fx VLE~ f' );

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
