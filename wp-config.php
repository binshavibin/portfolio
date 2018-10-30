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
define('DB_USER', 'binsha');

/** MySQL database password */
define('DB_PASSWORD', 'Binsha@123');

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
define('AUTH_KEY',         'a1fyko<VjEz>8mPkUa q1Pd8~0scgo<h+9YREuyZ5+S7,fl&X`WMbWmWjNg~sheT');
define('SECURE_AUTH_KEY',  '^J@!nD3d;N.!A8A8#3_j^)eyC#DU|H+Q3HZPF,aa>w.JKS5ClF^gqEAGih|a(5*u');
define('LOGGED_IN_KEY',    'yc;]C>xjW{T41Z,FQ1l?Snz}7w18E~OF&r?hqrkMkiZ/LC6q8Kw^`R*M<]cr5:=z');
define('NONCE_KEY',        'tj7KTFI9-:4V|H}?>;s)ho`Dn;z+,|3FCv0e+y(>3U:fjy*XUj+CR[/-<K/%d/ck');
define('AUTH_SALT',        '_FuLkpS(T|zZX(T~b}m:kLg)fUCWV8)C./F5^~4,#4e(E/+|x|2Th/!@>u$;+iHq');
define('SECURE_AUTH_SALT', '&jgLp&HL)Y]PEb_H(_dQ6-Y!O3Xxo$n(;^Yn{SP;ZvLSw-vxvX)8]V[q{EscZ+^x');
define('LOGGED_IN_SALT',   'CFBb>r%R!DmX&uUu(S}6<6j90{,*|M4eXKGJTwt|yMX}T=V78NlnW0k8Vxi:v%>&');
define('NONCE_SALT',       'Mu}:M&>N@uS:tEgD@plXJfL!jP%QFLj4rE9~qq8H|sjA;V?4:z@G4XC)V9!R=Zd5');

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

