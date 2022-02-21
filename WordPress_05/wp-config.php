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
define('DB_NAME', 'DB3874854');

/** MySQL database username */
define('DB_USER', 'U3874854');

/** MySQL database password */
define('DB_PASSWORD', 'x1ZbIbqpmkXqVMK1d');

/** MySQL hostname */
define('DB_HOST', 'rdbms.strato.de');

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
define('AUTH_KEY',         'l&RVyiPaF*^Y2j3@f@@z9CeZDaVxOw6o@C@(BO43Mh5NxX%&RKPnHyYnK&%)pOBd');
define('SECURE_AUTH_KEY',  'zOUjt#z1%c#MDkjrxM)e7)ILOSkGQ56JUavss#Y6DeHq2FXivgqFsqVItobwFhfU');
define('LOGGED_IN_KEY',    'vEjDHghfCCW!H4G3!1&yKxtS3zu0j5X07a%M6Glx)D)ADWG688a*pj!bUNOE&W*v');
define('NONCE_KEY',        'WNY4q*krdVNPo#3vXg4sqdX@24qD9jTIE4J)gLoxi65k#%)O0yxD7ID%eNxA%9uV');
define('AUTH_SALT',        'lGIsztZ%uY)BzCvTjV!Ny*JpeApX@K17JlZz582v9CyAsK^zDwRZSzM*Jv%5vQG@');
define('SECURE_AUTH_SALT', 'mvTCo*zdvop7#F34k(TBph!*BGG7okgHf)vR79y0IL*Y09XayXiMvG4I5Zsc71Dg');
define('LOGGED_IN_SALT',   'dqJwQ3PjsQA2l9UTQ3qKZcan8()a*pkKoON2^s!Z%^VH&IFTJLbV)BLfd2D9Q8q5');
define('NONCE_SALT',       '0pAMX!lWCghv3YdtK&i9avIni*Yn8mk(^3HjD1cQg57g6E@jGjtouPlEzAzC6@#U');
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
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', '3.lanthan.eu');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

define( 'WP_AUTO_UPDATE_CORE', 'minor' );
