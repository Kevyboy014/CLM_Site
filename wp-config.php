<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ryno2019_clincoln');

/** MySQL database username */
define('DB_USER', 'ryno2019_chlinco');

/** MySQL database password */
define('DB_PASSWORD', 'chris2013');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'd-9{>2XMl9M3f %_0[N@0Qea:_ZDI|a7}g>vf_X7h#~-BF|vDsyoy+`XiYr7N?L2');
define('SECURE_AUTH_KEY',  'F3v]a3.6rQRj;~UJ$Y5wU-fhO]@$|Ld)W$,e__Q?>[(5xE8[GMYS^}vBBkU?2^=R');
define('LOGGED_IN_KEY',    'nNv>mDE7jXx[we|Q-QSXVAQ(3+4F^s|7#~RxYZ~ncPPRHN$&<?(hu<t%&2.xVzV/');
define('NONCE_KEY',        '[ad{gexk3+r96a}&@$R?4f.-HEuVd3n4vr+:RB/6&y)m#|73O&^h]VB([5:_BF!5');
define('AUTH_SALT',        './x=6.w-(|%f1NbU_-rs22-*Mif>g~*OkA,:Z-NV[/m0Eo(;EG(L lb`qj5)(fh2');
define('SECURE_AUTH_SALT', 'jle+e||E<,-QhiXJJsA@%eA^l%~Vi=[8%:g6E72Lc-GBrez]u@V@[-p1{Oog{/d2');
define('LOGGED_IN_SALT',   'X=Gylh{]s@Cp+A8lgtE+9.&AVmB}LmK2J(c|Z(,.{}oK`{*|!S$go7Lw*;%^Deu ');
define('NONCE_SALT',       'Q% 0/5r-x:Cf$8+ymLz)hf6+Dg{Ik|;FAF)6p8[pN7M<<jrVRQ#t3.lGc14eVOit');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
