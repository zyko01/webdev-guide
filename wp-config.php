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
define('DB_NAME', 'web_guide');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Markchris01');

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
define('AUTH_KEY',         '7>XhCaSWu^*c74@t -v5Nx53[5a`OO8Z8wbuZ6j=HuN<l5?J`Vzh9oq=r;Kw[G@d');
define('SECURE_AUTH_KEY',  'Q$9&GC~fFf ft)2Lw!l;(wixToHSiV:&lTmH;r (SRa*QC1GwB{PN-B6MW%)ap$J');
define('LOGGED_IN_KEY',    'mqbRc,# w=iy~NWDO5>]UctQB~s~-7=Fgv+tAP3S9,p,/|vf6eGn_ F7wUd1I$YZ');
define('NONCE_KEY',        '[vtpTCiotW?Yjww%#%_:a3oF,EykevY0l; vbq?@pqgm~Y.YY5N@4T.jc])o:C~(');
define('AUTH_SALT',        'qk6U:dH)53ZlIA7stV,M}}5Y@pIn9u*&@blz-ZI,;oMhp{%(lbL4AwKE8e.)S<K[');
define('SECURE_AUTH_SALT', 'Yn$^o*DC/vd>pqX>sftq`Xr2%OH&.Z8#{A]^QJ)_oiJGL5DBo:Y[K98HMuH,]z0V');
define('LOGGED_IN_SALT',   '_+g!q0hRq7 s5$EF<a`635@AL$khg0h4nngEqXGj88?obcTlNf1eA:F.+To.2fT-');
define('NONCE_SALT',       'g~Vk.Q$_Cq7UL,(SxJvvAQ&@9Qe>DTT*W+IHh0)xdCsHsLH`D08Fq`(yRZ_%8`92');

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
