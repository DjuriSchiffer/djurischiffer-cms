<?php
/**
 * Your base production configuration goes in this file. Environment-specific
 * overrides go in their respective config/environments/{{WP_ENV}}.php file.
 *
 * A good default policy is to deviate from the production config as little as
 * possible. Try to define as much of your configuration in this file as you
 * can.
 */

require_once(__DIR__ . '/vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/'))->load();

/**
 * Set up our global environment constant and load its config first
 * Default: production
 */
define('WP_ENV', getenv('WP_ENV') ?: 'production');


/**
 * URLs
 */
define('WP_HOME',       getenv('WP_HOME'));
define('WP_SITEURL',    getenv('WP_SITEURL'));


/** * DB settings */
define('DB_NAME',       getenv('DB_NAME'));
define('DB_USER',       getenv('DB_USER'));
define('DB_PASSWORD',   getenv('DB_PASSWORD'));
define('DB_HOST',       getenv('DB_HOST'));
define('DB_CHARSET',    'utf8mb4');
define('DB_COLLATE',    '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',   getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',       getenv('NONCE_KEY'));
define('AUTH_SALT',       getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT',getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',  getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',      getenv('NONCE_SALT'));


define('COINMARKETCAP_API', getenv('COINMARKETCAP_API'));

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_PREFIX') ?: 'wp_';

// Disable plugin and theme updates and installation from the admin
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

$env_config = __DIR__ . '/environments/' . WP_ENV . '.php';

if (file_exists($env_config)) {
	require_once $env_config;
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');