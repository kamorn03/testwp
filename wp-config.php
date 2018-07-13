<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wphk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Oj90MS>o#s+p?jwWHd&2)6k3%|}or]2@&``4Wfu(k_v27Q[pz;]P/%5pSe-ids1$');
define('SECURE_AUTH_KEY',  '1+EHCM.r7jzabsF_ G)z#vcjLMVnL}flki8btOA P0ikw0+83XMM~kIWO%4?Hksd');
define('LOGGED_IN_KEY',    'ozJ]6pLKAofRH$fZh!qb#y*+v&qcO#}f(=~&efO&jBf18Ldrf(+897rJ4TEYV$JL');
define('NONCE_KEY',        '/(S9jx1XV3I;[LlT~BsV%VsX7!BM?1}9VM $Z-3$_4ra~~c2Z^uA/Jiywu@tG=})');
define('AUTH_SALT',        'c!ZN<J&*2a]y^@2)IU[Xf[:aD!S5JE2I+U?ae8CBK<J*[?u[E5Y7^zvd2fZ@=![i');
define('SECURE_AUTH_SALT', '4i>a|C.S/_d;l#;+t~Z}{<!C&.s=H[kmL_W>Z s1Q^bOf<fX]7m4_=)JDQzPEyIW');
define('LOGGED_IN_SALT',   'z/<2}7A(s`@<6hWF].)WrwHc,g*!2)-VSj9mq%01>.f*N@!.s2uG]pG~d(m+jly@');
define('NONCE_SALT',       'jwC|oD:SWHfi<Z]!hYKNB_A9:GH_^TKnVppFk:%6E9kYQH^xh&|:=tyEUoJQ/sL|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
