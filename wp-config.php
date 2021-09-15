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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'jeremy');

/** MySQL database password */
define('DB_PASSWORD', 'jeremy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'N<sA-69z-VD/c[^)JDc&Jv_ 2+zN?:neDI$oRCm%#kn;LLES^7m39mvXy/q|>tem');
define('SECURE_AUTH_KEY',  '<qyty<n?}t,HTn)5e}VicBU5;XqtH~e;UZ~z*Il{yt6Q,Z=8:[Ht-kco zfxJTj|');
define('LOGGED_IN_KEY',    'jfD[x@ifG_}g]q$aAc.@NpY6n,fl7pmusg1(oG!G7IZB-@/4W!z_qUzojOsOTa@*');
define('NONCE_KEY',        '!SGm]s/sX@770f7!)=_6076KkbM,BAL%_?533>$.b!5y/]-M7tI]>bj;-?2}0U$u');
define('AUTH_SALT',        '=Yg;YJsdYdDw+~YM.{~*zO-8q=3(.s6e3@(-vm[t;[pE+QJ7fM2[$N#Uun! ^I(n');
define('SECURE_AUTH_SALT', 'x7r;R9!SVQgI%6[;^s z%3v-MJlb}]IEQPC>K^O6:T)~V%FZVO7oY>r,%/hjNEEV');
define('LOGGED_IN_SALT',   'W$dAo@:KRU/#H%IJ>fi4|E]3?q<>s),258.mJRC.cHyzd}[410UfeyYR9df}4W%U');
define('NONCE_SALT',       '/Q23sDssWQ+ok2H,~z++2Ff@|V RiKtpD4xJ%7/F m8CjQDGH3sbl#Cl% >JnZ;)');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
