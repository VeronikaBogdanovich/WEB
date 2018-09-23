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
define('DB_NAME', 'forWordPress');

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
define('AUTH_KEY',         'Z1UH;>-A=<&pN}wj/A4~[Gj-GiiMfSPw.|1|GwCpK7}X_}CKg} 98eoM`XX^R4#M');
define('SECURE_AUTH_KEY',  'ul#i[STz:2cQFtz<e/NoBx(se4[b;/KhP0wUZY@7eT}{d-$w7D?2%h?CSJ{xKMiG');
define('LOGGED_IN_KEY',    '*I!..OUf:WpK7o]BtP8|ZPgP7_%Lg([h4[EuOs+6M%~_3 t|[*P9@(3Xt$F3w{@D');
define('NONCE_KEY',        'Iy$sGwT,6;b~JqwHo5d1&MZ]0.G&S9wPT*Vkk_dls3pB|c|O_&_T:DX01yH}CQ+L');
define('AUTH_SALT',        '3E4}/`oU-hI]>sc(e7K!q9r_y_:LQA?jLP+[01r]1}O+RP;v!Itfn5y3?3df328.');
define('SECURE_AUTH_SALT', 'vp>usF0NDG9at3$.B0ITH!#C1^BtR#fNgnZ3MEywj1an;Wb{UuEeb4sY]q-{Je$X');
define('LOGGED_IN_SALT',   'UwUYJ!T.&OE0(EY;pE5reSizbpIG&KN53J/1cPcm7f-_0QJ0_c`RB>y_iNS&]x_3');
define('NONCE_SALT',       'jqA6HsodEC#{4Xhx%n7HLkyP~vsR).?>6ZsW]SAo]H)D`TlwdQ KCZkgtWAB{f:t');

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
