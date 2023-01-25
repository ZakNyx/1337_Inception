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
define('AUTH_KEY',         '@EE1.GY)ABfPDn  {71bIs?>geI%1{,h8y1e=_yp8j7Vb=GO%+JW`i}f5v5R-a.A');
define('SECURE_AUTH_KEY',  '>-wq,]79U>:UlW9aF(GAI&Hg`>G5++H--S}+^NLlu,[oXE3`mSP3mW_YPj+Os8r0');
define('LOGGED_IN_KEY',    'g# s:$sq.}KW#,xI:,1XL_LT$:+o?Tl #|M+{ZGe~:>MqzY4*{;PPsSwzktd*y!r');
define('NONCE_KEY',        '7@eInV7MDGa&?;.wW+~Nt4?{/k+>%O9;m)f|+~tn}5=W8xtQ|V7-n!(p)G{NGE/|');
define('AUTH_SALT',        'ja|Xh.4v,9$&p/iby~Zd~&zh2J`+?{ ,p(P01R( Fj5%at-@5|tTu:W|pce2 ]N-');
define('SECURE_AUTH_SALT', 'MB*RrKT0Ad<Pc:l4L$oK,}RM-BNakMaJZ4XhjUI)Am&H>vh90$q~jfc>C?o(;v1P');
define('LOGGED_IN_SALT',   '-*RWVX=-[|?u}(a]ZjX d2$7w=f)XBCE<tyPjAxHSidy@vB$&L(YXW@XZf1u^)Mx');
define('NONCE_SALT',       '-mEvpdA}4mUkI>F Qz~*W6fc-U|YJM@e+7]^e-mDKd6?OjqwOg:33D.p51MCA#*S');


#IP or hostname of the target server. This is ignored when connecting 
#to Redis using UNIX domain sockets.
define( 'WP_REDIS_HOST', 'redis');
#TCP/IP port of the target server. This is ignored when connecting
#to Redis using UNIX domain sockets.
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