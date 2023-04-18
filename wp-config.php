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
define( 'AUTH_KEY',         'q*T91? GjX1U[/Ku[Yu*4-v&WgZz&r=c)pnF]Z$L~xP0n]E,#CKi%&%vWT*CdPcQ' );
define( 'SECURE_AUTH_KEY',  ' |VQxkMTh1#[&b<Cr:eHFctvp[/z-GO}@g$4VyGn%_J?^7,)h8BCZ459Lp_bZRYq' );
define( 'LOGGED_IN_KEY',    '*TOY5w>l~(UAW;#Z,owf(*RAIV@])=Zov!8<qk~Vtf@a8 hxK?<+~D)ugk>c$!H}' );
define( 'NONCE_KEY',        '=o/RcxDD}lA5N9[N0:vegA>~}b9yQmn2xu%GSAr,hD.D}+6rT|FBChe(5{939-iO' );
define( 'AUTH_SALT',        'Quq]BXVPY9Ih8B!;NHw|93KC<xaeFQ$9-`ng&9LsNC`0CAi%jF:17Pm)J~E,B&L3' );
define( 'SECURE_AUTH_SALT', ' 1_Y3v(o9oiZU[ZqcMd1n`>0IDg@= 5H=6ww^U08a,_>~5j,@9g#Ik^`|}%src9X' );
define( 'LOGGED_IN_SALT',   'mQU`Uh[&2`DrjOYwLwD@LKG#Jsdj^9FZ&)CHXJc+:d<y*d~#!_OBRRX$}03Kx8`o' );
define( 'NONCE_SALT',       'L%g_a2u=z{+]RGc^zm_]0>rkthiD)|0EI/i/LW1-snN9x(R3bWwNutVS|}58*]}!' );

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
