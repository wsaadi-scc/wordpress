<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'U!Ih@BI4A4h~)ygVWKu!+ +h5IHz@w.jW.rIpuhKHQ7O|R}V*sTLYrJOna/r!lSZ');
define('SECURE_AUTH_KEY',  '3fKKH[:D@+,XP55+sWHYM5$!Q)EPmBKVW{H ~0_Xwliw-=c/+|Cj<ec+ !G{!U^q');
define('LOGGED_IN_KEY',    'v/?-wpmC5s1/Wc63(couJ$S5qFe]8(!TxAe5!#,cZ2~maCOM%!MCD=UG#2V[aPnp');
define('NONCE_KEY',        '&8U<il|8Go6ZvI3?1CS}{DX9Spq#2R+eLw_n*F)q7@rqu.aI[|GOC]k`AT<)Ah{u');
define('AUTH_SALT',        'mOnnW5FW+?DP=Lb,wVpyR#d*qW5^uX#||lm*lty^ZQvYaL>Ux53H}YBe[ 9|n:v)');
define('SECURE_AUTH_SALT', 'X@F~jdjv8m./Ld8/01[M}DB|Y86e~kS*)kK+5TX#yo?D/&6F]J`t;Q4%7%Y{Ug3~');
define('LOGGED_IN_SALT',   'Jr6d ]oYc).|%HC*T4FH&E!Ba1(OrLm/@XfQr:e`^.!QtV,6|!_xZQ8P7RD7c];m');
define('NONCE_SALT',       'lU]{~uva`y^B7V}g502|fv(7|vFW)|7|$p8#-b) Xma8lvCGo2IkUd~36LZkycW ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/** Disable Automatic Updates Completely */
define( 'AUTOMATIC_UPDATER_DISABLED', False );

/** Define AUTOMATIC Updates for Components. */
define( 'WP_AUTO_UPDATE_CORE', True );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
