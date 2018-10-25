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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2QA~5%R=dAnF6$D*!F+^e~K1_8Hc&Vx+R&C%XbJ_]Hw{zIE.wOUvs#>I!= u{,,O');
define('SECURE_AUTH_KEY',  ' M3z.LU;_8<7v7^T{wCjnd&0iBp:a[use>&$[l*bD=(T@UM%!O7ESE8!4^oz|TH^');
define('LOGGED_IN_KEY',    's-|UT{h[6SH{zwp9BVcEWij_fI#]_ZmnT.z?^cHR??_GYh/w>~A|zVgPs#6e`~xB');
define('NONCE_KEY',        '<crk-A6PC<xT$OS.CzxIm:-]?@{cV{Z/dE%DU_^cRsn>3bx6PC& >u:;tB+{;%hp');
define('AUTH_SALT',        'k|AO57@T/=xnb`l:U@GRMo_-&{Ih $x#649mdlhV}@I1_yqp&*zLuyCeACa*(iMd');
define('SECURE_AUTH_SALT', 'ji[?MVBJ6?n&0-^:f_t#J9$y!Jm`RRi]s_K<QCmq,yZG$b_:7*&B(7S`]CaB:}:=');
define('LOGGED_IN_SALT',   'E(rHpHeYK*N;fA3mB+H5ZHk/@)Sw3:x6+j7c 4pK2*|tva-.SYm`~5<&8Tt/*}Y1');
define('NONCE_SALT',       'Cvi{[l8!:YYqfc o76b~/AArlPJMpmEM2>#+WSM!9@_WM: 4&~ef&0B)KUo{PQU_');

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
