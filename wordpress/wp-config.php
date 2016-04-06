<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kahportfolio');

/** MySQL database username */
// define('DB_USER', 'kellyann');
define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', 'nr294nx');
define('DB_PASSWORD', 'root');

/** MySQL hostname */
// define('DB_HOST', 'mysql6.namesco.net');
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
define('AUTH_KEY',         'Iob>ut=|]Qo:u%T4<9&NuK-yL3w-E&|jh3UpEaXG8)FM:.-_:Su< f6>.$;UX>r?');
define('SECURE_AUTH_KEY',  'EiQP*3FR8jSXO9N;!,16&g|cZ<V(x#uQbcAv#6VG0f[d2cCt$W,e6xc_Cc}N}U[L');
define('LOGGED_IN_KEY',    'E-=~I%?X3V%<5,D|WzwxRutC*cURkgdNIS!1dK$T8UQ7z>}BoYvGgjxAqmr9<BBX');
define('NONCE_KEY',        '(*&@|+H--k}:?B+,1O@r`H.+!]O+M>IHp[v?d-nqBVdt7`G_!J>sVN]m<w_-3n8x');
define('AUTH_SALT',        '+-q9U#X+D@i&^c`<^.t(15NNr??H?fxX|hPu=/c7ejBkJTU+Nc_YKmex^Q.p|G#_');
define('SECURE_AUTH_SALT', '/Yv8T!2`ViKX($T6XP`QF`0|dbo7&O@.%Eq>AP6E5%=x6~@G ?!:M[@J%3tRxBLp');
define('LOGGED_IN_SALT',   'i7H?-2sqsB`xbj9R> p+_])l&CmOPw|*SdwU{|:x*0y4`pRKZD=4f,4hI&6-#yo&');
define('NONCE_SALT',       'WrXSW.:.1L@xV,p/(j!}*~DqnS>heYym*e^M*|!%5Uo?F[NLp@CnopbSx~LY7Nm>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
