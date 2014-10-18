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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '887e83669e');

/** MySQL hostname */
#define('DB_HOST', 'localhost:3306');
define ('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'e67f40404f7afccfa7f2e85ba3f3e00a946a90ae5afe33b0c8f7cbdf7eadeaac');
define('SECURE_AUTH_KEY',  'e60d57d9d7fa84ea020033c2b3ad56075fb93faf50a5a50dc959cdf712c65b59');
define('LOGGED_IN_KEY',    '8593c9eaea5243f24922422c21a70063c43ad0b655beee50ddc0e29a6c351b70');
define('NONCE_KEY',        '42fe05ceb8cb3d100fdd488a9792e2eb0a69d7031e8ebc56438215d5bfda089a');
define('AUTH_SALT',        '2b130715bc11e2e685533110f7e734f46ce8235b20d409d7c63682c682b41517');
define('SECURE_AUTH_SALT', 'a3c8a507f162dce81c872c41d215c9ddc6ae4766a616c7e3b407b75a912ab0e2');
define('LOGGED_IN_SALT',   'cb5020838bc99f440abe79c4343356ede1662a15330ff5be68aeaf337273752e');
define('NONCE_SALT',       'afddccf467130aa535287ab72b8d389a2c87cd84ed556372bc5de63339492d82');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/Applications/wordpress-4.0-1/apps/wordpress/tmp');

