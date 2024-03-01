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
define( 'DB_NAME', 'pears-dummy' );

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
define( 'AUTH_KEY',         ' [yT*r//dysyWAkNmR`o`Z_$N#GbEjJ9y#^KJ75IQC$,XukoZ_D<i$ezO-/RhZ4#' );
define( 'SECURE_AUTH_KEY',  '&Ww(0j9{^8<.Z$`&)v.-#8[g_@`|ppf~1wk)?Xp?F)K/$~t).0v)s,]*pEcD,w&G' );
define( 'LOGGED_IN_KEY',    '-*/FBgcYau-o5}lc2FqPw1GK9`FE~%6OL7$-^_W UaK}+=DOz[@mDXWrzR1HpDhn' );
define( 'NONCE_KEY',        'kl9gWJ!$gG{s_f?lEN*]mTVuDByR5]7-+GhttSr$iz&_[l]kRIb-<& 6kyqw5ps=' );
define( 'AUTH_SALT',        '4Q^!b<Lv:V^P0C!_{}ZQP>^0NN)0!?_8Sz^GAn5q[J(+RD*Nm^m(XiDqGhN;Dy$s' );
define( 'SECURE_AUTH_SALT', 'E3#diA;,$zBFS<9TOW<eMh{p.:M((+d|=$9TP,z3bA7!]KE9!3 ?%Nk5caT>q%Y6' );
define( 'LOGGED_IN_SALT',   '=lp-^W]cXk^L){7|)jHk:%z|XJb=>b4Q_|E^;ZFKxAwce1heR04F^f,x82x4I=WY' );
define( 'NONCE_SALT',       'Y/i&.uCl-iCF;+f]otJe-arqc>6NB{wlCPB%MINW4T^!?&;6<r`1XG=!YkpxSOP[' );

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
