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
define( 'DB_NAME', 'registration' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'i}tk6QV!q=KZsa;Lp:/8q=#M(`Y=73P6{Jfa.PQEa~_c}Q8pUciv~gGxg0auA+wf' );
define( 'SECURE_AUTH_KEY',  '5X2_681[.GR(/@b(G@Y`RULYbsT/]0 o0]KSCx#]=e8>C?Ic#%wRJ8jQ>`idbupo' );
define( 'LOGGED_IN_KEY',    '|wR#t,C Di@pD|={?:L,Nfq*}g]XAm}%%Sc0/r+!L.[o|3M}M>}&9+_1gZU>k?#G' );
define( 'NONCE_KEY',        'qii2T/!Vs7k5T&=SnG:u ,4rki*]|ui[B<m3{u5r:lrq:%?RIe5fWKLp7cA/v&F-' );
define( 'AUTH_SALT',        'mAJZ;TD@I`g&d#2?Z0@2Vahi{JAQvK;D(N(gaamx$=V(8%G&ZjG]8~vj ^f{Gpkd' );
define( 'SECURE_AUTH_SALT', 'nUz[*w/TF(rJxmt(x!uRIqJp@sqw.k^;xmcYT^ `<&:Tz{NEer~QEiCk]wQX zX<' );
define( 'LOGGED_IN_SALT',   'qr>t O+FfG>{FtHjy:D[wUM,`e29:g~9sP+F}).PXTNc>^MZWU|L7naLv,cMN@=O' );
define( 'NONCE_SALT',       '^RZ40J *E,m$8aBlf,lRR2m?^t(|sP-^+>4sU&&/pJ)5wmE<H3Q(@,`.FF@L8E=a' );

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
