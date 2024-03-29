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
define( 'DB_NAME', 'field-up2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gbw21ueda' );

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
define( 'AUTH_KEY',          'p_r2mt+utr^|^sJqTpml4^_Eb^)9psT:n1T|!}eBs^8z*,T;4&ySZ%M|Od)6uXmY' );
define( 'SECURE_AUTH_KEY',   'd>+S]OQm/:17@a*Waz5M+_eu8M{gW_50RZ4L6k=DQotm<<d!!s!q/|QFqa<npH28' );
define( 'LOGGED_IN_KEY',     'UEO;S@jSbIO8c?=Yf,q:[II(<[*@FL9y=H13. i?IwuB!RD#DOHIygq9!l:XrY_w' );
define( 'NONCE_KEY',         'v%{D&q;G+ND$=1a:k!=IX@coTCt}!.,Z/H}mO n)4rAC|t)8YkRHsfg,x%pNmF0E' );
define( 'AUTH_SALT',         ' d9hO.p7W:/n<o-|N4A(I~*g.eMlswkq0Co6oce:tV-4hZq+pCfRqQdHY]GjMXEr' );
define( 'SECURE_AUTH_SALT',  'nkn6H@1/oce9xQi$v~,wTsC{bIdF)M7PqK$I5en<e1mv-xncU/Ur>^ q[pzWBpBY' );
define( 'LOGGED_IN_SALT',    'bTT1|v_pqM:J[EKKz1ronu|87(-5]WD9o-IELBp:f,~KHQD!*$$uk6-0!FsXt0%x' );
define( 'NONCE_SALT',        'x:#ZKv)[Y(jP$o#u84E]6<=i$[S[+_mRukZTJzzIry3lcmE@Jp=k0@H7Xl<m7[*r' );
define( 'WP_CACHE_KEY_SALT', 'ap2K[S;U/q&j#PNrEoCChzu&fwn^;5~jP05INq]:5cRU-&Fa*Ns73Z!m,D*$t<#7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}




define( 'RS_DASHBOARD_PLUGIN_SID', 'mp2Kb5qxI-A5H48-H3F9xhHqT8xzDNnCYwv9zcZ2h2oqgmjVuY0LaZBySyYTfhfM4KtXGkIcYDNsqHOGOtazDvPgk7TXdOECAp3YuWWt9GE.' );
define( 'RS_DASHBOARD_PLUGIN_DID', 'U4JMR6sVpXl8lAeAzRxv31GsBE2p2358gapRrI_lkX1IhduNnOCUltJ1T4EZIhn5CU091C8t2QFrfFShoXiNEWPhE1b550_J-ZIGzyYCntQ.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
