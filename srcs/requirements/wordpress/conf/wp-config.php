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
define( 'DB_NAME', 'zihirri_db' );

/** MySQL database username */
define( 'DB_USER', 'zihirri' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zak' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd.f9h7}pzT-C<G+)geAJ.)-mapifhtSfci-t)!er;&+=2y:|Is],0.{0fa=S=(D>');
define('SECURE_AUTH_KEY',  'n|:-Bt6c}8:aQ:yxjX#EC~<)!/ke1g&vbyW=Lk:${^);[Pj>i+2Ere:)g,^lI;MJ');
define('LOGGED_IN_KEY',    'DjAJr1:oE!io4.?^e>=)K+rk@}FH38A=i4>+6~hhUE-1|Plb?{ZcW_YDTA9!c!|}');
define('NONCE_KEY',        'Ay&~TZ2Cw#W4*Xjb>$%b_{&GQ0h+:92i^PMi{)CmWwuwt[:Ub-|)Vt|YJM*me>p~');
define('AUTH_SALT',        '+ATWwlQCL9 Q!zC7LPuI/>2i,@rt{SBeO*b;12QCbj!,MuymEr@IrU?epb+Xb$eb');
define('SECURE_AUTH_SALT', '</mhoB{j ;`aj<+G71k7C#hS,+J)f*8DS@Qn+M&C6D8JyPW6v/cw4,/0sTuZ//O&');
define('LOGGED_IN_SALT',   'mdgwB/.f$E|!WNjs=^_I(~wOMzg2baJb([ewdRe z;[%i]@!B@*?mg;ZP2fqb2-w');
define('NONCE_SALT',       'BuhGwcK!H;IQ_uMO|om*K8Hwx2a<$m,l7IdMUrSi*sK73x1[&2gkfC+*W-AtB+eI');

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );     


define('WP_CACHE', true);

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>