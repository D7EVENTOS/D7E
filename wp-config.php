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
define( 'AUTH_KEY',         '{gIWX+PiF*+-yQz^.![go(0.n!oup Iz7)%N,kWeq+){}x6dge,6UsVJa(9=Rr0-' );

define( 'SECURE_AUTH_KEY',  'Q&xTF,-CoH@6Gkg+s$dGH3#-l a^|@hh*{R+I56e-3/FH}*?$O5Y9?/{PzU>APOG' );

define( 'LOGGED_IN_KEY',    'j R20:]&[j;E_d9=R;Y=:`Q}e7K~6dpk;f7s]#?[87M7n_B+G-Hu{2#Y(zCk43j/' );

define( 'NONCE_KEY',        'gI)>9n{x+Of-0^o))q7BQ{*K.>(Jn7!o+2Y_K8<g.%!6sN{9-]:/#TfU_c0A9<mO' );

define( 'AUTH_SALT',        'LB4Z;%mBmjewA#ToNZLD {sy]to}y?T=?|R)5&yKK^79A};C@PW&miNC!aJ[A!&9' );

define( 'SECURE_AUTH_SALT', 'f^-f=4zg<-.8$y6#Il$h9]J0:nK(QUGN1Mj8#Z2X-$j[|SA:n!#%e-8sJGt=l;/M' );

define( 'LOGGED_IN_SALT',   '>J}gajT }w@6FNl8w%d#SmhP-1Vzrz2Os,f]5qoIpjx&8(n)ZDz(<Hp*L|T,6!YV' );

define( 'NONCE_SALT',       'rw)i]Ec+W&+cdw+N{mkOgN_X.EFQ0T6dkFj.eKdL?tLj<3QSW0!?0:U>OWFxvr7|' );


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
