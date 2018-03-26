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
define('DB_NAME', 'db54386_kdeal_wordpress');

/** MySQL database username */
define('DB_USER', 'db54386_kdeal');

/** MySQL database password */
define('DB_PASSWORD', 'xr!4}uX4}iE');

/** MySQL hostname */
define('DB_HOST', 'external-db.s54386.gridserver.com');

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
define('AUTH_KEY',         'l&$]m#j=;jG33|h4}Z,vHU/(v]}hZSbeF6LuS:,VtQ5YEW/4oxOW=|wT<A&iDjHv');
define('SECURE_AUTH_KEY',  '8F9GSaN>QPa3Q)f!F9VNn]!x;G)WU! 7rS0G7;1Gl5Xx:S!gMFw`i)GrMHVp>(-/');
define('LOGGED_IN_KEY',    'nt&sTH3JIool!_8@TCoGPq4jdAWY@RAYk0k}OET$/:y<*j e)qPvCcliK|f}z|-B');
define('NONCE_KEY',        'Z&HE$1b?D G~v8+X)VMjwQScVupeKwkHdEid9t$`l^/6c)WdOgacmDJ1LZTpjG7j');
define('AUTH_SALT',        '%+5lpjNbku=mAolMx{(IVnh8e-IqeH}KUslY3,=;,0PB ~k2&ffi*E^Od})58GFl');
define('SECURE_AUTH_SALT', '_k&GG7),|.?dO0]c/py:s8ENLn&[]UO9@Iis /&;W=6s&O^V%ekZKSr%a{C3k[|A');
define('LOGGED_IN_SALT',   '^;s^0bg]r6iFxu`5aVXgz#>[`RE:Ip*--RQ}EX>HSm#dsKn+ICY]K>W8;(Bnz<KE');
define('NONCE_SALT',       'iR7Lm]U(Ks&[uX<Tpx>-3JJ,d7HG?7`jgPm<6%ZgR5fkagm.mh/Mh{797:z>GsPP');

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
