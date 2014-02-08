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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'YXT019z-G![=:p-eIPf%*[O@zlQsQ-|9j!7Lg0k0MwK7s%Va7<E6z>^kN,Mw7b+j');
define('SECURE_AUTH_KEY',  '}c|uw.Jw&P:HeW&cj=3/A,SXxl8+b52@T&i~|azTc2P2iF?}Gt~-6*x2;Ob4|7,G');
define('LOGGED_IN_KEY',    '+$wt/ZveXbvWUkJ:5r%m?=`|*/&oZYZEC%%X#C#A4* @+5ycu0YtC(sX28*t|11>');
define('NONCE_KEY',        'Nq?s/tn?F=R36M1.<cZz0p#&^K|D(dgW!5=V!u-<*|y&C$NJQ|>DmWj1T[z*u|U|');
define('AUTH_SALT',        'vE{2J?;6D<7a#oHTfFt=yoZ=$9;Hgqz?OY0I6if<!mAS`m<ee%GF/KD/EmD)I)sm');
define('SECURE_AUTH_SALT', 'i8@:+oz 8Oj+W@!?+1EFwv0%%y)pm^u-5AHjk>YI$,I&-8M:]BkFT.pfK4H+}X]U');
define('LOGGED_IN_SALT',   'w&+r#gdf{%!ca&M3ML*6U*TOPMDcJ(o$xP?{)||Fr+Y?9VeOq+7sN%Te_qx!88Nm');
define('NONCE_SALT',       'wIh?nu9K ?N=d+7I$,jVPM}|js$nG^F27HUvV;CGuBv =DKSbPs5^G.+/kPs.7W.');

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
