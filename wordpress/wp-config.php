<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'sunkissedlilacs');
/** MySQL database username */
define( 'DB_USER', 'Dane');
/** MySQL database password */
define( 'DB_PASSWORD', 'Kn0x2@@5');
/** MySQL hostname */
define( 'DB_HOST', 'mysql');
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MHHp7M6pW#(![5c.ifq3Og<=rfNEmWn<|ki&=QHjgVC2x,a{N,qZKN=Zus/m(P^K');
define( 'SECURE_AUTH_KEY',  '$,k[k.MR~~Z8F`2cr??:{wiR4MJ;0rz;(PXv$Pvpv,PRc6?(<F5Bzd~{WHXq.^Wl');
define( 'LOGGED_IN_KEY',    'b]ltue1}7@ST-{ubZ2p8(Zwx34H aJ#&v%FC#?pem>B&bYZ9TzVR9OljaHp-`A._');
define( 'NONCE_KEY',        'hSLsaJ:rNpby=6$uYxSKo%/lVMF~O#_GfXuQkq[kM*;f5[3S(+l<fGq+i0u/c!GU');
define( 'AUTH_SALT',        '+32-%Ilct{8Omt_XM>av?LRX|;o-%~p- (_y2afSmhPODZuB?DA[??)pT9}^/+wT');
define( 'SECURE_AUTH_SALT', '~>H{;O7#9zh}e}C?_77p2>n0xtb-SWU+_V+;D$@GD7P-nH2.cMc&X5= H]Ok?M=2');
define( 'LOGGED_IN_SALT',   '82vG%Q2z.[66TxN0wd>QBS8Wib)7y0B|y(?_(< pi1nJE+H]gq` wra-$SZf]`iI');
define( 'NONCE_SALT',       'LzT*;sgoEHhSx!<b3yBn=P2;]s]O4-m%qwP972z%>Bnr|@H/~ld7#O>jV:<Vi*`3');
/**#@-*/
/**
 * WordPress Database Table prefix.
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
// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';