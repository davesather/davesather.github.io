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
define('DB_NAME', 'mywp');

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
define('AUTH_KEY',         'kB8Nd<+wsb[14)XRSbu&/Z(Na4IU9S_Q-]ru+PvyFG/3cK-,I+T<lsGHHYKvR&t&');
define('SECURE_AUTH_KEY',  'uxn+sq7:SZnBWAG5a |?%<7qROaq_LN2>N+}T|w0C&Vs4Ia/tI02d7aV/7=HBV*[');
define('LOGGED_IN_KEY',    '-tddC2?yoik|.*zV (hzsDliJNSd8^dZw?NfJEuYuF*Xe5v3= =z5R n+!j>8B9G');
define('NONCE_KEY',        '_)|q!ykT8mWL?ML[gvs#%nt8Jvf|Xts[s8V=QI+pV~ypqmDk|d!4b||5;)+Fe`]P');
define('AUTH_SALT',        't=}k@Jt!|%4M-Hs4gV?L5Qhb6vCe;pKb^WA5(~n!ju||cQ=C.~l|]ju|GLqTWr[v');
define('SECURE_AUTH_SALT', '{aCdBSjbtTSc$#*{ufPuFKOd 2h_@uj-t_7e)Hk|W?eV}b)(mn[3{IM[Jr34;ZNT');
define('LOGGED_IN_SALT',   'VRH.Q`X934s-~j6mK2`lDDC1:/ +O+v~i3x27?,,o*b>qq6pLP`6zUS7q1ThU}/?');
define('NONCE_SALT',       '+)`a<O$KklQ w?p!DIg)McDtz772b4#KJ[Uu<kP|Lg4wVn>7?c;u`hjHRR{8%xlU');

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
