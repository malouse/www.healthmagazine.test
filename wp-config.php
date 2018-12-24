<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'KoGkNg|osVz}vxWeHx~i_l~D#]t1K[O1KpOhjMQ3XATuXiImTXAqxa+em6cgJz^j>');
define('SECURE_AUTH_KEY',  'MfMU7XAIybf|KdCgzGO|8dGN0R4NsRF}4@B^>YBJ}[t#K:1-8_5Z8R|dGw@g!ow6a');
define('LOGGED_IN_KEY',    'JH_ltD#:w5-_S58_RZCA.6bEI{PiLqPXAqxa+imSt3BrUYBfIQ^jrQuXfu$f.6$-');
define('NONCE_KEY',        'KljMUBjEM3XAMqXfIqyb.mu6MTAfIT$bmPu*m{u+e.;x6.]Rz^k>v^F>$BMbjMu');
define('AUTH_SALT',        'f.E.+AL;T6H]TaDJ}4cFQ4Y7J}QcFnQYBjrU$COsVhKo-d|owZ![s4F|N4Bk]2*D');
define('SECURE_AUTH_SALT', '6WaDhLW9dpSwdl:w~h[s~^juX$<q2E<L;6.LT6eAL;Sgs0z!k}8!F}4@B,0U7JrUf');
define('LOGGED_IN_SALT',   'SsRZChNVf<3$A.XALqTe<qxe.mx6.]0z!n}v^F}3$BM3YjMrXfIqyCdGO4ZkRwZk');
define('NONCE_SALT',       'a*aiLtWe#pxa_lwybnQu^j{u$E{2+AL2XiLqXekJU8gJRzgjQv^j>v^f>$BMs5~|');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
