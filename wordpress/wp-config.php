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
define('DB_NAME', 'studiobergini');

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
define('AUTH_KEY',         '5y54{DdkgPm/8!=s@hb`DK7?X{s6rF4YV-;DfhTJDfmDvL_)1XZM{PnuK/~7r?%/');
define('SECURE_AUTH_KEY',  'erzN)<&CK F1-2~%N,*CcVZkYxWI2=XMRJK2R0Pzd9YZo`.,yH?v% !Wo/RaH1t(');
define('LOGGED_IN_KEY',    'z26: bT:6W>6o+T|Q]i^27PlenVNUD7/-4Y]rL+sK:{QAWWK;ov%AC<vL8[t)c8~');
define('NONCE_KEY',        'T.46f)[r,ASS?_Bv,bW_keNyPuUen^|.kP[X.DTwlzVTXN;1bgjliSA*HB1]IKhw');
define('AUTH_SALT',        'V`Yj25b~=O%?O1FRmf`H|nkNlYdqf[FD``bYdGJB0;JYmLikcY8LIDNFPl*VcQ/o');
define('SECURE_AUTH_SALT', 'x[K.eu}Cbi+zCYo$5]T8}94T<Ja~FM{I(qI(:5J{kS_-odiy:fP!!0:9WqU_e{E@');
define('LOGGED_IN_SALT',   '&WE,gFt[e0Vu}sd/OFe<EC7`<wE4m0_7^FJ9b#kbz+$9p+sVBtA*Qm{7OEF|RGA}');
define('NONCE_SALT',       'spU6nBChXh_Jo/&tU#iNP[k`g;$(!+T~w|v!zGBx[ncg$sa$$y#5~/;7fbYY<D7(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sb_';

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
