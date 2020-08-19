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
define('AUTH_KEY',         '4+ykSYZnR4KYbqGetgPaHLYA6eC2lqffekqKhA647kQPRprl9lYSqj1Th01u02vWqfHK2Y6/fju4AMG+C+q3Lw==');
define('SECURE_AUTH_KEY',  '8u1kCfiCmnkWm2u2JvoLgaFvPajfxYK3t4051BBVceKgpKOQJAzamWGMxhzpX/mPRiiUNFnZqm8X9LAkwyrrhw==');
define('LOGGED_IN_KEY',    'lCMRkl0776ELJpRUVYkw0upffTKuVX1hHCqNs8q+wUJoHLWps9FVrOJuf8fpWc8MyLGGVUpUoCX7jt9PTf1tIQ==');
define('NONCE_KEY',        'klT5+cViqINcffG6y071AtMmFDKeS0+7dS0B7K1edUpaqyiuuzh2ceVIliCoWNMkcbth2wFVxJwNRVBKQWxIOg==');
define('AUTH_SALT',        '+g0IB9y53F9Dp206FGU/oxHmmBa/0z49LxJSEw7FO95vpfWSX9h5bqnGdLUy0/e1/YRcwYN0/KAEwoz0RhTf1A==');
define('SECURE_AUTH_SALT', 'mkhcpDckLxJtnRp62Z6tpKbkQYQgvzKp0b/oUfnhRP6WjcvSR6eDd0uFIb/i9g5xmqwWA3PEyZ32J3M1+5Ncmg==');
define('LOGGED_IN_SALT',   '/9N1HdbNs1YxJguPpZRvyRIFOekY3cmr99cJWaYReu5TZYvGS4c5X/k/0gynjhJhj/n0jc4u9KhJ6xWBQFkXoQ==');
define('NONCE_SALT',       'bCLixT231n9i6l0ethYpnPxTnBNScwJHvoqThkuRbcYEHYrWkn2dC8rxPcS7EAGx2a9fIP2QxazH/uwoiUXIQg==');

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
