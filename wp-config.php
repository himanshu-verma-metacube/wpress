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
define( 'DB_NAME', 'wpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'passwd' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'A$%IE#+KLC{,:_RReqJ??t#V@w4j(#V+D=v4W 5 {Wp&;#zNB:[*})_8c,MQ?<~6' );
define( 'SECURE_AUTH_KEY',  '_Yex,jH1Y7WOie%xUpJ=uw+rXKou0-pCyB],#*X+xpaRQBd|MD #2/)>_#g*=+M<' );
define( 'LOGGED_IN_KEY',    '0g$C[Dj)D4{iD&VEw_J4,(yl?,eNz8X^-18s8E}8:H>>L#;UNk4qt7!1Q?C5P.0?' );
define( 'NONCE_KEY',        '>|.m/%<;]0uREDW dE*lYcfHNAb!iLD$MJ|#Z0(#W=aM_>&[y&Np~hN3Yks)HKYI' );
define( 'AUTH_SALT',        '( 0iW>cw!nd-2c4]y^2QG?1W;!6Z{w*QtX}cuXN){2=z-.Y+k3~Nv_n{{JkG-x2i' );
define( 'SECURE_AUTH_SALT', 'S.$2dj`IvZ q|0({pU>ODY:IgGn/k$GA@/pY:XC:}5%N.hxf&i&q.hU&%T0(Ab4}' );
define( 'LOGGED_IN_SALT',   '!~;Lqr)+ESTAYT;:R#2{d][jD|~uvyw&3DOfOe_c[wouVUSEqaP^a!sTc^Trtg!.' );
define( 'NONCE_SALT',       '8H:Ew$g{qpafLD%lPwjn}c/_f@z7OQ7k>}O)v#!NBqw`DM>0IFRi>>_u-7(>&D{:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'press_';

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
