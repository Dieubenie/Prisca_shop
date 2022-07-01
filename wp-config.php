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
define( 'DB_NAME', 'prisca_shop' );

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
define( 'AUTH_KEY',         '-cQKU$8a%rT1ko1;%+L{:`9T>oR8?Ck9G/S9veGt~*z2_C5%qlEI8?l1C^Ka9,&a' );
define( 'SECURE_AUTH_KEY',  'O0eK[sql|YdV<(APmK@@sNs%nR8EYJw/H1QS+)zkdMACV/Ksp;*zdU~fT==M;}4S' );
define( 'LOGGED_IN_KEY',    '.Io`Myd@oJ%j546HZj$9<`Pn32,WN~Fz8jB8HMp?g*wo)>@&9(Z`O?4qIh2a]99^' );
define( 'NONCE_KEY',        '7LhmBS VcN!ETfw4||vm,utJ2ZHtj4$Et*_9aV0^y|+4tsSjc5K}F{Q]j70G]C8o' );
define( 'AUTH_SALT',        'C-xhxoy*1:jpV~EAmA-b`-b>Xnt7(C#`tu~|mS0ClyxW(>!.jo% H#66;WMMNGR@' );
define( 'SECURE_AUTH_SALT', ' [CgafnPx/;>uj/6l^J%tCb=!*!15pJe$|fZ|Df`0.M#Qg@t8>#`AI|bw PX!@)S' );
define( 'LOGGED_IN_SALT',   'H3Qfo)>YP{eMkP3s3}/&luIqi*WiYjSn }z{%4<wpaL4iRmA0Z@[{FuXbMir+2O3' );
define( 'NONCE_SALT',       'O9*YUs&6[}DkC4U/3#/~=%J6/r@<G3P97o_j9{x]5M,9^aswSWna@>C+?r[!c?A$' );

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
