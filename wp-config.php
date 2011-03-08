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
define('AUTH_KEY',         ' cNro~l=/+N JKq}d?o@?Rdp]E)k-]mF>:FI+e^/ZF>p!I~_j)!T|CaX&Hje2h[E');
define('SECURE_AUTH_KEY',  'hiOJ+q|Ly/PuZ)=,T:8vR%V2f&{|oDeDa|qiFZ-)VP8k6Z-[x]Vvzm>m%JF7!kO#');
define('LOGGED_IN_KEY',    '~Isp<9)_F,0@Np|~Oh5@e9e[XKUTvBZiJ#RDPQ(W$+Tz2tw@XCU8=D*sF{KI5Jts');
define('NONCE_KEY',        'j5X!&[iQ>.*m//>#{0v;}3h=6Km=&o<dR}jMDYf6~.||`LZ8KsJa=G^m2!B5&gms');
define('AUTH_SALT',        '5FY,bnu1&,>|)N{y{Cfdw8F|,q3Kk+?IqP}l}dZ ^OV^,%M,t{<,|2jYYq(E/&(O');
define('SECURE_AUTH_SALT', ' |o/Yze@,6Wc?4eQa}!d&723CglMt{k8DoCVO{{AfiA9%Y0XbN |N-lBK#D=2jOU');
define('LOGGED_IN_SALT',   'b^4pARRAipBqm^{5l{f]*Ly5Kvuk).qyfp-TCBFQLCm3fHmvMj&[,*lTW_7lF*Md');
define('NONCE_SALT',       'M1YcHsx=%;:pUB+aJE.8F0/Q*X)B7IS7mh4d|iK3<R`iQ7X`osxN=b~s[t6#RGei');

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
