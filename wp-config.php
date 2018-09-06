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
define('DB_NAME', 'timber');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?J$dGt9`rac0$H++Ip~&V1tonJ?f=KaV9e^E2@}eV*_1Vl,}JpyfG#5>G|{GQK7g');
define('SECURE_AUTH_KEY',  'd,E)Va-g_tI4B`qw?4lNm{3u)k>[XVe( WF+0TyZxHu#EUOl@JQHdYxV0^%0EnSd');
define('LOGGED_IN_KEY',    'A#M_gxh` L}_AS8}p[M{pS-Ax2D!Bg^M@`8Q%TW./bNh/i]8wV{g&&#<W/zh1+CI');
define('NONCE_KEY',        'M|n5QbGlrUmd0NUq1A8!<rD*@X##DV=#/PQ+cA.JsXH8_%tk##)E)8,8ko36755]');
define('AUTH_SALT',        't_3VwL-+FaeH#xyj,2oss)Y+$^,T@/WV RT`|.ESXI4FvnV4=Qzq:s2Zc{LHHb.,');
define('SECURE_AUTH_SALT', 'uCqEQ%pWJ/1%9Alf81}ZXfSay{L9I@~Q|h57NTB@#.UtX+E?<c%/&mLzzi!.r)oF');
define('LOGGED_IN_SALT',   'vPosPfcjV;i7N0W5Oy~4hJTVkif!63m}/^v,f`s0xzG+]M2(Jjd- QPy.p##86`X');
define('NONCE_SALT',       'd.^|j4.>D~,UeA/C(7s@Ed+YIDs964?@wUc%28J_i66Ye5TiWN(ayVXP{IrAD[)S');

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
