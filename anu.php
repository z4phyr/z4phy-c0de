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

define( 'FS_METHOD', 'direct' );
define( 'DISALLOW_FILE_MODS', 'true' );


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aditama_dbwp_aksen' );

/** Database username */
define( 'DB_USER', 'aditama_aksen_wp' );

/** Database password */
define( 'DB_PASSWORD', 'Y.c(U#?_,3GBi%6[^[' );

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
define( 'AUTH_KEY',         'O5 O%~2rQioKAL|yM(e;CYz]I (0K7uNFfe@t5vBvUUSXk1Gt}z  3RI)[gjR!1{' );
define( 'SECURE_AUTH_KEY',  '.1]A4=l*H6;M?R_urua){k.T![?/Oc*:?XTw3nM7ht{6X=y~xy]%N(Y-;lM~o?4L' );
define( 'LOGGED_IN_KEY',    'WmdBnA#m)}|g98r)6h=J936!Z7bxd6X7Tthfzb3bO 0qPAtK{fK3)FX $n<I^pgC' );
define( 'NONCE_KEY',        'G.r{GrY5UCc|JEn#RdBU$ArE%(^L}fVjNIj8`4!ri(RQa`s&_H@CP,9Gh:-BK7(y' );
define( 'AUTH_SALT',        'opvAV=yPnU> h]Q6.N} *Eb@^{xpK6bt~nO{{r m+fX?B:PqLJ%CE#yIxA<}V/D(' );
define( 'SECURE_AUTH_SALT', 'dI2R?-$& Wn+L=./Lt(_om:M=Lsk+6Jx?Lc /pB(lKP]R;JTcnzJBzSn?`(LCDah' );
define( 'LOGGED_IN_SALT',   'RlY_*<z&7#W64chFx#x$E|*`lX1Z!%.TS5ID7(nI;Az)-:jk*3cm8QM#<c-D?fzE' );
define( 'NONCE_SALT',       'YY2[<(Cu[#%gua/C5+R0%:inbs*VARu,BF>$PT^z?M27%KL0K*%|sllXo%k)Cy.c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vblHdA_';

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

/* Add any custom values between this line and the "stop editing" line. */



define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
