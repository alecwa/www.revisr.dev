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
define('DB_NAME', 'revisrDBjtcqz');

/** MySQL database username */
define('DB_USER', 'revisrDBjtcqz');

/** MySQL database password */
define('DB_PASSWORD', 'Oxc7zDzDOF');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'nb{AKZ|4gwCR@:c[Co@JY|4gvFV!0cr7Nz,t_Oe]9l+HW_1dt9O-]Zp5Kw#Sh:Co~');
define('SECURE_AUTH_KEY',  'oZ[VkwCs!Nd[8o@JZ|4gvCR@}Yox#Se]9l+HW_;et9O-;dxDS~Od[9l~KdMb<7jyA');
define('LOGGED_IN_KEY',    'RFvFRg}Bn@JY,4cr+]Wl1Dp~Ka#5hwDW_1dwo|RXAiyEP;i;Eu.Pa<6m+Ha#9m+H');
define('NONCE_KEY',        'UJz}Y>7n^Mf{brBQ$br7Q$[Co~Od[8o@KZ|4gwCR@Nc}Co!Nc>Bo@Co_Sh:Gs!R@');
define('AUTH_SALT',        '$I*bq6Lx.Pe]Am+HWr!JY0cn3Jv0Qg7Bz>Uj3fyEU^3fuAUCSs_Od[8o~KZ|4');
define('SECURE_AUTH_SALT', 'h-1ap5Kw#d[5hwGV~:l-CRb2Eq*Xi;m+ET]6ixPx#et6t_La2H}jzBQ>3f7Mv,Qf7');
define('LOGGED_IN_SALT',   'Zh8Kw1Rsbq6Ly.Pe{Am+T*;WxDT+]Wm2HtLa#2BQ>7YyFU^{Yn3r^Mb.Eq$IX.3fu');
define('NONCE_SALT',       'CU$7juAQ${Xm3Iu.Pf{Am+HX;aq6Lx<04Jv,c>7gvNc>3gvBQ^}Yn3I^MY,3f^p-G');

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

define( 'REVISR_GIT_DIR', dirname( __FILE__ ) );
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
