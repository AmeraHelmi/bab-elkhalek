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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'babelkha_xiksurspos');

/** MySQL database username */
define('DB_USER', 'babelkha_oV6sree');

/** MySQL database password */
define('DB_PASSWORD', '.[,i10Uz$FE-');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '_n8>6$,e#!Df5q|2[]fpo`IYCg^Q<V-}P$_8d38?+j.3#<&yTqJLbHe(,(R5lkwG');
define('SECURE_AUTH_KEY',  '/7oP $PL0}J4{c6gu%K~UlnAf% Dd@QNlgH-HkZKIHS,n^IaxeF5|MLrNec<Ig3z');
define('LOGGED_IN_KEY',    '$+$TvmO#vfKo$p,~:s;8wK5n29>-JM69JlwBMaM|c4iPQF3f>+`?MKB|t3>m+.Ru');
define('NONCE_KEY',        '9Y|<V:NgD:yXy!=!kw2,IKKPlTp$F0%uUCiHJ)tjVJ^1z65-e|U_L)aB%V-l Dcf');
define('AUTH_SALT',        'w;6XEe0b~_TZdr;dB}+=OJAyA@J&V/.F4@?)1J }Wu{L-QP6]JsmDEl(:Va0U*A5');
define('SECURE_AUTH_SALT', 'gx(pG2PY}gL{eHh4|L)O_P|PL{kXhq!M>>CayZM>0&Geq}^jj)E&%Oa=r_@3oJ(c');
define('LOGGED_IN_SALT',   ']f59n0Z$77kHb52!7&j0f@z_`+#3bq!x-[n9J3-ZqQO=GN?k=h&Js5V52 dZ]]~#');
define('NONCE_SALT',       'm9)QX ]1hr|sA;tfiw)oA3n4bbK}!]J(.!1509 (B0 Cq0@-t/~d9T69STNhC)GH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
