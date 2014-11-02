<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/** Load the right settings for the environment */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/vagrant/Code/dallasmatthews/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
if ($_SERVER['SERVER_NAME'] == 'dallasmatthews.dev')
    include('dev.settings.php');
else include('production.settings.php'); //Returns an array called settings

//die(var_dump($settings));

/** Set up the WP constants */
define('WP_SITEURL', 'http://' . $settings['URL'] . '/wordpress');
define('WP_CONTENT_URL', 'http://' . $settings['URL'] . '/wp-content');
define('WP_HOME', 'http://' . $settings['URL']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $settings['DB_NAME']);

/** MySQL database username */
define('DB_USER', $settings['DB_USER']);

/** MySQL database password */
define('DB_PASSWORD', $settings['DB_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $settings['DB_HOST']);

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
define('AUTH_KEY',         '#V#M)Wy@o);:Gi3y49+X:|A;BEzy8GHhzEMi%(6EA$T`X+rK=:{BS/ bivLb`]&R');
define('SECURE_AUTH_KEY',  '~yV_P/G|V&U!Ib5t+G@Ly#zN5(VjZY)xH%(`6]C8&]Rh?S4,>-8}6-~I$2*-|l2i');
define('LOGGED_IN_KEY',    'qy23+I w&)C7IdrR)[R]=a!_48z V]Y{^cw^CGuC+OdDR.]3vDFBH+Tvg]X[Z_/B');
define('NONCE_KEY',        'bmXOi)bM/>x%zj(]4>q1Q2@lrIE/}9j%mR]$>8*aJ/qC3YK/%Pt&5t/d26^3!G[_');
define('AUTH_SALT',        '/||.}++Q*[^b;r6BnIc|Co4}<$`+SpSUP?cms?|||E_q1w]-)F~}o@/Kmq=Ap^x^');
define('SECURE_AUTH_SALT', 'bqB5AnjryfQ&Sa&Q(l5g`BU>AOSZlS(>z>  (Jkz_fpgE%GcC!Al{|`,1x,-S@2h');
define('LOGGED_IN_SALT',   'iaqcgp_Tx-S{G>3U3cMGmM9`$Wm2Xncyk4X[+S}ud]!>R5q`9zey%-/7cXI]tF>Y');
define('NONCE_SALT',       'tq>+x2 [g+pF<%;Ug0h:sfCyioMbWt6&8 &esw&:G /h^Ubi&s+9:DXrq,:#M/mq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
