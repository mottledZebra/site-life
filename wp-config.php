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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'O)9z63]MaaS/H6YpZs*,!+~Ugl)}GI!#!|PhEQdEG9=o?&pn[U#gc9fK]@SC.s.m');
define('SECURE_AUTH_KEY',  'e J|&r%To2ius*3wLM7qy=@$aNd]~20vKxWoW5GvNw=Ygwx/ F!dmZmvge(Ds^qo');
define('LOGGED_IN_KEY',    '~Oy,]}Gs_/D{t<rnwc^RQf>5Bm/Tv!UiR3?(V|#>D--92jh7C[!|=i*J*0jZH#04');
define('NONCE_KEY',        'pmEb[v3OUF,y;PQSQ3wgXx}Yf-BBC9Sb4r=_IaatB~cCEhXrv@ g{lG}QHO{!qIT');
define('AUTH_SALT',        'c.Yio=?[t*X.Qf-I<,~c/p#?Sz7vlTs7mO>8#opHZ{i|>;qX~+cP+F`GX}KW;H1J');
define('SECURE_AUTH_SALT', 'Kyv},y)E/%cs6$FkyI=JJmoshA$TKr@K}pPC4^M_OigD)2-38/2r`oAEX*6);p7w');
define('LOGGED_IN_SALT',   'nn?a|s,*?FF?r!]d#trCbovmSfRh=2pO#saRk i.-?rb9tE.;UorC: v@[K}a1[{');
define('NONCE_SALT',       'p<|-qqX|kBgd-fpVZVqs_{Zoi.f4^boxahoUd{BA/0DYuh@t|zDw74B|LRrHn[(*');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
