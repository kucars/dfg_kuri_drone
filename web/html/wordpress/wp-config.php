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
define('AUTH_KEY',         'c+0*}i6G}v[0cL+&]_qj{Dn+H7AJj|4l$+6,-sVnP`+;hV(j5@|IuEVZE/,w-I/9');
define('SECURE_AUTH_KEY',  'eo-7,^2:BAz~~/}:EoobFjw%+ yCp8&vWBz-c.%.$ccAj5;*xAI?CU{hI+_`D PA');
define('LOGGED_IN_KEY',    'l&,y64Im?l~0:)j,&-VeE?T:Y<t98%_ovAp.MZ%~:=erP6+ZX}co2xd>*cujN$29');
define('NONCE_KEY',        'LgF<8s31?L>|FHwM>L>jX&4FOs#(gh}Oh%veh>3=(?+TpH8$N<{N?-(*+;3lGCRM');
define('AUTH_SALT',        ']^jg;]p_Lj3:=3^t&O#P6L~x69x-BCYag[1Dt.Y6+EMFHPxNs[]M|}8(b#^}2 DJ');
define('SECURE_AUTH_SALT', '-Ze7`cC;+VU`Dn={P>$!,;,B%L8=50FJ |u3/DFJ|fKZw4 lN3?i-FBt|^+*a ~/');
define('LOGGED_IN_SALT',   '|,GWPR|/v+#s1I3Vka6PTEq5i=~k]~uj:$Q#yv!YbNKoZ*;[(|z{>}3fv8{x2U_5');
define('NONCE_SALT',       '~p$d5~{)9+YAKI=x89B>2@@!LSTgQ$Z(ID+J0v/Vr[qK<o]|WzmPG|5|L%lf5-5K');

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
