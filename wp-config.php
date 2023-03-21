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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '0b4550AU' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'Pl|c;lo^pF+vn|ZtB&N~~ALc@[99r;n30>&%-nH{Vn3-@Xd)<!y&K>!?fndiZi.M');
define('SECURE_AUTH_KEY',  '$#z w:s%fhat9c?o2&Z+ Cj)UEEgeSQ6/0R_HW}>AzdZ$FPcMofM@:@.|H*L%&u|');
define('LOGGED_IN_KEY',    'H9#?BoNm]<P1S-1$kry&Ep53~#j%N4hnwx}3I]F$:0wgJeli9OycW+M!owDnD_ e');
define('NONCE_KEY',        'Ts-7x&o`<XOP7}CJ7NP>:r/..]+bxC(c+{?qeuS&IJkH.|MDxh+S/+S::`*5;y-C');
define('AUTH_SALT',        'N[z;;P)r_,|h8^)N^De=3BhVK*hD>Z!hrf3o8-*wo|[u&7w6Va]l`Em+PK]Sp[R-');
define('SECURE_AUTH_SALT', 'rDM0(jK5[rz:Lm]f<R:| MRgmntMDUM]pwv6n=Rq25MaNc@+y21A }{=:<+/@R|[');
define('LOGGED_IN_SALT',   'pfHu1=A>ftZ(3p[7txC~oZa]aiO!iG6ajjF,Ph^+YgLvhQ[e`WFLK^2GV1QD,Kz/');
define('NONCE_SALT',       'KsJ@Ft}?{w->_tV5.|1xC-yB4j|Hoc?t.Q-^3Gp2cbE/EEQwN/B@(IR~Uzw}^>5z');

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
