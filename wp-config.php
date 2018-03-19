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
define('DB_NAME', 'plugindev');

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
define('AUTH_KEY',         '+<}[1y?G,?!$+_|0+OfBq:c%;JO9TkU)e;VmFtDD0rO*c[lS8`&2941 tZKfqnjv');
define('SECURE_AUTH_KEY',  'hOkpx`F7{.WpuBg$r@-F^lwSv3waPQ?DnOrUGj5At2dG~(u[5_=uTE@ss!<W1lV/');
define('LOGGED_IN_KEY',    'i#CV.f?{/J3+)P<Z]vcZz?fI6Jz^DzA~LWNP8nL%Q<t!eiHy;O]O}pC43ghvv/Y}');
define('NONCE_KEY',        'o/:#!*i9M^L9IGS/Kj^BasEO1z!SNh`p>9^Q0I<!({XX0Z$}eKg^@;Ehj-#,(Ww~');
define('AUTH_SALT',        't=GAoI1dyCG7F[ecb*p5r2v><+XgH4VpJ@U@wZY^Bqpm|{=SDtIrydz+F?FY#>vh');
define('SECURE_AUTH_SALT', 'I*dMag!+#f)1Fr%ZZOlG7[Z~qS2Qk#qN+Gp~kxmr_m41pu^&_w*s|q-mpOCYxfMY');
define('LOGGED_IN_SALT',   '&Q, sS+h5C>YlA9OO+L[DPLUl4:zm}MHAb?ySOv(i:0!4*q}@V*L.YF6cmubN)q)');
define('NONCE_SALT',       'PC<&%A$18sE.{YuZMK1!V&abFJMj$O/jA9L%o!7b`Mi*@_>,])&l3ZhEqgl bQim');

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
