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
define( 'DB_NAME', 'steambreadstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rhE0`!w#b{3,lCiU Wl4J;D`b:pk@Ya]/olDJ:!+rE?eSW?_fBVAp88xLB6fgZV<' );
define( 'SECURE_AUTH_KEY',  '|HtU{^z~Kz^Y|J:td2:fDj_X8XCSp<O{rNS%2{i64a5V$2y<&?$HHK JGI89zK^e' );
define( 'LOGGED_IN_KEY',    ',o(HrX@:DIks?jSJvM6uLanL}x@tK5ehqZv`9WzTqydK1*ArtCu)i&U,YJNb;r=Z' );
define( 'NONCE_KEY',        'Lf78hA1VhiVkbe8iN_nmRo?m@e}BH]WNNm`c@ #FEp0%S^p@:r^He4k>v:hy_`t,' );
define( 'AUTH_SALT',        '3}Ly:%4GD56ElDZN`Mtf*exnyVNG4E&d6z$AMR~QkbP6hWxGF.ly<xD)K?f1ns`7' );
define( 'SECURE_AUTH_SALT', 'HR4R9Ne&^Cyw:VUl5E<ZVl#5_8*0QK2$)<~X-)cS*2@-LL<`&#@S+]5[PSF9ko!?' );
define( 'LOGGED_IN_SALT',   'E8zg`E2J[:RU(PoPuQK0A*|W8lap9faAeGQy|j&u2.z Jy Ztp|-XsYXBpmJoH!v' );
define( 'NONCE_SALT',       'W|~+!HwJJvsF)uVT<)+$~kO@u!+_jVoC3>B5CI:*D:Y|Kd9VVp]?SO}P:a)/dcyZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sb_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
