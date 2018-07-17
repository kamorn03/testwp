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



define('WP_HOME','https://testwordp.herokuapp.com/');
define('WP_SITEURL','https://testwordp.herokuapp.com/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sql12247418');

/** MySQL database username */
define('DB_USER', 'sql12247418');

/** MySQL database password */
define('DB_PASSWORD', 'd6hziRvgxA');

/** MySQL hostname */
define('DB_HOST', 'sql12.freemysqlhosting.net');

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
define('AUTH_KEY',         '`|8X0*}A,dDU4C%J+_2%#Na&}Z:kx2X$~[Y-~0Yz2H/Uk2rtTGcV3CB6LgV|KT{@');
define('SECURE_AUTH_KEY',  'Cez4qJ )=]:/J1%K[y{jpW5j]~hM%R:Bqk,gb;C3TiX]B:.>jkm%PEH;Y`n]h]3[');
define('LOGGED_IN_KEY',    '^Cm*RLLx710PJfz:Q)W(Kmw&8_wF*J?AqYBrPl.8cc0WT>0amYE_hFSrc&3GB51V');
define('NONCE_KEY',        '0~M3z+^:O&!zZUEs2u~G+zG0XR<hs$=$ZNEi>5xm$&A~}7Q|2L~/<%h}6O4#:BZc');
define('AUTH_SALT',        'OQ;mNM)KI8Pq ]bKJR=3tbZ*gx:76t^>SS=x2OYc4$Z2bYW^wf6(WwEbnnl;Y~r#');
define('SECURE_AUTH_SALT', 'JO3m=EXta:gaD9$yY$?pAg&>P#ajG%+fO?(|zSO5_!,qMbyY3I@]??cl<_WA-4Rf');
define('LOGGED_IN_SALT',   ' u4vS%kN1|xN0Mj*?{/7ZdfglY;!B0pRT7kA U6.&7Ky<T`-dLxRx|:;ctxMy8~k');
define('NONCE_SALT',       'Kv4D1d,h>V,p!~A$Kj`h%&d.6HRuAg:f?HLLgY,?j9G+?p.C*nP.C&]!q=jyp4FL');

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
