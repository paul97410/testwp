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
define( 'DB_NAME', 'testwp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z=`I{w0Vr~ca0PODX%}5Vrc-h>er[.iInv4-.F !P K~fl|>?:VIxmEF:nrtm iS' );
define( 'SECURE_AUTH_KEY',  'SgK_GP{e2n^Aq6f=>*`!iLLjNTnlX;Qs>T]5A!NLv!JBUsUkgI 9`-VP-L[LZtoK' );
define( 'LOGGED_IN_KEY',    'siJR@{V%JqQ&wKOC7HVf@OJ}m1at/=SNM_I-QHtf O!=0e%a@]EzfgX^d2AZYlv9' );
define( 'NONCE_KEY',        '4OIj@2&cJKoL#)7y[1Kekq^T;IYk>}wA#zv!~7GmrLL.mT-1 ;<iItCcgFx%&Xw1' );
define( 'AUTH_SALT',        'I{t&[aHBOJk  Xc.BKUAwbd,aY29;Q5kW(~#acVYEmt&;~@g%G[mg]G|66{X ]Mp' );
define( 'SECURE_AUTH_SALT', '2C1ZzB:bjUdb_y;5@D?I% ]<=daU{/$oN#r~-S}8XNj61/q2!aW!u^=lRL2`4s,f' );
define( 'LOGGED_IN_SALT',   '%t4Cgb=1$LO++.<X*/ro%//zOC<uRL^6;TS[mb`0#`H{D-hX3Wq}oP`.]o,,v49v' );
define( 'NONCE_SALT',       '-Itx*n@dA#dopSi:;4t.c)mNw+LCzdhBqZk+q;=zXTO*Jx}kx>{B;8=76Gc[(qT/' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
