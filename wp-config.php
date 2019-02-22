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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '~#g$;z(<D9BQ_R~PN_SKr&`M}{J[bP1=L1D2 *xcPt$PLc3Z.8*w:&mG9k+PQgxk');
define('SECURE_AUTH_KEY',  ' t_HiE#n(lU2;v3]0|CsfI3&S(XaF8t}~AuP4[3oq#7*!OL3{knD~?dh:y6`Hq9F');
define('LOGGED_IN_KEY',    'BlBzNUv3kOW^?mCBPq|&t(ilc9{{1U_6@2Zv|s#8}~`1Q-j%t* R/]>ls9S6*r*.');
define('NONCE_KEY',        '`>k 2kL,Xd_X;/C<3RrRgThWno% E~<]hQ {>H}}%bLM5@B{C=wnY10SZI*pW`<<');
define('AUTH_SALT',        ')Vz.!Dq{G]:U-{B-KpQ=d3djhJa^VS%r0%dk#]E**3?E8.Y_+.U9>ovmWY5VXJvq');
define('SECURE_AUTH_SALT', 'q:+Z{(bq2DN>Q@dxk9w|%j8A4Igo|>$?nEnU@K3 4p}|SiPC&=zMQ<w`yXJn%BaF');
define('LOGGED_IN_SALT',   '%>6peWFq14RoOZ0*VrBt|cULW:sDXN6+S&5BuT3YnbxcbX5nJ~fCXqY{cHEY(D63');
define('NONCE_SALT',       'S%$^eYx.-dli=(0#7x~Hvc:f-5-&0]XD)JYFAUP31.jH.@I.(;$To<.8G[2Bix`h');

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
