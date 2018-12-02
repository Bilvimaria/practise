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
define('DB_NAME', 'img210');

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
define('AUTH_KEY',         'P-U.1U7rpGM>se[JKqJ4:=~j {tg>P[g-ERR#>Ah&g&s6Z4rz6|CBXY<r.CG(fKL');
define('SECURE_AUTH_KEY',  '!gvC%Sd*c=U&c(U&a1tQwS.TVos2<3X%6p5fNcg[rh y;8]SK!3XNx/IDL(_NS0!');
define('LOGGED_IN_KEY',    'dTe#ky-YiijQ:Ei]]0p3e>y`/<fQ$<Wm_!nYtakB%&}i5q|[m>09%+,bva?oU?xG');
define('NONCE_KEY',        'm#pz/)Z,9{yT= ;Hq*m!Dzm^l,sE8l/ lwKTebz#5#%La~c0ZmH%t&5hH2(A+@xB');
define('AUTH_SALT',        '~<WSV>V+ITRsr&746-LTBm&a;&V,]dAcqqAL2.e%Eu!rg8%5{eT}BV_0NfU^,>^%');
define('SECURE_AUTH_SALT', 'Ugp6[Ss5J2!iTpABiUfI0<AT4a7:5Gm^TC`HpqZ9[aV;[=f.yW(OAE<x!3-YFF$q');
define('LOGGED_IN_SALT',   '2BFLQ J9y~^4@/f8dUg/kN,+_&5&.;,hQymGV7.RQAiRPGJAuzbtlqYmA:z,y^5e');
define('NONCE_SALT',       '|w[ki4#DWe3H1A~f%-rDA6NV[b>2qUUQoze:pjI]Y(X2uR~Uxnv#xf!P4g2JK{{D');

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

// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
