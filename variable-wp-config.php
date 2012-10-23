<?php
/**
 * Variables (hooray!)
 */
$site_url = 'http://local/sitename'; /* no trailing slash */
$home_url = 'http://local/sitename'; /* no trailing slash */

$db_name = 'database_name';
$db_user = 'database_user';
$db_pass = 'database_password';
$db_prefix = 'wp_'; /* for security reasons its best to change this to something other than wp_ */

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
define('DB_NAME', $db_name);

/** MySQL database username */
define('DB_USER', $db_user);

/** MySQL database password */
define('DB_PASSWORD', $db_pass);

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
define('AUTH_KEY',         'MpP]]H_q4M]6{OcrX4l/t *%qMBwH`I-3WX.uo).l.b;2<xT8,RDhBL?PL`l4(z.');
define('SECURE_AUTH_KEY',  'dnMi^ivic$Ja([3Ds=?MjYR{;.J@>#}L)De!{LVg~=2X<+)3TD(q?F27hdDS !g>');
define('LOGGED_IN_KEY',    'WsgzEO(.WY4ce1v:o9HiEq#y6uyC~?ySnPOY<`5_GkReYz)fC%dC&<j$Lb--L=Xp');
define('NONCE_KEY',        'v$zd3rwrzMUQi[:rMBw_#83j.a:;xa`f}3`EEf`d#!B2cvQz|/ptwhf^T}[fvEmV');
define('AUTH_SALT',        'cyNDPc+_~U6ZBd%KHb;^xmfK~fcmAM!IUo;vTYX,(V:Q|C8},sOAUr[f4[UQ!NTx');
define('SECURE_AUTH_SALT', ' xQCJ( P38ZS|{{D/jWS0g*;r#MaZL]nJrl1%,3?nKS8O)TLK.+K0G+%--Ke9pJS');
define('LOGGED_IN_SALT',   '! Cy|EBAPm9-qj*H~c1Z^8&v0zL:-a]26z*J.Dg4z?:$c Mpn0m.:Zm/D!Lau|9/');
define('NONCE_SALT',       'P)%>lF0z@{^VKcqBt=A,gTue7HO%BxsB&}r~a^T%oF/>RTvcy|!b/tUDPIj,165|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = $db_prefix;

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
define('WP_DEBUG', true);

/** Define constants **/
define('WP_HOME', $home_url);
define('WP_SITEURL', $site_url);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');