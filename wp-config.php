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
define('DB_NAME', 'novaloja');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'peixefrito2');

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
define('AUTH_KEY',         'f|US?BEzzEX)aw$O+zTcq|K}lq|;HKFoVe35R~Cq)(gd|`o+%#-4#t&!s]]agFsd');
define('SECURE_AUTH_KEY',  '87_u{M>@;8j8d2k%Af}956gB|]RN(kg5n|YO82HI)UyU~*Q8soU+GeY~Fe!RDd;u');
define('LOGGED_IN_KEY',    '|.9C]K8fBYFN[!&8S[~qNI{-J2x!H,+PCK5sYN?XAuUQ^^15JOBl2!h7uD!670])');
define('NONCE_KEY',        '|-UqB%rAz.,|&jwsx4yM.Q]H^- **4j2cR}#[N^89eJAu:#R)ADj46z[$w!N|3BS');
define('AUTH_SALT',        'pN_oTb((p*@<xr^?#|c|^@rVf0K]}}wv~<r|$SV9d$)S*Ul`8iD]kcx{>4deLi7(');
define('SECURE_AUTH_SALT', 'jHjy3u+BZgHb]#q*D[mmb-wN=2k{|^{7r[Pn`,bY]Ui7dly`O[GEp+Qekgvp&XA-');
define('LOGGED_IN_SALT',   'qzjK5Ipt>Q~]/7}ghJq&r 33|yCkQtE567@Yb4(sKK;d76_g4/C-$tujFGy*n~!0');
define('NONCE_SALT',       '!Wc9JG-qQ7tOcqlkXb;i[/!]Hw6+f218kIUMPX_a+@.>%hJ==?0N.29k`t&z]aab');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
