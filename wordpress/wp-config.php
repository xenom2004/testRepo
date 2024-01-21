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
define( 'DB_NAME', 'test_sic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@mysql271314' );

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
define( 'AUTH_KEY',         '#2FwY8[^N$rSjNzs+b>xbN`34Bx$Ko~V8]ML^gq6C>UVqdT~OGk5RGe88u?VRshG' );
define( 'SECURE_AUTH_KEY',  'mu%Wei(x+;C.%4kX:D^Qh4S$up8h@CxhKyxr&mzP.EwsH@Mcf2pu,=|(4@nz^S;H' );
define( 'LOGGED_IN_KEY',    'd%G1-KWIcTOlm~leyB)9<sj&(%>Ebgr%}k{& c}%mvXfAy#;BzTS-a:t$ZmnS~B|' );
define( 'NONCE_KEY',        '_ge<e}U,`Ycz},5(lC7n-LMS|q!i;P,Ez_VkL{;hC`+Yv_;g~P z6[7#~>VP?!Ba' );
define( 'AUTH_SALT',        '/2,E;g!GypBRyCP+6-5TmH}Qo$nYvF}M.0}g5q~(XREy.Df>%%<<.SFP6N7ybpag' );
define( 'SECURE_AUTH_SALT', 'f38W%fr%=9Tm`xLS]?e/#R%g.fs)A2#Sxn>%#k*;,B_F+Uoim o|q#Mxt&q`j/t/' );
define( 'LOGGED_IN_SALT',   'T2-8NP}Zt| }s+yS8`tc:|dd_ jL!Zg/1f3Kf{V29q_43/f&n&3HMs79K:|--fQo' );
define( 'NONCE_SALT',       '63@}%FFZGU!UtA-AB]CO@lqI7Z3J{D/.y;fzq0d$I_J5QmZYcV%kQR{b9UmU?c2,' );

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
