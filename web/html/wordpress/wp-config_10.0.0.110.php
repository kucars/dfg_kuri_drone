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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'odroid');

/** MySQL database password */
define('DB_PASSWORD', 'odroid');

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
define('AUTH_KEY',         ':=|-Jc+Jw3^=*:3q{KD=Xb~&h{h71oBMrP&>8JQ+%9K~EV/Qu4I|0h{=]a`<;_JP');
define('SECURE_AUTH_KEY',  'a$RBpw-j%JW|M-v^[py8%0?kDTL*Z@;E}DN+On[qvzk1k>c]auPd vue1lI@Rk*|');
define('LOGGED_IN_KEY',    ';~B!f+iOM-N6qB}I;1#]#[;8h2`>~>q56N/P:1~NYI[*f7COtpSS$B`+m^w;lG!P');
define('NONCE_KEY',        ')fqe};IVwyfZ`$oWLM^-FiqI=T$ax)N+`eiZGy@;-E=CHDb~0Ed@F1U7[2SA}+/+');
define('AUTH_SALT',        '+oE7mpZ,gM@t`Tuc Sd+S.(/,}~5iwLT(fD6A$^+bc0uaL<({R]-b{7ZaRv$/&w$');
define('SECURE_AUTH_SALT', '}f+f5t_5t1=LjCj*z#<l=t#_1R.:pX8@EC}jD~|L6S &#i}LG^F}R-vxBs&j>0}`');
define('LOGGED_IN_SALT',   'bZy@y]2H+zrtF}Y|F)i/dk`I;uJ@,~~;Ulkw^MmPgY^KtEVbGQ8!Nlo6E_udo&Bn');
define('NONCE_SALT',       'xmL~:L6|M&f ^0Vt0^3y;!cG00J8Y8~G7{Wn[jn6>M/L!1K|P(bS3)QVf0qd`Rcx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sid_';

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

//define('WP_HOME','http://10.10.101.49');
//define('WP_SITEURL','http://10.10.101.49');
