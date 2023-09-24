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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'HC^qus|/~rW LwU5o^.bWoB1!z=V=CZy[3Ekmr|Tku:cy+Xm8on=WacF&4<r^S=U' );
define( 'SECURE_AUTH_KEY',  'VMe^bf^[mc7vUm!Bi?NW#=<YHcan[0vC6JF)`MYb|[ipKED$^A<(2$cMOU5IKP-i' );
define( 'LOGGED_IN_KEY',    'FcVAxD|4bf,dDI]!9f/Es^dMaL`~v=JjPu#I*{f1@p?xBI<LT)|a]sG;o0<SvaSj' );
define( 'NONCE_KEY',        'mn<*ITz$V/M)?%sC^X8yl_(n!f<KP>2XLoa?@`*qy:5?$lCZk@JWN730aXx~:DqD' );
define( 'AUTH_SALT',        'jd[U41*=3mN#JKp8`js4Xe64FW_?:%iKHPIg*6B>UR8Eljdvz?Pob3rCG{$!!X_P' );
define( 'SECURE_AUTH_SALT', 'a<p^HfrtVxJD&4%sC`2s_:sBu4)6Tk+8C#LkYY:Q?(*d :j[YsB.k]a{_I){6B|{' );
define( 'LOGGED_IN_SALT',   '~^] ]$`q^I:KT(&~0a!f_DiJ:/H4Yi(6~:Zw-9U4l?LpkE&uasX2i^)EQ6c4eVs!' );
define( 'NONCE_SALT',       'QKzPyhAu(KXo=}l4=JT}*5H|@|qmGaee9=12$Vx>3Ty5uGYA,Z}(v K+!pJ<N~NY' );

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
