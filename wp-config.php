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
define( 'DB_NAME', 'd7_eventos_db' );

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
define( 'AUTH_KEY',         'tE`:ID/l`4nEJ>UVCc646!tD:0C5PKlkDt~l0/7HwlhUq^{A20vF~pJ%Vgr#j4?<' );
define( 'SECURE_AUTH_KEY',  ' (dIb3w~&Nl{ciY1^Yd/iL0 23r>[+fba@x*;C(V-Sl[hh=f)z*<P-estf>:tA!v' );
define( 'LOGGED_IN_KEY',    'I %BFQxh]1L:qPty=.yAoGV `vFPjDi%2r%6rn9v1k>iP+9WWFM}#?E^m*r.^.[=' );
define( 'NONCE_KEY',        '{<<}FKpw5mcW{|&SUQj5IC}A6z~x}%+X2 Pg<lUGM4o7n1{@9y+1[jwScWh%)e|H' );
define( 'AUTH_SALT',        'laU,)<=+t7k02,}%=)& xD+!.PXiZxoY?C~N.,$>*P]1lKi,!3jR6[uiq=N}$@jO' );
define( 'SECURE_AUTH_SALT', '=uX1EFsgz,/(zY< E7jc~,@%Fxz,sY?!bQ>(hOs2j5*=$,BfP  (yT:(>#%I~(*&' );
define( 'LOGGED_IN_SALT',   '5oi/x6PiL7)Bi]NZF!lr+@2vI8LN0En8#CdD5FI2Tb;JQDM6,yMY@Pk%1;@x&SLF' );
define( 'NONCE_SALT',       '&L-*BCSk^ J=QWG(`-TAXAX_s3gDL|5o;v%|NzDc&)Su-*<E|CWA^a+r!Z&!OUV{' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
