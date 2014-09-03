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
define('DB_NAME', 'cmadb2014');

/** MySQL database username */
define('DB_USER', 'cmadb2014');

/** MySQL database password */
define('DB_PASSWORD', 'R2a94@8c9F!H42');

/** MySQL hostname */
define('DB_HOST', 'cmadb2014.db.9955603.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DISALLOW_FILE_EDIT', TRUE);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';V0u%+lac[(Ej_F(/:Szma[p:P![(ODVfX$IBOM/NB~c0=0`+),c+p%U<Z5?+(|t');
define('SECURE_AUTH_KEY',  '}hw!EmE<R]Hu$2U 8rrab,G;i+}@%ZkyD_3-i6Jhl-bE*jA.XXaIWhU$k}DYKMT5');
define('LOGGED_IN_KEY',    ' t04E/[wkp[9y1Ceni^E(Sr5MaI[TgbQFbO:3NN}<B6E&2 p3W%oYc b)(:=Dy++');
define('NONCE_KEY',        '9ORZ-)FkS%9w^ <+6i=~{E*3|N_?-,H@D:AZQL$fnQ5EcIcYIymNL7,:+92DdsJo');
define('AUTH_SALT',        'Tb;T+z5c.F_IDa0M7ov7p3U#VVD~C>G;xL0)<-NX#xGUkGw$i4aS&c5ur9qBQ-{p');
define('SECURE_AUTH_SALT', '>RNO8*DPl-e|!Ptd]%/<#3i+nCHWKTrT#fFA+,Q=pZ~;;/Gv2g&Hg[WZ@P~Sjf+X');
define('LOGGED_IN_SALT',   'B,-UUeuqn=@Hw.xE`4d<` .C%r~&N*+EXm4-H9-/6R? zcXVs`jVv[bue_xXzB)I');
define('NONCE_SALT',       ')VE&ZkUT^X3+fvDM5ZX$G|Bv#?HWy4+=K*qMuVpAiEyzhjw_mG{_Ls<AH?Z}|~r]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rt_';

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
