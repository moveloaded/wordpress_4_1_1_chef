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
 
define('WP_HOME','wordpress-2121432383.us-east-1.elb.amazonaws.com');
define('WP_SITEURL','wordpress-2121432383.us-east-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Sh1tyb33f');

/** MySQL hostname */
define('DB_HOST', 'wordpress-db.ck7nqyelziwy.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'K;2)qEo5L,y?wp/Ik2aN`A]{0lB/rx6>%hh|Pg_`yY 3FTgo4a3+yjx/uIGc4sw');
define('SECURE_AUTH_KEY',  'a<hD,z{i3pv?r1Ow%d%_9`Jk[|1M&Zc=lnr~0`k5g[R1_Lu=!$O8-dOyP0T7x.a@');
define('LOGGED_IN_KEY',    '@#g^fx,%;:6,b7DAX?$E]|<-6B8V(eP-T6[wT*B2vY@:N,g5HkQA}jV?4?MI3;=-');
define('NONCE_KEY',        '_gi;5Cg]ns+E7HjLqa|ACi1]Bt@&p.NzrFF4~eyvG@2FR]v+zzJJ^a}0|(c(L-~');
define('AUTH_SALT',        '7bJHGkc+-xr`)$1!jA;AoENy-l5BO{1ZAj<q4R5WTq6^.5}POOJ&{-E_~jfO:!s~');
define('SECURE_AUTH_SALT', 'i2;Ap13ng.ip,l/d_l_);-Q<p+fbn~}VJ.b|UlP|,zCN<k24/q;o5(Gax-~;wV.M');
define('LOGGED_IN_SALT',   'BQbJZy p$`[wkAM=[Mvt(1o@N{n=ye$(B4}iQGxW<Pcsl~+5XM-wn|QG_cT5]cZ');
define('NONCE_SALT',       '!1XALZ]+*A<+.=@?<v-Y-H4|l4v-R|Q|CL||k@dmhjk*2vtFshuS*%SB^.z $;GV');

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
