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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'o}XYI$I Ag/Qa`?V_ft.U63vhwV{Q ?@?_Hwg$Rgu+POm!wVX(7Qqe0mnZ2QRzH`' );
define( 'SECURE_AUTH_KEY',  'upn#NN)L;a9}mh e`d-Pw@$VS{brFHPj.y&~/mxtVWN+e]UM04EHPRoSUCez!.B%' );
define( 'LOGGED_IN_KEY',    'B#CUPU( QdCclgG$cpK4WdLsE}omq_]:0KaRpD07`s%T6 ]{ #g4}GLg4jJo>rd9' );
define( 'NONCE_KEY',        '07hJCC&@h8hNLNkza<g}G1P0]-`/Pa9!i:1?u5jbi)]xs{k^3g|;|_h).Z18_:/>' );
define( 'AUTH_SALT',        'd~`=}si53;Y9<yx@NIFp%%Ga*I-q3`DWRXnuiC%U^c=S;OmT~9cWIv7&yS.9Q:..' );
define( 'SECURE_AUTH_SALT', 'vFVzQvw%<IP/0gAz7rqPC8OZ3M@zW{6)i(:J4q?d/+p|5z(snpO<Gw*.K`zfTs4z' );
define( 'LOGGED_IN_SALT',   'EdM6(Ai%FjWRaO)~07Gj:/!A~^h#hDXjr//6QY?1bIo9&#2;`6-}!xdBfd(qxz(?' );
define( 'NONCE_SALT',       '3 l*l94k#gOJmw-8#q3eSis&>QW_LIY1&eGyhF+~2nxmWqUdSg5}Bo}c93*m ^}h' );

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
