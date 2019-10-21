<?php

define('FS_METHOD', 'direct');
define('DISALLOW_FILE_EDIT', true);
define('WP_HOME', 'https://pucktoearnings.com/');
define('WP_SITEURL', 'https://pucktoearnings.com/');
define('FORCE_SSL_ADMIN', true);






























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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db702804293' );

/** MySQL database username */
define( 'DB_USER', 'dbo702804293' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mcax5KKJ0G2kEgc' );

/** MySQL hostname */
define( 'DB_HOST', 'db702804293.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's<U~BHY8eR?W9)-L-yL-Ms,sTF~^5=wixu5C(@k!pt^5&Q<B|eARp)KwkVFaVLZ@');
define('SECURE_AUTH_KEY',  'e{iO<x![4]_Bc4;cDdu|we_j[%/xJ;Ly|S656m-Un!K5in,WyXC:[|wA,#&~7Qb|');
define('LOGGED_IN_KEY',    '[B>p(H-e+np1YO +K{6V+@s96+zL.V>.N<|MWD-/NI`afR&TN63O;iXU8c=%!z[O');
define('NONCE_KEY',        'M*}%h4RyGRaw282$G!71VMhf)[Uix5p|y4QybF$Ih3ZL+GFzY*OB+hGb;{[to@@}');
define('AUTH_SALT',        'IGC~Ar.0XgtXRdr+:U7_f:Q{SrR%/!0L]`gV%6SQ!RqBy8ok]bJ;x%[_/W33O5{&');
define('SECURE_AUTH_SALT', '!jJE>S5.n72&)5- u^rOD(sqH*pH+1|Ke_W|L9,Dk`ZEpJ13*VuB5IrF$r^!8wN^');
define('LOGGED_IN_SALT',   'uXKG|kL/aGtz2].cCik`QcgB><@W(04<PmoJ@h3$qs{]S;c-K,U%`aY!k~30{_kR');
define('NONCE_SALT',       '|u|~-L]Hy&N9+o$-+V2!?>%V0v?j]|S7]ndBSX[bRjTO!#p CXCsfv|nU|Vsjq;?');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'acalj4tqvb';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
