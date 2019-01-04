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
define('DB_NAME', 'testeFernando');

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
define('AUTH_KEY',         'DhA9y9m$d%t!o[:*&-7IHJhqkEZs%WTP) K~DsrY6r//[EEIBkVGK#$W[i#=Z/1f');
define('SECURE_AUTH_KEY',  '{jeev5Xl#^R2BEU4{s[zB3z(9LhtW3Q2B@uGYkyP$9o~>(Xsy7q~m<H72iGWll;h');
define('LOGGED_IN_KEY',    '~+{B*pYxr(x#~!M#D8:S$ZY659$%K6ln+b%[+1dx NW`|_Sfu&Dmo0k_;Pt_/,[]');
define('NONCE_KEY',        'b(`&B4z`wdhG1a(RVu?{`vW#<r6;iY@Hu!>LND? @Uj`AV>ly<{BdqWv0UqGvJ-J');
define('AUTH_SALT',        ',}MXhav)~QMx-yENC?(g[r+4yI>Eq(*dxvf<%D+8sWWcU{OSima_)FroYpU!=Xh7');
define('SECURE_AUTH_SALT', '#w@4,4!!slGYGbM)V9b/JH+rJ>bzRryUbjXMsu}B()eO**+InPHhdLRWVe5A9#oe');
define('LOGGED_IN_SALT',   ';!BRMQoHYqx=9:RDM/rl,Xjjc,]x^s~M,v]+;[Aj4[BPM:4z]]HU0W.a B-E6ceV');
define('NONCE_SALT',       'VT:.-oV[LRJ|$KlAT4p}xA@{Jl@khZOb?+$K0lR[g:t0TQR%yv#pPpP43X5X-wbO');

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
