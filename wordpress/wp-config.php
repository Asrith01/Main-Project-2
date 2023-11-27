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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'my-wp-rds.cmh5fgrykzgx.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '@E[H674*QS;ofLnNvyVy*2#9HS;tn-QgNIVg;D&aq1(_rjgKs$R,>`uz!LsiAIk[');
define('SECURE_AUTH_KEY',  '@ijd-~cHc~OiJc|rWaY~-oESK^5q~3W7du*pf=bAkPA]36{OjYu!?hfWMzM6j[P~');
define('LOGGED_IN_KEY',    '%9^dhNQF2H4C{:I7dE8:&#<PCPm[rK%hCd|~FCJ^~``wU3R]:Niv5?m^VFH}l+]u');
define('NONCE_KEY',        '(4{M6_<+_r`6GU-[v^Z>h- 1oC<#.w{CVD/zw3H5<V!|4>KC(?Uon~oYqwn=`+%k');
define('AUTH_SALT',        '+S|X}{8D}Dh&9,lcl|oz%E7A3nk7P1&qs]-ur^M^Va)qCdJ=H{{mSi>Il!llsdQ.');
define('SECURE_AUTH_SALT', 'nB(%]pXBip|7f(nj_-ra[Ojpz?*K05}oV/d12V_z0>Lw$[v?~#[TI1Ahf|uKM0|>');
define('LOGGED_IN_SALT',   '[$+v|])ZF=ug-I$0 }y-Zg]#,I98D@7x]7jzlYb#4wG}4]iCf`$/tMK[t@n2VStU');
define('NONCE_SALT',       'FN+vgsiX3s6|)|j|(ZTdl{C<2r|}`+E_:t0+!nZSesdH|-s]W^AKO[Gr3k {$iE;');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
