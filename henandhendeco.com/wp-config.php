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
define('DB_NAME', 'dbhenandhendeco');

/** MySQL database username */
define('DB_USER', 'urmtechservices');

/** MySQL database password */
define('DB_PASSWORD', 'rootrmtechservices');

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
define('AUTH_KEY',         '``yP?G)FXKDpV&=).VowMs82n;Wkvp-d[$lnTe?/q,1x}{NV,pO:)t]lB*Ioq-9K');
define('SECURE_AUTH_KEY',  '#3@B],cv^lPG^DCK$}3l^)/J?-odK;W+!vwZ%Y9c#DZsLSGx .qR=,?K-s$BBp<E');
define('LOGGED_IN_KEY',    'X^4PK }w/t09wFk0!b7uhcx/jfLVV1CfS~@0{q)D-#9}w2[UG~nl!sr%<+1b_pX]');
define('NONCE_KEY',        '=x4.keL:(PInP4cVW}|kM;7t;/X_q5:0(s&S9A5{-Ef{HTix?NRInYr`/i$A7`je');
define('AUTH_SALT',        '&)eKwLBg(+W1?1~vu2jHotR::,lux}Toi.I9cN:HV,bh]M`V;<xZALn+E{/|z#J_');
define('SECURE_AUTH_SALT', '(AZ9MsxU5kljFkh6dX--1hNA}dW!));jxbYz^?.+EyBU,xQv@031UlL,AXN?+/Uf');
define('LOGGED_IN_SALT',   'k -6/QU_fy]cyD^~>/;u*)=RE*&D~EZ-d{;#sP%{3cG>L#ux!D4k>rb/Q?J:A6o2');
define('NONCE_SALT',       'i1A .vnX.q`y2i $sLf8_7Uz)<AiE`8?||xBe(fA^YJKnw[[[TTxpyExW@HMq5.b');

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
