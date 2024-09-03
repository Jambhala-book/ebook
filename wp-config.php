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
define( 'AUTH_KEY',         'pGMTl5lH9oKUChg>]Inzz$wFH$A(zn%iX?Y&%Zo7Iuc|[m45d>.(j,IKF#O ^6}u' );
define( 'SECURE_AUTH_KEY',  'V4BGg#YbbVjLN]ykhz?Bk=^O%1r*q3@J%&2vml8P/s*Y`T,TL%ua`o*)#wQ1Itg*' );
define( 'LOGGED_IN_KEY',    'O$?xb5;:c)~h4Z_w(=1-yn0m5-mkO}lkDH/&xAk;&Du`U836eDh$WU;*&f6R{>QH' );
define( 'NONCE_KEY',        ']e23U@iB`ZDqY/.^JtZutzF/^LR22V:sP{~]);BKbyB,=}Fi-n*T+[4^K)5}+l2!' );
define( 'AUTH_SALT',        '8 go9Vc&u41=v(S{D5Ea#UxN_S95l$kigweBW(qc+K@GBf9:R(LF5rR(WLFQcJe7' );
define( 'SECURE_AUTH_SALT', 'lZ{8yMuA{4|}Wmt-p#]Q94S?R*//y;~}eVtqQK?h7`rM0x.,Jp2*q(jQwym!Nf H' );
define( 'LOGGED_IN_SALT',   '.pN_x#Fi_dau{^t!c6^]Z8|oNO8M.!+8n;;m}wO6Fk5!#w%5 ASbBeMcIOR#?!k^' );
define( 'NONCE_SALT',       ')@~lJTWCg&E0d+1Mo~TSkeV/>w7c$j|3k4eMhB<h*x1iS1v*!7khXR%Xdb`]k!&=' );

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
