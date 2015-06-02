<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.ashvqf.0001.use1.cache.amazonaws.com');
 
define('WP_HOME','d2y2adb1uu37dp.cloudfront.net');
define('WP_SITEURL','d2y2adb1uu37dp.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Sh1tyb33f');

/** MySQL hostname */
define('DB_HOST', 'wordpress-database.ck7nqyelziwy.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'uA[0uGwZ9.^|X>|F:M59:,TqaevGZP!0?L</+l<0uVx}iFH$B(rrk<bX|VT;4A{b');
define('SECURE_AUTH_KEY',  'cYiqgC}kNKV/iP^OyomKI@x,wMg$+P~UJ|`{kS$_G2^WKyP+VTn@JP%ZM.~OO`sY');
define('LOGGED_IN_KEY',    'EudFi_(:rwT;wd<2hkBC7t/79/x~Z!-0s<8QNA|UL:RNjB3z-0r5!VQnRMvqA]A,');
define('NONCE_KEY',        'RTtWEmmUA2xh`I$]5npR<d-8g1^}HoX)h6%g-iswFA*e_7hIR1w6a4z]s3gOg{h@');
define('AUTH_SALT',        'fLmr`(uD6T6ChR;=h55lLc3Dp2C,h2D/rC467no:6RQ%+e2JqA:2 8UnMZ6K|KLO');
define('SECURE_AUTH_SALT', 'H(!}:E>WcKjdA#e/[!X{Ve2>7n]7)1hXJ2%C0&XP0_u`H{gM. =i69NaYy-<l>{(');
define('LOGGED_IN_SALT',   '^4$sS==N-$ZMX>:4[{X1U.(.aD^r^Wh#HL<`@l#(J8C&YX[P?#:cS`,6;VU{J$tM');
define('NONCE_SALT',       '$vwIx>6$_u!U/+dlp47f)|u|k%Yz2^Su#Yv3!oD4#u?O7gmw=c*Br#-Z)g=Xw(&_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');
