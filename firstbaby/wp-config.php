<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'firstbaby' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TY0diWUjBOJBFoTUM3PzOh1WUDh3N5NUaFodXgTg3qCx9LfiGCF2QsAzgHUl5JfX' );
define( 'SECURE_AUTH_KEY',  'eFZVm4biPpd5zB2TDfZVMIBCiXV4n1kN2OAu99enHtauZdja6zaomUKPyIHxE326' );
define( 'LOGGED_IN_KEY',    'iTL1QlRny60bwR4frMbXqhSCb3yRT7R00zW8KxQqki3i6MuY4RQuG7ISCQUC5Pky' );
define( 'NONCE_KEY',        'wgfqjRKvy35hlcfJvl9PNd7STO6zFeJ0lLjklEp4XUvYga3mIpKWz79IV9eDUfza' );
define( 'AUTH_SALT',        '27Numdex3UvJ6wxQDA52v2DR8ODtxaBFgjvbvdJMDJEMbquQOAvGFnJJqj8MWaiq' );
define( 'SECURE_AUTH_SALT', '0xbXovzMAUO7fcvqLW5C9iWWGxNYsaOGqANmzyTVlIe2sZsIELdVZT8QQ9pJGyJg' );
define( 'LOGGED_IN_SALT',   'PCjSXuekK5mF9CVzYfalWo6YpXdQB6JeQE4O1VwZackf93msryIrZbfjh94o5m8S' );
define( 'NONCE_SALT',       'ZT3poqpMmI4D5x9My2JjIyYV9P0VYiCYqoxvsdSfTwp4OmcreA6ad4jLWoX9vsWk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
