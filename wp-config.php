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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2' );

/** Database username */
define( 'DB_USER', 'wp2' );

/** Database password */
define( 'DB_PASSWORD', 'p0p5ch001' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '=dgHB*A:2_7aYITuB?p%!s{y:JOMcTC!DN2I~JOkE#(rXz!UMru;Lg_YK|bP.X]P' );
define( 'SECURE_AUTH_KEY',   'Y5^n$#eq]7fE/efasa2Q?8v~eT}EG)bCTwZFq b+VobYP)H>a#n#yKy=^cE93sUy' );
define( 'LOGGED_IN_KEY',     ')sk++X8*8mo|Tk)EQ.&yhdtfn-u0=sD~}e=&33.z.4P),u:y2(^u=otZU-c3@pLJ' );
define( 'NONCE_KEY',         '}(m&+bUV}HkjhuNSYkG&$M5  i3xJA~KzX#mb/b,WT0!9t{O$G@)N33sGmZ9ier9' );
define( 'AUTH_SALT',         '`28e7|SL!~1^_+^jE(>;(tacS(j%wPW97$fVzLs;X(#Gs(n_?TsrDe9w*i=2Ru G' );
define( 'SECURE_AUTH_SALT',  '5|lb1Lf/YkfQ~iE]qcP#~sI/k6PF@5V^U$8+<?PVWI<cTe~CSJrTw|RmW9!8,k<t' );
define( 'LOGGED_IN_SALT',    '% Mh2y%bb=W:yAxsXN,JsYe6Fir/a4!s-Kvz6^Zkf5$A@(n.DjU$(wd3n`)gDOh)' );
define( 'NONCE_SALT',        '7R.bPSqHUvPcY%i6Vn^vY&w/#%}dZ,A~}+?c(~cN~@xtGG4p-!YK231I8{h0R1oR' );
define( 'WP_CACHE_KEY_SALT', 'u8J=D9j$Y])79UiQ,bk&J}J`Yl`prk2yM38!tHhXAB7(5-3c*9.UX5P}B`N)CYq$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
// Force l'affichage des erreurs PHP.
// @ini_set( 'display_errors', 'On' );
// // Désactive l'interception des erreurs fatales
// define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
// // Active le mode de déboggage
// define( 'WP_DEBUG', true );
// // Affiche les erreurs de Wordpress
// define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
