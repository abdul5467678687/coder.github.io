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
define( 'DB_NAME', 'warr2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'G04rgcDcp!g-[&2lTqo32:p*Z8?~@i|.}}lDk+OtWvvcld|vMlp;`_Xa-<oATJE<' );
define( 'SECURE_AUTH_KEY',  'Of3D1+vYn<@A))Jdd-%z=.,LPw[mE b5N7t#=hac($1!g$lsv6#pK+H``H6edL<O' );
define( 'LOGGED_IN_KEY',    'g 61L}Mz)4zFB;SwVz2wpW6)Tjw2_& 3oi_(WO4=aEOg3tgkOK#<i=H #kMbqlV+' );
define( 'NONCE_KEY',        'N@6eX7T,L[ 19!5-y%=b(fM:Sz]LT:V8rZN7~8WW;5&SuNj:uSrq{nf[unSJqG1F' );
define( 'AUTH_SALT',        ':sq<>vV) :9>SPvRpidf2KuQuQojfQ$_+VP/IOkQWa^Mi{9Q+B/5^HsGP/lVDWxL' );
define( 'SECURE_AUTH_SALT', 'b^5N!)!H<?<vZ3adv>}|1iq>jehYCs{zG*$3+<Zz/:6z^m/J=Q>gKS^STih79Bb?' );
define( 'LOGGED_IN_SALT',   ',Jr?e!&7~-do*rE@5Yib|.^vElg&/mQdLPOuZD9f}z=h@3VP|Z)w5Jb%Dc(-HB[5' );
define( 'NONCE_SALT',       'bW;4l_nhi|yr92FX%m}7-a>hL~n@8Gr^2PcgvWe S?*ivio6HYAEN8E-GV8Q-%_q' );

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
