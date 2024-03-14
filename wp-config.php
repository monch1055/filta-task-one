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
define( 'DB_NAME', 'task_one' );

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
define( 'AUTH_KEY',         '+f7n479}HnnbX().J!)t*mQX%mh74N1UC$=,jrRL-#=<8zlF>Gqk.DS:NmfVZYuV' );
define( 'SECURE_AUTH_KEY',  'oO/IX%lZ}OnY$p[{8<s[Z$[R9>.F:EL/*uGO>i6p?^mNp7FwJMR7aVG~DR..LrT]' );
define( 'LOGGED_IN_KEY',    'y.w 3Ve,t<7s%ylEU#6x_LC@:iT/9w.>TEOr+t=AHzN)|WD!)Dn3xx6Y)Mxm|Viv' );
define( 'NONCE_KEY',        'tXUNjErFzOu!:_M[46PXtKDz$A2sbk7>a/ .^#mZynFv,MRGTs@k)~Gm8peQ],( ' );
define( 'AUTH_SALT',        '^UKR5^m63+.vLTVi^(?7B^w?j:N-Pc>1W^U&Oi)Y5ky)>0@gaR&E{lGx}3tsX)pP' );
define( 'SECURE_AUTH_SALT', 'BXSMRxF{5,@BmNq`hOs@}iIB@aq2D)%:T8Y4a5(q1hPG}nN:9YEP[D:MV!VkP42s' );
define( 'LOGGED_IN_SALT',   'R,@t@Q`!iIM~/qbp`YQiVIS,!%BC=..2(dk[{f$-LxNoIiF~qFhd|^MuSM7{sy 4' );
define( 'NONCE_SALT',       '1XA*(Fl$W1kdQ`8uMN{I9gqljr`:o>C1P@=O3eK$grK|);_)8}JM=ue3K<#)?{.y' );

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
