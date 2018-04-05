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
define('DB_NAME', 'butuananglersclub');

/** MySQL database username */
define('DB_USER', 'bxu_anglers');

/** MySQL database password */
define('DB_PASSWORD', 'bxu_anglers');

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
define('AUTH_KEY',         ' 7[#P~9UT9:CW5_HY5kJ:Ni@+I5C~-p~E3q.!U`1|QzIFteptbsx3Cq-nV:x~D9B');
define('SECURE_AUTH_KEY',  '&}gNr$`? 3ds1iOvSN{+ K]^x<Vyj^v.[9z G*l2vCyh`o$x=J|B}gcTUw)n)d@%');
define('LOGGED_IN_KEY',    'EHd40r( `E2g`)fZVm e6d%y<R77*-Y{^hmP7yr3RrxzqM.UBWRO&^6CmD)Yt,)a');
define('NONCE_KEY',        'GE}b_ mapz4{8n`)czg$^Jo^zdFCz+.AIbRjmrV7G?p?bbEils7%Gn<Ephgsv52;');
define('AUTH_SALT',        'thmD-;f<|Pf6FdGbP>co/I531BOGP_RDf6X%%m-eh/WjQvU9P1*YV1h+Cu8Ehlc[');
define('SECURE_AUTH_SALT', 'rHsYIF:vxJVdt.!G|LA[vk):l^y|qdkKK[Z:f-3%O^0X.ydP #oBH8K@W^,#s i&');
define('LOGGED_IN_SALT',   'RfP;IvVL3I{!5k6)ADGdskJR<>nF4*aEyy[Bff}kQ=OF383ci5qic}a2#ZtD,V@6');
define('NONCE_SALT',       'ajAE8b+ ~KQ/s8wIWTeub+Nw}p]r(7?yO=}$~w2`ZmPwtiga0^=oj w(>Z DI83[');

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
