<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chanaslk_wp61' );

/** Database username */
define( 'DB_USER', 'chanaslk_wp61' );

/** Database password */
define( 'DB_PASSWORD', '53C6@Sp]0[wh' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'lgbv2gfttu8yx0pkpy0ptb6q4ztbxy62qkvn5qdl8g9wtrl2avjazpzysfoshp6e' );
define( 'SECURE_AUTH_KEY',  'jsft3k8rx7u9fiyzt8sjvihmmcgne1kuntkk9x1g3ueqtkzsucbmacjxom4pruce' );
define( 'LOGGED_IN_KEY',    '6bqeer1sotufd2y23gg6n55izrqrvgx7auccpwypvunv9rnnqrfbcmu4wwielo3x' );
define( 'NONCE_KEY',        'zzug2gljm4qtfh5s0ox2wre792h7gewzmryfhwwgwnditnteujoxb79s7son0axj' );
define( 'AUTH_SALT',        'fsas050xizgokjvcmduleogjmpkthkbohuummmt17mvg3ntf1sso7ouhimxggkkv' );
define( 'SECURE_AUTH_SALT', 'z8asd1bsr5klipgl62bytwkl5azvnnqnpmgxybi8qxzvlzwmkixouug70gwktowp' );
define( 'LOGGED_IN_SALT',   'ms5bqepiobhylvoz5kl7oyrxwbpasbqjbl46bmsrscqrh80rcmzncoocrbhw8y8e' );
define( 'NONCE_SALT',       'zbzm1hyu8ml48xuvbdhsalupevb7ixqjr3soemyfn3pvtz9viayr2uzgbi7uvhef' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsd_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
