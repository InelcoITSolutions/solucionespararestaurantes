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
define('DB_NAME', 'C265935_restlanding');

/** MySQL database username */
define('DB_USER', 'C265935_rest');

/** MySQL database password */
define('DB_PASSWORD', '22Cinterdora');

/** MySQL hostname */
define('DB_HOST', 'mysql508.ixwebhosting.com');

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
define('AUTH_KEY',         ';DwSfs:6kr@w3?%J.CmTIQcZ8zLF2e4hZ$A).v?NPhME{&@*cm-81 UY`1LfH?yu');
define('SECURE_AUTH_KEY',  '?+3C9c/-vRd,S`>TY.O+V8MqpW7Q+a9_~-%<D?,b~PYBib`vSQTvR;L^iy;co5W1');
define('LOGGED_IN_KEY',    'Dv)|f#zu:BA-ya1x3<xQCNkP.o6zvMuSjk9@by20H9tA+| M&.Z?ncb!]$0ec7!^');
define('NONCE_KEY',        'fm}0ZO9 sDNw 6J]>>.vlMo38|hx,Sk-/^v{qz1)H@(Yf5*Q5>Y267?3oe; ji)s');
define('AUTH_SALT',        '!qir;^y6^)lZRSZ$1ul``y^iM-<2=Z?}F>3/#C?aCLTY,XjzQW{ Bd^4s5VQ01io');
define('SECURE_AUTH_SALT', 'g]!hZ`W}pIWqN,5%_hl]i7Eu~@<~cEN{w7_{qD4^Oz43(g7-NYFS{LjbC7c)Xblx');
define('LOGGED_IN_SALT',   'nSF5`4 }0^@OQK+V<7iA9N).gTVWDG)KL:$=oBEZ,C?#=5}l}0kuKp^8wD7aI)yJ');
define('NONCE_SALT',       'O4=KzPIpM[*[3,UnbQ^YD>ol*uDPn][}4rpLMOWPxAmbY~<c AXqon4:O5P9jVt[');

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
