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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RFjZovW4VPWTW0gxagt+dfruGrWT2vCJM/J3pZXJ3cgHixN1CkBCaOgNfPWh6krSHkgL0AEaJ0/MVUW5ag0+EA==');
define('SECURE_AUTH_KEY',  'Yc9JFPMTmmpX1LgmRbkocbuq14lXgi8ZeL3znStzTdplETBlGUsjDd2id8fOee4uqKxUv0EEWva9RzneKfVWMQ==');
define('LOGGED_IN_KEY',    'gyqf9JTxMO3faXvXbm3SNjnKekEGGyA3RUn/1sByQTHJUVHPBWIp+zatqFDh+60QE0XUmIXaTjvDCxs9OhIENA==');
define('NONCE_KEY',        'gzFR+qN1XFzB9V3tI8A7dJiZXrkA5aN3bAvn6iDUcWyCP0nXC96EMdLVRUXvnJJGyo2ov/xqEKh/ncUrLhwDRQ==');
define('AUTH_SALT',        'edKMfdT+Dsdlw0eAJEsVPD99OceMhAz1DP3cXq/OtgklUhgKTwRrNN41Np0LcMK68yN/Ge12qZdKH96zilU0Yw==');
define('SECURE_AUTH_SALT', 'ty6IQkJ9UacuTPhE5fAVxdxwdIvn5xd+VZPcHL11TmbGKZdHyZ3Pi5SDpA5hr+jr8hYGegt37NAQWQ08CPoEfQ==');
define('LOGGED_IN_SALT',   'rpUsQYWC81DQpE443MATTZ3WyTJa0d+wqzcEFi7qllKXw9uTqn8bT9vxKrpTSZQ0ywbaAAyu33swfSal3G90yw==');
define('NONCE_SALT',       'JmIs7Exr1Aevas75/4z7PKCqWrqSTUh/VDtmsYpzl5QZY+XsiTWgBhBocclUMLtxWdTAsC9GjarJErBUjry9CA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
