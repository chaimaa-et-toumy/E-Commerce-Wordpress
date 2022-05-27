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
define( 'DB_NAME', 'tech' );

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
define( 'AUTH_KEY',         'la$LFU!pXS}oQsa+9Rj}*E}B_R+&J~ciz^^27NE/%2O%=b1nuKH&hr[R8{zY$Zzs' );
define( 'SECURE_AUTH_KEY',  '?DfY$PT|0&1STug#Q+*o</$@14HCu 2CB0$3$|:5T{b9m/5njG0K_=H+b/J,pN)3' );
define( 'LOGGED_IN_KEY',    'P|@U>u}2,vA<0?Mcx5b9idk853g_:Cv5dhT/U%1bg)R}b[7h#R#Nx 9o8gWZ}Z/q' );
define( 'NONCE_KEY',        '<-19>4M>aMr[e!FLGMr5K!kh]mPe^a/AYr;g&MI[8Sh0d%6T1+Qq3]0|$,&Z$x}w' );
define( 'AUTH_SALT',        '.oj4>B8YDANIbU^6vM@`) }#:eA~giIE0XP8]FJ=DhksQhu!X$;}vl:Yiiu~uqmr' );
define( 'SECURE_AUTH_SALT', '{]MYpRG<CLDNdD`zMy>.$80(W0r_V/#**^6REXyIV;8sZD/=JNdzXLQ!//C|;K2$' );
define( 'LOGGED_IN_SALT',   'Q<Ra~tK)}$(u9(8jZKMB{R~8VuX1/_l#g>8aV%yw4mAr4,(}vc%gSQmfV+[)#b4 ' );
define( 'NONCE_SALT',       'O^8qzqsYZ4n#gUZUd`S@[Exz0g<IN6C>[+X#lhPiqJ^^SICrK<|M`p>aVTfu;{>e' );

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
