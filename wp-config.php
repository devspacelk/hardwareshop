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
define( 'DB_NAME', 'hardwareshop' );

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
define( 'AUTH_KEY',         '4&DNrd7!*HG$Z%)wUY~O@hz`8Rlh*~{]l7$BX[*NM+[QS.e[4{V!ut*g/A4@rZwn' );
define( 'SECURE_AUTH_KEY',  '}|B!-kiK6(?z_cc^!68iw5WDmO6HpFzuW!2`v CHBjrX*D(%FL^;8,[#v%&jF5wS' );
define( 'LOGGED_IN_KEY',    'GmvXjtd5~Fey6CRSC5@R0`B[YG^{sxi&BQtSLwd8N4< nYo(z*D>+_q%&?~>%q)P' );
define( 'NONCE_KEY',        'N;P9HeX+nxPp7SBD[q<H|i<<4]^U0Pt)]B74Zg=>N%F}n/OtVq)>E1z>)MGI{mY^' );
define( 'AUTH_SALT',        ']068?2}u|g%ry/jU3].sDkJuaRDR@g{-ZEqqpJM+zH>#Vka?[? NkG..2t33#)ok' );
define( 'SECURE_AUTH_SALT', 'zUamn/NXSMR3^j_V[T1P?_fj35|!~-bI(r5N%9&/`{]]%oIT/},wc0l,tTxW2L+t' );
define( 'LOGGED_IN_SALT',   'tT8hAdtt%gyz><e-_r$,@z{#ATwu`fO() n5i-Fi[lQs8;,d;m.,B0V)|=~.vq;e' );
define( 'NONCE_SALT',       '7C=3jN-W8jmKqopdbN{6$tCFRG)l;ML|-q~K=>R=EOO`L0]10E$@PAB4#Z5@*{A,' );

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
