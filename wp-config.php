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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'P@ssw0rd0n123');

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
define('AUTH_KEY',         'n~bHqk,G-P+ObU+cO/r0.E$(SHT-S&}g*rKub4npgak6^du]4KhXHw<K@HFud+)|');
define('SECURE_AUTH_KEY',  ']!QI]J|N(y@de}U(D*xW08`N]so-s-7_O9W7spQDz-|+B;7.gb[^+R[6Y(H+A3R ');
define('LOGGED_IN_KEY',    '|PK|>v)#LByd|YF6]|99+.RGVPdal5gtaDfVoU<p&^;@;~wVzlu>5eo |=G,pm<L');
define('NONCE_KEY',        'x)h>)o=q*z:y#lf0z%+F~R0# cCn=JPR{t2Ckd0Hh e.Me S%A/K}U#|w.kcBa=d');
define('AUTH_SALT',        'TSSu~wH-uzY< :6mZVbNPD/,8a1V*iz^{#[rR ],RV3`l1D@]jsdIM12]PdWc#[O');
define('SECURE_AUTH_SALT', '}N|0R|e^fq],OXSO!eUZ1p h9eVeTs|Un8H7*.f|w)<Tka{xY+<HV(PXj,ivD%t^');
define('LOGGED_IN_SALT',   'vFLP^>qKZclv+W-#2v?NSAhf:3euYH8o@lAuR-*NO/PN]7Z[QRJ2)w5z}B#%be*[');
define('NONCE_SALT',       '}:{+{R9H3hcXRhpaKv$$1FsZtsT=oV)J/ZMHMz/yM|Lr<SL~61Qx&`+UmERU-K?K');

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
