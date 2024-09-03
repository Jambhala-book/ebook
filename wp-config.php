<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ebook_database' );

/** Database username */
define( 'DB_USER', 'adminebook' );

/** Database password */
define( 'DB_PASSWORD', 'kingdomebook' );

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
define( 'AUTH_KEY',         '^S,EDf?y5x0lR N`Gj/BKbK3D2CmjzVs)~l!&RcM@MI{,.z~j~[08a;PZdETpd6 ' );
define( 'SECURE_AUTH_KEY',  '@1Q43A/`Ss&T<f5@nh=>~vr(qU8=y`oL-;loixO2dd3X}6`dg!T,:xg{uW 7/_Ma' );
define( 'LOGGED_IN_KEY',    'R1v1pvKU[6wcYZuO4 4E,,j<8Qj&U5WCJd&H[x,-+eQK*VaS}3#}1Kh^B1kPP9If' );
define( 'NONCE_KEY',        'g|A)H;3A.!v63&eg*x$_U!%!E/l_NeOD,M{6*puSnvp%<h_+EgHz/O}~d$P)&tZ`' );
define( 'AUTH_SALT',        '@]I;<)/GBQ}S&oPyiVEZ${7A6qLPs^xCT@BM17eULHpL3h@_r`=>HQzM!x=rr+(E' );
define( 'SECURE_AUTH_SALT', 'CHDm5OciF4e4=vvYN-^?X;fFE*4V# no5M8j(#b>IFM+,W|D@$Ge~Dy,3CT}p-;%' );
define( 'LOGGED_IN_SALT',   'i$ezLZc&vDuI>6-g(-^ZX(db5!6K/x7&F4|zAq^iV;kb=<KuQP:4pV8e(YS*U5-(' );
define( 'NONCE_SALT',       ',QR)[,i0.(=)kY0c_q:o5yH;BIDgqa2-n|O&MY9]|eBTh a5%c4>_]g@ -2 c`)w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kt_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
