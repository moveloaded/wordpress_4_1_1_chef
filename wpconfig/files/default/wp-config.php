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
 
define('WP_HOME','');
define('WP_SITEURL','');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Sh1tyb33f');

/** MySQL hostname */
define('DB_HOST', 'wordpress.ck7nqyelziwy.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'g7C1^jhO?J8V,*{(5/2z jqcTEPHMYkn*UuTMa=9TVSd~+)KC^Alm8IA|E$NR6$+');
define('SECURE_AUTH_KEY',  'zS}z^S$.;V&A|iBpQxmC?mc s5w!&nw5V}T[Q^W5{]b^-SLn}Q4c>H+bRnD|W*O6');
define('LOGGED_IN_KEY',    'q,#fzWCi7k5!Hca^/c9ZqUQ(2heg[?bvpeL$!k%r_+.D-w4t=$jb|(v[/k35|)BG');
define('NONCE_KEY',        'F;X<pPfbcF aS=~iyO8~|+LF#bP;`JpZk9xsU24D{by=k**;!D:n~dAA1$o_W<a&');
define('AUTH_SALT',        'RSVyJ-zUNlU]MuSFTVc05-);{RkTh38Yb71;U`l`[xsj`WP&~+m}ERQw7_t@=%f8');
define('SECURE_AUTH_SALT', '>XQ}m0!m0od&jlpE3>tKO7{y>[gXbS[%?c%MR;zH2<q<)(apq>ARpHC7uwjO$n-1');
define('LOGGED_IN_SALT',   '85=aGe{S(s|m-R5N=a-}$o.-[rRAL$|m(IS(:VRiV%1!-4+-u%N6tW-f~|IfP)4M');
define('NONCE_SALT',       ']1Ml,{d{RY~>T7T{xcUr4 +v0_AdyTr2CeDTB-a82LXP`:34~+-@zt@__9Nk3tu=');

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
