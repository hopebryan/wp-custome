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
define('DB_NAME', 'rollyv');

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
define('AUTH_KEY',         'M>n Z-Xh[N--4peqVDL;5I,-|:X$ZY#!}Tk]X;_`AE8N6CuneE@~D6ZP2XgC4!h_');
define('SECURE_AUTH_KEY',  'dh>?K3Bt.JA7&_c9di!9rI[e2bS+!YNkg. ;CZCx]Yokw$T;SxD_2htbs~].{T+q');
define('LOGGED_IN_KEY',    'K:b[PC)]WI[vZ_CBL>~JcJv*&Jn<gE7|y(D4P7vOCV@_NT!8FN#7q}b}J6/eKW~d');
define('NONCE_KEY',        'u%c}lJ85?T2>=7:O_YnQ:+&5kuY04,mL.}i1V$na=Z+NtYHpTKt1:a)J3&d  RG[');
define('AUTH_SALT',        '0~D1M9J]F]f;TSivBrNy4)$VvF[0pg]MG_hKaj$6CM|]Mo-z}9,HdAy- I_q;_nt');
define('SECURE_AUTH_SALT', 'b%W].cdlvW;Gh@+xrm!`fLr>Q:#j|.XR5fdb1gs7nBr6Gs{=bR`uj#J,@[;N>hk)');
define('LOGGED_IN_SALT',   'C8DSLtY2t,>rB+Rb22pH%p#@r`#&a?G82;ibh](uc-Q6^=iOKgsF@V$04X#-RD3r');
define('NONCE_SALT',       'A Z_E!Kob/)yoX-d2RBteF4F1%4mO{_ku#5d2~^gJP>MZ&W;`rA42)9p|,p;Z-)|');

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
