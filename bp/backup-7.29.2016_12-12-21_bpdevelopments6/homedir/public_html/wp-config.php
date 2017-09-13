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
define('DB_NAME', 'i1724498_wp1');

/** MySQL database username */
define('DB_USER', 'i1724498_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'E^aBtvvV*b92(@1');

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
define('AUTH_KEY',         'AcKlT4KiOzp9pzGFzYOC45w1b2bEW2VfutvVFjVWzLURzWLTx11HhZxpjQB69cCt');
define('SECURE_AUTH_KEY',  'SLUdzYkWZWnKnHjsYg8X5tfonljh29Zla5Aoghix50Ur2vHk66z7LzwexgZTvulL');
define('LOGGED_IN_KEY',    'pqbSwiV8VKBNorR5IaVG1o2FEoXLY3ZwTVzoUvvKIXgKeE2q0GWJWY6XyEffPysl');
define('NONCE_KEY',        'z6pqpwt10PZemQrw1c54rYSZFgfKSTeopIXCET4iyKqoEW6ohGdITgiaAwrcyRFu');
define('AUTH_SALT',        'sIUkXrPvgbq1IIvQbOcMFeEEbXiO6WjFyMWdKO6rj2vUJ2zlardnX2fMdAhHsmMk');
define('SECURE_AUTH_SALT', 'ryqsq6QHjKCvt1AfpYCyotQMUmvtXre2YtINQfUW2hKEAfpzf3py3VbgmDRHYEmm');
define('LOGGED_IN_SALT',   'r7PtGKMJRInO8tcn3TjqEglAwhOwZ0eeiNhKx7EB7O93Hq1qE8ai13fCbcIwvsRX');
define('NONCE_SALT',       '9pFg3lB5GWZH0ZNmtFT5bmKli1dj9q4H13uCwpfab1VkPdbVdhmv0SSNXGrxApHJ');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
