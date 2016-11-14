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
define('DB_NAME', 'thefo7mc_db');

/** MySQL database username */
define('DB_USER', 'thefo7mc_nrj');

/** MySQL database password */
define('DB_PASSWORD', 'ndt2dx12');

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
define('AUTH_KEY',         'fiw=ah${h@;;*CAy@!rZKA*yLb;aoogs(NuLKD6WOb7fGwta4cS;lDJoG}{:,y8y');
define('SECURE_AUTH_KEY',  '&ZB+*7]TI{-wrYuamY}W6zA:Prxzhw%AS_eP}KWL.s% Qcy}on?/z@I`KizFB|m%');
define('LOGGED_IN_KEY',    'sNbebLpBKOSp2k;3!`#q}1,nto;4zJrJ4-^(_iV#;f1a26jEF(o|k@9=FU&(*q)M');
define('NONCE_KEY',        ',<_@w415{?s9>o3ms1NAFT6DRk&-!}}]}$x^@><{7R?jZ/S5hSn#Ln-+~u~R.ecA');
define('AUTH_SALT',        'Gg]++Y0a1YcA.yTWydkQVT$GweeMFa9X{qLnv`T;a6o|D~E!KP%w+^^/?>jTLEZ|');
define('SECURE_AUTH_SALT', '@~pS8diOv]4~/b.c>AHsP8fiu}F(k_j_Ilc)280XV!Z7]bH[ S64W>8pnY~yq H;');
define('LOGGED_IN_SALT',   '|csae9AR%OkfI>*n5o^+:SWxy*93MfD%<-x8yHb<f7]MdJ.Zs)p6Lvz6,V^iF?t~');
define('NONCE_SALT',       'R&|q)N%~TaQ2:/aaM.Dn`x-cn!pA?+5MLrqN2UWPjV+}-@~<#,g(Y#mT-l.m;N>O');

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
