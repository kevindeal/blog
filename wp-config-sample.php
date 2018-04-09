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
define('DB_NAME', 'ctca');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>yVG#-&@LJ8Xu-j)w!@q|5bKu(-j|.$sZSGv=(#H{{]/@K8Ahbb^l*+>v|:<|L:C');
define('SECURE_AUTH_KEY',  ';|0f QK:JRA%-p6&,9xE/:vKJ{Tw95%+O=$zuDjN|L3oe~?w#frrAoG-]*u g%y-');
define('LOGGED_IN_KEY',    'Ow<d:-(>OW}`yfPzY{@ueirTRBH5_-{}ENJ[G%Av*~&SdR4|yqNqh<l;lV;yyDXI');
define('NONCE_KEY',        '<U>Wc~x]z)ObRU61LsJ;A9J/`rQ-L/~6UX1[h3>*n9/rEfyr =l[|gXBMp xb6s#');
define('AUTH_SALT',        '4Nv<lfA1j^oM*C!4;La<)lIv[T[^9+ooSk?02|p<|nR;FH>*`3IGkO;f#2*[->Lf');
define('SECURE_AUTH_SALT', 'kFrb9<d);lm*ZciKQfs.#-qu1@BWo`rMCD+m-Hl#LUC;zA|o8B],Q}RXd]Lf3I]v');
define('LOGGED_IN_SALT',   'A3iwI(^,q^d+oI:nVzW)+nq>`U|VZye5=l0j1_SM?#nDy=*^7FxwU-?Xoe7tN>./');
define('NONCE_SALT',       'uK* $$$Ci~Dwy-@()&nH?e{.S5+&*-,&YuWQ29tM=y@@CQg3M?VqSuqi-<4^)9d!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz7';

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
